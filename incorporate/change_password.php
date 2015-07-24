<?php
include_once 'functions.php';

if(isset($_POST['d'])) {

    $odp = filter_input(INPUT_POST, 'd');

    if(isset($_POST['email'], $_POST['p'], $_POST['code'])) {

        $reqId = $odp;

	   $error_msg = '';
	   $canId = 0;
	   $parId = 0;

	   $code = filter_input(INPUT_POST, 'code');

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">Correo Electronico Invalido</p>';
        }
    
        $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
        if (strlen($password) != 128) {
            // The hashed pwd should be 128 characters long.
            // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Password Invalido, poco seguro!!!.</p>';
        }

        $prep_stmt = "SELECT * 
    			      FROM ohrPassRecover
 				      WHERE PAR_CAN_Mail = :email
 				      AND PAR_Codigo = :code
 				      AND PAR_Estado = :status
 				      LIMIT 1";

        try {
    	   //var_dump("Tratando");
            $db = getConnection();
            $stmt = $db->prepare($prep_stmt);
            $stmt->execute(array(
        	   'email' => $email,
        	   'code' => $code,
        	   'status' => 0,
            ));
            $row_count = $stmt->rowCount();
            $db = null;
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);

            if ($row_count === 1) {
                $canId = $result[0]['PAR_CAN_Id'];
                $parId = $result[0]['PAR_Id'];
            } else {
        	   $error_msg = '<div class="error_register fadeInUp animated"> Error, no ha ingresado los datos correctos </div>';
            }        
        }catch(PDOException $e) {    
            $error_msg = '<div class="error_register fadeInUp animated"> Error de Conexión intente más tarde </div>';
            echo $error_msg;
        }

        //echo "error: " . $error_msg;

        if (empty($error_msg) && $canId > 0) {
            //Pass sha
            $pass_sha = hash('sha512', $password);
            //Create a random salt
            $random_salt = hash('sha512', uniqid(mt_rand(), TRUE));
            //Create salted password 
            $pass_final = hash('sha512', $pass_sha . $random_salt);

            // Edit the user password into the database 

            $sql_update = "UPDATE ohrCandidato
        			    SET CAN_Password = :pass, 
        			    	   CAN_Salt = :salt
        			    WHERE CAN_Id = :canId AND CAN_Mail = :email";

            try {
        	   $db = getConnection();
        	   $stmt2 = $db->prepare($sql_update);
        	   $stmt2->execute(array(
        		  'pass' => $pass_final,
        		  'salt' => $random_salt,
        		  'canId' => $canId,
        		  'email' => $email
        	   ));
        	   $db = null;
        	   //header('Location: ../web/sign-in.php');
        	   //exit();
			 $sql_u_par_id = "UPDATE ohrPassRecover SET PAR_Estado = :status WHERE PAR_Id = :parId";

        	   try {
        		  $db = getConnection();
        		  $stmt2 = $db->prepare($sql_u_par_id);
        		  $stmt2->execute(array(
        		  	'status' => 1,
        		  	'parId' => $parId
        		  ));
        		  $db = null;
        		  header('Location: ../web/sign-in.php');
        		  exit();
        	   } catch(PDOException $e) {
            	   header('Location: ../error.php?err=ChangePassword failure: Set');
            	   exit();
        	   }
            } catch(PDOException $e) {
                header('Location: ../error.php?err=ChangePassword failure: Set');
                exit();
            }
        
        } else {
            $encrypted = encrypt($odp, ENCRYPTION_KEY);
            $crip = urlencode($encrypted);
    	    header('Location: ../web/reg-password.php?odp=' . $crip);
        }
    }

}




<?php
include_once 'db_connect.php';
include_once 'functions.php';
$error_msg = "";
if (isset($_POST['email'], $_POST['p'], $_POST['email_re'], $_POST['username'])) {
    $nombre_usuario = $_POST['username'];

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">Correo Electronico Invalido</p>';
    }

    $email_re = filter_input(INPUT_POST, 'email_re', FILTER_SANITIZE_EMAIL);
    $email_re = filter_var($email_re, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email_re, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">Correo Electronico Invalido</p>';
    }

    if($email !== $email_re) {
        $error_msg .= '<p class="error">Ambos correos deben ser iguales</p>';
         header('Location:sign-up.php?stKey=Failed');
    }

    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Password Invalido, poco seguro!!!.</p>';
    }

    $prep_stmt = "SELECT CAN_Id FROM ohrCandidato WHERE CAN_Mail = :mail LIMIT 1";
    try {
        $db = getConnection();
        $stmt = $db->prepare($prep_stmt); 
        $stmt->bindParam("mail", $email); 
        $stmt->execute();
        $resultado_usuario = $stmt->rowCount();
        $db = null;
        if ($resultado_usuario == 1) {
            // A user with this email address already exists
            $error_msg = '<div class="error_register fadeInUp animated">Upps! Ya existe un usuario registrado con ese correo, contacta al administrador.</div>';
            //echo $error_msg; 
            //header('Location: ../error.php?err=Registration failure');
            header('Location:sign-up.php?stKey=Failed');
        }            
    }catch(PDOException $e) {    
        $error_msg = '<div class="error_register fadeInUp animated"> Error de Conexión intente más tarde </div>';
        //echo $error_msg;
    }

    if (empty($error_msg)) {
        //Pass sha
        $pass_sha = hash('sha512', $password);
         //Create a random salt
        $random_salt = hash('sha512', uniqid(mt_rand(), TRUE));
        //Create salted password 
        $pass_final = hash('sha512', $pass_sha . $random_salt);

        $control_user = 0;
        // Insert the new user into the database 

        $sql_go = "INSERT INTO ohrCandidato (CAN_Nombre, CAN_Mail, CAN_Password, CAN_Salt, CAN_UserControl) 
                   VALUES (:nombre, :mail, :password, :salt, :control)";
        
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql_go);  
            $stmt->bindParam("nombre", $nombre_usuario);
            $stmt->bindParam("mail", $email);
            $stmt->bindParam("password", $pass_final);
            $stmt->bindParam("salt", $random_salt);
            $stmt->bindParam("control", $control_user);
            $stmt->execute();
            $infouser = $db->lastInsertId();
            $db = null;
            
            $encrypted = encrypt($infouser, ENCRYPTION_KEY);
            $crip = urlencode($encrypted);

            $ch = curl_init();
            $devserverlist = array('127.0.0.1','::1','192.168.0.102','localhost');
            $servername = filter_input(INPUT_SERVER, 'SERVER_NAME');

            if(!in_array($servername, $devserverlist)) {
                //curl_setopt($ch, CURLOPT_URL, "http://" . $_SERVER['SERVER_NAME'] . "/api/v1/register/" . $infouser . "/" . $nombre_usuario . "");
                curl_setopt($ch, CURLOPT_URL, "http://" . "ohr.medigraf.com.mx" . "/api/v1/register/" . $infouser . "/" . $nombre_usuario . "");
            } else {
                curl_setopt($ch, CURLOPT_URL, "http://" . "localhost/ohr" . "/api/v1/register/" . $infouser . "/" . $nombre_usuario . "");
            }

            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
            $package_geo = curl_exec($ch);          
            curl_close($ch);
            //echo $package_geo;
            //header('Location:sign-up.php?stKey=Success');
            header('Location: ../');
            exit();
            
        } catch(PDOException $e) {
            //* echo '{"error":{"text":'. $e->getMessage() .'}}';
            header('Location: ../error.php?err=Registration failure: Add');
            exit();
        }
        
    }
}




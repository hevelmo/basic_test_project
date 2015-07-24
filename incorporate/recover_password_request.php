<?php
include_once 'db_connect.php';
include_once 'functions.php';
//include_once 'querytojson.php';

$error_msg = "";
if (isset($_POST['email'])) {
    $canId;
    $email;
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">Correo Electronico Invalido</p>';
    }

    $prep_stmt = "SELECT CAN_Id FROM ohrCandidato WHERE CAN_Mail = :mail LIMIT 1";

    try {

        $db = getConnection();
        $stmt = $db->prepare($prep_stmt); 
        $stmt->bindParam("mail", $email); 
        $stmt->execute();
        $resultado_usuario = $stmt->rowCount();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $db = null;
        if ($resultado_usuario == 1) {
            $canId = $result[0]['CAN_Id'];
            // A user with this email address already exists
            //$error_msg = '<div class="error_register fadeInUp animated">Upps! Ya existe un usuario registrado con ese correo, contacta al administrador.</div>';
            //echo $error_msg; 
            //header('Location: ../error.php?err=Registration failure');
            //header('Location:sign-up.php?stKey=Failed');
        }            
    }catch(PDOException $e) {    
        $error_msg = '<div class="error_register fadeInUp animated"> Error de Conexión intente más tarde </div>';
        echo $error_msg;
    }

    if (isset($canId, $email)) {
        $now = $now = date('o-m-d H:i:s');
        $code = RandomString();
        $status = 0;

        $sql_go = "INSERT INTO ohrPassRecover (PAR_CAN_Id, PAR_CAN_Mail, PAR_Codigo, PAR_FechaSolicitud, PAR_Estado) 
                   VALUES (:canId, :mail, :code, :_date, :status)";
        
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql_go);  
            $stmt->bindParam("canId", $canId);
            $stmt->bindParam("mail", $email);
            $stmt->bindParam("code", $code);
            $stmt->bindParam("_date", $now);
            $stmt->bindParam("status", $status);
            $stmt->execute();
            
            $inforequest = $db->lastInsertId();
            $db = null;

            $ch = curl_init();
            $devserverlist = array('127.0.0.1','::1','192.168.0.102','localhost');
            $servername = filter_input(INPUT_SERVER, 'SERVER_NAME'); 

            if(!in_array($servername, $devserverlist)) {
                //curl_setopt($ch, CURLOPT_URL, "http://" . $_SERVER['SERVER_NAME'] . "/api/v1/password/recover/" . $inforequest . "");
                curl_setopt($ch, CURLOPT_URL, "http://" . "ohr.medigraf.com.mx" . "/api/v1/password/recover/" . $inforequest . "");
            } else {
                curl_setopt($ch, CURLOPT_URL, "http://" . "localhost/ohr" . "/api/v1/password/recover/" . $inforequest . "");
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




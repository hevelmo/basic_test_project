<?php
include_once 'functions.php';
include_once 'queryintojson.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

if(isset($_POST['d'])) {
	$odp = filter_input(INPUT_POST, 'd');
	if (isset($_POST['email'], $_POST['p'])) {
		$canId = $odp;
    	$email = filter_input(INPUT_POST, 'email');
    	$password = filter_input(INPUT_POST, 'p');
   		// The hashed password.
    
    	if (login_activate($email, $password, NULL, $canId) == true) {
        	// Login success 
        	$sql_update = "UPDATE ohrCandidato 
				   		  	SET CAN_UserControl = :new_status 
				   		  	WHERE CAN_Id = :canId AND CAN_UserControl = :status LIMIT 1";
			$params_update = array(
				'canId' => $canId,
				'status' => 0,
				'new_status' => 1
			);

			$result_update = generalQuery(getConnection(), $sql_update, $params_update, 2, PDO::FETCH_ASSOC);
			header("Location: ../candidate");
			die();
    	}  else {
        	// Login failed
        	$encrypted = encrypt($odp, ENCRYPTION_KEY);
        	$crip = urlencode($encrypted);
        	header("Location: ../web/activate.php?odp=" . $crip);
		}
	} 
}


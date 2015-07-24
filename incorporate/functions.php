<?php
/*
 * Copyright (C) 2014 Okuma
 *
 * Sistema de Recursos Humanos Okuma
 * 24 Ags 2014 
 *
 */

include_once 'ohr_con_ini.php';
//include_once 'queryintojson.php';

define("ENCRYPTION_KEY", "au@um2014!00T09");

function getConnection() {
    $dbhost = HOST;
    $dbname = DATABASE;
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

function encrypt($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}

/**
 * Returns decrypted original string
 */
function decrypt($encrypted_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}

function RandomString() {
    $source = "abcdefghijklmnopqrstuvwxyz";
    $source .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $source .= "1234567890";
    $source .= "|@#~$%()=^*+[]{}-_";

    $rstr = "";
    $max  = strlen($source) - 1;
    for($i=1; $i <= 20; $i++) {
        mt_srand((double)microtime() * 1000000);
        $num   = mt_rand(1, $max);
        $rstr .= $source[$num-1];
    }
    
    return $rstr;
}

function sec_session_start_gen() {
    $session_name = 'OHR';   // Set a custom session name
    $secure = SECURE;

    // This stops JavaScript being able to access the session id.
    $httponly = true;

    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=SoloGalletas");
        exit();
    }

    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);

    // Sets the session name to the one set above.
    session_name($session_name);

    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one.
}

function sec_session_start() {
    sec_session_start_gen();
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    $stmt = $mysqli->prepare("SELECT CAN_UserControl FROM ohrCandidato WHERE CAN_Id = ?");

    if ($stmt) {
        $canId = $_SESSION['user_id'];
        $stmt->bind_param('s', $canId);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();

        // get variables from result.
        $stmt->bind_result($user_control);
        $stmt->fetch();

        if ($stmt->num_rows == 1) {
            $user_control = preg_replace("/[^0-9]+/", "", $user_control);
            $_SESSION['user_control'] = $user_control;
        }
    } else {
        // Could not create a prepared statement
        header("Location: ../error.php?err=Database error: cannot prepare statement");
        exit();
    }
}

function sec_session_start_api() {
    sec_session_start_gen();
    if (!isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
        $_SESSION['client_id'] = 0;
        $_SESSION['client_status'] = 0;
    }
}

function login($email, $password, $mysqli) {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    // Using prepared statements means that SQL injection is not possible. 
    $stmt = $mysqli->prepare("SELECT CAN_Id, CAN_Nombre, CAN_ApellidoPaterno, 
                                     CAN_ApellidoMaterno, CAN_Password, CAN_Salt,
                                     CAN_UserControl 
                              FROM ohrCandidato 
                              WHERE CAN_Mail = ?
                              AND CAN_USerControl > 0
                              LIMIT 1");
    if ($stmt) {
        $stmt->bind_param('s', $email);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();

        // get variables from result.
        $stmt->bind_result($user_id, $name, $surname_pat, $surname_mat, $db_password, $salt, $user_control);
        $stmt->fetch();
        
        $pass_sha = hash('sha512', $password);
        $pass_final = hash('sha512', $pass_sha . $salt);
        
        if ($stmt->num_rows == 1) {

            // XSS protection as we might print this value
            $user_id = preg_replace("/[^0-9]+/", "", $user_id); 
            // XSS protection as we might print this value
            $user_control = preg_replace("/[^0-9]+/", "", $user_control);
            // XSS protection as we might print this value
            $name = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $name);
            // XSS protection as we might print this value
            $surname_pat = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $surname_pat);
            // XSS protection as we might print this value
            $surname_mat = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $surname_mat);

            $username = $name . ' ' . $surname_pat . ' ' . $surname_mat;

            // If the user exists we check if the account is locked
            // from too many login attempts 
            if (checkbrute($user_id, $mysqli) == true) {
                // Account is locked 
                // Send an email to user saying their account is locked 
                return false;
            } else {
                // Check if the password in the database matches 
                // the password the user submitted.
                if ($pass_final===$db_password) {
                    // Password is correct!
                    // Get the user-agent string of the user.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];

                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_control'] = $user_control;
                    $_SESSION['username'] = $username;
                    $_SESSION['login_string'] = hash('sha512', $pass_final . $user_browser);

                    // Login successful. 
                    return true;
                } else {
                    // Password is not correct 
                    // We record this attempt in the database 
                    $now = time();
                    if (!$mysqli->query("INSERT INTO ohrAttempts(ATT_CAN_Id, ATT_TimeFail) 
                                         VALUES ('$user_id', '$now')")) {
                        header("Location: ../error.php?err=Database error: login_attempts");
                        exit();
                    }
                    return false;
                }
            }
        } else {
            // No user exists. 
            return false;
        }
        
    } else {
        // Could not create a prepared statement
        header("Location: ../error.php?err=Database error: cannot prepare statement");
        exit();
    }
}

function isActivated($id) {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    $stmt = $mysqli->prepare("SELECT CAN_Id FROM ohrCandidato 
                              WHERE CAN_UserControl > 0 
                              AND CAN_Id = ?
                              LIMIT 1");
     if ($stmt) {
        $stmt->bind_param('s', $id);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
        // get variables from result.
        $stmt->bind_result($id);
        $stmt->fetch();

        return ($stmt->num_rows == 1) ? true : false;
     } else {
        // Could not create a prepared statement
        header("Location: ../error.php?err=Database error: cannot prepare statement");
        exit();
    }
}

function isUsedRequest($id) {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    $stmt = $mysqli->prepare("SELECT PAR_Id FROM ohrPassRecover 
                              WHERE PAR_Estado > 0 
                              AND PAR_Id = ?
                              LIMIT 1");
     if ($stmt) {
        $stmt->bind_param('s', $id);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
        // get variables from result.
        $stmt->bind_result($id);
        $stmt->fetch();

        return ($stmt->num_rows == 1) ? true : false;
     } else {
        // Could not create a prepared statement
        header("Location: ../error.php?err=Database error: cannot prepare statement");
        exit();
    }
}


function login_activate($email, $password, $mysqli, $id) {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

    $sql = "SELECT  * 
            FROM ohrCandidato
            WHERE CAN_Mail = :email
            AND CAN_Id = :id
            AND CAN_USerControl = 0
            LIMIT 1";
    $structure = array(
        'user_id' => 'CAN_Id',
        'name' => 'CAN_Nombre',
        'surname_pat' => 'CAN_ApellidoPaterno',
        'surname_mat' => 'CAN_ApellidoMaterno',
        'db_password' => 'CAN_Password',
        'salt' => 'CAN_Salt',
        'user_control' => 'CAN_UserControl'
    );

    $params = array(
        'email' => $email,
        'id' => $id
    );

    $result = generalQuery(getConnection(), $sql, $params, 0, PDO::FETCH_ASSOC);

    // Using prepared statements means that SQL injection is not possible. 


    if (rightResult($result)) {
        $result_s = restructureRow($result[0], $structure);

        if (count($result_s) > 0) {
            $user_id = $result_s['user_id'];
            $user_control = $result_s['user_control'];
            $name = $result_s['name'];
            $surname_pat = $result_s['surname_pat'];
            $surname_mat = $result_s['surname_mat'];
            $db_password = $result_s['db_password'];
            $salt = $result_s['salt'];

            $pass_sha = hash('sha512', $password);
            $pass_final = hash('sha512', $pass_sha . $salt);

            // XSS protection as we might print this value
            $user_id = preg_replace("/[^0-9]+/", "", $user_id); 
            // XSS protection as we might print this value
            $user_control = preg_replace("/[^0-9]+/", "", $user_control);
            //$user_control++;


            // XSS protection as we might print this value
            $name = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $name);
            // XSS protection as we might print this value
            $surname_pat = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $surname_pat);
            // XSS protection as we might print this value
            $surname_mat = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $surname_mat);

            $username = $name . ' ' . $surname_pat . ' ' . $surname_mat;

            // If the user exists we check if the account is locked
            // from too many login attempts 
            if (checkbrute($user_id, $mysqli) == true) {
                // Account is locked 
                // Send an email to user saying their account is locked 
                return false;
            } else {
                // Check if the password in the database matches 
                // the password the user submitted.
                
                if ($pass_final===$db_password) {
                    
                    // Password is correct!
                    // Get the user-agent string of the user.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];

                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_control'] = $user_control;
                    $_SESSION['username'] = $username;
                    $_SESSION['login_string'] = hash('sha512', $pass_final . $user_browser);
                    
                    //Login successful. 
                    return true;
                } else {
                    // Password is not correct 
                    // We record this attempt in the database 
                    $now = time();
                    if (!$mysqli->query("INSERT INTO ohrAttempts(ATT_CAN_Id, ATT_TimeFail) 
                                         VALUES ('$user_id', '$now')")) {
                        header("Location: ../error.php?err=Database error: login_attempts");
                        exit();
                    }
                    return false;
                }
            }
        } else {
            // No user exists. 
            return false;
        }

    } else {
        // Could not create a prepared statement
        header("Location: ../error.php?err=Database error: cannot prepare statement");
        exit();
    }
   
}

function checkbrute($user_id, $mysqli) {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    // Get timestamp of current time 
    $now = time();

    // All login attempts are counted from the past 2 hours. 
    $valid_attempts = $now - (2 * 60 * 60);
    
    
    $stmt = $mysqli->prepare("SELECT ATT_TimeFail 
                              FROM ohrAttempts 
                              WHERE ATT_CAN_Id = ? AND ATT_TimeFail > '$valid_attempts'");

    if ($stmt) {
        $stmt->bind_param('i', $user_id);

        // Execute the prepared query. 
        $stmt->execute();
        $stmt->store_result();
        // If there have been more than 5 failed logins 
        if ($stmt->num_rows > 5) {
            return true;
        } else {
            return false;
        }
    } else {
        // Could not create a prepared statement
        header("Location: ../error.php?err=Database error: cannot prepare statement");
        exit();
    }
}

function login_check() {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];

        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];

        $stmt = $mysqli->prepare("SELECT CAN_Password 
                                  FROM ohrCandidato 
                                  WHERE CAN_Id = ? LIMIT 1");
        
        if ($stmt) {
            // Bind "$user_id" to parameter. 
            $stmt->bind_param('i', $user_id);
            $stmt->execute();   // Execute the prepared query.
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                // If the user exists get variables from result.
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser);

                if ($login_check == $login_string) {
                    // Logged In!!!! 
                    return true;
                } else {
                    // Not logged in 
                    return false;
                }
            } else {
                // Not logged in 
                return false;
            }
        } else {
            // Could not prepare statement
            header("Location: ../error.php?err=Database error: cannot prepare statement");
            exit();
        }
    } else {
        // Not logged in 
        return false;
    }
}

function user_check() {
     $name_session = session_name();
     $login_string = $_SESSION['login_string'];
     $user_browser = $_SERVER['HTTP_USER_AGENT']; 
     $login_check = hash('sha512', $name_session . $user_browser);
    if ($login_check == $login_string) {
       return true;
    } else {
       return false;
    }
}

function esc_url($url) {

    if ('' == $url) {
        return $url;
    }

    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
    
    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;
    
    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }
    
    $url = str_replace(';//', '://', $url);

    $url = htmlentities($url);
    
    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);

    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}

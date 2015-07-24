<?php


/**
 * These are the database login details
 */  

$devserverlist = array('127.0.0.1','::1','192.168.0.102','localhost');
$servername = filter_input(INPUT_SERVER, 'SERVER_NAME');

if(!in_array($servername, $devserverlist)){
    define("HOST", "localhost");     
    define("USER", "medigraf_ohruser");
    define("PASSWORD", "@irBus2013-Lop2014");
    define("DATABASE", "medigraf_ohrdb");   
} else {
    define("HOST", "localhost");
    define("USER", "master");
    define("PASSWORD", "12345");
    define("DATABASE", "ohr_human");    
}
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!


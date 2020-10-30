<?php

    session_start();
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'standing');
define("BASE_URL", "http://localhost/standing"); // Eg. http://yourwebsite.com


function getDB() 
{
$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass=DB_PASSWORD;
$dbname=DB_DATABASE;
try {
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*foreach($dbConnection->query('SELECT * from citas') as $fila) {
        print_r($fila);}*/
return $dbConnection;
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

}

    /*$mbd = new PDO('mysql:host=localhost;dbname=standing', 'root', '');
    foreach($mbd->query('SELECT * from citas') as $fila) {
        print_r($fila);
    }*/

?>
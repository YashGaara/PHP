<?php 

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'db1';

$CONN = new mysqli($serverName, $userName, $password, $dbName);

if($CONN->connect_error){
    die($CONN->connect_error);
}

?>
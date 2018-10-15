<?php
//Setting up the database connection

$db_host = 'localhost'; //database is install on php server
$db_user = 'audrey'; //name to log into mysql
$db_password = 'southhills#'; //password to login to mysql
$db_name = 'audrey'; //name of the database within mysql
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

?>
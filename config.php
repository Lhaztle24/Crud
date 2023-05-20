<?php

$dbHost = 'localhost';
$dbUser = 'ly';
$dbPassword = 'abc123';
$dbName = 'users';


$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
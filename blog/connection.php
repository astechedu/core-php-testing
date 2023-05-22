<?php

$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "php";

// Create connection
$conn = new mysqli($hostname, $username, $password,$databasename);
// Check connection
if (!$conn) {
    die("Unable to Connect database: " . $conn->connect_error());
}
?>
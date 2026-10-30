<?php
$server   = "127.0.0.1";
$username = "root";
$password = "";           // change this if your MySQL root has a password
$database = "hospital_db";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Database connected successfully";
?>

<?php

$servername = "localhost";
$database="shop";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
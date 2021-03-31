<?php
	error_reporting(E_ALL & ~E_NOTICE);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "qlbanhang";

// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

// Check connection
	if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>


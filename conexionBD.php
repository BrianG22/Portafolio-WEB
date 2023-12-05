<?php
$servername = "localhost";
$username = "userweb";
$password "12345";
$dbname "tallerweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
<?php
$servername = "your_server_name";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

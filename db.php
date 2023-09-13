<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lps-cms";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Now you can use $conn to execute database queries
?>
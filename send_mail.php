<?php
include('db.php');
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$currentDateTime = date('Y-m-d H:i:s');
// Combine the subject and message
$combinedText = "<strong>($subject):</strong> $message";

// SQL query to insert the data into a table
$sql = "INSERT INTO lps_querys (username, email, query,created_at,updated_at) VALUES ('$name', '$email', '$combinedText','$currentDateTime','$currentDateTime')";

// Execute the statement
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Message sent successfully!");</script>';
    echo '<script>window.location.href = "index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
<?php
session_start();

include 'db.php';
// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];
$registration_year = $_POST['registration_year'];

// Sanitize inputs to prevent SQL injection (optional but recommended)
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

$tableName = "registration_" . $registration_year;
$sql = "SELECT * FROM  $tableName WHERE username='$username' AND password='$password'";  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, redirect to dashboard or another page
    session_start();
    $_SESSION['username'] = $username;
    header("Location: student.php"); // Redirect to dashboard
} else {
    // User does not exist or incorrect credentials
    echo "Invalid username or password";
}

$conn->close();
?>
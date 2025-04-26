<?php
session_start();

include 'db.php';
// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Sanitize inputs to prevent SQL injection (optional but recommended)
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

// Query to check if the user exists
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, redirect to dashboard or another page
    session_start();
    $_SESSION['username'] = $username;
    header("Location: admindasboard.php "); // Redirect to dashboard
} else {
    $msg="username and/or password incorrect";
    echo "<script type='text/javascript'>alert('$msg');</script> ";
}

$conn->close();
?>
</body>
</html>
n
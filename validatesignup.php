<?php
include 'db.php';
// Check if username and roll number are unique
$username = $_POST['username'];
$roll_no = $_POST['roll_no'];

// Perform database query to check uniqueness
// Assume $dbh is the database connection

// Check if username exists
$stmt = $dbh->prepare("SELECT * FROM students_registration WHERE username = ?");
$stmt->execute([$username]);
if ($stmt->rowCount() > 0) {
    echo "Username already exists.";
    exit;
}

// Check if roll number exists
$stmt = $dbh->prepare("SELECT * FROM students_registration WHERE roll_no = ?");
$stmt->execute([$rollNumber]);
if ($stmt->rowCount() > 0) {
    echo "Roll number already exists.";
    exit;
}

echo "valid"; // Input is valid
?>

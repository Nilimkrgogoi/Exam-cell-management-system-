<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Include database connection details (assuming db.php exists in the same directory)
  include "db.php";

  // Retrieve form data (ensure proper validation and sanitization)
  $fullname = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_STRING);
  $roll_no = filter_input(INPUT_POST, "roll_no", FILTER_SANITIZE_STRING);
  $department = filter_input(INPUT_POST, "department", FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
  $registration = filter_input(INPUT_POST, "registration", FILTER_SANITIZE_STRING);
  $registration_year = filter_input(INPUT_POST, "registration_year", FILTER_VALIDATE_INT, [
    "options" => ["min_range" => 1900, "max_range" => 2099]
  ]);

  // Check if all required fields are filled
  if (!$fullname || !$roll_no || !$department || !$email || !$phone || !$registration || !$registration_year) {
    echo "<p>Invalid input. Please go back and ensure all fields are filled correctly.</p>";
    exit;
  }

  // Construct the SQL query with parameterized statements for security
  $tableName = "registration_" . $registration_year; // Assuming table name pattern is registration_<year>
  $sql = "INSERT INTO $tableName (name, roll_no, department, email, phone, registration_no) VALUES (?, ?, ?, ?, ?, ?)";

  // Prepare and execute the SQL statement to prevent SQL injection
  $stmt = $conn->prepare($sql);
  if ($stmt === false) {
    echo "<p>Unable to prepare statement: " . htmlspecialchars($conn->error) . "</p>";
    exit;
  }

  $stmt->bind_param("ssssss", $fullname, $roll_no, $department, $email, $phone, $registration);
  $stmt->execute();

  if ($stmt->affected_rows > 0) {
    echo "<p>Registration successful!</p>";
  } else {
    echo "<p>Registration failed. Please try again.</p>";
  }

  // Close the prepared statement and database connection
  $stmt->close();
  if ($conn) { // Assuming connection is established in db.php
    $conn->close();
  }
} else {
  // Display a message or redirect to an appropriate page if not a POST request
  echo "<p>Invalid request method. Please submit the form using a POST request.</p>";
}
?>

<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection details (assuming db.php exists in the same directory)
    include "db.php";
    
    // Retrieve form data (ensure proper validation and sanitization)
    $studentName = filter_input(INPUT_POST, "studentName", FILTER_SANITIZE_STRING);
    $rollNo = filter_input(INPUT_POST, "rollNo", FILTER_SANITIZE_STRING);
    $currentDepartment = filter_input(INPUT_POST, "currentdepartment", FILTER_SANITIZE_STRING);
    $newDepartment = filter_input(INPUT_POST, "newdepartment", FILTER_SANITIZE_STRING);
    
    // Validate form data (add additional validation as needed)
    if (!$studentName || !$rollNo || !$currentDepartment || !$newDepartment) {
        echo "<p>Invalid input. Please fill in all fields.</p>";
        exit;
    }
    
    // Perform database update operation to transfer branch
    $sql = "UPDATE students SET department = ? WHERE roll_no = ?";
    
    // Prepare and execute the SQL statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "<p>Unable to prepare statement: " . htmlspecialchars($conn->error) . "</p>";
        exit;
    }
    
    $stmt->bind_param("ss", $newDepartment, $rollNo);
    
    if ($stmt->execute()) {
        echo "<p>Branch transfer successful for student: $studentName (Roll No: $rollNo).</p>";
    } else {
        echo "<p>Error updating record: " . htmlspecialchars($stmt->error) . "</p>";
    }
    
    // Close the prepared statement and database connection (if applicable)
    $stmt->close();
    if ($conn) { // Assuming connection is established in db.php
        $conn->close();
    }
} else {
    // Display a message or redirect if the form was not submitted via POST
    echo "<p>Invalid request method. Please submit the form using POST.</p>";
}
?>

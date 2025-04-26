<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $roll_no = $_POST["roll_no"];
    $department = $_POST["department"];
    $semester = $_POST["semester"];
    $result = $_POST["result"];
    include"db.php";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO exam_results (name, roll_no, department, semester, result) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $roll_no, $department, $semester, $result);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Exam results stored successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

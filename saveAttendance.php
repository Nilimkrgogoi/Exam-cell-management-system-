<?php
// Include database connection
include 'db.php'; // Ensure this file contains the correct DB connection details

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $department = $_POST['department'];
    $semester = $_POST['semester'];

    foreach ($_POST['attendance_percentage'] as $roll_no => $subjects) {
        $columns = [];
        $values = [];

        foreach ($subjects as $subject => $percentage) {
            $columns[] = "{$subject}_percentage";
            $values[] = $percentage;
        }

        $columns = implode(", ", $columns);
        $values = implode(", ", array_map(function($value) use ($conn) {
            return "'" . $conn->real_escape_string($value) . "'";
        }, $values));

        $status = $_POST['status'][$roll_no];

        $sql = "INSERT INTO attendance (roll_no, department, semester, $columns, status) 
                VALUES ('$roll_no', '$department', '$semester', $values, '$status')";

        if ($conn->query($sql) === TRUE) {
            echo "Attendance record added successfully for Roll No: $roll_no<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
        }
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>

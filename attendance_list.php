<?php
// Assuming you have a database connection established in db.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs (you can use more secure methods depending on your requirements)
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];

    // Validate inputs (add more validation if needed)
    if (empty($department) || empty($semester) || empty($subject)) {
        die("Please select department, semester, and subject.");
    }

    // Assuming your database connection is in db.php
    include 'db.php';

    // Prepare SQL query to fetch students for the selected semester and subject
    $query = "SELECT * FROM students WHERE department = '$department' AND semester = '$semester' AND subject = '$subject'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Display the list of students with a form to add attendance
        echo "<h2>Students List for $semester, $subject</h2>";
        echo "<form action='add_attendance.php' method='POST'>";
        echo "<table>";
        echo "<tr><th>Roll No</th><th>Name</th><th>Attendance (%)</th><th>Status</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['roll_number']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td><input type='text' name='attendance[".$row['roll_number']."][percentage]' placeholder='Enter %'></td>";
            echo "<td><input type='text' name='attendance[".$row['roll_number']."][status]' placeholder='Present/Absent'></td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<input type='hidden' name='department' value='$department'>";
        echo "<input type='hidden' name='semester' value='$semester'>";
        echo "<input type='hidden' name='subject' value='$subject'>";
        echo "<button type='submit'>Submit Attendance</button>";
        echo "</form>";
    } else {
        echo "No students found for $semester, $subject.";
    }

    $conn->close();
} else {
    // Redirect back to the form page if accessed directly without POST data
    header("Location: attendance_form.html");
    exit();
}
?>

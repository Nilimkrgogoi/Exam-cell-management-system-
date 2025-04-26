<?php
include 'db.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $students = $_POST['students'];
  $department = $_POST['department'];
  $semester = $_POST['semester'];
  $new_semester = $_POST['new_semester'];

  foreach ($students as $roll_no) {
    $selectedSemester = $new_semester[$roll_no];

    // Check the current semester of the student
    $checkSemesterSql = "SELECT semester FROM students WHERE roll_no = '$roll_no' AND department = '$department'";
    $result = $conn->query($checkSemesterSql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $currentSemester = $row['semester']; {
        // Update the student's semester
        $sql = "UPDATE students SET semester = '$selectedSemester' WHERE roll_no = '$roll_no'";
        if ($conn->query($sql) === TRUE) {
          echo "Semester updated successfully for roll no: $roll_no<br>";
        } else {
          echo "Error updating record for roll no: $roll_no: " . $conn->error . "<br>";
        }
      }
    }
  }
}

$conn->close();
?>

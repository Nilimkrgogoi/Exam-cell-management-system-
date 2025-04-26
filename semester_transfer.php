<?php
include 'db.php'; // Include your database connection file

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $department = $_POST['department'];
  $semester = $_POST['semester'];

  $sql = "SELECT name, roll_no, semester FROM students WHERE department = '$department' AND semester = '$semester'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<html>";
    echo "<head>";
    echo "<style>";
    echo "body { font-family: Arial, sans-serif; background-color: #f4f4f9; }";
    echo "table { width: 100%; border-collapse: collapse; margin: 20px 0; font-size: 1em; min-width: 400px; border-radius: 5px; overflow: hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); }";
    echo "table th, table td { padding: 12px 15px; text-align: left; }";
    echo "table th { background-color: #009879; color: #ffffff; font-weight: bold; }";
    echo "table tr:nth-child(even) { background-color: #f3f3f3; }";
    echo "table tr:last-child { border-bottom: 2px solid #009879; }";
    echo "table tr:hover { background-color: #f1f1f1; }";
    echo "table th, table td { border-bottom: 1px solid #dddddd; }";
    echo "form { margin: 20px 0; }";
    echo "form button { background-color: #009879; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 4px; transition: background-color 0.3s; }";
    echo "form button:hover { background-color: #007a5f; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    echo "<form action='process_semester_transfer.php' method='post'>";
    echo "<input type='hidden' name='department' value='$department'>";
    echo "<input type='hidden' name='semester' value='$semester'>";
    echo "<table>";
    echo "<tr><th>Select</th><th>Roll No</th><th>Name</th><th>Current Semester</th><th>New Semester</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td><input type='checkbox' name='students[]' value='" . $row['roll_no'] . "'></td>";
      echo "<td>" . $row['roll_no'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['semester'] . "</td>";
      echo "<td><select name='new_semester[" . $row['roll_no'] . "]'>";
      echo "<option value='1'>Semester 1</option>";
      echo "<option value='2'>Semester 2</option>";
      echo "<option value='3'>Semester 3</option>";
      echo "<option value='4'>Semester 4</option>";
      echo "<option value='5'>Semester 5</option>";
      echo "<option value='6'>Semester 6</option>";
      echo "<option value='alumni'>Alumni</option>";
      echo "</select></td>";
      echo "</tr>";
    }
    
    echo "</table>";
    echo "<button type='submit'>Submit</button>";
    echo "</form>";

    echo "</body>";
    echo "</html>";

  } else {
    echo "No students found for the selected department and semester.";
  }
}

$conn->close();
?>

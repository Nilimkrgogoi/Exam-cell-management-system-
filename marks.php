<?php
// Assuming connection to database is established here
$connection = mysqli_connect('localhost', 'root', '', 'nalpo');

if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

// Function to fetch subjects based on department and semester
function getSubjects($department, $semester) {
  switch ($department) {
    case 'CSE':
      return getCSESubjects($semester);
    case 'PT':
      return getPTSubjects($semester);
    case 'EE':
      return getEESubjects($semester);
    default:
      return [];
  }
}

// Function to get subjects for CSE department
function getCSESubjects($semester) {
  switch ($semester) {
    case '1':
      return [
        ['name' => 'English', 'total' => 100],
        ['name' => 'Physics', 'total' => 100],
        ['name' => 'Chemistry', 'total' => 100],
        ['name' => 'Mathematics', 'total' => 100],
        ['name' => 'Engineering Drawing', 'total' => 100],
        ['name' => 'Workshop', 'total' => 100]
      ];
    case '2':
      return [
        ['name' => 'English', 'total' => 100],
        ['name' => 'Physics', 'total' => 100],
        ['name' => 'Chemistry', 'total' => 100],
        ['name' => 'Mathematics', 'total' => 100],
        ['name' => 'Engineering Mechanics', 'total' => 100],
        ['name' => 'Workshop', 'total' => 100]
      ];
    case '3':
      return [
        ['name' => 'Computer Application and Programming', 'total' => 150],
        ['name' => 'Elements of Multimedia', 'total' => 150],
        ['name' => 'Computer Architecture and Organisation', 'total' => 150],
        ['name' => 'Mathematics', 'total' => 150],
        ['name' => 'Elements of Electrical Engineering', 'total' => 150]
      ];
    case '4':
      return [
        ['name' => 'Data Structure', 'total' => 150],
        ['name' => 'System Programming', 'total' => 150],
        ['name' => 'MP & Interfacing', 'total' => 150],
        ['name' => 'Advanced C & C++', 'total' => 150],
        ['name' => 'Computer Hardware and Networking', 'total' => 150],
        ['name' => 'Digital Electronics', 'total' => 150]
      ];
    case '5':
      return [
        ['name' => 'Database Management System', 'total' => 150],
        ['name' => 'Internet & Web Technology', 'total' => 150],
        ['name' => 'Computer Communication & Networking', 'total' => 150],
        ['name' => 'Java Programming', 'total' => 150],
        ['name' => 'Operating System', 'total' => 150],
        ['name' => 'Visual Programming', 'total' => 150]
      ];
    case '6':
      return [
        ['name' => 'Industrial Management & Entrepreneurship', 'total' => 150],
        ['name' => 'Cryptography and Network Security', 'total' => 150],
        ['name' => 'Mobile Computing', 'total' => 150],
        ['name' => 'Artificial Intelligence', 'total' => 150],
        ['name' => 'Software Engineering', 'total' => 150]
      ];
    default:
      return [];
  }
}

// Function to get subjects for PT department
function getPTSubjects($semester) {
  switch ($semester) {
    case '1':
      return [
        ['name' => 'English', 'total' => 100],
        ['name' => 'Physics', 'total' => 100],
        ['name' => 'Chemistry', 'total' => 100],
        ['name' => 'Mathematics', 'total' => 100],
        ['name' => 'Engineering Drawing', 'total' => 100],
        ['name' => 'Workshop', 'total' => 100]
      ];
    case '2':
      return [
        ['name' => 'English', 'total' => 100],
        ['name' => 'Physics', 'total' => 100],
        ['name' => 'Chemistry', 'total' => 100],
        ['name' => 'Mathematics', 'total' => 100],
        ['name' => 'Engineering Mechanics', 'total' => 100],
        ['name' => 'Workshop', 'total' => 100]
      ];
    case '3':
      return [
        ['name' => 'Computer Application & Programming', 'total' => 150],
        ['name' => 'Engineering Economics & Accountancy', 'total' => 150],
        ['name' => 'Element of Electrical Engineering', 'total' => 150],
        ['name' => 'Printing Process', 'total' => 150],
        ['name' => 'Element of Electronics Engineering', 'total' => 150],
        ['name' => 'Prepress Repro Technique', 'total' => 150]
      ];
    case '4':
      return [
        ['name' => 'Visual Design & DTP', 'total' => 150],
        ['name' => 'Image Processing', 'total' => 150],
        ['name' => 'Printers Material Science-I', 'total' => 150],
        ['name' => 'Gravure Flexography & Screen Printing', 'total' => 150],
        ['name' => 'Typesetting & Composition', 'total' => 150],
        ['name' => 'Theory of Machines', 'total' => 150]
      ];
    case '5':
      return [
        ['name' => 'Digital Prepress', 'total' => 150],
        ['name' => 'Offset Printing Technology', 'total' => 150],
        ['name' => 'Printers Material Science-II', 'total' => 150],
        ['name' => 'Planographic Printing Technique-I', 'total' => 150],
        ['name' => 'Press Work', 'total' => 150],
        ['name' => 'Printing Machine Maintenance', 'total' => 150]
      ];
    case '6':
      return [
        ['name' => 'Industrial Management & Entrepreneurship', 'total' => 150],
        ['name' => 'Binding and Finishing', 'total' => 150],
        ['name' => 'Estimating and Costing', 'total' => 150],
        ['name' => 'Planographic Printing Technique-II', 'total' => 150],
        ['name' => 'Machine Learning', 'total' => 150]
      ];
    default:
      return [];
  }
}

// Function to get subjects for EE department
function getEESubjects($semester) {
  switch ($semester) {
    case '1':
      return [
        ['name' => 'English', 'total' => 100],
        ['name' => 'Physics', 'total' => 100],
        ['name' => 'Chemistry', 'total' => 100],
        ['name' => 'Mathematics', 'total' => 100],
        ['name' => 'Engineering Drawing', 'total' => 100],
        ['name' => 'Workshop', 'total' => 100]
      ];
    case '2':
      return [
        ['name' => 'English', 'total' => 100],
        ['name' => 'Physics', 'total' => 100],
        ['name' => 'Chemistry', 'total' => 100],
        ['name' => 'Mathematics', 'total' => 100],
        ['name' => 'Engineering Mechanics', 'total' => 100],
        ['name' => 'Workshop', 'total' => 100]
      ];
    case '3':
      return [
        ['name' => 'Computer Application & Programming', 'total' => 150],
        ['name' => 'Engineering Economics & Accountancy', 'total' => 150],
        ['name' => 'Principles of Electrical Engineering', 'total' => 150],
        ['name' => 'Elements of Mechanical Engineering', 'total' => 150],
        ['name' => 'Elements of Electronics & Devices', 'total' => 150],
        ['name' => 'Mathematics', 'total' => 150]
      ];
    case '4':
      return [
        ['name' => 'Electrical Circuit & Network', 'total' => 150],
        ['name' => 'Electrical & Electronics Drawing & Design', 'total' => 150],
        ['name' => 'Electrical Measurement & Measuring Instrument-I', 'total' => 150],
        ['name' => 'Electrical Machines-I', 'total' => 150],
        ['name' => 'Electrical Engineering Material', 'total' => 150],
        ['name' => 'Digital Electronics', 'total' => 150]
      ];
    case '5':
      return [
        ['name' => 'Electrical Machine-II', 'total' => 150],
        ['name' => 'Electrical Measurement & Measuring Instrument-II', 'total' => 150],
        ['name' => 'Electrical Power', 'total' => 150],
        ['name' => 'Microprocessor', 'total' => 150],
        ['name' => 'Control System', 'total' => 150],
        ['name' => 'Non-Conventional Energy Sources', 'total' => 150]
      ];
    case '6':
      return [
        ['name' => 'Industrial Management & Entrepreneurship', 'total' => 150],
        ['name' => 'Installation and Maintenance', 'total' => 150],
        ['name' => 'Electrical Estimating and Contracting', 'total' => 150],
        ['name' => 'AC Distribution and Utilisation', 'total' => 150],
        ['name' => 'Switchgear and Protection', 'total' => 150]
      ];
    default:
      return [];
  }
}

// Fetch submitted department and semester
if (isset($_POST['department']) && isset($_POST['semester'])) {
  $department = $_POST['department'];
  $semester = $_POST['semester'];

  // Example SQL query to fetch roll numbers based on department and semester
  $query = "SELECT roll_no FROM students WHERE department = '$department' AND semester = '$semester'";
  $result = mysqli_query($connection, $query);

  if ($result) {
    // Fetch subjects based on department and semester
    $subjects = getSubjects($department, $semester);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mark Entry - Nalbari Polytechnic</title>
  <style>
    /* Reset some default browser styles */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  padding: 20px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

form {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
  margin-right: 10px;
}

select {
  padding: 8px;
  font-size: 16px;
  width: 200px;
  margin-bottom: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table th, table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

table th {
  background-color: #f2f2f2;
  font-weight: bold;
}

table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

input[type="number"], input[type="text"] {
  width: 100%;
  padding: 8px;
  font-size: 14px;
  border: 1px solid #ccc;
}

input[type="number"]:disabled {
  background-color: #f2f2f2;
}

button[type="submit"] {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 4px;
  margin-top: 10px;
}

button[type="submit"]:hover {
  background-color: #45a049;
}
  </style>
  <script>
    function calculateResults() {
      var rows = document.getElementById('subjectsTable').getElementsByTagName('tr');
      for (var i = 0; i < rows.length; i++) {
        var ese = parseInt(rows[i].querySelector('input[name="eseObtained"]').value) || 0;
        var sessionals = parseInt(rows[i].querySelector('input[name="sessionalsObtained"]').value) || 0;
        var pa = parseInt(rows[i].querySelector('input[name="paObtained"]').value) || 0;
        var pt = parseInt(rows[i].querySelector('input[name="ptObtained"]').value) || 0;
        
        var totalMarks = ese + sessionals + pa + pt;
        var totalMax = parseInt(rows[i].querySelector('input[name="total"]').value);

        if (totalMarks > totalMax) {
          alert('Marks obtained cannot exceed total marks (' + totalMax + ') for ' + rows[i].querySelector('input[name="subject"]').value);
          return false;
        }

        rows[i].querySelector('input[name="marks"]').value = totalMarks;

        var result = totalMarks >= 50 ? 'Pass' : 'Fail';
        rows[i].querySelector('input[name="result"]').value = result;
      }
    }
    function validateMarks() {
      // Validate marks input before submitting
      var rows = document.getElementById('subjectsTable').getElementsByTagName('tr');
      for (var i = 0; i < rows.length; i++) {
        var ese = parseInt(rows[i].querySelector('input[name="eseObtained"]').value) || 0;
        var sessionals = parseInt(rows[i].querySelector('input[name="sessionalsObtained"]').value) || 0;
        var pa = parseInt(rows[i].querySelector('input[name="paObtained"]').value) || 0;
        var pt = parseInt(rows[i].querySelector('input[name="ptObtained"]').value) || 0;
        var total = parseInt(rows[i].querySelector('input[name="total"]').value);

        // Ensure obtained marks are less than or equal to total marks
        if (ese > total || sessionals > 30 || pa > 25 || pt > 25) {
          alert('Please enter valid marks within the specified range.');
          return false;
        }
      }
      return true;
    }
  </script>
</head>
<body>
  <h1>Mark Entry - Nalbari Polytechnic</h1>

  <div class="container">
    <form id="marksEntryForm" action="submit_marks.php" method="POST" onsubmit="return validateMarks()">
      <label for="roll_no">Select Roll Number:</label>
      <select id="roll_no" name="roll_no">
        <option value="">Select Roll no :</option>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <option value="<?php echo htmlspecialchars($row['roll_no']); ?>"><?php echo htmlspecialchars($row['roll_no']); ?></option>
        <?php } ?>
      </select>
      <input type="hidden" name="department" value="<?php echo htmlspecialchars($department); ?>">
      <input type="hidden" name="semester" value="<?php echo htmlspecialchars($semester); ?>">
      <table>
        <thead>
          <tr>
            <th rowspan="2">Subject</th>
            <th colspan="2">Theory (TH)</th>
            <th colspan="2">Practical</th>
            <th rowspan="2">Total Marks (TH+PR)</th>
            <th rowspan="2">Marks Obtained</th>
            <th rowspan="2">Result</th>
          </tr>
          <tr>
            <th>ESE</th>
            <th>Sessionals (SS)</th>
            <th>PA</th>
            <th>PT</th>
          </tr>
        </thead>
        <tbody id="subjectsTable">
          <?php foreach ($subjects as $subject) { ?>
            <tr>
              <td><input type="text" name="subject" value="<?php echo htmlspecialchars($subject['name']); ?>" readonly></td>
              <td><input type="number" name="eseObtained" min="0" max="<?php echo $subject['total']; ?>" oninput="calculateResults()"></td>
              <td><input type="number" name="sessionalsObtained" min="0" max="30" oninput="calculateResults()"></td>
              <td><input type="number" name="paObtained" min="0" max="25" oninput="calculateResults()"></td>
              <td><input type="number" name="ptObtained" min="0" max="25" oninput="calculateResults()"></td>
              <td><input type="number" name="total" value="<?php echo $subject['total']; ?>" readonly></td>
              <td><input type="number" name="marks" readonly></td>
              <td><input type="text" name="result" readonly></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <button type="submit">Submit Marks</button>
    </form>
  </div>
</body>
</html>
<?php
  } else {
    // Handle error if query fails
    echo "Error: " . mysqli_error($connection);
  }

} else {
  // Handle case where department and semester are not submitted properly
  echo "Please select a department and semester.";
}

// Close database connection
mysqli_close($connection);
?>

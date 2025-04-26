<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Nalbari Polytechnic</title>
  <link rel="stylesheet" type="text/css" href="Nalpo.css">
</head>
<style>
   * {
    margin: 0;
    padding: 0;
}
#logo {
    position: absolute;
    top: 10px;
    left: 10px;
}
h1{
    text-align: center;
    padding: 0%;
    color: red;
    font-weight: lighter;
}
h2{
    text-align: center;
    padding: 0%;
    color: #003366;
}
h5{
    text-align: center;
    padding: 0%;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #333;
    line-height: 1.6;
}
#logo {
    position: absolute;
    top: 10px;
    left: 10px;
}
 

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #333;
    line-height: 1.6;
}
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    color: white;
  }
  .navbar {
    justify-content: center;
    align-items: start; 
    text-align: left;
    
  }  
  .navbar ul li {
    display: inline-block;
    list-style: none;
  }

.navbar ul li a {
    text-decoration: none;
  }
    
    li a, .dropbtn {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover, .dropdown:hover .dropbtn {
      background-color: red;
    }
    
    li.dropdown {
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #333;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .dropdown-content a:hover {background-color: red;}
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    </style>
<body>    
    <h1>Nalbari Polytechnic,Chandkuchi</h1>
    <h2>নলবাৰী পলিটেক্‌নিক্‌,চান্দকুছি</h2>
    <h5>(a govt. of assam institute)</h5>
    <img src="http://www.nalbaripolytechnic.in/images/logo.png" alt="College Logo" id="logo" height="100px">
    <div class="navbar">
        <ul>
            <li><a href="admindasboard.php">Home</a></li>
            <li><a href="exam_form.php">Exam</a></li>
            <li><a href="marks.php">Add Marks</a></li>
            <li><a href="attendance_admin.html">Add Attendance</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">View NC/DC </a>
              <div class="dropdown-content">
              <a href="cse.html">Computer Science & Engineering </a>
              <a href="el.html">Electrical Engineering</a>
              <a href="pt.html">Printing Technology</a>
              </div>
            </li>
            <li><a href="studentsignup.php">Add Student</a></li>
            <li><a href="invigilator.php">Manage Invigilators</a></li>
            <li><a href="manage-students.php">Manage Students</a></li>
            <li><a href="seat_allocation.html">Seat Allocation</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Analytics and Reporting</a>
              <div class="dropdown-content">
              <a href="marksheet.html">View Marks</a>
              <a href="clear_retest.html">Clear/Retest</a>
              </div>
            </li>
            <li><a href="logout.php">logout</a></li>
        </li> 
        </ul>
    </div>
  <br>
  <div class="dropdowns">
    <label for="branch">Select Branch:</label>
    <select id="branch" name="branch" onchange="updateSemesterOptions()">
      <option value="">Select Department:</option>
      <option value="CSE">Computer Science & Engineering</option>
      <option value="PT">Printing Technology</option>
      <option value="EE">Electrical Engineering</option>
    </select>

    <label for="semester">Select Semester:</label>
    <select id="semester" name="semester" onchange="fetchRollNumbers()">
      <option value="">Select</option>
      <option value="1st">1st</option>
      <option value="2nd">2nd</option>
      <option value="3rd">3rd</option>
      <option value="4th">4th</option>
      <option value="5th">5th</option>
      <option value="6th">6th</option>
    </select>

    <label for="rollNumber">Select Roll No:</label>
    <select id="rollNumber" name="rollNumber" style="display: none;" onchange="showMarksForm()">
      <option value="">Select Roll Number</option>
    </select>
  </div>

  <!-- Marks Entry Form -->
  <form id="marksForm" action="submit_marks.php" method="post" style="display: none;">
    <input type="hidden" name="rollNumber" id="selectedRollNumber">
    <table>
      <thead>
        <tr>
          <th rowspan="2">Subject Code</th>
          <th rowspan="2">Subject</th>
          <th colspan="6">Theory</th>
          <th colspan="3">Practical</th>
          <th rowspan="2">Total Marks (TH+PR)</th>
        </tr>
        <tr>
          <th>ESE</th>
          <th>TA</th>
          <th>HA</th>
          <th>Sessionals (SS)</th>
          <th>Total (TA+HA)</th>
          <th>Pass (ESE+SS)</th>
          <th>PA</th>
          <th>PT</th>
          <th>Pass (PA+PT)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>HU-101</td>
          <td>Communication In English-I</td>
          <td><input type="number" name="hu101_ese" class="theory"></td>
          <td><input type="number" name="hu101_ta" class="theory"></td>
          <td><input type="number" name="hu101_ha" class="theory"></td>
          <td><input type="number" name="hu101_ss" class="theory"></td>
          <td><input type="number" name="hu101_total_th" readonly></td>
          <td><input type="number" name="hu101_pass_th" readonly></td>
          <td><input type="number" name="hu101_pa" class="practical"></td>
          <td><input type="number" name="hu101_pt" class="practical"></td>
          <td><input type="number" name="hu101_pass_pr" readonly></td>
          <td><input type="number" name="hu101_total" readonly></td>
        </tr>
        <tr>
          <td>Sc-102</td>
          <td>Mathematics-1</td>
          <td><input type="number" name="sc102_ese" class="theory"></td>
          <td><input type="number" name="sc102_ta" class="theory"></td>
          <td><input type="number" name="sc102_ha" class="theory"></td>
          <td><input type="number" name="sc102_ss" class="theory"></td>
          <td><input type="number" name="sc102_total_th" readonly></td>
          <td><input type="number" name="sc102_pass_th" readonly></td>
          <td><input type="number" name="sc102_pa" class="practical"></td>
          <td><input type="number" name="sc102_pt" class="practical"></td>
          <td><input type="number" name="sc102_pass_pr" readonly></td>
          <td><input type="number" name="sc102_total" readonly></td>
        </tr>
        <tr>
          <td>Sc-103</td>
          <td>Chemistry-1</td>
          <td><input type="number" name="sc103_ese" class="theory"></td>
          <td><input type="number" name="sc103_ta" class="theory"></td>
          <td><input type="number" name="sc103_ha" class="theory"></td>
          <td><input type="number" name="sc103_ss" class="theory"></td>
          <td><input type="number" name="sc103_total_th" readonly></td>
          <td><input type="number" name="sc103_pass_th" readonly></td>
          <td><input type="number" name="sc103_pa" class="practical"></td>
          <td><input type="number" name="sc103_pt" class="practical"></td>
          <td><input type="number" name="sc103_pass_pr" readonly></td>
          <td><input type="number" name="sc103_total" readonly></td>
        </tr>
        <tr>
          <td>Sc-104</td>
          <td>Physics-1</td>
          <td><input type="number" name="sc104_ese" class="theory"></td>
          <td><input type="number" name="sc104_ta" class="theory"></td>
          <td><input type="number" name="sc104_ha" class="theory"></td>
          <td><input type="number" name="sc104_ss" class="theory"></td>
          <td><input type="number" name="sc104_total_th" readonly></td>
          <td><input type="number" name="sc104_pass_th" readonly></td>
          <td><input type="number" name="sc104_pa" class="practical"></td>
          <td><input type="number" name="sc104_pt" class="practical"></td>
          <td><input type="number" name="sc104_pass_pr" readonly></td>
          <td><input type="number" name="sc104_total" readonly></td>
        </tr>
        <tr>
          <td>Sc-105</td>
          <td>Computer Fundamentals</td>
          <td><input type="number" name="sc105_ese" class="theory"></td>
          <td><input type="number" name="sc105_ta" class="theory"></td>
          <td><input type="number" name="sc105_ha" class="theory"></td>
          <td><input type="number" name="sc105_ss" class="theory"></td>
          <td><input type="number" name="sc105_total_th" readonly></td>
          <td><input type="number" name="sc105_pass_th" readonly></td>
          <td><input type="number" name="sc105_pa" class="practical"></td>
          <td><input type="number" name="sc105_pt" class="practical"></td>
          <td><input type="number" name="sc105_pass_pr" readonly></td>
          <td><input type="number" name="sc105_total" readonly></td>
        </tr>
      </tbody>
    </table>
    <br>
    <input type="submit" value="Submit">
  </form>

  <script>
    function updateSemesterOptions() {
      const branch = document.getElementById('branch').value;
      const semesterSelect = document.getElementById('semester');
      semesterSelect.style.display = branch ? 'block' : 'none';
      fetchRollNumbers(); // Ensure roll numbers are updated when branch changes
    }

    function fetchRollNumbers() {
      const branch = document.getElementById('branch').value;
      const semester = document.getElementById('semester').value;
      const rollNumberSelect = document.getElementById('rollNumber');
      rollNumberSelect.style.display = branch && semester ? 'block' : 'none';

      // Clear existing options
      rollNumberSelect.innerHTML = '<option value="">Select Roll Number</option>';

      if (branch && semester) {
        // Example: Fetch roll numbers from the server
        fetch(`fetch_roll_numbers.php?department=${branch}&semester=${semester}`)
          .then(response => response.json())
          .then(data => {
            data.forEach(rollNumber => {
              const option = document.createElement('option');
              option.value = rollNumber;
              option.textContent = rollNumber;
              rollNumberSelect.appendChild(option);
            });
          })
          .catch(error => console.error('Error fetching roll numbers:', error));
      }
    }

    function showMarksForm() {
      const rollNumber = document.getElementById('rollNumber').value;
      const marksForm = document.getElementById('marksForm');
      const selectedRollNumber = document.getElementById('selectedRollNumber');
      selectedRollNumber.value = rollNumber;
      marksForm.style.display = rollNumber ? 'block' : 'none';
    }
  </script>
</body>
</html>

<?php
// fetch_roll_numbers.php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $department = $_GET['department'];
  $semester = $_GET['semester'];

include 'db.php';
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $stmt = $conn->prepare("SELECT RollNo FROM students WHERE department = ? AND semester = ?");
  $stmt->bind_param("ss", $department, $semester);
  $stmt->execute();
  $result = $stmt->get_result();

  $rollNumbers = array();
  while ($row = $result->fetch_assoc()) {
    $rollNumbers[] = $row['RollNo'];
  }

  $stmt->close();
  $conn->close();

  header('Content-Type: application/json');
  echo json_encode($rollNumbers);
}
?>

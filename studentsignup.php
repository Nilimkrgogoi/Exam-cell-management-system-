<?php
// Include the database connection file
include 'db.php';

$dbh = new PDO('mysql:host=localhost;dbname=nalpo', 'root', '');

// Function to create a table if it doesn't exist
function createTableIfNotExists($dbh, $registration_year) {
    $table_name = "students";
    $q = "CREATE TABLE IF NOT EXISTS $table_name (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        roll_no VARCHAR(50) NOT NULL,
        department VARCHAR(50) NOT NULL,
        email VARCHAR(100),
        phone VARCHAR(20),
        registration VARCHAR(100),
        registration_year INT(4),
        semester VARCHAR(10),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $dbh->exec($q);
}

if (isset($_POST["signup_submit"])) {
    $full_name = str_replace("'", "''", $_POST['fullname']);
    $roll_no = str_replace("'", "''", $_POST['roll_no']);
    $department = str_replace("'", "''", $_POST['department']);
    $email = str_replace("'", "''", $_POST['email']);
    $phone = str_replace("'", "''", $_POST['phone']);
    $registration = str_replace("'", "''", $_POST['registration']);
    $registration_year = str_replace("'", "''", $_POST['registration_year']);
    $semester = str_replace("'", "''", $_POST['semester']);
    
    // Create table if it doesn't exist

    
    // Insert into the respective table
    $table_name = "students";
    $q = "INSERT INTO $table_name (name, roll_no, department, email, phone, registration, registration_year, semester) VALUES ('$full_name', '$roll_no', '$department', '$email', '$phone', '$registration', '$registration_year', '$semester')";
    $stmt = $dbh->prepare($q);
    $stmt->execute();
    header('location: studentsignup.php?a=2');
    $msg = "Successfully registered";
}

?>

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
    box-sizing: border-box;
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

h1, h2, h5 {
    text-align: center;
}

h1 {
    color: red;
    font-weight: lighter;
}

h2 {
    color: #003366;
}

.navbar {
    display: flex;
    justify-content: center;
    background-color: #333;
    color: white;
}

.navbar ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    flex-direction: row;
}

.navbar ul li {
    position: relative;
}

.navbar ul li a, .dropbtn {
    display: block;
    padding: 14px 16px;
    color: white;
    text-decoration: none;
}

.navbar ul li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    box-shadow:  0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    padding: 12px 16px;
    display: block;
    color: white;
    text-decoration: none;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: red;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.form-container {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 48%;
}

form h2 {
    text-align: center;
}

label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

input[type="text"], input[type="email"], input[type="number"], select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: red;
}

.alert {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 5px;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

@media screen and (max-width: 600px) {
    .form-container {
        flex-direction: column;
        align-items: center;
    }

    form {
        width: 100%;
        margin-bottom: 20px;
    }
}
</style>
<body>    
    <h1>Nalbari Polytechnic, Chandkuchi</h1>
    <h2>নলবাৰী পলিটেক্‌নিক্‌, চান্দকুছি</h2>
    <h5>(a govt. of assam institute)</h5>
    <img src="http://www.nalbaripolytechnic.in/images/logo.png" alt="College Logo" id="logo" height="100px">
    <div class="navbar">
        <ul>
            <li><a href="admindasboard.php">Home</a></li>
            <li><a href="add_marks.html">Add Marks</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Exam</a>
              <div class="dropdown-content">
              <a href="exam_form.html">Create Exam</a>
              <a href="view_exam.php">View Exams</a>
              </div>
            </li>
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
            <li><a href="seatplan.php">Seat Allocation</a></li>
            <li><a href="#news">Analytics and Reporting</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <br>
    <br>
    <?php
        if (isset($_GET['a'])) {
            $msg = $_GET['a'] == 2 ? "Successfully registered!" : "Semester switched successfully!";
            echo '<br> <div class="alert alert-success" role="alert">' . $msg . '</div>';
        }
    ?>
    <div class="form-container">
        <form action="studentsignup.php" method="post">
            <h2>Add Student</h2>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="roll_no">Roll no:</label>
            <input type="text" id="roll_no" name="roll_no" required>

            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="">Select Department</option>
                <option value="cse">Computer Science & Engineering</option>
                <option value="el">Electrical Engineering</option>
                <option value="pt">Printing Technology</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">

            <label for="registration">Registration No:</label>
            <input type="text" id="registration" name="registration" required>

            <label for="registration_year">Registration Year:</label>
            <input type="number" id="registration_year" name="registration_year" required>

            <label for="semester">Current Semester:</label>
            <select id="semester" name="semester" required>
                <option value="">Select Semester</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
            </select>
            <button type="submit" name="signup_submit">Submit</button>
        </form>
    </div>
</body>
</html>

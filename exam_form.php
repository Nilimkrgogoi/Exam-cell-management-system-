<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $examTitle = $_POST["examTitle"];

    // Create connection to MySQL database
    include 'db.php';

    // Prepare SQL statement to insert data into exams table
    $sql = "INSERT INTO exams (title) VALUES (?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("s", $examTitle);

    if ($stmt->execute() === TRUE) {
        $msg="Created Successfully";
        echo "<script type='text/javascript'>alert('$msg');</script> ";
    } else {
      $msg="error";
      echo"<script type=text/javascript'>alert('$msg');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="Nalpo.css">
  <script src="js/jquery-1.10.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<title>Create Exam</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    max-width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="date"],
input[type="number"],
input[type="submit"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

input[type="submit"]:focus {
    outline: none;
}

.error {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}

@media screen and (max-width: 600px) {
    form {
        width: 80%;
    }
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f8f8f8;
    color: #333;
}

/* Navigation styles */
nav ul {
    list-style-type: none;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
}

nav ul li a:hover {
    color: #007bff;
}

/* Main styles */
main {
    padding: 20px;
}

section {
    margin-bottom: 40px;
}
p{
    text-align: center;
    text-decoration: underline;
}
</style>
<body>
<br>
<nav>
    <ul>
        <li><a href="#create-exam">Create Exam</a></li>
        <li><a href="view_exam.php">Manage Exams</a></li>
        <li><a href="#conduct-exam">Conduct Exam</a></li>
    </ul>
</nav><br>
<div style="display: flex; justify-content: space-between;">
<div style="width: 45%;">
<p>Create Exam</p>
<form id="examForm" action="" method="post">
    <label for="examTitle">Exam Title:</label><br>
    <input type="text" id="examTitle" name="examTitle" required><br>
    <input type="submit" value="Create Exam">
</form>
</div>
<div style="width: 45%;">
    <h2>Add Marks</h2>
    <form id="marksForm" action="add_marks.php" method="post">
        <label for="exam">Exam</label>
        <select id="exam" name="exam" onchange="displayExams()">
        </select><br>
        <label for="department">Department:</label>
        <select id="department" name="department" onchange="displaySemesters()">
            <option value="">Select Department</option>
            <option value="cse">Computer Science & Engineering</option>
            <option value="el">Electrical Engineering</option>
            <option value="pt">Printing Technology</option>
        </select><br>

        <label for="semester">Semester:</label>
        <select id="semester" name="semester" onchange="displaySubjects()">
            <option value="">Select Semester</option>
        </select><br>

        <label for="subject">Subject:</label>
        <select id="subject" name="subject">
            <option value="">Select Subject</option>
        </select><br>
        <label for="roll_no">Roll Number:</label>
        <input type="text" id="roll_no" name="roll_no" required><br>
        <label for="marks">Marks:</label>
        <input type="number" id="marks" name="marks" required>

        <button type="submit"value="Add Marks" >Submit</button>
    </form>
</div></div>
    <script>
    function displaySemesters() {
  const departmentSelect = document.getElementById("department");
  const semesterSelect = document.getElementById("semester");
  const department = departmentSelect.value;

  // Clear the existing options
  semesterSelect.innerHTML = "<option value=''>Select Semester</option>";

  // Add the semesters for the selected department
  if (department === "cse") {
    semesterSelect.innerHTML += "<option value='semester1'>Semester 1</option>";
    semesterSelect.innerHTML += "<option value='semester2'>Semester 2</option>";
    semesterSelect.innerHTML += "<option value='semester3'>Semester 3</option>";
    semesterSelect.innerHTML += "<option value='semester4'>Semester 4</option>";
    semesterSelect.innerHTML += "<option value='semester5'>Semester 5</option>";
    semesterSelect.innerHTML += "<option value='semester6'>Semester 6</option>";
  } else if (department === "el") {
    semesterSelect.innerHTML += "<option value='semester1'>Semester 1</option>";
    semesterSelect.innerHTML += "<option value='semester2'>Semester 2</option>";
    semesterSelect.innerHTML += "<option value='semester3'>Semester 3</option>";
    semesterSelect.innerHTML += "<option value='semester4'>Semester 4</option>";
    semesterSelect.innerHTML += "<option value='semester5'>Semester 5</option>";
    semesterSelect.innerHTML += "<option value='semester6'>Semester 6</option>";
  } else if (department === "pt") {
    semesterSelect.innerHTML += "<option value='semester1'>Semester 1</option>";
    semesterSelect.innerHTML += "<option value='semester2'>Semester 2</option>";
    semesterSelect.innerHTML += "<option value='semester3'>Semester 3</option>";
    semesterSelect.innerHTML += "<option value='semester4'>Semester 4</option>";
    semesterSelect.innerHTML += "<option value='semester5'>Semester 5</option>";
    semesterSelect.innerHTML += "<option value='semester6'>Semester 6</option>";
  }
}

function displaySubjects() {
  const departmentSelect = document.getElementById("department");
  const semesterSelect = document.getElementById("semester");
  const subjectSelect = document.getElementById("subject");
  const department = departmentSelect.value;
  const semester = semesterSelect.value;

  // Clear the existing options
  subjectSelect.innerHTML = "<option value=''>Select Subject</option>";

  // Add the subjects for the selected department and semester
  if (department === "cse" && semester === "semester1") {
    subjectSelect.innerHTML += "<option value='English'>English</option>";
    subjectSelect.innerHTML += "<option value='Physics'>Physics</option>";
    subjectSelect.innerHTML += "<option value='Chemistry'>Chemistry</option>";
    subjectSelect.innerHTML += "<option value='Mathematics'>Mathematics</option>";
    subjectSelect.innerHTML += "<option value='Engineering Drawing'>Engineering Drawing</option>";
    subjectSelect.innerHTML += "<option value='Workshop'>Workshop</option>";
  } else if (department === "cse" && semester === "semester2") {
    subjectSelect.innerHTML += "<option value='English'>English</option>";
    subjectSelect.innerHTML += "<option value='Physics'>Physics</option>";
    subjectSelect.innerHTML += "<option value='Chemistry'>Chemistry</option>";
    subjectSelect.innerHTML += "<option value='Mathematics'>Mathematics</option>";
    subjectSelect.innerHTML += "<option value='Engineering Mechanics'>Engineering Mechanics</option>";
    subjectSelect.innerHTML += "<option value='Workshop'>Workshop</option>";
  } else if (department === "cse" && semester === "semester3") {
    subjectSelect.innerHTML += "<option value='Computer Application and Programming'>Computer Application and Programming</option>";
    subjectSelect.innerHTML += "<option value='Elements of Multimedia'>Elements of Multimedia</option>";
    subjectSelect.innerHTML += "<option value='Computer Architecture and Organisation'>Computer Architecture and Organisation</option>";
    subjectSelect.innerHTML += "<option value='Mathematics'>Mathematics</option>";
    subjectSelect.innerHTML += "<option value='Elements of Electrical Engineering'>Elements of Electrical Engineering</option>";
  } else if (department === "cse" && semester === "semester4") {
    subjectSelect.innerHTML += "<option value='Data Structure'>Data Structure</option>";
    subjectSelect.innerHTML += "<option value='System Programming'>System Programming</option>";
    subjectSelect.innerHTML += "<option value='MP & Interfacing'>MP & Interfacing</option>";
    subjectSelect.innerHTML += "<option value='Advanced C & C++'>Advanced C & C++</option>";
    subjectSelect.innerHTML += "<option value='Computer Hardware and Networking'>Computer Hardware and Networking</option>";
    subjectSelect.innerHTML += "<option value='Digital Electronics'>Digital Electronics</option>";
  } else if (department === "cse" && semester === "semester5") {
    subjectSelect.innerHTML += "<option value='Database Management System'>Database Management System</option>";
    subjectSelect.innerHTML += "<option value='Internet & Web Technology'>Internet & Web Technology</option>";
    subjectSelect.innerHTML += "<option value='Computer Communication & Networking'>Computer Communication & Networking</option>";
    subjectSelect.innerHTML += "<option value='Java Programming'>Java Programming</option>";
    subjectSelect.innerHTML += "<option value='Operating System'>Operating System</option>";
    subjectSelect.innerHTML += "<option value='Visual Programming'>Visual Programming</option>";
  } else if (department === "cse" && semester === "semester6") {
    subjectSelect.innerHTML += "<option value='Industrial Management & Entrepreneurship'>Industrial Management & Entrepreneurship</option>";
    subjectSelect.innerHTML += "<option value='Cryptography and Network Security'>Cryptography and Network Security</option>";
    subjectSelect.innerHTML += "<option value='Mobile Computing'>Mobile Computing</option>";
    subjectSelect.innerHTML += "<option value='Artificial Intelligence'>Artificial Intelligence</option>";
    subjectSelect.innerHTML += "<option value='Software Engineering'>Software Engineering</option>";
  } else if (department === "el" && semester === "semester1") {
    subjectSelect.innerHTML += "<option value='English'>English</option>";
    subjectSelect.innerHTML += "<option value='Physics'>Physics</option>";
    subjectSelect.innerHTML += "<option value='Chemistry'>Chemistry</option>";
    subjectSelect.innerHTML += "<option value='Mathematics'>Mathematics</option>";
    subjectSelect.innerHTML += "<option value='Engineering Drawing'>Engineering Drawing</option>";
    subjectSelect.innerHTML += "<option value='Workshop'>Workshop</option>";
  } else if (department === "el" && semester === "semester2") {
    subjectSelect.innerHTML += "<option value='English'>English</option>";
    subjectSelect.innerHTML += "<option value='Physics'>Physics</option>";
    subjectSelect.innerHTML += "<option value='Chemistry'>Chemistry</option>";
    subjectSelect.innerHTML += "<option value='Mathematics'>Mathematics</option>";
    subjectSelect.innerHTML += "<option value='Engineering Mechanics'>Engineering Mechanics</option>";
    subjectSelect.innerHTML += "<option value='Workshop'>Workshop</option>";
  } else if (department === "el" && semester === "semester3") {
    subjectSelect.innerHTML += "<option value='Computer Application & Programming'>Computer Application & Programming</option>";
    subjectSelect.innerHTML += "<option value='Engineering Economics & Accountancy'>Engineering Economics & Accountancy</option>";
    subjectSelect.innerHTML += "<option value='Principles of Electrical Engineering'>Principles of Electrical Engineering</option>";
    subjectSelect.innerHTML += "<option value='Elements of Mechanical Engineering'>Elements of Mechanical Engineering</option>";
    subjectSelect.innerHTML += "<option value='Elements of Electronics & Devices'>Elements of Electronics & Devices</option>";
    subjectSelect.innerHTML += "<option value='Mathematics'>Mathematics</option>";
  } else if (department === "el" && semester === "semester4") {
    subjectSelect.innerHTML += "<option value='Electrical Circuit & Network'>Electrical Circuit & Network</option>";
    subjectSelect.innerHTML += "<option value='Electrical & Electronics Drawing & Design'>Electrical & Electronics Drawing & Design</option>";
    subjectSelect.innerHTML += "<option value='Electrical Measurment & Measuring Instrument-I'>Electrical Measurment & Measuring Instrument-I</option>";
    subjectSelect.innerHTML += "<option value='Electrical Machines-I'>Electrical Machines-I</option>";
    subjectSelect.innerHTML += "<option value='Electrical Engineering Material'>Electrical Engineering Material</option>";
    subjectSelect.innerHTML += "<option value='Digital Electronics'>Digital Electronics</option>";
  } else if (department === "el" && semester === "semester5") {
    subjectSelect.innerHTML += "<option value='Electrical Machine-II'>Electrical Machine-II</option>";
    subjectSelect.innerHTML += "<option value='Electrical Measurement & Measuring Instrument-II'>Electrical Measurement & Measuring Instrument-II</option>";
    subjectSelect.innerHTML += "<option value='Electrical Power'>Electrical Power</option>";
    subjectSelect.innerHTML += "<option value='Microprocessor'>Microprocessor</option>";
    subjectSelect.innerHTML += "<option value='Control System'>Control System</option>";
    subjectSelect.innerHTML += "<option value='Non-Conventional Energy Sources'>Non-Conventional Energy Sources</option>";
  } else if (department === "el" && semester === "semester6") {
    subjectSelect.innerHTML += "<option value='Industrial Management & Entrepreneurship'>Industrial Management & Entrepreneurship</option>";
    subjectSelect.innerHTML += "<option value='Installation and Maintenance'>Installation and Maintenance</option>";
    subjectSelect.innerHTML += "<option value='Electrical Estimating and Contracting'>Electrical Estimating and Contracting</option>";
    subjectSelect.innerHTML += "<option value='AC Distribution and Utilisation'>AC Distribution and Utilisation</option>";
    subjectSelect.innerHTML += "<option value='Switchgear and Protection'>Switchgear and Protection</option>";
  } else if (department === "pt" && semester === "semester1") {
    subjectSelect.innerHTML += "<option value='English'>English</option>";
    subjectSelect.innerHTML += "<option value='Physics'>Physics</option>";
    subjectSelect.innerHTML += "<option value='Chemistry'>Chemistry</option>";
    subjectSelect.innerHTML += "<option value='Mathematics'>Mathematics</option>";
    subjectSelect.innerHTML += "<option value='Engineering Drawing'>Engineering Drawing</option>";
    subjectSelect.innerHTML += "<option value='Workshop'>Workshop</option>";
  } else if (department === "pt" && semester === "semester2") {
    subjectSelect.innerHTML += "<option value='English'>English</option>";
    subjectSelect.innerHTML += "<option value='Physics'>Physics</option>";
    subjectSelect.innerHTML += "<option value='Chemistry'>Chemistry</option>";
    subjectSelect.innerHTML += "<option value='Mathematics'>Mathematics</option>";
    subjectSelect.innerHTML += "<option value='Engineering Mechanics'>Engineering Mechanics</option>";
    subjectSelect.innerHTML += "<option value='Workshop'>Workshop</option>";
  } else if (department === "pt" && semester === "semester3") {
    subjectSelect.innerHTML += "<option value='Computer Application & Programming'>Computer Application & Programming</option>";
    subjectSelect.innerHTML += "<option value='Engineering Economics & Accountancy'>Engineering Economics & Accountancy</option>";
    subjectSelect.innerHTML += "<option value='Element of Electrical Engineering'>Element of Electrical Engineering</option>";
    subjectSelect.innerHTML += "<option value='Printing Process'>Printing Process</option>";
    subjectSelect.innerHTML += "<option value='Element of Electronics Engineering'>Element of Electronics Engineering</option>";
    subjectSelect.innerHTML += "<option value='Prepress Repro Technique'>Prepress Repro Technique</option>";
  } else if (department === "pt" && semester === "semester4") {
    subjectSelect.innerHTML += "<option value='Visual Design & DTP'>Visual Design & DTP</option>";
    subjectSelect.innerHTML += "<option value='Image Processing'>Image Processing</option>";
    subjectSelect.innerHTML += "<option value='Printers Material Science-I'>Printers Material Science-I</option>";
    subjectSelect.innerHTML += "<option value='Gravure Flexoghaphe & Screen Printing'>Gravure Flexoghaphe & Screen Printing</option>";
    subjectSelect.innerHTML += "<option value='Typesetting & Composition'>Typesetting & Composition</option>";
    subjectSelect.innerHTML += "<option value='Theory of Machines'>Theory of Machines</option>";
  } else if (department === "pt" && semester === "semester5") {
    subjectSelect.innerHTML += "<option value='Digital Prepress'>Digital Prepress</option>";
    subjectSelect.innerHTML += "<option value='Offset Printing Technology'>Offset Printing Technology</option>";
    subjectSelect.innerHTML += "<option value='Printers Material Science-II'>Printers Material Science-II</option>";
    subjectSelect.innerHTML += "<option value='Planographic Printing Technique-I'>Planographic Printing Technique-I</option>";
    subjectSelect.innerHTML += "<option value='Press Work'>Press Work</option>";
    subjectSelect.innerHTML += "<option value='Printing Machine Maintenance'>Printing Machine Maintenance</option>";
  } else if (department === "pt" && semester === "semester6") {
    subjectSelect.innerHTML += "<option value='Industrial Management & Entrepreneurship'>Industrial Management & Entrepreneurship</option>";
    subjectSelect.innerHTML += "<option value='Binding and Finishing'>Binding and Finishing</option>";
    subjectSelect.innerHTML += "<option value='Estimating and Costing'>Estimating and Costing</option>";
    subjectSelect.innerHTML += "<option value='Planographic Printing Technique-II'>Planographic Printing Technique-II</option>";
    subjectSelect.innerHTML += "<option value='Machine'>Machine</option>";
  }
}
    </script>
</body>
</html>
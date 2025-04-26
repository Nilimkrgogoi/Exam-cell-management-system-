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
            <li><a href="marks.html">Add Marks</a></li>
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
    <?php
    session_start();
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<h2>Hello, $username! 😊<h2>";
    } else {
        header('Location: admin.php');
        exit;
    }
    ?>
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
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<div style="display: flex; justify-content: space-between;">
<div style="width: 45%;">
<p>Create Exam</p>
<form id="examForm" action="" method="post">
    <label for="examTitle">Exam Title:</label><br>
    <input type="text" id="examTitle" name="examTitle" required><br>
    <input type="submit" value="Create Exam">
</form>
<form>
  <label for="exam"> Select Exam</label>
  <select name="exam" id="exam"> Select Exam
  <option value="">Select Exam</option></select>
  <input type="submit">
</form>
</div>
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
</body>
</html>
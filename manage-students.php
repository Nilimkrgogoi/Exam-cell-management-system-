<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Nalbari Polytechnic</title>
  <link rel="stylesheet" type="text/css" href="Nalpo.css">
</head>
<style>
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
section{
  padding: 0px;
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
    align-items: center; 
    text-align: center;
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
    
    .dropdown-content a:hover {background-color: rgb(235, 36, 36);}
    
    .dropdown:hover .dropdown-content {
      display: block;
    }

    .head-of-exam-cell {
            display: flex;
            align-items: center;
            margin-top: 50px;
        }

        .head-of-exam-cell img {
            width: 200px;
            height: auto;
            margin-right: 20px;
            border-radius: 10px;
        }

        .head-of-exam-cell p {
            flex-grow: 1;
        }
        body {
  font-family: Arial, sans-serif;
  
 
}

label {
  display: block;
  margin-bottom: 5px;
}

select {
  width: 500px;
  padding: 5px;
  margin-bottom: 10px;
}

button {
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  cursor: pointer;
  width: 500px;
}

button:hover {
  background-color: #0056b3;
}


* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33.33%;
}

.tablink:hover {
  background-color: #777;
  
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
  
}

#Home {background-color: rgb(168, 241, 229);}
#News {background-color: rgb(168, 241, 229);}
#Contact {background-color: rgb(168, 241, 229);}
form {
  max-width: 400px;
  margin: auto;
  background-color:rgb(168, 241, 229); ;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  box-sizing: border-box;
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
            <li><a href="add_marks.html">Add Marks</a></li>
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
<section>
</style>
</head>
<br><br>
<div>
  <button class="tablink" onclick="openPage('Home', this, 'blue')" id="defaultOpen">Student List</button>
  <button class="tablink" onclick="openPage('Branch', this, 'blue')">Branch Change</button>
  <button class="tablink" onclick="openPage('Institute', this, 'blue')">Institute Change</button>
  <button class="tablink" onclick="openPage('Semester', this, 'blue')">Semester Transfer</button>
</div>

<div class="body-1">
  <div id="Home" class="tabcontent">
    <form id="selectionForm" action="students_list.php" onsubmit="submitSelection(event);" method="post">
      <label for="department">Select Department:</label>
      <select id="department" name="department">
      <option value="">Select Department</option>
        <option value="cse">Computer Science & Engineering</option>
        <option value="el">Electrical Engineering</option>
        <option value="pt">Printing Technology</option>
      </select>

      <label for="registration_year">Select Registration Year:</label>
      <select id="registration_year" name="registration_year">
        <!-- Options will be dynamically added using JavaScript -->
      </select>
      <div>
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>

<div class="body-1">
  <div id="Branch" class="tabcontent">
    <h1 style="text-align: center;color: black;">Branch Transfer Form</h1>
    <form id="branchTransferForm" action="branch_transfer.php" method="post">
      <label for="studentName">Student Name:</label>
      <input type="text" id="studentName" name="studentName" required><br>
      <label for="rollNo">Roll No:</label>
      <input type="text" id="rollNo" name="rollNo" required><br>

      <label for="currentdepartment">Current Department:</label>
      <select id="currentdepartment" name="currentdepartment">
      <option value="">Select Department</option>
        <option value="cse">Computer Science & Engineering</option>
        <option value="el">Electrical Engineering</option>
        <option value="pt">Printing Technology</option>
      </select>

      <label for="newdepartment">New Department:</label>
      <select id="newdepartment" name="newdepartment">
        <option value="">Select Department</option>
        <option value="cse">Computer Science & Engineering</option>
        <option value="el">Electrical Engineering</option>
        <option value="pt">Printing Technology</option>
      </select>

      <button type="submit" style="width: 360px;">Submit</button>
    </form>
  </div>
</div>

<div class="body-1">
  <div id="Institute" class="tabcontent">
    <h1 style="text-align: center;color: black;">Institute Transfer Form</h1>
    <form id="transferForm" action="institute_transfer.php" method="post">
      <label for="studentName">Student Name:</label>
      <input type="text" id="studentName" name="studentName" required><br>
      <label for="rollNo">Roll No:</label>
      <input type="text" id="rollNo" name="rollNo" required><br>
      <label for="currentInstitute">Current Institute:</label>
      <input type="text" id="currentInstitute" name="currentInstitute" required><br>
      <label for="newInstitute">New Institute:</label>
      <input type="text" id="newInstitute" name="newInstitute" required><br>
      <label for="reason">Reason for Transfer:</label>
      <textarea id="reason" name="reason" required></textarea><br>
      <button type="submit" style="width: 360px;">Submit</button>
    </form>
  </div>
</div>

<div class="body-1">
  <div id="Semester" class="tabcontent">
    <h1 style="text-align: center;color: black;">Semester Transfer Form</h1>
    <form id="semesterTransferForm" action="semester_transfer.php" method="post">
      <label for="department">Select Department:</label>
      <select id="department" name="department">
      <option value="">Select Department</option>
        <option value="cse">Computer Science & Engineering</option>
        <option value="el">Electrical Engineering</option>
        <option value="pt">Printing Technology</option>
      </select>

      <label for="semester">Select Semester:</label>
      <select id="semester" name="semester">
        <option value="">Select Semester</option>
        <option value="1">Semester 1</option>
        <option value="2">Semester 2</option>
        <option value="3">Semester 3</option>
        <option value="4">Semester 4</option>
        <option value="5">Semester 5</option>
        <option value="6">Semester 6</option>
      </select>

      <div id="studentList">
        <!-- Student list will be dynamically added here using JavaScript -->
      </div>
      <div>
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</div><br><br>
<footer> 
    <p>&copy; 2023 nalbaripolytechnic. All rights reserved. 
      <pre>Developed by- Nilim Kumar Gogoi , Manali Kalita , Ankita Talukdar, Mridusmita Ray</pre>
    </p>
</footer>
<script>
  function updateStudentList() {
    const department = document.getElementById('department').value;
    const semester = document.getEle
    function submitSelection() {
      var department = document.getElementById("department").value;
      var registration_year = document.getElementById("registration_year").value;
      alert("Selected Department: " + department + "\nSelected registration_year: " + year);
      // You can perform further actions with the selected values here
    }
  
    // Dynamically populate years from 2017 to current year
    var currentYear = new Date().getFullYear();
    var yearDropdown = document.getElementById("registration_year");
    for (var i = currentYear; i >= 2017; i--) {
      var option = document.createElement("option");
      option.text = i;
      option.value = i;
      yearDropdown.add(option);
    }
  }
  function openPage(pageName, element, color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      element.style.backgroundColor = color;
    }

    document.addEventListener("DOMContentLoaded", function () {
      document.getElementById("defaultOpen").click();
    });
    
    document.addEventListener('DOMContentLoaded', function() {
  var registrationYearSelect = document.getElementById('registration_year');
  var currentYear = new Date().getFullYear();
  var startYear = currentYear - 10; // Adjust the start year as needed
  var endYear = currentYear + 5; // Adjust the end year as needed

  for (var year = startYear; year <= endYear; year++) {
    var option = document.createElement('option');
    option.value = year;
    option.textContent = year;
    registrationYearSelect.appendChild(option);
  }
});
  </script>
  </body>
  </html>
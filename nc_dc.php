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
    
    .dropdown-content a:hover {background-color: red;}
    
    .dropdown:hover .dropdown-content {
      display: block;
    }

        .departments {
            text-align: center;
        }

        .departments ul {
            list-style-type: none;
            padding: 0;
        }

        .departments ul li {
            margin-bottom: 10px;
        }

        .departments ul li a {
            text-decoration: none;
            color: white;
        }

        .departments ul li a:hover {
            color: white; /* Change color on hover */
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
            <li><a href="manage-students.php">Manage Students</a></li>
            <li><a href="#news">Manage Exam</a></li>
            <li><a href="#news">Manage Invigilators</a></li>
            <li><a href="document.php">Document Management </a></li>
            <li><a href="nc_dc.php">NC & DC</a></li>
            <li><a href="#news">Analytics and Reporting</a></li>
            <li><a href="logout.php">logout</a></li>
        </li> 
        </ul>
    </div>
    <div class="departments">
        <h2>Departments</h2>
        <ul>
            <li><a href="department.php?dept=cse">Computer Science & Engineering</a></li>
            <li><a href="department.php?dept=el">Electrical Engineering</a></li>
            <li><a href="department.php?dept=pt">Printing Technology</a></li>
        </ul>
    </div>
</body>
</html>
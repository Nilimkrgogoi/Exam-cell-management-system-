<?php
include 'db.php';
// Form submission handling
if (isset($_POST['signup_submit'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $department = $_POST['department'];

    // Insert data into database
    $sql = "INSERT INTO faculty (`name`, `username`, `email`, `password`, `branch`) VALUES ('$fullname','$username','$email','$password','$department')";

    if (mysqli_query($conn, $sql)) {
       // Redirect to home page
       $msg="Created Successfully";
        echo "<script type='text/javascript'>alert('$msg');</script> ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
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
    </style>
<body>    
    <h1>Nalbari Polytechnic,Chandkuchi</h1>
    <h2>নলবাৰী পলিটেক্‌নিক্‌,চান্দকুছি</h2>
    <h5>(a govt. of assam institute)</h5>
    <img src="http://www.nalbaripolytechnic.in/images/logo.png" alt="College Logo" id="logo" height="100px">
    <div class="navbar">
      <ul>
        <li><a href="Nalpo.php">Home</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="contact.html">Contact us</a></li>
        <li><a href="resourses.html">Resourses</a></li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">User Login</a>
          <div class="dropdown-content">
            <a href="facultylogin.html">Faculty</a>
            <a href="login.html">Student</a>
            <a href="admin.html">Admin</a>
          </div>
        </li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">Sign up</a>
          <div class="dropdown-content">
            <a href="facultysignup.php">Faculty</a>
            <a href="studentsignup.php">Student</a>
        </li>
      </ul>
    </div>
    <br><br>
<div class="container">
        <h2>Faculty Sign Up</h2>
        <?php
            if (isset($_GET['a'])) {
                echo '<br> <div class="alert alert-success" role="alert"> Successfull !</div>';
            }
        ?>

        <form action="" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="username">Username:</label>
            <input type="username" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="">Select Department</option>
                <option value="Computer Science">Computer Science & Engineering</option>
                <option value="Electrical">Electrical Engineering</option>
                <option value="PT">Printing Technology</option>
                <option value="Science">Science</option>
                <option value="Humanities">Humanities</option>
                <option value="Workshop">Workshop</option>
                <!-- Add more departments as needed -->
            </select>

            <button type="submit" name="signup_submit">Sign Up</button>
        </form>
        <script src="script.js"></script>
</body>
</html>

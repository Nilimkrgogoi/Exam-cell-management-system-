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
  text-align: right ;
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
    
.dropdown-content a:hover {
  background-color: red;
}
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
  text-align: right ;
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
            <a href="admin.html">Admin</a>
          </div>
        </li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">Sign up</a>
          <div class="dropdown-content">
            <a href="facultysignup.php">Faculty</a>
        </li>
      </ul>
    </div>
<section>
<div class="container-fluid">
<div class="left-side">
  <h1><span class = "blue"> Exam Cell Management System</span>
  </h1><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quo a, est illo asperiores saepe. Eligendi, beatae asperiores qui nostrum consequatur, deleniti dolorum quasi fuga modi tempore fugiat similique recusandae?</p>
  <a href="about.html" style="color:#5435de;background: rgb(233, 233, 233); padding: 12px 18px 12px 18px; display: inline-block;border-radius: 25px; margin-top: 15px; font-size: 17px;  font-weight: bold;">Learn More</a>
</div>
<div class="right-side" >
  <img src="home-img1.png" alt="" class="exam">
</div>
</section>
<section class="head-of-exam-cell">
        <div class="Sir">
          <h2>Head Of Exam Cell </h2>
            <img src="C-r.jpg" alt="Head of Exam Cell">
            <p>
                <h3 style="color: #5435de;">Ramen Kumar Choudhury</h3> <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus tincidunt magna nec fermentum. 
                Nullam sit amet diam quis orci hendrerit lacinia nec vitae nulla. Pellentesque ac enim vel arcu rhoncus luctus. 
                Donec auctor justo id mi congue, sit amet viverra libero malesuada. 
                Vestibulum auctor mi in enim auctor, at finibus nisl aliquet. 
                Vestibulum hendrerit bibendum mi, nec sollicitudin odio vestibulum non.
            </p>
        </div>
</section>
<section class="notices">
        <div class="container">
            <h2>Notices</h2>
            <div class="notice-item">
                <h3>Important Notice 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fermentum neque. Nam id posuere turpis. Integer tempus vestibulum nibh a euismod.</p>
                <small>Date: January 1, 2025</small>
            </div>
            <div class="notice-item">
                <h3>Important Notice 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec fermentum neque. Nam id posuere turpis. Integer tempus vestibulum nibh a euismod.</p>
                <small>Date: January 2, 2025</small>
            </div>
            <!-- Add more notice items as needed -->
        </div>
</section>
    <footer>
        <ul>
          <li><a href="#">Privacy Policy</a></li><br>
          <li><a href="#">Terms of Service</a></li>
        </ul>
        <p>&copy; 2023 nalbaripolytechnic. All rights reserved
        </p>
    </footer>
</body>
</html>

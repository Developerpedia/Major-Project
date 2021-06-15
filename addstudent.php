<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  margin:0;
  padding:0;
  box-sizing: border-box;
}

body{
  background-color:#dddddd;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  padding-right:6ch;
}

li a:hover, .dropdown:hover .dropbtn .icon-med{
  color:#10efe6; 
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right:12ch;
}

.dropdown-content a {
  color: black;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

h2{
  Font-size:23px;
  font-family:sans serif;
  padding-left: 3ch;
 }

 h3{
  Font-size:23px;
  font-family:sans serif;
  padding-left: 3ch;
  padding-bottom:2ch;
  padding-top:2ch;
 }

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 24px;
  text-decoration: none;
  font-size: 20px;
  color: #000;
  display: block;
  font-family:monospace;
  text-align:left;
}

.sidenav a:hover,
a:active{
    color:#10efe6; 
}

.icon-small{
    display:inline-block;
    width:30px;
    text-align:center;
    color:#000;
    font-size:20px;
/* secrets to align text and icons */
    line-height:100%;
    vertical-align:center;
    margin-top:-4px;
}

.icon-med{
  font-size:20px;
  text-align:center;
  color:#fff;
  padding-right:3ch;
}

input[type=text], select, textarea {
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 4px;
  margin-bottom: 16px;
  margin-right:5ch;
  resize: vertical;
  margin-left:4ch;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-left:3ch;
  margin-bottom:2ch;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  position:absolute;
  top:22%;
  left:40%;
  right:18%;

}

.container label{
  margin-left:4ch;
}

</style>
</head>
<body>
<div class="sidenav">
   <h2>Admin Dashboard</h2> 
  <a href="admindashboard.php" class="w3-bar-item w3-button"><i class="ion-stats-bars icon-small"></i> Dashboard</a>
  <a href="adminpro.php" class="w3-bar-item w3-button"><i class="ion-person icon-small"></i> Profile</a>
  <a style= "color:#10efe6" href="#" class="w3-bar-item w3-button"><i class=" ion-calendar icon-small"></i> Add Student</a>
  <a href="addteacher.php" class="w3-bar-item w3-button"><i class="ion-clipboard icon-small"></i> Add Teacher</a>
  <a href="#" class="w3-bar-item w3-button"><i class="ion-chatbox-working icon-small"></i> Add Course</a>
</div>
<ul>
<li><a href="#"><i class="ion-bookmark icon-med"></i>  </a></li>
  <li class="dropdown"> 
    <a href="javascript:void(0)" class="dropbtn"><i class="ion-power icon-med"></i> </a>
    <div class="dropdown-content">
      <a href="#">Feed</a>
      <a href="changepassword.php">Change password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>

<div class="container">
<h3>Student Registeration</h3>
  <form action="" method="POST">
    <label for="id">Roll No.</label>
    <input type="text" name="student-id" placeholder="Roll no....">

    <label for="student">Student Name</label>
    <input type="text"  name="studentname" placeholder="student name..">

    <label for="Course">Course</label>
    <select id="depart" name="course">
      <option value="BBA">BBA</option>
      <option value="BCA">BCA</option>
      <option value="B.COM">B.COM</option>
      <option value="MBA">MBA</option>
      <option value="B.SC">B.SC</option>
      <option value="M.SC">M.SC</option>

    </select>

    <label for="subject">Semester</label>
    <select id="country" name="semester">
      <option value="1st">1st</option>
      <option value="2nd">2nd</option>
      <option value="3rd">3rd</option>
      <option value="4th">4th</option>
      <option value="5th">5th</option>
      <option value="5th">6th</option>
    </select>
    <input type="submit" name="Submit" button="onclick" value="Add student">
  </form>
</div>
</body>
</html>

<?php
include("connection.php");
error_reporting(0);
?>
<?php

  $id = $_POST['student-id'];
  $sn = $_POST['studentname'];
  $br = $_POST['course'];
  $sm = $_POST['semester'];
   
  if($te!="" && $tn!="" && $dp!="" && $fc!="")
  {
  
    $query =  "INSERT INTO STUDENT VALUES ('$id', '$sn', '$br', '$sm')";
    $data = mysqli_query($conn, $query);

    if($data)
    {   
      echo "<p style='padding-left:70ch; padding-top:6ch; font-family:monospace; font-size:140%; color:#04AA6D;'>". "Student has been added!";
    }
  }
  else
 {
     echo "<p style='padding-left:70ch; padding-top:6ch; font-family:monospace; font-size:140%; color:#ff6b6b;'>" . "All Fields are required!";
 }
 ?>

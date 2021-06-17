<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
 <style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}


 h3{
    font-family:serif;
    font-size:25px;
    word-spacing:3px;
    font-weight:300%;
    letter-spacing:1px;
    color:#fff;
    text-align:center;
}
h2{
  Font-size:23px;
  font-family:sans serif;
  padding-left: 3ch;
 }

 p{
    font-family: sans-serif;
    font-size:25px;
    color:#fff;
    text-align: center;
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

body {
background:#dddddd; 
background-size:cover;
background-position:center;
height:100vh; 
background-attachment: fixed;
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
    line-height:100%;
    vertical-align:center;
    margin-top:-4px;
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

.icon-med{
  font-size:20px;
  text-align:center;
  color:#fff;
  padding-right:3ch;
}

.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 18px;
  text-align: center;
  background-color: #ff6b6b;
}
.card2{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 18px;
  text-align: center;
  background-color: #feca57;
}
.card3{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 18px;
  text-align: center;
  background-color: #1dd1a1;
}

.card4{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 18px;
  text-align: center;
  background-color: #48dbfb;
}

.column {
  float: left;
  width: 24%;
  padding: 0 10px;
}

.row {margin: 2ch -5px; padding-left:35ch;}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.icon-big{
  font-size:30px;
  text-align:center;
  color:#fff;
  padding-right:1ch;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width:70%;
  position:absolute;
  left:23%;
  margin-top:2ch;
  
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px 5ch 2ch 5ch;
  background:#fff;

}

tr:nth-child(even) {
  border:1px solid #dddddd;
}

.row a{
  color:#fff;
  font-size:18px;
  font-family:monospace;
  text-decoration:none;
}

.row a:hover,
a:active{
    color:#10efe6; 
}

 </style>
 </head>
 <body>

 <div class="sidenav">
   <h2>
   <?php
  session_start();
  error_reporting(0);
  echo $_SESSION['user_name'];
  $userprofile = $_SESSION['user_name'];
  if($userprofile==true)
  {

  }
  else
  {
    header('location:index.php');
  }
  ?>
   
   </h2> 
  <a style="color:#10efe6" href="" class="w3-bar-item w3-button"><i class="ion-stats-bars icon-small"></i> Dashboard</a>
  <a href="addstudent.php" class="w3-bar-item w3-button"><i class=" ion-calendar icon-small"></i> Add Student</a>
  <a href="addteacher.php" class="w3-bar-item w3-button"><i class="ion-clipboard icon-small"></i> Add Teacher</a>
  <a href="addsubject.php" class="w3-bar-item w3-button"><i class="ion-chatbox-working icon-small"></i> Add Subject</a>
  <a href="Notice.php" class="w3-bar-item w3-button"><i class="ion-person icon-small"></i> </i> Notice</a>
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

<div class="row">
  <div class="column">
    <div class="card1">
      <h3><i class="ion-compose icon-big"></i>Students</h3>
      <p>

<?php 
include("connection.php");
$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
echo $total;
?>
  <br> <a href= "view1.php">View</a>

   </p>
    </div>
  </div>

  <div class="column">
    <div class="card2">
      <h3><i class="ion-document icon-big"></i>Teachers</h3>
      <p>
      <?php 
    include("connection.php");
    $query = "SELECT * FROM TEACHER";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    echo $total;
    ?>

    <br> <a href= "view2.php">View</a>
      
      </p>
    </div>
  </div>
  
  <div class="column">
    <div class="card3">
      <h3><i class="ion-checkmark-circled icon-big"></i>Subjects</h3>
      <p>
      <?php 
    include("connection.php");
    $query = "SELECT * FROM SUBJECTS";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    echo $total;
    ?>
    <br> <a href= "view3.php">View</a>
     </p>
    </div>
  </div>
  
  <div class="column">
    <div class="card4">
      <h3><i class="ion-trophy icon-big"></i>Notice</h3>
      <p>
      <?php 
      include("connection.php");
      $query = "SELECT * FROM SUBJECTS";
      $data = mysqli_query($conn, $query);
      $total = mysqli_num_rows($data);
      echo $total;
     ?> 
     <br> <a href= "view4.php">View</a>
     </p>
    </div>
  </div>
</div>

</body>
</html>

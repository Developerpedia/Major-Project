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
/* secrets to align text and icons */
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

 </style>
 </head>
 <body>

 <div class="sidenav">
   <h2>Rohan singh</h2> 
  <a href="home.php" class="w3-bar-item w3-button"><i class="ion-stats-bars icon-small"></i> Dashboard</a>
  <a style="color:#10efe6" href="profile.php" class="w3-bar-item w3-button"><i class="ion-person icon-small"></i> </i>Profile</a>
  <a href="#" class="w3-bar-item w3-button"><i class="ion-clipboard icon-small"></i> Attendance</a>
  <a href="#" class="w3-bar-item w3-button"><i class=" ion-calendar icon-small"></i> Timetable</a>
  <a href="#" class="w3-bar-item w3-button"><i class="ion-chatbox-working icon-small"></i> Feedback</a>
</div>

<ul>
<li><a href="#"><i class="ion-bookmark icon-med"></i>  </a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="ion-university icon-med"></i> </a>
    <div class="dropdown-content">
      <a href="#">Feed</a>
      <a href="changepassword.php">Change password</a>
      <a href="login.php">Logout</a>
    </div>
  </li>
</ul>


</body>
</html>
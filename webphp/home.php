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

/* Remove extra left and right margins, due to padding */
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

 </style>
 </head>
 <body>

 <div class="sidenav">
   <h2>Rohan singh</h2> 
  <a style="color:#10efe6" href="home.php" class="w3-bar-item w3-button"><i class="ion-stats-bars icon-small"></i> Dashboard</a>
  <a href="profile.php" class="w3-bar-item w3-button"><i class="ion-person icon-small"></i> </i>Profile</a>
  <a href="#" class="w3-bar-item w3-button"><i class="ion-clipboard icon-small"></i> Attendance</a>
  <a href="#" class="w3-bar-item w3-button"><i class=" ion-calendar icon-small"></i> Timetable</a>
  <a href="#" class="w3-bar-item w3-button"><i class="ion-chatbox-working icon-small"></i> Feedback</a>
</div>

<ul>
<li><a href="#"><i class="ion-bookmark icon-med"></i>  </a></li>
  <li class="dropdown"> 
    <a href="javascript:void(0)" class="dropbtn"><i class="ion-power icon-med"></i> </a>
    <div class="dropdown-content">
      <a href="#">Feed</a>
      <a href="changepassword.php">Change password</a>
      <a href="login.php">Logout</a>
    </div>
  </li>
</ul>

<div class="row">
  <div class="column">
    <div class="card1">
      <h3><i class="ion-compose icon-big"></i>Projects</h3>
      <p>3</p>
    </div>
  </div>

  <div class="column">
    <div class="card2">
      <h3><i class="ion-document icon-big"></i>Courses</h3>
      <p>8</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card3">
      <h3><i class="ion-checkmark-circled icon-big"></i>Attendance</h3>
      <p>60%</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card4">
      <h3><i class="ion-trophy icon-big"></i>Activities</h3>
      <p>2</p>
    </div>
  </div>
</div>

<table>
  <tr>
    <th>Courses</th>
    <th>Teacher</th>
    <th>Credits</th>
    <th>Status</th>
    
  </tr>
  <tr>
    <td>Analysis of algorithm</td>
    <td>Mr. Andrew reyes</td>
    <td>4</td>
    <td>Registered</td>
  </tr>
  <tr>
    <td>Communication Skills</td>
    <td>Dr. Curt Connors</td>
    <td>4</td>
    <td>Registered</td>
  </tr>
  <tr>
    <td>Numerical Methods</td>
    <td>Dr. Otto Octavius</td>
    <td>4</td>
    <td>Registered</td>
  </tr>
  <tr>
    <td>Micro Economics</td>
    <td>Mr. garren field</td>
    <td>3</td>
    <td>Registered</td>
  </tr>
  <tr>
    <td>Bussiness Studies</td>
    <td>Mr. Yoshi Tannamuri</td>
    <td>4</td>
    <td>Registered</td>
  </tr>
  <tr>
    <td>Disaster Management</td>
    <td>Dr. Giovanni Rovelli</td>
    <td>3</td>
    <td>Registered</td>
  </tr>
  <tr>
    <td>Seminar</td>
    <td>All Faculty</td>
    <td>1</td>
    <td>Registered</td>
  </tr>
  <tr>
    <td>E-commerce</td>
    <td>Ms. sara james</td>
    <td>4</td>
    <td>Registered</td>
  </tr>
</table>

</body>
</html>
  


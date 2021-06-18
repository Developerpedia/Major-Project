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

body{
background:#dddddd; 
background-size:cover;
background-position:center;
height:100vh; 
background-attachment: fixed;
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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width:70%;
  margin-top:2ch;
  background:#fff;
  position:absolute;
  left:18%;
  
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px 3ch 1ch 2ch;
  background:#fff;
}

tr:nth-child(even) {
  border:1px solid #dddddd;
}

table a{
  display: inline-block;
  color: #ff6b6b;
  text-align: center;
  text-decoration: none;
  font-family:monospace;
  font-size:18px;
}

table a:hover,a:active{
  color:#1dd1a1;
}

.link a{
    color:#1dd1a1;
    text-decoration:none;
    font-size:18px;
    margin-left:3ch;
}
 </style>
 </head>
 <body>


   
<ul>
<li><a href="#"><i class="ion-bookmark icon-med"></i>  </a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="ion-university icon-med"></i> </a>
    <div class="dropdown-content">
      <a href="#">Feed</a>
      <a href="changepassword.php">Change password</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>

<div class="link">

<a href="admindashboard.php">Go Back To Dashboard</a>

</div>
 
 

<?php 
include("connection.php");
$query = "SELECT * FROM TEACHER";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{
?>
<table>
  <tr>
    <th>Teacher ID</th>
    <th>Profile pic</th>
    <th>Teacher Name</th>
    <th>Department</th>
    <th>Faculty Rank</th>
    <th>Operation</th>
  </tr>


<?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <th>".$result['teacher-id']."</th>
        <th><a href='$result[picsource]'><img src='".$result['picsource']."'height='100' widthh='100'/></a></th>
        <th>".$result['teachername']."</th>
        <th>".$result['department']."</th>
        <th>".$result['faculty']."</th>
        <td><a href='delete.php?te=".$result["teacher-id"]." &tn=".$result["teachername"]." &dp=".$result["department"]." &fc=".$result["faculty"]."' onclick='return checkdelete()' alt='update'>Delete</a></td>
        </tr>";
    }
}
  else 
  {
      echo "NO Record Found";
  } 

?>
</table>
<script>
function checkdelete()
{
  return confirm('Are you sure you want to delete this entry');
}

</script>
</body>
</html>

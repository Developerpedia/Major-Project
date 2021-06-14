<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.container{
    display:table;
    position:absolute;
    left:30%;
    top:25%;
}

h1{
  Font-family:monospace;
  font-size:200%;
  font-weight: 100%;
  text-align:center;
  padding-right:1ch;
  
}
p{
    font-family:'Times New Roman';
    font-size:130%;
    text-align:center;
}

.avatar {
  vertical-align: middle;
  width: 130px;
  height: 130px;
  border-radius: 50%;
}

.teach{
  vertical-align: middle;
  width: 250px;
  height: 130px;
  border-radius: 50%;
}

.admin{
  vertical-align: middle;
  width: 140px;
  height: 140px;
  border-radius: 50%;
}

 .row a {
  display: inline-block;
  color: #3498db;
  font-family:monospace;
  font-size:130%;
  text-align: center;
  padding: 14px 9ch 6px 35ch;
  text-decoration: none;
  padding-left:4ch;
}

 a:hover{
  color:#2ecc71;
 }

 .row{
     display:table;
     padding-bottom:25ch;
     margin-right:2ch;
 }

</style>
</head>
<body>
<div class="container">
    <h1>ilearing management system</h1>
<p>"An investment in knowledge pays the best interest"</p>

<img src="student.png" alt="Avatar" class="avatar">

<img src="teacher.png" alt="teach" class="teach">

<img src="admin.png" alt="Avatar" class="admin">


<div class="row">
<a href="login.php">Student</a>
<a href="teacherlogin.php">Teacher</a>
<a style="padding-left:6ch" href="admin.php">Admin</a>
</div>
</div>
</body>
</html>

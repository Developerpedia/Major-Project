<!DOCTYPE html>
<html lang="en">
 <head>
     <link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>
    <body>
	<ul class="navbar bg-white">
    
    <li><a href="#brochure">Blog</a></li>
    <li><a href="#blog">Docs</a></li>
    <li><a class="active" href="#home">About</a></li>
    </ul>
    <a class="btn btn-ghost" href="index.php">Main Menu</a>

	<div class="container"> 
     <form method="POST" text-align="center" >
     <h1>Admin Login</h1>
      
      <label for="email"><b>Username</b></label>
    <input type="Text" placeholder=" " name="username" required>
      

     <label for="psw"><b>Password</b></label>
    <input type="password" placeholder=" " name="password" required>
      
     <button type="submit" name="submit">LOGIN</button>
     
</form>
<h2 class = "forgetpasslink">
<a href="#">Forget Password ?</a>
</h2>
<p> copyright &copy ilearning 2021 </p>
</div>
</div>
</body>
</html>

<?php
include ("connection.php");
session_start();
?>

<?php
if(isset($_POST['submit']))
{
    $user = $_POST['username'];
    $pwd = $_POST['password'];
    $query =  "SELECT * FROM ADMINS WHERE username='$user' && password='$pwd'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {   
        header('location:admindashboard.php');
        $_SESSION['user_name']=$user;
        
    }
    else
    {
        echo "login failed";
    }
}
?>

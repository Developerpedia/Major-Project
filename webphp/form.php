<!DOCTYPE html>
<html lang="en">
 <head>
     <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <form action="insert.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td>
     <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="977">977</option>
      <option value="978">978</option>
      <option value="979">979</option>
      <option value="973">973</option>
      <option value="972">972</option>
      <option value="974">974</option>
     </select>
     <input type="phone" name="phone" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>

    </body>
  </html>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['phoneCode']) && isset($_POST['phone'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "webphp";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM login WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO login(username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$username, $password, $gender, $email, $phoneCode, $phone);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
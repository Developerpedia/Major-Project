<?php
include("connection.php");
$teachername = $_GET['tn'];
$query = "DELETE FROM TEACHER WHERE TEACHERNAME='$teachername'";
$data= mysqli_query($conn,$query);
if($data)
{
  echo "<script>alert('Record Deleted') </script>";
   ?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/webphp/view2.php">

<?php
}
else
{
    echo "delete process failed";
}
?>

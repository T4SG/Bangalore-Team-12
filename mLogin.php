<html><body>
<?php
   $con= new mysqli('localhost','root','','isli') or die("Could not connect!");

$username = mysqli_real_escape_string($con, $_POST['username']);
$password=mysqli_real_escape_string($con, $_POST['pwd']);

//$sql="INSERT INTO users mTable('$username','$password')";
$sql = "SELECT * FROM mTable where userName='$username' and password='$password'

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Successfully loggedin";
    
?>

<br>
<br>
<a href="trial.html">
</html>


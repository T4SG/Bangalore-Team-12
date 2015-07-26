 <?php
	error_reporting(E_ALL);
    ini_set('display_errors',1);
	//ini_set('html_errors', 1);
   $con= new mysqli('localhost','root','code4good','isli') or die("Could not connect!");

//$username = mysqli_real_escape_string($con, $_POST['mentorid']);
//$password=mysqli_real_escape_string($con, $_POST['mentorpwd']);
//echo "$username";
//echo "$password";
echo "$con";
$sql = "SELECT * FROM mentor_reg where mentorid="1" and password="abcd"";
if(mysqli_query($con,$sql))
{
//echo "$username";
}

$schools = "SELECT * FROM school where mentorid = '$username'";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}   
?>
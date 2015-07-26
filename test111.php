<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php
        $connect=mysql_connect("localhost","root","code4good") or die("Unable to Connect");
        mysql_select_db("isli") or die("Could not open the db");
        $username = mysqli_real_escape_string($con, $_POST['mentorid']);
$password=mysqli_real_escape_string($con, $_POST['mentorpwd']);
		$showtablequery="SELECT * FROM mentor_reg where mentorid='$username' and password='$password'";
        $query_result=mysql_query($showtablequery);
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo $showtablerow[0]." ";
        } 
        ?>
</head>

<body>
</body>
</html>

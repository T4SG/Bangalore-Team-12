<?php require_once('../Connections/conn22.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO class_observations (english, benches, noise, classroom_mgmt, student_behaviour) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['tb1'], "int"),
                       GetSQLValueString($_POST['tb2'], "int"),
                       GetSQLValueString($_POST['tb3'], "int"),
                       GetSQLValueString($_POST['tb4'], "int"),
                       GetSQLValueString($_POST['tb5'], "int"));

  mysql_select_db($database_conn22, $conn22);
  $Result1 = mysql_query($insertSQL, $conn22) or die(mysql_error());
}

mysql_select_db($database_conn22, $conn22);
$query_Recordset1 = "SELECT * FROM class_observations";
$Recordset1 = mysql_query($query_Recordset1, $conn22) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CLASSROOM OBSERVATIONS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../../../../wamp/ISLI11/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../../../../wamp/ISLI11/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../../../../../wamp/ISLI11/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../../../../wamp/ISLI11/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

				<div>

<form method="POST" action="<?php echo $editFormAction; ?>" name="form2">				
				<table width="100%" border="0" cellspacing="15" cellpadding="2">
 
   <tr>
    <td >Are the faculty fluent in English? &nbsp;</th>
    <td><input name="tb1" type="text" size="35" maxlength="20">&nbsp;</th>
  </tr>
  <tr>
    <td>Are benches sufficient to accommodate the students?&nbsp;</td>
    <td><input name="tb2" type="text" size="35" maxlength="20">&nbsp;</th>
  </tr>
  <tr>
    <td>How is the noise level of the class?&nbsp;</td>
    <td><input name="tb3" type="text" size="35" maxlength="20">&nbsp;</th>
  </tr>
  <tr>
    <td>Are enough strategies implemented for classroom management?&nbsp;</td>
    <td><input name="tb4" type="text" size="35" maxlength="20">&nbsp;</th>
  </tr>
  <tr>
    <td>Are the students disciplined?&nbsp;</td>
    <td><input name="tb5" type="text" size="35" maxlength="20">&nbsp;</th>
  </tr>
<tr>
    <td></td>
    <td>&nbsp;</th>
  </tr><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <tr>
    <td></td>
    <td>&nbsp;</th>
  </tr><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <tr>
    <td></td>
    <td>&nbsp;</th>
  </tr><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <tr>
    <td></td>
    <td>&nbsp;</th>
  </tr><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <tr>
    <td></td>
    <td>&nbsp;</th>
  </tr><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</table>
		<input name="" type="submit">
		<input type="hidden" name="MM_insert" value="form2">
				  </form>	
						
						
						</p>
						
</div>
              
			  </div>
                <!-- /.row

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-

admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

              
				
				
				

    <!-- jQuery -->
    <script src="../../../../../../wamp/ISLI11/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../../../../wamp/ISLI11/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../../../../../wamp/ISLI11/js/plugins/morris/raphael.min.js"></script>
    <script src="../../../../../../wamp/ISLI11/js/plugins/morris/morris.min.js"></script>
    <script src="../../../../../../wamp/ISLI11/js/plugins/morris/morris-data.js"></script>

</body>

</html>
<?php
mysql_free_result($Recordset1);
?>

<?php
//student login
include("admin_connection.php");
			session_start();
if(isset($_REQUEST['s_login']))
{
$a=$_REQUEST['s_email'];
$b=$_REQUEST['s_pass'];

$sql="select * from myproject.stud_reg";
$result= mysql_query($sql);

while($row=mysql_fetch_row($result))
{
if($a==$row[5]&&$b==$row[6])
{
$_SESSION['std']=$row[0];
header("location:home.php");
}
else 
{
echo"invalid user name and password";
}
}
}
?>
 <?php
 //admin login
include("admin_connection.php");
			
if(isset($_REQUEST['admin_login']))
{
$a=$_REQUEST['admin_email'];
$b=$_REQUEST['admin_pass'];

$sql="select * from myproject.admin_login";
$result= mysql_query($sql);

while($row=mysql_fetch_row($result))
{
if($a==$row[1]&&$b==$row[2])
{
$_SESSION['std']=$row[0];
header("location:admin_home.php");
}
else 
{
echo"invalid user name and password";
}
}
}
			  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Educational
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Educational</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.tabs.setup.js"></script>
<style type="text/css">
<!--
.style3 {
	font-size: 36px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>
</head>
<body>
<?php

/*if(isset($_SESSION['std']))
{
$d=$_SESSION['std'];
$sql="delete count, que_no,mark,session_id,session_no from question where session_no=$d";
$result=mysql_query($sql);
}*/
unset($_SESSION['std']);
header("location:home.php");
?>
</body>
</html>
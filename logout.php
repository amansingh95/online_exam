<html>
<head>
<?php
//student login
include("admin_connection.php");
			session_start();
if(isset($_SESSION['std']))
{
$ss=$_SESSION['std'];
$sql="delete  from question where session_no=$ss";
 $result=mysql_query($sql);
unset($_SESSION['std']);
?>
 
 <?php
header("location:index.php");
}else
{header("location:index.php");
}
?>
</head>
<body>

</body>
</html>
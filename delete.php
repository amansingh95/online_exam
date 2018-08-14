<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>


<body>
<form id="kkk"method="post">
<?php
include("admin_connection.php");
$id=$_REQUEST['row_id'];
$sql="delete from myproject.admin where id=$id";
$result=mysql_query($sql);
header("location:view.php");
?>
</form>>
</body>

</html>

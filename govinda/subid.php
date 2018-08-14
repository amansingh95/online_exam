

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<?php

session_start();

if($_SESSION['std']!="")
{
?>
<body>
<table width="350" height="300" border="3" align="center">
  <tr>
    <td colspan="2" align="center"><em><strong>examinar varification </strong></em></td>
  </tr>
  <tr>
    <td width="96" align="center">enroll no </td>
    <td width="234" align="center"><input type="text" name="textfield" /></td>
  </tr>
  <tr>
    <td align="center">sub_id </td>
    <td align="center"><input type="text" name="textfield2" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="ok" type="submit" id="ok" value="ok" /></td>
  </tr>
</table>
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
<?php
}
else{
header("location:home.php");
}
?>
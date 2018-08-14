

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body>
<table width="350" height="300" border="3" align="center">
  <tr>
    <td width="330" align="center">select a exam </td>
  </tr>
  <tr>
    <td align="center"><?php    include("admin_connection.php");
 
  $sql="select * from   exam_detail ";
               $result=mysql_query($sql);
			   while($row1=mysql_fetch_row($result))
			   {
			     echo "<input name=ok type=submit id=ok value=$row[0] />"; 
				 } ?></td>
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

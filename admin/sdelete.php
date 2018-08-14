<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>


<body>
<form id="kkk"method="post">
<?php
include("admin_connection.php");

 echo $id=$_REQUEST['snum'];




$sql="select exam_detail_id from myproject.sub_detail where sub_id=$id";

$result=mysql_query($sql);
$row=mysql_fetch_row($result);

echo"gogd" .$row[0];

 $sql="delete from myproject.exam where 	sub_id=$id";
$result=mysql_query($sql);
 $sql="delete from myproject.sub_detail where 	sub_id=$id";
$result=mysql_query($sql);

$sql="delete from myproject.stud_mark where id=$id";
$result=mysql_query($sql);

header("location:sview.php?num=$row[0]");
?>
</form>
</body>

</html>

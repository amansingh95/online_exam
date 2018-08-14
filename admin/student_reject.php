<?php 
	    include("admin_connection.php");


$feedback_id=$_REQUEST['stud_num'];
echo $sql1="delete from myproject.stud_reg  where stud_id=$feedback_id";
$result1=mysql_query($sql1);
header("location:admin_delete_student.php");
?>
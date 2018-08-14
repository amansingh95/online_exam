<?php 
	    include("admin_connection.php");


$feedback_id=$_REQUEST['feedback_id'];
echo $sql1="delete from myproject.feedback  where feedback_id=$feedback_id";
$result1=mysql_query($sql1);
header("location:admin_feedback.php");
?>
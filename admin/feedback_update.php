<?php 
	    include("admin_connection.php");

$y="y";
$feedback_id=$_REQUEST['feedback_id'];
$sql1="update myproject.feedback set accept='".$y."' where feedback_id=$feedback_id";
$result1=mysql_query($sql1);
header("location:admin_feedback.php");
?>
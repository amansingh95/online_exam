<?php 
	    include("admin_connection.php");

$n="n";
$feedback_id=$_REQUEST['feedback_id'];
$sql1="update myproject.feedback set accept='".$n."' where feedback_id=$feedback_id";
$result1=mysql_query($sql1);
header("location:admin_feedback.php");
?>
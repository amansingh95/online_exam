<?php

session_start();

if($_SESSION['std']!="")
{

?>
<?php 
/*//A: RECORDS TODAY'S Date And Time
echo "month".$month =date('m'); echo "days".$days =date('d') ;
    echo "hour".$hours =date('H') ; echo "minute".$min =date('i') ; echo "second".$sec =date('s') ;
	                                                                     if($sec==10){echo "govinda";}
 $today = time();

//B: RECORDS Date And Time OF YOUR EVENT
$event = mktime(0,0,0,4,13,2017);

//C: COMPUTES THE DAYS UNTIL THE EVENT.
$countdown = round(($event - $today)/86400);

//D: DISPLAYS COUNTDOWN UNTIL EVENT
echo "$countown days until Christmas";*/


 ?>
 <?php
 /*?> //10 day timer
// insert into db
include("admin_connection.php");
$time_now = date("Y-m-d H:i:s");

//+10 days = 864000 seconds

$new_time = strtotime($time_now)+864000;

$new_timestamp = date("Y-m-D H:i:s", $new_time);

mysql_query("insert into end_time (time) values ($new_timestamp)");
<?php */?>
 
 

   


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EXAM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="JavaScript">

TargetDate ="4/16/2017 3:00 AM";
BackColor = "palegreen";
ForeColor = "navy";
CountActive = true;
CountStepper = -1;
LeadingZero = true;

DisplayFormat = "%%H%% Hours, %%M%% Minutes, %%S%% Seconds.";


FinishMessage = "Time Over!";

</script>
<script language="JavaScript" src="//scripts.hashemian.com/js/countdown.js"></script>
<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	font-weight: bold;
	background-color: #FFFFFF;
	color: #591434;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {color: #FFFFFF}
.style4 {font-size: xx-large}
.style6 {
	font-size: xx-large;
	font-weight: bold;
	color: #591434;
}
.style8 {	font-size: 14px;
	font-style: italic;
	color: #000000;
}
-->
</style>
</head>

<body bgcolor="#FFFFCC" >
</body>
</html>
<?php
}
else{
header("location:home.php");
}
?>
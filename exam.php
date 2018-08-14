<?php

session_start();

if($_SESSION['std']!="")
{

?>
   


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EXAM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style{
    border-radius: 8em;
    background: transparent;
    color: steelblue;
    font-weight: 800;}
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




<form name="h" method="post">


<table width="1241" height="116" border="0" align="center">
  <tr>
    <td height="112" colspan="4" align="center" bgcolor="#FFFFCC"><span class="style6">WELCOME TO ONLINE EXAM </span></td>
    </tr>

 
  <tr>
    <td width="158" height="49" align="right"  bgcolor="#591434"><div align="center"><a href="index.php" class="style2" style="text-decoration:none">HOME&nbsp;&nbsp;&nbsp;&nbsp; </a></div></td>
    <td width="344" height="49" align="right"  bgcolor="#591434"><div align="center"><a href="viewfeedback.php" class="style2" style="text-decoration:none">VIEW FEEDBACK</a><a href="contactus.php" class="style2" style="text-decoration:none"></a></div></td>
    <td width="405" height="49" align="right"  bgcolor="#591434"><div align="center"><a href="viewfeedback.php" class="style2" style="text-decoration:none"></a><a href="contactus.php" class="style2" style="text-decoration:none">CONTACT US</a></div></td>
    <td width="316" height="49" align="right"  bgcolor="#591434"><div align="center"><a href="logout.php" class="style2" style="text-decoration:none">LOGOUT</a></div></td>
  </tr>
  </table>
   <table width="1241" height="465" border="0" align="center">
  <tr align="center">
    <td width="991" height="422"><div align="center">
      <table width="300"  height="200" border="0">
          <td bgcolor="#591434" style="
    BORDER-RADIUS: 1EM;
"><div align="center">
              <h3 class="style3">Select Your Exam </h3>
            </div></td>
		  <?php    include("admin_connection.php");
 
  $sql="select * from   exam_detail where stud_exam ='YES' ";
               $result=mysql_query($sql);
			   while($row1=mysql_fetch_row($result))
			   {
			 
			 echo" <tr>  
    <td width=414><div align=center>
      <h3><br>  <input  name=ok  type=submit  value=$row1[0] class=style 
> </br></h3>";
    
	
			  
				 }
				 if(isset($_REQUEST['ok']))
				 {
				$p=$_REQUEST['ok'];
				 $sql="select exam_detail_id from   exam_detail  where exam_name='$p' ";
               $result=mysql_query($sql);
			   $row2=mysql_fetch_row($result);
			   
			   header("location:subject.php?exam_detail_id=$row2[0]"); }
				?>
          </table>
      <p>&nbsp;</p>
    </div>
  <tr align="center">
    <td height="37"><div align="left"><span class="style8">MADE BY AMAN SINGH AND GOVINDA SHINDE</span> @.
    </div>
  </table>
</form>
</body>
</html>
<?php
}
else{
header("location:index.php");
}
?>
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
    font-weight: 800;
	    WIDTH: 18EM;}
.style3 {color: #FFFFFF}
.style6 {font-size: xx-large; color: #591434; font-weight: bold; }
.style7 {
	color: #591434;
	font-weight: bold;
	background-color: #FFFFFF;
}
.style8 {
	font-size: 14px;
	font-style: italic;
	color: #000000;
}
.style9 {
	color: #F0F0F0;
	font-size: 24px;
}
.style10 {
	font-size: 24px;
	color: #FFFFFF;
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
      <td width="158" height="49" align="right"  bgcolor="#591434"><div align="center"><a href="index.php" class="style6 style9" style="text-decoration:none">HOME&nbsp;&nbsp;&nbsp;&nbsp; </a></div></td>
      <td width="344" height="49" align="right"  bgcolor="#591434"><div align="center" ><a href="viewfeedback.php" class="style6 style9"style="text-decoration:none; font-weight: bold;">VIEW FEEDBACK</a></div></td>
      <td width="405" height="49" align="right"  bgcolor="#591434"><div align="center"><a href="contactus.php" class="style6 style9" style="text-decoration:none">CONTACT US</a></div></td>
      <td width="316" height="49" align="right"  bgcolor="#591434"><div align="center"><a href="logout.php" class="style6 style9" style="text-decoration:none">LOGOUT</a></div></td>
    </tr>
  </table>
  <table width="1241" height="440" border="0" align="center">
  <tr>
    <td width="995" height="328"><div align="center">
      <table width="300"  height="200" border="0">
          <tr>
            <td bgcolor="#591434"  style="
    BORDER-RADIUS: 1EM;
"><div align="center">
              <h2 class="style3">Select Your Subject </h2>
            </div></td>
          </tr>
		   <?php    
 
 
  include("admin_connection.php");
 $exam=$_REQUEST['exam_detail_id'];
  $sql="select sub_name from sub_detail where exam_detail_id=$exam";
               $result=mysql_query($sql);
			   while($row1=mysql_fetch_row($result))
			   {
			 
	 echo" <tr>  
    <td width=414><div align=center>
      <h3><br> <input  name=ok type=submit class=style value=$row1[0] /></br></h3>
    </div></td></tr>";
			    
				 }
				 if(isset($_REQUEST['ok']))
				 {
				$p=$_REQUEST['ok'];
				echo $sql="select sub_id from sub_detail where sub_name='$p' ";
               $result=mysql_query($sql);
			   $row2=mysql_fetch_row($result);
			 echo  $_SESSION['go']=$row2[0];
			     header("location:exam1.php?exam_id=$exam");
			 
			   
			 
				 }
				?>
          </table>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td height="106"><div align="left"><span class="style8">MADE BY AMAN SINGH AND GOVINDA SHINDE</span> @. </div></td>
  </tr>
</table>
</form>
</body>
</html>
<?php
}
else{
header("location:home.php");
}
?>
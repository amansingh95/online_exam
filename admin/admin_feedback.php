<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>feedback</title>
<style type="text/css">
<!--
.style4 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 24px;
}
.style10 {color: #000099}
.style11 {
	color: #00FF33;
	font-weight: bold;
	font-size: 24px;
}
.style12 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
}
.style13 {
	font-size: 24px;
	font-weight: bold;
	color: #006600;
}
-->
</style>
<link href="css/styleadmin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style10 {font-weight: bold}
.style14 {color: #666666}
.style15 {font-size: xx-large}
-->
</style></head>



<body > 
<form id="ss" method="post"> 
   

  <p>
    <!-- Start: page-top -->
  </p>
  <div align="center">
    <table width="1318" height="132" border="0" bgcolor="#FFFFFF" align="center" >
      <tr>
        <td height="68" colspan="4" align="center"  class="adminheading style15" >ADMIN PANEL </td>
      </tr>
      <tr class="linktext">
  <td width="150" height="53" style="border-radius: 1em 1em/3em;"><a href="admin_home.php" class="style14" style="text-decoration:none">HOME</a></td>
       <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="295"><a href="admin_view_student.php" class="style14"style="text-decoration:none">STUDENT DETAIL </a> </div></td>
         <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="226"><a href="admin_feedback.php"class="style14" style="text-decoration:none" >VIEW FEEDBACK </a></td>
      <td style="border-radius: 1em 1em 1em 1em;"style="border-style:none;"width="174"  width="117"> <div align="center"><a href="logout.php" style="text-decoration:none"class="style14">LOGOUT</a></td>
 
    </table>
</div>
<p>&nbsp;</p>
<table width="1305" height="192" border="10" bordercolor="#000000" align="center">
  <tr>
       
    <td width="170"  bgcolor="#000000" ><span class="style4">Email</span></td>
    <td width="493" bgcolor="#000000"><span class="style4">Feedback</span></td>
    <td width="395" bgcolor="#000000"  ><span class="style4">Action</span></td>
  </tr>
  <?php 
	include("admin_connection.php");
	$sql1="select * from feedback";
	   $result1=mysql_query($sql1);
	   while($row1=mysql_fetch_row($result1))
	   {
	  echo"<tr>";
	  if($row1[3]=='y')
	  {
	   echo"<td style=border-style:none><span class=style11>$row1[2]</span></td>";
	   }else
	   {
	   echo"<td style=border-style:none><span class=style12>$row1[2]</span></td>";
	  
	   }
	   if($row1[3]=='y')
	  {
	   echo"<td style=border-style:none><span class=style11>$row1[1]</span></td>";
	   }else
	   {
	   echo"<td style=border-style:none><span class=style12>$row1[1]</span></td>";
	  
	   }
	           
	           echo" <td style=border-style:none><label>
                     <a href= feedback_update.php?feedback_id=$row1[0]><span class=style13>Accept</span></a>
                     <a href=feedback_reject.php?feedback_id=$row1[0]><span class=style13>Reject</span></a>
                     <a href=feedback_delete.php?feedback_id=$row1[0] ><span class=style13>Delete</span></a>
                     </label>";
					
			echo"    </td>     
	         </tr>";
             }
	
	?>
</table>



<span class="style10"><span class="style12">.</span><span class="style11">.</span></span> <span class="style13">.</span>
</form>
</body>
</html>
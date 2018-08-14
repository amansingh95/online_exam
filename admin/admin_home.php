<?php
session_start();
if($_SESSION['admin']!="")
{
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin home page</title>

<style type="text/css">
<!--
.style6 {color: #009900}
.style9 {font-size: 24px}

-->
</style>
<link href="css/*" rel="stylesheet" type="text/css" />
<link href="css/styleadmin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {color: #666666}
.style14 {font-size: xx-large}
-->
</style>
</head>
<html>
<body class="body"> 

<table width="100%" height="430" border="0" align="center" >
  <tr>
  <td height="81" colspan="7" class="adminheading  style14"> 
      ADMIN PANEL    </td>
  </tr  >
  <tr class="linktext">
   <td width="150" height="53" style="border-radius: 1em 1em/3em;"><a href="/index.php" class="style12" style="text-decoration:none">HOME</a></td>
   <td style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"> <a href="makeexam.php"class="style12" style="text-decoration:none">ADD EXAM </a> </td>
    <td  style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"  width="218"><a href="makesub.php" class="style12"style="text-decoration:none">ADD SUBJECT </a></td>
    <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="241"> <a href="add_sub.php"class="style12" style="text-decoration:none" >ADD QUESTION </a> </td>
    <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="295"><a href="admin_view_student.php"class="style12" style="text-decoration:none">STUDENT DETAIL </a> </div></td>
    <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="226"><a href="admin_feedback.php" class="style12"style="text-decoration:none" >VIEW FEEDBACK </a></td>
   <td border-radius:="" 1em="" 7em="" 5em;="" style="border-style:none;border-radius: 1em 7em 1em 5em;" width="174"> <div align="center"><a href="logout.php"style="text-decoration:none"class="style12">LOGOUT</a></div></td>
  </tr>
  
  <tr>
  
  
    <td height="286" colspan="7"  class="table" >
	
	</br></br></br></br></br>
	 <table width="275" >
      <tr class="Related1">
	  
        <td width="267" height="30" colspan="2" class="Related2" >Related Activitis </td>
        </tr>
		  
      <tr   >
	  </table>
	<table width="270" height="247" border="0"  class="Related3" class="related4" style="background-color:white">
  <tr>
        <td height="46"><a href="" ><img src="images/forms/icon_edit.gif" width="21" height="21" alt="image" /></a></td>
        <td><a href="examview.php" class="style6 style9"  style="margin: 0px 0px -4px -117px;text-decoration:none">View Exam </a></td>
  </tr>
      <tr>
        <td height="40"><a href=""><img src="../id_admin/html/images/forms/icon_plus.gif" alt="" width="21" height="24" /></a></td>
        <td><a href="makeexam.php" class="style6 style9"  style="margin: 0px 0px -4px -117px;text-decoration:none">Add Exam </a></td>
      </tr>
      <tr>
        <td height="48"><img src="../id_admin/html/images/forms/icon_plus.gif" alt="" width="21" height="24" /></td>
        <td><a href="makesub.php" class="style6 style9"  style="margin: 0px 0px -4px -103px;text-decoration:none">Add Subject </a></td>
      </tr>
      <tr>
        <td width="150" height="48"><a href=""><img src="../id_admin/html/images/forms/icon_plus.gif" alt="" width="21" height="24" /></a></td>
        <td width="272"><a href="add_sub.php" class="style6 style9"  style="margin: 0px 0px -4px -103px;text-decoration:none">Add Question </a></td>
  </tr>
		 
		 <tr>
        <td width="150" height="48"><a href=""><img src="images/forms/icon_minus.gif" width="21" height="21" alt="image" /></a></td>
        <td width="272"><a href="admin_delete_student.php" class="style6 style9"  style="margin: 0px 0px -4px -103px;text-decoration:none">Reject Student </a></td>
        </tr>
		 <tr>        </tr>
</table>
	</td>
  </tr>
</table>

</body>
</html>
<?php
}
else
{header ("Location:admin_login.php");}
?>

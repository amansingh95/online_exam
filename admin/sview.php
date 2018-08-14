<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Internet Dreams</title>
<style type="text/css">
<!--


.heading{
    font-size: xx-large;
    font-family: fantasy;
    background: #f9e9d6;
    border: bisque;
    border: 55em 9em 7em 21em;
    border: aqua;
    border-radius: 1em 1em;
}
.headingname{    border-radius: 4px 50px;}
.text{font-size: 30px;
   
    font-family: sans-serif;
    text-align: -webkit-center;}
	.datatable{    background-color: khaki;
    border-radius: 13em/3em;
    font-size: 10px;}
-->
</style>
<style type="text/css">
<!--
.style6 {color: #009900}
.style9 {font-size: 24px}

	
<?php /*?>.style10 { background: gold;
    border: ridge #1a2438;
    border-radius: 23em/54em;}<?php */?>
-->
</style>
<link href="css/styleadmin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.heading1 {    font-size: xx-large;
    font-family: fantasy;
    background: #f9e9d6;
    border: bisque;
    border: 55em 9em 7em 21em;
    border: aqua;
    border-radius: 1em 1em;
}
.headingname1 {border-radius: 4px 50px;}
.style10 {color: #666666}
-->
</style>
</head>
<body > 
<form id="ss" method="post"> 
   <div align="center">
    <table width="1318" height="132" border="0" bgcolor="#FFFFFF" align="center" >
      <tr>
        <td height="68" colspan="4" align="center"  class="adminheading" >ADMIN PANEL </td>
      </tr>
      <tr class="linktext">
  <td width="150" height="53" style="border-radius: 1em 1em/3em;"><a href="admin_home.php" class="style10" style="text-decoration:none">HOME</a></td>
       <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="295"><a href="admin_view_student.php"class="style10" style="text-decoration:none">STUDENT DETAIL </a> </div></td>
         <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="226"><a href="admin_feedback.php" class="style10"style="text-decoration:none" >VIEW FEEDBACK </a></td>
      <td style="border-radius: 1em 1em 1em 1em;"style="border-style:none;"width="174"  width="117"> <div align="center"><a href="logout.php"style="text-decoration:none"class="style10">LOGOUT</a></td>
 
    </table>
</div>
<table  border="0" style="background-color: peachpuff;
    border-radius: 15em 15em/25em;
    border-width: 23px;
    border-color: chocolate;
    border-bottom: 457em;
    border: slateblue;" >
  <tr>
    <td width="90%"><span class="style11">.
      </span>
    </td>
  <td width="240">
<table width="995" border="0">
  <tr>
    <td><table width="900" height="86" border="0" align="center">
      <tr class="heading1"  style="    border-color: darkgreen;" align="center">
        <td width="185" class="headingname1">Sub Name</td>
        <td width="133" class="headingname1">Mark</td>
        <td width="272" class="headingname1">Passing Mark</td>
        <td width="253" colspan="2" class="headingname1">Action</td>
      </tr>
      <?php
  
include("admin_connection.php");
session_start();
$id=$_REQUEST['num'];
$_SESSION['a']=$id;
  $id=$_SESSION['a'];

$sql1="select * from myproject.sub_detail where exam_detail_id=$id";
$result1=mysql_query($sql1);
$row11=mysql_fetch_row($result1);

/*if($row11=="")
{
header("location:examview.php");

}*/


$sql="select * from myproject.sub_detail where exam_detail_id=$id";

$result=mysql_query($sql);
while($row=mysql_fetch_row($result))
{




 echo"  <tr> 
    <td class=datatable><h1 class=text>$row[2]</h1></td>
    <td  class=datatable><h1 class=text>$row[3]</h1></td>
    <td  class=datatable><h1 class=text>$row[4]</h1></td>
    <td class=datatable align=center width=600><a href=qview.php?num=$row[0] ><span class=style11>";?><img src="uplode/IMG-20170417-WA0005.jpg"style="cursor:pointer;"title="VIEW QUESTIONS " alt="image" width="50" height="50" /><?PHP echo"</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href=sdelete.php?snum=$row[0]><span class=style13>";?><img src="uplode/IMG-20170417-WA0009.jpg" style="cursor:pointer;"title="DELETE THE SUBJECT" alt="image" width="50" height="50" /><?php echo"</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=view_result.php?snum=$row[0]><span class=style13>";?><img  src="uplode/results_icon.jpg" style="cursor:pointer;"title="VIEW THE RESULT " alt="image" width="59" height="50"/><?php echo"</span></a></td></tr>";
	}
	
	 ?>
      <?php
if(isset($_REQUEST['aa']))
{

header("location:examview.php");
}


 ?>
      <tr>
        <td></td></td>
      </tr>
      <tr>
        <td></tr></td>
      </tr>
    </table></td>
    <td><table width="596" height="363" border="0">
      <tr>
        <td width="17%" align="right"><table align="left" >
          <tr  class="Related1">
            <td  width="331" height="41" colspan="2" class="Related2">Related Activitis </td>
          </tr>
        </table>
        <p>&nbsp;</p>
          <table width="335" height="193" border="0"  bordercolor="#FFFFFF" align="left"  bgcolor="#FFFFFF">
              <tr  >
                <td height="46" align="center"><a href=""><img src="images/forms/icon_edit.gif" width="21" height="21" alt="image" /></a></td>
                <td><a href="examview.php" class="style6 style9" style="text-decoration:none">View Exam </a></td>
              </tr>
              <tr>
                <td height="48"><img src="../id_admin/html/images/forms/icon_plus.gif" alt="" width="21" height="24" /></td>
                <td><a href="makeexam.php" class="style6 style9" style="text-decoration:none">Add Exam </a></td>
              </tr>
              <tr>
                <td width="27" height="48"><a href=""><img src="../id_admin/html/images/forms/icon_plus.gif" alt="images" width="21" height="24" /></a></td>
                <td width="407"><a href="add_sub.php" class="style6 style9" style="text-decoration:none">Add </a><a href="add_sub.php" class="style6 style9" style="text-decoration:none">Question</a></td>
              </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
<p><a href="examview.php" class="style6 style9" style="text-decoration:none"></a></p>

  
</form>
</body>

</html>

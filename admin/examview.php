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
.style10 {color: #666666}
-->
</style>
</head>
<body > 
<form id="ss" method="post"> 
   

  <p>
    <!-- Start: page-top -->
  </p>
  <div align="center">
    <table width="1318" height="132" border="0" bgcolor="#FFFFFF" align="center" >
      <tr>
        <td height="68" colspan="4" align="center"  class="adminheading" >ADMIN PANEL </td>
      </tr>
      <tr class="linktext">
  <td width="150" height="53" style="border-radius: 1em 1em/3em;"><a href="admin_home.php" class="style10" style="text-decoration:none">HOME</a></td>
       <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="295"><a href="admin_view_student.php"class="style10" style="text-decoration:none">STUDENT DETAIL </a> </div></td>
         <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="226"><a href="admin_feedback.php"class="style10" style="text-decoration:none" >VIEW FEEDBACK </a></td>
      <td style="border-radius: 1em 1em 1em 1em;"style="border-style:none;"width="174"  width="117"> <div align="center"><a href="logout.php"style="text-decoration:none"class="style10">LOGOUT</a></td>
 
    </table>
	   <table  border="0" style="background-color: peachpuff;
    border-radius: 15em 15em/25em;
    border-width: 23px;
    border-color: chocolate;
    border-bottom: 457em;
    border: slateblue;" >
          <tr>
            <td width="1048"><table width="1008" height="79" border="0" align="center">
			
              <tr class="heading" style="    border-color: darkgreen;">
                <td width="261" height="75"align="center" class="headingname">Exam Name</td>
                <td width="272" align="center"  class="headingname">Exam Title</td>
                <td  width="278" align="center"  class="headingname">Exam Date</td>
                <td width="179"align="center"  class="headingname">Action</td>
				
              </tr>
			  
              
              <?php
		  
 include("admin_connection.php");
  $sql="select * from   exam_detail where stud_exam='NO' ";
               $result=mysql_query($sql);
			   while($row1=mysql_fetch_row($result))
			   {
			   
			   
			   
         echo " <tr height=10>  
            <td class=datatable><h3 class=text >$row1[0]</h3></td>
			<td class=datatable><h3 class=text >$row1[1]</h3></td>
			<td class=datatable><h3 class=text >$row1[2]</h3></td>
           
       
            <td width=900 class=datatable><div align=center><a href=sview.php?num=$row1[4]><img src=uplode/IMG-20170417-WA0007.jpg alt=image width=50 height=50 /></a>
          &nbsp;&nbsp;&nbsp;&nbsp; <a href=edelete.php?num=$row1[4] ><span class=style5><img src=uplode/IMG-20170417-WA0010.jpg alt=image width=50 height=50 /></span></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href=stud_giveexam.php?r=$row1[4]><img src=uplode/1493022365_upload.png alt=image width=50 height=50 /></a></div></td>
		 <td ALIGN= CENTER></td></tr>";
			}
			 $sql="select * from   exam_detail where stud_exam='YES' ";
               $result=mysql_query($sql);
			   while($row1=mysql_fetch_row($result))
			   {
			   
			   
			   
         echo " <tr height=10>  
            <td class=datatable><h3 class=text >$row1[0]</h3></td>
			<td class=datatable><h3 class=text >$row1[1]</h3></td>
			<td class=datatable><h3 class=text >$row1[2]</h3></td>
           
       
            <td  class=datatable><div align=center><a href=sview.php?num=$row1[4]><img src=uplode/IMG-20170417-WA0007.jpg alt=image width=50 height=50 /></a>
          &nbsp;&nbsp;&nbsp;&nbsp; <a href=edelete.php?num=$row1[4] ><span class=style5><img src=uplode/IMG-20170417-WA0010.jpg alt=image width=50 height=50 /></span></a><a href=stud_giveexam1.php?r=$row1[4]><img src=uplode/1493022223_upload_cancel.png alt=image width=50 height=50 /></a></div></td>";
		
			}
			
			
			?>

            </table></td>
            <td width="240"><table width="326" height="363" border="0">
      <tr>
        <td></br>
            </br>
            </br>
            </br>
            </br></td>
      </tr>
      <tr>
         <td width="17%" align="left"><table align="left" >
     
     <tr  class="Related1">
       <td  width="336" height="41" colspan="2" class="Related2">Related Activitis </td>
     </tr>
		</table>
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
    </table></td>
          </tr>
        </table>
	    </form>
        
</body>
</html>
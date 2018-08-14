<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>make exam</title>

<style type="text/css">
<!--
.textbox{    border-color: magenta;
    border-radius: 1em;
    width: 14em;
    height: 3em;}
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #009900;
	background-color: #FFFFFF;
}
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
.style10 {font-weight: bold}
.style11 {color: #666666}
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
        <td height="68" colspan="4" align="center"  class="adminheading" ><span class="adminheading  style14">ADMIN PANEL </span></td>
      </tr>
      <tr class="linktext">
  <td width="150" height="53" style="border-radius: 1em 1em/3em;"><a href="admin_home.php" class="style11" style="text-decoration:none">HOME</a></td>
       <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="295"><a href="admin_view_student.php" class="style11" style="text-decoration:none">STUDENT DETAIL </a> </div></td>
         <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="226"><a href="admin_feedback.php" class="style11" style="text-decoration:none" >VIEW FEEDBACK </a></td>
      <td style="border-radius: 1em 1em 1em 1em;"style="border-style:none;"width="174"  width="117"> <div align="center"><a href="logout.php"style="text-decoration:none" class="style11">LOGOUT</a></td>
 
    </table>
  </div>
  <p>&nbsp;    </p>
  <table border="0" width="109%" cellpadding="0" cellspacing="0" id="content-table" class="style10">
<tr>
	<th width="3%" rowspan="3" class="sized"></th>
	<th width="2%" class="topleft"></th>
	<td colspan="2" id="tbl-border-top"></td>
	<th width="2%" class="topright"></th>
	<th width="4%" rowspan="3" class="sized">&nbsp;</th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td width="89%">
	<!--  start content-table-inner -->
	
	
	
		<!--  start step-holder -->
		
		
		  <p>&nbsp;</p>
		  <table width="100%" class="table">
		    <tr><td><table width="550" align="left">
              <tr class="newexam">
                <td width="542" height="52" colspan="2" align="center" class="exam"><h1 >Add Question</h1></td>
              </tr>
            </table>
		      <p>&nbsp;</p>
		      <table width="500" border="0" align="left" height="400"  class="newexamback"  >
              
              <tr>
                <td width="215">                  <h2 align="center"><strong>Select Exam Name</strong></h2></td>
                <td width="275">                  <h2 align="justify"><strong>
                  <select name="exam" id="exam" class="textbox" requred >
	<?php
	
	 include("admin_connection.php");
 
  $sql="select * from   exam_detail  ";
               $result=mysql_query($sql);
			   while($row1=mysql_fetch_row($result))
			   {
			    $a=$row1[0]; 
     echo "<option value=$row1[4]>$a</option>";
	 }
	  ?> 
    </select> 
                </strong></h2></td>
              </tr>
              <tr>
                <td>                  <h2 align="center"><strong>Select Sub </strong></h2></td>
                <td>                  <h2 align="justify"><strong>
                  <select name="sub"  id="sub" class="textbox" requred >
	<?php
	
	 include("admin_connection.php");
 
  $sql="select * from   sub_detail where exam_detail_id=0";
               $result=mysql_query($sql);
			   while($row1=mysql_fetch_row($result))
			   {
			  $a=$row1[2]; 
     echo "<option value=$row1[0]>$a</option>";
	 }
	  ?> 
        </select>
                </strong></h2></td>
              </tr>
              <tr>
                <td>                  <h2 align="center">Enter The Total Question </h2>
                  </td>
                <td>                  <h2 align="justify"><strong>
                  <input name="no_question" type="text" required="required"  class="textbox" />
				  
                </strong></h2> <?php $error= "Enter Less Then  50 Question"; echo $error;?></td>
              </tr>
              
              <tr>
                <td colspan="2"><h2><strong >
					<div align="center"><strong ><strong >
					<strong ><strong >
					 <input name="ok" type="submit" class="style1" id="ok" value="OK" />
					</strong></strong> 
					<input name="cancle" type="submit" class="style1" id="cancle" value="CANCLE" />
					</strong></strong></div>
                      </strong></h2>                </td>
              </tr>
          </table>
		
			<p>
			  <?php $error= "Enter Less Then 50 Question";
	  // coading of redirecting to next page
	  if(isset($_REQUEST['ok']))
	  { 
	     $q=$_REQUEST['no_question'];
	        if($q<=50 && $q>=1)
			{
	     
	echo  $sub_id=$_REQUEST['sub'];
	echo  $exam_id=$_REQUEST['exam'];
	 
			   
			   
			    
			  
	 
	
	  
/* $sql1="select sub_id  from  sub_detail where  sub_name='$sub_id'";
               $result1=mysql_query($sql1);
			   $row1=mysql_fetch_row($result1);
			     $sql4="select exam_detail_id  from   exam_detail where  exam_name='$exam_id'";
               $result4=mysql_query($sql4);
			   $row4=mysql_fetch_row($result4);
			   */	  
			   
			   session_start();
	 $_SESSION['q']=$q;
	 $sub=$_REQUEST['sub'];
;
	$exam1=$_REQUEST['exam'];
	  
	
	  
	 header("location:admin_add_mulltiple.php?sub=$sub&&exam=$exam1");
	  }
	  else{$error;}}

	  ?>
	  
    <td width="17%" align="right"><table align="right" >
     
     <tr  class="Related1">
       <td  width="336" height="41" colspan="2" class="Related2">Related Activitis </td>
     </tr>
		</table>
		<table width="335" height="193" border="0"  bordercolor="#FFFFFF" align="right"  bgcolor="#FFFFFF">
    
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
        <td width="407"><a href="makesub.php" class="style6 style9" style="text-decoration:none">Add </a><a href="add_sub.php" class="style6 style9" style="text-decoration:none">Subject</a></td>
      </tr>
    </table>
	
</tr>
</table>
 </td></tr></table>
<!--  end content-table-inner  -->





</form>
</body>
</html>
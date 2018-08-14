<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>make exam</title>

<style type="text/css">
<!--
.box1{ border-color: magenta;
    border-radius: 1em;
	    width: 36em;
    height: 5em;
	    border-color: fuchsia;
}
.box{ border-color: magenta;
    border-radius: 1em;
	    border-color: fuchsia;
	   }
	.select{ border-color: magenta;
    border-radius: 1em;
	    border-color: fuchsia;}   

}


	
<?php /*?>.style10 { background: gold;
    border: ridge #1a2438;
    border-radius: 23em/54em;}<?php */?>
-->
</style>
<link href="css/styleadmin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style10 {font-weight: bold}
-->
.que{    font-size: 17px;}

.heading{
    font-size: 20px;
    font-family: fantasy;
    background: #f9e9d6;
    border: bisque;
    border: 55em 9em 7em 21em;
    border: aqua;
    border-radius: 1em 1em;
}
.headingname{    border-radius: 4px 50px;}
.text{font-size: 15px;
   
    font-family: sans-serif;
    text-align: -webkit-center;}
	.datatable{    background-color: khaki;
    border-radius: 13em/3em;
   
	 font-size: 17px;}
-->
</style>
<link href="css/styleadmin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style11 {color: #666666}
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
        <td height="68" colspan="7" align="center"  class="adminheading" >ADMIN PANEL </td>
      </tr>
      <tr class="linktext">
  <td width="150" height="53" style="border-radius: 1em 1em/3em;"><a href="admin_home.php" class="style11" style="text-decoration:none">HOME</a></td>
  <td style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"> <a href="makeexam.php"class="style11" style="text-decoration:none">ADD EXAM </a> </td>
    <td  style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"  width="218"><a href="makesub.php"class="style11" style="text-decoration:none">ADD SUBJECT </a></td>
    <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="241"> <a href="add_sub.php" class="style11"style="text-decoration:none" >ADD QUESTION </a> </td>
       <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="295"><a href="admin_view_student.php"class="style11" style="text-decoration:none">STUDENT DETAIL </a> </div></td>
         <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="226"><a href="admin_feedback.php" class="style11"style="text-decoration:none" >VIEW FEEDBACK </a></td>
      <td style="border-radius: 1em 1em 1em 1em;"style="border-style:none;"width="174"  width="117"> <div align="center"><a href="logout.php"style="text-decoration:none"class="style11">LOGOUT</a></td>
 
    </table>
        </table>
  </div>
 
</form>
<form name="abc" method="post" enctype="multipart/form-data">

 <?php 
  include("admin_connection.php");
  echo"<table border=0 cellpadding=0 cellspacing=0 align=center >";
  session_start();
 $s_id= $_REQUEST['sub'];
   $e_id=$_REQUEST['exam'];
		      $r=$_SESSION['q']; 
			  
			  
			 
 echo " <table width=684 height=140 border=0 align=center>";
			  
			   for($i=0; $i<$r; $i++){ ?>


  <tr>
    <th height="42" colspan="5" height="25%" align="left"></div><div align="center"> <div align="center"><H4>ADD QUESTION</H4> </div></th>
   </tr>
   <tr>
   
    <td height="42"  height="25%" align="left"></div><div align="center"><H3>Q.No:<?php echo $i+1;?></H3> </div></td>
	 <div><th height="42" colspan="4" height="25%" align="left"></div><div align="center"><div> <?php echo "<textarea  name=que[] id=que  class=box1 required=required ></textarea> "; ?></div></th>
  </tr>
  <tr>
    <th width="95" height="40"><div align="center">OPTION.A</div></th>
    <th width="107"><div align="center">OPTION.B</div></th>
    <th width="91"><div align="center">OPTION.C</div></th>
    <th width="115"><div align="center">OPTION.D</div></th>
    <th width="137"><div align="center">ANSWER</div></th>
  </tr>
  <tr>
    <td height="48"> <?php echo "<textarea  name=opt1[] id=opt1  required=required class=box></textarea>"; ?></td>
    <td> <?php  echo "<textarea  name=opt2[] id=opt2 class=box required=required></textarea>"; ?></td>
    <td> <?php   echo "<textarea  name=opt3[] id=opt3 class=box required=required></textarea>";?></td>
    <td> <?php   echo "<textarea  name=opt4[] id=opt4 class=box required=required></textarea>";?></td>
    <td align="center"> <?php echo "<select name=ans[] id=ans class=box  required=required>
			  <option value=A>A</option>
			  <option value=B>B</option>
			  <option value=C>C</option>
			  <option value=D>D</option>
			  </select>";
			  $Q_no[]=$i+1;
			  
			  if(isset($_REQUEST['insert']))
	{
	$a=$_REQUEST['que'];
	 $b=$_POST['ans'];
	 $d=$_POST['opt2'];
	$f=$_POST['opt4'];
	$c=$_POST['opt1'];
	$e=$_POST['opt3'];
	
  
 
 $sql="insert into exam(question,answer,option1,option2,option3,option4,sub_id,exam_detail_id,Q_no)
   values('".$a[$i]."',
   '".$b[$i]."',
   '".$c[$i]."',
   '".$d[$i]."',
   '".$e[$i]."',
   '".$f[$i]."',
   '".$s_id."',
   '".$e_id."',
   '".$Q_no[$i]."'
   
   
   
   
  )";
 
   $result=mysql_query($sql);
    $sql1="update myproject.sub_detail set exam_detail_id ='". $e_id."' 
  
  where sub_id='$s_id'";
  $result1=mysql_query($sql1);
  header("location:qview.php?num=$s_id");
   }
   echo"</td>
  </tr>

";
	
	}
	
			   ?>
			   <?php   if(isset($_REQUEST['cancel'])){header("Location:add_sub.php");} ?>
			    <tr>
    <th height="42" colspan="3" height="25%" align="left"><div align="center"><div> <div align="center"><H4><a href="add_sub.php"><input type="button" class="style10" value="Cancel" name="cancel" style="
    background-color: floralwhite;
    border-color: fuchsia;
    font-size: xx-large;
"></a>
</H4> </div></th>
     
	 <th height="42" colspan="3" height="25%" align="left"><div align="center"><div> <div align="center"><H4><input type="submit" name="insert" class="style10" value="Submit" style="
    background-color: floralwhite;
    border-color: fuchsia;
    font-size: xx-large;/></H4> </div><td class="style1"></th>
	   <span class="style10"></span>
	  
   </tr>
			  
			   </table>
</form>
</body>
</html>
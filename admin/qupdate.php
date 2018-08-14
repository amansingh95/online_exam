<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<style type="text/css">
<!--A
.textarea{BORDER-RADIUS: 1EM;
    TEXT-SIZE-ADJUST: 38EM;
    WIDTH: 390PX;
    HEIGHT: 54PX;}
.style2 {
	font-size: 16px;
	color: #009900;
	background-color: #FFFFFF;
	font-weight: bold;
}
.que{  BORDER-RADIUS: 1EM;
    TEXT-SIZE-ADJUST: 38EM;
    WIDTH: 390PX;
    HEIGHT: 54PX;     border-color: crimson;
	    margin-left: -11em;}

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
	 .select{border-color: brown;
    border-radius: 1em;
    width: 4em;
    height: 2em;
	margin-left: -29em;}
	.option{ BORDER-RADIUS: 1EM;
	    margin-left: -11em;
    TEXT-SIZE-ADJUST: 38EM;
    WIDTH: 180PX;
    HEIGHT: 54PX;     border-color: crimson;}
.option1 {BORDER-RADIUS: 1EM;
	    margin-left: -11em;
    TEXT-SIZE-ADJUST: 38EM;
    WIDTH: 180PX;
    HEIGHT: 54PX;     border-color: crimson;}
.que1 {BORDER-RADIUS: 1EM;
    TEXT-SIZE-ADJUST: 38EM;
    WIDTH: 390PX;
    HEIGHT: 54PX;     border-color: crimson;
	    margin-left: -11em;}
.option11 {BORDER-RADIUS: 1EM;
	    margin-left: -11em;
    TEXT-SIZE-ADJUST: 38EM;
    WIDTH: 180PX;
    HEIGHT: 54PX;     border-color: crimson;}
.que11 {BORDER-RADIUS: 1EM;
    TEXT-SIZE-ADJUST: 38EM;
    WIDTH: 390PX;
    HEIGHT: 54PX;     border-color: crimson;
	    margin-left: -11em;}
.style10 {color: #666666}
	
-->
</style>



	
<?php /*?>.style10 { background: gold;
    border: ridge #1a2438;
    border-radius: 23em/54em;}<?php */?>

</style>
<link href="css/styleadmin.css" rel="stylesheet" type="text/css" />
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
  <td width="150" height="53" style="border-radius: 1em 1em/3em;"><a href="admin_home.php" class="style10" style="text-decoration:none">HOME</a></td>
  <td style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"> <a href="makeexam.php"class="style10" style="text-decoration:none">ADD EXAM </a> </td>
    <td  style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"  width="218"><a href="makesub.php"class="style10" style="text-decoration:none">ADD SUBJECT </a></td>
    <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="241"> <a href="add_sub.php"class="style10" style="text-decoration:none" >ADD QUESTION </a> </td>
       <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="295"><a href="admin_view_student.php"class="style10" style="text-decoration:none">STUDENT DETAIL </a> </div></td>
         <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="226"><a href="admin_feedback.php"class="style10" style="text-decoration:none" >VIEW FEEDBACK </a></td>
      <td style="border-radius: 1em 1em 1em 1em;"style="border-style:none;"width="174"  width="117"> <div align="center"><a href="logout.php"style="text-decoration:none"class="style10">LOGOUT</a></td>
 
    </table>
        </table>
<p>
  <?php
	//coading of update
	
  include("admin_connection.php");
  $id=$_REQUEST['qnum'];
  $sql="select * from myproject.exam where exam_id=$id";
  $result=mysql_query($sql);
  while($row=mysql_fetch_row($result))
  {
  ?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="99%" height="386" border="0" align="center" style="background-color: peachpuff;
    border-radius: 15em 15em/25em;
    border-width: 23px;
    border-color: chocolate;
    border-bottom: 457em;
    border: slateblue;">
	<b>
  <tr>
  <td align="right" font-size:="" 26px;="" font-family:="" monospace;="" style="
    font-size: 24px;
    font-family: fantasy;
">QUESTION</td>
    <td align="center"><textarea name="question"  id="question" class="que11" style=" margin-left:-13em;" ><?php echo $row[1];?></textarea>
    </td>
  </tr>
  <tr>
    <td align="right" font-size:="" 26px;="" font-family:="" monospace;="" style="
    font-size: 24px;
    font-family: fantasy;
">OPTION.A</td>
    <td  align="center"><textarea name="opt_1" id="opt_1" class="option11" style=" margin-left:-28em;"><?php echo $row[3];?></textarea>
    </td>
  </tr>
  <tr>
    <td align="right" font-size:="" 26px;="" font-family:="" monospace;="" style="
    font-size: 24px;
    font-family: fantasy;
">OPTION.B</td>
    <td  align="center"><textarea name="opt_2" id="opt_2" class="option11" style=" margin-left:-28em;"><?php echo $row[4];?></textarea>
    </td>
  </tr>
  <tr>
   <td align="right" font-size:="" 26px;="" font-family:="" monospace;="" style="
    font-size: 24px;
    font-family: fantasy;
">OPTION.C</td>
    <td  align="center"><textarea name="opt_3" id="opt_3" class="option11" style=" margin-left:-28em;"><?php echo $row[5];?></textarea>
    </td>
  </tr>
  <tr>
    <td align="right" font-size:="" 26px;="" font-family:="" monospace;="" style="
    font-size: 24px;
    font-family: fantasy;
">OPTION.D</td>
    <td  align="center"><textarea name="opt_4" id="opt_4" class="option11" style=" margin-left:-28em;"><?php echo $row[6];?></textarea>
    </td>
  </tr>
  <tr>
   <td align="right" font-size:="" 26px;="" font-family:="" monospace;="" style="
    font-size: 24px;
    font-family: fantasy;
">SELECT ANSWER</td>
    <td  align="center" ><?php
 
		if($row[2]=='A')
		{
		echo "<select name=select  class=select >
            
            <option  value='A'>A</option>
             <option  value='B'>B</option>
             <option  value='C'>C</option>
             <option  value='D'>D</option></select>	";
		
		  }
	  if($row[2]=='B')
		{
		echo "<select name=select class=select  >
             <option  value='B'>B</option>
            <option  value='A'>A</option>
             <option  value='C'>C</option>
             <option  value='D'>D</option></select>	";
		
		  }
		if($row[2]=='C')
		{
		echo "<select name=select class=select  >
            <option  value='C'>C</option>
            <option  value='A'>A</option>
             <option  value='B'>B</option>
             <option  value='D'>D</option></select>	";
		
		  }
			if($row[2]=='D')
		{
		echo "<select name=select  class=select  >
            <option  value='D'>D</option>
            <option  value='A'>A</option>
             <option  value='B'>B</option>
             <option  value='C'>C</option></select>	";
             
		
		  }
			 
          
		  ?>
    </td>
  </tr>
  </b>
  <tr>
    <td colspan="2"  align="center"><input name="update" type="submit" class="style2" id="update" value="update" />
        <input name="cancle" type="reset" class="style2" id="cancle" value="cancle" />
    </td>
  </tr>
</table>
<p>&nbsp;</p>

  <?php
  if(isset($_REQUEST['update']))
  {
  $question=$_REQUEST['question'];
  $ans=$_REQUEST['select'];
  $opt_1=$_REQUEST['opt_1'];
  $opt_2=$_REQUEST['opt_2'];
  $opt_3=$_REQUEST['opt_3'];
  $opt_4=$_REQUEST['opt_4'];
  $sql1="update myproject.exam set question='".$question."',answer='".$ans."',	option1='".$opt_1."',	option2='".$opt_2."',
  option3='".$opt_3."',option4='".$opt_4."' 
   where exam_id=$id";
    $result1=mysql_query($sql1);
 
  $sql3="select sub_id from myproject.exam where exam_id=$id";
  $result3=mysql_query($sql3);
  $row3=mysql_fetch_row($result3);
  
 
  header("location:qview.php?num=$row3[0]");
  }
  
  
   
   }
	?>
  
</form>
</body>
</html>
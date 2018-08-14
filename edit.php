<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Educational
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Educational | Full Width</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>
<style type="text/css">
<!--
.style1 {
	font-size: xx-large;
	font-weight: bold;
}
.style8 {font-size: 18px; font-weight: bold; }
-->
</style>
</head>
<body>
<form id="up" method="post">
<div class="wrapper col0"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="../index.html">ONLINE_EXAMINATION</a></h1>
      <p>&nbsp;</p>
    </div>
   
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li><a href="admin_home">Home</a><a href="view.php">VIEW</a>
        <ul>
          <li><a href="#">Libero</a></li>
          <li><a href="#">Maecenas</a></li>
          <li><a href="#">Mauris</a></li>
          <li class="last"><a href="#">Suspendisse</a></li>
        </ul>
        </li>
      <li>
        <ul>
          <li><a href="#">Lorem ipsum dolor</a></li>
          <li><a href="#">Suspendisse in neque</a></li>
          <li class="last"><a href="#">Praesent et eros</a></li>
        </ul>
      </li>
      <li class="active"></li>
      <li></li>
      <li class="last"></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first"></li>
      <div align="center" class="style1">EDIT</div>
    </ul>
	  	<?php
	//coading of update
	
  include("admin_connection.php");
  $id=$_REQUEST['row_id'];
  $sql="select * from myproject.exam where exam_id=$id";
  $result=mysql_query($sql);
  while($row=mysql_fetch_row($result))
  {
  ?> 
    <table width="99%" height="386" border="0" align="center">
      <tr>
        <td><div align="center"><span class="style8">QUESTION</span></div></td>
        <td>
          <div align="center">
            <textarea name="question" id="question"><?php echo $row[1];?></textarea>
          </div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style8">SELECT ANSWER</span></div></td>
        <td><div align="center">
		<?php
 
		if($row[2]=='A')
		{
		echo "<select name=select value='A' >
            
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option></select>	";
		
		  }
		else if($row[2]=='B')
		{
		echo "<select name=select value='B' >
          
		
            
            <option>B</option>
            <option>A</option>
            <option>C</option>
            <option>D</option></select>	
		";
		  }
		 else if($row[2]=='C')
		 {
		echo "
         <select name=select  >
		
            <option>C</option>
            
            <option>A</option>
            <option>B</option>
            <option>D</option></select>	";
			
			}
			elseif($row[2]=='D')
			{
		echo "
          		
            <select name=select  >
			
            <option>D</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
		</select>	
          ";
			}
			 
          
		  ?>
          </div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style8">OPTION_1</span></div></td>
        <td><div align="center">
          <textarea name="opt_1" id="opt_1"><?php echo $row[3];?></textarea>
        </div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style8">OPTION_2</span></div></td>
        <td><div align="center">
          <textarea name="opt_2" id="opt_2"><?php echo $row[4];?></textarea>
        </div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style8">OPTION_3</span></div></td>
        <td><div align="center">
          <textarea name="opt_3" id="opt_3"><?php echo $row[5];?></textarea>
        </div></td>
      </tr>
      <tr>
        <td><div align="center"><span class="style8">OPTION_4</span></div></td>
        <td><div align="center">
          <textarea name="opt_4" id="opt_4"><?php echo $row[6];?></textarea>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input name="update" type="submit" id="update" value="update" />
          <input name="cancle" type="reset" id="cancle" value="cancle" />
        </div>          <div align="center"></div></td>
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
  header("location:view.php");
  }
  
  
   
   }
	?>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer"><br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6"></div>
</form>
</body>
</html>
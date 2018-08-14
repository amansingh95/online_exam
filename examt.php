<?php

session_start();

if($_SESSION['std']!="" )
{

?><?php 
include("admin_connection.php");
//CODE OF RANDOMELY SELECTED QUESTION FROM DATABASE start hear/*

 
	             
	 
	 
	
	 

          //CODE OF RANDOMELY SELECTED QUESTION FROM DATABASE end hear
   //****************xxxxxxxxxxxxx************xxxxxxxxxxxxx**************xxxxxxxxxxxxxxxxxx*****************xxxxxxxxxxxxxxxxxxx********xxx  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EXAM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style2 {font-size: 18}
-->
</style>
<link href="css/style - Copy (2).css" rel="stylesheet" type="text/css" />
</head>

<body>
<form method="post" name="kkk" id="kkk" >
<div align="center"></div>
<table width="524" border="1" align="center">
  <tr>
    <td height="160" colspan="2"><div align="center" class="style2">
      <h1>select a exam </h1>
    </div></td>
    </tr>
  
  <?php    include("admin_connection.php");
 
  $sql="select * from   exam_detail  ";
               $result=mysql_query($sql);
			   while($row1=mysql_fetch_row($result))
			   {
			 echo" <tr>  <td width=94 height=63 align=center>&nbsp;</td>
    <td width=414><div align=center>
      <h3><br><input name=ok type=submit  value=$row1[0] /></br></h3>
    </div></td>";
			    
				 }
				 if(isset($_REQUEST['ok']))
				 {
				$p=$_REQUEST['ok'];
				 $sql="select exam_detail_id from   exam_detail  where exam_name='$p' ";
               $result=mysql_query($sql);
			   $row2=mysql_fetch_row($result);
			   
			   header("location:subject.php?exam_detail_id=$row2[0]");
			   
			  // echo $row2[3];
/*$sql="select from myproject.sub_detail where exam_detail_id =$id";
$result=mysql_query($sql);
while($row1=mysql_fetch_row($result))
{
echo $row1[0];
}*/

//header("location:exam1.php?$row[1]");
				 }
				?>
</table>

<table width="524" border="1" align="center">
  
  </tr>
</table>
<div>


</form>
</body>

</html>
</body>
</html>
<?php
}
else{
header("location:home.php");
}
?>
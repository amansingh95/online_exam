<?php

session_start();

if($_SESSION['std']!="")
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>exam</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<form name="h" method="post">
  <table width="611" height="453" border="1" align="center">
    <tr>
      <td height="106" colspan="2"><div align="center" class="style1">RESULT</div></td>
    </tr>
    <tr>
      <td width="159" height="114">&nbsp;</td>
      <td width="324"><div align="center" class="style2">ONLINE-EXAM</div></td>
    </tr>
    <tr>
      <td height="42">Name</td>
      <td><?php 
	  
	  include("admin_connection.php");
	  $session=$_SESSION['std'];
	           $sql="select * from myproject.stud_reg";
	             $result=mysql_query($sql); 
				 while($row=mysql_fetch_row($result))
				 {
				  if($session==$row[0])
				   {
				    $n= strtoupper ($row[1]);
					echo $n;
				
				echo"</td>
    </tr>
    <tr>
      <td>Roll-No</td>
      <td>$row[0]</td>
    </tr>
    <tr>
      <td>Total-Marks </td>
      <td>	";$sql9="select MAX(count) from  question  ";
                         $result9=mysql_query($sql9);
					    $row9=mysql_fetch_array($result9);
						 echo  $row9[0];
						echo"</td>
    </tr>
    <tr>
      <td>Total-Right</td>
      <td>";
	  
	  	 $sql5="select 	COUNT(mark) from  question where mark='r'  ";
	  $result5=mysql_query($sql5);
	  $row5=mysql_fetch_row( $result5);
	  
	  echo $row5[0];
	 
	
	
					
						 echo"</td>
    </tr>
    <tr>
      <td>Total-Wrong</td>
      <td>";$sql5="select 	COUNT(mark) from  question where mark='w'  ";
	  $result5=mysql_query($sql5);
	  $row6=mysql_fetch_row( $result5);
	  
	  echo $row6[0];echo"</td>
	  
    </tr>
    <tr>
      <td>Perscentage</td>
      <td>";$h=100;
	$total=$row9[0];
	$right=$row5[0];
	$per=($h/$total)*$right;
	echo $per;
	  echo"</td>
    </tr>
  </table>
";}}

?>
</form>
</body>
</html>
<?php
}
else{
header("location:home.php");
}
?>
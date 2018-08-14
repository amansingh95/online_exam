<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>feedback</title>
<style type="text/css">
<!--
.img{ border-radius: 8em;}
.style1 {
	font-size: xx-large;
	font-weight: bold;
	color: #000000;
}
.style3 {color: #FFFFFF; font-weight: bold; }
.style4 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<body style> 
<form method="post" id="hgv">

<table width="1318" height="92" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="1308"><div align="center" class="style1">ONLINE EXAM  </div></td>
  </tr>
  
</table>



<table width="1305" height="70" border="0" align="center">
 
  <tr>
    <td width="164" height="64" bgcolor="#591434" ><div align="center"><a href="index.php" class="style3" style="text-decoration:none">HOME</a></div></td>
     <td width="286" height="64" bgcolor="#591434" ><div align="center"><a href="viewfeedback.php" class="style3" style="text-decoration:none">VIEW FEEDBACK</a></div></td>
    <td width="331" height="64" bgcolor="#591434" ><div align="center"><a href="contactus.php" class="style3" style="text-decoration:none">CONTACT US</a></div></td>
    <td width="496" height="64" bgcolor="#591434" ><div align="center"><a href="logout.php" class="style3" style="text-decoration:none">LOGOUT</a></div></td>
   </tr>
</table>
<table width="1305" height="72" border="0" align="center">
  <tr>
   
    <td width="145" height="66" align="center	"><div align="center" class="style4">Name</div></td>
    <td width="146" align="center	"><div align="center" class="style4">Image</div></td>
    <td width="421" align="center	"><div align="center" class="style4">Email</div></td>
    <td width="577" align="center	"><div align="center" class="style4">Feedback</div></td>
    </tr>
	
  <?php 
	include("admin_connection.php");
	
	 
	$sql1="select * from feedback";
	   $result1=mysql_query($sql1);
	   while($row1=mysql_fetch_row($result1))
	   { 
	   if($row1[3]=='y')
	   {
	  $sql2="select * from myproject.stud_reg";
	   $result2=mysql_query($sql2);
	   while($row2=mysql_fetch_row($result2))
	    {
	    if($row1[2]==$row2[5])
		{
		 echo" <tr>
		 <td align=center>
		   ";$upper=strtoupper ($row2[1]);
		   echo $upper; 
	  echo" </td>";
	  
	  echo" <td align=center>";
		  if($row1[2]==$row2[5])
		 {
		 echo "<img src=uplode/$row2[9] alt=image class=img  width=100 height=70 />"; 
		 }
		   
	  echo" </td>";}}
	 
    
  echo"  <td align=center>
	    $row1[2]
	   
	    </td>
    <td align=center>
	$row1[1]
	
	</td>
	</tr>";
    
}}	

	?>
</table>
</form>
</body>
</html>
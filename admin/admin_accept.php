<?php
  include("admin_connection.php");
  
 $r=$_REQUEST['feedback'];
  $sql6="select * from feedback";
	   $result6=mysql_query($sql6);
	   while($row6=mysql_fetch_row($result6))
	   {
  if($r!=$row6)
  {
   $sql="insert into myproject.feedback(accept)values('".$r."')";
   $result=mysql_query($sql);
   }
   }
   header("location:admin_feedback.php");
    
   
?>
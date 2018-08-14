<?php
		  
		   include("admin_connection.php");
 
 $id=$_REQUEST['r'];
  $sql1="update myproject. exam_detail
 set stud_exam ='".'YES'."'
  
  where exam_detail_id=$id";
  $result1=mysql_query($sql1);
  header("location:examview.php")
			
			
			
			?>
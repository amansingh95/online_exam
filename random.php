<?php 
include("admin_connection.php");
//CODE OF RANDOMELY SELECTED QUESTION FROM DATABASE start hear/*
$session=$_SESSION['std'];
  if(isset($_SESSION['std']))
   { 
	 $count=1;
	  
		$f=1;
		  for($i=1; $i<=50; $i++)//button click
            {
			 $session=$_SESSION['std'];
		     $range_result=mysql_query("select MAX(`exam_id`)AS max_id,MIN(`exam_id`)AS min_id from exam");
             $range_row=mysql_fetch_object($range_result);
             $r=mt_rand($range_row->min_id,$range_row->max_id);
			 if($f==1)
			  
			  {$session=$_SESSION['std'];
		     $range_result=mysql_query("select MAX(`exam_id`)AS max_id,MIN(`exam_id`)AS min_id from exam");
             $range_row=mysql_fetch_object($range_result);
             $r=mt_rand($range_row->min_id,$range_row->max_id);}
			 
		         $sql5="select * from myproject.exam where exam_id=$r";
                 $result5=mysql_query($sql5);
				 $row5=mysql_fetch_row($result5);
				
			     $sql="select * from myproject.question where que_no=$r and session_no=$session ";
				 $result=mysql_query($sql);
				 $row1=mysql_fetch_row($result);
				 
				 if(  $row1[0]=="" )
			      {
			        if($row5[0]==$r )
				     {
				   echo   $sql="insert into myproject.question(que_no,count,session_no)values('". $r."','". $count."','".$session."')";
				      $result=mysql_query($sql);
			         echo $count++;
			         }
			       }
			     else
			       {
			         $f=1;
			        }     
				  
			     
			     }   
				 }
	             
	 
	 
	
	 

          //CODE OF RANDOMELY SELECTED QUESTION FROM DATABASE end hear
   //****************xxxxxxxxxxxxx************xxxxxxxxxxxxx**************xxxxxxxxxxxxxxxxxx*****************xxxxxxxxxxxxxxxxxxx********xxx  
?>

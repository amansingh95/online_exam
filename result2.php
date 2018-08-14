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
.style5 {
	font-size: 24px;
	font-weight: bold;
	color: #400000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-style: italic;
}
.style7 {color: #FF0000}
.style6 {font-size: xx-large; color: #591434; font-weight: bold; }
.style9 {color: #F0F0F0;
	font-size: 24px;
}
.style10 {color: #FF0000; font-style: italic; font-weight: bold; }
-->
</style>

</head>
<body>
<script>
function myFunction() {
    window.print();
}
</script>
<form id="back" method="post">
<table width="996" border="0" align="center">
  <tr  bgcolor="#FBF4C4">
    <td height="154" colspan="2" ><h2 align="center" class="style1"><var></span>
      <?php include("admin_connection.php"); $d=$_SESSION['go']; $sql5="select * from sub_detail where sub_id=$d";
	 $result5=mysql_query($sql5); 
				$row5=mysql_fetch_row($result5); 
				$sql6="select * from exam_detail where exam_detail_id =$row5[1]";
	 $result6=mysql_query($sql6); 
				$row6=mysql_fetch_row($result6); 
			echo	$row6[1];
			$exam_name=$row6[0];
				?></var></h2><?php include("admin_connection.php");
	  $session=$_SESSION['std'];
	         
				
       $sql="select * from myproject.stud_reg where stud_id	=$session";
	             $result=mysql_query($sql); 
				$row=mysql_fetch_row($result); 
				
				$image=$row[9];
				//unset($_SESSION['std']);
				
				
				 ?><?php  $n= strtoupper ($row[1]);
					  ?> 
      <h2 class="style5">CERTIFICATE SHOWING THE NUMBER OF MARK OBTAINED &nbsp;<?php echo $n; $student_name=$n;?></h2>
    </td>
    <td width="150"><img src="result_clip_image002.jpg" alt="ikm" width="159" height="154" /></td>
  </tr>
  <tr  bgcolor="#CC9933">
    <td width="276" height="67"  align="center"><strong>EXAM DATE </strong></td>
    <td width="548"  align="center">
      <p><strong>ENROLL NUMBER </strong></p>
      
    </td>
    <td  align="center"><strong>AGE </strong></td>
  </tr>
</table>
<table width="996" border="0" align="center">
  <tr  bgcolor="#FFDF7C"  align="center"> <td width="277" height="67" align="center"><?php echo	$row6[2]; ?></td> 
    <td width="459"  align="center"  align="center">
        <?php 
				 echo $row[0];
				 
				  ?>
     
    </td>
    <td width="238"  align="center"><?php echo $row[8]; ?> </td>
  </tr>
</table>
<table width="998" border="0" align="center">
  <tr  bgcolor="#CC9933">
    <td width="302" height="53"  align="center"><em><strong>NAME OF SUBJECT </strong></em> </td>
    <td width="208"  align="center"><strong><em>TOTAL MARK </em></strong> </td>
    <td width="220"  align="center"><em><strong>PASSINGMARK</strong></em> </td>
    <td width="240"  align="center" class="style7"><em><strong>MARKS OBTAINED </strong></em> </td>
  </tr>
</table>
<table width="999" border="0" align="center"  bgcolor="#FFDF7C">
  <tr>
    <td width="302" height="53"  align="center"><?php echo $row5[2]; $suject_name=$row5[2]; $idt=$row5[0];?> </td>
    <td width="208"><div align="center"><?php echo $row5[3]; $mark= $row5[3];?></div></td>
    <td width="220"><div align="center"><?php echo $row5[4]; $passing=$row5[4];?></div></td>
    <td width="241"><div align="center"><?php $sql6="select COUNT(mark) from  question where mark='Y'  ";
	  $result6=mysql_query($sql6);
	  $row6=mysql_fetch_row( $result6);
	  $sql7="select COUNT(session_no)	 from  question ";
	  $result7=mysql_query($sql7);
	  $row7=mysql_fetch_row( $result7);
	  $subject= $row5[0];
	  /*echo $row6[0]."</br>";
	  echo $row7[0];
	 echo $row5[3];*/
	 $per=$row5[3]/$row7[0];
	 $tmark= $per*$row6[0];
	 echo $tmark?></div></td>
  </tr>
</table>
<table width="999" border="0" align="center">
  <tr  bgcolor="#CC9933">
    <td width="208" height="53"><div align="center" class="style10">GRADE</div></td>
    <td width="220"><div align="center" class="style10">PERCENTAGE</div></td>
    <td width="241"><div align="center" class="style10">RESULT</div></td>
  </tr>
</table>
<table width="999" border="0" align="center"  bgcolor="#FFDF7C">
  <tr>
    <td width="208" height="54" ><div align="center"><?PHP  $percentage=100/$row5[3]*$tmark; if($percentage<=20 ){echo "E2";}
														  else if($percentage>=21 && $percentage<=32 ){echo "E1";}
														   else if($percentage>=33 && $percentage<=40 ){echo "D";}
														    else if($percentage>=41 && $percentage<=50 ){echo "C2";}
															 else if($percentage>=51 && $percentage<=60 ){echo "C1";}                                                            else if($percentage>=61 && $percentage<=70 ){echo "B2";} 
															 else if($percentage>=71 && $percentage<=80 ){echo "B1";} 
															 else if($percentage>=81 && $percentage<=90 ){echo "A2";} 
															 else if($percentage>=91 && $percentage<=100 ){echo "A1";} ?></div></td>
    <td width="220"><div align="center"><?php echo  $percentage=100/$row5[3]*$tmark;?></div></td>
    <td width="241"><div align="center"><?PHP 
	                                              $percentage=100/$row5[3]*$tmark;
												   if($percentage<=35 ){echo "FAIL";}
														  else if($percentage>=36 && $percentage<=49 ){echo "PASS CLASS";}
														   else if($percentage>=50 && $percentage<=59 ){echo "SECOND CLASS";}
														    else if($percentage>=60 && $percentage<=69 ){echo "FIRST CLASS";}
															 else if($percentage>=70 && $percentage<=79 ){echo "VERY GOOD-DISTINCTION";}                                                            else if($percentage>=80 && $percentage<=89 ){echo "EXCELLENT-DISTINCTION";} 
															 else if($percentage>=90 && $percentage<=100 ){echo "QUTSTANDING-DISTINCTION";} 
	                                            
											    
	                                          ?> </div></td>
  </tr>
</table>
<table width="999" border="0" align="center">
  <tr>
    <td width="708" height="85" bgcolor="#C1CFDD"><p align="left"><span class="style7">IMPOTANT:</span> <span class="style7">Any Change In This Document Except By Essuving Authority Will Result In </span></p>
      <p align="left"><span class="style7">Cancellation Of The Document And Shall Also Invoke Imposition Of Appropriate Legel Action </span></p>    </td>
    <td width="275"  bgcolor="#CCFF00"><div align="center"   ><?php
	 $totalmark=$tmark. "</br>";
	 $passing= $row5[4];
	 
	if(  $totalmark>=$passing && $totalmark<= $row5[3])
	 {
	 echo"  <h1><span class=style7><em>PASSING</em></span>";
	 }
	  else
		{									   
    echo"  <h1><span class=style7><em>CANCELING</em></span>";
           
	    }	
	
			
				   
										   
	?>
      </h1>
    </div></td>
  </tr>
  <tr>
    <td height="85" align="center" colspan="2"><input name="print" type="submit" id="print" value="Print" onclick="myFunction()" style="
    border-radius: 2em;
    background-color: floralwhite;
    font-weight: 800;
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="back" type="submit" id="back" value="OK" style="
    border-radius: 2em; background-color: floralwhite;
    font-weight: 800;"/>
	<?php  
	if(isset($_REQUEST['back']))
	{	
	$id=$_SESSION['std'];
	 $sql="delete from myproject.times where sess_nu=$id";
$result=mysql_query($sql);	
  $sql="delete from myproject. question where session_no =$id";
$result=mysql_query($sql);	
	unset($_SESSION['std']);
	header("location:index.php");
	}
	?> </td>
  </tr>
  
</table>
<p>&nbsp;
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</form>
</body>
</html>
<?php

include("admin_connection.php");
if(isset($_SESSION['std']))
{

$sql15="insert into  stud_mark(enroll_no ,student_name ,image ,exam_name ,suject_name, mark ,passing ,mark_obtained, percentage,id)
   values('".$_SESSION['std']."',
   '".$student_name."',
   '".$image."',
   '".$exam_name."',
   '".$suject_name."',
    '".$mark."',
	 '".$passing."',
	  '". $tmark."',
	   '".$percentage."',
	   '".$idt."')";
   $result0=mysql_query($sql15);
}
?>
<?php
}
else{
header("location:home.php");
}
?>
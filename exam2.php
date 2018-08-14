<?php

session_start();

if($_SESSION['std']!="")
{

?>



   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EXAM</title>
<?php $qtime=$_REQUEST['count'];

?>
<META HTTP-EQUIV="Refresh" Content="60"; URL=exam2.php?count=<?php $qtime ?>">
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
<link href="css/pro_dropline.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
-->
</style>
</head>

<body  >





<form name="h" method="post">
  <table width="1311" height="88" border="2" align="center" bordercolor="#FFFFFF">
    

    <tr>
     <td width="1048" height="80" bgcolor="#591434" style="
    TEXT-ALIGN: -webkit-center;
    FONT-SIZE: -webkit-xxx-large;
    BACKGROUND-COLOR:#591434;
    FONT-STYLE: normal;
"><span class="style3">ONLINE EXAM</span> </td> <td width="245" colspan="3"  bgcolor="#591434"><?php include("admin_connection.php");
$b=$_SESSION['std'];
        $sql="select * from myproject.stud_reg where stud_id=$b";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
echo "<img src=uplode/$row[9] alt=image width=100 height=70 style=border-radius:38px; />"; ?></td>
    </tr>
  </table>
  <table width="1311" height="90" border="2" align="center" bordercolor="#FFFFFF">
    <tr>
      <td width="251" height="32"  bgcolor="#FFFFCC" class="table"><div align="center">
        <h3>Exam Name:-<?php  
		  $cc=$_REQUEST['count'];
			 $ss=$_SESSION['std'];
		  $sql="select * from  question where count=$cc && session_no=$ss ";
                         $result=mysql_query($sql);
					     $row1=mysql_fetch_row($result);
						 $sql="select * from  exam  where exam_id=$row1[3]";
                         $result=mysql_query($sql);
					     $row=mysql_fetch_row($result);
						  $sql="select * from  exam_detail  where exam_detail_id= $row[8]";
                         $result=mysql_query($sql);
					     $row3=mysql_fetch_row($result);
						 echo $row3[0];
						 
						 
						
						 
						?></h3>
      </div>      </td>
	   <td width="722"  bgcolor="#FFFFCC" class="table"><div align="center">
	     <h3>Subject Name:-<?php     $sql="select * from  sub_detail  where sub_id= $row[7]";
                         $result=mysql_query($sql);
					     $row3=mysql_fetch_row($result);
						 echo $row3[2]; ?> </h3>
      </div>      </td>
	   <td colspan="2"  bgcolor="#FFFFCC" class="table"><div align="center">
	     <h3>Total Mark: :- <?php   echo $row3[3]; ?></h3>
      </div>      </td>
    </tr>
	<tr>
      <td height="48" colspan="2"  bgcolor="#FFFFCC" class="table"><div align="center">
        <h3 align="left">Student Name :-<?php  $sql="select * from  stud_reg where stud_id =$ss ";
                         $result=mysql_query($sql);
					     $row1=mysql_fetch_row($result);
						 echo  $row1[1];?></h3><table width="900" border="0"  height="10"
"><tbody><tr><td >
		 
		 <?php 
		 
		  $sql="select * from  question where session_no=$ss ";
                         $result=mysql_query($sql);
					    while( $but=mysql_fetch_row($result))
						{
					if($but[4]!='w') {echo "<td bgcolor=#FF0000 border=1>&nbsp;</td>";  }} 
					?>
<?php 
		 
		 
		 $sql="select * from  question where session_no=$ss ";
                         $result=mysql_query($sql);
					    while( $but=mysql_fetch_row($result))
						{
					if($but[4]=='w') { echo "<td bgcolor=#000000 border=1>&nbsp;</td>"; } }   /* $sql="select * from  question where session_no=$ss mark='w' ";
                                                          $result=mysql_query($sql);
					                                      $bu1t=mysql_fetch_row($result); if($but1!=""){echo "</td>";}*/
														 
														   ?>

		</td></tr></table>
      </div>        
      <div align="center"></div></td>
      <td width="314"  bgcolor="#FFFFCC" class="table"> <?php 
						    $use=time(); 
							 
    $sql="select end from  times where  sess_nu=$ss  ";
                         $result=mysql_query($sql);
					     $row2=mysql_fetch_row($result);?>
						 
<b><?php echo "Remaning Time :".$time=round(($row2[0]/60)-($use/60))."&nbsp;&nbsp;Minutes"; ?></b>

<?php if(($row2[0])<=($use))
{$exam=$_REQUEST['exam_id'];
$subject=$_REQUEST['sub'];
header("location:result.php?exam_id=$exam&&sub_id=$subject");
}
?></td>
    
	</tr>
  </table>
  <table width="1308" height="360" border="2" align="center" bordercolor="#FFFFFF">
    <tr>
     <td width="816" height="352" bgcolor="#FFFFCC" bordercolor="#591434" style="
    border-color: aquamarine;
    border-width: 1em;
    border-radius: 2em;
">
   
        <label class="style34">        </label>
        <label></label>
       
          <?php 

		 $sql="select * from  question where count=$cc && session_no=$ss ";
                         $result=mysql_query($sql);
					     $row1=mysql_fetch_row($result);
						 
						$sql9="select MAX(count) from  question  ";
                         $result9=mysql_query($sql9);
					    $row9=mysql_fetch_array($result9);
						
	                           
							   
 if(isset($_REQUEST['prev']))
{
if($_REQUEST['count']==1)
{
$count=1;

}
else
{
 $count=$_REQUEST['count']-1;
 }


header("Location:exam2.php?count=$count");

}





 if(isset($_REQUEST['next']))
{
if($_REQUEST['count']==$row9[0])
{
$count=$row9[0];

}
else
{
 $count=$_REQUEST['count']+1;
 }


header("Location:exam2.php?count=$count");

}

				if(isset($_REQUEST['t'])) 
				{
				 $c=$_REQUEST['t'];
							header("Location:exam2.php?count=$c");
						}
	$sql="select * from  exam  where exam_id=$row1[3]";
                         $result=mysql_query($sql);
					     $row=mysql_fetch_row($result);
				
					
		             echo"    <table width=71% height=90% border=0 align=center>
						  <tr align=center>";
						  
              $sql8="select ans from  question where count=$cc && session_no=$ss  ";
                         $result8=mysql_query($sql8);
					     $row8=mysql_fetch_row($result8);
						 if($row8[0]=='A')
						 {
						  
                         echo " <td height=120 colspan=2 align=left><b><h2>  $cc.$row[1] </h2></b></td>
                          </tr>
						    <tr align=left>
						  <td width=30%  align=right>A.</td>
						  
                          <td ><input name=ans checked type=radio value=A >       $row[3]</td>
                          </tr> 
						  <tr align=left>
						  <td width=30%  align=right>B.</td>
						  
                          <td ><input name=ans type=radio value=B >       $row[4]</td>
                          </tr> 
						 <tr align=left>
						  <td width=30%  align=right>C.</td>
						  
                          <td ><input name=ans type=radio value=C >       $row[5]</td>
                          </tr> 
                         <tr align=left>
						  <td width=30%  align=right>D.</td>
						  
                          <td ><input name=ans type=radio value=D >       $row[6]</td>
                          </tr>";
						  }
						  elseif($row8[0]=='B')
						  {
						   echo " <td height=120 colspan=2 align=left><b><h2>  $cc.$row[1] </h2></b></td>
                          </tr>
						    <tr align=left>
						  <td width=30%  align=right>A.</td>
						  
                          <td ><input name=ans  type=radio value=A >       $row[3]</td>
                          </tr> 
						  <tr align=left>
						  <td width=30%  align=right>B.</td>
						  
                          <td ><input name=ans checked type=radio value=B >       $row[4]</td>
                          </tr> 
						 <tr align=left>
						  <td width=30%  align=right>C.</td>
						  
                          <td ><input name=ans type=radio value=C >       $row[5]</td>
                          </tr> 
                         <tr align=left>
						  <td width=30%  align=right>D.</td>
						  
                          <td ><input name=ans type=radio value=D >       $row[6]</td>
                          </tr>";
						  }
						  elseif($row8[0]=='C')
						  {
						   echo " <td height=120 colspan=2 align=left><b><h2>  $cc.$row[1] </h2></b></td>
                          </tr>
						    <tr align=left>
						  <td width=30%  align=right>A.</td>
						  
                          <td ><input name=ans  type=radio value=A >       $row[3]</td>
                          </tr> 
						  <tr align=left>
						  <td width=30%  align=right>B.</td>
						  
                          <td ><input name=ans  type=radio value=B >       $row[4]</td>
                          </tr> 
						 <tr align=left>
						  <td width=30%  align=right>C.</td>
						  
                          <td ><input name=ans checked type=radio value=C >       $row[5]</td>
                          </tr> 
                         <tr align=left>
						  <td width=30%  align=right>D.</td>
						  
                          <td ><input name=ans type=radio value=D >       $row[6]</td>
                          </tr>";
						  }
						    elseif($row8[0]=='D')
						  {
						   echo " <td height=120 colspan=2 align=left><b><h2>  $cc.$row[1] </h2></b></td>
                          </tr>
						    <tr align=left>
						  <td width=30%  align=right>A.</td>
						  
                          <td ><input name=ans  type=radio value=A >       $row[3]</td>
                          </tr> 
						  <tr align=left>
						  <td width=30%  align=right>B.</td>
						  
                          <td ><input name=ans  type=radio value=B >       $row[4]</td>
                          </tr> 
						 <tr align=left>
						  <td width=30%  align=right>C.</td>
						  
                          <td ><input name=ans type=radio value=C >       $row[5]</td>
                          </tr> 
                         <tr align=left>
						  <td width=30%  align=right>D.</td>
						  
                          <td ><input name=ans checked type=radio value=D >       $row[6]</td>
                          </tr>";
						  }
						    else if($row8[0]=='N')
						  {
						   echo " <td height=120 colspan=2 align=left><b><h2>  $cc.$row[1] </h2></b></td>
                          </tr>
						    <tr align=left>
						  <td width=30%  align=right>A.</td>
						  
                          <td ><input name=ans  type=radio value=A >       $row[3]</td>
                          </tr> 
						  <tr align=left>
						  <td width=30%  align=right>B.</td>
						  
                          <td ><input name=ans  type=radio value=B >       $row[4]</td>
                          </tr> 
						 <tr align=left>
						  <td width=30%  align=right>C.</td>
						  
                          <td ><input name=ans type=radio value=C >       $row[5]</td>
                          </tr> 
                         <tr align=left>
						  <td width=30%  align=right>D.</td>
						  
                          <td ><input name=ans type=radio value=D >       $row[6]</td>
                          </tr>";
						  }
						   
						 
                        
						  
						   
						   
						echo "  <tr align=left>
						  <td width=30%  align=right>"; 
						  if($_REQUEST['count']!=1)
                         {
                          ?><br> <input name="prev" type="submit" id="prev" value="PREV"style="
    background-color: #591434 ;
    color: aliceblue;
    font-weight: 900; " /> &nbsp;
  &nbsp;
						  <?php

                         }
						
						 echo "</td>
						  
                          <td >";
						  
						  
						   if($_REQUEST['count']==$row9[0])
                           {?><br>
<input name="result" type="submit" id="result" value="RESULT" style="
    background-color: #591434;
    color: aliceblue;
    font-weight: 900;" />
                           <?php } 
							else
							{
							?>	<br><input name="next" type="submit" id="next" value="NEXT" style="
    background-color: #591434;
    color: aliceblue;
    font-weight: 900;
    ">
							<?php }    
							
							echo "</td>
                          </tr> 
                         
                          </table>";
							
				
				
						
		

                         
						               
						  
						
						
					?>
        <?php 
					if(isset($_REQUEST['result']))
					{
					
					header("location:result.php");
					}
if(isset($_REQUEST['next']) or isset($_REQUEST['t']) or isset($_REQUEST['prev']) or isset($_REQUEST['result']))
{
		 
						    echo $use=time(); 
    $sql="select end from  times where  sess_nu=$ss  ";
                         $result=mysql_query($sql);
					     $row2=mysql_fetch_row($result);
				
	if($use>=$row2[0])
	 { 
	 header("location:result.php");
	 }
	 else
	 {
		 if($_REQUEST['ans'])
           {
		    $v=$cc;
		    $o=$_REQUEST['ans'];
			   $sql51="update myproject.question set ans='".$o."' where count='".$v."' && session_no=$ss";
		              $result5=mysql_query($sql51);
			
            
 
              $sql="select * from  question where count=$cc && session_no=$ss  ";
                         $result=mysql_query($sql);
					     $row1=mysql_fetch_row($result);
  
              $sql="select answer from  exam  where exam_id=$row1[3]";
                         $result=mysql_query($sql);
					     $row=mysql_fetch_row($result);
						  
			
               $v=$cc;
                    if($row[0]==$o)
                       {
					 
		   
	
                      $sql5="update myproject.question set mark='".'y'."' where count='".$v."' && session_no=$ss";
		              $result5=mysql_query($sql5);
	                   }
	                   else
	                 {

		   
	                  $sql5="update myproject.question set mark='".'N'."' where count='".$v."'&& session_no=$ss" ;
		              $result5=mysql_query($sql5);
					  
	                 }
         }
       }

     }

?>
       
      </div>
      <label></label></td>
	  
      <td width="13"><td width="455" height="352" bgcolor="#FFFFCC" style="
    border-color: aquamarine;
    border-width: 1em;
    border-radius: 2em;
"><h3 align="center"> Select  Question</h3>
        <table  style=" border-color: aqua; border-color: aqua; "width="46%" height="61%" align="center"  border="3" > 
          <tr align="center">
	  
	  <td style="    border-radius:1em; border-radius: 13px; border-color: aqua; "><?php 

$ss=$_SESSION['std'];
 $sql="select * from  question where session_no=$ss order by count";
                         $result=mysql_query($sql);
					    while( $but=mysql_fetch_row($result))
						{
					if($but[4]=='w')
					{
						echo "<input type=submit name=t value=$but[2] style=border-radius:13px />"
						;
						}
						else
						{
						echo"<input name=t type=submit class=stayyle35 value=$but[2] style=border-radius:13px;/>";
						}
						}


         ?></td></tr></table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?php
}
else{
header("location:student_login.php");
}
?>
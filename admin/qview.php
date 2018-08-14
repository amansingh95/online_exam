<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Internet Dreams</title>
<style type="text/css">
<!--
.que{    font-size: 17px;}

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
-->
</style>
<style type="text/css">
<!--
.style8 {color: #FFFFFF; font-weight: bold; font-size: 24px; }
.style7 {	font-size: 24px;
	font-weight: bold;
}

	
<?php /*?>.style10 { background: gold;
    border: ridge #1a2438;
    border-radius: 23em/54em;}<?php */?>
-->
</style>
<link href="css/styleadmin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style10 {color: #666666}
-->
</style>
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
  <td style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"> <a href="makeexam.php" class="style10"style="text-decoration:none">ADD EXAM </a> </td>
    <td  style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"  width="218"><a href="makesub.php"class="style10" style="text-decoration:none">ADD SUBJECT </a></td>
    <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="241"> <a href="add_sub.php"class="style10" style="text-decoration:none" >ADD QUESTION </a> </td>
       <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="295"><a href="admin_view_student.php"class="style10" style="text-decoration:none">STUDENT DETAIL </a> </div></td>
         <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="226"><a href="admin_feedback.php"class="style10" style="text-decoration:none" >VIEW FEEDBACK </a></td>
      <td style="border-radius: 1em 1em 1em 1em;"style="border-style:none;"width="174"  width="117"> <div align="center"><a href="logout.php"style="text-decoration:none"class="style10">LOGOUT</a></td>
 
    </table>
        </table>
     
    <span class="style8">.</span><span class="style7">.</span>
        <table  border="0" style="background-color: peachpuff;
    border-radius: 15em 15em/25em;
    border-width: 23px;
    border-color: chocolate;
    border-bottom: 457em;
    border: slateblue;" width="1400">
      
          <caption>
          <?php    include("admin_connection.php"); $s=$_REQUEST['num'];
		   $sql="select * from   exam where sub_id=$s ";
               $result=mysql_query($sql);
			   $row1=mysql_fetch_row($result);
			
		    $sql="select * from   sub_detail where sub_id=$s";
               $result=mysql_query($sql);
			   $row1=mysql_fetch_row($result);
			  
			   echo "<h1> ".$row1[2]."</h1>";    ?>
          </caption>
		   <tr class="heading"  style="    border-color: darkgreen;" align="center">
          <td width="104"  align="center" class="headingname" >
               Question No         </td>
              <td width="241" align="center" class="headingname">
                  Question          </td>
            <td width="167"  align="center" class="headingname">
                  Option.A:         </td>
            <td width="165"  align="center" class="headingname">
                   Option.B:            </td>
            <td width="180"  align="center" class="headingname">
                  Option.C:          </td>
            <td width="190" align="center" class="headingname">
                   Option.D:           </td>
            <td width="67"  align="center" class="headingname">
                 Answer           </td>
            <td width="159" colspan="2"   align="center" class="headingname">
                 Action            </td>
          </tr>
          <?php
	 	   
 
 
 $sql1="select exam_detail_id from   exam where sub_id=$s";
  
               $result1=mysql_query($sql1);
			   $row2=mysql_fetch_row($result1);
			   $sql="select * from   exam where sub_id=$s";
  
               $result=mysql_query($sql);
			   $row5=mysql_fetch_row($result);
			 /* if($row5[0]=="")
			   {
			   header("location:eview.php");
			   }*/
  $sql="select * from   exam where sub_id=$s order by Q_no";
 
               $result=mysql_query($sql);
			   while($row1=mysql_fetch_row($result))
			   {?>
			 <?php  echo" <tr height=70 >
          <td width=117 align=center  >
             <b class=text> $row1[9]</b>
         </td>
              <td width=89 align=center >
                 <b class=text>  $row1[1]</b>
              </td>
            <td width=88  align=center >
                 <b class=text 
>$row1[3] </b>
           </td>
            <td width=114 align=center >
                  <b class=text> $row1[4]</b>
            </td>
            <td width=114  align=center >
                 <b class=text>$row1[5]</b>
           </td>
            <td width=114 align=center >
                  <b class=text> $row1[6]</b>
            </td>
            <td width=109  align=center >
                <b class=text> $row1[2]</b>
           </td>
  <td width=136 colspan=2  align=center class=datatable > <a href=qupdate.php?qnum=$row1[0]><img src=uplode/IMG-20170417-WA0000.jpg alt=image width=50 height=50 /></span></a>
            <a href=qdelete.php?qnum=$row1[0]><span class=style8><img src=uplode/IMG-20170417-WA0001.jpg alt=image width=50 height=50 /></a></td></tr>
            ";
		  ?>
		<?php	   
			// echo "<tr><td></td></tr>" ; 
			   
			   
        /* echo " <tr> 
		  <td align=center>$row1[0]</td>
            <td align=center>$row1[1]</td>
            <td align=center>$row1[3]</td>
            <td align=center>$row1[4]</td>
            <td align=center>$row1[5]</td>
			 <td align=center>$row1[6]</td>
			  <td align=center>$row1[2]</td>
            <td align=center width=20><a href=qupdate.php?qnum=$row1[0]><span class=style7>Update</span></a></td>
            <td align=center><a href=qdelete.php?qnum=$row1[0]><span class=style8>Delete</span></a></td></tr>";*/
			}
			
		
		
		/*if(isset($_REQUEST['ff']))
{

       header("location:eview.php?num=$row2[0]");
}*/
			?>
        </table>
     
	    
	   
	<!-- end id-form  --></td>
	<td>

	
	<!--  start related-activities -->
	
		
		<!--  start related-act-top -->
		<!-- end related-act-top -->
        <!--  start related-activities -->
        <!-- end related-activities --></td>
	</tr>

</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>

</table>









 





</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    
<!-- start footer -->
<!-- end footer -->
</form>
</body>
</html>
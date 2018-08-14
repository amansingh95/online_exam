<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>view tudent</title>

<style type="text/css">
<!--
.font{    background-color: antiquewhite;
    border-radius: 26em;
    font-size: 18px;
    font-family: sans-serif;}
.rejectheding{font-size: 25px;
    font-family: cursive;
    background-color: chocolate;

	BORDER-RADIUS: 1EM 1EM;}
	.border{ border-radius: 1em 1em/2em;}
.style12 {
	font-size: 24px;
	font-weight: bold;
	color: #006600;
}
-->
</style>
<style type="text/css">
<!--


.heading{
    font-size: xx-large;
    font-family: fantasy;
    background: #f9e9d6;
    border: bisque;
    border: 55em 9em 7em 21em;
    border: aqua;
    border-radius: 1em 1em;
}
.headingname{    border-radius: 4px 50px;}
.text{font-size: 30px;
   
    font-family: sans-serif;
    text-align: -webkit-center;}
	.datatable{    background-color: khaki;
    border-radius: 13em/3em;
    font-size: 10px;}
-->
</style>
<link href="css/styleadmin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style15 {color: #666666}
-->
</style>
</head>
<body > 
<form id="ss" method="post"> 
   

  <p>
    <!-- Start: page-top -->
  </p>
  <div align="center">
    <table width="1318" height="132" border="0"  align="center" >
      <tr>
        <td height="68" colspan="7" align="center"  class="adminheading" >ADMIN PANEL </td>
      </tr>
      <tr class="linktext">
  <td width="150" height="53" style="border-radius: 1em 1em/3em;"><a href="admin_home.php" class="style15" style="text-decoration:none">HOME</a></td>
  <td style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"> <a href="makeexam.php"class="style15" style="text-decoration:none">ADD EXAM </a> </td>
    <td  style="border-radius: 1em 7em 1em 5em;" style="border-style:none;" width="174"  width="218"><a href="makesub.php"class="style15" style="text-decoration:none">ADD SUBJECT </a></td>
    <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="241"> <a href="add_sub.php"class="style15" style="text-decoration:none" >ADD QUESTION </a> </td>
       <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="295"><a href="admin_view_student.php" class="style15"style="text-decoration:none">STUDENT DETAIL </a> </div></td>
         <td style="border-radius: 1em 7em 1em 5em;"style="border-style:none;" width="174"  width="226"><a href="admin_feedback.php"class="style15" style="text-decoration:none" >VIEW FEEDBACK </a></td>
      <td style="border-radius: 1em 1em 1em 1em;"style="border-style:none;"width="174"  width="117" > <div align="center"><a href="logout.php"style="text-decoration:none"class="style15">LOGOUT</a></td>
 
    </table>
        </table>
		<table><tr><td> Enter E-mail To search Student 
<input name="search_box" type="text" id="search_box" /> 
                  <input name="find2" value="Search" type="submit" class="style12"></td></tr></table>

		 
		   <?PHP include("admin_connection.php");
		  
		  

if(isset($_REQUEST['find2']))
				{
 if($_REQUEST['search_box']=="")
		     {echo "Plese Enter The Email";}
				   if($_REQUEST['search_box']!="")
		               {
				         $b=$_REQUEST['search_box'];
				
				
                        $sql="select * from myproject.stud_reg where stud_email_id='$b'";
                          $result=mysql_query($sql);
                          $row=mysql_fetch_row($result);
						  if($row=="")

                        {
						echo "Please Enter The Valide Email";
						}
						else
						{
                           echo"<table border=0 width=90% align=justify >
				           <tr class=rejectheding>
					
					         <th   class=border>Roll No</th>
					         <th  class=border>Image</th>
					         <th  class=border>Name</th>
					          <th  class=border>Gender</th>
					           <th class=border>Mobile No</th>
						      <th class=border>Address</th>
						    <th  class=border>E-mail</th>
				    	    <th class=border>Password</th>
				    	<th class=border>Qualification</th>
						
				
				             </tr> ";
				
									 
				echo	"<tr ClASS=font ALIGN=LEFT>
				
				    <td >$row[0]</td><td ><img src=../uplode/$row[9] alt=image width=100 height=70 style=border-radioud=2em;/> </td> <td >$row[1]</td><td >$row[2]</td><td >$row[3]</td><td >$row[4]</td><td >$row[5]</td><td >$row[6]</td><td >$row[7]</td>
					
			
					
					</tr>";}}}
					
				
				
			
				echo"<table border=0 width=90%  align=jatify>
				<tr class=rejectheding>
					
					<th   class=border>Roll No</th>
					<th  class=border>Image</th>
					<th  class=border>Name</th>
					<th  class=border>Gender</th>
					<th class=border>Mobile No</th>
						<th class=border>Address</th>
						<th  class=border>E-mail</th>
				    	<th class=border>Password</th>
				    	<th class=border>Qualification</th>
						
				
				</tr> ";
				
				
				
$sql="select * from myproject.stud_reg";
$result=mysql_query($sql);

				 while($row=mysql_fetch_row($result))
	                {
					 
				echo	"<tr ClASS=font ALIGN=center>
				
				    <td >$row[0]</td><td ><img src=uplode/$row[9] alt=image width=100 height=70 style=border-radioud=2em;/></td><td >$row[1]</td><td >$row[2]</td><td >$row[3]</td><td >$row[4]</td><td >$row[5]</td><td >$row[6]</td><td >$row[7]</td>
					
			
					
					</tr>";}
					
				?>
</form>
</body>
</html>
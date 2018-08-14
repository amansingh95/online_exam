 <?php 
session_start();
?>

      

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Educational
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>online_exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.tabs.setup.js"></script>
<style type="text/css">
<!--
.style3 {
	font-size: 36px;
	font-weight: 100;
	color: #660000;
	font-style: normal;
	line-height: normal;
}
.style4 {
	font-size: 18px;
	font-weight: bold;
}
.style7 {
	font-size: xx-large;
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<form action="#" id="sdc" method="post">
<div class="wrapper col0"></div>

  
 <!-- ####################################################################################################### -->
    <table width="200" height="61" border="0">
      <tr>
        <td height="55" style="border-style:none"><span class="style7">&nbsp;&nbsp;&nbsp; ONLINE EXAM </span></td>
      </tr>
  </table>
 
  <div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li class="active"><a href="index.php" class="style4">Home</a>      </li>
      <li><a href="exam.php?count=1" class="style4">EXAM</a><a href="contactus.php"><span class="style4">CONTACT US</span></a><a href="../admin/admin_login.php" class="style4">ADMIN LOGIN</a><a href="viewfeedback.php"><span class="style4">VIEW FEEDBACK</span></a>
<?php 


		if(isset($_SESSION['std']))
		{?>
        <a href="logout.php" class="style4">LOGOUT</a>
		<?php  }
		else
		{?>
		<a href="student_login.php" class="style4">LOGIN</a>
		<?php }
		?>  	   
    </ul>
    <ul>
      <li class="last"></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="featured_slide">
    <div id="featured_wrap">
      <ul id="featured_tabs" name="featured_tabs">
        <li><br>
          <div align="center"><a href="#fc1">EXAM</a></div>
        </li>
		<br>
		<li>
        <div align="center"><a href="#fc2" class="style3">CONTACT US</a></div>
   </li>
   <br>
        <li>
           <div align="center"><a href="#fc3" class="style3">FEED BACK</a></div>
    </li>
       
      </ul>
      <div id="featured_content">
        <div class="featured_box" id="fc1"><a href="exam.php"><img src="../images/demo/icon/IMG-20170227-WA0173.jpg" alt="" /></a></div>
        <div class="featured_box" id="fc2"><a href="contactus.php"><img src="../images/demo/icon/IMG-20170227-WA0163.jpg" alt="" /></a>
         
        </div>
        <div class="featured_box" id="fc3"><a href="viewfeedback.php"><img src="../images/demo/icon/IMG-20170227-WA0162.jpg" alt="" /></a>
         
        </div>
        <div class="featured_box" id="fc4"><img src="../images/demo/icon/IMG-20170227-WA0153.jpg" alt="" />
         
		  
        </div>
		
      </div><table width="200" border="1">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
    </div>
	
  </div>
  
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container"></div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div id="newsletter">
      <h2><strong>Enter Your Feedback </strong></h2>
      <p>
        <label>
        <textarea name="feedback" class="style3" id="feedback"></textarea>
        </label>
      </p>
      <p>&nbsp;</p>
      <p>Please enter your email to send the feedback</p>
      <fieldset>
          <legend>News Letter</legend>
          <input name="feed_email" type="email" class="col5" id="feed_email"  />
      </fieldset></br>
          <input name="feed_go"  type="submit" class="style4" id="feed_go" value="Submit" />
          </fieldset>
      <p>
        <?php
	  	    include("admin_connection.php");
	  if(isset($_REQUEST['feed_go']))
	  {
	   
	   $feed_email=$_REQUEST['feed_email'];
	   $feed_box=$_REQUEST['feedback'];
	   $sql="select * from stud_reg";
	   $result=mysql_query($sql);
	   $error="<h2>invalid email</h2>";
	   while($row=mysql_fetch_row($result))
	   {
	    
	   
	   if($feed_email==$row[5])
	   { 
	   $sql5="insert into myproject.feedback(feedback,s_email) values('". $feed_box."','". $feed_email."')";
		$result5=mysql_query($sql5);
	    }
		else
		{
	$error;
		}
		 }
	  }
	  ?>
      </p>
      
    </div>
     
     <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

</div>
</li>
</form>
</body>
</html>
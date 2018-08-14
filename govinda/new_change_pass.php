<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>change password</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>
    </head>
    <body>
	
		<h1>&nbsp;</h1>
			<p>&nbsp;</p>
		
				<div id="form_wrapper" class="form_wrapper">
				  <form class="forgot_password active" id="ffdf" method="post">
				    <h3>Enter New Password </h3>
						<a href="file:///C|/wamp/www/online_exam/pages/change_pass.php"></a>
						<div>
						<lable>Enter New Password</lable>
						  <input type="text" name="new_pass"id="new_pass"  value="" />
							<span class="error">This is an error</span>
					</div>
						<div class="bottom">
							<input type="submit" name="new_button"id="email_button" value="SUBMIT">
							
							<div class="clear"></div>
					</div>
						<?php
						  include("admin_connection.php");
	                     
						if(isset($_REQUEST['new_button']))
						{
						session_start();
								 $pass=$_SESSION['pass'];
						    
							  $new_pass=$_REQUEST['new_pass'];
                            
								      $sql1="update myproject.stud_reg set stud_password='".$new_pass."'
                         where 	stud_password="."'".$pass."'";
                      $result1=mysql_query($sql1);
						              header("location:home.php");
						              
								 
						}
						
						?>
				  </form>
	</div>
				
		
    </body>
</html>
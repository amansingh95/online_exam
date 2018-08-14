<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>forgot password</title>
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
			<div id="form_wrapper" class="form_wrapper">
					
					
					<form class="forgot_password active" id="ffdf" method="post">
					  <h3>Enter new Password</h3>
						<div>
							<label>Enter New Password :</label>
							<input type="text" name="new_pass"id="new_pass"  value="" />
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Renter Password:</label>
							<input type="text" name="new_repass"id="new_repass" maxlength="200" />
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<input type="submit" name="ok"id="ok" value="OK">
							
							<div class="clear"></div>
						</div>
						<?php
						  include("admin_connection.php");
						  session_start();
						 $email= $_SESSION['new_email'];
						 if(isset($_REQUEST['ok']))
						{  
						$pass= $_REQUEST['new_pass'];
						  $sql1="update myproject.stud_reg set stud_password='".$pass."'
                         where stud_email_id="."'".$email."'";
                      $result1=mysql_query($sql1);
                     header("location:home.php");
						            } 
						
                        
						
						?>
					</form>
	</div>
				
		
    </body>
</html>
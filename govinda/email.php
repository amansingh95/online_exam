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
			<p>&nbsp;</p>
		
				<div id="form_wrapper" class="form_wrapper">
				  <form class="forgot_password active" id="ffdf" method="post">
				    <h3>Enter Your E_mail </h3>
						<div>
						  <input type="text" name="forgot_email"id="forgot_email"  value="" />
							<span class="error">This is an error</span>
					</div>
						<div class="bottom">
							<input type="submit" name="email_button"id="email_button" value="SUBMIT">
							
							<div class="clear"></div>
						</div>
						<?php
						  include("admin_connection.php");
	                       session_start();
						if(isset($_REQUEST['email_button']))
						{
						     $forgot_email=$_REQUEST['forgot_email'];
                             $sql="select * from myproject.stud_reg";
                             $result=mysql_query($sql);
                               while($row=mysql_fetch_row($result))
	                             { 
								   if($row[5]==$forgot_email)
								   {    
								   
								   $_SESSION['ans']=$row[11];
								       $_SESSION['new_email']=$forgot_email;
									   header("location:answer.php");
						            }
						              else
						               { 
									     echo"please enter correct email address";
										}
								 }
						}
						
						?>
				  </form>
	</div>
				
		
    </body>
</html>
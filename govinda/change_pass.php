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
				    <h3>Enter Old Password </h3>
						<div>
						<lable>Enter Your Old Password</lable>
						  <input type="text" name="change_pass"id="change_pass"  value="" />
							<span class="error">This is an error</span>
					</div>
					    <div class="bottom">
							<input type="submit" name="change_button"id="email_button" value="SUBMIT">
							
							<div class="clear"></div>
						</div>
						<?php
						  include("admin_connection.php");
	                     
						if(isset($_REQUEST['change_button']))
						{
						     $change_pass=$_REQUEST['change_pass'];
							  $new_pass=$_REQUEST['new_pass'];
                             $sql="select * from myproject.stud_reg";
                             $result=mysql_query($sql);
                               while($row=mysql_fetch_row($result))
	                             { 
								   if($row[6]==$change_pass)
								   {   
								   session_start();
								   $_SESSION['pass']=$change_pass;
								    header("location:new_change_pass.php");
						            }
						              else
						               { 
									     echo"wrong password";
										}
								 }
						}
						
						?>
				  </form>
	</div>
				
		
    </body>
</html>
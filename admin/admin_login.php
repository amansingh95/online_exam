	 <?php
//admin login";
include("admin_connection.php");
			
if(isset($_REQUEST['admin_login']))
{
$a=$_REQUEST['admin_email'];
$b=$_REQUEST['admin_password'];
 echo $error="Invalid Admin User Name and Password ";
$sql="select * from myproject.admin_login";
$result= mysql_query($sql);

while($row=mysql_fetch_row($result))
{
if($a==$row[1]&&$b==$row[2])
{
session_start();
$_SESSION['admin']=$row[0];
header("location:admin_home.php");
}
else 
{
 $error;
}
}
}
 			  ?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" method="post" id="log">
    <p><input name="admin_email" type="email" id="admin_email" placeholder="Email">
    </p>
    <p><input name="admin_password" type="password" placeholder="Password"></p>
    <p><input type="submit" name="admin_login" value="Log in"></p>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
    
    
  </body>
</html>

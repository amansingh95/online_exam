<html>
<head>

</head>
<body>
<form method="post">
<?php
//student login
session_start();

include("admin_connection.php");
			
if(isset($_SESSION['admin']))
{
unset($_SESSION['admin']);

header("location:/index.php");
}
?>
</form>
</body>
</html>
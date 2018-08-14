<html>
<head>
</head>
<body>
<form id="reg" name="reg" method="post" enctype="multipart/form-data">
 <?php
		
		?> 	
<?php
session_start();
include("admin_connection.php");
?>
<?php 
	
	 $img=$_FILES['img']['name'];
		$path='uplode/';
		if($_FILES['img']['name']!="")
		{
		move_uploaded_file($_FILES['img']['tmp_name'],$path.$img);
		
		}
		else
		{?>
			<script>
alert('INSERT PHOTO');
window.location.href='php-captcha-form-demo.php';
</script>";
<?PHP }
	
?>

<?php
if(($_REQUEST['captcha'] == $_SESSION['vercode']))
{
	//Here you can write your sql insert statement. 

	 $age=$_REQUEST['age'];
	  if($age<=40 && $age>=18)
	  {
		if($_REQUEST['password']==$_REQUEST['cpassword'])
		{ 
		$sql="insert into stud_reg(stud_name,gender,mob,address,stud_email_id,stud_password,qualifaction,image,age,forgot_question,forgot_answer)
   values('".$_REQUEST['fname']."',
   '".$_REQUEST['gender']."',
   '".$_REQUEST['mob']."',
   '".$_REQUEST['address']."',
   '".$_REQUEST['email']."',
   '".$_REQUEST['password']."',
     '".$_REQUEST['que']."',
	 '".$img."',
	   '".$_REQUEST['age']."',
		'".$_REQUEST['select_que']."',
	     '".$_REQUEST['select_ans']."' )";
   $result=mysql_query($sql);
 header("location:index.php");
 }
 else
 {
 ?><script>
alert('WRONG PASSWORD');
window.location.href='php-captcha-form-demo.php';
</script>";
		
<?PHP }

 }
  else
    {?><script>
alert('IN VALID AGE');
window.location.href='php-captcha-form-demo.php';
</script>";
  <?PHP }
  }
   else
    {?><script>
alert('IN VALID CAPTCHA');
window.location.href='php-captcha-form-demo.php';
</script>";
<?PHP }


?>
</form>
</body>
</html>
<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Registration Form with PHP Captcha Demo</title>
<meta name="title" content="Registration Form with PHP Captcha Demo"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>

<link href="css/style_demo.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script language="javascript">
function age()
{alert "invalid age";}
$(document).ready(function(){

$(".refresh").click(function () {
    $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
    
});


 $('#register').submit(function() {
   
 if($('#password').val() != $('#cpassword').val()){
 	alert("Please re-enter confirm password");
 	$('#cpassword').val('');
 	$('#cpassword').focus();
 	return false;
	
 }
 
	$.post("submit_demo_captcha.php?"+$("#register").serialize(), { }, function(response){
        if(response==1){
           $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
           clear_form();
           alert("Data Submitted Successfully.")
        }else{
           alert("wrong captcha code!");
        }
	});
	return false;
    });


     function clear_form()
     {
        $("#fname").val('');
        $("#lname").val('');
        $("#email").val('');
        $("#phone").val('');
        $("#username").val('');
        $("#password").val('');
        $("#cpassword").val('');
		$("#captcha").val('');
     }


});

</script>

<style type="text/css">
<!--
style11{
    background-color: seagreen;}
.style4 {font-size: 24px background-color: seashell;border-bottom-style: double;border-color: aquamarine;
background-color:#FFFFFF
}
.style8 {font-size: 18px}
.style14 {
	
    font-size: 24px;
    color: #000033 font-weight: bold;
    background-color: #FFFFFF border:hidden;
    color: brown;
    size: b5;
    font-style:normal;
    text-align: -webkit-center;
}
.style15 {
border-bottom-style: double;border-color: aquamarine;
	
}
.style16 {
background-color: seashell;border-bottom-style: double;border-color: aquamarine;font-size: xx-large}
.style17 {
	font-size: xx-large;
	font-weight: bold;
	color: #FFFFFF;
	font-family: "Courier New", Courier, monospace;
}
.style18 {
color:#000066 
}
.style19 {font-size: 24px; color: #000033; font-weight: bold; background-color: seagreen; border: hidden; color: floralwhite; size: b5;  text-align: -webkit-center;
font-style:normal }
-->
</style>
</head>
<body  >
<form name="register" action="submit_demo_captcha.php" method="post" id="register" enctype="multipart/form-data">
  <table width="881" align="center" height="985"style="border-color: seagreen;" align="center">
  <tr>
    <td height="69" colspan="3" bgcolor="darkred" align="center"style="border:hidden" ><span class="style17">REGISTRATION FORM</span></td>
  </tr>

    <tr>
     
      <td width="416" class="style14 style18" align="justify"  style="border:hidden;background-color: #FFFFFF; ">Name</td>
    <td width="453" style="border:hidden;background-color: #FFFFFF  ; "border:hidden"> 
      
        <input name="fname" type="text" class="style4" id="fname" placeholder=" Name" required="required">
      </td>
  </tr>
  <tr>
    <td  class="style14 style18"  style="border:hidden;background-color: #FFFFFF; "> Email-id</td>
    <td style="border:hidden;background-color:  #FFFFFF ; "border:hidden" align="left" >
        <input name="email" type="email" class="style4" id="email" placeholder=" Email " required="required">			
    </td>
  </tr>
  <tr>
    <td height="57" class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Mob_no</td>
    <td style="border:hidden;background-color: #FFFFFF ; "border:hidden"align="left" >
        <input name="mob" type="text" class="style4" id="mob" placeholder=" Phone Number">			
    </td>
  </tr>
  <tr>
    <td height="59" class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Gender</td>
    <td style="border:hidden;background-color: #FFFFFF ; "border:hidden"  align="left" class="style15">
        <input type="radio" value="Male" checked name="gender"> 
        <span class="style8">Male</span> 
        <span class="style8">
          <input type="radio" value="Female" name="gender"> 
      Female</span></td>
  </tr>
  <tr>
    <td height="50" class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Age</td>
    <td style="border:hidden;background-color: #FFFFFF ; border:hidden"> <input name="age" type="text" class="style4" id="age" placeholder="Between 18-40" required="required"  />
		</td>
  </tr>
  <tr>
    <td height="50" class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Qualification</td>
    <td style="border:hidden;background-color: #FFFFFF ; "border:hidden" align="left" >
          <select name="que" class="style4" id="que">
            <option value="B.C.A" selected="selected">B.C.A</option>
            <option value="M.C.A">M.C.A</option>
            <option value="B.B.A">B.B.A</option>
            <option value="B.COM">B.COM</option>
            <option value="B.SC">B.SC</option>
          </select>
        
      <span class="style15">
      </label>
      </span></td>
  </tr>
  <tr>
    <td class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Address</td>
    <td style="border:hidden;background-color:  #FFFFFF ; "border:hidden" align="left" class="style15">
        <textarea name="address" class="style16" id="address" placeholder="Address"></textarea>
    </td>
  </tr>
  <tr>
    <td class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Password</td>
    <td style="border:hidden;background-color: #FFFFFF ; "border:hidden" align="left" class="style15">
        <input type="password" class="style15"  placeholder="Password" id="password" name="password" required="required">		
    </td>
  </tr>
  <tr>
    <td height="63" class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Re_Enter_Password</td>
    <td style="border:hidden;background-color: #FFFFFF ; "border:hidden" align="left" class="style15">
          <input type="password" class="style15" placeholder="Re_Enter_Password" id="cpassword" name="cpassword" required="required" />
        
      <span class="style15">
      </label>
      </span></td>
  </tr>
  <tr>
    <td height="80"class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Select Question for Security</td>
    <td style="border:hidden;background-color: #FFFFFF ; "border:hidden"  align="left" class="style15">
        <select name="select_que" class="style4" id="select_que">
          <option value="My Favourite Actor">My Favourite Actor</option>
          <option value="My Favourite color">My Favourite color</option>
          <option value="My Favourite Teacher">My Favourite Teacher</option>
          <option value="My Facebook id">My Facebook id</option>
          <option value="My Best Friend">My Best Friend</option>
        </select>
    </td>
  </tr>
  <tr>
    <td height="63" class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Enter The Answer</td>
    <td style="border:hidden;background-color: #FFFFFF ; "border:hidden" align="left" class="style15">
        <input name="select_ans" type="text" class="style4" id="select_ans" placeholder="Enter Answer" />
    </td>
  </tr>
  <tr>
    <td height="60" class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Insert Photo</td>
    <td style="border:hidden;background-color: #FFFFFF ; "border:hidden"  align="left" class="style15">
        <input type="file" id="exampleInputEmail1" name="img" value="">	
    </td>
  </tr>
  <tr>
    <td class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">Captcha</td>
    <td style="border:hidden;background-color:  #FFFFFF ; "border:hidden"  align="left" class="style15">
        <input type="text" placeholder="Enter Code" id="captcha" name="captcha" class="inputcaptcha" required="required">
      <img src="demo_captcha.php" class="imgcaptcha" alt="captcha"  /></td>
  </tr>
  <tr>
    <td height="91" class="style14 style18"  style="border:hidden;background-color: #FFFFFF; ">
        <input name="B1" type="submit" class="style14" value="Submit" />
        &nbsp; &nbsp;
  <input name="B2" type="reset" class="style14" value="Reset">	
 
  			
    </td>
  </tr>
</table>
</form>
</body>

</html>
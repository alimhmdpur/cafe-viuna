<?php
include("includes/header.php");
if(isset($_POST['realname'])&& !empty($_POST['realname'])&& isset($_POST['username'])&& !empty($_POST['username'])&& isset($_POST['password'])&& !empty($_POST['password'])&& isset($_POST['repassword'])&& !empty($_POST['repassword'])&& isset($_POST['email'])&& !empty($_POST['email']))
{
$realname=$_POST['realname'];
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$email=$_POST['email'];
}
else
	exit("<span style=color:#f00;font-family:B Nazanin;>".'برخی از فیلد ها مقدار دهی نشده اند!!'."</span>");
if(filter_var($email,FILTER_VALIDATE_EMAIL)===false)
{
	exit("<span style=color:#f00;font-family:B Nazanin;font-size:108px;>".'ایمیل وارد شده صحیح نیست!!'."</span>");
}
if($password!==$repassword)
{
	exit("<span style=color:#f00;font-family:B Nazanin;>".'رمز عبور و تکرار آن یکسان نیستند!!'."</span>");
}
$link=mysqli_connect("localhost","root","","shop_db");
if(mysqli_connect_errno())
	exit("خطا با شرح زیر رخ داده است".mysqli_connect_error());
$query="INSERT INTO users(realname,username,password,repassword,email,type) VALUES('$realname','$username','$password','$repassword','$email','0')";
if(mysqli_query($link,$query)===true)
	echo("<p style='color:green;'><b>".$realname."گرامی عضویت شما با نام کاربری".$username."در فروشگاه انجام شد"."</b></p>");
else
	echo("<p style='color:red;'><b>عضویت شما در فروشگاه انجام نشد</b></p>");
$query="SELECT * FROM users WHERE username='$username'AND password='$password'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);

mysqli_close($link);
	
include("includes/footer.php");
?>

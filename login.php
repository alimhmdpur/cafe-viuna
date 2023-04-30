<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه ورود</title>
</head>
<body style="text-align: center; background-color:#34ADE8 ">

<?php
include("includes/header.php");
    ?>
<br/>
<form name="login" action="action_login.php" method="post">
    <table style="width: 50%;margin-left: auto;margin-right: auto;" border="0">
        <tr>
            <td style="width: 40%;font-family: B Nazanin;font-size: 22px;">نام کاربری<span style="color:#F00">*</span></td>
            <td style="width: 60%;"><input type="text" id="username" name="username"/></td>
        </tr>
        <tr>
            <td style="width: 40%;font-family: B Nazanin;font-size: 22px;">کلمه عبور<span style="color:#F00">*</span></td>
            <td style="width: 60%;"><input type="password" id="password" name="password"/></td>
        </tr>
        
        <tr>
        <td><br/><br/></td>
			<td><input type="submit" value="ورود" style="font-family: B Nazanin;width: 60px;font-size: 18px;"/> &nbsp;&nbsp;&nbsp;
            <input type="reset" value="جدید" style="font-family: B Nazanin;width: 60px;font-size: 18px;"/>
        </td>
        <tr/>
    </table>

</form>
<?php
include("includes/footer.php");
?>

</body>
</html>





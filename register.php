
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت نام</title>
</head>
<body style="text-align: center;background-color: greenyellow">
<?php
include("includes/header.php");
if(isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true)
{
    ?>
    <script type="text/javascript">
        location.replace("index.php");
    </script>
    <?php
}
?>
<br/>
<form name="register" action="action_register.php" method="POST">
    <table style="width:50%;margin-left: auto;margin-right: auto;border: 0;">
        <tr></tr>
        <tr>
            <td style="width: 40%;font-family: B Nazanin;font-size: 22px;">نام واقعی<span style="color: red">*</span></td>
            <td style="width: 60%;"><input type="text" id="realname" name="realname"/></td>
        </tr>
        <tr></tr>
        <tr>
            <td style="width: 40%;font-family: B Nazanin;font-size: 22px;">نام کاربری<spsn style="color:#f00">*</spsn></td>
            <td style="width: 60%;"><input type="text" id="username" name="username"/></td>
        </tr>
        <tr></tr>
        <tr>
            <td style="width: 40%;font-family: B Nazanin;font-size: 22px;">کلمه عبور<spsn style="color:#f00">*</spsn></td>
            <td style="width: 60%;"><input type="password" id="password" name="password" style="width: 150px;"/></td>
        </tr>
        <tr></tr>
        <tr>
            <td style="width: 40%;font-family: B Nazanin;font-size: 22px;">تکرار کلمه عبور<spsn style="color:#f00">*</spsn></td>
            <td style="width: 60%;"><input type="password" id="repassword" name="repassword" style="width: 150px;"/></td>
        </tr>
        <tr></tr>
        <tr>
            <td style="width: 40%;font-family: B Nazanin;font-size: 22px;">پست الکترونیکی<spsn style="color:#f00">*</spsn></td>
            <td style="width: 60%;"><input type="text" id="email" name="email"/></td>
        </tr>
        <tr>
            <td>
                <br/>
                <br/>
            </td>
            <td>
                <input type="submit" style="font-family: B Nazanin;width: 60px;font-size: 18px;" value="ثبت"/>
                &nbsp;&nbsp;&nbsp;
                <input type="reset" style="font-family: B Nazanin;width: 60px;font-size: 18px;" value="جدید"/>
            </td>
        </tr>
    </table>
</form>
<?php
include("includes/footer.php");
?>

</body>
</html>


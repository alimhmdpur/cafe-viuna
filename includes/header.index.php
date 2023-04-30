<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه ایرانیان</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.set-style-link{
			text-decoration: none;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="divtable" style="width: 100%;height: 25%">
		<div class="divtablerow">
			<div class="divtablecell">
				<header class="divtable">
					<div class="divtablerow">
						<div class="divtablecell"><p align="center">
					    <img src="../image/logo2.png" width="260" height="75" alt=""/> </div></p>
					</div>
				</header>
		<nav class="divtable">
			<ul class="divtablerow">
				<li class="divtablecell"><a href="index.php" class="set-style-link">صفحه اصلی</a></li>
				<li class="divtablecell"><a href="register.php" class="set-style-link">عضویت در سایت</a></li>
				<?php
				if(isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true)
				{
					?>
				<li class="divtablecell"><a href="logout.php" class="set-style-link">خروج از سایت  (<?php echo($_SESSION['realname'])?>)</a></li>
				<?php
				}
				else
				{
					?>
				<li class="divtablecell"><a href="login.php" class="set-style-link">ورود به سایت</a></li>
				<?php
				}
				?>
				<li class="divtablecell"><a href="cantact.html" class="set-style-link">درباره ما</a></li>
				<li class="divtablecell"><a href="contact.php" class="set-style-link">ارتباط با ما</a></li>
			<?php

				if(isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")
				{
				?>
			
					<li class="divtablecell"><a href="admin_products.php" class="set-style-link">مدیریت محصولات</a></li>
				
						<?php
				}
				?>
				
				
			</ul>
				</nav>
			
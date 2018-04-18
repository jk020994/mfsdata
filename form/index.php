<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Đăng nhập</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="shortcut icon" type="image/x-icon" href="images/short_logo.ico">
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1><img src="images/logo.png" height="45" width="auto" alt="Chi nhánh Mobifone Service Hải Phòng"></h1>
			<div>
				<input type="text" placeholder="Tài khoản người dùng" name="username" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Mật khẩu người dùng" name="password" id="password" />
			</div>
			<div id="thongbao"><?php echo $error; ?></div>
			<div>
				<input name="submit" type="submit" value="Đăng nhập" />
				<a href="#">Quên mật khẩu?</a>
				<a href="#">Trợ giúp</a>
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="index.php">Trang quản trị hệ thống</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Đăng Nhập</title>
		<link rel="stylesheet" href="style.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<link rel="stylesheet" href="stylelogin.css">
	</head>

<body>
	<div class="header"></div>
	<div class="container">
	    <div id="login">
	        <h2><span class="fontawesome-lock"></span>Đăng nhập</h2>
	        <form name="formlogin" action="checklogin.php" method="POST">
	          <fieldset>
	            <p><label for="name">Tên truy cập</label></p>
	            <p><input type="text" name="name" placeholder="Username" required></p>

	            <p><label for="pass">Mật khẩu</label></p>
	            <p><input type="password" name="pass" placeholder="password" required></p>

	            <p><input type="submit" name="submit" value="Đăng nhập"></p>
	          </fieldset>
	        </form>
	    </div> <!-- end login -->
    </div>
	<div class="footer"></div>
	<script>
		$(function(){
			$('.header').load('/head.html');
			$('.footer').load('/end.html');
		});
	</script>
</body>
</html>

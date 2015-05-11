<!DOCTYPE html>
<html>
	<head>
		<?php include"logo_tab.php" ?>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<title> Đăng nhập </title>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<!--<link rel="stylesheet" type="text/css" href="css/lightbox.css">-->
		<script type="text/javascript" src="jquery.flexisel.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen,print" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen,print" />
		<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css" media="screen,print" />
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</head>

<body>
	<nav class = "nav navbar-nav navbar-inner navbar-static-top">
		<div class="container">
			<span>
				<a href = "Code.php">
					<img src = "image/logoGau_header.png" width = "100" height = "40" title = "Gấu Restaurant"/>	
				</a>	
			</span>
			<!-- Follow on network social -->
			<span class="brand" href="#">
				<img src = "image/fb_ico.png" href = "#" width = "30" height = "30" alt = "Follow us on Facebook"  title = "Theo dõi chúng tôi trên Facebook"/>
				<img src = "image/twitter_ico.png" href = "#" width = "30" height = "30" alt = "Follow us on Twitter"  title = "Theo dõi chúng tôi trên Twitter"/>
				<img src = "image/insta_ico.png" href = "#" width = "30" height = "30" alt = "Follow us on Instagram"  title = "Theo dõi chúng tôi trên Instagram"/>
			</span>
		</div>
	</nav>
		
	<div class="container""> 

		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
		<!-- Slide hình ảnh -->
		<div class="carousel-inner">
			<div class="active item">
				<img src="image/Banner 1.png"/>
			</div>
			<div class="item">
			<img src="image/Banner 2.png"/>
			</div>
			<div class="item">
				<img src="image/Banner 3.png"/>
			</div>
		</div>
			
		<div id="push"> </div>
			
		<div class="tabs" >
       	<ul>
			<li><a href="Code.php">Trang chủ</a></li>
           	<li><a href="Menu.php">Thực đơn</a></li>
			<li><a href="#">Đặt món</a>
           	<li><a href="contact.php">Liên hệ</a></li>
           	<li><a href="gopy_nguoila.php">Góp ý</a></li>
			<li><a href="#">Hóa đơn</a></li>
       	</ul>
				
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script src="auto_scroll.js"></script>
	</div>
	
	
	<br><br><br><br>
	<div align = "center" style = "font-size: 20px;"> Bạn phải đăng nhập để vào chức năng này! </div> <br>
	<div class = "container">
		<form name="formlogin" action="checklogin.php" method="post">
			<div class = "edit">
				<label  for="name"><b>Tên truy cập</b></label><br>
				<input width = "100%" type="text" name="name" size = "25" maxlength = "40" placeholder="Username" required/>
				<label  for="password"><b>Mật khẩu</b></label><br>
				<input width = "100%" type="password" name="pass" size = "25" maxlength = "40" placeholder="Password" required />
				<label for = "autologin" id = "lbl_autologin">
				<input type = "checkbox" name = "autologin" id = "autologin" tabindex = "4" class = "checkbox" checked = "checked">
				Ghi nhớ
				</label>
				<br>
				<div align = "center">
					<input type="submit" name="submit" value="Đăng nhập" class = "btn"/>
				</div>
			</div>
		</form>
	<br>
	
		<?php
			include 'end.html';
		?>
</body>
</html>

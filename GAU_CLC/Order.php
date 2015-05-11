<!DOCTYPE html>
<html>
	<head> 
		<?php include"logo_tab.php" ?>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title> Đặt món </title>
	</head>
	<body>
		<?php
			session_start();
			include 'head_user.html';
		?>
		
		<br><br><br>
		<iframe src="Menu_order.php" width="940" height="400" frameborder="0" class = "frame_menu">
        </iframe>
		
		<?php
			include 'end.html';
		?>
	</body>
</html>
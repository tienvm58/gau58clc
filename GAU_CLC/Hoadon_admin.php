<html>
	<head>
		<?php include"logo_tab.php" ?>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<title> Thực đơn </title>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/lightbox.css">
		<script type="text/javascript" src="jquery.flexisel.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen,print" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen,print" />
		<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css" media="screen,print" />
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</head>
		
	<body>
		<?php 
			session_start();
			include 'head_admin.html'; 
		?>
		
		<div class = "container">
			<form name="formchoose" action="Hoadon_show.php" method="post">
				<div class = "account_action">
					<label  for="name"><div align = "center"><b>Xem hóa đơn của user</b></div></label>
					<div align = "center">
					<input type="text" name="name" size = "25" maxlength = "40" required/> <br><br>
					</div>
					<div align = "center">
						<input type="submit" name="submit" value="Xem" class = "btn"/>
					</div>
				</div>
			</form>
		</div>
		
        
        <?php
			include 'end.html';
		?>
	</body>
</html>

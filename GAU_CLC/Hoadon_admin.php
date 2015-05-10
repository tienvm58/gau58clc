<html>
	<head>
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
		<?php include 'head_admin.html'; ?>
		
		<form name="formchoose" action="Hoadon_show.php" method="post">
		<fieldset class = "frm-set">
			<legend></legend>
			<div class = "login_board" align = "center">
				<dl>
					<dt>
						<label  for="name"><b>Xem hóa đơn của</b></label>
					</dt>
					<dd>
						<input width = "100%" type="text" name="name" size = "25" maxlength = "40" placeholder="Username" required/>
					</dd>
					<br>
				</dl>
				<dt></dt>
			</div>
			<br>
		</fieldset>
		<br>
		<div align = "center">
			<input type="submit" name="submit" value="Xem" class = "button_action"/>
		</div>
	</form>
		
        
        <?php
			include 'end.html';
		?>
	</body>
</html>

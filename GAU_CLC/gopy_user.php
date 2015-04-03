<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<?php
			include 'head_user.html'
		?>
		<br><br><br><br>
		<form name="gopyus" action="gopyuser.php" method="post" >
			<div class = "comment">
				<h2>Nhận xét của bạn về chất lượng của nhà hàng </h2><br>
				<b>Tên của bạn bạn</b><br>
				<input type="text" name="usname" size = "20" maxlength = "25"/> <br><br>
				<br><b>Nhận xét của bạn </b><br>
				<textarea rows = "8" cols = "60" type="text" name="gopy" class = "box_gopy"> </textarea> <br><br> 
				<input type="submit" name="ok" class = "button_action"/> <br><br>
			</div>
		</form>
		<div align = "center">
			<?php
				include 'end.html';
			?>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title> Góp ý </title>

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
				<input width = "100%" type="text" name="usname" size = "25" maxlength = "25" required/> <br><br>
				<br><b>Nhận xét của bạn </b><br>
				<textarea rows = "8" cols = "60" name="gopy" class = "box_gopy" id="gopy" required/></textarea>
				<br><br>
				<input type="submit" name="ok" class = "button_action" /> <br><br>
			</div>
		</form>
		<div align = "center">
			<?php
				include 'end.html';
			?>
		</div>
	</body>
</html>
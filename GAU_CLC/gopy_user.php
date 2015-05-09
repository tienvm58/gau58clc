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
		
		<div class = "container">
			<form name="gopyus" action="gopyuser.php" method="post" >
				<div class = "comment">
					<div class = "form-group">
					<h3>Nhận xét của bạn về chất lượng của nhà hàng </h3><br>
					<b>Tên của bạn</b><br>
					<input type="text" name="usname"maxlength = "25" required/> <br><br>
					<br><b>Nhận xét của bạn </b><br>
					<textarea rows = "8" cols = "120" name="gopy" class = "box_gopy" id="gopy" required/></textarea>
					<br><br>
					<input type="submit" name="ok" class = "btn" /> <br><br>
					</div>
				</div>
			</form>
		</div>
			
		<?php
			include 'end.html';
		?>
	</body>
</html>

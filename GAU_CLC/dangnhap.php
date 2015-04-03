<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Đăng Nhập</title>
		<style>

		</style>
	</head>

<body>
	<?php
		include 'head.html';
	?>
	
	
	
	<br><br><br><br>
	<form name="formlogin" action="checklogin.php" method="post">
		<fieldset class = "frm-set">
			<legend></legend>
			<div class = "login_board">
				<dl>
					<dt>
						<label  for="name"><b>Tên truy cập</b></label>
					</dt>
					<dd>
						<input width = "100%" type="text" name="name" size = "25" maxlength = "40" placeholder="Username" required/>
					</dd>
					<br>
				</dl>
				<dl>
					<dt>
						<label  for="password"><b>Mật khẩu</b></label>
					</dt>
					<dd>
						<input width = "100%" type="password" name="pass" size = "25" maxlength = "40" placeholder="Password" required />
					</dd>
					<br>
				</dl>
				<dl>
					<dt></dt>
					<dd>
						<label for = "autologin" id = "lbl_autologin">
							<input type = "checkbox" name = "autologin" id = "autologin" tabindex = "4" class = "checkbox" checked = "checked">
							Ghi nhớ
						</label>
					</dd>
				</dl>
			</div>
			<br>
		</fieldset>
		<br>
		<div align = "center">
			<input type="submit" name="submit" value="Đăng nhập" class = "button_action"/>
		</div>
	</form>
	<br>
	
	<div align = "center">
		<?php
			include 'end.html';
		?>
	</div>
</body>
</html>

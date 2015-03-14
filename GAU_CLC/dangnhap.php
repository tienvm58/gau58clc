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
	<div style="width: 300px; margin: auto">
		<div>
			<h1 style="color: black">Sign in</h1> 
			<br><br>
		</div>
		<form name="formlogin" action="checklogin.php" method="post">
			<div><h2>
				<label  for="name">User</label>
				<input width = "100%" type="text" name="name" placeholder="Username" required/>
				<br>
				<label  for="password">Pass</label>
				<input width = "100%" type="password" name="pass" placeholder="Password" required />
				<br><br>
				<input type="submit" name="submit" value="Sign in"/>
				</h2>
			</div>
		</form>
	</div>
	<?php
		include 'end.html';
	?>
</body>
</html>

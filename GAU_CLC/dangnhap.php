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
	session_start();

	if (isset($_SESSION['admin'])) {
		//echo "<br> session set your name: ".$_SESSION['name']." ".$_SESSION['admin']."<br>";		
		echo "<div style = ' width: 200px; margin: auto;'> <h1>you loged in<h1> </div>";
		echo '<meta http-equiv="refresh" content="1; url=Code.php">';
	} else {
	?>
	<div style="width: 300px; margin: auto; background-color: #aa6611">
		<div>
			<h1 style="color: black">Sign in</h1> 
		</div>
		<form name="formlogin" action="checklogin.php" method="post">
			<div><h2>
				<label  for="name">user</label>
				<input width = "100%" type="text" name="name" placeholder="Username" required/>
				<br>
				<label  for="password">pass</label>
				<input width = "100%" type="password" name="pass" placeholder="Password" required />
				<input type="submit" name="submit" value="submit"/>
				</h2>
			</div>
		</form>
		<br>
		<div>
			<a style="color: black" href="https://www.google.com.vn/?gws_rd=ssl#q=forgot">forgot? Click here!</a>
		</div>
	</div>
	<?php
	}
	?>
</body>
</html>

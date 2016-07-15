<!DOCTYPE html>
<html>
	<head>
		<?php include"logo_tab.php" ?>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<title> Quản lý tài khoản </title>
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
	
		<?php
			
			if(isset($_POST['addacc'])) {				// add acount
				//echo "addacc be set <br>";
				$n = $_POST['addname'];
				$p = $_POST['addpass'];
				$l = $_POST['addlevel'];
			$conn = new mysqli("localhost", "root", "", "nhahang") or die ("can't connect database");
				
				$sqlcheck= "select * from user where name='".$n."'";
				$qcheck = $conn->query($sqlcheck);
				if ($qcheck->num_rows!=0) {
					echo "Tài khoản ".$n." đã tồn tại!<br>";
				} else {
					$query = "insert into user(name, pass, level) values ('".$n."','".$p."','".$l."')";
					if ($conn->query($query)) {
						echo "Thêm tài khoản:".$n." with pass: ".$p." thành công <br>";
					} else {
						echo "không thành công";
					}	
				}
				$conn->close();
			}
			
			
		?>
	<br>
	<?php
		$connection = mysqli_connect("localhost","root","", "nhahang") or die ("Không thể kết nối đến dữ liệu");
        mysqli_select_db($connection, "nhahang");
        $sql = "select * from user"; // chon du lieu tu bang user
        $result = mysqli_query($connection,$sql);
        ?>
        <style type="text/css">
        <!--
        .style2 {
	       font-size: 36px;
	       color: #FF0000;
		   padding-bottom: 20px;
        }
        -->
        </style>
        <br><br><br><br>
		<div class = "container">
	 		<div class="text1">DANH SÁCH TÀI KHOẢN<a class="text1" href="addacount.php">(+)</a><a class="text1" href="deleteacount.php">(-)</a></div><br><br>
				<table class = "table table-hover table-striped table-order" style = "margin-left: 20%;">
					<thead>
					<tr align="center" valign="middle">
						<th><div align="center">Tên đăng nhập</div></th>
						<th><div align="center">Mật khẩu</div></th>
						<th><div align="center">Level</div></th>
					</tr>
					</thead>
					<tbody>
	
            
					<?php
						while($data=mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><div align="center"><?php echo $data["name"]; ?></div></td>
						<td><div align="center"><?php echo $data["pass"]; ?></div></td>
						<td><div align="center"><?php echo $data["level"]; ?></div></td>
					</tr>
	   <?php
	   }

	   ?>
	   </tbody>
	   </table>
	   		</div>

		

	
	<?php

		include 'end.html';
	?>
	
</body>
</html>
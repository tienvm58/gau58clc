<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Welcome to Gấu's restaurant	</title>
	</head>
		
	<body>
		<div class="cover">
			<div class="TopBar" align="right"> 
				<a href="#" target="blank">	
					<img src="image/fb_ico.png" alt="Follow us on Facebook" title="Follow us on Facebook">
				</a>
				<a href="#" target="blank">
					<img src="image/twitter_ico.png" alt="Follow us on Twitter" title="Follow us on Twitter">
				</a>
				<a href="dangnhap.php">
					<img src="image/login_ico.png" alt="Login" title="login">
				</a>
				<form action="logout.php" >
					<input type="submit" name="submit" value="logout"/>
				</form>
				
			</div>
		</div>
    		<div class="khungchinh" >
        		<ul>
						<li><a href="Code.php">Home</a></li>
            			<li><a href="menu.php">Menu</a></li>
            			<li><a href="#">Đặt hàng</a></li>
						<li><a href="#">Quản lí</a>
						<ul>
							<li><a href="Add.php">Thêm món</a></li>
							<li><a href="#">Xóa</a></li>
						</ul>
            			<li><a href="#">Liên hệ</a></li>
            			<li><a href="#">Góp ý</a></li>
        		</ul>
    
		</div>
		
        <style type="text/css">
        <!--
        .style2 {
	       color: #FF0000;
	       font-weight: bold;
	       font-size: 18px;
        }
        -->
        </style>
		<br><br><br><br>
        <div align = "center">
        <table width="994" height="100" border="1">
        <tr>
            <td><div align="center">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
			<p class="style2">
				<?php
					session_start();
					if (isset($_SESSION['admin'])) {
						if ($_SESSION['admin']=="yes"){
							echo "HELLO ADMIN <a style = 'color: blue;' href= 'addacount.php'> click here to set user </a>";
						}
					}
					else {
							echo "CHÚC CÁC BẠN CÓ MỘT NĂM MỚI VUI VẺ, AN KHANG, THỊNH VƯỢNG";
						}
				?>
			</p>
            </div>
            <p align="center">&nbsp;</p></td>
        </tr>
        </table>
        
        
        
		
		<br><br><br><br><br><br>
		<div align = "center">
		<table cellspacing = "20" border = "0">
			<tr>
				<div align = "center">
				<table border = "1px" width = "994px" height = "100px" align = "center" cellspacing = "5px">
					<tr>
						<br><br><br>
						<td><div align = "left"> 
							<ul>
								<li> <img src = "Image/footer.png " width = "100px" height = "100px"> </li>
							</ul>
						</div></td>
						<td><div align = "center-leftright">
							<ul>
								<li> Địa chỉ: 144 Xuân Thủy, Cầu Giấy, Hà Nội </li>
								<li> Điện thoại: 0912345678 </li>
								<li> Facebook:<li>
								<li> <a style = "color: black;" href = "Code.php">Về trang chủ</a></li>
							</ul>
						</div></td>
						</tr>
				</table>
			</tr>
		</table>	
	</body>
</html>

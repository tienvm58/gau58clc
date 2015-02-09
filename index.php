<?php
	include("connect.php");
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Welcome to Gấu's restaurant	</title>
		<link rel="shortcut icon" type="image/x-icon" href="image/icon.ico">
	</head>
		
	<body>
		<div class="cover"></div>
    		<div class="khungchinh" >
        		<ul>
						<li><a href="index.php?page=trangchu">Giới thiệu</a></li>
            			<li><a href="index.php?page=menu">Menu</a>
                			<ul>
                				<?php
                					$db = "select * from kindfood";// chon bang trong csdl
                					$sql = mysqli_query($conn,$db);// truy van

                					while($row = mysqli_fetch_array($sql))
                					{
                						
                				?>
                    				<li><a href="index.php?page=menu&maloai=<?php echo $row['maloai'];?>"><?php echo $row['tenloai']; ?></a></li>

                    			<?php
                    				}
                    			?>
                    				
                			</ul>
            			</li>
            			<li><a href="#">Đặt hàng</a></li>
						<li><a href="#">Quản lí</a>
						<ul>
							<li><a href="Add.html">Thêm Món</a></li>
							<li><a href="#">Xóa</a></li>
						</ul>
            			<li><a href="#">Liên hệ</a></li>
            			<li><a href="#">Góp ý</a></li>
        		</ul>
    
		</div>
		
		
		<div id="content">
		<?php

			
			if(!isset($_GET['page'])) $_GET['page'] = 'trangchu';

			$page = $_GET['page'];
			switch($page){
				case 'trangchu':
					include("trangchu.php");
					break;
				case 'menu':
					include("menu.php");
					break;
				case 'dathang':
					include("quanli.php");
					break;
				case 'lienhe':
					include("lienhe.php");
					break;
			}
		?>
		</div>
		<div align = "center">
		<table cellspacing = "20" border = "0" margin-top = "20px">
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
						<td><div align = "center-left">
							<ul>
								<li> Địa chỉ: 144 Xuân Thủy, Cầu Giấy, Hà Nội </li>
								<li> Điện thoại: 0912345678 </li>
								<li> Facebook:<li>
								<li> <a href = "Code.html">Về trang chủ</a></li>
							</ul>
						</div></td>
						</tr>
				</table>
			</tr>
		</table>	
	</body>
</html>

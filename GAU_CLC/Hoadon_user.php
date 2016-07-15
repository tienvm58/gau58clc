<html>
	<head>
		<?php include"logo_tab.php" ?>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<title> Hóa đơn </title>
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
			include 'head_user.html';
			$connection = mysqli_connect("localhost","root","", "nhahang") or die ("Không thể kết nối đến dữ liệu");
			mysqli_select_db($connection, "nhahang");
			$user = $_SESSION['name'];
			$sql = "select * from  hoadon where User= '$user' and Qty != 0"; 		$result = mysqli_query($connection,$sql);
        ?>
 
        <br><br><br><br>
        <div class="container">
			<div class = "text1"> <b> HÓA ĐƠN </b> </div>
			<br><br>
            <div class="row" align = "center">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th><div align = "center">STT </div></th>
                            <th><div align = "center">Tên món</div></th>
                            <th><div align = "center">Đơn Giá</div></th>
							<th><div align = "center">Số Lượng</div></th>
							<th><div align = "right">Thành tiền</div></th>
						</tr>
                    </thead>
                    <tbody>
					<?php
						$dem = 0;
						$tong =0;
						while($data=mysqli_fetch_assoc($result)){
					?>
					<tr>
						<?php 
							$dem++;
							$tong+= $data["Money"];
						?>
						<td width = "80" height="25"><div align = "center"><?php echo $dem; ?></div></td>
						<td width = "350"><div align = "center"><?php echo $data["Name"]; ?></div></td>
						<td width = "170"><div align = "center"><?php echo $data["Price"]; ?></div></td>
						<td width = "170"><div align = "center"><?php echo $data["Qty"]; ?></div></td>
						<td width = "170"><div align = "right"><?php echo $data["Money"]; ?></div></td>
					</tr>
					<?php
						}
					?>
					<tr>
						<td colspan="4" height="20"><div align="center">Tổng</div></td>
						<td><div align = "right"> <?php echo $tong; ?></div></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
        <?php
			mysqli_close($connection);
			include 'end.html';
		?>
	</body>
</html>

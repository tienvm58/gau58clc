<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<title> Thực đơn </title>
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
			$connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
			mysql_select_db("nhahang",$connection);
			$user = $_SESSION['name'];
			$sql = "select * from  hoadon where User= '$user' and Qty != 0"; 		$result = mysql_query($sql);
        ?>
 
        <br><br><br><br>
        <div class="container">
			<div class = "text1"> <b> HÓA ĐƠN </b> </div>
			<br><br>
            <div class="row" align = "center">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên món</th>
                            <th>Đơn Giá</th>
							<th>Số Lượng</th>
							<th>Thành tiền</th>
						</tr>
                    </thead>
                    <tbody>
					<?php
						$dem = 0;
						$tong =0;
						while($data=mysql_fetch_assoc($result)){
					?>
					<tr>
						<?php 
							$dem++;
							$tong+= $data["Money"];
						?>
						<td width = "80" height="25"><?php echo $dem; ?></td>
						<td width = "350"><?php echo $data["Name"]; ?></td>
						<td width = "170"><?php echo $data["Price"]; ?></td>
						<td width = "170"><?php echo $data["Qty"]; ?></td>
						<td width = "170"><?php echo $data["Money"]; ?></td>
					</tr>
					<?php
						}
					?>
					<tr>
						<td colspan="4" height="20"><div align="center">Tổng</div></td>
						<td> <?php echo $tong; ?></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
        <?php
			mysql_close($connection);
			include 'end.html';
		?>
	</body>
</html>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Lịch sử đặt món	</title>
	</head>
	<body>
		<?php
		include 'head_admin.html'
		?>
		
		<br><br><br>
		<div class = "text1"> <b> LỊCH SỬ ĐẶT MÓN </b> </div>
		
		<?php
		$conn=mysql_connect("localhost", "root", "") or die("failed");
		mysql_select_db("nhahang",$conn);
		$sql ="select * from offer where Qty!= 0 order by Time desc";
		$query=mysql_query($sql);
		header("content-type:text/html;charset=utf-8");
		//$data= mysql_fetch_assoc($query);
		echo "<br><br><br>";
		echo"<div class = 'container'>";
			echo"<table class='table table-hover table-striped table-order' style = 'margin-left:22%;'>";
				echo "<tr>";
					echo"<th><div align = 'center'>Thời gian </div></th>";
					echo"<th><div align = 'center'>Bàn</div></th>";
					echo"<th><div align = 'center'>Tên món</div></th>";
					echo"<th><div align = 'center'>Đơn giá</div></th>";
					echo"<th><div align = 'center'>Số lượng</div></th>";
					echo"<th><div align = 'center'>Thành tiền</div></th>";
				echo "</tr>";
				while($data=mysql_fetch_assoc($query)){
				echo "<tr>";
					echo"<td><div align = 'center'>".$data["Time"]."</div></td>";
					echo"<td><div align = 'center'>".$data["User"]."</div></td>";
					echo"<td><div align = 'center'>".$data["Name"]."</div></td>";
					echo"<td><div align = 'center'>".$data["Price"]."</div></td>";
					echo"<td><div align = 'center'>".$data["Qty"]."</div></td>";
					echo"<td><div align = 'center'>".$data["Money"]."</div></td>";
				echo "</tr>";
				}
			echo"</table>";
		echo"</div>";
		?>
		<style type="text/css">
			<!--
			.style2 {
			font-size: px;
			color: #FF0000;
			padding-bottom: 20px;
			}
			-->
		</style>
		<br><br>
		<div align = "center">
			<a class="btn" href="deleteoffer.php">Xóa lịch sử</a>
		</div>
		
		<?php
			include 'end.html';
		?>
	</body>
</html>		
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Thêm món ăn	</title>
	</head>
	<body>
		<?php
		include 'head_admin.html'
		?>
		
		<?php
		$conn=mysql_connect("localhost", "root", "") or die("failed");
		mysql_select_db("nhahang",$conn);
		$sql ="select * from offer where Qty!= 0 order by Time desc";
		$query=mysql_query($sql);
		header("content-type:text/html;charset=utf-8");
		//$data= mysql_fetch_assoc($query);
		echo "<br><br><br>";
		echo"<div align='center'>";
		echo"<table border='1' align='center' weight='1000' height='200' >";
		echo "<tr class='tit'>";
			echo"<td>Thời gian</td>";
			echo"<td>Bàn</td>";
			echo"<td>Tên món</td>";
			echo"<td>Đơn giá</td>";
			echo"<td>Số lượng</td>";
			echo"<td>Thành tiền</td>";
		echo "</tr>";
		while($data=mysql_fetch_assoc($query)){
			echo "<tr>";
				echo"<td>".$data["Time"]."</td>";
				echo"<td>".$data["User"]."</td>";
				echo"<td>".$data["Name"]."</td>";
				echo"<td>".$data["Price"]."</td>";
				echo"<td>".$data["Qty"]."</td>";
				echo"<td>".$data["Money"]."</td>";
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
		<div align="center"</div>
		<CAPTION><span class="style2"><a class="style2" href="deleteoffer.php">Xóa lịch sử</a></span></CAPTION>
		<div align = "center">
		<?php
			include 'end.html';
		?>
		</div>
	</body>
	</body>
</html>		
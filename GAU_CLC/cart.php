

<?php
	error_reporting(E_ERROR);
	include 'head_user.html';
	session_start();
	if(isset($_POST['submit']))
	{
		foreach($_POST['qty'] as $key=>$value)
		{
			if( ($value == 0) and (is_numeric($value)))
			{
				unset ($_SESSION['cart'][$key]);
			}
			elseif(($value > 0) and (is_numeric($value)))
			{
				$_SESSION['cart'][$key]=$value;
			}
		}	
		header("location:cart.php");
	}
?>
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
	$ok=1;
	if(isset($_SESSION['cart']))
	{
		foreach($_SESSION['cart'] as $k => $v)
		{
			if(isset($k))
			{
				$ok=2;
			}	
		}
	}
	if($ok == 2)
	{
 
		echo "<form action='cart.php' method='post'>";
		foreach($_SESSION['cart'] as $key=>$value)
		{
			$item[]=$key;
		}
		$str=implode(",",$item);
		$connect=mysqli_connect("localhost","root","", "nhahang") or die("Can not connect database");
		mysqli_select_db($connect, "nhahang");
		$sql="select * from menu where STT in ($str) ";
		$query=mysqli_query($sql);
		$total = '';
		?>
		<style type="text/css">
			<!--
			.style2 {
			font-family: Verdana;
			font-size: 36px;
			color: #CC0000;
			}
			-->
		</style>
		<br><br>
        <div class = "container">
			<div class="text1">ĐẶT MÓN</div> <br><br>
				<table class = "table table-hover table-striped" style = "margin-left: 20%;">
			<br>
            <tr align="center" valign="middle">
                <td width='300'><div align="center">Tên món</div></td>
                <td width="165"><div align="center">Giá tiền (VNĐ)</div></td>
				<td width="60" height="25"><div align="center">Số lượng</div></td>
				<td width="100" height="25"><div align="center">Thành tiền</div></td>
				<td width="60" height="25"><div align="center"></div></td>
				
			</tr>
        
		<?php
		
		while($row=mysqli_fetch_array($query))
		{
		
			
		?>	
			<tr>
				<td width='300'><div align='center'><?php echo $row["Name"]; ?></div></td>
				<td width='165'><div align='center'><?php echo $row["Price"]; ?> </div></td>
				<td width = '60'><div align='center'> <?php echo "<p align='center'><input type='text' name='qty[$row[STT]]' size='5' value='{$_SESSION['cart'][$row['STT']]}'required/>";?></div></td>
				<td width = '100'><div align = 'center'><?php echo $_SESSION['cart'][$row['STT']]*$row['Price']; ?></div></td>
				<td width="60" height="25"><div align="center"> <?php echo "<a class = 'btn' href='delcart.php?productid=$row[STT]'>Xóa</a></p>"; ?></div></td>
				
			</tr>
		<?php
			
			$total+=$_SESSION['cart'][$row['STT']]*$row['Price']; 
			?>
					
		<?php
			}
			
		?>
			<tr>
            	<td colspan="3" height="25"><div align="center">Tổng</div></td>
				<td width = '100'><div align = 'center'> <?php echo $total; ?></div></td>
			</tr>
		</table>
			
		<?php
			echo "<br><br>";
			echo "<input class = 'btn' type='submit' name='submit' value='Đặt món' style = 'margin-left: 46%;'>";
			if(isset($_POST['submit']))
			{
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				$t = date('d/m/Y H:i:s');
				$connect=mysqli_connect("localhost","root","", "nhahang") or die("Can not connect database");
				mysqli_select_db($connect, "nhahang");
		
				$sql= "select * from menu where STT in ($str)";
				$query = mysqli_query($connect, $sql);
				while($data = mysqli_fetch_array($query))
				{		
					$user = $_SESSION['name'];
					$add="insert into offer VALUE ('".$t."','".$user."','".$data["Name"]."','".$data["Price"]."','".$_SESSION['cart'][$data["STT"]]."','".$_SESSION['cart'][$data["STT"]]*$data["Price"]."')";
					mysqli_query($connect, $add);
					/*
					$chinh = $data["Name"];
					$tien = $_SESSION['cart'][$data["STT"]];
					$pa = "select * from hoadon where Name = '$chinh' and User = '$tien'";
					if(isset($pa)){
						$cuong = mysql_query($pa);
						$cuong["Qty"]+= $_SESSION['cart'][$data["STT"]];
						$cuong["Money"]+= $_SESSION['cart'][$data["STT"]]*$data["Price"];
		
					}
					else{
						*/
						$mon= "insert into hoadon VALUE ('".$user."','".$data["Name"]."','".$data["Price"]."','".$_SESSION['cart'][$data["STT"]]."','".$_SESSION['cart'][$data["STT"]]*$data["Price"]."')";
						mysqli_query($connect, $mon);
					//}
					
				}
				echo "<br><h3>Đặt món thành công</b><br><b>Xem hóa đơn tạm thời của bạn</h3>";		
				echo '<meta http-equiv="refresh" content="2; url=Hoadon_user.php">';
			}
			echo "<div class='pro' align='center'>";
			echo "<br><br>";
			echo "<a class = 'btn''btn' href='Menu_order.php'>Đặt món tiếp</a>  <a class = 'btn' href='delcart.php?productid=0'>Xóa Tất Cả</a>"; 
			echo "</div>";
	}
	else
	{
		echo "<div class='pro'>";
		echo "<p align='center'>Bạn chưa đặt món nào<br /><a class = 'btn' href='Menu_order.php'>Đặt món</a></p>";
		echo "</div>";
	}
	
	include 'end.html';
?>
		</div>

</body>
</html>
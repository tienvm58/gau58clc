

<?php
	error_reporting(E_ERROR);
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
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="author" content="GallerySoft.info" />
    <link rel="stylesheet" href="style.css" type="text/css" />
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
		$connect=mysql_connect("localhost","root","") or die("Can not connect database");
		mysql_select_db("nhahang",$connect);
		$sql="select * from menu where STT in ($str) ";
		$query=mysql_query($sql);
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
        <div align="center"</div>
		<table width="536" border="1" >
            <div class="style2">Đặt món</div>
			<br>
            <tr align="center" valign="middle">
                <td width="211"><div align="center">Tên món</div></td>
                <td width="165"><div align="center">Giá tiền (VNĐ)</div></td>
				<td width="60" height="25"><div align="center">Số lượng</div></td>
				<td width="100" height="25"><div align="center">Thành tiền</div></td>
			</tr>
        
		<?php
		
		while($row=mysql_fetch_array($query))
		{
		
			
		?>	
			<tr>
				<td width='211'><div align='center'><?php echo $row["Name"]; ?></div></td>
				<td width='165'><div align='center'><?php echo $row["Price"]; ?> </div></td>
				<td width = '60'><div align='center'> <?php echo "<p align='center'><input type='text' name='qty[$row[STT]]' size='5' value='{$_SESSION['cart'][$row['STT']]}'";?></div></td>
				<td width = '100'><div align = 'center'><?php echo $_SESSION['cart'][$row['STT']]*$row['Price']; ?></div></td>
			</tr>
		<?php
			
			$total+=$_SESSION['cart'][$row['STT']]*$row['Price']; 
			?>
					
		<?php
			}
			
		?>
			<tr>
            	<td colspan="3" height="25"><div align="center">Tổng</div></td>
				<td width = '100'><div align = 'center'> <?php echo $total; ?></td>
			</tr>
		</table>
			
		<?php
			echo "<br><br>";
			echo "<input type='submit' name='submit' value='Đặt món'>";
			if(isset($_POST['submit']))
			{
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				$t = date('d/m/Y H:i:s');
				$connect=mysql_connect("localhost","root","") or die("Can not connect database");
				mysql_select_db("nhahang",$connect);
		
				$sql= "select * from menu where STT in ($str)";
				$query = mysql_query($sql);
				while($data = mysql_fetch_array($query))
				{		
					$add="insert into offer VALUE ('".$t."','".$_SESSION['name']."','".$data["Name"]."','".$data["Price"]."','".$_SESSION['cart'][$data["STT"]]."','".$_SESSION['cart'][$data["STT"]]*$data["Price"]."')";
					mysql_query($add);
				}
			}
			echo "<div class='pro' align='center'>";
			echo "<br><br>";
			echo "<b><a href='Menu_order.php'>Đặt món tiếp</a> - <a href='delcart.php?productid=0'>Xóa</a></b>"; 
	}
	else
	{
		echo "<div class='pro'>";
		echo "<p align='center'>Bạn chưa đặt món nào<br /><a href='Menu_order.php'>Đặt món</a></p>";
		echo "</div>";
	}
?>

</body>
</html>
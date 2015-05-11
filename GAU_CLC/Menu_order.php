

<?php
	session_start();
?>
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

	<body
		<div id='cart'>
		<?php
	
			$ok=1;
			if(isset($_SESSION['cart']))
			{
				foreach($_SESSION['cart'] as $k=>$v)
				{
					if(isset($v))
					{
						$ok=2;
						}
				}
			}
			if ($ok != 2)
			{
				echo '<p> </p>';
			} 
			else 
			{
				$items = $_SESSION['cart'];
				echo '<p> </p>';
			}
		?>
		</div>
		
		
		<?php
		
			$connect=mysql_connect("localhost","root","")or die("Can not connect database");
			mysql_select_db("nhahang",$connect);
			$sql="select * from menu where value ='1' order by STT desc";
			$query=mysql_query($sql);
		?>	 
			 <br><br><br><br>
			<style type="text/css">
			<!--
			.style2 {
			font-family: Verdana;
			font-size: 36px;
			color: #CC0000;
			}
			-->
			</style>
        
			<div class = "container">
			<div class="text1">THỰC ĐƠN</div> <br> <br>
			<table class = "table table-hover table-striped" style = "margin-left: 20%">
			<br>
            <tr align="center" valign="middle">
                <th><div align="center">STT</div></th>
                <th><div align="center">Tên món</div></th>
                <th><div align="center">Giá tiền (VNĐ)</div></th>
				<th><div align="center">Chọn</div></th>
                
			</tr>
            <tr>
            	<td colspan="4" height="25"><div class = "menu1" align="center">Món khai vị</div><td>
            </tr>
		<?php
			$sql="select * from menu where value ='1' order by STT desc";//in món khai vị
			$query=mysql_query($sql);
			if(mysql_num_rows($query) > 0)
			{
				$dem = 0;
				while($data=mysql_fetch_array($query))
				{	
					$dem++;
					/*
					echo "<div class=pro>";
					echo "Món: $row[Name] - Gia: ".number_format($row['Price'],3)." VND<br />";
					echo "<p align='right'><a href='addcart.php?item=$row[STT]'>Mua Sach Nay</a></p>";
					echo "</div>";
					*/
		?>
					<tr>
					<td width='51' height='25'><div align='center'><?php echo $dem; ?></div></td>
					<td width='211'><div align='center'><?php echo $data["Name"]; ?></div></td>
					<td width='165'><div align='center'><?php echo $data["Price"]; ?> </div></td>
					<td width ='90'> <?php echo "<p align='center'><a class = 'btn' href='addcart.php?item= $data[STT]' >Đặt món</a></p>"; ?></td>
				
					</tr>
		<?php	
				}
			}
		?>
		
		
		 <tr>
            <td colspan="4" height="25"><div class = "menu1" align="center">Món chính</div><td>
         </tr>
		<?php
			$sql="select * from menu where value ='2' order by STT desc"; // in món chính
			$query=mysql_query($sql);
			if(mysql_num_rows($query) > 0)
			{
				$dem = 0;
				while($data=mysql_fetch_array($query))
				{	
					$dem++;
					/*
					echo "<div class=pro>";
					echo "Món: $row[Name] - Gia: ".number_format($row['Price'],3)." VND<br />";
					echo "<p align='right'><a href='addcart.php?item=$row[STT]'>Mua Sach Nay</a></p>";
					echo "</div>";
					*/
		?>
					<tr>
					<td width='51' height='25'><div align='center'><?php echo $dem; ?></div></td>
					<td width='211'><div align='center'><?php echo $data["Name"]; ?></div></td>
					<td width='165'><div align='center'><?php echo $data["Price"]; ?> </div></td>
					<td width ='90'> <?php echo "<p align='center'><a class = 'btn' href='addcart.php?item= $data[STT]' >Đặt món</a></p>"; ?></td>
				
					</tr>
		<?php	
				}
			}
		?>
		
		
		 <tr>
            <td colspan="4" height="25"><div class = "menu1" align="center">Đồ uống</div><td>
         </tr>
		<?php
			$sql="select * from menu where value ='3' order by STT desc"; // in đồ uống vào thực đơn đặt món
			$query=mysql_query($sql);
			if(mysql_num_rows($query) > 0)
			{
				$dem = 0;
				while($data=mysql_fetch_array($query))
				{	
					$dem++;
					/*
					echo "<div class=pro>";
					echo "Món: $row[Name] - Gia: ".number_format($row['Price'],3)." VND<br />";
					echo "<p align='right'><a href='addcart.php?item=$row[STT]'>Mua Sach Nay</a></p>";
					echo "</div>";
					*/
		?>
					<tr>
					<td width='51' height='25'><div align='center'><?php echo $dem; ?></div></td>
					<td width='211'><div align='center'><?php echo $data["Name"]; ?></div></td>
					<td width='165'><div align='center'><?php echo $data["Price"]; ?> </div></td>
					<td width ='90'> <?php echo "<p align='center'><a class = 'btn' href='addcart.php?item= $data[STT]' >Đặt món</a></p>"; ?></td>
				
					</tr>
		<?php	
				}
			}
		?>


		 <tr>
			<td colspan="4" height="25"><div class = "menu1" align="center">Món tráng miệng</div><td>
          </tr>
		<?php
			$sql="select * from menu where value ='4' order by STT desc"; // in tráng miệng vào thực đơn đặt món
			$query=mysql_query($sql);
			if(mysql_num_rows($query) > 0)
			{
				$dem = 0;
				while($data=mysql_fetch_array($query))
				{	
					$dem++;
					/*
					echo "<div class=pro>";
					echo "Món: $row[Name] - Gia: ".number_format($row['Price'],3)." VND<br />";
					echo "<p align='right'><a href='addcart.php?item=$row[STT]'>Mua Sach Nay</a></p>";
					echo "</div>";
					*/
		?>
					<tr>
					<td width='51' height='25'><div align='center'><?php echo $dem; ?></div></td>
					<td width='211'><div align='center'><?php echo $data["Name"]; ?></div></td>
					<td width='165'><div align='center'><?php echo $data["Price"]; ?> </div></td>
					<td width ='90'> <?php echo "<p align='center'><a class = 'btn' href='addcart.php?item= $data[STT]' >Đặt món</a></p>"; ?></td>
				
					</tr>
		<?php	
				}
			}
		?>
		</table>
	</body>
</html>
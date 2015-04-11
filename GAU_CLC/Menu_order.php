<!DOCTYPE html>
<html>
	<head> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<div class = "menu">
			<?php
				$connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
				mysql_select_db("nhahang",$connection);
				$sql = "select * from khaivi"; // chon du lieu de in mon khai vi
				$result = mysql_query($sql);
			?>
			<br>
        <div align="center">
        <table width="449" border="1" >
            <div class="style2">THỰC ĐƠN</div>
			<br>
            <tr align="center" valign="middle">
                <td width="51" height="25"><div align="center">STT</div></td>
                <td width="211"><div align="center">Tên món</div></td>
                <td width="165"><div align="center">Giá tiền (VNĐ)</div></td>
				<td width="51" height="25"><div align = "center">Chọn</div></td>
            </tr>
            <tr>
            	<td colspan="3" height="25"><div align="center">Khai vị</div><td>
            </tr>

        <?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
			<td width="51" height="25"><div align="center"><?php echo $data["STT"]; ?></div></td>
			<td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
			<td width="165"><div align="center"><?php echo $data["Price"]; ?></div></td>
			<td width="51" height="25"><div align = "center"><input type = "checkbox" name = "confirm" tabindex = "4"></td></div>
		   
        </tr>
		<?php
		}
		?>
       
       
       
		<?php
		//in mon chinh
		$sql = "select * from monchinh";
		$result = mysql_query($sql);
		?>      
        <tr>
			<td colspan="3" height="25"><div align="center">Món chính</div><td>
        </tr>
		<?php
			while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
			<td width="51" height="25"><div align="center"><?php echo $data["STT"]; ?></div></td>
			<td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
			<td width="165"><div align="center"><?php echo $data["Price"]; ?></div></td>
			<td width="51" height="25"><div align = "center"><input type = "checkbox" name = "confirm" tabindex = "4"></td></div>
		   
        </tr>
		<?php
		}
		?>
       
       
       
        <?php
		//in do uong
		$sql = "select * from drink";
		$result = mysql_query($sql);
		?>      
        <tr>
            <td colspan="3" height="25"><div align="center">Đồ uống</div><td>
        </tr>
		<?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
			<td width="51" height="25"><div align="center"><?php echo $data["STT"]; ?></div></td>
			<td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
			<td width="165"><div align="center"><?php echo $data["Price"]; ?></div></td>
			<td width="51" height="25"><div align = "center"><input type = "checkbox" name = "confirm" tabindex = "4"></td></div>
		   
        </tr>
		<?php
		}
		?>
       
       
		<?php
		//in mon trang mieng
		$sql = "select * from desert";
		$result = mysql_query($sql);
		?>      
        <tr>
			<td colspan="3" height="25"><div align="center">Tráng miệng</div><td>
        </tr>
		<?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
			<td width="51" height="25"><div align="center"><?php echo $data["STT"]; ?></div></td>
			<td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
			<td width="165"><div align="center"><?php echo $data["Price"]; ?></div></td>
			<td width="51" height="25"><div align = "center"><input type = "checkbox" name = "confirm" tabindex = "4"></td></div>
        </tr>
		<?php
		}
		?>
       
       
        </table>
		
		<?php
			mysql_close($connection);
		?>
	</div>
	</div>
	</body>
</html>
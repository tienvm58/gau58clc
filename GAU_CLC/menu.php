<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Món chính	</title>
	</head>
		
	<body>
		<div class="cover"></div>
    		<div class="khungchinh" >
        		<ul>
						<li><a href="Code.html">Home</a></li>
            			<li><a href="Menu.php">Menu</a></li>
            			<li><a href="#">Đặt hàng</a></li>
						<li><a href="#">Quản lí</a>
						<ul>
							<li><a href="Add.php">Thêm Món</a></li>
							<li><a href="#">Xóa</a></li>
						</ul>
            			<li><a href="#">Liên hệ</a></li>
            			<li><a href="#">Góp ý</a></li>
        		</ul>
    
		 </div>
		
		
        
        <?php

        $connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
        mysql_select_db("nhahang",$connection);
        $sql = "select * from khaivi";
        $result = mysql_query($sql);
        ?>
        <style type="text/css">
        <!--
        .style2 {
	       font-size: 36px;
	       color: #FF0000;
        }
        -->
        </style>
        <br><br><br><br>
        <div align="center"</div>
        <table width="449" border="1" >
            <CAPTION><span class="style2">MENU</span></CAPTION>
            <tr align="center" valign="middle">
                <td width="51" height="25"><div align="center">STT</div></td>
                <td width="211"><div align="center">Name</div></td>
                <td width="165"><div align="center">Price</div></td>
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

        </tr>
	   <?php
	   }
	   ?>
       
       
       
       <?php
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

        </tr>
	   <?php
	   }
	   ?>
       
       
       
        <?php
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

        </tr>
	   <?php
	   }
	   ?>
       
       
        <?php
	   $sql = "select * from desert";
       $result = mysql_query($sql);
	   ?>      
        <tr>
            <td colspan="3" height="25"><div align="center">Desert</div><td>
        </tr>
		<?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
    	   <td width="51" height="25"><div align="center"><?php echo $data["STT"]; ?></div></td>
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="center"><?php echo $data["Price"]; ?></div></td>

        </tr>
	   <?php
	   }
	   ?>
       
       
        </table>
        
        <?php
			mysql_close($connection);
		?>

        
		
		<br><br><br><br><br><br><br><br><br><br>
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
								<li> <a href = "Code.html">Về trang chủ</a></li>
							</ul>
						</div></td>
						</tr>
				</table>
			</tr>
		</table>	
	</body>
</html>

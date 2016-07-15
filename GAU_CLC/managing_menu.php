<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Quản lí thực đơn	</title>
	</head>
		
	<body>
		
		
        
        <?php
			include 'head_admin.html';
	
        $connection = mysqli_connect("localhost","root","", "nhahang") or die ("Không thể kết nối đến dữ liệu");
        mysqli_select_db($connection, "nhahang");
        $sql = "select * from menu where value = '1'"; // chon du lieu de in mon khai vi
        $result = mysqli_query($connection, $sql);
        ?>
        <style>
			.edit{
				color: black;
				text-align: center;
			}
        </style>
		
        <br><br><br><br>
        <div class = "container">
			<div class = "text1"> <b> THỰC ĐƠN </b> <a class="text1" href="Add.php">(+)</a> </div>
			<br><br>
			<div class = "row">
				<table class="table table-hover table-striped" style = "margin-left: 22%;">
					<thead>	
						<tr align="center" valign="middle">
							<th> <div align = "center">Tên món</div></th>
							<th><div align = "right">Giá</div></th>	
							<th></th>
							<th colspan = "2"> <div align = "center">Thao tác </div></th>
						</tr>
					</thead>
					<tbody>
            <tr>
            	<td><div class = "menu1"><b>Khai vị</b></div><td>
				<td colspan = "3"></td>
            </tr>

        <?php
        while($data=mysqli_fetch_assoc($result)){
        ?>
        <tr>
    	  
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="right"><?php echo $data["Price"]; ?></div></td>
		   <td></td>
		   <td><?php echo "<a class = 'btn' href='edit.php?uSTT=$data[STT]'>Sửa</a>" ;?></td>
		   <td><?php echo "<a class = 'btn' href='delete.php?uSTT=$data[STT]'>Xóa</a>" ;?></td>
        </tr>
	   <?php
	   }
	   ?>
       
       
       
       <?php
	   //in mon chinh
	   $sql = "select * from menu where value = '2'";
       $result = mysqli_query($connection, $sql);
	   ?>      
        <tr>
            <td><div class = "menu1"><b>Món chính</b></div><td>
			<td colspan = "3"></td>
        </tr>
		<?php
        while($data=mysqli_fetch_assoc($result)){
        ?>
        <tr>
    	   
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="right"><?php echo $data["Price"]; ?></div></td>
		   <td></td>
		   <td><?php echo "<a class = 'btn' href='edit.php?uSTT=$data[STT]'>Sửa</a>" ;?></td>
		   <td><?php echo "<a class = 'btn' href='delete.php?uSTT=$data[STT]'>Xóa</a>" ;?></td>
        </tr>
	   <?php
	   }
	   ?>
       
       
       
        <?php
		//in do uong
	   $sql = "select * from menu where value = '3'";
       $result = mysqli_query($connection, $sql);
	   ?>      
        <tr>
            <td><div class = "menu1"><b>Đồ uống</b></div><td>
			<td colspan = "3"></td>
        </tr>
		<?php
        while($data=mysqli_fetch_assoc($result)){
        ?>
        <tr>
    	   
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="right"><?php echo $data["Price"]; ?></div></td>
		   <td></td>
		   <td><?php echo "<a class = 'btn' href='edit.php?uSTT=$data[STT]'>Sửa</a>" ;?></td>
		   <td><?php echo "<a class = 'btn' href='delete?uSTT=$data[STT]'>Xóa</a>" ;?></td>
        </tr>
	   <?php
	   }
	   ?>
       
       
        <?php
		//in mon trang mieng
	   $sql = "select * from menu where value = '4'";
       $result = mysqli_query($connection, $sql);
	   ?>      
        <tr>
            <td><div class = "menu1"><b> Tráng miệng </b></div><td>
			<td colspan = "3"></td>
        </tr>
		<?php
        while($data=mysqli_fetch_assoc($result)){
        ?>
        <tr>
    	   
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="right"><?php echo $data["Price"]; ?></div></td>
		   <td></td>
		   <td><?php echo "<a class = 'btn' href='edit.php?uSTT=$data[STT]'>Sửa</a>" ;?></td>
		   <td><?php echo "<a class = 'btn' href='delete.php?uSTT=$data[STT]'>Xóa</a>" ;?></td>
        </tr>
	   <?php
	   }
	   ?>
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

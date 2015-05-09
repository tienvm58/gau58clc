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
			if(isset($_SESSION['name']) && $_SESSION['level'] == 1){
				include 'head_admin.html';
			}
			else if(isset($_SESSION['name']) && $_SESSION['level'] == 2){
				include 'head_user.html';
			}
			else {
				include 'head.html';
			}
			$connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
			mysql_select_db("nhahang",$connection);
			$sql = "select * from menu where value ='1'"; // chon du lieu de in mon khai vi
			$result = mysql_query($sql);
        ?>
 
        <br><br><br><br>
        <div class="container">
			<div class = "text1"> <b> THỰC ĐƠN </b> </div>
			<br><br>
            <div class="row" align = "center">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên món</th>
                            <th>Giá tiền (VNĐ)</th>
                        </tr>
                    </thead>
                    <tbody>

		<tr>
            <td colspan="3"><div align="center">Món khai vị</div><td>
        </tr>
        <?php
		$dem = 0;
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
			<?php $dem++; ?>
    	   <td width = "80" height="25"><?php echo $dem; ?></td>
    	   <td width = "350"><?php echo $data["Name"]; ?></td>
    	   <td width = "170"><?php echo $data["Price"]; ?></td>

        </tr>
	   <?php
	   }
	   ?>
       
       
       
       <?php
	   //in mon chinh
	   $sql = "select * from menu where value ='2'";
       $result = mysql_query($sql);
	   ?>      
        <tr>
            <td colspan="3" height="25"><div align="center">Món chính</div><td>
        </tr>
		<?php
		$dem =0;
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
			<?php $dem++; ?>
    	   <td><?php echo $dem; ?></td>
    	   <td ><?php echo $data["Name"]; ?></td>
    	   <td ><?php echo $data["Price"]; ?></td>

        </tr>
	   <?php
	   }
	   ?>
       
       
       
        <?php
		//in do uong
	   $sql = "select * from menu where value ='3'";
       $result = mysql_query($sql);
	   ?>      
        <tr>
            <td colspan="3"><div align="center">Đồ uống</div><td>
        </tr>
		<?php
		$dem =0;
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
			<?php $dem++; ?>
    	   <td ><?php echo $dem; ?></td>
    	   <td ><?php echo $data["Name"]; ?></td>
    	   <td ><?php echo $data["Price"]; ?></td>

        </tr>
	   <?php
	   }
	   ?>
       
       
       <?php
		//in mon trang mieng
	   $sql = "select * from menu where value ='4'";
       $result = mysql_query($sql);
	   ?>      
        <tr>
            <td colspan="3" height="20"><div align="center">Tráng miệng</div><td>
        </tr>
		<?php
		$dem =0;
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
			<?php $dem++; ?>
    	   <td ><?php echo $dem; ?></td>
    	   <td ><?php echo $data["Name"]; ?></td>
    	   <td ><?php echo $data["Price"]; ?></td>

        </tr>
	   <?php
	   }
	   ?>
       
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

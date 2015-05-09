<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Quản lí thực đơn	</title>
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
			include 'head_admin.html';
		}
        $connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
        mysql_select_db("nhahang",$connection);
        $sql = "select * from khaivi"; // chon du lieu de in mon khai vi
        $result = mysql_query($sql);
        ?>
        <style>
        <!--
        .style2 {
	       font-size: 36px;
	       color: #FF0000;
        }
        -->
		.edit{
			color: black;
			text-align: center;
		}
        </style>
        <br><br><br><br>
        <div align="center"</div>
        <table width="449" border="1" align="center">
            <CAPTION><span class="style2">MENU<a class = "style2" href="Add.php">(+)</a></span></CAPTION>
            <tr align="center" valign="middle">
                
                <td width="211"><div align="center">Name</div></td>
                <td colspan="3" width="165"><div align="center">Price</div></td>	
            </tr>
            <tr>
            	<td colspan="4" height="25"><div align="center">Khai vị</div><td>
            </tr>

        <?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
    	  
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="center"><?php echo $data["Price"]; ?></div></td>
		   <td><?php echo "<a class = 'edit' href='edit_menu_khaivi.php?uSTT=$data[STT]'>Edit</a>" ;?></td>
		   <td><?php echo "<a class = 'edit' href='del_khaivi.php?uSTT=$data[STT]'>Del</a>" ;?></td>
        </tr>
	   <?php
	   }
	   ?>
       
       
       
       <?php
	   //in mon chinh
	   $sql = "select STT,Name,Price from monchinh";
       $result = mysql_query($sql);
	   ?>      
        <tr>
            <td colspan="4" height="25"><div align="center">Món chính</div><td>
        </tr>
		<?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
    	   
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="center"><?php echo $data["Price"]; ?></div></td>
		   <td><?php echo "<a class = 'edit' href='edit_menu_monchinh.php?uSTT=$data[STT]'>Edit</a>" ;?></td>
		   <td><?php echo "<a class = 'edit' href='del_monchinh.php?uSTT=$data[STT]'>Del</a>" ;?></td>
        </tr>
	   <?php
	   }
	   ?>
       
       
       
        <?php
		//in do uong
	   $sql = "select STT,Name,Price from drink";
       $result = mysql_query($sql);
	   ?>      
        <tr>
            <td colspan="4" height="25"><div align="center">Đồ uống</div><td>
        </tr>
		<?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
    	   
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="center"><?php echo $data["Price"]; ?></div></td>
		   <td><?php echo "<a class = 'edit' href='edit_menu_douong.php?uSTT=$data[STT]'>Edit</a>" ;?></td>
		   <td><?php echo "<a class = 'edit' href='del_douong.php?uSTT=$data[STT]'>Del</a>" ;?></td>
        </tr>
	   <?php
	   }
	   ?>
       
       
        <?php
		//in mon trang mieng
	   $sql = "select STT,Name,Price from desert";
       $result = mysql_query($sql);
	   ?>      
        <tr>
            <td colspan="4" height="25"><div align="center">Desert</div><td>
        </tr>
		<?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
    	   
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="center"><?php echo $data["Price"]; ?></div></td>
		   <td><?php echo "<a class = 'edit' href='edit_menu_desert.php?uSTT=$data[STT]'>Edit</a>" ;?></td>
		   <td><?php echo "<a class = 'edit' href='del_desert.php?uSTT=$data[STT]'>Del</a>" ;?></td>
        </tr>
	   <?php
	   }
	   ?>
       
       
        </table>
        
        <?php
			mysql_close($connection);
			include 'end.html';
	?>
	</body>
</html>

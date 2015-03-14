<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Món chính	</title>
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
        $sql = "select * from khaivi"; // chon du lieu de in mon khai vi
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
			include 'end.html';
	?>
	</body>
</html>

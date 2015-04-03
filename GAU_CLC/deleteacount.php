<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>add acount</title>
		<style>

		</style>
	</head>
	<body>
		<?php
			include 'head_admin.html';
		?>
		<div  style="width: 300px; margin: auto">
		<?php
			
		
			if(isset($_POST['delacc'])) {		// delete acount
				//echo "delacc be set<br>";
				$n = $_POST['delname'];
				$p = $_POST['delpass'];
				$conn = new mysqli("localhost", "root", "", "nhahang") or die ("can't connect database");
				
				$sqlcheck= "select * from user where name='".$n."' and pass='".$p."'";
				$qcheck = $conn->query($sqlcheck);
				if ($qcheck->num_rows==0) {
					echo "Không thể tìm thấy tài khoản ".$n."<br>";
				} else {
					$query = "delete from user where name= '".$n."'";
					if ($conn->query($query)) {
						echo "Xóa tài khoản ".$n." thành công <br>";
					} else {
						echo "Xóa thất bại <br>";
					}	
				}
				$conn->close();
			}
		
		?>
		</div>
		
		<?php
		$connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
        mysql_select_db("nhahang",$connection);
        $sql = "select * from user"; // chon du lieu tu bang user
        $result = mysql_query($sql);
        ?>
        <style type="text/css">
        <!--
        .style2 {
	       font-size: 36px;
	       color: #FF0000;
		   padding-bottom: 20px;
        }
        -->
        </style>
        <br><br><br><br>
        <div align="center"</div>
        <table width="449" border="1" >
            <CAPTION><span class="style2">DANH SÁCH TÀI KHOẢN</span></CAPTION>
            <tr align="center" valign="middle">
                <td width="211"><div align="center">Tên đăng nhập</div></td>
                <td width="165"><div align="center">Mật khẩu</div></td>
				<td width="165"><div align="center">Level</div></td>
            </tr>
            
        <?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
    	   <td width="51" height="25"><div align="center"><?php echo $data["name"]; ?></div></td>
    	   <td width="211"><div align="center"><?php echo $data["pass"]; ?></div></td>
    	   <td width="165"><div align="center"><?php echo $data["level"]; ?></div></td>

        </tr>
	   <?php
	   }
	   ?>
	
	
	
	
		<br>
		
		<form name="formdelacc" action="#" method="post">
			<fieldset class = "frm-set">
				<legend></legend>
				<div class = "account_action"><b>
					<div align = "center"> <h2>Nhập tài khoản bạn muốn xóa</h2> </div> 
					<br>
					<label  for="name">Tên đăng nhập:</label>
					<input width = "100%" type="text" name="delname" maxlength = "25" placeholder="Username" required/>
					<br>
					<label  for="password">Mật khẩu:</label>
					<input width = "100%" type="text" name="delpass" maxlength = "25" placeholder="Password" required />
					<br><br>
					<div align = "center"><input type="submit" name="delacc" value="Xóa" maxlength = "25" class = "button_action"/></div>
				</b></div>
		</form>
		
		<?php
			include 'end.html';
		?>
	</body>
	
</html>
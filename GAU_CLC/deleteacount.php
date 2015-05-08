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
		<div class = "container">
			<div class = "row">
				<div class = "table table-hover table-striped">
					<thead>
						<th width="211"> Tên đăng nhập</th>
						<th width="165">Mật khẩu</th>
						<th width="165">Level</th>
					</thead>
        </div>    
			
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
	
	
	
	
		<br><br>
		<div class = "container">
			<form name="formdelacc" action="#" method="post" class = "navbar-form">
				<div class = "account_action">
					<div align = "center"> <h3>Nhập tài khoản bạn muốn xóa</h3> </div> 
					<br>
					<div class = "form-group">
						<label  for="name"><b>Tên đăng nhập:</b></label>
						<input width = "100%" type="text" name="delname" maxlength = "25" placeholder="Tên đăng nhập" required/>
						<br>
						<label  for="password"><b>Mật khẩu:</b></label>
						<input width = "100%" type="text" name="delpass" maxlength = "25" placeholder="Mật khẩu" required />
						<br><br>
						<div align = "center"><input type="submit" name="delacc" value="Xóa" maxlength = "25" class = "btn"/></div>
					</div>
			</form>
		</div>
		
		<?php
			include 'end.html';
		?>
	</body>
	
</html>
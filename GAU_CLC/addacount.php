<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Thêm tài khoản</title>
		<style>
		</style>
	</head>

<body>
	<?php
		include 'head_admin.html';
	?>
	<div style="width: 300px; margin: auto">
		<?php
			
			if(isset($_POST['addacc'])) {				// add acount
				//echo "addacc be set <br>";
				$n = $_POST['addname'];
				$p = $_POST['addpass'];
				$l = $_POST['addlevel'];
			$conn = new mysqli("localhost", "root", "", "nhahang") or die ("can't connect database");
				
				$sqlcheck= "select * from user where name='".$n."'";
				$qcheck = $conn->query($sqlcheck);
				if ($qcheck->num_rows!=0) {
					echo "Tài khoản ".$n." đã tồn tại!<br>";
				} else {
					$query = "insert into user(name, pass, level) values ('".$n."','".$p."','".$l."')";
					if ($conn->query($query)) {
						echo "Thêm tài khoản:".$n." with pass: ".$p." thành công <br>";
						echo '<meta http-equiv="refresh" content="2; url=edit_user.php">';
					} else {
						echo "không thành công";
					}	
				}
				$conn->close();
			}
			
			
		?>
	</div>
	<br>
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
			<form name="formaddacc" action="#" method="post">
				<div class = "account_action">
					<h2>Nhập thông tin tài khoản</h2> 
					<br>
					<label  for="name"><b>Tên đăng nhập: </b></label>
					<input width = "100%" type="text" name="addname" maxlength = "25" placeholder="Username" required/>
					<br>
					<label  for="password"><b>Mật khẩu: </b> </label>
					<input width = "100%" type="text" name="addpass" maxlength = "25" placeholder="Password" required />
					<br>
					<label  for="level"><b>Level: </b></label>
					<input width = "100%" type="text" name="addlevel" maxlength = "1" placeholder="Level" required />
					<br><br>
					<input type="submit" name="addacc" value="Thêm" class = "btn"/> 
				</div>
			</form>
		</div>

		<br><br><br>
		<div class = "container">
			<div class="text1">DANH SÁCH TÀI KHOẢN </div> <br>
			<div class = "row">
				<table class = "table table-hover table-striped table-order" style = "margin-left: 20%;">
					<thead>
						<tr align="center" valign="middle">
							<th width="211"><div align = "center"> Tên đăng nhập </div></th>
							<th width="165"><div align = "center">Mật khẩu</div></th>
							<th width="165"><div align = "center">Level</div></th>
						</tr>
					</thead>  
					<tbody>
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
					</tbody>
				</table>
			</div>
		</div>
		
	<?php
		include 'end.html';
	?>
</body>
</html>
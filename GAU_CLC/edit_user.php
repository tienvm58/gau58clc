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
					} else {
						echo "không thành công";
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
        <!-- <br><br><br><br> -->
        <div align="center">
			<table width="449" border="1" >
				<CAPTION><span class="style2">DANH SÁCH TÀI KHOẢN<a class="style2" href="addacount.php">(+)</a><a class="style2" href="deleteacount.php">(-)</a></span></CAPTION>
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
			</table>
		</div>
		<?php
			include 'end.html';
		?>
</body>
</html>
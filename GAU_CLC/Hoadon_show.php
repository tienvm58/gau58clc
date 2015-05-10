<?php
			include 'head_admin.html';
			if(isset($_POST["submit"]))
			{
				$connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
				mysql_select_db("nhahang",$connection);
				$user = $_POST["name"];
				session_start();
				$_SESSION['admin']= $user;
				$ses = $_SESSION['admin'];
				$sql = "select * from  hoadon where User='$ses' and Qty!=0"; 		
				$result = mysql_query($sql);
 ?>
<html>
	<body>
        <br><br><br><br>
        <div class="container">
			<div class = "text1"> <b> HÓA ĐƠN CỦA <?php echo $_SESSION['admin']; ?></b> </div>
			<br><br>
            <div class="row" align = "center">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th><div align="center">STT</th>
                            <th><div align="center">Tên món</div></th>
                            <th><div align="center">Đơn Giá</div></th>
							<th><div align="center">Số Lượng</div></th>
							<th><div align="center">Thành tiền</div></th>
						</tr>
                    </thead>
                    <tbody>
					<?php
						$dem = 0;
						$tong =0;
						while($data=mysql_fetch_assoc($result)){
					?>
					<tr>
						<?php 
							$dem++;
							$tong+= $data["Money"];
						?>
						<td width = "80" height="25"><div align="center"><?php echo $dem; ?></div></td>
						<td width = "350"><div align="center"><?php echo $data["Name"]; ?></div></td>
						<td width = "170"><div align="center"><?php echo $data["Price"]; ?></div></td>
						<td width = "170"><div align="center"><?php echo $data["Qty"]; ?></div></td>
						<td width = "170"><div align="center"><?php echo $data["Money"]; ?></div></td>
					</tr>
					<?php
						}
					?>
					<tr>
						<td colspan="4" height="20"><div align="center">Tổng</div></td>
						<td> <div align="center"><?php echo $tong; ?></div></td>
					</tr>
					</tbody>
				</table>
				
				<style type="text/css">
				<!--
				.style2 {
				font-size: px;
				color: #FF0000;
				padding-bottom: 20px;
				}
				-->
				</style>
				<div align="center"</div>
				<CAPTION><span class="style2"><a class="btn" href="deletehoadon.php">Reset Hóa Đơn</a></span></CAPTION>
			</div>
		</div>
			<?php 
				}
				include 'end.html';	
			?>
    </body>
</html>    
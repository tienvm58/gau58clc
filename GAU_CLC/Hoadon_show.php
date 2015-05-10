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
                            <th>STT</th>
                            <th>Tên món</th>
                            <th>Đơn Giá</th>
							<th>Số Lượng</th>
							<th>Thành tiền</th>
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
						<td width = "80" height="25"><?php echo $dem; ?></td>
						<td width = "350"><?php echo $data["Name"]; ?></td>
						<td width = "170"><?php echo $data["Price"]; ?></td>
						<td width = "170"><?php echo $data["Qty"]; ?></td>
						<td width = "170"><?php echo $data["Money"]; ?></td>
					</tr>
					<?php
						}
					?>
					<tr>
						<td colspan="4" height="20"><div align="center">Tổng</div></td>
						<td> <?php echo $tong; ?></td>
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
				<CAPTION><span class="style2"><a class="style2" href="deletehoadon.php">Reset Hóa Đơn</a></span></CAPTION>
			</div>
		</div>
			<?php }?>
    </body>
</html>    
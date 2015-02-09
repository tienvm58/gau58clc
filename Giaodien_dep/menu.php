
	<h2>Đây là trang menu</h2>
<?php

	if(!isset($_GET['maloai'])) $_GET['maloai'] = 'all';//khi bien maloai lay ve khong co gia tri, thi ta gan gia tri mac dinh cho no

	$maloai = $_GET['maloai'];
	if($maloai == 'all'){
		$db2 = "select * from menu limit 0,12";
	}else{
		$db2 = "select * from menu where maloai = $maloai";
	}

		$sql2 = mysqli_query($conn,$db2);

		while($row2 = mysqli_fetch_array($sql2)){

?>
		<div class="box_monan">
			<img src="<?php echo $row2['hinhanh']?>" /><br/>
			<p class="tenmonan"><?php echo $row2['tenmonan']?></p>
			<p class="gia"><?php echo $row2['gia']?></p>
		</div>
		
<?php			

		}

?>
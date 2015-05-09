<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Quản lí thực đơn	</title>
	</head>

<?php
	$localhost ="localhost";
	$name="root";
	$pass="";
	$dbname ="nhahang";
	
	$con = mysql_connect($localhost, $name, $pass);
	mysql_select_db($dbname,$con);
	header("content-type:text/html;charset=utf-8");

	$uSTT=$_GET["uSTT"];
	
	
	
	$sql= "select * from drink where STT='".$uSTT."'";
	$query=mysql_query($sql);
	$data=mysql_fetch_assoc($query);

?>
<body>
		
        <?php
            include 'head_admin.html';
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        ?>
	<div align = center>
		<form method = "post" action = "edit_menu_douong.php?uSTT=<?php echo $uSTT; ?>">
			<table>
							
								<tr>
									<td>Tên Món:</td> 
									<td><input type = "text" name = "ename" value="<?php echo $data["Name"]; ?>"><br><br></td>
								</tr>
								<tr>
									<td>Giá tiền (VNĐ):</td>
									<td><input type = "number"  name = "eprice" value="<?php echo $data["Price"]; ?>"><br><br></td>
								</tr>
								<tr>
									<td></td>
									<td><input type = "submit" name="ok" value = "Chỉnh sửa" class = "button_action"/></td>
								</tr>
							
			</table>
		</form>
	</div>
	<?php
	$localhost ="localhost";
	$name="root";
	$pass="";
	$dbname ="nhahang";
	
	$con = mysql_connect($localhost, $name, $pass);
	mysql_select_db($dbname,$con);
	
	$p=$n="";
	$uSTT=$_GET["uSTT"];
	if(isset($_POST["ok"])){
		if($_POST["ename"] == null){
			echo"Bạn chưa nhập tên món!";
		}else{
			$n=$_POST["ename"];
		}
		if($_POST["eprice"] == null){
			echo" Bạn chưa nhập giá món ăn!";
		}else{
			$p=$_POST["eprice"];
		}
		if($p && $n){
			$sql = "update drink set Name = '$n', Price ='$p' where STT ='$uSTT'";
			$query=mysql_query($sql);
			echo '<meta http-equiv="refresh" content="2; url=managing_menu.php">';
		}
	}
	$sql= "select * from drink where STT='".$uSTT."'";
	$query=mysql_query($sql);
	$data=mysql_fetch_assoc($query);

?>
		<div align = "center">
		<?php
			include 'end.html';
		?>
	</div>
</body>
</html>

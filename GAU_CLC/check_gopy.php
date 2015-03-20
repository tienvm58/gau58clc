
<?php
	$localhost ="localhost";
	$name="root";
	$pass="";
	$dbname ="nhahang";
	
	$con = mysql_connect($localhost, $name, $pass);
	mysql_select_db($dbname,$con);
	header("content-type:text/html;charset=utf-8");
	$u=$g="";
	
	if($_POST["gopy"] == null){
		echo "<br><b>BẠN CHƯA NHẬP Ý KIẾN. XIN MỜI BẠN NHẬP Ý KIẾN CỦA MÌNH...</b><br>";
		
		echo '<meta http-equiv="refresh" content="2; url=gyuser.php">';
	}else{
		$g= $_POST["gopy"];
		
	}
	if($_POST["usname"] == null){
		echo "<br><b>BẠN CHƯA NHẬP SỐ BÀN CỦA MÌNH. XIN MỜI BẠN NHẬP THÔNG TIN ĐỂ TIẾP TỤC...</b><br>";
		echo '<meta http-equiv="refresh" content="2; url=gyuser.php">';
	}else{
		$u= $_POST["usname"];
		echo "CẢM ƠN BẠN ĐÃ ĐÓNG GÓP Ý KIẾN CỦA MÌNH ĐỂ GIÚP ĐỠ NHÀ HÀNG PHÁT TRIỂN HƠN!";
		echo '<meta http-equiv="refresh" content="2; url=gyuser.php">';
	}
	if($u && $g){
		$sql= "insert into gopy(username,gopy) value('$u','$g')";
		mysql_query($sql);
		echo '<meta http-equiv="refresh" content="2; url=gyuser.php">';
		
	}

	
?>
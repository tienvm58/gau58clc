<?php
	$localhost ="localhost";
	$name="root";
	$pass="";
	$dbname ="nhahang";
	
	$con = mysql_connect($localhost, $name, $pass);
	mysql_select_db($dbname,$con);
	header("content-type:text/html;charset=utf-8");
	$t=$u=$g="";
	
	if($_POST["gopy"] == null){
		echo "<br><b>BẠN CHƯA NHẬP Ý KIẾN. XIN MỜI BẠN NHẬP Ý KIẾN CỦA MÌNH...</b><br>";
		
		echo '<meta http-equiv="refresh" content="2; url=gyuser.php">';
	}else{
		$g= $_POST["gopy"];
		
	}
	session_start();
	if(isset($_SESSION['name']))
		$u = $_SESSION['name'];
	else
		$u = "Người lạ";	
	echo "<br><br><br>CẢM ƠN BẠN ĐÃ ĐÓNG GÓP Ý KIẾN CỦA MÌNH ĐỂ GIÚP ĐỠ NHÀ HÀNG PHÁT TRIỂN HƠN!";
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$t = date('d/m/Y H:i:s');
	if($u && $g && $t){
		$sql= "insert into gopy(username,gopy,Time) value('$u','$g','$t')";
		mysql_query($sql);
		echo '<meta http-equiv="refresh" content="2; url=gopy_user.php">';
	}
	
	
?>
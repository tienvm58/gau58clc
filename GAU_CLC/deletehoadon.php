<?php
	$localhost ="localhost";
	$name="root";
	$pass="";
	$dbname ="nhahang";
	session_start();
	$user = $_SESSION['admin'];
	$con = mysql_connect($localhost, $name, $pass);
	mysql_select_db($dbname,$con);
	header("content-type:text/html;charset=utf-8");	
	$sql= "select * from hoadon where User = '$user'";
	$query=mysql_query($sql);
	$data=mysql_fetch_assoc($query);
	$sql ="delete from hoadon where User = '$user'";
	mysql_query($sql);
	header("location: Hoadon_admin.php");

?>
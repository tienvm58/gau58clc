<?php
	$localhost ="localhost";
	$name="root";
	$pass="";
	$dbname ="nhahang";
	
	$con = mysql_connect($localhost, $name, $pass);
	mysql_select_db($dbname,$con);
	header("content-type:text/html;charset=utf-8");

	$uSTT=$_GET["uSTT"];
	
	
	
	$sql= "select * from desert where STT='".$uSTT."'";
	$query=mysql_query($sql);
	$data=mysql_fetch_assoc($query);
	if(isset($uSTT)){
		$sql ="delete from desert where STT='$uSTT'";
		mysql_query($sql);
		header("location: managing_menu.php");
	}

?>
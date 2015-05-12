<?php
	$localhost ="localhost";
	$name="root";
	$pass="";
	$dbname ="nhahang";
	$con = mysql_connect($localhost, $name, $pass);
	mysql_select_db($dbname,$con);
	header("content-type:text/html;charset=utf-8");	
	$sql= "select * from gopy";
	$query=mysql_query($sql);
	$data=mysql_fetch_assoc($query);
	$sql ="delete from gopy";
	mysql_query($sql);
	header("location: gopy_admin.php");

?>
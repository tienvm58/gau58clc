<html>
<?php
			include 'head_admin.html'
?>
<style>
			table{
				font: 12px verdana;
				
			}
			td{
				border: 1px solid red;
				text-align: center;
			}
			.tit{
				color: white;
				background: red;
				font-weight: bold;
				font-size: 20;
			}
			
		</style>
<?php
	$conn=mysql_connect("localhost", "root", "") or die("failed");
	mysql_select_db("nhahang",$conn);
	$sql ="select * from gopy";
	$query=mysql_query($sql);
	header("content-type:text/html;charset=utf-8");
	$data= mysql_fetch_assoc($query);
	echo "<br><br><br>";
	echo"<div align='center'>";
	echo"<table border='1' align='center' weight='1000' height='200'>";
		echo "<tr class='tit'>";
			echo"<td>Username</td>";
			echo"<td>Góp ý</td>";
		echo "</tr>";
	while($data=mysql_fetch_assoc($query)){
		echo "<tr>";
			echo"<td>".$data["username"]."</td>";
			echo"<td>".$data["gopy"]."</td>";
		echo "</tr>";
	}
	echo"</table>";
	echo"</div>";
?>
<?php
			include 'end.html';
?>
</html>
<!DOCTYPE html>
<html>
	<head> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title> Góp ý </title>
	</head>
	<body>
	<?php
		include 'head_admin.html'
	?>

	<?php
		$conn=mysql_connect("localhost", "root", "") or die("failed");
		mysql_select_db("nhahang",$conn);
		$sql ="select * from gopy order by Time desc";
		$query=mysql_query($sql);
		header("content-type:text/html;charset=utf-8");
		//$data= mysql_fetch_assoc($query);
		echo "<br><br><br>";
		echo"<div align='center'>";
		echo"<table border='1' align='center' weight='1000' height='200' >";
		echo "<tr class='tit'>";
			echo"<td>Tên</td>";
			echo"<td>Thời gian</td>";
			echo"<td>Góp ý</td>";
		echo "</tr>";
		while($data=mysql_fetch_assoc($query)){
			echo "<tr>";
				echo"<td>".$data["username"]."</td>";
				echo"<td>".$data["Time"]."</td>";
				echo"<td>".$data["gopy"]."</td>";
			echo "</tr>";
		}
		echo"</table>";
		echo"</div>";
	?>
	<div align = "center">
		<?php
			include 'end.html';
		?>
	</div>
	</body>
</html>
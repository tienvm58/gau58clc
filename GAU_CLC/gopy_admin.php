<!DOCTYPE html>
<html>
	<head> 
		<?php include"logo_tab.php" ?>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title> Góp ý </title>
	</head>
	<body>
		<?php
			session_start();
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
			echo"<div class = 'text1'> NHỮNG GÓP Ý CỦA KHÁCH HÀNG </div><br><br> ";
			echo"<div class = 'container'>";
				echo"<div class = 'row'>";
					echo"<table class='table table-hover table-striped' style = 'margin-left: 20%;' >";
						echo "<thead>";
								echo "<tr>";
								echo"<td>Tên</td>";
								echo"<td>Thời gian</td>";
								echo"<td>Góp ý</td>";
							echo "</tr>";
						echo"</thead>";
						echo"<tbody>";
							while($data=mysql_fetch_assoc($query)){
							echo "<tr>";
								echo"<td>".$data["username"]."</td>";
							echo"<td>".$data["Time"]."</td>";
								echo"<td>".$data["gopy"]."</td>";
							echo "</tr>";
							}
							echo"</tbody>";
					echo"</table>";
				echo"</div>";
			echo"</div>";
		?>
	
		<?php
			include 'end.html';
		?>
	</body>
</html>
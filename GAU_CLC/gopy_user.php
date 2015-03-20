<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
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
	</head>
	<body>
		<?php
			include 'head_user.html'
		?>
	<br><br><br><br>
	<DIV ALIGN="center">
	<table border="1" height="200">
		<TR>
			<td colspan = "3" class ="tit"> PLEASE TYPE ON THE TEXT SPACE BELOW </TD>
		</TR>
		<tr>
			<td>
				<form name="gopyus" action="gopyuser.php" method="post" >
					<P>TYPE YOUR COMMENT HERE </P>
					<input type="text" name="gopy" size = 80 maxlength=1000/> <br /><br />
					<p>confirm your name user</p>
					<input type="text" name="usname" size = 5 maxlength=15/> <br /><br />
					<input type="submit" name="ok" value="SEND"/> <br />
				</form>
			</td>
		</tr>
	</table>
	</div>
	<?php
			include 'end.html';
	?>
	</body>
</html>
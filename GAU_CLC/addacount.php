<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>add acount</title>
		<style>

		</style>
	</head>

<body>
	<?php
		include 'head_admin.html';
	?>
	<div style="width: 300px; margin: auto">
		<?php
			
			if(isset($_POST['addacc'])) {				// add acount
				//echo "addacc be set <br>";
				$n = $_POST['addname'];
				$p = $_POST['addpass'];
				$l = $_POST['addlevel'];
			$conn = new mysqli("localhost", "root", "", "nhahang") or die ("can't connect database");
				
				$sqlcheck= "select * from user where name='".$n."'";
				$qcheck = $conn->query($sqlcheck);
				if ($qcheck->num_rows!=0) {
					echo "user: ".$n." existed<br>";
				} else {
					$query = "insert into user(name, pass, level) values ('".$n."','".$p."','".$l."')";
					if ($conn->query($query)) {
						echo "add user:".$n." with pass: ".$p." successfull <br>";
					} else {
						echo "no user added";
					}	
				}
				$conn->close();
			}
			
			
		?>
	</div>
	<br>
	<?php
		$connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
        mysql_select_db("nhahang",$connection);
        $sql = "select * from user"; // chon du lieu tu bang user
        $result = mysql_query($sql);
        ?>
        <style type="text/css">
        <!--
        .style2 {
	       font-size: 36px;
	       color: #FF0000;
        }
        -->
        </style>
        <br><br><br><br>
        <div align="center"</div>
        <table width="449" border="1" >
            <CAPTION><span class="style2">LIST USER</span></CAPTION>
            <tr align="center" valign="middle">
                <td width="211"><div align="center">Name</div></td>
                <td width="165"><div align="center">Pass</div></td>
				<td width="165"><div align="center">Level</div></td>
            </tr>
            
        <?php
        while($data=mysql_fetch_assoc($result)){
        ?>
        <tr>
    	   <td width="51" height="25"><div align="center"><?php echo $data["name"]; ?></div></td>
    	   <td width="211"><div align="center"><?php echo $data["pass"]; ?></div></td>
    	   <td width="165"><div align="center"><?php echo $data["level"]; ?></div></td>

        </tr>
	   <?php
	   }
	   ?>
		<div style = "margin-left: 12%; margin-right:12%;">
			<div style = "margin-left: 35%; margin-right: 20%;">
		
			<form name="formaddacc" action="#" method="post">
			<div align = "left">
			<div><h2>
				<label  for="name">Add user</label>
				<input width = "100%" type="text" name="addname" placeholder="Username" required/>
				<br>
				<label  for="password">Pass    </label>
				<input width = "100%" type="text" name="addpass" placeholder="Password" required />
				<br>
				<label  for="level">Level</label>
				<input width = "100%" type="text" name="addlevel" placeholder="Level" required />
				<br>
				<input type="submit" name="addacc" value="Add"/>
				</h2>
			</div>
			</div>
			</form>
		</div>
		</div>
	
	<?php
		include 'end.html';
	?>
</body>
</html>

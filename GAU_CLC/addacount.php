<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>add acount</title>
		<style>

		</style>
	</head>

<body>
	
	<div style="width: 300px; margin: auto; background-color: #ff6611">
		<?php
			if(isset($_POST['addacc'])) {				// add acount
				//echo "addacc be set <br>";
				$n = $_POST['addname'];
				$p = $_POST['addpass'];
				$conn = new mysqli("localhost", "root", "", "nhahang") or die ("can't connect database");
				
				$sqlcheck= "select * from user where name='".$n."'";
				$qcheck = $conn->query($sqlcheck);
				if ($qcheck->num_rows!=0) {
					echo "user: ".$n." existed<br>";
				} else {
					$query = "insert into user(name, pass) values ('".$n."','".$p."')";
					if ($conn->query($query)) {
						echo "add user:".$n." pass: ".$p." successfull <br>";
					} else {
						echo "no user added";
					}	
				}
				$conn->close();
			}
			
			if(isset($_POST['delacc'])) {		// delete acount
				//echo "delacc be set<br>";
				$n = $_POST['delname'];
				$p = $_POST['delpass'];
				$conn = new mysqli("localhost", "root", "", "nhahang") or die ("can't connect database");
				
				$sqlcheck= "select * from user where name='".$n."' and pass='".$p."'";
				$qcheck = $conn->query($sqlcheck);
				if ($qcheck->num_rows==0) {
					echo "can't find user: ".$n." and pass: ".$p."<br>";
				} else {
					$query = "delete from user where name= '".$n."'";
					if ($conn->query($query)) {
						echo "delete ".$n." pass: ".$p." successfull <br>";
					} else {
						echo "delete failed <br>";
					}	
				}
				$conn->close();
			}
		?>
	</div>
	<br>
	<h3>
	<div style="width: 300px; margin: auto; background-color: yellow;">
		<?php
			$conn = new mysqli("localhost", "root", "", "nhahang") or die ("can't connect database");
			$query = "select * from user";
			$result = $conn->query($query);
			echo "list acount:<br>";
			while ($row = $result->fetch_assoc()) {
				echo $row['name']." ~ ".$row['pass']."<br>";
			}
			$conn->close();
		?>
	</div>
	</h3>
	<div style="width: 300px; margin: auto; background-color: #aa6611">
		<div>
			<h1 style="color: black">ADD ACOUNT</h1> 
		</div>
		<form name="formaddacc" action="addacount.php" method="post">
			<div><h2>
				<label  for="name">add user</label>
				<input width = "100%" type="text" name="addname" placeholder="Username" required/>
				<br>
				<label  for="password">pass</label>
				<input width = "100%" type="password" name="addpass" placeholder="Password" required />
				<input type="submit" name="addacc" value="add"/>
				</h2>
			</div>
		</form>
	</div>
	<br>
	<div style="width: 300px; margin: auto; background-color: #ff6611">
		<div>
			<h1 style="color: black">DELETE ACOUNT</h1> 
		</div>
		<form name="formdelacc" action="addacount.php" method="post">
			<div><h2>
				<label  for="name">add user</label>
				<input width = "100%" type="text" name="delname" placeholder="Username" required/>
				<br>
				<label  for="password">pass</label>
				<input width = "100%" type="password" name="delpass" placeholder="Password" required />
				<input type="submit" name="delacc" value="delete"/>
				</h2>
			</div>
		</form>
	</div>
</body>
</html>

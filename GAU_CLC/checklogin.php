<html>
<head>
<title> check login </title>
</head>
<body>
<?php
session_start();

if (isset($_SESSION['admin'])) {
	echo "<br> session set your name: ".$_SESSION['name']." ".$_SESSION['admin']."<br>";
	echo '<meta http-equiv="refresh" content="2; url=Code.php">';
}
else {
	if(isset($_POST['submit']))
	{
		$u=$p="";
		if($_POST['name'] == NULL){
			echo "Please enter your username<br/>";
		}
		else {
			$u=$_POST['name'];
			echo "check name ".$u."<br>";
		}
		
		if($_POST['pass'] == NULL) {
			echo "Please enter your password<br/>";
		}
		else {
			$p=$_POST['pass'];
			echo "check pass ".$p."<br>";
		}
		
		if($u && $p) {
			$conn= new mysqli("localhost", "root", "", "nhahang") or die("can't connect this database");
			$sql= "select * from user where name='".$u."' and pass='".$p."'";
			$query= $conn->query($sql);
			$row = $query->fetch_assoc();
			echo "database: ".$row['name']." ".$row['pass']."<br>";
			
			if($query->num_rows == 0) {
				echo "Username or password is not correct, please try again. reloading...";
				echo '<meta http-equiv="refresh" content="2; url=dangnhap.html">';
			}
			else {
				echo "<br><b>match. Go back HOME</b><br>";
				
				$_SESSION['admin'] = "yes";
				$_SESSION['name'] = $u;
				echo '<meta http-equiv="refresh" content="2; url=Code.php">';
			}
		}
	}
}
?>
</body>
</html>
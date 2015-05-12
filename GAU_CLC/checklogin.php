<html>
<head>
	<meta charset="utf-8">
	<title> Welcome to Gấu's restaurant </title>
</head>
<body>
<div>
<div style = "width: 500px;">
<?php
	session_start();

	if(isset($_POST['submit']))
	{
		$u=$p="";
		if($_POST['name'] == NULL){
			echo "Please enter your username<br/>";
		}
		else {
			$u=$_POST['name'];
			//echo "check name ".$u."<br>";
		}
		
		if($_POST['pass'] == NULL) {
			echo "Please enter your password<br/>";
		}
		else {
			$p=$_POST['pass'];
			//echo "check pass ".$p."<br>";
		}
		
		if($u && $p) {
			$conn= new mysqli("localhost", "root", "", "nhahang") or die("can't connect this database");
			$sql= "select * from user where name='".$u."' and pass='".$p."'";
			$query= $conn->query($sql);
			$row = $query->fetch_assoc();
			//echo "database: ".$row['name']." ".$row['pass']."<br>";
			$_SESSION['name'] = $row['name'];
			$_SESSION['level'] = $row['level'];
				
			if($query->num_rows == 0) {
				echo "<h3> Tên đăng nhập hoặc mật khẩu không chính xác. Hãy thử lại!</h3>";
				echo '<meta http-equiv="refresh" content="2; url=dangnhap.php">';
			}
			else if(isset($_SESSION['name']) && $_SESSION['level'] == 2)
			{	
				echo '<meta http-equiv="refresh" content="2; url=Code_user.php">';
			}
			else if(isset($_SESSION['name']) && $_SESSION['level'] == 1)
			{
				
				echo '<meta http-equiv="refresh" content="2; url=Code_admin.php">';
			}
		}
	
	}
?>
</div>
</div>
</body>
</html>
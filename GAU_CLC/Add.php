<!DOCTYPE html>
<html>
	<head>
		<?php include"logo_tab.php" ?>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Thêm món ăn	</title>
	</head>
		
	<body>
		
        <?php
			session_start();
            include 'head_admin.html';
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        ?>
	
    <div align = center>   
        <?php
            $connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
            mysql_select_db("nhahang");
            
        
            $ten_mon = $_POST["name"];
            $type = $_POST["select"];
            $price= $_POST["price"];
            if(isset($_POST["submit"])){
                $no_type = "Bạn chưa chọn loại món ăn";  // type = 0
                $no_info = "Ban chưa nhập đủ thông tin";	// price null and ten_mon null
				$data_yes = "Đã thêm món ăn vào thực đơn";		// type 1 2 3 4
				$data_no = "Chưa thêm được dữ liệu";		// type 1 2 3 4
                if($type == "0"){
					
                    echo $no_type;
                }
                else if($price==NULL and $ten_mon==NULL)
                    echo $no_info;
				else {
		$sql= mysql_query("insert into menu VALUE ('','".$ten_mon."','".$price."','".$type."')");
                
				echo '<meta http-equiv="refresh" content="1; url = menu.php">';
				}         
             }
			mysql_close($connection);
        ?>
		</div>
        <br><br><br><br><br><br><br>
		<div class = "container">
			<form action="Add.php" method="POST">
				<div class = "add_board">
					<div class = "form-group">
						<b> Chọn loại món ăn: </b>
						<br> 
						<INPUT TYPE="radio" NAME="select" VALUE="1" > Khai vị<br>
						<INPUT TYPE="radio" NAME="select" VALUE="2"> Món chính <br>
						<INPUT TYPE="radio" NAME="select" VALUE="3"> Drink<br>
						<INPUT TYPE="radio" NAME="select" VALUE="4"> Desert<br>
						<br>					
						<b>Tên Món:</b> <br> <input type = "text" name = "name" required/><br><br>
						<b>Giá tiền (VNĐ): </b> <br> <input type = "number"  name = "price" required/><br><br>
						<input type = "submit" name="submit" value = "Thêm" class = "btn"/>
					</div>
				</div>
			</form>
		</div>
		
		<?php
			include 'end.html';
		?>

	</body>
</html>

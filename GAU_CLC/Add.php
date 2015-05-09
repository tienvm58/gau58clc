<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Thêm món ăn	</title>
	</head>
		
	<body>
		
        <?php
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
                }         
            }
			mysql_close($connection);
        ?>
		</div>
        <br><br><br><br><br><br><br>
			<form action="Add.php" method="POST">
				<fieldset class = "frm-set">
					<legend></legend>
					<div class = "add_board"
						<b> Chọn loại món ăn: </b>
						<br> 
						<INPUT TYPE="radio" NAME="select" VALUE="1" > Khai vị<br>
						<INPUT TYPE="radio" NAME="select" VALUE="2"> Món chính <br>
						<INPUT TYPE="radio" NAME="select" VALUE="3"> Drink<br>
						<INPUT TYPE="radio" NAME="select" VALUE="4"> Desert<br>
						<br>					
						Tên Món: <input type = "text" name = "name" <br><br>
						<br>
						Giá tiền (VNĐ) : <input type = "number"  name = "price"><br><br>
						<input type = "submit" name="submit" value = "Thêm" class = "button_action"/>
					</div>
				</fieldset>
			</form>
			
	
	<div align = "center">
		<?php
			include 'end.html';
		?>
	</div>
	</body>
</html>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Thêm món ăn	</title>
	</head>
		
	<body>
		
         <?php
            include 'head.html';
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        ?>
	
            
        <?php
            $connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
            mysql_select_db("nhahang");
            
        
            $ten_mon = $_POST["name"];
            $type = $_POST["select"];
            $price= $_POST["price"];
            if(isset($_POST["submit"])){
                
                
                if($type == "0"){
                    echo "Bạn chưa chọn type của món ăn ";
                }
                else if($price==NULL and $ten_mon==NULL)
                    echo "Ban chua nhap du thong tin";
				else{
                if($type == "1"){
                    $sql= mysql_query("insert into khaivi VALUE ('','".$ten_mon."','".$price."')");
                    if($sql)
                        echo "Đã thêm dữ liệu vào menu";
                    else
                        echo "Chưa thêm được dữ liệu";
                }
                if($type == "2"){
                    $sql= mysql_query("insert into monchinh VALUE ('','".$ten_mon."','".$price."')");
                    if($sql)
                        echo "Đã thêm dữ liệu vào menu";
                    else
                        echo "Chưa thêm được dữ liệu";
                }
                if($type == "3"){
                    $sql= mysql_query("insert into drink VALUE ('','".$ten_mon."','".$price."')");
                    if($sql)
                        echo "Đã thêm dữ liệu vào menu";
                    else
                        echo "Chưa thêm được dữ liệu";
                }
                if($type == "4"){
                    $sql= mysql_query("insert into desert VALUE ('','".$ten_mon."','".$price."')");
                    if($sql)
                        echo "Đã thêm dữ liệu vào menu";
                    else
                        echo "Chưa thêm được dữ liệu";
                }
				}         
            }
			mysql_close($connection);
        ?>
		
        <br><br><br><br><br>
		<div align = "center">
		<form action="Add.php" method="POST">
			<div align = "center">
				
                    Chọn loại món ăn: 
                    <br> 
                    <INPUT TYPE="radio" NAME="select" VALUE="1"> Khai vị<br>
                    <INPUT TYPE="radio" NAME="select" VALUE="2"> Món chính <br>
                    <INPUT TYPE="radio" NAME="select" VALUE="3"> Drink<br>
					<INPUT TYPE="radio" NAME="select" VALUE="4"> Desert<br>
					<br>					
                    <br>
 					Tên Món: <input type = "text" name = "name" <br><br>
					<br>
                    Giá tiền (VND) : <input type = "number"  name = "price"><br><br>
					<input type = "submit" name="submit" value = "Thêm"/>
			</div>
		</div>
		</form>
	
	<?php
			include 'end.html';
		?>
	</body>
</html>

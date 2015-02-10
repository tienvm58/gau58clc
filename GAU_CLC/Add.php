<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Thêm món ăn	</title>
	</head>
		
	<body>
		<div class="cover"></div>
    		<div class="khungchinh" >
        		<ul>
						<li><a href="Code.html">Home</a></li>
            			<li><a href="Menu.php">Menu</a></li>
            			<li><a href="#">Đặt hàng</a></li>
						<li><a href="#">Quản lí</a>
						<ul>
							<li><a href="Add.php">Thêm Món</a></li>
							<li><a href="#">Xóa</a></li>
						</ul>
            			<li><a href="#">Liên hệ</a></li>
            			<li><a href="#">Góp ý</a></li>
        		</ul>
    
		 </div>
         <?php
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
		
		<br><br><br><br><br><br><br><br><br><br>
		<div align = "center">
		<table cellspacing = "20" border = "0">
			<tr>
				<div align = "center">
				<table border = "1px" width = "994px" height = "100px" align = "center" cellspacing = "5px">
					<tr>
						<br><br><br>
						<td><div align = "left"> 
							<ul>
								<li> <img src = "Image/footer.png " width = "100px" height = "100px"> </li>
							</ul>
						</div></td>
						<td><div align = "center-leftright">
							<ul>
								<li> Địa chỉ: 144 Xuân Thủy, Cầu Giấy, Hà Nội </li>
								<li> Điện thoại: 0912345678 </li>
								<li> Facebook:<li>
								<li> <a href = "Code.html">Về trang chủ</a></li>
							</ul>
						</div></td>
						</tr>
				</table>
			</tr>
		</table>	
	</body>
</html>

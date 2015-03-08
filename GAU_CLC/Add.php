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
	
    <div align = center>   
        <?php
            $connection = mysql_connect("localhost","root","") or die ("Không thể kết nối đến dữ liệu");
            mysql_select_db("nhahang");
            
        
            $ten_mon = $_POST["name"];
            $type = $_POST["select"];
            $price= $_POST["price"];
            if(isset($_POST["submit"])){
                $no_type = "Bạn chưa chọn type của món ăn";  // type = 0
                $no_info = "Ban chưa nhập đủ thông tin";	// price null and ten_mon null
				$data_yes = "Đã thêm dữ liệu vào menu";		// type 1 2 3 4
				$data_no = "Chưa thêm được dữ liệu";		// type 1 2 3 4
                if($type == "0"){
                    echo $no_type;
                }
                else if($price==NULL and $ten_mon==NULL)
                    echo $no_info;
				else {
                if($type == "1"){
                    $sql= mysql_query("insert into khaivi VALUE ('','".$ten_mon."','".$price."')");
                    if($sql)
                        echo $data_yes;
                    else
                        echo $data_no;
                }
                if($type == "2"){
                    $sql= mysql_query("insert into monchinh VALUE ('','".$ten_mon."','".$price."')");
                    if($sql)
                        echo $data_yes;
                    else
                        echo $data_no;
                }
                if($type == "3"){
                    $sql= mysql_query("insert into drink VALUE ('','".$ten_mon."','".$price."')");
                    if($sql)
                        echo $data_yes;
                    else
                        echo $data_no;
                }
                if($type == "4"){
                    $sql= mysql_query("insert into desert VALUE ('','".$ten_mon."','".$price."')");
                    if($sql)
                        echo $data_yes;
                    else
                        echo $data_no;
                }
				//echo '<meta http-equiv="refresh" content="1; url = menu.php">';
				}         
            }
			mysql_close($connection);
        ?>
		</div>
        <br><br><br><br><br>
		<div style = "margin-left: 12%; margin-right:12%;">
			<div style = "margin-left: 35%; margin-right: 20%;">
				<form action="Add.php" method="POST" align = "center">
					<div align = "left">
						
							<b> Chọn loại món ăn: </b>
							<br> 
							<INPUT TYPE="radio" NAME="select" VALUE="1" > Khai vị<br>
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
				</form>
			</div>
		</div>
	
	<?php
			include 'end.html';
		?>
	</body>
</html>

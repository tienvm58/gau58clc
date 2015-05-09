<!DOCTYPE html>
<html>	
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Liên hệ	</title>
	</head>
	<body>
		<?php
			session_start();
			if(isset($_SESSION['name']) && $_SESSION['level'] == 1){
				include 'head_admin.html';
			}
			else if(isset($_SESSION['name']) && $_SESSION['level'] == 2){
				include 'head_user.html';
			}
			else {
				include 'head.html';
			}
		?>
		<br><br><br><br><br>
		<div class = "contact" style = "margin: 0 auto;">
			Nhà hàng Gấu là tên project môn công nghệ phần mềm của nhóm Gấu - lớp K58CLC - Đại học Công Nghệ - ĐHQGHN. 
			Project được phát triển bằng quy trình Scrum (chính xác thì Scrum không phải là một quy trình hay một kĩ thuật cụ  thể  để xây dựng sản phẩm, 
			nó là một khung làm việc cho phép bạn sử dụng nhiều quy trình và kĩ thuật khác nhau), sử dụng ngôn ngữ html, css, php. <br>Nhóm gồm có các thành viên: 
			<br>- Phan Anh
			<br>- Phạm Văn Chính
			<br>- Nguyễn Viết Cương (product owner)
			<br>- Ngô Thị Phượng
			<br>- Vũ Mạnh Tiến (scrum master)
			<br>
			<br> Mọi chi tiết xin liên hệ: Vũ Mạnh Tiến 
			<br> - SĐT: 01659116869
			<br> - Email: tienvm_58@vnu.edu.vn
		</div>
		
		<div align = "center">
			<?php
				include 'end.html';
			?>
		</div>
	</body>
</html>
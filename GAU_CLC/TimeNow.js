
now = new Date  

if (now.getHours() < 12) 
	document.write("<b>Chào mọi người ngày mới tràn đầy năng lượng!</b>")
else if (now.getHours() == 12)
	document.write("<b>Chúc mọi người ăn trưa vui vẻ!</b>")
else if (now.getHours() < 18)
	document.write("<b>Chào buổi chiều!</b>")
else 
	document.write("<b>Chào buổi tối!</b>")
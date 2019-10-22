<?php
	$username=$_POST['tendangnhap'];
	$pass= md5($_POST['pass']);
	$quyen=$_POST['quyen'];
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset('utf8');
	$sql="INSERT INTO quantri(tendangnhap,pass,quyen)
	 values ('".$username."','".$pass."','".$quyen."')";
	$result=$con->query($sql);
	if($result==1){
	echo "Bạn đã đăng kí thành công!! Vui long <a href='Trangdangnhap.html'> Đăng nhập</a> lại!!!";
	}
	else {
	    echo "Bạn đã đăng kí thất bại !!Tài khoản bạn đã bị trùng, vui lòng nhập lại!!<a href='dkitk.html'>Trở lại</a>";
	}
	$con->close();
?>
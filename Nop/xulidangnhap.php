<?php
	session_start();
	$con= new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
	//lấy thông tin người dùng;
	$username = $_POST['tendangnhap'];
	echo $username;
	$pass = md5($_POST['matkhau']);
	echo $pass;
	$quyen = $_POST['quyentruycap'];
	echo $quyen;
	if($username=="" || $pass=="")
	{
		echo "Tên đăng nhập và password không được để trống!!!";
	}
		$sql="SELECT * FROM quantri where tendangnhap='$username' AND pass='$pass' and quyen='$quyen'";
		$result =$con->query($sql);
		if($result->num_rows == 0)
		{
			echo "Tên đăng nhập hoặc mật khẩu không đúng,Vui lòng nhập lại. <a href='Trangdangnhap.html'>Trở lại</a>";
			exit;
		}
		else{
			echo "Đăng nhập thành công" ;
			$_SESSION['user']=$username;
			if($username===admin)
			{
				header('Location:quanli.php');
			}
			else{
			
			header('Location: banhang.php');}
		}
		
	$con->close();			
?>
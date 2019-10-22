<?php
session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<?php
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset('utf8');
	$user=$_POST['user'];
	//echo "<p>".$user."</p>";
	$pass=md5($_POST['pass']);
	//echo "<p>".$pass."</p>";
	$nghenghiep=$_POST['nghenghiep'];
	//echo "<p>".$nghenghiep."</p>";
	$gioitinh=$_POST['gioitinh'];
	//echo "<p>".$gioitinh."</p>";
	$namsinh=$_POST['namsinh'];
	$phone=$_POST['phone'];
	$hoten=$_POST['hoten'];
	$diachi=$_POST['diachi'];
	$duongdan="./image/" . $_FILES['myfile']['name'];
	move_uploaded_file($_FILES['myfile']['tmp_name'],$duongdan);
	$sql="INSERT INTO nhanvien(user,pass,nghenghiep,gioitinh,namsinh,phone,diachi,hinhanh,hoten)
	 values ('$user', '$pass','$nghenghiep','$gioitinh','$namsinh','$phone','$diachi','$duongdan','$hoten')";
	$result=$con->query($sql);
	$sql="INSERT INTO quantri(tendangnhap,pass,quyen)
	 values ('$user', '$pass','nhân viên')";
	$result=$con->query($sql);
	header ('Location:quanlinhanvien.php');
	$con->close();
	
?>
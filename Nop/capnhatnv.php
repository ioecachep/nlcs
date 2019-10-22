<?php
session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<?php
	$user=$_POST['user'];
	$nghenghiep=$_POST['nghenghiep'];
	//echo "<p>".$nghenghiep."</p>";
	$namsinh=$_POST['namsinh'];
	$phone=$_POST['phone'];
	$hoten=$_POST['hoten'];
	$diachi=$_POST['diachi'];
	$hinhanh="./image/" . $_FILES['myfile']['name'];
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
if($hinhanhsp=="./image/")
{
	$sql = "update nhanvien set nghenghiep='$nghenghiep',namsinh='$namsinh',phone='$phone',diachi='$diachi',hoten='$hoten' where user='$user'";
	$result = $con->query($sql);
	header ('Location:quanlinhanvien.php');
}
else{
	move_uploaded_file($_FILES['myfile']['tmp_name'],$hinhanh);
	$sql = "update nhanvien set nghenghiep='$nghenghiep',namsinh='$namsinh',phone='$phone',diachi='$diachi',hinhanh='$hinhanh',hoten='$hoten' where user='$user'";
	$result = $con->query($sql);
	header ('Location:quanlinhanvien.php');
}
?>
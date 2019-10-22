<?php
session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<?php
	$idkh=$_POST['idkh'];
	$tenkh=$_POST['tenkh'];
	echo"<p>".$tenkh."</p>";
	$soluong=$_POST['soluong'];
	echo"<p>".$soluong."</p>";
	$giamgia=$_POST['giamgia'];
	$phone=$_POST['phone'];
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
if($tenkh == "")
{
	echo "tên khách hàng không được để trống!!! Vui lòng nhập tên sản phẩm <a href='suakh.php?idkh=$idkh'> Back</a>";
	return false;
	
}
	$sql = "update khachhang set tenkh='$tenkh',soluong='$soluong',giamgia='$giamgia',phone='$phone' where idkh='$idkh'";
	$result = $con->query($sql);
	header ('Location:quanlikhachhang.php');
?>
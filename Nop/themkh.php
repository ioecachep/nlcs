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
	//echo "<p>".$mathe."</p>";
	$idkhCMND=$_POST['idkh'];
	//echo "<p>".$idkhCMND."</p>";
	$tenkh=$_POST['tenkh'];
	//echo "<p>".$tenkh."</p>";
	$phone=$_POST['sdt'];
	//echo "<p>".$ngaydki."</p>";
	$soluong=$_POST['soluong'];
	$giamgia=$_POST['chietkhau'];
	$sql="INSERT INTO khachhang(idkh,tenkh,phone,soluong,giamgia)
	 values ('$idkh','$tenkh','$phone','$soluong','$giamgia')";
	$result=$con->query($sql);
	header ('Location:quanlikhachhang.php');
	$con->close();
	
?>
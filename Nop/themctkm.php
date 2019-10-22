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
	$idkm=$_POST['idkm'];
	//echo "<p>".$idkm."</p>";
	$tenct=$_POST['tenct'];
	//echo "<p>".$tenct."</p>";
	$giamgia=$_POST['giamgia'];
	//echo "<p>".$giamgia."</p>";
	$ngaybatdau=$_POST['ngaybatdau'];
	$ngayketthuc=$_POST['ngayketthuc'];
	//echo "<p>".$ngayketthuc."</p>";
	$mota=$_POST['mota'];
	$sql="INSERT INTO ctkhuyenmai(idkm,tenct,giamgia,ngaybatdau,ngayketthuc,mota)
	 values ('$idkm', '$tenct','$giamgia','$ngaybatdau','$ngayketthuc','$mota')";
	$result=$con->query($sql);
	header ('Location:quanlictkhuyenmai.php');
	$con->close();
	
?>
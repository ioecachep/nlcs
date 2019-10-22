<?php
session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<?php
	$idkm=$_POST['idkm'];
	$tenct=$_POST['tenct'];
	echo"<p>".$tenct."</p>";
	$giamgia=$_POST['giamgia'];
	echo"<p>".$giamgia."</p>";
	$ngaybatdau=$_POST['ngaybatdau'];
	echo"<p>".$ngaybatdau."</p>";
	$ngayketthuc=$_POST['ngayketthuc'];
	$mota=$_POST['mota'];
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
if($idkm == "" && $tenct=="")
{
	echo "tên chương trình không được để trống!!! Vui lòng nhập tên sản phẩm <a href='suactkm.php?idkm=$idkm'> Back</a>";
	return false;
	
}
	$sql = "update ctkhuyenmai set idkm='$idkm',tenct='$tenct',giamgia='$giamgia',ngaybatdau='$ngaybatdau',ngayketthuc='$ngayketthuc',mota='$mota' where idkm='$idkm'";
	$result = $con->query($sql);
	header ('Location:quanlictkhuyenmai.php');
?>
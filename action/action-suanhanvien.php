<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý sửa nhân viên</title>
</head>
<body>
    <?php
    $manv=$_GET['manv'];
    $hoten=$_POST['hoten'];
    $gioitinh=$_POST['gioitinh'];
    $ngaysinh=$_POST['ngaysinh'];
    $quequan=$_POST['quequan'];
    $sodienthoai=$_POST['sodienthoai'];
    $ngaybatdau=$_POST['ngaybatdau'];
    $hinhanh="./img/nhanvien/" . $_FILES['hinhanh']['name'];
	move_uploaded_file($_FILES['hinhanh']['tmp_name'],$hinhanh);
    include './../connect.php';
    if ($hinhanh ==  "./img/nhanvien/"){
    $sql = "UPDATE nhanvien SET hoten='$hoten',gioitinh='$gioitinh',ngaysinh='$ngaysinh',quequan='$quequan',sodienthoai='$sodienthoai',ngaythamgia='$ngaythamgia' WHERE manv='$manv'";
    } else {
        $sql = "UPDATE nhanvien SET hoten='$hoten',gioitinh='$gioitinh',ngaysinh='$ngaysinh',quequan='$quequan',sodienthoai='$sodienthoai',ngaythamgia='$ngaybatdau',hinhanh='$hinhanh' WHERE manv='$manv'";
    }
    $result = $con->query($sql);
    move_uploaded_file($_FILES['hinhanh']['tmp_name'],"./../".$hinhanh);
    if ($result == 1){
        header("Location: /quanlynhanvien.php");
        echo "Sửa sản phẩm thành công!";
    } else {
        echo "Sửa sản phẩm thất bại";

    }
    $con->close();
?>
</body>
</html>
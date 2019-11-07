<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý thêm nhân viên</title>
</head>
<body>
    <?php
    $manv=$_POST['manv'];
    $hoten=$_POST['hoten'];
    $gioitinh=$_POST['gioitinh'];
    $ngaysinh=$_POST['ngaysinh'];
    $quequan=$_POST['quequan'];
    $sodienthoai=$_POST['sodienthoai'];
    $ngaybatdau=$_POST['ngaybatdau'];
    $hinhanh="./img/sanpham/" . $_FILES['hinhanh']['name'];
	move_uploaded_file($_FILES['hinhanh']['tmp_name'],"./../".$hinhanh);
    include './../connect.php';
    $sql = "INSERT INTO nhanvien(manv,hoten,gioitinh,ngaysinh,quequan,sodienthoai,ngaythamgia,hinhanh) VALUES ('$manv','$hoten','$gioitinh','$ngaysinh','$quequan','$sodienthoai','$ngaybatdau','$hinhanh')";
	$result = $con->query($sql);
    if ($result == 1){
        echo $sql;
        header("Location: /quanlynhanvien.php");
        echo "Thêm sản phẩm thành công!";
    } else {
        echo $sql;
        echo "Thêm sản phẩm thất bại";

    }
    $con->close();
?>
</body>
</html>
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
    // --> Ghi Log
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    $ngay = date('Y-m-d H:i:s');
    $manv1=$_SESSION['manv'];
    $noidung="Thêm Nhân Viên";
    // -->
    $manv=$_POST['manv'];
    $hoten=$_POST['hoten'];
    $gioitinh=$_POST['gioitinh'];
    $ngaysinh=$_POST['ngaysinh'];
    $quequan=$_POST['quequan'];
    $sodienthoai=$_POST['sodienthoai'];
    $ngaybatdau=$_POST['ngaybatdau'];
    $hinhanh="./img/sanpham/" . $_FILES['hinhanh']['name'];
    $taikhoan=$_POST['taikhoan'];
    $matkhau=md5("123456");
	move_uploaded_file($_FILES['hinhanh']['tmp_name'],"./../".$hinhanh);
    include './../connect.php';
    $sql = "INSERT INTO nhanvien(manv,hoten,gioitinh,ngaysinh,quequan,sodienthoai,ngaythamgia,hinhanh) VALUES ('$manv','$hoten','$gioitinh','$ngaysinh','$quequan','$sodienthoai','$ngaybatdau','$hinhanh')";
	$result = $con->query($sql);
    if ($result == 1){
        echo $sql;
        $sqlLogin = "INSERT INTO taikhoan (tentk,matkhau,quyen,manv) VALUES ('$taikhoan','$matkhau','nv','$manv')";
        $resultLogin =$con->query($sqlLogin);
        $sqlLog = 'INSERT INTO nhatki (ngaynhatki,manv,noidung,lenhsql) VALUES ("'.$ngay.'","'.$manv1.'","'.$noidung.'","'.$sql.'")';
        echo $sqlLog;
        $resultLog =$con->query($sqlLog);
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý sửa khách hàng</title>
</head>
<body>
    <?php
    $makh=$_GET['makh'];
    $hoten=$_POST['tenkh'];
    $gioitinh=$_POST['gioitinh'];
    $diachi=$_POST['diachi'];
    $sodienthoai=$_POST['sodienthoai'];
    $maloaikh=$_POST['maloaikh'];
    include './../connect.php';
    $sql = "UPDATE khachhang SET tenkh='$hoten',gioitinh='$gioitinh',diachi='$diachi',sodienthoai='$sodienthoai',maloaikh='$maloaikh' WHERE makh='$makh'";
	$result = $con->query($sql);
    if ($result == 1){
        echo $sql;
        header("Location: /quanlykhachhang.php");
        echo "Sửa khách hành công!";
    } else {
        echo $sql;
        echo "Sửa khách hành thất bại";

    }
    $con->close();
?>
</body>
</html>
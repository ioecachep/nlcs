<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý thêm khách hàng</title>
</head>
<body>
    <?php
    // --> Ghi Log
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    $ngay = date('Y-m-d H:i:s');
    $manv=$_SESSION['manv'];
    $noidung="Thêm Khách Hàng";
    // -->
    $makh=$_POST['makh'];
    $hoten=$_POST['tenkh'];
    $gioitinh=$_POST['gioitinh'];
    $diachi=$_POST['diachi'];
    $sodienthoai=$_POST['sodienthoai'];
    include './../connect.php';
    $sql = "INSERT INTO khachhang(makh,tenkh,gioitinh,diachi,sodienthoai,maloaikh) 
    VALUES ('$makh','$hoten','$gioitinh','$diachi','$sodienthoai','1')";
	$result = $con->query($sql);
    if ($result == 1){
        echo $sql;
        $sqlLog = 'INSERT INTO nhatki (ngaynhatki,manv,noidung,lenhsql) VALUES ("'.$ngay.'","'.$manv.'","'.$noidung.'","'.$sql.'")';
        echo $sqlLog;
        $result1 =$con->query($sqlLog);
        header("Location: /quanlykhachhang.php");
        echo "Thêm sản phẩm thành công!";
    } else {
        echo $sql;
        echo "Thêm sản phẩm thất bại";

    }
    $con->close();
?>
</body>
</html>
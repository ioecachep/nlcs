<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý thêm sản phẩm</title>
</head>
<body>
    <?php
    // --> Ghi Log
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    $ngay = date('Y-m-d H:i:s');
    $manv=$_SESSION['manv'];
    $noidung="Thêm Sản Phẩm";
    // -->
    $mahang=$_POST['mahang'];
    $tenhang=$_POST['tenhang'];
    $giamua=$_POST['giamua'];
    $giaban=$_POST['giaban'];
    $soluong=$_POST['soluong'];
    $maloai=$_POST['maloai'];
    $hinhanh="./img/sanpham/" . $_FILES['hinhanh']['name'];
	move_uploaded_file($_FILES['hinhanh']['tmp_name'],"./../".$hinhanh);
    include './../connect.php';
    $sql = "INSERT INTO hanghoa(mahang,tenhang,giamua,giaban,soluong,hinhanh,maloai) VALUES ('$mahang','$tenhang','$giamua','$giaban','$soluong','$hinhanh','$maloai')";
	$result = $con->query($sql);
    if ($result == 1){
        $sqlLog = 'INSERT INTO nhatki (ngaynhatki,manv,noidung,lenhsql) VALUES ("'.$ngay.'","'.$manv.'","'.$noidung.'","'.$sql.'")';
        echo $sqlLog;
        $result1 =$con->query($sqlLog);
        header("Location: /quanlykhohang.php");
        echo "Thêm sản phẩm thành công!";
    } else {
        echo "Thêm sản phẩm thất bại";

    }
    $con->close();
?>
</body>
</html>
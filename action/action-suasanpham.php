<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý sửa sản phẩm</title>
</head>
<body>
    <?php
    // --> Ghi Log
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    $ngay = date('Y-m-d H:i:s');
    $manv=$_SESSION['manv'];
    $noidung="Sửa Sản Phẩm";
    // -->
    $mahang=$_GET['mahang'];
    $tenhang=$_POST['tenhang'];
    $giamua=$_POST['giamua'];
    $giaban=$_POST['giaban'];
    $soluong=$_POST['soluong'];
    $maloai=$_POST['maloai'];
    $hinhanh="./img/sanpham/" . $_FILES['hinhanh']['name'];
    include './../connect.php';
    if ($hinhanh ==  "./img/sanpham/"){
    $sql = "UPDATE hanghoa SET tenhang='$tenhang',giamua='$giamua',giaban='$giaban',soluong='$soluong',maloai='$maloai' WHERE mahang='$mahang'";
    } else {
    $sql = "UPDATE hanghoa SET tenhang='$tenhang',giamua='$giamua',giaban='$giaban',soluong='$soluong',hinhanh='$hinhanh',maloai='$maloai' WHERE mahang='$mahang'";

    }

    $result = $con->query($sql);
    move_uploaded_file($_FILES['hinhanh']['tmp_name'],"./../".$hinhanh);
    if ($result == 1){
        $sqlLog = 'INSERT INTO nhatki (ngaynhatki,manv,noidung,lenhsql) VALUES ("'.$ngay.'","'.$manv.'","'.$noidung.'","'.$sql.'")';
        echo $sqlLog;
        $result1 =$con->query($sqlLog);
        header("Location: /quanlykhohang.php");
        echo "Sửa sản phẩm thành công!";
    } else {
        echo "Sửa sản phẩm thất bại";

    }
    $con->close();
?>
</body>
</html>
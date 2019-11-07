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
    $mahang=$_GET['mahang'];
    $tenhang=$_POST['tenhang'];
    $giamua=$_POST['giamua'];
    $giaban=$_POST['giaban'];
    $soluong=$_POST['soluong'];
    $maloai=$_POST['maloai'];
    $hinhanh="./img/sanpham/" . $_FILES['hinhanh']['name'];
    include 'connect.php';
    if ($hinhanh ==  "./img/sanpham/"){
    $sql = "UPDATE hanghoa SET tenhang='$tenhang',giamua='$giamua',giaban='$giaban',soluong='$soluong',maloai='$maloai' WHERE mahang='$mahang'";
    } else {
    $sql = "UPDATE hanghoa SET tenhang='$tenhang',giamua='$giamua',giaban='$giaban',soluong='$soluong',hinhanh='$hinhanh',maloai='$maloai' WHERE mahang='$mahang'";

    }

    $result = $con->query($sql);
    move_uploaded_file($_FILES['hinhanh']['tmp_name'],$hinhanh);
    if ($result == 1){
        header("Location: quanlykhohang.php");
        echo "Sửa sản phẩm thành công!";
    } else {
        echo "Sửa sản phẩm thất bại";

    }
    $con->close();
?>
</body>
</html>
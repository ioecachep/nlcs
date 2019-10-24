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
    $mahang=$_POST['mahang'];
    $tenhang=$_POST['tenhang'];
    $giamua=$_POST['giamua'];
    $giaban=$_POST['giaban'];
    $soluong=$_POST['soluong'];
    $maloai=$_POST['maloai'];
    $hinhanh="./img/sanpham/" . $_FILES['hinhanh']['name'];
	move_uploaded_file($_FILES['hinhanh']['tmp_name'],$hinhanh);
    include 'connect.php';
    $sql = "INSERT INTO hanghoa(mahang,tenhang,giamua,giaban,soluong,hinhanh,maloai) VALUES ('$mahang','$tenhang','$giamua','$giaban','$soluong','$hinhanh','$maloai')";
	$result = $con->query($sql);
    if ($result == 1){
        header("Location: quanlykhohang.php");
        echo "Thêm sản phẩm thành công!";
    } else {
        echo "Thêm sản phẩm thất bại";

    }
    $con->close();
?>
</body>
</html>
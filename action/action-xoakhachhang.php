<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý xóa khách hàng</title>
</head>
<body>
    <?php
        include './../connect.php';
        $makh  = $_GET['makh'];
        $sql = "DELETE FROM khachhang WHERE makh = '$makh';";
        $result = $con->query($sql);
        if ($result == 1){
        header("Location: /quanlykhachhang.php");
            echo "Thêm sản phẩm thành công!";
        } else {
            echo "Thêm sản phẩm thất bại";
        }
        $con->close();
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xu ly xoa san pham</title>
</head>
<body>
    <?php
        include 'connect.php';
        $mahang  = $_GET['mahang'];
        $sql = "DELETE FROM hanghoa WHERE mahang = '$mahang';";
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
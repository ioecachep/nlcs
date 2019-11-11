<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý product trong giỏ hàng</title>
</head>
<body>
    <?php
        include './../connect.php';
        $mahang  = $_GET['mahang'];
        $sql = "DELETE FROM giohang WHERE mahang = '$mahang';";
        $result = $con->query($sql);
        if ($result == 1){
        header("Location: /quanlybanhang.php");
            echo "Thành công!";
        } else {
            echo "Thất bại";
        }
        $con->close();
    ?>
</body>
</html>
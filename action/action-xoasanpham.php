<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý xóa sản phẩm</title>
</head>
<body>
    <?php
        // --> Ghi Log
        session_start();
        date_default_timezone_set("Asia/Bangkok");
        $ngay = date('Y-m-d H:i:s');
        $manv=$_SESSION['manv'];
        $noidung="Xóa Sản Phẩm";
         // -->
        include './../connect.php';
        $mahang  = $_GET['mahang'];
        $sql = "DELETE FROM hanghoa WHERE mahang = '$mahang';";
        $result = $con->query($sql);
        if ($result == 1){
        header("Location: /quanlykhohang.php");
            $sqlLog = 'INSERT INTO nhatki (ngaynhatki,manv,noidung,lenhsql) VALUES ("'.$ngay.'","'.$manv.'","'.$noidung.'","'.$sql.'")';
            echo $sqlLog;
            $result1 =$con->query($sqlLog);
            echo "Thêm sản phẩm thành công!";
        } else {
            echo "Thêm sản phẩm thất bại";
        }
        $con->close();
    ?>
</body>
</html>
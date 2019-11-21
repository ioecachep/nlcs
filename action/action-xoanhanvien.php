<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý xóa nhân viên</title>
</head>
<body>
    <?php
        // --> Ghi Log
        session_start();
        date_default_timezone_set("Asia/Bangkok");
        $ngay = date('Y-m-d H:i:s');
        $manv1=$_SESSION['manv'];
        $noidung="Xóa Nhân Viên";
        // -->
        include './../connect.php';
        $manv  = $_GET['manv'];
        $sql = "DELETE FROM nhanvien WHERE manv = '$manv';";
        $result = $con->query($sql);
        if ($result == 1){
        header("Location: /quanlynhanvien.php");
            $sqlLog = 'INSERT INTO nhatki (ngaynhatki,manv,noidung,lenhsql) VALUES ("'.$ngay.'","'.$manv1.'","'.$noidung.'","'.$sql.'")';
            echo $sqlLog;
            $resultLog =$con->query($sqlLog);
            echo "Thêm sản phẩm thành công!";
        } else {
            echo "Thêm sản phẩm thất bại";
        }
        $con->close();
    ?>
</body>
</html>
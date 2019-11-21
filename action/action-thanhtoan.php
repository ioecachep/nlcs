<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý thanh toán hàng hóa</title>
</head>
<body>
    <?php
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    $noidung="Thanh Toán Đơn Hàng";
    $ngay = date('Y-m-d H:i:s');
    $manv=$_SESSION['manv'];
    $makh=$_POST['makh'];
    $ngayban=date("Y-m-d");
    include './../connect.php';
    $sqlInsert = "INSERT INTO donhang(manv,makh,ngayban,tinhtrang) VALUES ('$manv','$makh','$ngayban','T')";
    $result1 = $con->query($sqlInsert);{
    if ($result1 == 1){
        echo $sqlInsert;
        echo "Thành công!\n";
        $sqlSelect = "SELECT MAX(madh) as madh FROM donhang";
        $resultSelect = $con->query($sqlSelect);
        if ($resultSelect->num_rows > 0){
            while ($row = $resultSelect->fetch_assoc()){
            $madh = $row['madh'];
            $sqlCart = "SELECT a.mahang, a.tenhang, a.giaban, b.soluongmua FROM hanghoa a, giohang b WHERE a.mahang=b.mahang;";
            $resultCart = $con->query($sqlCart);
            if ($resultCart->num_rows > 0){
                while ($rowCart = $resultCart->fetch_assoc()){
                    $mahang = $rowCart['mahang'];
                    $souong = $rowCart['soluongmua'];
                    $sqlADD = "INSERT INTO chitietdonhang (madh,mahang,soluong) VALUES ($madh,'$mahang',$souong);";
                    $resultADD = $con->query($sqlADD);
                    if ($resultADD == 1){
                        $sqlUPDATE = "UPDATE hanghoa SET soluong=soluong-$souong WHERE mahang='$mahang'";
                        echo $sqlUPDATE;
                        $resultUPDATE = $con->query($sqlUPDATE);;
                        echo $sqlADD;
                        echo "Thành Công";
                    } else {
                        echo $sqlADD;
                        echo "Thất bại";
                    }
                }
            }
            }
        }
        $sqlDEL = "DELETE FROM giohang ";
        $resultDEL = $con->query($sqlDEL);
        $sqlLog = 'INSERT INTO nhatki (ngaynhatki,manv,noidung,lenhsql) VALUES ("'.$ngay.'","'.$manv.'","'.$noidung.'","'.$sqlInsert.'")';
        echo $sqlLog;
        $resultLog =$con->query($sqlLog);
        if ($resultDEL == 1){
            echo "Thành công";
            header ("Location: /quanlybanhang.php");
        } else {
            echo "Thất bại";
        }
    } else {
        echo "Thất bại";
    }
}
    $con->close();
?>
</body>
</html>
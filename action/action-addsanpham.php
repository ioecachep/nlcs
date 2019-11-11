<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý thêm vào giỏ hàng</title>
</head>
<body>
    <?php
    $mahang=$_GET['mahang'];
    $soluongmua=$_POST['soluong'];
    include './../connect.php';
    $sqlSelect = "SELECT * FROM giohang WHERE mahang='$mahang'";
    $result1 = $con->query($sqlSelect);
    if ($result1->num_rows > 0){
        $sql = "UPDATE giohang SET soluongmua=soluongmua+'$soluongmua' WHERE mahang='$mahang'";
        $result = $con->query($sql);
        if ($result1 == 1){
            echo $sql;
            header("Location: /quanlybanhang.php");
            echo "Chọn thành công!";
        } else {
            echo $sql;
            echo "Thêm sản phẩm thất bại";
    
        }
    } else {
    $sql = "INSERT INTO giohang(mahang,soluongmua) 
    VALUES ('$mahang','$soluongmua')";
	$result = $con->query($sql);
        if ($result == 1){
            echo $sql;
            header("Location: /quanlybanhang.php");
            echo "Chọn thành công!";
        } else {
            echo $sql;
            echo "Thêm sản phẩm thất bại";

        }
    }
    $con->close();
?>
</body>
</html>
<?php
$ngay=$_GET['ngay'];
$tien=$_GET['tien'];
$con = new mysqli("localhost","root","","thecoffee");
$con->set_charset("utf8");
$sql = "INSERT INTO doanhthu(ngay, tien) VALUES ('$ngay','$tien')";
$result = $con->query($sql);
if ($result == 1){
    header("Location: chitietdoanhthu.php");
    echo "Thêm loại thành công!";
} else {
    $sql = "UPDATE doanhthu SET tien='$tien' WHERE ngay='$ngay'";
    $result = $con->query($sql);
    if ($result == 1){
        header("Location: chitietdoanhthu.php");
        echo "Thêm loại thành công!";
    } else {
        header("Location: chitietdoanhthu.php");
        echo "Thêm thất bại!";
    }
}
?>
<?php
    $maloai=$_POST['maloai'];
    $tenloai=$_POST['tenloai'];
    $kichthuoc=$_POST['kichthuoc'];
    echo $maloai;
    echo $tenloai;
    echo $kichthuoc;
    $con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
    $sql = "INSERT INTO loaisp(id, loai, size) VALUES (' $maloai','$tenloai','$kichthuoc')";
	$result = $con->query($sql);
    if ($result == 1){
        header("Location: loai.php");
        echo "Thêm loại thành công!";
    } else {
        echo "Thêm loại thất bại";

    }
    $con->close();
?>
<?php
    $maloai=$_POST['maloai'];
    $tenloai=$_POST['tenloai'];
    $kichthuoc=$_POST['kichthuoc'];
    echo $maloai;
    echo $tenloai;
    echo $kichthuoc;
    $con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
    $sql = "UPDATE loaisp SET loai='$tenloai',size='$kichthuoc' WHERE id='$maloai'";
	$result = $con->query($sql);
    if ($result == 1){
        header("Location: loai.php");
        echo "Sửa loại thành công!";
    } else {
        echo "Sửa loại thất bại";

    }
    $con->close();
?>
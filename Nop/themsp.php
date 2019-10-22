<?php
    $masp=$_POST['masp'];
    $tensp=$_POST['tensp'];
    $loai=$_POST['loai'];
    $gia=$_POST['giasp'];
    $kichthuoc=$_POST['kichthuoc'];
    echo $masp;
    echo $tensp;
    echo $loai;
    echo $gia;
    echo $kichthuoc;
    $con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
    $sql = "SELECT id FROM loaisp WHERE (loai='$loai' AND size='$kichthuoc')";
	$result = $con->query($sql);;
	if ($result->num_rows > 0){
         while ($row = $result->fetch_assoc()){
            $idloai=$row['id'];
        }
    }
    $sql = "INSERT INTO sanphma(masp, tensp, gia, idloai) VALUES ('$masp','$tensp',$gia,'$idloai')";
	$result = $con->query($sql);
    if ($result == 1){
        header("Location: sanpham.php");
        echo "Thêm sản phẩm thành công!";
    } else {
        echo "Thêm sản phẩm thất bại";

    }
    $con->close();
?>
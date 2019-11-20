<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh Toán</title>
    <style>
        #thanhtoan {
            background: white;
            width: 500px;
        }
        #thanhtoan table,#thanhtoan th,#thanhtoan td{
            border-top:1px solid #ccc;
            border-bottom:1px solid #ccc;
        }
        #thanhtoan table{
            border-collapse:collapse;
        }
        #thanhtoan td,#thanhtoan th {
            padding: 10px;
        }
        #thanhtoan h1 {
            text-align: center;
        }
        #del {
            height: 10px;
            width: 10px;
        }
    </style>
</head>
<body>
<div id="thanhtoan">
<br>
<h1>Thanh Toán</h1>
<br>
<form action="./action/action-thanhtoan.php" method="post">
<table>
<td colspan="2">Chọn khách hàng:</td><td colspan="3">
<select name="makh" id="makh">
<?php
                include 'connect.php';
                $sql = "SELECT makh, tenkh, gioitinh, diachi, sodienthoai, loaikh FROM khachhang, loaikh WHERE khachhang.maloaikh=loaikh.maloaikh;";
                $result = $con->query($sql);
                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        echo "
                            <option value='".$row['makh']."'>".$row['makh']." - ".$row['tenkh']."</option>
                        ";
                    }
                }
            ?>
</select>
</td>
<tr>
    <td>Tên Sản Phẩm</td>
    <td>Giá tiền</td>
    <td>S.lượng</td>
    <td>Thành tiền</td>
    <td>Xóa</td>
</tr>
<?php
include 'connect.php';
$sql = "SELECT a.mahang, a.tenhang, a.giaban, b.soluongmua FROM hanghoa a, giohang b WHERE a.mahang=b.mahang;";
$result = $con->query($sql);
$tongtien = 0;
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "
        <tr>
            <!--<td>".$row['mahang']."</td>-->
            <td>".$row['tenhang']."</td>
            <td>".$row['giaban']."</td>
            <td>".$row['soluongmua']."</td>
            <td>".$row['soluongmua']*$row['giaban']."</td>
            <td><a href='/action/action-delete-product.php?mahang=".$row['mahang']."'><img id='del' src='./img/delete_product.png' alt='x'></a></td>
        </tr>
        ";
        $tongtien = $tongtien + ($row['soluongmua']*$row['giaban']);
    }
}
?>
<tr>
    <td colspan="3">Tổng tiền</td><td colspan="2"><?php echo $tongtien; ?></td>
</tr>
<tr>
    <td colspan="5"><center><input type="submit" value="Thanh toán"></center></td>
</tr>
</table>
</form>
</div>
</body>
</html>
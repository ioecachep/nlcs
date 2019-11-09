<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phân Loại Khách Hàng</title>
    <style>
        table, th, td{
            border-top:1px solid #ccc;
            border-bottom:1px solid #ccc;
        }
        table{
            border-collapse:collapse;
        }
        td, th {
            padding: 10px;
        }
        .img{
            height: 40px;
            width: 40px;
        }
        
    </style>
</head>
<body>
    <div id="reload">
    <table >
        <tr>
            <th>Mã KH</th>
            <th>Tên khách hàng</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Loại khách hàng</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
                $loaikh = $_GET['loaikh'];
                include 'connect.php';
                $sql = "SELECT makh, tenkh, gioitinh, diachi, sodienthoai, loaikh FROM khachhang, loaikh WHERE khachhang.maloaikh=loaikh.maloaikh and loaikh='$loaikh'";
                $result = $con->query($sql);
                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        echo "
                            <tr>
                                <td>".$row['makh']."</td>
                                <td>".$row['tenkh']."</td>
                                <td>".$row['gioitinh']."</td>
                                <td>".$row['diachi']."</td>
                                <td>".$row['sodienthoai']."</td>
                                <td>".$row['loaikh']."</td>
                                <td><a href='#'><img alt='".$row['makh']."' onclick='loadSuaKH(this.alt)' class='img' src='./img/edit.png'></a></td>
                                <td><a href='./action/action-xoakhachhang.php?makh=".$row['makh']."'><img class='img' src='./img/delete.png'></a></td>
                        ";
                    }
                }
            ?>
    </table>
    </div>
    <script language="javascript" src="./quanlynhanvien.js"></script>
</body>
</html>
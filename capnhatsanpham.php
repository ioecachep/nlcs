<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cap Nhat San Pham</title>
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
            <th>Mã Hàng</th>
            <th>Tên Hàng</th>
            <th>Giá Nhập</th>
            <th>Giá Bán</th>
            <th>Số Lượng</th>
            <th>Loại Hàng</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
                include 'connect.php';
                $sql = "SELECT mahang,tenhang,giamua,giaban,soluong,hinhanh,tenloai FROM hanghoa, loai WHERE hanghoa.maloai=loai.maloai;";
                $result = $con->query($sql);
                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        echo "
                            <tr>
                                <td>".$row['mahang']."</td>
                                <td>".$row['tenhang']."</td>
                                <td>".$row['giamua']."</td>
                                <td>".$row['giaban']."</td>
                                <td>".$row['soluong']."</td>
                                <td>".$row['tenloai']."</td>
                                <td><a href='#'><img alt='".$row['mahang']."' onclick='loadSuasanpham(this.alt)' class='img' src='./img/edit.png'></a></td>
                                <td><a href='./action/action-xoasanpham.php?mahang=".$row['mahang']."'><img class='img' src='./img/delete.png'></a></td>
                        ";
                    }
                }
            ?>
    </table>
    </div>
    <script language="javascript" src="./quanlykhohang.js"></script>
</body>
</html>
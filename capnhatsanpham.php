<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cap Nhat San Pham</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Ma hang</th>
            <th>Ten hang</th>
            <th>Gia nhap</th>
            <th>Gia ban</th>
            <th>So luong</th>
            <th>Loai hang</th>
            <th>Sua</th>
            <th>Xoa</th>
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
                                <td>Sua</td>
                                <td><a href='action-xoasanpham.php?mahang=".$row['mahang']."'>DELETE</a></td>
                        ";
                    }
                }
            ?>
    </table>
</body>
</html>
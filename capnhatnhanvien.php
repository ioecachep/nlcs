<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật nhân viên</title>
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
            <th>Mã NV</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Quê quán</th>
            <th>Số điện thoại</th>
            <th>Ngày bắt đầu</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
                include 'connect.php';
                $sql = "SELECT * FROM nhanvien;";
                $result = $con->query($sql);
                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        echo "
                            <tr>
                                <td>".$row['manv']."</td>
                                <td>".$row['hoten']."</td>
                                <td>".$row['gioitinh']."</td>
                                <td>".$row['ngaysinh']."</td>
                                <td>".$row['quequan']."</td>
                                <td>".$row['sodienthoai']."</td>
                                <td>".$row['ngaythamgia']."</td>
                                <td><a href='#'><img alt='".$row['manv']."' onclick='loadSuaNV(this.alt)' class='img' src='./img/edit.png'></a></td>
                                <td><a href='./action/action-xoanhanvien.php?manv=".$row['manv']."'><img class='img' src='./img/delete.png'></a></td>
                        ";
                    }
                }
            ?>
    </table>
    </div>
    <script language="javascript" src="./quanlynhanvien.js"></script>
</body>
</html>
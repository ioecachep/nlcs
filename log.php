<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log file</title>
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
    <table>
        <tr>
            <th width="150px">Thời Gian</th>
            <th>Mã Nhân Viên</th>
            <th width="120px">Người dùng</th>
            <th width="120px">Nội dung</th>
            <th>SQL</th>
        </tr>
        <?php
            include 'connect.php';
            $sql = "SELECT ngaynhatki,hoten,nhatki.manv,noidung,lenhsql FROM nhatki,nhanvien WHERE nhatki.manv = nhanvien.manv";
            $result = $con->query($sql);
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>".$row['ngaynhatki']."</td>
                    <td>".$row['manv']."</td>
                    <td>".$row['hoten']."</td>
                    <td>".$row['noidung']."</td>
                    <td>".$row['lenhsql']."</td>
                </tr>";}
            }
        ?>
    </table>
</body>
</html>
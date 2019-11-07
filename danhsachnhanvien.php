<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Nhân Viên</title>
    <style>
        * {
            text-align: center;
        }
        table {
            width: 100%;
        }
        td h3 {
            text-align: left;
        }
        td {
            text-align: right;
        }
        #hanv{
            height: 200px;
            width: 150px;
        }
        div#ctsp{
            width: 350px;
            height:450px;
            background: white;
            float: left;
            padding: 10px;
            margin: 10px;
            /*border-radius: 10px;*/
        }
        div#ctsp:hover{
            box-shadow: 1px 1px 5px #808080;
            background: white;
        }
    </style>
</head>
<body>
    <div id="NV">
    <?php
            include 'connect.php';
            $sql = "SELECT * FROM nhanvien;";
            $result = $con->query($sql);
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo "
                    <div id='ctsp'>
                    <h3><img id='hanv' src='".$row['hinhanh']."'></h3>
                </tr>
                    <table>
                <tr>
                    <td><h3>Mã nhân viên:</h3></td>
                    <td>".$row['manv']."</td>
                </tr>
                <tr>
                    <td><h3>Tên nhân viên:</h3></td>
                    <td>".$row['hoten']."</td>
                </tr>
                <tr>
                    <td><h3>Giới tính:</h3></td>
                    <td>".$row['gioitinh']."</td>
                </tr>
                <tr>
                    <td><h3>Ngày sinh:</h3></td>
                    <td>".$row['ngaysinh']."</td>
                </tr>
                <tr>
                    <td><h3>Quê quán:</h3></td>
                    <td>".$row['quequan']."</td>
                </tr>
                <tr>
                    <td><h3>Số điện thoại:</h3></td>
                    <td>".$row['sodienthoai']."</td>
                </tr>
                <tr>
                    <td><h3>Ngày tham gia:</h3></td>
                    <td>".$row['ngaythamgia']."</td>
                </tr>
            </table>
        </div>";
                    }
                }
            ?> 
        </div>
    </div>
</body>
</html>
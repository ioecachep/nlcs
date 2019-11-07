<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa Thông Tin Nhân Viên</title>
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
        h1 {
            text-align: center;
        }
        /* #themhanghoa{
            background: white;
            padding: 10px;
            margin: 10px;
            text-align: center;
            border-radius: 10px;
            float: left;
        }
        #themhanghoa td {
            padding: 10px;
            text-align: left;
        }
        #themhanghoa input{
            padding: 5px 10px 5px 10px;
        } */
    </style>
</head>
<body>
    <div id="suahanghoa">
    <?php echo "<form action='./action/action-suanhanvien.php?manv=".$_GET['manv']."' method='post' enctype='multipart/form-data'>"; ?>
    </br>
    <?php
        $manv = $_GET['manv'];
        include 'connect.php';
        $sql = "SELECT * FROM nhanvien WHERE manv = '$manv'";
        $result = $con->query($sql);
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo "
                    <h1>Cập nhật Nhân Viên</h1>
                        </br>
                        <table>
                            <tr>
                                <td>Mã Nhân Viên:</td><td><input disabled type='text' name='manv' value='".$row['manv']."'></td>
                            </tr>
                            <tr>
                                <td>Họ tên:</td><td><input type='text' name='hoten' value='".$row['hoten']."'></td>
                            </tr>";
                            if ($row['gioitinh'] == "Nam"){
                                echo "
                                <tr>
                                <td>Giới tính:</td>
                                <td>
                                    <select name='gioitinh'>
                                        <option selected value='Nam'>Nam</option>
                                        <option value='Nữ'>Nữ</option>
                                    </select>    
                                </td>
                                </tr>
                                ";
                            }
                            else {
                                echo "
                                <tr>
                                <td>Giới tính:</td>
                                <td>
                                    <select name='gioitinh'>
                                        <option value='Nam'>Nam</option>
                                        <option selected value='Nữ'>Nữ</option>
                                    </select>    
                                </td>
                                </tr>
                                ";
                            }
                            echo "
                            <tr>
                                <td>Ngày sinh:</td><td><input type='date' name='ngaysinh' value='".$row['ngaysinh']."'></td>
                            </tr>
                            <tr>
                                <td>Quê Quán:</td><td><input type='text' name='quequan' value='".$row['quequan']."'></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td><td><input type='text' name='sodienthoai' value='".$row['sodienthoai']."'></td>
                            </tr>
                            <tr>
                                <td>Ngày bắt đầu:</td><td><input type='date' name='ngaybatdau' value='".$row['ngaythamgia']."'></td>
                            </tr>
                            <tr>
                            <td>Hình ảnh:</td><td><input type='file' name='hinhanh' value='".$row['hinhanh']."'></td>
                            </tr>
                            <tr>
                            <td></td>
                            <td> 
                                <input type='submit' name='suasp' value='Sửa thông tin nhân viên'>
                                <!--<input type='reset' name='Lam lai' value='Làm lại'>!-->
                            </td>
                        </tr>
                    </table>
                </form>";}
            }
                ?>
    </div>
</body>
</html>
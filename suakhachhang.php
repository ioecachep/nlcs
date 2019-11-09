<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa Thông Tin Khách Hàng</title>
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
    <?php echo "<form action='./action/action-suakhachhang.php?makh=".$_GET['makh']."' method='post' enctype='multipart/form-data'>"; ?>
    </br>
    <?php
        $makh = $_GET['makh'];
        include 'connect.php';
        $sql = "SELECT makh, tenkh, gioitinh, diachi, sodienthoai, khachhang.maloaikh FROM khachhang, loaikh WHERE khachhang.maloaikh=loaikh.maloaikh and khachhang.makh='$makh';";
        $result = $con->query($sql);
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo "
                    <h1>Cập nhật Khách Hàng</h1>
                        </br>
                        <table>
                            <tr>
                                <td>Mã KH:</td><td><input type='text' name='makh' value='".$row['makh']."'></td>
                            </tr>
                            <tr>
                                <td>Họ tên:</td><td><input type='text' name='tenkh' value='".$row['tenkh']."'></td>
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
                                <td>Địa chỉ:</td><td><input type='text' name='diachi' value='".$row['diachi']."'></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td><td><input type='text' name='sodienthoai' value='".$row['sodienthoai']."'></td>
                            </tr>";
                            if ($row['maloaikh'] == "1"){
                                echo "
                                <tr>
                                <td>Loại thẻ khách hàng:</td>
                                <td>
                                    <select name='maloaikh'>
                                        <option selected value='1'>Khách Hàng</option>
                                        <option value='2'>Khách Hàng Thân Thiết</option>
                                        <option value='3'>Khách Hàng Vàng</option>
                                        <option value='4'>Khách Vip</option>
                                    </select>    
                                </td>
                                </tr>
                                ";
                            } else if ($row['maloaikh'] == "2"){
                                echo "
                                <tr>
                                <td>Loại thẻ khách hàng:</td>
                                <td>
                                    <select name='maloaikh'>
                                        <option value='1'>Khách Hàng</option>
                                        <option selected value='2'>Khách Hàng Thân Thiết</option>
                                        <option value='3'>Khách Hàng Vàng</option>
                                        <option value='4'>Khách Vip</option>
                                    </select>    
                                </td>
                                </tr>
                                ";
                            } else if ($row['maloaikh'] == "3"){
                                echo "
                                <tr>
                                <td>Loại thẻ khách hàng:</td>
                                <td>
                                    <select name='maloaikh'>
                                        <option value='1'>Khách Hàng</option>
                                        <option value='2'>Khách Hàng Thân Thiết</option>
                                        <option selected value='3'>Khách Hàng Vàng</option>
                                        <option value='4'>Khách Vip</option>
                                    </select>    
                                </td>
                                </tr>
                                ";
                            } else{
                                echo "
                                <tr>
                                <td>Loại thẻ khách hàng:</td>
                                <td>
                                    <select name='maloaikh'>
                                        <option value='1'>Khách Hàng</option>
                                        <option value='2'>Khách Hàng Thân Thiết</option>
                                        <option value='3'>Khách Hàng Vàng</option>
                                        <option selected value='4'>Khách Vip</option>
                                    </select>    
                                </td>
                                </tr>
                                ";
                            }

                            echo "
                            <tr>
                            <td></td>
                            <td> 
                                <input type='submit' name='suasp' value='Sửa thông tin khách hàng'>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa Hàng Hóa</title>
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
    <?php echo "<form action='./action/action-suasanpham.php?mahang=".$_GET['masp']."' method='post' enctype='multipart/form-data'>"; ?>
    </br>
    <?php
        $masp = $_GET['masp'];
        include 'connect.php';
        $sql = "SELECT * FROM hanghoa WHERE mahang = '$masp'";
        $result = $con->query($sql);
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo "
                    <h1>Cập nhật Sản Phẩm</h1>
                        </br>
                        <table>
                            <tr>
                                <td>Mã hàng:</td><td><input disabled type='text' name='mahang' value='".$row['mahang']."'></td>
                            </tr>
                            <tr>
                                <td>Tên hàng:</td><td><input type='text' name='tenhang' value='".$row['tenhang']."'></td>
                            </tr>
                            <tr>
                                <td>Giá nhập:</td><td><input type='text' name='giamua' value='".$row['giamua']."'></td>
                            </tr>
                            <tr>
                                <td>Giá bán:</td><td><input type='text' name='giaban' value='".$row['giaban']."'></td>
                            </tr>
                            <tr>
                                <td>Số lượng:</td><td><input type='text' name='soluong' value='".$row['soluong']."'></td>
                            </tr>
                            <tr>
                                <td>Hình ảnh:</td><td><input type='file' name='hinhanh' value='".$row['hinhanh']."'></td>
                            </tr>
                            <tr>
                                <td>Loại hàng:</td>
                                <td><select name='maloai'>";
                $sql1= "SELECT * FROM loai";
                $result1 = $con->query($sql1);
                if ($result1->num_rows > 0){
                    while ($row1 = $result1->fetch_assoc()){
                        if ( $row1['maloai'] == $row['maloai']){
                            echo "
                                <option selected value='".$row1['maloai']."'>".$row1['tenloai']."</option>";
                        }
                        else {
                            echo "
                                <option value='".$row1['maloai']."'>".$row1['tenloai']."</option>";
                        }
                    }
                }
                echo "
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> 
                                <input type='submit' name='suasp' value='Sửa sản phẩm'>
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
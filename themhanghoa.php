<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Hàng Hóa</title>
    <style>
        #themhanghoa{
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
        }
    </style>
</head>
<body>
    <div id="themhanghoa">
    <form action="action-themhanghoa.php" method="post" enctype="multipart/form-data">
    <h1>Thêm Sản Phẩm</h1>
    <table>
        <tr>
            <td>Mã hàng:</td><td><input type="text" name="mahang"></td>
        </tr>
        <tr>
            <td>Tên hàng:</td><td><input type="text" name="tenhang"></td>
        </tr>
        <tr>
            <td>Giá nhập:</td><td><input type="text" name="giamua"></td>
        </tr>
        <tr>
            <td>Giá bán:</td><td><input type="text" name="giaban"></td>
        </tr>
        <tr>
            <td>Số lượng:</td><td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Hình ảnh:</td><td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Loại hàng:</td>
            <td><select name="maloai">
                    <?php
                        $con = new mysqli("localhost","root","","nlcs");
                        $con->set_charset("utf8");
                        $sql = "SELECT * FROM loai";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                        echo "
                            <option value='".$row['maloai']."'>".$row['tenloai']."</option>
                            ";
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
			<td> 
				<input type="submit" name="themsp" value="Thêm sản phẩm">
				<input type="reset" name="Lam lai" value="Làm lại">
			</td>
		</tr>
    </table>
    </form>
    </div>
</body>
</html>
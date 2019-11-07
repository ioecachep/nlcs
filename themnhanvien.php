<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Hàng Hóa</title>
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
    <div id="themnhanvien">
    <form action="./action/action-themnhanvien.php" method="post" enctype="multipart/form-data">
    </br>
    <h1>Thêm Nhân Viên</h1>
    </br>
    <table>
        <tr>
            <td>Mã nhân viên:</td><td><input type="text" name="manv"></td>
        </tr>
        <tr>
            <td>Họ tên:</td><td><input type="text" name="hoten"></td>
        </tr>
        <tr>
            <td>Giới tính:</td>
            <td>
                <select name="gioitinh">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>    
            </td>
        </tr>
        <tr>
            <td>Ngày sinh:</td><td><input type="date" name="ngaysinh"></td>
        </tr>
        <tr>
            <td>Quê Quán:</td><td><input type="text" name="quequan"></td>
        </tr>
        <tr>
            <td>Số điện thoại:</td><td><input type="text" name="sodienthoai"></td>
        </tr>
        <tr>
            <?php echo"
            <td>Ngày bắt đầu:</td><td><input type='date' name='ngaybatdau' value='".date("Y-m-d")."'></td>
            "
            ?>
        </tr>
        <tr>
            <td>Hình ảnh:</td><td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td></td>
			<td> 
				<input type="submit" name="themsp" value="Thêm nhân viên">
				<input type="reset" name="Lam lai" value="Nhập lại">
			</td>
		</tr>
    </table>
    </form>
    </div>
</body>
</html>
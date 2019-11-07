<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Khách Hàng</title>
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
    <div id="themhanghoa">
    <form action="./action/action-themkhachhang.php" method="post" enctype="multipart/form-data">
    </br>
    <h1>Thêm Sản Phẩm</h1>
    </br>
    <table>
        <tr>
            <td>Mã KH:</td><td><input type="text" name="makh"></td>
        </tr>
        <tr>
            <td>Họ tên:</td><td><input type="text" name="tenkh"></td>
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
            <td>Địa chỉ:</td><td><input type="text" name="diachi"></td>
        </tr>
        <tr>
            <td>Số điện thoại:</td><td><input type="text" name="sodienthoai"></td>
        </tr>
        <tr>
            <td></td>
			<td> 
				<input type="submit" name="themsp" value="Thêm khách hàng">
				<input type="reset" name="Lam lai" value="Làm lại">
			</td>
		</tr>
    </table>
    </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa Loại</title>
</head>
<body>
<table>
<?php
$idloai=$_GET['idloai'];
$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
    $sql = "SELECT * FROM loaisp WHERE id='$idloai'";
	$result = $con->query($sql);;
	if ($result->num_rows > 0){
         while ($row = $result->fetch_assoc()){
            echo "<form action='xulisualoai.php' method='post' enctype='multipart/form-data'>
					<tr>
						<td> Mã loại </td>
						<td><input readonly type='text' name='maloai' value='".$row['id']."'></td>
					</tr>
					<tr>
						<td> Tên Loại </td>
						<td><input type='text' name='tenloai' value='".$row['loai']."'></td>
					</tr>
					<tr>
						<td> Kích cỡ </td>
                        <td><select name='kichthuoc' id='kichthuoc'>";
                        if ($row['size'] == "Lớn"){
                            echo "<option selected value='Lớn'>Lớn</option>
                            <option value='Vừa'>Vừa</option>
                            <option value='Nhỏ'>Nhỏ</option>";
                        } else if ($row['size'] == "Vừa"){
                            echo "<option value='Lớn'>Lớn</option>
                            <option selected value='Vừa'>Vừa</option>
                            <option value='Nhỏ'>Nhỏ</option>";
                        } else {
                            echo "<option value='Lớn'>Lớn</option>
                            <option value='Vừa'>Vừa</option>
                            <option selected value='Nhỏ'>Nhỏ</option>";
                        }   
						echo "
						</select>
						</td>
					</tr>
					
					<?php
						
					?>
					<tr>
						<td> 
							<input type='submit' name='sualoai' value='Sửa loại'>
							<input type='reset' name='Lam lai' value='Làm lại'>
						</td>
					</tr>
				</form>";
        }
    }
?>
</table>
</body>
</html>
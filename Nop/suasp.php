<?php
session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa Sản Phẩm</title>
</head>
<body>
<table>
<?php
$masp=$_GET['idsp'];
$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
    $sql = "SELECT * FROM sanphma,loaisp WHERE sanphma.idloai= loaisp.id AND masp='$masp'";
	$result = $con->query($sql);;
	if ($result->num_rows > 0){
         while ($row = $result->fetch_assoc()){
            echo "<form action='xulisuasp.php' method='post' enctype='multipart/form-data'>
					<tr>
						<td> Mã sản phẩm </td>
						<td><input readonly type='text' name='masp' value='".$row['masp']."'></td>
					</tr>
					<tr>
						<td> Tên sản phẩm </td>
						<td><input type='text' name='tensp' value='".$row['tensp']."'></td>
					</tr>
					<tr>
						<td> Loại sản phẩm </td>
						<td>
                        <select id='loai' name='loai'>
                        ";
							$sql1 = 'SELECT * FROM loaisp GROUP BY loai';
							$result1 = $con->query($sql1);;
							if ($result1->num_rows > 0){
							while ($row1 = $result1->fetch_assoc()){
                                echo $row1['id'];
                                echo $row['id'];
                                if ($row1['loai'] === $row['loai']){
                                echo "<option selected value='".$row1['loai']."'>".$row1['loai']."</option>
                                
							";} else {
                                echo "<option value='".$row1['loai']."'>".$row1['loai']."</option>
                        ";
                            }
							}
						}echo"</select>
						</td>
					</tr>
					<tr>
						<td> Giá sản phẩm </td>
						<td><input type='text' name='giasp' value='".$row['gia']."'></td>
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
							<input type='submit' name='themsp' value='Sửa sản phẩm'>
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
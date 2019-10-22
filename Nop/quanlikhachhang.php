<?php
session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<style>
    img{
        height:30px;
        width: 30px;
    }
	h3{
		text-alighn:center;
	}
	body {
		background-color:Gainsboro;
	}
</style>
</head>
<body>
<div id="thongtin">
<h1> Thông tin khách hàng </h1>
</table>
<p></p>
<div id="u">
		<form text-alighn="center" action="themkh.php" method="post" enctype="multipart/form-data">
	<table >
		<tr>
			<td> CMND </td>
			<td><input type="text" name="idkh"></td>
		</tr>			
		<tr>
			<td>Họ và tên </td>
			<td><input type="text" name="tenkh"></td>
		</tr>
		<tr>
			<td> Số ĐT </td>
			<td><input type="text" name="sdt"></td>
		</tr>
		<tr>
			<td> Số ly</td>
			<td><input type="text" name="soluong"></td>
		</tr>
		<tr>
			<td> Chiết khấu</td>
			<td><input type="text" name="chietkhau"></td>
		</tr>			
		<tr>
		<table>
		<tr>
			<td>
				<input type="submit" value="Thêm mới">
				<input type="reset" value="Làm mới">
			</td>
			<td>
				<form action="dangxuat.php" method="post" enctype="multipart/form-data">
							<input type="submit" value="Đăng xuất">
				</form>
			</td>
			<td>
				<form action="quanli.php" method="post" enctype="multipart/form-data">
							<input type="submit" value="Trở về trang quản lí">
				</form>
			</td>
		</tr>
		</table>
	</tr>
</table>
</form>
</div>
<div id="bang">
<table border="1px">
	<tr><td colspan=8 style="color:green"><h3>Bảng thành viên</h3></td></tr>
	<tr>
		<th>Số CMND</th>
		<th>Họ tên</th>
        <th> SDT</th>
		<th>Số ly</th>
		<th> Chiết khấu</th>
		<td></td>
    </tr><?php
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
	$sql = "SELECT * FROM khachhang";
	$result = $con->query($sql);
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "
		<tr>
			<td>".$row['idkh']."</td>
			<td>".$row['tenkh']."</td>
			<td>".$row['phone']."</td>
			<td>".$row['soluong']."</td>
			<td>".$row['giamgia']."</td>
			<td><a href='suakh.php?idkh=".$row['idkh']."' target='_blank'><img src='edit.png'></a></td>
		</tr>";
			}
		}
?>
</table>
</div>
</body>
</html>


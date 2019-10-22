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
	 a img{
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
<h1> Thông tin chương trình </h1>
</table>
<p></p>
<div id="u">
	<form text-alighn="center" action="themctkm.php" method="post" enctype="multipart/form-data">
	<table >
		<tr>
			<td rowspan=10><img src="./image/Promotions.jpg"></td>
			<td></td>
			<td> Tên chương trình khuyến mãi</td>
			<td><input type="text" name="tenct"></td>
		</tr>
		<tr>
			<td></td>
			<td> Chiết khấu </td>
			<td><input type="text" name="giamgia"></td>
		</tr>			
		<tr>
			<td></td>
			<td>Ngày bắt đầu </td>
			<td><input type="text" name="ngaybatdau"></td>
		</tr>
		<tr>
			<td></td>
			<td>Ngày kết thúc</td>
			<td><input type="text" name="ngayketthuc"></td>
		</tr>
		<tr>
			<td></td>
			<td> Mã</td>
			<td><input type="text" name="idkm"></td>
		</tr>	
		<tr>
			<td></td>
			<td> Mô tả</td>
			<td><textarea rows="6" cols="20" name="mota"></textarea></td>
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
	<tr>
		<th>Mã</th>
		<th>Tên chương trình</th>
		<th>Chiết khấu</th>
        <th>Ngày bắt đầuth>
        <th> Ngày kết thúc</th>
		<th>Mô tả</th>
		<td></td>
    </tr><?php
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
	$sql = "SELECT * FROM ctkhuyenmai";
	$result = $con->query($sql);
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "
		<tr>
			<td>".$row['idkm']."</td>
			<td>".$row['tenct']."</td>
			<td>".$row['giamgia']."</td>
			<td>".$row['ngaybatdau']."</td>
			<td>".$row['ngayketthuc']."</td>
			<td>".$row['mota']."</td>
			<td><a href='suactkm.php?idkm=".$row['idkm']."' target='_blank'><img src='edit.png'></a></td>
		</tr>";
			}
		}
?>
</table>
</div>
</body>
</html>


<?php
 session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<html>
	<head>
		<style>
			* {
				font-family: consolas;
			}
			.center
				{
					margin:0 auto;
					width:900px;
				}
			td{
				padding: 5px;
			}
		</style>
		<meta charset="utf8">
		<script src="loai.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	<body onload="danhsachLoai()">
	<div class="center">
	<fieldset style="background-color:gainsboro">
			<table>
			<form action="themloai.php" method="post" enctype="multipart/form-data">
					<tr>
						<td> Mã Loại </td>
						<td><input type="text" name="maloai"></td>
					</tr>
					<tr>
						<td> Loại </td>
						<td><input type="text" name="tenloai"></td>
					</tr>
					<tr>
						<td> Kích cỡ </td>
						<td><select name="kichthuoc" id="kichthuoc">
						<option value="Lớn">Lớn</option>
						<option value="Vừa">Vừa</option>
						<option value="Nhỏ">Nhỏ</option>
						</select>
						</td>
					</tr>
					<tr>
						<td> 
							<input type="submit" name="themloai" value="Thêm loại">
							<input type="reset" name="Lam lai" value="Làm lại">
						</td>
					</tr>
				</form>	
			</table>
			<p>Tìm kiếm: <input type="text" name="timsp" id="timsp" onkeyup="timkiemLoai(this.value)"> </p>
				<div id="danhsachloai">
				</div>
	<table>
		<tr>
			<td>
				<form action="dangxuat.php" method="post" enctype="multipart/form-data">
								<input type="submit" value="Đăng xuất">
				</form>
			</td>
			<td>
				<form action="quanli.php" method="post" enctype="multipart/form-data">
								<input type="submit" value="Trở về trang cá nhân ">
				</form>
			</td>
	</tr>
	</table>
	</div>
	</body>
	</html>
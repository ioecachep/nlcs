<?php
/* session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}*/
?>
<html>
	<head>
		<style>
			* {
				font-family: consolas;
				background-image: url("./image/hinhnen3.jpg");
				background-repeat: no repeat;
			}
			.center
				{
					margin:0 auto;
					width:900px;
					background-color:gainsboro;
				}
			td{
				padding: 5px;
			}
		</style>
		<meta charset="utf8">
		<script src="sanpham.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	<body onload="danhsachSP()">
	<div class="center">
	<fieldset style="background-color:gainsboro">
			<table>
			<form action="themsp.php" method="post" enctype="multipart/form-data">
					<tr>
						<td> Mã sản phẩm </td>
						<td><input type="text" name="masp"></td>
					</tr>
					<tr>
						<td> Tên sản phẩm </td>
						<td><input type="text" name="tensp"></td>
					</tr>
					<tr>
						<td> Loại sản phẩm </td>
						<td>
						<select id="loai" name="loai">
							<?php
							$con = new mysqli("localhost","root","","thecoffee");
							$con->set_charset("utf8");
							$sql = "SELECT * FROM loaisp GROUP BY loai";
							$i = 0;
							$result = $con->query($sql);;
							if ($result->num_rows > 0){
							while ($row = $result->fetch_assoc()){
							 echo "<option value='".$row['loai']."'>".$row['loai']."</option>
							";
								$i=$i+1;
							}
						}
						?></select>
						</td>
					</tr>
					<tr>
						<td> Giá sản phẩm </td>
						<td><input type="text" name="giasp"></td>
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
					
					<?php
						
					?>
					<tr>
						<td> 
							<input type="submit" name="themsp" value="Thêm sản phẩm">
							<input type="reset" name="Lam lai" value="Làm lại">
						</td>
					</tr>
				</form>	
			</table>
			<p>Tìm kiếm: <input type="text" name="timsp" id="timsp" onkeyup="timkiemSP(this.value)"> </p>
				<div id="danhsachsp">
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
<?php
session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<html>
<head>
<meta charset="utf8">
	<style>
		#center{
			background-image:url("./image/bgcf.jpg");
			background-repeat: no-repeat;
			color: white;
			}
	</style>
</head>
<body>
<div id="center">
<h1> Bảng quản lí nhân viên</h1>
<table border=1 style="color:white">
<tr style="background-color:gray" >
    <td>Tên tài khoản</td>
    <td>Mật khẩu</td>
	<td>Họ tên</td>
	<td>Giới tính</td>
	<td>Nghề nghiệp</td>
	<td>Năm sinh</td>
	<td>Số phone</td>
	<td>Địa chỉ</td>
	<td>Hình ảnh</td>
</tr>
<?php
$con = new mysqli("localhost","root","","thecoffee");
$con->set_charset("utf8");
$sql = "SELECT * FROM nhanvien";
$result = $con->query($sql);;
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "<tr style='background-color:white ; color:black'>
        <td style='color:white'><a href ='suanv.php?user=".$row['user']."'>".$row['user']."</a></td>
        <td>".$row['pass']."</a></td>
		<td>".$row['hoten']."</td>
		<td>".$row['gioitinh']."</td>
		<td>".$row['nghenghiep']."</td>
		<td>".$row['namsinh']."</td>
		<td>".$row['phone']."</td>
		<td>".$row['diachi']."</td>
		<td>".$row['hinhanh']."</td>
        </tr>";
    }
}
?>
</table>
<p></p>
<div id="u">
	<table style="color: white" text-alighn="center">						
		<form text-alighn="center" action="themnv.php" method="post" enctype="multipart/form-data">
		<tr>
			<td> Tên đăng nhập </td>
			<td><input type="text" name="user"></td>
		</tr>			
		<tr>
			<td colspan=2 id="p1"></td>
		</tr>
		<tr>
			<td> Mật Khẩu </td>
			<td><input type="password" name="pass" id="pass"></td>
		</tr>
		<tr>
			<td colspan=2 id="p2"></td>
		</tr>
		<tr>
			<td> Gõ lại mật khẩu </td>
			<td><input type="password" name="golaimatkhau" id="repass"></td>
		</tr>
		<tr>
			<td colspan=2 id="p3"></td>
		</tr>
		<tr>
			<td> Địa chỉ</td>
			<td><input type="text" name="diachi" id="diachi"</td>
		</tr>
		<tr>
			<td> Hình ảnh sản phẩm </td>
			<td><input type="file" name="myfile" value="ảnh"></td>
		</tr>				
		<tr>
			<td> Họ tên </td>
			<td><input type="text" name="hoten"></td>
		</tr>			
		<tr>
			<td colspan=2 id="p1"></td>
		</tr>
		<tr>
			<td> Giới tính </td>
			<td> <input type ="radio" name="gioitinh" value="nam" id="nam" checked> nam
				<input type ="radio" name="gioitinh" value="nữ" id="nu"> nữ</td>	
		</tr>
		<tr>
			<td> Năm sinh </td>
			<td><input type="text" name="namsinh" id="namsinh"></td>
		</tr>
		<tr>
			<td colspan=2 id="p2"></td>
		</tr>
		<tr>
			<td> Số phone </td>
			<td><input type="text" name="phone"></td>
		</tr>
		<tr>
			<td> Nghề nghiệp </td>
			<td><input type="text" name="nghenghiep"></td>
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
</tr>
</div>
</div>
</body>
</html>
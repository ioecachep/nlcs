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
			width: 100px;
			height: 100px;
		}
	</style>
</head>
<body>
<div class="center">
	<?php
		$con = new mysqli("localhost","root","","thecoffee");
		$con->set_charset("utf8");
		$user=$_GET['user'];
		$sql = "SELECT * from nhanvien where user ='$user'";
		$result = $con->query($sql);
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					echo
						"<table>
									<form action = 'capnhatnv.php' method='post' name='X' enctype='multipart/form-data' >
										<table style='background-color:gainsboro'>	
											<tr>
												<td colspan=2>
												<img src='".$row['hinhanh']."'>
												</td>
											</tr>
											<tr>
												<td> Tên đăng nhập </td>
												<td><input disabled type='text' name='user' value='".$row['user']."'></td>
											</tr>
											<tr>											
												<td> Địa chỉ</td>
												<td><input type='text' name='diachi' value='".$row['diachi']."'</td>
											</tr>
											<tr>
												<td> Hình ảnh sản phẩm </td>
												<td><input type='file' name='myfile' value='".$row['hinhanh']."'></td>
											</tr>				
											<tr>
												<td> Họ tên </td>
												<td><input type='text' name='hoten'  value='".$row['hoten']."'></td>
											</tr>		
											<tr>
												<td> Năm sinh </td>
												<td><input type='text' name='namsinh'  value='".$row['namsinh']."'></td>
											</tr>
											<tr>
												<td> Số phone </td>
												<td><input type='text' name='phone' value='".$row['phone']."'></td>
											</tr>
											<tr>
												<td> Nghề nghiệp</td>
												<td><input type='text' name ='nghenghiep' value='".$row['nghenghiep']."'></td>;
											</tr>
													<tr>
												<td>
													<form action='capnhatnv.php' method='post' enctype='multipart/form-data'>
													<input type='submit' value='Sửa'>
													</form>
												</td>
											</tr>
									</table>";
				}
			}
								?>
							</div>
						</body>
					</html>
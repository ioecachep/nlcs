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
	</style>
</head>
<body>
<div class="center">
	<?php
		$con = new mysqli("localhost","root","","thecoffee");
		$con->set_charset("utf8");
		$idkm=$_GET['idkm'];
		$sql = "SELECT * from ctkhuyenmai where idkm ='$idkm'";
		$result = $con->query($sql);
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					echo
						"<table>
									<form action = 'capnhatctkm.php' method='post' name='X' enctype='multipart/form-data' >
										<table style='background-color:gainsboro'>
										<tr>
												<td> Mã </td>
												<td><input type='text' name='idkm' value='".$row['idkm']."'></td>
										</tr>
											<tr>
												<td> Tên chương trình</td>
												<td><input type='text' name='tenct' value='".$row['tenct']."'></td>
											</tr>										
											<tr>
												<td> Chiết khấu</td>
												<td><input type='text' name='giamgia' value='".$row['giamgia']."'></td>
											</tr>
											<tr>											
												<td> Ngày bắt đầu</td>
												<td><input type='text' name='ngaybatdau' value='".$row['ngaybatdau']."'</td>
											</tr>				
											<tr>
												<td>Ngày kết thúc </td>
												<td><input type='text' name='ngayketthuc'  value='".$row['ngayketthuc']."'></td>
											</tr>		
											<tr>
												<td> Mô tả </td>
												<td><input type='text' name='mota' value='".$row['mota']."'></td>
											</tr>
											<tr>
											<table>
												<tr>
													<td>
													<form action='capnhatctkm.php' method='post' enctype='multipart/form-data'>
													<input type='submit' value='Sửa'>
													</form>
													</td>
													<td>
													<form action='quanlictkhuyenmai.php' method='post' enctype='multipart/form-data'>
													<input type='submit' value='Trở về'>
													</form>
													</td>
												</tr>
											</table>
										</tr>
									</table>";
									}
								}
								?>
							</div>
						</body>
					</html>
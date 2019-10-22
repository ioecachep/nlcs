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
		$idkh=$_GET['idkh'];
		$sql = "SELECT * from khachhang where idkh ='$idkh'";
		$result = $con->query($sql);
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					echo
						"<table>
									<form action = 'capnhatkh.php' method='post' name='X' enctype='multipart/form-data' >
										<table style='background-color:gainsboro'>
										<tr>
												<td> idkh </td>
												<td><input type='text' name='idkh' value='".$row['idkh']."'></td>
										</tr>										
											<tr>
												<td> Tên khách hàng </td>
												<td><input type='text' name='tenkh' value='".$row['tenkh']."'></td>
											</tr>
											<tr>											
												<td> Số lượng</td>
												<td><input type='text' name='soluong' value='".$row['soluong']."'</td>
											</tr>				
											<tr>
												<td>Giảm giá </td>
												<td><input type='text' name='giamgia'  value='".$row['giamgia']."'></td>
											</tr>		
											
											<tr>
												<td> SDT </td>
												<td><input type='text' name='phone' value='".$row['phone']."'></td>
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
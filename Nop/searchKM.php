<?php
session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<head>
    <style>
    img{
        height:30px;
        width: 30px;
    }
	td{
		color:red;
	}
	</style>
</head>
<div id="bang">
<table>
<tr><th colspan=8 style="color:green"><h3>Thông tin khách hàng</h3></th></tr>
<?php
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
	$mathe=$_GET['q'];
	//echo "<p>".$mathe."</p>";
	$sql = "SELECT * FROM khachhang where mathe='$mathe'";
	$result = $con->query($sql);
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "
		<tr>
			<th>Mã thẻ</th>
			<td>".$row['mathe']."</td>
		</tr>
		<tr>
			<th>Họ và tên</th>
			<td>".$row['tenkh']."</td>
		</tr>
		<tr>
			<th>Ngày đăng kí</th>
			<td>".$row['ngaydki']."</td>
		</tr>
		<tr>
			 <th> Số ly đã mua</th>
			<td>".$row['soluong']."</td>
		</tr>
		<tr>
			<th> Chiết khấu</th>
			<td>".$row['giamgia']."</td>
		</tr>";
			}
		}
?>
</table>
</div>

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
			body {
				margin:0 auto;
				width:900px;
				background-image: url("./image/bgRevenue.jpg");}
   
		</style>
		<meta charset="utf8">
		<script src="doanhthu.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	<body>
	<div class="center">
	<fieldset style="background-color:gainsboro">
	<table >
     <h1>Doanh Thu</h1>
    </select> Chọn ngày: <input type="date" name="ngay" id="ngay"> <input onclick="danhsachDoanhThu()" type="button" value="Đồng ý">
    <div id="dsdh">
    DATA
    </div>
	</fieldset>
	<div id="bang">
	<table border="1px" style="background-color:gainsboro">
	<tr>
		<th>mã doanh thu </th>
		<th>Ngày</th>
		<th>Tiền</th>
    </tr><?php
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
	$sql = "SELECT * FROM doanhthu";
	$result = $con->query($sql);
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "
		<tr>
			<td>".$row['madt']."</td>
			<td>".$row['ngay']."</td>
			<td>".$row['tien']."</td>
		</tr>";
			}
		}
?>
</tr>
</div>
</table>
	</body>
	</html>
<?php
 session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<?php
	$con = new mysqli("localhost","root","","thecoffee");
	$sql="SELECT MAX(iddm) as iddm FROM datmon";
	$result = $con->query($sql);
	if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
		$mahoadon = $row['iddm'];
		}
	}
	$nhanvien=$_SESSION['user'];
	$con->set_charset("utf8");
	$tensp=$_GET['q'];
	$size=$_GET['kt'];
	echo "
	<head>
    <style>
    img{
        height:30px;
        width: 30px;
    }
	</style>
	<script src='banhangtimsp.js'>
	</script>
	</head>
	<body>
	<p id='tensp' style='display: none'>".$tensp."</p>
	<p id='size' style='display: none'>".$size."</p>
	<p id='nhanvien' style='display: none'>".$nhanvien."</p>
	<div id='bang'>
	<table border=1 style='float: left'>
	<tr><th colspan=2 style='color:green'><h3>Thông tin</h3></th></tr>";
	//echo "<p>".$mathe."</p>";
	$sql = "SELECT * FROM sanphma,loaisp where (sanphma.idloai=loaisp.id and sanphma.tensp='$tensp' and loaisp.size='$size')";
	$result = $con->query($sql);
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "
		<tr>
			<th>Mã sản phẩm</th>
			<td width=190px id='masp'>".$row['masp']."</td>
			</tr>
			<tr>
			<th>Tên sản phẩm</th>
			<td>".$row['tensp']."</td>
			</tr>
			<tr>
			<th>Kích thước</th>
			<td>".$row['size']."</td>
			</tr>
			<tr>
			<th>Đơn giá</th>
			<td id='dongia'>".$row['gia']."</td>
			</tr>
			<tr>
			<th>Số lượng</th>
			<td><input type='text' id='soluong' name='soluong' onchange='tinhtien()'></td>
			</tr>
			<tr>
			<th>Thành tiền</th>
			<td><p id='thanhtien'></p></td>
			</tr>
			<tr>
			<th colspan=2><input onclick='themvaohoadon()' type='button' value='Thêm vào hóa đơn'></th>
			</tr>";
			}
			
		}
		else {
		echo"
<tr>
<th>Mã sản phẩm</th><td width=190px></td></tr>
<th>Tên sản phẩm</th><td></td></tr>
<th>Kích thước</th><td></td></tr>
<th>Đơn giá</th><td></td></tr>
<th>Số lượng</th><td></td></tr>
<th>Thành tiền</th><td></td></tr>
<th colspan=2><input type='button' value='Thêm vào hóa đơn'></th></tr>";
		}
?>
</table>
<div id="hoadon">
</div>
</div>
</body>
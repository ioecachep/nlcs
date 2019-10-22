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
	<script src="banhangtimsp.js">
	</script>
</head>
<div id="bang">
<table border=1>
<tr><th colspan=7 style="color:green"><h3>Order</h3></th></tr>
<tr>
	<th>Mã sản phẩm</th>
	<th>Tên sản phẩm</th>
	<th>Kích thước</th>
	<th>Đơn giá</th>
	<th>Số lượng</th>
	<th>Thành tiền</th>
	<th>x</th>
	</tr>
<?php
	$con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
	$tensp=$_GET['q'];
	$size=$_GET['kt'];
	$sql="SELECT MAX(iddm) as iddm FROM datmon";
    $result = $con->query($sql);
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
			$max = $row['iddm'];}
		}
	$sql = "SELECT ctdh,masp, tensp, size, gia, soluong, gia*soluong as thanhtien
	FROM sanphma,loaisp,chitietdathang
	WHERE (sanphma.idloai=loaisp.id and chitietdathang.idsp=sanphma.masp and iddm='$max')";
	$tongcong=0;
	$result = $con->query($sql);
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "
		<tr>
			<p id='ctdh' style='display: none'>".$row['ctdh']."</p>
			<td>".$row['masp']."</td>
			<td>".$row['tensp']."</td>
			<td>".$row['size']."</td>
			<td>".$row['gia']."</td>
			<td>".$row['soluong']."</td>
			<td>".$row['thanhtien']."</td>
			<td><a onclick='xoa()' href='#'>x</a></td>
		</tr>";
			$tongcong=$tongcong+$row['thanhtien'];
			}
		}
		echo "<tr><th colspan=5 style='color:green'>Tổng cộng</th><td colspan=2>".$tongcong."</td></tr>"
?>
<tr><th colspan=7 style="color:green"><a href="thanhtoan.php">Thanh Toán</a></th></tr>
</table>
</div>

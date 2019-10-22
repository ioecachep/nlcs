<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv = "Content-Type" content = "text / html; charset = utf-8" />
<style>
	*{
		font-family: Consolas;
	}
    img{
        height:15px;
        width: 20px;
    }
	h3{
		text-alighn:center;
	}
	body {
		background-color:Gainsboro;
	}
	#abc{
		padding: 5px;
		width:200 px;
		background: darkgray;
		display: inline-block;
		border-radius: 5px;
		border: 1px solid gray;
	}
	#abc:hover{
		background: gray;
		border: 1px solid darkgray;
	}
</style>
<script charset="utf-8" src="khuyenmai.js"></script>
<script charset="utf-8" src="banhangtimsp.js"></script>
</head>
<body>
<div id="thongtin">
</table>
<p></p>
<div id="u">
	<form text-alighn="left" action="themkh.php" method="post" enctype="multipart/form-data">
	<table >
		<tr>
			<th>Chương trình khuyến mãi</th>
			<td>
						<select id="ctkm" name="ctkm">
							<?php
							$con = new mysqli("localhost","root","","thecoffee");
							$con->set_charset("utf8");
							$sql = "SELECT tenct FROM ctkhuyenmai";
							$i = 0;
							$result = $con->query($sql);;
							if ($result->num_rows > 0){
							while ($row = $result->fetch_assoc()){
							 echo "<option value='".$row['tenct']."'>".$row['tenct']."</option>
							";
								$i=$i+1;
							}
						}
						?></select>
						</td>
		</tr>	
		<tr>
			<th style="text-align: left">Nhập mã thẻ</th>
			<th><input type="text" name="timsp" id="timsp"><a onclick="check()" href='#'> <img alt='Tìm Kiếm	' src='./image/managersearch.png'></a></th>
		</tr>
	</table>
</form>
</div>
<div id="danhsachsp">
</div>
<div id="2">
<table>
	<form text-alighn="left" action="themkh.php" method="post" enctype="multipart/form-data">
		<tr>
			<th> Tên nhân viên </th>
			<td><?php
				$user=$_SESSION['user'];
				$sql="SELECT hoten FROM nhanvien WHERE user='$user'";
				$result = $con->query($sql);;
							if ($result->num_rows > 0){
							while ($row = $result->fetch_assoc()){
							 echo "<p>".$row['hoten']."</p>
							";}
				}
			?></td>
		</tr>
		<tr>
			<th>Khách Hàng</th>
			<td>
			<div name="chonkhachhang" id="chonkhachhang">
			<select id="tenkh" name="tenkh">
						<option value="khachvanglai"></option>
				<?php
						$con = new mysqli("localhost","root","","thecoffee");
						$con->set_charset("utf8");
						$sql = "SELECT * FROM khachhang ";
						$result = $con->query($sql);;
						if ($result->num_rows > 0){
							while ($row = $result->fetch_assoc()){
								if ($row['idkh'] != "122261555"){
							 echo "<option value='".$row['idkh']."'>".$row['tenkh']." (".$row['idkh'].")</option>
							";}
							}
						}
						?>	
			</select></div>
			</td>
		</tr>
		<tr><th>Tạo hóa đơn</th><td><input onclick="themhoadon()" type="button" id="themhd" value="Tạo"></td></tr>
		</table>
		<div id="thongtinhoadon" style="visibility : hidden">
		<table>
		<tr>
			<td>THÔNG TIN HÓA ĐƠN</td>
			<td id="mahoadon"></td>
		</tr>
		<tr>
			<th>Tên sản phẩm</th>
			<td>
				<select id="tensp" name="tensp" onchange="checkbh()">
					<?php
					$con = new mysqli("localhost","root","","thecoffee");
					$con->set_charset("utf8");
					$sql = "SELECT tensp FROM sanphma GROUP BY tensp ";
							$result = $con->query($sql);;
							if ($result->num_rows > 0){
							while ($row = $result->fetch_assoc()){
							 echo "<option value='".$row['tensp']."'>".$row['tensp']."</option>
							";
							}
						}
						?></select>
						<select id="kichthuoc" name="kichthuoc" onchange="checkbh()">
							<option value="Lớn">Lớn</option>
							<option value="Vừa">Vừa</option>
							<option value="Nhỏ">Nhỏ</option>
						</select>
						</td>
		</tr>	
	</form>
</table>
<div id="hienthi">
<table border=1>
<tr>
<td colspan=2><h3>Thông tin</h3></td></tr>
<tr>
<th>Mã sản phẩm</th><td width=190px></td></tr>
<th>Tên sản phẩm</th><td></td></tr>
<th>Kích thước</th><td></td></tr>
<th>Đơn giá</th><td></td></tr>
<th>Số lượng</th><td></td></tr>
<th>Thàn tiền</th><td></td></tr>
<th colspan=2><input type='button' value='Thêm vào hóa đơn'></th></tr>
</table>
</div>
</div>
</div>
</body>
</html>


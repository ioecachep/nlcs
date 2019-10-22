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
			}
			.center
				{
					margin:0 auto;
					width:900px;
				}
			td{
				padding: 5px;
			}
		</style>
		<meta charset="utf8">
		<script src="doanhthu.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	<body">
	<div class="center">
	<fieldset style="background-color:gainsboro">
        <h1>Doanh Thu</h1>
        Chọn ngày: <input type="date" name="ngay" id="ngay"> <input onclick="danhsachDoanhThu()" type="button" value="Đồng ý">
    <div id="dsdh">
    DATA
    </div>
    </fieldset>
	</div>
	</body>
	</html>
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
    }</style>
    <script src="sanpham.js"></script>
</head>
<table border="1px">
	<tr>
		<th>Mã Loại</th>
		<th>Loại Sản Phẩm</th>
		<th>Kích Thước</th>
        <td></td>
    </tr><?php
$con = new mysqli("localhost","root","","thecoffee");
$con->set_charset("utf8");
$sql = "SELECT * FROM loaisp ORDER BY id";
$result = $con->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "
    <tr>
        <td>".$row['id']."</td>
        <td>".$row['loai']."</td>
        <td>".$row['size']."</td>
        <td><a href='sualoai.php?idloai=".$row['id']."' target='_blank'><img src='edit.png'></a></td>
    </tr>";
        }
    }
?>

</table>
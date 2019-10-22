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
</head>
<table border="1px">
	<tr>
		<th>Mã Sản Phẩm</th>
		<th>Tên Sản Phẩm</th>
		<th>Giá</th>
        <th>Loại</th>
        <td></td>
    </tr><?php
$value = $_GET['value'];
$con = new mysqli("localhost","root","","thecoffee");
$con->set_charset("utf8");
$sql = "SELECT * FROM sanphma, loaisp WHERE (sanphma.idloai=loaisp.id AND tensp LIKE '%$value%') ORDER BY masp";
$result = $con->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "
    <tr>
        <td>".$row['masp']."</td>
        <td>".$row['tensp']."</td>
        <td>".$row['gia']."</td>
        <td>".$row['loai']."</td>
        <td><a href='suasp.php?idsp=".$row['masp']."' target='_blank'><img src='edit.png'></a></td>
    </tr>";
        }
    }
?>
</table>
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
		<th>Mã Đơn Hàng</th>
		<th>Tên Sản Phẩm</th>
        <th>Mã Sản Phẩm</th>
        <th>Khuyến mãi</th>
        <th>Giảm Giá</th>
        <th>Mã Khách Hàng</th>
        <th>Chiết Khẩu</th>
        <th>ID Nhân Viên</th>
        <th>Số Lượng</th>
        <th>Đơn giá</th>
        <th>Ngày bán hàng</th>
        <th>Thành Tiền</th>
    </tr><?php
$ngay="2019-01-01";
$ngay=$_GET['ngay'];
$con = new mysqli("localhost","root","","thecoffee");
$con->set_charset("utf8");
$sql = "SELECT chitietdathang.iddm AS IDHOADON, tensp AS TenSanPham,masp AS MASP,chitietdathang.soluong AS SOLUONG,tenct AS KHUYENMAI,ctkhuyenmai.giamgia AS GIAMGIA,idkh,
khachhang.giamgia AS CHIETKHAU,nhanvien.user AS USER,gia AS GIA,chitietdathang.soluong*gia*0.8 AS THANHTIEN, ngay as NGAYBANHANG
FROM datmon, chitietdathang,khachhang,nhanvien,ctkhuyenmai,sanphma
WHERE (datmon.iddm=chitietdathang.iddm 
AND datmon.tendat=tenkh 
AND chitietdathang.user=nhanvien.user 
AND ctkhuyenmai.idkm=chitietdathang.idkm 
AND sanphma.masp=chitietdathang.idsp)
AND ngay='$ngay'";
$result = $con->query($sql);
$tongtien =0;
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "
    <tr>
        <td>".$row['IDHOADON']."</td>
        <td>".$row['TenSanPham']."</td>
        <td>".$row['MASP']."</td>
        <td>".$row['KHUYENMAI']."</td>
        <td>".$row['GIAMGIA']."</td>
        <td>".$row['idkh']."</td>
        <td>".$row['CHIETKHAU']."</td>
        <td>".$row['USER']."</td>
        <td>".$row['SOLUONG']."</td>
        <td>".$row['GIA']."</td>
        <td>".$row['NGAYBANHANG']."</td>
        <td>".$row['THANHTIEN']."</td>
    </tr>";
    $tongtien=$tongtien+$row['THANHTIEN'];
        }
    }
    echo "<tr><td colspan=11>Tổng doanh thu ngày ".$ngay."</td><td>".$tongtien."</td></tr>
    <tr><td colspan=12><a href='luudoanhthu.php?ngay=".$ngay."&tien=".$tongtien."'>Lưu</a></td></tr>"
?>

</table>
<?php
 session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh Toán</title>
    <style>
        * {
            font-family: Consolas;
            margin:0 auto;
            padding: 0;
        }
    </style>
    <script>
    function export2Word( element ) {
    var html, link, blob, url, css;
    css = (
    '<style>' +
    '@page WordSection1{size: 841.95pt 595.35pt;mso-page-orientation: landscape;}' +
    'div.WordSection1 {page: WordSection1;}' +
    '</style>'
    );
    html = element.innerHTML;
    blob = new Blob(['\ufeff', css + html], {
    type: 'application/msword'
    });
    url = URL.createObjectURL(blob);
    link = document.createElement('A');
    link.href = url;
    link.download = 'Document';  // default name without extension 
    document.body.appendChild(link);
    if (navigator.msSaveOrOpenBlob ) navigator.msSaveOrOpenBlob( blob, 'Document.doc'); // IE10-11
        else link.click();  // other browsers
    document.body.removeChild(link);
    };
</script>
</head>
<body>
    <div id="docx">
    <?php
    $con = new mysqli("localhost","root","","thecoffee");
	$con->set_charset("utf8");
	$sql="SELECT datmon.iddm,tendat,hoten FROM datmon, chitietdathang, khachhang,nhanvien 
    WHERE datmon.iddm=chitietdathang.iddm AND khachhang.tenkh=datmon.tendat AND nhanvien.user= chitietdathang.user 
    and datmon.iddm=(SELECT MAX(iddm) FROM datmon)";
    $result = $con->query($sql);
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            $max = $row['iddm'];
            $tenkh=$row['tendat'];
            $tennv=$row['hoten'];
        }
    }
    echo "<table>
    <tr  style='text-align: center'>
        <td colspan=3>
        <h3>Đơn hàng<br>****<h3>
        </td>
    </tr>
    <tr>
    <td>Mã HĐ: ".$max."</td>
    <td colspan=2>Nhân Viên: ".$tennv."</td>
    </tr>
    <tr>
    <td colspan=3>Khách Hàng: ".$tenkh."</td>
    </tr>
    <tr style='text-align: center'>
    <td colspan=3>
        <h5>****</h5>
        </td>
    </tr>
    <tr>
    <td>Tên sản phẩm</td><td>Đ.giá*S.Lượng</td><td>Thành tiền</td></tr>
    ";
    $sql = "SELECT ctdh,masp, tensp, size, gia, soluong, gia*soluong as thanhtien
	FROM sanphma,loaisp,chitietdathang
    WHERE (sanphma.idloai=loaisp.id and chitietdathang.idsp=sanphma.masp and iddm='$max')";
    $result = $con->query($sql);
    $tongtien=0;
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo "<tr style='text-align: center'><td>".$row['tensp']." (".$row['masp'].")</td><td>".$row['gia']."*".$row['soluong']."</td><td>".$row['thanhtien']."</td></tr>";
            $tongtien=$tongtien+$row['thanhtien'];
        }
    }
    echo "<tr style='text-align: center'>
    <td colspan=3>
        <h5>****<h5>
        </td>
    </tr>
    <tr><td colspan=2>Tổng cộng</td><td>".$tongtien."</td></tr>"
    ?>
    </table>
    </div>
    <br>
    <div style="text-align:center">
    <button onclick="export2Word(window.docx)">Xuất hóa đơn</button></div>
</body>
</html>
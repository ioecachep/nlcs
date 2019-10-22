<head>
    <style>
    img{
        height:30px;
        width: 30px;
    }</style>
</head>
<table border="1px">
    <tr>
        <td colspan=3>Doanh Thu</td>
    </tr>
	<tr>
		<th>Mã</th>
		<th>Ngày</th>
        <th>Tiền</th>
    </tr><?php
$con = new mysqli("localhost","root","","thecoffee");
$con->set_charset("utf8");
$sql = "SELECT * FROM doanhthu";
$result = $con->query($sql);
$tongtien =0;
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "
    <tr>
        <td>".$row['madt']."</td>
        <td>".$row['ngay']."</td>
        <td>".$row['tien']."</td>
    </tr>";
    $tongtien=$tongtien+$row['tien'];
        }
    }
    echo "<tr><td colspan=2>Tổng doanh thu:</td><td>".$tongtien."</td></tr>"
?>

</table>
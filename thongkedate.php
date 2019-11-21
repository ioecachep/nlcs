<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết đơn hàng</title>
    <style>
        table, th, td{
            border-top:1px solid #ccc;
            border-bottom:1px solid #ccc;
        }
        table{
            border-collapse:collapse;
        }
        td, th {
            padding: 10px;
        }
        .img{
            height: 40px;
            width: 40px;
        }
        
    </style>    
</head>
<body>
    <table>
        <tr>
            <th>Sản Phẩm</th>
            <th>S.lg</th>
            <th>G.mua</th>
            <th>G.bán</th>
            <th>Tổng mua</th>
            <th>Tổng bán</th>
        </tr>
        <?php
            include 'connect.php';
            $ngayban = $_GET['ngay'];
            $tongmua=0;
            $tongban=0;
            $sqlCTDH = "SELECT ngayban,donhang.madh,chitietdonhang.soluong,tenhang,giamua,giaban 
            FROM chitietdonhang, hanghoa,donhang 
            WHERE chitietdonhang.mahang=hanghoa.mahang AND chitietdonhang.madh=donhang.madh 
            AND ngayban='$ngayban' ORDER BY madh;";
            $resultCTDH = $con->query($sqlCTDH);
            if ($resultCTDH->num_rows > 0){
            while ($rowCTDH = $resultCTDH->fetch_assoc()){
                echo "
                <tr>
                    <td>".$rowCTDH['tenhang']."</td>
                    <td>".$rowCTDH['soluong']."</td>
                    <td>".$rowCTDH['giamua']."</td>
                    <td>".$rowCTDH['giaban']."</td>
                    <td>".$rowCTDH['giamua']*$rowCTDH['soluong']."</td>
                    <td>".$rowCTDH['giaban']*$rowCTDH['soluong']."</td>
                </tr>";
                $tongmua = $tongmua + $rowCTDH['giamua']*$rowCTDH['soluong'];
                $tongban = $tongban + $rowCTDH['giaban']*$rowCTDH['soluong'];
            }
        }
        $lai=$tongban-$tongmua;
        echo "
            <tr>
                <td colspan=5>Tổng mua:</td>
                <td>".$tongmua."</td>
            </tr>
            <tr>
                <td colspan=5>Tổng bán:</td>
                <td>".$tongban."</td>
            </tr>
            <tr>
                <td colspan=5>Lãi:</td>
                <td>".$lai."</td>
            </tr>
        "
        ?>
    </table>
</body>
</html>
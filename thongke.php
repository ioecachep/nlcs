<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thống Kê Theo Đơn</title>
    <style>
        .grid{
            display: grid;
            grid-template-columns: auto auto;
        }
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
        #reloadTK{
            overflow:scroll;
            height:596px;
            width: 577px;
        }
        #chitiet{
            height:544;
            width: 596px;
            overflow:scroll;
        }
        #chonngay{
            padding: 10px;
        }
        input[type=date]{
            padding: 11px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button{
            padding: 11px;
        }
    </style>    
</head>
<body>
    <div class="grid">
    <div class="item">
        <div id="chonngay">
        <label>Chọn ngày: </label><input type="date" name="ngay" id="ngay" value="<?php echo date("Y-m-d");?>"><button onclick="loadThongKeDate(document.getElementById('ngay').value)">Chọn</button>
        </div>
        <div id="reloadTK">
    <table>
        <tr>
            <th width='100px'>Ngày Bán</th>
            <th width='60px'>Mã ĐH</th>
            <th width='100px'>Nhân Viên</th>
            <th width='100px'>Khách Hàng</th>
            <th width='60px'>Chi tiết</th>
        </tr>
        <?php
            include 'connect.php';
            $sqlDonHang = "SELECT ngayban,madh, b.manv,c.makh, b.hoten, c.tenkh 
            FROM donhang a,nhanvien b,khachhang c 
            WHERE a.makh=c.makh AND a.manv=b.manv 
            ORDER BY ngayban,madh;";
            $resultDH = $con->query($sqlDonHang);
            if ($resultDH->num_rows > 0){
                while ($rowDH = $resultDH->fetch_assoc()){
                    echo "
                    <tr>
                        <td>".$rowDH['ngayban']."</td>
                        <td id='".$rowDH['madh']."'>".$rowDH['madh']."</td>
                        <td>".$rowDH['hoten']."</td>
                        <td>".$rowDH['tenkh']."</td>
                        <td onclick='loadChitietThongKe(document.getElementById(".$rowDH['madh'].").innerHTML)'><a href='#'><img class='img' src='/img/search.png'></a></td>
                    </tr>
                    ";
            }
        }
        ?>
    </table>
    </div>
    </div>
    <div class="item" id="chitiet"></div>
    </div>
    <script language="javascript" src="./ajax/quanlythongke.js"></script>
</body>
</html>
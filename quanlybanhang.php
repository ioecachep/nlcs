<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Quản Lý Bán Hàng</title>
</head>
<body onload="loadDanhSachSanPham()">
    <div id="wrap">
        <div id="menu">
            <ul>
                <a href="index.php"><li><img src="./img/danhmuc.png" alt="danhmuc"><p>Danh mục</p></a>
                </li>
                <li id="selected"><img src="./img/qlbanhang.png" alt="danhmuc"><p>Quản lý bán hàng</p></li>
                <a href="quanlykhohang.php"><li><img src="./img/kho.png" alt="kho"><p>Quản lý kho hàng</p></li></a>
                <a href="quanlynhanvien.php"><li><img src="./img/nhanvien.png" alt="nhanvien"><p>Quản lý nhân viên</p></li></a>
                <a href="quanlykhachhang.php"><li><img src="./img/khachhang.png" alt="khachhang"><p>Quản lý khách hàng</p></li></a>
                <li><img src="./img/thongke.png" alt="thongke"><p>Thống kê</p></li>
            </ul>
        </div>
        <div id="thanbai">
            <div id="header">
                <h1>Hệ thống quản lý bán hàng</h1>
            </div>
            <div id="content">
                <div id="chucnang">
                    <ul>
                        <li onclick="loadDanhSachSanPham()"><a href="#">Danh Sách Hàng Hóa</a></li>
                        <li onclick="loadDanhSachSanPham()"><a href="#">Loại Hàng Hóa</a>
                            <ul>
                                <?php
                                    include 'connect.php';
                                    $sql = "SELECT * FROM loai";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0){
                                        while ($row = $result->fetch_assoc()){
                                            echo "
                                            <li><a onclick='loadTheoLoaiHang(this.innerHTML)' href='#'>".$row['tenloai']."</a></li>
                                            ";
                                        }
                                    }
                                ?> 
                            </ul>
                        </li>
                        <li onclick="loadTaoDonHang()"><a href="#">Tạo Đơn Hàng</a></li>
                    </ul>
                    <br>
                    <br>
                    <div id="ajax-donhang">
                                    <?php
                                        include 'giohang.php';
                                    ?>
                    </div>
                </div>
                <div id="ajax">
                    xin chào
                </div>
            </div>
            <div id="footer">
                <h3>(c) 2019</h3>
            </div>
        </div>
    </div>
    <script language="javascript" src="./ajax/quanlybanhang.js"></script>
</body>
</html>
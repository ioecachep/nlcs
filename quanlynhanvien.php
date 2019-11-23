<?php
    include 'session.php';
?>
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Quản Lý Nhân Viên</title>
</head>
<body onload="loadDanhSachNhanVien()">
    <div id="wrap">
        <div id="menu">
            <ul>
                <a href="index.php"><li><img src="./img/danhmuc.png" alt="danhmuc"><p>Danh mục</p></a>
                </li>
                <a href="quanlybanhang.php"><li><img src="./img/qlbanhang.png" alt="danhmuc"><p>Quản lý bán hàng</p></li></a>
                <a href="quanlykhohang.php"><li><img src="./img/kho.png" alt="kho"><p>Quản lý kho hàng</p></li></a>
                <li id="selected"><img src="./img/nhanvien.png" alt="nhanvien"><p>Quản lý nhân viên</p></li>
                <a href="quanlykhachhang.php"><li><img src="./img/khachhang.png" alt="khachhang"><p>Quản lý khách hàng</p></li></a>
                <a href="quanlythongke.php"><li><img src="./img/thongke.png" alt="thongke"><p>Thống kê</p></li></a>
            </ul>
            <br>
            <a href="/login/dangxuat.php"><button id="logout">Đăng xuất</button></a>
        </div>
        <div id="thanbai">
            <div id="header">
                <h1>Hệ thống quản lý bán hàng</h1>
            </div>
            <div id="content">
                <div id="chucnang">
                    <ul>
                        <li onclick="loadDanhSachNhanVien()"><a href="#">Danh Sách Nhân Viên</a></li>
                        <li onclick="loadThemNhanVien()"><a href="#">Thêm Nhân Viên</a></li>
                        <li onclick="loadCapnhatnhanvien()"><a href="#">Cập nhật nhân viên</a></li>
                        <!-- <li><a href="#">Coming Soon !!!</a></li> -->
                    </ul>
                </div>
                <div id="ajax">

                </div>
            </div>
            <div id="footer">
            <h3 style="padding:1px; font-family: consolas">NLCS</h3>
            </div>
        </div>
    </div>
    <script language="javascript" src="./ajax/quanlynhanvien.js"></script>
</body>
</html>
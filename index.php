<?php
    include 'session.php';
    header ('Location: quanlybanhang.php');
?>
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Quản Lý Bán Hàng</title>
</head>

<body>
    <div id="wrap">
        <div id="menu">
            <ul>
                <a href="#">
                    <li id="selected"><img src="./img/danhmuc.png" alt="danhmuc">
                        <p>Danh mục</p>
                        </li>
                </a>
                <a href="quanlybanhang.php"><li><img src="./img/qlbanhang.png" alt="danhmuc"><p>Quản lý bán hàng</p></li></a>
                <a href="quanlykhohang.php"><li><img src="./img/kho.png" alt="kho"><p>Quản lý kho hàng</p></li></a>
                <a href="quanlynhanvien.php"><li><img src="./img/nhanvien.png" alt="nhanvien"><p>Quản lý nhân viên</p></li></a>
                <a href="quanlykhachhang.php">
                    <li><img src="./img/khachhang.png" alt="khachhang">
                        <p>Quản lý khách hàng</p>
                    </li>
                </a>
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
                        <li>Danh Sách Khách Hàng</li>
                        <li>Ưu Đãi Khách Hàng</li>
                        <li>Coming soon !!!</li>
                    </ul>
                </div>
                <div id="ajax">

                </div>
            </div>
            <div id="footer">
                <h3>(c) 2019</h3>
            </div>
        </div>
    </div>
</body>

</html>
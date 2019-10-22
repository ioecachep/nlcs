<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Quản Lý Bán Hàng</title>
</head>
<body onload="loadDanhSachHangHoa()">
    <div id="wrap">
        <div id="menu">
            <ul>
                <a href="index.html"><li><img src="./img/danhmuc.png" alt="danhmuc"><p>Danh mục</p></a>
                </li>
                <li><img src="./img/qlbanhang.png" alt="danhmuc"><p>Quản lý bán hàng</p></li>
                <li id="selected"><img src="./img/kho.png" alt="kho"><p>Quản lý kho hàng</p></li>
                <li><img src="./img/nhanvien.png" alt="nhanvien"><p>Quản lý nhân viên</p></li>
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
                        <li onclick="loadDanhSachHangHoa()"><a href="#">Danh Sách Hàng Hóa</a></li>
                        <li><a href="#">Loại Hàng Hóa</a>
                            <ul>
                                <?php
                                    $con = new mysqli("localhost","root","","nlcs");
                                    $con->set_charset("utf8");
                                    $sql = "SELECT * FROM loai";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0){
                                        while ($row = $result->fetch_assoc()){
                                            echo "
                                            <li><a onclick='loadLoaiHangHoa(this.innerHTML)' href='#'>".$row['tenloai']."</a></li>
                                            ";
                                        }
                                    }
                                ?> 
                            </ul>
                        </li>
                        <li onclick="loadThemSanPham()"><a href="#">Thêm Hàng Hóa</a></li>
                        <li><a href="#">Cập nhật số lượng</a></li>
                        <li><a href="#">Coming Soon !!!</a></li>
                    </ul>
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
    <script language="javascript" src="ajax.js"></script>
</body>
</html>
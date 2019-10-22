-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 09:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thecoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `ctdh` int(11) NOT NULL,
  `iddm` int(11) NOT NULL,
  `idsp` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `idkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitietdathang`
--

INSERT INTO `chitietdathang` (`ctdh`, `iddm`, `idsp`, `user`, `soluong`, `idkm`) VALUES
(1, 1, 'CE02', 'nguyenhue', 1, 1),
(2, 1, 'CE01', 'nguyenhue', 1, 1),
(3, 2, 'CE01', 'nguyenhue', 1, 1),
(4, 2, 'CA01', 'nguyenhue', 2, 1),
(5, 3, 'CE02', 'nguyenhue', 1, 1),
(6, 3, 'CF02', 'nguyenhue', 1, 1),
(7, 4, 'CA03', 'nguyenhue', 1, 1),
(8, 7, 'CA03', 'nguyenhue', 1, 1),
(9, 7, 'CF03', 'nguyenhue', 2, 1),
(10, 8, 'CE02', 'nguyenhue', 1, 1),
(11, 8, 'CA02', 'nguyenhue', 2, 1),
(12, 9, 'CE03', 'nguyenhue', 1, 1),
(13, 10, 'CE03', 'admin', 1, 1),
(14, 10, 'CF03', 'admin', 2, 1),
(15, 11, 'CA01', 'admin', 1, 1),
(16, 11, 'CE02', 'admin', 1, 1),
(17, 12, 'CE03', 'admin', 1, 1),
(18, 12, 'CA02', 'admin', 2, 1),
(19, 13, 'CE03', 'admin', 1, 1),
(20, 15, 'CE02', 'admin', 2, 1),
(22, 16, 'CA02', 'admin', 1, 1),
(23, 17, 'CE02', 'truongthanhlam', 1, 1),
(24, 17, 'CF03', 'truongthanhlam', 2, 1),
(25, 18, 'CE03', 'admin', 1, 1),
(26, 18, 'CA01', 'admin', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ctkhuyenmai`
--

CREATE TABLE `ctkhuyenmai` (
  `idkm` int(11) NOT NULL,
  `tenct` varchar(1000) NOT NULL,
  `giamgia` int(11) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `mota` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ctkhuyenmai`
--

INSERT INTO `ctkhuyenmai` (`idkm`, `tenct`, `giamgia`, `ngaybatdau`, `ngayketthuc`, `mota`) VALUES
(0, 'NONE', 0, '2000-01-01', '2050-01-01', 'Không có chương trình khuyến mãi'),
(1, 'Thẻ sinh viên', 10, '2015-01-01', '2050-01-01', 'Sử dụng thẻ sinh viên');

-- --------------------------------------------------------

--
-- Table structure for table `datmon`
--

CREATE TABLE `datmon` (
  `iddm` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `tendat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datmon`
--

INSERT INTO `datmon` (`iddm`, `ngay`, `tendat`) VALUES
(1, '2019-05-20', 'Huỳnh Thanh An'),
(2, '2019-05-20', 'Vũ Văn Tùng'),
(3, '2019-05-20', 'Hồ Ngọc Ngân'),
(4, '2019-05-20', 'Khách Vãng Lai'),
(5, '2019-05-20', 'Vũ Văn Tùng'),
(6, '2019-05-20', 'Trương Anh Chí'),
(7, '2019-05-20', 'Vũ Văn Tùng'),
(8, '2019-05-20', 'Trương Anh Chí'),
(9, '2019-05-20', 'Hồ Ngọc Ngân'),
(10, '2019-05-20', 'Trương Anh Chí'),
(11, '2019-05-20', 'Khách Vãng Lai'),
(12, '2019-05-20', 'Hồ Ngọc Ngân'),
(13, '2019-05-20', 'Trương Anh Chí'),
(14, '2019-05-20', 'Trương Thanh Lam'),
(15, '2019-05-21', 'Hồ Ngọc Ngân'),
(16, '2019-05-21', 'Vũ Văn Tùng'),
(17, '2019-05-21', 'Hồ Ngọc Ngân'),
(18, '2019-05-21', 'Vũ Văn Tùng');

-- --------------------------------------------------------

--
-- Table structure for table `doanhthu`
--

CREATE TABLE `doanhthu` (
  `madt` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doanhthu`
--

INSERT INTO `doanhthu` (`madt`, `ngay`, `tien`) VALUES
(1, '2019-05-20', 719200),
(5, '2019-05-19', 0),
(7, '2019-05-21', 57600);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(100) NOT NULL,
  `tenkh` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `tenkh`, `phone`, `soluong`, `giamgia`) VALUES
(122261555, 'Khách Vãng Lai', 0, 0, 0),
(122261556, 'Vũ Văn Tùng', 1212692802, 1, 0),
(122261557, 'Trương Anh Chí', 1212692888, 10, 10),
(122261558, 'Hồ Ngọc Ngân', 1217792888, 20, 10),
(122261559, 'Huỳnh Thanh An', 1222796688, 15, 10),
(122261560, 'Trương Thanh Lam', 1212692802, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `id` varchar(50) NOT NULL,
  `loai` varchar(100) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id`, `loai`, `size`) VALUES
(' G01', 'Sinh Tố', 'Nhỏ'),
(' G02', 'Sinh Tố', 'Vừa'),
(' G03', 'Sinh Tố', 'Lớn'),
(' TS01', 'Trà sữa', 'Lớn'),
(' TS02', 'Trà sữa', 'Vừa'),
('T01', 'Cà phê', 'Nhỏ'),
('T02', 'Cà phê', 'Vừa'),
('T03', 'Cà phê', 'Lớn'),
('T04', 'Nước trái cây', 'Nhỏ'),
('T05', 'Nước trái cây', 'Vừa'),
('T06', 'Nước trái cây', 'Lớn');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `nghenghiep` varchar(100) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `namsinh` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `diachi` varchar(1000) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`user`, `pass`, `nghenghiep`, `gioitinh`, `namsinh`, `phone`, `diachi`, `hinhanh`, `hoten`) VALUES
('admin', '123456', 'Sinh viên', 'nam', 1998, 912456789, 'bac lieu', './image/1.PNG', 'Ngô Bách Tùng'),
('giangthan', 'e10adc3949', 'Phục Vụ', 'nam', 1996, 912456789, 'Ninh kiểu cần thơ', './image/about.png', 'Giang Thần'),
('nguyenhue', '123456', 'Sinh viên', 'Nữ', 1995, 932212333, '15 Gò Vấp', '4.jpg', 'Nguyễn Huệ'),
('nguyenngan', '123456', 'Phục Vụ', 'Nữ', 1996, 122797919, '9 Lê Lợi', '3.jpg', 'Nguyễn Ngân'),
('thanhtung', '123456', 'Phục Vụ', 'Nam', 1994, 124221177, 'TP.HCM', '5.jpg', 'Nguyễn Huỳnh Thanh Tùng'),
('truongthanhlam', 'e10adc3949', 'Sinh viên', 'nam', 1998, 1234567890, 'Bac lieu', './image/about.png', 'Truong Thanh Lam'),
('vutung', '123456', 'Sinh viên', 'Nam', 1996, 124566789, 'Dĩ An', '2.jpg', 'Vũ Văn Tùng');

-- --------------------------------------------------------

--
-- Table structure for table `quantri`
--

CREATE TABLE `quantri` (
  `tendangnhap` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `quyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quantri`
--

INSERT INTO `quantri` (`tendangnhap`, `pass`, `quyen`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
('giangthan', 'e10adc3949ba59abbe56e057f20f883e', 'nhân viên'),
('truongthanhlam', 'e10adc3949ba59abbe56e057f20f883e', 'nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `sanphma`
--

CREATE TABLE `sanphma` (
  `masp` varchar(50) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `idloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanphma`
--

INSERT INTO `sanphma` (`masp`, `tensp`, `gia`, `idloai`) VALUES
('CA01', 'CAPPUCCINO', 38000, 'T01'),
('CA02', 'CAPPUCCINO', 42000, 'T02'),
('CA03', 'CAPPUCCINO', 48000, 'T03'),
('CE01', 'Cam ép', 32000, 'T04'),
('CE02', 'Cam ép', 36000, 'T05'),
('CE03', 'Cam ép', 42000, 'T06'),
('CF01', ' Cà phê đá', 20000, 'T01'),
('CF02', ' Cà phê đá', 25000, 'T02'),
('CF03', ' Cà phê đá', 30000, 'T03'),
('ST01', 'Trà sữa tự nhiên', 30000, ' TS01'),
('ST02', 'Trà sữa tự nhiên', 25000, ' TS02'),
('ST03', 'Trà sữa thiên nhiên', 20000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`ctdh`);

--
-- Indexes for table `ctkhuyenmai`
--
ALTER TABLE `ctkhuyenmai`
  ADD PRIMARY KEY (`idkm`);

--
-- Indexes for table `datmon`
--
ALTER TABLE `datmon`
  ADD PRIMARY KEY (`iddm`);

--
-- Indexes for table `doanhthu`
--
ALTER TABLE `doanhthu`
  ADD PRIMARY KEY (`madt`),
  ADD UNIQUE KEY `ngay` (`ngay`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`tendangnhap`);

--
-- Indexes for table `sanphma`
--
ALTER TABLE `sanphma`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `idloai` (`idloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  MODIFY `ctdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ctkhuyenmai`
--
ALTER TABLE `ctkhuyenmai`
  MODIFY `idkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datmon`
--
ALTER TABLE `datmon`
  MODIFY `iddm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doanhthu`
--
ALTER TABLE `doanhthu`
  MODIFY `madt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122261561;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

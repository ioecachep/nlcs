-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2019 lúc 12:57 PM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nlcs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `madh` int(11) NOT NULL,
  `mahang` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(6) NOT NULL,
  `manv` varchar(3) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `makh` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngayban` date NOT NULL,
  `tinhtrang` varchar(3) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `mahang` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahang` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenhang` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giamua` int(11) NOT NULL,
  `giaban` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(256) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `maloai` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahang`, `tenhang`, `giamua`, `giaban`, `soluong`, `hinhanh`, `maloai`) VALUES
('BH1', 'Heineken', 14000, 15000, 240, './img/sanpham/heineken.jpg', 'BR'),
('CC1', 'Cocacola', 5700, 7000, 240, './img/sanpham/cocacola.jpg', 'NN'),
('KR1', 'Kem đánh răng PS', 14500, 15000, 50, './img/sanpham/kemdanhrangps.jpg', 'HTD'),
('KR2', 'K.Đ.Răng Colgate', 26000, 27000, 50, './img/sanpham/kemdanhrangcolgate.jpg', 'HTD'),
('PC1', 'Khoai Tây Chiên Poca', 5700, 6000, 100, './img/sanpham/poca.jpg', 'BK'),
('PC2', 'Poca (Vị Phô Mai)', 5700, 6000, 100, './img/sanpham/pocaxanh.jpg', 'BK'),
('PS1', 'Pepsi', 5700, 7000, 240, './img/sanpham/pepsi.jpg', 'NN'),
('RB1', 'Rong Biển Sấy', 21000, 22000, 100, './img/sanpham/rongbiensay.jpg', 'BK'),
('SB1', 'Strongbow Gold Apple', 15800, 16000, 240, './img/sanpham/strongbowga.jpg', 'BR'),
('SB2', 'Strongbow Honney', 15800, 16000, 240, './img/sanpham/strongbowh.jpg', 'BR');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenkh` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sodienthoai` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `maloaikh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `gioitinh`, `diachi`, `sodienthoai`, `maloaikh`) VALUES
('000001', 'Lê Quy Định', 'Nam', 'Cái Răng, Cần Thơ', '0394113110', 1),
('000002', 'Ngô Công Anh', 'Nam', 'Ninh Kiều, Cần Thơ', '0394444444', 2),
('000003', 'Ngô Thị An', 'Nữ', '196/C1, Phạm Ngũ Lão', '0394111111', 4),
('000004', 'Huỳnh Thanh An', 'Nam', 'Cái Răng, Cần Thơ', '0394122011', 2),
('000005', 'Ung Ngọc Châu', 'Nữ', 'Long Xuyên, An Giang', '0312333000', 1),
('000006', 'Chu Văn Bình', 'Nam', 'Ninh Kiều, Cần Thơ', '0394119999', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` varchar(6) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenloai` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('BK', 'Bánh Kẹo'),
('BR', 'Bia - Rượu'),
('HTD', 'Hàng Tiêu Dùng'),
('NN', 'Nước Giải Khát');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaikh`
--

CREATE TABLE `loaikh` (
  `maloaikh` int(11) NOT NULL,
  `loaikh` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `uudai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaikh`
--

INSERT INTO `loaikh` (`maloaikh`, `loaikh`, `uudai`) VALUES
(1, 'Khách Hàng', 0),
(2, 'Khách Hàng Thân Thiết', 2),
(3, 'Khách Hàng Vàng', 5),
(4, 'Khách Hàng VIP', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` varchar(3) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hoten` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sodienthoai` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaythamgia` date NOT NULL,
  `hinhanh` varchar(256) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hoten`, `gioitinh`, `ngaysinh`, `quequan`, `sodienthoai`, `ngaythamgia`, `hinhanh`) VALUES
('001', 'Trần Minh Tài', 'Nam', '1998-07-11', 'An Giang', '0394113000', '2019-11-07', './img/nhanvien/abc.jpg'),
('002', 'Tào Luân', 'Nam', '1998-01-01', 'Sóc Trăng', '0123456789', '2019-10-01', './img/nhanvien/taoluan.jpg'),
('003', 'Nguyễn Văn Dự', 'Nam', '1998-01-01', 'Bến Tre', '0999999999', '2019-01-01', './img/nhanvien/vandu.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` varchar(3) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tentk` varchar(16) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `manv` varchar(3) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`madh`,`mahang`),
  ADD KEY `fk_chitietdonhang_hanghoa` (`mahang`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `fk_donhang_nhanvien` (`manv`),
  ADD KEY `fk_donhang_khachhang` (`makh`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD KEY `giohang_hanghoa` (`mahang`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahang`),
  ADD KEY `fk_hanghoa_loai` (`maloai`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`),
  ADD KEY `fk_khachhang_loaikh` (`maloaikh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `loaikh`
--
ALTER TABLE `loaikh`
  ADD PRIMARY KEY (`maloaikh`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`),
  ADD KEY `fk_taikhoan_nhanvien` (`manv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaikh`
--
ALTER TABLE `loaikh`
  MODIFY `maloaikh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_chitietdonhang_donhang` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`),
  ADD CONSTRAINT `fk_chitietdonhang_hanghoa` FOREIGN KEY (`mahang`) REFERENCES `hanghoa` (`mahang`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang_khachhang` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `fk_donhang_nhanvien` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_hanghoa` FOREIGN KEY (`mahang`) REFERENCES `hanghoa` (`mahang`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `fk_hanghoa_loai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `fk_khachhang_loaikh` FOREIGN KEY (`maloaikh`) REFERENCES `loaikh` (`maloaikh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_taikhoan_nhanvien` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

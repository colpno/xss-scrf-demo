-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2022 lúc 11:18 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_hdct` int(11) NOT NULL,
  `mahd` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ten_sp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `ptthanhtoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_hdct`, `mahd`, `ten_sp`, `soluong`, `gia`, `ptthanhtoan`) VALUES
(93, '83', 'Samsung Galaxy A32 4G 6GB/128GB', 1, 5970800, 0),
(94, '83', 'iPhone 13 Pro 128GB', 1, 27581100, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ngaydathang` date NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `idnd`, `hoten`, `diachi`, `dienthoai`, `email`, `ngaydathang`, `trangthai`) VALUES
(83, 103, 'truong1234', 'tien giang', 987654321, 'tritrantv121295@gmail.com', '2022-05-29', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ngaysinh` date NOT NULL,
  `tentaikhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydangky` date NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `ten`, `phone`, `diachi`, `email`, `password`, `ngaysinh`, `tentaikhoan`, `ngaydangky`, `phanquyen`) VALUES
(1, 'truong', '0987654321', 'tienggiang', 'tritrantv121295@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-05-19', 'admin', '2022-05-18', 0),
(103, 'truong1234', '0987654321', 'tien giang', 'tritrantv121295@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-05-19', 'truong123', '2022-05-19', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `id_tl` int(11) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chitiet_sp` text COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giakhuyenmai_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong_sp` int(11) NOT NULL,
  `anh_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `daban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_tl`, `ten_sp`, `chitiet_sp`, `gia_sp`, `giakhuyenmai_sp`, `soluong_sp`, `anh_sp`, `daban`) VALUES
(63, 1, 'iPhone 13 Pro Max 128GB ', '<table style=\"padding: 10px;\">\n         <tr>\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\n         </tr>\n	<tr>\n		<td>Model:</td>\n		<td style=\"padding:5px;\">iPhone 13 Pro Max 128GB</td>\n	</tr>\n	<tr>\n		<td>Màu sắc:</td>\n		<td style=\"padding:5px;\">Vàng Đồng</td>\n	</tr>\n	<tr>\n		<td>Nhà sản xuất:</td>\n		<td style=\"padding:5px;\">Apple</td>\n	</tr>\n	<tr>\n		<td>Xuất xứ:</td>\n		<td style=\"padding:5px;\">Trung Quốc</td>\n	</tr>\n	<tr>\n		<td>Năm ra mắt :</td>\n		<td style=\"padding:5px;\">2021</td>\n	</tr>\n        <tr>\n		<td>Thời gian bảo hành:</td>\n		<td style=\"padding:5px;\">12 tháng</td>\n	</tr>\n         <tr>\n		<td>Hệ điều hành:</td>\n		<td style=\"padding:5px;\">iOS 15</td>\n	</tr>\n	<tr>\n		<td>Chipset:</td>\n		<td style=\"padding:5px;\">Apple A15 Bionic</td>\n	</tr>\n        <tr>\n		<td>Ram:</td>\n		<td style=\"padding:5px;\">4GB</td>\n	</tr>\n</table> \n\n<br>\n', '33990000', '13', 20, 'iphone13(vangdong).png', 20),
(64, 1, 'iPhone 13 128GB', '<table style=\"padding: 10px;\">\n         <tr>\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\n         </tr>\n	<tr>\n		<td>Model:</td>\n		<td style=\"padding:5px;\">iPhone 13 128GB</td>\n	</tr>\n	<tr>\n		<td>Màu sắc:</td>\n		<td style=\"padding:5px;\">Đen</td>\n	</tr>\n	<tr>\n		<td>Nhà sản xuất:</td>\n		<td style=\"padding:5px;\">Apple</td>\n	</tr>\n	<tr>\n		<td>Xuất xứ:</td>\n		<td style=\"padding:5px;\">Trung Quốc</td>\n	</tr>\n	<tr>\n		<td>Năm ra mắt :</td>\n		<td style=\"padding:5px;\">2021</td>\n	</tr>\n        <tr>\n		<td>Thời gian bảo hành:</td>\n		<td style=\"padding:5px;\">12 tháng</td>\n	</tr>\n         <tr>\n		<td>Hệ điều hành:</td>\n		<td style=\"padding:5px;\">iOS 15</td>\n	</tr>\n	<tr>\n		<td>Chipset:</td>\n		<td style=\"padding:5px;\">Apple A15 Bionic</td>\n	</tr>\n        <tr>\n		<td>RAM:</td>\n		<td style=\"padding:5px;\">4GB</td>\n	</tr>\n</table>\n\n<br>\n', '24990000', '16', 20, 'iphone13(den).png', 20),
(65, 1, 'iPhone 11 64GB ', '<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model: </td>\r\n		<td style=\"padding:5px;\">IPHONE1164GB</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">Đen</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Apple</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Trung Quốc</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Năm ra mắt :</td>\r\n		<td style=\"padding:5px;\">2021</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 tháng</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Hệ điều hành:</td>\r\n		<td style=\"padding:5px;\">iOS 15</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Apple A15 Bionic</td>\r\n	</tr>\r\n        <tr>\r\n		<td>RAM:</td>\r\n		<td style=\"padding:5px;\">4GB</td>\r\n	</tr>\r\n</table>\r\n\r\n<br>\r\n', '12900000', '10', 20, 'iphone11(den).png', 20),
(66, 1, 'iPhone 13 Pro Max 256GB', '\r\n<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model:</td>\r\n		<td style=\"padding:5px;\">iPhone 13 Pro Max 256GB</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">Xanh Dương</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Apple</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Trung Quốc</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Năm ra mắt :</td>\r\n		<td style=\"padding:5px;\">2021</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 tháng</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Hệ điều hành:</td>\r\n		<td style=\"padding:5px;\">iOS 15</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Apple A15 Bionic</td>\r\n	</tr>\r\n        <tr>\r\n		<td>RAM:</td>\r\n		<td style=\"padding:5px;\">6GB</td>\r\n	</tr>\r\n</table>\r\n\r\n<br>\r\n', '37990000', '16', 20, 'iphone13(xanhduong).png', 1),
(67, 1, 'iPhone 13 Pro 128GB', '\n<table style=\"padding: 10px;\">\n         <tr>\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\n         </tr>\n	<tr>\n		<td>Model:</td>\n		<td style=\"padding:5px;\">iPhone 13 Pro 128GB</td>\n	</tr>\n	<tr>\n		<td>Màu sắc:</td>\n		<td style=\"padding:5px;\">Xanh lá</td>\n	</tr>\n	<tr>\n		<td>Nhà sản xuất:</td>\n		<td style=\"padding:5px;\">Apple</td>\n	</tr>\n	<tr>\n		<td>Xuất xứ:</td>\n		<td style=\"padding:5px;\">Trung Quốc</td>\n	</tr>\n	\n        <tr>\n		<td>Thời gian bảo hành:</td>\n		<td style=\"padding:5px;\">12 tháng</td>\n	</tr>\n         <tr>\n		<td>Hệ điều hành:</td>\n		<td style=\"padding:5px;\">iOS 15</td>\n	</tr>\n	<tr>\n		<td>Chipset:</td>\n		<td style=\"padding:5px;\">Apple A15 Bionic</td>\n	</tr>\n        <tr>\n		<td>Ram:</td>\n		<td style=\"padding:5px;\">6GB</td>\n	</tr>\n        <tr>\n		<td>Bộ nhớ trong:</td>\n		<td style=\"padding:5px;\">128GB</td>\n	</tr>\n</table> \n\n<br>\n', '30990000', '11', 20, 'iphone13(xanhla).png', 4),
(68, 1, 'iPhone 13 128GB ', '\r\n<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model:</td>\r\n		<td style=\"padding:5px;\">iPhone 13 128GB</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">Trắng</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Apple</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Trung Quốc</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Năm ra mắt :</td>\r\n		<td style=\"padding:5px;\">2021</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 tháng</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Hệ điều hành:</td>\r\n		<td style=\"padding:5px;\">iOS 15</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Apple A15 Bionic</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Ram:</td>\r\n		<td style=\"padding:5px;\">4GB</td>\r\n	</tr>\r\n</table> ', '24990000', '16', 20, 'iphone13(trang).png', 0),
(69, 1, 'iPhone 12 64GB', '\r\n<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model:</td>\r\n		<td style=\"padding:5px;\">iPhone 12 64GB</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">Đen</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Apple</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Trung Quốc</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Năm ra mắt :</td>\r\n		<td style=\"padding:5px;\">2020</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 Tháng</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Hệ điều hành:</td>\r\n		<td style=\"padding:5px;\">iOS 14.1</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Apple A14 Bionic</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Ram:</td>\r\n		<td style=\"padding:5px;\">4 GB</td>\r\n	</tr>\r\n</table> ', '1990000', '15', 20, 'iphone12(den).png', 0),
(70, 1, 'iPhone 13 Pro 256GB', '\r\n<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model:</td>\r\n		<td style=\"padding:5px;\">iPhone 13 Pro 256GB</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">Xám</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Apple</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Trung Quốc</td>\r\n	</tr>\r\n\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 tháng</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Hệ điều hành:</td>\r\n		<td style=\"padding:5px;\">iOS 15</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Apple A15 Bionic</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Ram:</td>\r\n		<td style=\"padding:5px;\">6GB</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Bộ nhớ trong:</td>\r\n		<td style=\"padding:5px;\">256GB</td>\r\n	</tr>\r\n</table> ', '34990000', '14', 20, 'iphone13(xam).png', 1),
(71, 1, 'iPhone 11 64GB', '\r\n<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model:</td>\r\n		<td style=\"padding:5px;\">IPHONE1164GB</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">Xanh lá</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Apple</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Trung Quốc</td>\r\n	</tr>\r\n	\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 tháng</td>\r\n	</tr>\r\n        \r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Apple A13 Bionic</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Ram:</td>\r\n		<td style=\"padding:5px;\">4GB</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Bộ nhớ trong:</td>\r\n		<td style=\"padding:5px;\">64GB</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Loại màn hình:</td>\r\n		<td style=\"padding:5px;\">Liquid Retina, IPS LCD</td>\r\n	</tr>\r\n         \r\n</table> ', '12990000', '10', 20, 'iphone11(xanhla.)png.jpg', 0),
(72, 1, 'iPhone 12 64GB', '\r\n<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model:</td>\r\n		<td style=\"padding:5px;\">iPhone 12 64GB</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">Xanh Lá</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Apple</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Trung Quốc</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Năm ra mắt :</td>\r\n		<td style=\"padding:5px;\">2020</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 Tháng</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Hệ điều hành:</td>\r\n		<td style=\"padding:5px;\">iOS 14.1</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Apple A14 Bionic</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Ram:</td>\r\n		<td style=\"padding:5px;\">4 GB</td>\r\n	</tr>\r\n</table> ', '19990000', '15', 20, 'iphone12(xanhla).png', 0),
(73, 364, 'Baseus Cafule Type C', '<table style=\"padding:10px;\">\r\n<tr>\r\n<td style=\"padding-bottom: 10px\";>\r\nCáp vải dù siêu bền , thiết kế chống gảy đầu cáp . \r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"padding-bottom: 10px\";>\r\nHỗ trợ sạc nhanh (Quick charge 3.0, 3A).\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"padding-bottom: 10px\";>\r\nTốc độ truyền data 480Mbps .\r\n</td>\r\n</tr>\r\n</table>', '120000', '35', 20, 'daysac1.png', 0),
(74, 359, 'Samsung Galaxy A52 4G 8GB/128GB ', '\r\n<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model:</td>\r\n		<td style=\"padding:5px;\">SM-A525F/DS</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">XANH</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Samsung</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Việt Nam</td>\r\n	</tr>\r\n	\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 tháng</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Hệ điều hành:</td>\r\n		<td style=\"padding:5px;\"></td>\r\n	</tr>\r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Vi xử lý 8 nhân Snapdragon 720G</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Ram:</td>\r\n		<td style=\"padding:5px;\">8GB</td>\r\n	</tr>\r\n          <tr>\r\n		<td>Bộ nhớ trong:</td>\r\n		<td style=\"padding:5px;\">128GB</td>\r\n	</tr>\r\n          <tr>\r\n		<td>Loại màn hình:</td>\r\n		<td style=\"padding:5px;\">Màn hình tràn viền vô cực Super AMOLED Full HD+, độ sáng màn hình đến 800nit</td>\r\n	</tr>\r\n        \r\n</table> ', '9290000', '9', 20, 'samsunga52(xanh).ong.jpg', 15),
(75, 359, 'Samsung Galaxy A32 4G 6GB/128GB', '<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model:</td>\r\n		<td style=\"padding:5px;\">SM-A325F/DS</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">XANH</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Samsung</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Việt Nam</td>\r\n	</tr>\r\n	\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 tháng</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Hệ điều hành:</td>\r\n		<td style=\"padding:5px;\"></td>\r\n	</tr>\r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Vi xử lý Helio G80 (12nm), Octa-core 2.0GHz</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Ram:</td>\r\n		<td style=\"padding:5px;\">6GB</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Bộ nhớ trong:</td>\r\n		<td style=\"padding:5px;\">128GB</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Loại màn hình:</td>\r\n		<td style=\"padding:5px;\">Infinity-U, Super AMOLED 90Hz, Tỉ lệ 20:9</td>\r\n	</tr>\r\n\r\n</table> ', '6490000', '8', 20, 'samsunga32(xanh).png', 5),
(76, 359, 'Samsung Galaxy A52 4G 8GB/128GB', '<table style=\"padding: 10px;\">\r\n         <tr>\r\n                <td style=\"padding-bottom: 10px;\">Thông số kỹ thuật</td>\r\n         </tr>\r\n	<tr>\r\n		<td>Model:</td>\r\n		<td style=\"padding:5px;\">SM-A525F/DS</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Màu sắc:</td>\r\n		<td style=\"padding:5px;\">Đen</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Nhà sản xuất:</td>\r\n		<td style=\"padding:5px;\">Samsung</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Xuất xứ:</td>\r\n		<td style=\"padding:5px;\">Việt Nam</td>\r\n	</tr>\r\n	<tr>\r\n		<td>Năm ra mắt :</td>\r\n		<td style=\"padding:5px;\"></td>\r\n	</tr>\r\n        <tr>\r\n		<td>Thời gian bảo hành:</td>\r\n		<td style=\"padding:5px;\">12 tháng</td>\r\n	</tr>\r\n         <tr>\r\n		<td>Hệ điều hành:</td>\r\n		<td style=\"padding:5px;\"></td>\r\n	</tr>\r\n	<tr>\r\n		<td>Chipset:</td>\r\n		<td style=\"padding:5px;\">Vi xử lý 8 nhân Snapdragon 720G</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Ram:</td>\r\n		<td style=\"padding:5px;\">8GB</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Bộ nhớ trong:</td>\r\n		<td style=\"padding:5px;\">128GB</td>\r\n	</tr>\r\n        <tr>\r\n		<td>Loại màn hình:</td>\r\n		<td style=\"padding:5px;\">Màn hình tràn viền vô cực Super AMOLED Full HD+, độ sáng màn hình đến 800nit</td>\r\n	</tr>\r\n\r\n</table> ', '9290000', '9', 20, 'samsunga52(den).png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id_tl` int(11) NOT NULL,
  `ten_tl` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dequi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id_tl`, `ten_tl`, `dequi`) VALUES
(1, 'IPHONE', 1),
(359, 'SAM SUNG', 1),
(364, 'DÂY SẠC', 2),
(365, 'XIAOMI', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_hdct`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id_tl`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_hdct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id_tl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

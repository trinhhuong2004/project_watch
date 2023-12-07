-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2023 lúc 04:35 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `dia_chi` varchar(225) NOT NULL,
  `tell` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `detail` varchar(225) NOT NULL,
  `total` int(11) NOT NULL,
  `pttt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `name`, `dia_chi`, `tell`, `email`, `detail`, `total`, `pttt`) VALUES
(51, 'sinhduong', 'đứa', '0865642497', 'sinhduong1508@gmail.com', 'đá', 0, 0),
(52, 'sinhduong', 'đứa', '0865642497', 'sinhduong1508@gmail.com', 'dsds', 10900, 0),
(53, 'sinhduong', 'đứa', '0865642497', 'sinhduong1508@gmail.com', 'dss', 18000, 0),
(54, 'sinhduong', '1232', '0865642497', 'sinhduong1508@gmail.com', 'dứdsds', 410000, 0),
(55, 'sinhduong', 'đứa', '0865642497', 'sinhduong1508@gmail.com', '', 319000, 0),
(56, 'sinhduong', 'ass', '0865642497', 'sinhduong1508@gmail.com', 'ds', 46000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `id_tai_khoan` varchar(255) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `noi_dung_binh_luan` varchar(255) NOT NULL,
  `ngay_binh_luan` date NOT NULL,
  `danh_gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `hinh_anh` varchar(225) NOT NULL,
  `ten_sp` varchar(225) NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `hinh_anh`, `ten_sp`, `dongia`, `soluong`, `thanhtien`, `idbill`) VALUES
(26, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 13),
(51, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 21),
(52, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 21),
(53, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 22),
(54, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 22),
(55, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 22),
(56, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 23),
(57, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 23),
(58, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 23),
(59, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 24),
(60, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 24),
(61, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 24),
(62, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 25),
(63, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 25),
(64, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 25),
(65, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 26),
(66, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 26),
(67, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 26),
(68, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 27),
(69, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 27),
(70, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 27),
(71, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 28),
(72, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 28),
(73, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 28),
(74, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 29),
(75, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 29),
(76, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 29),
(77, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 30),
(78, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 30),
(79, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 30),
(80, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 31),
(81, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 31),
(82, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 31),
(83, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 32),
(84, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 32),
(85, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 32),
(86, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 33),
(87, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 33),
(88, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 33),
(89, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 34),
(90, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 34),
(91, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 34),
(92, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 35),
(93, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 35),
(94, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 35),
(95, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 36),
(96, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 36),
(97, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 36),
(98, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 37),
(99, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 37),
(100, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 38),
(101, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 38),
(102, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 39),
(103, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 39),
(104, '3-3-450x450.jpg', 'rolex', 19, 1, 19, 40),
(105, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 40),
(106, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 1, 790, 40),
(107, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 2, 22, 42),
(108, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 1, 11, 44),
(109, '1-1-450x450.jpg', 'đồng hồ nam tính', 790, 4, 3160, 46),
(110, '3-3-450x450.jpg', 'đẹp', 1232, 2, 2464, 46),
(111, '1-1-450x450.jpg', 'watch7', 1232, 7, 8624, 46),
(112, '2-2-450x450.jpg', 'đồng hồ thụy sỹ', 11, 5, 55, 46),
(113, '11-450x450.jpg', 'Rolex Daytona', 46000, 4, 184000, 46),
(114, '3-450x450.jpg', 'Panerai Luminor', 79000, 2, 158000, 46),
(115, '12-450x450.jpg', 'Zenith El Primero', 18000, 1, 18000, 46),
(116, '3-450x450.jpg', 'Panerai Luminor', 79000, 1, 79000, 47),
(117, '11-450x450.jpg', 'Rolex Daytona', 46000, 3, 138000, 47),
(118, '12-450x450.jpg', 'Zenith El Primero', 18000, 1, 18000, 47),
(119, '11-450x450.jpg', 'Rolex Daytona', 46000, 1, 46000, 50),
(120, '1-1-450x450.jpg', 'Rolex Submariner', 10900, 1, 10900, 52),
(121, '12-450x450.jpg', 'Zenith El Primero', 18000, 1, 18000, 53),
(122, '8-8-450x450.jpg', 'Hublot Big Bang', 77000, 3, 231000, 54),
(123, '12-450x450.jpg', 'Zenith El Primero', 18000, 3, 54000, 54),
(124, '3-450x450.jpg', 'Panerai Luminor', 79000, 1, 79000, 54),
(125, '11-450x450.jpg', 'Rolex Daytona', 46000, 1, 46000, 54),
(126, '11-450x450.jpg', 'Rolex Daytona', 46000, 2, 92000, 55),
(127, '12-450x450.jpg', 'Zenith El Primero', 18000, 2, 36000, 55),
(128, '5-5-450x450.jpg', 'Breitling Navitimer', 56000, 2, 112000, 55),
(129, '3-450x450.jpg', 'Panerai Luminor', 79000, 1, 79000, 55),
(130, '11-450x450.jpg', 'Rolex Daytona', 46000, 1, 46000, 56);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id` int(11) NOT NULL,
  `id_don_dat_hang` int(11) DEFAULT NULL,
  `id_san_pham` int(11) DEFAULT NULL,
  `so_luong` int(11) NOT NULL,
  `size_san_pham` int(11) NOT NULL,
  `gia_ban` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_san_pham`
--

CREATE TABLE `chi_tiet_san_pham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `gia_giam` decimal(10,2) NOT NULL,
  `mo_ta` text NOT NULL,
  `mau_sac` varchar(10) NOT NULL,
  `kich_thuoc` varchar(10) NOT NULL,
  `chat_lieu` varchar(255) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `trong_luong` int(225) NOT NULL,
  `phu_kien` varchar(255) NOT NULL,
  `khuyen_mai` varchar(255) NOT NULL,
  `tinh_trang` varchar(255) NOT NULL,
  `bao_hanh` varchar(255) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`id`, `name`, `gia`, `gia_giam`, `mo_ta`, `mau_sac`, `kich_thuoc`, `chat_lieu`, `hinh_anh`, `trong_luong`, `phu_kien`, `khuyen_mai`, `tinh_trang`, `bao_hanh`, `id_sanpham`) VALUES
(33, 'Zenith El Primero', 27000.00, 18000.00, 'Đồng hồ có lịch sử lâu đời, với chức năng Chronograph chính xác và thiết kế mạnh mẽ.', 'blue', '12*21', 'kim cương', '2-2-450x450.jpg', 23, 'túi da', '1', '1', '1', 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `name`) VALUES
(53, 'Đồng hồ điện tử'),
(54, 'Đồng hồ thông minh'),
(55, 'Đồng hồ thể thao'),
(56, 'Đồng hồ đeo tay nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `id_nguoi_dung` int(11) DEFAULT NULL,
  `ngay_dat` date NOT NULL,
  `dia_chi_giao_hang` text NOT NULL,
  `trang_thai` varchar(50) DEFAULT 'Chờ xác nhận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `id_nguoi_dung`, `ngay_dat`, `dia_chi_giao_hang`, `trang_thai`) VALUES
(11, 12, '2023-12-16', 'nhổn', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `gia_giam` decimal(10,2) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `name`, `gia`, `gia_giam`, `mo_ta`, `hinh_anh`, `iddm`) VALUES
(14, 'Rolex Submariner', 12000.00, 10900.00, 'Một trong những biểu tượng của thương hiệu Rolex, thiết kế đặc trưng dành cho người đàn ông ', '1-1-450x450.jpg', 56),
(15, 'TAG Heuer Carrera', 15000.00, 12900.00, 'Đồng hồ cổ điển và sang trọng của TAG Heuer, với thiết kế mạnh mẽ và chất lượng cao.', '2-2-450x450.jpg', 56),
(16, 'Omega Speedmaster Professional', 9000.00, 7900.00, 'Được sử dụng trong chuyến thăm Mặt Trăng đầu tiên của con người', '3-3-450x450.jpg', 56),
(17, 'Seiko SKX007', 11000.00, 10300.00, 'Một chiếc đồng hồ chống nước và chịu va đập với giá phải chăng', '2-600x600.jpg', 56),
(18, 'Panerai Luminor', 100000.00, 79000.00, 'Với thiết kế độc đáo và mạnh mẽ, là một trong những lựa chọn tốt cho người đàn ông có phong cách mạnh mẽ.', '3-450x450.jpg', 56),
(19, 'Tissot Le Locle', 30000.00, 25000.00, 'Đồng hồ cổ điển, tinh tế và có giá trị với mức giá vừa phải, thích hợp cho những người đàn ông có phong cách truyền thống', '4-450x450.jpg', 56),
(20, 'Citizen Eco-Drive', 28000.00, 21000.00, ' Sử dụng năng lượng ánh sáng để hoạt động, không cần thay pin thường xuyên, và có nhiều mẫu mã đa dạng với mức giá phải chăng.', '4-450x450.jpg', 56),
(21, 'Longines Master Collection', 28000.00, 21000.00, 'Đồng hồ có kiểu dáng tinh tế, hoàn thiện cao cấp từ thương hiệu danh tiếng Longines.', '5-5-450x450.jpg', 55),
(22, 'Audemars Piguet Royal Oak', 27000.00, 23900.00, ' Thiết kế độc đáo với việc sử dụng kim loại không gỉ và các chi tiết phức tạp, là biểu tượng của thương hiệu Audemars Piguet.', '5-450x450.jpg', 55),
(23, 'Breitling Navitimer', 58000.00, 56000.00, ' Đồng hồ được thiết kế đặc biệt cho phi công, có đầy đủ các chức năng đo thời gian và một thiết kế nổi bật', '5-5-450x450.jpg', 55),
(24, 'Cartier Santos', 19000.00, 15000.00, 'Một trong những biểu tượng của Cartier, với thiết kế độc đáo, đậm chất lịch lãm và sang trọng.', '6-450x450.jpg', 54),
(25, 'Hublot Big Bang', 88000.00, 77000.00, 'Thiết kế ấn tượng và đa dạng với sự kết hợp giữa vật liệu hiện đại và công nghệ tiên tiến.', '8-8-450x450.jpg', 54),
(26, 'Zenith El Primero', 27000.00, 18000.00, 'Đồng hồ có lịch sử lâu đời, với chức năng Chronograph chính xác và thiết kế mạnh mẽ.', '12-450x450.jpg', 53),
(27, 'Rolex Daytona', 48000.00, 46000.00, 'Một trong những biểu tượng của Rolex với tính năng Chronograph và thiết kế đặc trưng.', '11-450x450.jpg', 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nam_sinh` date NOT NULL,
  `avt` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `vai_tro` tinytext DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `name`, `ho_ten`, `email`, `nam_sinh`, `avt`, `pass`, `phone`, `vai_tro`) VALUES
(26, 'sinhduong', '', 'sinhduong1508@gmail.com', '0000-00-00', '', '@Sinh15082004.', '', '0'),
(27, 'sinhduong123', '', 'sinhduong1508@mail.com', '0000-00-00', '', '@Sinh15082004.', '', '0'),
(28, 'admin', '', 'sinhduong1508@mail.com', '0000-00-00', '', '@Sinh15082004.', '', '1'),
(29, 'dsads', '', 'sinhdvph39343@fpt.edu.vn', '0000-00-00', '', '@Sinh15082004.', '', '0'),
(30, 'sinhduong', 'Dương Văn Sinh', 'sinhduong1508@gmail.com', '2023-12-16', 'sinh2.jpg', '123', '0865642497', '0'),
(31, 'sinh', '', 'sinhduong1508@gmail.com', '0000-00-00', '', '@Sinh15082004.', '', '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danh_muc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

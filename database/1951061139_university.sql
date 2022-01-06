-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 08:54 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951061139_university`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` int(10) NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` bit(1) DEFAULT NULL,
  `trinhdo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuyenmon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hocham` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hocvi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coquan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(101, 'Nguyen Lan Anh', '1980-01-01', b'0', 'cao học', 'kinh tế', 'thạc sĩ', ' ', 'Đại học Thủy Lợi'),
(102, 'Le Hong Anh', '1976-02-01', b'0', 'đại học', 'công nghệ thông tin', 'tiến sĩ', ' ', 'Đại học Thủy Lợi'),
(103, 'Bui Tuan Anh', '1977-03-09', b'1', 'cao học', 'công nghệ thông tin', 'tiến sĩ', ' ', 'Đại học Thủy Lợi'),
(104, 'Dao Xuan Bach', '1968-07-09', b'1', 'cao học', 'công nghệ thông tin', 'tiến sĩ', ' ', 'Đại học Thủy Lợi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

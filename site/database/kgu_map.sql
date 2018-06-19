-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2018 lúc 11:35 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kgu_map`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(8, 'Ký túc xá', '320A, 320A QL61\r\nVĩnh Hoà Hiệp\r\nChâu Thành\r\ntỉnh Kiên Giang, Việt Nam', 9.913696, 105.144287, NULL),
(7, 'Thư Viện', '320A, 320A QL61\r\nVĩnh Hoà Hiệp\r\nChâu Thành\r\ntỉnh Kiên Giang, Việt Nam', 9.917290, 105.145294, NULL),
(5, 'Khu giảng đường', '320A, 320A QL61\r\nVĩnh Hoà Hiệp\r\nChâu Thành\r\ntỉnh Kiên Giang, Việt Nam', 9.916158, 105.142288, NULL),
(6, 'Khoa Quốc phòng-An ninh', '320A, 320A QL61\r\nVĩnh Hoà Hiệp\r\nChâu Thành\r\ntỉnh Kiên Giang, Việt Nam', 9.916255, 105.143623, NULL),
(9, 'Nhà xe A', '320A, 320A QL61\r\nVĩnh Hoà Hiệp\r\nChâu Thành\r\ntỉnh Kiên Giang, Việt Nam', 9.917006, 105.142029, NULL),
(10, 'Nhà xe B', '320A, 320A QL61\r\nVĩnh Hoà Hiệp\r\nChâu Thành\r\ntỉnh Kiên Giang, Việt Nam', 9.917261, 105.142830, NULL),
(11, 'KGU Book Coffee', 'Vĩnh Hoà Hiệp, Châu Thành, tỉnh Kiên Giang, Việt Nam', 9.918372, 105.144882, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 08, 2021 at 09:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fullname` varchar(45) DEFAULT 'Anonymous',
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `about` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `address`, `phone`, `about`) VALUES
(1, 'tonle', '123', 'Ha Ton Le', NULL, NULL, 'Admin'),
(2, 'leton', '123', 'Ton Ha Le', NULL, NULL, 'Admin'),
(3, 'kimtaehee', '123', 'Kim Tae Hee', NULL, NULL, 'Admin'),
(4, 'hale', 'soweirdpass', 'Ton Ha Le', 'Khuong Viet', '0987654321', 'Nothing!!!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `imgURL` varchar(200) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `price` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `about` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `imgURL`, `status`, `quantity`, `unit`, `price`, `type`, `about`) VALUES
(1, 'G304', '../products/imgs/mouses/G series/G304 (NEW, WIRELESS LIGHTSPEED).webp', 'Available', 20, 'VND', '1.099.000', 'mouse', 'Wireless lightspeed technology'),
(2, 'G304 K/DA', '../products/imgs/mouses/G series/G304 K-DA (NEW, WIRELESS LIGHTSPEED).webp', 'Available', 20, 'VND', '1.099.000', 'mouse', 'Wireless lightspeed technology'),
(3, 'G402 HYPERION FURY', '../products/imgs/mouses/G series/G402 HYPERION FURY (ULTRA-FAST FPS).webp', 'Available', 20, 'VND', '999.000', 'mouse', 'Ultra-fast FPS'),
(4, 'G502 HERO K/DA', '../products/imgs/mouses/G series/G502 HERO K-DA.webp', 'Available', 20, 'VND', '1.799.000', 'mouse', 'HERO Sensor 16K'),
(5, 'G502 HERO', '../products/imgs/mouses/G series/G502 HERO.webp', 'Available', 20, 'VND', '1.799.000', 'mouse', 'HERO Sensor 16K'),
(6, 'G604', '../products/imgs/mouses/G series/G604 (WIRELESS LIGHTSPEED).webp', 'Available', 20, 'VND', '2.499.000', 'mouse', 'Wireless lightspeed technology'),
(7, 'PRO', '../products/imgs/mouses/Pro Series/PRO (WIRELESS).webp', 'Available', 20, 'VND', '3.799.000', 'mouse', 'Wireless'),
(8, 'PRO X', '../products/imgs/mouses/Pro Series/PRO X (SUPERLIGHT).webp', 'Available', 20, 'VND', '3.490.000', 'mouse', 'Superlight'),
(9, 'PRO', '../products/imgs/mouses/Pro Series/PRO.webp', 'Available', 20, 'VND', '1.799.000', 'mouse', 'PRO Gaming Mouse'),
(10, 'G213 PRODIGY', '../products/imgs/keyboards/G-series/g213-prodigy.webp', 'Available', 20, 'VND', '1.099.000', 'keyboard', 'Lightsync RGB'),
(11, 'G413', '../products/imgs/keyboards/G-series/g413.webp', 'Available', 20, 'VND', '2.199.000', 'keyboard', 'Romer-G Tactile Switch'),
(12, 'G512 CARBON', '../products/imgs/keyboards/G-series/g512-carbon.webp', 'Available', 20, 'VND', '2.999.000', 'keyboard', 'Advanced GX Switch'),
(13, 'G613', '../products/imgs/keyboards/G-series/g613.webp', 'Available', 20, 'VND', '2.499.000', 'keyboard', 'Wireless lightspeed Technology'),
(14, 'G813', '../products/imgs/keyboards/G-series/g813.webp', 'Available', 20, 'VND', '4.699.000', 'keyboard', 'Ultra-thin keyboard'),
(15, 'G913 TKL', '../products/imgs/keyboards/G-series/G913 TKL.webp', 'Available', 20, 'VND', '5.699.000', 'keyboard', 'Tenkeyless lightspeed Wireless RGB'),
(16, 'PRO K/DA', '../products/imgs/keyboards/Pro-series/Pro-KDA.webp', 'Available', 20, 'VND', '3.269.000', 'keyboard', 'Lightsync RGB'),
(17, 'PRO X', '../products/imgs/keyboards/Pro-series/pro-X.webp', 'Available', 20, 'VND', '3.799.000', 'keyboard', 'Programmable RGB'),
(18, 'PRO', '../products/imgs/keyboards/Pro-series/pro.webp', 'Available', 20, 'VND', '3.269.000', 'keyboard', 'Tactile Switch'),
(19, 'SWITCH PRO X', '../products/imgs/keyboards/Pro-series/Switch-pro-X.webp', 'Available', 20, 'VND', '1.299.000', 'keyboard', 'DX Switch'),
(20, 'G331', '../products/imgs/headphones/G-series/g331.png', 'Available', 20, 'VND', '1.699.000', 'headphone', '6mm Mic'),
(21, 'G333 K/DA', '../products/imgs/headphones/G-series/g331.png', 'Available', 20, 'VND', '1.299.000', 'headphone', 'Dual Dynamic drivers'),
(22, 'G331', '../products/imgs/headphones/G-series/g331.png', 'Available', 20, 'VND', '1.299.000', 'headphone', 'Multi-device connection'),
(23, 'G331', '../products/imgs/headphones/G-series/g333 kda.png', 'Available', 20, 'VND', '2.099.000', 'headphone', '7.1 Surround Sound Wired Gaming Headset'),
(24, 'G431', '../products/imgs/headphones/G-series/g431.png', 'Available', 20, 'VND', '2.499.000', 'headphone', '7.1 Surround Sound Wired Gaming Headset'),
(25, 'G633s', '../products/imgs/headphones/G-series/g633s.png', 'Available', 20, 'VND', '3.999.000', 'headphone', 'Pro-G audio driver'),
(26, 'G733 K/DA', '../products/imgs/headphones/G-series/g733 kda.png', 'Available', 20, 'VND', '3.999.000', 'headphone', 'Wireless lightspeed technology'),
(27, 'G733', '../products/imgs/headphones/G-series/g733.png', 'Available', 20, 'VND', '3.999.000', 'headphone', 'Wireless lightspeed technology'),
(28, 'PRO X', '../products/imgs/headphones/Pro-series/pro-X.png', 'Available', 20, 'VND', '3.899.000', 'headphone', 'DTS surrounded sound'),
(29, 'PRO', '../products/imgs/headphones/Pro-series/pro.png', 'Available', 20, 'VND', '2.999.000', 'headphone', 'EQ configuration');

-- --------------------------------------------------------

--
-- Table structure for table `products_comment`
--

CREATE TABLE `products_comment` (
  `proc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_img`
--

CREATE TABLE `products_img` (
  `proc_id` int(11) NOT NULL,
  `img_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_img`
--

INSERT INTO `products_img` (`proc_id`, `img_link`) VALUES
(1, '/detail/imgs/mouses/G series/G304 (NEW, WIRELESS LIGHTSPEED).webp'),
(1, '/detail/imgs/mouses/G series/g305-gallery-2.webp'),
(1, '/detail/imgs/mouses/G series/g305-gallery-3.webp'),
(2, '/detail/imgs/mouses/G series/G304 K-DA (NEW, WIRELESS LIGHTSPEED).webp'),
(2, '/detail/imgs/mouses/G series/g304-kda-gallery-2.webp'),
(2, '/detail/imgs/mouses/G series/g304-kda-gallery-3.webp'),
(3, '/detail/imgs/mouses/G series/G402 HYPERION FURY (ULTRA-FAST FPS).webp'),
(3, '/detail/imgs/mouses/G series/g402-hyperion-fury-ultra-fast-fps-gaming-mouse31.webp'),
(3, '/detail/imgs/mouses/G series/g402-hyperion-fury-ultra-fast-fps-gaming-mouse34.webp'),
(4, '/detail/imgs/mouses/G series/G502 HERO K-DA.webp'),
(4, '/detail/imgs/mouses/G series/g502-hero-kda-gallery-02.webp'),
(5, '/detail/imgs/mouses/G series/G502 HERO.webp'),
(5, '/detail/imgs/mouses/G series/g502-hero-gallery-2-nb.webp'),
(5, '/detail/imgs/mouses/G series/g502-hero-gallery-3-nb.webp'),
(6, '/detail/imgs/mouses/G series/G604 (WIRELESS LIGHTSPEED).webp'),
(6, '/detail/imgs/mouses/G series/g604-gallery-2.webp'),
(6, '/detail/imgs/mouses/G series/g604-gallery-3.webp'),
(7, '/detail/imgs/mouses/Pro Series/PRO (WIRELESS).webp'),
(7, '/detail/imgs/mouses/Pro Series/pro-wireless-carbon-gallery-4.webp'),
(7, '/detail/imgs/mouses/Pro Series/pro-wireless-carbon-gallery-5.webp'),
(8, '/detail/imgs/mouses/Pro Series/PRO X (SUPERLIGHT).webp'),
(8, '/detail/imgs/mouses/Pro Series/pro-x-superlight-black-gallery-1.webp'),
(8, '/detail/imgs/mouses/Pro Series/pro-x-superlight-black-gallery-5.webp'),
(9, '/detail/imgs/mouses/Pro Series/PRO.webp'),
(9, '/detail/imgs/mouses/Pro Series/plasma-hero-carbon-gallery-1.webp'),
(9, '/detail/imgs/mouses/Pro Series/plasma-hero-carbon-gallery-2.webp'),
(10, '/detail/imgs/keyboards/G-series/g213-prodigy.webp'),
(10, '/detail/imgs/keyboards/G-series/g213-gallery-2.webp'),
(10, '/detail/imgs/keyboards/G-series/g213-gallery-3.webp'),
(11, '/detail/imgs/keyboards/G-series/g413.webp'),
(11, '/detail/imgs/keyboards/G-series/g413-gallery-2.webp'),
(11, '/detail/imgs/keyboards/G-series/g413-gallery-4.webp'),
(12, '/detail/imgs/keyboards/G-series/g512-carbon.webp'),
(12, '/detail/imgs/keyboards/G-series/g512-backlit-mechanical-gaming-keyboard-12.webp'),
(12, '/detail/imgs/keyboards/G-series/g512-backlit-mechanical-gaming-keyboard-23.webp'),
(13, '/detail/imgs/keyboards/G-series/g613.webp'),
(13, '/detail/imgs/keyboards/G-series/g613-gallery-2.webp'),
(13, '/detail/imgs/keyboards/G-series/g613-gallery-3.webp'),
(14, '/detail/imgs/keyboards/G-series/g813.webp'),
(14, '/detail/imgs/keyboards/G-series/g815-gallery-1.webp'),
(14, '/detail/imgs/keyboards/G-series/g815-gallery-5.webp'),
(15, '/detail/imgs/keyboards/G-series/G913 TKL.webp'),
(15, '/detail/imgs/keyboards/G-series/g915-tkl-gallery-1-carbon.webp'),
(15, '/detail/imgs/keyboards/G-series/g915-tkl-gallery-6-carbon.webp'),
(16, '/detail/imgs/keyboards/Pro-series/Pro-KDA.webp'),
(17, '/detail/imgs/keyboards/Pro-series/pro-X.webp'),
(17, '/detail/imgs/keyboards/Pro-series/pro-x-keyboard-gallery-2.webp'),
(17, '/detail/imgs/keyboards/Pro-series/pro-x-keyboard-gallery-4.webp'),
(18, '/detail/imgs/keyboards/Pro-series/pro.webp'),
(19, '/detail/imgs/keyboards/Pro-series/Switch-pro-X.webp'),
(19, '/detail/imgs/keyboards/Pro-series/pro-x-gallery-2.webp'),
(19, '/detail/imgs/keyboards/Pro-series/pro-x-gallery-3.webp'),
(20, '/detail/imgs/headphones/G-series/g331.png'),
(20, '/detail/imgs/headphones/G-series/g331-gallery-2.webp'),
(20, '/detail/imgs/headphones/G-series/g331-gallery-3.webp'),
(21, '/detail/imgs/headphones/G-series/g333 kda.png'),
(21, '/detail/imgs/headphones/G-series/g333-kda-gallery-1.webp'),
(21, '/detail/imgs/headphones/G-series/g333-kda-gallery-2.webp'),
(22, '/detail/imgs/headphones/G-series/g333.png'),
(22, '/detail/imgs/headphones/G-series/g333-black-gallery-1.webp'),
(22, '/detail/imgs/headphones/G-series/g333-black-gallery-2.webp'),
(23, '/detail/imgs/headphones/G-series/g431.png'),
(23, '/detail/imgs/headphones/G-series/g431-gallery-2.webp'),
(23, '/detail/imgs/headphones/G-series/g431-gallery-3.webp'),
(24, '/detail/imgs/headphones/G-series/g433.png'),
(24, '/detail/imgs/headphones/G-series/g433-gallery-black-1.webp'),
(24, '/detail/imgs/headphones/G-series/g433-gallery-black-2.webp'),
(25, '/detail/imgs/headphones/G-series/g633s.png'),
(25, '/detail/imgs/headphones/G-series/g633s-gallery-1.webp'),
(25, '/detail/imgs/headphones/G-series/g633s-gallery-2.webp'),
(26, '/detail/imgs/headphones/G-series/g733 kda.png'),
(26, '/detail/imgs/headphones/G-series/g733-kda-gallery-1.webp'),
(26, '/detail/imgs/headphones/G-series/g733-kda-gallery-2.webp'),
(27, '/detail/imgs/headphones/G-series/g733.png'),
(27, '/detail/imgs/headphones/G-series/g733-black-gallery-1.webp'),
(27, '/detail/imgs/headphones/G-series/g733-black-gallery-2.webp'),
(28, '/detail/imgs/headphones/Pro-series/pro-X.png'),
(28, '/detail/imgs/headphones/Pro-series/pro-headset-gallery-1.webp'),
(28, '/detail/imgs/headphones/Pro-series/pro-headset-gallery-2.webp'),
(29, '/detail/imgs/headphones/Pro-series/pro.png'),
(29, '/detail/imgs/headphones/Pro-series/pro-headset-gallery-1 (1).webp'),
(29, '/detail/imgs/headphones/Pro-series/pro-headset-gallery-2 (1).webp');

-- --------------------------------------------------------

--
-- Table structure for table `products_spec`
--

CREATE TABLE `products_spec` (
  `proc_id` int(11) NOT NULL,
  `spec1_key` varchar(45) NOT NULL,
  `spec1_value` varchar(45) NOT NULL,
  `spec2_key` varchar(45) NOT NULL,
  `spec2_value` varchar(45) NOT NULL,
  `spec3_key` varchar(45) NOT NULL,
  `spec3_value` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_spec`
--

INSERT INTO `products_spec` (`proc_id`, `spec1_key`, `spec1_value`, `spec2_key`, `spec2_value`, `spec3_key`, `spec3_value`) VALUES
(1, 'CẢM BIẾN HERO', '12.000 DPI', '6 NÚT', 'CÓ THỂ LẬP TRÌNH', '1ms', 'TỐC ĐỘ BÁO CÁO'),
(2, 'CẢM BIẾN HERO', '12.000 DPI', '6 NÚT', 'CÓ THỂ LẬP TRÌNH', '1ms', 'TỐC ĐỘ BÁO CÁO'),
(3, 'CHUYỂN ĐỔI DPI', '250-4000 DPI', '8 NÚT', 'CÓ THỂ LẬP TRÌNH', '1ms', 'TỐC ĐỘ BÁO CÁO'),
(4, 'HERO 25K', 'CHÍNH XÁC NHẤT THẾ GIỚI', '11 NÚT', 'CÓ THỂ LẬP TRÌNH', '5 KHỐI NẶNG 3,6G', 'CÓ THỂ ĐIỀU CHỈNH'),
(5, 'HERO 25K', 'CHÍNH XÁC NHẤT THẾ GIỚI', '11 NÚT', 'CÓ THỂ LẬP TRÌNH', '5 KHỐI NẶNG 3,6G', 'CÓ THỂ ĐIỀU CHỈNH'),
(6, 'HERO 25K', 'LIGHTSPEED 240 GIỜ', '15 NÚT', 'CÓ THỂ LẬP TRÌNH', 'LIGHTSPEED', 'KẾT NỐI BLUETOOTH'),
(7, 'HERO 25K', 'CHÍNH XÁC NHẤT THẾ GIỚI', '1 MS', 'LIGHTSPEED KHÔNG DÂY', '80G', 'TRỌNG LƯỢNG SIÊU NHẸ'),
(8, 'HERO 25K', 'CHÍNH XÁC NHẤT THẾ GIỚI', 'LIGHTSPEED', 'KẾT NỐI BLUETOOTH', '63G', 'TRỌNG LƯỢNG SIÊU NHẸ'),
(9, 'HERO 25K', 'CHÍNH XÁC NHẤT THẾ GIỚI', '400+', 'IPS', '85G', 'TRỌNG LƯỢNG FPS'),
(10, 'NHANH HƠN 4 LẦN', 'SO VỚI BÀN PHÍM TIÊU CHUẨN', 'LIGHTSYNC', 'CHIẾU SÁNG RGB', 'TÍCH HỢP', 'NÚT ĐIỀU KHIỂN PHƯƠNG TIỆN'),
(11, 'USB', 'ĐƯỜNG TRUYỀN', 'CHIẾU SÁNG NỀN', 'CHIẾU SÁNG CHÍNH XÁC', 'ROMER-G TACTILE', 'SWITCH CƠ HỌC'),
(12, 'CỔNG TRUYỀN USB', 'KẾT NỐI NGUỒN VÀ DỮ LIỆU', 'LIGHTSYNC', 'CÓ THỂ TÙY CHỈNH', 'HỢP KIM AL MG', 'ĐƯỢC ANOD HÓA'),
(13, 'LIGHTSPEED', 'KHÔNG DÂY', 'ROMER-G', 'SWITCH NHANH HƠN', '18 THÁNG', 'THỜI GIAN SỬ DỤNG PIN'),
(14, 'LIGHTSYNC', 'RGB THÔNG MINH', 'THẤP', 'SWITCH CHƠI GAME CƠ HỌC', 'SIÊU MỎNG', 'TỔNG CHIỀU CAO 22MM'),
(15, 'LIGHTSPEED', 'KHÔNG DÂY', 'THẤP', 'SWITCH CHƠI GAME CƠ HỌC', 'RÚT GỌN', 'CHIỀU RỘNG 368MM'),
(16, 'GX BROWN', 'SWITCH TACTILE', 'NHỎ GỌN', 'KHÔNG CÓ BÀN PHÍM SỐ', 'CÓ THỂ LẬP TRÌNH', 'LIGHTSYNC RGB'),
(17, 'CÓ THỂ HOÁN ĐỔI', 'SWITCH CHUYÊN NGHIỆP', 'RÚT GỌN', 'THIẾT KẾ NHỎ GỌN', 'LIGHTSYNC', 'CÓ THỂ LẬP TRÌNH'),
(18, 'GX BROWN', 'SWITCH TACTILE', 'NHỎ GỌN', 'KHÔNG CÓ BÀN PHÍM SỐ', 'CÓ THỂ LẬP TRÌNH', 'LIGHTSYNC RGB'),
(19, 'GX BLUE CLICKY', 'NHẤN CHUỘT LÁCH CÁCH', 'GX RED LINEAR', 'NHẤN PHÍM YÊN TĨNH, ÊM ÁI', 'GX BROWN TACTILE', 'NHẸ NHÀNG, YÊN TĨNH'),
(20, 'MÀNG LOA 50 mm', 'ÂM THANH CHI TIẾT', 'MIC 6 mm', 'ÂM THANH TO, RÕ RÀNG', 'ĐA NỀN TẢNG', 'HỖ TRỢ NHIỀU THIẾT BỊ'),
(21, 'KẾT NỐI ĐA THIẾT BỊ', 'ĐẦU NỐI USB-C', 'MÀNG LOA ĐỘNG KÉP', 'ÂM TRẦM RÕ RÀNG', 'CAO CẤP THOẢI MÁI', 'ĐẦU MÚT SILICON'),
(22, 'KẾT NỐI ĐA THIẾT BỊ', 'ĐẦU NỐI USB-C', 'MÀNG LOA ĐỘNG KÉP', 'ÂM TRẦM RÕ RÀNG', 'CAO CẤP THOẢI MÁI', 'ĐẦU MÚT SILICON'),
(23, 'MÀNG LOA 50 mm', 'ÂM THANH LỚN', 'DTS HEADPHONE:X 2.0', 'ÂM THANH THẾ HỆ MỚI', 'MIC 6 mm', 'ÂM THANH RÕ RÀNG'),
(24, '40 mm', 'MÀNG LOA PRO-G', 'TAI NGHE DTS-X', 'ÂM THANH 3D CÓ ĐỊNH HƯỚNG', 'DISCORD', 'ĐƯỢC CHỨNG NHẬN'),
(25, 'PRO-G 50 mm', 'ĐỘ MÉO THẤP', 'LIGHTSYNC RGB', 'CÓ THỂ TÙY CHỈNH', 'DTS HEADPHONE:X 2.0', 'ÂM THANH THẾ HỆ MỚI'),
(26, 'KHÔNG DÂY', 'KHẢ NĂNG KẾT NỐI LIGHTSPEED', 'CHIẾU SÁNG HƯỚNG RA PHÍA TRƯỚC', 'LIGHTSYNC TOÀN DẢI', 'MÀU SẮC RỰC RỠ', '4 MÀU'),
(27, 'KHÔNG DÂY', 'KHẢ NĂNG KẾT NỐI LIGHTSPEED', 'CHIẾU SÁNG HƯỚNG RA PHÍA TRƯỚC', 'LIGHTSYNC TOÀN DẢI', 'MÀU SẮC RỰC RỠ', '4 MÀU'),
(28, 'BLUE VOICE', 'CÔNG NGHỆ MIC', 'CAO SU NON', 'MIẾNG ĐỆM THOẢI MÁI', 'THIẾT KẾ BỀN BỈ', 'THÉP NHÔM CAO CẤP'),
(29, 'PRO-G 50 mm', 'MÀNG LOA CHÍNH XÁC', 'ĐẲNG CẤP CHUYÊN GIA', 'MICRO', 'TINH CHỈNH CHUYÊN NGHIỆP', 'CẤU HÌNH EQ');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  `date_completed` datetime DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tran_products`
--

CREATE TABLE `tran_products` (
  `tran_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `phone`, `address`, `about`) VALUES
(1, 'Ha Ton', 'Le', 'tonle', '123456789', '0123456789', '71 Khuong Viet', 'No thing about!!!'),
(3, 'Ha Ton', 'Le', 'tonle', '123', '0123456789', '71 Khuong Viet', 'No thing about!!!'),
(4, 'Ha Ton', 'Le', 'tonle', '123', '0123456789', '71 Khuong Viet', 'No thing about!!!'),
(5, 'Ha Ton', 'Le', 'tonle', '123', '0123456789', '71 Khuong Viet', 'No thing about!!!'),
(6, 'Ha Ton', 'Le', 'tonle', '123', '0123456789', '71 Khuong Viet', 'No thing about!!!'),
(7, 'Ha Ton', 'Le', 'tonle', '123', '0123456789', '71 Khuong Viet', 'No thing about!!!'),
(10, 'Mew', 'Two', 'khaikute', '123456', '0386493867', '321 Bach Dang', 'ahiahi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_comment`
--
ALTER TABLE `products_comment`
  ADD KEY `fkey_comment1` (`proc_id`),
  ADD KEY `fkey_comment2` (`user_id`);

--
-- Indexes for table `products_img`
--
ALTER TABLE `products_img`
  ADD KEY `fkey_img` (`proc_id`);

--
-- Indexes for table `products_spec`
--
ALTER TABLE `products_spec`
  ADD KEY `fkey_spec` (`proc_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid_ref` (`userid`);

--
-- Indexes for table `tran_products`
--
ALTER TABLE `tran_products`
  ADD PRIMARY KEY (`tran_id`,`pro_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products_comment`
--
ALTER TABLE `products_comment`
  ADD CONSTRAINT `fkey_comment1` FOREIGN KEY (`proc_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkey_comment2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products_img`
--
ALTER TABLE `products_img`
  ADD CONSTRAINT `fkey_img` FOREIGN KEY (`proc_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products_spec`
--
ALTER TABLE `products_spec`
  ADD CONSTRAINT `fkey_spec` FOREIGN KEY (`proc_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `userid_ref` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tran_products`
--
ALTER TABLE `tran_products`
  ADD CONSTRAINT `pro_id` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tran_id` FOREIGN KEY (`tran_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

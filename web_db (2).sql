-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 06, 2021 lúc 04:05 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
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
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `address`, `phone`, `about`) VALUES
(1, 'tonle', '123', 'Ha Ton Le', NULL, NULL, 'Admin'),
(2, 'leton', '123', 'Ton Ha Le', NULL, NULL, 'Admin'),
(3, 'kimtaehee', '123', 'Kim Tae Hee', NULL, NULL, 'Admin'),
(4, 'hale', 'soweirdpass', 'Ton Ha Le', 'Khuong Viet', '0987654321', 'Nothing!!!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
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
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `imgURL`, `status`, `quantity`, `unit`, `price`, `type`, `about`) VALUES
(1, 'H390 USB COMPUTER HEADSET', 'https://resource.logitech.com/w_900,h_900,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/en/products/headsets/h390-usb-headset/gallery/h390-gallery-01.png?v=1', 'Available', 100, 'VND', '849.000', 'headphone', 'From Logitech...'),
(2, 'ERGO M575', 'https://resource.logitech.com/w_900,h_900,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/en/products/mice/ergo-m575/gallery/ergo-m575-gallery-graphite-1.png?v=1', 'Available', 20, 'VND', '1.199.000', 'mouse', 'Good'),
(3, 'TAI NGHE SKULLCANDY HESH EVO', 'https://cello.vn/image/cache/catalog/Cello/SanPham/Tai%20Nghe/Skullcandy/Riff%20Wireless/SkullCandyRiffWireless_Gray_2-500x500.jpg', 'Available', 12, 'VND', '320.000', 'headphone', 'aaaa'),
(4, 'MX ANYWHERE 3', './static/images/products/mouse.png', 'Available', 20, 'USD', '79.99', 'mouse', 'Not available'),
(5, 'MX ANYWHERE 3', './static/images/products/grid-3.jpg', 'Available', 21, 'USD', '10.35', 'mouse', 'Nice Mouse'),
(6, 'TAI NGHE SKULLCANDY HESH EVO - 92 BLUE', 'https://cello.vn/image/cache/catalog/Cello/SanPham/Tai%20Nghe/Skullcandy/Hesh%20Evo/HeshEvo_92Blue_1-500x500.jpg', 'Not Available', 0, 'VND', '3050000', 'headphone', ''),
(7, 'LOGITECH ZONE WIRELESS', 'https://resource.logitech.com/w_900,h_900,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/en/products/headsets/zone-wireless-headset/gallery/zone-wireless-gallery-01.png?v=1', 'Not Available', 0, 'VND', '0', 'headphone', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
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
-- Cấu trúc bảng cho bảng `tran_products`
--

CREATE TABLE `tran_products` (
  `tran_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `phone`, `address`, `about`) VALUES
(1, 'Ha Le', 'Le Ton', 'tonle', '123456789', '0123456789', '71 Khuong Viet', 'No thing about!!!'),
(3, 'TonLe', 'TonLe', 'tonle', '123', '0987654321', 'Binh Dinh', '31/5/2021 10:25 PM'),
(4, 'Jack', 'Johnson', 'jack', '123', '0987654321', 'USA', 'handsome'),
(5, 'John', 'London', 'john', '123', '0123456789', 'USA', '11111'),
(6, 'Washington', 'DC', 'le.hahatonle', '123', '0567894321', 'North American', ''),
(7, 'James', 'Wiscousin', 'james', '123', '0123456789', 'USA', '');


--
-- Ghi lại binh luan cua nguoi dung
--

CREATE TABLE `products_comment` (
  `proc_id` int(11)   NOT NULL,
  `user_id` int(11)   NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Ghi lại binh luan cua nguoi dung
--

CREATE TABLE `products_img` (
  `proc_id` int(11)   NOT NULL,
  `img_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Ghi lại binh luan cua nguoi dung
--

CREATE TABLE `products_spec` (
  `proc_id` int(11)   NOT NULL,
  
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid_ref` (`userid`);

--
-- Chỉ mục cho bảng `tran_products`
--
ALTER TABLE `tran_products`
  ADD PRIMARY KEY (`tran_id`,`pro_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `userid_ref` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tran_products`
--
ALTER TABLE `tran_products`
  ADD CONSTRAINT `pro_id` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tran_id` FOREIGN KEY (`tran_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

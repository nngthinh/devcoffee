-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 31, 2020 lúc 04:59 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `devcoffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  `firstdate` date NOT NULL,
  `lastdate` date DEFAULT NULL,
  `walletid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `fname`, `lname`, `gender`, `birthday`, `email`, `phone`, `address`, `admin`, `firstdate`, `lastdate`, `walletid`) VALUES
(10001, 'phuc', '123', 'phuc', 'hoang', 1, '2020-12-10', 'p@gmail.com', '0833288624', 'An giang', 0, '2020-12-10', '2020-12-31', 1),
(10002, 'thinh', '123', 'thinh', 'hoang', 0, '2020-12-10', 'p@gmail.com', '0833288624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 2),
(10004, 'le', '123', 'a1', 'nguyen van', 0, '2020-12-10', 'p@gmail.com', '0833288624', 'An giang Châu ĐốcCC', 1, '2020-07-10', '2020-12-31', NULL),
(10005, 'b', '123', 'b', 'hoang', 1, '2020-12-10', 'p@gmail.com', '0833288624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 3),
(10006, 'c', '123', 'c', 'hoang', 1, '2020-12-10', 'f@gmail.com', '08332', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10008, 'e', '123', 'e', 'hoang', 0, '2020-12-10', 'ece@gmail.com', '088624', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10009, 'f', '123', 'f', 'hoang', 0, '2020-12-10', 'rev@gmail.com', '0886241231', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 5),
(10010, 'g', '123', 'Lê Hoàngg', 'Phúc', 0, '2020-12-10', 'ge@gmail.com', '08864', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10011, 'h', '123', 'h', 'hoang', 1, '2020-12-10', 'trb@gmail.com', '0843288624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 6),
(10012, 'i', '123', 'i', 'hoang', 1, '2020-12-10', 'bvtr@gmail.com', '0833265424', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10013, 'j', '123', 'j', 'hoang', 1, '2020-03-11', 'rtbtr@gmail.com', '0833544624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 7),
(10014, 'k', '123', 'k', 'hoang', 1, '2020-08-10', 'grt@gmail.com', '03328344624', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10016, 'm', '123', 'm', 'hoang', 0, '2019-02-10', 'yjt@gmail.com', '08332886532', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10017, 'n', '123', 'n', 'hoang', 1, '2020-02-13', 'ytn@gmail.com', '0833288625', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 9),
(10019, 'p', '123', 'p', 'hoang', 1, '2020-11-10', 'ntyn@gmail.com', '0833532886', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 10),
(10020, 'th', '123', 'thinh', 'hoang', 0, '2020-03-10', 'p@gmail.com', '0833288624', 'An giang Châu Đốc', 1, '2020-03-11', '2020-12-21', NULL),
(1000001, 'thinh.doanngoc', '456', 'Đoàn Ngọc', 'Thịnh', 1, '2000-12-03', 'thinhdoanngoc@gmail.com', '0919372558', 'Ho Chi Minh City', 0, '2020-12-30', '2020-12-31', NULL),
(1000002, 'manager', '123', 'ABC', 'DEF', 0, '2020-12-31', 'abcdef@gmail.com', '0912345678', 'Ho Chi Minh City', 1, '2020-12-30', '2020-12-31', NULL),
(1000003, '1', '1', '1', '1', 0, '0000-00-00', '1@gmail.com', '1', '1', 0, '2020-12-31', '2020-12-31', NULL),
(1000004, 'trinh', '123', 'Huynh Thin', 'Trinh', 1, '0000-00-00', 'htt@abc.com', '0912345678', 'Ho Chi Minh City', 0, '2020-12-31', '2020-12-31', NULL),
(1000005, 'tam', '123', 'Pham Van A', 'Tam ', 1, '1970-01-01', 'abc@gmail.com', '99999999', 'Ho Chi Minh City', 0, '2020-12-31', '2020-12-31', NULL),
(1000006, 'abc', '123', 'ABC', 'DBEBE', 1, '2020-12-31', 'abc@gmail.com', '09123913231', 'aBC', 1, '2020-12-31', '2020-12-31', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `image`, `price`) VALUES
(1, 'Bạc sỉu', 'Cà phê Việt Nam', './images/img7.webp', 32000),
(2, 'Cà phê đen', 'Cà phê Việt Nam', './images/img8.webp', 32000),
(3, 'Americano', 'Cà phê máy', './images/img10.webp', 45000),
(4, 'Cappuccino', 'Cà phê máy', './images/img11.webp', 45000),
(5, 'Latte', 'Cà phê máy', './images/img14.webp', 45000),
(6, 'Cold Brew truyền thống', 'Cold Brew', './images/img16.webp', 45000),
(7, 'Cold Brew phúc bồn tử', 'Cold Brew', './images/img17.webp', 50000),
(8, 'Trà Oolong vải', 'Trà trái cây', './images/img19.webp', 45000),
(9, 'Trà Oolong hạt sen', 'Trà trái cây', './images/img20.webp', 42000),
(10, 'Trà Khoai môn', 'Trà sữa macchiato', './images/img22.webp', 42000),
(11, 'Trà lài macchiato', 'Trà sữa macchiato', './images/img23.webp', 42000),
(12, 'Trà cà phê đá xay', 'Cà phê đá xay', './images/img28.webp', 59000),
(13, 'Cà phê đá xay', 'Cà phê đá xay', './images/img29.webp', 59000),
(14, 'Chanh sả đá xay', 'Thức uống trái cây', './images/img30.webp', 45000),
(15, 'Phúc bồn tử cam đá xay', 'Thức uống trái cây', './images/img31.webp', 55000),
(16, 'Chung ta khong thuoc ve nhau', '123', '123', 123);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000007;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

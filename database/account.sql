-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 08:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devcoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  `firstdate` date NOT NULL,
  `lastdate` date DEFAULT NULL,
  `walletid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `fname`, `lname`, `gender`, `birthday`, `email`, `phone`, `address`, `admin`, `firstdate`, `lastdate`, `walletid`) VALUES
(10001, 'phuc', '123', 'phuc', 'hoang', 1, '2020-12-10', 'p@gmail.com', '0833288624', 'An giang', 0, '2020-12-10', '2020-12-31', 1),
(10002, 'thinh', '123', 'thinh', 'hoang', 1, '2020-12-10', 'p@gmail.com', '0833288624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 2),
(10003, '', '123', 'thinh', 'hoang', 0, '2020-12-10', 'p@gmail.com', '0833288624', 'An giang Châu Đốc', 0, '2020-04-10', '0000-00-00', 2),
(10004, 'le', '123', 'a', 'nguyen van', 1, '2020-12-10', 'p@gmail.com', '0833288624', 'An giang Châu Đốc', 1, '2020-07-10', '2020-08-31', NULL),
(10005, 'b', '123', 'b', 'hoang', 0, '2020-12-10', 'p@gmail.com', '0833288624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 3),
(10006, 'c', '123', 'c', 'hoang', 1, '2020-12-10', 'f@gmail.com', '08332', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10007, 'd', '123', 'd', 'hoang', 1, '2020-12-10', 'ecc@gmail.com', '082624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 4),
(10008, 'e', '123', 'e', 'hoang', 0, '2020-12-10', 'ece@gmail.com', '088624', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10009, 'f', '123', 'f', 'hoang', 1, '2020-12-10', 'rev@gmail.com', '088624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 5),
(10010, 'g', '123', 'g', 'hoang', 1, '2020-12-10', 'ge@gmail.com', '08864', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10011, 'h', '123', 'h', 'hoang', 1, '2020-12-10', 'trb@gmail.com', '0843288624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 6),
(10012, 'i', '123', 'i', 'hoang', 1, '2020-12-10', 'bvtr@gmail.com', '0833265424', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10013, 'j', '123', 'j', 'hoang', 0, '2020-03-11', 'rtbtr@gmail.com', '0833544624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 7),
(10014, 'k', '123', 'k', 'hoang', 1, '2020-08-10', 'grt@gmail.com', '03328344624', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10015, 'l', '123', 'l', 'hoang', 1, '2020-12-10', 'tbhtr@gmail.com', '0853538624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 8),
(10016, 'm', '123', 'm', 'hoang', 0, '2019-02-10', 'yjt@gmail.com', '08332886532', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10017, 'n', '123', 'n', 'hoang', 1, '2020-02-13', 'ytn@gmail.com', '0833288625', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 9),
(10018, 'o', '123', 'o', 'hoang', 0, '2020-02-10', 'mum@gmail.com', '0833288536', 'An giang Châu Đốc', 1, '2020-12-10', '2020-12-31', NULL),
(10019, 'p', '123', 'p', 'hoang', 1, '2020-11-10', 'ntyn@gmail.com', '083353288624', 'An giang Châu Đốc', 0, '2020-12-10', '2020-12-31', 10),
(10020, 'th', '123', 'thinh', 'hoang', 0, '2020-03-10', 'p@gmail.com', '0833288624', 'An giang Châu Đốc', 1, '2020-03-11', '2020-12-21', NULL),
(10021, 'dc', '123', 'phuc', 'hoang', 1, '2020-07-11', 'p@gmail.com', '0833288624', 'An giang', 0, '2020-12-10', '2020-12-31', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 08:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Code` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Code`, `Username`, `Password`) VALUES
(1, 'fruits', '123456'),
(2, 'vegetables', '1234567'),
(3, 'eating', '12345678'),
(4, 'drinks', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `billdetail`
--

CREATE TABLE `billdetail` (
  `BillCode` int(11) NOT NULL,
  `ItemCode` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billdetail`
--

INSERT INTO `billdetail` (`BillCode`, `ItemCode`, `Amount`) VALUES
(1, 21, 1),
(1, 17, 1),
(1, 10, 1),
(2, 16, 1),
(2, 14, 1),
(3, 2, 2),
(3, 4, 1),
(3, 11, 1),
(4, 26, 1),
(6, 20, 1),
(7, 16, 1),
(7, 21, 1),
(9, 20, 1),
(10, 2, 1),
(10, 11, 1),
(10, 10, 1),
(10, 20, 1),
(10, 9, 1),
(11, 23, 1),
(11, 1, 1),
(11, 2, 1),
(11, 13, 1),
(12, 14, 1),
(12, 2, 1),
(12, 10, 1),
(14, 2, 1),
(16, 41, 1),
(16, 6, 1),
(16, 2, 1),
(17, 4, 1),
(17, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `Code` int(11) NOT NULL,
  `PaymentMethod` varchar(100) NOT NULL,
  `DeliveryMethod` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `TotalPrice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`Code`, `PaymentMethod`, `DeliveryMethod`, `Date`, `TotalPrice`) VALUES
(1, '', '', '2019-08-20', '0'),
(2, '', '', '2019-12-23', '0'),
(3, '', '', '2019-08-20', '0'),
(4, 'Money order', 'Saving delivery(3-4 days)', '2019-12-23', '0'),
(5, '', '', '0000-00-00', '0'),
(6, 'Bank transfer', 'Fast delivery(1-2 days)', '2019-08-20', '0'),
(7, 'Bank transfer', 'Saving delivery(3-4 days)', '2019-08-20', '0'),
(8, '', '', '0000-00-00', '0'),
(9, 'Money order', 'Fast delivery(1-2 days)', '2019-08-20', '360000'),
(10, 'Bank transfer', 'Fast delivery(1-2 days)', '2019-12-23', '2147483647'),
(11, 'Money order', 'Fast delivery(1-2 days)', '2019-12-23', '2147483647'),
(12, 'Cash', 'Saving delivery(3-4 days)', '2019-08-20', '30710970000'),
(13, '---Select---', '---Select---', '2019-08-20', '0'),
(14, 'Cash', 'Fast deliver(1-2 days)', '2019-12-23', '30700000000'),
(15, 'Cash', 'Fast deliver(1-2 days)', '0000-00-00', '0'),
(16, 'Cash', 'Fast deliver(1-2 days)', '2019-10-17', '3070710000'),
(17, 'Money order', 'Saving deliver(4-5 days)', '2019-10-22', '1460000'),
(18, 'Cash', 'Fast deliver(1-2 days)', '0000-00-00', '0'),
(19, 'Cash', 'Fast deliver(1-2 days)', '0000-00-00', '0'),
(20, 'Cash', 'Fast deliver(1-2 days)', '0000-00-00', '0'),
(21, 'Cash', 'Fast deliver(1-2 days)', '0000-00-00', '0'),
(22, 'Cash', 'Fast deliver(1-2 days)', '0000-00-00', '0'),
(23, 'Cash', 'Fast deliver(1-2 days)', '0000-00-00', '0'),
(24, 'Cash', 'Fast deliver(1-2 days)', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Code` int(11) NOT NULL,
  `BillCode` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Phonenumber` int(11) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Code`, `BillCode`, `Name`, `Phonenumber`, `Address`) VALUES
(25, 1, 'test6', 0, 'ikojik6eryg'),
(26, 2, 'tesst7', 12345678, '12345678'),
(27, 3, 'goodbacon', 2147483647, 'daasf1324sad'),
(28, 4, 'namae', 2147483647, 'daasf1324sad'),
(29, 5, 'vanh1112', 123456123, 'daasf1324sad'),
(30, 6, 'yoi', 2147483647, 'wrgdcwef'),
(31, 7, 'nmae', 281234981, 'ajbfifw'),
(33, 9, 'namae', 2147483647, '123ppp456ppp'),
(34, 10, 'namae', 2147483647, '123ppp456ppp'),
(35, 11, 'namae', 123456789, 'asjgfkeuwajg'),
(37, 13, 'goodbacon', 2147483647, 'daasf1324sad'),
(38, 14, 'namae', 345678760, 'daasf1324sad'),
(39, 15, 'goodbacon', 2147483647, 'daasf1324sad'),
(41, 17, 'vanh2', 277747533, 'taki taki'),
(42, 18, 'trang', 987654234, 'dffb '),
(43, 19, 'trang', 987654234, 'dffb '),
(44, 20, 'trang', 987654234, 'dffb '),
(45, 21, 'trang', 987654234, 'dffb '),
(46, 22, 'trang', 987654234, 'dffb '),
(47, 23, 'trang', 987654234, 'dffb '),
(48, 24, 'trang', 987654234, 'dffb ');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Code` int(11) NOT NULL,
  `Type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Code`, `Type`) VALUES
(1, 'US fruits'),
(2, 'Australian fruits'),
(3, 'New Zealand fruits'),
(4, 'Korean fruits'),
(5, 'Other countries fruits'),
(6, 'Vegetables'),
(7, 'Cakes and candies'),
(8, 'Nutrition nuts'),
(9, 'Wine'),
(10, 'Nutrition drinks');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Code` int(11) NOT NULL,
  `ItemCode` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Item` varchar(200) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Code`, `ItemCode`, `Image`, `Item`, `Price`) VALUES
(1, 8, '1hanh-nhan-mat-ong.jpg', 'Honey almonds', 980000),
(2, 1, 'dua-hau-vo-vang.jpg', 'Super water melon', 3070000000),
(4, 8, '1le-say.jpg', 'Dried pears', 690000),
(5, 8, '1ly-chua-den-soko.jpg', 'Black reason', 440000),
(6, 8, '1macca-vo-soko.jpg', 'Soko macca', 710000),
(7, 8, '1nho-kho-nguyen-canh-uc.jpg', 'Australian raisins', 660000),
(8, 8, '1oc-cho-soko.jpg', 'Soko walnuts', 1980000),
(9, 1, '2cherry-my.jpg', 'US cherry', 2750000),
(10, 3, '2cherry-new-zealand.jpg', 'New Zealand cherry', 1670000),
(11, 2, '2cherry-uc.jpg', 'Australian cherry', 2630000),
(12, 4, '2dau-tay-han-quoc.jpg', 'Korean strawberry', 770000),
(13, 1, '2dau-tay-my.jpg', 'US strawberry', 900000),
(14, 5, '2dua-luoi-taki-nhat.jpg', 'Taki melon', 9300000),
(15, 4, '2hong-deo-han-quoc.jpg', 'Korean persimmons', 15000),
(16, 3, '2kiwi-vang-new-zealand.jpg', 'New Zealand yellow kiwi', 1800000),
(17, 3, '2kiwi-xanh-new-zealand.jpg', 'New Zealand green kiwi', 5800000),
(18, 4, '2le-han-quoc.jpg', 'Korean pear ', 700000),
(19, 5, '2Le-ma-hong-Nam-Phi.jpg', 'South African rosy pear', 1200000),
(20, 5, '2mang-cut-thai.jpg', 'Thailand mangosteen', 360000),
(21, 2, '2nho-den-autumnroyal.jpg', 'Autumnroyal grapes', 890000),
(22, 4, '2nho-mau-don-han-quoc.jpg', 'Korean peony grapes', 480000),
(23, 1, '2nho-ngon-tay-my.jpg', 'US finger grapes', 90000),
(24, 1, '2tao_envy_my.jpg', 'US Envy apple', 9000000),
(25, 1, '2tao-ambrosia.jpg', 'Ambrosia apple', 90000000),
(26, 3, '2tao-posy-new-zealand.jpg', 'New Zealand Posy apple', 3700000),
(27, 1, '2tao-xanh-my.jpg', 'US green apple', 629500),
(28, 1, '2thanh-long-vang-ecuador.jpg', 'Ecuador dragon fruit', 33009000),
(29, 1, '2viet_quat.jpg', 'US blueberry', 6200000),
(30, 7, '3-banh-dau-do.jpg', 'Red bean cake', 790000),
(31, 7, '3-banh-dau-xanh-han-quoc.jpg', 'Green bean cake', 6900000),
(32, 7, '3-banh-sua-chua-horsh.jpg', 'Yogurt cake', 9000000),
(33, 7, '3-banh-trung-nuong-vi-ca.jpg', 'Fish cake', 360000),
(34, 7, '3-banh-yen-mach-han-quoc.jpg', 'Oat cake', 19999000),
(35, 9, '3ST-Remy.jpg', 'ST Remy wine', 9999000),
(36, 10, '3sua-gao-han-quoc.jpg', 'Rice milk', 2980000),
(37, 10, '3SUA-OC-CHO-HANH-NHAN.jpg', 'Walnut milk', 30299000),
(38, 6, 'kale.jpg', 'Kale', 1200000),
(39, 6, 'broccoli.jpg', 'Broccoli', 8690000),
(41, 0, '', 'Kale', 0),
(45, 10, 'tigernut.jpg', 'Tigernut milk', 70902000),
(46, 0, 'kale.jpg', 'Kale', 1200000),
(47, 6, 'kale.jpg', 'Kale', 1200000),
(48, 0, 'kale.jpg', 'Kale', 1200000),
(49, 0, 'kale.jpg', 'Kale', 1200000),
(50, 0, 'kale.jpg', 'Kale', 1200000),
(51, 0, 'kale.jpg', 'Kale', 1200000),
(52, 0, 'kale.jpg', 'Kale', 1200000),
(53, 0, '', '', 0),
(54, 0, '', '', 0),
(55, 6, 'celery.jpg', 'Celery', 32000000);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `Code` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `PhoneNumber` char(10) NOT NULL,
  `Email` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`Code`, `Username`, `Password`, `PhoneNumber`, `Email`) VALUES
(1, 'vanh', '123', '', ''),
(2, 'vanh1', '1234', '', ''),
(3, 'vanh2', '12345', '0277747533', 'abc@gmail.com'),
(7, 'vanh13', '654321', '', ''),
(8, '12345tr', '123456789', '0123456123', ''),
(9, '12345tr', '123456789', '0123456123', ''),
(10, '12345tr', '123456789', '0123456123', ''),
(11, '12345678', '1234567', '0277747533', 'abc@gmail.com'),
(12, 'nobody', 'nobody', '0123456765', 'abcd@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Code`),
  ADD UNIQUE KEY `BillCode` (`BillCode`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

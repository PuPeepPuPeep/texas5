-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 02:36 PM
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
-- Database: `texas5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` varchar(11) NOT NULL,
  `A_Password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_Password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_ID` int(11) NOT NULL,
  `F_Date` date DEFAULT current_timestamp(),
  `F_Text` varchar(200) NOT NULL,
  `M_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_ID`, `F_Date`, `F_Text`, `M_ID`) VALUES
(1, '2020-11-04', 'Test', 1),
(2, '2020-11-04', 'บ่มีอิหยังมาพังทล๊ายยยยยยย', 1),
(3, '2020-11-05', 'สวัส ดีคร้าบบ', 4),
(4, '2020-11-07', 'จัดมาดิ้\r\nเบิ้มๆน่ะ\r\nคือลือน่ะ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `H_ID` int(11) NOT NULL,
  `H_Date` timestamp NULL DEFAULT current_timestamp(),
  `M_ID` int(11) NOT NULL,
  `O_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`H_ID`, `H_Date`, `M_ID`, `O_ID`) VALUES
(4, '2020-11-01 12:53:02', 1, 5),
(5, '2020-11-01 12:53:02', 1, 6),
(6, '2020-11-01 12:53:02', 1, 7),
(7, '2020-11-01 12:53:02', 1, 8),
(8, '2020-11-01 12:53:02', 1, 9),
(9, '2020-11-01 12:53:02', 1, 10),
(10, '2020-11-01 12:53:02', 1, 11),
(11, '2020-11-01 12:53:02', 1, 12),
(12, '2020-11-01 12:53:02', 1, 13),
(19, '2020-11-01 12:53:13', 1, 5),
(20, '2020-11-01 12:53:13', 1, 6),
(21, '2020-11-01 12:53:13', 1, 7),
(22, '2020-11-01 12:53:13', 1, 8),
(23, '2020-11-01 12:53:13', 1, 9),
(24, '2020-11-01 12:53:13', 1, 10),
(25, '2020-11-01 12:53:13', 1, 11),
(26, '2020-11-01 12:53:13', 1, 12),
(27, '2020-11-01 12:53:13', 1, 13),
(34, '2020-11-01 13:48:18', 1, 14),
(35, '2020-11-01 13:48:18', 1, 15),
(37, '2020-11-01 13:56:18', 1, 16),
(38, '2020-11-01 13:56:18', 1, 17),
(39, '2020-11-04 08:47:33', 1, 18),
(40, '2020-11-04 08:47:33', 1, 19),
(42, '2020-11-04 08:50:12', 1, 20),
(43, '2020-11-04 08:52:55', 1, 21),
(44, '2020-11-04 08:52:55', 1, 22),
(46, '2020-11-04 08:54:40', 1, 23),
(47, '2020-11-05 08:37:10', 1, 24),
(48, '2020-11-05 08:38:08', 1, 25),
(49, '2020-11-05 08:38:08', 1, 26),
(50, '2020-11-05 08:38:08', 1, 27),
(51, '2020-11-05 08:39:15', 1, 28),
(52, '2020-11-05 08:39:15', 1, 29),
(53, '2020-11-05 08:39:15', 1, 30),
(54, '2020-11-05 14:17:45', 4, 31),
(55, '2020-11-05 14:17:45', 4, 32),
(56, '2020-11-06 16:20:55', 1, 33),
(57, '2020-11-06 16:20:55', 1, 34),
(58, '2020-11-06 16:20:55', 1, 35),
(59, '2020-11-06 16:20:55', 1, 36),
(63, '2020-11-06 16:24:57', 1, 37),
(64, '2020-11-07 12:47:25', 1, 38),
(65, '2020-11-07 12:51:21', 1, 39),
(66, '2020-11-07 12:51:21', 1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `M_ID` int(11) NOT NULL,
  `M_Username` varchar(50) NOT NULL,
  `M_Password` varchar(50) NOT NULL,
  `M_Name` varchar(100) NOT NULL,
  `M_Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`M_ID`, `M_Username`, `M_Password`, `M_Name`, `M_Address`) VALUES
(1, 'user', '1111', 'user', '1234'),
(2, '', '', '<br /><b>Notice</b>:  Undefined index: P_ID in <b>C:xampphtdocs	exas5edit.php</b> on line <b>14</b><', ''),
(3, 'user5', '5555', 'user5', 'abcd'),
(4, 'mhee', '1111', 'หมีเหงา', 'บ้าน');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `M_ID` int(11) NOT NULL,
  `O_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_ID`, `P_ID`, `M_ID`, `O_status`) VALUES
(1, 3, 3, 0),
(2, 2, 3, 0),
(3, 3, 3, 0),
(4, 2, 3, 0),
(5, 3, 1, 1),
(6, 3, 1, 1),
(7, 3, 1, 1),
(8, 2, 1, 1),
(9, 11, 1, 1),
(10, 2, 1, 1),
(11, 2, 1, 1),
(12, 16, 1, 1),
(13, 2, 1, 1),
(14, 11, 1, 1),
(15, 15, 1, 1),
(16, 3, 1, 1),
(17, 3, 1, 1),
(18, 3, 1, 1),
(19, 2, 1, 1),
(20, 3, 1, 1),
(21, 2, 1, 1),
(22, 3, 1, 1),
(23, 3, 1, 1),
(24, 2, 1, 1),
(25, 2, 1, 1),
(26, 3, 1, 1),
(27, 16, 1, 1),
(28, 3, 1, 1),
(29, 2, 1, 1),
(30, 4, 1, 1),
(31, 3, 4, 1),
(32, 2, 4, 1),
(33, 22, 1, 1),
(34, 23, 1, 1),
(35, 2, 1, 1),
(36, 34, 1, 1),
(37, 32, 1, 1),
(38, 38, 1, 1),
(39, 19, 1, 1),
(40, 27, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_ID` int(11) NOT NULL,
  `Pay_price` int(11) NOT NULL,
  `M_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_ID`, `Pay_price`, `M_ID`) VALUES
(1, 17034, 1),
(2, 1666, 1),
(3, 9645, 1),
(4, 555, 1),
(5, 2110, 1),
(6, 11356, 1),
(7, 0, 1),
(8, 6233, 1),
(9, 5678, 1),
(10, 6233, 1),
(11, 5678, 1),
(12, 555, 1),
(13, 15323, 1),
(14, 7467, 1),
(15, 6233, 4),
(16, 27825, 1),
(17, 19900, 1),
(18, 4750, 1),
(19, 16180, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_ID` int(11) NOT NULL,
  `P_name` varchar(100) NOT NULL,
  `P_price` int(11) NOT NULL,
  `P_img` varchar(200) NOT NULL,
  `A_ID` varchar(11) NOT NULL,
  `T_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_ID`, `P_name`, `P_price`, `P_img`, `A_ID`, `T_ID`) VALUES
(19, 'CPU (ซีพียู) AMD AM4 RYZEN 5 5600X 3.7 GHz', 10590, 'cpu1.jpg', 'admin', '1'),
(20, 'CPU (ซีพียู) INTEL 1200 CORE I9-10900KA (MARVEL AVENGER) 3.7 GHz', 18500, 'CPU2.jpg', 'admin', '1'),
(21, 'CPU (ซีพียู) INTEL 1200 CORE I3-10100F 3.60 GHz', 2890, 'cpu3.jpg', 'admin', '1'),
(22, 'CPU (ซีพียู) INTEL 1200 CORE I5-10600K 4.1 GHz', 9450, 'CPU4.jpg', 'admin', '1'),
(23, 'CPU (ซีพียู) AMD AM4 RYZEN7 3800XT 3.9 GHz', 12600, 'CPU5.jpg', 'admin', '1'),
(24, 'CPU (ซีพียู) AMD AM4 RYZEN9 3950X 3.5 GHz', 23500, 'CPU6.jpg', 'admin', '1'),
(25, 'MAINBOARD (เมนบอร์ด) 1200 GALAX H410M', 1999, 'm1.png', 'admin', '2'),
(26, 'MAINBOARD (เมนบอร์ด) AM4 MSI MPG B550 GAMING CARBON WIFI', 7290, 'm2.jpg', 'admin', '2'),
(27, 'MAINBOARD (เมนบอร์ด) AM4 MSI MPG B550 GAMING CARBON WIFI', 5590, 'm4.jpg', 'admin', '2'),
(28, 'MAINBOARD (เมนบอร์ด) AM4 MSI MPG B550 GAMING EDGE WIFI', 8990, 'm5.jpg', 'admin', '2'),
(29, 'MAINBAORD (เมนบอร์ด) AM4 ASROCK B550 TAICHI', 9900, 'm6.jpg', 'admin', '2'),
(30, 'MAINBAORD (เมนบอร์ด) AM4 ASROCK B550 TAICHI', 4050, 'm7.jpg', 'admin', '2'),
(31, '64GB (32GBx2) DDR4/3200 RAM PC (แรมพีซี) THERMALTAKE TOUGHRAM RGB (WHITE) (R022R432GX2-3200C16A)', 13200, 'r1.jpg', 'admin', '3'),
(32, '128GB (32GBx4) DDR4/3200 RAM PC (แรมพีซี) G.SKILL RIPJAWS V (F4-3200C16Q-128GVK)', 19900, 'r2.jpg', 'admin', '3'),
(33, '64GB (32GBx2) DDR4/3200 RAM PC (แรมพีซี) G.SKILL TRIDENT Z RGB (F4-3200C16D-64GTZR)', 11000, 'r3.jpg', 'admin', '3'),
(34, '16GB (8GBx2) DDR4/3200 RAM PC (แรมพีซี) CORSAIR DOMINATOR PLATINUM RGB (WHITE) (CMT16GX4M2C3200C16W)', 5220, 'r4.jpg', 'admin', '3'),
(35, '16GB (8GBx2) DDR4/3600 RAM PC (แรมพีซี) G.SKILL TRIDENT Z NEO (F4-3600C18D-16GTZN)', 3890, 'r5.jpg', 'admin', '3'),
(36, '32GB (16GBx2) DDR4/2666 RAM PC (แรมพีซี) KINGSTON HyperX FURY BLACK (HX426C16FB4K2/32)', 4290, 'r6.jpg', 'admin', '3'),
(37, '64GB (16GBx4) DDR4/3600 RAM PC (แรมพีซี) G.SKILL TRIDENT Z NEO (F4-3600C18Q-64GTZN)', 13500, 'r7.jpg', 'admin', '3'),
(38, '16GB (8GBx2) DDR4/3600 RAM PC (แรมพีซี) CORSAIR VENGEANCE PRO RGB (CMW16GX4M2D3600C18) (BLACK)', 4750, 'r8.jpg', 'admin', '3'),
(39, '4 TB SSD (เอสเอสดี) CORSAIR MP400 PCIe/NVMe M.2 2280 (CSSD-F4000GBMP400) (#0432487193)', 24000, 's1.jpg', 'admin', '4'),
(41, '1 TB SSD (เอสเอสดี) ADDLINK S68 PCIe/NVMe M.2 2280 (AD1TBS68M2P)', 4200, 's3.jpg', 'admin', '4'),
(42, '500 GB SSD (เอสเอสดี) KINGSTON KC2000 PCIe/NVMe M.2 2280 (SKC2000M8/500G)', 4290, 's4.jpg', 'admin', '4'),
(44, '500 GB SSD (เอสเอสดี) KINGSTON A2000 PCIe/NVMe M.2 2280 (SA2000M8/500G)', 4290, 's5.jpg', 'admin', '4'),
(46, '500 GB SSD (เอสเอสดี) KINGSTON A2000 PCIe/NVMe M.2 2280 (SA2000M8/500G)', 4290, 's6.jpg', 'admin', '4'),
(47, '480 GB SSD NVMe M.2 2280 (SA2000M8/500G)', 1980, 's2.jpg', 'admin', '4'),
(48, '256 GB SSD (เอสเอสดี) GIGABYTE AORUS RGB M.2 PCIe/NVMe M.2 2280', 2290, 's7.jpg', 'admin', '4'),
(52, 'WD BLUE 4TB', 4500, 's8.jpg', 'admin', '4'),
(53, 'POWER SUPPLY (อุปกรณ์จ่ายไฟ) COUGAR GEX 850 - 850W (80+ GOLD)', 3790, 'p1.jpg', 'admin', '5'),
(54, 'POWER SUPPLY (อุปกรณ์จ่ายไฟ) COOLER MASTER V850 SFX GOLD - 850W (80+ GOLD)', 4590, 'p2.jpg', 'admin', '5'),
(55, 'POWER SUPPLY (อุปกรณ์จ่ายไฟ) CORSAIR 750W CX750F RGB (80+ BRONZE) (CP-9020227-NA)', 4190, 'p3.jpg', 'admin', '5'),
(56, 'POWER SUPPLY (อุปกรณ์จ่ายไฟ) SILVERSTONE 750W STRIDER (80+ GOLD) (SST-ST75F-GS) V3.0', 3290, 'p4.jpg', 'admin', '5'),
(57, 'POWER SUPPLY (อุปกรณ์จ่ายไฟ) SILVERSTONE 700W SFX (80+ GOLD) (SST-SX700-G)', 4590, 'p5.jpg', 'admin', '5'),
(58, '  POWER SUPPLY (อุปกรณ์จ่ายไฟ) THERMALTAKE 750W SMART BM2 (80+ BRONZE)  Buy now POWER SUPPLY', 2890, 'p6.jpg', 'admin', '5'),
(59, 'POWER SUPPLY (อุปกรณ์จ่ายไฟ) COOLER MASTER MWE 550W (80+ BRONZE)', 1790, 'p7.jpg', 'admin', '5');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `T_ID` int(11) NOT NULL,
  `T_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`T_ID`, `T_name`) VALUES
(1, 'cpu'),
(2, 'board'),
(3, 'ram'),
(4, 'hdd'),
(5, 'power');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`H_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `H_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

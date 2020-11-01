-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 02:52 PM
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
  `F_Date` date NOT NULL,
  `F_Text` varchar(200) NOT NULL,
  `M_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '0000-00-00 00:00:00', 33, 33),
(2, '0000-00-00 00:00:00', 55, 55),
(3, '2020-11-01 11:34:50', 78, 87),
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
(35, '2020-11-01 13:48:18', 1, 15);

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
(3, 'user5', '5555', 'user5', 'abcd');

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
(15, 15, 1, 1);

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
(5, 2110, 1);

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
(2, 'PNOOY', 555, 'PNOOY.jpg', 'admin', 'r1'),
(3, 'PBEWWWW', 5678, 'PBEw.jpg', 'admin', 'r11'),
(4, 'Test', 1234, '', '', 'ram'),
(5, 'asd', 333, '', '', 'ram'),
(6, 'Noooo', 123444, 'C:xampp	mpphp878.tmp', '', 'ram'),
(7, 'gkffgkgfl', 34535, 'C:xampp	mpphp4987.tmp', '', 'ram'),
(8, 'testttttt', 5555, '', '', 'ram'),
(9, 'AHHHHHHHH', 6666, 'Array', '', 'ram'),
(10, 'HELPPPPP', 6666, '', '', 'ram'),
(11, 'HELP ME PLZ', 1111, 'PSUN.jpg', '', 'ram'),
(12, 'Shit here we go again', 333, 'O.jpg', '', 'ram'),
(13, 'Ewwwwwww', 8888, 'PSUN2.jpg', '', 'ram'),
(14, 'O No', 1234, 'O.jpg', '', 'ram'),
(15, 'OOO', 999, 'O.jpg', '', 'ram'),
(16, 'One More Time', 9090, 'PSUN.jpg', 'admin', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `T_ID` varchar(5) NOT NULL,
  `T_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `H_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

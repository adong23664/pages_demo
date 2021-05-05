-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2018 at 06:50 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytestbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffees`
--

CREATE TABLE `coffees` (
  `cof_code` int(11) NOT NULL,
  `cof_name` varchar(32) DEFAULT NULL,
  `sup_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `sales` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coffees`
--

INSERT INTO `coffees` (`cof_code`, `cof_name`, `sup_id`, `price`, `sales`, `total`) VALUES
(1001, '玉山咖啡', 150, '100.00', 12, 55),
(1002, '藍山咖啡', 10, '127.00', 40, 77),
(1003, 'French_Roast', 100, '76.00', 45, 110),
(1004, 'French_Roast', 150, '86.00', 99, 150),
(1005, '雪山極品咖啡', 10, '120.00', 11, 17),
(1006, '特級咖啡', 10, '110.00', 12, 55),
(1007, '帝王咖啡', 172, '120.00', 40, 77),
(1008, 'Colombian', 144, '70.00', 45, 110),
(1009, '藍山咖啡', 105, '91.00', 99, 150),
(1010, '雲林古坑極品咖啡', 144, '115.00', 11, 17),
(1011, '玉山咖啡', 49, '125.00', 12, 55),
(1012, 'French_Roast', 144, '89.00', 40, 77),
(1013, 'Colombian', 10, '101.00', 45, 110),
(1014, '雪山咖啡', 10, '99.00', 99, 150),
(1015, '草山咖啡', 144, '115.00', 11, 17),
(1016, 'Espresso', 148, '118.00', 12, 55),
(1017, 'French_Roast', 177, '87.00', 40, 77);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `s_id` int(11) NOT NULL,
  `company` varchar(40) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `address` varchar(60) NOT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`s_id`, `company`, `contact`, `zip`, `address`, `tel`) VALUES
(150, '林記食品公司', '張鎮明', '100', '台北市中華三路225號18樓', '02-24587448'),
(210, '路華貿易股份有限公司', '李玉鳳', '201', '基隆市民族一路15號8樓', '02-55668321'),
(101, '連灣貿易股份有限公司', '張美華', '401', '台中市自由路27號8樓', '04-222535153'),
(240, '李家貿易有限公司', '劉小彬', '105', '台北市松隆路76號5樓', '02-70813247'),
(100, '華麟食品公司', '劉華凌', '407', '台中市西屯路三段225號1樓', '04-24587552'),
(10, '華盛貿易股份有限公司', '陳美玉', '404', '台中市北屯一路15號8樓', '04-55668357'),
(144, '欣一貿易有限公司', '鄭新', '100', '台北市中華路1段77號5樓', '02-70813325'),
(208, '華泰貿易股份有限公司', '曾永齡', '407', '台中市河南路2段7號2樓', '04-556535400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffees`
--
ALTER TABLE `coffees`
  ADD PRIMARY KEY (`cof_code`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffees`
--
ALTER TABLE `coffees`
  MODIFY `cof_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1018;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

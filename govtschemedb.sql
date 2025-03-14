-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 06:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `govtschemedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `govtsch22_admin`
--

CREATE TABLE `govtsch22_admin` (
  `id` int(10) NOT NULL,
  `govtsch22_admin_name` varchar(200) NOT NULL,
  `govtsch22_admin_email` varchar(200) NOT NULL,
  `govtsch22_admin_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `govtsch22_admin`
--

INSERT INTO `govtsch22_admin` (`id`, `govtsch22_admin_name`, `govtsch22_admin_email`, `govtsch22_admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `govtsch22_farmer`
--

CREATE TABLE `govtsch22_farmer` (
  `id` int(10) NOT NULL,
  `govtsch22_farmname` varchar(255) NOT NULL,
  `govtsch22_farmtype` varchar(255) NOT NULL,
  `govtsch22_farmid` varchar(255) NOT NULL,
  `govtsch22_farmphone` varchar(255) NOT NULL,
  `govtsch22_farmemail` varchar(255) NOT NULL,
  `govtsch22_farmpswd` varchar(255) NOT NULL,
  `govtsch22_farmcrops` varchar(4000) NOT NULL,
  `govtsch22_farmplace` varchar(255) NOT NULL,
  `govtsch22_farmtaluk` varchar(255) NOT NULL,
  `govtsch22_farmdistrict` varchar(255) NOT NULL,
  `govtsch22_farmland` varchar(255) NOT NULL,
  `govtsch22_farmlandtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `govtsch22_farmer`
--

INSERT INTO `govtsch22_farmer` (`id`, `govtsch22_farmname`, `govtsch22_farmtype`, `govtsch22_farmid`, `govtsch22_farmphone`, `govtsch22_farmemail`, `govtsch22_farmpswd`, `govtsch22_farmcrops`, `govtsch22_farmplace`, `govtsch22_farmtaluk`, `govtsch22_farmdistrict`, `govtsch22_farmland`, `govtsch22_farmlandtype`) VALUES
(3, 'user', 'Own Farming', 'Far001', '8197030821', 'user@user.com', 'useruser', 'user', 'user', 'user', 'user', '3', 'Irrigated');

-- --------------------------------------------------------

--
-- Table structure for table `govtsch22_market_price`
--

CREATE TABLE `govtsch22_market_price` (
  `id` int(10) NOT NULL,
  `cropname` varchar(255) NOT NULL,
  `cropprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `govtsch22_market_price`
--

INSERT INTO `govtsch22_market_price` (`id`, `cropname`, `cropprice`) VALUES
(1, 'Cotton', '50'),
(3, 'Apple', '80');

-- --------------------------------------------------------

--
-- Table structure for table `govtsch22_schemes`
--

CREATE TABLE `govtsch22_schemes` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `stype` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cphone` varchar(50) DEFAULT NULL,
  `descr` varchar(4000) DEFAULT NULL,
  `surl` varchar(50) DEFAULT NULL,
  `crop` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `govtsch22_schemes`
--

INSERT INTO `govtsch22_schemes` (`id`, `sname`, `stype`, `email`, `cphone`, `descr`, `surl`, `crop`) VALUES
(1, 'sdvsdv', 'Long Term', 'sdvsdv@ddd.com', 'sdvsdv', 'sdvsdv', 'http://www.abc.com', 'Cotton'),
(7, 'demo', 'Short Term', 'demo@demo.com', '9876543210', 'demo', 'demo.com', 'all'),
(8, 'demo', 'Short Term', 'demo@demo.com', '9876543210', 'demo', 'demo.com', 'demo'),
(9, 'demo', 'Short Term', 'demo@demo.com', '9876543210', 'demo', 'demo.com', 'demo'),
(13, 'Scheme', 'Short Term', 'user@user.com', '9876543210', ' Enhance recharge of aquifers and introduce sustainable water conservation \r\n        practices.\r\n        Promote extension activities relating to water harvesting, water \r\n        management and crop alignment for farmers and grass root level field \r\n        functionaries.', 'https://pmksy.gov.in/mis/frmDashboard.aspx', 'cotton,ragi,jowar,fenugreek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `govtsch22_farmer`
--
ALTER TABLE `govtsch22_farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `govtsch22_market_price`
--
ALTER TABLE `govtsch22_market_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `govtsch22_schemes`
--
ALTER TABLE `govtsch22_schemes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `govtsch22_farmer`
--
ALTER TABLE `govtsch22_farmer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `govtsch22_market_price`
--
ALTER TABLE `govtsch22_market_price`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `govtsch22_schemes`
--
ALTER TABLE `govtsch22_schemes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

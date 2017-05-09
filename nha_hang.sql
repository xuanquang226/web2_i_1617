-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2017 at 08:39 AM
-- Server version: 5.6.30
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nha hang`
--

-- --------------------------------------------------------

--
-- Table structure for table `do an`
--

CREATE TABLE IF NOT EXISTS `do an` (
  `ma so` int(11) NOT NULL,
  `Ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do khai vi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `my` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thit nuong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mon trang mieng` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `do an`
--

INSERT INTO `do an` (`ma so`, `Ten`, `do khai vi`, `my`, `thit nuong`, `mon trang mieng`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `su kien`
--

CREATE TABLE IF NOT EXISTS `su kien` (
  `ma su kien` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  `dia diem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Thuc uong`
--

CREATE TABLE IF NOT EXISTS `Thuc uong` (
  `maso` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruou trang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruou do` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `do an`
--
ALTER TABLE `do an`
  ADD PRIMARY KEY (`ma so`);

--
-- Indexes for table `su kien`
--
ALTER TABLE `su kien`
  ADD PRIMARY KEY (`ma su kien`);

--
-- Indexes for table `Thuc uong`
--
ALTER TABLE `Thuc uong`
  ADD PRIMARY KEY (`maso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `do an`
--
ALTER TABLE `do an`
  MODIFY `ma so` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `su kien`
--
ALTER TABLE `su kien`
  MODIFY `ma su kien` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Thuc uong`
--
ALTER TABLE `Thuc uong`
  MODIFY `maso` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

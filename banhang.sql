-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 05:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `banhang`
--

CREATE TABLE `banhang` (
  `ID` int(11) NOT NULL,
  `MAMH` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `TENMH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LOAIMH` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `DONGIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banhang`
--

INSERT INTO `banhang` (`ID`, `MAMH`, `TENMH`, `LOAIMH`, `SOLUONG`, `DONGIA`) VALUES
(4, 'MH01', 'Máy tính', 'Điện tử', 10, 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banhang`
--
ALTER TABLE `banhang`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banhang`
--
ALTER TABLE `banhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

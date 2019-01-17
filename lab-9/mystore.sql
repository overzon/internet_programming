-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 09:37 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `Customer_Name` varchar(50) COLLATE utf32_thai_520_w2 NOT NULL,
  `Customer_Lastname` varchar(100) COLLATE utf32_thai_520_w2 NOT NULL,
  `Gender` varchar(5) COLLATE utf32_thai_520_w2 NOT NULL,
  `Age` int(11) NOT NULL,
  `Birthdate` varchar(10) COLLATE utf32_thai_520_w2 NOT NULL,
  `Address` varchar(150) COLLATE utf32_thai_520_w2 NOT NULL,
  `Province` varchar(50) COLLATE utf32_thai_520_w2 NOT NULL,
  `Zipcode` varchar(5) COLLATE utf32_thai_520_w2 NOT NULL,
  `Telephone` varchar(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `Customer_Desciption` text COLLATE utf32_thai_520_w2 NOT NULL,
  `username` varchar(50) COLLATE utf32_thai_520_w2 NOT NULL,
  `password` varchar(250) COLLATE utf32_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `Customer_Name`, `Customer_Lastname`, `Gender`, `Age`, `Birthdate`, `Address`, `Province`, `Zipcode`, `Telephone`, `Customer_Desciption`, `username`, `password`) VALUES
(4, 'à¸žà¸£à¹€à¸—à¸ž', 'à¸¡à¸‡à¸„à¸¥à¹€à¸à¸´à¸”', 'M', 0, '3 June 199', '12 suthep chiangmai', 'à¸ˆà¸±à¸‡à¸«à¸§à¸±à¸”à¹à¸žà¸£à¹ˆ', '50200', '0844597381', '1234', 'root', '12341234'),
(5, 'ponthep', 'mongkholkerd', 'à¸«à¸', 0, '7 July 199', '12 suthep chiangmai', 'à¸ˆà¸±à¸‡à¸«à¸§à¸±à¸”à¹€à¸Šà¸µà¸¢à¸‡à¸£à¸²à¸¢', '50200', '0844597381', '1234', 'root', '12341234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

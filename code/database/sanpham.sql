-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2020 at 07:24 AM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `bike_id` int(11) NOT NULL,
  `bike_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bike_cc` int(11) NOT NULL,
  `bike_price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bike_year` int(11) NOT NULL,
  `bike_brand` int(11) NOT NULL,
  `bike_image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`bike_id`, `bike_name`, `bike_cc`, `bike_price`, `bike_year`, `bike_brand`, `bike_image`) VALUES
(20, 'Ducati v4', 1020, '1.200.000.000', 2019, 5, 'Ducati v4_5.png'),
(21, 'Monster 821', 830, '460.000.000', 2018, 5, 'Monster 821_5.png'),
(23, 'CBR600 RR', 603, '285.000.000', 2020, 4, 'CBR600 RR_4.jpg'),
(24, 'CBR1000 SP2', 1000, '980.000.000', 2020, 4, 'CBR1000 SP2_4.jpg'),
(25, 'R1M', 1059, '1.500.000.000', 2019, 6, 'R1M_6.png'),
(26, 'MT-10', 969, '520.000.000', 2019, 6, 'MT-10_6.png'),
(27, 'S1000RR', 1029, '1.020.000.000', 2020, 1, 'S1000RR_1.jpg'),
(28, 'H2', 1120, '1.100.000.000', 2020, 7, 'H2_7.png'),
(29, 'Iron 833', 831, '480.000.000', 2019, 8, 'Iron 833_8.jpg'),
(30, 'mutistrada', 836, '980.000.000', 2019, 5, 'mutistrada_5.png'),
(31, 'BMW ', 1000, '460.000.000', 2010, 1, 'BMW _1.jpg'),
(32, 'Yamaha', 1000, '285.000.000', 2020, 6, 'Yamaha_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'BMW '),
(4, 'Honda'),
(5, 'Ducati'),
(6, 'Yamaha'),
(7, 'Kawasaki'),
(8, 'Harley Davidson');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(5, 'admin', '6cf1fb395f25cb27fa8edfd4ccfca189'),
(7, 'an', '6cf1fb395f25cb27fa8edfd4ccfca189');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`bike_id`),
  ADD KEY `student_class` (`bike_brand`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
  MODIFY `bike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bike`
--
ALTER TABLE `bike`
  ADD CONSTRAINT `bike_ibfk_1` FOREIGN KEY (`bike_brand`) REFERENCES `brand` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

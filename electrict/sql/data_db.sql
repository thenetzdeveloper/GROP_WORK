-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2025 at 06:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `electricity_bills`
--

CREATE TABLE `electricity_bills` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `usage_kwh` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `electricity_bills`
--

INSERT INTO `electricity_bills` (`id`, `full_name`, `gender`, `phone`, `address`, `location`, `date`, `usage_kwh`, `cost`) VALUES
(1, 'leak', 'ស្រី', '088828476754', 'ere5454', 'ghuhyh', '2025-07-25', 50, 20000),
(2, 'leak', 'ស្រី', '088828476754', 'ere5454', 'ghuhyh', '2025-07-25', 50, 20000),
(3, 'ah cheat', 'ប្រុស', '12345678', 'rtk', 'rtk', '2025-07-27', 100, 50000),
(4, 'ah cheat', 'ប្រុស', '12345678', 'rtk', 'rtk', '2025-07-27', 100, 50000),
(5, 'ah cheat', 'ប្រុស', '12345678', 'rtk', 'rtk', '2025-07-27', 100, 50000),
(6, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(7, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(8, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(9, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(10, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(11, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(12, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(13, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(14, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(15, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(16, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(17, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(18, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(19, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(20, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(21, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(22, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(23, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(24, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(25, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(26, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(27, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(28, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(29, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(30, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(31, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(32, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(33, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(34, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(35, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(36, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(37, 'Muzik', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 150, 90000),
(40, 'Neth Gaming', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 100, 50000),
(41, 'Neth Gaming', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 100, 50000),
(42, 'Neth Gaming', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 100, 50000),
(43, 'Neth Gaming', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 100, 50000),
(44, 'Neth Gaming', 'ប្រុស', '0969279574', 'Any', 'pp', '2025-07-27', 100, 50000),
(45, 'NHOR NETH', 'ប្រុស', '0969279574', '78', 'pp', '2025-07-27', 300, 210000),
(46, 'NHOR NETH', 'ប្រុស', '0969279574', '78', 'pp', '2025-07-27', 300, 210000),
(47, 'NHOR NETH', 'ប្រុស', '0969279574', '78', 'pp', '2025-07-27', 300, 210000),
(48, 'NHOR NETH', 'ប្រុស', '0969279574', '78', 'pp', '2025-07-27', 300, 210000),
(49, 'NHOR NETH', 'ប្រុស', '0969279574', '78', 'pp', '2025-07-27', 300, 210000),
(50, 'NHOR NETH', 'ប្រុស', '0969279574', '78', 'pp', '2025-07-27', 300, 210000),
(51, 'NHOR NETH', 'ប្រុស', '0969279574', '78', 'pp', '2025-07-27', 300, 210000),
(52, 'NHOR NETH', 'ប្រុស', '0969279574', '78', 'pp', '2025-07-27', 300, 210000),
(55, 'NHOR NETH', 'ប្រុស', '0969279574', '78', 'pp', '2025-07-28', 100, 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electricity_bills`
--
ALTER TABLE `electricity_bills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `electricity_bills`
--
ALTER TABLE `electricity_bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

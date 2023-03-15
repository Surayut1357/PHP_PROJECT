-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 03:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_member`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `PID` varchar(13) NOT NULL,
  `PNAME` varchar(200) NOT NULL,
  `BDATE` date DEFAULT NULL,
  `PROID` varchar(5) NOT NULL,
  `PRONAME` varchar(200) NOT NULL,
  `Price` int(10) NOT NULL,
  `INDATE` date NOT NULL,
  `EXDATE` date NOT NULL,
  `Interest` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`PID`, `PNAME`, `BDATE`, `PROID`, `PRONAME`, `Price`, `INDATE`, `EXDATE`, `Interest`) VALUES
('1200900000000', 'Surayut Sutisngar', NULL, '12345', 'Gundam', 900, '2023-03-23', '2023-04-19', 199),
('1200900000000', 'Surayut Sutisngar', NULL, '12345', 'Gundam Barbatos Lupus Rex', 9000, '2023-03-23', '2023-04-19', 5978),
('120', 'Surayut Sutisngar', '0000-00-00', '12', 'Gundam', 450, '2023-03-17', '2023-04-26', 148),
('1200', '900-=', '2023-03-31', '12345', '1223', 330, '2023-03-18', '2023-03-02', 43);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `email`, `password`) VALUES
(1, 'James Bond', 'premium00829@gmail.com', '1234'),
(2, 'AMJM', 'ss', '789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

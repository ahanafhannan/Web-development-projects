-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 12:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodorderdetails`
--

CREATE TABLE `foodorderdetails` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `pmethod` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medorderdetails`
--

CREATE TABLE `medorderdetails` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pnum` varchar(100) NOT NULL,
  `pmethod` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderfood`
--

CREATE TABLE `orderfood` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderfood`
--

INSERT INTO `orderfood` (`id`, `name`, `price`, `pet`, `stock`) VALUES
(1, 'aaa', '100', 'dog', 'Available'),
(2, 'bbb', '200', 'dog', 'Not Available'),
(3, 'ccc', '300', 'dog', 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `ordermed`
--

CREATE TABLE `ordermed` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pet` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `fname`, `address`) VALUES
(1, 'ariyan@yahoo.com', '0000', 'Ariyan', 'Poribagh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderfood`
--
ALTER TABLE `orderfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordermed`
--
ALTER TABLE `ordermed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderfood`
--
ALTER TABLE `orderfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ordermed`
--
ALTER TABLE `ordermed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

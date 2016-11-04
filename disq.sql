-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 02:43 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disq`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `bid` int(5) NOT NULL,
  `organisation` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(160) NOT NULL,
  `type` varchar(10) NOT NULL,
  `delivery_location` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`bid`, `organisation`, `phone`, `email`, `address`, `type`, `delivery_location`) VALUES
(1, 'TCS', '9999888844', 'admin@tcs.com', 'Yantra Park, Thane, Mumbai', 'Green', 'Andheri');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_login`
--

CREATE TABLE `buyer_login` (
  `phone` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_login`
--

INSERT INTO `buyer_login` (`phone`, `password`) VALUES
('9999888844', 'ashutosh');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(5) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `weight` float NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(160) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `phone`, `weight`, `location`, `description`, `timestamp`) VALUES
(1, '9999888844', 100, 'Andheri', 'Deliver in packets of 25kgs.', '2016-11-04 13:30:05.213510');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sid` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(160) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sid`, `fname`, `lname`, `phone`, `address`, `email`, `balance`) VALUES
(1, 'Ashutosh', 'Joshi', '9998844234', '701, Bhagyodaya Tower 2, Pashabhai Park, Vadodara', '13bit023@nirmauni.ac.in', 55.1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_login`
--

CREATE TABLE `seller_login` (
  `phone` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_login`
--

INSERT INTO `seller_login` (`phone`, `password`) VALUES
('9998844234', 'ashutosh');

-- --------------------------------------------------------

--
-- Table structure for table `seller_price`
--

CREATE TABLE `seller_price` (
  `type` varchar(10) NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_price`
--

INSERT INTO `seller_price` (`type`, `rate`) VALUES
('blue', 10),
('blue', 10),
('black', 15),
('black', 15),
('green', 20),
('green', 20);

-- --------------------------------------------------------

--
-- Table structure for table `seller_transaction`
--

CREATE TABLE `seller_transaction` (
  `tid` int(5) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `weight` float NOT NULL,
  `type` varchar(10) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_transaction`
--

INSERT INTO `seller_transaction` (`tid`, `mobile`, `date`, `weight`, `type`, `amount`) VALUES
(2, '9998844234', '2016-11-04 10:50:16', 4.51, 'blue', 18.04),
(3, '9998844234', '2016-11-04 10:57:32', 4.51, 'blue', 45.1),
(4, '9998844234', '2016-11-04 11:24:18', 4.51, 'blue', 45.1),
(5, '9998844234', '2016-11-04 11:25:52', 4.51, 'blue', 45.1),
(6, '9998844234', '2016-11-04 11:26:23', 4.51, 'blue', 45.1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `buyer_login`
--
ALTER TABLE `buyer_login`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `seller_login`
--
ALTER TABLE `seller_login`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `seller_transaction`
--
ALTER TABLE `seller_transaction`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `bid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seller_transaction`
--
ALTER TABLE `seller_transaction`
  MODIFY `tid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

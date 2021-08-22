-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 02:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(15) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(15) NOT NULL,
  `imagename` int(255) NOT NULL,
  `brand` int(255) NOT NULL,
  `admin_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(15) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `cost` int(15) NOT NULL,
  `admin_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `brand`, `cost`, `admin_id`) VALUES
(1, '', '', 0, 0),
(2, '', '', 0, 0),
(3, 'Computer', 'HP', 3000000, 0),
(4, 'Computer', 'HP', 3000000, 0),
(5, '', '', 0, 0),
(6, '', '', 0, 0),
(7, 'Computer', 'DEL 22020', 100000, 0),
(8, 'Computer', 'HP', 10000, 0),
(9, 'leo', 'DEL 22020', 200000, 0),
(10, 'Computer', 'Acer', 3000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceid` int(11) NOT NULL,
  `servicename` int(11) NOT NULL,
  `description1` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(68) NOT NULL,
  `userid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceid`, `servicename`, `description1`, `username`, `email`, `userid`) VALUES
(1, 0, ' ', '', '', 0),
(2, 0, '  zx  czx', 'afs', 'habimanaleonard0@gmail.com', 0),
(3, 0, ' casC', 'afs', 'habimanaleonard0@gmail.com', 0),
(4, 0, ' as', 'afs', 'habimanaleonard0@gmail.com', 0),
(5, 0, ' as', 'afs', 'habimanaleonard0@gmail.com', 0),
(6, 0, ' dbs', 'afs1', 'habimanaleonard0@gmail.com', 0),
(7, 0, ' dbs', 'afs1', 'habimanaleonard0@gmail.com', 0),
(8, 0, ' xn', 'afs', 'habimanaleonard0@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `phone`, `password`) VALUES
(7, 'Leonard', 'habimanaleonard0@gmail.com', 12, '12'),
(8, 'Leonard', 'kereni@gmail.com', 785377777, '22'),
(9, 'Leonard', 'abagenzitv@gmail.com', 22222, '2222'),
(10, 'leonard', 'ndayishimyebonane@gmail.com', 783557651, '123'),
(11, 'CYIZA Christian', 'cyiza@gmail.com', 784447778, 'cyiza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

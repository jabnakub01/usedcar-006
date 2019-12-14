-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2019 at 09:15 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usedcar-006`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `carType` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(80) NOT NULL,
  `color` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `province` varchar(30) NOT NULL,
  `modelYear` varchar(4) NOT NULL,
  `price` int(11) NOT NULL,
  `postedBy` int(11) NOT NULL,
  `postedDate` datetime NOT NULL,
  `carpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `carType`, `brand`, `model`, `color`, `license`, `province`, `modelYear`, `price`, `postedBy`, `postedDate`, `carpic`) VALUES
(1, 1, 'BMW', 'R8', 'ขาว', '1กด4307', 'นครปฐม', '2019', 1500000, 1, '2019-12-14 00:00:00', 'Bmwr8.jpg'),
(3, 2, 'Ford Ranger', 'Stan Standard', 'ขาว', '1กด4309', 'นครปฐม', '2019', 900000, 1, '2019-12-06 00:00:00', 'ford1.png'),
(4, 1, 'BMW', 'BMW I8 Frozen', 'ขาว', '1กด4310', 'นครปฐม', '2019', 1000000, 1, '2019-12-08 00:00:00', 'Bmwi8Frozen.jpg'),
(6, 1, 'Toyota', 'Toyota Hiace ECO', 'ขาว', '1กด7852', 'นครปฐม', '2019', 900000, 1, '2019-12-06 00:00:00', 'to1.jpg'),
(7, 2, 'MG', 'MG new ', 'ขาว', '1กด4307', 'นครปฐม', '2019', 1000000, 1, '2019-12-08 00:00:00', 'mg1.png');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`) VALUES
(1, 'root', '25d55ad283aa400af464c76d713c07ad', 'Noraseat', 'Panawong', 'noraseatpanawong@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

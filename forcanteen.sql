-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 01:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forcanteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tcart`
--

CREATE TABLE `tcart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tproduct`
--

CREATE TABLE `tproduct` (
  `tpid` int(11) NOT NULL,
  `name` varchar(56) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(234) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tproduct`
--

INSERT INTO `tproduct` (`tpid`, `name`, `price`, `image`, `description`) VALUES
(1, 'chotu pizza', 100, 'up/1532p2.png', 'dasds\r\n                            '),
(2, 'burger', 70, 'up/30500p1.png', ' this is a testy burger        \n                            '),
(3, 'cold coffee', 100, 'up/21406b1.jpg', 'cold coffee with icecream\n                            '),
(4, 'noodles', 60, 'up/28287b2.jpg', '                                \n testy noodles              '),
(5, 'sandwiz', 100, 'up/28236p3.png', ' cheezy sandwiz'),
(6, 'maggi', 90, 'up/7983p5.jpg', '                                \r\nvhjgvghvhv'),
(7, 'pav bhaji', 89, 'up/27326p1.png', 'dasdsd');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `tuid` int(11) NOT NULL,
  `name` varchar(54) NOT NULL,
  `email` varchar(34) NOT NULL,
  `contactno` varchar(54) NOT NULL,
  `address` varchar(90) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`tuid`, `name`, `email`, `contactno`, `address`, `password`) VALUES
(1, 'amit', 'amit@gmail.com', '9090909090', 'ahemdabad', 'shalini'),
(2, 'palash', 'palash@gmail.com', '9999999999', 'indore', 'palash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tproduct`
--
ALTER TABLE `tproduct`
  ADD PRIMARY KEY (`tpid`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`tuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tproduct`
--
ALTER TABLE `tproduct`
  MODIFY `tpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `tuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

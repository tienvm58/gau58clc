-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2015 at 04:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nhahang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(35) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `desert`
--

CREATE TABLE IF NOT EXISTS `desert` (
`STT` int(2) NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desert`
--

INSERT INTO `desert` (`STT`, `Name`, `Price`) VALUES
(1, 'Orange', 20000),
(2, 'Apple', 20000),
(3, 'dÆ°a chuá»™t', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE IF NOT EXISTS `drink` (
`STT` int(2) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`STT`, `Name`, `Price`) VALUES
(1, 'Orange Juice', 20000),
(2, 'Water', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `khaivi`
--

CREATE TABLE IF NOT EXISTS `khaivi` (
`STT` int(2) NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khaivi`
--

INSERT INTO `khaivi` (`STT`, `Name`, `Price`) VALUES
(1, 'Salad', 25000),
(2, 'Soup', 100000),
(3, 'trá»©ng saber', 10000),
(4, 'trá»©ng chiÃªn', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `monchinh`
--

CREATE TABLE IF NOT EXISTS `monchinh` (
`STT` int(2) NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monchinh`
--

INSERT INTO `monchinh` (`STT`, `Name`, `Price`) VALUES
(1, 'Chicken', 200000),
(2, 'Beef', 300000),
(3, 'láº¡p xÆ°á»ng', 30000),
(4, 'láº¡p xÆ°á»ng', 30000),
(5, 'láº¡p xÆ°á»ng', 30000),
(6, 'láº¡p xÆ°á»ng', 30000),
(7, 'mÃµm lá»£n', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(255) NOT NULL,
  `pass` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `desert`
--
ALTER TABLE `desert`
 ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
 ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `khaivi`
--
ALTER TABLE `khaivi`
 ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `monchinh`
--
ALTER TABLE `monchinh`
 ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desert`
--
ALTER TABLE `desert`
MODIFY `STT` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
MODIFY `STT` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `khaivi`
--
ALTER TABLE `khaivi`
MODIFY `STT` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `monchinh`
--
ALTER TABLE `monchinh`
MODIFY `STT` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2015 at 06:01 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nhahang`
--
CREATE DATABASE IF NOT EXISTS `nhahang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nhahang`;

-- --------------------------------------------------------

--
-- Table structure for table `gopy`
--

CREATE TABLE IF NOT EXISTS `gopy` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Time` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `gopy` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gopy`
--

INSERT INTO `gopy` (`id`, `Time`, `username`, `gopy`) VALUES
(9, '09/05/2015 08:16:04', 'ban1', 'abc'),
(10, '09/05/2015 08:19:26', 'ban1', 'zyz');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `User` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Qty` int(3) NOT NULL,
  `Money` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `STT` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Price` int(10) NOT NULL,
  `Value` int(2) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`STT`, `Name`, `Price`, `Value`) VALUES
(2, 'Soup', 100000, 1),
(3, 'trá»©ng saber', 10000, 1),
(4, 'trá»©ng chiÃªn', 12000, 1),
(8, 'Chicken', 200000, 2),
(11, 'mÃµm lá»£n', 30000, 2),
(12, 'GÃ  háº§m', 300000, 2),
(15, 'Orange Juice', 10000, 3),
(16, 'Water', 15000, 3),
(18, 'Orange', 5000, 4),
(19, 'Apple', 20000, 4),
(20, 'dÆ°a chuá»™t', 10000, 4),
(21, 'Peppsi', 10000, 3),
(22, 'Báº¯p rang', 50000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `Time` varchar(30) NOT NULL,
  `User` text NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(4) NOT NULL,
  `Qty` int(3) NOT NULL,
  `Money` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(255) NOT NULL,
  `pass` char(50) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`, `level`) VALUES
('admin', 'admin', 1),
('ban1', 'ban1', 2),
('ban2', 'ban2', 2),
('ban3', 'ban3', 2),
('ban4', 'ban4', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

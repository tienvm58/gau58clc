-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2015 at 03:22 AM
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
-- Table structure for table `desert`
--

CREATE TABLE IF NOT EXISTS `desert` (
  `STT` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
  `STT` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`STT`, `Name`, `Price`) VALUES
(1, 'Orange Juice', 20000),
(2, 'Water', 15000);

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
-- Table structure for table `khaivi`
--

CREATE TABLE IF NOT EXISTS `khaivi` (
  `STT` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
  `STT` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `monchinh`
--

INSERT INTO `monchinh` (`STT`, `Name`, `Price`) VALUES
(1, 'Chicken', 200000),
(2, 'Beef', 300000),
(3, 'láº¡p xÆ°á»ng', 30000),
(4, 'mÃµm lá»£n', 30000),
(5, 'GÃ  háº§m', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `Time` int(30) NOT NULL,
  `User` text NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(4) NOT NULL,
  `Qty` int(3) NOT NULL,
  `Money` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`Time`, `User`, `Name`, `Price`, `Qty`, `Money`) VALUES
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 10, 120000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 10, 120000),
(0, 'ban1', 'Soup', 100000, 0, 0),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 10, 120000),
(0, 'ban1', 'Soup', 100000, 2, 200000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 10, 120000),
(0, 'ban1', 'Soup', 100000, 2, 200000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 10, 120000),
(0, 'ban1', '', 0, 0, 0),
(0, 'ban1', '', 0, 0, 0),
(0, 'ban1', '', 0, 0, 0),
(2015, 'cuongnb', 'abc', 1000, 3, 3000),
(0, 'ban1', '', 0, 0, 0),
(0, 'ban1', '', 0, 0, 0),
(0, 'ban1', '', 0, 0, 0),
(0, 'ban1', 'Soup', 100000, 23, 2300000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 10, 120000),
(0, 'ban1', 'Soup', 100000, 23, 2300000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 10, 120000),
(2015, 'cuong', 'avc', 1222, 1, 1222),
(0, 'ban1', 'Soup', 100000, 23, 2300000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 10, 120000),
(0, 'ban1', 'Soup', 100000, 23, 2300000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 10, 120000),
(0, 'ban1', 'Soup', 100000, 23, 2300000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 12, 144000),
(0, 'ban1', 'Soup', 100000, 23, 2300000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 12, 144000),
(0, 'ban1', 'Soup', 100000, 23, 2300000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 12, 144000),
(0, 'ban1', 'Soup', 100000, 23, 2300000),
(0, 'ban1', 'trá»©ng saber', 10000, 12, 120000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 12, 144000),
(0, 'ban1', 'Soup', 100000, 2, 200000),
(0, 'ban1', 'trá»©ng saber', 10000, 2, 20000),
(0, 'ban1', 'trá»©ng chiÃªn', 12000, 2, 24000),
(1431106369, 'ban1', 'Soup', 100000, 2, 200000),
(1431106369, 'ban1', 'trá»©ng saber', 10000, 2, 20000),
(1431106369, 'ban1', 'trá»©ng chiÃªn', 12000, 2, 24000);

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
('phan', 'anh', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

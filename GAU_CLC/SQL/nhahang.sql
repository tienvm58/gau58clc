-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Sam 14 Mars 2015 à 01:31
-- Version du serveur: 5.6.11
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `nhahang`
--
CREATE DATABASE IF NOT EXISTS `nhahang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nhahang`;

-- --------------------------------------------------------

--
-- Structure de la table `desert`
--

CREATE TABLE IF NOT EXISTS `desert` (
  `STT` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `desert`
--

INSERT INTO `desert` (`STT`, `Name`, `Price`) VALUES
(1, 'Orange', 20000),
(2, 'Apple', 20000),
(3, 'dÆ°a chuá»™t', 10000);

-- --------------------------------------------------------

--
-- Structure de la table `drink`
--

CREATE TABLE IF NOT EXISTS `drink` (
  `STT` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `drink`
--

INSERT INTO `drink` (`STT`, `Name`, `Price`) VALUES
(1, 'Orange Juice', 20000),
(2, 'Water', 15000);

-- --------------------------------------------------------

--
-- Structure de la table `gopy`
--

CREATE TABLE IF NOT EXISTS `gopy` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `gopy` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `gopy`
--

INSERT INTO `gopy` (`id`, `username`, `gopy`) VALUES
(1, 'u', 'g'),
(2, 'u', 'g'),
(3, 'bÃ n 1', 'chÃºng tÃ´i cáº£m tháº¥y hÃ´m nay Ä‘á»“ Äƒn khÃ´ng ngon');

-- --------------------------------------------------------

--
-- Structure de la table `khaivi`
--

CREATE TABLE IF NOT EXISTS `khaivi` (
  `STT` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `khaivi`
--

INSERT INTO `khaivi` (`STT`, `Name`, `Price`) VALUES
(1, 'Salad', 25000),
(2, 'Soup', 100000),
(3, 'trá»©ng saber', 10000),
(4, 'trá»©ng chiÃªn', 12000);

-- --------------------------------------------------------

--
-- Structure de la table `monchinh`
--

CREATE TABLE IF NOT EXISTS `monchinh` (
  `STT` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `monchinh`
--

INSERT INTO `monchinh` (`STT`, `Name`, `Price`) VALUES
(1, 'Chicken', 200000),
(2, 'Beef', 300000),
(3, 'láº¡p xÆ°á»ng', 30000),
(4, 'mÃµm lá»£n', 30000),
(5, 'GÃ  háº§m', 300000);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(255) NOT NULL,
  `pass` char(50) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`name`, `pass`, `level`) VALUES
('admin', 'admin', 1),
('ban1', 'ban1', 2),
('ban2', 'ban2', 2),
('phan', 'anh', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

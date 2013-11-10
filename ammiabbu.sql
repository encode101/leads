-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2013 at 12:23 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ammiabbu`
--

-- --------------------------------------------------------

--
-- Table structure for table `matrimony`
--

CREATE TABLE IF NOT EXISTS `matrimony` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `matrimony`
--

INSERT INTO `matrimony` (`id`, `name`, `age`, `gender`, `profile_img`) VALUES
(1, 'Rahul', 29, 'male', 'bride_img1.png'),
(2, 'Monika', 27, 'female', 'bride_img2.png');

-- --------------------------------------------------------

--
-- Table structure for table `realestate`
--

CREATE TABLE IF NOT EXISTS `realestate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_type` varchar(255) NOT NULL,
  `prop_price` int(255) NOT NULL,
  `prop_bedrooms` int(255) NOT NULL,
  `prop_source` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `realestate`
--

INSERT INTO `realestate` (`id`, `prop_type`, `prop_price`, `prop_bedrooms`, `prop_source`) VALUES
(1, 'Residential', 25000, 2, 'Owner'),
(2, 'Residential', 20000, 2, 'agent');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

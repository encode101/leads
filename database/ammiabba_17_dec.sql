-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2013 at 02:15 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ammiabba`
--
CREATE DATABASE IF NOT EXISTS `ammiabba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ammiabba`;

-- --------------------------------------------------------

--
-- Table structure for table `bayans`
--

CREATE TABLE IF NOT EXISTS `bayans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `masjid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kirath` varchar(255) NOT NULL,
  `bayan` varchar(255) NOT NULL,
  `azan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bayans`
--

INSERT INTO `bayans` (`id`, `name`, `masjid`, `address`, `mobile`, `email`, `kirath`, `bayan`, `azan`) VALUES
(1, 'Rahul Mishra', 'chandani chowk', 'P1 Magarpatta City. Hadapsar. Pune.', '9545600524', 'rahul@google.com', 'kirath01.mp3', 'bayan1.mp3', 'azan1.mp3'),
(2, 'Raghav Mishra', 'Bulaki Road', 'P Pentagon Towers. Magarpatta City. Hadapsar', '9545600524', 'rahul@google.com', 'kirath02.mp3', 'bayans02.mp3', 'aza02.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `categorymap`
--

CREATE TABLE IF NOT EXISTS `categorymap` (
  `text` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorymap`
--

INSERT INTO `categorymap` (`text`, `category`, `subcategory`) VALUES
('Bayans & Kirath ', 'C1', 'C1S1'),
('Azan', 'C1', 'C1S2'),
('Hajj & Umara tours organisers ', 'C1', 'C1S3'),
('Madras a & Arabic schools', 'C1', 'C1S4'),
('Baitulmals', 'C1', 'C1S5'),
('Govt schemes for Muslim', 'C1', 'C1S6'),
('Jobs for imam & mauzin', 'C1', 'C1S7'),
('List of social organization', 'C1', 'C1S8'),
(' dargha of India', 'C1', 'C1S9'),
('Dentists', 'C2', 'C2S1'),
('Dermatologists', 'C2', 'C2S2'),
('Gynecologist & pediatricians', 'C2', 'C2S3'),
('Psychiatrists', 'C2', 'C2S4'),
('Cardiologist', 'C2', 'C2S5'),
('Diabetologist', 'C2', 'C2S6'),
('General Physician', 'C2', 'C2S7'),
('Orthopedic', 'C2', 'C2S8'),
('Hospitals and Nursing home', 'C2', 'C2S9'),
('Medical Tourism', 'C2', 'C2S10'),
('Neurosurgeons', 'C2', 'C2S11'),
('Sexologist ', 'C2', 'C2S12'),
('Thyroid', 'C2', 'C2S13'),
('Urologists', 'C2', 'C2S14'),
('Veterinary', 'C2', 'C2S15'),
('Homeopathic', 'C2', 'C2S16'),
('Unani', 'C2', 'C2S17'),
('Ent', 'C2', 'C2S18'),
('Ayurvadic', 'C2', 'C2S19'),
('Chemists', 'C2', 'C2S20'),
('Lab & Research', 'C2', 'C2S21'),
(' Medical Equipments ', 'C2', 'C2S22'),
('Car ', 'C3', 'C3S1'),
('Motorcycle', 'C3', 'C3S2'),
('Mobile Phone', 'C3', 'C3S3'),
('Computers', 'C3', 'C3S4'),
('Fan', 'C3', 'C3S5'),
('Microwave Oven', 'C3', 'C3S6'),
('Refrigerator', 'C3', 'C3S7'),
('Television', 'C3', 'C3S8'),
('Washing Machin', 'C3', 'C3S9'),
('Moter winding', 'C3', 'C3S10'),
('AC , Mixer Grinders', 'C3', 'C3S11'),
('Others', 'C3', 'C3S12'),
('Ligal Advisor', 'C4', 'C4S1'),
('Courier Services', 'C4', 'C4S2'),
('Dry cleaners', 'C4', 'C4S3'),
('Duplicate Key Makers', 'C4', 'C4S4'),
('Gents & Ladies Tailors', 'C4', 'C4S5'),
('National & International Jobs', 'C4', 'C4S6'),
('Drycleaners & Laundry services ', 'C4', 'C4S7'),
('Transporters', 'C4', 'C4S8'),
('Driving Schools', 'C4', 'C4S9'),
('Charted Accountant', 'C4', 'C4S10'),
('Pest Control Services', 'C4', 'C4S11'),
('Hajj & umhar organizers ', 'C4', 'C4S12'),
('Air Ticketing & Immigration', 'C4', 'C4S13'),
('Bus Services', 'C4', 'C4S14'),
('Car Hire ', 'C4', 'C4S15'),
('Hotel Reservation ', 'C4', 'C4S16'),
('Railway Ticketing Agents', 'C4', 'C4S17'),
('Hotels & Lodging (Local & Outstation )', 'C4', 'C4S18'),
(' food Restaurants (Local & Outstation )', 'C4', 'C4S19'),
('Schools & Tuitions', 'C5', 'C5S1'),
('Collage & Tuitions ', 'C5', 'C5S2'),
('Professional Collages & Tuitions', 'C5', 'C5S3'),
('Job oriental courses', 'C5', 'C5S4'),
(' Degree Collages', 'C5', 'C5S5'),
('Boarding Schools', 'C5', 'C5S6'),
('Teacher training Colleges', 'C5', 'C5S7'),
('International Schools', 'C5', 'C5S8'),
('Arabic Schools', 'C5', 'C5S9'),
('Builders & Developers', 'C6', 'C6S1'),
('Real Estate Agents', 'C6', 'C6S2'),
('Men & women PG', 'C6', 'C6S3'),
('Building Material Suppliers', 'C6', 'C6S4'),
('Engineering Works', 'C6', 'C6S5'),
('Carpenter Services', 'C6', 'C6S6'),
('Electricians Services', 'C6', 'C6S7'),
('Painting Services', 'C6', 'C6S8'),
('Plumbing Services ', 'C6', 'C6S9'),
('Interior Designers', 'C6', 'C6S10'),
('Flooring Contractors', 'C6', 'C6S11'),
('Mason Contractors', 'C6', 'C6S12'),
('Home Décor Dealers', 'C6', 'C6S13'),
('Paints and Hardware', 'C6', 'C6S14'),
('Granite ,Marble & Tiles', 'C6', 'C6S15'),
('Centering Works & Material', 'C6', 'C6S16'),
('Bar Binding Works', 'C6', 'C6S17'),
('Electrical & Lights fitting Dealers', 'C6', 'C6S18'),
('Gents Shopping', 'C7', 'C7S1'),
('Ladies shopping ', 'C7', 'C7S2'),
('Kids Shopping', 'C7', 'C7S3'),
('Watch Dealers', 'C7', 'C7S4'),
('Departmental Stores', 'C7', 'C7S5'),
('Home Appliances', 'C7', 'C7S6'),
('Book Stores', 'C7', 'C7S7'),
('Jewellery Showrooms', 'C7', 'C7S8'),
('Gift Shops', 'C7', 'C7S9'),
('Fashion Designers', 'C7', 'C7S10'),
('Car old & new dealers', 'C7', 'C7S11'),
('Two wheelers dealers', 'C7', 'C7S12'),
('Bicycle Dealers ', 'C7', 'C7S13');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `edu_qual` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `complexion` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `coordinator` varchar(255) NOT NULL,
  `masjid` varchar(255) NOT NULL,
  `bayans` varchar(255) NOT NULL,
  `kirath` varchar(255) NOT NULL,
  `azan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `company`, `name`, `email`, `mobile`, `address`, `category`, `subcategory`, `description`, `image`, `city`, `phone`, `gender`, `father_name`, `mother_name`, `dob`, `edu_qual`, `height`, `complexion`, `profession`, `salary`, `coordinator`, `masjid`, `bayans`, `kirath`, `azan`) VALUES
(18, '', 'Kareena Kapoor', 'kareena@kapoor.com', '9545600524', '501 Pentagon Towers. Magarpatta City. Hadapsar.', 'C8', 'C8S9', '', 'ff83aec3c0db9063e084bd57d9f8045d.jpg', 'Pune', '06576574494', 'female', 'Karan Johar', 'Karishma Kapoor', '23/09/1985', 'BE Computer Science', '6 ', 'Fair', 'Software Engineer', '90000', '9545600524', '', '', '', ''),
(19, '', 'Kareena Kapoor', 'kareena@kapoor.com', '9545600524', '501 Pentagon Towers. Magarpatta City. Hadapsar.', 'C8', 'C8S9', '', 'f8c744b488a98dd19feaab5bd6a524cd.jpg', 'Pune', '06576574494', 'female', 'Karan Johar', 'Karishma Kapoor', '23/09/1985', 'BE Computer Science', '6 ', 'Fair', 'Software Engineer', '90000', '9545600524', '', '', '', ''),
(20, '', 'Kareena Kapoor', 'kareena@kapoor.com', '9545600524', '501 Pentagon Towers. Magarpatta City. Hadapsar.', 'C8', 'C8S9', '', 'ee51f146d31035e454b254b541216c2a.jpg', 'Pune', '06576574494', 'female', 'Karan Johar', 'Karishma Kapoor', '23/09/1985', 'BE Computer Science', '6 ', 'Fair', 'Software Engineer', '90000', '9545600524', '', '', '', ''),
(21, 'HP Pavilion Laptops', 'Raghav Industries', 'raghav@google.com', '9546555241', 'Pentagon Towes. Magarpatta City. Hadapsar', 'C7', 'C7S9', 'We sell 100% genuine HP Pavilion Laptops in India and abroad at a very competitive price', 'ade7c5733bc18dffb9adccf1a4a8a536.jpeg', 'Pune', '9545600524', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'HP Pavilion Laptops', 'Raghav Industries', 'raghav@google.com', '9546555241', 'Pentagon Towes. Magarpatta City. Hadapsar', 'C7', 'C7S9', 'We sell 100% genuine HP Pavilion Laptops in India and abroad at a very competitive price', '3dacf3bc157040157cb21a2eb9a56316.jpeg', 'Pune', '9545600524', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'HP Pavilion Laptops', 'Raghav Industries', 'raghav@google.com', '9546555241', 'Pentagon Towes. Magarpatta City. Hadapsar', 'C7', 'C7S9', 'We sell 100% genuine HP Pavilion Laptops in India and abroad at a very competitive price', '6a138e0fb41d9762e5e5a068a260c88d.jpeg', 'Pune', '9545600524', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'HP Pavilion Laptops', 'Raghav Industries', 'raghav@google.com', '9546555241', 'Pentagon Towes. Magarpatta City. Hadapsar', 'C7', 'C7S9', 'We sell 100% genuine HP Pavilion Laptops in India and abroad at a very competitive price', 'c106018eadd5a650f3ac9b4b2d27d94e.jpeg', 'Pune', '9545600524', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'HP Pavilion Laptops', 'Raghav Industries', 'raghav@google.com', '9546555241', 'Pentagon Towes. Magarpatta City. Hadapsar', 'C7', 'C7S9', 'We sell 100% genuine HP Pavilion Laptops in India and abroad at a very competitive price', 'e059f06656e18b92c3925955202289e7.jpeg', 'Pune', '9545600524', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

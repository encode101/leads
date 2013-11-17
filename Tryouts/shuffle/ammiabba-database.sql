-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2013 at 10:42 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ammiabba`
--

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
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `company`, `name`, `email`, `mobile`, `address`, `category`, `subcategory`, `description`, `city`, `phone`) VALUES
(1, 'Raghav Industries Pvt Ltd.', 'Raghav Mishra', 'raghav.mishra@rgi.com', '9545600524', 'P1 605 Pentagon Towers Magarpatta City. Hadapsar.', 'C2', 'C2S9', 'We provide healthcare services & manufacture healthcare instruments.', 'Pune', '06576574494'),
(2, 'Raghav Industries Pvt Ltd.', 'Raghav Mishra', 'raghav.mishra@rgi.com', '9545600524', 'P1 605 Pentagon Towers Magarpatta City. Hadapsar.', 'C2', 'C2S9', 'We provide healthcare services & manufacture healthcare instruments.', 'Pune', '06576574494'),
(3, 'Raghav Industries Pvt Ltd.', 'Raghav Mishra', 'raghav.mishra@rgi.com', '9545600524', 'P1 605 Pentagon Towers Magarpatta City. Hadapsar.', 'C2', 'C2S9', 'We provide healthcare services & manufacture healthcare instruments.', 'Pune', '06576574494'),
(4, 'Raghav Industries Pvt Ltd.', 'Raghav Mishra', 'raghav.mishra@rgi.com', '9545600524', 'P1 605 Pentagon Towers Magarpatta City. Hadapsar.', 'C2', 'C2S9', 'We provide healthcare services & manufacture healthcare instruments.', 'Pune', '06576574494'),
(5, 'Raghav Industries Pvt Ltd.', 'Raghav Mishra', 'raghav.mishra@rgi.com', '9545600524', 'P1 605 Pentagon Towers Magarpatta City. Hadapsar.', 'C2', 'C2S9', 'We provide healthcare services & manufacture healthcare instruments.', 'Pune', '06576574494');

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

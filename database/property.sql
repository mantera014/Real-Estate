-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2015 at 03:10 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `property`
--
CREATE DATABASE IF NOT EXISTS `property` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `property`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) NOT NULL,
  `myusername` varchar(55) NOT NULL,
  `mypassword` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `myusername`, `mypassword`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_property` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `mobile_phone` varchar(11) NOT NULL,
  `cus_email` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` varchar(11) NOT NULL,
  `reason` varchar(333) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `id_property`, `name`, `mobile_phone`, `cus_email`, `date`, `time`, `reason`) VALUES
(9, 10, 'dsfsdf', 'sdfsdfsd', 'fsdfsdf', '2015-02-18', '14:01', 'sdfsdfsd'),
(10, 9, 'sa', 'dasdas', 'dasdsad', '', '', 'sadas');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(44) NOT NULL AUTO_INCREMENT,
  `reason` varchar(444) NOT NULL,
  `planning` varchar(444) NOT NULL,
  `name` varchar(444) NOT NULL,
  `no_phone` varchar(444) NOT NULL,
  `email` varchar(444) NOT NULL,
  `question` varchar(444) NOT NULL,
  PRIMARY KEY (`id_feedback`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `reason`, `planning`, `name`, `no_phone`, `email`, `question`) VALUES
(7, 'sadas', 'dasdasd', 'asdasdasdasdasd', 'dasd', 'asdasda@gmail.comasdasd', 'asdasd'),
(8, 'I am looking to rent a Property', 'renovate', 'aimran', '0144444444', 'aim@yahoo.com', 'help for renovation');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(55) NOT NULL AUTO_INCREMENT,
  `reason` varchar(333) NOT NULL,
  `name` varchar(333) NOT NULL,
  `no_fon` varchar(333) NOT NULL,
  `email` varchar(333) NOT NULL,
  `message` varchar(444) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `reason`, `name`, `no_fon`, `email`, `message`) VALUES
(5, 'I have another enquiry', 'Mohd Shahril Ikbal', '0122222222', 'shahril@gmail.com', 'i want to renovate my house at kg.pandan, kl this weekend and i want you to find  contraters to renovate my house  '),
(6, 'I am looking to rent a Property', 'Sufiyuddin', '0133333333', 'sufi@yahoo.com', 'i want to rent my house to student only area pandan indah, kl. '),
(7, 'I am looking to let a Property', 'meor syafiq', '0166666666', 'meor34@gmail.com', 'let go my home');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `id_property` int(5) NOT NULL AUTO_INCREMENT,
  `name_property` varchar(250) NOT NULL,
  `type_property` varchar(255) NOT NULL,
  `add1` varchar(300) NOT NULL,
  `add2` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `price_type` varchar(300) NOT NULL,
  `land_area` varchar(300) NOT NULL,
  `groos_floor_area` varchar(300) NOT NULL,
  `leasehold` varchar(300) NOT NULL,
  `beds` varchar(333) NOT NULL,
  `baths` varchar(333) NOT NULL,
  `contact_no` varchar(333) NOT NULL,
  `per_squre_feet` varchar(333) NOT NULL,
  `squre_feet` varchar(333) NOT NULL,
  `text` varchar(30000) NOT NULL,
  PRIMARY KEY (`id_property`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id_property`, `name_property`, `type_property`, `add1`, `add2`, `price`, `price_type`, `land_area`, `groos_floor_area`, `leasehold`, `beds`, `baths`, `contact_no`, `per_squre_feet`, `squre_feet`, `text`) VALUES
(4, 'appartmen pandan height', 'Condominium', 'lot 770 pandan perdana', '17000', '500,000.00', 'Negotiable', '79', '79', '79', '4', '3', '01111111111', '45.9', '30.9', 'viewing kl city'),
(5, 'villa ameran', 'Bungalow House', 'lorong mad', '81900', '1000000.00', 'Negotiable', 'mutiara rini', '', '', '6', '8', '0123456789', '70', '70', ''),
(6, 'azura villa', 'Bungalow House', 'lorong balakang rumah, sebelah masjid, jalan depan sikit, belah kanan', '', '123456.00', 'Negotiable', 'kubu kuat', '', '', '2', '', '', '', '', 'mere xde kawan dekat KL time raya'),
(8, 'pandan villa bestari', 'Condominium', 'pandan indah', '15100', '540,000.00', 'Guide Price', 'pandan jaya', '56', '23.12', '5', '5', '0145091646', '345.8', '345.8', 'saya nak renovate rumah ni so macam mana saya nk buat or contact siapa tuk renovate rumah');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2018 at 01:45 PM
-- Server version: 5.1.35
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thegym`
--
CREATE DATABASE `thegym` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thegym`;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `BCode` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(100) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`BCode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BCode`, `Address`, `City`, `State`, `Mobile`, `Date`) VALUES
(1, 'wz-1642', 'Delhi', 'Delhi', '9999021309', '2018-03-28'),
(2, 'wz-1642', 'Punjabi Bagh', 'Punjabi Bagh', '9958168310', '2018-03-28'),
(3, 'wz-1642', 'Shalimar Bagh', 'Shalimar Bagh', '989154992', '2018-03-28'),
(4, '', '', '', '', '2018-04-09'),
(5, '', '', '', '', '2018-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `MID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) DEFAULT NULL,
  `BCode` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`MID`, `Username`, `BCode`, `Date`) VALUES
(1, 'Admin', 2, '2018-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `PName` varchar(50) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `PDate` date DEFAULT NULL,
  `Duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PID`, `PName`, `Price`, `PDate`, `Duration`) VALUES
(1, '3M_Intense_Package@4000', 4000, '2018-04-09', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rechargepack`
--

CREATE TABLE IF NOT EXISTS `rechargepack` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) DEFAULT NULL,
  `BCode` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rechargepack`
--


-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Role` varchar(25) DEFAULT 'User',
  `Status` varchar(50) DEFAULT 'Unblock',
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `Password`, `FirstName`, `LastName`, `DOB`, `Gender`, `Email`, `Address`, `State`, `City`, `Mobile`, `Role`, `Status`) VALUES
('Admin', 'Admin', 'Kumar', 'Wadhwa', '1984-03-15', 'Male', 'abc@gmail.com', 'RB', 'Delhi', 'Delhi', '9999021309', 'Admin', 'Unblock'),
('Manager', 'Manager', 'Yash', 'Kinger', '1984-03-15', 'Male', 'abc@gmail.com', 'RB', 'Delhi', 'Delhi', '9999021309', 'Manager', 'Unblock'),
('User', 'User', 'Sumit', 'Kinger', '1984-03-15', 'Male', 'abc@gmail.com', 'RB', 'Delhi', 'Delhi', '9999021309', 'User', 'Unblock');

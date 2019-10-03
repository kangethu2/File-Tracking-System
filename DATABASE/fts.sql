-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2019 at 07:09 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(0, 'dmatere', 'e20954da6260522db674347826e2ffab', 'Denis ', 'Matere');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `department` varchar(255) NOT NULL,
  `fileUrl` varchar(255) NOT NULL,
  `insertedBy` varchar(70) NOT NULL,
  `timeInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `description`, `department`, `fileUrl`, `insertedBy`, `timeInserted`) VALUES
(10, 'ODBC', 'Oracle DB connection', 'ICT', 'upload/apag.png', 'Denis  Matere', '2019-09-24 18:04:22'),
(9, 'dob flie', 'DOB of you', 'ICT', 'upload/13.png', 'Denis  Matere', '2019-09-24 14:53:54'),
(8, 'jhhjhjh', 'hhbhhbh', 'Finance', '../admin/upload/a.png', 'Denis  Matere', '2019-09-24 14:41:49'),
(11, 'P9 FORM', 'KRA tracking data file', 'Finance', '../admin/upload/attach4.png', 'Denis  Matere', '2019-09-24 18:05:57'),
(12, 'DB USERS', 'All database users', 'ICT', 'upload/apa3.jpg', 'Denis  Matere', '2019-09-24 18:12:32'),
(13, 'FINANCE USERS', 'All users created on FMS', 'Finance', '../admin/upload/270036.JPG', ' Gilbert Njoroge', '2019-09-24 18:21:12'),
(14, 'FMS', 'My files', 'Finance', '../admin/upload/autoxpress.jpg', ' Gilbert Njoroge', '2019-09-24 18:37:53'),
(15, 'AUDIT BOOKS', 'Documents to be veiwed', 'Finance', 'upload/Capture.JPG', 'Denis  Matere', '2019-09-24 18:39:43'),
(16, 'ODVS', 'This is test data', 'ICT', '../admin/upload/270036.JPG', 'Gilbert Njoroge', '2019-09-24 19:05:07'),
(17, 'FMS', 'Our official docs', 'Finance', '../admin/upload/apa1.jpg', 'Dennis Matere', '2019-09-24 19:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `passReset` varchar(4) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `branch`, `username`, `password`, `phone`, `passReset`) VALUES
(6, 'Test Account ', 'Nairobi', 'test.test', 'd41d8cd98f00b204e9800998ecf8427e', '0722334455', 'N'),
(7, 'Dennis Matere', 'Nairobi', 'dmatere', 'e20954da6260522db674347826e2ffab', '0722334455', ''),
(8, 'Gilbert Njoroge', 'Westlands', 'gnjoroge', 'd2414b4ddcb8c055cb3a9d2f065917af', '077777798', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

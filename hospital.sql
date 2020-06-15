-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2015 at 07:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE IF NOT EXISTS `tblappointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `appointment_date` varchar(150) NOT NULL,
  `appointment_time` varchar(150) NOT NULL,
  `appointment_status` int(10) NOT NULL,
  `created_date` varchar(25) NOT NULL,
  `modify_date` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbldoctor`
--

CREATE TABLE IF NOT EXISTS `tbldoctor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sUserName` varchar(100) NOT NULL,
  `sPassword` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `creationdate` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbldoctor`
--

INSERT INTO `tbldoctor` (`id`, `name`, `sUserName`, `sPassword`, `email`, `creationdate`) VALUES
(1, 'Dr. S. Ahuja', 'sahuja', 'sahuja', 'sahuja@yahoo.com', '2015-02-20 10:52:18'),
(2, 'Dr. P Sharma', 'psharma', 'psharma', 'psharma@yahoo.com', '2015-02-21 10:52:18'),
(3, 'Dr. Neelima', 'neelima', 'aaaaa', 'neelima@gmail.com', '2015-02-27 10:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_date` varchar(25) NOT NULL,
  `modify_date` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `name`, `phone`, `email`, `password`, `created_date`, `modify_date`) VALUES
(1, 'vijay', '3333333', 'aaa@yahoo.com', 'Rzt7Us', '2015-04-15 07:22:40', '2015-04-15 07:22:40'),
(2, 'niranjan', '5555555', 'niranjan@abc.com', 'e0VlOX', '2015-04-15 07:24:25', '2015-04-15 07:24:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

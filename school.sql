-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 07:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE IF NOT EXISTS `student_record` (
  `roll` varchar(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `class` varchar(240) NOT NULL,
  `section` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`roll`, `name`, `class`, `section`) VALUES
('01', 'sharmeen', 'VI', 'a'),
('02', 'M.Anas Zain ul abedin', 'I', 'a'),
('04', 'mazz jafrani', 'Nursery', 'b'),
('06', 'Myshya ', '1', 'a'),
('07', 'Mayda', 'kg2', 'a'),
('5', 'Shahzain', 'playgroup', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

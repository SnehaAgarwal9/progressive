-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2015 at 11:15 PM
-- Server version: 5.5.40
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `sampledata`
--

CREATE TABLE IF NOT EXISTS `sampledata` (
  `A` text NOT NULL,
  `B` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sampledata`
--

INSERT INTO `sampledata` (`A`, `B`) VALUES
('pear', 'pearrowB'),
('orange', 'orangerowB'),
('mango', 'mangorowB');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

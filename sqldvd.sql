
-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 08:46 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `name` varchar(200) DEFAULT NULL,
  `des` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `no` int(9) primary key
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------


--
-- Table structure for table `fb`
--

CREATE TABLE IF NOT EXISTS `fb` (
  `name` varchar(200) DEFAULT NULL,
  `fb` varchar(200) DEFAULT NULL,
  `no` int(9)  primary key
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(200) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phno` varchar(200) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `no` int(9)  primary key
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `category` (
  `catname` varchar(200) DEFAULT NULL,  
  `no` int(9)  primary key
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `dvd` (
  `dvdname` varchar(200) DEFAULT NULL,  
  `artists` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `price` int(9) DEFAULT NULL,
 `catid` int (9) ,
  `no` int(9)  primary key,
 Foreign key(catid) references category(no)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------


CREATE TABLE IF NOT EXISTS `cart` (
  `dvdid` int(9) DEFAULT NULL ,
 `dvdname` varchar(200) DEFAULT NULL, 
 `photo` varchar(200) DEFAULT NULL,
 `qty` int(9) DEFAULT NULL,
  `price` int(9) DEFAULT NULL,
  `no` int(9) primary key
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

-- --------------------------------------------------------
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

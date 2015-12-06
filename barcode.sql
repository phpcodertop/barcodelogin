-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2015 at 09:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'ahmedhalima', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(4, 'hema', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'soheir', 'e10adc3949ba59abbe56e057f20f883e', 0),
(6, 'معتز', 'e10adc3949ba59abbe56e057f20f883e', 0),
(7, 'احمد احمد', 'e10adc3949ba59abbe56e057f20f883e', 0),
(8, 'ali', 'e10adc3949ba59abbe56e057f20f883e', 0),
(9, 'ali', 'e10adc3949ba59abbe56e057f20f883e', 0),
(10, 't', 'e10adc3949ba59abbe56e057f20f883e', 0),
(11, 's', 'e10adc3949ba59abbe56e057f20f883e', 0),
(12, 'r', 'e10adc3949ba59abbe56e057f20f883e', 0),
(13, 'z', 'e10adc3949ba59abbe56e057f20f883e', 0),
(14, 'ahmedhalima', 'd41d8cd98f00b204e9800998ecf8427e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `studentid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `content`, `studentid`) VALUES
(1, 'برنامج ادارة السيارات لمعتز', 'برنامج ادارة السيارات لمعتز برنامج ادارة السيارات لمعتز', 1),
(3, 'Semi Colon', 'Semi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi ColonSemi Colon', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `position` varchar(2) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `postoffice` varchar(255) NOT NULL,
  `notes` longtext NOT NULL,
  `receiveMail` int(11) NOT NULL,
  `receiveSms` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `family`, `position`, `city`, `phone`, `email`, `postoffice`, `notes`, `receiveMail`, `receiveSms`, `date`) VALUES
(5, 'hema', 'halima', 's', 'tanta', '01123413894', 'test@test.com', '21212', 'trytuyu', 0, 1, '2015-10-14 '),
(6, 'soheir', 'rrrrr', 'm', 'tanta', '01123413894', 'soheir@soheir.com', '544152', 'soheir@soheir.com', 1, 1, '2015-10-14 '),
(7, 'معتز', 'عبدالناصر', 's', 'غزة', '01123413894', 'motaz@motaz.com', '211445', 'jghjgffdfgs', 1, 0, '2015-10-15 '),
(8, 'احمد احمد', 'ماهر', 's', 'طنطا', '01123413894', 'ahmed@ahmed.com', '54457', 'asfgtry', 1, 1, '2015-10-15 '),
(10, 'ali', 'ali', 'n', 'ali', '01123413894', 'ali@ali.com', '31798', 'dgthgfjh', 1, 1, '2015-10-15 '),
(11, 't', 't', 's', 't', '01123413894', 't@t.com', '111111', '11111111', 1, 0, '2015-10-15 '),
(12, 's', 's', 'm', 's', '01123413894', 's@s.com', '44444', '4444', 1, 1, '2015-10-15 '),
(13, 'r', 'r', 'n', 'r', '01123413894', 'r@r.com', '111111', 'dfgfd', 1, 1, '2015-10-15 '),
(14, 'z', 'z', 'm', 'z', '01123413894', 'z@z.com', '57445', 'ddddgdf', 1, 1, '2015-10-15 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

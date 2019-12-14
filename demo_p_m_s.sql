-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 08:09 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_p_m_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `picture`, `gender`) VALUES
(1, 'atika', 'atika', 'suborno', 'alam', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `prescription` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `prescription`) VALUES
(1, 'lovely@gmail.com', 'lovely', 'anika', 'alam', '', ''),
(2, 'amirul@gmail.com', 'amirul', 'amirul', 'alam', '', ''),
(12, 'jenny@gmail.com', 'jenny', 'jenny', 'jahan', 'dhanmondi', ''),
(13, 'jenny@gmail.com', 'jenny', 'jenny', 'jahan', 'dhanmondi', ''),
(14, 'ibi@gmail.com', 'ibi', 'ibnat', 'binte', 'mirpur', ''),
(15, 'ibi@gmail.com', 'ibi', 'ibnat', 'binte', 'mirpur', ''),
(16, 'habijabi@gmail.com', 'habijabi', 'haha', 'sja', 'SHJASH', ''),
(17, 'habijabi@gmail.com', 'habijabi', 'haha', 'sja', 'SHJASH', ''),
(18, 'uiu@gmail.com', 'uiu', 'uiu', 'versity', 'badda', ''),
(19, 'uiu@gmail.com', 'uiu', 'uiu', 'versity', 'badda', ''),
(20, 'suhi@gmail.com', 'suhi', 'suhi', 'anika', 'mirpur1', ''),
(21, 'suhi@gmail.com', 'suhi', 'suhi', 'anika', 'mirpur1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

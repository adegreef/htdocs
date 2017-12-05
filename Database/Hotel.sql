-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2017 at 10:50 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `EMPLID` int(11) NOT NULL,
  `Password` int(11) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `WagePerHour` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`EMPLID`, `Password`, `Firstname`, `Lastname`, `Position`, `WagePerHour`) VALUES
(1000, 9999, 'BossMan', 'Joanna', 'Admin', 100),
(1001, 9999, 'Indiana', 'Jones', 'General', 10);

-- --------------------------------------------------------

--
-- Table structure for table `Guest`
--

CREATE TABLE `Guest` (
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Hotel`
--

CREATE TABLE `Hotel` (
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Hotel`
--

INSERT INTO `Hotel` (`Name`, `Address`, `ID`) VALUES
('Hotel Transilvania', '444 W. College Ave, Tallahassee, FL 32301', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
  `Number` varchar(30) NOT NULL,
  `Beds` varchar(30) NOT NULL,
  `Bathrooms` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `Occupied` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Room`
--

INSERT INTO `Room` (`Number`, `Beds`, `Bathrooms`, `Price`, `Occupied`) VALUES
('101', '2 Twins', '1', 100, 0),
('102', '2 Twins', '1', 100, 0),
('103', '2 Twins', '1', 100, 0),
('201', '2 Queens', '1', 149.99, 0),
('202', '2 Queens', '1', 149.99, 0),
('203', '2 Queens', '1', 149.99, 0),
('301', '2 Kings', '2', 200, 0),
('302', '2 Kings', '2', 200, 0),
('303', '2 Kings', '2', 200, 0),
('401', '1 California King', '1', 400, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`EMPLID`);

--
-- Indexes for table `Guest`
--
ALTER TABLE `Guest`
  ADD KEY `Lastname` (`Lastname`),
  ADD KEY `Lastname_2` (`Lastname`);

--
-- Indexes for table `Hotel`
--
ALTER TABLE `Hotel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`Number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Guest`
--
ALTER TABLE `Guest`
  ADD CONSTRAINT `guest_ibfk_1` FOREIGN KEY (`Lastname`) REFERENCES `Room` (`Number`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

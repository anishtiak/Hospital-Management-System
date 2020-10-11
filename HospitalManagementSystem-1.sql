-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2018 at 11:08 PM
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
-- Database: `HospitalManagementSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `Address`
--

CREATE TABLE `Address` (
  `PId` int(11) NOT NULL,
  `StreetNo` varchar(100) NOT NULL,
  `StreetName` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Thana` varchar(100) NOT NULL,
  `Dist` varchar(100) NOT NULL,
  `AddressType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Address`
--

INSERT INTO `Address` (`PId`, `StreetNo`, `StreetName`, `Area`, `Thana`, `Dist`, `AddressType`) VALUES
(10000054, '1', '1', '1', '1', '1', 'Parmanent'),
(10000054, '1', '1', '1', '1', '1', 'Parmanent'),
(10000055, '1', '1', '1', '1', '1', 'Parmanent'),
(10000055, '1', '1', '1', '1', '1', 'Parmanent'),
(10000056, '1', '1', '1', '1', '1', 'Parmanent'),
(10000056, '1', '1', '1', '1', '1', 'Parmanent'),
(10000057, '1', '1', '1', '1', '1', 'Parmanent'),
(10000057, '1', '1', '1', '1', '1', 'Parmanent'),
(10000058, '1', '1', '1', '1', '1', 'Parmanent'),
(10000058, '1', '1', '1', '1', '1', 'Parmanent'),
(10000059, '1', '1', '1', '1', '1', 'Parmanent'),
(10000059, '1', '1', '1', '1', '1', 'Parmanent'),
(10000060, '1', '1', '1', '1', '1', 'Parmanent'),
(10000060, '1', '1', '1', '1', '1', 'Parmanent');

-- --------------------------------------------------------

--
-- Table structure for table `Bed`
--

CREATE TABLE `Bed` (
  `BId` int(11) NOT NULL,
  `BStatus` varchar(20) NOT NULL,
  `PId` int(11) NOT NULL,
  `Rent` varchar(1000) NOT NULL,
  `BType` varchar(100) NOT NULL,
  `WId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `DId` int(11) NOT NULL,
  `DFName` varchar(100) NOT NULL,
  `DMName` varchar(100) NOT NULL,
  `DLName` varchar(100) NOT NULL,
  `DDOB` date NOT NULL,
  `DDOA` date NOT NULL,
  `DWorkDay` varchar(100) NOT NULL,
  `DSpecialized` varchar(100) NOT NULL,
  `DMobile` int(11) NOT NULL,
  `DExperience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Education`
--

CREATE TABLE `Education` (
  `Id` int(11) NOT NULL,
  `Degree` varchar(100) NOT NULL,
  `Board` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Division` varchar(10) NOT NULL,
  `Position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Experience`
--

CREATE TABLE `Experience` (
  `Id` int(11) NOT NULL,
  `JobTitle` varchar(100) NOT NULL,
  `From` date NOT NULL,
  `To` date NOT NULL,
  `Organization` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Id Generator`
--

CREATE TABLE `Id Generator` (
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Medicine`
--

CREATE TABLE `Medicine` (
  `MSId` int(11) NOT NULL,
  `MSName` varchar(100) NOT NULL,
  `MDOS` date NOT NULL,
  `MId` int(11) NOT NULL,
  `MName` varchar(100) NOT NULL,
  `MType` varchar(100) NOT NULL,
  `MPrice` varchar(100) NOT NULL,
  `MQuantity` varchar(1000) NOT NULL,
  `MDOM` date NOT NULL,
  `MDOE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Nurse`
--

CREATE TABLE `Nurse` (
  `NId` int(11) NOT NULL,
  `NFName` text NOT NULL,
  `NMName` varchar(100) NOT NULL,
  `NLName` varchar(100) NOT NULL,
  `NDOA` date NOT NULL,
  `NDOB` date NOT NULL,
  `NMobile` int(11) NOT NULL,
  `NDutyShift` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `PId` int(11) NOT NULL,
  `PFName` varchar(100) NOT NULL,
  `PMName` varchar(100) NOT NULL,
  `PLName` varchar(100) NOT NULL,
  `PDob` date NOT NULL,
  `PDiesesName` varchar(100) NOT NULL,
  `DiesesSeverity` varchar(100) NOT NULL,
  `SpNote` text NOT NULL,
  `PMobile1` int(11) NOT NULL,
  `PMobile2` int(11) NOT NULL,
  `PProfession` varchar(100) NOT NULL,
  `PChoice` varchar(100) NOT NULL,
  `PDoa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`PId`, `PFName`, `PMName`, `PLName`, `PDob`, `PDiesesName`, `DiesesSeverity`, `SpNote`, `PMobile1`, `PMobile2`, `PProfession`, `PChoice`, `PDoa`) VALUES
(10000054, '1', '1', '1', '1111-01-01', '', '', '', 1, 1, 'Government Job', 'Ward', '0000-00-00'),
(10000055, '1', '1', '1', '1111-01-01', '', '', '', 1, 1, 'Government Job', 'Ward', '0000-00-00'),
(10000056, '1', '1', '1', '1111-01-01', '', '', '', 1, 1, 'Government Job', 'Ward', '0000-00-00'),
(10000057, '1', '1', '1', '1111-01-01', '', '', '', 1, 1, 'Government Job', 'Ward', '0000-00-00'),
(10000058, '1', '1', '1', '1111-01-01', '', '', '', 1, 1, 'Government Job', 'Ward', '0000-00-00'),
(10000059, '1', '1', '1', '1111-01-01', '', '', '', 1, 1, 'Government Job', 'Ward', '0000-00-00'),
(10000060, '1', '1', '1', '1111-01-01', '', '', '', 1, 1, 'Government Job', 'Ward', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `Ward`
--

CREATE TABLE `Ward` (
  `WId` int(11) NOT NULL,
  `WName` varchar(100) NOT NULL,
  `WType` varchar(100) NOT NULL,
  `WardBed` varchar(100) NOT NULL,
  `Rent` int(11) NOT NULL,
  `NId` int(11) NOT NULL,
  `SId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bed`
--
ALTER TABLE `Bed`
  ADD PRIMARY KEY (`BId`);

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`DId`);

--
-- Indexes for table `Medicine`
--
ALTER TABLE `Medicine`
  ADD PRIMARY KEY (`MId`);

--
-- Indexes for table `Nurse`
--
ALTER TABLE `Nurse`
  ADD PRIMARY KEY (`NId`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `Ward`
--
ALTER TABLE `Ward`
  ADD PRIMARY KEY (`WId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

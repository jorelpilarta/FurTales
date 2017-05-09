-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 08:44 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furtalesschema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `Email` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`AdminID`),
  UNIQUE KEY `AdminID` (`AdminID`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `LastName`, `FirstName`, `ContactNumber`, `Email`) VALUES
(101, 'Donaldson', 'Duane', 922808204, 'duanedonaldson@gmail.com'),
(102, 'Dupingay', 'Joseph', 943708025, 'josephdupingay@gmail.com'),
(103, 'Fernandez', 'Alainne', 906478252, 'alainnefernandez@gmail.com'),
(104, 'Mones', 'Angelica', 995432634, 'angelicamones@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `ChatID` int(11) NOT NULL AUTO_INCREMENT,
  `StaffID` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `Message` longtext NOT NULL,
  `MessageDate` timestamp NOT NULL,
  PRIMARY KEY (`ChatID`),
  UNIQUE KEY `ChatID` (`ChatID`),
  UNIQUE KEY `StaffID` (`StaffID`),
  UNIQUE KEY `ClientID` (`ClientID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ClientID` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `ClientAddress` varchar(255) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `ClientEmail` varchar(255) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Username` varchar(45) NOT NULL,
  PRIMARY KEY (`ClientID`),
  UNIQUE KEY `ClientID` (`ClientID`),
  UNIQUE KEY `ContactNumber` (`ContactNumber`),
  UNIQUE KEY `ClientEmail` (`ClientEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ClientID`, `LastName`, `FirstName`, `ClientAddress`, `ContactNumber`, `ClientEmail`, `Password`, `Username`) VALUES
(1, 'Ugaldo', 'Jovi', 'Lower Brookside, Baguio City', 912345678, 'joviugaldo@gmail.com', '742529ca61777ddaf71420554eb93e82', 'Jovi');
(2, 'Mortel', 'Bobbie', 'Sumulong Street, Baguio City', 194747643, 'bdm.mortie@yahoo.com', '5c0d1897a4ef0d5315d6a3d793cb5048', 'Bobbie');
(3, 'Pilarta', 'Ysmael', 'Bonifacio Street, Baguio City', 943593564, 'joelpilartal@gmail.com', '63b5872f7ef84e4cde0a8555266562c4', 'Ysmael');
(4, 'Soriano', 'Rosmella', 'QM, Baguio City', 932623257, 'rosmellajhoy@yahoo.com', '17a05e89e0a1235366b67aa1f938ca38', 'Rosmella');
-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `LogID` int(11) NOT NULL AUTO_INCREMENT,
  `ServiceID` int(11) NOT NULL,
  `TransactionID` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `StaffID` int(11) NOT NULL,
  `LogDate` date NOT NULL,
  `LogTime` time(6) NOT NULL,
  PRIMARY KEY (`LogID`),
  UNIQUE KEY `LogID` (`LogID`),
  UNIQUE KEY `ServiceID` (`ServiceID`),
  UNIQUE KEY `TransactionID` (`TransactionID`),
  UNIQUE KEY `ClientID` (`ClientID`),
  UNIQUE KEY `StaffID` (`StaffID`),
  UNIQUE KEY `LogDate_UNIQUE` (`LogDate`),
  UNIQUE KEY `LogTime_UNIQUE` (`LogTime`),
  KEY `Date_idx` (`LogDate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `ServiceID` int(11) NOT NULL AUTO_INCREMENT,
  `ServiceName` varchar(255) NOT NULL,
  `ServiceDescription` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`ServiceID`),
  UNIQUE KEY `ServiceID` (`ServiceID`),
  UNIQUE KEY `ServiceName` (`ServiceName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

DROP TABLE IF EXISTS `serviceprovider`;
CREATE TABLE IF NOT EXISTS `serviceprovider` (
  `StaffID` int(11) NOT NULL AUTO_INCREMENT,
  `ServiceID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `StaffEmail` varchar(255) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  PRIMARY KEY (`StaffID`),
  UNIQUE KEY `StaffID` (`StaffID`),
  UNIQUE KEY `ServiceID` (`ServiceID`),
  UNIQUE KEY `LastName` (`LastName`),
  UNIQUE KEY `FirstName` (`FirstName`),
  UNIQUE KEY `StaffEmail` (`StaffEmail`),
  UNIQUE KEY `ContactNumber` (`ContactNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `TransactionID` int(11) NOT NULL AUTO_INCREMENT,
  `StaffID` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `ServiceID` int(11) NOT NULL,
  `TransactionDate` date NOT NULL,
  `TransactionTime` time(6) NOT NULL,
  `Price` double NOT NULL,
  `PaymentStatus` text NOT NULL,
  PRIMARY KEY (`TransactionID`),
  UNIQUE KEY `TransactionID` (`TransactionID`),
  UNIQUE KEY `StaffID` (`StaffID`),
  UNIQUE KEY `ClientID` (`ClientID`),
  UNIQUE KEY `ServiceID` (`ServiceID`),
  UNIQUE KEY `TransactionTime_UNIQUE` (`TransactionTime`),
  UNIQUE KEY `TransactionDate_UNIQUE` (`TransactionDate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `ClientID` FOREIGN KEY (`ClientID`) REFERENCES `client` (`ClientID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `StaffID` FOREIGN KEY (`StaffID`) REFERENCES `serviceprovider` (`StaffID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `Date` FOREIGN KEY (`LogDate`) REFERENCES `transaction` (`TransactionDate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `EmployeeID` FOREIGN KEY (`StaffID`) REFERENCES `serviceprovider` (`StaffID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ServicesID` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `TransactionID` FOREIGN KEY (`TransactionID`) REFERENCES `transaction` (`TransactionID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `UserID` FOREIGN KEY (`ClientID`) REFERENCES `client` (`ClientID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD CONSTRAINT `ServiceID` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `CustomerID` FOREIGN KEY (`ClientID`) REFERENCES `client` (`ClientID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `LaborID` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

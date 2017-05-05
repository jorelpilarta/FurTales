-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 04:07 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furtales`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` smallint(5) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `admin_cn` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `last_name`, `first_name`, `admin_cn`) VALUES
(100, 'Gates', 'Bill', '09198454596'),
(101, 'Jobs', 'Steve', '09177892578');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `message_id` smallint(5) NOT NULL,
  `sender` smallint(5) NOT NULL,
  `receiver` smallint(5) NOT NULL,
  `timestamp` timestamp(6) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` smallint(5) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client_cn` varchar(13) NOT NULL,
  `client_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `last_name`, `first_name`, `client_address`, `client_cn`, `client_email`) VALUES
(3000, 'Mortel', 'Bobbie', '123 Fake Street', '09774835197', 'mortelbobbie@gmail.com'),
(3001, 'Ugaldo', 'Jovi', '456 Real Street', '09271523259', 'ugaldojovi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` smallint(5) NOT NULL,
  `service_name` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `service_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `price`, `service_description`) VALUES
(4000, 'Bath and Tidy', 500, 'Full body bath'),
(4001, 'Full Style and Groom', 600, 'Full style and groom'),
(4002, 'Pamper Me', 650, 'Full groom with 5 minute therapeutic massage');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `staff_id` smallint(5) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `service_id` smallint(5) NOT NULL,
  `sp_email` varchar(50) NOT NULL,
  `sp_cn` varchar(13) NOT NULL,
  `sp_pw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`staff_id`, `last_name`, `first_name`, `service_id`, `sp_email`, `sp_cn`, `sp_pw`) VALUES
(2000, 'Liwanag', 'John Derick', 4000, 'liwanag.john1234@gmail.com', '09269543937', '1234'),
(2001, 'Mendez', 'Camila', 4001, 'mendezcamila@gmail.com', '09152044933', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` smallint(5) NOT NULL,
  `client_id` smallint(5) NOT NULL,
  `payment_status` varchar(10) NOT NULL DEFAULT 'Not Paid',
  `transactions_date` date NOT NULL,
  `transaction_time` time NOT NULL,
  `price` double NOT NULL,
  `service_id` smallint(5) NOT NULL,
  `staff_id` smallint(5) NOT NULL,
  `request_status` varchar(10) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `client_id`, `payment_status`, `transactions_date`, `transaction_time`, `price`, `service_id`, `staff_id`, `request_status`) VALUES
(5002, 3000, 'Paid', '2017-05-05', '10:00:00', 100, 4000, 2000, 'Accepted'),
(5003, 3000, 'Paid', '2017-05-05', '11:00:00', 50, 4001, 2000, 'Accepted'),
(5004, 3000, 'Not Paid', '2017-05-05', '04:00:00', 200, 4002, 2000, 'Accepted'),
(5005, 3001, 'Not Paid', '2017-05-05', '04:00:00', 300, 4000, 2000, 'Accepted'),
(5006, 3000, 'Not Paid', '2017-05-08', '08:00:00', 200, 4002, 2000, 'Pending'),
(5007, 3000, 'Not Paid', '2017-05-10', '07:00:00', 300, 4000, 2000, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`message_id`),
  ADD UNIQUE KEY `message_id_UNIQUE` (`message_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `message_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7001;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3002;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;
--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `staff_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5008;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `service_id` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`),
  ADD CONSTRAINT `staff_id` FOREIGN KEY (`staff_id`) REFERENCES `service_provider` (`staff_id`),
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

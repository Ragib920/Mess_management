-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 04:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(1, 'ragib@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cost_information`
--

CREATE TABLE `cost_information` (
  `cost_ID` int(11) NOT NULL,
  `Cost_name` text NOT NULL,
  `amount` int(11) NOT NULL,
  `cost_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost_information`
--

INSERT INTO `cost_information` (`cost_ID`, `Cost_name`, `amount`, `cost_date`) VALUES
(19, 'ragib', 500, '2019-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `meal_info`
--

CREATE TABLE `meal_info` (
  `mi_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `meal` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_info`
--

INSERT INTO `meal_info` (`mi_id`, `m_id`, `meal`, `date`) VALUES
(58, 20, 2, '2019-02-02'),
(59, 21, 2, '2019-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `gmail` text NOT NULL,
  `address` text NOT NULL,
  `file_name` text NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`ID`, `name`, `phone`, `gmail`, `address`, `file_name`, `join_date`) VALUES
(20, 'ajshjasas', '01701034345', 'asdnbv@gmail.com', 'Rangpur', '', '2019-02-02'),
(21, 'ASAS', '0196363363', 'ragib@gmail.com', 'cumilla', '', '2019-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `payment_information`
--

CREATE TABLE `payment_information` (
  `payment_id` int(11) NOT NULL,
  `payment_name` text NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_information`
--

INSERT INTO `payment_information` (`payment_id`, `payment_name`, `payment_amount`, `payment_date`) VALUES
(5, 'ragib', 500, '2019-02-02'),
(6, 'ragib', 1000, '2019-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cost_information`
--
ALTER TABLE `cost_information`
  ADD PRIMARY KEY (`cost_ID`);

--
-- Indexes for table `meal_info`
--
ALTER TABLE `meal_info`
  ADD PRIMARY KEY (`mi_id`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment_information`
--
ALTER TABLE `payment_information`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cost_information`
--
ALTER TABLE `cost_information`
  MODIFY `cost_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `meal_info`
--
ALTER TABLE `meal_info`
  MODIFY `mi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment_information`
--
ALTER TABLE `payment_information`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

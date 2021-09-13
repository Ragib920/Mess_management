-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 03:22 PM
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
-- Database: `mess_management`
--

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
(1, 'ragib', 500, ''),
(2, 'shuvo', 1000, ''),
(3, 'tanvir', 500, ''),
(4, 'roky', 230, ''),
(5, 'ragib', 2000, ''),
(6, 'ragib', 200, ''),
(7, 'tanvir', 1000, ''),
(8, 'fgt', 210, ''),
(9, 'shuvo', 500, '');

-- --------------------------------------------------------

--
-- Table structure for table `meal_info`
--

CREATE TABLE `meal_info` (
  `meal_id` int(11) NOT NULL,
  `Ragib` int(11) NOT NULL,
  `Shuvo` int(11) NOT NULL,
  `Mostafiz` int(11) NOT NULL,
  `Tahmid` int(11) NOT NULL,
  `Roky` int(11) NOT NULL,
  `Shakil` int(11) NOT NULL,
  `Mithun` int(11) NOT NULL,
  `Kiron` int(11) NOT NULL,
  `Tanvir` int(11) NOT NULL,
  `Nafis` int(11) NOT NULL,
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_info`
--

INSERT INTO `meal_info` (`meal_id`, `Ragib`, `Shuvo`, `Mostafiz`, `Tahmid`, `Roky`, `Shakil`, `Mithun`, `Kiron`, `Tanvir`, `Nafis`, `a_date`) VALUES
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '0000-00-00'),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0000-00-00'),
(4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '0000-00-00'),
(5, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '0000-00-00'),
(6, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '0000-00-00'),
(7, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '0000-00-00'),
(8, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '0000-00-00'),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00');

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
  `m_image` text NOT NULL,
  `jaoin_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`ID`, `name`, `phone`, `gmail`, `address`, `m_image`, `jaoin_date`) VALUES
(8, 'monirul', '01792761414', 'asdnbv@gmail.com', 'Rangpur', '', ''),
(9, 'Ragib Shahriar', '01792761414', 'asdnbv@gmail.com', 'Rangpur,Kaunia', '', ''),
(11, 'Ragib Shahriar', '4564562456', 'asdnbv@gmail.com', 'Rangpur', '', ''),
(13, 'ceo', '01701034345', 'asdnbv@gmail.com', 'Rangpur', '', '');

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
(1, 'ragib', 2000, ''),
(2, 'Ragib', 100, ''),
(3, 'mon', 1000, ''),
(4, 'ragib', 500, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cost_information`
--
ALTER TABLE `cost_information`
  ADD PRIMARY KEY (`cost_ID`);

--
-- Indexes for table `meal_info`
--
ALTER TABLE `meal_info`
  ADD PRIMARY KEY (`meal_id`);

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
-- AUTO_INCREMENT for table `cost_information`
--
ALTER TABLE `cost_information`
  MODIFY `cost_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `meal_info`
--
ALTER TABLE `meal_info`
  MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment_information`
--
ALTER TABLE `payment_information`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

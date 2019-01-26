-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 05:08 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_assistant`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `admin_id` varchar(50) NOT NULL,
  `passward` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `name`, `admin_id`, `passward`, `photo`, `status`) VALUES
(1, 'Md. Parvez', '4987', '123456', 'parvez.jpg', 0),
(2, 'Md. Morsalin', '4967', '123456', 'morsalin.jpg', 1),
(3, 'Halima Akter Eity', '4968', '123456', 'eity.jpg', 1),
(4, 'parvz', '1111', '1111', 'admin-1541193030-521ecbb1312ba7da134270ba094da8b1.jpg', 1),
(5, 'emon', '4444', '4444', 'admin-1541245010-0a047449edf69448c30290e318f23279.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_type` varchar(100) NOT NULL,
  `b_photo` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `b_name`, `b_type`, `b_photo`, `status`) VALUES
(1, 'Pubali Bank Limited', 'Private', 'bank-1541198089-521dc0b5a8058b72e16d3d3e8357f768.jpg', 1),
(2, 'Islami Bank Bangladesh Ltd.', 'Private', 'bank-1541198104-39c20284cea54863cd7364635f537343.jpg', 1),
(3, 'BRAC Bank Limited', 'Private', 'bank-1541198138-b99c30c07262202e9f06cfe06939e168.jpg', 1),
(4, 'Dhaka Bank Limited', 'Private', 'bank-1541198194-e835b6e59c2bea369455be42a0ba85d3.jpg', 1),
(5, 'National Bank Limited', 'Govermental', 'bank-1541198204-41b388b1c94a67752c29f62a6b12b0fa.jpg', 1),
(6, 'Standard Bank Limited', 'Private', 'bank-1541244912-881fcaded478c7b47a0be6bea0b8f38b.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_policy`
--

CREATE TABLE `bank_policy` (
  `id` int(11) NOT NULL,
  `bank_id` varchar(100) NOT NULL,
  `poilicy_id` int(10) NOT NULL,
  `poilicy_expiration` int(20) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `poilicy_interest` varchar(20) NOT NULL,
  `poilicy_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_policy`
--

INSERT INTO `bank_policy` (`id`, `bank_id`, `poilicy_id`, `poilicy_expiration`, `amount`, `poilicy_interest`, `poilicy_details`) VALUES
(1, '1', 2, 3, '500', '7.50', ''),
(2, '1', 2, 3, '10000', '7.50', ''),
(3, '1', 2, 5, '15000', '8.50', ''),
(4, '1', 2, 7, '25000', '9.00', ''),
(5, '1', 2, 10, '30000', '9.00', ''),
(6, '1', 4, 12, 'Any Amount', '7', ''),
(7, '1', 4, 6, 'Any Amount', '6.5', ''),
(8, '2', 4, 3, 'Any Amount', '7', ''),
(9, '2', 4, 1, 'Any Amount', '6.70', ''),
(10, '2', 2, 5, '5000', '6.50', ''),
(11, '2', 2, 10, '5000', '7.0', ''),
(12, '1', 3, 6, '1000000', '9', ''),
(13, '6', 4, 5, '250000', '7', 'something');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `bank_name`, `photo`, `status`, `date`) VALUES
(1, 'Islami Bank Bangladesh Ltd.', 'banner-1541197407-7368a605424c892197c5fc1743f2d3b1.jpg', 0, 0),
(2, 'Pubali Bank Limited', 'banner-1541197425-1505e04a5567a8584c7f15331e2e3db2.jpg', 0, 0),
(3, 'Bank Assistant BD', 'banner-1541197446-cf1d15ac3ce0255dd636fb020e51a23a.jpg', 1, 0),
(5, 'Pubali Bank Limited', 'banner-1541244885-53f11e9f142ad7e4c5943c25758ffa05.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_company`
--

CREATE TABLE `insurance_company` (
  `insurance_id` int(11) NOT NULL,
  `ins_com_name` varchar(100) NOT NULL,
  `ins_com_type` varchar(100) NOT NULL,
  `ins_com_photo` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_company`
--

INSERT INTO `insurance_company` (`insurance_id`, `ins_com_name`, `ins_com_type`, `ins_com_photo`, `status`) VALUES
(1, 'Jiban Bima Corporation', 'Govermental', 'bank-1540149638-4afb2a9d181545a320cd70054847b224.jpg', 1),
(2, 'Sadharan Bima Corporation', 'Govermental', 'bank-1540149638-4afb2a9d181545a320cd70054847b224.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_poilicy`
--

CREATE TABLE `insurance_poilicy` (
  `id` int(11) NOT NULL,
  `insurance_id` int(10) NOT NULL,
  `poilicy_id` int(10) NOT NULL,
  `insurance_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_poilicy`
--

INSERT INTO `insurance_poilicy` (`id`, `insurance_id`, `poilicy_id`, `insurance_details`) VALUES
(1, 1, 1, 'jghfdxzxcvbnm,'),
(2, 2, 1, 'many detailos are here'),
(3, 1, 3, 'saving account here');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, 'Parvez Sarker', 'parvez4987@gmail.com', 'the messages', 1);

-- --------------------------------------------------------

--
-- Table structure for table `poilicy`
--

CREATE TABLE `poilicy` (
  `poilicy_id` int(11) NOT NULL,
  `poilicy_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poilicy`
--

INSERT INTO `poilicy` (`poilicy_id`, `poilicy_name`, `status`) VALUES
(1, 'Loan', 1),
(2, 'Deopsit', 1),
(3, 'Savings Account', 1),
(4, 'Fix Deposit (FDR)', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bank_policy`
--
ALTER TABLE `bank_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_company`
--
ALTER TABLE `insurance_company`
  ADD PRIMARY KEY (`insurance_id`);

--
-- Indexes for table `insurance_poilicy`
--
ALTER TABLE `insurance_poilicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poilicy`
--
ALTER TABLE `poilicy`
  ADD PRIMARY KEY (`poilicy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bank_policy`
--
ALTER TABLE `bank_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insurance_company`
--
ALTER TABLE `insurance_company`
  MODIFY `insurance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `insurance_poilicy`
--
ALTER TABLE `insurance_poilicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poilicy`
--
ALTER TABLE `poilicy`
  MODIFY `poilicy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

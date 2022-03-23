-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 04:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhruvin_pennydrop`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_account`
--

CREATE TABLE `company_account` (
  `id` int(20) NOT NULL,
  `Company_name` varchar(20) NOT NULL,
  `Account_no` varchar(20) NOT NULL,
  `IFSC_CODE` varchar(20) NOT NULL,
  `Branch_Name` varchar(20) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `Date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_account`
--

INSERT INTO `company_account` (`id`, `Company_name`, `Account_no`, `IFSC_CODE`, `Branch_Name`, `Amount`, `Date_time`, `Status`) VALUES
(46, 'Welspun', '1234567890', 'sbin1238', 'Vapi', '1', '2022-03-22 10:18:56', ''),
(48, 'EE', '123', 'WW', 'WW', 'WWW', '2022-03-22 15:17:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sr_no` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `auth_id` varchar(30) NOT NULL,
  `status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sr_no`, `name`, `username`, `password`, `auth_id`, `status`) VALUES
(2, 'Dhruvin', 'welspun', 'welspun', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_account`
--

CREATE TABLE `vendor_account` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Account_no` varchar(20) NOT NULL,
  `IFSC_CODE` varchar(20) NOT NULL,
  `Branch_Name` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Data_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_account`
--

INSERT INTO `vendor_account` (`id`, `Name`, `Account_no`, `IFSC_CODE`, `Branch_Name`, `Status`, `Data_time`) VALUES
(38, 'fsdfsdf', '634523', 'dsgdx', 'gerretgre', '2', '2022-03-23 13:31:16'),
(39, 'fsdfsdf', '2345', 'fegdf', 'gfdf', '2', '2022-03-23 13:31:16'),
(40, 'fds', '2354365', 's', 'ew', '2', '2022-03-23 13:31:16'),
(41, 'fsdfsdf', '34564', 'gds', 'ds', '2', '2022-03-23 13:31:16'),
(42, 'Patel Dhruvin', '123', 's', 'sss', '', '2022-03-23 13:33:33'),
(43, 'Name', 'Account_no', 'IFSC_CODE', 'Branch_Name', '2', '2022-03-23 16:43:05'),
(44, 'sdfds', '23534543', 'ertrwe', 'trw', '2', '2022-03-23 16:43:05'),
(45, 'fsdfsdf', '23423', 'wetwet', 'sdgfs', '2', '2022-03-23 16:43:05'),
(46, 'sdfsd', '345346', 'xgf', 'gerretgre', '2', '2022-03-23 16:43:05'),
(47, 'fsdfsdf', '634523', 'dsgdx', 'gerretgre', '2', '2022-03-23 16:43:05'),
(48, 'fsdfsdf', '2345', 'fegdf', 'gfdf', '2', '2022-03-23 16:43:05'),
(49, 'fds', '2354365', 's', 'ew', '2', '2022-03-23 16:43:05'),
(50, 'fsdfsdf', '34564', 'gds', 'ds', '2', '2022-03-23 16:43:06'),
(51, '123', '123', '12mssms', 'qww', '', '2022-03-23 17:44:42'),
(52, '123', '123', '12mssms', 'qww', '', '2022-03-23 17:46:58'),
(53, 'Patel Dhruvin', '123', 'qqqq', 'qww', '', '2022-03-23 17:47:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_account`
--
ALTER TABLE `company_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_account`
--
ALTER TABLE `vendor_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_account`
--
ALTER TABLE `company_account`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sr_no` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_account`
--
ALTER TABLE `vendor_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

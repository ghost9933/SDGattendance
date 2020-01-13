-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 06:04 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `OTP` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`username`, `password`, `Email_id`, `phone_no`, `OTP`) VALUES
('admin', '1', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Sem` varchar(5) NOT NULL,
  `Subject_code` varchar(15) NOT NULL,
  `Subject_name` varchar(50) NOT NULL,
  `Subject_shortname` varchar(6) NOT NULL,
  `Year` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coursemapping`
--

CREATE TABLE `coursemapping` (
  `Sdrn` varchar(8) NOT NULL,
  `Subject_code` varchar(15) NOT NULL,
  `Year` varchar(2) NOT NULL,
  `Division` varchar(1) NOT NULL,
  `Batch` varchar(5) NOT NULL,
  `Lec_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Sdrn` varchar(8) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Contact_no` bigint(10) NOT NULL,
  `Addr` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Doj` date NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Desig` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `OTP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Sdrn`, `First_name`, `Middle_name`, `Last_name`, `DOB`, `Contact_no`, `Addr`, `Email`, `Doj`, `Qualification`, `Desig`, `Password`, `OTP`) VALUES
('1', 'test', 'test', 'test', '0000-00-00', 0, '', '', '0000-00-00', '', '', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_rec`
--

CREATE TABLE `faculty_rec` (
  `Sdrn` varchar(5) NOT NULL,
  `Sub_code` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Year` varchar(5) NOT NULL,
  `Division` varchar(5) NOT NULL,
  `Batch` varchar(5) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_atten_fy`
--

CREATE TABLE `master_atten_fy` (
  `Roll_no` varchar(8) NOT NULL,
  `Date` date NOT NULL,
  `Time_start` time NOT NULL,
  `Subject_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_atten_ly`
--

CREATE TABLE `master_atten_ly` (
  `Roll_no` varchar(8) NOT NULL,
  `Date` date NOT NULL,
  `Time_start` time NOT NULL,
  `Subject_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_atten_sy`
--

CREATE TABLE `master_atten_sy` (
  `Roll_no` varchar(8) NOT NULL,
  `Date` date NOT NULL,
  `Time_start` time NOT NULL,
  `Subject_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_atten_ty`
--

CREATE TABLE `master_atten_ty` (
  `Roll_no` varchar(8) NOT NULL,
  `Date` date NOT NULL,
  `Time_start` time NOT NULL,
  `Subject_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `special_percent_fy`
--

CREATE TABLE `special_percent_fy` (
  `Roll_no` varchar(8) NOT NULL,
  `Percent_add` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `special_percent_ly`
--

CREATE TABLE `special_percent_ly` (
  `Roll_no` varchar(8) NOT NULL,
  `Percent_add` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `special_percent_sy`
--

CREATE TABLE `special_percent_sy` (
  `Roll_no` varchar(8) NOT NULL,
  `Percent_add` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `special_percent_ty`
--

CREATE TABLE `special_percent_ty` (
  `Roll_no` varchar(8) NOT NULL,
  `Percent_add` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_record`
--

CREATE TABLE `stu_record` (
  `Roll_no` varchar(12) NOT NULL,
  `Serial_no` int(11) NOT NULL,
  `Last_name` varchar(12) DEFAULT NULL,
  `First_name` varchar(25) DEFAULT NULL,
  `Middle_name` varchar(25) DEFAULT NULL,
  `Year` varchar(5) DEFAULT NULL,
  `Division` varchar(5) DEFAULT NULL,
  `Batch` varchar(5) DEFAULT NULL,
  `Password` varchar(50) NOT NULL DEFAULT '123',
  `Phone_no` int(10) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `OTP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Subject_code`),
  ADD KEY `Year` (`Year`);

--
-- Indexes for table `coursemapping`
--
ALTER TABLE `coursemapping`
  ADD UNIQUE KEY `Sdrn_2` (`Sdrn`,`Subject_code`,`Year`,`Division`),
  ADD KEY `Sdrn` (`Sdrn`),
  ADD KEY `Subject_code` (`Subject_code`),
  ADD KEY `Year` (`Year`),
  ADD KEY `Division` (`Division`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Sdrn`);

--
-- Indexes for table `faculty_rec`
--
ALTER TABLE `faculty_rec`
  ADD UNIQUE KEY `Sdrn_2` (`Sdrn`,`Sub_code`,`Date`,`Time`,`Year`,`Division`),
  ADD UNIQUE KEY `Sdrn_3` (`Sdrn`,`Sub_code`,`Date`,`Time`,`Year`,`Division`),
  ADD UNIQUE KEY `Sdrn_4` (`Sdrn`,`Sub_code`,`Date`,`Time`,`Year`,`Division`),
  ADD UNIQUE KEY `Sdrn_5` (`Sdrn`,`Sub_code`,`Date`,`Time`,`Year`,`Division`),
  ADD KEY `Sdrn` (`Sdrn`),
  ADD KEY `Sub_code` (`Sub_code`);

--
-- Indexes for table `master_atten_fy`
--
ALTER TABLE `master_atten_fy`
  ADD KEY `Roll_no` (`Roll_no`),
  ADD KEY `Subject_code` (`Subject_code`);

--
-- Indexes for table `master_atten_ly`
--
ALTER TABLE `master_atten_ly`
  ADD UNIQUE KEY `Roll_no` (`Roll_no`,`Date`,`Time_start`,`Subject_code`);

--
-- Indexes for table `master_atten_sy`
--
ALTER TABLE `master_atten_sy`
  ADD UNIQUE KEY `Roll_no` (`Roll_no`,`Date`,`Time_start`,`Subject_code`);

--
-- Indexes for table `master_atten_ty`
--
ALTER TABLE `master_atten_ty`
  ADD UNIQUE KEY `Roll_no_2` (`Roll_no`,`Date`,`Time_start`,`Subject_code`),
  ADD KEY `Roll_no` (`Roll_no`),
  ADD KEY `Subject_code` (`Subject_code`);

--
-- Indexes for table `special_percent_fy`
--
ALTER TABLE `special_percent_fy`
  ADD UNIQUE KEY `Roll_no` (`Roll_no`);

--
-- Indexes for table `special_percent_ly`
--
ALTER TABLE `special_percent_ly`
  ADD UNIQUE KEY `Roll_no` (`Roll_no`,`Percent_add`,`Category`);

--
-- Indexes for table `special_percent_sy`
--
ALTER TABLE `special_percent_sy`
  ADD UNIQUE KEY `Roll_no` (`Roll_no`,`Percent_add`,`Category`),
  ADD UNIQUE KEY `Roll_no_2` (`Roll_no`,`Percent_add`,`Category`);

--
-- Indexes for table `special_percent_ty`
--
ALTER TABLE `special_percent_ty`
  ADD UNIQUE KEY `Roll_no` (`Roll_no`);

--
-- Indexes for table `stu_record`
--
ALTER TABLE `stu_record`
  ADD PRIMARY KEY (`Roll_no`),
  ADD KEY `Serial_no_index` (`Serial_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_rec`
--
ALTER TABLE `faculty_rec`
  ADD CONSTRAINT `SDRN` FOREIGN KEY (`Sdrn`) REFERENCES `faculty` (`Sdrn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

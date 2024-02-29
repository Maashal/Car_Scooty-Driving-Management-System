-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 10:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_scooty_driving_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admnid` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `userpasswrd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admnid`, `name`, `userid`, `userpasswrd`) VALUES
(1, 'Hasnain Ahmed', 'admin@email.com', 'admin'),
(2, 'Adminstrative', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `bookingstable`
--

CREATE TABLE `bookingstable` (
  `hid` int(11) NOT NULL,
  `packagesID` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `class_timing` varchar(50) NOT NULL,
  `comments` tinytext NOT NULL,
  `h_status` char(50) NOT NULL,
  `h_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingstable`
--

INSERT INTO `bookingstable` (`hid`, `packagesID`, `tid`, `sid`, `class_timing`, `comments`, `h_status`, `h_date`) VALUES
(1, 1, 1, 1, '13:46', 'Looking for possitive response', 'Accepted', '2020-09-10'),
(2, 2, 2, 1, '12:49', 'Kindly response me soon', 'Pending', '2020-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `packagestable`
--

CREATE TABLE `packagestable` (
  `pid` int(11) NOT NULL,
  `p_name` char(100) NOT NULL,
  `p_charges` float NOT NULL,
  `p_detail` varchar(350) NOT NULL,
  `pstatus` char(25) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packagestable`
--

INSERT INTO `packagestable` (`pid`, `p_name`, `p_charges`, `p_detail`, `pstatus`) VALUES
(1, 'Starter Pack', 5000, 'Bike and Scooty for 10 days 4 days theory + 6 Practicle', 'Active'),
(2, 'Advance  Pack', 12000, 'Car (min cars only 15 days classes Theory + Practical', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `studenttable`
--

CREATE TABLE `studenttable` (
  `sid` int(11) NOT NULL,
  `s_name` char(100) NOT NULL,
  `s_contact` bigint(11) NOT NULL,
  `s_gender` char(25) NOT NULL,
  `s_city` char(50) NOT NULL,
  `s_raddress` varchar(255) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_loginpasswrd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studenttable`
--

INSERT INTO `studenttable` (`sid`, `s_name`, `s_contact`, `s_gender`, `s_city`, `s_raddress`, `s_email`, `s_loginpasswrd`) VALUES
(1, 'Hasnain Ahmed', 312535556, 'Male', 'Chakwal', '  Punjab Pakistan', 'hasnain@email.com', '1234'),
(3, 'Faiza Malik', 2147483647, 'Female', 'Rawalpindi', 'Chaklala, ', 'faiza@email.com', '1234'),
(8, 'Faisal ALi1', 21312, 'Female', '21312', ' 23/3, Officers Colony, 2nd & 3rd Floor, Near Chungi No. 9, Bosan Road, Multan', 'dddd@gmao.com', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `trainertable`
--

CREATE TABLE `trainertable` (
  `tid` int(11) NOT NULL,
  `t_name` char(100) NOT NULL,
  `t_gender` char(25) NOT NULL,
  `t_contact` varchar(25) NOT NULL,
  `t_city` varchar(100) NOT NULL,
  `t_address` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL,
  `servicedetail` text NOT NULL,
  `vehicle_detail` varchar(255) NOT NULL,
  `t_email` varchar(100) NOT NULL,
  `t_loginpasswrd` varchar(50) NOT NULL,
  `t_status` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainertable`
--

INSERT INTO `trainertable` (`tid`, `t_name`, `t_gender`, `t_contact`, `t_city`, `t_address`, `experience`, `servicedetail`, `vehicle_detail`, `t_email`, `t_loginpasswrd`, `t_status`) VALUES
(1, 'Ayesha Zahid', 'Female', '312576831', 'Karachi', '   Karach', 10, 'I can teach you cars in very friendly environment and also can teach you all rules for traffic to passed driving test for license', 'Car', 'ayeshaz@email.com', '1234', 'Active'),
(2, 'Muhammad Faisal', 'Male', '0313000000', 'Rawalpindi', 'Saddar', 13, 'I have 13 years experience and can teach all type of vehicle', 'Scooty/Bike, Car, Public Transport Vehicles ', 'faisal@email.com', '1234', 'Active'),
(3, 'Baqir Ali', 'Male', '0313000000', 'Gujranwala', 'Gujranwala', 8, 'I have 8 years experience and can teach bike rikshaw scooty and cars', 'Scooty/Bike, Car', 'baqir@email.com', '1234', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admnid`);

--
-- Indexes for table `bookingstable`
--
ALTER TABLE `bookingstable`
  ADD PRIMARY KEY (`hid`),
  ADD KEY `FK_tr` (`tid`),
  ADD KEY `FK_st` (`sid`);

--
-- Indexes for table `packagestable`
--
ALTER TABLE `packagestable`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `trainertable`
--
ALTER TABLE `trainertable`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admnid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookingstable`
--
ALTER TABLE `bookingstable`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packagestable`
--
ALTER TABLE `packagestable`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studenttable`
--
ALTER TABLE `studenttable`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trainertable`
--
ALTER TABLE `trainertable`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingstable`
--
ALTER TABLE `bookingstable`
  ADD CONSTRAINT `FK_st` FOREIGN KEY (`sid`) REFERENCES `studenttable` (`sid`),
  ADD CONSTRAINT `FK_tr` FOREIGN KEY (`tid`) REFERENCES `trainertable` (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

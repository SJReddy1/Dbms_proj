-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 05:50 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE `athlete` (
  `A_ID` int(8) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `EmailId` varchar(50) DEFAULT NULL,
  `Phone` varchar(30) DEFAULT NULL,
  `Gender` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Education` varchar(30) DEFAULT NULL,
  `Sports` varchar(30) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`A_ID`, `Name`, `EmailId`, `Phone`, `Gender`, `DOB`, `Education`, `Sports`, `Address`, `Profile`) VALUES
(10, 'Jitu', '20bec106@gmail.com', '9658743210', 'male', '2021-10-09', 'hsc', 'cricket', 'Shiv Nagar, Mouda, Maharashtra', 'profile/jitu.jpeg'),
(20, 'Amit', 'akshay@gmail.com', '8965874563', 'male', '2021-10-08', 'ug', 'football', 'ganj Road, Ahemdabad, Gujarat', 'profile/Q3_lab8.png');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `C_ID` int(15) NOT NULL,
  `C_Name` varchar(15) DEFAULT NULL,
  `EXP` int(8) DEFAULT NULL,
  `C_Phone` varchar(50) DEFAULT NULL,
  `C_Street` varchar(50) DEFAULT NULL,
  `C_City` varchar(15) DEFAULT NULL,
  `C_State` varchar(15) DEFAULT NULL,
  `sports` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`C_ID`, `C_Name`, `EXP`, `C_Phone`, `C_Street`, `C_City`, `C_State`, `sports`) VALUES
(1, 'Vikram Singh', 5, '8796541230', 'Vaninagar', 'Balaghat', 'Maharashtra', 'Archery'),
(2, 'Ravi Panwar', 4, '9875641230', 'Chandni Chowk', 'New Delhi', 'New Delhi', 'Diving'),
(3, 'Jay Ghana', 6, '7896541230', 'Vaishali Township', 'Bhopal', 'Madhya Pradesh', 'Badminton'),
(4, 'Harshal Nahta', 5, '9876521230', 'Rampeth', 'Raibarerli', 'Uttar Pradesh', 'Athletics'),
(5, 'Shivaji Rao', 4, '9658741230', 'Manikrao Chowk', 'Pune', 'Maharashtra', 'Football'),
(6, 'Bhushan Kumar', 7, '7854693210', 'Jaistamb Chowk', 'Mohali', 'Punjab', 'Cricket'),
(7, 'Rama Rao', 8, '8547693104', 'Laxmi Nagar', 'Rotela', 'Haryana', 'Wrestling'),
(8, 'Surya Prakash', 5, '7458923103', 'Valmai Street ', 'Chennai', 'Tamil Nadu', 'Weightlifting'),
(9, 'Govind Mazi', 8, '7548963210', 'Bonagai Street', 'Kolkata', 'West Bengal', 'Boxing');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `S_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trains_for`
--

CREATE TABLE `trains_for` (
  `A_ID` int(8) NOT NULL,
  `S_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trains_for`
--

INSERT INTO `trains_for` (`A_ID`, `S_ID`) VALUES
(10, 7),
(20, 5),
(21, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `trains_for`
--
ALTER TABLE `trains_for`
  ADD PRIMARY KEY (`A_ID`,`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `A_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `C_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

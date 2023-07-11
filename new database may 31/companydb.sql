-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 02:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_profile01`
--

CREATE TABLE `company_profile01` (
  `c_profile1_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `profileName` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `registrationNum` int(11) NOT NULL,
  `contactNum` varchar(11) NOT NULL,
  `cpLastName` varchar(50) NOT NULL,
  `cpFirstName` varchar(50) NOT NULL,
  `cpMidName` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpAddress` varchar(255) NOT NULL,
  `cpWebsite` varchar(255) NOT NULL,
  `cpSize` int(11) NOT NULL,
  `workHours` int(11) NOT NULL,
  `cpDresscode` varchar(50) NOT NULL,
  `cpLanguage` varchar(50) NOT NULL,
  `benefits` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_profile01`
--

INSERT INTO `company_profile01` (`c_profile1_id`, `user_id`, `companyName`, `profileName`, `industry`, `registrationNum`, `contactNum`, `cpLastName`, `cpFirstName`, `cpMidName`, `email`, `cpAddress`, `cpWebsite`, `cpSize`, `workHours`, `cpDresscode`, `cpLanguage`, `benefits`) VALUES
(5, 10, 'asdsa', 'asdas', 'dasd', 0, 'asd', 'asdas', 'das', 'dasdas', 'dasd@yahoo.com', 'asdasd', 'asdasdas', 23, 13123, '213', '12321', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `c_accounttb`
--

CREATE TABLE `c_accounttb` (
  `user_id` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `cpLastName` varchar(50) NOT NULL,
  `cpFirstName` varchar(50) NOT NULL,
  `cpMidName` varchar(50) NOT NULL,
  `contactNum` int(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_accounttb`
--

INSERT INTO `c_accounttb` (`user_id`, `companyName`, `industry`, `cpLastName`, `cpFirstName`, `cpMidName`, `contactNum`, `email`, `password`) VALUES
(10, 's', 's', 's', 's', 's', 2147483647, 's@yahoo.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `c_job_posting`
--

CREATE TABLE `c_job_posting` (
  `c_job_posting_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `roleType` varchar(255) NOT NULL,
  `position` varchar(50) NOT NULL,
  `yrsExperience` varchar(50) NOT NULL,
  `jobSpecialization` varchar(50) NOT NULL,
  `workLocation` varchar(255) NOT NULL,
  `salary` decimal(8,2) NOT NULL,
  `educBg` varchar(50) NOT NULL,
  `numSlot` int(11) NOT NULL,
  `jobDescription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_profile01`
--
ALTER TABLE `company_profile01`
  ADD PRIMARY KEY (`c_profile1_id`),
  ADD KEY `c_profile1_pk` (`user_id`);

--
-- Indexes for table `c_accounttb`
--
ALTER TABLE `c_accounttb`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `c_job_posting`
--
ALTER TABLE `c_job_posting`
  ADD PRIMARY KEY (`c_job_posting_id`),
  ADD KEY `c_jobposting_pk` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_profile01`
--
ALTER TABLE `company_profile01`
  MODIFY `c_profile1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `c_accounttb`
--
ALTER TABLE `c_accounttb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `c_job_posting`
--
ALTER TABLE `c_job_posting`
  MODIFY `c_job_posting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_profile01`
--
ALTER TABLE `company_profile01`
  ADD CONSTRAINT `c_profile1_pk` FOREIGN KEY (`user_id`) REFERENCES `c_accounttb` (`user_id`);

--
-- Constraints for table `c_job_posting`
--
ALTER TABLE `c_job_posting`
  ADD CONSTRAINT `c_jobposting_pk` FOREIGN KEY (`user_id`) REFERENCES `c_accounttb` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

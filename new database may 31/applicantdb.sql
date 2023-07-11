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
-- Database: `applicantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile01`
--

CREATE TABLE `applicant_profile01` (
  `a_profile1_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `midName` varchar(50) NOT NULL,
  `suffix` varchar(50) NOT NULL,
  `jobseekerType` varchar(50) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `civilStatus` varchar(50) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `housenumPresent` varchar(50) NOT NULL,
  `brgyPresent` varchar(50) NOT NULL,
  `cityPresent` varchar(50) NOT NULL,
  `provincePresent` varchar(50) NOT NULL,
  `housenumPermanent` varchar(50) NOT NULL,
  `brgyPermanent` varchar(50) NOT NULL,
  `cityPermanent` varchar(50) NOT NULL,
  `provincePermanent` varchar(50) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `landlineNum` int(11) NOT NULL,
  `mobilePnum` int(11) NOT NULL,
  `mobileSnum` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `disability` varchar(50) NOT NULL,
  `employmentStatus` varchar(50) NOT NULL,
  `activelyLooking` varchar(50) NOT NULL,
  `willinglyWork` varchar(50) NOT NULL,
  `fourPsBeneficiary` varchar(50) NOT NULL,
  `ofw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant_profile01`
--

INSERT INTO `applicant_profile01` (`a_profile1_id`, `user_id`, `lastName`, `firstName`, `midName`, `suffix`, `jobseekerType`, `birthplace`, `birthday`, `age`, `sex`, `civilStatus`, `citizenship`, `housenumPresent`, `brgyPresent`, `cityPresent`, `provincePresent`, `housenumPermanent`, `brgyPermanent`, `cityPermanent`, `provincePermanent`, `height`, `weight`, `landlineNum`, `mobilePnum`, `mobileSnum`, `email`, `disability`, `employmentStatus`, `activelyLooking`, `willinglyWork`, `fourPsBeneficiary`, `ofw`) VALUES
(24, 19, 'asd', 'sadsa', 'dasd', 'asd', 'first_time', 'asd', '0002-02-22', 25, 'Male', 'Married', 'sadas', '42342', 'asd', 'asdas', 'dasd', '3423', 'asd', 'asd', 'asd', 277, 23, 43242, 4324, 23423423, 'wdqwaeqwe', 'speech', 'fresh_grad', 'yes', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile02`
--

CREATE TABLE `applicant_profile02` (
  `a_profile2_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `schoolStatus` varchar(50) NOT NULL,
  `educLevel` varchar(50) NOT NULL,
  `gradYear` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `award` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile03`
--

CREATE TABLE `applicant_profile03` (
  `a_profile3_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `occupation1` varchar(50) NOT NULL,
  `industry1` varchar(50) NOT NULL,
  `occupation2` varchar(50) NOT NULL,
  `industry2` varchar(50) NOT NULL,
  `occupation3` varchar(50) NOT NULL,
  `industry3` varchar(50) NOT NULL,
  `employment_status` varchar(50) NOT NULL,
  `location1` varchar(50) NOT NULL,
  `location2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile04`
--

CREATE TABLE `applicant_profile04` (
  `a_profile4_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trainingStatus` varchar(50) NOT NULL,
  `training1` varchar(50) NOT NULL,
  `startDuration1` date NOT NULL,
  `endDuration1` date NOT NULL,
  `training2` varchar(50) NOT NULL,
  `startDuration2` date NOT NULL,
  `endDuration2` date NOT NULL,
  `training3` varchar(50) NOT NULL,
  `startDuration3` date NOT NULL,
  `endDuration3` date NOT NULL,
  `institution1` varchar(50) NOT NULL,
  `certificate1` varchar(50) NOT NULL,
  `completion1` varchar(50) NOT NULL,
  `institution2` varchar(50) NOT NULL,
  `certificate2` varchar(50) NOT NULL,
  `completion2` varchar(50) NOT NULL,
  `institution3` varchar(50) NOT NULL,
  `certificate3` varchar(50) NOT NULL,
  `completion3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant_profile04`
--

INSERT INTO `applicant_profile04` (`a_profile4_id`, `user_id`, `trainingStatus`, `training1`, `startDuration1`, `endDuration1`, `training2`, `startDuration2`, `endDuration2`, `training3`, `startDuration3`, `endDuration3`, `institution1`, `certificate1`, `completion1`, `institution2`, `certificate2`, `completion2`, `institution3`, `certificate3`, `completion3`) VALUES
(3, 18, 'yes', 'asd', '2023-05-03', '2023-05-02', 'asdasd', '2023-05-04', '2023-05-03', 'asdasd', '2023-05-09', '2023-05-15', 'dasd', 'asdas', 'yes', 'dasd', 'asd', 'yes', 'asdas', 'dasd', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile05`
--

CREATE TABLE `applicant_profile05` (
  `a_profile5_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `careerServ1` varchar(50) NOT NULL,
  `licenceNum1` varchar(50) NOT NULL,
  `expiryDate1` varchar(50) NOT NULL,
  `careerServ2` varchar(50) NOT NULL,
  `licenceNum2` varchar(50) NOT NULL,
  `expiryDate2` varchar(50) NOT NULL,
  `careerServ3` varchar(50) NOT NULL,
  `licenceNum3` varchar(50) NOT NULL,
  `expiryDate3` varchar(50) NOT NULL,
  `validDate` varchar(50) NOT NULL,
  `languageCertifications` varchar(50) NOT NULL,
  `otherCertification` varchar(50) NOT NULL,
  `dialectsSpoken` varchar(50) NOT NULL,
  `otherDialect` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile06`
--

CREATE TABLE `applicant_profile06` (
  `a_profile6_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company1` varchar(255) NOT NULL,
  `cpAddress1` varchar(255) NOT NULL,
  `company2` varchar(255) NOT NULL,
  `cpAddress2` varchar(255) NOT NULL,
  `company3` varchar(255) NOT NULL,
  `cpAddress3` varchar(255) NOT NULL,
  `company4` varchar(255) NOT NULL,
  `cpAddress4` varchar(255) NOT NULL,
  `position1` varchar(50) NOT NULL,
  `incluDate1` varchar(50) NOT NULL,
  `appointStat1` varchar(50) NOT NULL,
  `position2` varchar(50) NOT NULL,
  `incluDate2` varchar(50) NOT NULL,
  `appointStat2` varchar(50) NOT NULL,
  `position3` varchar(50) NOT NULL,
  `incluDate3` varchar(50) NOT NULL,
  `appointStat3` varchar(50) NOT NULL,
  `position4` varchar(50) NOT NULL,
  `incluDate4` varchar(50) NOT NULL,
  `appointStat4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_profile07`
--

CREATE TABLE `applicant_profile07` (
  `a_profile7_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `techSkill` varchar(50) NOT NULL,
  `otherTechskill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a_accounttb`
--

CREATE TABLE `a_accounttb` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `age` int(90) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a_accounttb`
--

INSERT INTO `a_accounttb` (`user_id`, `lastname`, `firstname`, `middlename`, `age`, `sex`, `email`, `password`) VALUES
(7, 'zxc', 'cvb', 'v', 20, 'Male', 'ghkgjl@gmail.com', 'koops'),
(8, 'welp', 'sad', 's', 20, 'Male', 'fhhdfh@gmail.com', 'password123'),
(9, 'perez', 'marie', 'borja', 21, 'Female', 'leannperez@gmail.com', 'password123'),
(10, 'asdhjg', 'dajsdg', 'dhjasdg', 20, 'Male', 'haskdhask', 'q'),
(12, 'ewrewr', 'ewrwe', 'ewrwer', 20, 'Male', 'werwe', 'qwe'),
(13, 'asf', 'asd', 'asdas', 20, 'Female', 'asdasd', 'sad'),
(14, 'ewqe', 'wewqe', 'we', 20, 'Male', 'eqweqwe@a', 'w'),
(15, 'sad', 'asd', 'sad', 20, 'Male', 'sad', 's'),
(16, 'asd', 'fdgdf', 'sdfsd', 30, 'Male', 'asdas', 'ghdf'),
(17, 'sds', 'sda', 'dsa', 20, 'Male', 'dsad', '4'),
(18, 'wer', 'wer', 'werw', 20, 'Male', 'werwe@sdkl.com', '200'),
(19, 'sad', 'asd', 'asd', 20, 'Male', '200@gmail.com', '200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_profile01`
--
ALTER TABLE `applicant_profile01`
  ADD PRIMARY KEY (`a_profile1_id`),
  ADD KEY `a_profile1_pk` (`user_id`);

--
-- Indexes for table `applicant_profile02`
--
ALTER TABLE `applicant_profile02`
  ADD PRIMARY KEY (`a_profile2_id`),
  ADD KEY `a_profile2_pk` (`user_id`);

--
-- Indexes for table `applicant_profile03`
--
ALTER TABLE `applicant_profile03`
  ADD PRIMARY KEY (`a_profile3_id`),
  ADD KEY `a_profile3_pk` (`user_id`);

--
-- Indexes for table `applicant_profile04`
--
ALTER TABLE `applicant_profile04`
  ADD PRIMARY KEY (`a_profile4_id`),
  ADD KEY `a_profile4_pk` (`user_id`);

--
-- Indexes for table `applicant_profile05`
--
ALTER TABLE `applicant_profile05`
  ADD PRIMARY KEY (`a_profile5_id`),
  ADD KEY `a_profile5_pk` (`user_id`);

--
-- Indexes for table `applicant_profile06`
--
ALTER TABLE `applicant_profile06`
  ADD PRIMARY KEY (`a_profile6_id`),
  ADD KEY `a_profile6_pk` (`user_id`);

--
-- Indexes for table `applicant_profile07`
--
ALTER TABLE `applicant_profile07`
  ADD PRIMARY KEY (`a_profile7_id`),
  ADD KEY `a_profile7_pk` (`user_id`);

--
-- Indexes for table `a_accounttb`
--
ALTER TABLE `a_accounttb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_profile01`
--
ALTER TABLE `applicant_profile01`
  MODIFY `a_profile1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `applicant_profile02`
--
ALTER TABLE `applicant_profile02`
  MODIFY `a_profile2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applicant_profile03`
--
ALTER TABLE `applicant_profile03`
  MODIFY `a_profile3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `applicant_profile04`
--
ALTER TABLE `applicant_profile04`
  MODIFY `a_profile4_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applicant_profile05`
--
ALTER TABLE `applicant_profile05`
  MODIFY `a_profile5_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_profile06`
--
ALTER TABLE `applicant_profile06`
  MODIFY `a_profile6_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_profile07`
--
ALTER TABLE `applicant_profile07`
  MODIFY `a_profile7_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_accounttb`
--
ALTER TABLE `a_accounttb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant_profile01`
--
ALTER TABLE `applicant_profile01`
  ADD CONSTRAINT `a_profile1_pk` FOREIGN KEY (`user_id`) REFERENCES `a_accounttb` (`user_id`);

--
-- Constraints for table `applicant_profile02`
--
ALTER TABLE `applicant_profile02`
  ADD CONSTRAINT `a_profile2_pk` FOREIGN KEY (`user_id`) REFERENCES `a_accounttb` (`user_id`);

--
-- Constraints for table `applicant_profile03`
--
ALTER TABLE `applicant_profile03`
  ADD CONSTRAINT `a_profile3_pk` FOREIGN KEY (`user_id`) REFERENCES `a_accounttb` (`user_id`);

--
-- Constraints for table `applicant_profile04`
--
ALTER TABLE `applicant_profile04`
  ADD CONSTRAINT `a_profile4_pk` FOREIGN KEY (`user_id`) REFERENCES `a_accounttb` (`user_id`);

--
-- Constraints for table `applicant_profile05`
--
ALTER TABLE `applicant_profile05`
  ADD CONSTRAINT `a_profile5_pk` FOREIGN KEY (`user_id`) REFERENCES `a_accounttb` (`user_id`);

--
-- Constraints for table `applicant_profile06`
--
ALTER TABLE `applicant_profile06`
  ADD CONSTRAINT `a_profile6_pk` FOREIGN KEY (`user_id`) REFERENCES `a_accounttb` (`user_id`);

--
-- Constraints for table `applicant_profile07`
--
ALTER TABLE `applicant_profile07`
  ADD CONSTRAINT `a_profile7_pk` FOREIGN KEY (`user_id`) REFERENCES `a_accounttb` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

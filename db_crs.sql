-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2019 at 03:50 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_committeemember`
--

DROP TABLE IF EXISTS `tbl_committeemember`;
CREATE TABLE IF NOT EXISTS `tbl_committeemember` (
  `cmid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  `academic_year` varchar(10) NOT NULL,
  `isActive` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL,
  `modiified_at` timestamp NOT NULL,
  PRIMARY KEY (`cmid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_committeemember`
--

INSERT INTO `tbl_committeemember` (`cmid`, `first_name`, `last_name`, `email`, `contactno`, `password`, `academic_year`, `isActive`, `created_at`, `modiified_at`) VALUES
(4, 'hardik', 'shah', '16mscit023@gmail.com', '9687926743', 'b8909e1b597d72840d64c10a51bf1353', '2014-15', 'Active', '2019-03-05 23:54:28', '2019-03-05 23:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

DROP TABLE IF EXISTS `tbl_company`;
CREATE TABLE IF NOT EXISTS `tbl_company` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `company_city` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `img` varchar(500) NOT NULL,
  `academic_year` varchar(20) NOT NULL,
  `isActive` varchar(8) NOT NULL,
  `createdAt` timestamp NOT NULL,
  `modifiedAt` timestamp NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`cid`, `company`, `address`, `company_city`, `mail`, `contactno`, `img`, `academic_year`, `isActive`, `createdAt`, `modifiedAt`) VALUES
(19, 'smart infosys', 'near apple hospital,udhna.', 'Surat', 'smart.infosys@gmail.com', '02612347223', './company/smart infosys/46a7d514d9434325a7d18f4845f81c0b.jpg', '2014-15', 'Active', '2019-03-15 03:08:33', '2019-03-15 03:08:33'),
(20, 'google', 'jaba', 'surat', 'google.in@gmail.com', '7574975789', './company/google/google.png', '2014-15', 'Active', '2019-03-15 23:03:20', '2019-03-15 23:03:20'),
(21, 'escrow infotech', 'near star bazar,rustampura', 'Surat', 'escrow.infotech@gmail.com', '8988785874', './company/escrow infotech/final.jpg', '2014-15', 'Active', '2019-03-19 01:15:55', '2019-03-19 01:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_notification`
--

DROP TABLE IF EXISTS `tbl_company_notification`;
CREATE TABLE IF NOT EXISTS `tbl_company_notification` (
  `cnid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `no_of_student` int(11) NOT NULL,
  `company_date` datetime NOT NULL,
  `provide_stipend` char(1) NOT NULL,
  `stipend` bigint(20) NOT NULL,
  `ctc` bigint(20) NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY (`cnid`),
  KEY `tid` (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company_notification`
--

INSERT INTO `tbl_company_notification` (`cnid`, `tid`, `cid`, `no_of_student`, `company_date`, `provide_stipend`, `stipend`, `ctc`, `createdAt`) VALUES
(1, 14, 20, 6, '2019-03-22 00:00:00', 'y', 5000, 200000, '2019-03-19 06:40:54'),
(2, 16, 19, 6, '2019-03-29 00:00:00', 'n', 0, 200000, '2019-03-19 06:42:43'),
(3, 14, 21, 5, '2019-04-03 00:00:00', 'y', 2000, 100000, '2019-03-19 06:47:32'),
(4, 16, 20, 8, '2019-03-30 00:00:00', 'y', 10000, 1200000, '2019-03-19 07:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

DROP TABLE IF EXISTS `tbl_event`;
CREATE TABLE IF NOT EXISTS `tbl_event` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `place` varchar(150) NOT NULL,
  `speaker` varchar(150) DEFAULT NULL,
  `topic` varchar(150) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `from_date` timestamp NULL DEFAULT NULL,
  `to_date` timestamp NULL DEFAULT NULL,
  `academic_year` varchar(10) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT NULL,
  `modifiedAt` timestamp NULL DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`eid`, `name`, `place`, `speaker`, `topic`, `details`, `from_date`, `to_date`, `academic_year`, `isActive`, `createdAt`, `modifiedAt`, `color`) VALUES
(1, 'placement talk', '', 'bhumika maam', '-', ' list of company is given to you', '2014-06-17 18:30:00', '2014-06-17 18:30:00', '2018', 1, '2019-02-22 02:57:02', '2019-02-22 02:57:02', NULL),
(2, 'placement', 'near lab d-201', '', 'placement in smart infosys company ', '-', '2019-02-13 18:30:00', '2019-02-13 18:30:00', '2018', 1, '2019-02-22 03:10:01', '2019-02-22 03:10:01', NULL),
(3, 'Expert talk', 'near lab d-201', 'Bhavik sarang sir', 'how to control your attitude', 'jabanagar', '2019-12-30 18:30:00', '2019-12-30 18:30:00', '2016', 1, '2019-02-22 03:11:59', '2019-02-22 03:11:59', NULL),
(7, 'nilkanth', 'katari', 'jjjj', 'tttttt', 'dedreerde', '2019-03-10 23:30:00', '2019-03-11 02:00:00', NULL, NULL, NULL, NULL, NULL),
(9, 'werewr', 'ewrw', 'rwrwe', 'rwrwe', 'rwr', '2019-03-03 04:00:00', '2019-03-03 06:30:00', NULL, NULL, NULL, NULL, NULL),
(11, 'asdad', 'asdasd', 'sss', 'ss', 'ssss', '2019-03-19 18:30:00', '2019-03-22 18:30:00', NULL, NULL, NULL, NULL, NULL),
(13, 'jhgg', 'vhvvhhg', 'ffdtdrtdrt', 'cfccfcf', 'fccfccfcf', '2019-03-06 00:00:00', '2019-03-06 10:00:00', NULL, NULL, NULL, NULL, '#40E0D0'),
(14, 'color', 'color', 'color', 'color', 'color', '2019-03-04 18:30:00', '2019-03-05 18:30:00', NULL, NULL, NULL, NULL, '#FF0000'),
(15, 'das', 'dasdad', 'asdasd', 'asdasd', 'adsasd', '2019-04-05 03:30:00', '2019-04-07 11:30:00', NULL, NULL, NULL, NULL, '#000'),
(16, 'ghjg', 'gdgd', 'rddrd', 'dtrdrdt', 'errert', '2019-03-18 02:30:00', '2019-03-18 09:30:00', NULL, NULL, NULL, NULL, '#FF8C00'),
(18, 'sadasd', 'sss', 'ss', 'sss', 'ssss', '2019-03-03 01:00:00', '2019-03-03 11:30:00', NULL, NULL, NULL, NULL, '#FF0000'),
(19, 'asdad', 'jhhgh', 'hgjgjg', 'hghghjgjh', 'ghjghjgjg', '2019-03-26 18:30:00', '2019-03-27 18:30:00', NULL, NULL, NULL, NULL, '#0071c5'),
(20, 'asdad', 'jhhgh', 'hgjgjg', 'hghghjgjh', 'ghjghjgjg', '2019-03-07 18:30:00', '2019-03-08 18:30:00', NULL, NULL, NULL, NULL, '#0071c5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventregistration`
--

DROP TABLE IF EXISTS `tbl_eventregistration`;
CREATE TABLE IF NOT EXISTS `tbl_eventregistration` (
  `erid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `enno` varchar(15) NOT NULL,
  `createdAt` timestamp NOT NULL,
  PRIMARY KEY (`erid`),
  KEY `eid` (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

DROP TABLE IF EXISTS `tbl_faculty`;
CREATE TABLE IF NOT EXISTS `tbl_faculty` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`fid`, `fname`, `email`, `password`) VALUES
(1, 'Kishan Khatri', '16mscit043@gmail.com', 'kishan123'),
(2, 'Neek Katariwala', '16mscit027@gmail.com', 'neek123'),
(3, 'Nirmal Patel', '16mscit026@gmail.com', 'nirmal123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

DROP TABLE IF EXISTS `tbl_leave`;
CREATE TABLE IF NOT EXISTS `tbl_leave` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `reason` text NOT NULL,
  `fromDate` date NOT NULL,
  `toDate` date NOT NULL,
  `fromTime` time NOT NULL,
  `toTime` time NOT NULL,
  `appliedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `sid` (`sid`),
  KEY `fid` (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`lid`, `sid`, `fid`, `reason`, `fromDate`, `toDate`, `fromTime`, `toTime`, `appliedOn`, `status`) VALUES
(17, 7, 1, 'Fever', '2019-03-11', '2019-03-12', '08:30:00', '15:30:00', '2019-03-10 19:13:02', 'Approved'),
(18, 8, 1, 'have to attend marriage', '2019-03-13', '2019-03-14', '13:00:00', '16:00:00', '2019-03-10 19:12:54', 'Approved'),
(19, 9, 2, 'Sick', '2019-03-14', '2019-03-15', '08:30:00', '15:30:00', '2019-03-10 19:15:33', 'Rejected'),
(20, 12, 1, 'Have to attend family functionn', '2019-03-15', '2019-03-16', '08:30:00', '15:30:00', '2019-03-10 19:18:39', 'Approved'),
(21, 9, 2, 'Fever', '2019-03-15', '2019-03-16', '08:30:00', '15:30:00', '2019-03-10 19:20:27', 'Rejected'),
(22, 7, 1, 'Fever', '2019-03-16', '2019-03-17', '13:00:00', '16:00:00', '2019-03-10 02:11:27', 'pending'),
(23, 7, 1, 'Sick', '2019-03-15', '2019-03-16', '08:30:00', '15:30:00', '2019-03-11 01:03:27', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_round`
--

DROP TABLE IF EXISTS `tbl_round`;
CREATE TABLE IF NOT EXISTS `tbl_round` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `round_name` varchar(20) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud`
--

DROP TABLE IF EXISTS `tbl_stud`;
CREATE TABLE IF NOT EXISTS `tbl_stud` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `eno` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fid` int(11) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `fid` (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stud`
--

INSERT INTO `tbl_stud` (`sid`, `sname`, `eno`, `sem`, `divi`, `password`, `fid`) VALUES
(7, 'Mihir Sinh', '201606100110043', 'Semester:6', 'Division:A', 'mihir123', 1),
(8, 'Nauman Vazifdar', '201606100110011', 'Semester:6', 'Division:A', 'nauman123', 1),
(9, 'Dhaval Badgujar', '201606100110023', 'Semester:6', 'Division:A', 'dhaval123', 2),
(10, 'Yesha Desai', '201606100110010', 'Semester:6', 'Division:A', 'yesha123', 3),
(11, 'Shweta Vashi', '201606100110012', 'Semester:6', 'Division:A', 'shweta123', 2),
(12, 'Jeet Zaveri', '201606100110030', 'Semester:6', 'Division:B', 'jeet123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE IF NOT EXISTS `tbl_student` (
  `enno` bigint(15) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `per10` float NOT NULL,
  `per12` float NOT NULL,
  `sgpa1` float NOT NULL,
  `sgpa2` float NOT NULL,
  `sgpa3` float NOT NULL,
  `sgpa4` float NOT NULL,
  `sgpa5` float NOT NULL,
  `sgpa6` float NOT NULL,
  `sgpa7` float NOT NULL,
  `sgpa8` float NOT NULL,
  `password` varchar(32) NOT NULL,
  `city` varchar(20) NOT NULL,
  `Acadamic_year` varchar(10) NOT NULL,
  `profile_pic` text NOT NULL,
  `Question` varchar(1) NOT NULL,
  `details` varchar(500) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `status` char(8) NOT NULL,
  PRIMARY KEY (`enno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`enno`, `fname`, `lname`, `contactno`, `email`, `per10`, `per12`, `sgpa1`, `sgpa2`, `sgpa3`, `sgpa4`, `sgpa5`, `sgpa6`, `sgpa7`, `sgpa8`, `password`, `city`, `Acadamic_year`, `profile_pic`, `Question`, `details`, `created_at`, `updated_at`, `status`) VALUES
(27, 'neel', 'patel', 8574632541, '', 75, 72, 6, 8, 8, 8, 8, 8, 9, 9, 'neel44', 'surat', '2016', './Profile/neel/prfile.jpg', '', '', '2019-02-04-09-48-05', '2019-02-04-09-48-05', 'active'),
(28, 'neek', 'katariwala', 8965321478, '', 75, 75, 8, 8, 8, 8, 8, 8, 8, 9, 'neel', 'surat', '2016', './Profile/neek/prfile.jpg', '', '', '2019-02-08-08-25-05', '2019-02-08-08-25-05', 'active'),
(29, 'chasmavala', 'vashu', 9874563214, '', 75, 75, 8, 8, 8, 8, 8, 8, 8, 8, 'vashu', 'surat', '2016', './Profile/chasmavala/prfile.jpg', 'n', '                            Already an employee in company\r\n                        ', '2019-02-20-04-56-02', '2019-02-20-04-56-02', 'deactive'),
(888888888888, 'veri', 'good', 9999999999, '16mscit027@gmail.com', 80, 80, 9, 9, 9, 9, 9, 9, 9, 9, 'fe01ce2a7fbac8fafaed7c982a04e229', '', '2014-15', './Profile/veri/jaba.png', 'y', 'jaba', '2019-03-05-09-27-12', '2019-03-05-09-27-12', 'Active'),
(201606100110023, 'dhaval', 'badgujar', 7574975789, '16mscit023@gmail.com', 80, 80, 9, 9, 9, 9, 9, 9, 9, 9, '975ef70ce2dd7ae8dd7de7c930d90d0d', 'jamnagar', '2014-15', './Profile/dhaval/studypress.png', '', '', '2019-03-05-09-36-14', '2019-03-05-09-36-14', 'Active'),
(201606100110030, 'Jeet', 'Zaveri', 7600949100, '16mscit030@gmail.com', 70, 62, 8, 8, 8, 8, 8, 8, 8, 8, 'e474d7f52c24b4288f4a95407fcac7df', 'Google', '2014-15', './Profile/Jeet/IMG_2808.JPG', '', '', '2019-03-05-09-32-23', '2019-03-05-09-32-23', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_apply`
--

DROP TABLE IF EXISTS `tbl_student_apply`;
CREATE TABLE IF NOT EXISTS `tbl_student_apply` (
  `said` int(11) NOT NULL AUTO_INCREMENT,
  `enno` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `isSelect` tinyint(4) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`said`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_technology_priority`
--

DROP TABLE IF EXISTS `tbl_student_technology_priority`;
CREATE TABLE IF NOT EXISTS `tbl_student_technology_priority` (
  `pid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `enno` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  KEY `tid` (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technology`
--

DROP TABLE IF EXISTS `tbl_technology`;
CREATE TABLE IF NOT EXISTS `tbl_technology` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `technology` varchar(100) NOT NULL,
  `Academic_year` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_technology`
--

INSERT INTO `tbl_technology` (`tid`, `technology`, `Academic_year`) VALUES
(12, 'IOS', '2014-15'),
(14, 'PHP', '2014-15'),
(16, 'Android', '2014-15'),
(17, 'React', '2014-15');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_company_notification`
--
ALTER TABLE `tbl_company_notification`
  ADD CONSTRAINT `tbl_company_notification_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `tbl_technology` (`tid`);

--
-- Constraints for table `tbl_eventregistration`
--
ALTER TABLE `tbl_eventregistration`
  ADD CONSTRAINT `tbl_eventregistration_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `tbl_event` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD CONSTRAINT `tbl_leave_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `tbl_stud` (`sid`),
  ADD CONSTRAINT `tbl_leave_ibfk_2` FOREIGN KEY (`fid`) REFERENCES `tbl_faculty` (`fid`);

--
-- Constraints for table `tbl_stud`
--
ALTER TABLE `tbl_stud`
  ADD CONSTRAINT `tbl_stud_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `tbl_faculty` (`fid`);

--
-- Constraints for table `tbl_student_apply`
--
ALTER TABLE `tbl_student_apply`
  ADD CONSTRAINT `tbl_student_apply_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `tbl_round` (`rid`);

--
-- Constraints for table `tbl_student_technology_priority`
--
ALTER TABLE `tbl_student_technology_priority`
  ADD CONSTRAINT `tbl_student_technology_priority_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `tbl_technology` (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

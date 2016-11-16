-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2016 at 08:26 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `AlbumId` int(20) NOT NULL,
  `AlbumName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`AlbumId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`AlbumId`, `AlbumName`) VALUES
(2, 'Activities'),
(1, 'School');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `PhotoId` int(20) NOT NULL,
  `AlbumId` int(20) DEFAULT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`PhotoId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`PhotoId`, `AlbumId`, `Photo`) VALUES
(104, 1, 'computer.jpg'),
(103, 1, 'lib.jpg'),
(102, 2, '7.jpg'),
(101, 2, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hm`
--

CREATE TABLE IF NOT EXISTS `hm` (
  `Tid` int(20) DEFAULT NULL,
  `Start` varchar(50) DEFAULT NULL,
  `End` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hm`
--

INSERT INTO `hm` (`Tid`, `Start`, `End`, `State`) VALUES
(101, 'January 2008', 'March 2019', 'Current');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UName` varchar(50) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `UType` varchar(50) NOT NULL,
  PRIMARY KEY (`UName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UName`, `Password`, `UType`) VALUES
('admin', 'admin123', 'admin'),
('teacher', 'teacher123', 'teacher'),
('officestaff', 'officestaff123', 'officestaff');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
  `Admno` varchar(50) DEFAULT NULL,
  `TermId` int(20) NOT NULL,
  `SubId` int(20) NOT NULL,
  `OMark` int(200) DEFAULT NULL,
  `TMark` int(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`Admno`, `TermId`, `SubId`, `OMark`, `TMark`) VALUES
('108', 1, 2, 96, 100),
('108', 1, 1, 80, 100),
('106', 1, 2, 96, 100),
('106', 1, 1, 75, 100),
('107', 1, 2, 78, 100),
('107', 1, 1, 87, 100),
('222', 1, 4, 97, 100),
('222', 1, 3, 79, 100),
('222', 1, 2, 98, 100),
('222', 1, 1, 89, 100),
('109', 1, 1, 96, 100),
('109', 1, 2, 96, 100),
('222', 2, 1, 63, 100),
('222', 2, 2, 97, 100),
('222', 2, 3, 71, 100),
('222', 2, 4, 96, 100),
('107', 2, 1, 89, 100),
('106', 2, 1, 97, 100);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `NewsId` int(20) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Status` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsId`, `Title`, `Description`, `Status`, `Image`) VALUES
(1, 'SSLC Results', 'The School gained 100% results in the SSLC Examination.', 'Active', '15.jpg'),
(2, 'Sports', 'The School Sports will be conducted on 10-10-2016.', 'Active', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pta`
--

CREATE TABLE IF NOT EXISTS `pta` (
  `PtaId` int(20) NOT NULL,
  `MName` varchar(50) DEFAULT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Phone` varchar(20) NOT NULL,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`PtaId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pta`
--

INSERT INTO `pta` (`PtaId`, `MName`, `Designation`, `Phone`, `Status`) VALUES
(2, 'Thomas Mathew', 'Secretary', '9874561289', 'Active'),
(1, 'E P Haridas', 'President', '9874747456', 'Active'),
(3, 'Nisha Elias', 'Member', '8974562334', 'Active'),
(4, 'Jyothy P', 'Member', '9147483647', 'Active'),
(5, 'Beena Daniel', 'Member', '7897483647', 'Active'),
(6, 'Omana Vijayappan', 'Member', '8745112423', 'Active'),
(7, 'Reymol Sabu', 'Member', '9695886323', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Tid` int(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `HouseName` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `Pin` int(10) DEFAULT NULL,
  `Dob` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Doj` varchar(20) NOT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Qualification` varchar(100) DEFAULT NULL,
  `Designation` varchar(50) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Tid`, `Name`, `HouseName`, `Street`, `City`, `State`, `Pin`, `Dob`, `Gender`, `Doj`, `Mobile`, `Email`, `Qualification`, `Designation`, `Photo`, `Status`) VALUES
(102, 'Sudhin Sara Cherian', 'Chiravathra', 'Parampuzha', 'Kottayam', 'Kerala', 686004, '1973-01-18', 'female', '1995-05-06', '9446914542', 'amayannoorhs@gmail.com', 'MA,BEd', 'HSA', '694.jpg', 'Active'),
(101, 'Accamma V George', 'Oravackal', 'Amayannoor', 'Kottayam', 'Kerala', 686019, '1963-05-15', 'female', '1994-06-06', '9497487162', 'amayannoorhs@gmail.com', 'MA,BEd', 'HSA', '714.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Admno` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `HouseName` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `Pin` int(10) DEFAULT NULL,
  `Dob` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `FathersName` varchar(50) DEFAULT NULL,
  `MothersName` varchar(50) DEFAULT NULL,
  `ContactNo` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `DAdmn` varchar(20) DEFAULT NULL,
  `Class` varchar(10) DEFAULT NULL,
  `Division` varchar(10) NOT NULL,
  PRIMARY KEY (`Admno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Admno`, `Name`, `HouseName`, `Street`, `City`, `State`, `Pin`, `Dob`, `Gender`, `FathersName`, `MothersName`, `ContactNo`, `Email`, `DAdmn`, `Class`, `Division`) VALUES
('222', 'Ajay', 'houuu', 'ftttt', 'df', 'bhjkkl', 55558, '02-10-98', 'M', 'hjj', 'dftt', '4456', 'hjjj@gmail.com', '10-02-2010', '5', 'A'),
('107', 'Abin', 'hhh', 'Amayannoor', 'Kottayam', 'Kerala', 686019, '14-02-96', 'Male', 'ghjkk', 'gghh', '9874512369', 'hhhh@gmail.com', '14-12-95', '5', 'A'),
('106', 'Manu G', 'Karikkal', 'Amayannoor', 'Kottayam', 'Kerala', 686019, '14-02-03', 'Male', 'Gopinath', 'Soumya', '8953123403', 'hjj@gmail.com', '14-10-11', '5', 'A'),
('108', 'Christy', 'Karikkal', 'Amayannoor', 'Kottayam', 'Kerala', 686019, '14-02-03', 'Male', 'Gopinath', 'Soumya', '8953123403', 'hjj@gmail.com', '14-10-11', '6', 'A'),
('109', 'Sandya', 'hhh', 'Amayannoor', 'Kottayam', 'Kerala', 686019, '14-02-96', 'Female', 'ghjkk', 'gghh', '9874512369', 'hhhh@gmail.com', '14-12-95', '6', 'A'),
('101', 'Anu', 'Illikal', 'Amayannoor', 'Kottayam', 'Kerala', 686019, '12-10-05', 'Female', 'Soman', 'Meera', '9874569213', 'bbb@gmail.com', '14-10-11', '5', 'A'),
('102', 'Maya', 'ggghh', 'Amayannoor', 'Kottayam', 'Kerala', 686019, '15-10-01', 'Female', 'Kumar', 'Sini', '8745961236', 'gggg@gmail.com', '12-02-12', '5', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `SubId` int(20) NOT NULL,
  `SubName` varchar(50) NOT NULL,
  PRIMARY KEY (`SubId`),
  UNIQUE KEY `SubName` (`SubName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SubId`, `SubName`) VALUES
(1, 'English'),
(2, 'Malayalam'),
(3, 'Science'),
(4, 'Social science'),
(5, 'Mathematics'),
(6, 'Hindi'),
(7, 'Sanskrit');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE IF NOT EXISTS `term` (
  `TermId` int(20) NOT NULL,
  `TermDis` varchar(500) DEFAULT NULL,
  `Year` int(50) NOT NULL,
  PRIMARY KEY (`TermId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`TermId`, `TermDis`, `Year`) VALUES
(1, 'Onam exam ', 2016),
(2, 'annual exam', 2015);

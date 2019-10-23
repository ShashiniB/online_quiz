-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 05:48 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `aID` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ansID` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aID`, `answer`, `ansID`) VALUES
(1, 'Google', 1),
(2, 'Archie', 1),
(3, 'AltaVista', 1),
(4, 'Yahoo', 1),
(5, 'MySQL', 2),
(6, 'Oracle', 2),
(7, 'COBOL', 2),
(8, 'Clipper', 2),
(9, 'Prolog', 3),
(10, 'C', 3),
(11, 'Java', 3),
(12, 'C++', 3),
(13, 'Monitoring', 4),
(14, 'Data Transmission', 4),
(15, 'Security', 4),
(16, 'Establish user interface', 4),
(17, 'Linux', 5),
(18, 'Mac', 5),
(19, 'Windows', 5),
(20, 'C', 5);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qID` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ansID` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qID`, `question`, `ansID`) VALUES
(1, 'Which one is the first search engine in internet?', 2),
(2, 'Which of the following is not a database management software?', 7),
(3, 'Which one programming language is exclusively used for AI?', 9),
(4, 'Firewall in computer is used for?', 15),
(5, 'Which of the following is not an operating system?', 20);

-- --------------------------------------------------------

--
-- Table structure for table `quiztb`
--

CREATE TABLE `quiztb` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `new_password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiztb`
--

INSERT INTO `quiztb` (`ID`, `first_name`, `last_name`, `u_name`, `new_password`, `confirm_password`) VALUES
(1, 'shashini', 'bhagya', 'shash', '1995', '1995'),
(2, 'naveesha', 'lakshan', 'navee', '2001', '2001'),
(3, 'naveesha', 'lakshan', 'lak', '1234', '1234'),
(4, 'chandrasiri', 'MT', 'sri', '1965', '1965'),
(5, 'shalini', 'kalasha', 'dhul', '1999', '1999'),
(6, 'shalini', 'kalasha', 'shani', '2000', '2000'),
(7, 'bhagya', 'jeewamali', 'jeew', '1990', '1990'),
(8, 'chandrasiri', 'MT', 'cha', '1920', '1920');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`aID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qID`);

--
-- Indexes for table `quiztb`
--
ALTER TABLE `quiztb`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `aID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiztb`
--
ALTER TABLE `quiztb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 12:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(4) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_cat` varchar(25) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_publisher` varchar(40) NOT NULL,
  `b_edition` varchar(20) NOT NULL,
  `b_img` longtext NOT NULL,
  `b_pdf` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_name`, `b_cat`, `b_desc`, `b_publisher`, `b_edition`, `b_img`, `b_pdf`) VALUES
(4, 'Archplan', 'Architecture', 'Architecture Plan...', 'Designer', '1', 'upload_img/Archplan.PNG', 'upload_pdf/Archplan.pdf'),
(3, 'Android Programming', 'Information Technology', 'Android Programming for Beginners [Horton]', 'PACKT', '6th', 'upload_img/AndroidProgramming.PNG', 'upload_pdf/AndroidProgrammingforBeginners1.pdf'),
(8, 'vb', 'Textile Processing', 'fgdvbhgrx ', 'hdbjgdy', '1', 'upload_img/VisualBasic_NETNotesForProfessionals.PNG', 'upload_pdf/VisualBasic_NETNotesForProfessionals.pdf'),
(5, 'Civil Engineering Plan', 'Civil Engineering', 'Plans of Civil Engineering...', 'Engineer', '1', 'upload_img/CivilEnggPlan.PNG', 'upload_pdf/CivilEnggPlan.pdf'),
(6, 'Civil Staircase Cabin', 'Civil Engineering', 'Plan for Civil Staircase Cabin', 'Designer', '1', 'upload_img/CIVILSTAIRCABIN.PNG', 'upload_pdf/CIVILSTAIRCABIN.pdf'),
(7, 'C Plus Plus Notes', 'Information Technology', 'Notes for C++', 'GoalKicker.com', '1', 'upload_img/CPlusPlusNotesForProfessionals.PNG', 'upload_pdf/CPlusPlusNotesForProfessionals.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_nm` varchar(50) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_query` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_nm`, `con_email`, `con_query`) VALUES
('Dhruvit', 'jdsmk22@gmail.com', 'Hello. I am facing problem with login. Please help...');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`fname`, `lname`, `gender`, `email`, `phone`, `password`, `username`) VALUES
('a', 'a', 'Male', 'dmk9520@gmail.com', 9825808040, '123', 'd'),
('Dhruvit', 'K', 'Male', 'jdsmk22@gmail.com', 9825808040, '456', 'dmk'),
('Dhruvit', 'Katrodiya', 'Male', 'jdsmk22@gmail.com', 9825808040, '456', 'dmk9520'),
('Jeet', 'Ambaliya', 'Male', 'jeetambaliya43@gmail.com', 7096865292, '4690', 'jeet4690');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

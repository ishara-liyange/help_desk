-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 12:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `help_desk`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TicketID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `Message`, `UserID`, `TicketID`) VALUES
(1, 'This is a test Comment', 1, 3),
(2, 'This is a test Message', 1, 3),
(3, 'zzzz', 1, 3),
(4, '', 0, 0),
(5, '', 0, 0),
(6, '', 0, 0),
(7, '', 0, 0),
(8, '', 0, 0),
(9, '', 0, 0),
(10, '', 0, 0),
(11, '', 0, 0),
(12, '', 0, 0),
(13, '', 0, 0),
(14, '', 0, 0),
(15, '', 0, 0),
(16, '', 0, 0),
(17, '', 0, 0),
(18, '', 0, 0),
(19, '', 0, 0),
(20, '', 0, 0),
(21, '', 0, 0),
(22, '', 0, 0),
(23, '', 0, 0),
(24, '', 0, 0),
(25, '', 0, 0),
(26, '', 0, 0),
(27, '', 0, 0),
(28, '', 0, 0),
(29, '', 0, 0),
(30, '', 0, 0),
(31, '', 0, 0),
(32, '', 0, 0),
(33, '', 0, 0),
(34, '', 0, 0),
(35, '', 0, 0),
(36, '', 0, 0),
(37, '', 0, 0),
(38, '', 0, 0),
(39, '', 0, 0),
(40, '', 0, 0),
(41, '', 0, 0),
(42, '', 0, 0),
(43, '', 0, 0),
(44, '', 0, 0),
(45, '', 0, 0),
(46, '', 0, 0),
(47, '', 0, 0),
(48, '', 0, 0),
(49, '', 0, 0),
(50, '', 0, 0),
(51, '', 0, 0),
(52, '', 0, 0),
(53, '', 0, 0),
(54, '', 0, 0),
(55, '', 0, 0),
(56, '', 0, 0),
(57, '', 0, 0),
(58, '', 0, 0),
(59, '', 0, 0),
(60, '', 0, 0),
(61, '', 0, 0),
(62, '', 0, 0),
(63, '', 0, 0),
(64, '', 0, 0),
(65, '', 0, 0),
(66, '', 0, 0),
(67, '', 0, 0),
(68, '', 0, 0),
(69, '', 0, 0),
(70, '', 0, 0),
(71, '', 0, 0),
(72, '', 0, 0),
(73, '', 0, 0),
(74, '', 0, 0),
(75, '', 0, 0),
(76, '', 0, 0),
(77, '', 0, 0),
(78, '', 0, 0),
(79, '', 0, 0),
(80, '', 0, 0),
(81, '', 0, 0),
(82, '', 0, 0),
(83, 'Test message', 1, 3),
(84, 'sdf sdf', 1, 3),
(85, 'sdfsdfsdf', 1, 3),
(86, ' sdf', 1, 3),
(87, '', 1, 3),
(88, 'tttt', 1, 3),
(89, 'test', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Status` varchar(150) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Priority` int(11) DEFAULT NULL,
  `SubmittedBy` int(11) DEFAULT NULL,
  `Deadline` date DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `UpdatedDate` date DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `ResolvedTime` datetime DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `RegistrationNo` int(11) DEFAULT NULL,
  `ContactNo` varchar(255) DEFAULT NULL,
  `Faculty` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `myfile` varchar(255) DEFAULT NULL,
  `User` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ID`, `Title`, `Status`, `Category`, `Priority`, `SubmittedBy`, `Deadline`, `CreatedDate`, `UpdatedDate`, `UserID`, `ResolvedTime`, `FullName`, `RegistrationNo`, `ContactNo`, `Faculty`, `email`, `subject`, `message`, `myfile`, `User`) VALUES
(1, 'Cannot access LMS platform', 'Open', 'Technical Issues', 1, 3, '0000-00-00', '2024-05-06 00:00:00', '0000-00-00', 0, NULL, '', 0, '', 0, '', '', '', '', ''),
(2, 'Issue with student portal registration', 'Open', 'Administrative Issues', 2, 2, '0000-00-00', '2024-05-06 00:00:00', '0000-00-00', 0, NULL, '', 0, '', 0, '', '', '', '', ''),
(3, 'Request for course material for Introduction to Computers', 'On Hold', 'General Inquiries', 3, 5, '0000-00-00', '2024-05-06 00:00:00', '0000-00-00', 0, NULL, '', 0, '', 0, '', '', '', '', ''),
(4, 'Feedback on the online learning platform', 'Open', 'Feedback', 4, 2, '0000-00-00', '2024-05-06 00:00:00', '0000-00-00', 0, NULL, '', 0, '', 0, '', '', '', '', ''),
(5, 'Inquiry about transferring credits from another institution', 'Assigned', 'Administrative Issues', 2, 4, '0000-00-00', '2024-05-06 00:00:00', '0000-00-00', 0, NULL, '', 0, '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FullName`, `Email`, `Password`, `Role`, `Contact`) VALUES
(1, 'Admin', 'admin@gmail.com', '123', 'ADMIN', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

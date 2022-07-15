-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 08:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `activation`
--

CREATE TABLE `activation` (
  `activationID` int(100) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `Fname` varchar(1000) NOT NULL,
  `Lname` varchar(1000) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `roa` longtext NOT NULL,
  `date_requested` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activation`
--

INSERT INTO `activation` (`activationID`, `username`, `password`, `Fname`, `Lname`, `user_type`, `roa`, `date_requested`, `status`) VALUES
(1, 'user03', 'user03', 'user03', 'user03', 'USER', 'urgent', '2020-10-07 01:02:55', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Mi` varchar(10) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `Fname`, `Mi`, `Lname`, `username`, `password`, `user_type`, `status`, `date_modified`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'ADMIN', 'ACTIVE', '2020-10-06 10:06:48'),
(2, 'user01', 'user01', 'user01', 'user01', 'user01', 'USER', 'ACTIVE', '2020-10-07 00:54:20'),
(3, 'user02', 'user02', 'user02', 'user02', 'user02', 'USER', 'DISABLE', '2020-10-09 07:22:17'),
(4, 'user03', 'u3', 'user03', 'user03', 'user03', 'USER', 'ACTIVE', '2020-10-08 05:46:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation`
--
ALTER TABLE `activation`
  ADD PRIMARY KEY (`activationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activation`
--
ALTER TABLE `activation`
  MODIFY `activationID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

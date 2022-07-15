-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 11:55 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `storyID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `userID`, `storyID`, `comment`, `date`) VALUES
(4, 3, 7, 'I am gundam!!', '2020-11-27 00:01:13'),
(13, 3, 15, 'nnnnnnn', '2020-11-27 00:26:11'),
(14, 3, 8, 'yeahhh', '2020-11-27 01:06:18'),
(15, 3, 7, 'yes indeed', '2020-11-27 01:11:03'),
(18, 3, 23, 'yepeyyy', '2020-11-27 03:22:31'),
(19, 3, 15, 'nnmmnmnm', '2020-11-27 05:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `conID` int(11) NOT NULL,
  `requestor` int(11) NOT NULL,
  `acceptor` int(11) NOT NULL,
  `is_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`conID`, `requestor`, `acceptor`, `is_confirm`) VALUES
(63, 3, 13, 1),
(64, 3, 4, 1),
(66, 12, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `storyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likeID`, `userID`, `storyID`) VALUES
(6, 13, 15),
(18, 13, 22),
(19, 13, 19),
(27, 12, 7),
(28, 12, 8),
(30, 13, 7),
(31, 13, 18),
(32, 13, 6),
(33, 3, 7),
(34, 3, 8),
(35, 3, 26);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msgID` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `body_message` text NOT NULL,
  `is_read` int(11) NOT NULL,
  `time_read` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgID`, `sender`, `reciever`, `subject`, `body_message`, `is_read`, `time_read`) VALUES
(16, 3, 4, 'user03', 'adsasdasdasdas', 0, '2020-11-28 01:38:02'),
(17, 4, 3, 'user03', 'asasdasdasd', 0, '2020-11-28 01:38:34'),
(22, 4, 3, 'user03', 'asdasdas', 0, '2020-11-28 01:50:21'),
(23, 3, 4, 'user03', 'asd', 0, '2020-11-28 01:55:17'),
(25, 4, 3, 'user03', 'ddddddd', 0, '2020-11-28 02:38:50'),
(26, 3, 4, 'setsu', 'asdasdas', 0, '2020-11-28 02:39:35'),
(27, 3, 4, 'user03', 'animal', 0, '2020-11-29 00:44:34'),
(30, 1, 12, 'NOTIFICATION', 'user01 user01 has already accepted your request', 0, '2020-12-01 03:39:46'),
(31, 12, 3, 'hello message', 'hello there!', 0, '2020-11-30 20:40:21'),
(32, 3, 12, 'hello message', 'hello there too!', 0, '2020-11-30 20:40:58'),
(33, 3, 12, 'hello message', 'hello', 0, '2020-11-30 20:51:15'),
(34, 1, 3, 'NOTIFICATION', 'Justin Ed Pierre Tecson has already accepted your request', 0, '2020-12-01 05:03:20'),
(35, 1, 3, 'NOTIFICATION', 'Justin Ed Pierre Tecson has already accepted your request', 0, '2020-12-01 05:03:22'),
(36, 1, 3, 'NOTIFICATION', 'Justin Ed Pierre Tecson has already accepted your request', 0, '2020-12-01 05:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `storyID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `username` varchar(9999) NOT NULL,
  `title` mediumtext NOT NULL,
  `body` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`storyID`, `userID`, `username`, `title`, `body`, `date_created`, `date_modified`) VALUES
(6, 3, 'user02', 'Kira Yamato', 'Plot armor', '2020-10-23 09:57:58', '2020-10-23 09:57:58'),
(7, 4, 'user03', 'Heero Yuy', 'Mission Complete', '2020-10-23 09:58:59', '2020-10-23 09:58:59'),
(8, 13, 'user10', 'Augustus graves', 'Yes indeed, Im already a Gundam... ', '2020-10-23 11:58:44', '2020-10-23 07:23:17'),
(15, 13, 'user10', 'asdasdasd', 'asdasdasd', '2020-10-23 12:55:58', '2020-10-23 12:55:58'),
(18, 3, 'user02', 'hehehehehe', 'ASasAASASDAdfsdfsd', '2020-10-23 13:21:54', '2020-10-23 13:21:54'),
(19, 4, 'user03', 'sadasdasdasd', 'asdfdfdfgdfgdfg', '2020-10-23 13:22:19', '2020-10-23 13:22:19'),
(22, 3, 'user02', 'sadasdasdasd', 'asdasdasdasdas', '2020-10-23 13:32:41', '2020-10-23 13:32:41'),
(23, 4, 'user03', 'booom', 'booooooooooooooooooooom', '2020-10-23 13:33:11', '2020-10-23 13:33:11'),
(26, 4, 'user03', 'hghjgjgj', 'kjkhkhjhk', '2020-11-23 03:44:11', '2020-11-23 03:44:11');

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
(3, 'user01', 'u1', 'user01', 'user01', 'user01', 'USER', 'ACTIVE', '2020-11-25 07:52:14'),
(4, 'user03', 'u3', 'user03', 'user03', 'user03', 'USER', 'ACTIVE', '2020-10-21 13:24:59'),
(12, 'user09', 'u9', 'user09', 'user09', 'user09', 'USER', 'ACTIVE', '2020-10-20 10:57:52'),
(13, 'Justin Ed Pierre', 'C', 'Tecson', 'user10', 'user10', 'USER', 'ACTIVE', '2020-10-21 13:36:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation`
--
ALTER TABLE `activation`
  ADD PRIMARY KEY (`activationID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`conID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgID`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`storyID`);

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
  MODIFY `activationID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `conID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `storyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

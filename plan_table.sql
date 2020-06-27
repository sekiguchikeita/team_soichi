-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2020 at 01:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `plan_table`
--

CREATE TABLE `plan_table` (
  `taskid` int(12) NOT NULL,
  `lid` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `task` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL,
  `end_date` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(124) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `how_long` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plan_table`
--

INSERT INTO `plan_table` (`taskid`, `lid`, `task`, `indate`, `end_date`, `tag`, `comment`, `how_long`) VALUES
(1, 'testid1', 'test1 rev rev rev rev', '2020-06-27 20:27:24', '10/10', 'php', 'comment1', '10h'),
(4, 'testid2', 'test2 rev ', '2020-06-27 21:39:50', '10/10', 'python', 'comment2', '10h'),
(5, 'testid3', 'test3', '2020-06-27 21:41:02', '10/11', 'React', 'comment3', '11h'),
(6, 'testid3', 'test4', '2020-06-27 21:41:40', '', 'php', 'comment4', '1h');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plan_table`
--
ALTER TABLE `plan_table`
  ADD KEY `id` (`taskid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plan_table`
--
ALTER TABLE `plan_table`
  MODIFY `taskid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

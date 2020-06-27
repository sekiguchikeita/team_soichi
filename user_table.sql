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
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `lid` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `occupation` text COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL,
  `class_1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `class_2` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `lid`, `lpw`, `indate`, `name`, `age`, `occupation`, `kanri_flg`, `life_flg`, `class_1`, `class_2`) VALUES
(1, 'testid1', 'testpw1', '2020-06-27 20:38:42', 'test1', 27, 'student', 1, 1, 'dev', 1),
(2, 'testid2', 'testpw2', '2020-06-27 21:39:27', 'test2', 22, 'student', 1, 1, 'dev', 2),
(3, 'testid3', 'testpw3', '2020-06-27 21:40:36', 'test3', 99, 'student', 1, 1, 'dev', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD UNIQUE KEY `lid` (`lid`,`lpw`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

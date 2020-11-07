-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2020 at 01:39 PM
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
-- Database: `examtool`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `number` int(11) NOT NULL,
  `sub_code` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `option5` varchar(200) NOT NULL,
  `option6` varchar(200) NOT NULL,
  `option7` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`number`, `sub_code`, `description`, `option1`, `option2`, `option3`, `option4`, `option5`, `option6`, `option7`, `answer`, `type`) VALUES
(39, '0', 'how?', 'e', 'w', 'q', '', '', '', '', ',w,e,e', NULL),
(40, '0', 'how?', 'e', 'w', 'q', '', '', '', '', ',w,e,e', NULL),
(41, '0', 'how?', 'c', 'b', 'a', '', '', '', '', ',a,b,c', NULL),
(42, '0', 'how?', 'c', 'b', 'a', '', '', '', '', ',a,b', ''),
(43, '0', 'how?', 'n', 'b', 'a', '', '', '', '', ',a,b', ''),
(44, '0', 'how?', 'n', 'b', 'a', '', '', '', '', ',a,b', 'checkbox');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 05:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `number` int(2) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `test_num` int(11) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `option5` varchar(100) DEFAULT NULL,
  `option6` varchar(100) DEFAULT NULL,
  `option7` varchar(100) DEFAULT NULL,
  `answer` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`number`, `subject_id`, `test_num`, `description`, `option1`, `option2`, `option3`, `option4`, `option5`, `option6`, `option7`, `answer`, `type`) VALUES
(1, '17cs71', 1, 'abcd', 'a', 'b', 'c', '', '', '', '', ',b', 'radio'),
(1, '17cs71', 2, 'alksdsfjisjd', 'a', 'b', 'c', 'd', '', '', '', ',b', 'radio'),
(2, '17cs71', 1, 'csldfjjf', 'a', 'b', 'c', '', '', '', '', ',c', 'radio'),
(2, '17cs71', 2, 'djlsdsd', 'a', 'b', 'c', 'd', '', '', '', ',b,d', 'checkbox'),
(3, '17cs71', 1, 'dljfdsofidjsiofdjsoifs', 'a', 'b', 'c', 'd', 'e', 'f', '', ',d', 'radio'),
(4, '17cs71', 1, 'qwerty', 'a', 'b', 'c', 'd', '', '', '', ',b,c,d', 'checkbox');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`number`,`subject_id`,`test_num`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

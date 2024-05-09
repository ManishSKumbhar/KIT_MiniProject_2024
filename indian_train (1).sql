-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 11:54 AM
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
-- Database: `indian_train`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `tname` text NOT NULL,
  `tno` int(20) NOT NULL,
  `pno` int(10) NOT NULL,
  `id` int(2) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`tname`, `tno`, `pno`, `id`, `time`) VALUES
('Chennai Express', 256, 2, 1, '08:27:00'),
('Koyna Express', 25638, 1, 2, '16:18:00'),
('Chennai Express', 25486, 2, 3, '20:00:00'),
('Rani Chinnama', 14587, 6, 4, '23:40:00'),
('Gatiman Express', 45879, 6, 5, '20:15:00'),
('Vande  Bharat', 14578, 5, 6, '21:34:00'),
('', 0, 0, 0, '00:00:00'),
('', 0, 0, 0, '00:00:00'),
('', 0, 0, 0, '00:00:00'),
('', 0, 0, 0, '00:00:00'),
('', 0, 0, 0, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `tname` text NOT NULL,
  `tno` varchar(10) NOT NULL,
  `id` int(2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancel`
--

INSERT INTO `cancel` (`tname`, `tno`, `id`, `date`) VALUES
('Vivek Express', '22525', 1, '2024-04-28'),
('Himsagar Express', '22548', 2, '2024-04-27'),
('Darjeeling Himalayan Railway', '22489', 3, '2024-04-29'),
('Rani Chinnama', '25846', 9, '2024-05-04'),
('Vande  Bharat', '25846', 11, '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `delay`
--

CREATE TABLE `delay` (
  `tname` text NOT NULL,
  `tno` varchar(10) NOT NULL,
  `id` int(2) NOT NULL,
  `delay_t` int(2) NOT NULL,
  `oritime` time NOT NULL,
  `date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delay`
--

INSERT INTO `delay` (`tname`, `tno`, `id`, `delay_t`, `oritime`, `date`) VALUES
('Rajdhani Express', '24518', 1, 30, '22:45:44', '02/05/2024'),
('', '', 93, 0, '00:00:00', ''),
('kolhapur express', '16151', 94, 60, '15:15:00', '2/5/24');

-- --------------------------------------------------------

--
-- Table structure for table `departure`
--

CREATE TABLE `departure` (
  `tname` text NOT NULL,
  `tno` varchar(10) NOT NULL,
  `pno` int(5) NOT NULL,
  `id` int(2) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departure`
--

INSERT INTO `departure` (`tname`, `tno`, `pno`, `id`, `time`) VALUES
('Vande Bharat', '44444', 4, 1, '22:44:00'),
('Jnaneswari Express', '2222121', 9, 2, '17:14:00'),
('Jaipur Superfast Express', '22548', 8, 3, '00:00:00'),
('Gatiman Express', '47856', 2, 4, '21:56:00'),
('Bengluru Express', '4579', 6, 5, '19:12:00'),
('Vande  Bharat', '78946', 10, 6, '20:00:00'),
('', '', 0, 0, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `langdata`
--
-- Error reading structure for table indian_train.langdata: #1932 - Table &#039;indian_train.langdata&#039; doesn&#039;t exist in engine
-- Error reading data for table indian_train.langdata: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `indian_train`.`langdata`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `langt`
--

CREATE TABLE `langt` (
  `lang` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `langt`
--

INSERT INTO `langt` (`lang`, `id`) VALUES
('hi', 1),
('ja', 2),
('mr', 3),
('gu', 4),
('ja', 5),
('mr', 6);

-- --------------------------------------------------------

--
-- Table structure for table `languageonly`
--

CREATE TABLE `languageonly` (
  `language` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `languageonly`
--

INSERT INTO `languageonly` (`language`, `id`) VALUES
('Marathi', 1),
('Gujarathi', 2),
('Gujarathi', 3),
('English', 14),
('Hindi', 16),
('Marathi', 17),
('Marathi', 18),
('Japanese', 19),
('Marathi', 21),
('Hindi', 23),
('Marathi', 24),
('Gujarathi', 26),
('Marathi', 28),
('Marathi', 31),
('Marathi', 33),
('Marathi', 34),
('', 35),
('', 36),
('Japanese', 37),
('', 38),
('Marathi', 39),
('', 40),
('', 41),
('', 42),
('', 43),
('', 44),
('Hindi', 45),
('Marathi', 46),
('Japanese', 47),
('', 48),
('Gujarathi', 49),
('', 50),
('Marathi', 51),
('', 52),
('Japanese', 53),
('Marathi', 54),
('Hindi', 55),
('', 56),
('Marathi', 57);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(20) NOT NULL,
  `pw` varchar(8) NOT NULL,
  `lang` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `pw`, `lang`, `id`) VALUES
('user1@gmail.com', 'asd#12', 'Marathi', 1),
('user2@gmail.com', 'asw$15', 'French', 2),
('user3@yahoo.com', 'asq%258', 'Hindi', 4),
('usertest@gmail.com', 'aswz$41', 'Gujarathi', 5),
('usertest@gmail.com', 'aswz$41', 'Gujarathi', 6),
('usertest@yahoo.com', 'aswrt4', 'Japanese', 9),
('usertest@redhat.com', '145@sed', 'Marathi', 10),
('user1@gmail.com', 'asw$15', 'English', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delay`
--
ALTER TABLE `delay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langt`
--
ALTER TABLE `langt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languageonly`
--
ALTER TABLE `languageonly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `delay`
--
ALTER TABLE `delay`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `langt`
--
ALTER TABLE `langt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `languageonly`
--
ALTER TABLE `languageonly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

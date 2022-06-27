-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 05:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youssef`
--
CREATE DATABASE IF NOT EXISTS `youssef` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `youssef`;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `courseName` varchar(150) NOT NULL,
  `numberHours` int(150) NOT NULL,
  `start_Date` date NOT NULL,
  `end_Date` date NOT NULL,
  `institution` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`id`, `courseName`, `numberHours`, `start_Date`, `end_Date`, `institution`, `url`, `file`, `notes`) VALUES
(17, 'Laravel', 77, '2018-10-05', '2022-10-05', 'Mahmoud Center', '', 'p4.PNG', 'welcome And thanx You'),
(18, 'Flutter', 99, '2018-12-08', '2021-11-05', 'Al-Azhar', '', 'asd.jpeg', 'aaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `category` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `start_month` varchar(150) NOT NULL,
  `end_month` varchar(150) NOT NULL,
  `institution` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `category`, `title`, `start_month`, `end_month`, `institution`, `description`) VALUES
(3, 'Freelancer', 'Web Developer', '2000-05-05', '1999-07-07', 'Al-Azhar University', 'wellcom in the Azhar '),
(17, 'Freelancer', 'Flutter Developer', '2222-12-05', '19999-12-10', 'Al-Azhar University', 'Al-Azhar University Al-Azhar University Al-Azhar University');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(8) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `Birth_Date` date NOT NULL DEFAULT current_timestamp(),
  `nationality` varchar(150) NOT NULL,
  `placeB` varchar(150) NOT NULL,
  `jobTitle` varchar(150) NOT NULL,
  `yearEx` varchar(150) NOT NULL,
  `pathImag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `full_name`, `gender`, `Birth_Date`, `nationality`, `placeB`, `jobTitle`, `yearEx`, `pathImag`) VALUES
(1, 'Amal Yaqoub Al-Ajouri', 'Female', '2001-04-30', 'palestine', 'Gaza', 'Software Engineering', '3 years', '../images/asd.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

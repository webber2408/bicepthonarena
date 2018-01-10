-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 12:58 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `trainerId` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `setsd1` varchar(500) NOT NULL,
  `totaltimed1` varchar(500) NOT NULL,
  `exercised1` varchar(500) NOT NULL,
  `setsd2` varchar(500) NOT NULL,
  `totaltimed2` varchar(500) NOT NULL,
  `exercised2` varchar(500) NOT NULL,
  `setsd3` varchar(500) NOT NULL,
  `totaltimed3` varchar(500) NOT NULL,
  `exercised3` varchar(500) NOT NULL,
  `setsd4` varchar(500) NOT NULL,
  `totaltimed4` varchar(500) NOT NULL,
  `exercised4` varchar(500) NOT NULL,
  `setsd5` varchar(500) NOT NULL,
  `totaltimed5` varchar(500) NOT NULL,
  `exercised5` varchar(500) NOT NULL,
  `setsd6` varchar(500) NOT NULL,
  `totaltimed6` varchar(500) NOT NULL,
  `exercised6` varchar(500) NOT NULL,
  `setsd7` varchar(500) NOT NULL,
  `totaltimed7` varchar(500) NOT NULL,
  `exercised7` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`trainerId`, `id`, `setsd1`, `totaltimed1`, `exercised1`, `setsd2`, `totaltimed2`, `exercised2`, `setsd3`, `totaltimed3`, `exercised3`, `setsd4`, `totaltimed4`, `exercised4`, `setsd5`, `totaltimed5`, `exercised5`, `setsd6`, `totaltimed6`, `exercised6`, `setsd7`, `totaltimed7`, `exercised7`) VALUES
(5, 1, '1', '0', 'Abs-Situps', '10', '10', 'Abs-Crunches,Abs-Situps,Back-barbell', '10', '10', 'Abs-Crunches,Abs-Situps', '10', '10', 'Abs-Situps,Back-barbell,Back-Dumbell Shrugs', '10', '10', 'Abs-Situps,Back-barbell', '10', '10', 'Abs-Situps,Back-barbell,Back-Dumbell Shrugs', '10', '10', 'Abs-Situps,Back-barbell'),
(5, 2, '1', '0', 'Abs-Situps', '10', '10', 'Abs-Crunches,Abs-Situps,Back-barbell', '10', '10', 'Abs-Crunches,Abs-Situps', '10', '10', 'Abs-Situps,Back-barbell,Back-Dumbell Shrugs', '10', '10', 'Abs-Situps,Back-barbell', '10', '10', 'Abs-Situps,Back-barbell,Back-Dumbell Shrugs', '10', '10', 'Abs-Situps,Back-barbell');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `id` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `agegroup` varchar(20) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `enroll` text NOT NULL,
  `enrolledin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `id`, `password`, `agegroup`, `gender`, `profession`, `name`, `enroll`, `enrolledin`) VALUES
('dkjnbd@dfkjbn.fskjn', 1, 'kfnnkbj', '15-20 yrs', 'Male', '15-20 yrs', '', '', ''),
('dkjnbd@dfkjbn.fskjnj', 2, 'dkjndnkcna', '15-20 yrs', 'Male', '', '', '', ''),
('kdcks@jhdcb.skjn', 3, 'djcdjkbwd', '15-20 yrs', 'Male', 'Learner', '', '', ''),
('rahul@gmail.com', 4, 'rahul123', '20-30 yrs', 'Male', 'Learner', 'rahul', '', '5,11'),
('mukesh@gmail.com', 5, 'mukesh123', '20-30 yrs', 'Male', 'Trainer', 'mukesh', '4', ''),
('john@gmail.com', 6, 'john123', '20-30 yrs', 'Male', 'Trainer', 'john', '', ''),
('main@gmail.com', 7, 'main123', '15-20 yrs', 'Male', 'Learner', 'khsbca', '', ''),
('mom@gmail.com', 8, 'mom123', '15-20 yrs', 'Male', 'Learner', 'vfkjbvs', '', ''),
('man@gmail.com', 9, 'man123', '15-20 yrs', 'Male', 'Learner', 'man', '', ''),
('vvfvs@fbs.dvsdv', 10, 'fvbsfvfsfs', '', '', '', 'dsvdsa', '', ''),
('mahesh@gmail.com', 11, 'mahesh123', '20-30 yrs', 'Male', 'Trainer', 'mahesh', '4', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

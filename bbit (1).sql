-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2019 at 07:00 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbit`
--

-- --------------------------------------------------------

--
-- Table structure for table `apllication`
--

CREATE TABLE `apllication` (
  `id` int(11) NOT NULL,
  `academic` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `open` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apllication`
--

INSERT INTO `apllication` (`id`, `academic`, `date`, `open`) VALUES
(6, '2019/2020', '2019-03-06', 0),
(7, '2018/2019', '2019-03-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `age` int(20) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `s_county` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `adm` varchar(255) NOT NULL,
  `cn` varchar(255) NOT NULL,
  `level` int(50) NOT NULL,
  `level1` varchar(50) NOT NULL,
  `level2` varchar(50) NOT NULL,
  `yos` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date_applied` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `open` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `f_name`, `l_name`, `email`, `id_no`, `phone`, `age`, `dob`, `gender`, `s_county`, `ward`, `village`, `institution`, `adm`, `cn`, `level`, `level1`, `level2`, `yos`, `amount`, `date_applied`, `user_id`, `status`, `active`, `open`) VALUES
(3, 'Rashid', 'mkoji', 'rashidcollins17@gmail.com', '33307441', 703954539, 45, '2019-02-13', 'Rashid collins mkoji', 'coast', 'kiembeni', 'kiembeni', 'ttu', 'tuo147', 'bbit', 0, '', '', '2nd', '36000.00', '2019-02-12 09:12:40', '1', 0, 0, 0),
(4, 'mkoji', 'dobby', 'dobby@email.com', '369874', 125874, 15, '12/3/6', 'male', 'elve', 'elve', 'elve', 'elve college', '1258pit', 'magic', 0, '', '', '7th', '12000.00', '2019-02-13 04:14:54', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `s_county` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `adm` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`id`, `f_name`, `l_name`, `email`, `id_no`, `phone`, `gender`, `s_county`, `ward`, `institution`, `adm`, `amount`, `date`) VALUES
(12, 'Rashid', 'mkoji', 'rashidcollins17@gmail.com', 33307441, 703954539, 'Rashid collins mkoji', 'coast', 'kiembeni', 'ttu', 'tuo147', '10000.00', '2019-02-25 00:00:00'),
(13, 'mkoji', 'dobby', 'dobby@email.com', 369874, 125874, 'male', 'elve', 'elve', 'elve college', '1258pit', '5000.00', '2019-02-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `id_no` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `join_date` datetime NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `s_name`, `m_name`, `id_no`, `email`, `password`, `join_date`, `last_login`) VALUES
(1, 'rashid', 'mkoji', 'coins', 33307441, 'rashidcollins@gmail.com', '$2y$10$McstKYfnEwShnnjJhapP5upIOwiCchugjdfaSjs/VCbu.YylX3vJq', '2019-02-08 00:00:00', '2019-03-25 06:33:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apllication`
--
ALTER TABLE `apllication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
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
-- AUTO_INCREMENT for table `apllication`
--
ALTER TABLE `apllication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

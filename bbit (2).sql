-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 01:15 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `joined_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  `permisions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `email`, `password`, `joined_date`, `last_login`, `permisions`) VALUES
(1, 'emres', 'emres@email.com', '$2y$10$nAjyGRAHFu5Dl2bxYl.ofujgPpV0kkNSVS31YI/2ZUZMQKs2zRVyy', '2019-03-25 13:56:29', '2019-03-28 09:55:07', 'admin,editor'),
(4, 'gladys wakhu', 'gladys@gmail.com', '$2y$10$G.wz/wSZVhjgEwsA8nwaJuv3L7GemgWouPpSdwKy0qMytft/QGNoS', '2019-03-27 01:21:21', '0000-00-00 00:00:00', 'admin,editor'),
(5, 'elijah mwangi', 'elijahmacharia54@gmail.com', '$2y$10$OGvI1mPBkFxWZhRLi/DHvO3GVMDZi1Bt79T31Lyg37N9mWRvG3gMi', '2019-03-27 01:22:18', '2019-03-28 12:58:02', 'admin,editor');

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
(13, '2019/2020', '2019-03-28', 1);

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
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `open` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `f_name`, `l_name`, `email`, `id_no`, `phone`, `age`, `dob`, `gender`, `s_county`, `ward`, `village`, `institution`, `adm`, `cn`, `level`, `level1`, `level2`, `yos`, `amount`, `date_applied`, `user_id`, `status`, `active`, `open`) VALUES
(3, 'Rashid', 'mkoji', 'rashidcollins17@gmail.com', '33307441', 703954539, 45, '2019-02-13', 'Rashid collins mkoji', 'coast', 'kiembeni', 'kiembeni', 'ttu', 'tuo147', 'bbit', 0, '', '', '2nd', '36000.00', '2019-02-12 09:12:40', '1', 0, 0, 0),
(4, 'mkoji', 'dobby', 'dobby@email.com', '369874', 125874, 15, '12/3/6', 'male', 'elve', 'elve', 'elve', 'elve college', '1258pit', 'magic', 0, '', '', '7th', '12000.00', '2019-02-13 04:14:54', '', 0, 1, 0),
(5, 'elijah', 'mwangi', 'elijahmacharia54@gmail.com', '32960226', 71128120, 25, '1994-02-28', 'male', 'voi', 'kaloleni', 'sophia', 'ttu', '0020/2015', 'BBIT', 0, '', '', '4', '17500.00', '2019-03-27 01:35:39', '4', 1, 1, 1);

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
(13, 'mkoji', 'dobby', 'dobby@email.com', 369874, 125874, 'male', 'elve', 'elve', 'elve college', '1258pit', '5000.00', '2019-02-25 00:00:00'),
(14, 'Rashid', 'mkoji', 'rashidcollins17@gmail.com', 33307441, 703954539, 'Rashid collins mkoji', 'coast', 'kiembeni', 'ttu', 'tuo147', '1525555.00', '2019-03-13 00:00:00'),
(15, 'elijah', 'mwangi', 'elijahmacharia54@gmail.com', 32960226, 71128120, 'male', 'voi', 'kaloleni', 'ttu', '0020/2015', '20000.00', '2019-03-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `content`) VALUES
(1, 'erfre', 147852, 'rashidcollins17@gmail.com', '<p>rfkm43por;m4rpo4kr3p</p>');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `subject`, `sender_email`, `sender_name`, `description`, `time`, `active`) VALUES
(2, 'ewjdnlkjnl32e', 'wekbkhb3ie@email.com', 'dekb32uekh32o', '<p>32wehgu3eh0heo2iheoi2eh23oieh2oi3e32h</p>', '2019-03-28 04:48:42', 'active');

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
(1, 'rashid', 'mkoji', 'coins', 33307441, 'rashidcollins@gmail.com', '$2y$10$S8yPNiB4NHAPcajI3sgc9uHHMku/UtPRxQkVTKbN2XAabA2r.SaZG', '2019-02-08 00:00:00', '2019-03-28 08:56:40'),
(2, 'ewd', 'ed23e32', '32e32', 2147483647, 'rashid@gmail.com', '$2y$10$7/I3fzkmCL/qviSTBVUpquDg4KDM4EEjs/gDcaMcUNBm8HIRPE80m', '0000-00-00 00:00:00', '2019-03-26 01:56:51'),
(3, 'gladys', 'wakhu', 'fjjchj', 32903132, 'gladys@gmail.com', '$2y$10$9WIEcnj1DcNFcEddW9aB7uweGbqDsI0W3vjOxKegdHYQOJpmkTd8a', '0000-00-00 00:00:00', '2019-03-27 01:04:42'),
(4, 'elijah', 'macharia', 'mwangi', 32960226, 'elijahmacharia54@gmail.com', '$2y$10$UAj703iWQzrJbs4V15zZgOdci/ycB7QfYrwdZQC6EwjS2PeijqDOe', '0000-00-00 00:00:00', '2019-03-28 13:06:51'),
(5, 'mkoji', 'emres', 'collins', 33307442, 'emres@email.com', '$2y$10$8Qc31uUcCAXA7r2uVlvl.uPlKx7ud7CwwT0L7DqwL5u4tP0wz7QhW', '0000-00-00 00:00:00', '2019-03-27 06:30:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `apllication`
--
ALTER TABLE `apllication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

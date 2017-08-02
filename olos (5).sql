-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2017 at 10:29 පෙ.ව.
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olos`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `user_id`) VALUES
('asela@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
('chamara@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
('d@jhj.aa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 10),
('d@jhj.aah', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 12),
('d@jhj.aahy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 13),
('d@jhj.lk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 8),
('d@jhj.lkh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 9),
('dd@uu.lk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 14),
('dd@uugg.lk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 15),
('lasith', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4),
('upul@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'owner'),
(2, 'web admin'),
(3, 'manager'),
(4, 'officer');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `track_id` int(11) NOT NULL,
  `track_in` varchar(20) NOT NULL,
  `track_out` varchar(20) NOT NULL,
  `track_status` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `track_in`, `track_out`, `track_status`, `user_id`, `ip`) VALUES
(1, '2017-04-29 15:12:12', '', '', 2, '1270'),
(2, '2017-04-29 15:12:49', '', '', 2, '127.0.0.1'),
(3, '2017-04-29 15:32:24', '', '', 2, '127.0.0.1'),
(4, '2017-04-29 15:41:30', '', '', 2, '127.0.0.1'),
(5, '2017-04-29 15:43:22', '', '', 2, '127.0.0.1'),
(6, '2017-04-29 15:43:55', '', '', 2, '127.0.0.1'),
(7, '2017-04-29 15:56:32', '', '', 2, '127.0.0.1'),
(8, '2017-04-29 16:21:38', '2017-04-29 16:21:41', 'LogOut', 2, '127.0.0.1'),
(9, '2017-04-29 16:23:31', '2017-04-29 16:23:41', 'LogOut', 2, '127.0.0.1'),
(10, '2017-05-06 14:15:13', '2017-05-06 14:15:23', 'LogOut', 3, '127.0.0.1'),
(11, '2017-05-06 14:19:52', '2017-05-06 14:19:59', 'LogOut', 3, '127.0.0.1'),
(12, '2017-05-06 14:22:18', '2017-05-06 14:22:25', 'LogOut', 3, '127.0.0.1'),
(13, '2017-05-06 14:27:57', '2017-05-06 14:28:01', 'LogOut', 3, '127.0.0.1'),
(14, '2017-05-06 14:39:48', '2017-05-06 15:30:07', 'LogOut', 1, '127.0.0.1'),
(15, '2017-05-06 15:30:13', '2017-05-06 15:35:23', 'LogOut', 2, '127.0.0.1'),
(16, '2017-05-06 15:35:29', '2017-05-06 15:44:44', 'LogOut', 3, '127.0.0.1'),
(17, '2017-05-06 15:45:07', '2017-05-06 15:56:17', 'LogOut', 4, '127.0.0.1'),
(18, '2017-05-06 15:56:23', '', '', 2, '127.0.0.1'),
(19, '2017-05-06 15:56:52', '2017-05-06 16:26:33', 'LogOut', 1, '127.0.0.1'),
(20, '2017-05-13 12:21:15', '', '', 3, '127.0.0.1'),
(21, '2017-05-13 12:21:23', '2017-05-13 13:09:14', 'LogOut', 1, '127.0.0.1'),
(22, '2017-05-13 13:09:25', '2017-05-13 13:17:26', 'LogOut', 2, '127.0.0.1'),
(23, '2017-05-13 13:17:33', '2017-05-13 13:22:28', 'LogOut', 3, '127.0.0.1'),
(24, '2017-05-13 13:22:35', '2017-05-13 13:44:02', 'LogOut', 4, '127.0.0.1'),
(25, '2017-05-13 13:44:11', '2017-05-13 14:40:17', 'LogOut', 1, '127.0.0.1'),
(26, '2017-05-13 14:40:32', '2017-05-13 14:42:26', 'LogOut', 1, '127.0.0.1'),
(27, '2017-05-13 14:47:08', '', '', 1, '127.0.0.1'),
(28, '2017-05-20 13:57:29', '2017-05-20 13:57:34', 'LogOut', 3, '127.0.0.1'),
(29, '2017-05-20 13:57:42', '', '', 2, '127.0.0.1'),
(30, '2017-05-27 13:32:54', '2017-05-27 13:33:01', 'LogOut', 3, '127.0.0.1'),
(31, '2017-05-27 13:33:08', '', '', 2, '127.0.0.1'),
(32, '2017-06-03 12:47:40', '2017-06-03 12:47:53', 'LogOut', 3, '127.0.0.1'),
(33, '2017-06-03 12:48:02', '2017-06-03 12:57:11', 'LogOut', 2, '127.0.0.1'),
(34, '2017-06-03 12:57:17', '2017-06-03 12:58:09', 'LogOut', 3, '127.0.0.1'),
(35, '2017-06-03 12:58:14', '2017-06-03 12:59:16', 'LogOut', 2, '127.0.0.1'),
(36, '2017-06-03 12:59:23', '', '', 1, '127.0.0.1'),
(37, '2017-06-10 13:15:16', '', '', 3, '127.0.0.1'),
(38, '2017-06-10 13:15:28', '', '', 1, '127.0.0.1'),
(39, '2017-06-17 13:22:44', '', '', 3, '127.0.0.1'),
(40, '2017-06-17 13:22:58', '', '', 2, '127.0.0.1'),
(41, '2017-06-17 13:27:11', '', '', 2, '127.0.0.1'),
(42, '2017-06-24 13:45:06', '2017-06-24 13:45:12', 'LogOut', 3, '127.0.0.1'),
(43, '2017-06-24 13:45:20', '', '', 3, '127.0.0.1'),
(44, '2017-06-24 13:45:36', '', '', 2, '127.0.0.1'),
(45, '2017-07-01 13:36:48', '', '', 2, '127.0.0.1'),
(46, '2017-07-01 15:47:39', '', '', 2, '127.0.0.1'),
(47, '2017-07-08 13:31:30', '', '', 2, '127.0.0.1'),
(48, '2017-07-15 13:55:10', '', '', 3, '127.0.0.1'),
(49, '2017-07-15 13:56:37', '', '', 2, '127.0.0.1'),
(50, '2017-07-22 13:58:08', '', '', 2, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(200) NOT NULL,
  `user_lname` varchar(200) NOT NULL,
  `user_dob` date NOT NULL,
  `user_nic` varchar(20) NOT NULL,
  `user_tel` varchar(20) NOT NULL,
  `user_add` varchar(200) NOT NULL,
  `user_image` text NOT NULL,
  `user_status` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `user_dob`, `user_nic`, `user_tel`, `user_add`, `user_image`, `user_status`, `role_id`, `user_gender`) VALUES
(1, 'Chamara', 'Kapugedara', '0000-00-00', '', '', '', '', 'active', 1, ''),
(2, 'Asela', 'Gunawardhana', '0000-00-00', '', '', '', '', 'active', 2, ''),
(3, 'Upul', 'Tharanga', '0000-00-00', '', '', '', '', 'active', 3, ''),
(4, 'Lasith', 'Malinga', '0000-00-00', '', '', '', '', 'active', 4, ''),
(5, 'Damindaeeeee', 'Herath', '0000-00-00', '', '', '', '', '', 0, ''),
(6, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '', 'Active', 1, 'Male'),
(7, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '', 'Active', 1, 'Male'),
(8, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '', 'active', 1, 'Male'),
(9, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '', 'active', 1, 'Male'),
(10, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '', 'deactive', 1, 'Male'),
(11, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '', 'Active', 1, 'Male'),
(12, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '12_3.png', 'deactive', 1, 'Male'),
(13, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '13_4.png', 'deactive', 1, 'Male'),
(14, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '14_5.png', 'deactive', 4, 'Male'),
(15, 'Daminda', 'Herath', '1990-01-01', '901234567v', '+94777296275', 'Address', '15_5.png', 'deactive', 4, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 02:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud1`
--
CREATE DATABASE IF NOT EXISTS `cloud1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cloud1`;

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `event_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `event` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdirectories`
--

CREATE TABLE `userdirectories` (
  `dir_id` bigint(20) NOT NULL,
  `dir_name` varchar(50) NOT NULL,
  `dir_parent` varchar(50) NOT NULL,
  `dir_owner_id` varchar(50) NOT NULL,
  `dir_size` bigint(20) NOT NULL,
  `dir_upload_date` datetime NOT NULL,
  `dir_last_access_date` datetime NOT NULL,
  `dir_sharing_type` varchar(50) NOT NULL,
  `dir_access_list` longtext NOT NULL,
  `dir_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdirectories`
--

INSERT INTO `userdirectories` (`dir_id`, `dir_name`, `dir_parent`, `dir_owner_id`, `dir_size`, `dir_upload_date`, `dir_last_access_date`, `dir_sharing_type`, `dir_access_list`, `dir_flag`) VALUES
(7999731179, 'test0', 'root', '7999731023', 0, '2019-06-12 22:48:21', '2019-06-12 22:48:21', 'onlyme', '', 1),
(7999731180, 'test1', 'root', '7999731023', 0, '2019-06-12 22:48:29', '2019-06-12 22:48:29', 'onlyme', '', 1),
(7999731181, 'test2', 'root', '7999731023', 0, '2019-06-12 22:48:35', '2019-06-12 22:48:35', 'onlyme', '', 1),
(7999731182, 'test3', 'root', '7999731023', 0, '2019-06-12 22:48:40', '2019-06-12 22:48:40', 'onlyme', '', 1),
(7999731183, 'test4', 'root', '7999731023', 0, '2019-06-12 22:48:45', '2019-06-12 22:48:45', 'onlyme', '', 1),
(7999731184, 'test5', 'root', '7999731023', 0, '2019-06-12 22:48:49', '2019-06-12 22:48:49', 'onlyme', '', 1),
(7999731185, 'test6', 'root', '7999731023', 0, '2019-06-12 22:48:54', '2019-06-12 22:48:54', 'onlyme', '', 1),
(7999731186, 'test7', 'root', '7999731023', 0, '2019-06-12 22:48:59', '2019-06-12 22:48:59', 'onlyme', '', 1),
(7999731187, 'test8', 'root', '7999731023', 0, '2019-06-12 22:49:04', '2019-06-12 22:49:04', 'onlyme', '', 1),
(7999731188, 'test9', 'root', '7999731023', 0, '2019-06-12 22:49:08', '2019-06-12 22:49:08', 'onlyme', '', 1),
(7999731189, 'test10', 'root', '7999731023', 0, '2019-06-12 22:49:14', '2019-06-12 22:49:14', 'onlyme', '', 1),
(7999731190, 'test11', 'root', '7999731023', 0, '2019-06-12 22:49:18', '2019-06-12 22:49:18', 'onlyme', '', 1),
(7999731191, 'test12', 'root', '7999731023', 0, '2019-06-12 22:49:23', '2019-06-12 22:49:23', 'onlyme', '', 1),
(7999731192, 'test13', 'root', '7999731023', 0, '2019-06-12 22:49:27', '2019-06-12 22:49:27', 'onlyme', '', 1),
(7999731193, 'test14', 'root', '7999731023', 0, '2019-06-12 22:49:33', '2019-06-12 22:49:33', 'onlyme', '', 1),
(7999731194, 'test15', 'root', '7999731023', 0, '2019-06-12 22:49:38', '2019-06-12 22:49:38', 'onlyme', '', 1),
(7999731195, 'test16', 'root', '7999731023', 0, '2019-06-12 22:49:44', '2019-06-12 22:49:44', 'onlyme', '', 1),
(7999731196, 'test17', 'root', '7999731023', 0, '2019-06-12 22:49:48', '2019-06-12 22:49:48', 'onlyme', '', 1),
(7999731197, 'test18', 'root', '7999731023', 0, '2019-06-12 22:49:52', '2019-06-12 22:49:52', 'onlyme', '', 1),
(7999731198, 'test19', 'root', '7999731023', 0, '2019-06-12 22:49:56', '2019-06-12 22:49:56', 'onlyme', '', 1),
(7999731199, 'test20', 'root', '7999731023', 0, '2019-06-12 22:50:02', '2019-06-12 22:50:02', 'onlyme', '', 1),
(7999731200, 'test21', 'root', '7999731023', 0, '2019-06-12 22:50:06', '2019-06-12 22:50:06', 'onlyme', '', 1),
(7999731201, 'test22', 'root', '7999731023', 0, '2019-06-12 22:50:12', '2019-06-12 22:50:12', 'onlyme', '', 1),
(7999731202, 'test23', 'root', '7999731023', 0, '2019-06-12 22:50:17', '2019-06-12 22:50:17', 'onlyme', '', 1),
(7999731203, 'test24', 'root', '7999731023', 0, '2019-06-12 22:50:22', '2019-06-12 22:50:22', 'onlyme', '', 1),
(7999731204, 'test24.1', 'test24', '7999731023', 0, '2019-06-12 23:09:13', '2019-06-12 23:09:13', 'onlyme', '', 1),
(7999731205, 'test24.02', 'test24', '7999731023', 0, '2019-06-12 23:09:23', '2019-06-12 23:09:23', 'onlyme', '', 1),
(7999731206, 'hhh', 'test24', '7999731023', 0, '2019-06-18 12:35:52', '2019-06-18 12:35:52', 'onlyme', '', 1),
(7999731207, 'bbb', 'test24', '7999731023', 0, '2019-06-18 14:23:19', '2019-06-18 14:23:19', 'onlyme', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userfiles`
--

CREATE TABLE `userfiles` (
  `file_id` bigint(20) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_parent` varchar(50) NOT NULL,
  `file_owner_id` varchar(50) NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_upload_date` date NOT NULL,
  `file_last_access_date` date NOT NULL,
  `file_sharing_type` varchar(50) NOT NULL,
  `file_access_list` longblob NOT NULL,
  `file_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userfiles`
--

INSERT INTO `userfiles` (`file_id`, `file_name`, `file_parent`, `file_owner_id`, `file_size`, `file_type`, `file_upload_date`, `file_last_access_date`, `file_sharing_type`, `file_access_list`, `file_flag`) VALUES
(5, 'abctest.jpg', 'root', '7999731023', 0, '', '2019-06-18', '2019-06-18', 'onlyme', '', 1),
(8, 'Report.docx', 'root', '7999731023', 0, '', '2019-06-18', '2019-06-18', 'onlyme', '', 1),
(9, 'part 2.pdf', 'bbb', '7999731023', 0, '', '2019-06-18', '2019-06-18', 'onlyme', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `first_name` char(20) DEFAULT NULL,
  `last_name` char(20) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `nationality` char(20) DEFAULT NULL,
  `account_type` char(20) DEFAULT NULL,
  `disk_space_allowed` double DEFAULT NULL,
  `disk_space_used` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`first_name`, `last_name`, `user_id`, `password`, `date_of_birth`, `email`, `phone`, `nationality`, `account_type`, `disk_space_allowed`, `disk_space_used`) VALUES
('Vipul', 'Tagai', 7999731023, '7f#$gvjP', '1997-03-25', 'vipulgoal@gmail.com', 7999731023, 'indian', 'Free', 20, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `userdirectories`
--
ALTER TABLE `userdirectories`
  ADD PRIMARY KEY (`dir_id`);

--
-- Indexes for table `userfiles`
--
ALTER TABLE `userfiles`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `event_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdirectories`
--
ALTER TABLE `userdirectories`
  MODIFY `dir_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7999731208;

--
-- AUTO_INCREMENT for table `userfiles`
--
ALTER TABLE `userfiles`
  MODIFY `file_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Database: `leaveoutpass`
--
CREATE DATABASE IF NOT EXISTS `leaveoutpass` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `leaveoutpass`;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave1`
--

CREATE TABLE `leave1` (
  `email_confirm` varchar(20) DEFAULT 'Pending',
  `phone_confirm` varchar(20) DEFAULT 'Pending',
  `mentor_approval` varchar(20) DEFAULT 'Pending',
  `hod_approval` varchar(20) DEFAULT 'Pending',
  `current_attendence` int(11) DEFAULT NULL,
  `leave_type` varchar(20) DEFAULT NULL,
  `leave_warden_confirm` varchar(20) DEFAULT 'Pending',
  `leave_id` bigint(20) NOT NULL,
  `in_date` date DEFAULT NULL,
  `out_date` date DEFAULT NULL,
  `u_id` bigint(20) DEFAULT NULL,
  `leave_status` varchar(20) DEFAULT 'Pending',
  `leave_from` date DEFAULT NULL,
  `leave_to` date DEFAULT NULL,
  `reason` text,
  `mentor_id` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave1`
--

INSERT INTO `leave1` (`email_confirm`, `phone_confirm`, `mentor_approval`, `hod_approval`, `current_attendence`, `leave_type`, `leave_warden_confirm`, `leave_id`, `in_date`, `out_date`, `u_id`, `leave_status`, `leave_from`, `leave_to`, `reason`, `mentor_id`, `branch`) VALUES
('Rejected', 'Rejected', 'Approved', 'Pending', 90, 'Academic', 'Pending', 290, NULL, NULL, 98765489709, 'Pending', '2019-03-12', '2019-03-15', 'family function', 'pravin.landge', 'CS'),
('Pending', 'Pending', 'Pending', 'Pending', 90, 'Hostel', 'Approved', 286, NULL, NULL, 70411115054, 'Approved', '2019-03-05', '2019-03-07', 'no reason', 'pravin.landge', 'IT'),
('Pending', 'Pending', 'Pending', 'Pending', 90, 'Hostel', '', 289, NULL, NULL, 70411115054, 'Rejected', '2019-03-05', '2019-03-16', 'no reason', 'pravin.landge', 'IT'),
('Confirmed', 'Confirmed', 'Approved', 'Approved', 70, 'Academic', 'Pending', 288, NULL, NULL, 70411115054, 'Approved', '2019-03-03', '2019-03-13', 'no reason', 'pravin.landge', 'IT'),
('Pending', 'Pending', 'Pending', 'Pending', 90, 'Hostel', 'Approved', 291, NULL, NULL, 70411115054, 'Approved', '2019-03-05', '2019-03-16', 'no reason', 'pravin.landge', 'IT'),
('Pending', 'Pending', 'Pending', 'Pending', 90, 'Hostel', 'Approved', 292, NULL, NULL, 70431116026, 'Approved', '2019-03-19', '2019-03-23', 'Going home', 'pravin.landge', 'Extc'),
('Confirmed', 'Confirmed', 'Rejected', 'Pending', 79, 'Academic', 'Pending', 293, NULL, NULL, 70431116026, 'Pending', '2019-03-21', '2019-03-25', 'Going home', 'pravin.landge', 'Extc'),
('Pending', 'Pending', 'Pending', 'Pending', 82, 'Hostel', 'Approved', 294, NULL, NULL, 70411115007, 'Approved', '2019-03-20', '2019-03-25', 'Family Function', 'pravin.landge', 'IT'),
('Confirmed', 'Confirmed', 'Approved', 'Approved', 82, 'Academic', 'Pending', 295, NULL, NULL, 70411115007, 'Approved', '2019-03-26', '2019-03-29', 'wedding', 'pravin.landge', 'IT'),
('Pending', 'Pending', 'Pending', 'Pending', 85, 'Hostel', 'Approved', 296, NULL, NULL, 70411115007, 'Approved', '2019-04-04', '2019-04-09', 'Family Function', 'pravin.landge', 'IT'),
('Confirmed', 'Confirmed', 'Approved', 'Approved', 85, 'Academic', 'Pending', 297, NULL, NULL, 70411115007, 'Approved', '2019-03-30', '2019-04-01', 'wedding', 'pravin.landge', 'IT'),
('Confirmed', 'Confirmed', 'Approved', 'Approved', 82, 'Academic', 'Pending', 298, NULL, NULL, 70411115054, 'Approved', '2019-04-26', '2019-04-29', 'Family Function', 'pravin.landge', 'IT'),
('Confirmed', 'Confirmed', 'Approved', 'Pending', 85, 'Academic', 'Pending', 299, NULL, NULL, 70411115054, 'Pending', '2019-04-03', '2019-04-05', 'wedding', 'pravin.landge', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `outpass1`
--

CREATE TABLE `outpass1` (
  `type` varchar(20) DEFAULT NULL,
  `outpass_id` bigint(20) NOT NULL,
  `u_id` bigint(11) NOT NULL,
  `bus_time` time NOT NULL,
  `warden_confirm` varchar(20) DEFAULT 'Pending',
  `outpass_date` date NOT NULL,
  `out_time` time DEFAULT NULL,
  `in_time` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outpass1`
--

INSERT INTO `outpass1` (`type`, `outpass_id`, `u_id`, `bus_time`, `warden_confirm`, `outpass_date`, `out_time`, `in_time`) VALUES
('Regular', 1000, 70411115054, '04:15:00', 'accepted', '2019-02-20', '11:19:26', '14:17:20'),
('Regular', 1001, 70411115054, '04:15:00', 'accepted', '2019-02-15', '09:19:26', '11:39:34'),
('regular', 1002, 70411115054, '00:06:15', 'Approved', '2019-03-12', NULL, NULL),
('Regular', 1009, 70411115054, '00:06:15', 'Approved', '2019-03-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `outpassschedule1`
--

CREATE TABLE `outpassschedule1` (
  `date` date NOT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outpassschedule1`
--

INSERT INTO `outpassschedule1` (`date`, `year`) VALUES
('2019-03-01', 4),
('2019-03-02', 2),
('2019-03-03', 3),
('2019-03-04', 0),
('2019-03-05', 1),
('2019-03-06', 3),
('2019-03-07', 2),
('2019-03-08', 1),
('2019-03-09', 0),
('2019-03-10', 4),
('2019-03-11', 2),
('2019-03-12', 3),
('2019-03-13', 0),
('2019-03-14', 1),
('2019-03-15', 2),
('2019-03-16', 4),
('2019-03-17', 0),
('2019-03-18', 3),
('2019-03-19', 1),
('2019-03-20', 2),
('2019-03-21', 4),
('2019-03-22', 0),
('2019-03-23', 3),
('2019-03-24', 2),
('2019-03-25', 4),
('2019-03-26', 0),
('2019-03-27', 1),
('2019-03-28', 3),
('2019-03-29', 4),
('2019-03-30', 0),
('2019-03-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `u_id` varchar(20) NOT NULL,
  `first_name` char(20) NOT NULL,
  `last_name` char(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` char(20) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `fathers_name` char(20) DEFAULT NULL,
  `mothers_name` char(20) DEFAULT NULL,
  `branch` char(20) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `guardian_email` varchar(50) DEFAULT NULL,
  `guardian_phone` bigint(20) DEFAULT NULL,
  `mentor_id` varchar(40) DEFAULT NULL,
  `home_address` text,
  `course` char(20) DEFAULT NULL,
  `picname` varchar(40) DEFAULT NULL,
  `question` text,
  `answer` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`u_id`, `first_name`, `last_name`, `password`, `role`, `e_mail`, `phone`, `fathers_name`, `mothers_name`, `branch`, `year`, `guardian_email`, `guardian_phone`, `mentor_id`, `home_address`, `course`, `picname`, `question`, `answer`) VALUES
('70411115054', 'Vipul', 'Tagai', '12345', 's', 'vipulgoal@gmail.com', 7999731023, 'Pravin Tagai', 'Vibha Tagai', 'IT', 3, 'pravin.tagai@gmail.com', 9827333301, 'pravin.landge', 'E-1310,Rainbow Vistas, Cybercity,Near Hitech City MMTS, Hyderabad, Telangana 500018 ', 'MBATECH', '70411115054', 'What is my first phone number?', '9009120180'),
('pravin.landge', 'Pravin', 'Landge', '12345', 'f', 'pravin.landge@gmail.com', NULL, NULL, NULL, 'IT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('70411115006', 'Kartik', 'Chikara', '7f#$gvjP', 's', 'kartik_chikara@yahoo.co.in', 9767268504, 'Vinod Chikara', 'Reshu Chikara', 'IT', 3, 'vinod.chikara@yahoo.com', 8200107634, 'pravin.landge', 'vadodara', 'MBA Tech', '70411115006.jpg', 'fortinet', 'fortigate'),
('priyesh.kanungo', 'Priyesh', 'Kanungo', '12345', 'h', 'priyesh.kanungo@nmims.edu', NULL, NULL, NULL, 'IT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'question', 'answer'),
('98765489709', 'mayank', 'sohani', 'Test@12345', 's', 'ask@gmail.com', 987654321, 'sairam', 'raksha', 'CS', 1, 'saitest@gmail.com', 987654321, 'pravin.landge', 'jsad,98', 'MBA-Tech', '98765489709.jpg', 'your name ', 'sai'),
('warden', 'warden', '1', '12345', 'w', 'warde@nmims.com', 9898988989, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'warden', 'warden'),
('70431116026', 'Ashwin', 'Rautji', 'A$h24win', 's', 'ashwin24rautji@gmail.com', 8318864189, 'Ajay Kr Rautji', 'Sunita Rautji', 'Extc', 3, 'ashwinrautji@outlook.com', 7875703432, 'pravin.landge', 'mpstme', 'MBA-Tech', '70431116026.jpg', 'what is your favourite color?', 'black'),
('70411115007', 'Anirban', 'Choudhuri', '7F#$gvjp', 's', 'choudhurianirban3@gmail.com', 9819182635, 'Tamal', 'Barnali', 'IT', 3, 'barnalichoudhuri1@gmail.com', 7977145376, 'pravin.landge', 'Ankur ,goregaon west , Mumbai - 400062', 'MBA-Tech', '70411115007.jpg', 'favourite sport', 'football');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave1`
--
ALTER TABLE `leave1`
  ADD PRIMARY KEY (`leave_id`),
  ADD KEY `u_id` (`u_id`) USING BTREE;

--
-- Indexes for table `outpass1`
--
ALTER TABLE `outpass1`
  ADD PRIMARY KEY (`outpass_id`),
  ADD UNIQUE KEY `outpass_id` (`outpass_id`);

--
-- Indexes for table `outpassschedule1`
--
ALTER TABLE `outpassschedule1`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `picname` (`picname`),
  ADD KEY `e_mail_2` (`e_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave1`
--
ALTER TABLE `leave1`
  MODIFY `leave_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `outpass1`
--
ALTER TABLE `outpass1`
  MODIFY `outpass_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"cloud1\",\"table\":\"userfiles\"},{\"db\":\"cloud1\",\"table\":\"userdirectories\"},{\"db\":\"cloud1\",\"table\":\"activitylog\"},{\"db\":\"cloud1\",\"table\":\"userinfo\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'cloud1', 'userinfo', '[]', '2019-05-25 08:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-06-18 12:29:37', '{\"Console\\/Mode\":\"show\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

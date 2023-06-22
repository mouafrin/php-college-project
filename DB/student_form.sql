-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 09:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `status`) VALUES
(1, 'Dhaka', 1),
(2, 'Khulna', 1),
(3, 'Rajshahi', 1),
(4, 'Chittagong', 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_of_educational_info`
--

CREATE TABLE `list_of_educational_info` (
  `id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `institution_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `degree` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passing_year` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `result` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_of_educational_info`
--

INSERT INTO `list_of_educational_info` (`id`, `app_id`, `institution_name`, `degree`, `passing_year`, `result`, `status`, `created_by`, `created_at`, `updated_at`, `updated_by`) VALUES
(78, 122, 'bubtasd', '2023', '0000-00-00', '3.4', 1, NULL, NULL, NULL, NULL),
(79, 140, 'sa', 'ssc', '2015', '3.00', 1, NULL, NULL, NULL, NULL),
(80, 141, 'bubt', '2022', '0000-00-00', '3.00', 1, NULL, NULL, NULL, NULL),
(81, 144, 'acc', '2016', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(82, 145, 'spsc', 'ssc', '2005', '3.5', 1, NULL, NULL, NULL, NULL),
(83, 146, 'spsc', '2016', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(84, 146, 'spsc', '2018', 'hsc', '5', 1, NULL, NULL, NULL, NULL),
(85, 147, 'spsc', '2016', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(86, 147, 'spsc', '2018', 'hsc', '5', 1, NULL, NULL, NULL, NULL),
(87, 148, 'spsc', '2016', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(88, 148, 'spsc', '2018', 'hsc', '5', 1, NULL, NULL, NULL, NULL),
(89, 149, 'spsc', '2016', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(90, 149, 'spsc', '2018', 'hsc', '5', 1, NULL, NULL, NULL, NULL),
(91, 150, 'spsc', '2016', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(92, 150, 'spsc', '2018', 'hsc', '5', 1, NULL, NULL, NULL, NULL),
(93, 152, 'spsc', '2016', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(94, 152, 'Acc', '2018', 'hsc', '5', 1, NULL, NULL, NULL, NULL),
(95, 152, 'bubt', '2023', 'bsc', '3.4', 1, NULL, NULL, NULL, NULL),
(102, 183, 'sust', '2023', 'bsc in cse', '3.4', 1, NULL, NULL, NULL, NULL),
(103, 183, 'sust', '2023', 'bsc in cse', '3.4', 1, NULL, NULL, NULL, NULL),
(104, 183, 'sust', '2023', 'bsc in cse', '3.4', 1, NULL, NULL, NULL, NULL),
(105, 184, 'brac', '2022', 'bsc in cse', '3', 1, NULL, NULL, NULL, NULL),
(106, 184, 'brac', '2022', 'bsc in cse', '3', 1, NULL, NULL, NULL, NULL),
(107, 184, 'brac', '2022', 'bsc in cse', '3', 1, NULL, NULL, NULL, NULL),
(108, 185, 'acc', '2018', 'hsc', '5', 1, NULL, NULL, NULL, NULL),
(109, 185, 'acc', '2018', 'hsc', '5', 1, NULL, NULL, NULL, NULL),
(110, 186, 'spsc', 'ssc', '2016', '3.00', 1, NULL, NULL, NULL, NULL),
(111, 186, 'acc', 'hsc', '2018', '4', 1, NULL, NULL, NULL, NULL),
(112, 187, 'brac', '2023', 'bsc in eee', '3.6', 1, NULL, NULL, NULL, NULL),
(113, 187, 'brac', '2023', 'bsc in eee', '3.6', 1, NULL, NULL, NULL, NULL),
(114, 187, 'brac', '2023', 'bsc in eee', '3.6', 1, NULL, NULL, NULL, NULL),
(115, 188, 'mmmmm', '2015', 'hsc', '4', 1, NULL, NULL, NULL, NULL),
(116, 188, 'mmmmm', '2015', 'hsc', '4', 1, NULL, NULL, NULL, NULL),
(117, 189, 'ndc', '2012', 'hsc', '3', 1, NULL, NULL, NULL, NULL),
(118, 189, 'ndc', '2012', 'hsc', '3', 1, NULL, NULL, NULL, NULL),
(119, 190, 'spsc', '2013', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(120, 190, 'ggg', '2016', 'hsc', '4', 1, NULL, NULL, NULL, NULL),
(121, 191, 'spsc', '2016', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(122, 191, 'acc', '2018', 'hsc', '5', 1, NULL, NULL, NULL, NULL),
(123, 191, 'du', '2023', 'bsc in eee', '3.5', 1, NULL, NULL, NULL, NULL),
(124, 193, 'spsc', '2019', 'eee', '3.52', 1, NULL, NULL, NULL, NULL),
(125, 193, 'ggg', '2025', '4645', '3.5', 1, NULL, NULL, NULL, NULL),
(126, 194, 'spsc', '2016', 'ssc', '5', 1, NULL, NULL, NULL, NULL),
(127, 196, 'spsc', '2021', 'law', '3.54', 1, NULL, NULL, NULL, NULL),
(128, 197, 'spsc', '2016', 'ssc', '4', 1, NULL, NULL, NULL, NULL),
(129, 199, 'spsc', '2022', 'EEE', '3.52', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sno` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `username`, `email`, `password`, `date`) VALUES
(5, 'shondha', 'shondha21@gmail.com', '$2y$10$cii1AWw06L67YlINHnyJd.k1JQULTbiWmaCiSZey4I.UdX.f.C3CC', '2023-06-18 15:32:25'),
(6, 'mim', 'mimmou1@gmail.com', '$2y$10$NpC4bEmTkoa1vc5cJiiOVuWA3OW73Kks0XaxGLOZn0mCQHArtDbzm', '2023-06-20 10:08:28'),
(8, 'nitu', 'nitu1@gmail.com', '$2y$10$7DAftbdCDFSxMC6BorO7aOKc0i4aQ7Ry1nAs3i4.DVrp.C.c7T0Hq', '2023-06-20 11:41:05'),
(9, 'akash', 'akash@gmail.com', '$2y$10$KFNSuVrxmhG2mIGeQPYcEeoHXYMfXtV2t9155T0/cptKFevIPYjCe', '2023-06-20 11:53:32'),
(10, 'alif', 'alif@gmail.com', '$2y$10$WXUGXF29sJW4jbUh7GWebOwP8EtYjgWh3C.PFAJ329BG9aLTATNcW', '2023-06-20 13:01:48'),
(11, 'trisha', 'saafrinmou1@gmail.com', '$2y$10$73J/wbrFFo5F.YY79A3wmeiFIiMF.xhPdzHmHy9e0ofo7xAaks2hm', '2023-06-20 13:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `student_apps`
--

CREATE TABLE `student_apps` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `fathers_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fathers_occupation` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female','Other','Not defined') COLLATE utf8_unicode_ci DEFAULT 'Not defined',
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` int(11) NOT NULL DEFAULT 0,
  `thana` int(11) NOT NULL DEFAULT 0,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `accept_terms` tinyint(2) NOT NULL DEFAULT 0 COMMENT '1 = agree, 0 = disagree',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_apps`
--

INSERT INTO `student_apps` (`id`, `name`, `date_of_birth`, `fathers_name`, `fathers_occupation`, `gender`, `mobile`, `address`, `profile_pic`, `district`, `thana`, `email`, `accept_terms`, `status`, `created_by`, `created_at`, `updated_at`, `updated_by`, `signature`) VALUES
(144, 'Md. Abid', '1999-06-12', 'sahin molla', '', 'Male', '01635830223', '', '', 2, 4, 'Abid31@gmail.com', 0, 1, NULL, NULL, NULL, NULL, ''),
(145, 'Fouzia  Esha', '1999-02-01', ' Foyez Ahmed', 'Teacher', 'Female', '01715459571', '', '', 1, 1, 'esha21@gmail.com', 0, 1, NULL, NULL, NULL, NULL, ''),
(184, 'Emon', '1998-06-06', 'md. jarif', 'doctor', 'Male', '01765735655', '', '', 1, 2, 'emon441@gmail.com', 1, 1, NULL, NULL, NULL, NULL, ''),
(185, 'afriin', '2023-06-21', 'hanif', '', 'Female', '0167435454566', '', '', 0, 0, 'safrinmou1@gmail.com', 0, 1, NULL, NULL, NULL, NULL, ''),
(188, 'swarnali islam ', '2023-06-06', 'pulok', 'business', 'Female', '01746655556', '', 'back.jpg', 4, 8, 'rumi451@gmail.com', 1, 1, NULL, NULL, NULL, NULL, 'back.jpg'),
(190, 'akhi', '2023-06-06', 'pulok', 'business', 'Female', '', 'mirpur 1', '5.jpg', 4, 0, 'rumi451@gmail.com', 1, 1, NULL, NULL, NULL, NULL, '5.jpg'),
(193, 'mou', '2023-06-07', 'babul', 'engineer', 'Male', '17240000000', '6326', '2.jpg', 2, 5, 'hasanrafih2@gmail.com', 1, 1, NULL, NULL, NULL, NULL, '2.jpg'),
(194, 'arka vvv', '2023-06-16', 'pulok', 'Teacher', 'Male', '01663644444', 'banani', '2.jpg', 1, 0, 'arkayu1@gmail.com', 1, 1, NULL, NULL, NULL, NULL, '2.jpg'),
(195, 'afriin', '2023-06-23', 'babul', '', 'Female', '1897556578', '', 'back.jpg', 0, 0, 'safrinmou1@gmail.com', 1, 1, NULL, NULL, NULL, NULL, '11.jpg'),
(200, 'bari', NULL, NULL, NULL, 'Male', NULL, NULL, NULL, 0, 0, 'saafrinmou1@gmail.com', 0, 1, NULL, '2023-06-22 05:28:40', '2023-06-22 05:28:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanas`
--

INSERT INTO `thanas` (`id`, `district_id`, `name`, `status`) VALUES
(1, 1, 'Mirpur Model', 1),
(2, 1, 'Pallabi', 1),
(3, 1, 'Banani', 1),
(4, 2, 'Daulatpur Thana', 1),
(5, 2, 'Khalishpur Thana', 1),
(6, 3, 'Rajpara Thana', 1),
(7, 3, 'Motihar Thana ', 1),
(8, 4, 'patenga thana', 1),
(9, 4, 'EPZ thana', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_educational_info`
--
ALTER TABLE `list_of_educational_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `student_apps`
--
ALTER TABLE `student_apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanas`
--
ALTER TABLE `thanas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_of_educational_info`
--
ALTER TABLE `list_of_educational_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_apps`
--
ALTER TABLE `student_apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `thanas`
--
ALTER TABLE `thanas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

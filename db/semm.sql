-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 06:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `event_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `event_name` varchar(65) NOT NULL,
  `start_date` varchar(65) NOT NULL,
  `end_date` varchar(65) NOT NULL,
  `venue` varchar(65) NOT NULL,
  `start_time` varchar(65) NOT NULL,
  `statusxx` varchar(65) NOT NULL,
  `in_cmp_id` varchar(65) NOT NULL,
  `rsrv_cfr_id` varchar(65) NOT NULL,
  `csh_req_id` varchar(65) NOT NULL,
  `cat_req_id` varchar(65) NOT NULL,
  `trip_tkt_id` varchar(65) NOT NULL,
  `trip_prmt_id` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`event_id`, `org_id`, `event_name`, `start_date`, `end_date`, `venue`, `start_time`, `statusxx`, `in_cmp_id`, `rsrv_cfr_id`, `csh_req_id`, `cat_req_id`, `trip_tkt_id`, `trip_prmt_id`) VALUES
(1, 1, 'skapag', '2021-05-07', '2021-05-07', 'basag', '', 'Pending', '', '', '', '', '', ''),
(2, 1, 'if u rd', '2021-05-07', '2021-07-07', 'vote4ppl', '', 'Pending', '', '', '', '', '', ''),
(3, 1, 'sticky1', '2021-05-07', '2021-05-08', 'Robber', '', 'Pending', '', '', '', '', '', ''),
(4, 1, 'fsd', '2021-05-07', '2021-05-07', 'asdf', '', 'Pending', '', '', '', '', '', ''),
(5, 1, 'sdf', '2021-05-07', '2021-05-07', 'jyytui', '', 'Pending', '', '', '', '', '', ''),
(6, 1, 'dfdg', '2021-05-07', '2021-05-07', '45647tjfgh', '', 'Pending', '', '', '', '', '', ''),
(7, 2, 'erty', '2021-05-07', '2021-05-07', 'rtyrtghh', '', 'Pending', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_follow`
--

CREATE TABLE `tbl_follow` (
  `follow_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inclusion`
--

CREATE TABLE `tbl_inclusion` (
  `inc_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `prog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_inclusion`
--

INSERT INTO `tbl_inclusion` (`inc_id`, `org_id`, `prog_id`) VALUES
(77, 5, 2),
(78, 5, 3),
(79, 5, 4),
(80, 7, 1),
(81, 7, 5),
(82, 11, 1),
(83, 11, 2),
(84, 11, 3),
(85, 2, 1),
(86, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_officers`
--

CREATE TABLE `tbl_officers` (
  `off_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `off_type` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_officers`
--

INSERT INTO `tbl_officers` (`off_id`, `org_id`, `user_id`, `off_type`) VALUES
(2, 5, 22, 'Chair'),
(7, 11, 13, 'Chair'),
(8, 5, 12, 'Chair'),
(10, 1, 12, 'Auditor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orgs`
--

CREATE TABLE `tbl_orgs` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(65) NOT NULL,
  `org_category` varchar(65) NOT NULL,
  `org_description` varchar(400) NOT NULL,
  `org_abbr` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orgs`
--

INSERT INTO `tbl_orgs` (`org_id`, `org_name`, `org_category`, `org_description`, `org_abbr`) VALUES
(1, 'Kulto ni Juroharley', 'Paulinian Student Government', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default mod', 'SITE'),
(2, 'Vens Alliance', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e but Id rather light my spliff life jacket thats the protocol', 'SBAHM'),
(4, 'Geng geng ni Jengnas', 'Department-based', 'mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu nisl nunc mi ipsum', ''),
(5, 'Mga Kabet ni Clarete', 'Program-based', 'orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus risus at', ''),
(7, 'Mga kakosa ni Cassandra', 'Program-based', 'sed risus pretium quam vulputate dignissim suspendisse in est ante in nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet', ''),
(11, 'Grandeur Party list', 'Program-based', 'purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra magna ac placerat vestibulum lectus', ''),
(50, 'Kartel ni Miguel', 'Department-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis volutpat est velit egestas. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Nisi scelerisque eu ultrices vitae auctor eu augue ut lectus.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programs`
--

CREATE TABLE `tbl_programs` (
  `prog_id` int(11) NOT NULL,
  `prog_name` varchar(65) NOT NULL,
  `prog_abbrv` varchar(656) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_programs`
--

INSERT INTO `tbl_programs` (`prog_id`, `prog_name`, `prog_abbrv`) VALUES
(1, 'Bachelor of Science in Information Technology', 'BSIT'),
(2, 'Bachelor of Science in Computer Engineering', 'BSCpE'),
(3, 'Bachelor of Science in Civil Engineering', 'BSCE'),
(4, 'Bachelor of Science in Environmental and Sanitary Engineering', 'BSEnSE'),
(5, 'Bachelor of Library and Information Science', 'BLIS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `gender` varchar(65) NOT NULL,
  `user_type` varchar(65) NOT NULL,
  `time_stamp` varchar(65) NOT NULL,
  `year_level` text NOT NULL,
  `program` varchar(65) NOT NULL,
  `section` varchar(65) NOT NULL,
  `archive` int(11) NOT NULL,
  `statusxx` int(11) NOT NULL,
  `counterxx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `contact_no`, `gender`, `user_type`, `time_stamp`, `year_level`, `program`, `section`, `archive`, `statusxx`, `counterxx`) VALUES
(1, 'user1', 'pass', 'First', 'Last', 'fl@g.co', 0, 'Female', 'Dean', '', '', '', '', 0, 0, 0),
(11, 'Timer', 'pass', 'Time', 'Stamper', 'email@w', 935236545, 'Male', 'Dean', '2021-04-16', '', '', '', 0, 0, 0),
(12, 'norma', 'pass', 'Lin', 'Normalin', 'asd@as', 93457821, 'Female', 'Officer', '2021-04-18', '3', 'BSCE', 'b', 0, 0, 0),
(13, 'tagaprint', 'pass', 'Offi', 'Cersiya', 'email@a', 2147483647, 'Male', 'Officer', '2021-04-18', '3', 'BSIT', '', 0, 0, 0),
(14, 'staywithmeeeee', 'pass', 'jackP', 'synderenY', 'kias@s', 934862376, 'Female', 'Adviser', '2021-04-18', '', '', '', 0, 0, 0),
(18, 'asd', 'pass', 'Francis', 'Pagunuran', 'dsf@sa', 908426542, 'Male', 'Officer', '2021-04-18', '2', 'BSIT', '', 0, 0, 0),
(19, 'guywith', '[ass', 'Guy', 'Withsect', 'email@d', 9275914, 'Male', 'Officer', '2021-04-18', '3', '', '', 0, 0, 0),
(20, 'SADF', 'pass', 'sdf', 'WAfd', 'safsa@s', 12454, 'Male', 'Officer', '2021-04-18', '2', '', '', 0, 0, 0),
(21, 'igyu', 'pass', 'Igyu', 'Kammu', 'djhg@s', 985649324, 'Male', 'Officer', '2021-04-18', '3', 'BSIT', '', 0, 0, 0),
(22, 'hugcvx', 'asdf', 'woe3', 'Wrds', 'dfs@dfg', 95435, 'Female', 'Officer', '2021-04-18', '1', 'BSEnSE', 'C', 0, 0, 0),
(23, 'sectionstrtoupper', 'pass', 'Makeda', 'Seksyonup', 'emafid@ds', 2147483647, 'Male', 'Officer', '2021-04-18', '3', 'BSIT', '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `tbl_inclusion`
--
ALTER TABLE `tbl_inclusion`
  ADD PRIMARY KEY (`inc_id`);

--
-- Indexes for table `tbl_officers`
--
ALTER TABLE `tbl_officers`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `tbl_orgs`
--
ALTER TABLE `tbl_orgs`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `tbl_programs`
--
ALTER TABLE `tbl_programs`
  ADD PRIMARY KEY (`prog_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_inclusion`
--
ALTER TABLE `tbl_inclusion`
  MODIFY `inc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tbl_officers`
--
ALTER TABLE `tbl_officers`
  MODIFY `off_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_orgs`
--
ALTER TABLE `tbl_orgs`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_programs`
--
ALTER TABLE `tbl_programs`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

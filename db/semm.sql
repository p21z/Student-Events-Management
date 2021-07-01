-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 04:46 PM
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
-- Table structure for table `tbl_attendee`
--

CREATE TABLE `tbl_attendee` (
  `attendance_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `contact_no` varchar(65) NOT NULL,
  `user_type` varchar(65) NOT NULL,
  `year_level` varchar(65) NOT NULL,
  `program` varchar(65) NOT NULL,
  `section` varchar(65) NOT NULL,
  `statusxx` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat_req`
--

CREATE TABLE `tbl_cat_req` (
  `cat_req_id` int(11) NOT NULL,
  `event_id` varchar(65) NOT NULL,
  `datexx` varchar(65) NOT NULL,
  `time_needed` varchar(65) NOT NULL,
  `occasion` varchar(65) NOT NULL,
  `num_guest` varchar(65) NOT NULL,
  `orderxx` varchar(65) NOT NULL,
  `menu` varchar(65) NOT NULL,
  `venue` varchar(65) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cat_req`
--

INSERT INTO `tbl_cat_req` (`cat_req_id`, `event_id`, `datexx`, `time_needed`, `occasion`, `num_guest`, `orderxx`, `menu`, `venue`, `remarks`) VALUES
(1, '1', '2021-07-30', '19:00', 'Hyperlink', '300', 'Batil Patong', 'Dinner', 'Gymnasium', 'Lorem ipsum'),
(2, '1', '2021-07-31', '20:00', 'Hyperlink', '300', 'Mountain Dew', 'Snacks', 'Gymnasium', 'Dolor it set'),
(3, '1', '2021-07-01', '17:36', 'Hyperlink', '300', 'Ice cream', 'Snacks', 'Gynasium', 'Amet guad et');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_csh_req`
--

CREATE TABLE `tbl_csh_req` (
  `csh_req_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `busfare` int(11) NOT NULL,
  `taxifare` int(11) NOT NULL,
  `otherfare` int(11) NOT NULL,
  `food_allowance` int(11) NOT NULL,
  `reg_fee` int(11) NOT NULL,
  `accommodation` int(11) NOT NULL,
  `honorarium` int(11) NOT NULL,
  `rel_of_acco` int(11) NOT NULL,
  `monthly_bills` int(11) NOT NULL,
  `supplies` int(11) NOT NULL,
  `purpose` text NOT NULL,
  `pay_to` varchar(65) NOT NULL,
  `date_need` varchar(65) NOT NULL,
  `datexx` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_csh_req`
--

INSERT INTO `tbl_csh_req` (`csh_req_id`, `event_id`, `busfare`, `taxifare`, `otherfare`, `food_allowance`, `reg_fee`, `accommodation`, `honorarium`, `rel_of_acco`, `monthly_bills`, `supplies`, `purpose`, `pay_to`, `date_need`, `datexx`) VALUES
(1, 1, 0, 0, 0, 0, 0, 20000, 15000, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet purus gravida quis blandit turpis cursus in hac habitasse. Massa ultricies mi quis hendrerit dolor. Tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Nec ultrices dui sapien eget mi.', 'Clarete Clemente', '2021-07-16', '');

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
-- Table structure for table `tbl_evaluation`
--

CREATE TABLE `tbl_evaluation` (
  `eval_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(65) NOT NULL,
  `datexx` varchar(65) NOT NULL,
  `venue` varchar(65) NOT NULL,
  `ans1` varchar(11) NOT NULL,
  `ans2` varchar(11) NOT NULL,
  `ans3` varchar(11) NOT NULL,
  `ans4` varchar(11) NOT NULL,
  `ans5` varchar(11) NOT NULL,
  `ans6` varchar(11) NOT NULL,
  `ans7` varchar(11) NOT NULL,
  `ans8` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_evaluation`
--

INSERT INTO `tbl_evaluation` (`eval_id`, `event_id`, `user_id`, `title`, `datexx`, `venue`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`) VALUES
(1, 1, 1, 'Hyperlink', '2021-07-04', 'Gymnasium', '3', '2', '2', '3', '1', '2', '2', '1');

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
  `start_time` varchar(65) NOT NULL,
  `end_time` varchar(65) NOT NULL,
  `venue` varchar(65) NOT NULL,
  `event_description` text NOT NULL,
  `remarks` text NOT NULL,
  `statusxx` varchar(65) NOT NULL,
  `in_cmp_id` varchar(65) NOT NULL,
  `rsrv_cfr_id` varchar(65) NOT NULL,
  `csh_req_id` varchar(65) NOT NULL,
  `cat_req_id` varchar(65) NOT NULL,
  `trip_tkt_id` varchar(65) NOT NULL,
  `trip_prmt_id` varchar(65) NOT NULL,
  `event_image` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`event_id`, `org_id`, `event_name`, `start_date`, `end_date`, `start_time`, `end_time`, `venue`, `event_description`, `remarks`, `statusxx`, `in_cmp_id`, `rsrv_cfr_id`, `csh_req_id`, `cat_req_id`, `trip_tkt_id`, `trip_prmt_id`, `event_image`) VALUES
(1, 1, 'Hyperlink', '2021-07-04', '2021-07-04', '09:00', '21:00', 'Gymnasium', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus mauris a diam maecenas sed enim ut sem. Aenean sed adipiscing diam donec adipiscing tristique risus nec feugiat.', 'Approved', 'Pending', '', '', '', '', '', '', '73460743_465611770967915_1373363969544159232_n.jpg'),
(2, 1, 'Paulympics', '2021-07-07', '2021-07-09', '09:00', '12:00', 'Student Center', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor.', '', 'Approved', '', '', '', '', '', '', 'Paulympics-48.jpg'),
(3, 1, 'iHeart SITE', '2021-07-30', '2021-07-31', '13:00', '09:00', 'Grandstand', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum. Ut lectus arcu bibendum at varius.', '', 'Pending', '', '', '', '', '', '', ''),
(4, 56, 'Students Assembly', '2021-06-16', '2021-06-16', '08:00', '12:00', 'Mere Madeline Hall', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum. Ut lectus arcu bibendum at varius.', '', 'Archived', '', '', '', '', '', '', ''),
(5, 56, 'Parents Assembly', '2021-06-19', '2021-06-19', '08:00', '12:00', 'Mere Madeline Hall', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum. Ut lectus arcu bibendum at varius.', '', 'Pending', '', '', '', '', '', '', ''),
(6, 56, 'Cyber Summit', '2021-08-19', '2021-08-21', '09:00', '12:00', 'Global Center', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum. Ut lectus arcu bibendum at varius.', '', 'Pending', '', '', '', '', '', '', '');

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
(1, 51, 1),
(2, 51, 2),
(3, 55, 2),
(4, 59, 3),
(5, 60, 2),
(6, 60, 3),
(7, 60, 4),
(8, 61, 1),
(9, 61, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_in_cmp`
--

CREATE TABLE `tbl_in_cmp` (
  `in_cmp_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `organizer` varchar(65) NOT NULL,
  `nature` varchar(65) NOT NULL,
  `objective_1` text NOT NULL,
  `objective_2` text NOT NULL,
  `objective_3` text NOT NULL,
  `datexx` varchar(65) NOT NULL,
  `timexx` varchar(65) NOT NULL,
  `speaker` varchar(65) NOT NULL,
  `venue` varchar(65) NOT NULL,
  `num_participants` int(11) NOT NULL,
  `program_budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_in_cmp`
--

INSERT INTO `tbl_in_cmp` (`in_cmp_id`, `event_id`, `organizer`, `nature`, `objective_1`, `objective_2`, `objective_3`, `datexx`, `timexx`, `speaker`, `venue`, `num_participants`, `program_budget`) VALUES
(1, 1, 'Jonas Rivera', 'Training', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Auctor augue mauris augue neque gravida. Nunc sed velit dignissim sodales.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis. Adipiscing elit ut aliquam purus sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis. Adipiscing elit ut aliquam purus sit ametir', '2021-07-30', '17:00', 'Jimmuel Japoy', 'Gymnasium', 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `notif_id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `fullname` varchar(65) NOT NULL,
  `user_type` varchar(65) NOT NULL,
  `off_type` varchar(65) NOT NULL,
  `datexx` varchar(65) NOT NULL,
  `timexx` varchar(65) NOT NULL,
  `action` varchar(65) NOT NULL,
  `org_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notif`
--

INSERT INTO `tbl_notif` (`notif_id`, `username`, `fullname`, `user_type`, `off_type`, `datexx`, `timexx`, `action`, `org_id`, `event_id`) VALUES
(1, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '20:53:55', 'created', 1, 1),
(2, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '20:56:02', 'created', 1, 2),
(3, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '20:58:57', 'created', 1, 3),
(4, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:00:21', 'created', 1, 3),
(5, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:01:23', 'created', 56, 4),
(6, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:06:57', 'created', 56, 5),
(7, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:07:16', 'details edited', 56, 4),
(8, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:20:29', 'created', 56, 6),
(9, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:37:53', 'picture updated', 1, 1),
(10, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:38:30', 'status changed to Approved', 1, 1),
(11, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:39:15', 'picture updated', 1, 2),
(12, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:39:26', 'status changed to Approved', 1, 2),
(13, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:40:57', 'status changed to Approved', 56, 4),
(14, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:41:17', 'status changed to Pending', 56, 4),
(15, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:44:46', 'status changed to Pending', 1, 1),
(16, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:45:47', 'details edited', 1, 1),
(17, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:45:55', 'details edited', 1, 1),
(18, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:46:07', 'details edited', 1, 1),
(19, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:46:22', 'status changed to Approved', 1, 1),
(20, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:52:23', 'status changed to Pending', 1, 1),
(21, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:52:29', 'remarks changed to asdas', 1, 1),
(22, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:52:35', 'status changed to Approved', 1, 1),
(23, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:52:38', 'remarks changed to asdasasd', 1, 1),
(24, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:53:00', 'remarks changed to Approved', 1, 1),
(25, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:53:05', 'status changed to Pending', 1, 1),
(26, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:53:27', 'details edited', 1, 1),
(27, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:54:00', 'status changed to Approved', 1, 1),
(28, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '21:54:54', 'status changed to Archived', 1, 1),
(29, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '22:26:29', 'status changed to Pending', 1, 1),
(30, 'user1', ' Reeves', 'Dean', '', '2021-06-30', '22:29:10', 'common function room added', 1, 1),
(31, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '16:58:07', 'common function room added', 1, 1),
(32, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:02:29', 'common function room edited', 1, 1),
(33, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:08:57', 'cash requisition added', 1, 1),
(34, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:11:12', 'catering requisition added', 1, 1),
(35, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:12:43', 'catering requisition edited', 1, 1),
(36, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:14:14', 'catering requisition edited', 1, 1),
(37, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:34:26', 'catering requisition edited', 1, 1),
(38, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:34:57', 'catering requisition edited', 1, 1),
(39, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:36:31', 'catering requisition added', 1, 1),
(40, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:46:26', 'catering requisition added', 1, 1),
(41, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:46:55', 'catering requisition edited', 1, 1),
(42, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:54:29', 'In campus activity added', 1, 1),
(43, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '17:56:57', 'In campus activity edited', 1, 1),
(44, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '18:06:08', 'In campus activity edited', 1, 1),
(45, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '18:08:43', 'travel permit added', 1, 1),
(46, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '18:09:21', 'travel permit edited', 1, 1),
(47, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '18:09:37', 'student list added', 1, 1),
(48, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '18:09:40', 'student list added', 1, 1),
(49, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '18:24:29', 'trip ticket added', 1, 1),
(50, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '18:51:28', 'trip ticket added', 1, 1),
(51, 'user1', ' Reeves', 'Dean', '', '2021-07-01', '20:23:18', 'status changed to Approved', 56, 4);

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
(18, 4, 12, 'Chair'),
(20, 11, 12, 'Chair'),
(21, 1, 11, 'Adviser'),
(22, 7, 11, 'Adviser'),
(25, 1, 26, 'Adviser'),
(26, 1, 13, 'Treasurer'),
(28, 1, 18, 'Governor'),
(29, 1, 20, 'Vice-Governor'),
(31, 4, 21, 'Chair');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orgs`
--

CREATE TABLE `tbl_orgs` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(65) NOT NULL,
  `org_category` varchar(65) NOT NULL,
  `org_description` varchar(400) NOT NULL,
  `org_abbr` varchar(65) NOT NULL,
  `org_image` varchar(65) NOT NULL,
  `cover_image` varchar(65) NOT NULL,
  `Archive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orgs`
--

INSERT INTO `tbl_orgs` (`org_id`, `org_name`, `org_category`, `org_description`, `org_abbr`, `org_image`, `cover_image`, `Archive`) VALUES
(1, 'PSG- SITE Chapter', 'Paulinian Student Government', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default mod', 'PSG-SITE', 'PSG SITE.png', '71479956_435418837320542_2416400239121399808_n.jpg', 0),
(4, 'Organization 3', 'Department-based', 'mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu nisl nunc mi ipsum', 'Org3', '', '', 1),
(5, 'Organization 4', 'Program-based', 'orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus risus at', '', '', '', 1),
(7, 'Sining, Musika at Sayawan', 'Department-based', 'sed risus pretium quam vulputate dignissim suspendisse in est ante in nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet', 'SMS', 'SMS.png', 'SMS_img.jpg', 0),
(11, 'Paulinian Media Arts Center', 'Department-based', 'purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra magna ac placerat vestibulum lectus', 'PMAC', 'PMAC LOGO.png', 'PMAC.jpg', 0),
(50, 'The Browser', 'Department-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis volutpat est velit egestas. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Nisi scelerisque eu ultrices vitae auctor eu augue ut lectus.', 'The Browser', 'THE BROWSER.png', 'Browser.jpg', 0),
(51, 'Developers Student Clubs -SPUP', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor mi. Praesent blandit, lectus id maximus commodo, enim dolor euismod nisi, consequat interdum arcu odio a leo.', 'DSC-SPUP', 'DCS (1).png', 'Google.jpg', 0),
(55, 'Institute of Computer Engineers of the Philippines', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu bibendum at varius vel pharetra vel turpis. ', 'ICpEP.se', 'ICPEP.png', 'ICPEP.jpg', 0),
(56, 'Office of the Dean', 'dean', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et tortor at risus viverra adipiscing at in tellus.', '', '', '', 0),
(59, 'Philippine Institute of Civil Engineers', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Posuere urna nec tincidunt praesent semper feugiat nibh. Sollicitudin tempor id eu nisl nunc.', 'PICE', 'PICE.png', 'PICE.jpg', 0),
(60, 'PSES', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis a cras semper auctor neque vitae. Enim ut tellus elementum sagittis vitae et leo.', 'PSES', '203180134_196525449057746_9007705449871490238_n.png', 'PSES.jpg', 0),
(61, 'Orgtest', 'Program-based', 'sdfdsf', '1231', '', '', 1);

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
-- Table structure for table `tbl_rsrv_cfr`
--

CREATE TABLE `tbl_rsrv_cfr` (
  `rsrv_cfr_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `func_room` varchar(65) NOT NULL,
  `num_users` varchar(65) NOT NULL,
  `person_respo` varchar(65) NOT NULL,
  `purpose` text NOT NULL,
  `fund_source` varchar(65) NOT NULL,
  `amount` int(65) NOT NULL,
  `specs` text NOT NULL,
  `dean_check` varchar(65) NOT NULL,
  `start_date` varchar(65) NOT NULL,
  `end_date` varchar(65) NOT NULL,
  `start_time` varchar(65) NOT NULL,
  `end_time` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rsrv_cfr`
--

INSERT INTO `tbl_rsrv_cfr` (`rsrv_cfr_id`, `event_id`, `func_room`, `num_users`, `person_respo`, `purpose`, `fund_source`, `amount`, `specs`, `dean_check`, `start_date`, `end_date`, `start_time`, `end_time`) VALUES
(1, 1, 'Gymnasium', '300', 'Rucel Pugeda/Jonas Rivera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis egestas integer eget aliquet nibh praesent tristique.', '', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec nam aliquam sem et tortor. Aliquet enim tortor at auctor urna nunc. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla.', '', '2021-06-30', '2021-06-30', '22:29', '22:29'),
(2, 1, 'Student Center', '300', 'Rucel Pugeda/Jonas Rivera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', 300, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis egestas integer eget aliquet nibh praesent tristique.', '', '2021-07-30', '2021-07-31', '09:02', '01:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_list`
--

CREATE TABLE `tbl_stud_list` (
  `stud_list_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stud_name` varchar(65) NOT NULL,
  `year` varchar(65) NOT NULL,
  `program` varchar(65) NOT NULL,
  `section` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stud_list`
--

INSERT INTO `tbl_stud_list` (`stud_list_id`, `event_id`, `user_id`, `stud_name`, `year`, `program`, `section`) VALUES
(1, 1, 12, 'Normal Liny', '3', 'BSCpE', 'C'),
(2, 1, 13, 'Coleman  Howe', '3', 'BSCpE', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tra_prmt`
--

CREATE TABLE `tbl_tra_prmt` (
  `tra_prmt_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `place` varchar(65) NOT NULL,
  `venue` varchar(65) NOT NULL,
  `datexx` varchar(65) NOT NULL,
  `date_return` varchar(65) NOT NULL,
  `relation1` varchar(65) NOT NULL,
  `relation2` varchar(65) NOT NULL,
  `others` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tra_prmt`
--

INSERT INTO `tbl_tra_prmt` (`tra_prmt_id`, `event_id`, `name`, `place`, `venue`, `datexx`, `date_return`, `relation1`, `relation2`, `others`) VALUES
(1, 1, 'Rucelj Pugeda', 'Cauayan City', 'SM City Cauayan', '2021-07-28', '2021-07-29', 'Representative of SPUP', '', 'Meet a speaker for an event');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trp_tckt`
--

CREATE TABLE `tbl_trp_tckt` (
  `trp_tckt_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `request_unit` varchar(65) NOT NULL,
  `person` varchar(65) NOT NULL,
  `driver` varchar(65) NOT NULL,
  `vehicle` varchar(65) NOT NULL,
  `activity` varchar(65) NOT NULL,
  `date_use` varchar(65) NOT NULL,
  `dept_time` varchar(65) NOT NULL,
  `eta` varchar(65) NOT NULL,
  `passengers` int(11) NOT NULL,
  `destination` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_trp_tckt`
--

INSERT INTO `tbl_trp_tckt` (`trp_tckt_id`, `event_id`, `request_unit`, `person`, `driver`, `vehicle`, `activity`, `date_use`, `dept_time`, `eta`, `passengers`, `destination`) VALUES
(1, 1, 'SITE', 'Jonas Rivera', 'Jaime Lanstero', 'Mazda 3 NXT-240', 'Hyperlink', '2021-07-28', '09:00', '2021-07-29', 4, 'Cauayan City'),
(2, 1, 'SITE', 'Jonas Rivera', 'Hector Kaliskis', 'Super Grandia LMN-690', 'Hyperlink', '2021-07-31', '18:51', '2021-07-31', 2, 'Cauayan');

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
  `contact_no` varchar(65) NOT NULL,
  `gender` varchar(65) NOT NULL,
  `user_type` varchar(65) NOT NULL,
  `time_stamp` varchar(65) NOT NULL,
  `year_level` text NOT NULL,
  `program` varchar(65) NOT NULL,
  `section` varchar(65) NOT NULL,
  `archive` int(11) NOT NULL,
  `statusxx` int(11) NOT NULL,
  `counterxx` int(11) NOT NULL,
  `image` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `contact_no`, `gender`, `user_type`, `time_stamp`, `year_level`, `program`, `section`, `archive`, `statusxx`, `counterxx`, `image`) VALUES
(1, 'user1', '8be52126a6fde450a7162a3651d589bb51e9579d', 'Chrysta', 'Reeves', 'chrystalR@gmail.co', '0932457953', 'Female', 'Dean', '', '', '', '', 0, 0, 0, ''),
(11, 'user2', '2db4c1811f424582a90f8d7ee77995cf018d9443', 'Anastasia ', 'Moss', 'anasmoss@flag.io', '935236545', 'Female', 'Adviser', '2021-04-16', '', '', '', 0, 0, 0, ''),
(12, 'norma', 'de2a4d5751ab06dc4f987142db57c26d50925c8a', 'Normal', 'Liny', 'norma13@gma.il', '093457821', 'Female', 'Student', '2021-04-18', '3', 'BSCpE', 'C', 0, 0, 0, ''),
(13, 'user3', '8be52126a6fde450a7162a3651d589bb51e9579d', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Male', 'Officer', '2021-04-18', '3', 'BSCpE', 'B', 0, 0, 0, ''),
(14, 'user4', 'pass', 'Jack', 'Synderen', 'synderen@twit.ch', '0923565342', 'Male', 'Adviser', '2021-04-18', '', '', '', 0, 0, 0, ''),
(18, 'user5', 'pass', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Male', 'Officer', '2021-04-18', '2', 'BSCE', 'B', 0, 0, 0, ''),
(19, 'user6', '8be52126a6fde450a7162a3651d589bb51e9579d', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Male', 'Student', '2021-04-18', '3', 'BSIT', '', 0, 0, 0, ''),
(20, 'user7', 'pass', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Male', 'Officer', '2021-04-18', '2', 'BSCpE', 'B', 0, 0, 0, ''),
(21, 'user8', 'pass', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Male', 'Officer', '2021-04-18', '3', 'BSIT', '', 0, 0, 0, ''),
(22, 'user9', 'pass', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Male', 'Student', '2021-04-18', '1', 'BSEnSE', 'C', 0, 0, 0, ''),
(24, 'user10', 'fgh', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Female', 'Student', '2021-05-23', '4', 'BSEnSE', 'A', 0, 0, 0, ''),
(25, 'user11', 'asdasd', 'Emily', ' Cotton', 'emily@cotton.ru', '09324436568', 'Female', 'Adviser', '2021-05-24', '', '', '', 0, 0, 0, ''),
(26, 'user12', 'asdgf', 'Brayden ', 'Parks', 'brayden21@park.io', '09052843465', 'Male', 'Adviser', '2021-05-24', '', '', '', 0, 0, 0, ''),
(28, 'user13', 'pass', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Male', 'Student', '2021-05-26', '3', 'BSCpE', 'A', 0, 0, 0, ''),
(208, 'user14', 'pass', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Male', 'Student', '2021-05-27', '1', 'BSIT', 'A', 0, 0, 0, ''),
(209, 'user_today', 'de2a4d5751ab06dc4f987142db57c26d50925c8a', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Female', 'Officer', '2021-05-28', '2', 'BSCE', 'B', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicles`
--

CREATE TABLE `tbl_vehicles` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(65) NOT NULL,
  `car_plate` varchar(65) NOT NULL,
  `avail` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vehicles`
--

INSERT INTO `tbl_vehicles` (`car_id`, `car_name`, `car_plate`, `avail`) VALUES
(1, 'L300', 'ABC-123', '1'),
(2, 'Super Grandia', 'LMN-690', '1'),
(3, 'School Bus', 'BLK-069', '1'),
(4, 'Mazda 3', 'NXT-240', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `visitor_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `contact` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `date_reg` varchar(65) NOT NULL,
  `company` varchar(65) NOT NULL,
  `statusxx` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`visitor_id`, `event_id`, `firstname`, `lastname`, `contact`, `email`, `date_reg`, `company`, `statusxx`) VALUES
(1, 1, 'Francis Prim', 'Pagunuran', '09453129089', 'fppag@ran', '2021-06-30', 'SPUP', 'Absent'),
(2, 1, 'Jiro', 'Saludes', '0934245623', 'ana@ke', '2021-06-30', 'SITE', 'Present'),
(3, 1, 'Vince', 'Calimag', '09345542231', 'vince@usli.ph', '2021-06-30', 'USLI', 'Late'),
(4, 1, 'Jonas', 'Rivera', '0924324652', 'jonas@gabriel.co', '2021-06-30', 'GABR', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attendee`
--
ALTER TABLE `tbl_attendee`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `tbl_cat_req`
--
ALTER TABLE `tbl_cat_req`
  ADD PRIMARY KEY (`cat_req_id`);

--
-- Indexes for table `tbl_csh_req`
--
ALTER TABLE `tbl_csh_req`
  ADD PRIMARY KEY (`csh_req_id`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_evaluation`
--
ALTER TABLE `tbl_evaluation`
  ADD PRIMARY KEY (`eval_id`);

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
-- Indexes for table `tbl_in_cmp`
--
ALTER TABLE `tbl_in_cmp`
  ADD PRIMARY KEY (`in_cmp_id`);

--
-- Indexes for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`notif_id`);

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
-- Indexes for table `tbl_rsrv_cfr`
--
ALTER TABLE `tbl_rsrv_cfr`
  ADD PRIMARY KEY (`rsrv_cfr_id`);

--
-- Indexes for table `tbl_stud_list`
--
ALTER TABLE `tbl_stud_list`
  ADD PRIMARY KEY (`stud_list_id`);

--
-- Indexes for table `tbl_tra_prmt`
--
ALTER TABLE `tbl_tra_prmt`
  ADD PRIMARY KEY (`tra_prmt_id`);

--
-- Indexes for table `tbl_trp_tckt`
--
ALTER TABLE `tbl_trp_tckt`
  ADD PRIMARY KEY (`trp_tckt_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attendee`
--
ALTER TABLE `tbl_attendee`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cat_req`
--
ALTER TABLE `tbl_cat_req`
  MODIFY `cat_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_csh_req`
--
ALTER TABLE `tbl_csh_req`
  MODIFY `csh_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_evaluation`
--
ALTER TABLE `tbl_evaluation`
  MODIFY `eval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_inclusion`
--
ALTER TABLE `tbl_inclusion`
  MODIFY `inc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_in_cmp`
--
ALTER TABLE `tbl_in_cmp`
  MODIFY `in_cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_officers`
--
ALTER TABLE `tbl_officers`
  MODIFY `off_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_orgs`
--
ALTER TABLE `tbl_orgs`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_programs`
--
ALTER TABLE `tbl_programs`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_rsrv_cfr`
--
ALTER TABLE `tbl_rsrv_cfr`
  MODIFY `rsrv_cfr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_stud_list`
--
ALTER TABLE `tbl_stud_list`
  MODIFY `stud_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tra_prmt`
--
ALTER TABLE `tbl_tra_prmt`
  MODIFY `tra_prmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_trp_tckt`
--
ALTER TABLE `tbl_trp_tckt`
  MODIFY `trp_tckt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 02:46 PM
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

--
-- Dumping data for table `tbl_attendee`
--

INSERT INTO `tbl_attendee` (`attendance_id`, `event_id`, `user_id`, `username`, `firstname`, `lastname`, `email`, `contact_no`, `user_type`, `year_level`, `program`, `section`, `statusxx`) VALUES
(24, 10, 210, 'mamamo', 'Francis Prim', 'Pagunuran', 'ema@l', '3424634', 'Student', '3', 'BSIT', '3', 'Present'),
(409, 22, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Present'),
(974, 10, 12, 'norma', 'Norma', 'Lin', 'norma13@gma.il', '093457821', 'Student', '3', 'BSIT', 'C', 'Late'),
(987, 10, 13, 'user3', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Officer', '3', 'BSCpE', 'B', 'Absent'),
(988, 10, 18, 'user5', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(989, 10, 19, 'user6', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Student', '3', 'BSIT', '', 'Absent'),
(990, 10, 20, 'user7', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Officer', '2', 'BSCpE', 'B', 'Absent'),
(991, 10, 21, 'user8', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Officer', '3', 'BSIT', '', 'Absent'),
(992, 10, 22, 'user9', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Student', '1', 'BSEnSE', 'C', 'Absent'),
(993, 10, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Absent'),
(994, 10, 28, 'user13', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Student', '3', 'BSCpE', 'A', 'Absent'),
(995, 10, 208, 'user14', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Student', '1', 'BSIT', 'A', 'Absent'),
(996, 10, 209, 'user_today', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Officer', '2', 'BSCE', 'B', 'Late'),
(1022, 22, 12, 'norma', 'Norma', 'Lin', 'norma13@gma.il', '093457821', 'Student', '3', 'BSCpE', 'C', 'Late'),
(1047, 1, 12, 'norma', 'Normal', 'Liny', 'norma13@gma.il', '093457821', 'Student', '3', 'BSCpE', 'C', 'Absent'),
(1048, 1, 13, 'user3', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Officer', '3', 'BSCpE', 'B', 'Absent'),
(1049, 1, 18, 'user5', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(1050, 1, 19, 'user6', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Student', '3', 'BSIT', '', 'Absent'),
(1051, 1, 20, 'user7', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Officer', '2', 'BSCpE', 'B', 'Absent'),
(1052, 1, 21, 'user8', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Officer', '3', 'BSIT', '', 'Absent'),
(1053, 1, 22, 'user9', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Student', '1', 'BSEnSE', 'C', 'Absent'),
(1054, 1, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Absent'),
(1055, 1, 28, 'user13', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Student', '3', 'BSCpE', 'A', 'Absent'),
(1056, 1, 208, 'user14', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Student', '1', 'BSIT', 'A', 'Absent'),
(1057, 1, 209, 'user_today', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(1058, 1, 210, 'mamamo', 'Francis Prim', 'Pagunuran', 'ema@l', '3424634', 'Student', '3', 'BSIT', '3', 'Absent'),
(1059, 11, 12, 'norma', 'Normal', 'Liny', 'norma13@gma.il', '093457821', 'Student', '3', 'BSCpE', 'C', 'Absent'),
(1060, 11, 13, 'user3', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Officer', '3', 'BSCpE', 'B', 'Absent'),
(1061, 11, 18, 'user5', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(1062, 11, 19, 'user6', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Student', '3', 'BSIT', '', 'Absent'),
(1063, 11, 20, 'user7', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Officer', '2', 'BSCpE', 'B', 'Absent'),
(1064, 11, 21, 'user8', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Officer', '3', 'BSIT', '', 'Absent'),
(1065, 11, 22, 'user9', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Student', '1', 'BSEnSE', 'C', 'Absent'),
(1066, 11, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Absent'),
(1067, 11, 28, 'user13', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Student', '3', 'BSCpE', 'A', 'Absent'),
(1068, 11, 208, 'user14', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Student', '1', 'BSIT', 'A', 'Absent'),
(1069, 11, 209, 'user_today', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(1070, 11, 210, 'mamamo', 'Francis Prim', 'Pagunuran', 'ema@l', '3424634', 'Student', '3', 'BSIT', '3', 'Absent'),
(1071, 39, 210, 'mamamo', 'Francis Prim', 'Pagunuran', 'ema@l', '3424634', 'Student', '3', 'BSIT', '3', 'Present'),
(1072, 39, 12, 'norma', 'Normal', 'Liny', 'norma13@gma.il', '093457821', 'Student', '3', 'BSCpE', 'C', 'Present'),
(1073, 39, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Late'),
(1074, 39, 28, 'user13', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Student', '3', 'BSCpE', 'A', 'Present'),
(1077, 39, 18, 'user5', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Officer', '2', 'BSCE', 'B', 'Late'),
(1078, 39, 19, 'user6', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Student', '3', 'BSIT', '', 'Present'),
(1104, 24, 12, 'norma', 'Normal', 'Liny', 'norma13@gma.il', '093457821', 'Student', '3', 'BSCpE', 'C', 'Present'),
(1123, 24, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Present'),
(1137, 24, 208, 'user14', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Student', '1', 'BSIT', 'A', 'Present'),
(1142, 24, 18, 'user5', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Officer', '2', 'BSCE', 'B', 'Late'),
(1155, 24, 19, 'user6', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Student', '3', 'BSIT', '', 'Late'),
(1181, 24, 21, 'user8', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Officer', '3', 'BSIT', '', 'Present'),
(1223, 24, 210, 'mamamo', 'Francis Prim', 'Pagunuran', 'ema@l', '3424634', 'Student', '3', 'BSIT', '3', 'Late'),
(1232, 24, 28, 'user13', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Student', '3', 'BSCpE', 'A', 'Present'),
(1249, 24, 13, 'user3', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Officer', '3', 'BSCpE', 'B', 'Absent'),
(1252, 24, 20, 'user7', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Officer', '2', 'BSCpE', 'B', 'Absent'),
(1254, 24, 22, 'user9', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Student', '1', 'BSEnSE', 'C', 'Absent'),
(1258, 24, 209, 'user_today', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(1273, 39, 13, 'user3', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Officer', '3', 'BSCpE', 'B', 'Absent'),
(1276, 39, 20, 'user7', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Officer', '2', 'BSCpE', 'B', 'Absent'),
(1277, 39, 21, 'user8', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Officer', '3', 'BSIT', '', 'Absent'),
(1278, 39, 22, 'user9', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Student', '1', 'BSEnSE', 'C', 'Absent'),
(1281, 39, 208, 'user14', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Student', '1', 'BSIT', 'A', 'Absent'),
(1282, 39, 209, 'user_today', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(1308, 15, 12, 'norma', 'Normal', 'Liny', 'norma13@gma.il', '093457821', 'Student', '3', 'BSCpE', 'C', 'Absent'),
(1309, 15, 13, 'user3', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Officer', '3', 'BSCpE', 'B', 'Absent'),
(1310, 15, 18, 'user5', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(1311, 15, 19, 'user6', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Student', '3', 'BSIT', '', 'Absent'),
(1312, 15, 20, 'user7', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Officer', '2', 'BSCpE', 'B', 'Absent'),
(1313, 15, 21, 'user8', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Officer', '3', 'BSIT', '', 'Absent'),
(1314, 15, 22, 'user9', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Student', '1', 'BSEnSE', 'C', 'Absent'),
(1315, 15, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Absent'),
(1316, 15, 28, 'user13', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Student', '3', 'BSCpE', 'A', 'Absent'),
(1317, 15, 208, 'user14', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Student', '1', 'BSIT', 'A', 'Absent'),
(1318, 15, 209, 'user_today', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(1319, 15, 210, 'mamamo', 'Francis Prim', 'Pagunuran', 'ema@l', '3424634', 'Student', '3', 'BSIT', '3', 'Absent');

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
  `menu` varchar(65) NOT NULL,
  `venue` varchar(65) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cat_req`
--

INSERT INTO `tbl_cat_req` (`cat_req_id`, `event_id`, `datexx`, `time_needed`, `occasion`, `num_guest`, `menu`, `venue`, `remarks`) VALUES
(6, '7', '2021-05-14', '22:54', 'jklk', '123', 'Dinner', 'sdfgss', 'sdfg'),
(9, '16', '2021-05-18', '00:29', 'jkgh', '675', 'Dinner', 'klghu', 'cghjtd'),
(10, '16', '2021-05-27', '10:34', 'Testing ni Prim', '12', 'Breakfast', 'Kwarto ni Prim', 'Sikka pansit ako ko'),
(11, '16', '2021-05-28', '22:06', 'Meeting', '315', 'Lunch', 'MM hall', 'extra toyo ni Grand'),
(25, '19', '2021-06-29', '15:11', 'dfgh', '4', 'Lunch', 'fgjgjh', 'jghjghj');

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
(7, 7, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'sdfg', 'sdfg', '2021-05-14', ''),
(8, 16, 2333, 3323, 23233, 232323, 2323234, 2212323, 23232, 232321, 2321, 232131, 'Di ko alam anong ilalagay sa purpose', 'Delivery boy', '2021-05-27', ''),
(9, 18, 65756, 343, 345, 3453, 3453445, 456345, 34534, 34534675, 4564564, 456456, 'wala lang', 'Clarete', '2021-05-27', ''),
(14, 19, 0, 0, 0, 0, 10000, 0, 0, 0, 0, 0, 'Lorem ipsum dolor set', 'Clarete Clemente', '2021-06-26', '');

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
(1, 24, 0, '', '', '', '1', '0', '0', '0', '0', '0', '0', '0'),
(2, 24, 1, '', '', '', '2', '1', '1', '0', '1', '0', '0', '0'),
(10, 24, 12, 'Event 10', '2021-05-28', 'BEU Gym', '2', '2', '1', '0', '1', '0', '0', '0'),
(13, 24, 19, 'Event 9', '2021-05-27', 'BEU Gym', '2', '2', '2', '1', '1', '1', '1', '0'),
(14, 24, 12, 'Event Tomorrrow', '2021-05-25 - 2021-05-24', 'University Gym', '3', '2', '2', '2', '2', '1', '1', '1'),
(15, 24, 0, '', '', '', '3', '3', '3', '2', '3', '2', '1', '1'),
(24, 24, 0, '', '', '', '3', '3', '3', '2', '3', '2', '2', '1'),
(25, 24, 0, '', '', '', '3', '3', '3', '3', '3', '3', '3', '2');

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
(1, 1, 'Event 1', '2021-05-20', '2021-05-20', '16:49', '16:49', 'MM Hall', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Cursus risus at ultrices mi. Eu ultrices vitae auctor eu augue ut. Eu consequat ac felis donec et odio pellentesque diam.', 'Lorem ipsum dolor sit amet', 'Pending', '', '11', '', '', '', '', 'Valorant Screenshot 2020.08.07 - 17.44.55.21.png'),
(7, 2, 'Event 2', '2021-05-07', '2021-05-07', '22:17', '22:17', 'Student Center', 'kinenenene', 'consectetur adipiscing elit', 'Pending', '', '13', '7', '', '', '', ''),
(10, 1, 'Event 4', '2021-05-20', '2021-05-20', '19:15', '19:15', 'LR106', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu augue ut lectus arcu bibendum at varius vel.', '', 'Archived', '', '', '', '', '', '', ''),
(11, 1, 'Event 5', '2021-05-20', '2021-05-20', '19:19', '19:19', 'University Gym', 'Duis convallis convallis tellus id interdum velit. Purus faucibus ornare suspendisse sed nisi. Lobortis feugiat vivamus at augue.', '', 'Archived', '', '', '', '', '', '', ''),
(12, 1, 'Event 6', '2021-05-20', '2021-05-20', '19:58', '19:58', 'SP Hall', 'Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Sagittis nisl rhoncus mattis rhoncus.', 'sed do eiusmod tempor', 'Archived', '', '', '', '', '', '', ''),
(13, 1, 'Event Yesterday', '2021-05-23', '2021-05-23', '20:07', '20:07', 'LRC', 'Tellus id interdum velit laoreet id donec ultrices tincidunt. Libero enim sed faucibus turpis in eu mi.', '', 'Archived', '', '', '', '', '', '', ''),
(14, 1, 'Event Today', '2021-05-24', '2021-05-24', '20:07', '20:07', 'Student Center', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', 'Archived', '', '', '', '', '', '', ''),
(15, 1, 'Event Tomorrrow', '2021-05-25', '2021-05-24', '20:08', '20:08', 'University Gym', 'Molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Aliquam sem fringilla ut morbi. Libero volutpat sed cras ornare arcu.', '', 'Archived', '', '', '', '', '', '', 'WIN_20210107_22_55_24_Pro.jpg'),
(16, 4, 'Event 9', '2021-05-27', '2021-05-27', '10:31', '10:31', 'BEU Gym', 'Dapat hindi magauto-absent today, bukas pwede na.', 'incididunt ut labore et', 'Archived', '', '15', '8', '', '', '', ''),
(17, 4, 'Event 10', '2021-05-28', '2021-05-28', '12:08', '12:08', 'BEU Gym', 'Aliquam sem fringilla ut morbi. Libero volutpat sed cras ornare arcu. Euismod in pellentesque massa placerat duis ultricies.', '', 'Archived', '', '', '', '', '', '', ''),
(18, 1, 'Event 11', '2021-05-30', '2021-05-31', '21:59', '21:59', 'Grandstand', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris in aliquam sem fringilla ut morbi tincidunt. Eu feugiat pretium nibh ipsum consequat nisl vel. Arcu dictum varius duis at consectetur.', 'Molestie ac feugiat sed lectus vestibulum mattis', 'Archived', '', '16', '9', '', '', '', ''),
(19, 1, 'Hyperlink', '2021-05-29', '2021-06-29', '13:44', '13:44', 'University Gym', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu bibendum at varius vel pharetra vel turpis. ', 'Change driver to Manong Guard', 'Approved', '', '21', '10', '', '', '', '71579884_2467310563544983_4096456098012200960_n.jpg'),
(20, 1, 'asd', '2021-06-08', '2021-06-08', '21:44', '21:45', 'gyu', 'fghg', '', 'Pending', '', '', '', '', '', '', 'WIN_20200124_09_31_27_Pro.jpg'),
(21, 5, 'Event Notif', '2021-06-21', '2021-06-27', '19:53', '19:53', 'dsfsd', 'sdfdsfs', '', 'Pending', '', '', '', '', '', '', 'Paulympics-42.jpg'),
(22, 4, 'Event Test', '2021-06-21', '2021-06-29', '19:56', '19:56', 'Gymnasium', 'Lorem ipsum dolor est yakult penble wheels milo', 'tdhdfghdfgh', 'Approved', '', '', '', '', '', '', '73475256_465611194301306_666157373299097600_n.jpg'),
(24, 11, 'Event Notif 2', '2021-06-23', '2021-06-23', '09:37', '09:37', 'CVMC', 'Loremas jhgsdsoidfb fjighiudsg dfgg', '', 'Archived', '', '', '', '', '', '', 'WIN_20210107_22_55_40_Pro.jpg'),
(33, 4, 'event notif 3h', '2021-06-23', '2021-06-23', '19:39', '19:39', 'wewq', 'weawsdasdas', 'ertwerfg', 'Pending', '', '', '', '', '', '', 'WIN_20190917_09_09_26_Pro.jpg'),
(39, 1, 'sfgrd', '2021-06-27', '2021-06-27', '17:02', '17:02', 'gyu', 'srsets', '', 'Archived', '', '', '', '', '', '', '');

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
(94, 5, 1),
(95, 5, 4),
(98, 7, 2),
(99, 7, 4),
(100, 11, 2),
(101, 11, 4),
(102, 51, 2),
(103, 51, 3),
(104, 51, 4),
(105, 52, 1),
(106, 52, 5),
(107, 55, 2),
(108, 55, 3);

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
(6, 7, '12234ssd', 'sdfgdshfgjhfd', 'sdfgsfg', 'asdfgasd', '', '2021-05-16', '20:23', 'sdfgsd45', 'fghjfdg', 4, 342523),
(8, 16, 'Prim', 'Testing', 'testing nga yawa to', '', '', '2021-05-27', '10:36', '', 'Kwarto ni Prim', 12, 2332),
(9, 18, 'Juro', 'Meeting', 'Magmeeting nga', 'opsyon', '', '2021-05-27', '22:05', '', 'MM halll', 315, 6900),
(11, 8, 'asd', 'Workshop', 'sdf', '', '', '2021-05-31', '23:57', 'sdfsd', 'sdfgd', 3, 3),
(14, 19, 'Jonas Rivera', 'Workshop', 'in nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper eget duis at tellus at urna condimentum mattis pellentesque id nibh tortor id aliquet lectus proin nibh nisl', 'enim neque volutpat ac tincidunt vitae semper quis lectus nulla at volutpat diam ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci porta non', 'hac habitasse platea dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit', '2021-06-26', '09:59', 'Que Quinagoran', 'Student Center', 300, 0);

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
(58, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '01:21:25', 'travel permit edited', 11, 24),
(59, 'norma', ' Lin', 'Student', '', '2021-06-23', '13:24:25', 'travel permit edited', 11, 24),
(60, 'norma', ' Lin', 'Student', '', '2021-06-23', '13:26:50', 'travel permit edited', 11, 24),
(61, 'norma', ' Lin', 'Student', '', '2021-06-23', '13:30:56', 'travel permit edited', 11, 24),
(62, 'norma', ' Lin', 'Student', '', '2021-06-23', '19:31:43', 'travel permit edited', 11, 24),
(63, 'norma', ' Lin', 'Student', '', '2021-06-23', '19:40:42', 'travel permit edited', 11, 24),
(64, 'norma', ' Lin', 'Student', '', '2021-06-23', '19:33:39', 'travel permit edited', 11, 24),
(65, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:39:19', 'created', 4, 33),
(66, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:40:01', 'details edited', 4, 33),
(67, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:41:16', 'picture updated', 4, 33),
(68, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:41:29', 'status changed to Approved', 4, 33),
(69, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:42:20', 'remarks changed to asdad', 4, 33),
(70, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:42:38', 'status changed to Pending', 4, 33),
(71, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:43:03', 'trip ticket added', 4, 33),
(72, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:43:19', 'trip ticket edited', 4, 33),
(73, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:43:38', 'trip ticket added', 4, 33),
(74, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:43:50', 'trip ticket deleted', 4, 33),
(75, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:44:36', 'travel permit added', 4, 33),
(76, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:45:08', 'travel permit edited', 4, 33),
(77, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:46:00', 'travel permit deleted', 4, 33),
(78, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:48:11', 'remarks changed to asdads', 4, 33),
(79, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '19:57:28', 'travel permit added', 4, 33),
(80, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '21:48:56', 'travel permit added', 0, 0),
(81, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '21:49:57', 'travel permit added', 0, 0),
(82, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '22:08:25', 'travel permit added', 0, 0),
(83, 'user1', ' Reeves', 'Dean', '', '2021-06-23', '22:25:53', 'travel permit added', 0, 0),
(84, '', ' Reeves', 'Dean', '', '2021-06-23', '23:03:09', 'travel permit added', 0, 0),
(85, '', ' Reeves', 'Dean', '', '2021-06-23', '23:07:37', 'travel permit added', 0, 0),
(86, '', ' Reeves', 'Dean', '', '2021-06-23', '23:16:15', 'status changed to Archived', 1, 19),
(87, '', ' Reeves', 'Dean', '', '2021-06-23', '23:18:23', 'status changed to Pending', 1, 19),
(88, '', ' Reeves', 'Dean', '', '2021-06-23', '23:19:17', 'status changed to Archived', 1, 19),
(89, '', ' Reeves', 'Dean', '', '2021-06-23', '23:19:28', 'status changed to Pending', 1, 19),
(90, '', ' Reeves', 'Dean', '', '2021-06-23', '23:20:16', 'status changed to Archived', 1, 19),
(91, '', ' Reeves', 'Dean', '', '2021-06-23', '23:20:28', 'status changed to Pending', 1, 19),
(92, '', ' Reeves', 'Dean', '', '2021-06-23', '23:28:06', 'travel permit added', 0, 0),
(93, '', ' Reeves', 'Dean', '', '2021-06-23', '23:32:56', 'travel permit added', 0, 0),
(94, '', ' Reeves', 'Dean', '', '2021-06-23', '23:32:58', 'travel permit added', 0, 0),
(95, '', ' Reeves', 'Dean', '', '2021-06-23', '23:33:00', 'travel permit added', 0, 0),
(96, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '09:11:24', 'remarks changed to tyjt', 4, 33),
(97, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '09:11:47', 'travel permit edited', 4, 33),
(98, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '09:13:00', 'travel permit added', 0, 0),
(99, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '09:15:55', 'remarks changed to ertwer', 4, 33),
(100, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '09:18:37', 'remarks changed to ertwerfg', 4, 33),
(101, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '09:18:45', 'status changed to Pending', 4, 33),
(102, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '09:19:19', 'picture updated', 4, 33),
(103, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:23:52', 'travel permit added', 4, 33),
(104, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:24:15', 'student list added', 4, 33),
(105, '', ' Reeves', 'Dean', '', '2021-06-24', '10:31:59', 'student list deleted', 4, 33),
(106, '', ' Reeves', 'Dean', '', '2021-06-24', '10:33:56', 'student list deleted', 4, 33),
(107, '', ' Reeves', 'Dean', '', '2021-06-24', '10:36:46', 'student list deleted', 0, 0),
(108, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:38:18', 'student list added', 4, 33),
(109, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:39:50', 'student list deleted', 4, 33),
(110, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:40:47', 'student list added', 4, 33),
(111, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:41:58', 'student list deleted', 4, 33),
(112, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:47:39', 'student list added', 4, 33),
(113, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:47:46', 'student list deleted', 4, 33),
(114, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:49:04', 'student list added', 4, 33),
(115, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:52:34', 'student list deleted', 4, 33),
(116, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:52:47', 'student list added', 4, 33),
(117, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:54:35', 'student list added', 4, 33),
(118, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '10:54:56', 'student list deleted', 4, 33),
(119, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '13:35:52', 'common function room added', 4, 33),
(120, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '13:36:19', 'common function room added', 4, 33),
(121, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '14:03:44', 'common function room edited', 4, 33),
(122, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '14:04:53', 'common function room deleted', 4, 33),
(123, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '14:11:09', 'In campus activity added', 4, 33),
(124, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '14:24:05', 'travel permit edited', 4, 33),
(125, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '14:41:44', 'In campus activity edited', 4, 33),
(126, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '14:51:46', 'In campus activity deleted', 4, 33),
(129, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '15:49:45', 'cash requisition added', 4, 33),
(130, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '15:51:28', 'cash requisition edited', 4, 33),
(131, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '15:54:43', 'cash requisition deleted', 4, 33),
(132, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '16:02:48', 'catering requisition added', 4, 33),
(133, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '16:06:07', 'catering requisition edited', 4, 33),
(134, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '16:07:05', 'catering requisition deleted', 4, 33),
(135, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '16:24:27', 'status changed to Approved', 11, 24),
(136, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '18:56:35', 'details edited', 4, 22),
(137, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '18:56:40', 'status changed to Approved', 4, 22),
(138, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '18:56:54', 'status changed to Pending', 4, 22),
(139, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '18:57:09', 'travel permit added', 4, 22),
(140, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '18:57:14', 'student list added', 4, 22),
(141, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '18:57:20', 'status changed to Approved', 4, 22),
(142, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '19:36:44', 'status changed to Pending', 1, 15),
(143, 'user1', ' Reeves', 'Dean', '', '2021-06-24', '19:36:53', 'picture updated', 1, 15),
(144, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '00:13:40', 'status changed to Pending', 5, 21),
(145, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '00:14:20', 'picture updated', 5, 21),
(146, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '00:14:28', 'status changed to Archived', 5, 21),
(147, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '11:24:20', 'status changed to Pending', 4, 22),
(148, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '11:27:15', 'picture updated', 4, 22),
(149, '', ' Reeves', 'Dean', '', '2021-06-25', '15:24:29', 'status changed to Pending', 5, 21),
(150, '', ' Reeves', 'Dean', '', '2021-06-25', '15:25:10', 'status changed to Approved', 4, 22),
(151, '', ' Reeves', 'Dean', '', '2021-06-25', '15:32:10', 'status changed to Approved', 1, 18),
(152, '', ' Reeves', 'Dean', '', '2021-06-25', '15:32:26', 'status changed to Approved', 1, 18),
(153, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '18:23:08', 'details edited', 5, 21),
(154, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '18:23:13', 'status changed to Approved', 5, 21),
(155, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '18:26:35', 'status changed to Pending', 5, 21),
(156, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '18:26:47', 'details edited', 5, 21),
(157, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '18:26:54', 'status changed to Approved', 5, 21),
(158, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:44:09', 'status changed to Pending', 5, 21),
(159, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:44:21', 'details edited', 5, 21),
(160, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:44:31', 'status changed to Archived', 5, 21),
(161, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:47:35', 'status changed to Pending', 5, 21),
(162, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:47:46', 'details edited', 5, 21),
(163, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:48:09', 'details edited', 5, 21),
(164, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:48:23', 'details edited', 5, 21),
(165, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:48:38', 'details edited', 5, 21),
(166, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:49:17', 'status changed to Approved', 5, 21),
(167, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:51:49', 'status changed to Pending', 5, 21),
(168, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:51:57', 'details edited', 5, 21),
(169, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '19:52:03', 'status changed to Approved', 5, 21),
(170, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '20:25:16', 'status changed to Pending', 5, 21),
(171, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '20:25:23', 'details edited', 5, 21),
(172, 'user1', ' Reeves', 'Dean', '', '2021-06-25', '20:25:28', 'status changed to Approved', 5, 21),
(173, 'norma', ' Lin', 'Student', '', '2021-06-26', '00:16:07', 'status changed to Archived', 1, 15),
(174, '', ' Reeves', 'Dean', '', '2021-06-26', '09:14:09', 'status changed to Pending', 5, 21),
(175, '', ' Reeves', 'Dean', '', '2021-06-26', '09:14:17', 'details edited', 5, 21),
(176, '', ' Reeves', 'Dean', '', '2021-06-26', '09:14:39', 'picture updated', 5, 21),
(177, '', ' Reeves', 'Dean', '', '2021-06-26', '09:14:49', 'status changed to Approved', 5, 21),
(178, '', ' Reeves', 'Dean', '', '2021-06-26', '09:25:22', 'status changed to Pending', 5, 21),
(179, '', ' Reeves', 'Dean', '', '2021-06-26', '09:26:08', 'picture updated', 5, 21),
(180, '', ' Reeves', 'Dean', '', '2021-06-26', '09:57:18', 'common function room added', 1, 19),
(181, '', ' Reeves', 'Dean', '', '2021-06-26', '09:57:55', 'cash requisition deleted', 1, 19),
(182, '', ' Reeves', 'Dean', '', '2021-06-26', '09:58:26', 'cash requisition added', 1, 19),
(183, '', ' Reeves', 'Dean', '', '2021-06-26', '09:59:00', 'catering requisition added', 1, 19),
(184, '', ' Reeves', 'Dean', '', '2021-06-26', '09:59:12', 'catering requisition edited', 1, 19),
(185, '', ' Reeves', 'Dean', '', '2021-06-26', '09:59:16', 'catering requisition deleted', 1, 19),
(186, '', ' Reeves', 'Dean', '', '2021-06-26', '09:59:35', 'In campus activity deleted', 1, 19),
(187, '', ' Reeves', 'Dean', '', '2021-06-26', '10:00:22', 'In campus activity added', 1, 19),
(188, '', ' Reeves', 'Dean', '', '2021-06-26', '10:00:35', 'travel permit deleted', 1, 19),
(189, '', ' Reeves', 'Dean', '', '2021-06-26', '10:01:09', 'travel permit added', 1, 19),
(190, '', ' Reeves', 'Dean', '', '2021-06-26', '10:01:36', 'student list added', 1, 19),
(191, '', ' Reeves', 'Dean', '', '2021-06-26', '10:03:54', 'trip ticket added', 1, 19),
(192, '', ' Reeves', 'Dean', '', '2021-06-26', '10:05:33', 'remarks changed to Change driver to Manong Guard', 1, 19),
(193, '', ' Reeves', 'Dean', '', '2021-06-26', '10:06:03', 'trip ticket edited', 1, 19),
(194, '', ' Reeves', 'Dean', '', '2021-06-26', '10:07:02', 'picture updated', 1, 19),
(195, '', ' Reeves', 'Dean', '', '2021-06-26', '10:09:27', 'details edited', 1, 19),
(196, '', ' Reeves', 'Dean', '', '2021-06-26', '10:10:19', 'status changed to Approved', 1, 19),
(197, '', ' Reeves', 'Dean', '', '2021-06-26', '10:10:37', 'status changed to Archived', 1, 19),
(198, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:55:19', 'status changed to Pending', 4, 22),
(199, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:55:31', 'remarks changed to tdhdfghdfgh', 4, 22),
(200, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:55:55', 'common function room added', 4, 22),
(201, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:56:15', 'cash requisition added', 4, 22),
(202, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:56:38', 'In campus activity added', 4, 22),
(203, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:57:05', 'travel permit added', 4, 22),
(204, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:57:17', 'travel permit edited', 4, 22),
(205, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:57:33', 'common function room edited', 4, 22),
(206, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:57:41', 'common function room deleted', 4, 22),
(207, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:57:50', 'cash requisition edited', 4, 22),
(208, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:57:59', 'cash requisition deleted', 4, 22),
(209, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:58:17', 'In campus activity edited', 4, 22),
(210, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:58:30', 'In campus activity deleted', 4, 22),
(211, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:58:45', 'travel permit edited', 4, 22),
(212, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:59:01', 'travel permit deleted', 4, 22),
(213, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:59:09', 'student list added', 4, 22),
(214, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:59:17', 'student list deleted', 4, 22),
(215, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '10:59:33', 'trip ticket added', 4, 22),
(216, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '11:00:08', 'picture updated', 4, 22),
(217, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '14:12:15', 'status changed to Approved', 1, 19),
(218, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '14:13:21', 'picture updated', 4, 22),
(219, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '14:13:34', 'status changed to Approved', 4, 22),
(220, '', ' Reeves', 'Dean', '', '2021-06-26', '23:18:23', 'picture updated', 1, 1),
(221, '', ' Reeves', 'Dean', '', '2021-06-26', '23:18:36', 'status changed to Approved', 1, 1),
(222, '', ' Reeves', 'Dean', '', '2021-06-26', '23:19:35', 'status changed to Pending', 1, 1),
(223, '', ' Reeves', 'Dean', '', '2021-06-26', '23:19:39', 'status changed to Approved', 1, 1),
(224, '', ' Reeves', 'Dean', '', '2021-06-26', '23:21:29', 'status changed to Archived', 1, 1),
(225, '', ' Reeves', 'Dean', '', '2021-06-26', '23:22:17', 'status changed to Pending', 1, 1),
(226, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '23:47:27', 'created', 56, 34),
(227, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '23:49:01', 'created', 2, 35),
(228, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '23:58:29', 'created', 56, 36),
(229, 'user1', ' Reeves', 'Dean', '', '2021-06-26', '23:59:37', 'created', 56, 37),
(230, 'user1', ' Reeves', 'Dean', '', '2021-06-27', '00:00:27', 'created', 56, 38),
(231, 'user1', ' Reeves', 'Dean', '', '2021-06-27', '00:02:50', 'details edited', 56, 38),
(232, 'user1', ' Reeves', 'Dean', '', '2021-06-27', '00:03:02', 'picture updated', 56, 38),
(233, 'user1', ' Reeves', 'Dean', '', '2021-06-27', '00:03:15', 'remarks changed to fghgfhfg', 56, 38),
(234, 'user1', ' Reeves', 'Dean', '', '2021-06-27', '00:03:18', 'status changed to Approved', 56, 38),
(235, 'user1', ' Reeves', 'Dean', '', '2021-06-27', '00:03:22', 'status changed to Pending', 56, 38),
(236, 'user1', ' Reeves', 'Dean', '', '2021-06-27', '00:03:27', 'deleted', 56, 38),
(237, '', ' Reeves', 'Dean', '', '2021-06-27', '17:02:29', 'created', 1, 39),
(238, '', ' Reeves', 'Dean', '', '2021-06-27', '17:02:36', 'status changed to Approved', 1, 39),
(239, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '14:34:14', 'status changed to Pending', 1, 19),
(240, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '14:34:22', 'travel permit edited', 1, 19),
(241, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '14:37:28', 'travel permit edited', 1, 19),
(242, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '14:37:43', 'travel permit edited', 1, 19),
(243, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '14:38:08', 'travel permit edited', 1, 19),
(244, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '15:01:38', 'trip ticket added', 4, 22),
(245, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '15:03:16', 'trip ticket added', 1, 19),
(246, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '15:04:51', 'trip ticket added', 1, 19),
(247, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '15:08:08', 'trip ticket edited', 1, 19),
(248, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '15:11:23', 'catering requisition added', 1, 19),
(249, 'user1', ' Reeves', 'Dean', '', '2021-06-29', '15:32:30', 'status changed to Approved', 1, 19);

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
(1, 'Organization 1', 'Paulinian Student Government', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default mod', 'SITE', 'PSG SITE.png', '71479956_435418837320542_2416400239121399808_n.jpg', 0),
(4, 'Organization 3', 'Department-based', 'mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu nisl nunc mi ipsum', '', '', '', 0),
(5, 'Organization 4', 'Program-based', 'orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus risus at', '', '', '', 0),
(7, 'Organization 5', 'Department-based', 'sed risus pretium quam vulputate dignissim suspendisse in est ante in nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet', '', '', '', 0),
(11, 'Organization 6', 'Program-based', 'purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra magna ac placerat vestibulum lectus', '', '', '', 0),
(50, 'Organization 7', 'Department-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis volutpat est velit egestas. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Nisi scelerisque eu ultrices vitae auctor eu augue ut lectus.', '', '', '', 0),
(51, 'Organization 8', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor mi. Praesent blandit, lectus id maximus commodo, enim dolor euismod nisi, consequat interdum arcu odio a leo.', '', '', '', 0),
(55, 'Organization 9', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu bibendum at varius vel pharetra vel turpis. ', '', '', '', 0),
(56, 'Office of the Dean', 'dean', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et tortor at risus viverra adipiscing at in tellus.', '', '', '', 0);

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
(11, 1, 'LRC', '350', '324w', 'Lolo mo lorem', 'UJsda', 1234, 'JKoisdhiguo', '', '2021-05-12', '2021-05-12', '18:55', '18:55'),
(13, 7, 'qwerwqioio', '456', 'fghdf', '234r', '345', 34534, 'sdfghs', '', '2021-05-13', '2021-05-13', '23:51', '23:51'),
(14, 8, 'asdasd', '4554', '34534', 'Objective', '342', 2, 'yesgrg', '', '2021-05-31', '2021-05-31', '22:52', '22:52'),
(15, 16, 'Mema lang sa docs', '12', 'Prim', 'Wala lang', 'Ewan ko ba', 2300, 'Basta may electric fan', '', '2021-05-27', '2021-05-27', '10:33', '10:33'),
(16, 18, 'MM Hall', '315', 'Juro', 'Meeting', 'Clarete', 315, 'Chairs, tables, mics, speakers', '', '2021-05-27', '2021-05-27', '22:02', '22:02'),
(18, 19, 'Hyperlink', '315', 'ASd', 'asdasd asdasd', 'erase this', 2, 'asdasd asdasd', '', '2021-05-28', '2021-05-28', '20:07', '20:11'),
(19, 19, 'asdfd', '231', '123', '123421', '', 200, '123', '', '2021-06-01', '2021-06-01', '21:43', '21:43'),
(21, 19, 'sdf', '123', 'dfgsd', 'sdfgsdfg', '', 3432, 'sdfg', '', '2021-06-02', '2021-06-04', '02:32', '14:34'),
(22, 33, ' uj', '5645', 'fghfgh', 'trtrt', '', 3, 'fghfhd', '', '2021-06-24', '2021-06-24', '13:35', '13:35'),
(24, 19, 'Student Center', '300', 'Jonas Rivera', 'Lorem ipsum dolor set', '', 6, '', '', '2021-06-26', '2021-06-27', '09:57', '09:57');

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
(49, 7, 0, 'juanor', '11', 'BSEnSE', 'A'),
(51, 16, 0, 'eknib', '4', 'BSIT', 'wasak'),
(52, 16, 0, 'orihj', '3', 'BSCE', 'tellem'),
(71, 19, 21, 'Bryce  Mahoney', '3', 'BSIT', ''),
(72, 33, 13, 'Coleman  Howe', '3', 'BSCpE', 'B'),
(75, 33, 24, 'Amara Kent', '4', 'BSEnSE', 'A'),
(80, 33, 208, 'Caius  Beck', '1', 'BSIT', 'A'),
(82, 22, 12, 'Norma Lin', '3', 'BSIT', 'C'),
(83, 19, 28, 'Premium Certificate', '3', 'BSCpE', 'A');

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
(6, 7, 'Teacher 1', 'Somewhere', 'Faraway', '2021-05-18', '2021-05-18', 'Representative of SPUP', 'Member of the Organization', ''),
(7, 16, 'Prim', 'kwarto niya', 'desk', '2021-05-27', '2021-05-27', 'Personal/Professional Update', '', ''),
(8, 18, 'Juro', 'Palawan', 'Puerto Princesa', '2021-05-27', '2021-05-27', 'Personal/Professional Update', '', ''),
(12, 24, 'YAAAWAAAtyp', 'rthr', 'dfghs', '2021-06-23', '2021-06-23', 'Representative of SPUP', '', 'fgyhd'),
(14, 33, 'sdfg', 'dfghg', 'fghfd', '2021-06-23', '2021-06-23', 'Representative of SPUP', '', ''),
(15, 22, 'afa', 'sdfsd', 'fasdfg', '2021-06-24', '2021-06-24', 'Representative of SPUP', 'Member of the Organization', 'dfgijlo'),
(16, 19, 'Rucelj Pugeda', 'Tuguegarao', 'Hotel Roma', '2021-06-26', '2021-06-26', 'Personal/Professional Update', 'Member of the Organization', 'asdad');

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
(57, 7, 'SITE', 'maayos', 'lahat', 'dapat', 'asd', '2021-05-19', '02:33', '02:27', 0, ''),
(58, 7, 'SITE', 'Jebel', 'Miguel', 'Gran', 'Disney+', '2021-05-19', '14:17', '14:17', 0, ''),
(60, 16, 'SITE', 'prim', 'manong haime', 'bmw sedan', 'testing', '2021-05-27', '11:44', '11:44', 0, ''),
(61, 18, 'SITE', 'Juro', 'Manong Haime', 'innova na tinted', 'Stroll w manong high me', '2021-05-27', '22:08', '22:08', 0, ''),
(62, 19, 'SITE', 'Vince', 'Manong Haime', 'Sulat yung available na rides with plate no', 'Tree Planting', '2021-05-28', '13:55', '13:55', 0, ''),
(63, 19, 'SITE', 'asdf', 'asdf', 'L300 ABC-123', 'aesf', '2021-06-02', '22:17', '22:17', 0, ''),
(64, 23, 'SITE', 'Vince Calimag', 'Manong Haime', 'L300 ABC-123', 'Quarantine', '2021-06-23', '15:59', '17:03', 0, ''),
(66, 24, 'SITE', 'asf', 'dfghdg', 'L300 ABC-123', 'gvdfg', '2021-06-23', '17:15', '17:15', 0, ''),
(68, 33, 'SITE', 'retjhk', 'rtyer', 'Super Grandia LMN-690', 'gfh', '2021-06-24', '19:40', '19:43', 0, ''),
(70, 19, 'SITE', 'Jonas Rivera', 'Manong guard', 'Super Grandia LMN-690', 'Water is wet', '2021-06-26', '10:00', '10:03', 0, ''),
(71, 22, 'SITE', 'hgjjk', 'fghfgh', 'L300 ABC-123', 'hfgdh', '2021-06-26', '10:59', '10:59', 0, ''),
(72, 19, 'SITE', 'dfg', 'zxcbvbb', 'Super Grandia LMN-690', 'eryr', '2021-06-29', '15:03', '15:03', 9696, '6969'),
(73, 19, 'SITE', 'sdfg', 'ghghjffg', 'L300 ABC-123', 'fghsdhg', '2021-06-29', '15:04', '15:04', 3243, 'hjhvjj');

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
(1, 'user1', '8be52126a6fde450a7162a3651d589bb51e9579d', 'Chrysta', 'Reeves', 'chrystalR@gmail.co', '0932457953', 'Female', 'Dean', '', '', '', '', 0, 0, 0, 'SMS.jpg'),
(11, 'user2', '8be52126a6fde450a7162a3651d589bb51e9579d', 'Anastasia ', 'Moss', 'anasmoss@flag.io', '935236545', 'Female', 'Adviser', '2021-04-16', '', '', '', 0, 0, 0, 'WIN_20200120_10_19_26_Pro.jpg'),
(12, 'norma', 'de2a4d5751ab06dc4f987142db57c26d50925c8a', 'Normal', 'Liny', 'norma13@gma.il', '093457821', 'Female', 'Student', '2021-04-18', '3', 'BSCpE', 'C', 0, 0, 0, 'WIN_20210309_08_51_01_Pro.jpg'),
(13, 'user3', '8be52126a6fde450a7162a3651d589bb51e9579d', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Male', 'Officer', '2021-04-18', '3', 'BSCpE', 'B', 0, 0, 0, 'WIN_20190902_11_46_25_Pro.jpg'),
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
(209, 'user_today', 'de2a4d5751ab06dc4f987142db57c26d50925c8a', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Female', 'Officer', '2021-05-28', '2', 'BSCE', 'B', 0, 0, 0, ''),
(210, 'mamamo', '8be52126a6fde450a7162a3651d589bb51e9579d', 'Francis Prim', 'Pagunuran', 'ema@l', '3424634', 'Male', 'Student', '2021-06-24', '3', 'BSIT', '3', 0, 0, 0, '');

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
(4, 'Raptor', 'NXT-240', '1');

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
(2, 21, 'Judd', 'Flores', '0923456721', 'gell@ane', '2021-06-24', '', 'Present'),
(3, 21, 'Seat', 'Wan', '0975834324', 'after@end', '2021-06-24', 'Sheesh', ''),
(4, 21, 'fghsdfh', 'sdhsd', '343685', 'fg4@edrf', '2021-06-25', 'fhgh', 'Present'),
(5, 21, 'Kiss', 'Caden', '094534576', 'k@denz', '2021-06-25', 'survival', ''),
(6, 18, 'dfght', 'sedfgsdf', '0934851254', 'r@was', '2021-06-25', '', 'Absent'),
(7, 1, 'mj,kj', 'hkjl,jkl', '3', 'yjyt@fg', '2021-06-26', 'ghjftj', 'Absent'),
(8, 11, 'mama', 'asdfasd', '098349673', 'em@IL', '2021-06-26', 'sdfd', 'Absent'),
(9, 19, 'sdfa', 'asdf', '0923535454', 'weqw@s', '2021-06-26', 'sdf', ''),
(10, 24, 'Pippin ', 'Johanne', '0912354223', 'ego@sd', '2021-06-27', 'asd', 'Late'),
(11, 24, 'Ivan ', 'Vesna', '0987634', 'asd@ss', '2021-06-27', '', 'Present'),
(12, 24, 'Isbrand ', 'Lunete', '09456124542', 'sad@sd', '2021-06-27', '', 'Absent'),
(13, 24, 'Wil ', 'Seong', '0934754233', 'jaba@a', '2021-06-27', '', 'Present'),
(14, 24, 'Kallias ', 'Dagný', '09497545631', 'kalli@s', '2021-06-27', '', 'Absent');

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
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1320;

--
-- AUTO_INCREMENT for table `tbl_cat_req`
--
ALTER TABLE `tbl_cat_req`
  MODIFY `cat_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_csh_req`
--
ALTER TABLE `tbl_csh_req`
  MODIFY `csh_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_evaluation`
--
ALTER TABLE `tbl_evaluation`
  MODIFY `eval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_inclusion`
--
ALTER TABLE `tbl_inclusion`
  MODIFY `inc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `tbl_in_cmp`
--
ALTER TABLE `tbl_in_cmp`
  MODIFY `in_cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `tbl_officers`
--
ALTER TABLE `tbl_officers`
  MODIFY `off_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_orgs`
--
ALTER TABLE `tbl_orgs`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_programs`
--
ALTER TABLE `tbl_programs`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_rsrv_cfr`
--
ALTER TABLE `tbl_rsrv_cfr`
  MODIFY `rsrv_cfr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_stud_list`
--
ALTER TABLE `tbl_stud_list`
  MODIFY `stud_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_tra_prmt`
--
ALTER TABLE `tbl_tra_prmt`
  MODIFY `tra_prmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_trp_tckt`
--
ALTER TABLE `tbl_trp_tckt`
  MODIFY `trp_tckt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

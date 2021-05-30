-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 05:15 PM
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
(5963, 13, 12, 'norma', 'Norma', 'Lin', 'norma13@gma.il', '093457821', 'Student', '3', 'BSIT', 'C', 'Absent'),
(5964, 13, 13, 'user3', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Officer', '3', 'BSCpE', 'B', 'Absent'),
(5965, 13, 18, 'user5', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(5966, 13, 19, 'user6', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Student', '3', 'BSIT', '', 'Absent'),
(5967, 13, 20, 'user7', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Officer', '2', 'BSCpE', 'B', 'Absent'),
(5968, 13, 21, 'user8', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Officer', '3', 'BSIT', '', 'Absent'),
(5969, 13, 22, 'user9', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Student', '1', 'BSEnSE', 'C', 'Absent'),
(5970, 13, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Absent'),
(5971, 13, 28, 'user13', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Student', '3', 'BSCpE', 'A', 'Absent'),
(5972, 13, 208, 'user14', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Student', '1', 'BSIT', 'A', 'Absent'),
(5973, 13, 209, 'user_today', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(6007, 10, 12, 'norma', 'Norma', 'Lin', 'norma13@gma.il', '093457821', 'Student', '3', 'BSIT', 'C', 'Absent'),
(6008, 10, 13, 'user3', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Officer', '3', 'BSCpE', 'B', 'Absent'),
(6009, 10, 18, 'user5', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(6010, 10, 19, 'user6', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Student', '3', 'BSIT', '', 'Absent'),
(6011, 10, 20, 'user7', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Officer', '2', 'BSCpE', 'B', 'Absent'),
(6012, 10, 21, 'user8', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Officer', '3', 'BSIT', '', 'Absent'),
(6013, 10, 22, 'user9', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Student', '1', 'BSEnSE', 'C', 'Absent'),
(6014, 10, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Absent'),
(6015, 10, 28, 'user13', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Student', '3', 'BSCpE', 'A', 'Absent'),
(6016, 10, 208, 'user14', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Student', '1', 'BSIT', 'A', 'Absent'),
(6017, 10, 209, 'user_today', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(6150, 19, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Present'),
(6184, 16, 12, 'norma', 'Norma', 'Lin', 'norma13@gma.il', '093457821', 'Student', '3', 'BSIT', 'C', 'Present'),
(6394, 16, 13, 'user3', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Officer', '3', 'BSCpE', 'B', 'Absent'),
(6395, 16, 18, 'user5', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Officer', '2', 'BSCE', 'B', 'Absent'),
(6396, 16, 19, 'user6', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Student', '3', 'BSIT', '', 'Absent'),
(6397, 16, 20, 'user7', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Officer', '2', 'BSCpE', 'B', 'Absent'),
(6398, 16, 21, 'user8', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Officer', '3', 'BSIT', '', 'Absent'),
(6399, 16, 22, 'user9', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Student', '1', 'BSEnSE', 'C', 'Absent'),
(6400, 16, 24, 'user10', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Student', '4', 'BSEnSE', 'A', 'Absent'),
(6401, 16, 28, 'user13', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Student', '3', 'BSCpE', 'A', 'Absent'),
(6402, 16, 208, 'user14', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Student', '1', 'BSIT', 'A', 'Absent'),
(6403, 16, 209, 'user_today', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Officer', '2', 'BSCE', 'B', 'Absent');

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
(9, '7', '2021-05-18', '00:29', 'jkgh', '675', 'Dinner', 'klghu', 'cghjtd'),
(10, '16', '2021-05-27', '10:34', 'Testing ni Prim', '12', 'Breakfast', 'Kwarto ni Prim', 'Sikka pansit ako ko'),
(11, '18', '2021-05-27', '22:06', 'Meeting', '315', 'Lunch', 'MM hall', 'extra toyo ni Grand');

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
(8, 16, 2333, 3323, 23233, 232323, 232323, 2212323, 23232, 232321, 2321, 232131, 'Di ko alam anong ilalagay sa purpose', 'Delivery boy', '2021-05-27', ''),
(9, 18, 65756, 343, 345, 3453, 3453445, 456345, 34534, 34534675, 4564564, 456456, 'wala lang', 'Clarete', '2021-05-27', ''),
(10, 19, 100000, 0, 0, 100000, 100000, 0, 100000, 100000, 0, 100000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu bibendum at varius vel pharetra vel turpis. ', 'Clarete', '2021-05-28', '');

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
  `trip_prmt_id` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`event_id`, `org_id`, `event_name`, `start_date`, `end_date`, `start_time`, `end_time`, `venue`, `event_description`, `remarks`, `statusxx`, `in_cmp_id`, `rsrv_cfr_id`, `csh_req_id`, `cat_req_id`, `trip_tkt_id`, `trip_prmt_id`) VALUES
(1, 1, 'Event 1', '2021-05-20', '2021-05-20', '16:49', '16:49', 'MM Hall', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Cursus risus at ultrices mi. Eu ultrices vitae auctor eu augue ut. Eu consequat ac felis donec et odio pellentesque diam.', 'Lorem ipsum dolor sit amet', 'Archived', '', '11', '', '', '', ''),
(7, 2, 'Event 2', '2021-05-07', '2021-05-07', '22:17', '22:17', 'Student Center', 'kinenenene', 'consectetur adipiscing elit', 'Archived', '', '13', '7', '', '', ''),
(8, 1, 'Event 3', '2021-02-03', '2021-05-09', '19:42', '19:43', 'LR103', 'Scelerisque in dictum non consectetur a erat nam at. Ut lectus arcu bibendum at varius vel pharetra vel. Id volutpat lacus laoreet non curabitur gravida arcu ac. Malesuada fames ac turpis egestas integer eget. Nibh ipsum consequat nisl vel pretium lectus quam.', '', 'Pending', '', '14', '', '', '', ''),
(10, 1, 'Event 4', '2021-05-20', '2021-05-20', '19:15', '19:15', 'LR106', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu augue ut lectus arcu bibendum at varius vel.', '', 'Archived', '', '', '', '', '', ''),
(11, 1, 'Event 5', '2021-05-20', '2021-05-20', '19:19', '19:19', 'University Gym', 'Duis convallis convallis tellus id interdum velit. Purus faucibus ornare suspendisse sed nisi. Lobortis feugiat vivamus at augue.', '', 'Archived', '', '', '', '', '', ''),
(12, 1, 'Event 6', '2021-05-20', '2021-05-20', '19:58', '19:58', 'SP Hall', 'Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Sagittis nisl rhoncus mattis rhoncus.', 'sed do eiusmod tempor', 'Archived', '', '', '', '', '', ''),
(13, 1, 'Event Yesterday', '2021-05-23', '2021-05-23', '20:07', '20:07', 'LRC', 'Tellus id interdum velit laoreet id donec ultrices tincidunt. Libero enim sed faucibus turpis in eu mi.', '', 'Archived', '', '', '', '', '', ''),
(14, 1, 'Event Today', '2021-05-24', '2021-05-24', '20:07', '20:07', 'Student Center', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', 'Archived', '', '', '', '', '', ''),
(15, 1, 'Event Tomorrrow', '2021-05-25', '2021-05-24', '20:08', '20:08', 'University Gym', 'Molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Aliquam sem fringilla ut morbi. Libero volutpat sed cras ornare arcu.', '', 'Archived', '', '', '', '', '', ''),
(16, 2, 'Event 9', '2021-05-27', '2021-05-27', '10:31', '10:31', 'BEU Gym', 'Dapat hindi magauto-absent today, bukas pwede na.', 'incididunt ut labore et', 'Archived', '', '15', '8', '', '', ''),
(17, 4, 'Event 10', '2021-05-28', '2021-05-28', '12:08', '12:08', 'BEU Gym', 'Aliquam sem fringilla ut morbi. Libero volutpat sed cras ornare arcu. Euismod in pellentesque massa placerat duis ultricies.', '', 'Approved', '', '', '', '', '', ''),
(18, 1, 'Event 11', '2021-05-30', '2021-05-31', '21:59', '21:59', 'Grandstand', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris in aliquam sem fringilla ut morbi tincidunt. Eu feugiat pretium nibh ipsum consequat nisl vel. Arcu dictum varius duis at consectetur.', 'Molestie ac feugiat sed lectus vestibulum mattis', 'Approved', '', '16', '9', '', '', ''),
(19, 1, 'Hyperlink', '2021-05-29', '2021-05-29', '13:44', '13:44', 'University Gym', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu bibendum at varius vel pharetra vel turpis. ', 'Change venue to Grandstand', 'Pending', '', '18', '10', '', '', '');

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
(92, 2, 2),
(93, 2, 3),
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
(7, 8, 'sdfgsdf', 'sdfgsdf', 'rtyrtt', 'tyhfgh', 'fghf', '2021-05-26', '12:45', 'hjg', 'fghjgh', 45, 4564),
(8, 16, 'Prim', 'Testing', 'testing nga yawa to', '', '', '2021-05-27', '10:36', '', 'Kwarto ni Prim', 12, 2332),
(9, 18, 'Juro', 'Meeting', 'Magmeeting nga', 'opsyon', '', '2021-05-27', '22:05', '', 'MM halll', 315, 6900),
(10, 19, 'Jonas Rivera', 'Seminar/Training/Workshop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu bibendum at varius vel pharetra vel turpis. ', '', '', '2021-05-28', '13:51', 'Vince Calimag', 'MM Hall', 315, 0);

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
(23, 1, 13, 'Governor'),
(24, 1, 18, 'Governor'),
(25, 1, 26, 'Adviser');

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
(1, 'Organization 1', 'Paulinian Student Government', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default mod', 'SITE'),
(2, 'Organization 2', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e but Id rather light my spliff life jacket thats the protocol', 'SBAHM'),
(4, 'Organization 3', 'Department-based', 'mauris ultrices eros in cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu nisl nunc mi ipsum', ''),
(5, 'Organization 4', 'Program-based', 'orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus risus at', ''),
(7, 'Organization 5', 'Department-based', 'sed risus pretium quam vulputate dignissim suspendisse in est ante in nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet', ''),
(11, 'Organization 6', 'Program-based', 'purus sit amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra magna ac placerat vestibulum lectus', ''),
(50, 'Organization 7', 'Department-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis volutpat est velit egestas. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Nisi scelerisque eu ultrices vitae auctor eu augue ut lectus.', ''),
(51, 'Organization 8', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor mi. Praesent blandit, lectus id maximus commodo, enim dolor euismod nisi, consequat interdum arcu odio a leo.', ''),
(55, 'Organization 9', 'Program-based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu bibendum at varius vel pharetra vel turpis. ', '');

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
(14, 8, 'asdasd', '4554', '34534', '345fg', '342', 2, 'yesgrg', '', '2021-05-20', '2021-05-20', '19:49', '19:49'),
(15, 16, 'Mema lang sa docs', '12', 'Prim', 'Wala lang', 'Ewan ko ba', 2300, 'Basta may electric fan', '', '2021-05-27', '2021-05-27', '10:33', '10:33'),
(16, 18, 'MM Hall', '315', 'Juro', 'Meeting', 'Clarete', 315, 'Chairs, tables, mics, speakers', '', '2021-05-27', '2021-05-27', '22:02', '22:02'),
(18, 19, 'Hyperlink', '315', 'ASd', 'asdasd asdasd', 'erase this', 2, 'asdasd asdasd', '', '2021-05-28', '2021-05-28', '20:07', '20:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_list`
--

CREATE TABLE `tbl_stud_list` (
  `stud_list_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `stud_name` varchar(65) NOT NULL,
  `year` varchar(65) NOT NULL,
  `program` varchar(65) NOT NULL,
  `section` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stud_list`
--

INSERT INTO `tbl_stud_list` (`stud_list_id`, `event_id`, `stud_name`, `year`, `program`, `section`) VALUES
(49, 7, 'juanor', '11', 'BSEnSE', 'A'),
(51, 16, 'eknib', '4', 'BSIT', 'wasak'),
(52, 16, 'orihj', '3', 'BSCE', 'tellem'),
(53, 19, 'Vince', '2', 'BSCpE', 'A');

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
(9, 19, 'Prm', 'LRC', 'asd', '2021-05-28', '2021-05-28', 'Representative of SPUP', '', '');

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
  `eta` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_trp_tckt`
--

INSERT INTO `tbl_trp_tckt` (`trp_tckt_id`, `event_id`, `request_unit`, `person`, `driver`, `vehicle`, `activity`, `date_use`, `dept_time`, `eta`) VALUES
(57, 7, 'SITE', 'maayos', 'lahat', 'dapat', 'asd', '2021-05-19', '02:33', '02:27'),
(58, 7, 'SITE', 'Jebel', 'Miguel', 'Gran', 'Disney+', '2021-05-19', '14:17', '14:17'),
(60, 16, 'SITE', 'prim', 'manong haime', 'bmw sedan', 'testing', '2021-05-27', '11:44', '11:44'),
(61, 18, 'SITE', 'Juro', 'Manong Haime', 'innova na tinted', 'Stroll w manong high me', '2021-05-27', '22:08', '22:08'),
(62, 19, 'SITE', 'Vince', 'Manong Haime', 'Sulat yung available na rides with plate no', 'Tree Planting', '2021-05-28', '13:55', '13:55');

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
  `matcher` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `contact_no`, `gender`, `user_type`, `time_stamp`, `year_level`, `program`, `section`, `archive`, `statusxx`, `counterxx`, `matcher`) VALUES
(1, 'user1', '8be52126a6fde450a7162a3651d589bb51e9579d', 'Chrystal', 'Reeves', 'chrystalR@gmail.co', '0932457953', 'Female', 'Dean', '', '', '', '', 0, 0, 0, ''),
(11, 'user2', 'pass', 'Anastasia ', 'Moss', 'anasmoss@flag.io', '935236545', 'Female', 'Adviser', '2021-04-16', '', '', '', 0, 0, 0, ''),
(12, 'norma', '8be52126a6fde450a7162a3651d589bb51e9579d', 'Norma', 'Lin', 'norma13@gma.il', '093457821', 'Female', 'Student', '2021-04-18', '3', 'BSIT', 'C', 0, 0, 0, ''),
(13, 'user3', 'pass', 'Coleman ', 'Howe', 'h_cole@world.co', '0943535673', 'Male', 'Officer', '2021-04-18', '3', 'BSCpE', 'B', 0, 0, 0, ''),
(14, 'user4', 'pass', 'Jack', 'Synderen', 'synderen@twit.ch', '0923565342', 'Male', 'Adviser', '2021-04-18', '', '', '', 0, 0, 0, ''),
(18, 'user5', 'pass', 'Francis', 'Tuliao', 'ptuliao@sagi.ru', '0908426542', 'Male', 'Officer', '2021-04-18', '2', 'BSCE', 'B', 0, 0, 0, ''),
(19, 'user6', 'pass', 'Graig ', 'Wairner', 'gwairner@g.co', '0927591400', 'Male', 'Student', '2021-04-18', '3', 'BSIT', '', 0, 0, 0, ''),
(20, 'user7', 'pass', 'Robin', 'Rosario', 'rrosario@syse.io', '09283342', 'Male', 'Officer', '2021-04-18', '2', 'BSCpE', 'B', 0, 0, 0, ''),
(21, 'user8', 'pass', 'Bryce ', 'Mahoney', 'mbryce@osdf.com', '0985649324', 'Male', 'Officer', '2021-04-18', '3', 'BSIT', '', 0, 0, 0, ''),
(22, 'user9', 'pass', 'Ellsworth', 'Howell', 'howellell@gmco.re', '0934256477', 'Male', 'Student', '2021-04-18', '1', 'BSEnSE', 'C', 0, 0, 0, ''),
(24, 'user10', 'fgh', 'Amara', 'Kent', 'kent_amara@hexa.on', '09765769035', 'Female', 'Student', '2021-05-23', '4', 'BSEnSE', 'A', 0, 0, 0, ''),
(25, 'user11', 'asdasd', 'Emily', ' Cotton', 'emily@cotton.ru', '09324436568', 'Female', 'Adviser', '2021-05-24', '', '', '', 0, 0, 0, ''),
(26, 'user12', 'asdgf', 'Brayden ', 'Parks', 'brayden21@park.io', '09052843465', 'Male', 'Adviser', '2021-05-24', '', '', '', 0, 0, 0, ''),
(28, 'user13', 'pass', 'Premium', 'Certificate', 'adsada@dfg', '345567523', 'Male', 'Student', '2021-05-26', '3', 'BSCpE', 'A', 0, 0, 0, ''),
(208, 'user14', 'pass', 'Caius ', 'Beck', 'cbeck99@check.me', '09478404500', 'Male', 'Student', '2021-05-27', '1', 'BSIT', 'A', 0, 0, 0, ''),
(209, 'user_today', 'de2a4d5751ab06dc4f987142db57c26d50925c8a', 'Jodi ', 'Akhtar', 'jakhtar@rubick.io', '0935504511', 'Female', 'Officer', '2021-05-28', '2', 'BSCE', 'B', 0, 0, 0, '');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attendee`
--
ALTER TABLE `tbl_attendee`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6437;

--
-- AUTO_INCREMENT for table `tbl_cat_req`
--
ALTER TABLE `tbl_cat_req`
  MODIFY `cat_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_csh_req`
--
ALTER TABLE `tbl_csh_req`
  MODIFY `csh_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `in_cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_officers`
--
ALTER TABLE `tbl_officers`
  MODIFY `off_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_orgs`
--
ALTER TABLE `tbl_orgs`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_programs`
--
ALTER TABLE `tbl_programs`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_rsrv_cfr`
--
ALTER TABLE `tbl_rsrv_cfr`
  MODIFY `rsrv_cfr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_stud_list`
--
ALTER TABLE `tbl_stud_list`
  MODIFY `stud_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_tra_prmt`
--
ALTER TABLE `tbl_tra_prmt`
  MODIFY `tra_prmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_trp_tckt`
--
ALTER TABLE `tbl_trp_tckt`
  MODIFY `trp_tckt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 07:01 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
  `event_image` varchar(65) NOT NULL,
  `prog_base` text NOT NULL,
  `school_year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`event_id`, `org_id`, `event_name`, `start_date`, `end_date`, `start_time`, `end_time`, `venue`, `event_description`, `remarks`, `statusxx`, `in_cmp_id`, `rsrv_cfr_id`, `csh_req_id`, `cat_req_id`, `trip_tkt_id`, `trip_prmt_id`, `event_image`, `prog_base`, `school_year`) VALUES
(1, 1, 'Hyperlink', '2022-05-27', '2022-05-20', '09:00', '21:00', 'Gymnasium', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus mauris a diam maecenas sed enim ut sem. Aenean sed adipiscing diam donec adipiscing tristique risus nec feugiat.', 'Approved', 'Archived', '', '', '', '', '', '', '73460743_465611770967915_1373363969544159232_n.jpg', '', ''),
(2, 1, 'Paulympics', '2022-05-25', '2022-05-25', '09:00', '12:00', 'Student Center', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor.', '', 'Approved', '', '', '', '', '', '', 'Paulympics-48.jpg', '', ''),
(3, 1, 'iHeart SITE', '2022-01-16', '2022-01-16', '13:00', '09:00', 'Grandstand', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum. Ut lectus arcu bibendum at varius.', '', 'Archived', '', '', '', '', '', '', 'IMG_20210710_060852.jpg', '', ''),
(4, 56, 'Students Assembly', '2021-06-16', '2021-06-16', '08:00', '12:00', 'Mere Madeline Hall', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum. Ut lectus arcu bibendum at varius.', '', 'Archived', '', '', '', '', '', '', '', '', ''),
(5, 56, 'Parents Assembly', '2021-06-19', '2021-06-19', '08:00', '12:00', 'Mere Madeline Hall', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum. Ut lectus arcu bibendum at varius.', '', 'Pending', '', '', '', '', '', '', '', '', ''),
(6, 56, 'Cyber Summit', '2022-03-01', '2022-05-17', '09:00', '12:00', 'Global Center', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum. Ut lectus arcu bibendum at varius.', '', 'Archived', '', '', '', '', '', '', '87843511_2613523468923691_6661022461053632512_n.jpg', '', ''),
(9, 51, 'Firelabs: Liyab', '2021-07-30', '2021-07-30', '09:57', '09:57', 'fggh', 'fgdhgdfhfgdhdfgh', '', 'Pending', '', '', '', '', '', '', '', 'Y', ''),
(10, 50, 'Infosession WIP', '2021-07-30', '2021-07-30', '10:00', '10:00', 'gyhj', 'zdrgsfthyjdtyjrtyh', '', 'Pending', '', '', '', '', '', '', '', '', ''),
(12, 51, 'Sing Along', '2021-07-30', '2022-05-18', '13:47', '13:47', 'df', 'sdfgsdfgsdf', '', 'Pending', '', '', '', '', '', '', 'daniel-leone-g30P1zcOzXo-unsplash.jpg', 'Y', '2018-2019'),
(13, 51, 'asdf', '2021-07-30', '2022-05-31', '14:03', '14:03', 'vsd', 'asdgasfg asdfasdf', '', 'Denied', '', '', '', '', '', '', '', 'Y', ''),
(15, 1, 'KOTLin 1: Light', '2021-07-30', '2022-05-19', '17:59', '17:59', 'bjkfyhjdfa', 'ffdgdfghfgbfcbfvdrvrg', '', 'Archived', '', '', '', '', '', '', '', '', ''),
(16, 1, 'Live Academy', '2021-07-30', '2021-07-30', '19:07', '19:07', 'adsfadsfsd', 'gdfsgsdfgsdf tyhgjgh erthdrghrtb dfg', '', 'Archived', '', '', '', '', '', '', '', '', ''),
(17, 56, 'asd', '2022-05-24', '2022-05-25', '23:56', '23:57', 'Korea', 'dfgdfg', '', 'Pending', '', '', '', '', '', '', '', '', '2018-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

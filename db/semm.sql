-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 05:57 PM
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
-- Table structure for table `tbl_docs`
--

CREATE TABLE `tbl_docs` (
  `doc_id` int(11) NOT NULL,
  `event_id` int(65) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_docs`
--

INSERT INTO `tbl_docs` (`doc_id`, `event_id`, `filename`) VALUES
(1, 0, 'Upload20220525476809.pdf'),
(2, 0, 'Upload20220525333282.pdf'),
(3, 0, 'Upload20220525897703.pdf'),
(4, 0, 'Upload20220525973112.pdf'),
(5, 0, 'Upload2022052541120.jpg'),
(6, 0, 'Upload2022052580623.jpg'),
(7, 0, 'Upload20220525951112.jpg'),
(8, 0, 'Upload20220525129765.jpg'),
(9, 0, 'Upload20220525926209.jpg'),
(10, 0, 'Upload20220525170320.docx'),
(11, 0, 'Upload20220525224291.jpg'),
(12, 0, 'Upload20220525773617.jpg'),
(13, 0, 'Upload20220525542182.jpg'),
(14, 0, 'Upload20220525548133.jpg'),
(15, 0, 'Upload20220525907631.jpg'),
(16, 0, 'Upload20220525542333.jpg'),
(18, 17, 'Upload20220525237680.jpg'),
(19, 17, 'Upload20220525798766.pdf'),
(20, 17, 'Upload20220525311435.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_docs`
--
ALTER TABLE `tbl_docs`
  ADD PRIMARY KEY (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_docs`
--
ALTER TABLE `tbl_docs`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

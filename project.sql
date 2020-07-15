-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 07:14 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `dddept`
--

CREATE TABLE `dddept` (
  `id` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dddept`
--

INSERT INTO `dddept` (`id`, `dept`) VALUES
(1, 'Engineering'),
(2, 'Management'),
(3, 'Science and Humanities'),
(4, 'Medical');

-- --------------------------------------------------------

--
-- Table structure for table `ddfaculty`
--

CREATE TABLE `ddfaculty` (
  `id` int(11) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ddfaculty`
--

INSERT INTO `ddfaculty` (`id`, `faculty`, `dept`) VALUES
(1, 'Mr. Abuyaseer A', 'Engineering'),
(2, 'Dr. C.N.S.Vinoth Kumar', 'Engineering'),
(3, 'S.SUBHASHINI', 'Engineering'),
(4, 'Dr.P.Venkataraman', 'Medical');

-- --------------------------------------------------------

--
-- Table structure for table `ddfrom`
--

CREATE TABLE `ddfrom` (
  `id` int(11) NOT NULL,
  `ddno` int(11) NOT NULL,
  `date` date NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `amount` float(20,2) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `name` int(11) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ddfrom`
--

INSERT INTO `ddfrom` (`id`, `ddno`, `date`, `purpose`, `amount`, `bank`, `name`, `regno`, `dept`, `faculty`, `year`, `datetime`) VALUES
(1, 1123, '2019-07-28', 'afds', 448.00, 'zdvz', 0, 'sedfvs', 'zdvzd', 'zcvx', 'cvxc', '2019-07-18 17:24:45'),
(2, 121, '2019-07-19', '...', 123.00, 'sdas', 0, 'dvcsd', '...', '...', '...', '2019-07-18 17:25:30'),
(3, 0, '0000-00-00', '', 0.00, '', 0, '', '', '', 'Yes', '2019-07-18 19:10:50'),
(4, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:40'),
(5, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:41'),
(6, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:42'),
(7, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:42'),
(8, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:42'),
(9, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:42'),
(10, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:42'),
(11, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:44'),
(12, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:44'),
(13, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:44'),
(14, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:44'),
(15, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:45'),
(16, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:45'),
(17, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:45'),
(18, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:45'),
(19, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:45'),
(20, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:45'),
(21, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:46'),
(22, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:46'),
(23, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:46'),
(24, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:46'),
(25, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:46'),
(26, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:46'),
(27, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:47'),
(28, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:47'),
(29, 1234, '2019-07-11', 'DD for Change of ID Card', 448.00, 'vhv', 0, 'hjb', 'Management', 'Dr. C.N.S.Vinoth Kumar', 'No', '2019-07-27 16:14:47'),
(30, 0, '0000-00-00', 'Select Purpose', 0.00, '', 0, '', 'Engineering', 'Select Faculty', 'Yes', '2019-07-29 09:27:44'),
(31, 0, '0000-00-00', 'Select Purpose', 0.00, '', 0, '', 'Select Department', 'Select Faculty', 'Yes', '2019-07-30 01:46:24'),
(32, 11111, '2019-07-14', 'asdfdfdfsdgsr', 448.00, '55465', 54654, '87987', 'Engineering', 'Mr. Abuyaseer A', 'Yes', '2019-07-30 03:21:11'),
(33, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:07'),
(34, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:10'),
(35, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:13'),
(36, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:38'),
(37, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:39'),
(38, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:40'),
(39, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:40'),
(40, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:40'),
(41, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:41'),
(42, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:42'),
(43, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:42'),
(44, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:42'),
(45, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:42'),
(46, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:42'),
(47, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:42'),
(48, 1239087, '2019-05-01', '', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:43'),
(49, 1239087, '2019-05-01', 'KJHNM ', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:47'),
(50, 1239087, '2019-05-01', 'KJHNM ', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:23:47'),
(51, 1239087, '2019-05-01', 'KJHNM ', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:29:29'),
(52, 1239087, '2019-05-01', 'KJHNM ', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:29:29'),
(53, 1239087, '2019-05-01', 'KJHNM ', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:29:29'),
(54, 1239087, '2019-05-01', 'KJHNM ', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:29:29'),
(55, 1239087, '2019-05-01', 'KJHNM ', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:29:30'),
(56, 1239087, '2019-05-01', 'KJHNM ', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:29:30'),
(57, 1239087, '2019-05-01', 'KJHNM ', 50000.00, 'sbi', 0, 'RA1711003010347', 'Engineering', 'Dr.P.Venkataraman', 'No', '2019-07-30 03:29:30'),
(58, 789, '2019-07-05', 'no purpose', 8979.00, 'cxcxcvxc', 0, 'RA11', 'Engineering', 'S.SUBHASHINI', 'No', '2019-07-30 03:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `ddpurpose`
--

CREATE TABLE `ddpurpose` (
  `id` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ddpurpose`
--

INSERT INTO `ddpurpose` (`id`, `purpose`) VALUES
(1, 'DD for Late Fees'),
(2, 'DD for Change of ID Card');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dddept`
--
ALTER TABLE `dddept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ddfaculty`
--
ALTER TABLE `ddfaculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ddfrom`
--
ALTER TABLE `ddfrom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ddpurpose`
--
ALTER TABLE `ddpurpose`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dddept`
--
ALTER TABLE `dddept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ddfaculty`
--
ALTER TABLE `ddfaculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ddfrom`
--
ALTER TABLE `ddfrom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `ddpurpose`
--
ALTER TABLE `ddpurpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

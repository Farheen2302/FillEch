-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2015 at 12:10 AM
-- Server version: 5.6.27
-- PHP Version: 5.6.4-4ubuntu6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE IF NOT EXISTS `achievement` (
  `ac_title` varchar(40) NOT NULL DEFAULT '',
  `p_id` int(11) NOT NULL DEFAULT '0',
  `ac_details` varchar(30) DEFAULT NULL,
  `updated_on` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`ac_title`, `p_id`, `ac_details`, `updated_on`) VALUES
('free medication to stray dogs', 2, 'stray dogs were treated of rab', '2015-10-02'),
('Free Treatment of 200 children', 1, '200 children were cured of pol', '2015-10-02'),
('hospital constructiom', 5, 'hospital was constructed for f', '2015-09-07'),
('movie', 4, 'movie ', '2015-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE IF NOT EXISTS `fund` (
  `bill_no` varchar(40) NOT NULL,
  `fund_amount` int(11) DEFAULT NULL,
  `fund_by` varchar(40) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `party_detail` varchar(40000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`bill_no`, `fund_amount`, `fund_by`, `p_id`, `party_detail`) VALUES
('12345', 50000, 'aditi mishra', 1, 'jamia mimllia islamia'),
('13BCS0001', 10, 'Asad Infotech', 5, 'gali no 1,\r\nabcd road,\r\nnew delhi'),
('13BCS0008', 100000, 'Maseera Ali foundation', 2, 'bhiwani haryana'),
('13BCS0009', 600, 'Irum Associates', 4, 'kota rajasthan'),
('13BCS6899', 100000, 'Aditi Group of technology', 1, 'new delhi india');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `p_id` int(11) NOT NULL DEFAULT '0',
  `add1` varchar(40) NOT NULL DEFAULT '',
  `add2` varchar(40) NOT NULL DEFAULT '',
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `pin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`p_id`, `add1`, `add2`, `city`, `state`, `pin`) VALUES
(1, 'Greater Noida', 'Hauz Khas', 'Ghaziabad', 'Uttarprasesh', 201012),
(2, 'Delhi', '', 'Delhi', '', 402920),
(4, 'Shikher enclave', '', '', 'Maharashtra', 402920),
(5, 'yumana bank', '', '', 'pune', 402920);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`p_id` int(11) NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `p_start_date` date DEFAULT NULL,
  `p_end_date` date DEFAULT NULL,
  `p_status` varchar(40) DEFAULT NULL,
  `p_budget` varchar(40) DEFAULT NULL,
  `p_details` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `p_name`, `p_start_date`, `p_end_date`, `p_status`, `p_budget`, `p_details`) VALUES
(1, 'project management', '2015-09-22', '2015-10-08', 'Finished', '5000', ''),
(2, 'demo project', '2015-06-11', NULL, 'In progress', '100000', 'kGDUDGWDW'),
(4, 'reaching hands', '2015-10-01', NULL, 'In progress', '2', 'we are going right'),
(5, 'child care', '2015-07-13', NULL, 'In progress', '30000', 'Child is the father of man ');

-- --------------------------------------------------------

--
-- Table structure for table `project_manager`
--

CREATE TABLE IF NOT EXISTS `project_manager` (
  `p_id` int(11) NOT NULL,
`pm_id` int(11) NOT NULL,
  `pm_name` varchar(40) NOT NULL,
  `pm_address` varchar(50) DEFAULT NULL,
  `pm_contact` varchar(40) NOT NULL,
  `pm_email` varchar(40) NOT NULL,
  `pm_sal` int(11) NOT NULL,
  `pm_doj` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_manager`
--

INSERT INTO `project_manager` (`p_id`, `pm_id`, `pm_name`, `pm_address`, `pm_contact`, `pm_email`, `pm_sal`, `pm_doj`) VALUES
(1, 1, 'Harish ', 'malviya nagar', '67676767', 'hthuwal@gmail.com', 100000000, '2015-10-04'),
(2, 2, 'Yusuf ', 'Jamia Hostel', '000007886', 'Yusufaslam@gmail.com', 1000000, '2015-10-04'),
(4, 3, 'Shermeen ', 'Jamia Hostel', '78787007886', 'Shermeenaslam@gmail.com', 1000000, '2015-10-04'),
(5, 4, 'Sayma ', 'faridabad', '787878888', 'Sayma@gmail.com', 59900000, '2015-10-04'),
(1, 5, 'rahul', 'werfert', '32434', 'swefre43', 3000, '2015-10-02'),
(1, 6, 'irum', 'sdfer', '999999', 'gsfegtbs', 3000, '2015-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `pm_id` int(11) NOT NULL DEFAULT '0',
  `v_id` int(11) NOT NULL DEFAULT '0',
  `task_name` varchar(40) NOT NULL DEFAULT '',
  `task_status` varchar(40) DEFAULT NULL,
  `date_of_sub` date DEFAULT NULL,
  `dead_line` date DEFAULT NULL,
  `task_detail` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`pm_id`, `v_id`, `task_name`, `task_status`, `date_of_sub`, `dead_line`, `task_detail`) VALUES
(3, 5, 'arranging teachers', 'running', '2015-10-01', '2015-10-23', 'teaching children in an ofphanage '),
(2, 3, 'campaign', 'done', '2015-10-01', '2015-10-23', 'campaign'),
(4, 5, 'distributing blankets', 'running', '2015-10-01', '2015-10-23', 'distributing blankets to poor '),
(1, 1, 'Finding Fanny', 'running', '2015-10-01', '2015-10-23', 'finding fanny in movie '),
(3, 4, 'teaching students', 'completed', '2015-10-01', '2015-10-23', 'teaching children in an ofphanage ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_name` varchar(40) NOT NULL,
  `u_email` varchar(40) DEFAULT NULL,
  `u_level` varchar(40) DEFAULT NULL,
  `u_password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `u_email`, `u_level`, `u_password`) VALUES
('aditi', 'aditimishra12@gmail.com', '1', '12345'),
('irum', 'aditimishra541@gmail.com', '2', 'abcd'),
('lakshita', 'lakshita32@gmail.com', '3', 'abef'),
('maseera', 'maseeraali28@gmail.com', '1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `p_id` int(11) NOT NULL,
`v_id` int(11) NOT NULL,
  `v_name` varchar(40) NOT NULL,
  `v_sex` varchar(40) DEFAULT NULL,
  `v_address` varchar(40) DEFAULT NULL,
  `v_contact` varchar(40) NOT NULL,
  `v_email` varchar(40) NOT NULL,
  `v_sal` int(11) NOT NULL,
  `v_doj` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`p_id`, `v_id`, `v_name`, `v_sex`, `v_address`, `v_contact`, `v_email`, `v_sal`, `v_doj`) VALUES
(1, 1, 'lakshita', 'female', 'Jamia Millia Islamia,Delhi', '12456789', 'lakshita32@gmail.com', 6000, '1996-10-20'),
(1, 2, 'asad', 'male', 'Jamia Millia Islamia,Delhi', '657484949', 'asad14@gmail.com', 7000, '1995-11-24'),
(2, 3, 'basit', 'male', 'Delhi University', '11111111', 'basit56@gmail.com', 8000, '1995-10-26'),
(4, 4, 'Saniya', 'female', 'Noida', '564738393', 'saniya99@gmail.com', 1000, '1994-10-26'),
(2, 5, 'Sharmin', 'female', 'Lucknow', '56667880030', 'sharmin99@gmail.com', 5000, '1994-01-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
 ADD PRIMARY KEY (`ac_title`,`p_id`,`updated_on`), ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
 ADD PRIMARY KEY (`bill_no`), ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`p_id`,`add1`,`add2`,`pin`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`p_id`), ADD UNIQUE KEY `p_name` (`p_name`);

--
-- Indexes for table `project_manager`
--
ALTER TABLE `project_manager`
 ADD PRIMARY KEY (`pm_id`), ADD UNIQUE KEY `pm_name` (`pm_name`), ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
 ADD PRIMARY KEY (`task_name`,`pm_id`,`v_id`), ADD KEY `pm_id` (`pm_id`), ADD KEY `v_id` (`v_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`u_name`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
 ADD PRIMARY KEY (`v_id`), ADD UNIQUE KEY `v_name` (`v_name`), ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `project_manager`
--
ALTER TABLE `project_manager`
MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievement`
--
ALTER TABLE `achievement`
ADD CONSTRAINT `achievement_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fund`
--
ALTER TABLE `fund`
ADD CONSTRAINT `fund_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_manager`
--
ALTER TABLE `project_manager`
ADD CONSTRAINT `project_manager_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`pm_id`) REFERENCES `project_manager` (`pm_id`),
ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`v_id`) REFERENCES `volunteer` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

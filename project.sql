-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2015 at 11:31 PM
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
  `p_id` varchar(40) NOT NULL DEFAULT '',
  `ac_details` varchar(30) DEFAULT NULL,
  `updated_on` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE IF NOT EXISTS `fund` (
  `bill_no` varchar(40) NOT NULL,
  `fund_amount` int(11) DEFAULT NULL,
  `fund_by` varchar(40) DEFAULT NULL,
  `p_id` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `p_id` varchar(40) NOT NULL DEFAULT '',
  `add1` varchar(40) NOT NULL DEFAULT '',
  `add2` varchar(40) NOT NULL DEFAULT '',
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `pin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `p_id` varchar(40) NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `p_start_date` date DEFAULT NULL,
  `p_end_date` date DEFAULT NULL,
  `p_status` varchar(40) DEFAULT NULL,
  `p_budget` varchar(40) DEFAULT NULL,
  `p_details` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_manager`
--

CREATE TABLE IF NOT EXISTS `project_manager` (
  `p_id` varchar(40) NOT NULL,
  `pm_id` varchar(40) NOT NULL,
  `pm_name` varchar(40) NOT NULL,
  `pm_sex` varchar(10) DEFAULT NULL,
  `pm_address` varchar(50) DEFAULT NULL,
  `pm_contact` varchar(40) NOT NULL,
  `pm_email` varchar(40) NOT NULL,
  `pm_sal` int(11) NOT NULL,
  `pm_doj` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `pm_id` varchar(40) NOT NULL DEFAULT '',
  `v_id` varchar(40) NOT NULL DEFAULT '',
  `task_name` varchar(40) NOT NULL DEFAULT '',
  `task_status` varchar(40) DEFAULT NULL,
  `date_of_sub` date DEFAULT NULL,
  `dead_line` date DEFAULT NULL,
  `task_detail` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` varchar(40) NOT NULL,
  `u_name` varchar(40) DEFAULT NULL,
  `u_email` varchar(40) DEFAULT NULL,
  `u_level` varchar(40) DEFAULT NULL,
  `u_password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `p_id` varchar(40) NOT NULL,
  `v_id` varchar(40) NOT NULL,
  `v_name` varchar(40) NOT NULL,
  `v_sex` varchar(40) DEFAULT NULL,
  `v_address` varchar(40) DEFAULT NULL,
  `v_contact` varchar(40) NOT NULL,
  `v_email` varchar(40) NOT NULL,
  `v_sal` int(11) NOT NULL,
  `v_doj` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `project_manager`
--
ALTER TABLE `project_manager`
 ADD PRIMARY KEY (`pm_id`), ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
 ADD PRIMARY KEY (`task_name`,`pm_id`,`v_id`), ADD KEY `pm_id` (`pm_id`), ADD KEY `v_id` (`v_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
 ADD PRIMARY KEY (`v_id`), ADD KEY `p_id` (`p_id`);

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

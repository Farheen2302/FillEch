-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `achievement`
--

DROP TABLE IF EXISTS `achievement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `achievement` (
  `ac_title` varchar(40) NOT NULL DEFAULT '',
  `p_id` int(11) NOT NULL DEFAULT '0',
  `ac_details` varchar(30) DEFAULT NULL,
  `updated_on` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`ac_title`,`p_id`,`updated_on`),
  KEY `p_id` (`p_id`),
  CONSTRAINT `achievement_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achievement`
--

LOCK TABLES `achievement` WRITE;
/*!40000 ALTER TABLE `achievement` DISABLE KEYS */;
INSERT INTO `achievement` VALUES ('saved a liter',2,'Save water','2015-11-01');
/*!40000 ALTER TABLE `achievement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expenses` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `detail` varchar(4000) DEFAULT NULL,
  `added_on` date NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `p_id` (`p_id`),
  CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expenses`
--

LOCK TABLES `expenses` WRITE;
/*!40000 ALTER TABLE `expenses` DISABLE KEYS */;
/*!40000 ALTER TABLE `expenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fund`
--

DROP TABLE IF EXISTS `fund`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fund` (
  `bill_no` varchar(40) NOT NULL,
  `fund_amount` int(11) DEFAULT NULL,
  `fund_by` varchar(40) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `party_detail` varchar(40000) NOT NULL,
  PRIMARY KEY (`bill_no`),
  KEY `p_id` (`p_id`),
  CONSTRAINT `fund_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fund`
--

LOCK TABLES `fund` WRITE;
/*!40000 ALTER TABLE `fund` DISABLE KEYS */;
/*!40000 ALTER TABLE `fund` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `add1` varchar(40) DEFAULT NULL,
  `add2` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  PRIMARY KEY (`l_id`),
  KEY `p_id` (`p_id`),
  CONSTRAINT `location_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (2,1,'gate no 1','jamia millia islamia','new delhi','new delhi',110025);
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(40) NOT NULL,
  `p_start_date` date DEFAULT NULL,
  `p_end_date` date DEFAULT NULL,
  `p_status` varchar(40) DEFAULT NULL,
  `p_budget` varchar(40) DEFAULT NULL,
  `p_details` varchar(400) NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_name` (`p_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (1,'Project Management','2015-09-22',NULL,'In progress','50000','try1'),(2,'Water water','2015-11-12',NULL,'In progress','1000','Water purification in India');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_manager`
--

DROP TABLE IF EXISTS `project_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_manager` (
  `p_id` int(11) NOT NULL,
  `pm_id` int(11) NOT NULL AUTO_INCREMENT,
  `pm_name` varchar(40) NOT NULL,
  `pm_address` varchar(50) DEFAULT NULL,
  `pm_contact` varchar(40) NOT NULL,
  `pm_email` varchar(40) NOT NULL,
  `pm_sal` int(11) NOT NULL,
  `pm_doj` date DEFAULT NULL,
  PRIMARY KEY (`pm_id`),
  UNIQUE KEY `pm_name` (`pm_name`),
  KEY `p_id` (`p_id`),
  CONSTRAINT `project_manager_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_manager`
--

LOCK TABLES `project_manager` WRITE;
/*!40000 ALTER TABLE `project_manager` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `pm_id` int(11) NOT NULL DEFAULT '0',
  `v_id` int(11) NOT NULL DEFAULT '0',
  `task_name` varchar(40) NOT NULL DEFAULT '',
  `task_status` varchar(40) DEFAULT NULL,
  `date_of_sub` date DEFAULT NULL,
  `dead_line` date DEFAULT NULL,
  `task_detail` varchar(4000) DEFAULT NULL,
  PRIMARY KEY (`task_name`,`pm_id`,`v_id`),
  KEY `pm_id` (`pm_id`),
  KEY `v_id` (`v_id`),
  CONSTRAINT `task_ibfk_1` FOREIGN KEY (`pm_id`) REFERENCES `project_manager` (`pm_id`),
  CONSTRAINT `task_ibfk_2` FOREIGN KEY (`v_id`) REFERENCES `volunteer` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `u_name` varchar(40) NOT NULL,
  `u_email` varchar(40) DEFAULT NULL,
  `u_level` varchar(40) DEFAULT NULL,
  `u_password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`u_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','admin123@gmail.com','1','12345'),('irum','sgrthrth','3','555'),('lakshita','lakshita12@gmial.com','3','1111');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteer` (
  `p_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(40) NOT NULL,
  `v_address` varchar(40) DEFAULT NULL,
  `v_contact` varchar(40) NOT NULL,
  `v_email` varchar(40) NOT NULL,
  `v_sal` int(11) NOT NULL,
  `v_doj` date DEFAULT NULL,
  PRIMARY KEY (`v_id`),
  UNIQUE KEY `v_name` (`v_name`),
  KEY `p_id` (`p_id`),
  CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteer`
--

LOCK TABLES `volunteer` WRITE;
/*!40000 ALTER TABLE `volunteer` DISABLE KEYS */;
INSERT INTO `volunteer` VALUES (1,2,'irum','try','555','sgrthrth',200,'2015-09-22');
/*!40000 ALTER TABLE `volunteer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-01 21:38:44

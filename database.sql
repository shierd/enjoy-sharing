-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: enjoy_sharing
-- ------------------------------------------------------
-- Server version	5.7.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES gbk */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `es_file`
--

DROP TABLE IF EXISTS `es_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `es_file` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(512) NOT NULL,
  `f_type` varchar(16) NOT NULL,
  `f_user` int(11) DEFAULT NULL,
  `f_uptime` datetime DEFAULT NULL,
  `f_tag` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `es_file`
--

LOCK TABLES `es_file` WRITE;
/*!40000 ALTER TABLE `es_file` DISABLE KEYS */;
INSERT INTO `es_file` VALUES (1,'ConoHa3.txt','txt',1,'2017-06-27 15:06:02',NULL),(2,'ConoHa2.txt','txt',1,'2017-06-27 15:09:46','qweer,eryqqw,rtuafg');
/*!40000 ALTER TABLE `es_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `es_tag`
--

DROP TABLE IF EXISTS `es_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `es_tag` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(32) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `es_tag`
--

LOCK TABLES `es_tag` WRITE;
/*!40000 ALTER TABLE `es_tag` DISABLE KEYS */;
INSERT INTO `es_tag` VALUES (1,'php'),(2,'asp'),(3,'jsp'),(4,'asffasf'),(5,'qweer'),(6,'eryqqw'),(7,'rtuafg');
/*!40000 ALTER TABLE `es_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `es_user`
--

DROP TABLE IF EXISTS `es_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `es_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(32) NOT NULL,
  `u_email` varchar(32) NOT NULL,
  `u_pass` varchar(32) NOT NULL,
  `u_home` varchar(32) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `es_user`
--

LOCK TABLES `es_user` WRITE;
/*!40000 ALTER TABLE `es_user` DISABLE KEYS */;
INSERT INTO `es_user` VALUES (1,'admin','admin@qq.com','admin','10001'),(2,'admin','admin@qq.com','admin','10002'),(3,'123456','cccc@qq.com','admin','10003');
/*!40000 ALTER TABLE `es_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-27 18:53:12

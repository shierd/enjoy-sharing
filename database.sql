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
  `f_intro` text,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `es_file`
--

LOCK TABLES `es_file` WRITE;
/*!40000 ALTER TABLE `es_file` DISABLE KEYS */;
INSERT INTO `es_file` VALUES (1,'ConoHa2.txt','txt',1,'2017-06-28 14:38:55','PHP,ASP,JSP',NULL),(2,'ConoHa1.txt','txt',1,'2017-06-28 14:39:34','ASPX,Hello,World',NULL),(3,'ConoHa0.txt','txt',1,'2017-06-28 14:40:16','HH,Good,Is',NULL),(4,'ConoHa5.txt','txt',1,'2017-06-28 14:41:08','ABC,Admin,Shen',NULL),(5,'ConoHa8.txt','txt',1,'2017-06-28 14:41:40','More,And,sql',NULL),(6,'ConoHa11.txt','txt',1,'2017-06-28 14:42:18','Zhou,Lun,Jie',NULL),(7,'ConoHa112.txt','txt',1,'2017-06-28 14:42:49','End,Finnished,Hi',NULL),(8,'ConoHa12.txt','txt',1,'2017-06-28 17:55:55','BB,DOTA,HA','Asd is sad dsafhk');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `es_tag`
--

LOCK TABLES `es_tag` WRITE;
/*!40000 ALTER TABLE `es_tag` DISABLE KEYS */;
INSERT INTO `es_tag` VALUES (1,'PHP'),(2,'ASP'),(3,'JSP'),(4,'ASPX'),(5,'Hello'),(6,'World'),(7,'HH'),(8,'Good'),(9,'Is'),(10,'ABC'),(11,'Admin'),(12,'Shen'),(13,'More'),(14,'And'),(15,'sql'),(16,'Zhou'),(17,'Lun'),(18,'Jie'),(19,'End'),(20,'Finnished'),(21,'Hi'),(22,'BB'),(23,'DOTA'),(24,'HA');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `es_user`
--

LOCK TABLES `es_user` WRITE;
/*!40000 ALTER TABLE `es_user` DISABLE KEYS */;
INSERT INTO `es_user` VALUES (1,'admin','admin@qq.com','admin','10001');
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

-- Dump completed on 2017-06-28 19:01:08

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `es_file`
--

LOCK TABLES `es_file` WRITE;
/*!40000 ALTER TABLE `es_file` DISABLE KEYS */;
INSERT INTO `es_file` VALUES (1,'ASPXspy2.aspx','aspx',1,'2017-06-30 09:11:02','aspx,injection,muma',''),(2,'boot.jpg','jpg',1,'2017-06-30 09:17:38','bootstrap,css,picture','A bootstrap picture...'),(3,'ConoHa.txt','txt',1,'2017-06-30 09:19:43','ConoHa,text,vps',''),(4,'dota.jpg','jpg',1,'2017-06-30 09:20:28','game,dota,picture','i love this game...'),(5,'hai.jpg','jpg',1,'2017-06-30 09:21:56','Comic,famous','i love to watch it...'),(6,'laravel.rar','rar',1,'2017-06-30 09:26:15','php,framework,goodCode','Love beautiful code? We do too.\r\n\r\nThe PHP Framework For Web Artisans\r\n'),(7,'mysql.class.php','php',1,'2017-06-30 09:27:29','',''),(8,'sqlmap.py','py',1,'2017-06-30 09:34:36','injection,database,python','automatic SQL injection and database takeover tool'),(9,'testHibernateList.jsp','jsp',1,'2017-06-30 09:35:06','Hibernate,jsp',''),(10,'thinkphp_3.2.3_full.zip','zip',1,'2017-06-30 09:36:07','php,framework','');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `es_tag`
--

LOCK TABLES `es_tag` WRITE;
/*!40000 ALTER TABLE `es_tag` DISABLE KEYS */;
INSERT INTO `es_tag` VALUES (1,'aspx'),(2,'injection'),(3,'muma'),(4,'bootstrap'),(5,'css'),(6,'picture'),(7,'ConoHa'),(8,'text'),(9,'vps'),(10,'game'),(11,'dota'),(12,'picture'),(13,'Comic'),(14,'famous'),(15,'php'),(16,'framework'),(17,'goodCode'),(18,''),(19,'injection'),(20,'database'),(21,'python'),(22,'Hibernate'),(23,'jsp'),(24,'php'),(25,'framework');
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

-- Dump completed on 2017-06-30  9:38:01

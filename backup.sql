-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: taxi
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `Admin`
--

DROP TABLE IF EXISTS `Admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typeadmin` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin`
--

LOCK TABLES `Admin` WRITE;
/*!40000 ALTER TABLE `Admin` DISABLE KEYS */;
INSERT INTO `Admin` VALUES (1,'dong','51353418249646dee7ff6b249ca2500bbc0cd9846df60620cc1d7cf04c33eab0','1');
/*!40000 ALTER TABLE `Admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Boss`
--

DROP TABLE IF EXISTS `Boss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Boss` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Boss`
--

LOCK TABLES `Boss` WRITE;
/*!40000 ALTER TABLE `Boss` DISABLE KEYS */;
/*!40000 ALTER TABLE `Boss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Infrienge`
--

DROP TABLE IF EXISTS `Infrienge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Infrienge` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `taxiID` int(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `details` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `taxiID` (`taxiID`),
  CONSTRAINT `Infrienge_ibfk_1` FOREIGN KEY (`taxiID`) REFERENCES `Taxi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Infrienge`
--

LOCK TABLES `Infrienge` WRITE;
/*!40000 ALTER TABLE `Infrienge` DISABLE KEYS */;
/*!40000 ALTER TABLE `Infrienge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PayCoin`
--

DROP TABLE IF EXISTS `PayCoin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PayCoin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type` int(1) NOT NULL COMMENT '-1:admin trừ tiền do vi phạm|0:mua chuyến|1:admin thêm coin',
  `taxiID` int(255) DEFAULT NULL,
  `tripID` int(255) DEFAULT NULL,
  `coin` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `details` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `taxiID` (`taxiID`),
  KEY `PayCoin_ibfk_2` (`tripID`),
  CONSTRAINT `PayCoin_ibfk_1` FOREIGN KEY (`taxiID`) REFERENCES `Taxi` (`id`),
  CONSTRAINT `PayCoin_ibfk_2` FOREIGN KEY (`tripID`) REFERENCES `Trip` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PayCoin`
--

LOCK TABLES `PayCoin` WRITE;
/*!40000 ALTER TABLE `PayCoin` DISABLE KEYS */;
/*!40000 ALTER TABLE `PayCoin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Taxi`
--

DROP TABLE IF EXISTS `Taxi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Taxi` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idcard` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idcar` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `typecar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seat` int(11) DEFAULT NULL,
  `coin` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `timelife` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1:lock|0:open',
  `idboss` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `phone` (`phone`),
  KEY `idboss` (`idboss`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Taxi`
--

LOCK TABLES `Taxi` WRITE;
/*!40000 ALTER TABLE `Taxi` DISABLE KEYS */;
INSERT INTO `Taxi` VALUES (1,'taxi_test','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','Taxi test','0949202294','123456789','123457',NULL,'bbb',5,100,NULL,'0000-00-00',0,NULL);
/*!40000 ALTER TABLE `Taxi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Trip`
--

DROP TABLE IF EXISTS `Trip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Trip` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addressfrom` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addressto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PNR` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `status` int(1) NOT NULL COMMENT '0:available|1:taken',
  `seat` int(11) DEFAULT NULL,
  `coin` int(11) DEFAULT NULL,
  `taxiid` int(255) DEFAULT NULL,
  `prioritize` int(255) DEFAULT NULL,
  `price` int(255) NOT NULL,
  `num_guess` int(255) NOT NULL,
  `is_round` int(1) NOT NULL COMMENT '1:yes|0:no',
  `details` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `userid` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `taxiid` (`taxiid`),
  KEY `prioritize` (`prioritize`),
  KEY `userid` (`userid`),
  CONSTRAINT `Trip_ibfk_1` FOREIGN KEY (`taxiid`) REFERENCES `Taxi` (`id`),
  CONSTRAINT `Trip_ibfk_2` FOREIGN KEY (`prioritize`) REFERENCES `Taxi` (`id`),
  CONSTRAINT `Trip_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Trip`
--

LOCK TABLES `Trip` WRITE;
/*!40000 ALTER TABLE `Trip` DISABLE KEYS */;
INSERT INTO `Trip` VALUES (2,'blah blah blah','01665135866','123, cau giay, ha noi','456, my dinh, ha noi','234','2017-08-31 11:11:11',0,4,100,NULL,NULL,300,4,0,'ytrgfytrgf',NULL,NULL),(3,'Le Thanh Trung','0949202294','123, cau giay, ha noi','456, my dinh, ha noi','234','2017-08-31 11:11:11',0,7,200,NULL,NULL,500,5,0,'tyhtr',NULL,NULL);
/*!40000 ALTER TABLE `Trip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-31  2:35:40

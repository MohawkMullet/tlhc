-- MySQL dump 10.11
--
-- Host: localhost    Database: tlhc
-- ------------------------------------------------------
-- Server version	5.0.51a

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
-- Table structure for table `commsLabel`
--

DROP TABLE IF EXISTS `commsLabel`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `commsLabel` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL COMMENT 'value will be the same as the option',
  `name` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `commsLabel`
--

LOCK TABLES `commsLabel` WRITE;
/*!40000 ALTER TABLE `commsLabel` DISABLE KEYS */;
INSERT INTO `commsLabel` VALUES (1,'is fully intact and like new','is fully intact and like new'),(2,' shows Very light ring wear',' shows Very light ring wear'),(3,'shows Light ring wear','shows Light ring wear'),(4,'has small paper tear','has small paper tear'),(5,'shows minimal wear','shows minimal wear'),(6,'shows price tag stain','shows price tag stain'),(14,'shows light wear either side','shows light wear either side'),(101,'has writing on one side','has writing on one side');
/*!40000 ALTER TABLE `commsLabel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commsMisc`
--

DROP TABLE IF EXISTS `commsMisc`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `commsMisc` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(400) NOT NULL,
  `name` varchar(400) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `commsMisc`
--

LOCK TABLES `commsMisc` WRITE;
/*!40000 ALTER TABLE `commsMisc` DISABLE KEYS */;
INSERT INTO `commsMisc` VALUES (1,'5 song EP','5 song EP'),(2,'4 Song EP','4 Song EP'),(3,'Stored in mylar protective clear outer jacket. ','Stored in mylar protective clear outer jacket. '),(16,'complete with lyric sheet','complete with lyric sheet'),(15,'fold open picture sleeve','fold open picture sleeve'),(14,'6 song EP','6 song EP'),(17,'black vinyl','black vinyl');
/*!40000 ALTER TABLE `commsMisc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commsPromo`
--

DROP TABLE IF EXISTS `commsPromo`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `commsPromo` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL,
  `name` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=514 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `commsPromo`
--

LOCK TABLES `commsPromo` WRITE;
/*!40000 ALTER TABLE `commsPromo` DISABLE KEYS */;
INSERT INTO `commsPromo` VALUES (1,'PromotionAL Copy both sides','Promotional Copy both sides'),(2,'PromotionAL Copy Not For Sale both sides','Promotional Copy Not For Sale both sides'),(3,'Promotion Copy Not For Sale both sides','Promotion Copy Not For Sale both sides'),(43,'Demonstration Not For Sale both sides.','Demonstration Not For Sale both sides.'),(56,'For Radio Station Use Only on both sides.','For Radio Station Use Only on both sides.'),(61,'Radio Station Copy and Not For Sale both sides.','Radio Station Copy and Not For Sale both sides.'),(77,'DJ Copy','DJ Copy'),(78,'DJ Copy both sides.  Plug Side on A','DJ Copy both sides.  Plug Side on A'),(500,'Not For Resale and Radio Station Copy both sides.','Not For Resale and Radio Station Copy both sides.'),(501,'Not For Sale on both sides with PLUG SIDE on A.','Not For Sale on both sides with PLUG SIDE on A.'),(6,'Promotion Not For Sale','Promotion Not For Sale'),(503,'Special Rush Service','Special Rush Service'),(4,'Promotion Record and Not For Sale both sides','Promotion Record and Not For Sale both  sides'),(19,'For Promotion Only and Not For Sale both sides','For Promotion Only and Not For Sale both sides'),(18,'Promo Copy and Not for Sale both sides','Promo Copy and Not for Sale both sides'),(20,'Plug Side on A','Plug Side on A'),(7,'promotion not for sale both sides','promotion not for sale both sides'),(21,'suggested side on a','suggested side on a'),(16,'promotion copy both sides','promotion copy both sides'),(79,'d. j. copy not for sale both sides','d. j. copy not for sale both sides'),(5,'Promotional Not For Sale both sides','Promotional Not For Sale both sides'),(511,'for promotional use only both sides','for promotional use only both sides'),(510,'audition record both sides','audition record both sides'),(512,'d.j. copy not to be sold both sides','d.j. copy not to be sold both sides');
/*!40000 ALTER TABLE `commsPromo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commsSleeve`
--

DROP TABLE IF EXISTS `commsSleeve`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `commsSleeve` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `commsSleeve`
--

LOCK TABLES `commsSleeve` WRITE;
/*!40000 ALTER TABLE `commsSleeve` DISABLE KEYS */;
INSERT INTO `commsSleeve` VALUES (1,'in is in M- condition','in is in M- condition'),(11,'is torn one side','is torn one side'),(10,'on sleeve','on sleeve'),(9,'has small tear','has small tear'),(12,'has small bends in corners','has small bends in corners');
/*!40000 ALTER TABLE `commsSleeve` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commsVinyl`
--

DROP TABLE IF EXISTS `commsVinyl`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `commsVinyl` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL COMMENT 'this is the value of the select form element',
  `name` varchar(200) default NULL COMMENT 'this is the name of the form element',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='comments about the vinyl condition';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `commsVinyl`
--

LOCK TABLES `commsVinyl` WRITE;
/*!40000 ALTER TABLE `commsVinyl` DISABLE KEYS */;
INSERT INTO `commsVinyl` VALUES (10,'Vinyl is in perfect condition. Probably Never Been Played','what ever'),(20,'This vinyl is in excellent condition','This vinyl is in excellent condition'),(30,'Very light wear on vinyl','Very light wear on vinyl'),(40,'vinyl shows Very light wear either side','vinyl shows Very light wear either side'),(52,'vinyl shows light wear either side','vinyl shows light wear either side'),(60,'vinyl shows light scuffs and wear either side','vinyl shows light scuffs and wear either side'),(53,'vinyl is in very good condition','vinyl is in very good condition'),(41,'A few very light marks on either side.  Does not affect play. ','A few very light marks on either side.  Does not affect play. '),(39,'vinyl shows a few very light marks','vinyl shows a few very light marks'),(21,'vinyl is in very nice condition','vinyl is in very nice condition'),(61,'plays without problems','plays without problems');
/*!40000 ALTER TABLE `commsVinyl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2008-12-18  3:25:23

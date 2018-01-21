-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: hospital
-- ------------------------------------------------------
-- Server version	5.7.16-log

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_pwd` varchar(40) NOT NULL,
  `power` int(1) NOT NULL,
  `admin_name` varchar(10) NOT NULL,
  `hos_code` int(10) NOT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `fk_admin_hospital` (`hos_code`),
  CONSTRAINT `fk_admin_hospital` FOREIGN KEY (`hos_code`) REFERENCES `hospital` (`hos_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('1','123456',1,'Ben',2),('2','123',1,'paul',1),('3','135',1,'Maogo',3),('4','134',1,'Tom',4),('5','234',1,'Jim',1),('6','1234',1,'Jack',2),('7','12356',1,'Jax',3),('8','2354',1,'Alice',4),('9','123',1,'Cojjj',6);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guahao`
--

DROP TABLE IF EXISTS `guahao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guahao` (
  `g_code` int(10) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(40) NOT NULL,
  `z_code` int(10) NOT NULL,
  `h_code` int(11) NOT NULL,
  `time` varchar(40) NOT NULL,
  `status` varchar(10) DEFAULT '待确认',
  `bingqing` varchar(266) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  PRIMARY KEY (`g_code`),
  KEY `fk_guahao_zhuanjia` (`z_code`),
  KEY `fk_guahao_huanzhe` (`h_code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guahao`
--

LOCK TABLES `guahao` WRITE;
/*!40000 ALTER TABLE `guahao` DISABLE KEYS */;
INSERT INTO `guahao` VALUES (1,'cojjj',12,1,'2018-01-01 09:00:00','医生请假，已取消','哈哈',0),(2,'paul',12,1,'2018-01-01 10:00:00','医生请假，已取消','222',0),(4,'daxia',37,1,'2018-01-03 09:00:00','待确认','好',0);
/*!40000 ALTER TABLE `guahao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hospital` (
  `hos_code` int(10) NOT NULL AUTO_INCREMENT,
  `hos_name` varchar(40) NOT NULL,
  `cant_code` varchar(6) NOT NULL,
  `level` varchar(6) NOT NULL,
  `addr` varchar(50) DEFAULT NULL,
  `hos_info` varchar(50) DEFAULT NULL,
  `hos_honor` varchar(45) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `hospitalcol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`hos_code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospital`
--

LOCK TABLES `hospital` WRITE;
/*!40000 ALTER TABLE `hospital` DISABLE KEYS */;
INSERT INTO `hospital` VALUES (1,'青岛大学附属医院','3702','三级甲等','东省青岛市江苏路15号','一所集医疗、教学、科研、预防、康复、业务技术指导为一体的三级综合医院。','连续三年跻身“中国最佳医院百强榜”。',12425246,NULL),(2,'青岛市市立医院','3702','三级甲等','山东省青岛市市南区东海中路6号','集医疗、教学、科研、保健疗养于一体的大型医院集团。','医院相继荣获全国卫生系统先进集体、全国创建文明行业工作先进单位等荣誉称号。',53282836450,NULL),(3,'青岛市中心医院','3702','三级甲等','山东省青岛市四方区四流南路127号','肩负着周边100万人口的医疗、预防、保健任务，承担青岛大学医学院本科生和硕士','建立了“急救绿色通道”，开展的陆、海、空立体',33333,NULL),(4,'山东大学齐鲁医院青岛院区','3702','三级甲等','山东省山东省青岛市市北区合肥路758号','山东大学齐鲁医院（青岛）是','二期项目运营后，山东大学齐鲁医院（青岛）的总床位数将达到2600张，停车位数将',53296599000,NULL),(5,'济南医院','3701','二级甲等','山东省济南市历山路','南医院始建于1975年 是济南市唯一的一家老年病和职业病医院，担负着全市老年病研究诊疗和职','医院连续多年获得济南市“文明单位”、“廉洁行医树新风活动”先进集体、老年工作“先进单',53158678100,NULL),(6,'山东省皮肤病医院','3701','三级乙等','山东省济南市经十路27397号','山东省皮肤病性病防治研究所暨山东省皮肤病医院始建于1955年，','医院先后被授予“全国卫生系统先进集体”、“全省卫生系统先进集体”、',1123123,NULL);
/*!40000 ALTER TABLE `hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `huanzhe`
--

DROP TABLE IF EXISTS `huanzhe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `huanzhe` (
  `h_code` varchar(10) NOT NULL,
  `h_name` varchar(40) NOT NULL,
  `h_pwd` varchar(40) NOT NULL,
  `id_card` bigint(100) NOT NULL DEFAULT '0',
  `c_count` int(11) DEFAULT '0',
  PRIMARY KEY (`h_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `huanzhe`
--

LOCK TABLES `huanzhe` WRITE;
/*!40000 ALTER TABLE `huanzhe` DISABLE KEYS */;
INSERT INTO `huanzhe` VALUES ('1','Shaw','111',423543197703164562,0),('10','hahaha','123',22,0),('2','Soctt','222',351156198006251364,4),('3','Reed','333',198463198704304863,0),('4','Powell','444',489632197903189832,0),('5','Porter','555',410883199305081350,0),('6','Perry','666',433586199003142583,0),('7','Payne','777',781347197311269753,0),('8','Kennedy','888',490385197701246420,0),('9','daxia','123',1111,1);
/*!40000 ALTER TABLE `huanzhe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keshi`
--

DROP TABLE IF EXISTS `keshi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keshi` (
  `k_code` int(10) NOT NULL AUTO_INCREMENT,
  `k_name` varchar(40) NOT NULL,
  `hos_code` int(10) NOT NULL,
  PRIMARY KEY (`k_code`),
  KEY `fk_keshi_hospital` (`hos_code`),
  CONSTRAINT `fk_keshi_hospital` FOREIGN KEY (`hos_code`) REFERENCES `hospital` (`hos_code`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keshi`
--

LOCK TABLES `keshi` WRITE;
/*!40000 ALTER TABLE `keshi` DISABLE KEYS */;
INSERT INTO `keshi` VALUES (1,'内科',1),(2,'外科',2),(3,'妇产科',3),(4,'儿科',4),(5,'中医科',1),(6,'肿瘤科',2),(7,'医学影像科',3),(8,'麻醉科',4),(9,'内科',2),(10,'内科',3),(11,'内科',4),(12,'外科',1),(13,'外科',3),(14,'外科',4),(15,'妇产科',1),(16,'妇产科',2),(17,'妇产科',4),(18,'儿科',1),(19,'儿科',2),(20,'儿科',3),(21,'中医科',2),(22,'中医科',3),(23,'中医科',4),(24,'肿瘤科',1),(25,'肿瘤科',3),(26,'肿瘤科',4),(27,'医学影像科',1),(28,'医学影像科',2),(29,'医学影像科',4),(30,'麻醉科',1),(31,'麻醉科',2),(32,'麻醉科',3),(33,'内科',5),(34,'外科',5),(35,'肿瘤科',5),(36,'麻醉科',5),(37,'医院影像科',5),(38,'外科',6),(39,'麻醉科',6),(40,'医院影像科',6);
/*!40000 ALTER TABLE `keshi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  `power` varchar(45) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'Ben','123456','1'),(2,'Paul','123','1'),(3,'Shaw','111','0'),(4,'Soctt','222','0'),(5,'Reed','333','0'),(6,'Powell','444','0'),(7,'Porter','555','0'),(8,'Perry','666','0'),(9,'Payne','777','0'),(10,'Kennedy','888','0'),(11,'Maogo','135','1'),(12,'Tom','134','1'),(13,'Jim','234','1'),(14,'Jack','1234','1'),(15,'Jax','12356','1'),(16,'Alice','2354','1'),(17,'Apple','123','3'),(18,'Banana','456','3'),(19,'James','543','3'),(20,'Graham  ','852','3'),(21,'Gordon','658','3'),(22,'Harper','345','3'),(23,'Gray','8523','3'),(24,'Grant','32168','3'),(25,'Long','1122','0'),(26,'Howell','1133','2'),(27,'Rosa','2222','2'),(28,'Harvay','3333','2'),(29,'May','123','2'),(30,'Ward','1673','2'),(31,'Lara','1346','2'),(32,'Murray','3144','2'),(33,'Milk','2111','2'),(34,'Sara','123','2'),(35,'Saul','33440','2'),(36,'Savage','44466','2'),(37,'Sandy','21113','2'),(38,'Martha','35785','2'),(39,'Marsh','56123','2'),(40,'Cahill','333134','2'),(41,'Camilla','78951','2'),(42,'Calvin','96331','2'),(43,'Candida','62376','2'),(44,'Candace','84613','2'),(45,'Capps','79684','2'),(46,'Carey','98453','2'),(47,'Carl','68123','2'),(48,'Carison','24633','2'),(49,'Hal','24255','2'),(50,'Hale','86421','2'),(51,'Ham','68120','2'),(52,'Hamlin','68233','2'),(53,'hahn','94212','2'),(54,'Kail','31415','2'),(55,'Kari','887532','2'),(56,'Kate','52245','2'),(57,'Mabel','84613','2'),(58,'Macy','14134','2'),(59,'Mae','68431','2'),(60,'Magda','64135','2'),(61,'Cojjj','123','1'),(62,'daxia','123','0'),(63,'Dance','3145','2'),(64,'David','13355','2'),(65,'Tyler','13552','2'),(66,'hahaha','123','0');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qingjia`
--

DROP TABLE IF EXISTS `qingjia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qingjia` (
  `q_code` int(11) NOT NULL AUTO_INCREMENT,
  `z_name` varchar(45) NOT NULL,
  `hos_name` varchar(45) NOT NULL,
  `time` varchar(40) NOT NULL,
  `status` varchar(45) DEFAULT '待确认',
  `reason` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`q_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qingjia`
--

LOCK TABLES `qingjia` WRITE;
/*!40000 ALTER TABLE `qingjia` DISABLE KEYS */;
INSERT INTO `qingjia` VALUES (1,'sara','青岛市中心医院','2018-01-03','已同意','哈哈哈'),(2,'Savage','青岛大学附属医院','2018-01-01','已同意','我不想干了');
/*!40000 ALTER TABLE `qingjia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `systemadmin`
--

DROP TABLE IF EXISTS `systemadmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `systemadmin` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `systemadmin`
--

LOCK TABLES `systemadmin` WRITE;
/*!40000 ALTER TABLE `systemadmin` DISABLE KEYS */;
INSERT INTO `systemadmin` VALUES (1,'Apple','123'),(2,'Banana','456'),(3,'James','543'),(4,'Graham','852'),(5,'Gordon','658'),(6,'Harper','345'),(7,'Gray','8523'),(8,'Grant','32168');
/*!40000 ALTER TABLE `systemadmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zhuanjia`
--

DROP TABLE IF EXISTS `zhuanjia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zhuanjia` (
  `z_code` int(11) NOT NULL AUTO_INCREMENT,
  `z_name` varchar(40) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `age` int(5) NOT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `field` varchar(40) DEFAULT NULL,
  `hos_code` int(10) NOT NULL,
  `k_code` int(10) NOT NULL,
  `z_jianjie` varchar(255) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `count` int(10) DEFAULT NULL,
  `fee` int(10) DEFAULT NULL,
  PRIMARY KEY (`z_code`),
  KEY `fk_zhuanjia_hospital` (`hos_code`),
  KEY `fk_zhuanjia_keshi` (`k_code`),
  CONSTRAINT `fk_zhuanjia_hospital` FOREIGN KEY (`hos_code`) REFERENCES `hospital` (`hos_code`),
  CONSTRAINT `fk_zhuanjia_keshi` FOREIGN KEY (`k_code`) REFERENCES `keshi` (`k_code`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zhuanjia`
--

LOCK TABLES `zhuanjia` WRITE;
/*!40000 ALTER TABLE `zhuanjia` DISABLE KEYS */;
INSERT INTO `zhuanjia` VALUES (2,'Howell','1',33,'专家','外科',2,2,'小有名气的外科医生',1,0,0),(3,'Rosa','2',34,'主任','妇产科',3,3,'妇科好手，有多次手术经验',5,0,0),(4,'Harvey','1',52,'主任','儿科',4,4,'儿科名气最高的人之一',5,0,0),(5,'May','2',37,'专家','肿瘤科',1,6,'肿瘤科好手',3,0,0),(6,'Ward','1',37,'专家','中医科',2,5,'中医科好手',3,0,0),(7,'Lara','2',38,'专家','麻醉科',3,8,'麻醉科好手',2,0,0),(8,'Murray','1',29,'专家','医院影像科',4,7,'医学影像科好手',4,0,0),(9,'Milk','1',32,'专家','内科',2,9,'内科好手，广受患者好评',1,0,0),(10,'Sara','2',45,'主任','内科',3,10,'内科好手',3,0,0),(11,'Saul','1',46,'主任','内科',4,11,'内科高手，经验极为丰富',2,0,0),(12,'Savage','1',27,'实习','外科',1,12,'外科新星',1,0,0),(13,'Sandy','1',33,'专家','外科',3,13,'外科好手',4,0,0),(14,'Martha','2',44,'主任','外科',4,14,'外科著名代表人物之一',5,0,0),(15,'Marsh','1',7,'主任','妇产科',1,15,'妇产科不可多得的男性剖腹产医生',2,0,0),(16,'Cahill','2',35,'专家','妇产科',2,16,'妇产科好手，广受各大患者信赖与好评',1,0,0),(17,'Camilla','2',46,'主任','妇产科',4,17,'妇产高手',5,0,0),(18,'Calvin','1',34,'专家','儿科',1,18,'儿科好手',1,0,0),(19,'Candida','2',35,'专家','儿科',2,19,'儿科好手，广受好评',2,0,0),(20,'Candace','2',26,'实习','儿科',3,20,'儿科新星，对孩子极有耐心',4,0,0),(21,'Capps','1',49,'主任','肿瘤科',2,24,'身经百战，有双老辣的眼睛，为人谨细，是肿瘤科不可多得之才',1,0,0),(22,'Carey','2',36,'专家','肿瘤科',3,25,'有丰富的实战经验，是个肿瘤科好手',5,0,0),(23,'Carl','1',37,'专家','肿瘤科',4,26,'肿瘤科好手',3,0,0),(24,'Carison','1',45,'主任','中医科',1,21,'中医科大师',2,0,0),(25,'Hal','1',34,'专家','中医科',3,22,'中医科好手，有丰富经验',4,0,0),(26,'Hale','1',29,'实习','中医科',4,23,'中医科新星',1,0,0),(27,'Ham','2',35,'专家','麻醉科',1,30,'麻醉科好手',5,0,0),(28,'Hamlin','1',29,'专家','麻醉科',2,31,'麻醉科好手',4,0,0),(29,'hahn','1',36,'专家','麻醉科',4,32,'麻醉科好手',2,0,0),(30,'Kail','2',35,'专家','医院影像科',1,27,'影像达人',5,0,0),(31,'Kari','1',39,'专家','医院影像科',2,28,'影像科好手',3,0,0),(32,'Kate','2',29,'实习','医院影像科',3,29,'影像科好手',2,0,0),(33,'Mabel','2',33,'专家','内科',5,33,'内科好手',3,0,0),(34,'Macy','2',29,'专家','外科',5,34,'外科好手',5,0,0),(35,'Mae','2',27,'实习','肿瘤科',5,35,'肿瘤科新星',2,0,0),(36,'Magda','2',36,'专家','外科',6,38,'外科好手',4,0,0),(37,'Dance','2',33,'专家','内科',1,5,'对自己很严厉',3,0,0),(38,'David','1',48,'专家','内科',1,1,'极其有名的内科高手',2,0,0),(39,'Tyler','1',32,'专家','内科',1,1,'内科好手',5,0,0),(40,'全蛋','1',56,NULL,'心脏类手术',1,1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `zhuanjia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'hospital'
--

--
-- Dumping routines for database 'hospital'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-01 17:48:29

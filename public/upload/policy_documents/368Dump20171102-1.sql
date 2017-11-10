-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 35.154.72.18    Database: pb_corporate
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `addons_master`
--

DROP TABLE IF EXISTS `addons_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addons_master` (
  `addon_id` int(11) NOT NULL AUTO_INCREMENT,
  `addon_name` varchar(200) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`addon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addons_master`
--

LOCK TABLES `addons_master` WRITE;
/*!40000 ALTER TABLE `addons_master` DISABLE KEYS */;
INSERT INTO `addons_master` VALUES (1,'STFI','2017-08-23 00:00:00'),(2,'EARTHQUAKE','2017-08-23 00:00:00'),(3,'TERRORISM','2017-08-23 00:00:00'),(4,'Escalation','2017-08-23 00:00:00'),(5,'Omission to Insure additions, alterations or extensions','2017-08-23 00:00:00'),(6,'Loss Of Rent clause','2017-08-23 00:00:00'),(7,'Insurance Of Additional Expenses of Rent For An Alternative Accommodation','2017-08-23 00:00:00'),(8,'Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)','2017-08-23 00:00:00'),(9,'Removal of Debris (in excess of 1% claim amount)','2017-08-23 00:00:00'),(10,'Spontaneous Combustion','2017-08-23 00:00:00'),(11,'Start up Expenses','2017-08-23 00:00:00'),(12,'Floater Clause','2017-08-23 00:00:00'),(13,'Impact Damage due to Insured\'s own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.','2017-08-23 00:00:00');
/*!40000 ALTER TABLE `addons_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asset_master`
--

DROP TABLE IF EXISTS `asset_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asset_master` (
  `asset_id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_name` varchar(500) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`asset_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asset_master`
--

LOCK TABLES `asset_master` WRITE;
/*!40000 ALTER TABLE `asset_master` DISABLE KEYS */;
INSERT INTO `asset_master` VALUES (1,'BUILDING (INCL. PLINTH & FOUNDATION)','2017-07-26 00:00:00'),(2,'PLINTH & FOUNDATION OF BUILDING','2017-07-26 00:00:00'),(3,'FFF','2017-07-26 00:00:00'),(4,'ELECTRIC FITTINGS','2017-07-26 00:00:00'),(5,'STOCK - FINISH, RM, SIP','2017-07-26 00:00:00'),(6,'OTHER CONTENTS**','2017-07-26 00:00:00'),(7,'STFI','2017-07-26 00:00:00'),(8,'Earthquake','2017-07-26 00:00:00'),(9,'Terrorism','2017-07-26 00:00:00'),(10,'Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)','2017-07-26 00:00:00'),(11,'Removal of Debris (in excess of 1% claim amount)','2017-07-26 00:00:00'),(12,'(A) Deterioration of Stocks in Cold Storage premises due to accidental power failure consequent to damage at the premises of Power Station due to an insured peril','2017-07-26 00:00:00'),(13,'(B) Deterioration of stocks in cold storage premises due to change in temperature arising out of loss or damage to the cold storage machinery(ies) in the Insured’s premises due to operation of insured peril.','2017-07-26 00:00:00'),(14,'Forest Fire','2017-07-26 00:00:00'),(15,'Impact Damage due to Insured’s own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.','2017-07-26 00:00:00'),(16,'Spontaneous Combustion','2017-07-26 00:00:00'),(17,'Ommission to insure additions, deletions etc','2017-07-26 00:00:00'),(18,'Spoilage Material Damage Cover for stocks','2017-07-26 00:00:00'),(19,'Spoilage Material Damage Cover for Plant and Machinery','2017-07-26 00:00:00'),(20,'Temporary Removal of Stocks Clause','2017-07-26 00:00:00'),(21,'Loss Of Rent clause ','2017-07-26 00:00:00'),(22,'Rent for alternative accomodation','2017-07-26 00:00:00'),(23,'Escalation','2017-07-26 00:00:00'),(24,'Start Up Expenses','2017-07-26 00:00:00'),(25,'Leakage Cover for tanks in insured\'s premises','2017-07-26 00:00:00'),(26,'Leakage Cover for tanks outside insured\'s premises','2017-07-26 00:00:00'),(27,'Contamination Cover for tanks outside insured\'s premises','2017-07-26 00:00:00'),(28,'Contamination Cover for tanks located else where','2017-07-26 00:00:00');
/*!40000 ALTER TABLE `asset_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch_master`
--

DROP TABLE IF EXISTS `branch_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branch_master` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(45) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch_master`
--

LOCK TABLES `branch_master` WRITE;
/*!40000 ALTER TABLE `branch_master` DISABLE KEYS */;
INSERT INTO `branch_master` VALUES (1,'Delhi','2017-09-15 10:35:27'),(2,'Pune','2017-09-15 10:35:27'),(3,'Mumbai','2017-09-15 10:35:27');
/*!40000 ALTER TABLE `branch_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bulk_upload`
--

DROP TABLE IF EXISTS `bulk_upload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bulk_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(500) NOT NULL,
  `name_of_insured` varchar(500) NOT NULL,
  `occupancy_business` varchar(500) NOT NULL,
  `policy_category` varchar(500) NOT NULL,
  `policy_type` varchar(500) NOT NULL,
  `renewal_date` varchar(50) NOT NULL,
  `current_insurer` varchar(500) NOT NULL,
  `sum_insured` decimal(65,0) NOT NULL,
  `pre_tax_premium` decimal(65,0) NOT NULL,
  `user_id` decimal(65,0) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bulk_upload`
--

LOCK TABLES `bulk_upload` WRITE;
/*!40000 ALTER TABLE `bulk_upload` DISABLE KEYS */;
INSERT INTO `bulk_upload` VALUES (5,'Ramani group','Ramani Hotels Limited','Hotel','Non Motor','Package Policy','2017-11-12 00:00:00','The New India Assurance',150000000,68631,5,1,'2017-10-07 06:23:56'),(6,'Ramani group','Ramee Hotels Pvt. Ltd.','Hotel','Non Motor','Package Policy','2017-11-12 00:00:00','The New India Assurance',633744000,251739,5,1,'2017-10-07 06:23:56');
/*!40000 ALTER TABLE `bulk_upload` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_age_band_mapping`
--

DROP TABLE IF EXISTS `company_age_band_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_age_band_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `age_bands` varchar(4000) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_age_band_mapping`
--

LOCK TABLES `company_age_band_mapping` WRITE;
/*!40000 ALTER TABLE `company_age_band_mapping` DISABLE KEYS */;
INSERT INTO `company_age_band_mapping` VALUES (1,5,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 06:46:35','2017-10-27 06:46:35'),(2,26,'0-35,36-45,46-55,56-65,66-70,71-75,76-80,81-90',1,'2017-10-27 07:17:31','2017-10-27 07:17:31'),(3,10,'0-35,36-45,46-55,56-65,66-70,71-75,76-80,81-85,>85',1,'2017-10-27 07:17:31','2017-10-27 07:17:31'),(4,6,'0-45,46-65,Above 65',1,'2017-10-27 07:17:31','2017-10-27 07:17:31'),(5,12,'0-35,36-45,46-55,56-65,66-70,71-75,76-80,>80',1,'2017-10-27 07:17:31','2017-10-27 07:17:31'),(6,8,'0-18,19-25,26-35,36-45,46-55,56-65,66-70,71-75,76-80',1,'2017-10-27 07:17:31','2017-10-27 07:17:31'),(7,13,'0-35,36-45,46-55,56-65,66-70,71-75',1,'2017-10-27 07:17:31','2017-10-27 07:17:31'),(8,3,'0-25,26-35,36-45,46-55,56-65,66-70,71-75,75-80',1,'2017-10-27 07:17:31','2017-10-27 07:17:31'),(9,1,'0-5,6-25,26-30,31-35,36-40,41-45,46-50,51-55,56-60,61-65,66-70',1,'2017-10-27 07:17:32','2017-10-27 07:17:32'),(10,4,'0-25,26-30,31-35,36-40,41-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:17:32','2017-10-27 07:17:32'),(11,2,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:46','2017-10-27 07:21:46'),(12,7,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(13,9,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(14,11,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(15,14,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(16,15,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(17,16,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(18,17,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(19,18,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(20,19,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(21,20,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(22,21,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47'),(23,22,'0-18,19-35,36-45,46-55,56-60,61-65,66-70,71-75,76-80',1,'2017-10-27 07:21:47','2017-10-27 07:21:47');
/*!40000 ALTER TABLE `company_age_band_mapping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_master`
--

DROP TABLE IF EXISTS `company_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_master` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) DEFAULT NULL,
  `discount_rate` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_master`
--

LOCK TABLES `company_master` WRITE;
/*!40000 ALTER TABLE `company_master` DISABLE KEYS */;
INSERT INTO `company_master` VALUES (1,'The New India Assurance Co. Ltd.',90,NULL,'2017-08-08 00:00:00'),(2,'The Oriental Insurance Co. Ltd.',80,NULL,'2017-08-08 00:00:00'),(3,'National Insurance Co. Ltd.',90,NULL,'2017-08-08 00:00:00'),(4,'United India Insurance Co. Ltd.',70,NULL,'2017-08-08 00:00:00'),(5,'ICICI Lombard General Insurance Co. Ltd.',89,NULL,'2017-08-08 00:00:00'),(6,'Bajaj Allianz General Insurance Co. Ltd.',79,NULL,'2017-08-08 00:00:00'),(7,'IFFCO Tokio General Insurance Co. Ltd.',60,NULL,'2017-08-08 00:00:00'),(8,'Reliance General Insurance Co. Ltd.',90,NULL,'2017-08-08 00:00:00'),(9,'Royal Sundaram General Insurance Co. Limited',90,NULL,'2017-08-08 00:00:00'),(10,'Tata AIG General Insurance Co. Ltd.',90,NULL,'2017-08-08 00:00:00'),(11,'Cholamandalam MS General Insurance Co. Ltd.',90,NULL,'2017-08-08 00:00:00'),(12,'HDFC ERGO General Insurance Co. Ltd.',90,NULL,'2017-08-08 00:00:00'),(13,'Future Generali India Insurance Company Limited',90,NULL,'2017-08-08 00:00:00'),(14,'Universal Sompo General Insurance Co. Ltd.',90,NULL,'2017-08-08 00:00:00'),(15,'Shriram General Insurance Company Limited',90,NULL,'2017-08-08 00:00:00'),(16,'Bharti AXA General Insurance Company Limited',90,NULL,'2017-08-08 00:00:00'),(17,'Raheja QBE General Insurance Company Limited',90,NULL,'2017-08-08 00:00:00'),(18,'SBI General Insurance Company Limited',90,NULL,'2017-08-08 00:00:00'),(19,'Liberty Videocon General Insurance Company Limited',90,NULL,'2017-08-08 00:00:00'),(20,'Magma HDI General Insurance Company Limited',90,NULL,'2017-08-08 00:00:00'),(21,'Liberty Videocon General Insurance Company Limited',90,NULL,'2017-08-08 00:00:00'),(22,'Kotak Mahindra General Insurance Company Limited',90,NULL,'2017-08-08 00:00:00'),(23,'Religare Health Insurance Co. Ltd',90,5,'2017-10-09 06:59:21');
/*!40000 ALTER TABLE `company_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_slab_mapping`
--

DROP TABLE IF EXISTS `company_slab_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_slab_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `company_slabs` varchar(1000) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_slab_mapping`
--

LOCK TABLES `company_slab_mapping` WRITE;
/*!40000 ALTER TABLE `company_slab_mapping` DISABLE KEYS */;
INSERT INTO `company_slab_mapping` VALUES (1,1,'100000,125000,150000,175000,200000,225000,250000,275000,300000,350000,400000,450000,500000',1,'2017-10-27 07:28:10',NULL),(2,2,'100000,200000,300000,400000,500000',1,'2017-10-27 07:37:51',NULL),(3,3,'50000,100000,150000,200000,250000,300000,400000,500000',1,'2017-10-27 07:37:51',NULL),(4,4,'50000,75000,100000,125000,150000,175000,200000,225000,250000,275000,300000,325000,350000,375000,400000,425000,450000,475000,500000',1,'2017-10-27 07:37:51',NULL),(5,5,'100000,200000,300000,400000,500000',1,'2017-10-27 07:37:51',NULL),(6,6,'100000,150000,200000,250000,300000,350000,400000,450000,500000',1,'2017-10-27 07:37:51',NULL),(7,7,'100000,200000,300000,400000,500000',1,'2017-10-27 07:37:51',NULL),(8,8,'100000,200000,300000,400000,500000',1,'2017-10-27 07:37:51',NULL),(9,9,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(10,10,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(11,11,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(12,12,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(13,13,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(14,14,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(15,15,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(16,16,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(17,17,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(18,18,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:45',NULL),(19,19,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:46',NULL),(20,20,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:46',NULL),(21,21,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:46',NULL),(22,22,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:46',NULL),(23,26,'100000,200000,300000,400000,500000',1,'2017-10-27 09:03:46',NULL);
/*!40000 ALTER TABLE `company_slab_mapping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districtwise_zone_master`
--

DROP TABLE IF EXISTS `districtwise_zone_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `districtwise_zone_master` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(100) DEFAULT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB AUTO_INCREMENT=524 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districtwise_zone_master`
--

LOCK TABLES `districtwise_zone_master` WRITE;
/*!40000 ALTER TABLE `districtwise_zone_master` DISABLE KEYS */;
INSERT INTO `districtwise_zone_master` VALUES (1,'West Godavari',3,2,NULL,'2017-07-21 00:00:00',NULL),(2,'Krishna',3,2,NULL,'2017-07-21 00:00:00',NULL),(3,'Khammam',3,2,NULL,'2017-07-21 00:00:00',NULL),(4,'Warangal',3,2,NULL,'2017-07-21 00:00:00',NULL),(5,'Karimnagar',3,2,NULL,'2017-07-21 00:00:00',NULL),(6,'Anantapur',3,2,NULL,'2017-07-21 00:00:00',NULL),(7,'Chitoor',4,2,NULL,'2017-07-21 00:00:00',NULL),(8,'Nellore',4,2,NULL,'2017-07-21 00:00:00',NULL),(9,'Cuddapah',4,2,NULL,'2017-07-21 00:00:00',NULL),(10,'Kurnool',4,2,NULL,'2017-07-21 00:00:00',NULL),(11,'Mahboobnagar',4,2,NULL,'2017-07-21 00:00:00',NULL),(12,'Ranga Reddy',4,2,NULL,'2017-07-21 00:00:00',NULL),(13,'Medak',4,2,NULL,'2017-07-21 00:00:00',NULL),(14,'Nizamabad',4,2,NULL,'2017-07-21 00:00:00',NULL),(15,'Adilabad',4,2,NULL,'2017-07-21 00:00:00',NULL),(16,'Nalgonda',4,2,NULL,'2017-07-21 00:00:00',NULL),(17,'Prakasam',4,2,NULL,'2017-07-21 00:00:00',NULL),(18,'East Godavari',4,2,NULL,'2017-07-21 00:00:00',NULL),(19,'Visakhapatnam',4,2,NULL,'2017-07-21 00:00:00',NULL),(20,'Guntur',4,2,NULL,'2017-07-21 00:00:00',NULL),(21,'Vizianagarm',4,2,NULL,'2017-07-21 00:00:00',NULL),(22,'Srikakulam',4,2,NULL,'2017-07-21 00:00:00',NULL),(23,'Hyderabad',4,2,NULL,'2017-07-21 00:00:00',NULL),(24,'Pondicherry',4,2,NULL,'2017-07-21 00:00:00',NULL),(25,'Sitamarhi',1,5,NULL,'2017-07-21 00:00:00',NULL),(26,'Madhubani',1,5,NULL,'2017-07-21 00:00:00',NULL),(27,'Darbhanga',1,5,NULL,'2017-07-21 00:00:00',NULL),(28,'Saharsa',1,5,NULL,'2017-07-21 00:00:00',NULL),(29,'Purnia',2,5,NULL,'2017-07-21 00:00:00',NULL),(30,'Champaran (East)',2,5,NULL,'2017-07-21 00:00:00',NULL),(31,'Champaran (West)',2,5,NULL,'2017-07-21 00:00:00',NULL),(32,'Katihar',2,5,NULL,'2017-07-21 00:00:00',NULL),(33,'Bighusarai',2,5,NULL,'2017-07-21 00:00:00',NULL),(34,'Samastipur',2,5,NULL,'2017-07-21 00:00:00',NULL),(35,'Muzaffarpur',2,5,NULL,'2017-07-21 00:00:00',NULL),(36,'Gopalganj',2,5,NULL,'2017-07-21 00:00:00',NULL),(37,'Siwan',2,5,NULL,'2017-07-21 00:00:00',NULL),(38,'Saran',2,5,NULL,'2017-07-21 00:00:00',NULL),(39,'Vaishali',2,5,NULL,'2017-07-21 00:00:00',NULL),(40,'Nalanda',2,5,NULL,'2017-07-21 00:00:00',NULL),(41,'Patna',2,5,NULL,'2017-07-21 00:00:00',NULL),(42,'Monghyr',2,5,NULL,'2017-07-21 00:00:00',NULL),(43,'Bhagalpur',2,5,NULL,'2017-07-21 00:00:00',NULL),(44,'Santhal pragana',3,5,NULL,'2017-07-21 00:00:00',NULL),(45,'Bhojpur',3,5,NULL,'2017-07-21 00:00:00',NULL),(46,'Rohtas',3,5,NULL,'2017-07-21 00:00:00',NULL),(47,'Gaya',3,5,NULL,'2017-07-21 00:00:00',NULL),(48,'Aurangabad',3,5,NULL,'2017-07-21 00:00:00',NULL),(49,'Surguja',3,6,NULL,'2017-07-21 00:00:00',NULL),(50,'Raigarh',3,6,NULL,'2017-07-21 00:00:00',NULL),(51,'Muhasmud',3,6,NULL,'2017-07-21 00:00:00',NULL),(52,'Jashpur',3,6,NULL,'2017-07-21 00:00:00',NULL),(53,'Bastar',4,6,NULL,'2017-07-21 00:00:00',NULL),(54,'Bilaspur',4,6,NULL,'2017-07-21 00:00:00',NULL),(55,'Durg',4,6,NULL,'2017-07-21 00:00:00',NULL),(56,'Raipur',4,6,NULL,'2017-07-21 00:00:00',NULL),(57,'Kavardha',4,6,NULL,'2017-07-21 00:00:00',NULL),(58,'West Surguja',4,6,NULL,'2017-07-21 00:00:00',NULL),(59,'Rajnandgaon',4,6,NULL,'2017-07-21 00:00:00',NULL),(60,'Korba',4,6,NULL,'2017-07-21 00:00:00',NULL),(61,'Dantewara',4,6,NULL,'2017-07-21 00:00:00',NULL),(62,'Dhamtari',4,6,NULL,'2017-07-21 00:00:00',NULL),(63,'Janjgir',4,6,NULL,'2017-07-21 00:00:00',NULL),(64,'Kanker',4,6,NULL,'2017-07-21 00:00:00',NULL),(65,'Katch',1,12,NULL,'2017-07-21 00:00:00',NULL),(66,'Jamnagar',2,12,NULL,'2017-07-21 00:00:00',NULL),(67,'Rajkot',3,12,NULL,'2017-07-21 00:00:00',NULL),(68,'Surendernagar',3,12,NULL,'2017-07-21 00:00:00',NULL),(69,'Mehsana',3,12,NULL,'2017-07-21 00:00:00',NULL),(70,'Banaskantha',3,12,NULL,'2017-07-21 00:00:00',NULL),(71,'Sabarkantha',3,12,NULL,'2017-07-21 00:00:00',NULL),(72,'Panchmaha',3,12,NULL,'2017-07-21 00:00:00',NULL),(73,'Baroda',3,12,NULL,'2017-07-21 00:00:00',NULL),(74,'Kheda',3,12,NULL,'2017-07-21 00:00:00',NULL),(75,'Ahmedabad',3,12,NULL,'2017-07-21 00:00:00',NULL),(76,'Bhavnagar',3,12,NULL,'2017-07-21 00:00:00',NULL),(77,'Amreli',3,12,NULL,'2017-07-21 00:00:00',NULL),(78,'Junagadh',3,12,NULL,'2017-07-21 00:00:00',NULL),(79,'Bharuch',3,12,NULL,'2017-07-21 00:00:00',NULL),(80,'Surat',3,12,NULL,'2017-07-21 00:00:00',NULL),(81,'Valsad',3,12,NULL,'2017-07-21 00:00:00',NULL),(82,'Dang (Ahwa)',3,12,NULL,'2017-07-21 00:00:00',NULL),(83,'Gandhinagar',3,12,NULL,'2017-07-21 00:00:00',NULL),(84,'Union Territories-of Diu',3,12,NULL,'2017-07-21 00:00:00',NULL),(85,'Daman',3,12,NULL,'2017-07-21 00:00:00',NULL),(86,'Dadra and Nagar Haveli',3,12,NULL,'2017-07-21 00:00:00',NULL),(87,'Ambala',2,14,NULL,'2017-07-21 00:00:00',NULL),(88,'Sonepat',2,14,NULL,'2017-07-21 00:00:00',NULL),(89,'Rohtak',2,14,NULL,'2017-07-21 00:00:00',NULL),(90,'Karnal',2,14,NULL,'2017-07-21 00:00:00',NULL),(91,'Gurgaon',2,14,NULL,'2017-07-21 00:00:00',NULL),(92,'Faridabad',2,14,NULL,'2017-07-21 00:00:00',NULL),(93,'Panipat',2,14,NULL,'2017-07-21 00:00:00',NULL),(94,'Rewari',2,14,NULL,'2017-07-21 00:00:00',NULL),(95,'Yamunanagar',2,14,NULL,'2017-07-21 00:00:00',NULL),(96,'Kurukshetra',3,14,NULL,'2017-07-21 00:00:00',NULL),(97,'Jind',3,14,NULL,'2017-07-21 00:00:00',NULL),(98,'Hissar',3,14,NULL,'2017-07-21 00:00:00',NULL),(99,'Bhiwani',3,14,NULL,'2017-07-21 00:00:00',NULL),(100,'Mahendragarh',3,14,NULL,'2017-07-21 00:00:00',NULL),(101,'Kaithal',3,14,NULL,'2017-07-21 00:00:00',NULL),(102,'Sirsa',4,14,NULL,'2017-07-21 00:00:00',NULL),(103,'Chamba',1,13,NULL,'2017-07-21 00:00:00',NULL),(104,'Kullu',1,13,NULL,'2017-07-21 00:00:00',NULL),(105,'Kangra',1,13,NULL,'2017-07-21 00:00:00',NULL),(106,'Una',1,13,NULL,'2017-07-21 00:00:00',NULL),(107,'Hamirpur',1,13,NULL,'2017-07-21 00:00:00',NULL),(108,'Mandi',1,13,NULL,'2017-07-21 00:00:00',NULL),(109,'Bilaspur',1,13,NULL,'2017-07-21 00:00:00',NULL),(110,'Lahul and Spiti',2,13,NULL,'2017-07-21 00:00:00',NULL),(111,'Kinnaur',2,13,NULL,'2017-07-21 00:00:00',NULL),(112,'Shimla',2,13,NULL,'2017-07-21 00:00:00',NULL),(113,'Solan',2,13,NULL,'2017-07-21 00:00:00',NULL),(114,'Sirmaur',2,13,NULL,'2017-07-21 00:00:00',NULL),(115,'Baramula',1,15,NULL,'2017-07-21 00:00:00',NULL),(116,'Srinagar',1,15,NULL,'2017-07-21 00:00:00',NULL),(117,'Gilgit',2,15,NULL,'2017-07-21 00:00:00',NULL),(118,'Chilas',2,15,NULL,'2017-07-21 00:00:00',NULL),(119,'Gilgit Wazarat',2,15,NULL,'2017-07-21 00:00:00',NULL),(120,'Muzaffarabad',2,15,NULL,'2017-07-21 00:00:00',NULL),(121,'Punch',2,15,NULL,'2017-07-21 00:00:00',NULL),(122,'Anantnag',2,15,NULL,'2017-07-21 00:00:00',NULL),(123,'Mirapur',2,15,NULL,'2017-07-21 00:00:00',NULL),(124,'Riasi',2,15,NULL,'2017-07-21 00:00:00',NULL),(125,'Udhampur',2,15,NULL,'2017-07-21 00:00:00',NULL),(126,'Jammu',2,15,NULL,'2017-07-21 00:00:00',NULL),(127,'Kathua',2,15,NULL,'2017-07-21 00:00:00',NULL),(128,'Leh',2,15,NULL,'2017-07-21 00:00:00',NULL),(129,'Tribal Territory',2,15,NULL,'2017-07-21 00:00:00',NULL),(130,'Hazirabagh',3,16,NULL,'2017-07-21 00:00:00',NULL),(131,'Palamau',3,16,NULL,'2017-07-21 00:00:00',NULL),(132,'Giridh',3,16,NULL,'2017-07-21 00:00:00',NULL),(133,'Dhandbad',3,16,NULL,'2017-07-21 00:00:00',NULL),(134,'Sahibganj',3,16,NULL,'2017-07-21 00:00:00',NULL),(135,'Pakaur',3,16,NULL,'2017-07-21 00:00:00',NULL),(136,'Lohardaga',3,16,NULL,'2017-07-21 00:00:00',NULL),(137,'Koderma',3,16,NULL,'2017-07-21 00:00:00',NULL),(138,'Godda',3,16,NULL,'2017-07-21 00:00:00',NULL),(139,'Garwah',3,16,NULL,'2017-07-21 00:00:00',NULL),(140,'Dumka',3,16,NULL,'2017-07-21 00:00:00',NULL),(141,'Deogarh',3,16,NULL,'2017-07-21 00:00:00',NULL),(142,'Chatra',3,16,NULL,'2017-07-21 00:00:00',NULL),(143,'Bokaro',3,16,NULL,'2017-07-21 00:00:00',NULL),(144,'Ranchi',4,16,NULL,'2017-07-21 00:00:00',NULL),(145,'East Singhbhum',4,16,NULL,'2017-07-21 00:00:00',NULL),(146,'West Singhbhum',4,16,NULL,'2017-07-21 00:00:00',NULL),(147,'Gumla',4,16,NULL,'2017-07-21 00:00:00',NULL),(148,'Dakshin Kannad',3,18,NULL,'2017-07-21 00:00:00',NULL),(149,'Belgaum',4,18,NULL,'2017-07-21 00:00:00',NULL),(150,'Bijapur',4,18,NULL,'2017-07-21 00:00:00',NULL),(151,'Bidar',4,18,NULL,'2017-07-21 00:00:00',NULL),(152,'Gulbarga',4,18,NULL,'2017-07-21 00:00:00',NULL),(153,'Raichur',4,18,NULL,'2017-07-21 00:00:00',NULL),(154,'Bellary',4,18,NULL,'2017-07-21 00:00:00',NULL),(155,'Dharwad',4,18,NULL,'2017-07-21 00:00:00',NULL),(156,'Shimoga',4,18,NULL,'2017-07-21 00:00:00',NULL),(157,'Chitradurga',4,18,NULL,'2017-07-21 00:00:00',NULL),(158,'Chikmagalur',4,18,NULL,'2017-07-21 00:00:00',NULL),(159,'Tumkur',4,18,NULL,'2017-07-21 00:00:00',NULL),(160,'Hassan',4,18,NULL,'2017-07-21 00:00:00',NULL),(161,'Bangalore',4,18,NULL,'2017-07-21 00:00:00',NULL),(162,'Kolar',4,18,NULL,'2017-07-21 00:00:00',NULL),(163,'Kodagu',4,18,NULL,'2017-07-21 00:00:00',NULL),(164,'Mandya',4,18,NULL,'2017-07-21 00:00:00',NULL),(165,'Mysore',4,18,NULL,'2017-07-21 00:00:00',NULL),(166,'Uttar Kannnad',4,18,NULL,'2017-07-21 00:00:00',NULL),(167,'West Nimar',3,23,NULL,'2017-07-21 00:00:00',NULL),(168,'East Nimar',3,23,NULL,'2017-07-21 00:00:00',NULL),(169,'Betul',3,23,NULL,'2017-07-21 00:00:00',NULL),(170,'Chhindwara',3,23,NULL,'2017-07-21 00:00:00',NULL),(171,'Hoshangabad',3,23,NULL,'2017-07-21 00:00:00',NULL),(172,'Raisen',3,23,NULL,'2017-07-21 00:00:00',NULL),(173,'Narsimhapur',3,23,NULL,'2017-07-21 00:00:00',NULL),(174,'Jabalpur',3,23,NULL,'2017-07-21 00:00:00',NULL),(175,'Shahdul',3,23,NULL,'2017-07-21 00:00:00',NULL),(176,'Sidhi',3,23,NULL,'2017-07-21 00:00:00',NULL),(177,'Balaghat',4,23,NULL,'2017-07-21 00:00:00',NULL),(178,'Bhind',4,23,NULL,'2017-07-21 00:00:00',NULL),(179,'Bhopal',4,23,NULL,'2017-07-21 00:00:00',NULL),(180,'Chhatarpur',4,23,NULL,'2017-07-21 00:00:00',NULL),(181,'Damoh',4,23,NULL,'2017-07-21 00:00:00',NULL),(182,'Datia',4,23,NULL,'2017-07-21 00:00:00',NULL),(183,'Dewas',4,23,NULL,'2017-07-21 00:00:00',NULL),(184,'Dhar',4,23,NULL,'2017-07-21 00:00:00',NULL),(185,'Guna',4,23,NULL,'2017-07-21 00:00:00',NULL),(186,'Gwalior',4,23,NULL,'2017-07-21 00:00:00',NULL),(187,'Indore',4,23,NULL,'2017-07-21 00:00:00',NULL),(188,'Jhabua',4,23,NULL,'2017-07-21 00:00:00',NULL),(189,'Mandsaur',4,23,NULL,'2017-07-21 00:00:00',NULL),(190,'Mandla',4,23,NULL,'2017-07-21 00:00:00',NULL),(191,'Morena',4,23,NULL,'2017-07-21 00:00:00',NULL),(192,'Panna',4,23,NULL,'2017-07-21 00:00:00',NULL),(193,'Rajgarh',4,23,NULL,'2017-07-21 00:00:00',NULL),(194,'Sagar',4,23,NULL,'2017-07-21 00:00:00',NULL),(195,'Satna',4,23,NULL,'2017-07-21 00:00:00',NULL),(196,'Sehore',4,23,NULL,'2017-07-21 00:00:00',NULL),(197,'Shajapur',4,23,NULL,'2017-07-21 00:00:00',NULL),(198,'Shivpuri',4,23,NULL,'2017-07-21 00:00:00',NULL),(199,'Tikamgarh',4,23,NULL,'2017-07-21 00:00:00',NULL),(200,'Ujjain',4,23,NULL,'2017-07-21 00:00:00',NULL),(201,'Vidisha',4,23,NULL,'2017-07-21 00:00:00',NULL),(202,'Ratlam',4,23,NULL,'2017-07-21 00:00:00',NULL),(203,'Rewa',4,23,NULL,'2017-07-21 00:00:00',NULL),(204,'Seoni',4,23,NULL,'2017-07-21 00:00:00',NULL),(205,'Ratnagiri',1,21,NULL,'2017-07-21 00:00:00',NULL),(206,'Satara',1,21,NULL,'2017-07-21 00:00:00',NULL),(207,'Sindhudurg',3,21,NULL,'2017-07-21 00:00:00',NULL),(208,'Kolhapur',3,21,NULL,'2017-07-21 00:00:00',NULL),(209,'Pune',3,21,NULL,'2017-07-21 00:00:00',NULL),(210,'Nasik',3,21,NULL,'2017-07-21 00:00:00',NULL),(211,'Chandrapur',3,21,NULL,'2017-07-21 00:00:00',NULL),(212,'Thane',3,21,NULL,'2017-07-21 00:00:00',NULL),(213,'Raigad',3,21,NULL,'2017-07-21 00:00:00',NULL),(214,'Dhule',3,21,NULL,'2017-07-21 00:00:00',NULL),(215,'MUMBAI',3,21,NULL,'2017-07-21 00:00:00',NULL),(216,'Sangli',4,21,NULL,'2017-07-21 00:00:00',NULL),(217,'Solapur',4,21,NULL,'2017-07-21 00:00:00',NULL),(218,'Osmanabad',4,21,NULL,'2017-07-21 00:00:00',NULL),(219,'Latur',4,21,NULL,'2017-07-21 00:00:00',NULL),(220,'Bid',4,21,NULL,'2017-07-21 00:00:00',NULL),(221,'Ahmadnagar',4,21,NULL,'2017-07-21 00:00:00',NULL),(222,'Nanded',4,21,NULL,'2017-07-21 00:00:00',NULL),(223,'Parbani',4,21,NULL,'2017-07-21 00:00:00',NULL),(224,'Jalna',4,21,NULL,'2017-07-21 00:00:00',NULL),(225,'Aurangabad',4,21,NULL,'2017-07-21 00:00:00',NULL),(226,'Akola',4,21,NULL,'2017-07-21 00:00:00',NULL),(227,'Yavatmal',4,21,NULL,'2017-07-21 00:00:00',NULL),(228,'Amravati',4,21,NULL,'2017-07-21 00:00:00',NULL),(229,'Wardha',4,21,NULL,'2017-07-21 00:00:00',NULL),(230,'Nagpur',4,21,NULL,'2017-07-21 00:00:00',NULL),(231,'Bhandara',4,21,NULL,'2017-07-21 00:00:00',NULL),(232,'Gadchiroli',4,21,NULL,'2017-07-21 00:00:00',NULL),(233,'Buldana',4,21,NULL,'2017-07-21 00:00:00',NULL),(234,'Jalgaon',4,21,NULL,'2017-07-21 00:00:00',NULL),(235,'Cuttack',3,26,NULL,'2017-07-21 00:00:00',NULL),(236,'Dhenkanal',3,26,NULL,'2017-07-21 00:00:00',NULL),(237,'Sambalpur',3,26,NULL,'2017-07-21 00:00:00',NULL),(238,'Puri',4,26,NULL,'2017-07-21 00:00:00',NULL),(239,'Koraput',4,26,NULL,'2017-07-21 00:00:00',NULL),(240,'Kalahandi',4,26,NULL,'2017-07-21 00:00:00',NULL),(241,'Bolangir',4,26,NULL,'2017-07-21 00:00:00',NULL),(242,'Balasore',4,26,NULL,'2017-07-21 00:00:00',NULL),(243,'Keonjhar',4,26,NULL,'2017-07-21 00:00:00',NULL),(244,'Mayjurbhganj',4,26,NULL,'2017-07-21 00:00:00',NULL),(245,'Baudhkhondmals',4,26,NULL,'2017-07-21 00:00:00',NULL),(246,'Ganjam',4,26,NULL,'2017-07-21 00:00:00',NULL),(247,'Sundargarh',4,26,NULL,'2017-07-21 00:00:00',NULL),(248,'Gurdaspur',2,27,NULL,'2017-07-21 00:00:00',NULL),(249,'Hoshiarpur',2,27,NULL,'2017-07-21 00:00:00',NULL),(250,'Amritsar',2,27,NULL,'2017-07-21 00:00:00',NULL),(251,'Fatehgarh Sahib',2,27,NULL,'2017-07-21 00:00:00',NULL),(252,'Kapurthala',2,27,NULL,'2017-07-21 00:00:00',NULL),(253,'Jalandhar',2,27,NULL,'2017-07-21 00:00:00',NULL),(254,'Ludhiana',2,27,NULL,'2017-07-21 00:00:00',NULL),(255,'Rupnagar',2,27,NULL,'2017-07-21 00:00:00',NULL),(256,'Ferozepur',3,27,NULL,'2017-07-21 00:00:00',NULL),(257,'Faridkot',3,27,NULL,'2017-07-21 00:00:00',NULL),(258,'Patiala',3,27,NULL,'2017-07-21 00:00:00',NULL),(259,'Mansa',3,27,NULL,'2017-07-21 00:00:00',NULL),(260,'Sangrur',3,27,NULL,'2017-07-21 00:00:00',NULL),(261,'Bhatinda',3,27,NULL,'2017-07-21 00:00:00',NULL),(262,'Jaisalmer',3,29,NULL,'2017-07-21 00:00:00',NULL),(263,'Alwar',3,29,NULL,'2017-07-21 00:00:00',NULL),(264,'Bharatpur',3,29,NULL,'2017-07-21 00:00:00',NULL),(265,'Barmer',3,29,NULL,'2017-07-21 00:00:00',NULL),(266,'Jalor',3,29,NULL,'2017-07-21 00:00:00',NULL),(267,'Sirohi',3,29,NULL,'2017-07-21 00:00:00',NULL),(268,'Ganganagar',4,29,NULL,'2017-07-21 00:00:00',NULL),(269,'Churu',4,29,NULL,'2017-07-21 00:00:00',NULL),(270,'Jhunjhunu',4,29,NULL,'2017-07-21 00:00:00',NULL),(271,'Jodhpur',4,29,NULL,'2017-07-21 00:00:00',NULL),(272,'Nagaur',4,29,NULL,'2017-07-21 00:00:00',NULL),(273,'Sikar',4,29,NULL,'2017-07-21 00:00:00',NULL),(274,'Jaipur',4,29,NULL,'2017-07-21 00:00:00',NULL),(275,'Daulpur',4,29,NULL,'2017-07-21 00:00:00',NULL),(276,'Sawai Madhopur',4,29,NULL,'2017-07-21 00:00:00',NULL),(277,'Tonk',4,29,NULL,'2017-07-21 00:00:00',NULL),(278,'Ajmer',4,29,NULL,'2017-07-21 00:00:00',NULL),(279,'Pali',4,29,NULL,'2017-07-21 00:00:00',NULL),(280,'Bhilwara',4,29,NULL,'2017-07-21 00:00:00',NULL),(281,'Bundi',4,29,NULL,'2017-07-21 00:00:00',NULL),(282,'Kota',4,29,NULL,'2017-07-21 00:00:00',NULL),(283,'Udaipur',4,29,NULL,'2017-07-21 00:00:00',NULL),(284,'Chittaurgarh',4,29,NULL,'2017-07-21 00:00:00',NULL),(285,'Jahlawar',4,29,NULL,'2017-07-21 00:00:00',NULL),(286,'Banswara',4,29,NULL,'2017-07-21 00:00:00',NULL),(287,'Dungarpur',4,29,NULL,'2017-07-21 00:00:00',NULL),(288,'Bikaner',4,29,NULL,'2017-07-21 00:00:00',NULL),(289,'Nilgiri',3,31,NULL,'2017-07-21 00:00:00',NULL),(290,'Coimbatore',3,31,NULL,'2017-07-21 00:00:00',NULL),(291,'Kannyakumari',3,31,NULL,'2017-07-21 00:00:00',NULL),(292,'Tirunelveli',3,31,NULL,'2017-07-21 00:00:00',NULL),(293,'Chengalpattu',4,31,NULL,'2017-07-21 00:00:00',NULL),(294,'North-Arcot',4,31,NULL,'2017-07-21 00:00:00',NULL),(295,'Tiruvannamalai',4,31,NULL,'2017-07-21 00:00:00',NULL),(296,'South Arcot',4,31,NULL,'2017-07-21 00:00:00',NULL),(297,'Dharampuri',4,31,NULL,'2017-07-21 00:00:00',NULL),(298,'Salem',4,31,NULL,'2017-07-21 00:00:00',NULL),(299,'Periyar',4,31,NULL,'2017-07-21 00:00:00',NULL),(300,'Trichirapalli',4,31,NULL,'2017-07-21 00:00:00',NULL),(301,'Thanjavur',4,31,NULL,'2017-07-21 00:00:00',NULL),(302,'Nagapattinam',4,31,NULL,'2017-07-21 00:00:00',NULL),(303,'Pudukottai',4,31,NULL,'2017-07-21 00:00:00',NULL),(304,'Dindigul',4,31,NULL,'2017-07-21 00:00:00',NULL),(305,'Madurai',4,31,NULL,'2017-07-21 00:00:00',NULL),(306,'Kamarajar',4,31,NULL,'2017-07-21 00:00:00',NULL),(307,'Pasumpon',4,31,NULL,'2017-07-21 00:00:00',NULL),(308,'Muthuramalinga Thevar',4,31,NULL,'2017-07-21 00:00:00',NULL),(309,'Ramanathapuram',4,31,NULL,'2017-07-21 00:00:00',NULL),(310,'Chidambaranar',4,31,NULL,'2017-07-21 00:00:00',NULL),(311,'Chennai',4,31,NULL,'2017-07-21 00:00:00',NULL),(312,'Chamoli',1,33,NULL,'2017-07-21 00:00:00',NULL),(313,'Almora',1,33,NULL,'2017-07-21 00:00:00',NULL),(314,'Pithoragarn',1,33,NULL,'2017-07-21 00:00:00',NULL),(315,'Bageswar',1,33,NULL,'2017-07-21 00:00:00',NULL),(316,'Champawat',1,33,NULL,'2017-07-21 00:00:00',NULL),(317,'Uttarkashi',2,33,NULL,'2017-07-21 00:00:00',NULL),(318,'Tehri',2,33,NULL,'2017-07-21 00:00:00',NULL),(319,'Garwal',2,33,NULL,'2017-07-21 00:00:00',NULL),(320,'Dehradun',2,33,NULL,'2017-07-21 00:00:00',NULL),(321,'Pauri',2,33,NULL,'2017-07-21 00:00:00',NULL),(322,'Garhwal',2,33,NULL,'2017-07-21 00:00:00',NULL),(323,'Nainital',2,33,NULL,'2017-07-21 00:00:00',NULL),(324,'Haridwar',2,33,NULL,'2017-07-21 00:00:00',NULL),(325,'Udamsinghnagar',2,33,NULL,'2017-07-21 00:00:00',NULL),(326,'Rudraprayag',2,33,NULL,'2017-07-21 00:00:00',NULL),(327,'Saharanpur',2,34,NULL,'2017-07-21 00:00:00',NULL),(328,'Muzaffarnagar',2,34,NULL,'2017-07-21 00:00:00',NULL),(329,'Bijnor',2,34,NULL,'2017-07-21 00:00:00',NULL),(330,'Moradabad',2,34,NULL,'2017-07-21 00:00:00',NULL),(331,'Meerut',2,34,NULL,'2017-07-21 00:00:00',NULL),(332,'Ghaziabad',2,34,NULL,'2017-07-21 00:00:00',NULL),(333,'Rampur',2,34,NULL,'2017-07-21 00:00:00',NULL),(334,'Pilibhit',2,34,NULL,'2017-07-21 00:00:00',NULL),(335,'Bulandshahr',2,34,NULL,'2017-07-21 00:00:00',NULL),(336,'Kheri',2,34,NULL,'2017-07-21 00:00:00',NULL),(337,'Bhraich',2,34,NULL,'2017-07-21 00:00:00',NULL),(338,'Gondha',2,34,NULL,'2017-07-21 00:00:00',NULL),(339,'Basti',2,34,NULL,'2017-07-21 00:00:00',NULL),(340,'Gorakhpur',2,34,NULL,'2017-07-21 00:00:00',NULL),(341,'Deoria',2,34,NULL,'2017-07-21 00:00:00',NULL),(342,'Bareilly',3,34,NULL,'2017-07-21 00:00:00',NULL),(343,'Badaun',3,34,NULL,'2017-07-21 00:00:00',NULL),(344,'Shahejehanpur',3,34,NULL,'2017-07-21 00:00:00',NULL),(345,'Aligarh',3,34,NULL,'2017-07-21 00:00:00',NULL),(346,'Mathura',3,34,NULL,'2017-07-21 00:00:00',NULL),(347,'Ethah',3,34,NULL,'2017-07-21 00:00:00',NULL),(348,'Hardoi',3,34,NULL,'2017-07-21 00:00:00',NULL),(349,'Sitapur',3,34,NULL,'2017-07-21 00:00:00',NULL),(350,'Agra',3,34,NULL,'2017-07-21 00:00:00',NULL),(351,'Mainpuri',3,34,NULL,'2017-07-21 00:00:00',NULL),(352,'Farukkabad',3,34,NULL,'2017-07-21 00:00:00',NULL),(353,'Unnao',3,34,NULL,'2017-07-21 00:00:00',NULL),(354,'Lucknow',3,34,NULL,'2017-07-21 00:00:00',NULL),(355,'Barabanki',3,34,NULL,'2017-07-21 00:00:00',NULL),(356,'Rae Bareli',3,34,NULL,'2017-07-21 00:00:00',NULL),(357,'Sultanpur',3,34,NULL,'2017-07-21 00:00:00',NULL),(358,'Faizabad',3,34,NULL,'2017-07-21 00:00:00',NULL),(359,'Azamgarh',3,34,NULL,'2017-07-21 00:00:00',NULL),(360,'Ballia',3,34,NULL,'2017-07-21 00:00:00',NULL),(361,'Pratapgarh',3,34,NULL,'2017-07-21 00:00:00',NULL),(362,'Jaunpur',3,34,NULL,'2017-07-21 00:00:00',NULL),(363,'Ghazipur',3,34,NULL,'2017-07-21 00:00:00',NULL),(364,'Varanasi',3,34,NULL,'2017-07-21 00:00:00',NULL),(365,'Mirzapur',3,34,NULL,'2017-07-21 00:00:00',NULL),(366,'Etawah',4,34,NULL,'2017-07-21 00:00:00',NULL),(367,'Kanpur',4,34,NULL,'2017-07-21 00:00:00',NULL),(368,'Jalaun',4,34,NULL,'2017-07-21 00:00:00',NULL),(369,'Jhansi',4,34,NULL,'2017-07-21 00:00:00',NULL),(370,'Hamirpur',4,34,NULL,'2017-07-21 00:00:00',NULL),(371,'Banda',4,34,NULL,'2017-07-21 00:00:00',NULL),(372,'Fatehpur',4,34,NULL,'2017-07-21 00:00:00',NULL),(373,'Allahabad',4,34,NULL,'2017-07-21 00:00:00',NULL),(374,'Lalitpur',4,34,NULL,'2017-07-21 00:00:00',NULL),(375,'Cooch Bihar',1,35,NULL,'2017-07-21 00:00:00',NULL),(376,'Darjeeling',2,35,NULL,'2017-07-21 00:00:00',NULL),(377,'West Dinajpur',2,35,NULL,'2017-07-21 00:00:00',NULL),(378,'Jalpaiguri',2,35,NULL,'2017-07-21 00:00:00',NULL),(379,'Calcutta',2,35,NULL,'2017-07-21 00:00:00',NULL),(380,'24 Parganas',2,35,NULL,'2017-07-21 00:00:00',NULL),(381,'Maldah',2,35,NULL,'2017-07-21 00:00:00',NULL),(382,'Murshidabad',3,35,NULL,'2017-07-21 00:00:00',NULL),(383,'Birbhum',3,35,NULL,'2017-07-21 00:00:00',NULL),(384,'Bardhaman',3,35,NULL,'2017-07-21 00:00:00',NULL),(385,'Hoogli',3,35,NULL,'2017-07-21 00:00:00',NULL),(386,'Howrah',3,35,NULL,'2017-07-21 00:00:00',NULL),(387,'Nadia',3,35,NULL,'2017-07-21 00:00:00',NULL),(388,'Bankura',3,35,NULL,'2017-07-21 00:00:00',NULL),(389,'Midnapore',3,35,NULL,'2017-07-21 00:00:00',NULL),(390,'Purulia',4,35,NULL,'2017-07-21 00:00:00',NULL),(391,'Tawang',1,3,NULL,'2017-08-01 00:00:00',NULL),(392,'West Kameng',1,3,NULL,'2017-08-01 00:00:00',NULL),(393,'East Kameng',1,3,NULL,'2017-08-01 00:00:00',NULL),(394,'Papum Pare',1,3,NULL,'2017-08-01 00:00:00',NULL),(395,'Kurung Kumey',1,3,NULL,'2017-08-01 00:00:00',NULL),(396,'Kra Daadi',1,3,NULL,'2017-08-01 00:00:00',NULL),(397,'Lower Subansiri',1,3,NULL,'2017-08-01 00:00:00',NULL),(398,'Upper Subansiri',1,3,NULL,'2017-08-01 00:00:00',NULL),(399,'West Siang',1,3,NULL,'2017-08-01 00:00:00',NULL),(400,'East Siang',1,3,NULL,'2017-08-01 00:00:00',NULL),(401,'Central Siang',1,3,NULL,'2017-08-01 00:00:00',NULL),(402,'Upper Siang',1,3,NULL,'2017-08-01 00:00:00',NULL),(403,'Lower Dibang Valley',1,3,NULL,'2017-08-01 00:00:00',NULL),(404,'Upper Dibang Valley',1,3,NULL,'2017-08-01 00:00:00',NULL),(405,'Anjaw',1,3,NULL,'2017-08-01 00:00:00',NULL),(406,'Lohit',1,3,NULL,'2017-08-01 00:00:00',NULL),(407,'Namsai',1,3,NULL,'2017-08-01 00:00:00',NULL),(408,'Changlang',1,3,NULL,'2017-08-01 00:00:00',NULL),(409,'Tirap',1,3,NULL,'2017-08-01 00:00:00',NULL),(410,'Longding',1,3,NULL,'2017-08-01 00:00:00',NULL),(411,'Tinsukia',1,4,NULL,'2017-08-01 00:00:00',NULL),(412,'Dibrugarh',1,4,NULL,'2017-08-01 00:00:00',NULL),(413,'Dhemaji',1,4,NULL,'2017-08-01 00:00:00',NULL),(414,'Charaideo',1,4,NULL,'2017-08-01 00:00:00',NULL),(415,'Sivasagar',1,4,NULL,'2017-08-01 00:00:00',NULL),(416,'Lakhimpur',1,4,NULL,'2017-08-01 00:00:00',NULL),(417,'Majuli',1,4,NULL,'2017-08-01 00:00:00',NULL),(418,'Jorhat',1,4,NULL,'2017-08-01 00:00:00',NULL),(419,'Biswanath',1,4,NULL,'2017-08-01 00:00:00',NULL),(420,'Golaghat',1,4,NULL,'2017-08-01 00:00:00',NULL),(421,'Karbi Anglong East',1,4,NULL,'2017-08-01 00:00:00',NULL),(422,'Sonitpur',1,4,NULL,'2017-08-01 00:00:00',NULL),(423,'Nagaon',1,4,NULL,'2017-08-01 00:00:00',NULL),(424,'Hojai',1,4,NULL,'2017-08-01 00:00:00',NULL),(425,'Karbi Anglong West',1,4,NULL,'2017-08-01 00:00:00',NULL),(426,'Dima Hassao',1,4,NULL,'2017-08-01 00:00:00',NULL),(427,'Cachar',1,4,NULL,'2017-08-01 00:00:00',NULL),(428,'Hailakandi',1,4,NULL,'2017-08-01 00:00:00',NULL),(429,'Karimganj',1,4,NULL,'2017-08-01 00:00:00',NULL),(430,'Morigaon',1,4,NULL,'2017-08-01 00:00:00',NULL),(431,'Udalguri',1,4,NULL,'2017-08-01 00:00:00',NULL),(432,'Darrang',1,4,NULL,'2017-08-01 00:00:00',NULL),(433,'Kamrup Metro',1,4,NULL,'2017-08-01 00:00:00',NULL),(434,'Baksa',1,4,NULL,'2017-08-01 00:00:00',NULL),(435,'Nalbari',1,4,NULL,'2017-08-01 00:00:00',NULL),(436,'Kamrup',1,4,NULL,'2017-08-01 00:00:00',NULL),(437,'Barpeta',1,4,NULL,'2017-08-01 00:00:00',NULL),(438,'Chirang',1,4,NULL,'2017-08-01 00:00:00',NULL),(439,'Bongaigaon',1,4,NULL,'2017-08-01 00:00:00',NULL),(440,'Goalpara',1,4,NULL,'2017-08-01 00:00:00',NULL),(441,'Kokrajhar',1,4,NULL,'2017-08-01 00:00:00',NULL),(442,'Dhubri',1,4,NULL,'2017-08-01 00:00:00',NULL),(443,'South Salmara-Mankachar',1,4,NULL,'2017-08-01 00:00:00',NULL),(444,'CHANDIGARH',2,7,NULL,'2017-08-01 00:00:00',NULL),(445,'North Goa',3,11,NULL,'2017-08-01 00:00:00',NULL),(446,'South Goa',3,11,NULL,'2017-08-01 00:00:00',NULL),(447,'North Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(448,'North West Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(449,'New Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(450,'West Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(451,'South West Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(452,'South Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(453,'South East Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(454,'Central Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(455,'North East Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(456,'Shahdara',2,9,NULL,'2017-08-01 00:00:00',NULL),(457,'East Delhi',2,9,NULL,'2017-08-01 00:00:00',NULL),(458,'Alappuzha',3,17,NULL,'2017-08-01 00:00:00',NULL),(459,'Ernakulam',3,17,NULL,'2017-08-01 00:00:00',NULL),(460,'Idukki',3,17,NULL,'2017-08-01 00:00:00',NULL),(461,'Kannur',3,17,NULL,'2017-08-01 00:00:00',NULL),(462,'Kasaragod',3,17,NULL,'2017-08-01 00:00:00',NULL),(463,'Kollam',3,17,NULL,'2017-08-01 00:00:00',NULL),(464,'Kottayam',3,17,NULL,'2017-08-01 00:00:00',NULL),(465,'Kozhikode',3,17,NULL,'2017-08-01 00:00:00',NULL),(466,'Malappuram',3,17,NULL,'2017-08-01 00:00:00',NULL),(467,'Palakkad',3,17,NULL,'2017-08-01 00:00:00',NULL),(468,'Pathanamthitta',3,17,NULL,'2017-08-01 00:00:00',NULL),(469,'Thiruvananthapuram',3,17,NULL,'2017-08-01 00:00:00',NULL),(470,'Thrissur',3,17,NULL,'2017-08-01 00:00:00',NULL),(471,'Wayanad',3,17,NULL,'2017-08-01 00:00:00',NULL),(472,'LAKSHADWEEP',4,19,NULL,'2017-08-01 00:00:00',NULL),(473,'Bishnupur',1,22,NULL,'2017-08-01 00:00:00',NULL),(474,'Thoubal',1,22,NULL,'2017-08-01 00:00:00',NULL),(475,'Imphal East',1,22,NULL,'2017-08-01 00:00:00',NULL),(476,'Imphal West',1,22,NULL,'2017-08-01 00:00:00',NULL),(477,'Senapati',1,22,NULL,'2017-08-01 00:00:00',NULL),(478,'Ukhrul',1,22,NULL,'2017-08-01 00:00:00',NULL),(479,'Chandel',1,22,NULL,'2017-08-01 00:00:00',NULL),(480,'Churachandpur',1,22,NULL,'2017-08-01 00:00:00',NULL),(481,'Tamenglong',1,22,NULL,'2017-08-01 00:00:00',NULL),(482,'Jowai',1,20,NULL,'2017-08-01 00:00:00',NULL),(483,'Khliehriat',1,20,NULL,'2017-08-01 00:00:00',NULL),(484,'Shillong',1,20,NULL,'2017-08-01 00:00:00',NULL),(485,'Nongstoin',1,20,NULL,'2017-08-01 00:00:00',NULL),(486,'Mawkyrwat',1,20,NULL,'2017-08-01 00:00:00',NULL),(487,'Nongpoh',1,20,NULL,'2017-08-01 00:00:00',NULL),(488,'Resubelpara',1,20,NULL,'2017-08-01 00:00:00',NULL),(489,'Williamnagar',1,20,NULL,'2017-08-01 00:00:00',NULL),(490,'Baghmara',1,20,NULL,'2017-08-01 00:00:00',NULL),(491,'Tura',1,20,NULL,'2017-08-01 00:00:00',NULL),(492,'Ampati',1,20,NULL,'2017-08-01 00:00:00',NULL),(493,'Aizawl',1,24,NULL,'2017-08-01 00:00:00',NULL),(494,'Kolasib',1,24,NULL,'2017-08-01 00:00:00',NULL),(495,'Lawngtlai',1,24,NULL,'2017-08-01 00:00:00',NULL),(496,'Lunglei',1,24,NULL,'2017-08-01 00:00:00',NULL),(497,'Mamit',1,24,NULL,'2017-08-01 00:00:00',NULL),(498,'Siaha',1,24,NULL,'2017-08-01 00:00:00',NULL),(499,'Serchhip',1,24,NULL,'2017-08-01 00:00:00',NULL),(500,'Champhai',1,24,NULL,'2017-08-01 00:00:00',NULL),(501,'Dimapur',1,25,NULL,'2017-08-01 00:00:00',NULL),(502,'Kiphire',1,25,NULL,'2017-08-01 00:00:00',NULL),(503,'Kohima',1,25,NULL,'2017-08-01 00:00:00',NULL),(504,'Longleng',1,25,NULL,'2017-08-01 00:00:00',NULL),(505,'Mokokchung',1,25,NULL,'2017-08-01 00:00:00',NULL),(506,'Mon',1,25,NULL,'2017-08-01 00:00:00',NULL),(507,'Peren',1,25,NULL,'2017-08-01 00:00:00',NULL),(508,'Phek',1,25,NULL,'2017-08-01 00:00:00',NULL),(509,'Tuensang',1,25,NULL,'2017-08-01 00:00:00',NULL),(510,'Wokha',1,25,NULL,'2017-08-01 00:00:00',NULL),(511,'Zunheboto',1,25,NULL,'2017-08-01 00:00:00',NULL),(512,'Karaikal',4,28,NULL,'2017-08-01 00:00:00',NULL),(513,'Mahé',4,28,NULL,'2017-08-01 00:00:00',NULL),(514,'Pondicherry',4,28,NULL,'2017-08-01 00:00:00',NULL),(515,'Yanam',4,28,NULL,'2017-08-01 00:00:00',NULL),(516,'East Sikkim',2,30,NULL,'2017-08-01 00:00:00',NULL),(517,'North Sikkim',2,30,NULL,'2017-08-01 00:00:00',NULL),(518,'South Sikkim',2,30,NULL,'2017-08-01 00:00:00',NULL),(519,'West Sikkim',2,30,NULL,'2017-08-01 00:00:00',NULL),(520,'Dhalai',1,32,NULL,'2017-08-01 00:00:00',NULL),(521,'North Tripura',1,32,NULL,'2017-08-01 00:00:00',NULL),(522,'South Tripura',1,32,NULL,'2017-08-01 00:00:00',NULL),(523,'West Tripura',1,32,NULL,'2017-08-01 00:00:00',NULL);
/*!40000 ALTER TABLE `districtwise_zone_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `earthquake_zone_master`
--

DROP TABLE IF EXISTS `earthquake_zone_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `earthquake_zone_master` (
  `zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `zone` varchar(45) DEFAULT NULL,
  `zone_rate` decimal(18,2) DEFAULT NULL,
  `datetime_created` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `earthquake_zone_master`
--

LOCK TABLES `earthquake_zone_master` WRITE;
/*!40000 ALTER TABLE `earthquake_zone_master` DISABLE KEYS */;
INSERT INTO `earthquake_zone_master` VALUES (1,'zone 1',0.50,'2017-07-21'),(2,'zone 2',0.25,'2017-07-21'),(3,'zone 3',0.10,'2017-07-21'),(4,'zone 4',0.05,'2017-07-21');
/*!40000 ALTER TABLE `earthquake_zone_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `firecal_quote_detail`
--

DROP TABLE IF EXISTS `firecal_quote_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `firecal_quote_detail` (
  `quote_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `quote_id` int(11) DEFAULT NULL,
  `comapny_id` int(11) DEFAULT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `premium_amt` int(11) DEFAULT NULL,
  `gst_amt` int(11) DEFAULT NULL,
  `net_premium_amt` int(11) DEFAULT NULL,
  `is_selected` int(11) DEFAULT NULL,
  PRIMARY KEY (`quote_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `firecal_quote_detail`
--

LOCK TABLES `firecal_quote_detail` WRITE;
/*!40000 ALTER TABLE `firecal_quote_detail` DISABLE KEYS */;
INSERT INTO `firecal_quote_detail` VALUES (1,3,7,'IFFCO Tokio General Insurance Co. Ltd.',1179,212,3,0),(2,3,4,'United India Insurance Co. Ltd.',1318,237,3,4),(3,3,6,'Bajaj Allianz General Insurance Co. Ltd.',1438,259,3,0),(4,3,2,'The Oriental Insurance Co. Ltd.',1451,261,3,0),(5,3,5,'ICICI Lombard General Insurance Co. Ltd.',1573,283,3,0),(6,4,7,'IFFCO Tokio General Insurance Co. Ltd.',29,5,4,0),(7,4,4,'United India Insurance Co. Ltd.',29,5,4,0),(8,4,14,'Universal Sompo General Insurance Co. Ltd.',36,6,4,0),(9,4,15,'Shriram General Insurance Company Limited',36,6,4,0),(10,4,16,'Bharti AXA General Insurance Company Limited',36,6,4,0),(11,5,7,'IFFCO Tokio General Insurance Co. Ltd.',33,6,5,7),(12,5,4,'United India Insurance Co. Ltd.',33,6,5,0),(13,5,14,'Universal Sompo General Insurance Co. Ltd.',40,7,5,0),(14,5,15,'Shriram General Insurance Company Limited',40,7,5,0),(15,5,16,'Bharti AXA General Insurance Company Limited',40,7,5,0),(16,6,7,'IFFCO Tokio General Insurance Co. Ltd.',24,4,6,0),(17,6,4,'United India Insurance Co. Ltd.',25,5,6,0),(18,6,14,'Universal Sompo General Insurance Co. Ltd.',30,5,6,0),(19,6,15,'Shriram General Insurance Company Limited',30,5,6,0),(20,6,16,'Bharti AXA General Insurance Company Limited',30,5,6,0),(21,7,7,'IFFCO Tokio General Insurance Co. Ltd.',19,3,7,0),(22,7,4,'United India Insurance Co. Ltd.',20,4,7,0),(23,7,14,'Universal Sompo General Insurance Co. Ltd.',24,4,7,0),(24,7,15,'Shriram General Insurance Company Limited',24,4,7,0),(25,7,16,'Bharti AXA General Insurance Company Limited',24,4,7,0),(26,8,7,'IFFCO Tokio General Insurance Co. Ltd.',425,77,502,0),(27,8,4,'United India Insurance Co. Ltd.',486,87,573,0),(28,8,6,'Bajaj Allianz General Insurance Co. Ltd.',540,97,637,0),(29,8,2,'The Oriental Insurance Co. Ltd.',547,98,645,0),(30,8,5,'ICICI Lombard General Insurance Co. Ltd.',601,108,709,0),(31,9,7,'IFFCO Tokio General Insurance Co. Ltd.',10,2,12,0),(32,9,4,'United India Insurance Co. Ltd.',10,2,12,0),(33,9,14,'Universal Sompo General Insurance Co. Ltd.',13,2,15,0),(34,9,15,'Shriram General Insurance Company Limited',13,2,15,0),(35,9,16,'Bharti AXA General Insurance Company Limited',13,2,15,0),(36,10,7,'IFFCO Tokio General Insurance Co. Ltd.',10076,1814,11890,0),(37,10,4,'United India Insurance Co. Ltd.',10939,1969,12908,0),(38,10,6,'Bajaj Allianz General Insurance Co. Ltd.',11713,2108,13821,0),(39,10,2,'The Oriental Insurance Co. Ltd.',11799,2124,13923,0),(40,10,5,'ICICI Lombard General Insurance Co. Ltd.',12576,2264,14840,0),(41,11,1,'The New India Assurance Co. Ltd.',1,0,1,0),(42,11,13,'Future Generali India Insurance Company Limited',1,0,1,0),(43,11,14,'Universal Sompo General Insurance Co. Ltd.',1,0,1,0),(44,11,15,'Shriram General Insurance Company Limited',1,0,1,0),(45,11,16,'Bharti AXA General Insurance Company Limited',1,0,1,0),(46,12,7,'IFFCO Tokio General Insurance Co. Ltd.',13,2,15,0),(47,12,4,'United India Insurance Co. Ltd.',16,3,19,0),(48,12,2,'The Oriental Insurance Co. Ltd.',19,3,22,0),(49,12,6,'Bajaj Allianz General Insurance Co. Ltd.',19,3,22,0),(50,12,15,'Shriram General Insurance Company Limited',21,4,25,0),(51,13,7,'IFFCO Tokio General Insurance Co. Ltd.',56,10,66,0),(52,13,4,'United India Insurance Co. Ltd.',63,11,74,0),(53,13,2,'The Oriental Insurance Co. Ltd.',66,12,78,0),(54,13,6,'Bajaj Allianz General Insurance Co. Ltd.',66,12,78,0),(55,13,5,'ICICI Lombard General Insurance Co. Ltd.',69,12,81,0),(56,14,7,'IFFCO Tokio General Insurance Co. Ltd.',38675,6962,45637,7),(57,14,4,'United India Insurance Co. Ltd.',44425,7997,52422,0),(58,14,6,'Bajaj Allianz General Insurance Co. Ltd.',49600,8928,58528,0),(59,14,2,'The Oriental Insurance Co. Ltd.',50175,9032,59207,0),(60,14,5,'ICICI Lombard General Insurance Co. Ltd.',55350,9963,65313,0),(61,15,7,'IFFCO Tokio General Insurance Co. Ltd.',3522,634,4156,0),(62,15,4,'United India Insurance Co. Ltd.',4071,733,4804,0),(63,15,6,'Bajaj Allianz General Insurance Co. Ltd.',4560,821,5381,0),(64,15,2,'The Oriental Insurance Co. Ltd.',4613,830,5443,0),(65,15,5,'ICICI Lombard General Insurance Co. Ltd.',5103,919,6022,0),(66,16,7,'IFFCO Tokio General Insurance Co. Ltd.',2283,411,2694,0),(67,16,4,'United India Insurance Co. Ltd.',2664,480,3144,0),(68,16,6,'Bajaj Allianz General Insurance Co. Ltd.',3004,541,3545,6),(69,16,2,'The Oriental Insurance Co. Ltd.',3040,547,3587,0),(70,16,5,'ICICI Lombard General Insurance Co. Ltd.',3380,608,3988,0),(71,17,7,'IFFCO Tokio General Insurance Co. Ltd.',21,4,25,0),(72,17,4,'United India Insurance Co. Ltd.',25,5,30,0),(73,17,2,'The Oriental Insurance Co. Ltd.',28,5,33,0),(74,17,6,'Bajaj Allianz General Insurance Co. Ltd.',28,5,33,0),(75,17,5,'ICICI Lombard General Insurance Co. Ltd.',31,6,37,5),(76,18,7,'IFFCO Tokio General Insurance Co. Ltd.',60208,10837,71045,7),(77,18,4,'United India Insurance Co. Ltd.',68138,12265,80403,0),(78,18,6,'Bajaj Allianz General Insurance Co. Ltd.',75275,13550,88825,0),(79,18,2,'The Oriental Insurance Co. Ltd.',76068,13692,89760,0),(80,18,5,'ICICI Lombard General Insurance Co. Ltd.',83205,14977,98182,0),(81,19,7,'IFFCO Tokio General Insurance Co. Ltd.',1,0,1,0),(82,19,4,'United India Insurance Co. Ltd.',1,0,1,0),(83,19,14,'Universal Sompo General Insurance Co. Ltd.',2,0,2,0),(84,19,15,'Shriram General Insurance Company Limited',2,0,2,0),(85,19,16,'Bharti AXA General Insurance Company Limited',2,0,2,0),(86,20,7,'IFFCO Tokio General Insurance Co. Ltd.',161356,29044,190400,7),(87,20,4,'United India Insurance Co. Ltd.',179373,32287,211660,0),(88,20,6,'Bajaj Allianz General Insurance Co. Ltd.',195586,35205,230791,0),(89,20,2,'The Oriental Insurance Co. Ltd.',197388,35530,232918,0),(90,20,5,'ICICI Lombard General Insurance Co. Ltd.',213603,38449,252052,0),(91,21,7,'IFFCO Tokio General Insurance Co. Ltd.',17041,3067,20108,7),(92,21,4,'United India Insurance Co. Ltd.',18947,3410,22357,0),(93,21,6,'Bajaj Allianz General Insurance Co. Ltd.',20661,3719,24380,0),(94,21,2,'The Oriental Insurance Co. Ltd.',20851,3753,24604,0),(95,21,5,'ICICI Lombard General Insurance Co. Ltd.',22567,4062,26629,0),(96,22,7,'IFFCO Tokio General Insurance Co. Ltd.',39826,7169,46995,7),(97,22,4,'United India Insurance Co. Ltd.',44881,8079,52960,0),(98,22,6,'Bajaj Allianz General Insurance Co. Ltd.',49431,8898,58329,0),(99,22,2,'The Oriental Insurance Co. Ltd.',49936,8988,58924,0),(100,22,5,'ICICI Lombard General Insurance Co. Ltd.',54487,9808,64295,0),(101,23,7,'IFFCO Tokio General Insurance Co. Ltd.',575,104,679,0),(102,23,4,'United India Insurance Co. Ltd.',642,116,758,4),(103,23,6,'Bajaj Allianz General Insurance Co. Ltd.',702,126,828,0),(104,23,2,'The Oriental Insurance Co. Ltd.',709,128,837,0),(105,23,5,'ICICI Lombard General Insurance Co. Ltd.',770,139,909,0),(106,24,7,'IFFCO Tokio General Insurance Co. Ltd.',918,165,1083,0),(107,24,4,'United India Insurance Co. Ltd.',1022,184,1206,0),(108,24,6,'Bajaj Allianz General Insurance Co. Ltd.',1118,201,1319,6),(109,24,2,'The Oriental Insurance Co. Ltd.',1127,203,1330,0),(110,24,5,'ICICI Lombard General Insurance Co. Ltd.',1223,220,1443,0),(111,25,7,'IFFCO Tokio General Insurance Co. Ltd.',839,151,990,0),(112,25,4,'United India Insurance Co. Ltd.',951,171,1122,0),(113,25,6,'Bajaj Allianz General Insurance Co. Ltd.',1044,188,1232,0),(114,25,2,'The Oriental Insurance Co. Ltd.',1058,190,1248,0),(115,25,5,'ICICI Lombard General Insurance Co. Ltd.',1158,208,1366,0),(116,26,26,'The New India Assurance',22845,4112,26957,26),(117,26,23,'null',22845,4112,26957,0),(118,26,24,'null',22845,4112,26957,0),(119,26,25,'null',22845,4112,26957,0),(120,26,7,'IFFCO Tokio General Insurance Co. Ltd.',49353,8884,58237,0),(121,27,26,'The New India Assurance',48,9,57,0),(122,27,23,'null',48,9,57,0),(123,27,24,'null',48,9,57,0),(124,27,25,'null',48,9,57,0),(125,27,7,'IFFCO Tokio General Insurance Co. Ltd.',92,17,109,0),(126,28,7,'IFFCO Tokio General Insurance Co. Ltd.',108903,19603,128506,0),(127,28,4,'United India Insurance Co. Ltd.',121972,21955,143927,0),(128,28,6,'Bajaj Allianz General Insurance Co. Ltd.',133734,24072,157806,0),(129,28,2,'The Oriental Insurance Co. Ltd.',135040,24307,159347,0),(130,28,16,'Bharti AXA General Insurance Company Limited',141713,25508,167221,0);
/*!40000 ALTER TABLE `firecal_quote_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `firecal_quote_master`
--

DROP TABLE IF EXISTS `firecal_quote_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `firecal_quote_master` (
  `quote_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) DEFAULT NULL,
  `transaction_type` int(11) DEFAULT NULL,
  `cust_action` int(11) DEFAULT NULL,
  `customer_type` int(11) DEFAULT NULL,
  `period_from` varchar(45) DEFAULT NULL,
  `period_to` varchar(45) DEFAULT NULL,
  `current_insurer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(200) DEFAULT NULL,
  `address1` varchar(200) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `risk_address1` varchar(200) DEFAULT NULL,
  `risk_address2` varchar(200) DEFAULT NULL,
  `risk_district_id` int(11) DEFAULT NULL,
  `risk_state_id` int(11) DEFAULT NULL,
  `risk_pincode` int(11) DEFAULT NULL,
  `risk_country` varchar(45) DEFAULT NULL,
  `occ_id` int(11) DEFAULT NULL,
  `storage_type` varchar(45) DEFAULT NULL,
  `sum_building` decimal(18,0) DEFAULT NULL,
  `sum_plith` decimal(18,0) DEFAULT NULL,
  `sum_plant` decimal(18,0) DEFAULT NULL,
  `sum_electric` decimal(18,0) DEFAULT NULL,
  `sum_fff` decimal(18,0) DEFAULT NULL,
  `sum_others` decimal(18,0) DEFAULT NULL,
  `sum_stock` decimal(18,0) DEFAULT NULL,
  `is_stfi` int(11) DEFAULT NULL,
  `sum_stfi` decimal(18,0) DEFAULT NULL,
  `is_earthquake` int(11) DEFAULT NULL,
  `sum_earthquake` decimal(18,0) DEFAULT NULL,
  `is_terrorism` int(11) DEFAULT NULL,
  `sum_terrorism` decimal(18,0) DEFAULT NULL,
  `is_escalation` int(11) DEFAULT NULL,
  `escalation_percent` int(11) DEFAULT NULL,
  `sum_escalation` decimal(18,0) DEFAULT NULL,
  `is_omission` int(11) DEFAULT NULL,
  `sum_omission` decimal(18,0) DEFAULT NULL,
  `is_lossrent` int(11) DEFAULT NULL,
  `sum_lossrent` decimal(18,0) DEFAULT NULL,
  `is_accommodation` int(11) DEFAULT NULL,
  `sum_accommodation` decimal(18,0) DEFAULT NULL,
  `is_architect` int(11) DEFAULT NULL,
  `sum_architect` decimal(18,0) DEFAULT NULL,
  `is_removedebris` int(11) DEFAULT NULL,
  `sum_removedebris` decimal(18,0) DEFAULT NULL,
  `is_spontcomb` int(11) DEFAULT NULL,
  `sum_spontcomb` decimal(18,0) DEFAULT NULL,
  `is_startup` int(11) DEFAULT NULL,
  `sum_startup` decimal(18,0) DEFAULT NULL,
  `is_floater` int(11) DEFAULT NULL,
  `sum_floater` decimal(18,0) DEFAULT NULL,
  `is_impactdamage` int(11) DEFAULT NULL,
  `sum_impactdamage` decimal(18,0) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  `occup_desc` varchar(500) DEFAULT NULL,
  `contact_person` varchar(200) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `is_approve` int(11) DEFAULT NULL,
  `approved_by` varchar(45) DEFAULT NULL,
  `approved_datetime` datetime DEFAULT NULL,
  `is_approve1` int(11) DEFAULT NULL,
  `approved_by1` varchar(45) DEFAULT NULL,
  `approved_datetime1` datetime DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `mail_status` int(11) DEFAULT NULL,
  `mail_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`quote_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `firecal_quote_master`
--

LOCK TABLES `firecal_quote_master` WRITE;
/*!40000 ALTER TABLE `firecal_quote_master` DISABLE KEYS */;
INSERT INTO `firecal_quote_master` VALUES (1,6,0,0,0,'0','0',0,'Durgapratap','mumbai','mumbai',209,21,400075,'India','mumbai','mumbai',0,21,400075,'India',237,'Closed',100000,100000,100000,100000,100000,100000,100000,1,600000,1,1,1,700000,1,0,25000,1,25000,1,0,1,0,1,0,1,0,1,0,0,0,1,0,1,0,1,'2017-09-04 00:00:00','Test entry',NULL,NULL,NULL,NULL,0,NULL,NULL,1,'101101','2017-09-19 10:09:59',1,1,'2017-09-22 11:22:43'),(2,6,0,0,0,'0','0',0,'Durgapratap','mumbai','mumbai',209,21,400075,'India','mumbai','mumbai',0,21,400075,'India',237,'Closed',100000,100000,100000,100000,100000,100000,100000,1,600000,1,1,1,700000,1,0,25000,1,25000,1,0,1,0,1,0,1,0,1,0,0,0,1,0,1,0,1,'2017-09-04 00:00:00','Test entry',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(3,6,0,0,0,'0','0',0,'Durgapratap','mumbai','mumbai',208,21,400075,'India','mumbai','mumbai',0,21,400075,'India',237,'Closed',100000,100000,100000,100000,100000,100000,100000,1,600000,1,1,1,700000,1,0,25000,1,25000,1,0,1,0,1,0,1,0,1,0,0,0,1,0,1,0,1,'2017-09-05 00:00:00','Test entry',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(4,3,0,0,0,'0','0',0,'Vinay','Mumbai','Mumbai',215,21,400070,'India','Mumbai','Mumbai',0,21,400070,'India',3,'Closed',10000,10000,10000,10000,10000,10000,0,1,50000,1,1,1,60000,1,0,2500,1,2500,1,1000,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2017-09-05 00:00:00','Test entry',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(5,3,0,0,0,'0','0',0,'Vinay','Mumbai','Mumbai',215,21,400070,'India','Mumbai','Mumbai',0,21,400070,'India',3,'Closed',10000,10000,10000,10000,10000,10000,10000,1,60000,1,1,1,70000,1,0,2500,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2017-09-05 00:00:00','Test entry',NULL,NULL,NULL,NULL,0,NULL,NULL,1,'101101','2017-09-21 05:09:41',1,1,'2017-09-22 11:22:43'),(6,3,0,0,0,'0','0',0,'vinay','mumbai','Mumbai',215,21,400070,'India','Mumbai','Mumbai',0,21,400070,'India',2,'Closed',10000,1000,10000,10000,10000,10000,0,1,50000,1,1,1,51000,1,0,2050,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2017-09-05 00:00:00','Test entry',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(7,3,0,0,0,'0','0',0,'Vinay','Mumbai','Mumbai',215,21,400070,'India','Mumbai','Mumbai',0,21,400070,'India',3,'Closed',10000,10000,1000,10000,10000,1000,1000,1,33000,1,1,1,43000,1,0,2050,1,2050,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2017-09-11 00:00:00','Test entry',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(8,5,0,0,0,'0','0',0,'Durgapratap','mumbai','mumbai',208,21,400075,'India','mumbai','mumbai',0,21,400075,'India',223,'Closed',100000,0,100000,0,0,100000,0,1,300000,1,1,0,0,1,5,10000,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,1,'2017-09-11 00:00:00','Test entry',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(9,3,0,0,0,'0','0',0,'Vinay','Mumbai','Mumbai',215,21,400070,'India','Mumbai','Mumbai',0,21,400070,'India',3,'Closed',10000,1000,10000,1000,1000,1000,1000,1,24000,1,1,1,25000,1,5,1150,1,1150,1,1000,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2017-09-11 00:00:00','Test entry',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(10,4,0,0,0,'0','0',0,'bdkjnvkj','Agra','Agra',350,34,400028,'India','Agra','Agra',0,34,400028,'India',109,'Closed',4000000,200000,500000,4999999,288888,0,0,1,9788887,1,1,1,9988887,1,20,1997777,1,499444,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2017-09-11 00:00:00','Test entry',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(11,3,0,0,0,'0','0',0,'Vinay','Mumbai','Mumbai',215,21,400070,'India','Mumbai','Mumbai',0,21,400070,'India',2,'Closed',1000,1000,1000,100,100,100,100,1,2400,1,1,1,3400,1,5,160,1,160,1,100,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2017-09-11 00:00:00','Test entry',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(12,5,0,2,0,'20-09-2017','19-09-2018',2,'Durgapratap','mumbai','mumbai',209,21,400075,'India','mumbai2','mumbai',0,21,400075,'India',223,'Closed',1000,0,10000,0,55,0,0,0,0,0,0,0,0,1,5,553,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,1,'2017-09-11 00:00:00','Test entry',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(13,3,0,0,0,'0','0',0,'Rupeeboss Services Pvt Ltd','LBS Marg','Phoenix Market City, Kurla',215,21,400070,'India','LBS Marg','Phoenix Market City, Kurla',0,21,400070,'India',5,'Closed',100000,11111,11111,0,0,0,0,1,111111,1,1,1,122222,1,15,18333,1,6111,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,'2017-09-14 06:03:11','Test entry',NULL,NULL,NULL,NULL,1,NULL,NULL,1,NULL,NULL,1,1,'2017-09-22 11:22:43'),(14,6,0,0,0,'0','0',0,'Pradeep','Mumbai','Mumbai',215,21,400070,'India','Mumbai','Mumbai',0,21,400070,'India',238,'Closed',0,0,0,0,0,10000000,0,1,10000000,1,1,1,10000000,0,5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,'2017-09-14 07:36:12','Office Cum Godown',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(15,6,0,0,0,'0','0',0,'pratap','mumbai','mumbai',107,13,400075,'India','mumbai','mumbai',0,21,400075,'India',241,'Closed',100000,100000,100000,1,100000,100000,100000,1,500001,1,1,1,600001,1,5,20000,1,20000,1,0,1,0,1,0,1,0,1,0,0,0,1,0,1,0,1,'2017-09-14 12:28:23','wqeqw',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(16,6,0,0,0,'0','0',0,'Durgapratap','mumbai','mumbai',209,21,400075,'India','mumbai','mumbai',0,21,400075,'India',239,'Open',100000,100000,0,100000,0,100000,100000,0,0,0,0,0,0,1,5,15000,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,1,'2017-09-14 12:30:00','iqwe',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-22 11:22:43'),(17,3,0,2,0,'13-09-2017','12-09-2018',1,'DPRB','Delhi','Azamgarh',359,34,400075,'India','Delhi','Azamgarh',359,34,400075,'India',3,'Closed',100000,1,1,1,1,1,1,1,6,1,7,1,7,1,25,1,1,0,1,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,2,'2017-09-21 06:04:18','loan','DP','developer','dp@gmail.com','8898540057',NULL,NULL,NULL,1,'101101','2017-09-21 06:20:16',1,1,'2017-09-22 11:22:43'),(18,4,0,0,0,'0','0',0,'nk.sndk.jnswk','mumbai','mumbai',73,12,400028,'India','mumbai','mumbai',73,12,400028,'India',179,'Closed',1000000,0,4000000,0,15000000,2400000,0,1,22400000,1,22400000,1,22400000,1,10,2000000,1,1000000,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,'2017-09-21 07:30:51','manufacturing','sagar','svp','sagar.tejuja@gmail.com','9819600699',1,'101181','2017-09-26 12:36:24',1,'101101','2017-09-26 12:38:12',1,1,'2017-09-22 11:22:43'),(19,3,0,0,0,'0','0',0,'Jai HInd Co-op','Mum','Mum',215,21,400070,'India','Mum','Mum',215,21,400070,'India',4,'Closed',1000,1000,1000,1000,1000,1000,1000,1,6000,1,7000,1,7000,1,5,250,1,250,0,0,1,1000,0,0,0,0,0,0,0,0,0,0,0,0,2,'2017-09-21 08:03:02','Bank','Vinay','UW','vinaykumar.rai@landmarkinsurance.in','9619977857',NULL,NULL,NULL,1,'101101','2017-09-26 12:38:03',1,1,'2017-09-22 11:22:43'),(20,4,0,0,0,'0','0',0,'dp','dp','dadar',215,21,0,'India','dp','dadar',215,21,0,'India',15,'Closed',100000000,100000,2500000,350000,0,0,0,1,102850000,1,102950000,1,102950000,0,5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2017-09-22 12:00:55','gcumdbj','lsn','NLKS','dnlkdsn@bajaj.com','9819600699',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL),(21,4,0,0,0,'0','0',0,'hdlsnl','mumbai','mumbai',215,21,400028,'India','mumbai','mumbai',215,21,400028,'India',153,'Closed',1000000,120000,2500000,5000000,2000000,0,0,1,10500000,1,10620000,1,10620000,1,5,531000,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,'2017-09-25 11:54:34','paints','sagar','svp','sagar.tejuja@gmail.com','9819600699',1,'101181','2017-09-25 12:03:57',1,'101101','2017-09-26 12:38:10',1,NULL,NULL),(22,4,0,0,0,'0','0',0,'bekjndcl','mumbai','mumbai',215,21,400028,'India','mumbai','mumbai',215,21,400028,'India',54,'Closed',10000000,100000,3000000,4000000,0,0,0,1,17000000,1,17100000,1,17100000,1,5,855000,1,855000,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,'2017-09-26 06:05:29','chemicals','pranav','ndknk','pranav@gamail.com','9819600699',0,'101181','2017-10-04 12:16:17',NULL,NULL,NULL,1,NULL,NULL),(23,4,0,0,0,'0','0',0,'Rupeeboss Pvt Ltd','Test','Test',215,21,400070,'India','Test','Test',215,21,400070,'India',12,'Closed',125000,150000,100000,0,0,0,0,1,225000,1,375000,1,375000,1,5,18750,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2017-09-29 12:04:32','Test Entry','Kishor Sagar','Manager','kishore.sagar@rupeeboss.com','9821982346',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL),(24,4,0,0,0,'0','0',0,'Rsfdsf','sdf','dsf',215,21,400070,'India','sdf','dsf',215,21,400070,'India',12,'Closed',125000,120000,300000,0,0,0,0,1,425000,1,545000,1,545000,1,10,54500,1,27250,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,'2017-09-29 12:15:19','test','k','f','dp@gmail.com','9723423432',1,'101181','2017-10-05 12:15:32',1,'101101','2017-09-29 12:18:10',1,NULL,NULL),(25,3,0,0,0,'0','0',0,'Anuj Grover','Delhi','Delhi',447,9,110058,'India','Delhi','Delhi',447,9,110058,'India',9,'Closed',100000,10000,100000,100000,100000,100000,100000,1,600000,1,610000,1,610000,1,10,41000,1,20500,1,12000,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,'2017-10-06 07:18:34','Hotel','Anuj','AGM','anuj.grover@landmarkinsurance.in','9619977857',NULL,NULL,NULL,1,'101101','2017-10-06 07:20:04',1,NULL,NULL),(26,4,0,0,0,'0','0',0,'uttar and co','hk.dnckn','jcjlkdnc',215,21,400028,'India','hk.dnckn','jcjlkdnc',215,21,400028,'India',88,'Closed',10000000,100000,1000000,29999000,0,0,0,1,40999000,1,41099000,1,41099000,1,5,2054950,1,2054950,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,'2017-10-13 07:19:26','pipes','dbdjhsb','ndckcjsb','sagar.tejuja@gmail.com','9819600699',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL),(27,3,0,0,0,'0','0',0,'ddddddddddddddddd','mumbai','mumbai',209,21,400075,'India','mumbai','mumbai',209,21,400075,'India',5,'Closed',100000,100000,0,0,0,0,0,1,100000,1,200000,1,200000,0,5,0,1,10000,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,'2017-10-25 12:45:50','u','Durgapratap','d','durga.rajbhar@rupeeboss.com','8898540057',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL),(28,6,0,0,0,'0','0',0,'Mahwah, NJ, United States','mumbai2','mumbai',209,21,400075,'India','mumbai2','mumbai',209,21,400075,'India',242,'Closed',11111,11111,11111111,1111111,11111,111111,1111111,1,13466666,1,13477777,0,0,1,5,612778,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,'2017-11-02 12:39:15','ewrewr','wrwer','werewr','rajbhardp@gmail.com','8898540057',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `firecal_quote_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `firecal_quote_master_history`
--

DROP TABLE IF EXISTS `firecal_quote_master_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `firecal_quote_master_history` (
  `quote_hist_id` int(11) NOT NULL AUTO_INCREMENT,
  `quote_id` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  `change_content` varchar(21844) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`quote_hist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `firecal_quote_master_history`
--

LOCK TABLES `firecal_quote_master_history` WRITE;
/*!40000 ALTER TABLE `firecal_quote_master_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `firecal_quote_master_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `floater_risk_address_data`
--

DROP TABLE IF EXISTS `floater_risk_address_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `floater_risk_address_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `risk_address` longtext,
  `risk_states` longtext,
  `risk_districts` longtext,
  `risk_pincodes` longtext,
  `quote_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `floater_risk_address_data`
--

LOCK TABLES `floater_risk_address_data` WRITE;
/*!40000 ALTER TABLE `floater_risk_address_data` DISABLE KEYS */;
INSERT INTO `floater_risk_address_data` VALUES (1,'0','0','0','0',28,'2017-11-02 12:39:15','2017-11-02 12:39:15');
/*!40000 ALTER TABLE `floater_risk_address_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ghi_xl_data`
--

DROP TABLE IF EXISTS `ghi_xl_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ghi_xl_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `name_of_insured` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `date_of_joining` date NOT NULL,
  `sum_insured` int(20) NOT NULL,
  `related_to` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ghi_xl_data`
--

LOCK TABLES `ghi_xl_data` WRITE;
/*!40000 ALTER TABLE `ghi_xl_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `ghi_xl_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_master`
--

DROP TABLE IF EXISTS `group_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_master` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(250) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_master`
--

LOCK TABLES `group_master` WRITE;
/*!40000 ALTER TABLE `group_master` DISABLE KEYS */;
INSERT INTO `group_master` VALUES (1,'ABC Group',1,'2017-10-05 07:19:25'),(2,'Landmark Group',1,'2017-10-05 07:19:25'),(3,'Ramani Group',1,'2017-10-05 07:19:25'),(4,'XYZ Group LTD',1,'2017-10-05 10:19:45'),(5,'PVR Group LTD',1,'2017-10-05 10:23:01'),(6,'rwerw',5,'2017-10-05 11:32:43'),(7,'rser',5,'2017-10-05 11:36:23'),(8,'rerwer',5,'2017-10-05 11:38:19'),(9,NULL,NULL,'2017-10-07 09:07:47'),(10,NULL,NULL,'2017-10-07 09:10:11'),(11,NULL,NULL,'2017-10-07 09:11:29');
/*!40000 ALTER TABLE `group_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `industry_type_master`
--

DROP TABLE IF EXISTS `industry_type_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industry_type_master` (
  `industry_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `industry_type` varchar(100) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`industry_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industry_type_master`
--

LOCK TABLES `industry_type_master` WRITE;
/*!40000 ALTER TABLE `industry_type_master` DISABLE KEYS */;
INSERT INTO `industry_type_master` VALUES (1,'Agriculture, hunting and Forestry',1,'2017-10-07 06:02:07'),(2,'Air Conditioning',1,'2017-10-07 06:02:07'),(3,'Alcoholic Beverages',1,'2017-10-07 06:02:07'),(4,'Architectural Hardware',1,'2017-10-07 06:02:08'),(5,'Auto and auto ancillaries',1,'2017-10-07 06:02:08'),(6,'Aviation',1,'2017-10-07 06:02:08'),(7,'Banking',1,'2017-10-07 06:02:08'),(8,'Carbon Products',1,'2017-10-07 06:02:08'),(9,'Cement, Cement Products',1,'2017-10-07 06:02:08'),(10,'Chemicals, Fertilizer, Pigments, Explosive',1,'2017-10-07 06:02:08'),(11,'Coal Mining',1,'2017-10-07 06:02:08'),(12,'Computer Hardware',1,'2017-10-07 06:02:08'),(13,'Construction',1,'2017-10-07 06:02:08'),(14,'Construction Equipments',1,'2017-10-07 06:02:08'),(15,'Construction / Real Estate',1,'2017-10-07 06:02:08'),(16,'Consultancy',1,'2017-10-07 06:02:08'),(17,'Dairy Products',1,'2017-10-07 06:02:08'),(18,'Edible Oil',1,'2017-10-07 06:02:09'),(19,'Education',1,'2017-10-07 06:02:09'),(20,'Electronic and electricals',1,'2017-10-07 06:02:09'),(21,'Engineering',1,'2017-10-07 06:02:09'),(22,'FMCG / Personal Care',1,'2017-10-07 06:02:09'),(23,'Furniture and Fittings',1,'2017-10-07 06:02:09'),(24,'Gems & Jewellery',1,'2017-10-07 06:02:09'),(25,'Glass',1,'2017-10-07 06:02:09'),(26,'Housekeeping',1,'2017-10-07 06:02:09'),(27,'Insurance',1,'2017-10-07 06:02:09'),(28,'IT / ITES / Software',1,'2017-10-07 06:02:10'),(29,'Leather Goods / Tanneries',1,'2017-10-07 06:02:10'),(30,'Media and Entertainment',1,'2017-10-07 06:02:10'),(31,'Metal Mining',1,'2017-10-07 06:02:10'),(32,'Non Alcoholic Beverages',1,'2017-10-07 06:02:10'),(33,'Oil & Gas Exploration and Production',1,'2017-10-07 06:02:10'),(34,'Financial Services',1,'2017-10-07 06:02:10'),(35,'Metals',1,'2017-10-07 06:02:10'),(36,'Mining',1,'2017-10-07 06:02:10'),(37,'Packaged Food and Confectionary',1,'2017-10-07 06:02:10'),(38,'Packaging',1,'2017-10-07 06:02:10'),(39,'Paints',1,'2017-10-07 06:02:10'),(40,'Paper Products',1,'2017-10-07 06:02:10'),(41,'Petrochemical / Refinery',1,'2017-10-07 06:02:10'),(42,'Pharma',1,'2017-10-07 06:02:10'),(43,'Placement',1,'2017-10-07 06:02:11'),(44,'Port Operation and Management',1,'2017-10-07 06:02:11'),(45,'Power, Power Generation and Transmission Distribution',1,'2017-10-07 06:02:11'),(46,'Publishing',1,'2017-10-07 06:02:11'),(47,'Rubber & Plastic Products',1,'2017-10-07 06:02:11'),(48,'Security',1,'2017-10-07 06:02:11'),(49,'Shipping, Shipping Agents, Port Premises',1,'2017-10-07 06:02:11'),(50,'Social Services',1,'2017-10-07 06:02:11'),(51,'Sports',1,'2017-10-07 06:02:11'),(52,'Steel',1,'2017-10-07 06:02:11'),(53,'Sugar',1,'2017-10-07 06:02:11'),(54,'Telecom',1,'2017-10-07 06:02:12'),(55,'Telecom – Equipment',1,'2017-10-07 06:02:12'),(56,'Textile, Apparals',1,'2017-10-07 06:02:12'),(57,'Transport / Logistic',1,'2017-10-07 06:02:12'),(58,'Waste Management',1,'2017-10-07 06:02:12'),(59,'Wholesale / Retails Trading',1,'2017-10-07 06:02:12');
/*!40000 ALTER TABLE `industry_type_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mail_error_log`
--

DROP TABLE IF EXISTS `mail_error_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mail_error_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_code` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mail_error_log`
--

LOCK TABLES `mail_error_log` WRITE;
/*!40000 ALTER TABLE `mail_error_log` DISABLE KEYS */;
INSERT INTO `mail_error_log` VALUES (1,'','Expected response code 250 but got code \"530\", with message \"530 5.7.1 Authentication required\n\"','2017-10-26 16:22:13');
/*!40000 ALTER TABLE `mail_error_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mail_master`
--

DROP TABLE IF EXISTS `mail_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mail_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_email` text,
  `cc_email` text,
  `bcc_email` text,
  `subject_email` text,
  `attachment_path` longtext,
  `mail_msg` longtext,
  `empcode` varchar(45) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mail_master`
--

LOCK TABLES `mail_master` WRITE;
/*!40000 ALTER TABLE `mail_master` DISABLE KEYS */;
/*!40000 ALTER TABLE `mail_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `occupancy_master`
--

DROP TABLE IF EXISTS `occupancy_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `occupancy_master` (
  `occup_id` int(11) NOT NULL AUTO_INCREMENT,
  `occupancy_name` varchar(500) DEFAULT NULL,
  `building_rate` decimal(18,2) NOT NULL,
  `content_rate` decimal(18,2) DEFAULT NULL,
  `stfi_rate` decimal(18,4) DEFAULT NULL,
  `stfi_open_rate` decimal(18,4) DEFAULT NULL,
  `eq_rate` decimal(18,2) DEFAULT NULL,
  `terrorism_rate` decimal(18,2) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`occup_id`,`building_rate`)
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `occupancy_master`
--

LOCK TABLES `occupancy_master` WRITE;
/*!40000 ALTER TABLE `occupancy_master` DISABLE KEYS */;
INSERT INTO `occupancy_master` VALUES (1,'Dwellings, Residential Premises or Society',0.35,0.35,0.0500,NULL,0.05,0.08,3,'2017-08-10 00:00:00'),(2,'Places of worships, Libraries, Museums, Schools, Colleges, Educational and Research Institutes imparting training in various crafts',0.35,0.35,0.0500,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(3,'Hospitals including X-ray and other Diagnostic clinics',0.35,0.35,0.0500,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(4,'Office premises, Meeting Rooms',0.35,0.35,0.0500,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(5,'Auditoriums, Planetarium, Mess Houses, Clubs, Marriage Halls',0.35,0.35,0.0500,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(6,'Showrooms and display centres where goods are kept for display and no sales are carried out',0.35,0.35,0.0500,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(7,'Lodging/Boarding Houses',0.35,0.35,0.0500,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(8,'Cycle Shed and Dish Antenna, Indoor stadiums',0.35,0.35,0.0500,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(9,'Cafes, Restaurants, Hotels, Confectioner & Sweet meat sellers',1.65,1.65,0.0750,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(10,'Shops dealing in goods otherwise not provided for including Laundries, Battery Charging Service Stations, Dry Cleaning, Amusement parks, Hoarding, Neon signs and Sports Galleries, Outdoor stadiums',1.65,2.65,0.0750,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(11,'Shops dealing in hazardous goods as per the list below and Arms & Ammunition dealers, Motor Vehicle showroom including sales and service, Petrol / Diesel Kiosks',1.65,3.65,0.0750,NULL,0.05,0.15,3,'2017-08-10 00:00:00'),(12,'Abrasive Manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(13,'Aerated Water Factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(14,'Aerial Ropeway including trolley stations',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(15,'Agarbatti manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(16,'Aircraft Hangers',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(17,'Airport Terminal Buildings (including all facilities like Cafes, Shops etc) N.B: Airport Cargo complex shall be rated under Section VI',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(18,'Aluminium/ Magnesium Powder Plants',5.25,5.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(19,'Aluminium ,Zinc,Copper Factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(20,'Arecanut and/or Betelnut factories',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(21,'Asbestos Steam Packing and lagging manufacturing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(22,'Atta and Cereal Grinding (excluding Dal Mills)',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(23,'Audio/Video Cassette Manufacturing',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(24,'Automobile Manufacturing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(25,'Bakeries',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(26,'Basket Weavers and Cane Furniture Makers',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(27,'Battery Manufacturing',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(28,'Beedi Factories',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(29,'Biscuit Factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(30,'Bitumenised Paper and / or Hessian Cloth Manufacturing including Tar Felt Manufacturing',3.75,3.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(31,'Book Binders, Envelope and Paper Bag Manufacturing',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(32,'Breweries',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(33,'Brickworks (including refractories and fire bricks)',0.75,0.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(34,'Bridges - Concrete/Steel',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(35,'Bridges-Wooden',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(36,'Building In course of construction',0.75,0.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(37,'Cable Manufacturing',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(38,'Camphor Manufacturing',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(39,'Candle Works',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(40,'Canning Factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(41,'Capsule Manufacturing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(42,'Carbon paper / Typewriter Ribbon Manufacturing',2.50,2.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(43,'Cardamom Factories',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(44,'Cardboard Box Manufacturing',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(45,'Carpenters, Wood wool Manufacturing, Furniture Manufacturing and other wood worker shops (excluding saw mill)',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(46,'Carpet and Drugget Manufacturing (Cotton/jute/wool)',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(47,'Carpet and Drugget Manufacturing (Others)',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(48,'Cashew nut Factories',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(49,'Cattle feed Mill',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(50,'Celluloid Goods Manufacturing',14.75,14.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(51,'Cement / asbestos/concrete products Manufacturing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(52,'Cement Factories',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(53,'Ceramic Factories and Crockery and Stoneware pipe Manufacturing/Clay Works',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(54,'Chemical Manufacturing(Using materials with Flash Point below 32OC), Bulk Drug Manufacturing',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(55,'Chemical Manufacturing(others), Pharmaceuticals, Toiletry products',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(56,'Cigar and Cigarette Manufacturing',2.50,2.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(57,'Cigarette Filter Manufacturing (Using Solvents with Flash Point below 32OC )',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(58,'Cigarette Filter Manufacturing (Others)',2.50,2.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(59,'Cinema Film Production Studios',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(60,'Cinematography Film Editing, Laboratory and Sound recording rooms where Film processing is carried out',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(61,'Cinematography Film Editing, Laboratory and Sound recording rooms without Film processing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(62,'Cinema Theatres',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(63,'Circus, Touring Drama Troupes and Touring Cinema Theatres',10.25,10.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(64,'Cloth Processing units situated outside the compound of Textile mills',1.50,1.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(65,'Coal/Coke/Charcoal ball & briquettes Manufacturing',5.25,5.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(66,'Coal Processing Plants',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(67,'Coffee Curing, Roasting / Grinding',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(68,'Coir Factories',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(69,'Collieries - underground Mechinery and pit head gear',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(70,'Condensed Milk Factories, Milk Pasturisings Plants and Dairies',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(71,'Confectionery Manufacturing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(72,'Contractors Plant and Machinery At one location only',3.50,3.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(73,'Contractors Plant and Machinery Anywhere in India (at specified locations)',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(74,'Cork Products Manufacturing',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(75,'Cotton Gin and Press Houses',10.25,10.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(76,'Cotton Seed cleaning / Delinting Factory',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(77,'Dehydration Factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(78,'Detergent Manufacturing with Sulphonation Plant',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(79,'Detergent Manufacturing (Others)',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(80,'Distilleries',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(81,'Duplicating/stencil paper Manufacturing',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(82,'Electric Generation Stations Hydro Power stations',1.00,1.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(83,'Electric Generation Stations Others',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(84,'Electric Lamp /T.V. Picture Tube Manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(85,'Electronic Goods Manufacturing /Assembly',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(86,'Electronic Software Parks',1.00,1.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(87,'Enamel-ware factories',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(88,'Engineering Workshop - - Structural Steel fabricators, Sheet Metal fabricators, Hot/Cold Rolling, Pipe Extruding, Stamping, Pressing, Forging Mills, Metal smelting, Foundries, Galvanising works, Metal Extraction, Ore processing (other than Aluminium, Copper, Zinc)',1.00,1.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(89,'Engineering Workshop (Others), Clock/Watch Manufacturing , Motor Vehicle Garages',1.50,1.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(90,'Exhibitions, Fetes, Mandaps',10.25,10.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(91,'Explosives / Blasting Factories',5.25,5.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(92,'Fertiliser Manufacturing (other than those rateable under Petrochemical Tariff)',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(93,'Filter and wax paper Manufacturing',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(94,'Fireworks Manufacturing',5.25,5.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(95,'Flax / Hemp Mills',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(96,'Flour Mills',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(97,'Foamed Plastics Manufacturing and / or converting plants',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(98,'Foam Rubber Manufacturing',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(99,'French Polish Manufacturing',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(100,'Fruit and vegetable drying/dehydrating factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(101,'Fruit products and Condiment Factories (including fruit pulp making)',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(102,'Garment Makers, Topee, Hats and the like makers',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(103,'Ghee Factories including vegetable Ghee mfg.',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(104,'Glass Fibre Manufacturing',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(105,'Glass wool Manufacturing',2.50,2.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(106,'Glass Manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(107,'Gold thread factories / Gilding factories',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(108,'Granite Factories using inflammable solvents',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(109,'Granite Factories (Others)',0.75,0.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(110,'Graphite electrode Manufacturing',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(111,'Grain/seeds disintegrating/crushing/ Decorticating factories/ Dal mills.',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(112,'Grease / Wax Manufacturing',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(113,'Green Houses/ Algae/ Spirulina and the like',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(114,'Gum/Glue/Gelatine Manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(115,'Gypsum  board manufacturer',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(116,'Hoisery,lace, Embroidery/Thread factories',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(117,'Ice candy and Ice cream Manufacturing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(118,'Ice factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(119,'Incandescent Gas mantle Manufacturing',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(120,'Industrial Diamonds Manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(121,'Industrial Gas Manufacturing',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(122,'Ink (excluding printing ink) Manufacturing',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(123,'Jaggery Manufacturing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(124,'Jute Mills',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(125,'Katha Manufacturing',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(126,'Khandsari Sugar Manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(127,'Lac or Shellac Factories',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(128,'Leather Cloth Factories',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(129,'Leather Goods Manufacturing ( incl. boot/shoe)',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(130,'Lime Kiln',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(131,'Lithographic presses',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(132,'Liquified Gas Bottling Plants',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(133,'Malt Extraction Plants',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(134,'Man-made Fibre Manufacturing (using Cellulose)',1.00,1.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(135,'Man-made Fibre Manufacturing Plant (Others)',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(136,'Manure Blending works',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(137,'Match Factories',5.25,5.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(138,'Mattress and Pillow making',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(139,'Metallizing works ( involving metals only)',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(140,'Metallising Works (others)',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(141,'Metal/Tin printers',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(142,'Mica Products Manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(143,'Mineral Oil blending and processing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(144,'Mosaic Factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(145,'Mushroom Growing Premises (Excluding Crops)',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(146,'Nitro Cellulose Manufacturing',14.75,14.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(147,'Non-woven fabric Manufacturing',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(148,'Oil Extraction',3.50,3.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(149,'Oil Distillation Plants (essential)',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(150,'Oil Mills refining ( Veg/Animal)',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(151,'Oil Mills (Vegetable)',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(152,'Oil and Leather Cloth Factories',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(153,'Paint factories (Water based)',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(154,'Paint (others) & Varnish Factories',3.50,3.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(155,'Paints - Nitrocellulose based',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(156,'Pan Masala making',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(157,'Paper and Cardboard Mills (including Lamination)',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(158,'Particle Board Manufacturing',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(159,'Pencil Manufacturing',3.75,3.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(160,'Petroleum Coke Calcination',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(161,'Plastic Goods Manufacturing (excluding Foam Plastics)',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(162,'Plywood / Wood veneering Factories/ Laminating Factories',5.25,5.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(163,'Polyester Film Manufacturing / BOPP Film Manufacturing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(164,'Port Premises including jetties and equipment thereon And other port facilities',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(165,'Poultry Farms (Excluding birds therein)',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(166,'Presses for coir fibres/waste/Grass/fodder/boosa/Jute',10.25,10.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(167,'Presses for coir yarn / cotton/senna leaves',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(168,'Presses for carpets, rugs and tobacco',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(169,'Presses for hides and skins',2.50,2.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(170,'Printing Ink Manufacturing / Roller composition factories',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(171,'Printing Press',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(172,'Pulverising Plants(Metals and non-hazardous goods)',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(173,'Pulverizing Plants (Others)',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(174,'Rice Mills',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(175,'Rice Polishing Units',1.50,1.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(176,'Rope works (Plastic), Assembling of Plastic Goods such as Toys and the like',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(177,'Rope Works (others)',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(178,'Rubber Factories',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(179,'Rubber Goods Mfg with Spreading',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(180,'Rubber Goods Manufacturing without spreading',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(181,'Salt crushing Factories and Refineries',0.75,0.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(182,'Saw Mills (including Timber Merchants premises where sawing is done)',5.25,5.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(183,'Sea Food / Meat Processing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(184,'Silk Mills / Spun Silk Mills',1.50,1.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(185,'Snuff Manufacturing',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(186,'Soap Manufacturing',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(187,'Sponge Iron Plants',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(188,'Spray Painting, Powder coating',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(189,'Stables (excluding animals)',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(190,'Starch Factories',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(191,'Stone quarries',0.75,0.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(192,'Sugar Candy Manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(193,'Sugar factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(194,'Surgical Cotton Manufacturing',4.25,4.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(195,'Sweetmeat Manufacturing',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(196,'Tanneries',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(197,'Tapioca factories',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(198,'Tarpaulin and canvas proofing factories',3.75,3.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(199,'Tea blending/packing factories',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(200,'Tea Factories',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(201,'Telephone Exchanges',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(202,'Textile Mills - Spinning mills',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(203,'Textile Mills - Composite mills (Composite Mills are those where activities from Blow Room to Cloth processing are involved)',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(204,'Tile & Pottery works',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(205,'Tiny sector Industries with values at risk not exceeding Rs 10 lakhs',0.75,0.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(206,'Tissue Culture Premises (Excluding Crops)',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(207,'Tobacco Curing / Redrying Factories',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(208,'Tobacco grinding/ crushing Manufacturing',3.25,3.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(209,'Turpentine and rosin distilleries',6.25,6.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(210,'Tyres and Tubes Manufacturing',2.00,2.00,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(211,'Tyre Retreading and Resoling factories',2.75,2.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(212,'Umbrella Assembly factories',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(213,'Velvet Cloth Manufacturing',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(214,'Vermicelli factories',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(215,'Weigh Bridges',1.25,1.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(216,'Weaving Mills',1.50,1.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(217,'Wheat Threshers',10.25,10.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(218,'Wood seasoning/treatment/ impregnation',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(219,'Wool cleaning and pressing factories',2.25,2.25,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(220,'Woollen Mills',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(221,'Yarn Processing',1.50,1.50,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(222,'Zip fasteners Manufacturing',1.75,1.75,0.1875,NULL,0.00,0.23,4,'2017-08-10 00:00:00'),(223,'Analytical / Quality Control Laboratories',2.00,2.00,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(224,'Boiler House',1.25,1.25,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(225,'Dam',0.75,0.75,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(226,'Effluent /Sewage Treatment Plant',1.25,1.25,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(227,'Electric Sub-Station',1.25,1.25,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(228,'Electric Transmission / Distribution Lines',1.25,1.25,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(229,'Pipe lines (carrying water only)',0.75,0.75,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(230,'Pipe lines (others)',1.00,1.00,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(231,'Pump House (Water)',1.25,1.25,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(232,'Pump House (Others)',2.25,2.25,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(233,'Railway tracks',2.75,2.75,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(234,'Roads',1.75,1.75,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(235,'Water Treatment Plant',0.75,0.75,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(236,'Wireless Transmitting Stations',1.25,1.25,0.1875,NULL,0.00,0.23,5,'2017-08-10 00:00:00'),(237,'Storage of Non-hazardous goods subject to warranty that hazardous  goods of Category I, II, III , Coir waste, Coir fibre and Caddies are not stored therein.',0.75,2.25,0.1875,1.1250,0.00,0.23,6,'2017-08-10 00:00:00'),(238,'Storage of Category I hazaardous Goods subject to warranty that goods listed in Category II, III, Coir waste, Coir fibre and  Caddies are not stored therein.',2.25,5.75,0.1875,1.1250,0.00,0.23,6,'2017-08-10 00:00:00'),(239,'Storage of hazardous Goods listed in Category II subject to warranty that goods listed in Category III, Coir waste, Coir fibre and  Caddies are not stored therein.',4.25,8.25,0.1875,1.1250,0.00,0.23,6,'2017-08-10 00:00:00'),(240,'Storage of hazardous Goods listed in Category III subject to warranty that Coir waste, Coir fibre and , Caddies are not stored therein.',5.25,10.25,0.1875,1.1250,0.00,0.23,6,'2017-08-10 00:00:00'),(241,'Transporter’s godowns & Godowns of clearing and forwarding agents.',5.25,10.25,0.1875,1.1250,0.00,0.23,6,'2017-08-10 00:00:00'),(242,'Storage of Coir Waste ,Coir Fibre, Caddies',11.75,16.75,0.1875,1.1250,0.00,0.23,6,'2017-08-10 00:00:00'),(243,'Cold Storage premises',2.25,2.25,0.1875,1.1250,0.00,0.23,6,'2017-08-10 00:00:00'),(244,'Gas Holders/ Bullets/spheres and storages for liquified gases except for Nitrogen, Carbon dioxide and inert gases',4.75,4.75,0.1875,NULL,0.00,0.23,7,'2017-08-10 00:00:00'),(245,'Gas Holders/ Vessels for Nitrogen, Carbon dioxide and inert gases',1.75,1.75,0.1875,NULL,0.00,0.23,7,'2017-08-10 00:00:00'),(246,'Tanks containing liquids flashing at 32 0C and below',3.25,3.25,0.1875,NULL,0.00,0.23,7,'2017-08-10 00:00:00'),(247,'Tanks (others)',1.75,1.75,0.1875,NULL,0.00,0.23,7,'2017-08-10 00:00:00');
/*!40000 ALTER TABLE `occupancy_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policy_category_master`
--

DROP TABLE IF EXISTS `policy_category_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policy_category_master` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_category` varchar(45) DEFAULT NULL,
  `policy_abbr` varchar(45) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policy_category_master`
--

LOCK TABLES `policy_category_master` WRITE;
/*!40000 ALTER TABLE `policy_category_master` DISABLE KEYS */;
INSERT INTO `policy_category_master` VALUES (1,'Non Motor','NMOT',1,'2017-10-05 06:11:15'),(2,'Motor','MOT',1,'2017-10-05 06:11:15');
/*!40000 ALTER TABLE `policy_category_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policy_documents`
--

DROP TABLE IF EXISTS `policy_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policy_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_doc_path` longtext,
  `visiting_card_path` longtext,
  `mandate_letter_path` longtext,
  `inspection_path` longtext,
  `lead_id` int(11) DEFAULT NULL,
  `quote_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policy_documents`
--

LOCK TABLES `policy_documents` WRITE;
/*!40000 ALTER TABLE `policy_documents` DISABLE KEYS */;
INSERT INTO `policy_documents` VALUES (1,'','','0','0',NULL,28,'2017-11-02 12:39:15','2017-11-02 12:39:15');
/*!40000 ALTER TABLE `policy_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policy_lead_data`
--

DROP TABLE IF EXISTS `policy_lead_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policy_lead_data` (
  `lead_id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_category` int(11) DEFAULT NULL,
  `policy_type` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `client_name` varchar(250) DEFAULT NULL,
  `business_type` varchar(100) DEFAULT NULL,
  `current_insurer_id` int(11) DEFAULT NULL,
  `renewal_date` datetime DEFAULT NULL,
  `sum_insured` decimal(18,0) DEFAULT NULL,
  `pretax_premium` decimal(18,0) DEFAULT NULL,
  `document_path` varchar(200) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`lead_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policy_lead_data`
--

LOCK TABLES `policy_lead_data` WRITE;
/*!40000 ALTER TABLE `policy_lead_data` DISABLE KEYS */;
INSERT INTO `policy_lead_data` VALUES (1,1,2,5,'Test Company Ltd.','Hotel',1,'2017-01-01 00:00:00',190000,18000,'',3,'2017-10-05 10:19:45',NULL),(2,1,2,5,'Test Company Ltd.','Hotel',1,'2017-01-01 00:00:00',190000,18000,'',4,'2017-10-05 10:23:01',NULL),(3,1,4,1,'PRATIK S TELANG','asdasdasdas',18,'2017-11-20 00:00:00',324234,423423423,'/storage/lead_documents/SaM1oHo514FJO9CpAOqbeqIJB5goD50XQCmNNfWH.pdf',5,'2017-10-05 11:28:09',NULL),(4,1,4,6,'werwer','rwer',16,'2017-11-20 00:00:00',23423423,4234234,'/storage/lead_documents/hTAYDOxlsBrwLlpXdMj3dfjMz9AQxmCbR69TvuYo.pdf',5,'2017-10-05 11:32:43',NULL),(5,1,3,7,'ser','esrs',17,'2017-11-30 00:00:00',34234,4234234,'/storage/lead_documents/YYuZpqCA6yPtrc7cRNxXjNksne5EcxPW0eJn4BQH.pdf',5,'2017-10-05 11:36:23',NULL),(6,1,4,8,'werwe','rwerwe',20,'2017-11-30 00:00:00',234234234,423423,'/storage/lead_documents/PfIiasGr381v63aB2ICbC4jyGV4XDhhDWPHpfe3S.pdf',5,'2017-10-05 11:38:19',NULL),(7,1,28,3,'Ramani Hotels Limited','Hotel',26,'2017-11-09 00:00:00',150000000,68631,NULL,5,'2017-10-09 07:35:21',NULL),(8,1,28,3,'Ramee Hotels Pvt. Ltd.','Hotel',26,'2017-11-09 00:00:00',633744000,251739,NULL,5,'2017-10-09 07:35:21',NULL),(9,1,NULL,3,'Ramee Hotel','Hotel',7,'2018-01-02 00:00:00',NULL,500000,'/storage/lead_documents/nSxgjoTrCRxYXcNt9gBT9eXsBiioveKGHP6kHaKg.pdf',1,'2017-10-31 08:26:10',NULL);
/*!40000 ALTER TABLE `policy_lead_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policy_upload_files`
--

DROP TABLE IF EXISTS `policy_upload_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policy_upload_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `path` text NOT NULL,
  `quote_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `expiry_date` datetime NOT NULL,
  `net_premimum` varchar(50) NOT NULL,
  `policy_category` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `userid_idx` (`uid`),
  KEY `product_id_idx` (`product_id`),
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product_master` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `userid` FOREIGN KEY (`uid`) REFERENCES `user_master` (`userid`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policy_upload_files`
--

LOCK TABLES `policy_upload_files` WRITE;
/*!40000 ALTER TABLE `policy_upload_files` DISABLE KEYS */;
INSERT INTO `policy_upload_files` VALUES (1,1,'sdfsdaf.text',17,'test pvt ltd',1,'2017-04-04 00:00:00','50000','axs','2017-09-29 07:12:37','2017-09-29 07:12:37'),(2,5,'policy_container/llhBSaJJhM9Y0vBm2eRTE10Cezs6UQVscMyL8aJU.png',-1,'MANISH Kumar Dixit',1,'2017-08-29 00:00:00','125000','sdasd','2017-09-29 10:41:14','2017-09-29 10:41:14'),(3,5,'policy_container/7vFHo6TldgZjtMZc8zU8fTRw2eV1PkPfuJqYuNdc.pdf',-1,'Praveen Kolajangam',1,'2017-09-05 00:00:00','125000','motor','2017-09-29 10:49:27','2017-09-29 10:49:27'),(4,5,'policy_container/MMmoOOZZ49SQbjuEIKfPwE0rBrM5WZjQNqkT5RI9.pdf',-1,'asd',1,'2017-09-13 00:00:00','125000','motor','2017-09-29 10:52:59','2017-09-29 10:52:59'),(5,5,'policy_container/nbcieHUpSlNif7XSjjY1i46CoPpruW7TpMzIOGGy.jpeg',-1,'Manish Kumar Dixit',4,'2017-09-20 00:00:00','125000','motor','2017-09-29 11:14:32','2017-09-29 11:14:32'),(6,5,'policy_container/5a4Iq1LcpVdql9jDHRJ1CfRgtVd37xEasNvxD7Di.html',-1,'Rupeeboss Pvt Ltd',1,'2017-09-29 00:00:00','120000','motor','2017-09-29 11:16:55','2017-09-29 11:16:55'),(7,5,'public/policy_container/vvwtAAvdouTww6G7fmX5Add2dMEhZLBE56ubdzkf.pdf',-1,'MANISH Kumar Dixit',1,'2017-10-18 00:00:00','125000','motor','2017-10-04 11:25:36','2017-10-04 11:25:36'),(8,5,'public/policy_container/KL0lRJwWWfFVSPJmCW9txigKUmBOPqPC8O59ghIe.pdf',-1,'MANISH Kumar Dixit',3,'2017-10-18 00:00:00','125000','non-motor','2017-10-04 11:25:36','2017-10-04 11:25:36'),(9,5,'public/policy_container/Sm2Lv9lofUKkpUNZcDlWQH4KDLTtmm55Li0Fjft9.pdf',-1,'MANISH Kumar Dixit',1,'2017-10-18 00:00:00','125000','motor','2017-10-04 11:27:21','2017-10-04 11:27:21'),(10,5,'public/policy_container/vb6Cd8c3IGEcgaKg3Mc1tW7CdwLFl3oBkhDGSJK5.pdf',-1,'da',2,'2017-10-09 00:00:00','125000','non-motor','2017-10-04 11:28:58','2017-10-04 11:28:58'),(11,5,'public/policy_container/MihYVOoLKWa9YHWlIHr5sHYuqWxbjSF2RhzqbGR3.pdf',-1,'da',2,'2017-10-09 00:00:00','125000','non-motor','2017-10-04 11:32:30','2017-10-04 11:32:30'),(12,5,'public/policy_container/52ZwrVprqj3SfrZgjna7uNQLplEkQEonDXFAa2ab.pdf',-1,'da',2,'2017-10-09 00:00:00','125000','non-motor','2017-10-04 11:34:20','2017-10-04 11:34:20'),(13,5,'public/policy_container/ykwgn9W0Ru5j8Bgm1SZMWdp2JyM5DAwFZ93JsWZz.pdf',-1,'da',2,'2017-10-09 00:00:00','125000','non-motor','2017-10-04 11:36:59','2017-10-04 11:36:59'),(14,5,'public/policy_container/YFk5AZr8ROlmGo3NwhodfUNKPtmS14m4LCTrjlN6.pdf',-1,'da',2,'2017-10-09 00:00:00','125000','non-motor','2017-10-04 11:37:28','2017-10-04 11:37:28'),(15,5,'public/policy_container/nyStnW9jiRacUKsTqvUGUqrKIjKjFa9eMMtaEWVU.pdf',-1,'da',2,'2017-10-09 00:00:00','125000','non-motor','2017-10-04 11:38:00','2017-10-04 11:38:00'),(16,5,'public/policy_container/Gx3KUHO0X0Knx5wQB02qqatAJWvmxdzLMoBOup1P.pdf',-1,'ewr',1,'2017-10-10 00:00:00','125000','non-motor','2017-10-04 11:38:38','2017-10-04 11:38:38'),(17,5,'public/policy_container/RJr5N0DkAXxHqHp4hEwU9DPvzInwz88mOWOKemrq.pdf',-1,'ewr',1,'2017-10-10 00:00:00','125000','non-motor','2017-10-04 11:39:09','2017-10-04 11:39:09'),(18,5,'public/policy_container/J7xJu9RZrPidMygha5Z6dtWxnfAP9cIKzeS3FWo2.pdf',-1,'ewr',1,'2017-10-10 00:00:00','125000','non-motor','2017-10-04 11:40:14','2017-10-04 11:40:14'),(19,5,'public/1mBfAyTioFpn1cVDfCGZ42Nm83aDr5xdsVO3SbP0.pdf',-1,'ewr',1,'2017-10-10 00:00:00','125000','non-motor','2017-10-04 11:41:39','2017-10-04 11:41:39'),(20,5,'public/qhMkrnygnXwPqtLKVT59u1ikmisVBGwoNJo5cir6.pdf',-1,'ewr',1,'2017-10-10 00:00:00','125000','non-motor','2017-10-04 11:44:13','2017-10-04 11:44:13'),(21,5,'public/ulSeP76bz7YizE7EH3UTEGzCxFKFq1pRxCiUXfHS.pdf',-1,'MANISH Kumar Dixit',3,'2017-10-17 00:00:00','125000','non-motor','2017-10-04 11:44:44','2017-10-04 11:44:44'),(22,5,'public/e71vmwu6X45kWvxbI2hitZHRekMHT1dR7VOOGdqB.pdf',-1,'MANISH Kumar Dixit',3,'2017-10-17 00:00:00','125000','non-motor','2017-10-04 11:46:39','2017-10-04 11:46:39'),(23,5,'public/policy_container/taJOVu51q0wbhhP1f0xjib4iyteNbvZ17Ku6nmXa.pdf',-1,'MANISH Kumar Dixit',3,'2017-10-17 00:00:00','125000','non-motor','2017-10-04 11:47:01','2017-10-04 11:47:01'),(24,2,'public/policy_container/csChXcW4HDISnxlIaoHhhKVRhx4BYuPlHWeeYlmC.pdf',-1,'Mandhana Retail Ventures Pvt. Ltd',1,'2017-10-31 00:00:00','200000','non-motor','2017-10-04 12:13:35','2017-10-04 12:13:35');
/*!40000 ALTER TABLE `policy_upload_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_master`
--

DROP TABLE IF EXISTS `product_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_master` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_master`
--

LOCK TABLES `product_master` WRITE;
/*!40000 ALTER TABLE `product_master` DISABLE KEYS */;
INSERT INTO `product_master` VALUES (1,'Standard Fire and Special Perils (SFSP)',1,1,'2017-09-18 14:02:18',NULL),(2,'Group Mediclaim',1,1,'2017-09-18 14:02:18',NULL),(3,'Group Personal Accident',1,1,'2017-09-18 14:02:18',NULL),(4,'Director and Officers Liability',1,1,'2017-09-18 14:02:18',NULL),(5,'Workmen\'s Compensation',1,1,'2017-09-18 14:02:18',NULL),(6,'Project Insurance - CAR/EAR',1,1,'2017-09-18 14:02:18',NULL),(7,'Burglary and House Breaking',1,1,'2017-10-05 06:49:49',NULL),(8,'Money Insurance',1,1,'2017-10-05 06:49:49',NULL),(9,'Fidelity Guarantee',1,1,'2017-10-05 06:49:50',NULL),(10,'Machinery Breakdown',1,1,'2017-10-05 06:49:50',NULL),(11,'Contractor Plant and Machinery',1,1,'2017-10-05 06:49:50',NULL),(12,'Electronic Equipments Insurance',1,1,'2017-10-05 06:49:50',NULL),(13,'All Risk Policy',1,1,'2017-10-05 06:49:50',NULL),(14,'Industrial All Risk',1,1,'2017-10-05 06:49:50',NULL),(15,'Special Contingency Policy',1,1,'2017-10-05 06:49:50',NULL),(16,'Marine Open',1,1,'2017-10-05 06:49:50',NULL),(17,'Marine STOP',1,1,'2017-10-05 06:49:50',NULL),(18,'Public Liability – Industrial',1,1,'2017-10-05 06:49:50',NULL),(19,'Public Liability – Non Industrial',1,1,'2017-10-05 06:49:50',NULL),(20,'Public Liability – Act Only',1,1,'2017-10-05 06:49:51',NULL),(21,'Product Liability',1,1,'2017-10-05 06:49:51',NULL),(22,'Commercial General Liability',1,1,'2017-10-05 06:49:51',NULL),(23,'Error and Ommision / Professional Indemnity',1,1,'2017-10-05 06:49:51',NULL),(24,'Cyber Crime',1,1,'2017-10-05 06:49:51',NULL),(25,'Transporter Legal Liability',1,1,'2017-10-05 06:49:51',NULL),(26,'Carrier and Courier Legal Liability',1,1,'2017-10-05 06:49:51',NULL),(27,'Group Term Life',1,1,'2017-10-05 06:49:51',NULL),(28,'Package Policy',1,1,'2017-10-05 06:49:51',NULL);
/*!40000 ALTER TABLE `product_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quote_comment_thread`
--

DROP TABLE IF EXISTS `quote_comment_thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quote_comment_thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `quote_id` varchar(10) NOT NULL,
  `text` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quote_comment_thread`
--

LOCK TABLES `quote_comment_thread` WRITE;
/*!40000 ALTER TABLE `quote_comment_thread` DISABLE KEYS */;
INSERT INTO `quote_comment_thread` VALUES (1,'110011','fasa','14','lets see what is going on','2017-09-15 10:17:34','2017-09-20 00:23:00',1),(2,'10010','kisan ka shasa','14','bhagf','2017-09-28 00:00:00','2017-09-28 00:00:00',1),(3,'q2we3','pandey','14','asdasdsadasdasdas','2017-09-14 09:00:00','2017-09-28 00:28:00',1),(4,'5','manish','21','Customer Details are not upto date','2017-09-26 10:11:31','2017-09-26 10:11:31',1),(5,'3','Kishor','21','It`s Ok .I have checked the details.','2017-09-26 10:15:00','2017-09-26 10:15:00',1),(6,'5','manish','21','Can I go ahead with the same quote?','2017-09-26 10:24:22','2017-09-26 10:24:22',1),(7,'3','Kishor','22','sada','2017-09-26 10:35:10','2017-09-26 10:35:10',1),(8,'3','Kishor','21','as','2017-09-26 10:35:32','2017-09-26 10:35:32',1),(9,'3','Kishor','21','fsd','2017-09-26 10:36:26','2017-09-26 10:36:26',1),(10,'3','Kishor','21','sad','2017-09-26 10:37:25','2017-09-26 10:37:25',1),(11,'3','Kishor','21','sdas','2017-09-26 10:39:44','2017-09-26 10:39:44',1),(12,'3','Kishor','21','cdas','2017-09-26 10:56:36','2017-09-26 10:56:36',1),(13,'3','Kishor','21','ewr','2017-09-26 10:58:50','2017-09-26 10:58:50',1),(14,'2','Vinaykumar','13','hi','2017-09-26 12:22:52','2017-09-26 12:22:52',1),(15,'2','Vinaykumar','13','hi','2017-09-26 12:22:58','2017-09-26 12:22:58',1),(16,'5','manish','18','uyyu','2017-09-26 12:33:58','2017-09-26 12:33:58',1),(17,'5','manish','21','hcf','2017-09-29 12:40:10','2017-09-29 12:40:10',1);
/*!40000 ALTER TABLE `quote_comment_thread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quote_remarks`
--

DROP TABLE IF EXISTS `quote_remarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quote_remarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quote_id` int(11) DEFAULT NULL,
  `userid` varchar(45) DEFAULT NULL,
  `is_approve` int(11) DEFAULT NULL,
  `remark` varchar(400) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quote_remarks`
--

LOCK TABLES `quote_remarks` WRITE;
/*!40000 ALTER TABLE `quote_remarks` DISABLE KEYS */;
INSERT INTO `quote_remarks` VALUES (1,24,'2',1,'hi dp','2017-10-05 12:07:02'),(2,24,'3',0,'hi manish','2017-10-05 12:08:00'),(3,25,'2',1,'hi','2017-10-07 12:33:01');
/*!40000 ALTER TABLE `quote_remarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_master`
--

DROP TABLE IF EXISTS `section_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_master` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(500) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  `section_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_master`
--

LOCK TABLES `section_master` WRITE;
/*!40000 ALTER TABLE `section_master` DISABLE KEYS */;
INSERT INTO `section_master` VALUES (1,'GENERAL RULES AND REGULATIONS','2017-08-18 00:00:00','Section I'),(2,'STANDARD FIRE AND SPECIAL PERILS POLICY','2017-08-18 00:00:00','Section II'),(3,'Section III - DWELLINGS, OFFICES, HOTELS, SHOPS ETC.','2017-08-18 00:00:00','Section III'),(4,'Section IV - INDUSTRIAL/MANUFACTURING RISKS','2017-08-18 00:00:00','Section IV'),(5,'Section V - UTILITIES LOCATED OUTSIDE THE COMPOUND OF INDUSTRIAL/MANUFACTURING RISKS','2017-08-18 00:00:00','Section V'),(6,'Section VI - STORAGE RISKS LOCATED OUTSIDE THE COMPOUND OF INDUSTRIAL/MANUFACTURING RISKS','2017-08-18 00:00:00','Section VI'),(7,'Section VII - TANK FARMS/GAS HOLDERS LOCATED OUTSIDE THE COMPOUND OF INDUSTRIAL/MANUFACTURING RISKS','2017-08-18 00:00:00','Section VII');
/*!40000 ALTER TABLE `section_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sectionwise_addon_mapping`
--

DROP TABLE IF EXISTS `sectionwise_addon_mapping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sectionwise_addon_mapping` (
  `map_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) DEFAULT NULL,
  `add_on_id` int(11) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`map_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sectionwise_addon_mapping`
--

LOCK TABLES `sectionwise_addon_mapping` WRITE;
/*!40000 ALTER TABLE `sectionwise_addon_mapping` DISABLE KEYS */;
INSERT INTO `sectionwise_addon_mapping` VALUES (1,3,1,'2017-08-23 00:00:00'),(2,3,2,'2017-08-23 00:00:00'),(3,3,3,'2017-08-23 00:00:00'),(4,3,4,'2017-08-23 00:00:00'),(5,3,5,'2017-08-23 00:00:00'),(6,3,6,'2017-08-23 00:00:00'),(7,3,7,'2017-08-23 00:00:00'),(8,4,1,'2017-08-23 00:00:00'),(9,4,2,'2017-08-23 00:00:00'),(10,4,3,'2017-08-23 00:00:00'),(11,4,4,'2017-08-23 00:00:00'),(12,4,5,'2017-08-23 00:00:00'),(13,4,6,'2017-08-23 00:00:00'),(14,4,7,'2017-08-23 00:00:00'),(15,4,8,'2017-08-23 00:00:00'),(16,4,9,'2017-08-23 00:00:00'),(17,4,10,'2017-08-23 00:00:00'),(18,4,11,'2017-08-23 00:00:00'),(19,4,12,'2017-08-23 00:00:00'),(20,4,13,'2017-08-23 00:00:00'),(21,5,1,'2017-08-23 00:00:00'),(22,5,2,'2017-08-23 00:00:00'),(23,5,3,'2017-08-23 00:00:00'),(24,5,4,'2017-08-23 00:00:00'),(25,5,5,'2017-08-23 00:00:00'),(26,5,8,'2017-08-23 00:00:00'),(27,5,9,'2017-08-23 00:00:00'),(28,5,13,'2017-08-23 00:00:00'),(29,6,1,'2017-08-23 00:00:00'),(30,6,2,'2017-08-23 00:00:00'),(31,6,3,'2017-08-23 00:00:00'),(32,6,4,'2017-08-23 00:00:00'),(33,6,5,'2017-08-23 00:00:00'),(34,6,6,'2017-08-23 00:00:00'),(35,6,7,'2017-08-23 00:00:00'),(36,6,8,'2017-08-23 00:00:00'),(37,6,9,'2017-08-23 00:00:00'),(38,6,10,'2017-08-23 00:00:00'),(39,6,12,'2017-08-23 00:00:00'),(40,6,13,'2017-08-23 00:00:00');
/*!40000 ALTER TABLE `sectionwise_addon_mapping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state_master`
--

DROP TABLE IF EXISTS `state_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state_master` (
  `state_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state_master`
--

LOCK TABLES `state_master` WRITE;
/*!40000 ALTER TABLE `state_master` DISABLE KEYS */;
INSERT INTO `state_master` VALUES (1,'ANDAMAN AND NICOBAR ISLANDS',1,'2017-10-23 06:09:49',NULL),(2,'ANDHRA PRADESH',1,'2017-10-23 06:09:49',NULL),(3,'ARUNACHAL PRADESH',1,'2017-10-23 06:09:49',NULL),(4,'ASSAM',1,'2017-10-23 06:09:49',NULL),(5,'BIHAR',1,'2017-10-23 06:09:49',NULL),(6,'CHATTISGARH',1,'2017-10-23 06:09:49',NULL),(7,'CHANDIGARH',1,'2017-10-23 06:09:49',NULL),(8,'DAMAN AND DIU',1,'2017-10-23 06:09:49',NULL),(9,'DELHI',1,'2017-10-23 06:09:49',NULL),(10,'DADRA AND NAGAR HAVELI',1,'2017-10-23 06:09:49',NULL),(11,'GOA',1,'2017-10-23 06:09:49',NULL),(12,'GUJARAT',1,'2017-10-23 06:09:49',NULL),(13,'HIMACHAL PRADESH',1,'2017-10-23 06:09:49',NULL),(14,'HARYANA',1,'2017-10-23 06:09:49',NULL),(15,'JAMMU AND KASHMIR',1,'2017-10-23 06:09:49',NULL),(16,'JHARKHAND',1,'2017-10-23 06:09:49',NULL),(17,'KERALA',1,'2017-10-23 06:09:49',NULL),(18,'KARNATAKA',1,'2017-10-23 06:09:49',NULL),(19,'LAKSHADWEEP',1,'2017-10-23 06:09:49',NULL),(20,'MEGHALAYA',1,'2017-10-23 06:09:49',NULL),(21,'MAHARASHTRA',1,'2017-10-23 06:09:49',NULL),(22,'MANIPUR',1,'2017-10-23 06:09:49',NULL),(23,'MADHYA PRADESH',1,'2017-10-23 06:09:49',NULL),(24,'MIZORAM',1,'2017-10-23 06:09:49',NULL),(25,'NAGALAND',1,'2017-10-23 06:09:49',NULL),(26,'ORISSA',1,'2017-10-23 06:09:49',NULL),(27,'PUNJAB',1,'2017-10-23 06:09:49',NULL),(28,'PONDICHERRY',1,'2017-10-23 06:09:49',NULL),(29,'RAJASTHAN',1,'2017-10-23 06:09:49',NULL),(30,'SIKKIM',1,'2017-10-23 06:09:49',NULL),(31,'TAMIL NADU',1,'2017-10-23 06:09:49',NULL),(32,'TRIPURA',1,'2017-10-23 06:09:49',NULL),(33,'UTTARAKHAND',1,'2017-10-23 06:09:49',NULL),(34,'UTTAR PRADESH',1,'2017-10-23 06:09:49',NULL),(35,'WEST BENGAL',1,'2017-10-23 06:09:49',NULL);
/*!40000 ALTER TABLE `state_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_master`
--

DROP TABLE IF EXISTS `user_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_master` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `empcode` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `vertical_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `reporting_emp` varchar(45) DEFAULT NULL,
  `user_created` datetime DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_master`
--

LOCK TABLES `user_master` WRITE;
/*!40000 ALTER TABLE `user_master` DISABLE KEYS */;
INSERT INTO `user_master` VALUES (1,'Sagar','Tejuja','sagar.tejuja@gmail.com','9819600699','101100','123456',1,2,3,'101100','2017-09-18 12:51:03'),(2,'Vinaykumar','Rai','vinaykumar.rai@landmarkinsurance.in','9619977857','101101','vinay123',2,2,3,'101100','2017-09-18 12:51:03'),(3,'Kishor','Sagar','kishore.sagar@rupeeboss.com','9930968796','101181','123456',3,2,3,'101101','2017-09-18 12:51:03'),(4,'Durgapratap','Rajbhar','durga.rajbhar@rupeeboss.com','8898540057','101178','123456',4,2,3,'101181','2017-09-18 12:51:03'),(5,'manish','dixit','manish.dixit@rupeeboss.com','9821982346','101186','123456',4,2,3,'101181','2017-09-18 12:51:03'),(6,'Durgaprataprb','rajbhar','rajbhardp@gmail.com','8898540057','400075','1234567',2,2,1,'400075',NULL);
/*!40000 ALTER TABLE `user_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_type_master`
--

DROP TABLE IF EXISTS `user_type_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_type_master` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(45) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_type_master`
--

LOCK TABLES `user_type_master` WRITE;
/*!40000 ALTER TABLE `user_type_master` DISABLE KEYS */;
INSERT INTO `user_type_master` VALUES (1,'Admin','2017-09-15 10:27:57'),(2,'Approver','2017-09-15 10:27:57'),(3,'Line Manager','2017-09-15 10:27:58'),(4,'End User','2017-09-15 10:27:58');
/*!40000 ALTER TABLE `user_type_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vertical_master`
--

DROP TABLE IF EXISTS `vertical_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vertical_master` (
  `vertical_id` int(11) NOT NULL AUTO_INCREMENT,
  `vertical_name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`vertical_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vertical_master`
--

LOCK TABLES `vertical_master` WRITE;
/*!40000 ALTER TABLE `vertical_master` DISABLE KEYS */;
INSERT INTO `vertical_master` VALUES (1,'Affliate','2017-09-15 10:31:31'),(2,'Corporate','2017-09-15 10:31:31'),(3,'Cross Sell','2017-09-15 10:31:31');
/*!40000 ALTER TABLE `vertical_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pb_corporate'
--

--
-- Dumping routines for database 'pb_corporate'
--
/*!50003 DROP FUNCTION IF EXISTS `SPLIT_STR` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` FUNCTION `SPLIT_STR`(
  x VARCHAR(255),
  delim VARCHAR(12),
  pos INT
) RETURNS varchar(255) CHARSET latin1
RETURN REPLACE(SUBSTRING(SUBSTRING_INDEX(x, delim, pos),
    LENGTH(SUBSTRING_INDEX(x, delim, pos -1)) + 1),
    delim, '') ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_approve_quote` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_approve_quote`(IN quoteid INT,isapprove INT, approvedby varchar(50), approvertype INT)
BEGIN

if(approvertype=2) then
SET SQL_SAFE_UPDATES = 0;
update firecal_quote_master set  is_approve1=isapprove,approved_by1=approvedby,approved_datetime1=now()
where quote_id=quoteid;

elseif(approvertype=3) then
SET SQL_SAFE_UPDATES = 0;
update firecal_quote_master set  is_approve=isapprove,approved_by=approvedby,approved_datetime=now()
where quote_id=quoteid;

end if; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_district_master` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_district_master`(IN districtid int, districtname varchar(100), zoneid int, stateid int, userid INT,flag varchar(10))
BEGIN

if(flag='insert') then

insert into districtwise_zone_master(district_name,zone_id,state_id,userid,datetime_created) values (districtname,zoneid,stateid,userid,now());

elseif(flag='update') then

SET SQL_SAFE_UPDATES = 0;
Update districtwise_zone_master set district_name = districtname,zone_id=zoneid,state_id=stateid,userid=userid,updated_at=now()
where district_id= districtid;

elseif(flag='delete') then

delete from districtwise_zone_master where district_id= districtid;

elseif(flag='get') then
if(districtid > 0 ) then
select dm.district_id,dm.district_name,em.zone,sm.state,dm.datetime_created
 from districtwise_zone_master dm
inner join earthquake_zone_master em on dm.zone_id=em.zone_id
inner join state_master sm on dm.state_id=sm.state_id
where dm.district_id=districtid;

else

select dm.district_id,dm.district_name,em.zone,sm.state,dm.datetime_created
 from districtwise_zone_master dm
inner join earthquake_zone_master em on dm.zone_id=em.zone_id
inner join state_master sm on dm.state_id=sm.state_id order by dm.district_id;

end if;

end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_addons` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_addons`(IN sectionid INT )
BEGIN

select add_ons from add_ons_master where section_id=sectionid;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_district` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_district`(IN stateid INT)
Begin

select district_id,district_name from districtwise_zone_master where state_id=stateid;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_firecal_quote` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_firecal_quote`(IN occ_id INT,section_id INT, sum_building INT, sum_plith INT,sum_plant INT,sum_electric INT, sum_fff INT,sum_others INT,sum_stock INT,
 is_stfi INT,sum_stfi INT, is_earthquake INT, sum_earthquake INT, is_terrorism INT,sum_terrorism INT,
 is_escalation INT,sum_escalation INT,is_omission INT, sum_omission INT,is_lossrent INT,sum_lossrent INT,
 is_accommodation INT, sum_accommodation INT, is_architect INT,sum_architect INT,is_removedebris INT, sum_removedebris INT,
 is_spontcomb INT,sum_spontcomb INT, is_startup INT, sum_startup INT, is_floater INT, sum_floater INT, 
 is_impactdamage INT, sum_impactdamage INT,riskdistrictid INT,storage_type varchar(20),min_zone_id INT
 
 )
BEGIN
 
declare grand_premium long default 0 ;
declare tot_preminum long default 0;
declare zonerate  decimal(18,2);
declare cnt INT default 0;
declare zoneid INT default 0;
declare id INT default 1;
declare buildingrate decimal(18,2);
declare contentrate decimal(18,2);
declare stfirate decimal(18,4);
declare terr_rate decimal(18,2);

if( is_floater =1 ) then
SET zoneid = min_zone_id;
else
SET zoneid = (select zone_id from districtwise_zone_master where district_id=riskdistrictid);
end if;

SET terr_rate = (select terrorism_rate from occupancy_master where occup_id=occ_id);
SET buildingrate = (select building_rate from occupancy_master where occup_id=occ_id);
SET contentrate = (select content_rate from occupancy_master where occup_id=occ_id);
if(storage_type ='Closed') then
SET stfirate = (select ifnull(stfi_rate,0.0000) from occupancy_master where occup_id=occ_id);
elseif (storage_type ='Open') then
SET stfirate = (select ifnull(stfi_open_rate,0.0000) from occupancy_master where occup_id=occ_id);
else
SET stfirate = (select ifnull(stfi_rate,0.0000) from occupancy_master where occup_id=occ_id);
end if;

if(section_id = 3) then
SET zonerate = (select eq_rate from occupancy_master where occup_id=occ_id);
else
SET zonerate = (select zone_rate from earthquake_zone_master where zone_id=zoneid);
end if;

DROP TEMPORARY TABLE IF EXISTS temp_company;
CREATE TEMPORARY TABLE temp_company AS  
SELECT company_id,company_name,discount_rate,buildingrate,contentrate,0.0000 as base_build_rate,0.0000 as base_content_rate, 
0.0000 as tot_rate, 0 as pre_building,0 as pre_plinth,0 as pre_plant,0 as pre_electric, 0 as pre_fff,0 as pre_others,0 as pre_stock, 
0 as pre_stfi, 0 as pre_earthquake, 0 as pre_terrorism, 0 as pre_escalation,0 as pre_omission,0 as pre_lossrent,0 as pre_accommodation,
0 as pre_architect, 0 as pre_removedebris, 0 as pre_spontcomb,0 as pre_startup,0 as pre_floater,0 as pre_impactdamage, 0 as premium_amt,
0 as gst_amt,0 as net_premium_amt FROM company_master;

SET cnt =(select count(company_id) from temp_company);


While ( id <= cnt )
DO
SET SQL_SAFE_UPDATES = 0;
update temp_company SET base_build_rate = ( buildingrate * (discount_rate/100)),
base_content_rate = ( contentrate * (discount_rate/100)),
tot_rate = (base_content_rate + zonerate + stfirate  + terr_rate),
pre_building = ((sum_building * base_build_rate)/1000) , pre_plinth = ((sum_plith * base_content_rate)/1000),
pre_plant = ((sum_plant * base_build_rate)/1000) , pre_electric=((sum_electric * base_content_rate)/1000),
pre_fff = ((sum_fff * base_content_rate)/1000),pre_others=((sum_others * base_content_rate)/1000),
pre_stock = ((sum_stock * base_content_rate)/1000), 
pre_stfi= case when is_stfi =1 then (sum_stfi *( stfirate/1000) ) else 0 end,
pre_earthquake = case when is_earthquake =1 then (sum_earthquake * (zonerate/1000)) else 0 end,
pre_terrorism = case when is_terrorism =1 then (sum_terrorism * (terr_rate/1000)) else 0 end,
pre_escalation = case when is_escalation =1 then (sum_escalation * ((tot_rate * 50/100)/1000)) else 0 end,
pre_omission = case when is_omission =1 then (sum_omission * (tot_rate/1000)) else 0 end,
pre_lossrent = case when is_lossrent =1 then (sum_lossrent * (tot_rate/1000)) else 0 end,
pre_accommodation = case when is_accommodation =1 then (sum_accommodation * (tot_rate/1000)) else 0 end,
pre_architect = case when is_architect =1 then (sum_architect * (tot_rate/1000)) else 0 end,
pre_removedebris = case when is_removedebris =1 then (sum_removedebris * (tot_rate/1000)) else 0 end,
pre_spontcomb = case when is_spontcomb =1 then 0 else 0 end,
pre_startup = case when is_startup =1 then (sum_startup * (tot_rate/1000)) else 0 end,
pre_floater = case when is_floater =1 then (sum_floater * ((tot_rate * 1.10)/1000)) else 0 end,
pre_impactdamage = case when is_impactdamage =1 then ( sum_impactdamage* ((tot_rate * 5/100)/1000)) else 0 end,
premium_amt = (pre_building + pre_plinth + pre_plant + pre_fff + pre_electric + pre_stock + pre_others + pre_stfi + pre_earthquake +
pre_terrorism + pre_escalation + pre_omission + pre_lossrent +  pre_accommodation + pre_architect + pre_removedebris + pre_spontcomb +
pre_floater + pre_impactdamage),gst_amt= (premium_amt * (18/100)),net_premium_amt= (premium_amt + gst_amt)
where company_id = id;

set id = id + 1;

END WHILE;

select company_id,company_name,premium_amt,gst_amt,net_premium_amt
from temp_company order by net_premium_amt LIMIT 5;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_firecal_sectionlist` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_firecal_sectionlist`()
BEGIN

select section_id,section_name from section_master where section_id not in (1,2);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_lead_15daystat` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_lead_15daystat`(IN empcode varchar(50))
BEGIN

declare user_id int default 0;   
declare cnt int default 0;
declare i INT default 1;
declare date15plus datetime;
 

SET date15plus= DATE_ADD(now(), INTERVAL 15 DAY);


DROP TEMPORARY TABLE IF EXISTS temp_users;
CREATE TEMPORARY TABLE temp_users(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
usrid int);
insert into temp_users(usrid)
select userid from user_master um where um.reporting_emp=empcode;

SET cnt =(select count(id) from temp_users);

DROP TEMPORARY TABLE IF EXISTS temp_15daystat;
CREATE TEMPORARY TABLE temp_15daystat(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
leadid int,policy_category varchar(50),productname varchar(200), company_groupname varchar(100), company_name varchar(100), business_type varchar(100),
insurer_name varchar(200), renewaldate datetime, sum_insured decimal(18,0),pretax_prem decimal(18,0), created_by varchar(100));

While ( i <= cnt )
DO

SET user_id = (select usrid from temp_users where id=i); 

insert into temp_15daystat(leadid,policy_category,productname,company_groupname,company_name,business_type,insurer_name, 
renewaldate, sum_insured,pretax_prem, created_by)
select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name,pld.business_type,
cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,concat( um.firstname,' ',um.lastname) as created_by  
from policy_lead_data pld 
inner join policy_category_master pcm on pld.policy_category=pcm.category_id
inner join product_master pm on pld.policy_type=pm.product_id 
inner join group_master gm on pld.group_id=gm.group_id 
inner join company_master cm on pld.current_insurer_id=cm.company_id 
inner join user_master um on pld.userid=um.userid
where pld.userid=user_id and renewal_date>=now() and renewal_date<=date15plus;


set i = i + 1;

END WHILE;

select * from temp_15daystat order by id; 

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_lead_30daystat` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_lead_30daystat`(IN empcode varchar(50))
BEGIN

declare user_id int default 0;   
declare cnt int default 0;
declare i INT default 1;
declare date30plus datetime;

SET date30plus= DATE_ADD(now(), INTERVAL 30 DAY);

DROP TEMPORARY TABLE IF EXISTS temp_users;
CREATE TEMPORARY TABLE temp_users(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
usrid int);
insert into temp_users(usrid)
select userid from user_master um where um.reporting_emp=empcode;

SET cnt =(select count(id) from temp_users);

DROP TEMPORARY TABLE IF EXISTS temp_30daystat;
CREATE TEMPORARY TABLE temp_30daystat(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
leadid int,policy_category varchar(50),productname varchar(200), company_groupname varchar(100), company_name varchar(100), business_type varchar(100),
insurer_name varchar(200), renewaldate datetime, sum_insured decimal(18,0),pretax_prem decimal(18,0), created_by varchar(100));


While ( i <= cnt )
DO

SET user_id = (select usrid from temp_users where id=i); 

insert into temp_30daystat(leadid,policy_category,productname,company_groupname,company_name,business_type,insurer_name, 
renewaldate, sum_insured,pretax_prem, created_by)
select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name,pld.business_type,
cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,concat( um.firstname,' ',um.lastname) as created_by 
from policy_lead_data pld 
inner join policy_category_master pcm on pld.policy_category=pcm.category_id
inner join product_master pm on pld.policy_type=pm.product_id 
inner join group_master gm on pld.group_id=gm.group_id 
inner join company_master cm on pld.current_insurer_id=cm.company_id 
inner join user_master um on pld.userid=um.userid
where pld.userid=user_id and renewal_date>=now() and renewal_date<=date30plus;

set i = i + 1;

END WHILE;

select * from temp_30daystat order by id;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_lead_45daystat` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_lead_45daystat`(IN empcode varchar(50))
BEGIN

declare user_id int default 0;   
declare cnt int default 0;
declare i INT default 1;
declare date45plus datetime; 

SET date45plus= DATE_ADD(now(), INTERVAL 45 DAY);

DROP TEMPORARY TABLE IF EXISTS temp_users;
CREATE TEMPORARY TABLE temp_users(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
usrid int);
insert into temp_users(usrid)
select userid from user_master um where um.reporting_emp=empcode;

SET cnt =(select count(id) from temp_users);

DROP TEMPORARY TABLE IF EXISTS temp_45daystat;
CREATE TEMPORARY TABLE temp_45daystat(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
leadid int,policy_category varchar(50),productname varchar(200), company_groupname varchar(100), company_name varchar(100), business_type varchar(100),
insurer_name varchar(200), renewaldate datetime, sum_insured decimal(18,0),pretax_prem decimal(18,0), created_by varchar(100));



While ( i <= cnt )
DO

SET user_id = (select usrid from temp_users where id=i);

insert into temp_45daystat(leadid,policy_category,productname,company_groupname,company_name,business_type,insurer_name, 
renewaldate, sum_insured,pretax_prem, created_by)
select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name,pld.business_type,
cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,concat( um.firstname,' ',um.lastname) as created_by  
from policy_lead_data pld 
inner join policy_category_master pcm on pld.policy_category=pcm.category_id
inner join product_master pm on pld.policy_type=pm.product_id 
inner join group_master gm on pld.group_id=gm.group_id 
inner join company_master cm on pld.current_insurer_id=cm.company_id 
inner join user_master um on pld.userid=um.userid
where pld.userid=user_id and renewal_date>=now() and renewal_date<=date45plus;

set i = i + 1;

END WHILE;

select * from temp_45daystat order by id; 

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_lead_detail_tat` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_lead_detail_tat`(IN empcode varchar(50))
BEGIN

declare user_id int default 0;   
declare cnt int default 0;
declare i INT default 1;
declare date15plus datetime;
declare date30plus datetime;
declare date45plus datetime; 

SET date15plus= DATE_ADD(now(), INTERVAL 15 DAY);
SET date30plus= DATE_ADD(now(), INTERVAL 30 DAY);
SET date45plus= DATE_ADD(now(), INTERVAL 45 DAY);

DROP TEMPORARY TABLE IF EXISTS temp_users;
CREATE TEMPORARY TABLE temp_users(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
usrid int);
insert into temp_users(usrid)
select userid from user_master um where um.reporting_emp=empcode;

SET cnt =(select count(id) from temp_users);

DROP TEMPORARY TABLE IF EXISTS temp_15daystat;
CREATE TEMPORARY TABLE temp_15daystat(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
leadid int,policy_category varchar(50),productname varchar(200), company_groupname varchar(100), company_name varchar(100), business_type varchar(100),
insurer_name varchar(200), renewaldate datetime, sum_insured decimal(18,0),pretax_prem decimal(18,0), created_by varchar(100));

DROP TEMPORARY TABLE IF EXISTS temp_30daystat;
CREATE TEMPORARY TABLE temp_30daystat(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
leadid int,policy_category varchar(50),productname varchar(200), company_groupname varchar(100), company_name varchar(100), business_type varchar(100),
insurer_name varchar(200), renewaldate datetime, sum_insured decimal(18,0),pretax_prem decimal(18,0), created_by varchar(100));

DROP TEMPORARY TABLE IF EXISTS temp_45daystat;
CREATE TEMPORARY TABLE temp_45daystat(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
leadid int,policy_category varchar(50),productname varchar(200), company_groupname varchar(100), company_name varchar(100), business_type varchar(100),
insurer_name varchar(200), renewaldate datetime, sum_insured decimal(18,0),pretax_prem decimal(18,0), created_by varchar(100));



While ( i <= cnt )
DO

SET user_id = (select usrid from temp_users where id=i); 

insert into temp_15daystat(leadid,policy_category,productname,company_groupname,company_name,business_type,insurer_name, 
renewaldate, sum_insured,pretax_prem, created_by)
select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name,pld.business_type,
cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,concat( um.firstname,' ',um.lastname) as created_by  
from policy_lead_data pld 
inner join policy_category_master pcm on pld.policy_category=pcm.category_id
inner join product_master pm on pld.policy_type=pm.product_id 
inner join group_master gm on pld.group_id=gm.group_id 
inner join company_master cm on pld.current_insurer_id=cm.company_id 
inner join user_master um on pld.userid=um.userid
where pld.userid=user_id and renewal_date>=now() and renewal_date<=date15plus;


insert into temp_30daystat(leadid,policy_category,productname,company_groupname,company_name,business_type,insurer_name, 
renewaldate, sum_insured,pretax_prem, created_by)
select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name,pld.business_type,
cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,concat( um.firstname,' ',um.lastname) as created_by 
from policy_lead_data pld 
inner join policy_category_master pcm on pld.policy_category=pcm.category_id
inner join product_master pm on pld.policy_type=pm.product_id 
inner join group_master gm on pld.group_id=gm.group_id 
inner join company_master cm on pld.current_insurer_id=cm.company_id 
inner join user_master um on pld.userid=um.userid
where pld.userid=user_id and renewal_date>=now() and renewal_date<=date30plus;


insert into temp_45daystat(leadid,policy_category,productname,company_groupname,company_name,business_type,insurer_name, 
renewaldate, sum_insured,pretax_prem, created_by)
select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name,pld.business_type,
cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,concat( um.firstname,' ',um.lastname) as created_by  
from policy_lead_data pld 
inner join policy_category_master pcm on pld.policy_category=pcm.category_id
inner join product_master pm on pld.policy_type=pm.product_id 
inner join group_master gm on pld.group_id=gm.group_id 
inner join company_master cm on pld.current_insurer_id=cm.company_id 
inner join user_master um on pld.userid=um.userid
where pld.userid=user_id and renewal_date>=now() and renewal_date<=date45plus;

set i = i + 1;

END WHILE;

select * from temp_15daystat order by id; 
select * from temp_30daystat order by id;
select * from temp_45daystat order by id; 

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_lead_tat_count` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_lead_tat_count`(IN emp_code varchar(50))
BEGIN

declare u_id int default 0;   
declare cnt int default 0;
declare i INT default 1;
declare temp15cnt INT default 0;
declare temp30cnt INT default 0;
declare temp45cnt INT default 0;


declare date15plus datetime;
declare date30plus datetime;
declare date45plus datetime; 

SET date15plus= DATE_ADD(now(), INTERVAL 15 DAY);
SET date30plus= DATE_ADD(now(), INTERVAL 30 DAY);
SET date45plus= DATE_ADD(now(), INTERVAL 45 DAY);


DROP TEMPORARY TABLE IF EXISTS temp_users;
CREATE TEMPORARY TABLE temp_users(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
usrid int);
insert into temp_users(usrid)
select userid from user_master um where um.reporting_emp=emp_code;


SET cnt =(select count(id) from temp_users);

DROP TEMPORARY TABLE IF EXISTS temp_lead_tat;
CREATE TEMPORARY TABLE temp_lead_tat(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
day15cnt int, day30cnt int, day45cnt int);

While ( i <= cnt )
DO

SET u_id = (select usrid from temp_users where id=i); 

SET temp15cnt=(select count(pld.lead_id) from policy_lead_data pld 
where pld.userid=u_id and renewal_date>=now() and renewal_date<=date15plus);

set temp30cnt = (select count(pld.lead_id) from policy_lead_data pld 
where pld.userid=u_id and renewal_date>=now() and renewal_date<=date30plus);

SET temp45cnt = (select count(pld.lead_id) from policy_lead_data pld 
where pld.userid=u_id and renewal_date>=now() and renewal_date<=date45plus);

Insert into temp_lead_tat(day15cnt,day30cnt,day45cnt)
values(temp15cnt,temp30cnt,temp45cnt);

set i = i + 1;

END WHILE;
select sum(day15cnt) as `15`,sum(day30cnt) as `30`,sum(day45cnt) as `45` from temp_lead_tat;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_premium_manufacture` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_premium_manufacture`(IN occ_id INT, sum_building INT, sum_plith INT, sum_fff INT,sum_electric INT,sum_stock INT ,sum_others INT,
 is_stfi char(1),sum_stfi INT, is_earthquake char(1), sum_earthquake INT, is_terrorism char(1),sum_terrorism INT,
 is_architect char(1),sum_architect INT,is_removedebris char(1), sum_removedebris INT, is_powerfail char(1),
 sum_powerfail INT, is_temprise char(1), sum_temprise INT,is_forestfire char(1), sum_forestfire INT,
 is_accident char(1), sum_accident INT, is_spontcomb char(1), sum_spontcomb INT, is_omission char(1), sum_omission INT,
 is_materialstock char(1), sum_materialstock  INT, is_materialplant char(1), sum_materialplant INT, is_tempstock char(1),
 sum_tempstock INT, is_lossrent char(1), sum_lossrent INT,is_accomrent char(1), sum_accomrent INT, is_escalation char(1),
 sum_escalation INT, is_startup char(1), sum_startup INT, is_leakage char(1), sum_leakage INT, is_leakageoutside char(1),
 sum_leakageoutside INT, is_contaminate char(1), sum_contaminate INT, is_contamoutside char(1), sum_contamoutside INT,
 districtid INT,storage_type varchar(20)
 
 )
BEGIN
 
declare grand_premium long default 0 ;
declare tot_preminum long default 0;
declare zonerate  decimal(18,2);
declare cnt INT default 0;
declare zoneid INT default 0;
declare id INT default 1;
declare sectionId INT;
declare buildingrate decimal(18,2);
declare contentrate decimal(18,2);
declare stfirate decimal(18,4);
declare terr_rate decimal(18,2);



SET zoneid = (select zone_id from districtwise_zone_master where district_id=districtid);
SET terr_rate = (select terrorism_rate from occupancy_master where occup_id=occ_id);
SET sectionId =(select section_id from occupancy_master where occup_id=occ_id);
SET buildingrate = (select building_rate from occupancy_master where occup_id=occ_id);
SET contentrate = (select content_rate from occupancy_master where occup_id=occ_id);

if(storage_type ='Closed') then
SET stfirate = (select ifnull(stfi_rate,0.0000) from occupancy_master where occup_id=occ_id);
elseif (storage_type ='Open') then
SET stfirate = (select ifnull(stfi_open_rate,0.0000) from occupancy_master where occup_id=occ_id);
else
SET stfirate = (select ifnull(stfi_rate,0.0000) from occupancy_master where occup_id=occ_id);
end if;

if(sectionId = 3) then
SET zonerate = (select eq_rate from occupancy_master where occup_id=occ_id);
else
SET zonerate = (select zone_rate from earthquake_zone_master where zone_id=zoneid);
end if;


DROP TEMPORARY TABLE IF EXISTS temp_company;
CREATE TEMPORARY TABLE temp_company AS  
SELECT company_id,company_name,discount_rate,buildingrate,contentrate,0.0000 as base_build_rate,0.0000 as base_content_rate, 
0.0000 as tot_rate, 0 as pre_building,0 as pre_plinth, 0 as pre_fff, 0 as pre_electric, 0 as pre_stock, 0 as pre_others,
 0 as pre_stfi, 0 as pre_earthquake, 0 as pre_terrorism, 0 as pre_architect, 0 as pre_removedebris, 0 as pre_powerfail,
0 as pre_temprise, 0 as pre_forestfire, 0 as pre_accident, 0 as pre_spontcomb, 0 as pre_omission,
0 as pre_materialstock,0 as pre_materialplant,0 as pre_tempstock, 0 as pre_lossrent, 0 as pre_accomrent,
0 as pre_escalation, 0 as pre_startup, 0 as pre_leakage, 0 as pre_leakageoutside,0 as pre_contaminate,
0 as pre_contamoutside, 0 as gross_premium
FROM company_master;



SET cnt =(select count(company_id) from temp_company);

While ( id <= cnt )
DO
SET SQL_SAFE_UPDATES = 0;
update temp_company SET base_build_rate = ( buildingrate * (discount_rate/100)),
base_content_rate = ( contentrate * (discount_rate/100)),
tot_rate = (base_content_rate + zonerate + stfirate  + terr_rate),
pre_building = ((sum_building * base_build_rate)/1000) , pre_plinth = ((sum_plith * base_content_rate)/1000),
pre_fff = ((sum_fff * base_content_rate)/1000), pre_electric=((sum_electric * base_content_rate)/1000),
pre_stock = ((sum_stock * base_content_rate)/1000), pre_others=((sum_others * base_content_rate)/1000),
pre_stfi= case when is_stfi = 'Y' then (sum_stfi *( stfirate/1000) ) else 0 end,
pre_earthquake = case when is_earthquake ='Y' then (sum_earthquake * (zonerate/1000)) else 0 end,
pre_terrorism = case when is_terrorism ='Y' then (sum_terrorism * (terr_rate/1000)) else 0 end,
pre_architect = case when is_architect ='Y' then (sum_architect * tot_rate) else 0 end,
pre_removedebris = case when is_removedebris ='Y' then (sum_removedebris * tot_rate ) else 0 end,
pre_powerfail = case when is_powerfail ='Y' then 0 else 0 end,
pre_temprise = case when is_temprise ='Y' then 0 else 0 end,
pre_forestfire = case when is_forestfire ='Y' then 0 else 0 end,
pre_accident =  case when is_accident ='Y' then ( sum_accident * (tot_rate * 5/100) ) else 0 end,
pre_spontcomb = case when is_spontcomb ='Y' then 0 else 0 end,
pre_omission = case when is_omission ='Y' then (sum_omission * tot_rate) else 0 end,
pre_materialstock = case when is_materialstock ='Y' then 0 else 0 end,
pre_materialplant = case when is_materialplant ='Y' then 0 else 0 end,
pre_tempstock = case when is_tempstock ='Y' then 0 else 0 end,
pre_lossrent = case when is_lossrent ='Y' then (sum_lossrent * tot_rate) else 0 end,
pre_accomrent = case when is_accomrent ='Y' then (sum_accomrent * tot_rate) else 0 end,
pre_escalation = case when is_escalation ='Y' then (sum_escalation * (tot_rate * 50/100)) else 0 end,
pre_startup = case when is_startup ='Y' then (sum_startup * tot_rate) else 0 end,
pre_leakage = case when is_leakage ='Y' then 0 else 0 end,
pre_leakageoutside = case when is_leakageoutside ='Y' then 0 else 0 end,
pre_contaminate = case when is_contaminate ='Y' then 0 else 0 end, 
pre_contamoutside = case when is_contamoutside ='Y' then 0 else 0 end, 
gross_premium = (pre_building + pre_plinth + pre_fff + pre_electric + pre_stock + pre_others + pre_stfi + pre_earthquake +
pre_terrorism + pre_architect + pre_removedebris + pre_powerfail + pre_temprise + pre_forestfire + pre_accident + pre_spontcomb +
pre_omission + pre_materialstock + pre_materialplant + pre_tempstock + pre_lossrent + pre_accomrent + pre_escalation + 
pre_startup + pre_leakage + pre_leakageoutside + pre_contaminate + pre_contamoutside)
where company_id = id;

set id = id + 1;

END WHILE;
 
select company_id,company_name,discount_rate,buildingrate,contentrate,base_build_rate,
base_content_rate,tot_rate,gross_premium 
from temp_company order by gross_premium;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_quote_count` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_quote_count`(IN emp_code varchar(50), usertypeid INT, verticalid INT, branchid INT)
BEGIN
declare all_cnt int default 0;
declare approve_cnt int default 0;
declare pending_cnt int default 0;
 

if(usertypeid=1) then

 set all_cnt = (select count(fq.quote_id)
	 from firecal_quote_master  fq);
     
 set approve_cnt = (select count(fq.quote_id)
	 from firecal_quote_master  fq where fq.is_approve=1 and fq.is_approve1=1);   
     
set pending_cnt = (select count(fq.quote_id)
	 from firecal_quote_master  fq  where (IFNULL(fq.is_approve,0) =0 or  IFNULL(fq.is_approve1,0)=0));  

elseif(usertypeid=2) then

 set all_cnt =  (select count(fq.quote_id)
	 from firecal_quote_master fq 
	 inner join user_master um on fq.userid=um.userid  
     where um.vertical_id = verticalid);
     
 set approve_cnt =  (select count(fq.quote_id)
	 from firecal_quote_master  fq 
	 inner join user_master um  on fq.userid=um.userid 
     where um.vertical_id = verticalid and fq.is_approve=1 and fq.is_approve1=1);
     
  set pending_cnt =  (select count(fq.quote_id)
	 from firecal_quote_master  fq 
	 inner join user_master um  on fq.userid=um.userid    
	 where um.vertical_id = verticalid and (IFNULL(fq.is_approve,0) =0 or  IFNULL(fq.is_approve1,0)=0));

elseif(usertypeid=3) then

 set all_cnt =  (select  count(fq.quote_id)
	 from firecal_quote_master  fq 
	 inner join user_master um  on fq.userid=um.userid   
	 where um.reporting_emp=emp_code);
     
  set approve_cnt =  (select  count(fq.quote_id)
	 from firecal_quote_master  fq 
	 inner join user_master um  on fq.userid=um.userid   
	 where um.reporting_emp=emp_code and fq.is_approve=1 and fq.is_approve1 =1);   
     
     
 set pending_cnt =  (select  count(fq.quote_id)
	 from firecal_quote_master  fq 
	 inner join user_master um  on fq.userid=um.userid
     where um.reporting_emp=emp_code and (IFNULL(fq.is_approve,0) =0 or  IFNULL(fq.is_approve1,0)=0)); 

elseif(usertypeid=4) then

    set all_cnt = (select  count(fq.quote_id)
	 from firecal_quote_master  fq 
	 inner join user_master um  on fq.userid=um.userid  
     where um.vertical_id=verticalid and um.branch_id=branchid and um.empcode=emp_code);
     
     set approve_cnt = (select  count(fq.quote_id)
	 from firecal_quote_master  fq 
	 inner join user_master um  on fq.userid=um.userid
     where um.vertical_id=verticalid and um.branch_id=branchid and um.empcode=emp_code 
     and fq.is_approve=1 and fq.is_approve1 =1);
     
      set pending_cnt = (select  count(fq.quote_id)
	 from firecal_quote_master  fq 
	 inner join user_master um  on fq.userid=um.userid    
	 where um.vertical_id=verticalid and um.branch_id=branchid and um.empcode=emp_code 
     and (IFNULL(fq.is_approve,0) =0 or  IFNULL(fq.is_approve1,0)=0));

end if;

select all_cnt,approve_cnt,pending_cnt;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_get_quote_detail` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_get_quote_detail`(IN emp_code varchar(50), usertypeid INT, verticalid INT, branchid INT, quote_status varchar(100))
BEGIN
 
 if(usertypeid=1) then
 
	 if(quote_status='All') then
	 
	 select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created, fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp 
     order by fq.quote_id desc;
	  
	 
	 elseif (quote_status='Approved') then
	 
	select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp
     where fq.is_approve=1 and fq.is_approve1 =1 
     order by fq.quote_id desc;
	 
	 elseif (quote_status='Pending') then  
	 
	 select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp 
     where  (IFNULL(fq.is_approve,0) =0 or  IFNULL(fq.is_approve1,0)=0) 
     order by fq.quote_id desc;
	 
	 end if;
      
   elseif(usertypeid=2) then
	 
	  if(quote_status='All') then
	 
	select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp     
     order by fq.quote_id desc;
	 
	 elseif (quote_status='Approved') then
	 
	 select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp
     where fq.is_approve=1 and fq.is_approve1 =1
     order by fq.quote_id desc; 
	 
	 elseif (quote_status='Pending') then  
	 
	select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp
     where  (IFNULL(fq.is_approve,0) =0 or  IFNULL(fq.is_approve1,0)=0) 
     order by fq.quote_id desc;
	 
	 end if;
     
     elseif(usertypeid=3) then
	 
	  if(quote_status='All') then
	 
	 select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp
     where um.reporting_emp=emp_code order by fq.quote_id desc;
	 
	 elseif (quote_status='Approved') then
	 
	select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp
     where um.reporting_emp=emp_code and fq.is_approve=1 and fq.is_approve1 =1 order by fq.quote_id desc;
	 
	 elseif (quote_status='Pending') then  
	 
	 select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp 
     where um.reporting_emp=emp_code and (IFNULL(fq.is_approve,0) =0 or  IFNULL(fq.is_approve1,0)=0) 
     order by fq.quote_id desc;
	 
	 end if;
     
     elseif(usertypeid=4) then
	 
	  if(quote_status='All') then
	 
	select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp 
     where um.vertical_id=verticalid and um.branch_id=branchid and um.empcode=emp_code 
     order by fq.quote_id desc;
	 
	 elseif (quote_status='Approved') then
	 
	select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
	 from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp
     where fq.is_approve=1 and fq.is_approve1 =1 and um.vertical_id=verticalid and um.branch_id=branchid and um.empcode=emp_code 
     order by fq.quote_id desc;
	 
	 elseif (quote_status='Pending') then  
	 
	select fq.quote_id,fq.customer_name,pm.product_name,sm.section_type,vm.vertical_name,concat(um.firstname,' ', um.lastname) as empname,
     concat(um1.firstname,' ', um1.lastname) as reporting_empname,concat(um2.firstname,' ', um2.lastname) as approver_empname, 
	 case when fq.is_approve1 =1  then 'Approved'  else 'Pending' end as approver_status, 
     case when fq.is_approve =1  then 'Approved' else 'Pending' end as manager_status,
     datediff(now(),fq.datetime_created) as days_diff,fq.datetime_created,fq.period_to as expiry_dt,
     case when fq.mail_status =1  then 'Mail Sent' else 'Pending' end as mail_status
     from firecal_quote_master  fq 
     inner join product_master pm on fq.product_id=pm.product_id  
     inner join user_master um  on fq.userid=um.userid    
     inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 inner join section_master sm on fq.section_id = sm.section_id
     inner join user_master um1 on um1.empcode=um.reporting_emp
     inner join user_master um2 on um2.empcode=um1.reporting_emp
     where um.vertical_id=verticalid and um.branch_id=branchid and um.empcode=emp_code 
     and (IFNULL(fq.is_approve,0) =0 or  IFNULL(fq.is_approve1,0)=0) order by fq.quote_id desc;
	 
	 end if;
 
 end if; 
 
 
 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_bulk_lead_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_bulk_lead_data`()
BEGIN

declare cnt INT default 0;
declare i INT default 1;
declare policycat INT default 0;
declare policytype INT default 0;
declare groupid INT default 0;
declare currentinsid INT default 0;
DECLARE chkpc INT default 0;
DECLARE chkpt INT default 0;
DECLARE chkgp INT default 0;
DECLARE chkins INT default 0;

 declare temp_pc varchar(250);
 declare temp_pt varchar(250);
 declare temp_gp varchar(250);
 declare temp_ins varchar(250);
 declare temp_uid INT  default 0;  

DROP TEMPORARY TABLE IF EXISTS temp_bulk_upload;
CREATE TEMPORARY TABLE temp_bulk_upload (
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
policy_category varchar(250),
policy_type varchar(250),
group_name varchar(250),
current_insurer varchar(250),
name_of_insured varchar(250),
occupancy_business varchar(250),
renewal_date datetime,
sum_insured decimal(18,0),
pre_tax_premium decimal(18,0),
policy_cat_id int,
policy_type_id int,
group_id int,
current_ins_id int,
user_id int);

insert into temp_bulk_upload (policy_category,policy_type,group_name,current_insurer,name_of_insured,occupancy_business,
renewal_date,sum_insured,pre_tax_premium,policy_cat_id,policy_type_id,group_id,current_ins_id,user_id) 
    SELECT  policy_category,policy_type,group_name,current_insurer,name_of_insured,occupancy_business,
    renewal_date,sum_insured,pre_tax_premium, 0 as policy_cat_id,0 as policy_type_id,0 as group_id, 0 as current_ins_id,user_id 
    FROM bulk_upload where status=0;       
   
    
    SET cnt =(select count(*) from temp_bulk_upload);
       
    
    While ( i <= cnt )
	DO
    
     SET temp_pc= (select policy_category from temp_bulk_upload where id=i);
     SET temp_pt= (select policy_type from temp_bulk_upload where id=i);
     SET temp_gp= (select group_name from temp_bulk_upload where id=i);
     SET temp_ins= (select current_insurer from temp_bulk_upload where id=i);
     SET temp_uid= (select user_id from temp_bulk_upload where id=i);
     
      SET policycat= (select category_id from policy_category_master where policy_category = temp_pc); 
      
       IF (( SELECT count(*) from product_master WHERE product_name = temp_pt) > 0) THEN 
        SET policytype= (select product_id from product_master where product_name = temp_pt);
     ELSE 
        INSERT INTO product_master (product_name,category_id,userid,datetime_created ) VALUES(temp_pt,policycat,temp_uid,now());  
        SET policytype= (select product_id from product_master where product_name = temp_pt);  
        
    END IF;     
    
      
     IF (( SELECT count(*) from company_master WHERE company_name = temp_ins) > 0) THEN 
        SET currentinsid= (select company_id from company_master WHERE company_name = temp_ins);
     ELSE 
        INSERT INTO company_master (company_name,discount_rate,userid,datetime_created ) VALUES(temp_ins,0,temp_uid,now());  
        SET currentinsid= (select company_id from company_master WHERE company_name = temp_ins);  
        
    END IF;  
     
		IF (( SELECT count(*) from group_master WHERE group_name = temp_gp) > 0) THEN 
			SET groupid= (select group_id from group_master where group_name = temp_gp);
		ELSE 
			INSERT INTO group_master (group_name,userid,datetime_created ) VALUES(temp_gp,temp_uid,now());  
			SET groupid= (select group_id from group_master where group_name = temp_gp);  			
		END IF;    
        
        
 
	
	SET SQL_SAFE_UPDATES = 0;
    update temp_bulk_upload set policy_cat_id=policycat,policy_type_id=policytype,group_id=groupid,current_ins_id=currentinsid
    where id=i;	
    
   
    
    insert into policy_lead_data(policy_category,policy_type,group_id,client_name,business_type,current_insurer_id,
    renewal_date,sum_insured,pretax_premium,userid,created_at) 
    select policy_cat_id,policy_type_id,group_id,name_of_insured,occupancy_business,current_ins_id,
    renewal_date,sum_insured,pre_tax_premium,user_id,now()
    from temp_bulk_upload where id=i;

	set i = i + 1;

	END WHILE;  
    
    
    
    SET SQL_SAFE_UPDATES = 0;
    update bulk_upload  set status=1 where status=0;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_bulk_upload` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_bulk_upload`(IN group_name varchar(500),
name_of_insured varchar(500),
occupancy_business varchar(500),
policy_category varchar(500),
policy_type varchar(500),
renewal_date varchar(50),
current_insurer varchar(500),
sum_insured decimal(65,0),
pre_tax_premium decimal(65,0),
user_id int,
status int
)
BEGIN


insert into bulk_upload(group_name,name_of_insured,occupancy_business,policy_category,policy_type,renewal_date,
current_insurer,sum_insured,pre_tax_premium,user_id,status,created_at)
values(group_name,name_of_insured,occupancy_business,policy_category,policy_type,renewal_date,
current_insurer,sum_insured,pre_tax_premium,user_id,status,now());

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_firecal_quote` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_firecal_quote`(IN section_id INT, transaction_type INT, cust_action INT, customer_type INT, period_from varchar(45), period_to varchar(45),
 current_insurer_id INT, customer_name varchar(200),address1 varchar(200),address2 varchar(200),district_id INT,
 state_id INT, pincode INT, country Varchar(45), risk_address1 varchar(200), risk_address2 varchar(200), risk_district_id INT,
 risk_state_id INT, risk_pincode INT, risk_country varchar(45), occ_id INT, storage_type varchar(45), sum_building decimal(18,0), 
 sum_plith decimal(18,0), sum_plant decimal(18,0), sum_electric decimal(18,0), sum_fff decimal(18,0), sum_others decimal(18,0),
 sum_stock decimal(18,0), is_stfi INT, sum_stfi decimal(18,0), is_earthquake INT, sum_earthquake decimal(18,0), is_terrorism INT,
 sum_terrorism decimal(18,0), is_escalation INT, escalation_percent INT, sum_escalation decimal(18,0), is_omission INT,
 sum_omission decimal(18,0), is_lossrent INT, sum_lossrent decimal(18,0), is_accommodation INT, sum_accommodation decimal(18,0),
 is_architect INT, sum_architect decimal(18,0), is_removedebris INT, sum_removedebris decimal(18,0), is_spontcomb INT,
 sum_spontcomb decimal(18,0), is_startup INT, sum_startup decimal(18,0), is_floater INT, sum_floater decimal(18,0), 
 is_impactdamage INT, sum_impactdamage decimal(18,0), userid INT, occup_desc varchar(500), contact_person varchar(200),
 designation varchar(100), email varchar(200), mobile varchar(20), product_id INT
 
 )
BEGIN
  
  declare max_quote_id int;
  
  insert into firecal_quote_master(section_id,transaction_type,cust_action,customer_type,period_from,period_to,current_insurer_id,
  customer_name,address1,address2,district_id,state_id,pincode,country,risk_address1,risk_address2,risk_district_id,risk_state_id,
  risk_pincode,risk_country,occ_id,storage_type,sum_building,sum_plith,sum_plant,sum_electric,sum_fff,sum_others,sum_stock,
  is_stfi,sum_stfi,is_earthquake,sum_earthquake,is_terrorism,sum_terrorism,is_escalation,escalation_percent,sum_escalation,
  is_omission,sum_omission,is_lossrent,sum_lossrent,is_accommodation,sum_accommodation,is_architect,sum_architect,is_removedebris,
  sum_removedebris,is_spontcomb,sum_spontcomb,is_startup,sum_startup,is_floater,sum_floater,is_impactdamage,sum_impactdamage,
  userid,datetime_created,occup_desc,contact_person,designation,email,mobile,product_id)
  values (section_id,transaction_type,cust_action,customer_type,period_from,period_to,current_insurer_id,
  customer_name,address1,address2,district_id,state_id,pincode,country,risk_address1,risk_address2,risk_district_id,risk_state_id,
  risk_pincode,risk_country,occ_id,storage_type,sum_building,sum_plith,sum_plant,sum_electric,sum_fff,sum_others,sum_stock,
  is_stfi,sum_stfi,is_earthquake,sum_earthquake,is_terrorism,sum_terrorism,is_escalation,escalation_percent,sum_escalation,
  is_omission,sum_omission,is_lossrent,sum_lossrent,is_accommodation,sum_accommodation,is_architect,sum_architect,is_removedebris,
  sum_removedebris,is_spontcomb,sum_spontcomb,is_startup,sum_startup,is_floater,sum_floater,is_impactdamage,sum_impactdamage,
  userid,now(),occup_desc,contact_person,designation,email,mobile,product_id);
  
  select quote_id from firecal_quote_master order by quote_id desc limit 1;
  
  END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_firecal_quote_detail` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_firecal_quote_detail`(IN quote_id INT, company_id INT, company_name varchar(200), premium_amt INT,
 gst_amt INT, net_premium_amt INT,is_selected INT )
BEGIN
  
  insert into firecal_quote_detail (quote_id,company_id,company_name,premium_amt,gst_amt,net_premium_amt,is_selected,datetime_created)
  values (quote_id,company_id,company_name,premium_amt,gst_amt,net_premium_amt,is_selected,now());
  
  END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_floater_riskaddress` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_floater_riskaddress`(IN riskaddress LONGTEXT, riskstates LONGTEXT, riskdistricts LONGTEXT,riskpincodes LONGTEXT,quoteid int)
BEGIN

insert into floater_risk_address_data(risk_address,risk_states,risk_districts,risk_pincodes,quote_id,created_at)
values(riskaddress,riskstates,riskdistricts,riskpincodes,quoteid,now());

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_mail_master` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_mail_master`(IN to_email text, cc_email text, bcc_email text, subject_email text,
 attachment_path longtext, mail_msg longtext, empcode varchar(45))
BEGIN

insert into  mail_master (to_email,cc_email,bcc_email,subject_email,attachment_path,mail_msg,empcode,created_datetime)
 values (to_email,cc_email,bcc_email,subject_email,attachment_path,mail_msg,empcode,now());

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_policy_docs` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_policy_docs`(IN policydocpath longtext, visitcardpath longtext,mandatepath longtext,inspectionpath longtext, leadid int, quoteid int)
BEGIN

insert into policy_documents(policy_doc_path,visiting_card_path,mandate_letter_path,inspection_path,lead_id,quote_id,created_at)
values(policydocpath,visitcardpath,mandatepath,inspectionpath,leadid,quoteid,now());

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_policy_lead_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_policy_lead_data`(
	IN policy_category INT,policy_type INT,groupname varchar(250),client_name varchar(250),business_type varchar(100),
    current_insurer_id INT,renewal_date datetime,sum_insured decimal(18,0),pretax_premium decimal(18,0),
    document_path varchar(200),userid int )
BEGIN

	DECLARE groupid INT default 0;
	DECLARE CheckExists int;  
	SET CheckExists = 0; 

	SELECT count(*) INTO CheckExists from group_master WHERE group_name = groupname;   
 
    IF (CheckExists > 0) THEN 
        SET groupid= (select group_id from group_master where group_name = groupname);
    ELSE 
        INSERT INTO group_master (group_name,userid,datetime_created ) VALUES(groupname,userid,now());  
        SET groupid= (select group_id from group_master where group_name = groupname);  
        
    END IF;          

	insert into policy_lead_data(policy_category,policy_type,group_id,client_name,business_type,current_insurer_id,
	renewal_date,sum_insured,pretax_premium,document_path,userid,created_at) 
	values(policy_category,policy_type,groupid,client_name,business_type,current_insurer_id,
	renewal_date,sum_insured,pretax_premium,document_path,userid,now());

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_policy_upload_files` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_policy_upload_files`(IN uid INT,path TEXT, quote_id INT, client_name varchar(50), product_id INT,
expiry_date datetime, net_premimum varchar(50), policy_category varchar(50))
BEGIN

 insert into policy_upload_files (uid,path,quote_id,client_name,product_id,expiry_date,net_premimum,policy_category,created_at,updated_at) 
 values (uid,path,quote_id,client_name,product_id,expiry_date,net_premimum,policy_category,now(),now());
 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_quote_history` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_quote_history`(IN quoteid INT,
userid INT,
updated_at datetime,
changecontent  VARCHAR(21844)
)
BEGIN

insert into firecal_quote_master_history(quote_id,userid,updated_datetime,change_content,created_at)
values(quoteid,userid,updated_at,changecontent,now());

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_insert_quote_remarks` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_insert_quote_remarks`(
	IN quote_id INT, userid varchar(45), is_approve INT, remark varchar(250) 
 )
BEGIN

insert into quote_remarks(quote_id,userid,is_approve,remark,datetime_created) 
values(quote_id,userid,is_approve,remark,now());

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_load_managers` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_load_managers`()
BEGIN

Select empcode from user_master where user_type_id=3;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_load_policy_docs` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_load_policy_docs`(IN quoteid int)
BEGIN

select id,case when pd.lead_id > 0 then pld.document_path else pd.policy_doc_path end as policy_doc,
visiting_card_path,inspection_path,quote_id from policy_documents pd
left join policy_lead_data pld on pd.lead_id=pld.lead_id
where pd.quote_id=quoteid;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_product_master` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_product_master`(IN productid int, productname varchar(50),categoryid INT, userid INT,flag varchar(10))
BEGIN

if(flag='insert') then

insert into product_master (product_name,category_id,userid,datetime_created) values (productname,categoryid,userid,now());

elseif(flag='update') then

SET SQL_SAFE_UPDATES = 0;
Update product_master set product_name = productname,category_id=categoryid,userid=userid,updated_at=now()
where product_id= productid;

elseif(flag='delete') then

delete from product_master where product_id= productid;

elseif(flag='get') then
if(productid > 0 ) then
select pm.product_id,pm.product_name,pcm.policy_category,pm.datetime_created 
from product_master pm inner join policy_category_master pcm on pm.category_id=pcm.category_id
 where pm.product_id=productid;

else
select pm.product_id,pm.product_name,pcm.policy_category,pm.datetime_created 
from product_master pm inner join policy_category_master pcm on pm.category_id=pcm.category_id;

end if;

end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_remarks` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_remarks`(
    IN quote_id INT, userid INT,is_approve INT,remark_text varchar(250)
)
BEGIN
  
    INSERT INTO quote_remarks(quote_id,userid,is_approve,remark,datetime_created) 
    VALUES (quote_id,userid,is_approve,remark_text,now());
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_remarks_show` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_remarks_show`(
	IN quoteid INT 
 )
begin
     select * from quote_remarks qr
     inner join user_master um on qr.userid=um.userid
     where quote_id=quoteid 
     order by qr.datetime_created desc ;
   
   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_show_fircal_quote` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_show_fircal_quote`(
	IN quoteid INT  
 )
BEGIN
  
select  fq.customer_name,concat_ws(',', address1,address2,dz.district_name,sm.state,fq.country, fq.pincode ) as current_addr,
concat_ws(',',risk_address1,risk_address2,dz1.district_name,sm1.state,fq.risk_country,fq.risk_pincode) as risk_addr,
om.occupancy_name,cm.company_name, fq.period_from,fq.period_to,  DATE_FORMAT(fq.datetime_created, "%d/%m/%Y") AS quote_date,
fq.sum_building,sum_plith,sum_plant,sum_electric,sum_fff,sum_others,sum_stock,is_stfi,sum_stfi,is_earthquake,sum_earthquake,
is_terrorism,sum_terrorism,is_escalation,escalation_percent,sum_escalation,is_omission,sum_omission,is_lossrent,sum_lossrent,
is_accommodation,sum_accommodation,is_architect,sum_architect,is_removedebris,sum_removedebris,is_spontcomb,sum_spontcomb,
is_startup,sum_startup,is_floater,sum_floater,is_impactdamage,sum_impactdamage, occup_desc,contact_person,designation,
email,mobile,IFNULL(is_approve,0) as is_approve,approved_by,approved_datetime,IFNULL(is_approve1,0) as is_approve1,approved_by1,
approved_datetime1,pm.product_name,IFNULL(mail_status,0) as mail_status
from firecal_quote_master fq
inner join occupancy_master om on fq.occ_id=om.occup_id
inner join product_master pm on fq.product_id=pm.product_id
left join districtwise_zone_master dz on fq.district_id=dz.district_id
left join state_master sm on fq.state_id=sm.state_id
left join districtwise_zone_master dz1 on fq.risk_district_id=dz1.district_id
left join state_master sm1 on fq.risk_state_id=sm1.state_id
left join company_master cm on fq.current_insurer_id=cm.company_id
where fq.quote_id =quoteid;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_show_lead_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_show_lead_data`(IN emp_code varchar(50), usertypeid INT, verticalid INT, branchid INT)
BEGIN
 if(usertypeid=1) then
 
    select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name, 
		pld.business_type,cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,
		pld.document_path,concat(um.firstname, ' ', um.lastname) as created_by, pld.created_at
	 from policy_lead_data pld 
	 inner join policy_category_master pcm on pld.policy_category=pcm.category_id
	 inner join product_master pm on pld.policy_type=pm.product_id 
	 inner join group_master gm on pld.group_id=gm.group_id 
	 inner join user_master um on pld.userid=um.userid
	 inner join user_master um1 on um1.empcode=um.reporting_emp
	 inner join user_master um2 on um2.empcode=um1.reporting_emp   
	 inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 left outer join company_master cm on pld.current_insurer_id = cm.company_id;
 
 elseif(usertypeid=2) then
 
 select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name, 
		pld.business_type,cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,
		pld.document_path,concat(um.firstname, ' ', um.lastname) as created_by, pld.created_at
	 from policy_lead_data pld 
	 inner join policy_category_master pcm on pld.policy_category=pcm.category_id
	 inner join product_master pm on pld.policy_type=pm.product_id 
	 inner join group_master gm on pld.group_id=gm.group_id 
	 inner join user_master um on pld.userid=um.userid
	 inner join user_master um1 on um1.empcode=um.reporting_emp
	 inner join user_master um2 on um2.empcode=um1.reporting_emp   
	 inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 left outer join company_master cm on pld.current_insurer_id = cm.company_id;
 
  elseif(usertypeid=3) then
  
  select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name, 
		pld.business_type,cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,
		pld.document_path,concat(um.firstname, ' ', um.lastname) as created_by, pld.created_at
	 from policy_lead_data pld 
	 inner join policy_category_master pcm on pld.policy_category=pcm.category_id
	 inner join product_master pm on pld.policy_type=pm.product_id 
	 inner join group_master gm on pld.group_id=gm.group_id 
	 inner join user_master um on pld.userid=um.userid
	 inner join user_master um1 on um1.empcode=um.reporting_emp
	 inner join user_master um2 on um2.empcode=um1.reporting_emp   
	 inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 left outer join company_master cm on pld.current_insurer_id = cm.company_id
     where um.reporting_emp=emp_code;
  
   elseif(usertypeid=4) then
   
    select pld.lead_id,pcm.policy_category,pm.product_name,gm.group_name,pld.client_name, 
	 pld.business_type,cm.company_name,pld.renewal_date,pld.sum_insured,pld.pretax_premium,
	 pld.document_path,concat(um.firstname, ' ', um.lastname) as created_by, pld.created_at
	 from policy_lead_data pld 
	 inner join policy_category_master pcm on pld.policy_category=pcm.category_id
	 inner join product_master pm on pld.policy_type=pm.product_id 
	 inner join group_master gm on pld.group_id=gm.group_id 
	 inner join user_master um on pld.userid=um.userid
	 inner join user_master um1 on um1.empcode=um.reporting_emp
	 inner join user_master um2 on um2.empcode=um1.reporting_emp   
	 inner join vertical_master vm on um.vertical_id=vm.vertical_id
	 left outer join company_master cm on pld.current_insurer_id = cm.company_id
     where um.vertical_id=verticalid and um.branch_id=branchid and um.empcode=emp_code;
   
   end if;
	
 

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_state_master` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_state_master`(IN stateid int, statename varchar(50), userid INT,flag varchar(10))
BEGIN

if(flag='insert') then

insert into state_master(state,userid,created_at) values (statename,userid,now());

elseif(flag='update') then

SET SQL_SAFE_UPDATES = 0;
Update state_master set state = statename,userid=userid,updated_at=now()
where state_id= stateid;

elseif(flag='delete') then

delete from state_master where state_id= stateid;

elseif(flag='get') then
if(stateid > 0 ) then
select sm.state_id,sm.state,sm.created_at from state_master sm
where sm.state_id=stateid;

else

select sm.state_id,sm.state,sm.created_at from state_master sm;

end if;

end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_update_mail_status` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_update_mail_status`(IN quote_id INT,userid INT)
BEGIN

 SET SQL_SAFE_UPDATES = 0;
 update firecal_quote_master set mail_status=1,mail_datetime=now()
 where quote_id=quote_id and userid=userid;

 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_update_open_issue` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_update_open_issue`(IN quote_id INT,open_issue INT)
BEGIN

 SET SQL_SAFE_UPDATES = 0;
 update firecal_quote_master set open_issue=open_issue
 where quote_id=quote_id;
 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_update_quote` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_update_quote`(IN quote_id INT,section_id INT, transaction_type INT, cust_action INT, customer_type INT, period_from varchar(45), period_to varchar(45),
 current_insurer_id INT, customer_name varchar(200), address1 varchar(200), address2 varchar(200), district_id INT,state_id INT, pincode INT,
country varchar(45),risk_address1 varchar(200),risk_address2 varchar(200),risk_district_id INT,risk_state_id INT,risk_pincode INT,
risk_country varchar(45),occ_id INT,storage_type varchar(45),sum_building decimal(18,0),sum_plith decimal(18,0), sum_plant decimal(18,0),
sum_electric decimal(18,0),sum_fff decimal(18,0),sum_others decimal(18,0), sum_stock decimal(18,0),is_stfi INT,sum_stfi decimal(18,0),
is_earthquake INT, sum_earthquake decimal(18,0),is_terrorism INT,sum_terrorism decimal(18,0),is_escalation INT,escalation_percent INT,
sum_escalation decimal(18,0),is_omission INT,sum_omission decimal(18,0),is_lossrent INT,sum_lossrent decimal(18,0),is_accommodation INT,
sum_accommodation decimal(18,0),is_architect INT,sum_architect decimal(18,0),is_removedebris INT,sum_removedebris decimal(18,0),
is_spontcomb INT,sum_spontcomb decimal(18,0),is_startup INT,sum_startup decimal(18,0),is_floater INT,sum_floater decimal(18,0),
is_impactdamage INT, sum_impactdamage decimal(18,0),occup_desc varchar(500), contact_person varchar(200), designation varchar(100),
email varchar(200), mobile varchar(20),product_id INT )
BEGIN

SET SQL_SAFE_UPDATES = 0;
update firecal_quote_master set section_id=section_id,transaction_type=transaction_type,cust_action=cust_action,customer_type=customer_type,
period_from=period_from,period_to=period_to,current_insurer_id=current_insurer_id, customer_name=customer_name,address1=address1,address2=address2,district_id=district_id,
state_id=state_id,pincode=pincode,country=country,risk_address1=risk_address1,risk_district_id=risk_district_id,risk_state_id=risk_state_id,
risk_pincode=risk_pincode,risk_country=risk_country,occ_id=occ_id,storage_type=storage_type,sum_building=sum_building,
sum_plith=sum_plith,sum_plant=sum_plant,sum_electric=sum_electric,sum_fff=sum_fff,sum_others=sum_others,sum_stock=sum_stock,
is_stfi=is_stfi,sum_stfi=sum_stfi,is_earthquake=is_earthquake,sum_earthquake=sum_earthquake,is_terrorism=is_terrorism,
sum_terrorism=sum_terrorism,is_escalation=is_escalation,escalation_percent=escalation_percent,sum_escalation=sum_escalation,
is_omission=is_omission,sum_omission=sum_omission,is_lossrent=is_lossrent,sum_lossrent=sum_lossrent,is_accommodation=is_accommodation,
sum_accommodation=sum_accommodation,is_architect=is_architect,sum_architect=sum_architect,is_removedebris=is_removedebris,
sum_removedebris=sum_removedebris,is_spontcomb=is_spontcomb,sum_spontcomb=sum_spontcomb,is_startup=is_startup,sum_startup=sum_startup,
is_floater=is_floater,sum_floater=sum_floater,is_impactdamage=is_impactdamage,sum_impactdamage=sum_impactdamage,occup_desc=occup_desc,
contact_person=contact_person,designation=designation,email=email,mobile=mobile,product_id=product_id
where quote_id=quoteid;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `usp_vertical_master` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`rbonline`@`%` PROCEDURE `usp_vertical_master`(IN verticalid int, verticalname varchar(50),flag varchar(10))
BEGIN

if(flag='insert') then

insert into vertical_master (vertical_name,created_at) values (verticalname,now());

elseif(flag='update') then

SET SQL_SAFE_UPDATES = 0;
Update vertical_master set vertical_name = verticalname where vertical_id= verticalid;

elseif(flag='delete') then

delete from vertical_master where vertical_id= verticalid;

elseif(flag='get') then

if(verticalid>0) then
select * from vertical_master where vertical_id=verticalid;
else
select * from vertical_master;

end if;






end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-02 19:10:55

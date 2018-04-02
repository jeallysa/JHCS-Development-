-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: jhcs
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `activitylogs`
--

DROP TABLE IF EXISTS `activitylogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activitylogs` (
  `activitylogs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_no` varchar(45) NOT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`activitylogs_id`),
  UNIQUE KEY `idactivitylogs_UNIQUE` (`activitylogs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activitylogs`
--

LOCK TABLES `activitylogs` WRITE;
/*!40000 ALTER TABLE `activitylogs` DISABLE KEYS */;
INSERT INTO `activitylogs` VALUES (1,'1','2018-02-17 15:37:58','Add samples','inventory'),(2,'3','2018-02-19 11:47:15','Add returns','inventory'),(3,'4','2018-02-20 13:19:27','Edit blah blah','inventory'),(4,'5','2018-03-27 07:43:03','Inserted: \'Jeanne, Jeanne Machine\'','admin');
/*!40000 ALTER TABLE `activitylogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `activation` int(11) DEFAULT '1',
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Blended Coffee',1),(2,'Coffee Filter',1),(3,'Coffee Machine',1),(4,'Packaging',1),(5,'Raw Coffee',1),(6,'Sticker',1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_coffreturn`
--

DROP TABLE IF EXISTS `client_coffreturn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_coffreturn` (
  `client_coffReturnID` int(11) NOT NULL AUTO_INCREMENT,
  `client_dr` varchar(20) NOT NULL,
  `client_deliveryID` int(11) NOT NULL,
  `coff_returnDate` date NOT NULL,
  `coff_returnQty` int(11) NOT NULL,
  `coff_remarks` varchar(50) NOT NULL,
  `coff_returnAction` varchar(50) NOT NULL,
  `resolved` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`client_coffReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_coffreturn`
--

LOCK TABLES `client_coffreturn` WRITE;
/*!40000 ALTER TABLE `client_coffreturn` DISABLE KEYS */;
INSERT INTO `client_coffreturn` VALUES (32,'dr111',119,'2018-03-30',50,'spoiled','','No'),(33,'',56,'2018-03-22',11,'damaged','','No'),(34,'dr222',120,'2018-03-31',25,'Wrong Blend','','No');
/*!40000 ALTER TABLE `client_coffreturn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_delivery`
--

DROP TABLE IF EXISTS `client_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_delivery` (
  `client_deliveryID` int(11) NOT NULL AUTO_INCREMENT,
  `client_dr` varchar(20) NOT NULL,
  `contractPO_id` int(11) NOT NULL,
  `client_invoice` varchar(50) NOT NULL,
  `client_deliverDate` date NOT NULL,
  `client_balance` int(11) NOT NULL,
  `client_receive` varchar(50) NOT NULL,
  `deliver_quantity` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL DEFAULT '0',
  `payment_remarks` varchar(25) NOT NULL DEFAULT 'unpaid',
  `return` varchar(10) NOT NULL DEFAULT 'Received',
  PRIMARY KEY (`client_deliveryID`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_delivery`
--

LOCK TABLES `client_delivery` WRITE;
/*!40000 ALTER TABLE `client_delivery` DISABLE KEYS */;
INSERT INTO `client_delivery` VALUES (119,'dr111',51,'si111','2018-03-30',80000,'Ryan Bing',100,3,0,'unpaid','Returned'),(120,'dr222',52,'si222','2018-03-30',118750,'Johny Bravo',125,2,0,'unpaid','Returned');
/*!40000 ALTER TABLE `client_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_machreturn`
--

DROP TABLE IF EXISTS `client_machreturn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_machreturn` (
  `client_machReturnID` int(11) NOT NULL AUTO_INCREMENT,
  `mach_returnDate` date NOT NULL,
  `mach_returnQty` int(11) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_serial` varchar(60) NOT NULL,
  `mach_remarks` varchar(50) NOT NULL,
  `mach_returnAction` varchar(50) NOT NULL,
  `resolved` varchar(11) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'No',
  PRIMARY KEY (`client_machReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_machreturn`
--

LOCK TABLES `client_machreturn` WRITE;
/*!40000 ALTER TABLE `client_machreturn` DISABLE KEYS */;
INSERT INTO `client_machreturn` VALUES (25,'2018-03-30',1,'',1,'s444','asd','','No'),(26,'2018-03-30',1,'',1,'s444','asd','','No'),(27,'2018-03-16',9,'                    ',1,'kjasdk','aksdjlasd','','No'),(28,'2018-03-16',9,'                    ',1,'kjasdk','aksdjlasd','','No'),(29,'2018-03-14',1,'',1,'s555','asdasd','','No');
/*!40000 ALTER TABLE `client_machreturn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coffee_blend`
--

DROP TABLE IF EXISTS `coffee_blend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coffee_blend` (
  `blend_id` int(11) NOT NULL AUTO_INCREMENT,
  `blend` varchar(20) NOT NULL,
  `package_id` varchar(45) NOT NULL,
  `blend_price` int(11) NOT NULL,
  `blend_qty` int(11) NOT NULL,
  `blend_physcount` int(11) NOT NULL DEFAULT '0',
  `blend_remarks` varchar(45) DEFAULT 'null',
  `blend_discrepancy` int(11) NOT NULL DEFAULT '0',
  `blend_activation` int(11) NOT NULL DEFAULT '1',
  `blend_type` varchar(45) NOT NULL,
  `sticker_id` int(11) NOT NULL,
  PRIMARY KEY (`blend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coffee_blend`
--

LOCK TABLES `coffee_blend` WRITE;
/*!40000 ALTER TABLE `coffee_blend` DISABLE KEYS */;
INSERT INTO `coffee_blend` VALUES (1,'Guatemala Rainforest','4',1025,43,0,NULL,0,1,'Existing',1),(2,'Guatemala Rainforest','5',615,7,0,NULL,0,1,'Existing',1),(3,'Guatemala Rainforest','6',365,4,0,NULL,0,1,'Existing',1),(4,'Cordillera Sunrise','4',950,33,0,NULL,0,1,'Existing',1),(5,'Cordillera Sunrise','5',575,6,0,NULL,0,1,'Existing',1),(6,'Cordillera Sunrise','6',350,5,0,NULL,0,1,'Existing',1),(7,'Sumatra Night','4',850,7,0,NULL,0,1,'Existing',1),(8,'Sumatra Night','5',530,10,0,NULL,0,1,'Existing',1),(9,'Sumatra Night','6',325,11,0,NULL,0,1,'Existing',1),(10,'Chef\'s Blend','4',800,57,0,NULL,0,1,'Existing',1),(11,'Chef\'s Blend','5',465,9,0,NULL,0,1,'Existing',1),(12,'Chef\'s Blend','6',265,16,0,NULL,0,1,'Existing',1),(13,'Espresso Blend','4',750,2,0,NULL,0,1,'Existing',1),(14,'Espresso Blend','5',415,3,0,NULL,0,1,'Existing',1),(15,'Espresso Blend','6',230,5,0,NULL,0,1,'Existing',1),(16,'Breakfast Blend','1',675,7,0,NULL,0,1,'Existing',1),(17,'Breakfast Blend','2',375,9,0,NULL,0,1,'Existing',1),(18,'Breakfast Blend','3',200,5,0,NULL,0,1,'Existing',1),(19,'Mabuhay Blend','1',600,4,0,NULL,0,1,'Existing',1),(20,'Mabuhay Blend','2',350,6,0,NULL,0,1,'Existing',1),(21,'Mabuhay Blend','3',180,3,0,NULL,0,1,'Existing',1),(22,'Fiesta Blend','1',500,8,0,NULL,0,1,'Existing',1),(23,'Fiesta Blend','2',315,9,0,NULL,0,1,'Existing',1),(24,'Fiesta Blend','3',165,7,0,NULL,0,1,'Existing',1),(25,'Kalayaan Blend','1',400,5,0,NULL,0,1,'Existing',1),(26,'Kalayaan Blend','2',275,1,0,NULL,0,1,'Existing',1),(27,'Kalayaan Blend','3',150,2,0,NULL,0,1,'Existing',1),(28,'Pizza Volante Blend','2',500,20,0,NULL,0,1,'Client',1),(29,'The Manor Blend','3',300,12,0,NULL,0,1,'Client',1);
/*!40000 ALTER TABLE `coffee_blend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coffeeservice`
--

DROP TABLE IF EXISTS `coffeeservice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coffeeservice` (
  `coService_id` int(11) NOT NULL AUTO_INCREMENT,
  `coService_date` date NOT NULL,
  `coService_credit` varchar(50) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `coService_qty` int(11) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`coService_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coffeeservice`
--

LOCK TABLES `coffeeservice` WRITE;
/*!40000 ALTER TABLE `coffeeservice` DISABLE KEYS */;
INSERT INTO `coffeeservice` VALUES (1,'2018-02-01','30 day',1,300,1,1,1),(2,'2018-02-21','15 day',2,300,2,1,2);
/*!40000 ALTER TABLE `coffeeservice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_returns`
--

DROP TABLE IF EXISTS `company_returns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_returns` (
  `company_returnID` int(11) NOT NULL AUTO_INCREMENT,
  `sup_returnDate` date NOT NULL,
  `sup_id` int(11) NOT NULL,
  `sup_returnQty` int(11) NOT NULL,
  `sup_returnItem` varchar(50) NOT NULL,
  `sup_returnRemarks` varchar(50) NOT NULL,
  `sup_returnAction` varchar(50) NOT NULL,
  PRIMARY KEY (`company_returnID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_returns`
--

LOCK TABLES `company_returns` WRITE;
/*!40000 ALTER TABLE `company_returns` DISABLE KEYS */;
INSERT INTO `company_returns` VALUES (1,'2018-02-21',1,25,'1','Spoiled',''),(2,'2018-02-21',1,30,'1','Damage Package',''),(3,'2018-02-21',2,50,'2','Damage Package',''),(4,'2018-03-07',2,11111,'4','Incorrect Roast','');
/*!40000 ALTER TABLE `company_returns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contract`
--

DROP TABLE IF EXISTS `contract`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contract` (
  `contract_id` int(50) NOT NULL AUTO_INCREMENT,
  `date_started` date NOT NULL,
  `blend_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `client_id` int(50) NOT NULL,
  `required_qty` int(11) NOT NULL,
  `credit_term` varchar(20) NOT NULL,
  `mach_id` int(50) NOT NULL,
  `mach_salesID` int(50) NOT NULL,
  `date_expiration` date DEFAULT NULL,
  `seen` varchar(45) DEFAULT '0',
  `seen_admin` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`contract_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contract`
--

LOCK TABLES `contract` WRITE;
/*!40000 ALTER TABLE `contract` DISABLE KEYS */;
INSERT INTO `contract` VALUES (3,'2017-10-15',2,3,1,75,'30 days',1,1,'2018-03-30','0','0'),(4,'2017-04-11',4,6,2,125,'15 days',1,1,'2018-03-31','0','0'),(5,'2016-09-22',10,2,3,100,'30 days',1,1,'2018-03-31','0','0'),(6,'2015-03-15',15,4,4,150,'15 days',1,1,'2018-03-31','0','0');
/*!40000 ALTER TABLE `contract` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracted_client`
--

DROP TABLE IF EXISTS `contracted_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracted_client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_company` varchar(70) NOT NULL,
  `client_fname` varchar(50) NOT NULL,
  `client_lname` varchar(50) NOT NULL,
  `client_position` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client_contact` varchar(12) NOT NULL,
  `client_type` varchar(20) NOT NULL,
  `client_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracted_client`
--

LOCK TABLES `contracted_client` WRITE;
/*!40000 ALTER TABLE `contracted_client` DISABLE KEYS */;
INSERT INTO `contracted_client` VALUES (1,'Eurotel','Amagan','Jesselyn','General Manager','jesselyn22@gmail.com','#118 Liwanag Loakan, Baguio City','09176253445','Coffee Service',1),(2,'De Vera Inn','Calpito','Annyssa','Manager','maecalpito@gmail.com','#52 Green Valley, Baguio City','0962736554','Coffee Service',1),(3,'Bloomfield Hotel','Andrew','Garcia','manager','bloom@gmail.com','Mabini Street, Baguio City','09678543778','Retail',1),(4,'TrueBlends','Ally','Benjamin','CEO','trueb@yahoo.com','Bonifacio Rd, Baguio City','09568798767','Retail',1);
/*!40000 ALTER TABLE `contracted_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracted_po`
--

DROP TABLE IF EXISTS `contracted_po`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracted_po` (
  `contractPO_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  `contractPO_date` date NOT NULL,
  `contractPO_qty` int(11) NOT NULL,
  `delivered_qty` int(11) NOT NULL DEFAULT '0',
  `delivery_stat` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`contractPO_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracted_po`
--

LOCK TABLES `contracted_po` WRITE;
/*!40000 ALTER TABLE `contracted_po` DISABLE KEYS */;
INSERT INTO `contracted_po` VALUES (51,3,10,NULL,'2018-03-30',100,100,'delivered'),(52,2,4,NULL,'2018-03-30',125,125,'delivered'),(53,1,2,NULL,'2018-03-30',75,0,'pending'),(54,4,15,NULL,'2018-03-30',150,0,'pending');
/*!40000 ALTER TABLE `contracted_po` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_transact`
--

DROP TABLE IF EXISTS `inv_transact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_transact` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `transact_date` date NOT NULL,
  `company_returnID` int(11) DEFAULT NULL,
  `client_returnID` int(11) DEFAULT NULL,
  `po_supplier` int(11) DEFAULT NULL,
  `po_client` int(11) DEFAULT NULL,
  `sales_inv` int(11) DEFAULT NULL,
  `walkin_return` int(11) DEFAULT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'IN',
  PRIMARY KEY (`trans_id`),
  KEY `inv_trans1_idx` (`company_returnID`),
  KEY `inv_trans2_idx` (`client_returnID`),
  KEY `inv_trans3_idx` (`po_supplier`),
  KEY `inv_trans4_idx` (`po_client`),
  KEY `inv_trans5_idx` (`sales_inv`),
  KEY `inv_trans6_idx` (`walkin_return`),
  CONSTRAINT `inv_trans6` FOREIGN KEY (`walkin_return`) REFERENCES `walkin_sales` (`walkin_id`) ON UPDATE CASCADE,
  CONSTRAINT `inv_trans1` FOREIGN KEY (`company_returnID`) REFERENCES `company_returns` (`company_returnID`) ON UPDATE CASCADE,
  CONSTRAINT `inv_trans2` FOREIGN KEY (`client_returnID`) REFERENCES `client_coffreturn` (`client_coffReturnID`) ON UPDATE CASCADE,
  CONSTRAINT `inv_trans3` FOREIGN KEY (`po_supplier`) REFERENCES `supp_delivery` (`supp_delivery_id`) ON UPDATE CASCADE,
  CONSTRAINT `inv_trans4` FOREIGN KEY (`po_client`) REFERENCES `contracted_po` (`contractPO_id`) ON UPDATE CASCADE,
  CONSTRAINT `inv_trans5` FOREIGN KEY (`sales_inv`) REFERENCES `walkin_sales` (`walkin_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_transact`
--

LOCK TABLES `inv_transact` WRITE;
/*!40000 ALTER TABLE `inv_transact` DISABLE KEYS */;
INSERT INTO `inv_transact` VALUES (1,'2018-03-05',NULL,NULL,26,NULL,NULL,NULL,'IN'),(2,'2018-02-02',NULL,32,NULL,NULL,NULL,NULL,'IN'),(3,'2018-03-07',NULL,33,NULL,NULL,NULL,NULL,'IN'),(4,'2018-02-12',NULL,34,NULL,NULL,NULL,NULL,'IN'),(5,'2018-01-18',NULL,NULL,NULL,51,NULL,NULL,'OUT'),(6,'2018-01-31',NULL,NULL,NULL,52,NULL,NULL,'OUT'),(7,'2018-02-06',NULL,NULL,NULL,53,NULL,NULL,'OUT'),(8,'2018-03-10',NULL,NULL,NULL,54,NULL,NULL,'OUT'),(13,'2018-03-29',NULL,NULL,NULL,NULL,47,NULL,'OUT'),(14,'2018-03-20',NULL,NULL,NULL,NULL,50,NULL,'OUT'),(15,'2018-01-23',NULL,NULL,NULL,NULL,51,NULL,'OUT'),(16,'2018-03-12',1,NULL,NULL,NULL,NULL,NULL,'OUT'),(17,'2018-03-15',2,NULL,NULL,NULL,NULL,NULL,'OUT'),(18,'2018-02-24',3,NULL,NULL,NULL,NULL,NULL,'OUT'),(19,'2018-02-27',4,NULL,NULL,NULL,NULL,NULL,'OUT'),(20,'2018-02-27',NULL,NULL,NULL,NULL,NULL,46,'IN'),(21,'2018-03-12',NULL,NULL,NULL,NULL,NULL,55,'IN');
/*!40000 ALTER TABLE `inv_transact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `unitPrice` double NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL DEFAULT '1',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'coffee 1','raw coffee',1,3.2,'sss','1'),(2,'coffee 2','raw coffee',1,4.5,'asd','1'),(3,'coffee 3','raw coffee',1,4,'asd','1'),(4,'coffee 4','raw coffee',1,5.4,'asd','1'),(5,'coffee 5','raw coffee',2,3.5,'asd','1'),(6,'sticker 1','sticker',2,2,'aasdd','1'),(7,'sticker 2','sticker',1,3,'ddsa','1');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machine` (
  `mach_id` int(11) NOT NULL AUTO_INCREMENT,
  `brewer` varchar(50) NOT NULL,
  `brewer_type` varchar(50) NOT NULL,
  `mach_price` int(11) NOT NULL,
  `mach_reorder` int(11) NOT NULL,
  `mach_limit` int(11) NOT NULL,
  `mach_stocks` int(11) NOT NULL,
  `mach_physcount` int(11) NOT NULL DEFAULT '0',
  `mach_remarks` varchar(45) DEFAULT NULL,
  `mach_discrepancy` int(11) NOT NULL DEFAULT '0',
  `unitPrice` decimal(11,0) DEFAULT NULL,
  `sup_id` varchar(11) NOT NULL,
  `mach_activation` int(11) NOT NULL DEFAULT '1',
  `category` varchar(45) DEFAULT '4',
  PRIMARY KEY (`mach_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine`
--

LOCK TABLES `machine` WRITE;
/*!40000 ALTER TABLE `machine` DISABLE KEYS */;
INSERT INTO `machine` VALUES (1,'Saeco','Double Cup Espresso',10000,5,10,140,0,NULL,0,10000,'1',1,'4'),(2,'Jeanne','Jeanne Machine',200,5,20,15,0,NULL,0,10000,'1',1,'4');
/*!40000 ALTER TABLE `machine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machine_out`
--

DROP TABLE IF EXISTS `machine_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machine_out` (
  `mach_salesID` int(11) NOT NULL AUTO_INCREMENT,
  `mach_id` int(11) NOT NULL,
  `mach_serial` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `remarks` varchar(60) NOT NULL DEFAULT 'Received',
  `status` varchar(60) NOT NULL,
  PRIMARY KEY (`mach_salesID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine_out`
--

LOCK TABLES `machine_out` WRITE;
/*!40000 ALTER TABLE `machine_out` DISABLE KEYS */;
INSERT INTO `machine_out` VALUES (1,1,'s111','2018-03-07',2,1,'Received','sold'),(2,1,'s222','2018-03-26',1,1,'Received','sold'),(3,1,'s333','2018-03-26',1,4,'Received','sold'),(4,1,'s444','2017-10-15',1,1,'Returned','rented'),(5,1,'s555','2017-04-11',1,2,'Returned','rented'),(6,1,'ss1','2018-03-07',1,3,'Received','sold'),(7,2,'srjin12','2018-03-05',5,2,'Received','sold'),(8,1,'srBongga','2018-03-30',100,4,'Received','sold'),(9,1,'sr2354','2018-03-24',50,1,'Received','sold'),(10,1,'sr34234','2018-03-23',10,1,'Received','sold'),(11,1,'kjasdk','2018-03-21',9,1,'Returned','sold');
/*!40000 ALTER TABLE `machine_out` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packaging`
--

DROP TABLE IF EXISTS `packaging`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packaging` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_type` varchar(20) NOT NULL,
  `package_size` varchar(20) NOT NULL,
  `package_reorder` int(11) NOT NULL,
  `package_limit` int(11) NOT NULL,
  `package_stock` int(11) NOT NULL,
  `package_physcount` int(11) NOT NULL DEFAULT '0',
  `package_remarks` varchar(45) DEFAULT NULL,
  `package_discrepancy` int(11) NOT NULL DEFAULT '0',
  `unitPrice` decimal(11,0) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `pack_activation` int(11) NOT NULL DEFAULT '1',
  `category` varchar(45) DEFAULT '2',
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packaging`
--

LOCK TABLES `packaging` WRITE;
/*!40000 ALTER TABLE `packaging` DISABLE KEYS */;
INSERT INTO `packaging` VALUES (1,'clear','1000',50,200,60,0,NULL,0,12,1,1,'2'),(2,'clear','500',50,200,74,0,NULL,0,23,2,1,'2'),(3,'clear','250',50,200,90,0,NULL,0,12,1,1,'2'),(4,'brown','1000',50,200,65,0,NULL,0,32,2,1,'2'),(5,'brown','500',50,200,92,0,NULL,0,12,1,1,'2'),(6,'brown','250',50,200,137,0,NULL,0,12,2,1,'2');
/*!40000 ALTER TABLE `packaging` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_contracted`
--

DROP TABLE IF EXISTS `payment_contracted`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_contracted` (
  `paid_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_deliveryID` int(11) NOT NULL,
  `collection_no` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `withheld` int(11) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  PRIMARY KEY (`paid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_contracted`
--

LOCK TABLES `payment_contracted` WRITE;
/*!40000 ALTER TABLE `payment_contracted` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_contracted` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_supplier`
--

DROP TABLE IF EXISTS `payment_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_supplier` (
  `supPayment_id` int(11) NOT NULL AUTO_INCREMENT,
  `supPO_id` int(11) NOT NULL,
  `supPayment_date` date NOT NULL,
  `supPayment_amount` int(11) NOT NULL,
  `sup_balance` int(11) NOT NULL,
  `supPayment_status` varchar(20) NOT NULL,
  PRIMARY KEY (`supPayment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_supplier`
--

LOCK TABLES `payment_supplier` WRITE;
/*!40000 ALTER TABLE `payment_supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proportions`
--

DROP TABLE IF EXISTS `proportions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proportions` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `blend_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `raw_prop_idx` (`raw_id`),
  KEY `blend_prop_idx` (`blend_id`),
  CONSTRAINT `blend_prop` FOREIGN KEY (`blend_id`) REFERENCES `coffee_blend` (`blend_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `raw_prop` FOREIGN KEY (`raw_id`) REFERENCES `raw_coffee` (`raw_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proportions`
--

LOCK TABLES `proportions` WRITE;
/*!40000 ALTER TABLE `proportions` DISABLE KEYS */;
INSERT INTO `proportions` VALUES (1,1,1,10),(2,1,4,30),(3,1,5,60),(4,2,1,10),(5,2,4,30),(6,2,5,60),(7,3,1,10),(8,3,4,30),(9,3,5,60),(10,4,2,60),(11,4,3,40),(12,5,2,60),(13,5,3,40),(14,6,2,60),(15,6,3,40),(16,7,2,45),(17,7,3,35),(18,7,6,15),(19,8,2,45),(20,8,3,35),(21,8,6,15),(22,9,2,45),(23,9,3,35),(24,9,6,15),(25,10,1,20),(26,10,2,20),(27,10,6,60),(28,11,1,20),(29,11,2,20),(30,11,6,60),(31,12,1,20),(32,12,2,20),(33,12,6,60),(34,13,4,35),(35,13,5,65),(36,14,4,35),(37,14,5,65),(38,15,4,35),(39,15,5,65),(40,16,2,25),(41,16,5,75),(42,17,2,25),(43,17,5,75),(44,18,2,25),(45,18,5,75),(46,28,2,60),(47,28,4,40),(48,29,1,30),(49,29,3,70);
/*!40000 ALTER TABLE `proportions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raw_coffee`
--

DROP TABLE IF EXISTS `raw_coffee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `raw_coffee` (
  `raw_id` int(11) NOT NULL AUTO_INCREMENT,
  `raw_coffee` varchar(20) NOT NULL,
  `raw_reorder` int(11) NOT NULL,
  `raw_limit` int(11) NOT NULL,
  `raw_stock` int(11) NOT NULL,
  `unitPrice` decimal(11,0) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `raw_physcount` int(11) NOT NULL DEFAULT '0',
  `raw_remarks` varchar(45) DEFAULT 'null',
  `raw_discrepancy` int(11) NOT NULL DEFAULT '0',
  `raw_activation` int(11) NOT NULL DEFAULT '1',
  `raw_type` varchar(50) NOT NULL,
  `category` varchar(45) DEFAULT '1',
  PRIMARY KEY (`raw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raw_coffee`
--

LOCK TABLES `raw_coffee` WRITE;
/*!40000 ALTER TABLE `raw_coffee` DISABLE KEYS */;
INSERT INTO `raw_coffee` VALUES (1,'GUATEMALA',5000,10000,73400,80,1,0,NULL,0,1,'city','1'),(2,'SUMATRA',3200,7001,7000,70,2,0,NULL,0,1,'medium','1'),(3,'ROBUSTA',1000,8500,500,60,2,0,NULL,0,1,'light','1'),(4,'BENGUET',1500,9000,1600,80,1,0,NULL,0,1,'light','1'),(5,'COLOMBIA',2000,10000,2500,90,1,0,NULL,0,1,'city','1'),(6,'BARAKO',2500,10500,5000,76,1,0,NULL,0,1,'city','1');
/*!40000 ALTER TABLE `raw_coffee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `retail`
--

DROP TABLE IF EXISTS `retail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `retail` (
  `retail_id` int(11) NOT NULL AUTO_INCREMENT,
  `retail_date` date NOT NULL,
  `retail_credit` varchar(20) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `retail_qty` int(11) NOT NULL,
  `sticker_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`retail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retail`
--

LOCK TABLES `retail` WRITE;
/*!40000 ALTER TABLE `retail` DISABLE KEYS */;
INSERT INTO `retail` VALUES (1,'2018-02-22','30 day',1,300,1,1),(2,'2018-02-09','30 day',2,300,2,2);
/*!40000 ALTER TABLE `retail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sample`
--

DROP TABLE IF EXISTS `sample`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sample` (
  `sample_id` int(11) NOT NULL AUTO_INCREMENT,
  `sample_date` date DEFAULT NULL,
  `sample_recipient` varchar(50) NOT NULL,
  `sample_type` varchar(50) NOT NULL,
  `client_coffReturnID` int(11) DEFAULT NULL,
  `package_id` int(11) NOT NULL,
  `sticker_id` int(11) NOT NULL,
  PRIMARY KEY (`sample_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sample`
--

LOCK TABLES `sample` WRITE;
/*!40000 ALTER TABLE `sample` DISABLE KEYS */;
INSERT INTO `sample` VALUES (1,'2018-02-21','Walkin Client','freebies',9,4,1),(2,'2018-02-22','The Manor','free taste',10,5,2),(3,'2018-03-21','sfdasd','sadad',NULL,3,1),(4,'2018-03-25','Session Road Pedestrians','Free Taste',NULL,3,1);
/*!40000 ALTER TABLE `sample` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sticker`
--

DROP TABLE IF EXISTS `sticker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sticker` (
  `sticker_id` int(11) NOT NULL AUTO_INCREMENT,
  `sticker` varchar(50) NOT NULL,
  `sticker_reorder` int(11) NOT NULL,
  `sticker_limit` int(11) NOT NULL,
  `sticker_stock` int(11) NOT NULL,
  `sticker_physcount` int(11) NOT NULL DEFAULT '0',
  `sticker_remarks` varchar(45) DEFAULT NULL,
  `sticker_discrepancy` int(11) NOT NULL DEFAULT '0',
  `unitPrice` decimal(11,0) DEFAULT NULL,
  `sup_id` int(11) NOT NULL,
  `sticker_activation` int(11) NOT NULL DEFAULT '1',
  `sticker_type` varchar(45) NOT NULL DEFAULT 'sticker',
  `category` varchar(45) DEFAULT '3',
  PRIMARY KEY (`sticker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sticker`
--

LOCK TABLES `sticker` WRITE;
/*!40000 ALTER TABLE `sticker` DISABLE KEYS */;
INSERT INTO `sticker` VALUES (1,'Marios',500,1000,300,0,NULL,0,5,1,1,'sticker','3'),(2,'Manor',500,1000,400,0,NULL,0,6,2,0,'sticker','3');
/*!40000 ALTER TABLE `sticker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_delivery`
--

DROP TABLE IF EXISTS `supp_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_delivery` (
  `supp_delivery_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_ordered_id` int(11) NOT NULL,
  `supp_po_id` int(11) NOT NULL,
  `date_received` date NOT NULL,
  `yield_weight` double NOT NULL,
  `yields` double NOT NULL,
  `received_by` varchar(45) NOT NULL,
  PRIMARY KEY (`supp_delivery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_delivery`
--

LOCK TABLES `supp_delivery` WRITE;
/*!40000 ALTER TABLE `supp_delivery` DISABLE KEYS */;
INSERT INTO `supp_delivery` VALUES (11,22,12,'2018-03-21',5,0,'Jomari Julhusin'),(12,23,13,'2018-03-21',100,0,'Tin Caguioa'),(13,24,14,'2018-03-21',56,0,'Tin Caguioa'),(14,25,15,'2018-03-21',6399,0,'Tin Caguioa'),(15,26,16,'2018-03-25',100,0,'Tin Caguioa'),(16,27,17,'2018-03-28',1500,500,'Tin Caguioa'),(17,28,17,'2018-03-27',4500,0,'Mariella Fernandez'),(18,29,18,'2018-03-27',11100,0,'Jeanne Dullao'),(19,30,19,'2018-03-27',300,0,'Tin Caguioa'),(20,31,20,'2018-03-27',6000,0,'Tin Caguioa'),(21,32,21,'2018-03-27',1000,0,'Tin Caguioa'),(22,33,22,'2018-03-27',200,0,'Tin Caguioa'),(23,34,22,'0000-00-00',500,0,''),(24,35,23,'2018-03-27',200,0,'Tin Caguioa'),(25,36,24,'2018-03-27',200,0,'Tin Caguioa'),(26,37,25,'0000-00-00',4,0,'Tin Caguioa');
/*!40000 ALTER TABLE `supp_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_payment`
--

DROP TABLE IF EXISTS `supp_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_payment` (
  `supp_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `bank` varchar(20) NOT NULL,
  PRIMARY KEY (`supp_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_payment`
--

LOCK TABLES `supp_payment` WRITE;
/*!40000 ALTER TABLE `supp_payment` DISABLE KEYS */;
INSERT INTO `supp_payment` VALUES (1,17,'2018-03-27',560100,'BPI');
/*!40000 ALTER TABLE `supp_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_po`
--

DROP TABLE IF EXISTS `supp_po`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_po` (
  `supp_po_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_id` int(11) NOT NULL,
  `suppPO_date` date NOT NULL,
  `trucking_fee` double NOT NULL,
  `supp_creditTerm` varchar(45) NOT NULL,
  `total_item` int(11) NOT NULL DEFAULT '0',
  `total_amount` double NOT NULL DEFAULT '0',
  `delivery_stat` varchar(45) DEFAULT '0',
  `payment_stat` varchar(45) DEFAULT '0',
  `payment` decimal(11,0) DEFAULT NULL,
  PRIMARY KEY (`supp_po_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_po`
--

LOCK TABLES `supp_po` WRITE;
/*!40000 ALTER TABLE `supp_po` DISABLE KEYS */;
INSERT INTO `supp_po` VALUES (25,2,'2018-03-31',1,'1',4,93,'1','0',NULL);
/*!40000 ALTER TABLE `supp_po` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_po_ordered`
--

DROP TABLE IF EXISTS `supp_po_ordered`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_po_ordered` (
  `supp_po_ordered_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_id` int(11) NOT NULL,
  `item` varchar(45) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'Type',
  `delivery_stat` varchar(45) DEFAULT '0',
  `payment_stat` varchar(45) DEFAULT '0',
  `payment` decimal(11,0) DEFAULT NULL,
  PRIMARY KEY (`supp_po_ordered_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_po_ordered`
--

LOCK TABLES `supp_po_ordered` WRITE;
/*!40000 ALTER TABLE `supp_po_ordered` DISABLE KEYS */;
INSERT INTO `supp_po_ordered` VALUES (37,25,'clear',4,92,'500','1','0',NULL);
/*!40000 ALTER TABLE `supp_po_ordered` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_temp_po`
--

DROP TABLE IF EXISTS `supp_temp_po`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_temp_po` (
  `id_supp_temp_PO` int(11) NOT NULL,
  `supp_name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `trucking_fee` decimal(10,0) NOT NULL,
  `credit_term` varchar(45) NOT NULL,
  PRIMARY KEY (`id_supp_temp_PO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_temp_po`
--

LOCK TABLES `supp_temp_po` WRITE;
/*!40000 ALTER TABLE `supp_temp_po` DISABLE KEYS */;
/*!40000 ALTER TABLE `supp_temp_po` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supp_temp_po_order`
--

DROP TABLE IF EXISTS `supp_temp_po_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supp_temp_po_order` (
  `idsupp_temp_po_order` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `unitPrice` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`idsupp_temp_po_order`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_temp_po_order`
--

LOCK TABLES `supp_temp_po_order` WRITE;
/*!40000 ALTER TABLE `supp_temp_po_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `supp_temp_po_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `sup_id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_productID` int(11) NOT NULL,
  `sup_company` varchar(70) NOT NULL,
  `sup_lname` varchar(50) NOT NULL,
  `sup_fname` varchar(50) NOT NULL,
  `sup_position` varchar(50) NOT NULL,
  `sup_address` varchar(100) NOT NULL,
  `sup_email` varchar(50) NOT NULL,
  `sup_contact` varchar(12) NOT NULL,
  `sup_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (1,0,'Tinz Enterprise','Caguioa','Tinz','Manager','Session Road, Baguio City','tinz22@gmail.com','09763545225',1),(2,0,'Lanz Trading Inc.','Dullao','Jeanne','CEO','#98 Bonifacio Street, Baguio City','jin_97@yahoo.com','09875437665',1);
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_delivery`
--

DROP TABLE IF EXISTS `supplier_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier_delivery` (
  `sup_deliveryID` int(11) NOT NULL AUTO_INCREMENT,
  `supPO_id` int(11) NOT NULL,
  `supDelivery_stat` varchar(20) NOT NULL,
  `date_recieved` date NOT NULL,
  `yield_weight` int(11) NOT NULL,
  `yield` int(11) NOT NULL,
  `recieved_by` varchar(50) NOT NULL,
  PRIMARY KEY (`sup_deliveryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_delivery`
--

LOCK TABLES `supplier_delivery` WRITE;
/*!40000 ALTER TABLE `supplier_delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_po`
--

DROP TABLE IF EXISTS `supplier_po`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier_po` (
  `supPO_id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_id` int(11) NOT NULL,
  `supPO_date` date NOT NULL,
  `supPO_qty` int(11) NOT NULL,
  `truck_fee` int(11) NOT NULL,
  `sup_credit` text NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `sup_delivery` varchar(20) NOT NULL DEFAULT 'pending',
  `supPayment_stat` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`supPO_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_po`
--

LOCK TABLES `supplier_po` WRITE;
/*!40000 ALTER TABLE `supplier_po` DISABLE KEYS */;
INSERT INTO `supplier_po` VALUES (1,1,'2018-02-21',10000,50,'30 days',1,5050,'pending','pending'),(2,2,'2018-02-21',15000,100,'15 days',2,8600,'pending','pending');
/*!40000 ALTER TABLE `supplier_po` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_mach`
--

DROP TABLE IF EXISTS `trans_mach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_mach` (
  `tmach_id` int(11) NOT NULL AUTO_INCREMENT,
  `mach_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tmach_id`),
  KEY `mach_trans_idx` (`mach_id`),
  KEY `mach_to_mtm_idx` (`mach_id`),
  KEY `mach_trans_idx1` (`trans_id`),
  CONSTRAINT `mach_trans` FOREIGN KEY (`trans_id`) REFERENCES `inv_transact` (`trans_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mach_trans2` FOREIGN KEY (`mach_id`) REFERENCES `machine` (`mach_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_mach`
--

LOCK TABLES `trans_mach` WRITE;
/*!40000 ALTER TABLE `trans_mach` DISABLE KEYS */;
INSERT INTO `trans_mach` VALUES (1,1,1,'2'),(2,1,2,'5'),(3,1,3,'3'),(4,1,4,'4'),(5,1,5,'2'),(6,1,6,'5'),(7,1,7,'3'),(8,1,8,'1'),(13,NULL,13,NULL),(14,NULL,14,NULL),(15,NULL,15,NULL);
/*!40000 ALTER TABLE `trans_mach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_pack`
--

DROP TABLE IF EXISTS `trans_pack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_pack` (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tp_id`),
  KEY `t_pack_idx` (`package_id`),
  KEY `t_pack_transact_idx` (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_pack`
--

LOCK TABLES `trans_pack` WRITE;
/*!40000 ALTER TABLE `trans_pack` DISABLE KEYS */;
INSERT INTO `trans_pack` VALUES (1,1,2,200),(2,1,3,300),(3,1,4,600),(4,1,6,100),(5,2,1,450),(6,2,3,800),(7,3,2,650),(8,4,2,700),(9,5,3,200),(10,5,4,350),(11,6,1,400),(12,6,5,500),(13,6,6,500),(14,7,1,100),(15,8,1,100),(16,9,5,3),(17,10,4,1),(18,11,4,21),(19,12,4,11),(20,13,4,2),(21,14,4,1),(22,15,4,1);
/*!40000 ALTER TABLE `trans_pack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_raw`
--

DROP TABLE IF EXISTS `trans_raw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_raw` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `raw_coffeeid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tr_id`),
  KEY `transact_idx` (`trans_id`),
  KEY `raw_idx` (`raw_coffeeid`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_raw`
--

LOCK TABLES `trans_raw` WRITE;
/*!40000 ALTER TABLE `trans_raw` DISABLE KEYS */;
INSERT INTO `trans_raw` VALUES (1,1,1,2000),(2,1,2,4300),(3,1,5,4500),(4,2,4,10000),(5,2,6,12000),(7,3,1,8000),(8,3,3,5000),(9,3,4,15000),(10,4,2,1200),(11,4,4,14000),(12,4,6,12000),(14,5,4,8500),(15,6,6,8100),(18,7,1,5000),(19,8,1,5000),(20,8,5,1000),(21,9,1,150),(22,9,4,450),(23,9,5,900),(24,10,1,200),(25,10,2,200),(26,10,6,600),(27,11,1,2100),(28,11,4,6300),(29,11,5,12600),(30,12,1,1100),(31,12,4,3300),(32,12,5,6600),(33,13,1,400),(34,13,2,400),(35,13,6,1200),(36,14,1,100),(37,14,4,300),(38,14,5,600),(39,15,1,100),(40,15,4,300),(41,15,5,600),(42,16,5,500),(43,16,3,300),(44,17,6,1200),(45,17,1,3000),(46,18,2,2100),(47,18,4,3300),(48,19,2,2000),(49,19,6,1000),(50,20,3,1600),(51,20,1,1400),(52,21,1,2800),(53,21,4,2600);
/*!40000 ALTER TABLE `trans_raw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_stick`
--

DROP TABLE IF EXISTS `trans_stick`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_stick` (
  `tstick_id` int(11) NOT NULL AUTO_INCREMENT,
  `sticker_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tstick_id`),
  KEY `stick_trans_idx` (`sticker_id`),
  KEY `stick_trans2_idx` (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_stick`
--

LOCK TABLES `trans_stick` WRITE;
/*!40000 ALTER TABLE `trans_stick` DISABLE KEYS */;
INSERT INTO `trans_stick` VALUES (1,1,1,100),(2,2,2,50),(3,1,3,30),(4,1,4,110),(5,2,5,20),(6,1,6,150),(7,2,7,100),(8,2,8,200),(9,NULL,9,NULL),(10,NULL,10,NULL),(11,NULL,11,NULL),(12,NULL,12,NULL),(13,NULL,13,NULL),(14,NULL,14,NULL),(15,NULL,15,NULL);
/*!40000 ALTER TABLE `trans_stick` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transac_history`
--

DROP TABLE IF EXISTS `transac_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transac_history` (
  `transac_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_id` varchar(45) NOT NULL,
  `date_received` date NOT NULL,
  `date_payment` date NOT NULL,
  PRIMARY KEY (`transac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transac_history`
--

LOCK TABLES `transac_history` WRITE;
/*!40000 ALTER TABLE `transac_history` DISABLE KEYS */;
INSERT INTO `transac_history` VALUES (1,'1','2018-02-02','2018-02-28'),(2,'2','2018-03-01','2018-03-15');
/*!40000 ALTER TABLE `transac_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `u_lname` varchar(50) NOT NULL,
  `u_fname` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `u_activation` int(11) NOT NULL DEFAULT '1',
  `u_type` varchar(45) NOT NULL,
  PRIMARY KEY (`user_no`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'tintin','Caguioa','Tin','2155651@slu.edu.ph','09269044317','Baguio City','asdasd',1,'sales'),(2,'lila','Fernandez','Mariella','lila22@gmail.com','09176524553','#09 Hillside, Baguio City','l',1,'admin'),(3,'jom','Julhusin','Jomari','jom22@gmail.com','09786525443','#127 Aurora Hill, Baguio City','j',1,'inventory'),(5,'jin','Dullao','Jeanne','jeanne@gmail.com','09067275881','#90 Central Ambiong ','j',1,'admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walkin_raw`
--

DROP TABLE IF EXISTS `walkin_raw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walkin_raw` (
  `wiraw_id` int(11) NOT NULL AUTO_INCREMENT,
  `walkin_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`wiraw_id`),
  KEY `raw_wiraw_idx` (`raw_id`),
  KEY `walk_wiraw_idx` (`walkin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walkin_raw`
--

LOCK TABLES `walkin_raw` WRITE;
/*!40000 ALTER TABLE `walkin_raw` DISABLE KEYS */;
INSERT INTO `walkin_raw` VALUES (10,46,1,1200),(11,46,4,3600),(12,46,5,7200),(13,47,1,400),(14,47,2,400),(15,47,6,1200);
/*!40000 ALTER TABLE `walkin_raw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walkin_sales`
--

DROP TABLE IF EXISTS `walkin_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walkin_sales` (
  `walkin_id` int(11) NOT NULL AUTO_INCREMENT,
  `walkin_date` date NOT NULL,
  `walkin_qty` int(11) NOT NULL,
  `walkin_returns` int(11) NOT NULL DEFAULT '0',
  `coff_remark` varchar(80) NOT NULL DEFAULT 'Received',
  `blend_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`walkin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walkin_sales`
--

LOCK TABLES `walkin_sales` WRITE;
/*!40000 ALTER TABLE `walkin_sales` DISABLE KEYS */;
INSERT INTO `walkin_sales` VALUES (1,'2018-02-15',2,0,'Received',2,1),(2,'2018-02-15',3,0,'Received',3,2),(46,'2018-03-21',12,12,'Returned',1,NULL),(47,'2018-03-21',2,0,'Received',10,NULL),(50,'2018-03-22',2,0,'Received',3,NULL),(51,'2018-03-22',2,0,'Received',3,NULL),(52,'2018-03-22',2,0,'Received',3,NULL),(53,'2018-03-22',3,0,'Received',2,NULL),(54,'2018-03-26',1,0,'Received',10,NULL),(55,'2018-03-26',21,10,'Returned',1,NULL),(56,'2018-03-26',11,11,'Returned',1,NULL),(57,'2018-03-29',1,0,'Received',24,NULL),(58,'2018-03-29',2,0,'Received',10,NULL),(59,'2018-03-20',1,0,'Received',1,NULL),(60,'2018-01-23',1,0,'Received',1,NULL);
/*!40000 ALTER TABLE `walkin_sales` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-01 12:54:54

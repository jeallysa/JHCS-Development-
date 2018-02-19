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
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_no` varchar(45) NOT NULL,
  `message` varchar(45) NOT NULL,
  `timestamp` datetime NOT NULL,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`log_id`),
  UNIQUE KEY `idactivitylogs_UNIQUE` (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activitylogs`
--

LOCK TABLES `activitylogs` WRITE;
/*!40000 ALTER TABLE `activitylogs` DISABLE KEYS */;
INSERT INTO `activitylogs` VALUES (1,'1','Add returns','2018-02-18 07:34:58','inventory'),(2,'3','Add samples','2018-02-18 09:22:43','inventory'),(3,'4','Edit blah blah','2018-02-18 16:27:31','inventory');
/*!40000 ALTER TABLE `activitylogs` ENABLE KEYS */;
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
  `coff_returnDate` date NOT NULL,
  `coff_returnQty` int(11) NOT NULL,
  `coff_remarks` varchar(50) NOT NULL,
  `coff_returnAction` varchar(50) NOT NULL,
  PRIMARY KEY (`client_coffReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_coffreturn`
--

LOCK TABLES `client_coffreturn` WRITE;
/*!40000 ALTER TABLE `client_coffreturn` DISABLE KEYS */;
INSERT INTO `client_coffreturn` VALUES (1,'dr123','2018-02-28',100,'damaged','sample'),(2,'dr124','2018-02-19',100,'spoiled','redeliver');
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
  `contractPO_no` int(11) NOT NULL,
  `client_dr` varchar(50) NOT NULL,
  `client_invoice` varchar(50) NOT NULL,
  `client_deliverDate` date NOT NULL,
  `client_amount` int(11) NOT NULL,
  `client_receive` varchar(50) NOT NULL,
  `payment_remarks` varchar(50) NOT NULL DEFAULT 'unpaid',
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`client_deliveryID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_delivery`
--

LOCK TABLES `client_delivery` WRITE;
/*!40000 ALTER TABLE `client_delivery` DISABLE KEYS */;
INSERT INTO `client_delivery` VALUES (1,3,'dr234','234','2018-02-13',10000,'Mark De Vera','unpaid',1),(2,1,'dr233','233','2018-02-12',13000,'Leah Ramos','paid',2);
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
  `mach_remarks` varchar(50) NOT NULL,
  `mach_returnAction` varchar(50) NOT NULL,
  PRIMARY KEY (`client_machReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_machreturn`
--

LOCK TABLES `client_machreturn` WRITE;
/*!40000 ALTER TABLE `client_machreturn` DISABLE KEYS */;
INSERT INTO `client_machreturn` VALUES (1,'2018-02-13',1,'1',1,'damaged','return to supplier'),(2,'2018-02-07',1,'2',2,'damaged','repair');
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
  `raw_id` int(11) NOT NULL,
  `percentage` varchar(3) NOT NULL,
  `blend_price` int(11) NOT NULL,
  `blend_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`blend_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coffee_blend`
--

LOCK TABLES `coffee_blend` WRITE;
/*!40000 ALTER TABLE `coffee_blend` DISABLE KEYS */;
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
  PRIMARY KEY (`coService_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coffeeservice`
--

LOCK TABLES `coffeeservice` WRITE;
/*!40000 ALTER TABLE `coffeeservice` DISABLE KEYS */;
INSERT INTO `coffeeservice` VALUES (1,'2018-02-01','30 day',1,300,1,1),(2,'2018-02-21','15 day',2,300,2,1);
/*!40000 ALTER TABLE `coffeeservice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_returns`
--

DROP TABLE IF EXISTS `company_returns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_returns` (
  `company_returnID` int(11) NOT NULL,
  `sup_returnDate` date NOT NULL,
  `sup_id` int(11) NOT NULL,
  `sup_returnQty` int(11) NOT NULL,
  `sup_returnItem` varchar(50) NOT NULL,
  `sup_returnRemarks` varchar(50) NOT NULL,
  `sup_returnAction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_returns`
--

LOCK TABLES `company_returns` WRITE;
/*!40000 ALTER TABLE `company_returns` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_returns` ENABLE KEYS */;
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
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracted_client`
--

LOCK TABLES `contracted_client` WRITE;
/*!40000 ALTER TABLE `contracted_client` DISABLE KEYS */;
INSERT INTO `contracted_client` VALUES (1,'Eurotel','Amagan','Jesselyn','General Manager','jesselyn22@gmail.com','#118 Liwanag Loakan, Baguio City','09176253445','Retail'),(2,'De Vera Inn','Calpito','Annyssa','Manager','maecalpito@gmail.com','#52 Green Valley, Baguio City','0962736554','Coffee Service');
/*!40000 ALTER TABLE `contracted_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracted_po`
--

DROP TABLE IF EXISTS `contracted_po`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracted_po` (
  `contractPO_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `contractPO_no` varchar(50) NOT NULL,
  `contractPO_date` date NOT NULL,
  `contractPO_qty` int(11) NOT NULL,
  `delivery_stat` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracted_po`
--

LOCK TABLES `contracted_po` WRITE;
/*!40000 ALTER TABLE `contracted_po` DISABLE KEYS */;
INSERT INTO `contracted_po` VALUES (0,1,1,'PO111','2018-02-06',300,'pending'),(0,2,2,'PO222','2018-02-05',300,'pending');
/*!40000 ALTER TABLE `contracted_po` ENABLE KEYS */;
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
  `mach_reorder` int(11) NOT NULL,
  `mach_limit` int(11) NOT NULL,
  `mach_stocks` int(11) NOT NULL,
  `sup_id` varchar(11) NOT NULL,
  `mach_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`mach_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine`
--

LOCK TABLES `machine` WRITE;
/*!40000 ALTER TABLE `machine` DISABLE KEYS */;
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
  `mach_tagNO` int(11) NOT NULL,
  `date_installed` date NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`mach_salesID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine_out`
--

LOCK TABLES `machine_out` WRITE;
/*!40000 ALTER TABLE `machine_out` DISABLE KEYS */;
INSERT INTO `machine_out` VALUES (1,111,'2018-02-24',1,1),(2,112,'2018-02-12',1,2);
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
  `sup_id` int(11) NOT NULL,
  `pack_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packaging`
--

LOCK TABLES `packaging` WRITE;
/*!40000 ALTER TABLE `packaging` DISABLE KEYS */;
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
  `collection_no` varchar(20) NOT NULL,
  `client_dr` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `gross_amount` int(11) NOT NULL,
  `withheld` int(11) NOT NULL,
  `payment_remarks` varchar(20) NOT NULL,
  PRIMARY KEY (`paid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_contracted`
--

LOCK TABLES `payment_contracted` WRITE;
/*!40000 ALTER TABLE `payment_contracted` DISABLE KEYS */;
INSERT INTO `payment_contracted` VALUES (1,'C111','dr233','bank','2018-02-15',10000,10000,0,'full');
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
  `sup_id` int(11) NOT NULL,
  `raw_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`raw_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raw_coffee`
--

LOCK TABLES `raw_coffee` WRITE;
/*!40000 ALTER TABLE `raw_coffee` DISABLE KEYS */;
INSERT INTO `raw_coffee` VALUES (1,'Raw Coffee A',5000,10000,80000,0,1),(2,'Raw Coffee B',2000,7000,9000,0,1);
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
  PRIMARY KEY (`retail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retail`
--

LOCK TABLES `retail` WRITE;
/*!40000 ALTER TABLE `retail` DISABLE KEYS */;
INSERT INTO `retail` VALUES (1,'2018-02-22','30 day',1,300),(2,'2018-02-09','30 day',2,300);
/*!40000 ALTER TABLE `retail` ENABLE KEYS */;
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
  `sup_id` int(11) NOT NULL,
  `sticker_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sticker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sticker`
--

LOCK TABLES `sticker` WRITE;
/*!40000 ALTER TABLE `sticker` DISABLE KEYS */;
/*!40000 ALTER TABLE `sticker` ENABLE KEYS */;
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
  PRIMARY KEY (`sup_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (1,0,'Tinz Enterprise','Caguioa','Tinz','Manager','Session Road, Baguio City','tinz22@gmail.com','09763545225'),(2,0,'Lanz Trading Inc.','Dullao','Jeanne','CEO','#98 Bonifacio Street, Baguio City','jin_97@yahoo.com','09875437665');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_po`
--

LOCK TABLES `supplier_po` WRITE;
/*!40000 ALTER TABLE `supplier_po` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_po` ENABLE KEYS */;
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
  PRIMARY KEY (`user_no`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'tin','Caguioa','Tin','2155651@slu.edu.ph','09269044317','Baguio City','tin',1),(3,'lila','Fernandez','Mariella','lila22@gmail.com','09176524553','#09 Hillside, Baguio City','l',1),(4,'jom','Julhusin','Jomari','jom22@gmail.com','09786525443','#127 Aurora Hill, Baguio City','j',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walkin_sales`
--

DROP TABLE IF EXISTS `walkin_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walkin_sales` (
  `walkin_id` int(11) NOT NULL AUTO_INCREMENT,
  `walkin_fname` varchar(50) NOT NULL,
  `walkin_lname` varchar(50) NOT NULL,
  `walkin_date` date NOT NULL,
  `walkin_qty` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`walkin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walkin_sales`
--

LOCK TABLES `walkin_sales` WRITE;
/*!40000 ALTER TABLE `walkin_sales` DISABLE KEYS */;
INSERT INTO `walkin_sales` VALUES (1,'Michael','Torres','2018-02-15',2,0),(2,'Alcantara','Danica','2018-02-15',3,0);
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

-- Dump completed on 2018-02-18 21:32:18

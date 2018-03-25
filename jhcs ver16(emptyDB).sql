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
  `message` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`activitylogs_id`),
  UNIQUE KEY `idactivitylogs_UNIQUE` (`activitylogs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activitylogs`
--

LOCK TABLES `activitylogs` WRITE;
/*!40000 ALTER TABLE `activitylogs` DISABLE KEYS */;
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
  `coff_returnDate` date NOT NULL,
  `coff_returnQty` int(11) NOT NULL,
  `coff_remarks` varchar(50) NOT NULL,
  `coff_returnAction` varchar(50) NOT NULL,
  `resolved` enum('Yes','No') NOT NULL DEFAULT 'No',
  `client_deliveryID` int(11) DEFAULT NULL,
  PRIMARY KEY (`client_coffReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_coffreturn`
--

LOCK TABLES `client_coffreturn` WRITE;
/*!40000 ALTER TABLE `client_coffreturn` DISABLE KEYS */;
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
  `contractPO_id` int(11) NOT NULL,
  `client_dr` varchar(50) NOT NULL,
  `client_invoice` varchar(50) NOT NULL,
  `client_deliverDate` date NOT NULL,
  `client_balance` int(11) NOT NULL,
  `client_receive` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `payment_remarks` varchar(25) NOT NULL DEFAULT 'unpaid',
  `return` varchar(10) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`client_deliveryID`),
  UNIQUE KEY `client_dr` (`client_dr`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_delivery`
--

LOCK TABLES `client_delivery` WRITE;
/*!40000 ALTER TABLE `client_delivery` DISABLE KEYS */;
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
  PRIMARY KEY (`blend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
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
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`coService_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coffeeservice`
--

LOCK TABLES `coffeeservice` WRITE;
/*!40000 ALTER TABLE `coffeeservice` DISABLE KEYS */;
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
  `contract_blend` varchar(50) NOT NULL,
  `contract_bag` varchar(50) NOT NULL,
  `contract_size` int(50) NOT NULL,
  `contract_machine` varchar(50) NOT NULL,
  `client_id` int(50) NOT NULL,
  PRIMARY KEY (`contract_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contract`
--

LOCK TABLES `contract` WRITE;
/*!40000 ALTER TABLE `contract` DISABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracted_client`
--

LOCK TABLES `contracted_client` WRITE;
/*!40000 ALTER TABLE `contracted_client` DISABLE KEYS */;
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
  `delivery_stat` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`contractPO_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracted_po`
--

LOCK TABLES `contracted_po` WRITE;
/*!40000 ALTER TABLE `contracted_po` DISABLE KEYS */;
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
  `po_client` int(11) DEFAULT NULL,
  `po_supplier` int(11) DEFAULT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'IN',
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_transact`
--

LOCK TABLES `inv_transact` WRITE;
/*!40000 ALTER TABLE `inv_transact` DISABLE KEYS */;
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
  `mach_serial` varchar(50) NOT NULL,
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
  PRIMARY KEY (`mach_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
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
  `mach_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`mach_salesID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine_out`
--

LOCK TABLES `machine_out` WRITE;
/*!40000 ALTER TABLE `machine_out` DISABLE KEYS */;
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
  `package_name` varchar(45) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
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
  `client_dr` varchar(50) NOT NULL,
  `collection_no` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `withheld` int(11) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  PRIMARY KEY (`paid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
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
  PRIMARY KEY (`raw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raw_coffee`
--

LOCK TABLES `raw_coffee` WRITE;
/*!40000 ALTER TABLE `raw_coffee` DISABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sample`
--

LOCK TABLES `sample` WRITE;
/*!40000 ALTER TABLE `sample` DISABLE KEYS */;
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
  PRIMARY KEY (`sticker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sticker`
--

LOCK TABLES `sticker` WRITE;
/*!40000 ALTER TABLE `sticker` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_delivery`
--

LOCK TABLES `supp_delivery` WRITE;
/*!40000 ALTER TABLE `supp_delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `supp_delivery` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_po`
--

LOCK TABLES `supp_po` WRITE;
/*!40000 ALTER TABLE `supp_po` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supp_po_ordered`
--

LOCK TABLES `supp_po_ordered` WRITE;
/*!40000 ALTER TABLE `supp_po_ordered` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_mach`
--

LOCK TABLES `trans_mach` WRITE;
/*!40000 ALTER TABLE `trans_mach` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_pack`
--

LOCK TABLES `trans_pack` WRITE;
/*!40000 ALTER TABLE `trans_pack` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_raw`
--

LOCK TABLES `trans_raw` WRITE;
/*!40000 ALTER TABLE `trans_raw` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_stick`
--

LOCK TABLES `trans_stick` WRITE;
/*!40000 ALTER TABLE `trans_stick` DISABLE KEYS */;
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
INSERT INTO `user` VALUES (5,'jin','Dullao','Jeanne','jeanne@gmail.com','09067275881','#90 Central Ambiong ','j',1,'admin');
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
  `blend_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`walkin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walkin_sales`
--

LOCK TABLES `walkin_sales` WRITE;
/*!40000 ALTER TABLE `walkin_sales` DISABLE KEYS */;
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

-- Dump completed on 2018-03-25 10:42:13

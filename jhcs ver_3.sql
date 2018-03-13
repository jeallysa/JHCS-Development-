-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2018 at 12:27 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jhcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylogs`
--

DROP TABLE IF EXISTS `activitylogs`;
CREATE TABLE IF NOT EXISTS `activitylogs` (
  `activitylogs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_no` varchar(45) NOT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`activitylogs_id`),
  UNIQUE KEY `idactivitylogs_UNIQUE` (`activitylogs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylogs`
--

INSERT INTO `activitylogs` (`activitylogs_id`, `user_no`, `timestamp`, `message`, `type`) VALUES
(1, '1', '2018-02-17 15:37:58', 'Add samples', 'inventory'),
(2, '3', '2018-02-19 11:47:15', 'Add returns', 'inventory'),
(3, '4', '2018-02-20 13:19:27', 'Edit blah blah', 'inventory');

-- --------------------------------------------------------

--
-- Table structure for table `client_coffreturn`
--

DROP TABLE IF EXISTS `client_coffreturn`;
CREATE TABLE IF NOT EXISTS `client_coffreturn` (
  `client_coffReturnID` int(11) NOT NULL AUTO_INCREMENT,
  `client_dr` varchar(20) NOT NULL,
  `coff_returnDate` date NOT NULL,
  `coff_returnQty` int(11) NOT NULL,
  `coff_remarks` varchar(50) NOT NULL,
  `coff_returnAction` varchar(50) NOT NULL,
  `returned` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`client_coffReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_coffreturn`
--

INSERT INTO `client_coffreturn` (`client_coffReturnID`, `client_dr`, `coff_returnDate`, `coff_returnQty`, `coff_remarks`, `coff_returnAction`, `returned`) VALUES
(1, 'dr123', '2018-02-28', 100, 'damaged', 'sample', 'Yes'),
(2, 'dr124', '2018-02-19', 100, 'spoiled', 'redeliver', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `client_delivery`
--

DROP TABLE IF EXISTS `client_delivery`;
CREATE TABLE IF NOT EXISTS `client_delivery` (
  `client_deliveryID` int(11) NOT NULL AUTO_INCREMENT,
  `contractPO_id` int(11) NOT NULL,
  `client_dr` varchar(50) NOT NULL,
  `client_invoice` varchar(50) NOT NULL,
  `client_deliverDate` date NOT NULL,
  `client_balance` int(11) NOT NULL,
  `client_receive` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `return` enum('No','Yes') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`client_deliveryID`),
  UNIQUE KEY `client_dr` (`client_dr`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_delivery`
--

INSERT INTO `client_delivery` (`client_deliveryID`, `contractPO_id`, `client_dr`, `client_invoice`, `client_deliverDate`, `client_balance`, `client_receive`, `client_id`, `return`) VALUES
(1, 1, 'dr123', '233', '2018-02-13', 10000, 'Mark De Vera', 1, 'No'),
(2, 2, 'dr124', '234', '2018-02-12', 13000, 'Leah Ramos', 2, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `client_machreturn`
--

DROP TABLE IF EXISTS `client_machreturn`;
CREATE TABLE IF NOT EXISTS `client_machreturn` (
  `client_machReturnID` int(11) NOT NULL AUTO_INCREMENT,
  `mach_returnDate` date NOT NULL,
  `mach_returnQty` int(11) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_remarks` varchar(50) NOT NULL,
  `mach_returnAction` varchar(50) NOT NULL,
  PRIMARY KEY (`client_machReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_machreturn`
--

INSERT INTO `client_machreturn` (`client_machReturnID`, `mach_returnDate`, `mach_returnQty`, `client_id`, `mach_id`, `mach_remarks`, `mach_returnAction`) VALUES
(1, '2018-02-13', 1, '1', 1, 'damaged', 'return to supplier'),
(2, '2018-02-07', 1, '2', 1, 'damaged', 'repair');

-- --------------------------------------------------------

--
-- Table structure for table `coffeeservice`
--

DROP TABLE IF EXISTS `coffeeservice`;
CREATE TABLE IF NOT EXISTS `coffeeservice` (
  `coService_id` int(11) NOT NULL AUTO_INCREMENT,
  `coService_date` date NOT NULL,
  `coService_credit` varchar(50) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `coService_qty` int(11) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_qty` int(11) NOT NULL,
  PRIMARY KEY (`coService_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffeeservice`
--

INSERT INTO `coffeeservice` (`coService_id`, `coService_date`, `coService_credit`, `blend_id`, `coService_qty`, `mach_id`, `mach_qty`) VALUES
(1, '2018-02-01', '30 day', 1, 300, 1, 1),
(2, '2018-02-21', '15 day', 2, 300, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coffee_blend`
--

DROP TABLE IF EXISTS `coffee_blend`;
CREATE TABLE IF NOT EXISTS `coffee_blend` (
  `blend_id` int(11) NOT NULL AUTO_INCREMENT,
  `blend` varchar(20) NOT NULL,
  `package_id` varchar(45) NOT NULL,
  `blend_price` int(11) NOT NULL,
  `blend_activation` int(11) NOT NULL DEFAULT '1',
  `blend_type` varchar(45) NOT NULL,
  PRIMARY KEY (`blend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffee_blend`
--

INSERT INTO `coffee_blend` (`blend_id`, `blend`, `package_id`, `blend_price`, `blend_activation`, `blend_type`) VALUES
(1, 'Guatemala Rainforest', '4', 1025, 1, 'Existing'),
(2, 'Guatemala Rainforest', '5', 615, 1, 'Existing'),
(3, 'Guatemala Rainforest', '6', 365, 1, 'Existing'),
(4, 'Cordillera Sunrise', '4', 950, 1, 'Existing'),
(5, 'Cordillera Sunrise', '5', 575, 1, 'Existing'),
(6, 'Cordillera Sunrise', '6', 350, 1, 'Existing'),
(7, 'Sumatra Night', '4', 850, 1, 'Existing'),
(8, 'Sumatra Night', '5', 530, 1, 'Existing'),
(9, 'Sumatra Night', '6', 325, 1, 'Existing'),
(10, 'Chef\'s Blend', '4', 800, 1, 'Existing'),
(11, 'Chef\'s Blend', '5', 465, 1, 'Existing'),
(12, 'Chef\'s Blend', '6', 265, 1, 'Existing'),
(13, 'Espresso Blend', '4', 750, 1, 'Existing'),
(14, 'Espresso Blend', '5', 415, 1, 'Existing'),
(15, 'Espresso Blend', '6', 230, 1, 'Existing'),
(16, 'Breakfast Blend', '1', 675, 1, 'Existing'),
(17, 'Breakfast Blend', '2', 375, 1, 'Existing'),
(18, 'Breakfast Blend', '3', 200, 1, 'Existing'),
(19, 'Mabuhay Blend', '1', 600, 1, 'Existing'),
(20, 'Mabuhay Blend', '2', 350, 1, 'Existing'),
(21, 'Mabuhay Blend', '3', 180, 1, 'Existing'),
(22, 'Fiesta Blend', '1', 500, 1, 'Existing'),
(23, 'Fiesta Blend', '2', 315, 1, 'Existing'),
(24, 'Fiesta Blend', '3', 165, 1, 'Existing'),
(25, 'Kalayaan Blend', '1', 400, 1, 'Existing'),
(26, 'Kalayaan Blend', '2', 275, 1, 'Existing'),
(27, 'Kalayaan Blend', '3', 150, 1, 'Existing');

-- --------------------------------------------------------

--
-- Table structure for table `company_returns`
--

DROP TABLE IF EXISTS `company_returns`;
CREATE TABLE IF NOT EXISTS `company_returns` (
  `company_returnID` int(11) NOT NULL AUTO_INCREMENT,
  `sup_returnDate` date NOT NULL,
  `sup_id` int(11) NOT NULL,
  `sup_returnQty` int(11) NOT NULL,
  `sup_returnItem` varchar(50) NOT NULL,
  `sup_returnRemarks` varchar(50) NOT NULL,
  `sup_returnAction` varchar(50) NOT NULL,
  PRIMARY KEY (`company_returnID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_returns`
--

INSERT INTO `company_returns` (`company_returnID`, `sup_returnDate`, `sup_id`, `sup_returnQty`, `sup_returnItem`, `sup_returnRemarks`, `sup_returnAction`) VALUES
(1, '2018-02-21', 1, 25, '1', 'Spoiled', ''),
(2, '2018-02-21', 1, 30, '1', 'Damage Package', ''),
(3, '2018-02-21', 2, 50, '2', 'Damage Package', ''),
(4, '2018-03-07', 2, 11111, '4', 'Incorrect Roast', '');

-- --------------------------------------------------------

--
-- Table structure for table `contracted_client`
--

DROP TABLE IF EXISTS `contracted_client`;
CREATE TABLE IF NOT EXISTS `contracted_client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_company` varchar(70) NOT NULL,
  `client_fname` varchar(50) NOT NULL,
  `client_lname` varchar(50) NOT NULL,
  `client_position` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client_contact` varchar(12) NOT NULL,
  `client_type` varchar(20) NOT NULL,
  `client_status` enum('enabled','disabled') NOT NULL DEFAULT 'disabled',
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracted_client`
--

INSERT INTO `contracted_client` (`client_id`, `client_company`, `client_fname`, `client_lname`, `client_position`, `client_email`, `client_address`, `client_contact`, `client_type`, `client_status`) VALUES
(1, 'Eurotel', 'Amagan', 'Jesselyn', 'General Manager', 'jesselyn22@gmail.com', '#118 Liwanag Loakan, Baguio City', '09176253445', 'Retail', 'enabled'),
(2, 'De Vera Inn', 'Calpito', 'Annyssa', 'Manager', 'maecalpito@gmail.com', '#52 Green Valley, Baguio City', '0962736554', 'Coffee Service', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `contracted_po`
--

DROP TABLE IF EXISTS `contracted_po`;
CREATE TABLE IF NOT EXISTS `contracted_po` (
  `contractPO_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `contractPO_date` date NOT NULL,
  `contractPO_qty` int(11) NOT NULL,
  `delivery_stat` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`contractPO_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracted_po`
--

INSERT INTO `contracted_po` (`contractPO_id`, `client_id`, `blend_id`, `contractPO_date`, `contractPO_qty`, `delivery_stat`) VALUES
(1, 1, 1, '2018-02-14', 300, 'delivered'),
(2, 2, 2, '2018-02-08', 300, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `inv_transact`
--

DROP TABLE IF EXISTS `inv_transact`;
CREATE TABLE IF NOT EXISTS `inv_transact` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `transact_date` date NOT NULL,
  `supplier_id` int(11) NOT NULL,
  PRIMARY KEY (`trans_id`),
  KEY `sup_inv_idx` (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_transact`
--

INSERT INTO `inv_transact` (`trans_id`, `transact_date`, `supplier_id`) VALUES
(1, '2017-01-10', 1),
(2, '2017-02-02', 2),
(3, '2017-06-07', 1),
(4, '2017-12-12', 2),
(5, '2018-01-18', 2),
(6, '2018-01-31', 1),
(7, '2018-02-06', 2),
(8, '2018-10-10', 1),
(9, '2019-01-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
CREATE TABLE IF NOT EXISTS `machine` (
  `mach_id` int(11) NOT NULL AUTO_INCREMENT,
  `mach_serial` varchar(50) NOT NULL,
  `brewer` varchar(50) NOT NULL,
  `brewer_type` varchar(50) NOT NULL,
  `mach_price` int(11) NOT NULL,
  `mach_reorder` int(11) NOT NULL,
  `mach_limit` int(11) NOT NULL,
  `mach_stocks` int(11) NOT NULL,
  `sup_id` varchar(11) NOT NULL,
  `mach_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`mach_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`mach_id`, `mach_serial`, `brewer`, `brewer_type`, `mach_price`, `mach_reorder`, `mach_limit`, `mach_stocks`, `sup_id`, `mach_activation`) VALUES
(1, '5454564584', 'Saeco', 'Double Cup Espresso', 10000, 5, 10, 7, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `machine_out`
--

DROP TABLE IF EXISTS `machine_out`;
CREATE TABLE IF NOT EXISTS `machine_out` (
  `mach_salesID` int(11) NOT NULL AUTO_INCREMENT,
  `mach_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`mach_salesID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine_out`
--

INSERT INTO `machine_out` (`mach_salesID`, `mach_id`, `date`, `mach_qty`, `client_id`) VALUES
(1, 1, '2018-02-24', 1, 1),
(2, 1, '2018-02-12', 1, 2),
(3, 1, '2018-03-16', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `packaging`
--

DROP TABLE IF EXISTS `packaging`;
CREATE TABLE IF NOT EXISTS `packaging` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_type` varchar(20) NOT NULL,
  `package_size` varchar(20) NOT NULL,
  `package_reorder` int(11) NOT NULL,
  `package_limit` int(11) NOT NULL,
  `package_stock` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `pack_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packaging`
--

INSERT INTO `packaging` (`package_id`, `package_type`, `package_size`, `package_reorder`, `package_limit`, `package_stock`, `sup_id`, `pack_activation`) VALUES
(1, 'clear', '1000', 50, 200, 60, 1, 1),
(2, 'clear', '500', 50, 200, 70, 2, 1),
(3, 'clear', '250', 50, 200, 90, 1, 1),
(4, 'brown', '1000', 50, 200, 102, 2, 1),
(5, 'brown', '500', 50, 200, 95, 1, 1),
(6, 'brown', '250', 50, 200, 145, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_contracted`
--

DROP TABLE IF EXISTS `payment_contracted`;
CREATE TABLE IF NOT EXISTS `payment_contracted` (
  `paid_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_dr` varchar(50) NOT NULL,
  `collection_no` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `withheld` int(11) NOT NULL,
  `payment_remarks` varchar(20) NOT NULL,
  PRIMARY KEY (`paid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_contracted`
--

INSERT INTO `payment_contracted` (`paid_id`, `client_dr`, `collection_no`, `payment_mode`, `paid_date`, `paid_amount`, `withheld`, `payment_remarks`) VALUES
(2, 'dr123', 'C111', 'bank', '2018-02-01', 10000, 0, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `payment_supplier`
--

DROP TABLE IF EXISTS `payment_supplier`;
CREATE TABLE IF NOT EXISTS `payment_supplier` (
  `supPayment_id` int(11) NOT NULL AUTO_INCREMENT,
  `supPO_id` int(11) NOT NULL,
  `supPayment_date` date NOT NULL,
  `supPayment_amount` int(11) NOT NULL,
  `sup_balance` int(11) NOT NULL,
  `supPayment_status` varchar(20) NOT NULL,
  PRIMARY KEY (`supPayment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proportions`
--

DROP TABLE IF EXISTS `proportions`;
CREATE TABLE IF NOT EXISTS `proportions` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `blend_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `raw_prop_idx` (`raw_id`),
  KEY `blend_prop_idx` (`blend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proportions`
--

INSERT INTO `proportions` (`proportion_id`, `blend_id`, `raw_id`, `percentage`) VALUES
(1, 1, 1, 10),
(2, 1, 4, 30),
(3, 1, 5, 60),
(4, 2, 1, 10),
(5, 2, 4, 30),
(6, 2, 5, 60),
(7, 3, 1, 10),
(8, 3, 4, 30),
(9, 3, 5, 60),
(10, 4, 2, 60),
(11, 4, 3, 40),
(12, 5, 2, 60),
(13, 5, 3, 40),
(14, 6, 2, 60),
(15, 6, 3, 40),
(16, 7, 2, 45),
(17, 7, 3, 35),
(18, 7, 6, 15),
(19, 8, 2, 45),
(20, 8, 3, 35),
(21, 8, 6, 15),
(22, 9, 2, 45),
(23, 9, 3, 35),
(24, 9, 6, 15),
(25, 10, 1, 20),
(26, 10, 2, 20),
(27, 10, 6, 60),
(28, 11, 1, 20),
(29, 11, 2, 20),
(30, 11, 6, 60),
(31, 12, 1, 20),
(32, 12, 2, 20),
(33, 12, 6, 60),
(34, 13, 4, 35),
(35, 13, 5, 65),
(36, 14, 4, 35),
(37, 14, 5, 65),
(38, 15, 4, 35),
(39, 15, 5, 65),
(40, 16, 2, 25),
(41, 16, 5, 75),
(42, 17, 2, 25),
(43, 17, 5, 75),
(44, 18, 2, 25),
(45, 18, 5, 75);

-- --------------------------------------------------------

--
-- Table structure for table `raw_coffee`
--

DROP TABLE IF EXISTS `raw_coffee`;
CREATE TABLE IF NOT EXISTS `raw_coffee` (
  `raw_id` int(11) NOT NULL AUTO_INCREMENT,
  `raw_coffee` varchar(20) NOT NULL,
  `raw_reorder` int(11) NOT NULL,
  `raw_limit` int(11) NOT NULL,
  `raw_stock` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `raw_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`raw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raw_coffee`
--

INSERT INTO `raw_coffee` (`raw_id`, `raw_coffee`, `raw_reorder`, `raw_limit`, `raw_stock`, `sup_id`, `raw_activation`) VALUES
(1, 'GUATEMALA', 5000, 10000, 80000, 1, 1),
(2, 'SUMATRA', 2000, 7000, 9000, 2, 1),
(3, 'ROBUSTA', 1000, 8500, 1000, 2, 1),
(4, 'BENGUET', 1500, 9000, 1800, 2, 1),
(5, 'COLOMBIA', 2000, 10000, 5000, 1, 1),
(6, 'BARAKO', 1500, 10500, 8000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `retail`
--

DROP TABLE IF EXISTS `retail`;
CREATE TABLE IF NOT EXISTS `retail` (
  `retail_id` int(11) NOT NULL AUTO_INCREMENT,
  `retail_date` date NOT NULL,
  `retail_credit` varchar(20) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `retail_qty` int(11) NOT NULL,
  PRIMARY KEY (`retail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retail`
--

INSERT INTO `retail` (`retail_id`, `retail_date`, `retail_credit`, `blend_id`, `retail_qty`) VALUES
(1, '2018-02-22', '30 day', 1, 300),
(2, '2018-02-09', '30 day', 2, 300);

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

DROP TABLE IF EXISTS `sample`;
CREATE TABLE IF NOT EXISTS `sample` (
  `sample_id` int(11) NOT NULL AUTO_INCREMENT,
  `sample_date` date DEFAULT NULL,
  `sample_recipient` varchar(50) NOT NULL,
  `sample_type` varchar(50) NOT NULL,
  `client_coffReturnID` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `sticker_id` int(11) NOT NULL,
  PRIMARY KEY (`sample_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`sample_id`, `sample_date`, `sample_recipient`, `sample_type`, `client_coffReturnID`, `package_id`, `sticker_id`) VALUES
(1, '2018-02-21', 'Walkin Client', 'freebies', 1, 4, 1),
(2, '2018-02-22', 'The Manor', 'free taste', 2, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sticker`
--

DROP TABLE IF EXISTS `sticker`;
CREATE TABLE IF NOT EXISTS `sticker` (
  `sticker_id` int(11) NOT NULL AUTO_INCREMENT,
  `sticker` varchar(50) NOT NULL,
  `sticker_reorder` int(11) NOT NULL,
  `sticker_limit` int(11) NOT NULL,
  `sticker_stock` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `sticker_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sticker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sticker`
--

INSERT INTO `sticker` (`sticker_id`, `sticker`, `sticker_reorder`, `sticker_limit`, `sticker_stock`, `sup_id`, `sticker_activation`) VALUES
(1, 'Marios', 500, 1000, 600, 1, 1),
(2, 'Manor', 500, 1000, 700, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_productID`, `sup_company`, `sup_lname`, `sup_fname`, `sup_position`, `sup_address`, `sup_email`, `sup_contact`) VALUES
(1, 0, 'Tinz Enterprise', 'Caguioa', 'Tinz', 'Manager', 'Session Road, Baguio City', 'tinz22@gmail.com', '09763545225'),
(2, 0, 'Lanz Trading Inc.', 'Dullao', 'Jeanne', 'CEO', '#98 Bonifacio Street, Baguio City', 'jin_97@yahoo.com', '09875437665');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_delivery`
--

DROP TABLE IF EXISTS `supplier_delivery`;
CREATE TABLE IF NOT EXISTS `supplier_delivery` (
  `sup_deliveryID` int(11) NOT NULL AUTO_INCREMENT,
  `supPO_id` int(11) NOT NULL,
  `supDelivery_stat` varchar(20) NOT NULL,
  `date_recieved` date NOT NULL,
  `yield_weight` int(11) NOT NULL,
  `yield` int(11) NOT NULL,
  `recieved_by` varchar(50) NOT NULL,
  PRIMARY KEY (`sup_deliveryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_po`
--

DROP TABLE IF EXISTS `supplier_po`;
CREATE TABLE IF NOT EXISTS `supplier_po` (
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

--
-- Dumping data for table `supplier_po`
--

INSERT INTO `supplier_po` (`supPO_id`, `sup_id`, `supPO_date`, `supPO_qty`, `truck_fee`, `sup_credit`, `total_item`, `total_amount`, `sup_delivery`, `supPayment_stat`) VALUES
(1, 1, '2018-02-21', 10000, 50, '30 days', 1, 5050, 'pending', 'pending'),
(2, 2, '2018-02-21', 15000, 100, '15 days', 2, 8600, 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `test_category`
--

DROP TABLE IF EXISTS `test_category`;
CREATE TABLE IF NOT EXISTS `test_category` (
  `idtest_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `activation` int(11) DEFAULT '1',
  PRIMARY KEY (`idtest_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_category`
--

INSERT INTO `test_category` (`idtest_category`, `category`, `activation`) VALUES
(1, 'Blended Coffee', 1),
(2, 'Coffee Filter', 1),
(3, 'Coffee Machine', 1),
(4, 'Packaging', 1),
(5, 'Raw Coffee', 1),
(6, 'Sticker', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_items`
--

DROP TABLE IF EXISTS `test_items`;
CREATE TABLE IF NOT EXISTS `test_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `unitPrice` double NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL DEFAULT '1',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_items`
--

INSERT INTO `test_items` (`item_id`, `item_name`, `category`, `supplier_id`, `unitPrice`, `desc`, `status`) VALUES
(1, 'coffee 1', 'raw coffee', 1, 3.2, 'sss', '1'),
(2, 'coffee 2', 'raw coffee', 1, 4.5, 'asd', '1'),
(3, 'coffee 3', 'raw coffee', 1, 4, 'asd', '1'),
(4, 'coffee 4', 'raw coffee', 1, 5.4, 'asd', '1'),
(5, 'coffee 5', 'raw coffee', 2, 3.5, 'asd', '1'),
(6, 'sticker 1', 'sticker', 2, 2, 'aasdd', '1'),
(7, 'sticker 2', 'sticker', 1, 3, 'ddsa', '1');

-- --------------------------------------------------------

--
-- Table structure for table `test_multi_insert`
--

DROP TABLE IF EXISTS `test_multi_insert`;
CREATE TABLE IF NOT EXISTS `test_multi_insert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_id` int(11) DEFAULT NULL,
  `item` varchar(45) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unitPrice` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_multi_insert`
--

INSERT INTO `test_multi_insert` (`id`, `supp_po_id`, `item`, `qty`, `unitPrice`, `amount`) VALUES
(1, NULL, 'coffee 3', 213, 213, 23),
(2, NULL, 'coffee 3', 213, 412, 23),
(3, NULL, 'coffee 3', 24, 31, 213),
(4, NULL, 'coffee 3', 23, 213, 23),
(5, NULL, 'sticker 1', 23, 23, 3),
(6, NULL, '-- --', 0, 0, 0),
(7, NULL, 'coffee 2', 213, 23, 23),
(8, NULL, 'coffee 1', 0, 0, 0),
(9, NULL, 'coffee 1', 0, 0, 0),
(10, NULL, 'coffee 1', 0, 0, 0),
(11, NULL, 'sticker 1', 23, 213, 23),
(12, NULL, 'sticker 1', 0, 0, 0),
(13, NULL, '-- --', 0, 0, 0),
(14, NULL, 'sticker 1', 0, 0, 0),
(15, NULL, '-- --', 0, 0, 0),
(16, NULL, '-- --', 0, 0, 0),
(17, NULL, '-- --', 0, 0, 0),
(18, NULL, '-- --', 0, 0, 0),
(19, NULL, '-- --', 0, 0, 0),
(20, NULL, '', NULL, NULL, NULL),
(21, NULL, '-- --', 0, 0, 0),
(22, NULL, '213', NULL, NULL, NULL),
(23, NULL, '-- --', 0, 0, 0),
(24, NULL, '-- --', 0, 0, 0),
(25, NULL, '-- --', 0, 0, 0),
(26, NULL, '-- --', 0, 0, 0),
(27, NULL, '-- --', 0, 0, 0),
(28, NULL, 'coffee 2', 23, 124, 124),
(29, NULL, 'coffee 3', 23, 24, 12),
(30, NULL, 'sticker 2', 214, 51, 123),
(31, NULL, '-- --', 0, 0, 0),
(32, NULL, '-- --', 0, 0, 0),
(33, NULL, '-- --', 0, 0, 0),
(34, NULL, '-- --', 0, 0, 0),
(35, NULL, '-- --', 0, 0, 0),
(36, NULL, 'coffee 1', 32, 23, 123),
(37, NULL, 'coffee 1', 1, 1, 1),
(38, 6, 'sticker 2', 2, 2, 2),
(39, 24, 'coffee 1', 23, 23, 23),
(40, 24, 'sticker 1', 1245, 112345, 124512);

-- --------------------------------------------------------

--
-- Table structure for table `test_supp_delivery`
--

DROP TABLE IF EXISTS `test_supp_delivery`;
CREATE TABLE IF NOT EXISTS `test_supp_delivery` (
  `idtest_supp_delivery` int(11) NOT NULL AUTO_INCREMENT,
  `delivery_batch_id` int(11) NOT NULL,
  `test_supp_po_ordered_id` int(11) NOT NULL,
  `supp_po_id` int(11) NOT NULL,
  `date_received` date NOT NULL,
  `yield_weight` double NOT NULL,
  `yields` double NOT NULL,
  `receieved_by` varchar(45) NOT NULL,
  PRIMARY KEY (`idtest_supp_delivery`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_supp_delivery`
--

INSERT INTO `test_supp_delivery` (`idtest_supp_delivery`, `delivery_batch_id`, `test_supp_po_ordered_id`, `supp_po_id`, `date_received`, `yield_weight`, `yields`, `receieved_by`) VALUES
(1, 1, 1, 1, '2018-02-02', 1500, 1000, 'Ms. A'),
(2, 1, 2, 1, '2018-02-02', 1500, 1000, 'Ms. A'),
(3, 1, 3, 1, '2018-02-02', 2000, 1500, 'Ms. A'),
(4, 1, 4, 1, '2018-02-02', 2500, 2000, 'Ms. A'),
(5, 2, 5, 2, '2018-03-01', 2500, 1000, 'Ms. B'),
(6, 2, 6, 2, '2018-03-01', 2000, 1000, 'Ms. B'),
(7, 3, 9, 4, '2018-03-19', 1500, 100, 'Ms. A');

-- --------------------------------------------------------

--
-- Table structure for table `test_supp_po`
--

DROP TABLE IF EXISTS `test_supp_po`;
CREATE TABLE IF NOT EXISTS `test_supp_po` (
  `supp_po_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_id` int(11) NOT NULL,
  `suppPO_date` date NOT NULL,
  `trucking_fee` double NOT NULL,
  `supp_creditTerm` varchar(45) NOT NULL,
  `total_item` int(11) NOT NULL DEFAULT '0',
  `total_amount` double NOT NULL DEFAULT '0',
  `delivery_stat` varchar(45) DEFAULT '0',
  `payment_stat` varchar(45) DEFAULT '0',
  PRIMARY KEY (`supp_po_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_supp_po`
--

INSERT INTO `test_supp_po` (`supp_po_id`, `supp_id`, `suppPO_date`, `trucking_fee`, `supp_creditTerm`, `total_item`, `total_amount`, `delivery_stat`, `payment_stat`) VALUES
(1, 1, '2018-01-16', 300, '30 days', 7500, 5000, '1', '1'),
(2, 1, '2018-01-16', 3300, '30 days', 4500, 10000, '1', '1'),
(3, 2, '2018-01-16', 2000, '30 days', 3000, 5000, '0', '0'),
(4, 2, '2018-02-16', 1000, '30 days', 1500, 2000, '1', '0'),
(5, 1, '2018-02-17', 1000, '30 days', 1500, 2500, '0', '0'),
(6, 1, '2018-02-18', 500, '30 days', 2500, 2500, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test_supp_po_ordered`
--

DROP TABLE IF EXISTS `test_supp_po_ordered`;
CREATE TABLE IF NOT EXISTS `test_supp_po_ordered` (
  `test_supp_po_ordered_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_id` int(11) NOT NULL,
  `item` varchar(45) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'Type',
  `delivery_stat` varchar(45) DEFAULT '0',
  `payment_stat` varchar(45) DEFAULT '0',
  PRIMARY KEY (`test_supp_po_ordered_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_supp_po_ordered`
--

INSERT INTO `test_supp_po_ordered` (`test_supp_po_ordered_id`, `supp_po_id`, `item`, `qty`, `amount`, `type`, `delivery_stat`, `payment_stat`) VALUES
(1, 1, 'coffee 1', 1500, 1000, 'medium roast', '1', '1'),
(2, 1, 'coffee 1', 1500, 1000, 'city roast', '1', '1'),
(3, 1, 'coffee 2', 1000, 1000, 'medium roast', '1', '1'),
(4, 1, 'coffee 2', 2500, 2000, 'medium roast', '1', '1'),
(5, 2, 'coffee 1', 2500, 5000, 'city roast', '1', '1'),
(6, 2, 'coffee 1', 2000, 5000, 'city roast', '1', '1'),
(7, 3, 'coffee 2', 1500, 3000, 'medium roast', '0', '0'),
(8, 3, 'coffee 2', 1500, 2000, 'medium roast', '0', '0'),
(9, 4, 'coffee 1', 2000, 2000, 'city roast', '1', '0'),
(10, 5, 'coffee 1', 700, 1000, 'medium roast', '0', '0'),
(11, 5, 'coffee 2', 800, 1500, 'city roast', '0', '0'),
(12, 6, 'coffee 2', 1000, 2000, 'medium roast', '1', '0'),
(13, 6, 'coffee 2', 1500, 500, 'city', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test_supp_temp_po`
--

DROP TABLE IF EXISTS `test_supp_temp_po`;
CREATE TABLE IF NOT EXISTS `test_supp_temp_po` (
  `id_supp_temp_PO` int(11) NOT NULL AUTO_INCREMENT,
  `supp_name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `trucking_fee` decimal(10,0) NOT NULL,
  `credit_term` varchar(45) NOT NULL,
  PRIMARY KEY (`id_supp_temp_PO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_transac_history`
--

DROP TABLE IF EXISTS `test_transac_history`;
CREATE TABLE IF NOT EXISTS `test_transac_history` (
  `transac_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_id` varchar(45) NOT NULL,
  `date_received` date NOT NULL,
  `date_payment` date NOT NULL,
  PRIMARY KEY (`transac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_transac_history`
--

INSERT INTO `test_transac_history` (`transac_id`, `supp_po_id`, `date_received`, `date_payment`) VALUES
(1, '1', '2018-02-02', '2018-02-28'),
(2, '2', '2018-03-01', '2018-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pack`
--

DROP TABLE IF EXISTS `trans_pack`;
CREATE TABLE IF NOT EXISTS `trans_pack` (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tp_id`),
  KEY `t_pack_idx` (`package_id`),
  KEY `t_pack_transact_idx` (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pack`
--

INSERT INTO `trans_pack` (`tp_id`, `trans_id`, `package_id`, `quantity`) VALUES
(1, 1, 2, 200),
(2, 1, 3, 300),
(3, 1, 4, 600),
(4, 1, 6, 100),
(5, 2, 1, 450),
(6, 2, 3, 800),
(7, 3, 2, 650),
(8, 4, 2, 700),
(9, 5, 3, 200),
(10, 5, 4, 350),
(11, 6, 1, 400),
(12, 6, 5, 500),
(13, 6, 6, 500),
(14, 7, 1, 100),
(15, 8, 1, NULL),
(16, 9, 6, 200);

-- --------------------------------------------------------

--
-- Table structure for table `trans_raw`
--

DROP TABLE IF EXISTS `trans_raw`;
CREATE TABLE IF NOT EXISTS `trans_raw` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `raw_coffeeid` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tr_id`),
  KEY `transact_idx` (`trans_id`),
  KEY `raw_idx` (`raw_coffeeid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_raw`
--

INSERT INTO `trans_raw` (`tr_id`, `trans_id`, `raw_coffeeid`, `quantity`) VALUES
(1, 1, 1, 2000),
(2, 1, 2, 4300),
(3, 1, 5, 4500),
(4, 2, 4, 10000),
(5, 2, 6, 12000),
(7, 3, 1, 8000),
(8, 3, 3, 5000),
(9, 3, 4, 15000),
(10, 4, 2, 1200),
(11, 4, 4, 14000),
(12, 4, 6, 12000),
(14, 5, 4, 8500),
(15, 6, 6, 8100),
(18, 7, 1, 5000),
(19, 8, 1, 5000),
(20, 8, 5, 1000),
(21, 9, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
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

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_no`, `username`, `u_lname`, `u_fname`, `u_email`, `u_contact`, `u_address`, `password`, `u_activation`, `u_type`) VALUES
(1, 'tin', 'Caguioa', 'Tin', '2155651@slu.edu.ph', '09269044317', 'Baguio City', 't', 1, 'sales'),
(2, 'lila', 'Fernandez', 'Mariella', 'lila22@gmail.com', '09176524553', '#09 Hillside, Baguio City', 'l', 1, 'admin'),
(3, 'jom', 'Julhusin', 'Jomari', 'jom22@gmail.com', '09786525443', '#127 Aurora Hill, Baguio City', 'j', 1, 'inventory'),
(5, 'jin', 'Dullao', 'Jeanne', 'jeanne@gmail.com', '09067275881', '#90 Central Ambiong ', 'j', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `walkin_sales`
--

DROP TABLE IF EXISTS `walkin_sales`;
CREATE TABLE IF NOT EXISTS `walkin_sales` (
  `walkin_id` int(11) NOT NULL AUTO_INCREMENT,
  `walkin_fname` varchar(50) NOT NULL,
  `walkin_lname` varchar(50) NOT NULL,
  `walkin_date` date NOT NULL,
  `walkin_qty` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  PRIMARY KEY (`walkin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walkin_sales`
--

INSERT INTO `walkin_sales` (`walkin_id`, `walkin_fname`, `walkin_lname`, `walkin_date`, `walkin_qty`, `blend_id`) VALUES
(1, 'Michael', 'Torres', '2018-02-15', 2, 2),
(2, 'Alcantara', 'Danica', '2018-02-15', 3, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inv_transact`
--
ALTER TABLE `inv_transact`
  ADD CONSTRAINT `sup_inv` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`sup_id`) ON UPDATE CASCADE;

--
-- Constraints for table `proportions`
--
ALTER TABLE `proportions`
  ADD CONSTRAINT `blend_prop` FOREIGN KEY (`blend_id`) REFERENCES `coffee_blend` (`blend_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `raw_prop` FOREIGN KEY (`raw_id`) REFERENCES `raw_coffee` (`raw_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trans_pack`
--
ALTER TABLE `trans_pack`
  ADD CONSTRAINT `t_pack` FOREIGN KEY (`package_id`) REFERENCES `packaging` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pack_transact` FOREIGN KEY (`trans_id`) REFERENCES `inv_transact` (`trans_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trans_raw`
--
ALTER TABLE `trans_raw`
  ADD CONSTRAINT `t_raw` FOREIGN KEY (`raw_coffeeid`) REFERENCES `raw_coffee` (`raw_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_transact` FOREIGN KEY (`trans_id`) REFERENCES `inv_transact` (`trans_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

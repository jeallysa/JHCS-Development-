-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2018 at 04:02 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylogs`
--

INSERT INTO `activitylogs` (`activitylogs_id`, `user_no`, `timestamp`, `message`, `type`) VALUES
(1, '1', '2018-02-17 15:37:58', 'Add samples', 'inventory'),
(2, '3', '2018-02-19 11:47:15', 'Add returns', 'inventory'),
(3, '4', '2018-02-20 13:19:27', 'Edit blah blah', 'inventory'),
(4, '5', '2018-03-27 07:43:03', 'Inserted: \'Jeanne, Jeanne Machine\'', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `activation` int(11) DEFAULT '1',
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `category`, `activation`) VALUES
(1, 'Blended Coffee', 1),
(2, 'Coffee Filter', 1),
(3, 'Coffee Machine', 1),
(4, 'Packaging', 1),
(5, 'Raw Coffee', 1),
(6, 'Sticker', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_coffreturn`
--

DROP TABLE IF EXISTS `client_coffreturn`;
CREATE TABLE IF NOT EXISTS `client_coffreturn` (
  `client_coffReturnID` int(11) NOT NULL AUTO_INCREMENT,
  `client_dr` varchar(20) NOT NULL,
  `client_deliveryID` int(11) NOT NULL,
  `coff_returnDate` date NOT NULL,
  `coff_returnQty` int(11) NOT NULL,
  `coff_remarks` varchar(50) NOT NULL,
  `coff_returnAction` varchar(50) NOT NULL,
  `resolved` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`client_coffReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_coffreturn`
--

INSERT INTO `client_coffreturn` (`client_coffReturnID`, `client_dr`, `client_deliveryID`, `coff_returnDate`, `coff_returnQty`, `coff_remarks`, `coff_returnAction`, `resolved`) VALUES
(21, 'dr222', 116, '2018-03-30', 25, 'spoiled', 'Sample', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `client_delivery`
--

DROP TABLE IF EXISTS `client_delivery`;
CREATE TABLE IF NOT EXISTS `client_delivery` (
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
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_delivery`
--

INSERT INTO `client_delivery` (`client_deliveryID`, `client_dr`, `contractPO_id`, `client_invoice`, `client_deliverDate`, `client_balance`, `client_receive`, `deliver_quantity`, `client_id`, `amount_paid`, `payment_remarks`, `return`) VALUES
(115, 'dr111', 47, 'si111', '2018-03-29', 80000, 'Johny Bravo', 65, 3, 80000, 'paid', 'Received'),
(116, 'dr222', 48, 'si222', '2018-03-29', 118750, 'Ryan Bing', 125, 2, 118750, 'paid', 'Returned'),
(117, 'dr333', 50, 'si333', '2018-03-22', 34500, 'Jan Albie', 150, 4, 0, 'unpaid', 'Received'),
(118, 'dr222', 48, 'si222', '2018-03-30', 0, 'Lila Dimalanta', 0, 2, 0, 'unpaid', 'Received'),
(119, 'dr222', 51, 'i333', '2018-03-29', 4000, 'a', 5, 3, 0, 'unpaid', 'Received'),
(121, 'dr223', 52, 'i3331', '2018-03-29', 3200, 'a', 4, 3, 0, 'unpaid', 'Received'),
(122, 'dr223', 52, 'i3331', '2018-03-29', 3200, 'a', 4, 3, 0, 'unpaid', 'Received'),
(123, 'dr223', 52, 'i3331', '2018-03-29', 3200, 'a', 4, 3, 0, 'unpaid', 'Received'),
(124, 'dr223', 52, 'i3331', '2018-03-29', 3200, 'a', 4, 3, 0, 'unpaid', 'Received'),
(125, 'dr223', 52, 'i3331', '2018-03-29', 3200, 'a', 4, 3, 0, 'unpaid', 'Received'),
(126, 'dr222', 53, 'rp121', '2018-03-21', 1600, 'a', 2, 3, 0, 'unpaid', 'Received'),
(127, 'dr222', 53, 'rp121', '2018-03-21', 1600, 'a', 2, 3, 0, 'unpaid', 'Received'),
(128, 'dr222', 55, '1', '2018-03-31', 8000, 'ae', 10, 3, 0, 'unpaid', 'Received'),
(129, 'dr334', 54, 'si888', '2018-04-01', 800, 'aeneida', 1, 3, 0, 'unpaid', 'Received'),
(130, 'dr335', 56, 'si221', '2018-04-03', 8050, 'jeanne', 35, 4, 0, 'unpaid', 'Received');

--
-- Triggers `client_delivery`
--
DROP TRIGGER IF EXISTS `update_pay_stat`;
DELIMITER $$
CREATE TRIGGER `update_pay_stat` BEFORE UPDATE ON `client_delivery` FOR EACH ROW IF NEW.client_balance = NEW.amount_paid THEN
	SET NEW.payment_remarks = 'paid';
END IF
$$
DELIMITER ;

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
  `mach_serial` varchar(60) NOT NULL,
  `mach_remarks` varchar(50) NOT NULL,
  `mach_returnAction` varchar(50) NOT NULL,
  `resolved` varchar(11) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'No',
  PRIMARY KEY (`client_machReturnID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_machreturn`
--

INSERT INTO `client_machreturn` (`client_machReturnID`, `mach_returnDate`, `mach_returnQty`, `client_id`, `mach_id`, `mach_serial`, `mach_remarks`, `mach_returnAction`, `resolved`) VALUES
(14, '2018-03-30', 1, '', 1, 's444', 'for repair', '', 'No');

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
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`coService_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffeeservice`
--

INSERT INTO `coffeeservice` (`coService_id`, `coService_date`, `coService_credit`, `blend_id`, `coService_qty`, `mach_id`, `mach_qty`, `client_id`) VALUES
(1, '2018-02-01', '30 day', 1, 300, 1, 1, 1),
(2, '2018-02-21', '15 day', 2, 300, 2, 1, 2);

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
  `blend_qty` int(11) NOT NULL,
  `blend_physcount` int(11) NOT NULL DEFAULT '0',
  `blend_remarks` varchar(45) DEFAULT 'null',
  `blend_discrepancy` int(11) NOT NULL DEFAULT '0',
  `blend_activation` int(11) NOT NULL DEFAULT '1',
  `blend_type` varchar(45) NOT NULL,
  `sticker_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`blend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffee_blend`
--

INSERT INTO `coffee_blend` (`blend_id`, `blend`, `package_id`, `blend_price`, `blend_qty`, `blend_physcount`, `blend_remarks`, `blend_discrepancy`, `blend_activation`, `blend_type`, `sticker_id`) VALUES
(1, 'Guatemala Rainforest', '4', 1025, 10, 0, NULL, 0, 1, 'Existing', 1),
(2, 'Guatemala Rainforest', '5', 615, 7, 0, NULL, 0, 1, 'Existing', 1),
(3, 'Guatemala Rainforest', '6', 365, 4, 0, NULL, 0, 1, 'Existing', 1),
(4, 'Cordillera Sunrise', '4', 950, 8, 0, NULL, 0, 1, 'Existing', 1),
(5, 'Cordillera Sunrise', '5', 575, 6, 0, NULL, 0, 1, 'Existing', 1),
(6, 'Cordillera Sunrise', '6', 350, 5, 0, NULL, 0, 1, 'Existing', 1),
(7, 'Sumatra Night', '4', 850, 7, 0, NULL, 0, 1, 'Existing', 1),
(8, 'Sumatra Night', '5', 530, 10, 0, NULL, 0, 1, 'Existing', 1),
(9, 'Sumatra Night', '6', 325, 11, 0, NULL, 0, 1, 'Existing', 1),
(10, 'Chef\'s Blend', '4', 800, 5, 0, NULL, 0, 1, 'Existing', 1),
(11, 'Chef\'s Blend', '5', 465, 9, 0, NULL, 0, 1, 'Existing', 1),
(12, 'Chef\'s Blend', '6', 265, 16, 0, NULL, 0, 1, 'Existing', 1),
(13, 'Espresso Blend', '4', 750, 2, 0, NULL, 0, 1, 'Existing', 1),
(14, 'Espresso Blend', '5', 415, 3, 0, NULL, 0, 1, 'Existing', 1),
(15, 'Espresso Blend', '6', 230, 5, 0, NULL, 0, 1, 'Existing', 1),
(16, 'Breakfast Blend', '1', 675, 7, 0, NULL, 0, 1, 'Existing', 1),
(17, 'Breakfast Blend', '2', 375, 9, 0, NULL, 0, 1, 'Existing', 1),
(18, 'Breakfast Blend', '3', 200, 5, 0, NULL, 0, 1, 'Existing', 1),
(19, 'Mabuhay Blend', '1', 600, 4, 0, NULL, 0, 1, 'Existing', 1),
(20, 'Mabuhay Blend', '2', 350, 6, 0, NULL, 0, 1, 'Existing', 1),
(21, 'Mabuhay Blend', '3', 180, 3, 0, NULL, 0, 1, 'Existing', 1),
(22, 'Fiesta Blend', '1', 500, 8, 0, NULL, 0, 1, 'Existing', 1),
(23, 'Fiesta Blend', '2', 315, 9, 0, NULL, 0, 1, 'Existing', 1),
(24, 'Fiesta Blend', '3', 165, 7, 0, NULL, 0, 1, 'Existing', 1),
(25, 'Kalayaan Blend', '1', 400, 5, 0, NULL, 0, 1, 'Existing', 1),
(26, 'Kalayaan Blend', '2', 275, 1, 0, NULL, 0, 1, 'Existing', 1),
(27, 'Kalayaan Blend', '3', 150, 2, 0, NULL, 0, 1, 'Existing', 1),
(28, 'Pizza Volante Blend', '2', 500, 20, 0, NULL, 0, 1, 'Client', 1),
(29, 'The Manor Blend', '3', 300, 12, 0, NULL, 0, 1, 'Client', 1);

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
-- Table structure for table `contract`
--

DROP TABLE IF EXISTS `contract`;
CREATE TABLE IF NOT EXISTS `contract` (
  `contract_id` int(50) NOT NULL AUTO_INCREMENT,
  `date_started` date NOT NULL,
  `blend_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `client_id` int(50) NOT NULL,
  `required_qty` int(11) NOT NULL,
  `credit_term` varchar(20) NOT NULL,
  `mach_id` int(50) NOT NULL,
  `mach_salesID` int(50) NOT NULL,
  PRIMARY KEY (`contract_id`),
  KEY `client_id` (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`contract_id`, `date_started`, `blend_id`, `package_id`, `client_id`, `required_qty`, `credit_term`, `mach_id`, `mach_salesID`) VALUES
(3, '2017-10-15', 2, 3, 1, 75, '30 days', 1, 1),
(4, '2017-04-11', 4, 6, 2, 125, '15 days', 1, 1),
(5, '2016-09-22', 10, 2, 3, 100, '30 days', 1, 1),
(6, '2015-03-15', 15, 4, 4, 150, '15 days', 1, 1);

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
  `client_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracted_client`
--

INSERT INTO `contracted_client` (`client_id`, `client_company`, `client_fname`, `client_lname`, `client_position`, `client_email`, `client_address`, `client_contact`, `client_type`, `client_activation`) VALUES
(1, 'Eurotel', 'Amagan', 'Jesselyn', 'General Manager', 'jesselyn22@gmail.com', '#118 Liwanag Loakan, Baguio City', '09176253445', 'Coffee Service', 1),
(2, 'De Vera Inn', 'Calpito', 'Annyssa', 'Manager', 'maecalpito@gmail.com', '#52 Green Valley, Baguio City', '0962736554', 'Coffee Service', 1),
(3, 'Bloomfield Hotel', 'Andrew', 'Garcia', 'manager', 'bloom@gmail.com', 'Mabini Street, Baguio City', '09678543778', 'Retail', 1),
(4, 'TrueBlends', 'Ally', 'Benjamin', 'CEO', 'trueb@yahoo.com', 'Bonifacio Rd, Baguio City', '09568798767', 'Retail', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contracted_po`
--

DROP TABLE IF EXISTS `contracted_po`;
CREATE TABLE IF NOT EXISTS `contracted_po` (
  `contractPO_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  `contractPO_date` date NOT NULL,
  `contractPO_qty` int(11) NOT NULL,
  `delivered_qty` int(11) NOT NULL DEFAULT '0',
  `delivery_stat` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`contractPO_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracted_po`
--

INSERT INTO `contracted_po` (`contractPO_id`, `client_id`, `blend_id`, `sticker_id`, `contractPO_date`, `contractPO_qty`, `delivered_qty`, `delivery_stat`) VALUES
(47, 3, 10, NULL, '2018-03-30', 100, 65, 'partial delivery'),
(48, 2, 4, NULL, '2018-03-30', 125, 125, 'delivered'),
(49, 1, 2, NULL, '2018-03-30', 75, 0, 'pending'),
(50, 4, 15, NULL, '2018-03-30', 150, 150, 'delivered'),
(51, 3, 10, NULL, '2018-03-30', 5, 5, 'delivered'),
(52, 3, 10, NULL, '2018-03-30', 4, 20, 'delivered'),
(53, 3, 10, NULL, '2018-03-30', 2, 4, 'delivered'),
(54, 3, 10, NULL, '2018-03-30', 1, 1, 'delivered'),
(55, 3, 10, NULL, '2018-03-30', 10, 10, 'delivered'),
(56, 4, 15, NULL, '2018-03-30', 35, 35, 'delivered');

--
-- Triggers `contracted_po`
--
DROP TRIGGER IF EXISTS `update_del_stat`;
DELIMITER $$
CREATE TRIGGER `update_del_stat` BEFORE UPDATE ON `contracted_po` FOR EACH ROW IF NEW.contractPO_qty = NEW.delivered_qty THEN
	SET NEW.delivery_stat = 'delivered';
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `inv_transact`
--

DROP TABLE IF EXISTS `inv_transact`;
CREATE TABLE IF NOT EXISTS `inv_transact` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `transact_date` date NOT NULL,
  `sales_inv` int(50) DEFAULT NULL,
  `dr_client` varchar(15) DEFAULT NULL,
  `dr_supplier` int(11) DEFAULT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'IN',
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_transact`
--

INSERT INTO `inv_transact` (`trans_id`, `transact_date`, `sales_inv`, `dr_client`, `dr_supplier`, `type`) VALUES
(1, '2017-01-10', NULL, NULL, 11, 'IN'),
(2, '2017-02-02', NULL, NULL, 12, 'IN'),
(3, '2017-06-07', NULL, NULL, 13, 'IN'),
(4, '2017-12-12', NULL, NULL, 14, 'IN'),
(5, '2018-01-18', NULL, 'dr111', NULL, 'OUT'),
(6, '2018-01-31', NULL, 'dr222', NULL, 'OUT'),
(7, '2018-02-06', NULL, 'dr333', NULL, 'OUT'),
(8, '2018-10-10', NULL, 'dr444', NULL, 'OUT'),
(9, '2018-03-22', NULL, 'dr555', NULL, 'OUT'),
(13, '2018-03-29', 46, NULL, NULL, 'OUT'),
(14, '2018-03-20', 47, NULL, NULL, 'OUT'),
(15, '2018-01-23', 50, NULL, NULL, 'OUT'),
(16, '2018-03-31', NULL, 'dr222', NULL, 'OUT'),
(17, '2018-04-01', NULL, 'dr334', NULL, 'OUT'),
(18, '2018-04-03', NULL, 'dr335', NULL, 'OUT');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
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
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `category`, `supplier_id`, `unitPrice`, `desc`, `status`) VALUES
(1, 'coffee 1', 'raw coffee', 1, 3.2, 'sss', '1'),
(2, 'coffee 2', 'raw coffee', 1, 4.5, 'asd', '1'),
(3, 'coffee 3', 'raw coffee', 1, 4, 'asd', '1'),
(4, 'coffee 4', 'raw coffee', 1, 5.4, 'asd', '1'),
(5, 'coffee 5', 'raw coffee', 2, 3.5, 'asd', '1'),
(6, 'sticker 1', 'sticker', 2, 2, 'aasdd', '1'),
(7, 'sticker 2', 'sticker', 1, 3, 'ddsa', '1');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
CREATE TABLE IF NOT EXISTS `machine` (
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
  PRIMARY KEY (`mach_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`mach_id`, `brewer`, `brewer_type`, `mach_price`, `mach_reorder`, `mach_limit`, `mach_stocks`, `mach_physcount`, `mach_remarks`, `mach_discrepancy`, `unitPrice`, `sup_id`, `mach_activation`) VALUES
(1, 'Saeco', 'Double Cup Espresso', 10000, 5, 10, 100, 0, NULL, 0, '10000', '1', 1),
(2, 'Jeanne', 'Jeanne Machine', 200, 5, 20, 10, 0, NULL, 0, NULL, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `machine_out`
--

DROP TABLE IF EXISTS `machine_out`;
CREATE TABLE IF NOT EXISTS `machine_out` (
  `mach_salesID` int(11) NOT NULL AUTO_INCREMENT,
  `mach_id` int(11) NOT NULL,
  `mach_serial` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `remarks` varchar(60) NOT NULL DEFAULT 'Received',
  `status` varchar(60) NOT NULL,
  PRIMARY KEY (`mach_salesID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine_out`
--

INSERT INTO `machine_out` (`mach_salesID`, `mach_id`, `mach_serial`, `date`, `mach_qty`, `client_id`, `remarks`, `status`) VALUES
(1, 1, 's111', '2018-03-07', 2, 1, 'Received', 'sold'),
(2, 1, 's222', '2018-03-26', 1, 1, 'Received', 'sold'),
(3, 1, 's333', '2018-03-26', 1, 4, 'Received', 'sold'),
(4, 1, 's444', '2017-10-15', 1, 1, 'Returned', 'rented'),
(5, 1, 's555', '2017-04-11', 1, 2, 'Received', 'rented'),
(6, 1, 'ss1', '2018-03-07', 1, 3, 'Received', 'sold');

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
  `package_physcount` int(11) NOT NULL DEFAULT '0',
  `package_remarks` varchar(45) DEFAULT NULL,
  `package_discrepancy` int(11) NOT NULL DEFAULT '0',
  `unitPrice` decimal(11,0) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `pack_activation` int(11) NOT NULL DEFAULT '1',
  `package_name` varchar(45) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packaging`
--

INSERT INTO `packaging` (`package_id`, `package_type`, `package_size`, `package_reorder`, `package_limit`, `package_stock`, `package_physcount`, `package_remarks`, `package_discrepancy`, `unitPrice`, `sup_id`, `pack_activation`, `package_name`) VALUES
(1, 'clear', '1000', 50, 200, 60, 0, NULL, 0, '12', 1, 1, 'clear bag 1000'),
(2, 'clear', '500', 50, 200, 70, 0, NULL, 0, '23', 2, 1, 'clear bag 500'),
(3, 'clear', '250', 50, 200, 90, 0, NULL, 0, '12', 1, 1, 'clear bag 250'),
(4, 'brown', '1000', 50, 200, 54, 0, NULL, 0, '32', 2, 1, 'brown bag 1000'),
(5, 'brown', '500', 50, 200, 92, 0, NULL, 0, '12', 1, 1, 'brown bag 500'),
(6, 'brown', '250', 50, 200, 102, 0, NULL, 0, '12', 2, 1, 'brown bag 250');

-- --------------------------------------------------------

--
-- Table structure for table `payment_contracted`
--

DROP TABLE IF EXISTS `payment_contracted`;
CREATE TABLE IF NOT EXISTS `payment_contracted` (
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

--
-- Dumping data for table `payment_contracted`
--

INSERT INTO `payment_contracted` (`paid_id`, `client_deliveryID`, `collection_no`, `payment_mode`, `paid_date`, `paid_amount`, `withheld`, `remarks`) VALUES
(26, 115, 'cr111', 'Bank deposit', '2018-03-29', 75000, 5000, 'withheld'),
(27, 116, 'cr222', 'Cash on Delivery', '2018-03-29', 110000, 0, ''),
(28, 116, 'cr223', 'Cash on Delivery', '2018-03-29', 8750, 0, '');

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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

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
(45, 18, 5, 75),
(46, 28, 2, 60),
(47, 28, 4, 40),
(48, 29, 1, 30),
(49, 29, 3, 70);

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
  `unitPrice` decimal(11,0) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `raw_physcount` int(11) NOT NULL DEFAULT '0',
  `raw_remarks` varchar(45) DEFAULT 'null',
  `raw_discrepancy` int(11) NOT NULL DEFAULT '0',
  `raw_activation` int(11) NOT NULL DEFAULT '1',
  `raw_type` varchar(50) NOT NULL,
  PRIMARY KEY (`raw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raw_coffee`
--

INSERT INTO `raw_coffee` (`raw_id`, `raw_coffee`, `raw_reorder`, `raw_limit`, `raw_stock`, `unitPrice`, `sup_id`, `raw_physcount`, `raw_remarks`, `raw_discrepancy`, `raw_activation`, `raw_type`) VALUES
(1, 'GUATEMALA', 5000, 10000, 71200, '80', 1, 0, NULL, 0, 1, 'city'),
(2, 'SUMATRA', 3200, 7001, 4800, '70', 2, 0, NULL, 0, 1, 'medium'),
(3, 'ROBUSTA', 1000, 8500, 500, '60', 2, 0, NULL, 0, 1, 'light'),
(4, 'BENGUET', 1500, 9000, -3163, '80', 1, 0, NULL, 0, 1, 'light'),
(5, 'COLOMBIA', 2000, 10000, -5888, '90', 1, 0, NULL, 0, 1, 'city'),
(6, 'BARAKO', 2500, 10500, -1600, '76', 1, 0, NULL, 0, 1, 'city');

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
  `sticker_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`retail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retail`
--

INSERT INTO `retail` (`retail_id`, `retail_date`, `retail_credit`, `blend_id`, `retail_qty`, `sticker_id`, `client_id`) VALUES
(1, '2018-02-22', '30 day', 1, 300, 1, 1),
(2, '2018-02-09', '30 day', 2, 300, 2, 2);

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
  `client_coffReturnID` int(11) DEFAULT NULL,
  `package_id` int(11) NOT NULL,
  `sticker_id` int(11) NOT NULL,
  PRIMARY KEY (`sample_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`sample_id`, `sample_date`, `sample_recipient`, `sample_type`, `client_coffReturnID`, `package_id`, `sticker_id`) VALUES
(1, '2018-02-21', 'Walkin Client', 'freebies', 9, 4, 1),
(2, '2018-02-22', 'The Manor', 'free taste', 10, 5, 2),
(3, '2018-03-21', 'sfdasd', 'sadad', NULL, 3, 1),
(4, '2018-03-25', 'Session Road Pedestrians', 'Free Taste', NULL, 3, 1);

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
  `sticker_physcount` int(11) NOT NULL DEFAULT '0',
  `sticker_remarks` varchar(45) DEFAULT NULL,
  `sticker_discrepancy` int(11) NOT NULL DEFAULT '0',
  `unitPrice` decimal(11,0) DEFAULT NULL,
  `sup_id` int(11) NOT NULL,
  `sticker_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sticker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sticker`
--

INSERT INTO `sticker` (`sticker_id`, `sticker`, `sticker_reorder`, `sticker_limit`, `sticker_stock`, `sticker_physcount`, `sticker_remarks`, `sticker_discrepancy`, `unitPrice`, `sup_id`, `sticker_activation`) VALUES
(1, 'Marios', 500, 1000, 554, 0, NULL, 0, '5', 1, 1),
(2, 'Manor', 500, 1000, 700, 0, NULL, 0, '6', 2, 0);

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
  `sup_activation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_productID`, `sup_company`, `sup_lname`, `sup_fname`, `sup_position`, `sup_address`, `sup_email`, `sup_contact`, `sup_activation`) VALUES
(1, 0, 'Tinz Enterprise', 'Caguioa', 'Tinz', 'Manager', 'Session Road, Baguio City', 'tinz22@gmail.com', '09763545225', 1),
(2, 0, 'Lanz Trading Inc.', 'Dullao', 'Jeanne', 'CEO', '#98 Bonifacio Street, Baguio City', 'jin_97@yahoo.com', '09875437665', 1);

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
-- Table structure for table `supp_delivery`
--

DROP TABLE IF EXISTS `supp_delivery`;
CREATE TABLE IF NOT EXISTS `supp_delivery` (
  `supp_delivery_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_ordered_id` int(11) NOT NULL,
  `supp_po_id` int(11) NOT NULL,
  `date_received` date NOT NULL,
  `yield_weight` double NOT NULL,
  `yields` double NOT NULL,
  `received_by` varchar(45) NOT NULL,
  PRIMARY KEY (`supp_delivery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_delivery`
--

INSERT INTO `supp_delivery` (`supp_delivery_id`, `supp_po_ordered_id`, `supp_po_id`, `date_received`, `yield_weight`, `yields`, `received_by`) VALUES
(11, 22, 12, '2018-03-21', 5, 0, 'Jomari Julhusin'),
(12, 23, 13, '2018-03-21', 100, 0, 'Tin Caguioa'),
(13, 24, 14, '2018-03-21', 56, 0, 'Tin Caguioa'),
(14, 25, 15, '2018-03-21', 6399, 0, 'Tin Caguioa'),
(15, 26, 16, '2018-03-25', 100, 0, 'Tin Caguioa'),
(16, 27, 17, '2018-03-28', 1500, 500, 'Tin Caguioa'),
(17, 28, 17, '2018-03-27', 4500, 0, 'Mariella Fernandez'),
(18, 29, 18, '2018-03-27', 11100, 0, 'Jeanne Dullao'),
(19, 30, 19, '2018-03-27', 300, 0, 'Tin Caguioa'),
(20, 31, 20, '2018-03-27', 6000, 0, 'Tin Caguioa'),
(21, 32, 21, '2018-03-27', 1000, 0, 'Tin Caguioa'),
(22, 33, 22, '2018-03-27', 200, 0, 'Tin Caguioa'),
(23, 34, 22, '0000-00-00', 500, 0, ''),
(24, 35, 23, '2018-03-27', 200, 0, 'Tin Caguioa'),
(25, 36, 24, '2018-03-27', 200, 0, 'Tin Caguioa');

-- --------------------------------------------------------

--
-- Table structure for table `supp_payment`
--

DROP TABLE IF EXISTS `supp_payment`;
CREATE TABLE IF NOT EXISTS `supp_payment` (
  `supp_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `bank` varchar(20) NOT NULL,
  PRIMARY KEY (`supp_payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_payment`
--

INSERT INTO `supp_payment` (`supp_payment_id`, `supp_po_id`, `date`, `amount`, `bank`) VALUES
(1, 17, '2018-03-27', 560100, 'BPI');

-- --------------------------------------------------------

--
-- Table structure for table `supp_po`
--

DROP TABLE IF EXISTS `supp_po`;
CREATE TABLE IF NOT EXISTS `supp_po` (
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_po`
--

INSERT INTO `supp_po` (`supp_po_id`, `supp_id`, `suppPO_date`, `trucking_fee`, `supp_creditTerm`, `total_item`, `total_amount`, `delivery_stat`, `payment_stat`, `payment`) VALUES
(12, 1, '2018-03-20', 69, '21', 0, 5000, '1', '0', '5000'),
(13, 1, '2018-03-21', 4343, '30', 0, 2000, '1', '0', '2000'),
(14, 1, '2018-03-21', 55, '12', 0, 3000, '1', '0', '3000'),
(15, 1, '2018-03-21', 12, '30', 0, 0, '1', '0', NULL),
(16, 1, '2018-03-24', 15, '15', 0, 0, '1', '0', NULL),
(17, 1, '2018-03-27', 100, '30', 7000, 560100, '1', '1', '560100'),
(18, 1, '2018-03-27', 100, '30', 11100, 888100, '1', '0', NULL),
(19, 1, '2018-03-27', 100, '30', 300, 24100, '1', '0', NULL),
(20, 1, '2018-03-27', 30, '30', 6000, 540030, '1', '0', NULL),
(21, 1, '2018-03-27', 3021, '30', 1000, 93021, '1', '0', NULL),
(22, 1, '2018-03-26', 150, '30', 700, 61150, '1', '0', NULL),
(23, 1, '2018-03-27', 100, '30', 200, 16100, '1', '0', NULL),
(24, 1, '2018-03-27', 100, '30', 200, 16100, '1', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supp_po_ordered`
--

DROP TABLE IF EXISTS `supp_po_ordered`;
CREATE TABLE IF NOT EXISTS `supp_po_ordered` (
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_po_ordered`
--

INSERT INTO `supp_po_ordered` (`supp_po_ordered_id`, `supp_po_id`, `item`, `qty`, `amount`, `type`, `delivery_stat`, `payment_stat`, `payment`) VALUES
(22, 12, 'Double Cup Espresso', 5, 0, 'machine', '1', '0', NULL),
(23, 13, 'clear bag 1000', 100, 0, 'package', '1', '0', NULL),
(24, 14, 'Marios', 56, 0, 'sticker', '1', '0', NULL),
(25, 15, 'COLOMBIA', 6399, 0, 'coffee', '1', '0', NULL),
(26, 16, 'GUATEMALA', 100, 0, 'coffee', '1', '0', NULL),
(27, 17, 'COLOMBIA', 2000, 180000, '', '1', '0', NULL),
(28, 17, 'BARAKO', 5000, 380000, '', '1', '0', NULL),
(29, 18, 'BENGUET', 11100, 888000, '', '1', '0', NULL),
(30, 19, 'BENGUET', 300, 24000, '', '1', '0', NULL),
(31, 20, 'COLOMBIA', 6000, 540000, '', '1', '0', NULL),
(32, 21, 'COLOMBIA', 1000, 90000, '', '1', '0', NULL),
(33, 22, 'BENGUET', 200, 16000, '', '1', '0', NULL),
(34, 22, 'COLOMBIA', 500, 45000, '', '1', '0', NULL),
(35, 23, 'BENGUET', 200, 16000, '', '1', '0', NULL),
(36, 24, 'BENGUET', 200, 16000, '', '1', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supp_temp_po`
--

DROP TABLE IF EXISTS `supp_temp_po`;
CREATE TABLE IF NOT EXISTS `supp_temp_po` (
  `id_supp_temp_PO` int(11) NOT NULL,
  `supp_name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `trucking_fee` decimal(10,0) NOT NULL,
  `credit_term` varchar(45) NOT NULL,
  PRIMARY KEY (`id_supp_temp_PO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supp_temp_po_order`
--

DROP TABLE IF EXISTS `supp_temp_po_order`;
CREATE TABLE IF NOT EXISTS `supp_temp_po_order` (
  `idsupp_temp_po_order` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `unitPrice` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`idsupp_temp_po_order`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transac_history`
--

DROP TABLE IF EXISTS `transac_history`;
CREATE TABLE IF NOT EXISTS `transac_history` (
  `transac_id` int(11) NOT NULL AUTO_INCREMENT,
  `supp_po_id` varchar(45) NOT NULL,
  `date_received` date NOT NULL,
  `date_payment` date NOT NULL,
  PRIMARY KEY (`transac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transac_history`
--

INSERT INTO `transac_history` (`transac_id`, `supp_po_id`, `date_received`, `date_payment`) VALUES
(1, '1', '2018-02-02', '2018-02-28'),
(2, '2', '2018-03-01', '2018-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `trans_mach`
--

DROP TABLE IF EXISTS `trans_mach`;
CREATE TABLE IF NOT EXISTS `trans_mach` (
  `tmach_id` int(11) NOT NULL AUTO_INCREMENT,
  `mach_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tmach_id`),
  KEY `mach_trans_idx` (`mach_id`),
  KEY `mach_to_mtm_idx` (`mach_id`),
  KEY `mach_trans_idx1` (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_mach`
--

INSERT INTO `trans_mach` (`tmach_id`, `mach_id`, `trans_id`, `quantity`) VALUES
(1, 1, 1, '2'),
(2, 1, 2, '5'),
(3, 1, 3, '3'),
(4, 1, 4, '4'),
(5, 1, 5, '2'),
(6, 1, 6, '5'),
(7, 1, 7, '3'),
(8, 1, 8, '1'),
(9, NULL, 9, NULL),
(13, NULL, 13, NULL),
(14, NULL, 14, NULL),
(15, NULL, 15, NULL),
(16, NULL, 16, NULL),
(17, NULL, 17, NULL),
(18, NULL, 18, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trans_pack`
--

DROP TABLE IF EXISTS `trans_pack`;
CREATE TABLE IF NOT EXISTS `trans_pack` (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tp_id`),
  KEY `t_pack_idx` (`package_id`),
  KEY `t_pack_transact_idx` (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

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
(15, 8, 1, 100),
(16, 9, 5, 3),
(17, 10, 4, 1),
(18, 11, 4, 21),
(19, 12, 4, 11),
(20, 13, 4, 2),
(21, 14, 4, 1),
(22, 15, 4, 1),
(23, 16, 4, 10),
(24, 17, 4, 1),
(25, 18, 6, 35);

-- --------------------------------------------------------

--
-- Table structure for table `trans_raw`
--

DROP TABLE IF EXISTS `trans_raw`;
CREATE TABLE IF NOT EXISTS `trans_raw` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `raw_coffeeid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tr_id`),
  KEY `transact_idx` (`trans_id`),
  KEY `raw_idx` (`raw_coffeeid`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

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
(21, 9, 1, 150),
(22, 9, 4, 450),
(23, 9, 5, 900),
(24, 10, 1, 200),
(25, 10, 2, 200),
(26, 10, 6, 600),
(27, 11, 1, 2100),
(28, 11, 4, 6300),
(29, 11, 5, 12600),
(30, 12, 1, 1100),
(31, 12, 4, 3300),
(32, 12, 5, 6600),
(33, 13, 1, 400),
(34, 13, 2, 400),
(35, 13, 6, 1200),
(36, 14, 1, 100),
(37, 14, 4, 300),
(38, 14, 5, 600),
(39, 15, 1, 100),
(40, 15, 4, 300),
(41, 15, 5, 600),
(42, 16, 1, 2000),
(43, 16, 2, 2000),
(44, 16, 6, 6000),
(45, 17, 1, 200),
(46, 17, 2, 200),
(47, 17, 6, 600),
(48, 18, 4, 3063),
(49, 18, 5, 5688);

-- --------------------------------------------------------

--
-- Table structure for table `trans_stick`
--

DROP TABLE IF EXISTS `trans_stick`;
CREATE TABLE IF NOT EXISTS `trans_stick` (
  `tstick_id` int(11) NOT NULL AUTO_INCREMENT,
  `sticker_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`tstick_id`),
  KEY `stick_trans_idx` (`sticker_id`),
  KEY `stick_trans2_idx` (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_stick`
--

INSERT INTO `trans_stick` (`tstick_id`, `sticker_id`, `trans_id`, `quantity`) VALUES
(1, 1, 1, 100),
(2, 2, 2, 50),
(3, 1, 3, 30),
(4, 1, 4, 110),
(5, 2, 5, 20),
(6, 1, 6, 150),
(7, 2, 7, 100),
(8, 2, 8, 200),
(9, NULL, 9, NULL),
(10, NULL, 10, NULL),
(11, NULL, 11, NULL),
(12, NULL, 12, NULL),
(13, NULL, 13, NULL),
(14, NULL, 14, NULL),
(15, NULL, 15, NULL),
(16, 1, 16, 10),
(17, 1, 17, 1),
(18, 1, 18, 35);

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
(1, 'tintin', 'Caguioa', 'Tin', '2155651@slu.edu.ph', '09269044317', 'Baguio City', 'asdasd', 1, 'sales'),
(2, 'lila', 'Fernandez', 'Mariella', 'lila22@gmail.com', '09176524553', '#09 Hillside, Baguio City', 'l', 1, 'admin'),
(3, 'jom', 'Julhusin', 'Jomari', 'jom22@gmail.com', '09786525443', '#127 Aurora Hill, Baguio City', 'j', 1, 'inventory'),
(5, 'jin', 'Dullao', 'Jeanne', 'jeanne@gmail.com', '09067275881', '#90 Central Ambiong ', 'j', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `walkin_raw`
--

DROP TABLE IF EXISTS `walkin_raw`;
CREATE TABLE IF NOT EXISTS `walkin_raw` (
  `wiraw_id` int(11) NOT NULL AUTO_INCREMENT,
  `walkin_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`wiraw_id`),
  KEY `raw_wiraw_idx` (`raw_id`),
  KEY `walk_wiraw_idx` (`walkin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walkin_raw`
--

INSERT INTO `walkin_raw` (`wiraw_id`, `walkin_id`, `raw_id`, `amount`) VALUES
(10, 46, 1, 1200),
(11, 46, 4, 3600),
(12, 46, 5, 7200),
(13, 47, 1, 400),
(14, 47, 2, 400),
(15, 47, 6, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `walkin_sales`
--

DROP TABLE IF EXISTS `walkin_sales`;
CREATE TABLE IF NOT EXISTS `walkin_sales` (
  `walkin_id` int(11) NOT NULL AUTO_INCREMENT,
  `walkin_date` date NOT NULL,
  `walkin_qty` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`walkin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walkin_sales`
--

INSERT INTO `walkin_sales` (`walkin_id`, `walkin_date`, `walkin_qty`, `blend_id`, `sticker_id`) VALUES
(1, '2018-02-15', 2, 2, 1),
(2, '2018-02-15', 3, 3, 2),
(46, '2018-03-21', 12, 1, NULL),
(47, '2018-03-21', 2, 10, NULL),
(50, '2018-03-22', 2, 3, NULL),
(51, '2018-03-22', 2, 3, NULL),
(52, '2018-03-22', 2, 3, NULL),
(53, '2018-03-22', 3, 2, NULL),
(54, '2018-03-26', 1, 10, NULL),
(55, '2018-03-26', 21, 1, NULL),
(56, '2018-03-26', 11, 1, NULL),
(57, '2018-03-29', 1, 24, NULL),
(58, '2018-03-29', 2, 10, NULL),
(59, '2018-03-20', 1, 1, NULL),
(60, '2018-01-23', 1, 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proportions`
--
ALTER TABLE `proportions`
  ADD CONSTRAINT `blend_prop` FOREIGN KEY (`blend_id`) REFERENCES `coffee_blend` (`blend_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `raw_prop` FOREIGN KEY (`raw_id`) REFERENCES `raw_coffee` (`raw_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trans_mach`
--
ALTER TABLE `trans_mach`
  ADD CONSTRAINT `mach_trans` FOREIGN KEY (`trans_id`) REFERENCES `inv_transact` (`trans_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mach_trans2` FOREIGN KEY (`mach_id`) REFERENCES `machine` (`mach_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

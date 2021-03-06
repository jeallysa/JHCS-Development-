-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 12:04 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `activitylogs` (
  `activitylogs_id` int(11) NOT NULL,
  `user_no` varchar(45) NOT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `activation` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `category`, `activation`) VALUES
(1, 'Blended Coffee', 1),
(3, 'Coffee Machine', 1),
(4, 'Packaging', 1),
(5, 'Raw Coffee', 1),
(6, 'Sticker', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_coffreturn`
--

CREATE TABLE `client_coffreturn` (
  `client_coffReturnID` int(11) NOT NULL,
  `client_dr` varchar(20) NOT NULL,
  `client_deliveryID` int(11) NOT NULL,
  `coff_returnDate` date NOT NULL,
  `coff_returnQty` int(11) NOT NULL,
  `coff_remarks` varchar(50) NOT NULL,
  `coff_returnAction` varchar(50) NOT NULL,
  `resolved` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_delivery`
--

CREATE TABLE `client_delivery` (
  `client_deliveryID` int(11) NOT NULL,
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
  `return` varchar(10) NOT NULL DEFAULT 'Received'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_delivery`
--

INSERT INTO `client_delivery` (`client_deliveryID`, `client_dr`, `contractPO_id`, `client_invoice`, `client_deliverDate`, `client_balance`, `client_receive`, `deliver_quantity`, `client_id`, `amount_paid`, `payment_remarks`, `return`) VALUES
(126, 'dr111', 58, 'si222', '2018-04-01', 80000, 'Johny Bravo', 50, 3, 80000, 'paid', 'Received');

--
-- Triggers `client_delivery`
--
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

CREATE TABLE `client_machreturn` (
  `client_machReturnID` int(11) NOT NULL,
  `mach_returnDate` date NOT NULL,
  `mach_returnQty` int(11) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_serial` varchar(60) NOT NULL,
  `mach_remarks` varchar(50) NOT NULL,
  `mach_returnAction` varchar(50) NOT NULL,
  `resolved` varchar(11) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_machreturn`
--

INSERT INTO `client_machreturn` (`client_machReturnID`, `mach_returnDate`, `mach_returnQty`, `client_id`, `mach_id`, `mach_serial`, `mach_remarks`, `mach_returnAction`, `resolved`) VALUES
(33, '2018-04-04', 0, '2                   ', 1, 's555', 'Maintenance', '', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `coffee_blend`
--

CREATE TABLE `coffee_blend` (
  `blend_id` int(11) NOT NULL,
  `blend` varchar(20) NOT NULL,
  `package_id` varchar(45) NOT NULL,
  `blend_price` int(11) NOT NULL,
  `blend_qty` int(11) NOT NULL,
  `blend_physcount` int(11) NOT NULL DEFAULT '0',
  `blend_remarks` varchar(45) DEFAULT 'null',
  `blend_discrepancy` int(11) NOT NULL DEFAULT '0',
  `blend_activation` int(11) NOT NULL DEFAULT '1',
  `blend_type` varchar(45) NOT NULL,
  `sticker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffee_blend`
--

INSERT INTO `coffee_blend` (`blend_id`, `blend`, `package_id`, `blend_price`, `blend_qty`, `blend_physcount`, `blend_remarks`, `blend_discrepancy`, `blend_activation`, `blend_type`, `sticker_id`) VALUES
(1, 'Guatemala Rainforest', '4', 1025, 15, 0, NULL, 0, 1, 'Existing', 1),
(2, 'Guatemala Rainforest', '5', 615, 15, 0, NULL, 0, 1, 'Existing', 1),
(3, 'Guatemala Rainforest', '6', 365, 15, 0, NULL, 0, 1, 'Existing', 1),
(4, 'Cordillera Sunrise', '4', 950, 15, 0, NULL, 0, 1, 'Existing', 1),
(5, 'Cordillera Sunrise', '5', 575, 15, 0, NULL, 0, 1, 'Existing', 1),
(6, 'Cordillera Sunrise', '6', 350, 15, 0, NULL, 0, 1, 'Existing', 1),
(7, 'Sumatra Night', '4', 850, 15, 0, NULL, 0, 1, 'Existing', 1),
(8, 'Sumatra Night', '5', 530, 15, 0, NULL, 0, 1, 'Existing', 1),
(9, 'Sumatra Night', '6', 325, 15, 0, NULL, 0, 1, 'Existing', 1),
(10, 'Chef\'s Blend', '4', 800, 15, 0, NULL, 0, 1, 'Existing', 1),
(11, 'Chef\'s Blend', '5', 465, 15, 0, NULL, 0, 1, 'Existing', 1),
(12, 'Chef\'s Blend', '6', 265, 15, 0, NULL, 0, 1, 'Existing', 1),
(13, 'Espresso Blend', '4', 750, 15, 0, NULL, 0, 1, 'Existing', 1),
(14, 'Espresso Blend', '5', 415, 15, 0, NULL, 0, 1, 'Existing', 1),
(15, 'Espresso Blend', '6', 230, 15, 0, NULL, 0, 1, 'Existing', 1),
(16, 'Breakfast Blend', '1', 675, 15, 0, NULL, 0, 1, 'Existing', 1),
(17, 'Breakfast Blend', '2', 375, 15, 0, NULL, 0, 1, 'Existing', 1),
(18, 'Breakfast Blend', '3', 200, 15, 0, NULL, 0, 1, 'Existing', 1),
(19, 'Mabuhay Blend', '1', 600, 15, 0, NULL, 0, 1, 'Existing', 1),
(20, 'Mabuhay Blend', '2', 350, 15, 0, NULL, 0, 1, 'Existing', 1),
(21, 'Mabuhay Blend', '3', 180, 15, 0, NULL, 0, 1, 'Existing', 1),
(22, 'Fiesta Blend', '1', 500, 15, 0, NULL, 0, 1, 'Existing', 1),
(23, 'Fiesta Blend', '2', 315, 15, 0, NULL, 0, 1, 'Existing', 1),
(24, 'Fiesta Blend', '3', 165, 15, 0, NULL, 0, 1, 'Existing', 1),
(25, 'Kalayaan Blend', '1', 400, 15, 0, NULL, 0, 1, 'Existing', 1),
(26, 'Kalayaan Blend', '2', 275, 15, 0, NULL, 0, 1, 'Existing', 1),
(27, 'Kalayaan Blend', '3', 150, 15, 0, NULL, 0, 1, 'Existing', 1),
(28, 'Pizza Volante Blend', '2', 500, 15, 0, NULL, 0, 1, 'Client', 1),
(29, 'The Manor Blend', '3', 300, 15, 0, NULL, 0, 1, 'Client', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_returns`
--

CREATE TABLE `company_returns` (
  `company_returnID` int(11) NOT NULL,
  `sup_returnDate` date NOT NULL,
  `sup_id` int(11) NOT NULL,
  `sup_returnQty` int(11) NOT NULL,
  `sup_returnItem` varchar(50) NOT NULL,
  `sup_returnRemarks` varchar(50) NOT NULL,
  `sup_returnAction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_id` int(50) NOT NULL,
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
  `seen_admin` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`contract_id`, `date_started`, `blend_id`, `package_id`, `client_id`, `required_qty`, `credit_term`, `mach_id`, `mach_salesID`, `date_expiration`, `seen`, `seen_admin`) VALUES
(3, '2017-10-15', 2, 3, 1, 75, '30 days', 1, 1, '2018-03-30', '0', '0'),
(4, '2017-04-11', 4, 6, 2, 125, '15 days', 1, 1, '2018-03-31', '0', '0'),
(5, '2016-09-22', 10, 2, 3, 100, '30 days', 1, 1, '2018-03-31', '0', '0'),
(6, '2015-03-15', 15, 4, 4, 150, '15 days', 1, 1, '2018-03-31', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contracted_client`
--

CREATE TABLE `contracted_client` (
  `client_id` int(11) NOT NULL,
  `client_company` varchar(70) NOT NULL,
  `client_fname` varchar(50) NOT NULL,
  `client_lname` varchar(50) NOT NULL,
  `client_position` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client_contact` varchar(12) NOT NULL,
  `client_type` varchar(20) NOT NULL,
  `client_activation` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `contracted_po` (
  `contractPO_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `contractPO_date` date NOT NULL,
  `contractPO_qty` int(11) NOT NULL,
  `delivered_qty` int(11) NOT NULL DEFAULT '0',
  `delivery_stat` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracted_po`
--

INSERT INTO `contracted_po` (`contractPO_id`, `client_id`, `blend_id`, `contractPO_date`, `contractPO_qty`, `delivered_qty`, `delivery_stat`) VALUES
(58, 3, 10, '2018-04-01', 100, 50, 'partial delivery');

--
-- Triggers `contracted_po`
--
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

CREATE TABLE `inv_transact` (
  `trans_id` int(11) NOT NULL,
  `transact_date` date NOT NULL,
  `company_returnID` int(11) DEFAULT NULL,
  `client_returnID` int(11) DEFAULT NULL,
  `po_supplier` int(11) DEFAULT NULL,
  `po_client` int(11) DEFAULT NULL,
  `sales_inv` int(11) DEFAULT NULL,
  `walkin_return` int(11) DEFAULT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'IN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_transact`
--

INSERT INTO `inv_transact` (`trans_id`, `transact_date`, `company_returnID`, `client_returnID`, `po_supplier`, `po_client`, `sales_inv`, `walkin_return`, `type`) VALUES
(1, '2018-03-05', NULL, NULL, 26, NULL, NULL, NULL, 'IN'),
(2, '2018-02-02', NULL, 32, NULL, NULL, NULL, NULL, 'IN'),
(3, '2018-03-07', NULL, 33, NULL, NULL, NULL, NULL, 'IN'),
(4, '2018-02-12', NULL, 34, NULL, NULL, NULL, NULL, 'IN'),
(5, '2018-01-18', NULL, NULL, NULL, 51, NULL, NULL, 'OUT'),
(6, '2018-01-31', NULL, NULL, NULL, 52, NULL, NULL, 'OUT'),
(7, '2018-02-06', NULL, NULL, NULL, 53, NULL, NULL, 'OUT'),
(8, '2018-03-10', NULL, NULL, NULL, 54, NULL, NULL, 'OUT'),
(13, '2018-03-29', NULL, NULL, NULL, NULL, 47, NULL, 'OUT'),
(14, '2018-03-20', NULL, NULL, NULL, NULL, 50, NULL, 'OUT'),
(15, '2018-01-23', NULL, NULL, NULL, NULL, 51, NULL, 'OUT'),
(16, '2018-03-12', 1, NULL, NULL, NULL, NULL, NULL, 'OUT'),
(17, '2018-03-15', 2, NULL, NULL, NULL, NULL, NULL, 'OUT'),
(18, '2018-02-24', 3, NULL, NULL, NULL, NULL, NULL, 'OUT'),
(19, '2018-02-27', 4, NULL, NULL, NULL, NULL, NULL, 'OUT'),
(20, '2018-02-27', NULL, NULL, NULL, NULL, NULL, 46, 'IN'),
(21, '2018-03-12', NULL, NULL, NULL, NULL, NULL, 55, 'IN'),
(22, '2018-04-01', NULL, NULL, NULL, NULL, NULL, NULL, 'OUT'),
(23, '2018-04-01', NULL, NULL, NULL, NULL, NULL, NULL, 'OUT');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `mach_id` int(11) NOT NULL,
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
  `category` varchar(45) DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`mach_id`, `brewer`, `brewer_type`, `mach_price`, `mach_reorder`, `mach_limit`, `mach_stocks`, `mach_physcount`, `mach_remarks`, `mach_discrepancy`, `unitPrice`, `sup_id`, `mach_activation`, `category`) VALUES
(1, 'Saeco', 'Double Cup Espresso', 10000, 5, 10, 141, 0, NULL, 0, '10000', '1', 1, '4'),
(2, 'Hanabishi', 'Single Cup Espresso', 200, 5, 20, 15, 0, NULL, 0, '10000', '1', 1, '4');

-- --------------------------------------------------------

--
-- Table structure for table `machine_out`
--

CREATE TABLE `machine_out` (
  `mach_salesID` int(11) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_serial` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `remarks` varchar(60) NOT NULL DEFAULT 'Received',
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine_out`
--

INSERT INTO `machine_out` (`mach_salesID`, `mach_id`, `mach_serial`, `date`, `mach_qty`, `client_id`, `remarks`, `status`) VALUES
(4, 1, 's444', '2017-10-15', 1, 1, 'Received', 'rented'),
(5, 1, 's555', '2017-04-11', 1, 2, 'Received', 'rented');

-- --------------------------------------------------------

--
-- Table structure for table `packaging`
--

CREATE TABLE `packaging` (
  `package_id` int(11) NOT NULL,
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
  `category` varchar(45) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packaging`
--

INSERT INTO `packaging` (`package_id`, `package_type`, `package_size`, `package_reorder`, `package_limit`, `package_stock`, `package_physcount`, `package_remarks`, `package_discrepancy`, `unitPrice`, `sup_id`, `pack_activation`, `category`) VALUES
(1, 'clear', '1000', 50, 200, 60, 0, NULL, 0, '12', 1, 1, '2'),
(2, 'clear', '500', 50, 200, 74, 0, NULL, 0, '23', 2, 1, '2'),
(3, 'clear', '250', 50, 200, 90, 0, NULL, 0, '12', 1, 1, '2'),
(4, 'brown', '1000', 50, 200, 38, 0, NULL, 0, '32', 2, 1, '2'),
(5, 'brown', '500', 50, 200, 92, 0, NULL, 0, '12', 1, 1, '2'),
(6, 'brown', '250', 50, 200, 137, 0, NULL, 0, '12', 2, 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `payment_contracted`
--

CREATE TABLE `payment_contracted` (
  `paid_id` int(11) NOT NULL,
  `client_deliveryID` int(11) NOT NULL,
  `collection_no` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `withheld` int(11) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_contracted`
--

INSERT INTO `payment_contracted` (`paid_id`, `client_deliveryID`, `collection_no`, `payment_mode`, `paid_date`, `paid_amount`, `withheld`, `remarks`) VALUES
(33, 126, 'cr111', 'Cash on Delivery', '2018-04-01', 40000, 0, ''),
(34, 126, 'cr222', 'Cash on Delivery', '2018-04-01', 40000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_supplier`
--

CREATE TABLE `payment_supplier` (
  `supPayment_id` int(11) NOT NULL,
  `supPO_id` int(11) NOT NULL,
  `supPayment_date` date NOT NULL,
  `supPayment_amount` int(11) NOT NULL,
  `sup_balance` int(11) NOT NULL,
  `supPayment_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proportions`
--

CREATE TABLE `proportions` (
  `proportion_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `raw_coffee` (
  `raw_id` int(11) NOT NULL,
  `raw_coffee` varchar(20) NOT NULL,
  `raw_reorder` int(11) NOT NULL,
  `raw_stock` int(11) NOT NULL,
  `unitPrice` decimal(11,0) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `raw_physcount` int(11) NOT NULL DEFAULT '0',
  `raw_remarks` varchar(45) DEFAULT 'null',
  `raw_discrepancy` int(11) NOT NULL DEFAULT '0',
  `raw_activation` int(11) NOT NULL DEFAULT '1',
  `raw_type` varchar(50) NOT NULL,
  `category` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raw_coffee`
--

INSERT INTO `raw_coffee` (`raw_id`, `raw_coffee`, `raw_reorder`, `raw_stock`, `unitPrice`, `sup_id`, `raw_physcount`, `raw_remarks`, `raw_discrepancy`, `raw_activation`, `raw_type`, `category`) VALUES
(1, 'GUATEMALA', 500000, 1000000, '80', 1, 0, NULL, 0, 1, 'city', '1'),
(2, 'SUMATRA', 500000, 1000000, '70', 2, 0, NULL, 0, 1, 'medium', '1'),
(3, 'ROBUSTA', 500000, 1000000, '60', 2, 0, NULL, 0, 1, 'light', '1'),
(4, 'BENGUET', 500000, 1000000, '80', 1, 0, NULL, 0, 1, 'light', '1'),
(5, 'COLOMBIA', 500000, 1000000, '90', 1, 0, NULL, 0, 1, 'city', '1'),
(6, 'BARAKO', 500000, 1000000, '76', 1, 0, NULL, 0, 1, 'city', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sticker`
--

CREATE TABLE `sticker` (
  `sticker_id` int(11) NOT NULL,
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
  `category` varchar(45) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sticker`
--

INSERT INTO `sticker` (`sticker_id`, `sticker`, `sticker_reorder`, `sticker_limit`, `sticker_stock`, `sticker_physcount`, `sticker_remarks`, `sticker_discrepancy`, `unitPrice`, `sup_id`, `sticker_activation`, `sticker_type`, `category`) VALUES
(1, 'Marios', 500, 1000, 273, 0, NULL, 0, '5', 1, 1, 'sticker', '3'),
(2, 'Manor', 500, 1000, 400, 0, NULL, 0, '6', 2, 0, 'sticker', '3');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(11) NOT NULL,
  `sup_productID` int(11) NOT NULL,
  `sup_company` varchar(70) NOT NULL,
  `sup_lname` varchar(50) NOT NULL,
  `sup_fname` varchar(50) NOT NULL,
  `sup_position` varchar(50) NOT NULL,
  `sup_address` varchar(100) NOT NULL,
  `sup_email` varchar(50) NOT NULL,
  `sup_contact` varchar(12) NOT NULL,
  `sup_activation` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_productID`, `sup_company`, `sup_lname`, `sup_fname`, `sup_position`, `sup_address`, `sup_email`, `sup_contact`, `sup_activation`) VALUES
(1, 0, 'Unique Circle Enterprise', 'Alcantara', 'Arjay', 'Manager', 'Session Road, Baguio City', 'rjz22@gmail.com', '09763545225', 1),
(2, 0, 'Coffee Resolutions Inc.', 'kahuna', 'Hanna', 'CEO', '#98 Bonifacio Street, Baguio City', 'jin_97@yahoo.com', '09875437665', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_delivery`
--

CREATE TABLE `supplier_delivery` (
  `sup_deliveryID` int(11) NOT NULL,
  `supPO_id` int(11) NOT NULL,
  `supDelivery_stat` varchar(20) NOT NULL,
  `date_recieved` date NOT NULL,
  `yield_weight` int(11) NOT NULL,
  `yield` int(11) NOT NULL,
  `recieved_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_po`
--

CREATE TABLE `supplier_po` (
  `supPO_id` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `supPO_date` date NOT NULL,
  `supPO_qty` int(11) NOT NULL,
  `truck_fee` int(11) NOT NULL,
  `sup_credit` text NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `sup_delivery` varchar(20) NOT NULL DEFAULT 'pending',
  `supPayment_stat` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `supp_delivery` (
  `supp_delivery_id` int(11) NOT NULL,
  `supp_po_ordered_id` int(11) NOT NULL,
  `supp_po_id` int(11) NOT NULL,
  `date_received` date NOT NULL,
  `yield_weight` double NOT NULL,
  `yields` double NOT NULL,
  `received_by` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_delivery`
--

INSERT INTO `supp_delivery` (`supp_delivery_id`, `supp_po_ordered_id`, `supp_po_id`, `date_received`, `yield_weight`, `yields`, `received_by`) VALUES
(26, 37, 25, '0000-00-00', 4, 0, 'Tin Caguioa');

-- --------------------------------------------------------

--
-- Table structure for table `supp_payment`
--

CREATE TABLE `supp_payment` (
  `supp_payment_id` int(11) NOT NULL,
  `supp_po_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_payment`
--

INSERT INTO `supp_payment` (`supp_payment_id`, `supp_po_id`, `date`, `amount`, `bank`) VALUES
(1, 17, '2018-03-27', 560100, 'BPI');

-- --------------------------------------------------------

--
-- Table structure for table `supp_po`
--

CREATE TABLE `supp_po` (
  `supp_po_id` int(11) NOT NULL,
  `supp_id` int(11) NOT NULL,
  `suppPO_date` date NOT NULL,
  `trucking_fee` double NOT NULL,
  `supp_creditTerm` varchar(45) NOT NULL,
  `total_item` int(11) NOT NULL DEFAULT '0',
  `total_amount` double NOT NULL DEFAULT '0',
  `delivery_stat` varchar(45) DEFAULT '0',
  `payment_stat` varchar(45) DEFAULT '0',
  `payment` decimal(11,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_po`
--

INSERT INTO `supp_po` (`supp_po_id`, `supp_id`, `suppPO_date`, `trucking_fee`, `supp_creditTerm`, `total_item`, `total_amount`, `delivery_stat`, `payment_stat`, `payment`) VALUES
(25, 2, '2018-03-31', 1, '1', 4, 93, '1', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supp_po_ordered`
--

CREATE TABLE `supp_po_ordered` (
  `supp_po_ordered_id` int(11) NOT NULL,
  `supp_po_id` int(11) NOT NULL,
  `item` varchar(45) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'Type',
  `delivery_stat` varchar(45) DEFAULT '0',
  `payment_stat` varchar(45) DEFAULT '0',
  `payment` decimal(11,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_po_ordered`
--

INSERT INTO `supp_po_ordered` (`supp_po_ordered_id`, `supp_po_id`, `item`, `qty`, `amount`, `type`, `delivery_stat`, `payment_stat`, `payment`) VALUES
(37, 25, 'clear', 4, 92, '500', '1', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supp_temp_po`
--

CREATE TABLE `supp_temp_po` (
  `id_supp_temp_PO` int(11) NOT NULL,
  `supp_name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `trucking_fee` decimal(10,0) NOT NULL,
  `credit_term` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supp_temp_po_order`
--

CREATE TABLE `supp_temp_po_order` (
  `idsupp_temp_po_order` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `unitPrice` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transac_history`
--

CREATE TABLE `transac_history` (
  `transac_id` int(11) NOT NULL,
  `supp_po_id` varchar(45) NOT NULL,
  `date_received` date NOT NULL,
  `date_payment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `trans_mach` (
  `tmach_id` int(11) NOT NULL,
  `mach_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(13, NULL, 13, NULL),
(14, NULL, 14, NULL),
(15, NULL, 15, NULL),
(16, NULL, 22, NULL),
(17, NULL, 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trans_pack`
--

CREATE TABLE `trans_pack` (
  `tp_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(23, 22, 4, 12),
(24, 23, 4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `trans_raw`
--

CREATE TABLE `trans_raw` (
  `tr_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `raw_coffeeid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(42, 16, 5, 500),
(43, 16, 3, 300),
(44, 17, 6, 1200),
(45, 17, 1, 3000),
(46, 18, 2, 2100),
(47, 18, 4, 3300),
(48, 19, 2, 2000),
(49, 19, 6, 1000),
(50, 20, 3, 1600),
(51, 20, 1, 1400),
(52, 21, 1, 2800),
(53, 21, 4, 2600),
(54, 22, 1, 1200),
(55, 22, 4, 3600),
(56, 22, 5, 7200),
(57, 23, 1, 1500),
(58, 23, 4, 4500),
(59, 23, 5, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `trans_stick`
--

CREATE TABLE `trans_stick` (
  `tstick_id` int(11) NOT NULL,
  `sticker_id` int(11) DEFAULT NULL,
  `trans_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(16, 1, 22, 12),
(17, 1, 23, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_no` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `u_lname` varchar(50) NOT NULL,
  `u_fname` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `u_activation` int(11) NOT NULL DEFAULT '1',
  `u_type` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `walkin_raw` (
  `wiraw_id` int(11) NOT NULL,
  `walkin_id` int(11) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `walkin_sales` (
  `walkin_id` int(11) NOT NULL,
  `walkin_date` date NOT NULL,
  `walkin_qty` int(11) NOT NULL,
  `walkin_returns` int(11) NOT NULL DEFAULT '0',
  `coff_remark` varchar(80) NOT NULL DEFAULT 'Received',
  `blend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylogs`
--
ALTER TABLE `activitylogs`
  ADD PRIMARY KEY (`activitylogs_id`),
  ADD UNIQUE KEY `idactivitylogs_UNIQUE` (`activitylogs_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `client_coffreturn`
--
ALTER TABLE `client_coffreturn`
  ADD PRIMARY KEY (`client_coffReturnID`);

--
-- Indexes for table `client_delivery`
--
ALTER TABLE `client_delivery`
  ADD PRIMARY KEY (`client_deliveryID`);

--
-- Indexes for table `client_machreturn`
--
ALTER TABLE `client_machreturn`
  ADD PRIMARY KEY (`client_machReturnID`);

--
-- Indexes for table `coffee_blend`
--
ALTER TABLE `coffee_blend`
  ADD PRIMARY KEY (`blend_id`);

--
-- Indexes for table `company_returns`
--
ALTER TABLE `company_returns`
  ADD PRIMARY KEY (`company_returnID`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `contracted_client`
--
ALTER TABLE `contracted_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contracted_po`
--
ALTER TABLE `contracted_po`
  ADD PRIMARY KEY (`contractPO_id`);

--
-- Indexes for table `inv_transact`
--
ALTER TABLE `inv_transact`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `inv_trans1_idx` (`company_returnID`),
  ADD KEY `inv_trans2_idx` (`client_returnID`),
  ADD KEY `inv_trans3_idx` (`po_supplier`),
  ADD KEY `inv_trans4_idx` (`po_client`),
  ADD KEY `inv_trans5_idx` (`sales_inv`),
  ADD KEY `inv_trans6_idx` (`walkin_return`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`mach_id`);

--
-- Indexes for table `machine_out`
--
ALTER TABLE `machine_out`
  ADD PRIMARY KEY (`mach_salesID`);

--
-- Indexes for table `packaging`
--
ALTER TABLE `packaging`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment_contracted`
--
ALTER TABLE `payment_contracted`
  ADD PRIMARY KEY (`paid_id`);

--
-- Indexes for table `payment_supplier`
--
ALTER TABLE `payment_supplier`
  ADD PRIMARY KEY (`supPayment_id`);

--
-- Indexes for table `proportions`
--
ALTER TABLE `proportions`
  ADD PRIMARY KEY (`proportion_id`),
  ADD KEY `raw_prop_idx` (`raw_id`),
  ADD KEY `blend_prop_idx` (`blend_id`);

--
-- Indexes for table `raw_coffee`
--
ALTER TABLE `raw_coffee`
  ADD PRIMARY KEY (`raw_id`);

--
-- Indexes for table `sticker`
--
ALTER TABLE `sticker`
  ADD PRIMARY KEY (`sticker_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `supplier_delivery`
--
ALTER TABLE `supplier_delivery`
  ADD PRIMARY KEY (`sup_deliveryID`);

--
-- Indexes for table `supplier_po`
--
ALTER TABLE `supplier_po`
  ADD PRIMARY KEY (`supPO_id`);

--
-- Indexes for table `supp_delivery`
--
ALTER TABLE `supp_delivery`
  ADD PRIMARY KEY (`supp_delivery_id`);

--
-- Indexes for table `supp_payment`
--
ALTER TABLE `supp_payment`
  ADD PRIMARY KEY (`supp_payment_id`);

--
-- Indexes for table `supp_po`
--
ALTER TABLE `supp_po`
  ADD PRIMARY KEY (`supp_po_id`);

--
-- Indexes for table `supp_po_ordered`
--
ALTER TABLE `supp_po_ordered`
  ADD PRIMARY KEY (`supp_po_ordered_id`);

--
-- Indexes for table `supp_temp_po`
--
ALTER TABLE `supp_temp_po`
  ADD PRIMARY KEY (`id_supp_temp_PO`);

--
-- Indexes for table `supp_temp_po_order`
--
ALTER TABLE `supp_temp_po_order`
  ADD PRIMARY KEY (`idsupp_temp_po_order`);

--
-- Indexes for table `transac_history`
--
ALTER TABLE `transac_history`
  ADD PRIMARY KEY (`transac_id`);

--
-- Indexes for table `trans_mach`
--
ALTER TABLE `trans_mach`
  ADD PRIMARY KEY (`tmach_id`),
  ADD KEY `mach_trans_idx` (`mach_id`),
  ADD KEY `mach_to_mtm_idx` (`mach_id`),
  ADD KEY `mach_trans_idx1` (`trans_id`);

--
-- Indexes for table `trans_pack`
--
ALTER TABLE `trans_pack`
  ADD PRIMARY KEY (`tp_id`),
  ADD KEY `t_pack_idx` (`package_id`),
  ADD KEY `t_pack_transact_idx` (`trans_id`);

--
-- Indexes for table `trans_raw`
--
ALTER TABLE `trans_raw`
  ADD PRIMARY KEY (`tr_id`),
  ADD KEY `transact_idx` (`trans_id`),
  ADD KEY `raw_idx` (`raw_coffeeid`);

--
-- Indexes for table `trans_stick`
--
ALTER TABLE `trans_stick`
  ADD PRIMARY KEY (`tstick_id`),
  ADD KEY `stick_trans_idx` (`sticker_id`),
  ADD KEY `stick_trans2_idx` (`trans_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_no`);

--
-- Indexes for table `walkin_raw`
--
ALTER TABLE `walkin_raw`
  ADD PRIMARY KEY (`wiraw_id`),
  ADD KEY `raw_wiraw_idx` (`raw_id`),
  ADD KEY `walk_wiraw_idx` (`walkin_id`);

--
-- Indexes for table `walkin_sales`
--
ALTER TABLE `walkin_sales`
  ADD PRIMARY KEY (`walkin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylogs`
--
ALTER TABLE `activitylogs`
  MODIFY `activitylogs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `client_coffreturn`
--
ALTER TABLE `client_coffreturn`
  MODIFY `client_coffReturnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `client_delivery`
--
ALTER TABLE `client_delivery`
  MODIFY `client_deliveryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `client_machreturn`
--
ALTER TABLE `client_machreturn`
  MODIFY `client_machReturnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `coffee_blend`
--
ALTER TABLE `coffee_blend`
  MODIFY `blend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `company_returns`
--
ALTER TABLE `company_returns`
  MODIFY `company_returnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `contract_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contracted_client`
--
ALTER TABLE `contracted_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contracted_po`
--
ALTER TABLE `contracted_po`
  MODIFY `contractPO_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `inv_transact`
--
ALTER TABLE `inv_transact`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `mach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `machine_out`
--
ALTER TABLE `machine_out`
  MODIFY `mach_salesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `packaging`
--
ALTER TABLE `packaging`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `payment_contracted`
--
ALTER TABLE `payment_contracted`
  MODIFY `paid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `payment_supplier`
--
ALTER TABLE `payment_supplier`
  MODIFY `supPayment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proportions`
--
ALTER TABLE `proportions`
  MODIFY `proportion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `raw_coffee`
--
ALTER TABLE `raw_coffee`
  MODIFY `raw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sticker`
--
ALTER TABLE `sticker`
  MODIFY `sticker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supplier_delivery`
--
ALTER TABLE `supplier_delivery`
  MODIFY `sup_deliveryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier_po`
--
ALTER TABLE `supplier_po`
  MODIFY `supPO_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supp_delivery`
--
ALTER TABLE `supp_delivery`
  MODIFY `supp_delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `supp_payment`
--
ALTER TABLE `supp_payment`
  MODIFY `supp_payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supp_po`
--
ALTER TABLE `supp_po`
  MODIFY `supp_po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `supp_po_ordered`
--
ALTER TABLE `supp_po_ordered`
  MODIFY `supp_po_ordered_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `supp_temp_po_order`
--
ALTER TABLE `supp_temp_po_order`
  MODIFY `idsupp_temp_po_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transac_history`
--
ALTER TABLE `transac_history`
  MODIFY `transac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `trans_mach`
--
ALTER TABLE `trans_mach`
  MODIFY `tmach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `trans_pack`
--
ALTER TABLE `trans_pack`
  MODIFY `tp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `trans_raw`
--
ALTER TABLE `trans_raw`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `trans_stick`
--
ALTER TABLE `trans_stick`
  MODIFY `tstick_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `walkin_raw`
--
ALTER TABLE `walkin_raw`
  MODIFY `wiraw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `walkin_sales`
--
ALTER TABLE `walkin_sales`
  MODIFY `walkin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `inv_transact`
--
ALTER TABLE `inv_transact`
  ADD CONSTRAINT `inv_trans1` FOREIGN KEY (`company_returnID`) REFERENCES `company_returns` (`company_returnID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inv_trans2` FOREIGN KEY (`client_returnID`) REFERENCES `client_coffreturn` (`client_coffReturnID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inv_trans3` FOREIGN KEY (`po_supplier`) REFERENCES `supp_delivery` (`supp_delivery_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inv_trans4` FOREIGN KEY (`po_client`) REFERENCES `contracted_po` (`contractPO_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inv_trans5` FOREIGN KEY (`sales_inv`) REFERENCES `walkin_sales` (`walkin_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inv_trans6` FOREIGN KEY (`walkin_return`) REFERENCES `walkin_sales` (`walkin_id`) ON UPDATE CASCADE;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

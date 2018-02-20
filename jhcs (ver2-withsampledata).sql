-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2018 at 08:19 AM
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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `account_id` int(17) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `address` varchar(90) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cellphone_number` varchar(15) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `last_name`, `first_name`, `position`, `address`, `email`, `cellphone_number`) VALUES
(1, 'Maslian', 'Averey', 'Manager', 'Quirino Hill', 'avy@gmail.com', '9568744423');

-- --------------------------------------------------------

--
-- Table structure for table `blends`
--

DROP TABLE IF EXISTS `blends`;
CREATE TABLE IF NOT EXISTS `blends` (
  `blend_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `unitprice` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`blend_id`),
  KEY `item_blends_idx` (`item_id`),
  KEY `client_blends_idx` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(90) NOT NULL,
  `client_type` enum('Wholesale','Retail') NOT NULL,
  `contact_personnel` varchar(90) NOT NULL,
  `position` varchar(35) NOT NULL,
  `address` varchar(140) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone_no` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_type`, `contact_personnel`, `position`, `address`, `email`, `telephone_no`, `status`) VALUES
(1, 'The Manor', 'Wholesale', 'Rizel Armando', 'General Manager', 'Baguio City', 'themanor@gmail.com', '442-4895', 'active'),
(2, 'The Legend Villas', 'Wholesale', 'Jesselyn Amagan', 'General Manager', 'Manduluyong City', 'legendary@gmail.com', '411-2111', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `coffee_raw`
--

DROP TABLE IF EXISTS `coffee_raw`;
CREATE TABLE IF NOT EXISTS `coffee_raw` (
  `rawcoffee_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`rawcoffee_id`),
  KEY `item_coffee_idx` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `unit_price` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `item_supplier_idx` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

DROP TABLE IF EXISTS `machines`;
CREATE TABLE IF NOT EXISTS `machines` (
  `machine_id` int(11) NOT NULL,
  `machine_name` varchar(45) NOT NULL,
  `reorder_level` int(11) NOT NULL,
  `stock_limit` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`machine_id`),
  KEY `mach_supplier_idx` (`supplier_id`),
  KEY `mach_item_idx` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machine_client`
--

DROP TABLE IF EXISTS `machine_client`;
CREATE TABLE IF NOT EXISTS `machine_client` (
  `machine_serial` int(11) NOT NULL,
  `machine_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`machine_serial`),
  KEY `mc_machines_idx` (`machine_id`),
  KEY `mc_client_idx` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po_client`
--

DROP TABLE IF EXISTS `po_client`;
CREATE TABLE IF NOT EXISTS `po_client` (
  `pocli_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`pocli_id`),
  KEY `poc_client_idx` (`client_id`),
  KEY `poc_po_idx` (`po_id`),
  KEY `poc_item_idx` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proportions`
--

DROP TABLE IF EXISTS `proportions`;
CREATE TABLE IF NOT EXISTS `proportions` (
  `rawcoffee_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  PRIMARY KEY (`rawcoffee_id`,`blend_id`),
  KEY `blends_many_idx` (`blend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

DROP TABLE IF EXISTS `purchase_order`;
CREATE TABLE IF NOT EXISTS `purchase_order` (
  `po_id` int(11) NOT NULL,
  `po_date` date NOT NULL,
  `po_type` varchar(45) NOT NULL,
  PRIMARY KEY (`po_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

DROP TABLE IF EXISTS `returns`;
CREATE TABLE IF NOT EXISTS `returns` (
  `return_id` int(11) NOT NULL,
  `return_date` date NOT NULL,
  `quantity_returned` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `remarks` varchar(90) NOT NULL,
  PRIMARY KEY (`return_id`),
  KEY `re_client_idx` (`client_id`),
  KEY `re_blend_idx` (`blend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(45) NOT NULL,
  `contact_personnel` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email_address` varchar(90) NOT NULL,
  `telephone_number` varchar(45) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `contact_personnel`, `position`, `address`, `email_address`, `telephone_number`, `status`) VALUES
(1, 'La Festive Trading. Inc', 'Aeneid Adversalo', 'Manager', 'Legarda', 'lafestive@gmail.com', '442-1234', 'active'),
(2, 'Lila Enterprise', 'Jeanne Dullao', 'Manager', 'Loakan Proper', 'lila1022@gmail.com', '442-2548', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `contact_number` varchar(45) NOT NULL,
  `user_type` enum('admin','sales','inventory') NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`, `contact_number`, `user_type`, `email`) VALUES
(1, 'avylian', 'avy', 'Avy', 'Maslian', '09123456789', 'sales', 'avylian@gmail.com'),
(2, 'jom', 'jomari', 'Jom', 'Julhusin', '09987654321', 'inventory', 'jom@gmail.com'),
(3, 'jin', 'j', 'Jin', 'Dullao', '09456123878', 'admin', 'jin@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blends`
--
ALTER TABLE `blends`
  ADD CONSTRAINT `client_blends` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `item_blends` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON UPDATE CASCADE;

--
-- Constraints for table `coffee_raw`
--
ALTER TABLE `coffee_raw`
  ADD CONSTRAINT `item_coffee` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `item_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON UPDATE CASCADE;

--
-- Constraints for table `machines`
--
ALTER TABLE `machines`
  ADD CONSTRAINT `mach_item` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mach_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON UPDATE CASCADE;

--
-- Constraints for table `machine_client`
--
ALTER TABLE `machine_client`
  ADD CONSTRAINT `mc_client` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mc_machines` FOREIGN KEY (`machine_id`) REFERENCES `machines` (`machine_id`) ON UPDATE CASCADE;

--
-- Constraints for table `po_client`
--
ALTER TABLE `po_client`
  ADD CONSTRAINT `poc_client` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `poc_item` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `poc_po` FOREIGN KEY (`po_id`) REFERENCES `purchase_order` (`po_id`) ON UPDATE CASCADE;

--
-- Constraints for table `proportions`
--
ALTER TABLE `proportions`
  ADD CONSTRAINT `blends_many` FOREIGN KEY (`blend_id`) REFERENCES `blends` (`blend_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rcoffee_many` FOREIGN KEY (`rawcoffee_id`) REFERENCES `coffee_raw` (`rawcoffee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `returns`
--
ALTER TABLE `returns`
  ADD CONSTRAINT `re_blend` FOREIGN KEY (`blend_id`) REFERENCES `blends` (`blend_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `re_client` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

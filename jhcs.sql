-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 11:25 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `address` varchar(90) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cellphone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blends`
--

CREATE TABLE `blends` (
  `blend_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `unitprice` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(90) NOT NULL,
  `client_type` enum('Wholesale','Retail') NOT NULL,
  `contact_personnel` varchar(90) NOT NULL,
  `position` varchar(35) NOT NULL,
  `address` varchar(140) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone_no` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coffee_raw`
--

CREATE TABLE `coffee_raw` (
  `rawcoffee_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `machine_id` int(11) NOT NULL,
  `machine_name` varchar(45) NOT NULL,
  `reorder_level` int(11) NOT NULL,
  `stock_limit` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machine_client`
--

CREATE TABLE `machine_client` (
  `machine_serial` int(11) NOT NULL,
  `machine_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po_client`
--

CREATE TABLE `po_client` (
  `pocli_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proportions`
--

CREATE TABLE `proportions` (
  `rawcoffee_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `po_id` int(11) NOT NULL,
  `po_date` date NOT NULL,
  `po_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `return_id` int(11) NOT NULL,
  `return_date` date NOT NULL,
  `quantity_returned` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `remarks` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(45) NOT NULL,
  `contact_personnel` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email_address` varchar(90) NOT NULL,
  `telephone_number` varchar(45) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `contact_number` varchar(45) NOT NULL,
  `user_type` enum('admin','sales','inventory') NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`, `contact_number`, `user_type`, `email`) VALUES
(1, 'avylian', 'avy', 'Avy', 'Maslian', '09123456789', 'sales', 'avylian@gmail.com'),
(2, 'jom', 'jomari', 'Jom', 'Julhusin', '09987654321', 'inventory', 'jom@gmail.com'),
(3, 'jin', 'j', 'Jin', 'Dullao', '09456123878', 'admin', 'jin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `blends`
--
ALTER TABLE `blends`
  ADD PRIMARY KEY (`blend_id`),
  ADD KEY `item_blends_idx` (`item_id`),
  ADD KEY `client_blends_idx` (`client_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `coffee_raw`
--
ALTER TABLE `coffee_raw`
  ADD PRIMARY KEY (`rawcoffee_id`),
  ADD KEY `item_coffee_idx` (`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_supplier_idx` (`supplier_id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`machine_id`),
  ADD KEY `mach_supplier_idx` (`supplier_id`),
  ADD KEY `mach_item_idx` (`item_id`);

--
-- Indexes for table `machine_client`
--
ALTER TABLE `machine_client`
  ADD PRIMARY KEY (`machine_serial`),
  ADD KEY `mc_machines_idx` (`machine_id`),
  ADD KEY `mc_client_idx` (`client_id`);

--
-- Indexes for table `po_client`
--
ALTER TABLE `po_client`
  ADD PRIMARY KEY (`pocli_id`),
  ADD KEY `poc_client_idx` (`client_id`),
  ADD KEY `poc_po_idx` (`po_id`),
  ADD KEY `poc_item_idx` (`item_id`);

--
-- Indexes for table `proportions`
--
ALTER TABLE `proportions`
  ADD PRIMARY KEY (`rawcoffee_id`,`blend_id`),
  ADD KEY `blends_many_idx` (`blend_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`return_id`),
  ADD KEY `re_client_idx` (`client_id`),
  ADD KEY `re_blend_idx` (`blend_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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

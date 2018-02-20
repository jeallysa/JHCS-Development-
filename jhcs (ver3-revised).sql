-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 08:18 AM
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
-- Table structure for table `client_coffreturn`
--

CREATE TABLE `client_coffreturn` (
  `client_coffReturnID` int(11) NOT NULL,
  `client_dr` varchar(20) NOT NULL,
  `coff_returnDate` date NOT NULL,
  `coff_returnQty` int(11) NOT NULL,
  `coff_remarks` varchar(50) NOT NULL,
  `coff_returnAction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_coffreturn`
--

INSERT INTO `client_coffreturn` (`client_coffReturnID`, `client_dr`, `coff_returnDate`, `coff_returnQty`, `coff_remarks`, `coff_returnAction`) VALUES
(1, 'dr123', '2018-02-28', 100, 'damaged', 'sample'),
(2, 'dr124', '2018-02-19', 100, 'spoiled', 'redeliver');

-- --------------------------------------------------------

--
-- Table structure for table `client_delivery`
--

CREATE TABLE `client_delivery` (
  `client_deliveryID` int(11) NOT NULL,
  `contractPO_id` int(11) NOT NULL,
  `client_dr` varchar(50) NOT NULL,
  `client_invoice` varchar(50) NOT NULL,
  `client_deliverDate` date NOT NULL,
  `client_balance` int(11) NOT NULL,
  `client_receive` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_delivery`
--

INSERT INTO `client_delivery` (`client_deliveryID`, `contractPO_id`, `client_dr`, `client_invoice`, `client_deliverDate`, `client_balance`, `client_receive`, `client_id`) VALUES
(1, 1, 'dr233', '233', '2018-02-13', 10000, 'Mark De Vera', 1),
(2, 2, 'dr234', '234', '2018-02-12', 13000, 'Leah Ramos', 2);

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
  `mach_remarks` varchar(50) NOT NULL,
  `mach_returnAction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_machreturn`
--

INSERT INTO `client_machreturn` (`client_machReturnID`, `mach_returnDate`, `mach_returnQty`, `client_id`, `mach_id`, `mach_remarks`, `mach_returnAction`) VALUES
(1, '2018-02-13', 1, '1', 1, 'damaged', 'return to supplier'),
(2, '2018-02-07', 1, '2', 2, 'damaged', 'repair');

-- --------------------------------------------------------

--
-- Table structure for table `coffeeservice`
--

CREATE TABLE `coffeeservice` (
  `coService_id` int(11) NOT NULL,
  `coService_date` date NOT NULL,
  `coService_credit` varchar(50) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `coService_qty` int(11) NOT NULL,
  `mach_id` int(11) NOT NULL,
  `mach_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `coffee_blend` (
  `blend_id` int(11) NOT NULL,
  `blend` varchar(20) NOT NULL,
  `raw_id` int(11) NOT NULL,
  `percentage` varchar(3) NOT NULL,
  `blend_price` int(11) NOT NULL,
  `blend_activation` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `client_type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracted_client`
--

INSERT INTO `contracted_client` (`client_id`, `client_company`, `client_fname`, `client_lname`, `client_position`, `client_email`, `client_address`, `client_contact`, `client_type`) VALUES
(1, 'Eurotel', 'Amagan', 'Jesselyn', 'General Manager', 'jesselyn22@gmail.com', '#118 Liwanag Loakan, Baguio City', '09176253445', 'Retail'),
(2, 'De Vera Inn', 'Calpito', 'Annyssa', 'Manager', 'maecalpito@gmail.com', '#52 Green Valley, Baguio City', '0962736554', 'Coffee Service');

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
  `delivery_stat` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracted_po`
--

INSERT INTO `contracted_po` (`contractPO_id`, `client_id`, `blend_id`, `contractPO_date`, `contractPO_qty`, `delivery_stat`) VALUES
(1, 1, 1, '2018-02-14', 300, 'delivered'),
(2, 2, 2, '2018-02-08', 300, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `mach_id` int(11) NOT NULL,
  `brewer` varchar(50) NOT NULL,
  `brewer_type` varchar(50) NOT NULL,
  `mach_reorder` int(11) NOT NULL,
  `mach_limit` int(11) NOT NULL,
  `mach_stocks` int(11) NOT NULL,
  `sup_id` varchar(11) NOT NULL,
  `mach_activation` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machine_out`
--

CREATE TABLE `machine_out` (
  `mach_salesID` int(11) NOT NULL,
  `mach_tagNO` int(11) NOT NULL,
  `date_installed` date NOT NULL,
  `mach_qty` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine_out`
--

INSERT INTO `machine_out` (`mach_salesID`, `mach_tagNO`, `date_installed`, `mach_qty`, `client_id`) VALUES
(1, 111, '2018-02-24', 1, 1),
(2, 112, '2018-02-12', 1, 2);

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
  `sup_id` int(11) NOT NULL,
  `pack_activation` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_contracted`
--

CREATE TABLE `payment_contracted` (
  `paid_id` int(11) NOT NULL,
  `client_dr` varchar(50) NOT NULL,
  `collection_no` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `withheld` int(11) NOT NULL,
  `payment_remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_contracted`
--

INSERT INTO `payment_contracted` (`paid_id`, `client_dr`, `collection_no`, `payment_mode`, `paid_date`, `paid_amount`, `withheld`, `payment_remarks`) VALUES
(2, 'dr233', 'C111', 'bank', '2018-02-13', 10000, 0, 'Fully paid');

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
-- Table structure for table `raw_coffee`
--

CREATE TABLE `raw_coffee` (
  `raw_id` int(11) NOT NULL,
  `raw_coffee` varchar(20) NOT NULL,
  `raw_reorder` int(11) NOT NULL,
  `raw_limit` int(11) NOT NULL,
  `raw_stock` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `raw_activation` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raw_coffee`
--

INSERT INTO `raw_coffee` (`raw_id`, `raw_coffee`, `raw_reorder`, `raw_limit`, `raw_stock`, `sup_id`, `raw_activation`) VALUES
(1, 'Raw Coffee A', 5000, 10000, 80000, 0, 1),
(2, 'Raw Coffee B', 2000, 7000, 9000, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `retail`
--

CREATE TABLE `retail` (
  `retail_id` int(11) NOT NULL,
  `retail_date` date NOT NULL,
  `retail_credit` varchar(20) NOT NULL,
  `blend_id` int(11) NOT NULL,
  `retail_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retail`
--

INSERT INTO `retail` (`retail_id`, `retail_date`, `retail_credit`, `blend_id`, `retail_qty`) VALUES
(1, '2018-02-22', '30 day', 1, 300),
(2, '2018-02-09', '30 day', 2, 300);

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
  `sup_id` int(11) NOT NULL,
  `sticker_activation` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sup_contact` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `u_activation` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_no`, `username`, `u_lname`, `u_fname`, `u_email`, `u_contact`, `u_address`, `password`, `u_activation`) VALUES
(1, 'tin', 'caguioa', 'tin', '2155651@slu.edu.ph', '09269044317', 'Baguio City', 'tin', 1),
(3, 'lila', 'Fernandez', 'Mariella', 'lila22@gmail.com', '09176524553', '#09 Hillside, Baguio City', 'l', 1),
(4, 'jom', 'Julhusin', 'Jomari', 'jom22@gmail.com', '09786525443', '#127 Aurora Hill, Baguio City', 'j', 1);

-- --------------------------------------------------------

--
-- Table structure for table `walkin_sales`
--

CREATE TABLE `walkin_sales` (
  `walkin_id` int(11) NOT NULL,
  `walkin_fname` varchar(50) NOT NULL,
  `walkin_lname` varchar(50) NOT NULL,
  `walkin_date` date NOT NULL,
  `walkin_qty` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walkin_sales`
--

INSERT INTO `walkin_sales` (`walkin_id`, `walkin_fname`, `walkin_lname`, `walkin_date`, `walkin_qty`, `product_id`) VALUES
(1, 'Michael', 'Torres', '2018-02-15', 2, 0),
(2, 'Alcantara', 'Danica', '2018-02-15', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_coffreturn`
--
ALTER TABLE `client_coffreturn`
  ADD PRIMARY KEY (`client_coffReturnID`);

--
-- Indexes for table `client_delivery`
--
ALTER TABLE `client_delivery`
  ADD PRIMARY KEY (`client_deliveryID`),
  ADD UNIQUE KEY `client_dr` (`client_dr`);

--
-- Indexes for table `client_machreturn`
--
ALTER TABLE `client_machreturn`
  ADD PRIMARY KEY (`client_machReturnID`);

--
-- Indexes for table `coffeeservice`
--
ALTER TABLE `coffeeservice`
  ADD PRIMARY KEY (`coService_id`);

--
-- Indexes for table `coffee_blend`
--
ALTER TABLE `coffee_blend`
  ADD PRIMARY KEY (`blend_id`);

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
-- Indexes for table `raw_coffee`
--
ALTER TABLE `raw_coffee`
  ADD PRIMARY KEY (`raw_id`);

--
-- Indexes for table `retail`
--
ALTER TABLE `retail`
  ADD PRIMARY KEY (`retail_id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_no`);

--
-- Indexes for table `walkin_sales`
--
ALTER TABLE `walkin_sales`
  ADD PRIMARY KEY (`walkin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_coffreturn`
--
ALTER TABLE `client_coffreturn`
  MODIFY `client_coffReturnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client_delivery`
--
ALTER TABLE `client_delivery`
  MODIFY `client_deliveryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client_machreturn`
--
ALTER TABLE `client_machreturn`
  MODIFY `client_machReturnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coffeeservice`
--
ALTER TABLE `coffeeservice`
  MODIFY `coService_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coffee_blend`
--
ALTER TABLE `coffee_blend`
  MODIFY `blend_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contracted_client`
--
ALTER TABLE `contracted_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contracted_po`
--
ALTER TABLE `contracted_po`
  MODIFY `contractPO_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `mach_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `machine_out`
--
ALTER TABLE `machine_out`
  MODIFY `mach_salesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packaging`
--
ALTER TABLE `packaging`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_contracted`
--
ALTER TABLE `payment_contracted`
  MODIFY `paid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment_supplier`
--
ALTER TABLE `payment_supplier`
  MODIFY `supPayment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `raw_coffee`
--
ALTER TABLE `raw_coffee`
  MODIFY `raw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `retail`
--
ALTER TABLE `retail`
  MODIFY `retail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sticker`
--
ALTER TABLE `sticker`
  MODIFY `sticker_id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `supPO_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `walkin_sales`
--
ALTER TABLE `walkin_sales`
  MODIFY `walkin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

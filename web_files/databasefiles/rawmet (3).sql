-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 09:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawmet`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyercontactsupplier`
--

CREATE TABLE `buyercontactsupplier` (
  `id` int(200) NOT NULL,
  `negotiate` varchar(225) DEFAULT NULL,
  `yourpriceperkg` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyergetquote`
--

CREATE TABLE `buyergetquote` (
  `id` int(200) NOT NULL,
  `quantity` varchar(225) DEFAULT NULL,
  `quantityunit` varchar(225) DEFAULT NULL,
  `totalordervalue` varchar(225) DEFAULT NULL,
  `forreselling` varchar(100) DEFAULT NULL,
  `businessuse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyerinqurymessage`
--

CREATE TABLE `buyerinqurymessage` (
  `id` int(200) NOT NULL,
  `dybr` varchar(225) DEFAULT NULL,
  `browse` varchar(225) DEFAULT NULL,
  `stitosos` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contactnumber` int(100) DEFAULT NULL,
  `iagree` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyerrequriement`
--

CREATE TABLE `buyerrequriement` (
  `id` int(200) NOT NULL,
  `productname` varchar(225) DEFAULT NULL,
  `dybr` varchar(225) DEFAULT NULL,
  `quantity` varchar(225) DEFAULT NULL,
  `requireddate` datetime(6) DEFAULT NULL,
  `lastdate` datetime(6) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `contactnumber` int(100) DEFAULT NULL,
  `uploadimage` varchar(225) DEFAULT NULL,
  `uploadpdf` varchar(225) DEFAULT NULL,
  `iagreee` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_paymet`
--

CREATE TABLE `buyer_paymet` (
  `id` int(200) DEFAULT NULL,
  `productname` int(225) DEFAULT NULL,
  `category` int(225) DEFAULT NULL,
  `subcategory` varchar(225) DEFAULT NULL,
  `companyname` varchar(100) DEFAULT NULL,
  `payment` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_register`
--

CREATE TABLE `buyer_register` (
  `id` int(11) NOT NULL,
  `bname` varchar(50) DEFAULT NULL,
  `bcompanyname` varchar(100) DEFAULT NULL,
  `bcompanytype` varchar(100) DEFAULT NULL,
  `bcontactperson` varchar(100) DEFAULT NULL,
  `bcontactnumber` int(200) DEFAULT NULL,
  `bemail` varchar(100) DEFAULT NULL,
  `busername` varchar(100) DEFAULT NULL,
  `bpassword` varchar(100) DEFAULT NULL,
  `brepeatpassword` varchar(100) DEFAULT NULL,
  `baddress` varchar(225) DEFAULT NULL,
  `bcity` varchar(50) DEFAULT NULL,
  `bselectstate` varchar(50) DEFAULT NULL,
  `bpincode` int(200) DEFAULT NULL,
  `bbustype` varchar(225) DEFAULT NULL,
  `bbusdesc` varchar(225) DEFAULT NULL,
  `bstatus` tinyint(1) DEFAULT NULL,
  `boptions` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer_register`
--

INSERT INTO `buyer_register` (`id`, `bname`, `bcompanyname`, `bcompanytype`, `bcontactperson`, `bcontactnumber`, `bemail`, `busername`, `bpassword`, `brepeatpassword`, `baddress`, `bcity`, `bselectstate`, `bpincode`, `bbustype`, `bbusdesc`, `bstatus`, `boptions`) VALUES
(1, 'mmm', 'aaa', 'b', 'c', 123456789, 'd@gmail.com', 'e', 'MTEx', 'g', 'h', 'i', 'j', 12345, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_location`
--

CREATE TABLE `manage_location` (
  `id` int(200) NOT NULL,
  `selectlocation` int(11) DEFAULT NULL,
  `action` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manag_subscription`
--

CREATE TABLE `manag_subscription` (
  `id` int(100) NOT NULL,
  `vendorname` varchar(225) DEFAULT NULL,
  `productname` varchar(225) DEFAULT NULL,
  `category` varchar(225) DEFAULT NULL,
  `subcategory` varchar(100) DEFAULT NULL,
  `companyname` varchar(100) DEFAULT NULL,
  `amountpercentage` int(10) DEFAULT NULL,
  `amount` int(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `companytype` varchar(225) DEFAULT NULL,
  `contactperson` varchar(225) DEFAULT NULL,
  `location` varchar(225) DEFAULT NULL,
  `city` varchar(225) DEFAULT NULL,
  `options` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `category` varchar(200) DEFAULT NULL,
  `subcategory` varchar(225) DEFAULT NULL,
  `companyname` varchar(225) DEFAULT NULL,
  `hotproduct` varchar(225) DEFAULT NULL,
  `categoryname` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `operation` tinyint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellerpostproduct`
--

CREATE TABLE `sellerpostproduct` (
  `id` int(200) NOT NULL,
  `productname` varchar(225) DEFAULT NULL,
  `category` varchar(225) DEFAULT NULL,
  `materialname` varchar(225) DEFAULT NULL,
  `description` tinytext DEFAULT NULL,
  `price` varchar(225) DEFAULT NULL,
  `quantity` varchar(225) DEFAULT NULL,
  `aifeatured` varchar(11) DEFAULT NULL,
  `fobprice` tinyint(1) DEFAULT NULL,
  `uploadproductimage` varchar(10) DEFAULT NULL,
  `minoderquant` varchar(225) DEFAULT NULL,
  `supplyability` varchar(225) DEFAULT NULL,
  `quantpermonth` varchar(225) DEFAULT NULL,
  `estdeltime` varchar(225) DEFAULT NULL,
  `poptions` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerpostproduct`
--

INSERT INTO `sellerpostproduct` (`id`, `productname`, `category`, `materialname`, `description`, `price`, `quantity`, `aifeatured`, `fobprice`, `uploadproductimage`, `minoderquant`, `supplyability`, `quantpermonth`, `estdeltime`, `poptions`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 'megha', 'Raw Material', 'Silicon', 'Iron\r\nChemical element\r\nOverview\r\nNews\r\nExamples\r\nPeople also search for\r\nShare\r\nIron is a mineral that our bodies need for many functions. For example, iron is part of hemoglobin, a protein which carries oxygen from our lungs throughout our bodies. It he', '67 kg', '02', 'aifeatured', 0, 'Capture.PN', '4kg', '100kg', '50kg', '10 Days', 0),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seller_mbuyreq`
--

CREATE TABLE `seller_mbuyreq` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `category` varchar(225) DEFAULT NULL,
  `subcategory` varchar(225) DEFAULT NULL,
  `requriedqty` varchar(100) DEFAULT NULL,
  `quoteexpriedate` date DEFAULT NULL,
  `buyer` varchar(225) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `action` tinyint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payment`
--

CREATE TABLE `vendor_payment` (
  `id` int(200) DEFAULT NULL,
  `vendorname` varchar(225) DEFAULT NULL,
  `productname` varchar(225) DEFAULT NULL,
  `category` varchar(225) DEFAULT NULL,
  `subcategory` varchar(100) DEFAULT NULL,
  `companyname` varchar(100) DEFAULT NULL,
  `payment` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_register`
--

CREATE TABLE `vendor_register` (
  `id` int(200) NOT NULL,
  `vname` varchar(100) DEFAULT NULL,
  `vcompanyname` varchar(225) DEFAULT NULL,
  `vcompanytype` varchar(250) DEFAULT NULL,
  `vcontactperson` varchar(250) DEFAULT NULL,
  `vcontactnumber` int(100) DEFAULT NULL,
  `vemail` varchar(100) DEFAULT NULL,
  `vusername` varchar(100) DEFAULT NULL,
  `vpassword` varchar(100) DEFAULT NULL,
  `vrepeatpassword` varchar(100) DEFAULT NULL,
  `vaddress` varchar(225) DEFAULT NULL,
  `vcity` varchar(100) DEFAULT NULL,
  `vselectstate` varchar(100) DEFAULT NULL,
  `vpincode` int(100) DEFAULT NULL,
  `vbustype` varchar(225) DEFAULT NULL,
  `vbusdesc` varchar(225) DEFAULT NULL,
  `vstatus` tinyint(1) DEFAULT NULL,
  `voptions` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_register`
--

INSERT INTO `vendor_register` (`id`, `vname`, `vcompanyname`, `vcompanytype`, `vcontactperson`, `vcontactnumber`, `vemail`, `vusername`, `vpassword`, `vrepeatpassword`, `vaddress`, `vcity`, `vselectstate`, `vpincode`, `vbustype`, `vbusdesc`, `vstatus`, `voptions`) VALUES
(1, 'manvvvvvvvvvvmegha', 'aa', 'a', 'c', 4253425, 'm@gmail.com', 'c', 'MTEx', NULL, 'd', NULL, NULL, 12345, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyercontactsupplier`
--
ALTER TABLE `buyercontactsupplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyergetquote`
--
ALTER TABLE `buyergetquote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyerinqurymessage`
--
ALTER TABLE `buyerinqurymessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyerrequriement`
--
ALTER TABLE `buyerrequriement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_register`
--
ALTER TABLE `buyer_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_location`
--
ALTER TABLE `manage_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manag_subscription`
--
ALTER TABLE `manag_subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellerpostproduct`
--
ALTER TABLE `sellerpostproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_mbuyreq`
--
ALTER TABLE `seller_mbuyreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_register`
--
ALTER TABLE `vendor_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyercontactsupplier`
--
ALTER TABLE `buyercontactsupplier`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyergetquote`
--
ALTER TABLE `buyergetquote`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyerinqurymessage`
--
ALTER TABLE `buyerinqurymessage`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyerrequriement`
--
ALTER TABLE `buyerrequriement`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer_register`
--
ALTER TABLE `buyer_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_location`
--
ALTER TABLE `manage_location`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manag_subscription`
--
ALTER TABLE `manag_subscription`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellerpostproduct`
--
ALTER TABLE `sellerpostproduct`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seller_mbuyreq`
--
ALTER TABLE `seller_mbuyreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_register`
--
ALTER TABLE `vendor_register`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

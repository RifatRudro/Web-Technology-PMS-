-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 10:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `FullName` text NOT NULL,
  `UserName` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` text NOT NULL,
  `Address` text NOT NULL,
  `Date` text NOT NULL,
  `Gender` text NOT NULL,
  `File_Path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`FullName`, `UserName`, `Email`, `Password`, `Phone`, `Address`, `Date`, `Gender`, `File_Path`) VALUES
('Md Hamid Uddin', 'hamid', 'hamiduddin280@gmail.com', 'Helloo?#', '01711355787', ' Uttarpara,Rajshahi,Rajsahhi,6203 ', '2021-08-16', 'Male', '../File/IMG_20210514_180344_Bokeh - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `agent_reg`
--

CREATE TABLE `agent_reg` (
  `Name` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DOB` text NOT NULL,
  `Gender` text NOT NULL,
  `Agent_Type` text NOT NULL,
  `File_Path` varchar(255) NOT NULL,
  `Validation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_reg`
--

INSERT INTO `agent_reg` (`Name`, `Email`, `Username`, `Password`, `Phone`, `Address`, `DOB`, `Gender`, `Agent_Type`, `File_Path`, `Validation`) VALUES
('Rudro Rifat', 'rifat@gmail.com', 'rifatrudro', '12345678', '01711355787', ' Uttarpara,Rajshahi,6203 ', '2021-08-16', 'Male', 'PropertyAgent', '../File/IMG_20210105_094746.jpg', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `FullName` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` text NOT NULL,
  `File_Path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`FullName`, `Email`, `Password`, `Phone`, `Address`, `Gender`, `File_Path`) VALUES
('Faisal bhai', 'faisal@gmail.com', '123456', '0171135578', ' Pabna ', 'Male', '../File/faisal-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `c_sms`
--

CREATE TABLE `c_sms` (
  `Email` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_sms`
--

INSERT INTO `c_sms` (`Email`, `Subject`, `Message`) VALUES
('hamiduddin09@yahoo.com', 'Show some property', ' Hey Agent, would you plz show some property?'),
('hamiduddin09@yahoo.com', 'Hi', ' Testing'),
('faisal@gmail.com', 'Show some property', ' Hi there,,, Would you plz show me some free property?');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `name` text NOT NULL,
  `username` char(30) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `password` char(20) NOT NULL,
  `gender` tinytext NOT NULL,
  `photo` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`name`, `username`, `email`, `phone`, `address`, `password`, `gender`, `photo`) VALUES
('shamia islam', 'shamia', 'shamia@gmail.com', '01820000000', 'Bashundhara', 'abcabcab', 'female', '../assets/OwnerPhotos/picture1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_ID` int(11) NOT NULL,
  `P_Name` text NOT NULL,
  `P_Desc` text NOT NULL,
  `P_Cate` text NOT NULL,
  `P_Price` int(11) NOT NULL,
  `P_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_ID`, `P_Name`, `P_Desc`, `P_Cate`, `P_Price`, `P_image`) VALUES
(1, 'assets ', 'Block D, Bashundhara R-A, Dhaka,2200sqf. ', 'Apartment ', 11800000, '../assets/ProductPhotos/pb1.jpg'),
(2, 'concord', 'Sector 14, Uttara, Dhaka,2700sqft.', 'Apartment', 12500000, '../assets/ProductPhotos/pu2.jpg'),
(3, 'hilton', 'Road No 14,Dhanmondi,Dhaka.', 'Office', 10000000, '../assets/ProductPhotos/pd3.jpg'),
(4, 'landmark', 'Bochila, Mohammadpur, Dhaka', 'Building', 110000000, '../assets/ProductPhotos/pm4.jpg'),
(14, 'assest', 'floor 7', 'flat', 200000000, '../assets/Product Photos/assest_pb1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `propertypost`
--

CREATE TABLE `propertypost` (
  `P_ID` int(11) NOT NULL,
  `P_Name` text NOT NULL,
  `P_Desc` text NOT NULL,
  `P_Cate` text NOT NULL,
  `P_Price` float NOT NULL,
  `P_Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertypost`
--

INSERT INTO `propertypost` (`P_ID`, `P_Name`, `P_Desc`, `P_Cate`, `P_Price`, `P_Image`) VALUES
(1, 'Villa Type House In Uttara ', 'New House with all facilities ', 'Renting', 25000, '../File/Sale-of-immovable-Property.jpg'),
(2, 'Student Home', 'Batchelor Student mess only for Students ', 'Renting', 4520, '../File/how-to-find-below-market-value-properties.jpg'),
(3, 'Home Rent In Nakhalpara', 'Bed 2 \r\nDrawing, Dining Attached', 'Renting', 8500, '../File/Sale-of-immovable-Property.jpg'),
(4, 'Property', 'Testing Field.....', 'Renting', 35000, '../File/p1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `msg_id` int(11) NOT NULL,
  `owner_id` text NOT NULL,
  `topic` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`msg_id`, `owner_id`, `topic`, `message`) VALUES
(1, '2', 'Approve', 'I post an apartment ad, please approve my post.'),
(9, '', 'add', 'hhh'),
(10, '', 'Checking', 'Hi there, i am checking about texting'),
(11, '', 'Please Approve my Add', 'I have posted an add.. please confirm it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `UserName` (`UserName`) USING HASH,
  ADD UNIQUE KEY `Phone` (`Phone`) USING HASH;

--
-- Indexes for table `agent_reg`
--
ALTER TABLE `agent_reg`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Phone` (`Phone`) USING HASH;

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`) USING HASH;

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `P_ID` (`P_ID`),
  ADD KEY `P_ID_2` (`P_ID`);

--
-- Indexes for table `propertypost`
--
ALTER TABLE `propertypost`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `propertypost`
--
ALTER TABLE `propertypost`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

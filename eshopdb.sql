-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 05:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `qid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phoneno` bigint(20) DEFAULT NULL,
  `message` varchar(150) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`qid`, `name`, `email`, `phoneno`, `message`, `date`) VALUES
(1, 'Aastha Sharma', 'aastha@gmail.com', 9012876900, 'very good website', '2023-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `mobilespecification`
--

CREATE TABLE `mobilespecification` (
  `Pid` int(11) NOT NULL,
  `Os` varchar(30) DEFAULT NULL,
  `Processor` varchar(30) DEFAULT NULL,
  `Color` varchar(30) DEFAULT NULL,
  `SIM_Type` varchar(30) DEFAULT NULL,
  `Hybrid_Sim_Slot` tinyint(1) DEFAULT NULL,
  `Disply_Size` varchar(30) DEFAULT NULL,
  `Resolution` varchar(30) DEFAULT NULL,
  `Internal_Storage` varchar(10) DEFAULT NULL,
  `RAM` varchar(10) DEFAULT NULL,
  `Primary_Camera` varchar(30) DEFAULT NULL,
  `Secondary_Camera` varchar(30) DEFAULT NULL,
  `Network_Type` varchar(30) DEFAULT NULL,
  `Battery_Capacity` varchar(30) DEFAULT NULL,
  `Width` varchar(10) DEFAULT NULL,
  `Height` varchar(10) DEFAULT NULL,
  `Warranty_Summary` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobilespecification`
--

INSERT INTO `mobilespecification` (`Pid`, `Os`, `Processor`, `Color`, `SIM_Type`, `Hybrid_Sim_Slot`, `Disply_Size`, `Resolution`, `Internal_Storage`, `RAM`, `Primary_Camera`, `Secondary_Camera`, `Network_Type`, `Battery_Capacity`, `Width`, `Height`, `Warranty_Summary`) VALUES
(0, 'Android 13.0', 'Snapdragon 888 Gen 1', 'Blue', 'Dual', 0, '6 inches', '4K', '128 GB', '8 GB', '40 mp', '100 mp', 'Cellular and WIFI', '5000 MAh', '16.6', '0.8', '1 year'),
(1, 'Android 13.0', 'Snapdragon 880', 'white', '5G', 0, '', '', '128 GB', '8 GB', '', '', '', '', '', '', '2 years'),
(1001, 'yo', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', ''),
(1002, 'Android 12.0', 'Exynos 1280 Octa Core 2.4GHz 5', 'Deep Ocean Blue', '5G', 0, '2.5 inches', '1080*2400', '8GB', '16GB', '1080*2400', '1080*2400', 'All', '6000mAh', '16.5cm', '0.9cm', '6 months'),
(1003, 'Android 12.0', 'Snapdragon 888 Gen 1', 'black', 'Dual', 0, '6.6 inches', '1080*2400', '128 GB', '16GB', '40 mp', '100 mp', 'Cellular and WIFI', '6000mAh', '16.5cm', '0.9cm', '6 months'),
(1004, 'Android 12.0', 'Exynos 1280 Octa Core 2.4GHz 5', 'aqua', '5G', 0, '6.6 inches', '1080*2400', '128 GB', '8 GB', '2000', '100 mp', 'All', '6000mAh', '16.6', '0.8', '1 year'),
(1005, 'Android 13.0', 'Snapdragon 888 Gen 1', 'Prime Blue', 'Dual', 0, '6.72', '1080*2400', '128 GB', '6 GB', '64 mp', '100 mp', 'Cellular and WIFI', '5000 MAh', '16.5cm', '0.9cm', '6 months');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pid` varchar(100) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `Payment_status` varchar(50) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `pid`, `order_date`, `amount`, `address`, `Payment_status`, `status`) VALUES
(1, 1, '1007', '2023-07-19', 62990, 'Aastha Sharma,kamla nagar,agra ', 'Cash on Delivery', 'Undelivered');

-- --------------------------------------------------------

--
-- Table structure for table `productmaster`
--

CREATE TABLE `productmaster` (
  `Pid` int(11) NOT NULL,
  `Pname` varchar(40) DEFAULT NULL,
  `Pprice` int(11) DEFAULT NULL,
  `Ptype` varchar(40) DEFAULT NULL,
  `Pimage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productmaster`
--

INSERT INTO `productmaster` (`Pid`, `Pname`, `Pprice`, `Ptype`, `Pimage`) VALUES
(1001, 'Samsung Galaxy M14 5G (Berry Blue, 6GB, ', 15490, 'Mobile', 'product/m1.jpg'),
(1002, 'Samsung Galaxy M04 Light Green, 4GB RAM,', 7999, 'Mobile', 'product/m2.jpg'),
(1003, 'Samsung Galaxy M33 5G (Deep Ocean Blue, ', 16999, 'Mobile', 'product/m3.jpg'),
(1004, 'Samsung Galaxy M13 (Aqua Green, 4GB, 64G', 9499, 'Mobile', 'product/m4.jpg'),
(1005, 'realme narzo N55 (Prime Blue, 6GB+128GB)', 8999, 'Mobile', 'product/m5.jpg'),
(1006, 'Sony Bravia 108 cm (43 inches) 4K Ultra ', 42990, 'Tv', 'product/t1.jpg'),
(1007, 'Sony Bravia 108 cm (43 inches) 4K Ultra ', 62990, 'Tv', 'product/t2.jpg'),
(1008, 'Sony Bravia 126 cm (50 inches) 4K Ultra ', 60790, 'Tv', 'product/t3.jpg'),
(1009, 'Sony Bravia 126 cm (50 inches) 4K Ultra ', 77980, 'Tv', 'product/t4.jpg'),
(1010, 'Sony Bravia 108 cm (43 inches) 4K Ultra ', 70190, 'Tv', 'product/t5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tv_specification`
--

CREATE TABLE `tv_specification` (
  `Pid` int(11) NOT NULL,
  `In_The_Box` varchar(150) DEFAULT NULL,
  `Color` varchar(20) DEFAULT NULL,
  `Display_Size` varchar(20) DEFAULT NULL,
  `Screen_Type` varchar(20) DEFAULT NULL,
  `HD_Type_Res` varchar(20) DEFAULT NULL,
  `Smart_Tv` tinyint(1) DEFAULT NULL,
  `Motion_Sensor` tinyint(1) DEFAULT NULL,
  `HDMI` varchar(20) DEFAULT NULL,
  `USB` varchar(20) DEFAULT NULL,
  `Built_In_WiFi` tinyint(1) DEFAULT NULL,
  `Launch_Year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tv_specification`
--

INSERT INTO `tv_specification` (`Pid`, `In_The_Box`, `Color`, `Display_Size`, `Screen_Type`, `HD_Type_Res`, `Smart_Tv`, `Motion_Sensor`, `HDMI`, `USB`, `Built_In_WiFi`, `Launch_Year`) VALUES
(1006, 'Sony Bravia 108 cm (43 inches) 4K Ultra HD Smart LED Google TV KD-43X74K (Black)', 'black', '43 inches', 'LED', '4K', 0, 0, 'yes', 'yes', 0, 2010),
(1007, 'Sony Bravia 108 cm (43 inches) 4K Ultra HD Smart LED Google TV KD-43X74K (Black)', 'black', '', 'LED', '4K', 0, 0, 'yes', 'yes', 0, 2017),
(1008, 'Sony Bravia 108 cm (43 inches) 4K Ultra HD Smart LED Google TV KD-43X74K (Black)', 'black', '42 inches', 'LED', '4K', 0, 0, 'yes', 'yes', 0, 2016),
(1009, 'Sony Bravia 126 cm (50 inches) 4K Ultra HD Smart LED Google TV KD-50X75L (Black)', 'black', '50 inches', 'LED', '4K', 0, 0, 'yes', 'yes', 0, 2015),
(1010, 'Sony Bravia 108 cm (43 inches) 4K Ultra HD Smart LED Google TV KD-43X80L (Black)', 'black', '43 inches', 'LED', '4K', 0, 0, 'yes', 'yes', 0, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_pwd` varchar(40) DEFAULT NULL,
  `user_gender` varchar(40) DEFAULT NULL,
  `user_mobile` bigint(20) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `Role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`user_id`, `user_name`, `user_email`, `user_pwd`, `user_gender`, `user_mobile`, `user_dob`, `Role`) VALUES
(1, 'Aastha Sharma', 'aastha@gmail.com', 'aastha@123', 'female', 9012956774, '2002-07-30', 'Admin'),
(2, 'Vivek Sharma', 'vivek@gmail.com', 'vivek@123', 'male', 9837065574, '1970-05-26', 'Client'),
(3, 'Mamta Sharma', 'mamta@yahoo.com', 'mamta@123', 'female', 9658003061, '1969-06-26', 'Client'),
(4, 'Utkarsh Sharma', 'uttu@yahoo.com', 'uttu@123', 'male', 9568005478, '1999-06-03', 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `mobilespecification`
--
ALTER TABLE `mobilespecification`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `productmaster`
--
ALTER TABLE `productmaster`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `tv_specification`
--
ALTER TABLE `tv_specification`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usermaster`
--
ALTER TABLE `usermaster`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

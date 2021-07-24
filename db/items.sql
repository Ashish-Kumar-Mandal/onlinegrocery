-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 05:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinegrocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_img` varchar(50) NOT NULL,
  `item_price` decimal(10,0) NOT NULL,
  `item_category` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_img`, `item_price`, `item_category`) VALUES
(9, 'Coriander', '21062021192722.jpg', '200', 7),
(10, 'Grapes', '18062021203235.jpg', '200', 8),
(12, 'Guavas', '18062021203612.jpg', '50', 8),
(13, 'Watermelon', '18062021203641.jpg', '85', 8),
(14, 'Peach', '18062021203802.jpg', '70', 8),
(15, 'Carrot', '18062021203833.jpg', '40', 8),
(16, 'Papaya', '18062021203906.jpg', '40', 8),
(17, 'Mangoes', '18062021204000.jpg', '130', 8),
(19, 'Pumpkin', '18062021204142.jpg', '80', 7),
(20, 'CauliFlower', '18062021204213.jpg', '140', 7),
(21, 'Radish', '18062021204429.jpg', '100', 7),
(22, 'Cucumber', '01072021153234.jpg', '90', 7),
(23, 'Chillies', '01072021153304.jpg', '60', 7),
(24, 'Mushrooms', '01072021153335.jpg', '250', 7),
(25, 'Oranges', '01072021153443.jpg', '100', 8),
(26, 'Cloves', '01072021215021.jpg', '400', 10),
(27, 'Coriander', '01072021215056.jpg', '80', 10),
(29, 'Ginger', '01072021215154.jpg', '160', 10),
(30, 'Jeera', '01072021215335.jpg', '180', 10),
(31, 'Garlic', '01072021215412.jpg', '250', 10),
(32, 'Tej Patta', '01072021215450.jpg', '150', 10),
(33, 'Kala Jeera', '01072021215528.jpg', '480', 10),
(34, 'RedChilli Powder', '01072021215606.jpg', '500', 10),
(35, 'Basmati', '01072021215701.jpg', '120', 11),
(38, 'Arborio', '01072021215831.jpg', '180', 11),
(39, 'White Rice', '01072021215920.jpg', '50', 11),
(41, 'Jasmine Rice', '01072021220306.jpg', '60', 11),
(42, 'Simple Flour', '01072021220328.jpg', '22', 11),
(43, 'Almond Flour', '01072021220352.jpg', '50', 11),
(44, 'Bread Flour', '01072021220430.jpg', '55', 11),
(45, 'Cake Flour', '01072021220453.jpg', '60', 11),
(46, 'Chana Dal', '01072021220636.jpg', '52', 14),
(47, 'Chick Peas', '01072021220700.jpg', '120', 14),
(48, 'Green Gram', '01072021220723.jpg', '70', 14),
(49, 'Kidney Beans', '01072021220744.jpg', '220', 14),
(50, 'Maize', '01072021220808.jpg', '40', 14),
(51, 'Oats', '01072021220829.jpg', '80', 14),
(52, 'Pigeon Peas', '01072021220859.jpg', '150', 14),
(53, 'Red Lentils', '01072021220932.jpg', '60', 14),
(54, 'CodFish', '01072021221031.jpg', '180', 13),
(55, 'Herrings Fish', '01072021221139.jpg', '220', 13),
(56, 'Mackerel Fish', '01072021221205.jpg', '160', 13),
(58, 'Sardine FIsh', '01072021221252.jpg', '250', 13),
(59, 'Chicken', '01072021221315.jpg', '290', 13),
(60, 'Muttons', '01072021221355.jpg', '700', 13),
(61, 'Chicken Burger', '01072021221427.jpg', '200', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_category` (`item_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`item_category`) REFERENCES `category` (`cat_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

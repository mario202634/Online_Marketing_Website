-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 09:09 PM
-- Server version: 8.0.17
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
-- Database: `ip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `FirstName`, `LastName`, `Email`, `Password`) VALUES
(1, 'Mario', 'Medhat', 'Mario@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96'),
(2, 'Mahmoud', 'Farouk', 'Mahmoud@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96'),
(3, 'David', 'Maximous', 'David@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Cars'),
(2, 'Home'),
(3, 'Phones'),
(4, 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustID` int(11) NOT NULL,
  `CustFirstName` varchar(50) NOT NULL,
  `CustLastName` varchar(50) NOT NULL,
  `CustEmail` varchar(200) NOT NULL,
  `CustPassword` varchar(100) NOT NULL,
  `CustAddress` varchar(500) NOT NULL,
  `CustCity` varchar(50) NOT NULL,
  `CustPhone` varchar(50) NOT NULL,
  `cart` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustID`, `CustFirstName`, `CustLastName`, `CustEmail`, `CustPassword`, `CustAddress`, `CustCity`, `CustPhone`, `cart`) VALUES
(1, 'Mario', 'Medhat', 'mario202634@bue.edu.eg', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', 'Nozha', 'Cairo', '0124692012', ''),
(2, 'David', 'Maximous', 'david194242@bue.edu.eg', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', 'Sheraton', 'Cairo', '0129468102', ''),
(3, 'Mahmoud', 'Farouk', 'mahmoud194435@bue.edu.eg', '$2y$10$I99D2RJj/ZjlrKwxJsHI8.YyuT38vQIiPlC0W/Wr6UkXnICs96f3C', 'Nasr City', 'Cairo', '012459436', NULL),
(4, 'Ali', 'Ahmed', 'Ali@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', 'Maadi', 'Cairo', '0155331561', NULL),
(5, 'Mohamed', 'Sayed', 'mohamed@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', 'Zamalek', 'Cairo', '010134563', NULL),
(6, 'Ragab', 'Ahmed', 'ragab@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', 'Mokattam', 'Cairo', '0101567763', NULL),
(7, 'Abdelrahman', 'Ahmed', 'abdelrahman@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', 'Zamalek', 'Cairo', '010134563', NULL),
(8, 'Mai', 'Ali', 'mai@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', '5th district', 'Cairo', '010103213', NULL),
(9, 'Youssef', 'Saad', 'youssef@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', '1st district', 'Cairo', '010134563', NULL),
(10, 'Menna', 'Ahmed', 'menna@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', 'Zamalek', 'Cairo', '010134563', NULL),
(11, 'mahmoud', 'farouk', 'farouk@gmail.com', '$2y$10$hxrvQQPJKOIbBUA9bhf.Nezr4eE2nEGGfluFsfO0IBFWSJTELaZ96', 'asd', 'cairo', '010101', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `CID` int(11) NOT NULL,
  `OrderTotal` varchar(100) NOT NULL,
  `OrderStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderDate`, `CID`, `OrderTotal`, `OrderStatus`) VALUES
(1, '2022-04-30', 1, '170000', 'Done'),
(2, '2022-04-30', 2, '3400000', 'Done'),
(3, '2022-04-30', 3, '30000', 'Done'),
(4, '2022-04-30', 4, '2500', 'Done'),
(5, '2022-04-30', 2, '17375', 'Done'),
(6, '2022-04-30', 1, '43100', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProdID` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `CatID` int(11) NOT NULL,
  `PDescription` text NOT NULL,
  `PQuantity` int(11) NOT NULL,
  `PPrice` double NOT NULL,
  `PImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProdID`, `PName`, `CatID`, `PDescription`, `PQuantity`, `PPrice`, `PImage`) VALUES
(1, 'Subaru', 1, 'Subaru impreza 2010  120,000km', 1, 170000, 'Subaru.jpg'),
(2, 'Honda Civic', 1, 'Honda Civic 2020  5000km', 1, 450000, 'hondacivic.jpg'),
(3, 'Bmw', 1, 'Bmw 320i sport 2014 90,000km', 1, 650000, 'bmw2014.jpg'),
(4, 'Audi', 1, 'Audi Q3 2021 Zero 0km', 1, 170000, 'audiq3.jpg'),
(5, 'New Capital Home', 2, 'New Capital Apartment 190m ', 1, 3400000, 'NewCapitalApartment.jpg'),
(6, 'West Golf Apartment ', 2, 'West golf apartment for sale 120m ', 1, 1600000, 'west-golf.png'),
(7, 'Villa in 6th October ', 2, 'Villa for sale 280m , garden ', 1, 5000000, 'villa6october.jpg'),
(8, 'Modern villa October', 2, 'Modern villa in new cairo 320m , 50m garden , private pool 50% installment ', 1, 1200000, 'modernvillanewcairo.png'),
(9, 'iPhone 13 Pro Max', 3, 'Iphone 13 pro max 1TB Available all colors', 20, 30000, 'iphone13promax.jpg'),
(10, 'iPhone xr ', 3, 'Iphone xr 265GB Available all colors', 30, 16000, 'iphonexr.jpg'),
(11, 'iPhone 12 Pro ', 3, 'Iphone 12 pro 512GB Available all colors', 5, 25000, 'iphone12pro.jpg'),
(12, 'iPhone 11 ', 3, 'Iphone 11  265GB Available all colors', 30, 19000, 'iphone11.jpeg'),
(13, 'Wooden Table', 4, 'Wooden Tapered Furniture Table Legs Couch Chair Bed', 10, 2500, 'furn1.jpg'),
(14, 'Bed', 4, ' Modern king size bed', 3, 14000, 'king-size-bed.jpg'),
(15, 'Table', 4, 'Durafur office table', 20, 1500, 'durafur-office.jpg'),
(16, 'Sofa', 4, 'Leather sofa', 4, 6000, 'leathersofa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProdID`),
  ADD KEY `CatID` (`CatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProdID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `customer` (`CustID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CatID`) REFERENCES `categories` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

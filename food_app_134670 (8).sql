-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 12:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_app_134670`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `sign_up_id` int(6) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm-password` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`sign_up_id`, `username`, `password`, `confirm-password`, `email`) VALUES
(22, 'admin1', 'admin1', 'admin1', 'admin1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `billing_id` int(6) NOT NULL,
  `card_id` varchar(70) NOT NULL,
  `user_id` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `card_type` varchar(70) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`billing_id`, `card_id`, `user_id`, `username`, `card_type`, `address`, `city`) VALUES
(38, 'WER32897498', '26', 'client1', 'paypal', 'P.O.BOX 98374', 'nakuru'),
(39, 'ASD32897498', '26', 'client1', 'paypal', 'P.O.BOX 98374', 'nakuru'),
(40, 'ZXC32897498', '27', 'client2', 'amazon', 'P.O.BOX 78385', 'nairobi'),
(41, 'ZXC32897498', '27', 'client2', 'amazon', 'P.O.BOX 92838', 'nairobi'),
(42, 'ZXC32897498', '27', 'client2', 'amazon', 'P.O.BOX 92838', 'nairobi'),
(43, 'ZXC32897498', '27', 'client2', 'amazon', 'P.O.BOX 92838', 'nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `client_register`
--

CREATE TABLE `client_register` (
  `sign_up_id` int(6) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm-password` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_register`
--

INSERT INTO `client_register` (`sign_up_id`, `username`, `password`, `confirm-password`, `email`) VALUES
(26, 'client1', 'client1', 'client1', 'client1@gmail.com'),
(27, 'client2', 'client', 'client', 'client2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `Id` int(10) NOT NULL,
  `Food_name` varchar(60) NOT NULL,
  `Image_Path` varchar(40) NOT NULL,
  `Price` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`Id`, `Food_name`, `Image_Path`, `Price`) VALUES
(36, 'Vegan Pizza', 'Group_100_sexiz8.png', 3),
(37, 'Vegan Drink', 'Group_101_fuyoym.png', 5),
(38, 'Vegan Casserole', 'Group_107_naux5a.png', 7),
(39, 'food1', 'Group_108_itdz3a.png', 3),
(40, 'food2', 'Group_123_ak1w03.png', 6),
(42, 'food3', 'Group_124_cfs2px.png', 10);

-- --------------------------------------------------------

--
-- Table structure for table `food_ordered`
--

CREATE TABLE `food_ordered` (
  `food_order_id` int(6) NOT NULL,
  `user_id` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `city` varchar(70) NOT NULL,
  `address` varchar(70) NOT NULL,
  `food_name` varchar(70) NOT NULL,
  `food_quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_ordered`
--

INSERT INTO `food_ordered` (`food_order_id`, `user_id`, `username`, `city`, `address`, `food_name`, `food_quantity`) VALUES
(27, '26', 'client1', 'nakuru', 'P.O.BOX 98374', 'food1', '2'),
(28, '26', 'client1', 'nakuru', 'P.O.BOX 98374', 'food2', '2'),
(29, '27', 'client2', 'nairobi', 'P.O.BOX 78385', 'food2', '2'),
(30, '27', 'client2', 'nairobi', 'P.O.BOX 92838', 'food3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `food_orders`
--

CREATE TABLE `food_orders` (
  `Order_id` int(6) NOT NULL,
  `User_id` varchar(70) NOT NULL,
  `Username` varchar(70) NOT NULL,
  `Order_time` datetime DEFAULT NULL,
  `Food_name` varchar(50) NOT NULL,
  `Food_price` int(50) NOT NULL,
  `Food_quantity` int(50) NOT NULL,
  `Total_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_orders`
--

INSERT INTO `food_orders` (`Order_id`, `User_id`, `Username`, `Order_time`, `Food_name`, `Food_price`, `Food_quantity`, `Total_price`) VALUES
(43, '26', 'client1', '2021-09-05 13:37:54', 'food1', 3, 2, 6),
(44, '26', 'client1', '2021-09-05 13:38:22', 'food2', 6, 2, 12),
(45, '27', 'client2', '2021-09-05 13:39:16', 'food2', 6, 2, 12),
(46, '27', 'client2', '2021-09-05 13:39:46', 'food3', 10, 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `Cart_id` int(6) NOT NULL,
  `User_id` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `Food_name` varchar(70) NOT NULL,
  `Food_price` int(50) NOT NULL,
  `Food_quantity` int(50) NOT NULL,
  `Total_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`Cart_id`, `User_id`, `username`, `Food_name`, `Food_price`, `Food_quantity`, `Total_price`) VALUES
(43, '26', 'client1', 'food1', 3, 2, 6),
(44, '26', 'client1', 'food2', 6, 2, 12),
(45, '27', 'client2', 'food2', 6, 2, 12),
(46, '27', 'client2', 'food3', 10, 2, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`sign_up_id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `client_register`
--
ALTER TABLE `client_register`
  ADD PRIMARY KEY (`sign_up_id`);

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `food_ordered`
--
ALTER TABLE `food_ordered`
  ADD PRIMARY KEY (`food_order_id`);

--
-- Indexes for table `food_orders`
--
ALTER TABLE `food_orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`Cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `sign_up_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `billing_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `client_register`
--
ALTER TABLE `client_register`
  MODIFY `sign_up_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `food_ordered`
--
ALTER TABLE `food_ordered`
  MODIFY `food_order_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `food_orders`
--
ALTER TABLE `food_orders`
  MODIFY `Order_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `Cart_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

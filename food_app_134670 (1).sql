-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 06:19 PM
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
(1, 'henry', '027e4180beedb29744413a7ea6b84a42', '027e4180beedb29744413a7ea6b84a42', 'henry@gmail.com'),
(2, 'eddy', '5aa8fed9741d33c63868a87f1af05ab7', '5aa8fed9741d33c63868a87f1af05ab7', 'eddy@gmail.com'),
(3, 'quan', '9f7eb8b72474d587dadd165916a60901', '9f7eb8b72474d587dadd165916a60901', 'quan@gmail.com');

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
(1, 'jason', '2b877b4b825b48a9a0950dd5bd1f264d', '2b877b4b825b48a9a0950dd5bd1f264d', 'jason@gmail.com'),
(2, 'bob', '9f9d51bc70ef21ca5c14f307980a29d8', '9f9d51bc70ef21ca5c14f307980a29d8', 'bob@gmail.com'),
(3, 'tina', 'ef2afe0ea76c76b6b4b1ee92864c4d5c', 'ef2afe0ea76c76b6b4b1ee92864c4d5c', 'tina@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`sign_up_id`);

--
-- Indexes for table `client_register`
--
ALTER TABLE `client_register`
  ADD PRIMARY KEY (`sign_up_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `sign_up_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_register`
--
ALTER TABLE `client_register`
  MODIFY `sign_up_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

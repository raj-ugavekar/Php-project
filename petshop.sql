-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 06:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_inventory`
--

CREATE TABLE `food_inventory` (
  `Food_ID` varchar(5) NOT NULL,
  `Food_Brand` varchar(10) NOT NULL,
  `Food_Type` varchar(10) NOT NULL,
  `Food_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `Pet_ID` varchar(5) NOT NULL,
  `Pet_Type` varchar(10) NOT NULL,
  `Pet_Breed` varchar(10) NOT NULL,
  `Pet_Color` varchar(10) NOT NULL,
  `Pet_Age` int(11) NOT NULL,
  `Pet_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`Pet_ID`, `Pet_Type`, `Pet_Breed`, `Pet_Color`, `Pet_Age`, `Pet_Price`) VALUES
('101', 'Dog', 'German', 'Black', 2, 10000),
('102', 'Cat', 'Ragdoll', 'White', 1, 7000),
('103', 'Parrot', 'Conures', 'Green', 1, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_inventory`
--
ALTER TABLE `food_inventory`
  ADD PRIMARY KEY (`Food_ID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`Pet_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

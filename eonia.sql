-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 05:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eonia`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `USER_EMAIL` text NOT NULL,
  `BOUGHT` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `PRICE` int(11) NOT NULL,
  `TYPE` text NOT NULL,
  `SPORT` text NOT NULL,
  `FRONTFACE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `NAME` text NOT NULL,
  `PREVIOUSPRICE` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `FRONTFACE` text NOT NULL,
  `BACKFACE` text NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `COLOR` text NOT NULL,
  `ID` int(11) NOT NULL,
  `TYPE` text NOT NULL,
  `SPORT` text NOT NULL,
  `GENDER` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`NAME`, `PREVIOUSPRICE`, `PRICE`, `FRONTFACE`, `BACKFACE`, `DESCRIPTION`, `COLOR`, `ID`, `TYPE`, `SPORT`, `GENDER`) VALUES
('Nike Air Max Pulse', 2500, 2000, 'Nike Air Max Pulse.webp', 'air-max-pulse-womens-shoes-TLnkLm.webp', 'Running shoes', 'grey', 42, 'Shoes', 'Tennis', 'F'),
('Nike Sportswear Tech Fleece', 1500, 1000, 'Nike Sportswear Tech Fleece.webp', 'Nike Sportswear Tech Fleeceback.webp', 'Black Jacket', 'Black', 43, 'Clothing', 'Football', 'F'),
('Air force', 4500, 4000, 'nike-dunk-low-retro.webp', 'nike-dunk-low-retroback.webp', 'Air force shoes', 'White', 44, 'Shoes', 'Basketball', 'M'),
('Nike Solo Swoosh', 2000, 1500, 'Nike Solo Swoosh.webp', 'Nike Solo Swooshback.webp', 'Nike Solo Swoosh Hoodie', 'Beige', 45, 'Clothing', 'Basketball', 'M'),
('Nike Court Vision Low Next Natureback', 6000, 5000, 'JustIn1.jpg', 'Nike Court Vision Low Next Natureback.webp', 'Nike Court Vision Shoes', 'white', 46, 'Shoes', 'Basketball', 'M'),
('Nike Wrestlingback', 2500, 2000, 'JustIn3.jpg', 'Nike Wrestlingback.webp', 'Nike Wrestlingback hoodie', 'black', 47, 'Clothing', 'Basketball', 'M'),
('Nike Air More Uptempo 96', 6300, 6000, 'JustIn2.jpg', 'Nike Air More Uptempo 96back.webp', 'Nike Air More Uptempo 96 shoes', 'white', 48, 'Shoes', 'Basketball', 'M'),
('Nike TC 7900', 6300, 6000, 'JustIn1W.jpg', 'Nike TC 7900back.webp', 'Nike TC 7900 Shoe', 'pink', 49, 'Shoes', 'Basketball', 'F'),
('Nike Sportswear Tech Fleece Windrunner', 3500, 3000, 'JustInW.jpg', 'Nike Sportswear Tech Fleece Windrunner.webp', 'Nike Sportswear Tech Fleece hoodie', 'blue', 50, 'Clothing', 'Football', 'F'),
('Nike Court Vision Low Next Nature', 3500, 3000, 'JustIn3W.jpg', 'Nike Huarache 9 Varsity LAX SEback.webp', 'Nike Court Vision Low Next Nature Shoe', 'white', 51, 'Shoes', 'Football', 'M'),
('Ja', 1500, 1000, 'Ja.webp', 'Jaback.webp', 'Basketball T-shirt', 'blue', 52, 'Clothing', 'Basketball', 'M'),
('Ja Standard Issue', 2000, 1500, 'Ja Standard Issue.webp', 'Ja Standard Issueback.webp', 'Ja Standard Issue pants', 'blue', 53, 'Clothing', 'Basketball', 'M'),
('Nike Dri-FIT Academy', 1500, 1000, 'Nike Dri-FIT Academy.webp', 'Nike Dri-FIT Academyback.webp', 'Nike Dri-FIT Academy shorts', 'ofwhite', 54, 'Clothing', 'Football', 'M'),
('Nike Renew Elevate 3', 4500, 4000, 'Nike Renew Elevate 3.webp', 'Nike Renew Elevate 3back.webp', 'Nike Renew Elevate 3 Shoes', 'pink', 55, 'Shoes', 'Basketball', 'F'),
('NikeCourt Dri-FIT Victory', 1500, 1000, 'NikeCourt Dri-FIT Victory.webp', 'NikeCourt Dri-FIT Victoryback.webp', 'NikeCourt Dri-FIT Victory Tennis', 'pink', 56, 'Clothing', 'Tennis', 'F'),
('Nike Superfly 9 Elite Mercurial Dream Speed', 6000, 5000, 'Nike Superfly 9 Elite Mercurial Dream Speed.webp', 'Nike Superfly 9 Elite Mercurial Dream Speedback.webp', 'Nike Superfly 9 Elite Mercurial Dream Speed', 'red', 57, 'Shoes', 'Football', 'F'),
('Sabrina 1 West Coast Rootsback', 6000, 5000, 'Sabrina 1 West Coast Roots.webp', 'Sabrina 1 West Coast Rootsback.webp', 'Sabrina 1 West Coast Rootsback Shoes', 'pink', 58, 'Shoes', 'Basketball', 'F'),
('Nike Mercurial Superfly 9 Elite', 5000, 4000, 'Nike Mercurial Superfly 9 Elite.webp', 'Nike Mercurial Superfly 9 Eliteback.webp', 'Nike Mercurial Superfly 9 Elite Shoe', 'black', 59, 'Shoes', 'Football', 'M'),
('Nike Phantom Luna Elite', 5000, 4000, 'Nike Phantom Luna Elite.webp', 'Nike Phantom Luna Eliteback.webp', 'Nike Phantom Luna Elite shoes', 'green', 60, 'Shoes', 'Football', 'F'),
('Nike G.T. Cut 2', 2500, 2000, 'Nike G.T. Cut 2.webp', 'Nike G.T. Cut 2back.webp', 'Nike G.T. Cut 2 Shoes', 'pink', 61, 'Shoes', 'Basketball', 'M'),
('Nike Sportswear Club Fleece', 3000, 2500, 'Nike Sportswear Club Fleece.webp', 'Nike Sportswear Club Fleeceback.webp', 'Nike Sportswear Club Fleece', 'red', 62, 'Clothing', 'Tennis', 'F'),
('Nike Sportswear Tech Fleece 1', 1500, 1000, 'Nike Sportswear Tech Fleece1.webp', 'Nike Sportswear Tech Fleece1back.webp', 'Nike Sportswear Tech Fleece pants', 'light blue', 63, 'Clothing', 'Basketball', 'F'),
('Nike Sportswear Phoenix Fleece', 2000, 1500, 'Nike Sportswear Phoenix Fleece.webp', 'Nike Sportswear Phoenix Fleeceback.webp', 'Nike Sportswear Phoenix Fleece', 'light blue', 64, 'Clothing', 'Tennis', 'F'),
('NikeCourt Air Zoom Vapor AJ3', 5000, 4500, 'NikeCourt Air Zoom Vapor AJ3.webp', 'NikeCourt Air Zoom Vapor AJ3back.webp', 'Nike Sportswear Phoenix Fleece', 'white', 65, 'Shoes', 'Basketball', 'F'),
('NikeCourt Air Zoom Vapor 11 Premium', 6000, 5000, 'NikeCourt Air Zoom Vapor 11 Premium.webp', 'NikeCourt Air Zoom Vapor 11 Premiumback.webp', 'NikeCourt Air Zoom Vapor 11 Shoes', 'purpul', 66, 'Shoes', 'Tennis', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FULLNAME` text NOT NULL,
  `ADDRESS` text NOT NULL,
  `EMAIL` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `ITEMSBOUGHT` int(11) NOT NULL,
  `TOTALPRICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FULLNAME`, `ADDRESS`, `EMAIL`, `PASSWORD`, `ITEMSBOUGHT`, `TOTALPRICE`) VALUES
('Ahmed fouad', 'zamalek', 'Email@gmail.com', '12zxZX!\"', 8, 29000),
('amr daba', 'aast', 'aasss@gmail.com', '12zxZX!\"', 1, 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

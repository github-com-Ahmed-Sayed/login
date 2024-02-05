-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 02:51 AM
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
-- Database: `masrhna`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_card`
--

CREATE TABLE `add_card` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Bookig_Price` varchar(50) NOT NULL,
  `Booking_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `Name`, `User_Name`, `Password`, `phone`) VALUES
(10, 'ahmed', 'alkiser2345@gmail.com', '123456789', '01027728181'),
(11, '', '', '25f9e794323b453885f5181f1b624d0b', ''),
(12, '123', '123@gmail.com', '25f9e794323b453885f5181f1b624d0b', '123456789'),
(13, 'ahmed', 'ahmed@gmail.com', '123456789', '101010101011010'),
(14, 'ahmed1', 'ahmed1@gmail.com', '123456789', '10001111111111'),
(15, 'ahmed sayed', 'ahmedSayed@gmail.com', '123456789', '01022222222222222'),
(16, 'ahmed sayed2', 'ahmedsayed2@gmail.com', '123456789', '1000000000000000000'),
(17, 'ahmed234', 'ahmed234@gmail.com', '111111111', '0110011000011');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `log_ID` int(11) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `customer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_ID` int(11) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_cus_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `the_theater`
--

CREATE TABLE `the_theater` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Bookig_Price` varchar(50) NOT NULL,
  `Theater_Address` varchar(450) NOT NULL,
  `Num_Of_Seats` int(11) NOT NULL,
  `Theater_Status` varchar(50) NOT NULL,
  `Lighting` varchar(50) NOT NULL,
  `Wired_Speaker` varchar(50) NOT NULL,
  `Wireless_Speaker` varchar(50) NOT NULL,
  `Sound_System` varchar(50) NOT NULL,
  `Smoke_Machine` varchar(50) NOT NULL,
  `Booking_Date` date NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `the_theater`
--

INSERT INTO `the_theater` (`id`, `name`, `Bookig_Price`, `Theater_Address`, `Num_Of_Seats`, `Theater_Status`, `Lighting`, `Wired_Speaker`, `Wireless_Speaker`, `Sound_System`, `Smoke_Machine`, `Booking_Date`, `image`) VALUES
(15, 'افاق', '', 'في رمسيس', 2000, ' متاح ', ' مجهز ', ' غير مجهز ', ' غير مجهز ', ' مجهز ', ' غير مجهز ', '0000-00-00', 'I.F.T/Picture3.jpg'),
(16, 'جامعة حلوان', '', 'داخل جاملعة حلوان', 3000, ' متاح ', ' مجهز ', ' غير مجهز ', ' مجهز ', ' غير مجهز ', ' مجهز ', '0000-00-00', 'I.F.T/Picture1.jpg'),
(17, 'جامعة عين شمس', '', 'داخل جامعة عين شمس', 4000, ' متاح ', ' مجهز ', ' مجهز ', ' غير مجهز ', ' غير مجهز ', ' مجهز ', '0000-00-00', 'I.F.T/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_card`
--
ALTER TABLE `add_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`log_ID`),
  ADD KEY `index` (`customer_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_ID`),
  ADD KEY `index` (`pay_cus_ID`);

--
-- Indexes for table `the_theater`
--
ALTER TABLE `the_theater`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_card`
--
ALTER TABLE `add_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `the_theater`
--
ALTER TABLE `the_theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

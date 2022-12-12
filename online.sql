-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 09:13 PM
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
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcard`
--

CREATE TABLE `addcard` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `addcard`
--

INSERT INTO `addcard` (`id`, `name`, `price`) VALUES
(17, 'AFRICAN LEATHER', '280$'),
(21, 'AFRICAN LEATHER', '280$'),
(26, 'DAISY LOVE', '1500$'),
(27, 'BLACK OPIUM', '347$');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `name`, `adress`, `email`) VALUES
(1, 'rabaa', 'ombadaa', 'rabaa@gmail.com'),
(2, 'rabaa', 'ombadaa', 'rabaa@gmail.com'),
(3, 'ahmed', 'khartoum', 'ahmed@yahoo.com'),
(4, 'tamador', 'salhaa', 'tamador@gmail.com'),
(5, 'rabaa', 'khartoum', 'rabaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `name`, `price`, `image`) VALUES
(27, 'ABOUT DIGIO', '1000$', 'mg/ABOUT DIGIO.jpg'),
(28, 'AFRICAN LEATHER', '280$', 'mg/AFRICAN LEATHER.jpg'),
(29, 'AZZARO SPORT', '255$', 'mg/AZZARO SPORT.jpg'),
(30, 'BLACK OPIUM', '347$', 'mg/BLACK OPIUM.jpeg'),
(31, 'BVLGARI', '500$', 'mg/BVLGARI.jpg'),
(34, 'DAISY LOVE', '1500$', 'mg/DAISY LOVE.jpg'),
(38, 'TRGSTAN BUL', '243$', 'mg/TRGSTAN BUL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `category`, `content`) VALUES
(2, 'د.ماهر الشريف', 'android ', 'android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android android '),
(3, 'apple', 'covid-19 ', 'covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 covid-19 '),
(4, 'apple', 'heart-disease ', 'heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease heart-disease ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcard`
--
ALTER TABLE `addcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcard`
--
ALTER TABLE `addcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

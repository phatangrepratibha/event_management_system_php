-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 02:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main-cpp-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `Day` text NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Hour` int(7) NOT NULL,
  `Payment` text NOT NULL,
  `Theme` text NOT NULL,
  `Name` longtext NOT NULL,
  `Phone` int(10) NOT NULL,
  `Person` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`Day`, `Date`, `Hour`, `Payment`, `Theme`, `Name`, `Phone`, `Person`, `email`, `latitude`, `longitude`) VALUES
('wednesday', '2023-05-02', 6, 'phone pay', 'Academy Award', 'Prajakta Deogune', 2147483647, 300, 'deoguneprajakta@gmail.com', 37.78134759282186, -122.46872404262945),
('wednesday', '2023-05-02', 6, 'phone pay', 'Academy Award', 'Prajakta Deogune', 2147483647, 300, 'deoguneprajakta@gmail.com', 37.78134759282186, -122.46872404262945),
('wednesday', '2023-05-02', 6, 'phone pay', 'Academy Award', 'Prajakta Deogune', 2147483647, 300, 'deoguneprajakta@gmail.com', 37.77700591838321, -122.43233183071538);

-- --------------------------------------------------------

--
-- Table structure for table `bday`
--

CREATE TABLE `bday` (
  `Day` text NOT NULL,
  `Date` date NOT NULL,
  `Hour` text NOT NULL,
  `Payment` text NOT NULL,
  `Theme` text NOT NULL,
  `Name` longtext NOT NULL,
  `Phone` int(10) NOT NULL,
  `Person` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bday`
--

INSERT INTO `bday` (`Day`, `Date`, `Hour`, `Payment`, `Theme`, `Name`, `Phone`, `Person`, `email`, `latitude`, `longitude`) VALUES
('tuesday', '2023-04-30', '3', 'cash', 'Cartoon', 'Prajakta Deogune', 2147483647, 198, 'deoguneprajakta@gmail.com', 37.78125714525217, -122.46426084682867);

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `Day` text NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Hour` int(7) NOT NULL,
  `Payment` text NOT NULL,
  `Theme` text NOT NULL,
  `Name` longtext NOT NULL,
  `Phone` int(10) NOT NULL,
  `Person` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`Day`, `Date`, `Hour`, `Payment`, `Theme`, `Name`, `Phone`, `Person`, `email`, `latitude`, `longitude`) VALUES
('wednesday', '2023-05-01', 4, 'cash', 'garden', 'Prajakta Deogune', 2147483647, 200, 'deoguneprajakta@gmail.com', 37.76940737452839, -122.49687650844976);

-- --------------------------------------------------------

--
-- Table structure for table `holi`
--

CREATE TABLE `holi` (
  `Day` text NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Hour` int(7) NOT NULL,
  `Payment` text NOT NULL,
  `Theme` text NOT NULL,
  `Name` longtext NOT NULL,
  `Phone` int(10) NOT NULL,
  `Person` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holi`
--

INSERT INTO `holi` (`Day`, `Date`, `Hour`, `Payment`, `Theme`, `Name`, `Phone`, `Person`, `email`, `latitude`, `longitude`) VALUES
('thursday', '2023-04-28', 2, 'credit', 'Banaras Ki Holi theme', 'Prajakta Deogune', 2147483647, 3000, 'deoguneprajakta@gmail.com', 37.766874352354314, -122.44366148159429),
('thursday', '2023-04-28', 2, 'credit', 'Banaras Ki Holi theme', 'Prajakta Deogune', 2147483647, 3000, 'deoguneprajakta@gmail.com', 37.766874352354314, -122.44366148159429);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Day` text NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Hour` int(7) NOT NULL,
  `Payment` text NOT NULL,
  `Theme` text NOT NULL,
  `Name` longtext NOT NULL,
  `Phone` int(10) NOT NULL,
  `Person` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Day`, `Date`, `Hour`, `Payment`, `Theme`, `Name`, `Phone`, `Person`, `email`, `latitude`, `longitude`) VALUES
('wednesday', '2023-04-27', 2, 'cash', 'Formal', 'Prajakta Deogune', 2147483647, 500, 'deoguneprajakta@gmail.com', 37.775920459929445, -122.46426084682867),
('wednesday', '2023-04-27', 2, 'cash', 'Formal', 'Prajakta Deogune', 2147483647, 500, 'deoguneprajakta@gmail.com', 37.775920459929445, -122.46426084682867);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Username` varchar(10) NOT NULL,
  `Email` longtext NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `Email`, `Password`, `Phone`, `Address`) VALUES
('prajakta', 'deoguneprajakta@gmail.com', 'prajakta', 2147483647, 'Ahmednagar'),
('pratibha', '1pratibha234@gmail.com', 'pratibha', 1234567890, 'Ahmednagar'),
('simran', 'simran@gmail.com', 'simaran', 2147483647, 'Akole'),
('taehyung', 'taetae@gmail.com', 'kimtae12', 2147483647, 'sk');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `Day` text NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Hour` int(7) NOT NULL,
  `Payment` text NOT NULL,
  `Theme` text NOT NULL,
  `Name` longtext NOT NULL,
  `Phone` int(10) NOT NULL,
  `Person` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`Day`, `Date`, `Hour`, `Payment`, `Theme`, `Name`, `Phone`, `Person`, `email`, `latitude`, `longitude`) VALUES
('thursday', '2023-05-04', 2, 'phone pay', 'Retro', 'Prajakta Deogune', 2147483647, 600, 'deoguneprajakta@gmail.com', 37.778091360899474, -122.46391752407476);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `Username` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

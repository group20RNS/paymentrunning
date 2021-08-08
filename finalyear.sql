-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `accno` decimal(15,0) NOT NULL,
  `ifsc` varchar(10) NOT NULL,
  `ownername` varchar(30) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `datetime` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`accno`, `ifsc`, `ownername`, `amount`, `datetime`, `email`) VALUES
('12345678912', 'ABC0001', 'ABHISHEK KUMAR', '10000', '11 Jun 2021 - 09:14:11 PM', 'muhammedzabiulla786@gmail.com'),
('789953535890', 'SYN0001', 'Mohammad Atheeq', '10000', '13 Jun 2021 - 12:55:50 PM', 'muhammedzabiulla786@gmail.com'),
('994572044555', 'KAR0001', 'Mohammad Suhail Zamani', '100000', '13 Jun 2021 - 01:01:24 PM', 'mohammedmueez2018@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `mobile`, `addr`, `email`, `password`) VALUES
('MOHAMMED ZABIULLA', 'Male', '7899535358', 'Megalkeri, Channarayapatna-573116  \r\n      ', 'muhammedzabiulla786@gmail.com', '$1$1f4d5f9c$zqwu8mnFy6umkD2bITmlx/'),
('MOHAMMED SUHAIL', 'Male', '6361210536', 'sADASHIVNAGAR tUMKUR  \r\n      ', '1RN17CS051.MOHAMMEDSUHAIL@GMAIL.COM', '$1$1f4d5f9c$zqwu8mnFy6umkD2bITmlx/'),
('Mohammad Fares Mehdi J', 'Male', '9035580697', 'Guruppanpalya BTM Banglore-560029\r\n      ', 'mohammedmueez2018@gmail.com', '$1$1f4d5f9c$zqwu8mnFy6umkD2bITmlx/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 06:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `email` varchar(50) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(50) NOT NULL,
  `spot_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`email`, `username`, `password`, `spot_number`) VALUES
('email@s.12', 'test123', 'Password123', 7),
('fojwe10@fjo,', 'testaccount10', 'Password123', 13),
('fojwe11@fjo,', 'testaccount11', 'Password123', 14),
('fojwe12@fjo,', 'testaccount12', 'Password123', 15),
('fojwe1@fjo,', 'testaccount1', 'Password123', 3),
('fojwe2@fjo,', 'testaccount2', 'Password123', 4),
('fojwe3@fjo,', 'testaccount3', 'Password123', 5),
('fojwe4@fjo,', 'testaccount4', 'Password123', 6),
('fojwe5@fjo,', 'testaccount5', 'Password123', 8),
('fojwe6@fjo,', 'testaccount6', 'Password123', 9),
('fojwe7@fjo,', 'testaccount7', 'Password123', 10),
('fojwe8@fjo,', 'testaccount8', 'Password123', 11),
('fojwe9@fjo,', 'testaccount9', 'Password123', 12),
('fojwe@fjo,', 'testaccount1', 'Password123', 2),
('thisisanemail.l.l', 'hopethisworks', 'Password123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

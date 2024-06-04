-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 01:10 AM
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
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce_tbl`
--

CREATE TABLE `announce_tbl` (
  `announcement` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members_tbl`
--

CREATE TABLE `members_tbl` (
  `memberID` int(255) UNSIGNED NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNum` varchar(255) DEFAULT NULL,
  `unitAdd` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `userType` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members_tbl`
--

INSERT INTO `members_tbl` (`memberID`, `lastname`, `firstname`, `email`, `phoneNum`, `unitAdd`, `password`, `userType`) VALUES
(1, 'sa', 'saa', 'sasa@gmail.com', '12', NULL, '$2y$10$YafFUmccOj0tCM5sHEgYEu89lbhzYUeqZtvPE614JCmWRJxu8i7li', 'user'),
(2, 'qq', 'qw', 'qw@p.com', '1', NULL, '$2y$10$p3N5vCvDdc5yNgpNe0cb.eySxHuIUY7TdsNLWkZgn/p46/rPfvEcK', 'user'),
(3, NULL, NULL, 'admin', NULL, NULL, '1234', 'admin'),
(4, 'Cena', 'John', 'cenaa@gmail.com', '09211113', NULL, '$2y$10$E4LDvuLTXQYn1h3Tbwa7GOEW2sHa7JahGo2Oa/gGc46FnpB9sQe3m', 'user'),
(5, 'de', 'sa', 'sa@p.com', '123', NULL, '$2y$10$izWHfDyvRtMstBaZhEkcs.Q5MspN8mCbdR0F.uQLfuJWa5YRr/2.O', 'user'),
(6, 'da', 'la', 'lada@gmail.com', '0912345678', NULL, '$2y$10$yCM1IU7QQvAraohQcAtReOmM2yBpngEGbjwhNe7GKdbwt2P0G3CkC', 'user'),
(7, 'mirai', 'raimi', 'raimi@g.com', '012345', NULL, '$2y$10$3HTRxTPrnnpGnWjKABgEzuRRCuYjR4xy5Ul.6ValxHM8R7pz7Uo5S', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members_tbl`
--
ALTER TABLE `members_tbl`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members_tbl`
--
ALTER TABLE `members_tbl`
  MODIFY `memberID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

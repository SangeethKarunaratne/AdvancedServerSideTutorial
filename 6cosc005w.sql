-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2019 at 06:58 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6cosc005w`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ebe46a59d1a67a2373dfcd74068ade366641756b', '::1', 1573449548, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333434393534383b),
('5b7b52810eda4a4609f65d5f6924c6a12e94a589', '::1', 1573450448, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333435303434383b),
('d507ab039d5e437f12bde8f8cbae800c45104c6a', '::1', 1573450793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333435303739333b73657373696f6e446174617c613a323a7b733a383a22757365726e616d65223b733a32323a2273616e67656574683134336b40676d61696c2e636f6d223b733a393a226c6f676765645f696e223b623a313b7d),
('0202da3a2a286cae4320f9456a83a41e58a3d4a7', '::1', 1573451093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333435303739333b73657373696f6e446174617c613a333a7b733a393a22757365725f6e616d65223b733a31393a2273616e67656574687340676d61696c2e636f6d223b733a393a226c6f676765645f696e223b623a313b733a31303a2273657373696f6e5f6964223b733a34303a2230323032646133613261323836636165343332306639343536613833613431653538613364346137223b7d),
('f7c23f55071d8bdeaf3fc4ad98b9bea0bfef3f1f', '::1', 1573451637, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333435313633373b73657373696f6e446174617c613a333a7b733a393a22757365725f6e616d65223b733a32363a2273616e6765657468317373737334336b40676d61696c2e636f6d223b733a393a226c6f676765645f696e223b623a313b733a31303a2273657373696f6e5f6964223b733a34303a2266376332336635353037316438626465616633666334616439386239626561306266656633663166223b7d),
('3cd2aea6fba28a16a2715bfce6e6891a264513a7', '::1', 1573451790, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333435313633373b);

-- --------------------------------------------------------

--
-- Table structure for table `Movies`
--

CREATE TABLE `Movies` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Director` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `IMDBrating` varchar(255) NOT NULL,
  `ReleaseYear` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Movies`
--

INSERT INTO `Movies` (`Id`, `Title`, `Director`, `Genre`, `IMDBrating`, `ReleaseYear`) VALUES
(2, 'The Terminator', 'James Cameron', 'Action', '8', '1984-00-00'),
(3, 'Terminator 2: Judgment Day', 'James Cameron', 'Action', '8.5', '1991-07-01'),
(4, 'Terminator 3: Rise of the Machines', 'Jonathan Mostow', 'Action', '6.3', '2003-06-30'),
(5, 'Terminator Salvation', 'McG', 'Action', '6.3', '2009-05-14'),
(6, 'Terminator Genisys', 'Alan Taylor', 'Action', '6.4', '2015-06-25'),
(7, 'Terminator: Dark Fate', 'Tim Miller', 'Action', '6.5', '2019-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `ToDoActions`
--

CREATE TABLE `ToDoActions` (
  `Id` int(11) NOT NULL,
  `UserId` varchar(255) NOT NULL,
  `ActionTitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ToDoActions`
--

INSERT INTO `ToDoActions` (`Id`, `UserId`, `ActionTitle`) VALUES
(6, 'UserId01', 'Complete Tutorial 01'),
(7, 'UserId02', 'Complete Tutorial 02'),
(8, 'UserId03', 'Complete Tutorial 03'),
(9, 'UserId04', 'Complete Tutorial 04'),
(10, 'UserId05', 'Complete Tutorial 05');

-- --------------------------------------------------------

--
-- Table structure for table `todoActions`
--
-- Error reading structure for table 6cosc005w.todoActions: #1932 - Table '6cosc005w.todoActions' doesn't exist in engine
-- Error reading data for table 6cosc005w.todoActions: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `6cosc005w`.`todoActions`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ToDoActions`
--
ALTER TABLE `ToDoActions`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Movies`
--
ALTER TABLE `Movies`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ToDoActions`
--
ALTER TABLE `ToDoActions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
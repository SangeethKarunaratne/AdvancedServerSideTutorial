-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2019 at 07:38 PM
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
-- Table structure for table `todoActions`
--
-- Error reading structure for table 6cosc005w.todoActions: #1932 - Table '6cosc005w.todoActions' doesn't exist in engine
-- Error reading data for table 6cosc005w.todoActions: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `6cosc005w`.`todoActions`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Movies`
--
ALTER TABLE `Movies`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

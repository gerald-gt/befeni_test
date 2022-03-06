-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2022 at 04:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `befeni_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `shirt_table`
--

CREATE TABLE `shirt_table` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `fabric_id` int(11) DEFAULT NULL,
  `colar_size` int(11) DEFAULT NULL,
  `waist_size` int(11) DEFAULT NULL,
  `wrest_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirt_table`
--

INSERT INTO `shirt_table` (`id`, `customer_id`, `fabric_id`, `colar_size`, `waist_size`, `wrest_size`) VALUES
(1, 1, 2, 34, 34, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shirt_table`
--
ALTER TABLE `shirt_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shirt_table`
--
ALTER TABLE `shirt_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

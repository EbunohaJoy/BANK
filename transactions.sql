-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 11:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `swiftcode` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `status`, `account_name`, `account_number`, `amount`, `description`, `swiftcode`, `bank_name`) VALUES
(3, '4', 'local_transfer', 'Ebunoha joy', 'J12032140', '5,000', 'for food', '', 'zenit'),
(4, '4', 'wire_transfer', 'karyn baby', '23456784g', '400', 'transport', '132asD3W23', ' uba'),
(5, '3', 'local_transfer', 'tabella', '1234657687', '200', 'reading books', '', 'fidelity'),
(6, '6', 'local_transfer', 'Ebunoha joy', 'J12032140', '5,000', 'for food', '', 'zenit'),
(7, '6', 'local_transfer', 'Ebunoha joy', 'J12032140', '5,000', 'for food', '', 'zenit'),
(8, '6', 'local_transfer', 'karyn baby', '23456784g', '5000', 'transport', '', 'fidelity'),
(9, '6', 'wire_transfer', 'Ebunoha joy', 'J12032140', '200', 'xcvbnm,.', '', 'fidelity'),
(10, '10', 'local_transfer', 'karyn baby', 'J12032140', '5000', 'cvbhnjm,l', '', 'zenit'),
(11, '10', 'local_transfer', 'tabella', '23456784g', '200', 'transport', '', 'fidelity'),
(12, '6', 'wire_transfer', 'srdgfthjkn', '23456784g', '800', 'transport', '', ' uba'),
(13, '10', 'credited', 'Administrator', '2147483647', '200', '', '', 'Freedom Guaranteed trust Bank');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 11:24 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ref` varchar(100) NOT NULL DEFAULT '00refId00',
  `user_type` varchar(11) NOT NULL DEFAULT '0',
  `phonenumber` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(100) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `account_number` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `transaction_pin` int(11) NOT NULL,
  `avarter` text NOT NULL DEFAULT '1.png',
  `account_balance` varchar(100) NOT NULL DEFAULT '0',
  `account_status` varchar(100) NOT NULL DEFAULT 'active',
  `total_debit` int(100) NOT NULL,
  `total_credited` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `ref`, `user_type`, `phonenumber`, `address`, `state`, `account_type`, `country`, `account_number`, `date`, `transaction_pin`, `avarter`, `account_balance`, `account_status`, `total_debit`, `total_credited`) VALUES
(4, 'mummy', 'dudududu', 'Anthony23@gmail.com', '$2y$10$kk3DLdxENV8DbV6EvgzkoeU5OQ/.AMTSKuVf6C6/SLq8pKgcGX3Um', '2345658', '1', '9016550695', 'enugu', 'New Mexico', '40013', 'United', 2147483647, '2022-10-17 08:38:38', 777777777, '1.png', '0', 'active', 0, 0),
(6, 'tabella', 'joy', 'tab@mail.com', '$2y$10$FJLaNQAUuEojN5Pz9l3./uCLZEfzrsJVz836p99sWm/tPv7anj9me', '2345658', '0', '9016550695', 'enugu', 'New Mexico', 'savings_account', 'United', 417659105, '2022-10-25 20:56:23', 12345, '1.png', '14000', 'freezed', 0, 0),
(10, 'remy414', 'remy414', 'parkerbryan414@gmail.com', '$2y$10$3z/XPi.J.hQZ.6SSZ./daemUBKe4c1nVsL7VNAoW.Gv3DOg510LAe', '2345658', '0', '9016550695', 'enugu', 'New Mexico', 'savings_account', 'United States', 1364203164, '2022-10-30 00:59:04', 123456, '1.png', '5000', 'active', 200, 200),
(11, 'salle', 'baby', 'salle@mail.com', '$2y$10$l9JITwaUiDmLygZku2UhS.eVy.OkgNlh.utRuNtR1cQH4Lk7Ugsrm', '00refId00', '0', '9016550695', 'enugu', 'New Mexico', 'savings_account', 'United States', 1049710283, '2022-11-01 10:10:53', 2003, '1.png', '0', 'active', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

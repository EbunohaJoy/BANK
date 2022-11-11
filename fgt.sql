-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 08:53 AM
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
  `phonenumber` varchar(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `avarter` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `ref`, `user_type`, `phonenumber`, `address`, `state`, `zipcode`, `country`, `language`, `currency`, `avarter`, `date`) VALUES
(1, 'remy414', 'remy414', 'parkerbryan414@gmail.com', '0', '2345658', '0', '', '', '', '', '', '', '', '1.png', '2022-10-17 07:49:51'),
(2, 'Joy', 'pally', 'migen@gmail.com', '$2y$10$KUaY64Snj7ffP8fJI2SYHO3b20M0Rj1RE6lt48Dp9hsdOglbsiBTy', '2345658', '0', '9016550695', 'updatedenugu', ' updatedNew Mexico', '40013', 'United', 'de', 'bitcoin', '1.png', '2022-10-17 07:49:51'),
(3, 'tabella', 'namcy', 'tab@mail.com', '$2y$10$Lea9Lp0CjTfHwCOFpKfMDe56Nb/jwqts6es9zUuMqyECI0l2ZDs0e', '2345658', '0', '112345', 'updated 2', 'updated 2', 'update', 'update', 'de', 'usd', '1.png', '2022-10-17 07:49:51'),
(4, 'mummy', 'dudududu', 'Anthony23@gmail.com', '$2y$10$kk3DLdxENV8DbV6EvgzkoeU5OQ/.AMTSKuVf6C6/SLq8pKgcGX3Um', '2345658', '0', '', '', '', '', '', '', '', 'DSC_2692.jpg', '2022-10-17 08:38:38');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

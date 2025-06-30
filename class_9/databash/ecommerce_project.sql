-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2025 at 02:25 AM
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
-- Database: `ecommerce_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `token`, `role`, `status`) VALUES
(6, 'Rakibul Hasen', 'rakibul@gmail.com', '$2y$10$5hrdJqKpEwEDkPgC2FVZ7.egFPIGwrUjjOMhVENO.R8e0erRzqgqm', 'b4cb4447e77657977d4c42c48d203edd7a14872cee6607edaf2b86f75b207eac87957537dcc4de944dd5b8e11d3770ceda41', 'Super Admin', 'Active'),
(7, 'sykupy', 'pylelyxati@mailinator.com', '$2y$10$H.xhNJ6LYuWnxMz0uTpkj.D6U7TG6HHgVYkq.6lZL7P6LDen0gUTG', NULL, 'Admin', 'Active'),
(9, 'nerose', 'ruxot@mailinator.com', '$2y$10$H.xhNJ6LYuWnxMz0uTpkj.D6U7TG6HHgVYkq.6lZL7P6LDen0gUTG', NULL, 'Moderator', 'Active'),
(10, 'pinozilu', 'zizopy@mailinator.com', '$2y$10$vZOmij9JTX1JrF0oSTEV.ezQV35xs7SoPD0ltYlUWT0j9r3HgB2R6', NULL, 'Admin', 'Inactive'),
(11, 'tufoduci', 'fekyvyx@mailinator.com', '$2y$10$7r4oy8FDBO5rCllNaQrx9OOxKKQ9ZifAWQ8.IoCdY.ulWVHuOR7Jm', NULL, 'Admin', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

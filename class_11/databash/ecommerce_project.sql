-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 02:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `phone` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `country`, `photo`, `token`, `role`, `status`) VALUES
(1, 'Rakibul Hasen', 'rakibul@gmail.com', '$2y$10$OBLJWQe4wVpBHXRC5tzUF.QZeD28n3kwsc2ttJHIc7MYjEa6olxQi', '019235541', 'Venezuela', 'images/admin.jpg', NULL, 'Super Admin', 'Active'),
(7, 'sykupy', 'pylelyxati@mailinator.com', '$2y$10$H.xhNJ6LYuWnxMz0uTpkj.D6U7TG6HHgVYkq.6lZL7P6LDen0gUTG', '015485122545', 'Russia', 'images/download.jpg', NULL, 'Admin', 'Active'),
(9, 'Nerose', 'ruxot@mailinator.com', '$2y$10$GVICWVImFOWPqT0cey/hjepLzgmoN/lBKXWdg/Ux2qx2Lg29x.hbO', '', 'Armenia', '', NULL, 'Moderator', 'Active'),
(10, 'Pinozilu', 'zizopy@mailinator.com', '$2y$10$K6WnpVYH6IIxv7oKZKG8kuAsjAQwZzFQIfQhw6kIZZCUdQ4zipug6', '', 'Armenia', '', NULL, 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `item_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `photo`, `item_order`) VALUES
(2, 'Weman Bag', 'images/37.jpg', 3),
(3, 'Man Bag', 'images/32.jpg', 5),
(4, 'Travel Bag', 'images/34.jpg', 7),
(5, 'Cary Up bag', 'images/38.jpg', 9),
(6, 'IT carey bag', 'images/1.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `token`, `status`) VALUES
(1, 'Jamal', 'jamal@gmail.com', '', '', '$2y$10$fVn4Xmc.tj0zLPd8F6mbtezLwHKk41Nm5uZtj6de7ANdC9WQ4CTqW', '', 'Active'),
(2, 'Habib', 'habib@gmail.com', '01923551941', 'Sherpur', '$2y$10$1OgFQg4NPjUqHgUrKbrLc.x9x6EGZ0EtxyzPE3xYRYYHzyhj3ytmm', '', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

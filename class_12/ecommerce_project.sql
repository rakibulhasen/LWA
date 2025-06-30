-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2025 at 11:46 AM
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
(1, 'Rakibul Hasen', 'rakibul@gmail.com', '$2y$10$OBLJWQe4wVpBHXRC5tzUF.QZeD28n3kwsc2ttJHIc7MYjEa6olxQi', '019235541', 'Venezuela', 'images/2.jpg', NULL, 'Super Admin', 'Active'),
(7, 'sykupy', 'pylelyxati@mailinator.com', '$2y$10$H.xhNJ6LYuWnxMz0uTpkj.D6U7TG6HHgVYkq.6lZL7P6LDen0gUTG', '015485122545', 'Russia', 'images/download.jpg', NULL, 'Admin', 'Active'),
(9, 'Nerose', 'ruxot@mailinator.com', '$2y$10$GVICWVImFOWPqT0cey/hjepLzgmoN/lBKXWdg/Ux2qx2Lg29x.hbO', '', 'Armenia', '', NULL, 'Moderator', 'Active'),
(10, 'Pinozilu', 'zizopy@mailinator.com', '$2y$10$K6WnpVYH6IIxv7oKZKG8kuAsjAQwZzFQIfQhw6kIZZCUdQ4zipug6', '', 'Armenia', '', NULL, 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `item_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `item_order`) VALUES
(2, 'Weman Bag', 'images/39.jpg', 88),
(3, 'Man Bag', 'images/32.jpg', 5),
(4, 'Travel Bag', 'images/34.jpg', 111),
(5, 'Cary Up bag', 'images/38.jpg', 9),
(6, 'IT carry bag', 'images/1.jpg', 12),
(8, 'Kylie Kline', 'images/27.jpg', 44),
(9, 'Lesley Burton', 'images/1748857096.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured_photo` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `regular_price` decimal(10,2) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sku` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `capacity` varchar(100) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL,
  `pocket` varchar(100) DEFAULT NULL,
  `water_resistance` varchar(100) DEFAULT NULL,
  `warranty` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `featured_photo`, `name`, `slug`, `quantity`, `regular_price`, `sale_price`, `short_description`, `description`, `sku`, `size`, `color`, `capacity`, `weight`, `pocket`, `water_resistance`, `warranty`) VALUES
(5, 2, 'product_f_1749100796.jpg', 'Accesories Lather bag', 'accesories-lather-bag', 23, '32.00', '24.00', 'Volumus aliquando sea te. Per partem perfecto appellantur ei. Legere volumus pri ne. Eu cum case etiam, dicat solet omittam ei ius. Usu novum accumsan ut, cu honestatis definitiones vim, vis rebum atqui saperet cu. At consul persius vel, id pri dignissim ullamcorper, duo cu invidunt mediocrem.', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, vidit senserit <span style=\"text-decoration: underline;\">pri ut, dolor eripuit detraxit et qui, mei duis graeco inermis in. Eligendi verterem voluptatibus ut vel. Vim periculis abhorreant constituto eu, aliquid laboramus ne per. An scripta erroribus cum, ne zril veritus pro, ne vis saepe </span>quaeque ceteros.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Ex cum impetus vidisse labitur, omnis noluisse<strong> ut pro. Indoc</strong>tum patrioque assentior qui eu. An veri postulant honestatis pro, cu nihil saepe dicant sea, usu paulo dicunt inimicus ei. Exerci aeterno intellegam eu vix, eius admodum ne sed. Antiopam laboramus constituam est eu, vim affert oratio voluptaria in. Ex duo copiosae inimicus, ut est sonet quaeque.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Id eam vitae soluta explicari, quo delectus reprimique complectitur ad. Quot debet quodsi ea vis, adolescens definiebas disputando nec et. Eam graecis accusam assentior in. Nam amet iriure eleifend at, cum soleat nominati an, nam mentitum percipit ut. Dicta iuvaret id sed, an mei graeci dissentias. Facer minim inciderint sit at, ad qui possim patrioque sententiae.</p>', 'HK102', '20 Inch', 'Red, Blue, White', '30 Liters', '1.8 lbs (0.8 kg)', '5 Total (Including Hidden RFID Pocket)', 'Light Rain-Resistant (Not Submersible)', '1-Year Manufacturing Defects'),
(6, 3, 'product_f_1749100975.jpg', 'Latifah Cotton', 'latifah-cotton', 0, '33.00', '33.00', 'Deserunt modi et sin', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, vidit senserit pri ut, dolor eripuit detraxit et qui, mei duis graeco inermis in. Eligendi verterem voluptatibus ut vel. Vim periculis abhorreant constituto eu, aliquid laboramus ne per. An scripta erroribus cum, ne zril veritus pro, ne vis saepe quaeque ceteros.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Ex cum impetus vidisse labitur, omnis noluisse ut pro. Indoctum patrioque assentior qui eu. An veri postulant honestatis pro, cu nihil saepe dicant sea, usu paulo dicunt inimicus ei. Exerci aeterno intellegam eu vix, eius admodum ne sed. Antiopam laboramus constituam est eu, vim affert oratio voluptaria in. Ex duo copiosae inimicus, ut est sonet quaeque.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Id eam vitae soluta explicari, quo delectus reprimique complectitur ad. Quot debet quodsi ea vis, adolescens definiebas disputando nec et. Eam graecis accusam assentior in. Nam amet iriure eleifend at, cum soleat nominati an, nam mentitum percipit ut. Dicta iuvaret id sed, an mei graeci dissentias. Facer minim inciderint sit at, ad qui possim patrioque sententiae.</p>', 'SK3932', '19 INC', 'Black, White', '20 Liters', '1.0kg', '3 total', 'Light resistance', '1-Year Manufacturing'),
(7, 3, 'product_f_1749183268.jpg', 'Black Backpack', 'black-backpack', 0, '1234.00', '1123.00', 'Volumus aliquando sea te. Per partem perfecto appellantur ei. Legere volumus pri ne. Eu cum case etiam, dicat solet omittam ei ius. Usu novum accumsan ut, cu honestatis definitiones vim, vis rebum atqui saperet cu. At consul persius vel, id pri dignissim ullamcorper, duo cu invidunt mediocrem.', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, vidit senserit pri ut, dolor eripuit detraxit et qui, mei duis graeco inermis in. Eligendi verterem voluptatibus ut vel. Vim periculis abhorreant constituto eu, aliquid laboramus ne per. An scripta erroribus cum, ne zril veritus pro, ne vis saepe quaeque ceteros.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Ex cum impetus vidisse labitur, omnis noluisse ut pro. Indoctum patrioque assentior qui eu. An veri postulant honestatis pro, cu nihil saepe dicant sea, usu paulo dicunt inimicus ei. Exerci aeterno intellegam eu vix, eius admodum ne sed. Antiopam laboramus constituam est eu, vim affert oratio voluptaria in. Ex duo copiosae inimicus, ut est sonet quaeque.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Id eam vitae soluta explicari, quo delectus reprimique complectitur ad. Quot debet quodsi ea vis, adolescens definiebas disputando nec et. Eam graecis accusam assentior in. Nam amet iriure eleifend at, cum soleat nominati an, nam mentitum percipit ut. Dicta iuvaret id sed, an mei graeci dissentias. Facer minim inciderint sit at, ad qui possim patrioque sententiae.</p>', '32423', '23 inc', 'Black, white', '4 kg', '4 kg', '4 pockets', 'Water Resistance', '2 years'),
(10, 3, 'product_f_1749183399.jpg', 'Lady Handbag', 'lady-handbag', 3, '434.00', '232.00', 'Volumus aliquando sea te. Per partem perfecto appellantur ei. Legere volumus pri ne. Eu cum case etiam, dicat solet omittam ei ius. Usu novum accumsan ut, cu honestatis definitiones vim, vis rebum atqui saperet cu. At consul persius vel, id pri dignissim ullamcorper, duo cu invidunt mediocrem.', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, vidit senserit pri ut, dolor eripuit detraxit et qui, mei duis graeco inermis in. Eligendi verterem voluptatibus ut vel. Vim periculis abhorreant constituto eu, aliquid laboramus ne per. An scripta erroribus cum, ne zril veritus pro, ne vis saepe quaeque ceteros.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Ex cum impetus vidisse labitur, omnis noluisse ut pro. Indoctum patrioque assentior qui eu. An veri postulant honestatis pro, cu nihil saepe dicant sea, usu paulo dicunt inimicus ei. Exerci aeterno intellegam eu vix, eius admodum ne sed. Antiopam laboramus constituam est eu, vim affert oratio voluptaria in. Ex duo copiosae inimicus, ut est sonet quaeque.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-family: Poppins, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Id eam vitae soluta explicari, quo delectus reprimique complectitur ad. Quot debet quodsi ea vis, adolescens definiebas disputando nec et. Eam graecis accusam assentior in. Nam amet iriure eleifend at, cum soleat nominati an, nam mentitum percipit ut. Dicta iuvaret id sed, an mei graeci dissentias. Facer minim inciderint sit at, ad qui possim patrioque sententiae.</p>', '3242', '23 inc', 'Black, white', '4 kg', '4 kg', '4 pockets', 'Water Resistance', '2 years'),
(11, 8, 'product_f_1750209224.jpg', 'Odysseus Barr', 'fulton-ballard', 21, '221.00', '200.00', 'I’ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.\r\n\r\nCould you please confirm if this works as expected?', '<p data-start=\"136\" data-end=\"377\">I&rsquo;ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"379\" data-end=\"430\">Could you please confirm if this works as expected?</p>', 'D3234', '32', 'Black', '4kg', '32kg', '5 Pockets', 'Water Resistence', '1 Year'),
(12, 3, 'product_f_1750209314.jpg', 'Travel Shoses ', 'travel-shoses', 21, '221.00', '200.00', 'I’ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.\r\n\r\nCould you please confirm if this works as expected?', '<p data-start=\"136\" data-end=\"377\">I&rsquo;ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"379\" data-end=\"430\">Could you please confirm if this works as expected?</p>', 'D3233', '32', 'Black', '4kg', '32kg', '5 Pockets', 'Water Resistence', '1 Year'),
(13, 4, 'product_f_1750209373.jpg', 'Travel Watch', 'travel-watch', 21, '225.00', '200.00', 'I’ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.\r\n\r\nCould you please confirm if this works as expected?', '<p data-start=\"136\" data-end=\"377\">I&rsquo;ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"379\" data-end=\"430\">Could you please confirm if this works as expected?</p>', 'D3236', '32', 'Black', '4kg', '32kg', '5 Pockets', 'Water Resistence', '1 Year'),
(14, 3, 'product_f_1750209408.jpg', 'Desktop Table', 'desktop-table', 21, '434.00', '232.00', 'I’ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.\r\n\r\nCould you please confirm if this works as expected?', '<p data-start=\"136\" data-end=\"377\">I&rsquo;ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"379\" data-end=\"430\">Could you please confirm if this works as expected?</p>', 'D323234', '32', 'Black', '4kg', '32kg', '5 Pockets', 'Water Resistence', '1 Year'),
(15, 9, 'product_f_1750209481.jpg', 'Office Sofa', 'office-sofa', 21, '434.00', '232.00', 'I’ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.\r\n\r\nCould you please confirm if this works as expected?', '<p data-start=\"136\" data-end=\"377\">I&rsquo;ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"379\" data-end=\"430\">Could you please confirm if this works as expected?</p>', 'D33', '32', 'Black', '4kg', '32kg', '5 Pockets', 'Water Resistence', '1 Year'),
(16, 8, 'product_f_1750209588.jpg', 'Desk Chare', 'desk-chare', 21, '434.00', '232.00', 'I’ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.\r\n\r\nCould you please confirm if this works as expected?', '<p data-start=\"136\" data-end=\"377\">I&rsquo;ve duplicated the form used on the homepage in order to change the bottom color to black. Since we use the same form for both the homepage and the Copier page, duplication was necessary to apply the change without affecting the other page.</p>\r\n<p>&nbsp;</p>\r\n<p data-start=\"379\" data-end=\"430\">Could you please confirm if this works as expected?</p>', 'D339', '32', 'Black', '4kg', '32kg', '5 Pockets', 'Water Resistence', '1 Year');

-- --------------------------------------------------------

--
-- Table structure for table `product_photos`
--

CREATE TABLE `product_photos` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_photos`
--

INSERT INTO `product_photos` (`id`, `product_id`, `photo`) VALUES
(2, '6', 'product_f_1749105190.jpg'),
(3, '5', 'product_1749119635.jpg'),
(4, '6', 'product_1749120140.jpg'),
(5, '5', 'product_1749119645.jpg'),
(8, '7', 'product_1749433001.jpg'),
(9, '7', 'product_1749433006.jpg'),
(10, '7', 'product_1749433011.jpg'),
(11, '7', 'product_1749433017.jpg'),
(12, '7', 'product_1749433023.jpg');

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
(2, 'Habib', 'habib@gmail.com', '01923551941', 'Sherpur', '$2y$10$1OgFQg4NPjUqHgUrKbrLc.x9x6EGZ0EtxyzPE3xYRYYHzyhj3ytmm', '', 'Active'),
(3, 'Jubair', 'jubair@gmail.com', '0124545', 'Sherpur', '1234', NULL, 'Inactive'),
(4, 'Hilel Anderson', 'caxamekyky@mailinator.com', '01245544', 'Sherpur, Sreebordi', '$2y$10$SWyv7.gWifkW8e.ev7x31uwrzePhVu1N87dN12G5XyUpjsJE8WRCS', '', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `product_photos`
--
ALTER TABLE `product_photos`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_photos`
--
ALTER TABLE `product_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

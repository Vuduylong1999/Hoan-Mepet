-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 03:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mepet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `product_id` int(11) NOT NULL,
  `cate-1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate-2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate-3` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `img_link` varchar(100) DEFAULT NULL,
  `cate-animal` varchar(20) DEFAULT NULL,
  `cate-type` varchar(20) DEFAULT NULL,
  `cate-detail` varchar(20) DEFAULT NULL,
  `brand` varchar(20) NOT NULL,
  `sold` int(11) NOT NULL,
  `rate` double NOT NULL,
  `content` text DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `amount`, `img_link`, `cate-animal`, `cate-type`, `cate-detail`, `brand`, `sold`, `rate`, `content`, `addtime`) VALUES
(1, 'Royal Cannin Exigent Cats', '24.83', 100, 'product1.jpg', NULL, NULL, '', '', 24, 1.3, NULL, '2021-01-20 06:56:54'),
(2, 'Cages & Transport', '41.39', 100, 'product2.jpg', NULL, NULL, NULL, '', 38, 3.5, '', '2021-01-20 06:57:21'),
(3, 'Pet Bowl Affiliate', '15.09', 100, 'product3.jpg', NULL, NULL, NULL, '', 45, 2.3, NULL, '2021-01-20 06:57:49'),
(4, 'Toys For Cats Simple', '9.20', 100, 'product4.jpg', NULL, NULL, NULL, '', 92, 4.6, NULL, '2021-01-20 06:58:02'),
(5, 'Dog Shower Gel', '12.14', 100, 'product5.jpg', NULL, NULL, NULL, '', 317, 0.4, NULL, '2021-01-20 06:58:18'),
(6, 'Coat For Dogs', '22.76', 100, 'product6.jpg', NULL, NULL, NULL, '', 432, 2.7, NULL, '2021-01-20 06:58:37'),
(7, 'Royal Cannin Exigent Cats Video', '23.21', 100, 'product7.jpg', NULL, NULL, NULL, '', 43, 3.5, NULL, '2021-01-20 06:58:55'),
(8, 'Royal Cannin Exigent Cats', '40.93', 100, 'product8.jpg', NULL, NULL, NULL, '', 146, 2.1, NULL, '2021-01-20 06:59:14'),
(9, 'Veterinary Diet Canine', '60.37', 100, 'product9.jpg', NULL, NULL, NULL, '', 542, 2.5, NULL, '2021-01-20 06:59:28'),
(10, 'Rocco Classic', '25.13', 100, 'product10.jpg', NULL, NULL, NULL, '', 62, 2.6, NULL, '2021-01-20 06:59:43'),
(11, 'Pedigree Dentastix', '22.82', 100, 'product11.jpg', NULL, NULL, NULL, '', 68, 4.1, NULL, '2021-01-20 06:59:59'),
(12, 'Shower Gel Boosted Sale', '16.41', 100, 'product12.jpg', NULL, NULL, NULL, '', 528, 3.9, NULL, '2021-01-20 07:00:17'),
(13, 'Pet Clothes', '38.25', 100, 'product13.jpg', NULL, NULL, NULL, '', 767, 4.6, NULL, '2021-01-20 07:00:34'),
(14, 'Wet Cat Food', '34.79', 100, 'product14.jpg', NULL, NULL, NULL, '', 182, 4.2, NULL, '2021-01-20 07:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `star` int(1) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop_order`
--

CREATE TABLE `shop_order` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `amount` decimal(15,0) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop_order_detail`
--

CREATE TABLE `shop_order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `amount` decimal(15,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `whistlist`
--

CREATE TABLE `whistlist` (
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rate_userlogin` (`user_id`),
  ADD KEY `FK_rate_products` (`product_id`);

--
-- Indexes for table `shop_order`
--
ALTER TABLE `shop_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_order_detail`
--
ALTER TABLE `shop_order_detail`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_sod_products` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `FK_rate_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `FK_rate_userlogin` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `shop_order_detail`
--
ALTER TABLE `shop_order_detail`
  ADD CONSTRAINT `FK_orderid_shoporder` FOREIGN KEY (`order_id`) REFERENCES `shop_order` (`id`),
  ADD CONSTRAINT `FK_sod_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 07:50 PM
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
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` date NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `status`, `created`, `description`, `category_id`, `img`) VALUES
(1, 'Tivi 1', 20, 4, 1, '2021-07-13', 'good', 1, 'shirt.jpg'),
(2, 'Tivi 2', 63, 15, 0, '2020-08-11', 'good', 1, 'shirt4.jpg'),
(3, 'Laptop 1', 24, 12, 1, '2021-08-12', 'good', 2, 'shirt.jpg'),
(4, 'Laptop 2', 60, 34, 1, '2020-08-12', 'good', 2, 'shirt4.jpg'),
(5, 'Laptop 3', 23, 27, 0, '2020-08-17', 'good', 3, 'shirt3.webp'),
(6, 'Computer 1', 4.5, 2, 1, '2021-08-20', 'ABC', 3, 'shirt.jpg'),
(7, 'Computer 2', 111, 222, 1, '2021-09-25', 'AAA', 7, 'shirt3.webp'),
(8, 'Computer 3', 33333, 888, 0, '2021-10-11', 'abc', 2, 'shirt4.jpg'),
(9, 'ABC', 20, 4, 1, '2021-07-12', 'good', 7, 'shirt.jpg'),
(10, 'ABC', 20, 4, 1, '2021-07-12', 'good', 7, 'shirt3.webp'),
(11, 'ABC', 20, 4, 1, '2021-07-12', 'good', 7, 'shirt4.jpg'),
(12, 'ABC', 20, 4, 1, '2021-07-12', 'good', 7, 'shirt3.webp'),
(13, 'ABC', 20, 4, 1, '2021-07-12', 'good', 7, 'shirt.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

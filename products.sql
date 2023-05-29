-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 06:03 PM
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
-- Database: `phpcart`
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
  `img` varchar(50) DEFAULT NULL,
  `code` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `status`, `created`, `description`, `category_id`, `img`, `code`) VALUES
(1, 'Laptop', 100, 1, 1, '2021-07-13', 'good', 1, 'laptop-img.png', 'lpt001'),
(2, 'Mobile', 200, 1, 0, '2020-08-11', 'good', 1, 'mobile-img.png', 'lpt002'),
(3, 'Laptop 1', 24, 1, 1, '2021-08-12', 'good', 2, 'shirt.jpg', 'lap001'),
(4, 'Laptop 2', 60, 1, 1, '2020-08-12', 'good', 2, 'shirt4.jpg', 'lap002'),
(5, 'Laptop 3', 23, 1, 0, '2020-08-17', 'good', 3, 'shirt3.webp', 'lap003'),
(6, 'Computers', 300, 1, 1, '2021-08-20', 'ABC', 1, 'computer-img.png', 'cmp001'),
(7, 'Computer 2', 111, 1, 1, '2021-09-25', 'AAA', 7, 'shirt3.webp', 'cmp002'),
(8, 'Computer 3', 33333, 1, 0, '2021-10-11', 'abc', 2, 'shirt4.jpg', 'cmp003'),
(9, 'freeze', 20, 1, 1, '2021-07-12', 'good', 7, 'shirt.jpg', 'frz001'),
(10, 'pen', 20, 1, 1, '2021-07-12', 'good', 7, 'shirt3.webp', 'pen001'),
(11, 'shirts', 20, 1, 1, '2021-07-12', 'good', 7, 'shirt4.jpg', 'sht001'),
(12, 'watch', 20, 1, 1, '2021-07-12', 'good', 7, 'shirt3.webp', 'wth001'),
(13, 'charts', 20, 1, 1, '2021-07-12', 'good', 7, 'shirt.jpg', 'cht001'),
(14, 'Jumkas', 400, 1, 0, '2023-05-29', 'good', 9, 'jhumka-img.png', 'jmk001'),
(15, 'necklaces', 450, 1, 0, '2023-05-29', 'good', 9, 'neklesh-img.png', 'nkl001'),
(16, 'kangan', 500, 1, 0, '2023-05-29', 'good', 9, 'kangan-img.png', 'kng001'),
(17, 'Man T -shirt', 250, 1, 0, '2023-05-29', 'good', 10, 'tshirt-img.png', 'tsht00'),
(18, 'Man -shirt', 350, 1, 0, '2023-05-29', 'good', 10, 'dress-shirt-img.png', 'dsht00'),
(19, 'Woman Scart', 150, 1, 0, '2023-05-29', 'good', 10, 'women-clothes-img.png', 'wcloth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

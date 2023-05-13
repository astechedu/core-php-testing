-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 07:08 PM
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
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `salary`, `city`) VALUES
(0, 'kumar', 9000, 'meerut'),
(1, 'ajay', 1000, 'dehradun'),
(2, 'sohan', 2000, 'meerut'),
(3, 'rohan', 3000, 'meerut'),
(4, 'kumar', 4000, 'dehradun'),
(5, 'zubin', 5000, 'amit'),
(6, 'testrow', 8000, 'testing'),
(7, 'sohan', 6000, 'dhampur'),
(8, 'sohan', 5000, 'dhampur'),
(9, 'sohan', 5000, 'dhampur'),
(10, 'ramanq', 3000, 'dhampur'),
(11, 'ram', 8000, 'meerut'),
(12, 'zubin', 4000, 'dehli'),
(13, 'new ', 1400, 'dehradun'),
(14, 'amit1', 1000, 'meerut');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `user_ai` BEFORE UPDATE ON `users` FOR EACH ROW UPDATE average_sal SET average = (SELECT AVG(salary) FROM user)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

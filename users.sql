-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 07:42 AM
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
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `created` timestamp NOT NULL DEFAULT curdate(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `salary`, `city`, `created`, `updated`, `password`, `email`) VALUES
(1, 'ajay', 1000, 'nodia', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'admin123', 'admin@gmail.com'),
(2, 'sohan', 2000, 'meerut', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'sohan123', 'xyz1@gmail.com'),
(3, 'rohan', 3000, 'meerut', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'rohan123', 'xyz2@gmail.com'),
(4, 'kumar', 4000, 'dehradun', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'kumar123', 'xyz3@gmail.com'),
(5, 'zubin', 5000, 'amit', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'zubin123', 'xyz4@gmail.com'),
(6, 'testrow', 8000, 'testing', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'testrow123', 'xyz5@gmail.com'),
(7, 'raman', 6000, 'dhampur', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'raman123', 'xyz6@gmail.com'),
(8, 'rohit', 5000, 'dhampur', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'rohit123', 'xyz7@gmail.com'),
(9, 'aman', 5000, 'dhampur', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'aman123', 'xyz8@gmail.com'),
(10, 'amar', 3000, 'dhampur', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'amar123', 'xyz9@gmail.com'),
(11, 'ram', 8000, 'meerut', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'ram123', 'xyz10@gmail.com'),
(12, 'zubin', 4000, 'dehli', '2023-05-29 18:30:00', '2023-05-30 05:31:30', 'zubin123', 'xyz11@gmail.com');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

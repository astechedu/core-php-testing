-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 07:26 PM
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
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `post` text DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) DEFAULT 0,
  `password` varchar(30) DEFAULT NULL,
  `role` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `title`, `post`, `city`, `created_at`, `updated_at`, `status`, `password`, `role`) VALUES
(1, 'ajay', 'computer', 'This is computer. It is an electronic machine.', 'dehradun', '2023-04-20 02:14:13', '2023-04-21 00:35:43', 1, 'ajay1234', 'admin'),
(2, 'rohan', 'english', 'english literature.', 'dhampur', '2023-04-20 02:15:35', '2023-04-20 15:27:17', 0, 'rohan1234', 'user'),
(3, 'amit', 'hindi', 'this is ge', 'dhampur', '2023-04-21 15:09:46', '2023-04-21 20:39:46', 0, 'amit1234', 'user'),
(4, 'sonu', 'hindi', 'this is ge', 'dhampur', '2023-04-21 15:14:33', '2023-04-21 20:47:24', 0, 'sonu234', 'user'),
(5, 'suman', 'history', 'this is history', 'dhampur', '2023-04-21 15:16:14', '2023-04-21 20:46:14', 0, 'suman1234', 'user'),
(6, 'kdj', 'kslj', 'jdljfld jlkj dfdlj', 'djlkdfj', '2023-04-21 15:43:33', '2023-04-21 21:13:33', 0, 'ajay1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

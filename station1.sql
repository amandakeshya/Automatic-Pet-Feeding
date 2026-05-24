-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 11:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petfeeding`
--

-- --------------------------------------------------------

--
-- Table structure for table `station1`
--

CREATE TABLE `station1` (
  `id` int(20) UNSIGNED NOT NULL,
  `isi_makanan` double NOT NULL,
  `deteksi` tinyint(1) NOT NULL,
  `servo` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `station1`
--

INSERT INTO `station1` (`id`, `isi_makanan`, `deteksi`, `servo`, `created_at`) VALUES
(1, 50, 1, 0, '2024-01-06 09:13:19'),
(20, 0, 0, 0, '2024-01-06 09:13:19'),
(21, 0, 0, 0, '2024-01-06 09:13:19'),
(22, 0, 0, 0, '2024-01-06 09:13:19'),
(23, 0, 0, 0, '2024-01-06 09:13:19'),
(24, 0, 0, 0, '2024-01-06 09:13:19'),
(25, 0, 0, 0, '2024-01-06 09:13:19'),
(26, 0, 0, 0, '2024-01-06 09:13:19'),
(27, 0, 0, 0, '2024-01-06 09:13:19'),
(28, 0, 0, 0, '2024-01-06 09:13:19'),
(29, 0, 0, 0, '2024-01-06 09:13:19'),
(30, 0, 0, 0, '2024-01-06 09:13:19'),
(31, 0, 0, 0, '2024-01-06 09:13:19'),
(32, 0, 0, 0, '2024-01-06 09:13:19'),
(33, 0, 0, 0, '2024-01-06 09:13:19'),
(34, 0, 0, 0, '2024-01-06 09:13:19'),
(35, 0, 0, 0, '2024-01-06 09:13:19'),
(36, 0, 0, 0, '2024-01-06 09:13:19'),
(37, 0, 0, 0, '2024-01-06 09:13:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `station1`
--
ALTER TABLE `station1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `station1`
--
ALTER TABLE `station1`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

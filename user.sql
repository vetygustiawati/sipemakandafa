-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2021 at 08:55 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipemakandafa`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user`, `id_santri`, `username`, `email`, `password`, `level`, `nama`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, 'admin', 'admin@gmail.com', '$2y$10$mZfxIYn6w.jWPS.DPbr41.hAUrzn/4wea8q.mqbC3c7qrqClk3uKm', 'admin', NULL, 'dzA1iANdjwg3dJFxLhNz4OVe0EGtRIQxHoHTQyqy94biWa2BjfBoPCp0ui75', '2020-12-08 06:05:01', '2021-07-09 23:38:56'),
(6, NULL, NULL, 'pengasuh', 'pengasuh@gmail.com', '$2y$10$Y1dmeNjlsyDFyVzlpkwwzOeyX0bET/WJh9Nn6NbdvhXVfvhOEj9Vu', 'pengasuh', NULL, '70wzt0nPOOGnYD8G7DdVkxTHebUrXLFf19iBRhDJKNJEeBIuOaOqfpOcuTQG', '2020-12-04 23:24:45', '2021-07-09 23:44:24'),
(22, NULL, 12, 'suni', 'suni@sipemakan.id', '$2y$10$kKMu6nF6N6R89oOo5w6KoORXkKmDZK8LQCIf1Zj639kpb7e8w8n6O', 'walisantri', NULL, 'Mikyw5h53RkSnlEaqAu2LhZqy22C6aZouSfqBQFLVSq7Q4unYIjWb4y2BNNj', '2021-06-30 10:58:38', '2021-07-09 23:52:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

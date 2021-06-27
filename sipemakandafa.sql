-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2021 at 12:29 PM
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
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `id` int(11) NOT NULL,
  `nama_administrasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`id`, `nama_administrasi`, `created_at`, `updated_at`) VALUES
(1, 'spp bulan januari', '2020-12-28 07:41:17', '2020-12-28 07:41:17'),
(2, 'spp bulan februari', '2020-12-28 07:46:28', '2020-12-28 07:46:28'),
(3, 'spp bulan maret', '2020-12-31 01:31:07', '2020-12-31 01:31:07'),
(4, 'spp bulan april', '2020-12-31 01:31:58', '2020-12-31 01:31:58'),
(5, 'spp bulan mei', '2020-12-31 01:31:58', '2020-12-31 01:31:58'),
(6, 'spp bulan juni', '2020-12-31 01:33:01', '2020-12-31 01:33:01'),
(7, 'spp bulan juli', '2020-12-31 01:33:01', '2020-12-31 01:33:01'),
(8, 'spp bulan agustus', '2020-12-31 01:33:38', '2020-12-31 01:33:38'),
(9, 'spp bulan september', '2020-12-31 01:33:38', '2020-12-31 01:33:38'),
(10, 'spp bulan oktober', '2020-12-31 01:34:16', '2020-12-31 01:34:16'),
(11, 'spp bulan november', '2020-12-31 01:34:16', '2020-12-31 01:34:16'),
(12, 'spp bulan desember', '2020-12-31 01:34:53', '2020-12-31 01:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `bln` varchar(255) DEFAULT NULL,
  `tgl_presensi` date DEFAULT NULL,
  `status` enum('hadir','tidak hadir','romadhon') DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `id_santri`, `bln`, `tgl_presensi`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(42, 1114022, '05', '2021-05-28', 'hadir', NULL, '2021-05-28 08:02:43', '2021-05-28 08:02:43'),
(46, 1117086, '06', '2021-06-16', 'hadir', NULL, '2021-06-16 05:48:28', '2021-06-16 05:48:28'),
(47, 1117011, '06', '2021-06-18', 'hadir', NULL, '2021-06-18 02:14:21', '2021-06-18 02:14:21'),
(48, 1117020, '06', '2021-06-19', 'hadir', NULL, '2021-06-18 21:29:36', '2021-06-18 21:29:36'),
(49, 1114005, '06', '2021-06-19', 'hadir', NULL, '2021-06-19 00:33:52', '2021-06-19 00:33:52'),
(50, 1117086, '06', '2021-06-20', 'hadir', NULL, '2021-06-20 00:34:41', '2021-06-20 00:34:41'),
(51, 1117092, '06', '2021-06-20', 'hadir', NULL, '2021-06-20 00:36:56', '2021-06-20 00:36:56'),
(52, 1117092, '06', '2021-06-22', 'hadir', NULL, '2021-06-22 04:58:05', '2021-06-22 04:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `nama_santri` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tpt_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nm_wsantri` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `id_santri`, `nama_santri`, `foto`, `tpt_lahir`, `tgl_lahir`, `jk`, `alamat`, `nm_wsantri`, `no_hp`, `created_at`, `updated_at`) VALUES
(12, 1114022, 'Suni Marwan', 'app/images/santri/12-1623992805-uiWR2.png', 'Ketapang', '2002-04-14', 'laki-laki', 'Jl.W.Mongonsidi', 'Misuri', '085210981223', '2021-01-08 02:35:08', '2021-06-17 22:06:45'),
(13, 1117011, 'Alif Rahmad Nur Muhammad', 'app/images/santri/13-1624787463-Is7Kb.png', 'Ketapang', '2002-06-07', 'laki-laki', 'Jl. Rahadi Usman', 'Kamrin', '089693518338', '2021-01-08 06:48:03', '2021-06-27 02:51:03'),
(14, 1117086, 'Ariyan Saputra', 'app/images/santri/14-1623992642-mucXj.png', 'Sukamulya', '2003-10-10', 'laki-laki', 'Blok F SP 1', 'Iing', '085252521212', '2021-01-08 06:49:18', '2021-06-17 22:04:02'),
(15, 1117020, 'M Fakhri Zahid Fadhilah', 'app/images/santri/15-1623992700-vVaDd.png', 'Ketapang', '2001-09-09', 'laki-laki', 'Satong MHU', 'Zainal Arifin', '082350361419', '2021-01-08 06:51:04', '2021-06-17 22:05:00'),
(16, 1114005, 'Dani Akbar', 'app/images/santri/16-1623992673-CCtD7.png', 'Ketapang', '2001-10-28', 'laki-laki', 'Jl. Rahadi Usman', 'Aryanto', '085349113336', '2021-01-08 06:53:54', '2021-06-17 22:04:34'),
(17, 1117093, 'Syahril Hidayatullah', 'app/images/santri/17-1623992862-X1SHK.png', 'Ketapang', '2000-07-14', 'laki-laki', 'Jl. Irama Samudra', 'Sarimin', '085245701676', '2021-01-08 07:01:47', '2021-06-17 22:07:42'),
(18, 1116038, 'Wahyudin', 'app/images/santri/18-1624076056-NQtI4.png', 'Ketapang', '2002-10-10', 'laki-laki', 'Jl.W.R.Supratman', 'Nazi Dain ye', '089671197454', '2021-01-08 07:04:01', '2021-06-18 21:14:17'),
(19, 1117092, 'Muhammad Asis', 'app/images/santri/19-1623992727-9JDVS.png', 'Ketapang', '2001-09-15', 'laki-laki', 'Jl.P.Hidayat', 'Juri', '085220551352', '2021-01-08 07:06:04', '2021-06-17 22:05:27'),
(22, 1117081, 'Suhardiansyah', 'app/images/santri/22-1623992763-QCBPS.png', 'Ketapang', '2021-01-11', 'laki-laki', 'Sukabaru', 'marhasan', '083143850369', '2021-01-10 19:13:40', '2021-06-17 22:06:03'),
(23, 1115001, 'Vety Gustiawatii', 'app/images/santri/23-1623992913-fSzxH.png', 'Ketapang', '2000-08-17', 'perempuan', 'Sukabaru', 'marhasan', '085220551352', '2021-06-04 08:26:25', '2021-06-17 22:08:33'),
(26, 11121314, 'ilham oke', 'app/images/santri/26-1623992504-ucWXg.png', 'ketapang', '2121-02-21', 'laki-laki', 'sukabaru', 'marhasan', '09876', '2021-06-17 09:21:29', '2021-06-17 22:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `uangmakan`
--

CREATE TABLE `uangmakan` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_administrasi` varchar(255) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `status` enum('lunas','belum lunas') DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uangmakan`
--

INSERT INTO `uangmakan` (`id`, `id_santri`, `id_user`, `id_administrasi`, `nominal`, `tgl`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(30, 1114022, 3, '01', 300000, '2021-01-11', 'lunas', NULL, '2021-01-10 19:17:17', '2021-01-10 19:17:17'),
(34, 1117011, 3, '06', 300000, '2021-06-10', 'lunas', NULL, '2021-06-09 06:58:42', '2021-06-09 07:06:53'),
(35, 1117086, 3, '06', 300000, '2021-06-17', 'lunas', NULL, '2021-06-16 10:16:41', '2021-06-16 10:16:41'),
(36, 1117020, 3, '06', 300000, '2021-06-19', 'lunas', NULL, '2021-06-18 21:34:23', '2021-06-18 21:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `level2` enum('putra','putri') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_santri`, `username`, `email`, `password`, `level`, `level2`, `created_at`, `updated_at`) VALUES
(3, NULL, 'admin', 'admin@gmail.com', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'admin', 'putra', '2020-12-08 06:05:01', '2021-05-08 01:18:31'),
(6, NULL, 'pengasuh', 'pengasuh@gmail.com', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'pengasuh', NULL, '2020-12-04 23:24:45', '2020-12-04 23:24:45'),
(15, 14, 'ariyan', 'ariyan@gmail.com', '$2y$10$YOFQKB4yBLTDDhvdLizZl.gPygesVw0gn/d1pgdYQq3r8G.KGXHZC', 'walisantri', NULL, '2021-06-18 21:43:53', '2021-06-18 21:43:53'),
(16, 13, 'alif', 'alif@gmail.com', '$2y$10$t8JzUT6NO3XgxSgzeVR6uOTENzk.QxoU/TuN4lqbXLytR4bNu/qkG', 'walisantri', NULL, '2021-06-18 21:44:43', '2021-06-18 21:44:43'),
(19, NULL, 'fakhri', 'fakhri@gmail.com', '$2y$10$4xhPKIB4qtqOpXDNFizP5utPbpvTt9VHxi0ar8jaulgqk82gQV/H.', 'walisantri', NULL, '2021-06-18 22:14:19', '2021-06-18 22:14:19'),
(21, 12, 'suni', 'suni@sipemakan.id', '$2y$10$l0ICWL0mwd6vJvaHg7ugbOm1CrgS8GJh1TymzxGJJ.ngdJRmzLMxi', 'walisantri', NULL, '2021-06-22 04:54:47', '2021-06-22 04:54:47'),
(22, 19, 'asis', 'asis@sipemakan.id', '$2y$10$SjMbMuyWdVKZNdt83Of8Ee61hibJd5oNIVPnUIQEaQW8EeiFJYh9K', 'walisantri', NULL, '2021-06-22 04:56:36', '2021-06-22 04:56:36'),
(23, 26, 'ilham', 'ilham@sipemakan.id', '$2y$10$LMjKT/ktvkvSmB6FZS8K0uhusmY0cIVzb7x7TJpAnjhP4Vx4in4rS', 'walisantri', NULL, '2021-06-27 02:57:36', '2021-06-27 02:57:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_santri` (`id_santri`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`,`id_santri`);

--
-- Indexes for table `uangmakan`
--
ALTER TABLE `uangmakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_santri` (`id_santri`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `uangmakan`
--
ALTER TABLE `uangmakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2021 at 08:21 PM
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
-- Table structure for table `mws`
--

CREATE TABLE `mws` (
  `id` int(11) NOT NULL,
  `bulan` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `hari` date DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mws`
--

INSERT INTO `mws` (`id`, `bulan`, `tahun`, `hari`, `ket`, `created_at`, `updated_at`) VALUES
(1, 6, 2021, '2021-07-03', NULL, '2021-06-30 16:42:28', '2021-06-30 16:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `bln` varchar(255) DEFAULT NULL,
  `tgl_presensi` date DEFAULT NULL,
  `status` enum('hadir','tidak hadir') DEFAULT NULL,
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
(56, 1116038, '07', '2021-07-01', 'hadir', NULL, '2021-06-30 10:08:28', '2021-06-30 10:08:28'),
(57, 1117081, '07', '2021-07-01', 'hadir', NULL, '2021-06-30 10:08:36', '2021-06-30 10:08:36');

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
(12, 1114022, 'Suni Marwan', 'app/images/santri/12-1623992805-uiWR2.png', 'Ketapang', '2002-04-14', 'laki-laki', 'Jl.W.Mongonsidi', 'Misuri', '085210981223', '2021-01-07 19:35:08', '2021-06-17 15:06:45'),
(18, 1116038, 'Wahyudin', 'app/images/santri/18-1624076056-NQtI4.png', 'Ketapang', '2002-10-10', 'laki-laki', 'Jl.W.R.Supratman', 'Nazi Dain ye', '089671197454', '2021-01-08 00:04:01', '2021-06-18 14:14:17'),
(22, 1117081, 'Suhardiansyah', 'app/images/santri/22-1623992763-QCBPS.png', 'Ketapang', '2021-01-11', 'laki-laki', 'Sukabaru', 'marhasan', '083143850369', '2021-01-10 12:13:40', '2021-06-17 15:06:03'),
(23, 1115001, 'Vety Gustiawatii', 'app/images/santri/23-1623992913-fSzxH.png', 'Ketapang', '2000-08-17', 'perempuan', 'Sukabaru', 'marhasan', '085220551352', '2021-06-04 01:26:25', '2021-06-17 15:08:33'),
(30, 1117002, 'Muhammad Ilham', 'app/images/santri/30-1624780417-evYKl.png', 'ketapang', '2000-10-10', 'laki-laki', 'sukabaru', 'marhasan', '089612435676', '2021-06-26 17:51:55', '2021-06-26 17:53:37');

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
(42, 1116038, 3, '07', 300000, '2021-07-01', 'lunas', NULL, '2021-06-30 10:43:27', '2021-06-30 10:43:27'),
(46, 1114022, 3, '02', 300000, '2021-07-01', 'lunas', NULL, '2021-06-30 10:56:18', '2021-06-30 10:56:18'),
(47, 1114022, 3, '03', 300000, '2021-07-01', 'lunas', NULL, '2021-06-30 10:56:26', '2021-06-30 10:56:26'),
(48, 1116038, 3, '01', 300000, '2021-07-01', 'lunas', NULL, '2021-06-30 10:56:34', '2021-06-30 10:56:34'),
(49, 1116038, 3, '04', 300000, '2021-07-01', 'lunas', NULL, '2021-06-30 10:56:42', '2021-06-30 10:56:42'),
(50, 1114022, 3, '04', 300000, '2021-07-01', 'lunas', NULL, '2021-06-30 11:20:21', '2021-06-30 11:20:21'),
(51, 1114022, 3, '05', 300000, '2021-07-01', 'lunas', NULL, '2021-06-30 11:20:43', '2021-06-30 11:20:43');

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
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user`, `id_santri`, `username`, `email`, `password`, `level`, `nama`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, 'admin', 'admin@gmail.com', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'admin', NULL, '2020-12-08 06:05:01', '2021-05-08 01:18:31'),
(6, NULL, NULL, 'pengasuh', 'pengasuh@gmail.com', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'pengasuh', NULL, '2020-12-04 23:24:45', '2020-12-04 23:24:45'),
(22, NULL, 12, 'suni', 'suni@sipemakan.id', '$2y$10$LJj6ZB8QRCoLKBkD/aisKeg98Jm9XXbyxtuc5W41lNvSM7v6tfhoy', 'walisantri', NULL, '2021-06-30 10:58:38', '2021-06-30 10:58:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mws`
--
ALTER TABLE `mws`
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
-- AUTO_INCREMENT for table `mws`
--
ALTER TABLE `mws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `uangmakan`
--
ALTER TABLE `uangmakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

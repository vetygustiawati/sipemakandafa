-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2021 pada 11.19
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipemakansantri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrasi`
--

CREATE TABLE `administrasi` (
  `id` int(11) NOT NULL,
  `nama_administrasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `administrasi`
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
-- Struktur dari tabel `presensi`
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
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `id_santri`, `bln`, `tgl_presensi`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(28, 12, '01', '2021-01-11', 'hadir', NULL, '2021-01-10 19:15:17', '2021-01-10 19:15:17'),
(40, 18, '01', '2021-01-11', 'hadir', NULL, '2021-01-10 19:15:17', '2021-01-10 19:15:17'),
(41, 16, '01', '2021-01-11', 'hadir', NULL, '2021-01-10 19:15:17', '2021-01-10 19:15:17'),
(42, 1114022, '05', '2021-05-28', 'hadir', NULL, '2021-05-28 08:02:43', '2021-05-28 08:02:43'),
(43, 1114005, NULL, NULL, NULL, NULL, '2021-06-07 21:52:28', '2021-06-07 21:52:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `id` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `nama_santri` varchar(255) DEFAULT NULL,
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
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`id`, `id_santri`, `nama_santri`, `tpt_lahir`, `tgl_lahir`, `jk`, `alamat`, `nm_wsantri`, `no_hp`, `created_at`, `updated_at`) VALUES
(12, 1114022, 'Suni Marwan', 'Ketapang', '2002-04-14', 'laki-laki', 'Jl.W.Mongonsidi', 'Misuri', '085210981223', '2021-01-08 02:35:08', '2021-01-08 06:45:24'),
(13, 1117011, 'Alif Rahmad Nur Muhammad', 'Ketapang', '2002-06-07', 'laki-laki', 'Jl. Rahadi Usman', 'Kamrin', '081345016972', '2021-01-08 06:48:03', '2021-01-08 06:48:03'),
(14, 1117086, 'Ariyan Saputra', 'Sukamulya', '2003-10-10', 'laki-laki', 'Blok F SP 1', 'Iing', '085252521212', '2021-01-08 06:49:18', '2021-01-08 06:49:18'),
(15, 1117020, 'M Fakhri Zahid Fadhilah', 'Ketapang', '2001-09-09', 'laki-laki', 'Satong MHU', 'Zainal Arifin', '082350361419', '2021-01-08 06:51:04', '2021-01-08 06:51:04'),
(16, 1114005, 'Dani Akbar', 'Ketapang', '2001-10-28', 'laki-laki', 'Jl. Rahadi Usman', 'Aryanto', '085349113336', '2021-01-08 06:53:54', '2021-01-08 06:53:54'),
(17, 1117093, 'Syahril Hidayatullah', 'Ketapang', '2000-07-14', 'laki-laki', 'Jl. Irama Samudra', 'Sarimin', '085245701676', '2021-01-08 07:01:47', '2021-01-08 07:01:47'),
(18, 1116038, 'Wahyudin', 'Ketapang', '2002-10-10', 'laki-laki', 'Jl.W.R.Supratman', 'Nazi Dain', '089671197454', '2021-01-08 07:04:01', '2021-01-08 07:04:01'),
(19, 1117092, 'Muhammad Asis', 'Ketapang', '2001-09-15', 'laki-laki', 'Jl.P.Hidayat', 'Juri', '085220551352', '2021-01-08 07:06:04', '2021-01-08 07:06:04'),
(20, 1117002, 'Achmad Nabil', 'Ketapang', '2001-08-09', 'laki-laki', 'Jl. Irama Samudra', 'Aryanto', '083143850369', '2021-01-08 07:07:38', '2021-01-08 07:07:38'),
(22, 1117081, 'Suhardiansyah', 'Ketapang', '2021-01-11', 'laki-laki', 'Sukabaru', 'marhasan', '083143850369', '2021-01-10 19:13:40', '2021-01-10 19:13:40'),
(23, 1115001, 'Vety Gustiawati', 'Ketapang', '2000-08-17', 'perempuan', 'Sukabaru', 'marhasan', '085220551352', '2021-06-04 08:26:25', '2021-06-04 08:26:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uangmakan`
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
-- Dumping data untuk tabel `uangmakan`
--

INSERT INTO `uangmakan` (`id`, `id_santri`, `id_user`, `id_administrasi`, `nominal`, `tgl`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(30, 1114022, 3, '01', 300000, '2021-01-11', 'lunas', NULL, '2021-01-10 19:17:17', '2021-01-10 19:17:17'),
(32, 1114005, 3, '05', 300000, '0000-00-00', 'lunas', NULL, '2021-04-20 21:15:56', '2021-04-20 21:15:56'),
(33, 1114022, 3, '05', 300000, '0000-00-00', 'lunas', NULL, '2021-04-20 21:16:42', '2021-04-20 21:16:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `level2` enum('putra','putri') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_user`, `id_santri`, `username`, `email`, `nama`, `password`, `level`, `level2`, `created_at`, `updated_at`) VALUES
(3, 1, 0, 'admin', 'admin@gmail.com', 'Vety Gustiawati', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'admin', 'putra', '2020-12-08 06:05:01', '2021-05-08 01:18:31'),
(5, 2, 19, 'walisantri', 'walisantri@gmail.com', 'Wali Santri', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'walisantri', NULL, '2020-12-04 23:24:02', '2020-12-04 23:24:02'),
(6, 3, 0, 'pengasuh', 'pengasuh@gmail.com', 'Pengasuh Pondok', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'pengasuh', NULL, '2020-12-04 23:24:45', '2020-12-04 23:24:45'),
(9, 12, 12, 'suni marwan', 'sunimarwan@gmail.com', 'Suni Marwan', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'walisantri', 'putri', '2021-05-07 23:46:48', '2021-05-07 23:46:48'),
(10, 0, 16, 'dani akbar', 'daniakbar@gmail.com', 'sukiman', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'walisantri', NULL, '2021-05-08 00:27:13', '2021-05-08 00:27:13'),
(11, 18, 18, 'wahyudin', 'wahyudin@gmail.com', 'wahyudin', '$2y$10$FLrwV6Y9Q34naKeTNSbqZuAZzMpzpb8V94mxELSd/MuMl4U2voGOG', 'walisantri', NULL, '2021-05-08 01:02:17', '2021-05-08 01:02:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_santri` (`id_santri`);

--
-- Indeks untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`,`id_santri`);

--
-- Indeks untuk tabel `uangmakan`
--
ALTER TABLE `uangmakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_santri` (`id_santri`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `uangmakan`
--
ALTER TABLE `uangmakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

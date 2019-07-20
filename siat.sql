-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 07:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siat`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `idkaryawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `id_cabang`, `idkaryawan`, `tanggal`, `keterangan`, `created_at`, `updated_at`) VALUES
(15, 3, 'PWT0101', '2019-06-04', 'Hadir', '2019-06-04 08:22:27', '2019-06-04 08:22:27'),
(16, 3, 'PWT0101', '2019-06-03', 'Hadir', '2019-06-04 08:22:39', '2019-06-04 08:22:39'),
(17, 3, 'PWT0101', '2019-06-08', 'Alfa', '2019-06-08 08:37:51', '2019-06-08 08:37:51'),
(18, 3, 'PWT0101', '2019-06-09', 'Alfa', '2019-06-08 09:08:07', '2019-06-08 09:08:07'),
(19, 3, 'PWTK0001', '2019-06-09', 'Sakit', '2019-06-09 08:21:27', '2019-06-09 08:21:27'),
(20, 3, 'PWTK0001', '2019-07-02', 'Hadir', '2019-07-01 19:04:58', '2019-07-01 19:04:58'),
(21, 3, 'PWTK0001', '2019-07-03', 'Alfa', '2019-07-01 19:06:10', '2019-07-01 19:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `kodebarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keteranganbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuanbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabarang` bigint(20) NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `tanggalexpired` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangkeluar`
--

INSERT INTO `barangkeluar` (`id`, `id_cabang`, `kodebarang`, `jenisbarang`, `keteranganbarang`, `satuanbarang`, `hargabarang`, `jumlahbarang`, `tanggalmasuk`, `tanggalexpired`, `created_at`, `updated_at`) VALUES
(1, 2, 'PWT-B.002', 'Tablet', 'Neozep', 'Strip', 2500, 1, '2019-07-19', '2021-12-21', '2019-07-19 06:46:15', '2019-07-19 06:46:15'),
(2, 2, 'PWT-B.001', 'Tablet', 'Diapet', 'Strip', 3000, 1, '2019-07-19', '2022-06-30', '2019-07-19 06:49:01', '2019-07-19 06:49:01'),
(3, 2, 'PWT-B.002', 'Tablet', 'Neozep', 'Strip', 2500, 1, '2019-07-19', '2021-12-21', '2019-07-19 06:49:01', '2019-07-19 06:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `kodebarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keteranganbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuanbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabarang` bigint(20) NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `tanggalexpired` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangmasuk`
--

INSERT INTO `barangmasuk` (`id`, `id_cabang`, `kodebarang`, `jenisbarang`, `keteranganbarang`, `satuanbarang`, `hargabarang`, `jumlahbarang`, `tanggalmasuk`, `tanggalexpired`, `created_at`, `updated_at`) VALUES
(1, 2, 'PWT-B.001', 'Tablet', 'Diapet', 'Strip', 3000, 151, '2019-07-19', '2022-06-30', '2019-07-19 05:42:36', '2019-07-19 05:42:36'),
(2, 2, 'PWT-B.002', 'Tablet', 'Neozep', 'Strip', 2500, 20, '2019-07-19', '2021-12-21', '2019-07-19 06:33:25', '2019-07-19 06:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` tinyint(3) UNSIGNED NOT NULL,
  `nama_cabang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_cabang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `alamat_cabang`, `created_at`, `updated_at`) VALUES
(1, 'Jakarta', 'Jakarta', NULL, NULL),
(2, 'Purwokerto', 'Jln sidodadi', NULL, NULL),
(3, 'Purwokerto 2', 'Jln platinum', NULL, NULL),
(4, 'Yogykarta', 'Yogykarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dataobat`
--

CREATE TABLE `dataobat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cabang` tinyint(3) NOT NULL,
  `kodebarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keteranganbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuanbarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabarang` bigint(20) NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `tanggalexpired` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dataobat`
--

INSERT INTO `dataobat` (`id`, `id_cabang`, `kodebarang`, `jenisbarang`, `keteranganbarang`, `satuanbarang`, `hargabarang`, `jumlahbarang`, `tanggalmasuk`, `tanggalexpired`, `created_at`, `updated_at`) VALUES
(11, 2, 'PWTBTK001', 'Serbuk', 'batuk', 'botol', 5000, 4, '2019-05-05', '2019-05-06', '2019-05-16 06:54:08', '2019-05-16 06:54:08'),
(12, 2, '12', '12', 'batuk', 'botol', 5000, 2, '2019-05-05', '2019-05-06', '2019-05-16 06:55:34', '2019-05-16 06:55:34'),
(13, 3, '15', '15', 'batuk', 'botol', 5000, 5, '2019-05-05', '2019-05-06', '2019-05-16 07:06:31', '2019-05-16 07:06:31'),
(14, 4, '16', '16', 'batuk', 'botol', 5000, 5, '2019-05-05', '2019-05-06', '2019-05-16 07:24:03', '2019-05-16 07:24:03'),
(19, 3, 'PWT00114', 'Serbuk', 'sadsf', 'Pack', 2222, 11, '2019-06-03', '2019-06-03', '2019-06-03 08:01:21', '2019-06-03 08:01:21'),
(20, 2, 'PWT-B.001', 'Tablet', 'Diapet', 'Strip', 3000, 149, '2019-07-19', '2022-06-30', '2019-07-19 05:42:36', '2019-07-19 05:42:36'),
(21, 2, 'PWT-B.002', 'Tablet', 'Neozep', 'Strip', 2500, 18, '2019-07-19', '2021-12-21', '2019-07-19 06:33:25', '2019-07-19 06:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `datapegawai`
--

CREATE TABLE `datapegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cabang` tinyint(3) NOT NULL,
  `idkaryawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namakaryawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datapegawai`
--

INSERT INTO `datapegawai` (`id`, `id_cabang`, `idkaryawan`, `namakaryawan`, `jeniskelamin`, `alamat`, `tanggallahir`, `role`, `created_at`, `updated_at`) VALUES
(1, 3, 'PWT0101', 'Embuh', 'Laki-Laki', 'Hasemeleh', '2019-06-04', 'Apoteker', '2019-06-04 00:51:20', '2019-06-04 00:51:20'),
(2, 3, 'PWTK0001', 'Gud Mamang', 'Laki-Laki', 'Puertorico', '1998-01-19', 'Kepala Cabang', '2019-06-07 07:10:16', '2019-06-07 07:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `gajikaryawan`
--

CREATE TABLE `gajikaryawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `idkaryawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `namakaryawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gajipokok` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `tunjangan` int(11) NOT NULL,
  `gajiakhir` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gajikaryawan`
--

INSERT INTO `gajikaryawan` (`id`, `id_cabang`, `idkaryawan`, `tanggal`, `namakaryawan`, `jabatan`, `gajipokok`, `potongan`, `tunjangan`, `gajiakhir`, `created_at`, `updated_at`) VALUES
(2, 3, 'PWT0101', '2019-06-09', 'Embuh', 'Apoteker', 1750000, 100000, 1400000, 3050000, '2019-06-09 09:04:29', '2019-06-09 09:04:29'),
(3, 3, 'PWTK0001', '2019-06-09', 'Gud Mamang', 'Kepala Cabang', 1750000, 0, 1750000, 3500000, '2019-06-09 09:04:38', '2019-06-09 09:04:38'),
(4, 3, 'PWTK0001', '2019-07-02', 'Gud Mamang', 'Kepala Cabang', 1750000, 50000, 1750000, 3450000, '2019-07-01 19:06:30', '2019-07-01 19:06:30'),
(5, 3, 'PWTK0001', '2019-07-25', 'Gud Mamang', 'Kepala Cabang', 1750000, 50000, 1750000, 3450000, '2019-07-14 06:53:54', '2019-07-14 06:53:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_04_14_144429_migrasiuser', 1),
(5, '2019_05_15_163317_create_dataobat_table', 2),
(6, '2019_05_16_094259_create_dataobat_table', 3),
(7, '2019_05_16_151731_create_datapegawai_table', 4),
(8, '2019_05_22_114440_create_cabang_table', 5),
(9, '2019_06_03_143033_create_absensis_table', 6),
(11, '2019_06_08_173445_create_gajikaryawan_table', 7),
(12, '2019_07_14_141212_transaksi', 8),
(13, '2019_07_19_122711_barangmasuk', 9),
(14, '2019_07_19_123316_barangkeluar', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` bigint(20) UNSIGNED NOT NULL,
  `kodetransaksi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `namakasir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jenispasien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namadokter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodebarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `totalbiaya` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `kodetransaksi`, `id_cabang`, `namakasir`, `tanggal`, `jenispasien`, `namadokter`, `kodebarang`, `jumlahbarang`, `totalbiaya`, `created_at`, `updated_at`) VALUES
(1, '$2y$10$Mm4B.QrRIbVdVLJ0nVS6peNKFxy44WToA9bHP5Vt2kjlB7.012T96', 2, 'udin', '2019-07-18', '1', 'Huehe', 'PWTBTK001', 1, 5000, '2019-07-18 02:28:26', '2019-07-18 02:28:26'),
(2, '$2y$10$.WDvepc892wzy5YNNsgM9ewphGKQeLLwV7zyGjOdu/mVq0PBTMbcG', 2, 'udin', '2019-07-18', '1', 'Huehe', 'PWTBTK001', 1, 5000, '2019-07-18 02:29:12', '2019-07-18 02:29:12'),
(3, '$2y$10$.WDvepc892wzy5YNNsgM9ewphGKQeLLwV7zyGjOdu/mVq0PBTMbcG', 2, 'udin', '2019-07-18', '1', 'Huehe', '12', 3, 15000, '2019-07-18 02:29:12', '2019-07-18 02:29:12'),
(4, '$2y$10$EErhtb3ZUjdxG/dBNy9e8OGr0CcC.ZLp3lvIOVd5LCvgWTA3QVLwK', 2, 'Budi Rahman', '2019-07-19', 'UMUM', 'Sutomo', 'PWT-B.001', 1, 3000, '2019-07-19 06:44:29', '2019-07-19 06:44:29'),
(5, '$2y$10$L8UW17Tow5.guPXCYvyCgu92CqWJl0.7fSg3ScZq6mzLE2BfMYb8a', 2, 'Budi Rahman', '2019-07-19', 'UMUM', 'Sutomo', 'PWT-B.002', 1, 2500, '2019-07-19 06:46:15', '2019-07-19 06:46:15'),
(6, '$2y$10$YIr527tVturiYFtWR/xfPOF2NeH84CqL6WoV2BNoaxL0s1ZxNIH/u', 2, 'Budi Rahman', '2019-07-19', 'RESEP DOKTER', 'Bimbang', 'PWT-B.001', 1, 3000, '2019-07-19 06:49:00', '2019-07-19 06:49:00'),
(7, '$2y$10$YIr527tVturiYFtWR/xfPOF2NeH84CqL6WoV2BNoaxL0s1ZxNIH/u', 2, 'Budi Rahman', '2019-07-19', 'RESEP DOKTER', 'Bimbang', 'PWT-B.002', 1, 2500, '2019-07-19 06:49:01', '2019-07-19 06:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cabang` tinyint(3) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_cabang`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 0, 'Japarudin', 'pemilikapotek@siat.med', NULL, '$2y$10$hNVa2jh3bKLwcdxJWei7OO.aguKwmkLy/5FjsXzBmxjQpPheztVfC', 'pemilik', NULL, '2019-07-18 23:59:32', '2019-07-18 23:59:32'),
(8, 1, 'Bambang Sentosa', 'kasircab1@siat.med', NULL, '$2y$10$3GHvk/f3jQUZqZfmDvQDP.iT6RrnjGGRmGt07MSrH0VIkmy7OOnmS', 'kasir', NULL, '2019-07-18 23:45:56', '2019-07-18 23:45:56'),
(9, 2, 'Budi Rahman', 'kasircab2@siat.med', NULL, '$2y$10$deDVUmHJHjlyuik6EagD/.FmOe0wECjw6qg65v.aJ3T1xtPro2.eG', 'kasir', NULL, '2019-07-18 23:47:25', '2019-07-18 23:47:25'),
(10, 3, 'Mei Dwila', 'kasircab3@siat.med', NULL, '$2y$10$JaXvKrj3hHKWXJJaVfwFlurkLOgoqh8n21m8dFmDYdx8WB15cfL3S', 'kasir', NULL, '2019-07-18 23:48:19', '2019-07-18 23:48:19'),
(11, 4, 'Ninda Putri Trisiana', 'kasircab4@siat.med', NULL, '$2y$10$HoyvkvG1ADZyWsGC7O.wfeFkmK/hbZr1jpGcn2gNIKV1s.fSGxeeG', 'kasir', NULL, '2019-07-18 23:50:43', '2019-07-18 23:50:43'),
(12, 1, 'Andhika Prasetyo', 'kepalacab1@siat.med', NULL, '$2y$10$e5LY5B6BjK9wVQXFLnZgAuIRiepjhkSRudX8Y830EPRkCnZPxwCJW', 'kepalacabang', NULL, '2019-07-18 23:51:47', '2019-07-18 23:51:47'),
(13, 2, 'Ezekiel Pradipta', 'kepalacab2@siat.med', NULL, '$2y$10$ns8kwqlaaZBr4nKRGXRehuywwQUxF2TfcRn770tv1hpdW9KfTGZOa', 'kepalacabang', NULL, '2019-07-18 23:52:32', '2019-07-18 23:52:32'),
(14, 3, 'Yankotinu Jonnata', 'kepalacab3@siat.med', NULL, '$2y$10$k09bjK9ra8zJ62z5K25YQuFs/CfRT294I0u2iQhIcRbz8kgAtp/GW', 'kepalacabang', NULL, '2019-07-18 23:53:39', '2019-07-18 23:53:39'),
(15, 4, 'Salsabila Wijayanti', 'kepalacab4@siat.med', NULL, '$2y$10$L.ipvDr/7waRJ/KNs6uLvuHHi4bLoHK57cEFqdPSpnOxrW8HZc966', 'kepalacabang', NULL, '2019-07-18 23:54:14', '2019-07-18 23:54:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `dataobat`
--
ALTER TABLE `dataobat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapegawai`
--
ALTER TABLE `datapegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gajikaryawan`
--
ALTER TABLE `gajikaryawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dataobat`
--
ALTER TABLE `dataobat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `datapegawai`
--
ALTER TABLE `datapegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gajikaryawan`
--
ALTER TABLE `gajikaryawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

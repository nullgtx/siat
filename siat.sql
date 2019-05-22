-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 03:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
(11, 2, '11', '12', 'batuk', 'botol', 5000, 5, '2019-05-05', '2019-05-06', '2019-05-16 06:54:08', '2019-05-16 06:54:08'),
(12, 2, '12', '12', 'batuk', 'botol', 5000, 5, '2019-05-05', '2019-05-06', '2019-05-16 06:55:34', '2019-05-16 06:55:34'),
(13, 3, '15', '15', 'batuk', 'botol', 5000, 5, '2019-05-05', '2019-05-06', '2019-05-16 07:06:31', '2019-05-16 07:06:31'),
(14, 4, '16', '16', 'batuk', 'botol', 5000, 5, '2019-05-05', '2019-05-06', '2019-05-16 07:24:03', '2019-05-16 07:24:03');

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
(8, '2019_05_22_114440_create_cabang_table', 5);

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
(4, 0, 'Andhika Prasetyo', 'chupunk3@gmail.com', NULL, '$2y$10$DUFwxxe63qqO0nuRNIHCNuL7xcq1DFH9GFW3ucOhJcESjDrpQQqwW', 'pemilik', NULL, '2019-05-09 20:48:43', '2019-05-09 20:48:43'),
(5, 3, 'amir', 'chupunk4@gmail.com', NULL, '$2y$10$OptmixvxkxzqOcVWtpK3Y.eUXN1sd583Rbf10byyj4UG4SVN8Q5iq', 'kepalacabang', NULL, '2019-05-09 20:49:11', '2019-05-09 20:49:11'),
(6, 2, 'udin', '4pasih@gmail.com', NULL, '$2y$10$bnAs70d1Kvsc78vJ20eu6ehanqh3qp1At0buZC21m317SeKnKtb3K', 'kasir', NULL, '2019-05-11 06:32:04', '2019-05-11 06:32:04');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dataobat`
--
ALTER TABLE `dataobat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `datapegawai`
--
ALTER TABLE `datapegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

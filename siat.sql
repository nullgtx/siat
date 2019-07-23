-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 03:38 AM
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
(22, 1, 'JKT.K-001', '2019-07-23', 'Hadir', '2019-07-22 10:56:57', '2019-07-22 10:56:57'),
(23, 1, 'JKT.K-002', '2019-07-23', 'Hadir', '2019-07-22 10:57:01', '2019-07-22 10:57:01'),
(24, 1, 'JKT.K-003', '2019-07-23', 'Alfa', '2019-07-22 10:57:05', '2019-07-22 10:57:05'),
(25, 1, 'JKT.K-004', '2019-07-23', 'Hadir', '2019-07-22 10:57:09', '2019-07-22 10:57:09'),
(26, 1, 'JKT.K-005', '2019-07-23', 'Hadir', '2019-07-22 10:57:13', '2019-07-22 10:57:13'),
(27, 2, 'PWT.K-001', '2019-07-23', 'Hadir', '2019-07-22 11:29:34', '2019-07-22 11:29:34'),
(28, 2, 'PWT.K-002', '2019-07-23', 'Cuti', '2019-07-22 11:29:40', '2019-07-22 11:29:40'),
(29, 2, 'PWT.K-003', '2019-07-23', 'Hadir', '2019-07-22 11:29:45', '2019-07-22 11:29:45'),
(30, 2, 'PWT.K-004', '2019-07-23', 'Sakit', '2019-07-22 11:29:50', '2019-07-22 11:29:50'),
(31, 2, 'PWT.K-005', '2019-07-23', 'Hadir', '2019-07-22 11:29:54', '2019-07-22 11:29:54'),
(32, 3, 'PWT2.K-001', '2019-07-23', 'Hadir', '2019-07-22 17:50:06', '2019-07-22 17:50:06'),
(33, 3, 'PWT2.K-002', '2019-07-23', 'Hadir', '2019-07-22 17:50:13', '2019-07-22 17:50:13'),
(34, 3, 'PWT2.K-003', '2019-07-23', 'Hadir', '2019-07-22 17:50:20', '2019-07-22 17:50:20'),
(35, 3, 'PWT2.K-004', '2019-07-23', 'Alfa', '2019-07-22 17:50:26', '2019-07-22 17:50:26'),
(36, 3, 'PWT2.K-005', '2019-07-23', 'Hadir', '2019-07-22 17:50:30', '2019-07-22 17:50:30'),
(37, 4, 'YK.K-001', '2019-07-23', 'Hadir', '2019-07-22 18:10:23', '2019-07-22 18:10:23'),
(38, 4, 'YK.K-002', '2019-07-23', 'Hadir', '2019-07-22 18:10:30', '2019-07-22 18:10:30'),
(39, 4, 'YK.K-003', '2019-07-23', 'Sakit', '2019-07-22 18:10:36', '2019-07-22 18:10:36'),
(40, 4, 'YK.K-004', '2019-07-23', 'Hadir', '2019-07-22 18:10:45', '2019-07-22 18:10:45'),
(41, 4, 'YK.K-005', '2019-07-23', 'Hadir', '2019-07-22 18:10:51', '2019-07-22 18:10:51');

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
(8, 1, 'JKT.B-005', 'Kapsul', 'Diapet', 'Strip', 2500, 2, '2019-07-01', '2022-02-23', '2019-07-22 11:20:22', '2019-07-22 11:20:22'),
(9, 1, 'JKT.B-004', 'Tablet Kunyah', 'Promagh', 'Strip', 6000, 1, '2019-04-17', '2022-05-23', '2019-07-22 11:20:22', '2019-07-22 11:20:22'),
(10, 1, 'JKT.B-006', 'Tablet', 'Ambroxol', 'Butir', 5000, 1, '2019-07-11', '2021-06-06', '2019-07-22 11:21:38', '2019-07-22 11:21:38'),
(11, 1, 'JKT.B-003', 'Tablet', 'Intunal F', 'Strip', 4000, 3, '2019-05-21', '2022-12-21', '2019-07-22 11:21:38', '2019-07-22 11:21:38'),
(12, 1, 'JKT.B-005', 'Kapsul', 'Diapet', 'Strip', 2500, 5, '2019-07-01', '2022-02-23', '2019-07-22 11:22:20', '2019-07-22 11:22:20'),
(13, 1, 'JKT.B-006', 'Tablet', 'Ambroxol', 'Butir', 5000, 1, '2019-07-11', '2021-06-06', '2019-07-22 11:22:20', '2019-07-22 11:22:20'),
(14, 2, 'PWT.B-001', 'Tablet', 'Sanmol', 'Strip', 3000, 2, '2019-07-01', '2021-06-15', '2019-07-22 11:50:59', '2019-07-22 11:50:59'),
(15, 2, 'PWT.B-003', 'Salep', 'Daktarin', 'Pack', 10000, 1, '2019-06-12', '2021-01-19', '2019-07-22 11:50:59', '2019-07-22 11:50:59'),
(16, 2, 'PWT-B.005', 'Sirup', 'Vicks', 'Botol', 15000, 1, '2019-07-10', '2022-06-21', '2019-07-22 11:51:00', '2019-07-22 11:51:00'),
(17, 2, 'PWT-B.010', 'Lainnya', 'Extra Joss', 'Pack', 6000, 1, '2019-06-01', '2021-02-01', '2019-07-22 11:51:00', '2019-07-22 11:51:00'),
(18, 2, 'PWT.B-001', 'Tablet', 'Sanmol', 'Strip', 3000, 3, '2019-07-01', '2021-06-15', '2019-07-22 11:51:29', '2019-07-22 11:51:29'),
(19, 2, 'PWT-B.007', 'Sirup', 'Icadryl', 'Botol', 12500, 1, '2019-07-07', '2022-02-08', '2019-07-22 11:51:29', '2019-07-22 11:51:29'),
(20, 2, 'PWT.B-002', 'Kapsul', 'Diapet', 'Strip', 2500, 1, '2019-07-01', '2021-08-24', '2019-07-22 11:51:29', '2019-07-22 11:51:29'),
(21, 2, 'PWT.B-002', 'Kapsul', 'Diapet', 'Strip', 2500, 3, '2019-07-01', '2021-08-24', '2019-07-22 11:51:54', '2019-07-22 11:51:54'),
(22, 2, 'PWT-B.006', 'Salep', 'Counterpain', 'Pack', 15000, 1, '2019-07-10', '2022-05-16', '2019-07-22 11:51:55', '2019-07-22 11:51:55'),
(23, 2, 'PWT-B.007', 'Sirup', 'Icadryl', 'Botol', 12500, 1, '2019-07-07', '2022-02-08', '2019-07-22 11:51:55', '2019-07-22 11:51:55'),
(24, 3, 'PWT2.B-005', 'Sirup', 'Woods', 'Botol', 9000, 1, '2019-07-11', '2022-06-01', '2019-07-22 18:00:58', '2019-07-22 18:00:58'),
(25, 3, 'PWT2.B-001', 'Tablet', 'Paracetamol', 'Strip', 3500, 3, '2019-06-26', '2022-06-22', '2019-07-22 18:01:31', '2019-07-22 18:01:31'),
(26, 3, 'PWT2.B-006', 'Tablet', 'Intunal', 'Strip', 3000, 3, '2019-07-01', '2022-02-01', '2019-07-22 18:01:31', '2019-07-22 18:01:31'),
(27, 3, 'PWT2.B-005', 'Sirup', 'Woods', 'Botol', 9000, 1, '2019-07-11', '2022-06-01', '2019-07-22 18:01:31', '2019-07-22 18:01:31'),
(28, 3, 'PWT2.B-003', 'Kapsul', 'Diapet', 'Strip', 2500, 2, '2019-07-16', '2022-01-31', '2019-07-22 18:02:11', '2019-07-22 18:02:11'),
(29, 3, 'PWT2.B-004', 'Tablet Kunyah', 'Promagh', 'Strip', 6000, 1, '2019-07-01', '2022-11-01', '2019-07-22 18:02:11', '2019-07-22 18:02:11'),
(30, 4, 'YK.B-002', 'Tablet Kunyah', 'Promagh', 'Strip', 6000, 4, '2019-07-05', '2022-08-10', '2019-07-22 18:25:57', '2019-07-22 18:25:57'),
(31, 4, 'YK.B-001', 'Sirup', 'OBH', 'Botol', 15000, 1, '2019-07-05', '2022-08-10', '2019-07-22 18:25:57', '2019-07-22 18:25:57'),
(32, 4, 'YK.B-008', 'Tablet', 'Paramex', 'Strip', 5000, 4, '2019-07-05', '2022-08-10', '2019-07-22 18:27:08', '2019-07-22 18:27:08'),
(33, 4, 'YK.B-006', 'Tablet', 'Sanmol', 'Strip', 8000, 2, '2019-07-05', '2022-08-10', '2019-07-22 18:27:08', '2019-07-22 18:27:08'),
(34, 4, 'YK.B-004', 'Salep', 'Kalpanax', 'Pack', 12000, 1, '2019-07-05', '2022-08-10', '2019-07-22 18:28:05', '2019-07-22 18:28:05'),
(35, 4, 'YK.B-009', 'Tablet', 'Mixagrip', 'Strip', 13000, 3, '2019-07-05', '2022-08-10', '2019-07-22 18:28:05', '2019-07-22 18:28:05');

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
(3, 1, 'JKT.B-001', 'Tablet', 'Neozep', 'Strip', 2700, 88, '2019-07-01', '2022-06-22', '2019-07-22 11:06:09', '2019-07-22 11:06:09'),
(4, 1, 'JKT.B-002', 'Tablet', 'Intunal', 'Strip', 3500, 76, '2019-05-21', '2022-01-02', '2019-07-22 11:06:39', '2019-07-22 11:06:39'),
(5, 1, 'JKT.B-003', 'Tablet', 'Intunal F', 'Strip', 4000, 53, '2019-05-21', '2022-12-21', '2019-07-22 11:07:07', '2019-07-22 11:07:07'),
(6, 1, 'JKT.B-004', 'Tablet Kunyah', 'Promagh', 'Strip', 6000, 30, '2019-04-17', '2022-05-23', '2019-07-22 11:07:51', '2019-07-22 11:07:51'),
(7, 1, 'JKT.B-005', 'Kapsul', 'Diapet', 'Strip', 2500, 29, '2019-07-01', '2022-02-23', '2019-07-22 11:08:44', '2019-07-22 11:08:44'),
(8, 1, 'JKT.B-006', 'Tablet', 'Ambroxol', 'Butir', 5000, 100, '2019-07-11', '2021-06-06', '2019-07-22 11:10:20', '2019-07-22 11:10:20'),
(9, 1, 'JKT.B-006', 'Salep', 'Counterpain', 'Pack', 15000, 20, '2019-07-10', '2021-11-16', '2019-07-22 11:11:22', '2019-07-22 11:11:22'),
(10, 1, 'JKT.B-007', 'Salep', 'Hot In Cream', 'Pack', 12000, 20, '2019-07-10', '2021-06-15', '2019-07-22 11:14:36', '2019-07-22 11:14:36'),
(11, 1, 'JKT.B-008', 'Tablet', 'Panadol', 'Strip', 4500, 38, '2019-06-18', '2021-10-27', '2019-07-22 11:16:24', '2019-07-22 11:16:24'),
(12, 1, 'JKT.B-009', 'Lainnya', 'Larutan Cap Kaki Tiga', 'Botol', 4500, 20, '2019-06-20', '2021-01-19', '2019-07-22 11:17:04', '2019-07-22 11:17:04'),
(13, 1, 'JKT.B-010', 'Lainnya', 'Bear Brand', 'Botol', 8000, 40, '2019-06-20', '2020-12-01', '2019-07-22 11:17:34', '2019-07-22 11:17:34'),
(14, 2, 'PWT.B-001', 'Tablet', 'Sanmol', 'Strip', 3000, 30, '2019-07-01', '2021-06-15', '2019-07-22 11:42:09', '2019-07-22 11:42:09'),
(15, 2, 'PWT.B-002', 'Kapsul', 'Diapet', 'Strip', 2500, 55, '2019-07-01', '2021-08-24', '2019-07-22 11:42:37', '2019-07-22 11:42:37'),
(16, 2, 'PWT.B-003', 'Salep', 'Daktarin', 'Pack', 10000, 20, '2019-06-12', '2021-01-19', '2019-07-22 11:43:10', '2019-07-22 11:43:10'),
(17, 2, 'PWT.B-004', 'Tablet Kunyah', 'Promagh', 'Strip', 5000, 50, '2019-06-28', '2021-01-01', '2019-07-22 11:43:44', '2019-07-22 11:43:44'),
(18, 2, 'PWT-B.005', 'Sirup', 'Vicks', 'Botol', 15000, 30, '2019-07-10', '2022-06-21', '2019-07-22 11:45:01', '2019-07-22 11:45:01'),
(19, 2, 'PWT-B.006', 'Salep', 'Counterpain', 'Pack', 15000, 30, '2019-07-10', '2022-05-16', '2019-07-22 11:45:29', '2019-07-22 11:45:29'),
(20, 2, 'PWT-B.007', 'Sirup', 'Icadryl', 'Botol', 12500, 40, '2019-07-07', '2022-02-08', '2019-07-22 11:46:00', '2019-07-22 11:46:00'),
(21, 2, 'PWT-B.008', 'Serbuk', 'Adem Sari', 'Pack', 13000, 20, '2019-06-02', '2021-01-31', '2019-07-22 11:47:26', '2019-07-22 11:47:26'),
(22, 2, 'PWT-B.009', 'Lainnya', 'Fresh Care', 'Botol', 75000, 40, '2019-07-23', '2021-01-31', '2019-07-22 11:49:20', '2019-07-22 11:49:20'),
(23, 2, 'PWT-B.010', 'Lainnya', 'Extra Joss', 'Pack', 6000, 10, '2019-06-01', '2021-02-01', '2019-07-22 11:50:10', '2019-07-22 11:50:10'),
(24, 3, 'PWT2.B-001', 'Tablet', 'Paracetamol', 'Strip', 3500, 60, '2019-06-26', '2022-06-22', '2019-07-22 17:53:07', '2019-07-22 17:53:07'),
(25, 3, 'PWT2.B-002', 'Tablet', 'Neozep', 'Strip', 2500, 40, '2019-07-23', '2022-01-19', '2019-07-22 17:53:53', '2019-07-22 17:53:53'),
(26, 3, 'PWT2.B-003', 'Kapsul', 'Diapet', 'Strip', 2500, 40, '2019-07-16', '2022-01-31', '2019-07-22 17:54:55', '2019-07-22 17:54:55'),
(27, 3, 'PWT2.B-004', 'Tablet Kunyah', 'Promagh', 'Strip', 6000, 30, '2019-07-01', '2022-11-01', '2019-07-22 17:55:30', '2019-07-22 17:55:30'),
(28, 3, 'PWT2.B-005', 'Sirup', 'Woods', 'Botol', 9000, 35, '2019-07-11', '2022-06-01', '2019-07-22 17:56:03', '2019-07-22 17:56:03'),
(29, 3, 'PWT2.B-006', 'Tablet', 'Intunal', 'Strip', 3000, 50, '2019-07-01', '2022-02-01', '2019-07-22 17:57:00', '2019-07-22 17:57:00'),
(30, 3, 'PWT2.B-007', 'Tablet', 'Intunal F', 'Strip', 4000, 50, '2019-07-01', '2022-02-01', '2019-07-22 17:57:10', '2019-07-22 17:57:10'),
(31, 3, 'PWT2.B-007', 'Salep', 'Counterpain', 'Pack', 15000, 20, '2019-06-24', '2022-07-01', '2019-07-22 17:57:51', '2019-07-22 17:57:51'),
(32, 3, 'PWT2.B-008', 'Salep', 'Hot In Cream', 'Pack', 12000, 20, '2019-06-30', '2022-09-01', '2019-07-22 17:58:27', '2019-07-22 17:58:27'),
(33, 3, 'PWT2.B-009', 'Tablet', 'Panadol', 'Strip', 5000, 40, '2019-07-10', '2022-12-01', '2019-07-22 17:59:17', '2019-07-22 17:59:17'),
(34, 3, 'PWT2.B-010', 'Salep', 'Daktarin', 'Pack', 8000, 20, '2019-06-30', '2022-03-01', '2019-07-22 18:00:05', '2019-07-22 18:00:05'),
(35, 4, 'YK.B-001', 'Sirup', 'OBH', 'Botol', 15000, 30, '2019-07-05', '2022-08-10', '2019-07-22 18:15:24', '2019-07-22 18:15:24'),
(36, 4, 'YK.B-001', 'Sirup', 'OBH', 'Botol', 15000, 30, '2019-07-05', '2022-08-10', '2019-07-22 18:15:44', '2019-07-22 18:15:44'),
(37, 4, 'YK.B-002', 'Tablet Kunyah', 'Promagh', 'Strip', 6000, 50, '2019-07-05', '2022-08-10', '2019-07-22 18:16:31', '2019-07-22 18:16:31'),
(38, 4, 'YK.B-003', 'Kapsul', 'Diapet', 'Strip', 3500, 40, '2019-07-05', '2022-08-10', '2019-07-22 18:17:04', '2019-07-22 18:17:04'),
(39, 4, 'YK.B-004', 'Salep', 'Kalpanax', 'Pack', 12000, 20, '2019-07-05', '2022-08-10', '2019-07-22 18:17:42', '2019-07-22 18:17:42'),
(40, 4, 'YK.B-005', 'Sirup', 'Icadryl', 'Botol', 15000, 35, '2019-07-05', '2022-08-10', '2019-07-22 18:18:28', '2019-07-22 18:18:28'),
(41, 4, 'YK.B-006', 'Tablet', 'Sanmol', 'Strip', 8000, 35, '2019-07-05', '2022-08-10', '2019-07-22 18:19:07', '2019-07-22 18:19:07'),
(42, 4, 'YK.B-007', 'Salep', 'Betason', 'Pack', 10000, 25, '2019-07-05', '2022-08-10', '2019-07-22 18:19:54', '2019-07-22 18:19:54'),
(43, 4, 'YK.B-008', 'Tablet', 'Paramex', 'Strip', 5000, 45, '2019-07-05', '2022-08-10', '2019-07-22 18:20:24', '2019-07-22 18:20:24'),
(44, 4, 'YK.B-009', 'Tablet', 'Mixagrip', 'Strip', 13000, 30, '2019-07-05', '2022-08-10', '2019-07-22 18:21:09', '2019-07-22 18:21:09'),
(45, 4, 'YK.B-009', 'Tablet', 'Mixagrip', 'Strip', 13000, 30, '2019-07-05', '2022-08-10', '2019-07-22 18:21:10', '2019-07-22 18:21:10'),
(46, 4, 'YK.B-010', 'Sirup', 'Tolak Angin', 'Pack', 2500, 50, '2019-07-05', '2022-08-10', '2019-07-22 18:21:43', '2019-07-22 18:21:43');

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
(1, 'Jakarta', 'Jalan Kapten No. 129, Jakarta Pusat', NULL, NULL),
(2, 'Purwokerto', 'Jalan Jendral Sudirman No, 151, Purwokerto', NULL, NULL),
(3, 'Purwokerto 2', 'Jalan Overste Isdiman No. 98, Purwokerto', NULL, NULL),
(4, 'Yogyakarta', 'Jalan Malioboro No. 13, Yogyakarta', NULL, NULL);

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
(22, 1, 'JKT.B-001', 'Tablet', 'Neozep', 'Strip', 2700, 88, '2019-07-01', '2022-06-22', '2019-07-22 11:06:09', '2019-07-22 11:06:09'),
(23, 1, 'JKT.B-002', 'Tablet', 'Intunal', 'Strip', 3500, 76, '2019-05-21', '2022-01-02', '2019-07-22 11:06:39', '2019-07-22 11:06:39'),
(24, 1, 'JKT.B-003', 'Tablet', 'Intunal F', 'Strip', 4000, 50, '2019-05-21', '2022-12-21', '2019-07-22 11:07:07', '2019-07-22 11:07:07'),
(25, 1, 'JKT.B-004', 'Tablet Kunyah', 'Promagh', 'Strip', 6000, 29, '2019-04-17', '2022-05-23', '2019-07-22 11:07:51', '2019-07-22 11:07:51'),
(26, 1, 'JKT.B-005', 'Kapsul', 'Diapet', 'Strip', 2500, 22, '2019-07-01', '2022-02-23', '2019-07-22 11:08:44', '2019-07-22 11:08:44'),
(27, 1, 'JKT.B-006', 'Tablet', 'Ambroxol', 'Butir', 5000, 98, '2019-07-11', '2021-06-06', '2019-07-22 11:10:20', '2019-07-22 11:10:20'),
(28, 1, 'JKT.B-006', 'Salep', 'Counterpain', 'Pack', 15000, 18, '2019-07-10', '2021-11-16', '2019-07-22 11:11:22', '2019-07-22 11:11:22'),
(29, 1, 'JKT.B-007', 'Salep', 'Hot In Cream', 'Pack', 12000, 20, '2019-07-10', '2021-06-15', '2019-07-22 11:14:36', '2019-07-22 11:14:36'),
(30, 1, 'JKT.B-008', 'Tablet', 'Panadol', 'Strip', 4500, 38, '2019-06-18', '2021-10-27', '2019-07-22 11:16:23', '2019-07-22 11:16:23'),
(31, 1, 'JKT.B-009', 'Lainnya', 'Larutan Cap Kaki Tiga', 'Botol', 4500, 20, '2019-06-20', '2021-01-19', '2019-07-22 11:17:04', '2019-07-22 11:17:04'),
(32, 1, 'JKT.B-010', 'Lainnya', 'Bear Brand', 'Botol', 8000, 40, '2019-06-20', '2020-12-01', '2019-07-22 11:17:33', '2019-07-22 11:17:33'),
(33, 2, 'PWT.B-001', 'Tablet', 'Sanmol', 'Strip', 3000, 25, '2019-07-01', '2021-06-15', '2019-07-22 11:42:09', '2019-07-22 11:42:09'),
(34, 2, 'PWT.B-002', 'Kapsul', 'Diapet', 'Strip', 2500, 51, '2019-07-01', '2021-08-24', '2019-07-22 11:42:37', '2019-07-22 11:42:37'),
(35, 2, 'PWT.B-003', 'Salep', 'Daktarin', 'Pack', 10000, 19, '2019-06-12', '2021-01-19', '2019-07-22 11:43:10', '2019-07-22 11:43:10'),
(36, 2, 'PWT.B-004', 'Tablet Kunyah', 'Promagh', 'Strip', 5000, 50, '2019-06-28', '2021-01-01', '2019-07-22 11:43:44', '2019-07-22 11:43:44'),
(37, 2, 'PWT-B.005', 'Sirup', 'Vicks', 'Botol', 15000, 29, '2019-07-10', '2022-06-21', '2019-07-22 11:45:01', '2019-07-22 11:45:01'),
(38, 2, 'PWT-B.006', 'Salep', 'Counterpain', 'Pack', 15000, 29, '2019-07-10', '2022-05-16', '2019-07-22 11:45:29', '2019-07-22 11:45:29'),
(39, 2, 'PWT-B.007', 'Sirup', 'Icadryl', 'Botol', 12500, 38, '2019-07-07', '2022-02-08', '2019-07-22 11:46:00', '2019-07-22 11:46:00'),
(40, 2, 'PWT-B.008', 'Serbuk', 'Adem Sari', 'Pack', 13000, 20, '2019-06-02', '2021-01-31', '2019-07-22 11:47:26', '2019-07-22 11:47:26'),
(41, 2, 'PWT-B.009', 'Lainnya', 'Fresh Care', 'Botol', 75000, 40, '2019-07-23', '2021-01-31', '2019-07-22 11:49:20', '2019-07-22 11:49:20'),
(42, 2, 'PWT-B.010', 'Lainnya', 'Extra Joss', 'Pack', 6000, 9, '2019-06-01', '2021-02-01', '2019-07-22 11:50:10', '2019-07-22 11:50:10'),
(43, 3, 'PWT2.B-001', 'Tablet', 'Paracetamol', 'Strip', 3500, 57, '2019-06-26', '2022-06-22', '2019-07-22 17:53:06', '2019-07-22 17:53:06'),
(44, 3, 'PWT2.B-002', 'Tablet', 'Neozep', 'Strip', 2500, 40, '2019-07-23', '2022-01-19', '2019-07-22 17:53:53', '2019-07-22 17:53:53'),
(45, 3, 'PWT2.B-003', 'Kapsul', 'Diapet', 'Strip', 2500, 38, '2019-07-16', '2022-01-31', '2019-07-22 17:54:55', '2019-07-22 17:54:55'),
(46, 3, 'PWT2.B-004', 'Tablet Kunyah', 'Promagh', 'Strip', 6000, 29, '2019-07-01', '2022-11-01', '2019-07-22 17:55:30', '2019-07-22 17:55:30'),
(47, 3, 'PWT2.B-005', 'Sirup', 'Woods', 'Botol', 9000, 33, '2019-07-11', '2022-06-01', '2019-07-22 17:56:03', '2019-07-22 17:56:03'),
(48, 3, 'PWT2.B-006', 'Tablet', 'Intunal', 'Strip', 3000, 47, '2019-07-01', '2022-02-01', '2019-07-22 17:56:59', '2019-07-22 17:56:59'),
(49, 3, 'PWT2.B-007', 'Tablet', 'Intunal F', 'Strip', 4000, 50, '2019-07-01', '2022-02-01', '2019-07-22 17:57:10', '2019-07-22 17:57:10'),
(50, 3, 'PWT2.B-007', 'Salep', 'Counterpain', 'Pack', 15000, 20, '2019-06-24', '2022-07-01', '2019-07-22 17:57:51', '2019-07-22 17:57:51'),
(51, 3, 'PWT2.B-008', 'Salep', 'Hot In Cream', 'Pack', 12000, 20, '2019-06-30', '2022-09-01', '2019-07-22 17:58:27', '2019-07-22 17:58:27'),
(52, 3, 'PWT2.B-009', 'Tablet', 'Panadol', 'Strip', 5000, 40, '2019-07-10', '2022-12-01', '2019-07-22 17:59:17', '2019-07-22 17:59:17'),
(53, 3, 'PWT2.B-010', 'Salep', 'Daktarin', 'Pack', 8000, 20, '2019-06-30', '2022-03-01', '2019-07-22 18:00:04', '2019-07-22 18:00:04'),
(55, 4, 'YK.B-001', 'Sirup', 'OBH', 'Botol', 15000, 29, '2019-07-05', '2022-08-10', '2019-07-22 18:15:44', '2019-07-22 18:15:44'),
(56, 4, 'YK.B-002', 'Tablet Kunyah', 'Promagh', 'Strip', 6000, 46, '2019-07-05', '2022-08-10', '2019-07-22 18:16:31', '2019-07-22 18:16:31'),
(57, 4, 'YK.B-003', 'Kapsul', 'Diapet', 'Strip', 3500, 40, '2019-07-05', '2022-08-10', '2019-07-22 18:17:04', '2019-07-22 18:17:04'),
(58, 4, 'YK.B-004', 'Salep', 'Kalpanax', 'Pack', 12000, 19, '2019-07-05', '2022-08-10', '2019-07-22 18:17:42', '2019-07-22 18:17:42'),
(59, 4, 'YK.B-005', 'Sirup', 'Icadryl', 'Botol', 15000, 35, '2019-07-05', '2022-08-10', '2019-07-22 18:18:28', '2019-07-22 18:18:28'),
(60, 4, 'YK.B-006', 'Tablet', 'Sanmol', 'Strip', 8000, 33, '2019-07-05', '2022-08-10', '2019-07-22 18:19:07', '2019-07-22 18:19:07'),
(61, 4, 'YK.B-007', 'Salep', 'Betason', 'Pack', 10000, 25, '2019-07-05', '2022-08-10', '2019-07-22 18:19:54', '2019-07-22 18:19:54'),
(62, 4, 'YK.B-008', 'Tablet', 'Paramex', 'Strip', 5000, 41, '2019-07-05', '2022-08-10', '2019-07-22 18:20:24', '2019-07-22 18:20:24'),
(63, 4, 'YK.B-009', 'Tablet', 'Mixagrip', 'Strip', 13000, 27, '2019-07-05', '2022-08-10', '2019-07-22 18:21:09', '2019-07-22 18:21:09'),
(65, 4, 'YK.B-010', 'Sirup', 'Tolak Angin', 'Pack', 2500, 50, '2019-07-05', '2022-08-10', '2019-07-22 18:21:43', '2019-07-22 18:21:43');

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
(4, 1, 'JKT.K-001', 'Andhika Prasetyo', 'Laki-Laki', 'Kebumen', '1997-07-17', 'Kepala Cabang', '2019-07-22 10:52:49', '2019-07-22 10:52:49'),
(5, 1, 'JKT.K-002', 'Lisa Sulasmi', 'Perempuan', 'Purwokerto', '1997-06-01', 'Apoteker', '2019-07-22 10:53:40', '2019-07-22 10:53:40'),
(6, 1, 'JKT.K-003', 'Cila Mencilat', 'Perempuan', 'Purwokerto', '1998-02-02', 'Asisten Apoteker', '2019-07-22 10:54:23', '2019-07-22 10:54:23'),
(7, 1, 'JKT.K-004', 'Hery Mukti', 'Laki-Laki', 'Jakarta', '1995-04-03', 'Staff Keuangan', '2019-07-22 10:55:33', '2019-07-22 10:55:33'),
(8, 1, 'JKT.K-005', 'Bambang Sentosa', 'Laki-Laki', 'Jakarta', '1995-10-20', 'Kasir', '2019-07-22 10:56:06', '2019-07-22 10:56:06'),
(9, 2, 'PWT.K-001', 'Ezekiel Pradipta', 'Laki-Laki', 'Kober', '1998-05-13', 'Kepala Cabang', '2019-07-22 11:25:16', '2019-07-22 11:25:16'),
(10, 2, 'PWT.K-002', 'Sutopo Markim', 'Laki-Laki', 'Banyumas', '1983-06-09', 'Apoteker', '2019-07-22 11:26:02', '2019-07-22 11:26:02'),
(11, 2, 'PWT.K-003', 'Bambang Arane', 'Laki-Laki', 'Cilacap', '1983-12-15', 'Asisten Apoteker', '2019-07-22 11:27:04', '2019-07-22 11:27:04'),
(12, 2, 'PWT.K-004', 'Sirah Mujur', 'Perempuan', 'Slawi', '1997-02-19', 'Staff Keuangan', '2019-07-22 11:28:06', '2019-07-22 11:28:06'),
(13, 2, 'PWT.K-005', 'Budi Rahman', 'Laki-Laki', 'Tegal', '1997-05-20', 'Kasir', '2019-07-22 11:28:47', '2019-07-22 11:28:47'),
(14, 3, 'PWT2.K-001', 'Yankotinu Jonnata', 'Laki-Laki', 'Slawi', '1998-01-19', 'Kepala Cabang', '2019-07-22 17:47:32', '2019-07-22 17:47:32'),
(15, 3, 'PWT2.K-002', 'Bambang Suherman', 'Laki-Laki', 'Purwokerto', '1998-11-11', 'Apoteker', '2019-07-22 17:48:01', '2019-07-22 17:48:01'),
(16, 3, 'PWT2.K-003', 'Murtiasih', 'Perempuan', 'Ajibarang', '1998-05-12', 'Asisten Apoteker', '2019-07-22 17:48:28', '2019-07-22 17:48:28'),
(17, 3, 'PWT2.K-004', 'Subhan', 'Laki-Laki', 'Bumiayu', '1998-06-17', 'Staff Keuangan', '2019-07-22 17:49:10', '2019-07-22 17:49:10'),
(18, 3, 'PWT2.K-005', 'Mei Dwila', 'Perempuan', 'Purwokerto', '1997-05-13', 'Kasir', '2019-07-22 17:49:45', '2019-07-22 17:49:45'),
(19, 4, 'YK.K-001', 'Salsabila', 'Perempuan', 'Pemalang', '1997-12-18', 'Kepala Cabang', '2019-07-22 18:04:13', '2019-07-22 18:04:13'),
(20, 4, 'YK.K-002', 'Yashinta', 'Perempuan', 'Purworejo', '2000-04-08', 'Apoteker', '2019-07-22 18:05:32', '2019-07-22 18:05:32'),
(21, 4, 'YK.K-003', 'Sausan', 'Perempuan', 'Magelang', '1999-04-24', 'Asisten Apoteker', '2019-07-22 18:06:13', '2019-07-22 18:06:13'),
(22, 4, 'YK.K-004', 'Haris', 'Laki-Laki', 'Yogyakarta', '1997-05-06', 'Staff Keuangan', '2019-07-22 18:07:15', '2019-07-22 18:07:15'),
(23, 4, 'YK.K-005', 'Ninda Putri Trisiana', 'Perempuan', 'Purwokerto', '1998-07-23', 'Kasir', '2019-07-22 18:09:18', '2019-07-22 18:09:18');

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
(6, 1, 'JKT.K-001', '2019-07-31', 'Andhika Prasetyo', 'Kepala Cabang', 3900000, 0, 3900000, 7800000, '2019-07-22 11:02:01', '2019-07-22 11:02:01'),
(7, 1, 'JKT.K-002', '2019-07-31', 'Lisa Sulasmi', 'Apoteker', 3900000, 0, 3120000, 7020000, '2019-07-22 11:02:11', '2019-07-22 11:02:11'),
(8, 1, 'JKT.K-003', '2019-07-31', 'Cila Mencilat', 'Asisten Apoteker', 3900000, 50000, 2340000, 6190000, '2019-07-22 11:02:32', '2019-07-22 11:02:32'),
(9, 1, 'JKT.K-004', '2019-07-31', 'Hery Mukti', 'Staff Keuangan', 3900000, 0, 3120000, 7020000, '2019-07-22 11:03:44', '2019-07-22 11:03:44'),
(10, 1, 'JKT.K-005', '2019-07-31', 'Bambang Sentosa', 'Kasir', 3900000, 0, 2340000, 6240000, '2019-07-22 11:03:54', '2019-07-22 11:03:54'),
(11, 2, 'PWT.K-001', '2019-07-31', 'Ezekiel Pradipta', 'Kepala Cabang', 1750000, 0, 1750000, 3500000, '2019-07-22 11:30:12', '2019-07-22 11:30:12'),
(12, 2, 'PWT.K-002', '2019-07-31', 'Sutopo Markim', 'Apoteker', 1750000, 0, 1400000, 3150000, '2019-07-22 11:30:22', '2019-07-22 11:30:22'),
(13, 2, 'PWT.K-003', '2019-07-31', 'Bambang Arane', 'Asisten Apoteker', 1750000, 0, 1050000, 2800000, '2019-07-22 11:30:29', '2019-07-22 11:30:29'),
(14, 2, 'PWT.K-004', '2019-07-31', 'Sirah Mujur', 'Staff Keuangan', 1750000, 0, 1400000, 3150000, '2019-07-22 11:30:45', '2019-07-22 11:30:45'),
(15, 2, 'PWT.K-005', '2019-07-31', 'Budi Rahman', 'Kasir', 1750000, 0, 1050000, 2800000, '2019-07-22 11:30:51', '2019-07-22 11:30:51'),
(16, 3, 'PWT2.K-001', '2019-07-31', 'Yankotinu Jonnata', 'Kepala Cabang', 1750000, 0, 1750000, 3500000, '2019-07-22 17:50:42', '2019-07-22 17:50:42'),
(17, 3, 'PWT2.K-002', '2019-07-31', 'Bambang Suherman', 'Apoteker', 1750000, 0, 1400000, 3150000, '2019-07-22 17:50:51', '2019-07-22 17:50:51'),
(18, 3, 'PWT2.K-003', '2019-07-23', 'Murtiasih', 'Asisten Apoteker', 1750000, 0, 1050000, 2800000, '2019-07-22 17:51:03', '2019-07-22 17:51:03'),
(19, 3, 'PWT2.K-004', '2019-07-23', 'Subhan', 'Staff Keuangan', 1750000, 50000, 1400000, 3100000, '2019-07-22 17:51:15', '2019-07-22 17:51:15'),
(20, 3, 'PWT2.K-005', '2019-07-23', 'Mei Dwila', 'Kasir', 1750000, 0, 1050000, 2800000, '2019-07-22 17:51:25', '2019-07-22 17:51:25'),
(21, 4, 'YK.K-001', '2019-07-31', 'Salsabila', 'Kepala Cabang', 1850000, 0, 1850000, 3700000, '2019-07-22 18:11:19', '2019-07-22 18:11:19'),
(22, 4, 'YK.K-002', '2019-07-31', 'Yashinta', 'Apoteker', 1850000, 0, 1480000, 3330000, '2019-07-22 18:11:35', '2019-07-22 18:11:35'),
(23, 4, 'YK.K-003', '2019-07-31', 'Sausan', 'Asisten Apoteker', 1850000, 0, 1110000, 2960000, '2019-07-22 18:11:53', '2019-07-22 18:11:53'),
(24, 4, 'YK.K-004', '2019-07-31', 'Haris', 'Staff Keuangan', 1850000, 0, 1480000, 3330000, '2019-07-22 18:12:07', '2019-07-22 18:12:07'),
(25, 4, 'YK.K-005', '2019-07-31', 'Ninda Putri Trisiana', 'Kasir', 1850000, 0, 1110000, 2960000, '2019-07-22 18:12:18', '2019-07-22 18:12:18');

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
(12, '$2y$10$CWzEUYaOTDEX.exZsN0tHO4wLXNxlH7X3rcXitobW5DutTbWoDLhq', 1, 'Bambang Sentosa', '2019-07-22', 'UMUM', '-', 'JKT.B-005', 2, 5000, '2019-07-22 11:20:22', '2019-07-22 11:20:22'),
(13, '$2y$10$CWzEUYaOTDEX.exZsN0tHO4wLXNxlH7X3rcXitobW5DutTbWoDLhq', 1, 'Bambang Sentosa', '2019-07-22', 'UMUM', '-', 'JKT.B-004', 1, 6000, '2019-07-22 11:20:22', '2019-07-22 11:20:22'),
(14, '$2y$10$c6sukLTXxpvHeKiluImAYeUqB7dl6gG8H8p0JfOEHcRzfHoZRQHH6', 1, 'Bambang Sentosa', '2019-07-22', 'RESEP DOKTER', 'Toponing Kali', 'JKT.B-006', 1, 5000, '2019-07-22 11:21:38', '2019-07-22 11:21:38'),
(15, '$2y$10$c6sukLTXxpvHeKiluImAYeUqB7dl6gG8H8p0JfOEHcRzfHoZRQHH6', 1, 'Bambang Sentosa', '2019-07-22', 'RESEP DOKTER', 'Toponing Kali', 'JKT.B-003', 3, 12000, '2019-07-22 11:21:38', '2019-07-22 11:21:38'),
(16, '$2y$10$y.LwiD/B1jnxG8dA.G5zvOWH5oFxVt.i3JF1V7iZ.8Agi77O8Fjl2', 1, 'Bambang Sentosa', '2019-07-22', 'BPJS', 'Anabae Rupane', 'JKT.B-005', 5, 12500, '2019-07-22 11:22:20', '2019-07-22 11:22:20'),
(17, '$2y$10$y.LwiD/B1jnxG8dA.G5zvOWH5oFxVt.i3JF1V7iZ.8Agi77O8Fjl2', 1, 'Bambang Sentosa', '2019-07-22', 'BPJS', 'Anabae Rupane', 'JKT.B-006', 1, 5000, '2019-07-22 11:22:20', '2019-07-22 11:22:20'),
(18, '$2y$10$tQGbfU/O4dRH8/7Y7nBpNeSxSavYhHNjdlrijRWzgo4SbgJmA2.Wy', 2, 'Budi Rahman', '2019-07-22', 'UMUM', '-', 'PWT.B-001', 2, 6000, '2019-07-22 11:50:59', '2019-07-22 11:50:59'),
(19, '$2y$10$tQGbfU/O4dRH8/7Y7nBpNeSxSavYhHNjdlrijRWzgo4SbgJmA2.Wy', 2, 'Budi Rahman', '2019-07-22', 'UMUM', '-', 'PWT.B-003', 1, 10000, '2019-07-22 11:50:59', '2019-07-22 11:50:59'),
(20, '$2y$10$tQGbfU/O4dRH8/7Y7nBpNeSxSavYhHNjdlrijRWzgo4SbgJmA2.Wy', 2, 'Budi Rahman', '2019-07-22', 'UMUM', '-', 'PWT-B.005', 1, 15000, '2019-07-22 11:51:00', '2019-07-22 11:51:00'),
(21, '$2y$10$tQGbfU/O4dRH8/7Y7nBpNeSxSavYhHNjdlrijRWzgo4SbgJmA2.Wy', 2, 'Budi Rahman', '2019-07-22', 'UMUM', '-', 'PWT-B.010', 1, 6000, '2019-07-22 11:51:00', '2019-07-22 11:51:00'),
(22, '$2y$10$zT1Vdm71JT7wtUVqfnhMhOiVInSYSmxJhsHaQAbnYWnOvzE3itQqK', 2, 'Budi Rahman', '2019-07-22', 'RESEP DOKTER', 'Bimbang', 'PWT.B-001', 3, 9000, '2019-07-22 11:51:29', '2019-07-22 11:51:29'),
(23, '$2y$10$zT1Vdm71JT7wtUVqfnhMhOiVInSYSmxJhsHaQAbnYWnOvzE3itQqK', 2, 'Budi Rahman', '2019-07-22', 'RESEP DOKTER', 'Bimbang', 'PWT-B.007', 1, 12500, '2019-07-22 11:51:29', '2019-07-22 11:51:29'),
(24, '$2y$10$zT1Vdm71JT7wtUVqfnhMhOiVInSYSmxJhsHaQAbnYWnOvzE3itQqK', 2, 'Budi Rahman', '2019-07-22', 'RESEP DOKTER', 'Bimbang', 'PWT.B-002', 1, 2500, '2019-07-22 11:51:29', '2019-07-22 11:51:29'),
(25, '$2y$10$Dr3yZYhB6388JDc8H/lvrOvUlZz.RcFrB8FYqR61nhH734JutuLvq', 2, 'Budi Rahman', '2019-07-22', 'BPJS', 'Sutomo', 'PWT.B-002', 3, 7500, '2019-07-22 11:51:54', '2019-07-22 11:51:54'),
(26, '$2y$10$Dr3yZYhB6388JDc8H/lvrOvUlZz.RcFrB8FYqR61nhH734JutuLvq', 2, 'Budi Rahman', '2019-07-22', 'BPJS', 'Sutomo', 'PWT-B.006', 1, 15000, '2019-07-22 11:51:55', '2019-07-22 11:51:55'),
(27, '$2y$10$Dr3yZYhB6388JDc8H/lvrOvUlZz.RcFrB8FYqR61nhH734JutuLvq', 2, 'Budi Rahman', '2019-07-22', 'BPJS', 'Sutomo', 'PWT-B.007', 1, 12500, '2019-07-22 11:51:55', '2019-07-22 11:51:55'),
(28, '$2y$10$01wF5DMlpo9UYtJzlJlGtujeZPmMlv1FoCiEmhBVsSbNsWbk1Kuya', 3, 'Mei Dwila', '2019-07-23', 'UMUM', '-', 'PWT2.B-005', 1, 9000, '2019-07-22 18:00:58', '2019-07-22 18:00:58'),
(29, '$2y$10$3uAWNRNvjoRPddd7xkFYGOUNTTCCzI5Ot3jhsh.6OXM3PmOmBB7fe', 3, 'Mei Dwila', '2019-07-23', 'RESEP DOKTER', 'Bombong', 'PWT2.B-001', 3, 10500, '2019-07-22 18:01:30', '2019-07-22 18:01:30'),
(30, '$2y$10$3uAWNRNvjoRPddd7xkFYGOUNTTCCzI5Ot3jhsh.6OXM3PmOmBB7fe', 3, 'Mei Dwila', '2019-07-23', 'RESEP DOKTER', 'Bombong', 'PWT2.B-006', 3, 9000, '2019-07-22 18:01:31', '2019-07-22 18:01:31'),
(31, '$2y$10$3uAWNRNvjoRPddd7xkFYGOUNTTCCzI5Ot3jhsh.6OXM3PmOmBB7fe', 3, 'Mei Dwila', '2019-07-23', 'RESEP DOKTER', 'Bombong', 'PWT2.B-005', 1, 9000, '2019-07-22 18:01:31', '2019-07-22 18:01:31'),
(32, '$2y$10$aVQxcA1wm7XY/XtUQJ44ruXTh4D9K4OXEL7lQ3XpHmGzFpdwiqZ3u', 3, 'Mei Dwila', '2019-07-23', 'BPJS', 'Bimbang', 'PWT2.B-003', 2, 5000, '2019-07-22 18:02:11', '2019-07-22 18:02:11'),
(33, '$2y$10$aVQxcA1wm7XY/XtUQJ44ruXTh4D9K4OXEL7lQ3XpHmGzFpdwiqZ3u', 3, 'Mei Dwila', '2019-07-23', 'BPJS', 'Bimbang', 'PWT2.B-004', 1, 6000, '2019-07-22 18:02:11', '2019-07-22 18:02:11'),
(34, '$2y$10$/K4VLhW785BfmXfap0whX.mniuuLPkm2drRrapVKTEhBMph/UCOl6', 4, 'Ninda Putri Trisiana', '2019-07-23', 'UMUM', '-', 'YK.B-002', 4, 24000, '2019-07-22 18:25:56', '2019-07-22 18:25:56'),
(35, '$2y$10$/K4VLhW785BfmXfap0whX.mniuuLPkm2drRrapVKTEhBMph/UCOl6', 4, 'Ninda Putri Trisiana', '2019-07-23', 'UMUM', '-', 'YK.B-001', 1, 15000, '2019-07-22 18:25:57', '2019-07-22 18:25:57'),
(36, '$2y$10$WAcVN4/h0GXyetW2Uest1eEDQMwR26n3wjNrp4PTpRjvNk5tfcYpS', 4, 'Ninda Putri Trisiana', '2019-07-23', 'RESEP DOKTER', 'Salsabila', 'YK.B-008', 4, 20000, '2019-07-22 18:27:07', '2019-07-22 18:27:07'),
(37, '$2y$10$WAcVN4/h0GXyetW2Uest1eEDQMwR26n3wjNrp4PTpRjvNk5tfcYpS', 4, 'Ninda Putri Trisiana', '2019-07-23', 'RESEP DOKTER', 'Salsabila', 'YK.B-006', 2, 16000, '2019-07-22 18:27:08', '2019-07-22 18:27:08'),
(38, '$2y$10$Auh.1BvLVUaeuhgTHMjore/IYPdQnyBD21i9oBghDXkM//zY8o/Di', 4, 'Ninda Putri Trisiana', '2019-07-23', 'BPJS', 'Hari', 'YK.B-004', 1, 12000, '2019-07-22 18:28:05', '2019-07-22 18:28:05'),
(39, '$2y$10$Auh.1BvLVUaeuhgTHMjore/IYPdQnyBD21i9oBghDXkM//zY8o/Di', 4, 'Ninda Putri Trisiana', '2019-07-23', 'BPJS', 'Hari', 'YK.B-009', 3, 39000, '2019-07-22 18:28:05', '2019-07-22 18:28:05');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dataobat`
--
ALTER TABLE `dataobat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `datapegawai`
--
ALTER TABLE `datapegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gajikaryawan`
--
ALTER TABLE `gajikaryawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

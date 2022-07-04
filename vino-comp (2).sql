-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 05:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vino-comp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(4, 'Laptop', '2022-06-04 06:54:21', '2022-06-04 06:54:21'),
(5, 'Printer', '2022-06-04 06:54:21', '2022-06-04 06:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_06_14_074631_add_deleted_at_column_to_service_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'Selamet', 'Surabaya', '0876655433'),
(2, 'Nur', 'Surabaya', '08788866443'),
(3, 'Ivan', 'Sidoarjo', '0876655433'),
(5, 'Aksan', 'Sidoarjo', '098766887611');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` bigint(20) NOT NULL,
  `t_masuk` date DEFAULT NULL,
  `t_keluar` date DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `barang_id` int(11) DEFAULT NULL,
  `tipe` text NOT NULL,
  `serial_number` varchar(200) NOT NULL,
  `kerusakan` text NOT NULL,
  `kelengkapan` text NOT NULL,
  `keterangan` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `t_masuk`, `t_keluar`, `nama`, `alamat`, `no_telp`, `barang_id`, `tipe`, `serial_number`, `kerusakan`, `kelengkapan`, `keterangan`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2022060001, '2022-06-21', '2022-06-23', 'Agung', 'Sidoarjo', '0878544322', 4, 'HP', '6665543312', 'Layar Mati', 'Laptop, Charger, Baterai', '', 1, '2022-06-21 13:58:52', '2022-06-21 07:24:18', NULL),
(2022060002, '2022-06-23', '2022-06-23', 'Vincent', 'Surabaya', '0816543234', 4, 'ASUS x441na\r\nhdd 500gb\r\n2x ran 4gb', '6665543311', 'Laptop Layar Hitam', 'Laptop', '', 2, '2022-06-21 14:00:38', '2022-06-22 23:47:28', NULL),
(2022060003, '2022-06-23', '2022-06-23', 'Hadi', 'Sidoarjo', '089742452', 4, 'TOSHIBA', '4545454545', 'Layar Mati', 'Laptop', '', 1, '2022-06-21 14:01:36', '2022-06-22 23:49:17', NULL),
(2022060004, '2022-06-25', NULL, 'Aksan', 'Sidoarjo', '0813245633', 4, 'ASUS', '6665543322', 'Layar Mati', 'Laptop', '', 0, '2022-06-25 08:12:26', '2022-06-25 08:12:26', NULL),
(2022060005, '2022-06-25', '2022-06-25', 'Ahmad', 'Surabaya', '09876688776', 4, 'ACER', '5656565656', 'Layar Mati', 'Laptop', '', 1, '2022-06-25 08:22:49', '2022-06-25 01:24:16', NULL),
(2022060006, '2022-06-25', NULL, 'pak irfan', 'sda', '0808080808808', 4, 'x441na', '123123123', 'instal ulang', 'unit sharger tas', 'biaya 150rb', 0, '2022-06-25 13:25:42', '2022-06-25 13:25:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@admin.com', NULL, '$2y$10$bbew9kW5qa79f8YUfimoz.AswOeSq4E09PC5Dk0TBd1VZ9O8YFdKW', NULL, '2022-06-21 00:21:33', '2022-06-25 23:04:41'),
(2, 1, 'vino', 'vino-computer@gmail.com', NULL, '$2y$10$0lBE6JTeAIZcDjWt9IspIe5lXTUp.g2KTYf.RrnrB/qJg4HbTQaNe', NULL, '2022-06-21 01:49:06', '2022-06-21 01:49:06'),
(3, 2, 'Vincent', 'vincent@gmail.com', NULL, '$2y$10$myzsLEmCDdKHdIxPUSCMmOHOO687H5R.KvIO7IZjISzl6lkHp0itC', NULL, NULL, '2022-06-25 23:12:27'),
(4, 2, 'Agung', 'agung@gmail.com', NULL, '$2y$10$v4wH1f4msDQiinY9yWGqF.2ixmqkaeIQIQcuyZ3C0wSFmBR1qglNS', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_id` (`barang_id`);

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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022060008;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2024 at 04:15 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel11`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_21_005435_create_products_table', 1),
(5, '2024_09_21_012555_create_trollings_table', 1),
(6, '2024_09_26_062232_create_points_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int NOT NULL,
  `tanggal` date NOT NULL,
  `rupam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `nama`, `point`, `tanggal`, `rupam`, `created_at`, `updated_at`) VALUES
(7, 'TOMY HERWINDRA TAMTAMA BIN WINARTO', 10, '2024-09-26', 'rupam 1', '2024-09-25 23:44:16', '2024-09-25 23:44:16'),
(8, 'ERIKSON SINURAT BIN JAN SUPERDI', 10, '2024-09-26', 'rupam 1', '2024-09-25 23:44:16', '2024-09-25 23:44:16'),
(10, 'ROYAENAH BINTI TIMBUL (ALM)', 10, '2024-09-26', 'rupam 1', '2024-09-26 00:33:40', '2024-09-26 00:33:40'),
(11, 'ELFITA KOMALA SARI BINTI KOPENI', 10, '2024-09-27', 'rupam 1', '2024-09-26 18:42:51', '2024-09-26 18:42:51'),
(12, 'ROHMIYATI BINTI CASTRO', 1, '2024-09-27', 'rupam 1', '2024-09-26 19:43:21', '2024-09-26 19:43:21'),
(13, 'AGUS SUSANTO BIN KALORI', 1, '2024-09-27', 'rupam 1', '2024-09-26 19:46:58', '2024-09-26 19:46:58'),
(15, 'MARIANA BINTI HALKIN (ALM)', 1, '2024-09-27', 'rupam 1', '2024-09-26 20:53:48', '2024-09-26 20:53:48'),
(16, 'IRGI APRILIAN PUTRA BIN AGUS WITONO', 1, '2024-09-27', 'rupam 1', '2024-09-26 20:58:40', '2024-09-26 20:58:40'),
(17, 'ROYAENAH BINTI TIMBUL (ALM)', 1, '2024-09-27', 'rupam 1', '2024-09-26 20:59:33', '2024-09-26 20:59:33'),
(18, 'TEGUH SUSANTO BIN UTOMO (ALM)', 1, '2024-09-27', 'rupam 1', '2024-09-26 21:09:31', '2024-09-26 21:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint NOT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9vtre2APQPyItLIyr2dhADz1mi6Du52lOSvCBnP0', 199408192017121004, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaHRjTGVpd3NWNkNWTHkzTGpWVFJHb0UwVUhkbkJzcjE4Nm92N2NzQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9zYXdmaXNoLW1hdHVyZS1zdHJhbmdlbHkubmdyb2stZnJlZS5hcHAvYXBlbHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7czoxODoiMTk5NDA4MTkyMDE3MTIxMDA0Ijt9', 1727410464),
('fDRTG7OaqYbJKUYQXWcfR3zIBa0QvxE5pPeS7CKp', 199408192017121004, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicEJRTUlpaHM4UFVPb2owbldtZUp0cncwWkF2SE1mTTNzRm5NMXhLVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90cm9sbGluZ3MvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO3M6MTg6IjE5OTQwODE5MjAxNzEyMTAwNCI7fQ==', 1727407520),
('ofSc1YQL0gunJOOpkcxEwndzYWdtuA5b8qGwAqbS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia1N3UFpDVEFwNE5UeEZPdjhWQk9JZG1CU2pGSnpZYzRWTHZHSFZGcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9zYXdmaXNoLW1hdHVyZS1zdHJhbmdlbHkubmdyb2stZnJlZS5hcHAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1727405852);

-- --------------------------------------------------------

--
-- Table structure for table `trollings`
--

CREATE TABLE `trollings` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rupam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trollings`
--

INSERT INTO `trollings` (`id`, `nama_lokasi`, `tanggal`, `jam`, `rupam`, `petugas`, `koordinat`, `created_at`, `updated_at`) VALUES
(1, 'Blok B dan C', 'Selasa , 24 Sep 2024', '12:39', 'rupam 1', 'adib kurniawan', 'https://maps.google.com/maps?q=-6.9411956,109.7271839', '2024-09-23 22:39:40', '2024-09-23 22:39:40'),
(2, 'Blok Claudia', 'Selasa , 24 Sep 2024', '12:44', 'rupam 1', 'Amala', 'https://maps.google.com/maps?q=-6.9411956,109.7271839', '2024-09-23 22:44:26', '2024-09-23 22:44:26'),
(3, 'Blok Claudia', 'Selasa , 24 Sep 2024', '13:08', 'Staf KPLP', 'ADIB KURNIAWAN', 'https://maps.google.com/maps?q=-6.9411956,109.7271839', '2024-09-23 23:08:17', '2024-09-23 23:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rupam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `rupam`, `jabatan`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'CENDY', '199107102010121001', '$2y$12$vsPcffOQ3fcoVOlDTNoB2.XWE2cvqVUdI.VAacKEspoetBpY6U5Wu', 'Ka.KPLP', 'Ka.KPLP', 'Y', NULL, NULL),
(2, 'MUHAMAD ADITYA NUGRATAMA', '199612232017121003', '$2y$12$zQmgRrhiASlWrg3hssrum.BPiUV1GF.SKYfpuU.Q524CSTM5iHJ/6', 'Staf KPLP', 'Staf KPLP', 'Y', NULL, NULL),
(3, 'ADIB KURNIAWAN', '199408192017121004', '$2y$12$MX.NwScywMnTN5HOQ4Xf.eka8/ujYYKFVpMmlpjRXrcuaEsflh3Xi', 'rupam 1', 'Staf KPLP', '1', NULL, '2024-09-25 18:11:03'),
(4, 'DODI SAPTIYANTO', '198309112007031001', '$2y$12$//4yi2Il6QgR4EZMQDJtPuW0ct5T5Oroy2RgBkUGzIQtvvejzH63S', 'Rupam 1', 'Ka.Rupam', 'N', NULL, NULL),
(5, 'IMAM FAUZI', '198705062009011001', '$2y$12$k2bIUUK57PA0meerwFi32e2zDZ1o2fgq54wE3/28MQKtQerTkz0pG', 'Rupam 1', 'Waka.Rupam', 'N', NULL, NULL),
(6, 'M.ALFIN MUHSININ', '199609222017121002', '$2y$12$OBUDFF9ShQDeowJ37CTS.OoHb7Js6bmsYRuBfpj2x807nd2nZwQAa', 'Rupam 1', 'P2U', 'N', NULL, NULL),
(7, 'TIRTA AJI KUMBARA', '198708202007031001', '$2y$12$4e57kjduJNwI/vBMXBR5S.wu8AhmOfZ6NjOw2Us.lbOhgc7U5xn3u', 'Rupam 1', 'Anggota jaga', 'N', NULL, NULL),
(8, 'UMAR HAKIM', '200201082022031001', '$2y$12$PIt3E862yTBTx/LcL12PWu9WgumXYyg0caBrgAfMXVDpZMWRUV/vS', 'Rupam 1', 'Anggota jaga', 'N', NULL, NULL),
(9, 'ACHANU AMALA', '200101132022031001', '$2y$12$.c5ii0cVfuGMQHt7rXQvweonepDm5FPSh/btHJg.V4eKikt3.Y/8S', 'Rupam 1', 'Anggota Jaga', 'N', NULL, NULL),
(10, 'AHMAD LATIF', '199608042022031002', '$2y$12$b4h8Vup3Z5ylNLJZTHqktOelQddveJboXl6XbqwzcACbDgwibstXu', 'Rupam 1', 'Anggota Jaga', 'N', NULL, NULL),
(11, 'MARYOTO', '197903092007031001', '$2y$12$h8lfW4wwmJrBHCQLXTGk6.wPydNArIwy6yit.foFLtPFwGb.5BYXe', 'Rupam 2', 'Ka.Rupam', 'N', NULL, NULL),
(12, 'MONO PUSWANTO', '198105202007031001', '$2y$12$fzmc4Jk9Y7bJsF/cLOx8m.OvkSUldhvufADBzJrdkHJQIxtZwpPdG', 'Rupam 2', 'Waka.Rupam', 'N', NULL, NULL),
(13, 'M. ASHIDIQI', '199808312017121005', '$2y$12$h7PRjUPYcvuetaXqp9O3IubpIE.pN8gfSMX5RZM1WoAqr2FrMm3gu', 'Rupam 2', 'P2U', 'N', NULL, NULL),
(14, 'AGUNG FEBY.S', '198005152000031001', '$2y$12$fGkQGwWWQ55ixDxqlGTGb.N8R6.2zM7o6iu44CBSKIhD/A8MdSqz2', 'Rupam 3', 'Waka.Rupam', 'N', NULL, NULL),
(15, 'TEGUH SLAMET', '200210042022031002', '$2y$12$cgqdc6oXCODh5p0ewsSJWeVlFAO6zqXYe9oiPkRFtecHtvwCtQBXG', 'Rupam 2', 'Anggota jaga', 'N', NULL, NULL),
(16, 'SUFI ARIF NUR R', '199301242017121003', '$2y$12$sqn.fzAZpOhfiTbcskYTie5F8sqz073v/6WCd81f/1XNsZ00ry9vG', 'Rupam 2', 'Anggota Jaga', 'N', NULL, NULL),
(17, 'WAHANA', '196806031991031001', '$2y$12$4M3U3e1phEDM7eSyejmfeeYof0w3x/29Y/igZvHr6cQcL9tGMKvzG', 'Rupam 3', 'Ka.Rupam', 'N', NULL, NULL),
(18, 'JOKO PURWOKO', '198604052009011002', '$2y$12$3YaoNc.PsI0NothvIWXPwOP41MKi4wRO44l532vdZRD/f3uOTs3g.', 'Rupam 3', 'Waka.Rupam', 'N', NULL, NULL),
(19, 'ALI MASHADI', '199405132022031002', '$2y$12$9xp9aT6flGXYfOILDcuH/eTtKCQwkOIsUo3cB0qR6Fb51oXWGdg26', 'Rupam 3', 'P2U', 'N', NULL, NULL),
(20, 'EDY MULYONO', '198912122012121001', '$2y$12$ydeKYT9302wWFDXNSkv8EO1VrOezGxarbyuDKG4RC8WPxOOxm3xtO', 'Rupam 2', 'Anggota jaga', 'N', NULL, NULL),
(21, 'DAVID TRI WICAKSONO', '199101262017121007', '$2y$12$kn4fmVdnideGaUaT7fPIFeDgUE50VxkKLKJ.lVe1u96MC9DNIr58e', 'Rupam 3', 'Anggota jaga', 'N', NULL, NULL),
(22, 'M. AENI SOFYAN', '199803112022031001', '$2y$12$jeeuXdbzGp1.mz4333tGoubtsNA9lNCS1vr5Q3GtVeYxJ4/C6BN5u', 'Rupam 3', 'Anggota Jaga', 'N', NULL, NULL),
(23, 'IQBAL ZUFRONI', '200012142022031002', '$2y$12$ngzde7tlAzaX5gVDWVaPZ.nXQjbB2faiSJngw.lPrjNmGtAxBfzx6', 'Rupam 3', 'Anggota Jaga', 'N', NULL, NULL),
(24, 'EDY SUPARYONO', '197902062007031001', '$2y$12$4/qDhi7pBTm66c8vunHvu.M3FTSK4nUKuuQ8SgOJe2n7paFbgGXaG', 'Rupam 4', 'Ka.Rupam', 'N', NULL, NULL),
(25, 'WIDODO', '198111052009011008', '$2y$12$2G5NSovGAO4/DDLAJMMzkuQtMqGFzXQ4LspXglF1nvAvBFvcT2Ne6', 'Rupam 4', 'Waka.Rupam', 'N', NULL, NULL),
(26, 'YUMA KRISTIAN D', '199812212017121003', '$2y$12$IRSenDigR26IPyCyLYG97.DyBLgtge2ARyEHpQasUgVxiYkuuyjcS', 'Rupam 4', 'P2U', 'N', NULL, NULL),
(27, 'PRADITYA FEBRIADI.P', '199002032009121002', '$2y$12$py4kCo4ljDb4ieG8QbspEetgdG6EA2m0bnRluM3wzUuFJJAhSlFQi', 'Rupam 4', 'Anggota jaga', 'N', NULL, NULL),
(28, 'MUHAMMAD RAFI', '199610052017121004', '$2y$12$R/GQIpJJUmMIcJZsPdaql.7M2mVr4YcnmOKGRBQo4Yb0jnF7RR48S', 'Rupam 4', 'Anggota jaga', 'N', NULL, NULL),
(29, 'MAULANA ZUHRI', '200206032022031002', '$2y$12$cYZZu85WdXJuRFGs5fvWtuB5shbdRzvzoOZUkJQCxghVBCHJDvtGe', 'Rupam 4', 'Anggota Jaga', 'N', NULL, NULL),
(32, 'sabil', '12345678', '$2y$12$SwXa06Z.Wg8YLASEDQcBjeO.5.BxwEAwyqgJ0VVKTe30ieJnFydRO', 'rupam 2', 'Staf KPLP', '1', '2024-09-24 19:05:16', '2024-09-24 19:51:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `trollings`
--
ALTER TABLE `trollings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trollings`
--
ALTER TABLE `trollings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2025 pada 10.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kplm9434_db_laravel11`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datawbps`
--

CREATE TABLE `datawbps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tn` varchar(255) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisis`
--

CREATE TABLE `disposisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `jam_diterima` varchar(255) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `asal_surat` varchar(255) NOT NULL,
  `ringkasan` varchar(255) NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `nomor_agenda` varchar(255) DEFAULT NULL,
  `tingkat_keamanan` varchar(255) DEFAULT NULL,
  `disposisi` varchar(255) DEFAULT NULL,
  `kakplp` tinyint(1) DEFAULT NULL,
  `kasibinadik` tinyint(1) DEFAULT NULL,
  `kasikamtib` tinyint(1) DEFAULT NULL,
  `kasubagtu` tinyint(1) DEFAULT NULL,
  `sudah_disposisi` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `disposisis`
--

INSERT INTO `disposisis` (`id`, `tanggal_diterima`, `jam_diterima`, `nomor_surat`, `tanggal_surat`, `asal_surat`, `ringkasan`, `file_surat`, `nomor_agenda`, `tingkat_keamanan`, `disposisi`, `kakplp`, `kasibinadik`, `kasikamtib`, `kasubagtu`, `sudah_disposisi`, `created_at`, `updated_at`) VALUES
(6, '2025-04-06', '14:53', 'W12.U33/664/PID.00.2/III/2025', '2025-04-11', 'Lapas Batang', 'Salinan Perpanjangan Penahanan Oleh Ketua Pengadilan Negeri perkara pidana Nomor 46/Pid.Sus/2025/PN Btg an. Terdakwa Hamid Qohhar Bin Romadi', 'file_surat/1743926037_1742306398_Laporan Penggeledahan Lapas Batang Rupam 4 Siang 28 Februari 2025.pdf', '-', 'Biasa', 'tolong di tindak lanjuti', 1, 0, 0, 0, 1, '2025-04-06 07:53:57', '2025-04-06 07:57:14'),
(7, '2025-04-06', '15:04', 'W12.U33/664/PID.00.2/III/2025', '2025-04-05', 'Menteri Hukum dan Hak Asasi Manusia Republik Indonesia', 'Salinan Penetapan Perpanjangan penahanan Hakim PN oleh ketua PN Perkara Nomor : 54/Pid.B/2025/PN Btg atas nama Terdakw Wiyanto Bin Tarmin dkk', 'file_surat/1743926688_1742304186_SK TIM ZI 2025.pdf', '-', 'Biasa', 'tolong di tindak lanjuti', 0, 1, 0, 0, 1, '2025-04-06 08:04:48', '2025-04-06 08:05:18'),
(8, '2025-04-06', '15:06', '213242423213213', '2025-04-05', 'KANTOR WILAYAH JAWA TENGAH', 'Salianan Penetapan Perpanjangan Penahanan Hakim PN oleh ketua PN perkara Nomor : 55/Pid.B/2025/PB Btg atas nama Terdakwa Daspan Bin Nasokha, dkk', 'file_surat/1743926811_ESTATEMENT-7141905605-122024-08-07-39 (1).pdf', '-', 'Biasa', 'asdasdas', 1, 0, 0, 0, 1, '2025-04-06 08:06:51', '2025-04-06 08:07:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_03_134313_create_pelanggarans_table', 1),
(5, '2024_09_21_005435_create_products_table', 1),
(6, '2024_09_21_012555_create_trollings_table', 1),
(7, '2024_09_26_062232_create_points_table', 1),
(8, '2024_10_07_053932_create_datawbps_table', 1),
(9, '2024_10_13_122340_create_penggeledahans_table', 1),
(10, '2025_03_18_173805_create_disposisis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggarans`
--

CREATE TABLE `pelanggarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `point` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggeledahans`
--

CREATE TABLE `penggeledahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL,
  `rupam` varchar(255) NOT NULL,
  `blok` varchar(255) NOT NULL,
  `kamar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` varchar(255) NOT NULL,
  `jam_akhir` varchar(255) NOT NULL,
  `petugas` varchar(255) NOT NULL,
  `sajam` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `narkoba` varchar(255) NOT NULL,
  `hasil_razia` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `points`
--

CREATE TABLE `points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pelanggaran_id` bigint(20) UNSIGNED NOT NULL,
  `rupam` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` bigint(20) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('erENeVtJN61cqaKJNU8LMKauvxtZHBeOUkVdDNJV', 199408192017121004, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVWJEb2U1d0d6cndmZ0tBZFp0UXVNTEdRSUw3MWg0dlZPMzZVdEdPSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3Qva3BscC9wdWJsaWMvZ2VuZXJhdGUtcGRmLzgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7czoxODoiMTk5NDA4MTkyMDE3MTIxMDA0Ijt9', 1743927603),
('LZRqDRbxjrbVtC3KR0Q0roU17sTHBYuhUnGgchfB', 199408192017121004, '192.168.0.102', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMnNiQTVjTU81UzQ1NjhrN3l6QU5WZFZDWlMzTUZFcXdNMmNkcWlnbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly8xOTIuMTY4LjAuMTEzL2twbHAvcHVibGljL2dlbmVyYXRlLXBkZi82Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO3M6MTg6IjE5OTQwODE5MjAxNzEyMTAwNCI7fQ==', 1743926247);

-- --------------------------------------------------------

--
-- Struktur dari tabel `trollings`
--

CREATE TABLE `trollings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `rupam` varchar(255) NOT NULL,
  `petugas` varchar(255) NOT NULL,
  `koordinat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rupam` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `rupam`, `jabatan`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'CENDY', '199107102010121001', '$2y$12$g5pl8/kA8l9iI8dVqb7gZ.9zt5VvrtkVx3dAz4OC8pT77YNHYyoP.', 'Ka.KPLP', 'Ka.KPLP', '1', NULL, NULL),
(2, 'nama', 'username', '$2y$12$Ito4DPRS2XHy8.wMdq/QDev./KRkYC8s1Ry9ZRWNbduSp4V.2Vqya', 'rupam', 'jabatan', 'is_admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ADIB KURNIAWAN', '199408192017121004', '$2y$12$J27TLRSnNHvOD3ZRpvby/uhiKHN5E41LjuegOA.aNg3Czi1vkUSoC', 'Staf KPLP', 'Staf KPLP', '1', NULL, NULL),
(4, 'DODI SAPTIYANTO', '198309112007031001', '$2y$12$qNzKEDZK64dNFuoTs2URs.I0Lr3iJBDu6..5MnPyiau3fRkCmaWem', 'Rupam 1', 'Ka.Rupam', '0', NULL, NULL),
(5, 'IMAM FAUZI', '198705062009011001', '$2y$12$lpq2gnzrm4k8fcFFFRAQmewbi5rqfFKtMYZ3ZcQm6vAaB9ZUNvpa.', 'Rupam 1', 'Waka.Rupam', '0', NULL, NULL),
(6, 'M.ALFIN MUHSININ', '199609222017121002', '$2y$12$pIGgJWAwCx2ESeVx5Aj2Ue0cO9gpUvRFzhU5CFwntVQhH/U/PMtSy', 'Rupam 1', 'P2U', '0', NULL, NULL),
(7, 'TIRTA AJI KUMBARA', '198708202007031001', '$2y$12$PTbK/LssItwqqnnnC5FcmuIHNcX63TMGuwN5LDyo8DTk4fZp2LiNe', 'Rupam 1', 'Anggota jaga', '0', NULL, NULL),
(8, 'UMAR HAKIM', '200201082022031001', '$2y$12$zQBX1iRpuKBWpc6AIRXt5.fQhcITQr133oa.p.pv0Gb3AwJvvlaTi', 'Rupam 1', 'Anggota jaga', '0', NULL, NULL),
(9, 'ACHANU AMALA', '200101132022031001', '$2y$12$Q3g4Yj8ZG7mi5JKA3I6QTee9S89TnSoP.80MZv0jg5/sypKFfkW5q', 'Rupam 1', 'Anggota Jaga', '0', NULL, NULL),
(10, 'AHMAD LATIF', '199608042022031002', '$2y$12$LyGyGFpNHc8OxkloFVH8au4j2lax8gKCbmGrKn3lHjHKLJ19Ua0CC', 'Rupam 1', 'Anggota Jaga', '0', NULL, NULL),
(11, 'MARYOTO', '197903092007031001', '$2y$12$qfkgiDVeTB8rYVhCVRh5JudRlPTh5QzKpmcF0lldkQz3JZUTzv.eS', 'Rupam 2', 'Ka.Rupam', '0', NULL, NULL),
(12, 'MONO PUSWANTO', '198105202007031001', '$2y$12$YRc4E906bQeiVAHCslYiquUoX6SRe/wgaGqdF.kN4AArL82AvIRsS', 'Rupam 2', 'Waka.Rupam', '0', NULL, NULL),
(13, 'M. ASHIDIQI', '199808312017121005', '$2y$12$qJeChvuQ1biL1OvTWZv4u.BvHr2CBtD2HAgRzQhuE53hwMj5xVf5a', 'Rupam 2', 'P2U', '0', NULL, NULL),
(14, 'AGUNG FEBY.S', '198005152000031001', '$2y$12$wwel5SRQB23BAwami.8SDexF5pdr55ck03yBY6NwzGB6Wnk0aJ61i', 'Rupam 3', 'Waka.Rupam', '0', NULL, NULL),
(15, 'TEGUH SLAMET', '200210042022031002', '$2y$12$.IiJIAd01zPnksFbuLFLee..w6.O4FhPvpbZSI1FM2ODNiggxsnfa', 'Rupam 2', 'Anggota jaga', '0', NULL, NULL),
(16, 'SUFI ARIF NUR R', '199301242017121003', '$2y$12$pF/k0MGHQhyqna5uA7.e..vuOL8cWKiC4JEy.HvB73RM3vYL.00La', 'Rupam 2', 'Anggota Jaga', '0', NULL, NULL),
(17, 'WAHANA', '196806031991031001', '$2y$12$e.r1FmCFtZvRgLYoHSCYJOYloaqwMNl6Jr40GZMG4lPVwOiPcuzs6', 'Rupam 3', 'Ka.Rupam', '0', NULL, NULL),
(18, 'JOKO PURWOKO', '198604052009011002', '$2y$12$oAYYAfTreKBaG7k8EznoXex0xU22sXAXq4NMrVu3sA9LGoDct5GuW', 'Rupam 3', 'Waka.Rupam', '0', NULL, NULL),
(19, 'ALI MASHADI', '199405132022031002', '$2y$12$.ghKAlNAehlVGtZhndH8N.dAFaDq6PeyVzFV1J3y.jhO6ERJXkSjm', 'Rupam 3', 'P2U', '0', NULL, NULL),
(20, 'EDY MULYONO', '198912122012121001', '$2y$12$IXT4zO7wcOSQUqmbC6uGf.jcMeRztEpEwHyxAO8t/JPSVZp.vjaCq', 'Rupam 2', 'Anggota jaga', '0', NULL, NULL),
(21, 'DAVID TRI WICAKSONO', '199101262017121007', '$2y$12$D7bxx.9625uVew/pCsXzqOXHL5zCmlwwIt.liH2EllnSsomNzhf9K', 'Rupam 3', 'Anggota jaga', '0', NULL, NULL),
(22, 'M. AENI SOFYAN', '199803112022031001', '$2y$12$o/Vl60xxxuYB6TSCXWODYuDzvKO/CWb4PABDmWr02c5WrAnyc2K1a', 'Rupam 3', 'Anggota Jaga', '0', NULL, NULL),
(23, 'IQBAL ZUFRONI', '200012142022031002', '$2y$12$cPiAg6hYuW9gVOYUWLnTteS0G0vm/cMuz8YR07wfNrksqsBOOuMfi', 'Rupam 3', 'Anggota Jaga', '0', NULL, NULL),
(24, 'EDY SUPARYONO', '197902062007031001', '$2y$12$H3T7mkscTAOxaxOo73tmqebkgqpmdZ5SXstZ8jXwVSci5KmAmm8R.', 'Rupam 4', 'Ka.Rupam', '0', NULL, NULL),
(25, 'WIDODO', '198111052009011008', '$2y$12$CSR9e/ajg/a81KdzcqdKhezr7k9jjg5jYjtzH5mvBohoFlWfDVfk6', 'Rupam 4', 'Waka.Rupam', '0', NULL, NULL),
(26, 'YUMA KRISTIAN D', '199812212017121003', '$2y$12$wCcCTAFhKILwynXl.5WuF.RWnMo0IN4ed5K.iVHBoF4Mu1sotxmDq', 'Rupam 4', 'P2U', '0', NULL, NULL),
(27, 'PRADITYA FEBRIADI.P', '199002032009121002', '$2y$12$lT8.QjhxcyZFj79U9RfK4ObgUiOz7vTgTFjDCYXDfkwTOp.I1cNqO', 'Rupam 4', 'Anggota jaga', '0', NULL, NULL),
(28, 'MUHAMMAD RAFI', '199610052017121004', '$2y$12$smAGsQ40qgdA0cr1S8kJlO8hKXpephZ8SZWE5ZZSaTC7lQSyt27K2', 'Rupam 4', 'Anggota jaga', '0', NULL, NULL),
(29, 'MAULANA ZUHRI', '200206032022031002', '$2y$12$DVRQtJKE1wnXlTdu7Mf2fekaPg1PMYFxg4WlrhLmWr35pCb5kXZDa', 'Rupam 4', 'Anggota Jaga', '0', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `datawbps`
--
ALTER TABLE `datawbps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `disposisis`
--
ALTER TABLE `disposisis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pelanggarans`
--
ALTER TABLE `pelanggarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penggeledahans`
--
ALTER TABLE `penggeledahans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `points_pelanggaran_id_foreign` (`pelanggaran_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `trollings`
--
ALTER TABLE `trollings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datawbps`
--
ALTER TABLE `datawbps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `disposisis`
--
ALTER TABLE `disposisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pelanggarans`
--
ALTER TABLE `pelanggarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penggeledahans`
--
ALTER TABLE `penggeledahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `points`
--
ALTER TABLE `points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `trollings`
--
ALTER TABLE `trollings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_pelanggaran_id_foreign` FOREIGN KEY (`pelanggaran_id`) REFERENCES `pelanggarans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

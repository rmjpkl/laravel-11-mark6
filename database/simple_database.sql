-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2026 at 05:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_database`
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
-- Table structure for table `datawbps`
--

CREATE TABLE `datawbps` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disposisis`
--

CREATE TABLE `disposisis` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `jam_diterima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `asal_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ringkasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_agenda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_keamanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disposisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kakplp` tinyint(1) DEFAULT NULL,
  `kasibinadik` tinyint(1) DEFAULT NULL,
  `kasikamtib` tinyint(1) DEFAULT NULL,
  `kasubagtu` tinyint(1) DEFAULT NULL,
  `sudah_disposisi` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disposisis`
--

INSERT INTO `disposisis` (`id`, `tanggal_diterima`, `jam_diterima`, `nomor_surat`, `tanggal_surat`, `asal_surat`, `ringkasan`, `file_surat`, `nomor_agenda`, `tingkat_keamanan`, `disposisi`, `kakplp`, `kasibinadik`, `kasikamtib`, `kasubagtu`, `sudah_disposisi`, `created_at`, `updated_at`) VALUES
(6, '2025-04-06', '14:53', 'W12.U33/664/PID.00.2/III/2025', '2025-04-11', 'Lapas Batang', 'Salinan Perpanjangan Penahanan Oleh Ketua Pengadilan Negeri perkara pidana Nomor 46/Pid.Sus/2025/PN Btg an. Terdakwa Hamid Qohhar Bin Romadi', 'file_surat/1743926037_1742306398_Laporan Penggeledahan Lapas Batang Rupam 4 Siang 28 Februari 2025.pdf', '-', 'Biasa', 'tolong di tindak lanjuti', 1, 0, 0, 0, 1, '2025-04-06 07:53:57', '2025-04-06 07:57:14'),
(7, '2025-04-06', '15:04', 'W12.U33/664/PID.00.2/III/2025', '2025-04-05', 'Menteri Hukum dan Hak Asasi Manusia Republik Indonesia', 'Salinan Penetapan Perpanjangan penahanan Hakim PN oleh ketua PN Perkara Nomor : 54/Pid.B/2025/PN Btg atas nama Terdakw Wiyanto Bin Tarmin dkk', 'file_surat/1743926688_1742304186_SK TIM ZI 2025.pdf', '-', 'Biasa', 'tolong di tindak lanjuti', 0, 1, 0, 0, 1, '2025-04-06 08:04:48', '2025-04-06 08:05:18'),
(8, '2025-04-06', '15:06', '213242423213213', '2025-04-05', 'KANTOR WILAYAH JAWA TENGAH', 'Salianan Penetapan Perpanjangan Penahanan Hakim PN oleh ketua PN perkara Nomor : 55/Pid.B/2025/PB Btg atas nama Terdakwa Daspan Bin Nasokha, dkk', 'file_surat/1743926811_ESTATEMENT-7141905605-122024-08-07-39 (1).pdf', '-', 'Biasa', 'asdasdas', 1, 0, 0, 0, 1, '2025-04-06 08:06:51', '2025-04-06 08:07:47');

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
-- Table structure for table `hps`
--

CREATE TABLE `hps` (
  `id` bigint UNSIGNED NOT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_rilis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chipset` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skor_antutu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kapasitas_ram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_ram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kapasitas_storage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_storage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera_utama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stabilizer_kamera` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teknologi_kamera` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera_tambahan_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera_tambahan_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera_depan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teknologi_layar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refresh_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_kecerahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelindung_layar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kapasitas_baterai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charger_kabel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charger_wireless` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bypass_charging` tinyint(1) NOT NULL DEFAULT '0',
  `nfc` tinyint(1) NOT NULL DEFAULT '0',
  `ingress_protection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fitur_tambahan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hps`
--

INSERT INTO `hps` (`id`, `no`, `nama`, `merek`, `tahun_rilis`, `harga`, `chipset`, `skor_antutu`, `kapasitas_ram`, `jenis_ram`, `kapasitas_storage`, `jenis_storage`, `camera_utama`, `stabilizer_kamera`, `teknologi_kamera`, `camera_tambahan_1`, `camera_tambahan_2`, `camera_depan`, `teknologi_layar`, `refresh_rate`, `tingkat_kecerahan`, `pelindung_layar`, `kapasitas_baterai`, `charger_kabel`, `charger_wireless`, `bypass_charging`, `nfc`, `ingress_protection`, `fitur_tambahan`, `created_at`, `updated_at`) VALUES
(1, '1', 'POCO C71', 'POCO', '2025', ' Rp 1.049.000 ', 'UNISOC T7250', '269.266', '8', 'LPDDR', '128', 'eMMC 5.1', '32', '-', '-', '8', '0', '8', 'IPS', '120', '450', '-', '5200', '15', '0', 0, 0, 'IP52', 'microSD hybrid hingga 1 TB', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(2, '2', 'POCO M6', 'POCO', '2024', ' Rp 1.749.000 ', 'MediaTek Helio G91 Ultra', '269.266', '8', 'LPDDR4X', '256', 'eMMC 5.1', '108', 'PDAF', 'Samsung HM6', '2', '0', '13', 'IPS', '90', '450', '-', '5030', '33', '0', 0, 0, 'IP53', 'microSD hybrid hingga 1 TB', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(3, '3', 'POCO F6 8/256', 'POCO', '2024', ' Rp 3.999.000 ', 'Snapdragon 8s Gen 3', '1.483.666', '8', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Sony IMX882', '8', '0', '20', 'AMOLED', '120', '2400', 'Corning Gorilla Glass Victus', '5000', '90', '0', 0, 0, 'IP64', 'HyperOS (Android 14), stereo speaker, Hi-Res Audio 24-bit/192 kHz, infrared port, dual-SIM, Dolby Vision & HDR10+', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(4, '4', 'POCO F6 12/512', 'POCO', '2024', ' Rp 4.599.000 ', 'Snapdragon 8s Gen 3', '1.500.000', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Sony IMX882', '8', '0', '20', 'AMOLED', '120', '2400', 'Corning Gorilla Glass Victus', '5000', '90', '0', 0, 0, 'IP64', 'HyperOS (Android 14), stereo speaker, Hi-Res Audio 24-bit/192 kHz, infrared port, dual-SIM, Dolby Vision & HDR10+', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(5, '5', 'POCO X7 Pro', 'POCO', '2025', ' Rp 4.799.000 ', 'MediaTek Dimensity 8400 Ultra', '1.549.263', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Sony IMX882', '8', '0', '2', 'AMOLED', '120', '3200', 'Corning Gorilla Glass 7i', '6000', '90', '0', 0, 0, 'IP68', 'Speaker stereo, Hi-Res Audio, Infrared, Android 15 + HyperOS 2.0', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(6, '6', 'POCO X7 5G', 'POCO', '2025', ' Rp 3.548.000 ', 'MediaTek Dimensity 7300 Ultra', '675.069', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '8', '2', '20', 'AMOLED', '120', '3000', 'Corning Gorilla Glass Victus 2', '5110', '45', '0', 0, 0, 'IP68', 'Dual speaker Dolby Atmos, IR Blaster, AI Face Unlock, HyperOS', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(7, '7', 'POCO X7 5G,', 'POCO', '2025', ' Rp 4.149.000 ', 'MediaTek Dimensity 7300 Ultra', '675.069', '12', 'LPDDR4X', '512', 'UFS 2.1', '50', 'OIS', 'Sony IMX882', '8', '2', '20', 'AMOLED', '120', '3000', 'Corning Gorilla Glass Victus 2', '5110', '45', '0', 0, 0, 'IP68', 'Dual speaker Dolby Atmos, IR Blaster, AI Face Unlock, HyperOS', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(8, '8', 'POCO M7 Pro 5G', 'POCO', '2.025', ' Rp 2.799.000 ', 'MediaTek Dimensity 7025 Ultra', '477.000', '8', 'LPDDR5', '256', 'UFS 2.1', '50', 'OIS', 'Sony IMX882', '2', '0', '20', 'AMOLED', '120', '2100', 'Corning Gorilla Glass 5', '5110', '45', '0', 0, 0, 'IP64', 'Stereo speaker, Dolby Vision, HDR10+, fingerprint under display, IR blaster', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(9, '9', 'POCO F7 Pro', 'POCO', '2.025', ' Rp 7.299.000 ', 'Snapdragon 8 Gen 3', '2.093.203', '12', 'LPDDR5x', '256', 'UFS 4.1', '50', 'OIS', 'OmniVision OV50 Light Hunter 800 CMOS', '8', '0', '20', 'AMOLED', '120', '3200', 'Corning Gorilla Glass 7i', '6000', '90', '0', 0, 0, 'IP68', 'Wi‑Fi 7, ultrasonik fingerprint in-display, 3D IceLoop cooling, 12‑sensor AI temp control, HyperOS 2 (Android 15) dengan 4 upgrade major, 6 tahun patch keamanan', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(10, '10', 'POCO F7', 'POCO', '2.025', ' Rp 5.798.000 ', 'Snapdragon 8s Gen 4', '2.084.535', '12', 'LPDDR5X', '512', 'UFS 4.1', '50', 'OIS', 'Sony IMX882', '8', '0', '20', 'AMOLED', '120', '3.200', 'Corning Gorilla Glass 7i', '6500', '90', '0', 0, 0, 'IP68', 'Wet Touch Display 3.0; HyperCool 2 + Liquid Cooling 2.0; Xiaomi HyperOS 2.0; garansi 2 th; OS up to 4x; patch 6 th', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(11, '11', 'Tecno POVA 7 128GB', 'Tecno', '2.025', ' Rp 1.989.000 ', 'MediaTek Helio G100 Ultimate', '438.000', '8', 'LPDDR4X', '128', 'UFS 2.1', '108', '-', 'Sony IMX882', '2', '0', '8', 'IPS', '120', '580', '-', '7000', '45', '0', 0, 0, 'IP64', 'Dolby Atmos stereo speaker, Dynamic-Light Effect (notifikasi ala “Dynamic Island”)', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(12, '12', 'Tecno POVA 7 256GB', 'Tecno', '2.025', ' Rp 2.239.000 ', 'MediaTek Helio G100 Ultimate', '440.000', '8', 'LPDDR4X', '256', 'UFS 2.1', '108', '-', 'Sony IMX882', '2', '0', '8', 'IPS', '120', '580', '-', '7000', '45', '0', 0, 0, 'IP64', 'Dolby Atmos stereo speaker, Dynamic-Light Effect (notifikasi ala “Dynamic Island”)', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(13, '13', 'Tecno Camon 40 Pro 5G v1', 'Tecno', '2.025', ' Rp 4.177.000 ', 'MediaTek Dimensity 7300', '640.000', '8', 'LPDDR4X', '256', 'UFS 2.1', '50', 'OIS', 'Sony LYT700C', '8', '0', '50', 'AMOLED', '144', '1.300', 'Corning Gorilla Glass 7i', '5200', '45', '0', 0, 0, 'IP68', 'Always-on display; Audio resolusi tinggi; Speaker stereo', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(14, '14', 'Tecno Camon 40', 'Tecno', '2.024', ' Rp 2.649.000 ', 'MediaTek Helio G100 Ultimate', '400.000', '8', 'LPDDR4X', '128', 'UFS 2.1', '50', 'OIS', 'Sony LYT700C', '8', '0', '32', 'AMOLED', '120', '1.300', 'Panda King Glass', '5200', '45', '0', 0, 0, 'IP66', 'Always-on display; speaker stereo; slot microSD; Tecno AI', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(15, '15', 'Tecno Camon 40 256', 'Tecno', '2.024', ' Rp 2.869.000 ', 'MediaTek Helio G100 Ultimate', '400.340', '8', 'LPDDR4X', '256', 'UFS 2.1', '50', 'OIS', 'Sony LYT700C', '8', '0', '32', 'AMOLED', '120', '1.300', 'Panda King Glass', '5200', '45', '0', 0, 0, 'IP66', 'Always-on display; speaker stereo; slot microSD; Tecno AI', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(16, '16', 'Tecno Spark 30 Pro', 'Tecno', '2.025', ' Rp 2.099.000 ', 'MediaTek Helio G100 (6nm)', '439.600', '8', 'LPDDR4X', '128', 'UFS 2.1', '108', 'EIS', 'Samsung ISOCELL HM2', '8', '0', '13', 'AMOLED', '120', '1.700', '-', '5000', '33', '0', 0, 0, 'IP54', 'Infrared, Stereo Speaker, Dolby Atmos, Fingerprint under-display', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(17, '17', 'Tecno Spark 30 Pro 256', 'Tecno', '2.025', ' Rp 2.349.000 ', 'MediaTek Helio G100 (6nm)', '440.000', '8', 'LPDDR4X', '256', 'UFS 2.1', '108', 'EIS', 'Samsung ISOCELL HM2', '8', '0', '13', 'AMOLED', '120', '1.700', '-', '5000', '33', '0', 0, 0, 'IP54', 'Infrared, Stereo Speaker, Dolby Atmos, Fingerprint under-display', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(18, '18', 'Tecno Spark 30C NFC', 'Tecno', '2.024', ' Rp 1.399.000 ', 'MediaTek Helio G81', '245.145', '6', 'LPDDR4X', '128', 'eMMC 5.1', '48', 'EIS', 'Sony IMX582', '8', '0', '8', 'IPS', '120', '500', '-', '5000', '18', '0', 0, 0, 'IP54', 'Infrared Blaster, Dual Stereo Speaker, Side Fingerprint, DTS Audio', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(19, '19', 'Tecno Spark 30C NFC 256', 'Tecno', '2.024', ' Rp 1.699.000 ', 'MediaTek Helio G81', '250.000', '8', 'LPDDR4X', '256', 'eMMC 5.1', '48', 'EIS', 'Sony IMX582', '8', '0', '8', 'IPS', '120', '500', '-', '5000', '18', '0', 0, 0, 'IP54', 'Infrared Blaster, Dual Stereo Speaker, Side Fingerprint, DTS Audio', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(20, '20', 'Tecno POVA 6 Pro 5G', 'Tecno', '2024', ' Rp 3.010.000 ', 'MediaTek Dimensity 6080', '437.214', '12', 'LPDDR4X', '256', 'UFS 2.2', '108', 'OIS', '-', '2', '0', '32', 'AMOLED', '120', '1300', '-', '6000', '70', '0', 0, 0, 'IP53', 'Dust & splash resistant; Dynamic-Light Effect; Infrared port; Hi-Res audio (24-bit/192 kHz); Dolby Atmos stereo speakers', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(21, '21', 'Tecno Phantom V Flip 5G', 'Tecno', '2023', ' Rp 5.399.000 ', 'MediaTek Dimensity 8050 (6 nm)', '734.846', '8', 'LPDDR4X', '256', 'UFS 2.1', '64', 'EIS', 'Samsung ISOCELL GWB', '13', '0', '32', 'AMOLED', '120', '1000', '-', '4000', '45', '0', 0, 0, '-', 'Layar sekunder AMOLED 1,32″ 60 Hz (466×466 px, 800 nit); Speaker stereo; Extended RAM; HiOS Flip; Autofokus di semua kamera', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(22, '22', 'iQOO Z10  8/128', 'iQOO', '2025', ' Rp 3.199.000 ', 'Snapdragon 7s Gen 3', '822.705', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '2', '0', '3', 'AMOLED', '120', '5.000', 'Corning Gorilla Glass Victus 2', '7300', '90', '0', 0, 0, 'IP65', 'Tahan benturan (MIL-STD-810H); OS upgrade 2× hingga Android 17; sensor sidik jari optik di layar; reverse charging', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(23, '23', 'iQOO Z10  8/256', 'iQOO', '2025', ' Rp 3.499.000 ', 'Snapdragon 7s Gen 3', '828.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '2', '0', '3', 'AMOLED', '120', '5.000', 'Corning Gorilla Glass Victus 2', '7300', '90', '0', 0, 0, 'IP65', 'Tahan benturan (MIL-STD-810H); OS upgrade 2× hingga Android 17; sensor sidik jari optik di layar; reverse charging', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(24, '24', 'iQOO Z10  12/256', 'iQOO', '2025', ' Rp 3.799.000 ', 'Snapdragon 7s Gen 3', '835.000', '12', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '2', '0', '3', 'AMOLED', '120', '5.000', 'Corning Gorilla Glass Victus 2', '7300', '90', '0', 0, 0, 'IP65', 'Tahan benturan (MIL-STD-810H); OS upgrade 2× hingga Android 17; sensor sidik jari optik di layar; reverse charging', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(25, '25', 'iQOO Z10 12/512', 'iQOO', '2025', ' Rp 4.199.000 ', 'Snapdragon 7s Gen 3', '838.000', '12', 'LPDDR4X', '512', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '2', '0', '3', 'AMOLED', '120', '5.000', 'Corning Gorilla Glass Victus 2', '7300', '90', '0', 0, 0, 'IP65', 'Tahan benturan (MIL-STD-810H); OS upgrade 2× hingga Android 17; sensor sidik jari optik di layar; reverse charging', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(26, '26', 'iQOO Neo 10  8/256', 'iQOO', '2025', ' Rp 5.599.000 ', 'Snapdragon 8s Gen 4', '2.018.705', '8', 'LPDDR5x', '256', 'UFS 4.1', '50', 'OIS', 'Sony IMX882', '8', '0', '32', 'AMOLED', '144', '4.400', 'Shield Glass', '7000', '120', '0', 0, 0, 'IP64', 'Kedap debu & cipratan air, tahan benturan, fingerprint optik di layar, stereo speaker, Android 15 & Funtouch 15, dual SIM', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(27, '27', 'iQOO Neo 10  12/256', 'iQOO', '2025', ' Rp 6.099.000 ', 'Snapdragon 8s Gen 4', '2.050.000', '12', 'LPDDR5x', '256', 'UFS 4.1', '50', 'OIS', 'Sony IMX882', '8', '0', '32', 'LTPO AMOLED', '144', '4.400', 'Shield Glass', '7000', '120', '0', 0, 0, 'IP64', 'Kedap debu & cipratan air, tahan benturan, fingerprint optik di layar, stereo speaker, Android 15 & Funtouch 15, dual SIM', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(28, '28', 'iQOO Neo 10  12/512', 'iQOO', '2025', ' Rp 7.099.000 ', 'Snapdragon 8s Gen 4', '2.080.000', '12', 'LPDDR5x', '512', 'UFS 4.1', '50', 'OIS', 'Sony IMX882', '8', '0', '32', 'LTPO AMOLED', '144', '4.400', 'Shield Glass', '7000', '120', '0', 0, 0, 'IP64', 'Kedap debu & cipratan air, tahan benturan, fingerprint optik di layar, stereo speaker, Android 15 & Funtouch 15, dual SIM', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(29, '29', 'iQOO 13  12/256', 'iQOO', '2024', ' Rp 9.499.000 ', 'Snapdragon 8 Elite', '2.681.370', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Sony IMX921', '50', '64', '32', 'LTPO AMOLED', '144', '6.500', 'Schott Xensation Alpha', '6150', '120', '50', 0, 0, 'IP69', 'Lampu RGB pada bodi; ultrasonik fingerprint (under-display); stereo speaker; audio 24-bit/192 kHz; infrared; USB-C 3.2; Android 15 (Funtouch OS 15);OS‐upgrade 4×; security patch 5 thn', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(30, '30', 'iQOO 13  16/512', 'iQOO', '2024', ' Rp 11.499.000 ', 'Snapdragon 8 Elite', '2.681.370', '16', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Sony IMX921', '50', '64', '32', 'LTPO AMOLED', '144', '6.500', 'Schott Xensation Alpha', '6150', '120', '50', 0, 0, 'IP69', 'Lampu RGB pada bodi; ultrasonik fingerprint (under-display); stereo speaker; audio 24-bit/192 kHz; infrared; USB-C 3.2; Android 15 (Funtouch OS 15);OS‐upgrade 4×; security patch 5 thn', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(31, '31', 'iQOO Z9  8/128', 'iQOO', '2024', ' Rp 3.599.000 ', 'Snapdragon 7 Gen 3', '800.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '2', '0', '16', 'AMOLED', '144', '4.500', 'Dragontrail Star 2 Plus', '6000', '80', '0', 0, 0, 'IP64', 'Tahan debu & percikan air; speaker stereo; infrared', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(32, '32', 'iQOO Z9  8/256', 'iQOO', '2024', ' Rp 3.899.000 ', 'Snapdragon 7 Gen 3', '810.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '2', '0', '16', 'AMOLED', '144', '4.500', 'Dragontrail Star 2 Plus', '6000', '80', '0', 0, 0, 'IP64', 'Tahan debu & percikan air; speaker stereo; infrared', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(33, '33', 'iQOO Z9  12/256', 'iQOO', '2024', ' Rp 4.499.000 ', 'Snapdragon 7 Gen 3', '820.000', '12', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '2', '0', '16', 'AMOLED', '144', '4.500', 'Dragontrail Star 2 Plus', '6000', '80', '0', 0, 0, 'IP64', 'Tahan debu & percikan air; speaker stereo; infrared', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(34, '34', 'iQOO Z9x  8/128', 'iQOO', '2024', ' Rp 2.799.000 ', 'Snapdragon 6 Gen 1', '500.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'EIS', 'Sony IMX882', '2', '0', '8', 'IPS', '120', '1.000', 'Dragontrail Star 2 Plus', '6000', '44', '0', 0, 0, 'IP64', 'Tahan debu & percikan air; Side-mounted fingerprint; Stereo speaker; MicroSD hingga 1 TB; Jack 3.5 mm; Android 14 (Funtouch OS 14)', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(35, '35', 'iQOO Z9x  8/256', 'iQOO', '2024', ' Rp 3.099.000 ', 'Snapdragon 6 Gen 1', '510.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'EIS', 'Sony IMX882', '2', '0', '8', 'IPS', '120', '1.000', 'Dragontrail Star 2 Plus', '6000', '44', '0', 0, 0, 'IP64', 'Tahan debu & percikan air; Side-mounted fingerprint; Stereo speaker; MicroSD hingga 1 TB; Jack 3.5 mm; Android 14 (Funtouch OS 14)', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(36, '36', 'iQOO Z9x  12/256', 'iQOO', '2024', ' Rp 3.499.000 ', 'Snapdragon 6 Gen 1', '520.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'EIS', 'Sony IMX882', '2', '0', '8', 'IPS', '120', '1.000', 'Dragontrail Star 2 Plus', '6000', '44', '0', 0, 0, 'IP64', 'Tahan debu & percikan air; Side-mounted fingerprint; Stereo speaker; MicroSD hingga 1 TB; Jack 3.5 mm; Android 14 (Funtouch OS 14)', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(37, '37', 'iQOO Z9 Turbo', 'iQOO', '2024', ' Rp 7.199.000 ', 'Snapdragon 8s Gen 3', '1.417.313', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Sony LYT-600', '8', '0', '16', 'AMOLED', '144', '4.500', 'Dragontrail Star 2 Plus', '6000', '80', '0', 0, 0, 'IP64', 'Sensor sidik jari optik di bawah layar; speaker stereo; bodi tahan debu & cipratan air', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(38, '38', 'itel P55 5G', 'itel', '2023', ' Rp 1.299.000 ', 'MediaTek Dimensity 6080', '420.000', '6', 'LPDDR4X,', '128', 'UFS 2.2', '50', '-', 'Samsung ISOCELL JN1', '0', '0', '8', 'IPS', '90', '450', '-', '5000', '18', '0', 0, 0, 'IP54', 'Triple slot (2 SIM + microSD), Dynamic Bar, Touch sampling 180 Hz, Extended RAM sampai 6 GB, side-mounted fingerprint', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(39, '39', 'itel RS4', 'itel', '2024', ' Rp 1.899.000 ', 'MediaTek Helio G99 Ultimate', '400.000', '12', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '480', '-', '5000', '45', '0', 0, 0, '-', 'Dynamic Bar (notifikasi ala Dynamic Island) Speaker stereo Radio FM Extended RAM Side-mounted fingerprint sensor Touch sampling rate 240 Hz Android 13, itelOS', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(40, '40', 'itel S25         ', 'itel', '2024', ' Rp 1.799.000 ', 'UNISOC Tiger T620', '300.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'PDAF', 'Samsung S5KJN1', '0', '0', '32', 'AMOLED', '120', '1.800', '-', '5000', '18', '0', 0, 0, 'IP54', 'Dynamic Bar (notifikasi ala Dynamic Island) Speaker stereo Radio FM Extended RAM Side-mounted fingerprint sensor Touch sampling rate 240 Hz Android 13, itelOS', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(41, '41', 'itel S25 Ultra', 'itel', '2024', ' Rp 2.349.000 ', 'UNISOC Tiger T620', '300.000', '8', 'LPDDR4X', '512', 'UFS 2.2', '50', 'PDAF', 'Samsung S5KJN1', '0', '0', '32', 'AMOLED', '120', '1.400', 'Corning Gorilla Glass 7i', '5000', '18', '0', 0, 0, 'IP64', 'Perlindungan itel TitanShield RGB Ring Light (notifikasi) Fingerprint under display Infrared blaster Slot khusus microSD Android 14 (itelOS 14.5) dengan jaminan upgrade ke Android 15', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(42, '42', 'vivo X200', 'vivo', '2024', ' Rp 12.999.000 ', 'MediaTek Dimensity 9400', '2.500.000', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Sony IMX921', '50', '50', '32', 'AMOLED', '120', '4.500', 'Schott Xensation Alpha glass', '5800', '90', '0', 0, 0, 'IP69', 'Dual SIM, eSIM, Speaker stereo', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(43, '43', 'vivo X200 Pro', 'vivo', '2025', ' Rp 17.999.000 ', 'MediaTek Dimensity 9400 (3 nm)', '2.900.000', '16', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Sony LYT-818', '50', '200', '32', 'AMOLED', '120', '4.500', 'Armor Glass', '6000', '90', '30', 0, 0, 'IP69', 'Speaker stereo, layar Dolby Vision, konektivitas satelit, USB‑C 3.2 display‑out', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(44, '44', 'vivo V50', 'vivo', '2025', ' Rp 7.699.000 ', 'Qualcomm Snapdragon 7 Gen 3', '800.000', '12', 'LPDDR4X', '512', 'UFS 2.2', '50', 'OIS', 'Omnivision OV50E', '50', '0', '50', 'AMOLED', '120', '4.500', 'Diamond Shield Glass', '6000', '90', '0', 0, 0, 'IP69', 'Fingerprint ibawah layar, dual stereo speaker, AI features, Aura Light flash, etc.', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(45, '45', 'vivo V40', 'vivo', '2024', ' Rp 7.499.000 ', 'Qualcomm Snapdragon 7 Gen 3', '851.130', '12', 'LPDDR4x', '512', 'UFS 2.2', '50', 'OIS', 'Sony IMX766', '50', '0', '50', 'AMOLED', '120', '4.500', 'Schott Glass', '5500', '80', '0', 0, 0, 'IP68', 'Extended RAM hingga 12 GB, USB Power Delivery, Reverse Charging, Stereo Speaker', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(46, '46', 'vivo Y28', 'vivo', '2024', ' Rp 2.399.000 ', 'MediaTek Helio G85', '200.000', '8', 'LPDDR4X', '256', 'eMMC 5.1', '50', 'EIS', 'CMOS', '2', '0', '8', 'IPS', '90', '1.000', '-', '6000', '44', '0', 0, 0, 'IP64', 'Speaker stereo, Star Halo Light, TuV Rheinland Low Blue Light, microSD hingga 1TB, jack audio 3.5mm3', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(47, '47', 'realme C63', 'realme', '2024', ' Rp 1.999.000 ', 'UNISOC Tiger T612', '255.227', '8', 'LPDDR4X', '128', 'eMMC 5.1', '50', 'EIS', 'OmniVision', '0', '0', '8', 'IPS', '90', '560', '-', '5000', '45', '0', 0, 0, 'IP54', 'Air Gestures; Rainwater Smart Touch; Mini Capsule 2.0; fingerprint samping', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(48, '48', 'realme C75x', 'realme', '2025', ' Rp 1.958.000 ', 'MediaTek Helio G81', '280.000', '8', 'LPDDR4X', '128', 'eMMC 5.1', '50', 'EIS', '-', '2', '0', '8', 'IPS', '120', '690', 'ArmorShell Glass', '5600', '45', '0', 0, 0, 'IP68', 'Always-on Display, Mini Capsule, tahan benturan, tahan air & debu', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(49, '49', 'realme 12 5G', 'realme', '2024', ' Rp 3.250.000 ', 'MediaTek Dimensity 6100+', '418.159', '8', 'LPDDR4X', '256', 'UFS 2.2', '108', 'EIS', '-', '2', '0', '8', 'IPS', '120', '950', '-', '5000', '45', '0', 0, 0, 'IP54', 'Mini Capsule 2.0, Dynamic RAM hingga 8 GB, speaker stereo, audio Hi-Res', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(50, '50', 'realme 13 Pro', 'realme', '2024', ' Rp 4.999.000 ', 'Qualcomm Snapdragon 7s Gen 2', '677.094', '12', 'LPDDR4x', '256', 'UFS', '50', 'OIS', '-', '8', '0', '32', 'AMOLED', '120', '950', 'Corning Gorilla Glass 7i', '5050', '45', '0', 0, 0, 'IP65', 'Stereo speaker, Hi-Res audio 24-bit/192kHz, sensor sidik jari di layar', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(51, '51', 'realme GT 7T', 'realme', '2025', ' Rp 6.899.000 ', 'MediaTek Dimensity 8400 Max', '1.780.000', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Sony IMX896', '8', '0', '32', 'AMOLED', '144', '6.000', 'ArmorShell Glass', '7000', '120', '0', 0, 0, 'IP69', 'Audio resolusi tinggi 24-bit/192kHz  - Speaker stereo  - Mikrofon ganda  - Ultimate Cooling System  - AI Gaming Coach  - Jaminan update OS hingga 6 kali', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(52, '52', 'OPPO A5', 'OPPO', '2025', '2.899.000', 'Qualcomm Snapdragon 6s 4G Gen 1', '250.000', '8', 'LPDDR4X', '256', 'UFS 2.1', '50', 'EIS', '-', '2', '0', '5', 'IPS', '90', '1.000', 'Corning Gorilla Glass 7i', '6000', '45', '0', 0, 0, 'IP65', 'MIL-STD-810H, fingerprint di tombol power, jack audio 3.5mm', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(53, '53', 'OPPO A5x', 'OPPO', '2025', '2.299.000', 'Qualcomm Snapdragon 6s 4G Gen 1', '240.000', '6', 'LPDDR4X', '128', 'UFS 2.1', '32', '-', '-', '0', '0', '5', 'IPS', '90', '1.000', 'Corning Gorilla Glass 7i', '6000', '45', '0', 0, 0, 'IP65', 'MIL-STD-810H, sensor fingerprint di tombol power, infrared, jack audio 3.5mm', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(54, '54', 'OPPO A5 Pro v1', 'OPPO', '2925', '3.499.000', 'Snapdragon 6 s 4G Gen 1', '650.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'EIS', 'Omnivision OV50D40', '2', '0', '8', 'IPS', '90', '1.000', 'Panda Glass', '5800', '45', '0', 0, 0, 'IP69', 'Sensor sidik jari samping, stereo speaker, slot micro‑SD, ColorOS 15, Android 15, MIL‑STD‑810H (tahan benturan)', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(55, '55', 'OPPO A3 NFC', 'OPPO', '2024', '2.199.000', 'Qualcomm Snapdragon 6s 4G Gen1 (Octa-core 2×2,2 GHz & 6×1,7 GHz)', '480.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'EIS', '-', '2', '0', '5', 'IPS', '90', '1.000', 'Panda Glass', '5100', '45', '0', 0, 0, 'IP54', 'MIL‑STD‑810H, Splash Touch (layar tetap responsif saat basah), Ultra Volume Mode, Dual‑view video, slot hybrid/RAM expansion, jack audio 3.5 mm, fingerprint samping, Smart Charging, Adaptive refresh rate', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(56, '56', 'OPPO A3x 4G', 'OPPO', '2024', '1.499.000', 'Snapdragon 6s 4G Gen1', '248.971', '4', 'LPDDR4X', '64', 'eMMC 5.1', '8', '-', '-', '2', '0', '5', 'IPS', '90', '1.000', 'Panda Glass', '5100', '45', '0', 0, 0, 'IP54', 'MIL-STD-810H, Splash Touch, Ultra Volume Mode, touch sampling rate 240 Hz', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(57, '57', 'OPPO A5 Pro', 'OPPO', '2025', '3.499.000', 'Snapdragon 6s 4G Gen1 (Octa-core: 2×2.2 GHz Kryo 610 Gold & 6×1.7 GHz Kryo 660 Silver)', '750.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', 'OV50D40', '2', '0', '8', 'IPS', '90', '1.000', 'Panda Glass', '5800', '45', '0', 0, 0, 'IP68', 'Bodi tipis & ringan; ketahanan militer MIL-STD 810H; Anti-Drop Shield case (in-box); AI Link Boost; AI Eraser Face Unlock, AI Beauty, 3.5 mm Jack, microUSB 2.0', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(58, '58', 'Redmi 13x', 'REDMI', '2025', '1.799.000', 'MediaTek Helio G91 Ultra', '269.266', '8', 'LPDDR4X', '256', 'eMMC 5.1', '108', 'PDAF', '-', '2', '0', '13', 'IPS', '90', '550', '-', '5030', '33', '0', 0, 0, 'IP53', 'Fingerprint di tombol power • Radio FM • Extended RAM 8 GB • microSD hingga 1 TB • Bluetooth 5.3 • dual-band Wi-Fi', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(59, '59', 'Redmi A5', 'REDMI', '2025', '1.199.000', 'Unisoc T7250', '264.784', '4', 'LPDDR4X', '128', 'eMMC 5.1', '32', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '450', '-', '5200', '15', '0', 0, 0, '-', 'Fingerprint di tombol power; Radio FM; DC Dimming; sertifikasi TUV Rheinland Low Blue Light & Flicker Free; slot khusus 2 SIM + microSD; jack 3.5 mm; USB OTG; Android 15 Go (HyperOS); Bluetooth 5.4; Dual-band Wi-Fi', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(60, '60', 'Redmi 14C', 'REDMI', '2024', '1.599.000', 'MediaTek Helio G81 Ultra', '242.000', '8', 'LPDDR4X', '256', 'eMMC 5.1', '50', 'PDAF', '-', '0', '0', '13', 'IPS', '90', '600', '-', '5160', '18', '0', 0, 0, '-', 'Fingerprint di tombol power; Radio FM; microSD hingga 1 TB; Extended RAM hingga 8 GB; USB Type-C 2.0; jack 3,5 mm; Bluetooth 5.4; Wi-Fi dual-band; Android 14 HyperOS; kompas, proksimitas, akselerometer', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(61, '61', 'Redmi Note 14 5G', 'REDMI', '2025', '3.699.000', 'MediaTek Dimensity 7025 Ultra', '470.000', '12', 'LPDDR4X', '512', 'UFS 2.2', '108', 'PDAF', 'Sony LYT-600', '8', '2', '20', 'AMOLED', '120', '2.100', 'Corning Gorilla Glass 5', '5110', '45', '0', 0, 0, 'IP64', 'Fingerprint optik di bawah layar; speaker stereo (Dolby Atmos); jack 3.5 mm; infrared blaster; slot hybrid 2 SIM/microSD; USB-C 2.0; Bluetooth 5.3; Wi-Fi dual-band; Android 14 HyperOS; jaminan upgrade OS 3× & security patch 4 tahun', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(62, '62', 'Redmi Note 14 Pro+ 5G', 'REDMI', '2025', '5.599.000', 'Qualcomm Snapdragon 7s Gen 3', '770.000', '16', 'LPDDR4X', '512', 'UFS 2.2', '200', 'OIS', '-', '8', '2', '20', 'AMOLED', '120', '3.000', 'Corning Gorilla Glass Victus 2', '5110', '120', '0', 0, 0, 'IP68', 'Fingerprint optik di bawah layar; speaker stereo (Dolby Atmos); jack 3,5 mm; infrared blaster; slot hybrid 2 SIM/microSD; USB-C 2.0; Bluetooth 5.4; Wi-Fi dual-band; Android 14 HyperOS; upgrade OS 3× & security patch 4 tahun', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(63, '63', 'Xiaomi 14T', 'Xiaomi', '2024', '5.999.000', 'MediaTek Dimensity 8300 Ultra', '1.400.000', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Sony IMX906', '12', '50', '32', 'AMOLED', '144', '4.000', '-', '5000', '64', '0', 0, 0, 'IP68', 'eSIM; Dolby Vision; HDR10+; audio resolusi tinggi 24-bit/192 kHz; speaker stereo; infrared blaster; multi-band GNSS', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(64, '64', 'Xiaomi 14', 'Xiaomi', '2024', '11.249.000', 'Qualcomm Snapdragon 8 Gen 3', '1.919.021', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'OmniVision OVX9000', '50', '50', '32', 'AMOLED', '120', '3.000', 'Corning Gorilla Glass Victus', '4610', '90', '50', 0, 0, 'IP68', 'eSIM; Dual SIM (slot khusus); USB 3.2 display-out; Dolby Vision, HDR10+; 68 miliar warna; touch sampling 240 Hz; stereo speaker & 4-mic array; audio Hi-Res 24-bit/192 kHz; HyperOS (Android 14) dan update guarantee; sensor fingerprint optik, accelerometer, cahaya, proksimitas, giroskop, kompas, barometer, spektrum warna', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(65, '65', 'Xiaomi 15', 'XIAOMI', '2024', '12.999.000', 'Qualcomm Snapdragon 8 Elite', '2.449.737', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'OmniVision OVX9000 Light Fusion 900', '50', '50', '32', 'AMOLED', '120', '3.200', 'Xiaomi Shield Glass', '5240', '90', '50', 0, 0, 'IP68', 'eSIM; USB 3.2 Gen 1 dengan display-out; Dolby Vision; HDR10+; Dual-LED dual-tone flash; 10-bit Dolby Vision HDR; 10-bit LOG; audio 24-bit/192 kHz; speaker stereo', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(66, '66', 'Xiaomi 15 Ultra', 'Xiaomi', '2025', '19.999.000', 'Qualcomm Snapdragon 8 Elite', '2.725.854', '16', 'LPDDR5X', '1024', 'UFS 4.1', '50', 'OIS', 'Sony IMX906', '50', '50', '32', 'AMOLED', '120', '3.000', 'Xiaomi Shield Glass 2.0', '6000', '90', '80', 0, 0, 'IP68', 'Dual SIM + eSIM; 68 miliar warna; Dolby Vision & HDR10+; HyperOS 2; Leica lenses; 3D Dual-Channel IceLoop cooling; Hi-Res audio; stereo speakers', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(67, '67', 'nubia A36', 'nubia', '2025', '989.000', 'Unisoc T7200', '240.000', '4', 'LPDDR4X ', '64', 'eMMC 5.1', '13', '-', '-', '2', '0', '5', 'IPS', '90', '500', '-', '5000', '10', '0', 0, 0, '-', 'Live Island Interactive; Face unlock; Fingerprint scanner; Extended RAM hingga 8 GB', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(68, '68', 'nubia A56', 'nubia', '2025', '1.049.000', 'Unisoc T7200', '250.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '13', '-', '-', '2', '0', '8', 'IPS', '90', '500', '-', '5000', '18', '0', 0, 0, '-', 'Live Island 2.0; Extended RAM hingga 8 GB; sensor sidik jari samping; face unlock', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(69, '69', 'nubia Neo 3 GT', 'nubia', '2025', '2.999.000', 'UNISOC T9100', '536.829', '8', 'LPDDR4X', '256', 'UFS 3.1', '50', 'PDAF', '-', '2', '0', '16', 'AMOLED', '120', '1.200', '-', '6000', '80', '0', 0, 0, '-', 'Zona sensitif tekanan (dual trigger), lampu RGB, speaker stereo DTS :X Ultra', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(70, '70', 'nubia Neo 3 5G', 'Nubia', '2025', '2.349.000', 'UNISOC T8300', '418.257', '8', 'LPDDR4X', '256', 'UFS 3.1', '50', 'PDAF', '-', '2', '0', '8', 'AMOLED', '120', '1.000', '-', '6000', '33', '0', 0, 0, '-', 'RGB lighting, dual gaming shoulder triggers, Z-Axis linear motor, stereo speaker DTS:X Ultra, Radio FM', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(71, '71', 'nubia Focus 2 5G', 'nubia', '2025', '2.499.000', 'UNISOC T760', '450.000', '8', 'LPDDR4x', '256', 'UFS 3.1', '108', 'PDAF', '-', '0', '0', '16', 'IPS', '120', '1.000', '-', '5000', '23', '0', 0, 0, '-', 'Desain modul kamera unik; Live Island 2.0; beragam fitur Neovision AI; aksesori Professional Suit (CPL & Starburst filter); sidik jari tombol power', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(72, '72', 'nubia V70 Design', 'nubia', '2025', '1.499.000', 'UNISOC Tiger T606', '240.000', '8', 'LPDDR4x', '256', 'eMMC 5.1', '50', 'PDAF', '-', '2', '0', '16', 'IPS', '120', '-', '-', '5000', '23', '0', 0, 0, '-', 'Live Island 2.0; Dual SIM (hybrid); microSD up to 1 TB; side-mounted fingerprint;', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(73, '73', 'nubia V60', 'Nubia', '2024', '1.649.000', 'UNISOC Tiger T616', '200.000', '8', 'LPDDR4X', '256', 'eMMC 5.1 ', '50', 'PDAF', '-', '2', '2', '32', 'IPS', '90', '450', '-', '5000', '23', '0', 0, 0, 'IP53', 'Live Island, Radio FM, Fingerprint di tombol power, Jack 3.5 mm', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(74, '74', 'nubia Music', 'ZTE', '2024', '1.049.000', 'UNISOC SC9863A', '200.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '50', 'PDAF', '-', '0', '0', '0', 'IPS', '90', '500', '-', '5000', '10', '0', 0, 0, '-', 'Dynamic RAM hingga 8 GB; DTS:X Ultra; Dual 3.5 mm jack; Musical light effects; FM Radio; side-mounted fingerprint scanner', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(75, '75', 'Honor 400 Lite 5G', 'Honor', '2025', '3.999.000', 'MediaTek Dimensity 7025', '497.235', '8', 'LPDDR5', '256', 'UFS 2.2', '50', 'PDAF', 'Samsung ISOCELL HM6', '5', '0', '50', 'AMOLED', '120', '3.500', '-', '5230', '35', '0', 0, 0, 'IP65', 'eSIM; sensor sidik jari optik di bawah layar; Dual SIM (slot khusus); kedap debu & tahan semprotan air', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(76, '76', 'Tecno Spark  GO 2', 'Tecno', '2025', '949.000', 'Unisoc T7250 (12nm)', '301.646', '4', 'LPDDR4X', '64', 'eMMC 5.1', '13', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '-', '-', '5000', '18', '0', 0, 0, 'IP64', '- Side-mounted fingerprint - Stereo speaker DTS - IR Blaster - Dynamic Port ala iPhone - Android 15 + HiOS 15', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(77, '77', 'itel city 100', 'itel', '2025', '1.299.000', 'UNISOC T7250', '306.511', '8', 'LPDDR4X', '128', 'UFS 2.2', '12', '-', '-', '0', '0', '8', 'IPS', '90', '700', '-', '5200', '18', '0', 0, 0, 'IP64', 'Infrared blaster, Dynamic Bar, Widevine L1, Always-on Display, Radio FM, AI Assistant Aivana', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(78, '78', 'Infinix HOT 50 4G', 'Infinix', '2024', '1.649.000', 'MediaTek Helio G100', '410.444', '8', 'LPDDR4x', '128', 'UFS 2.2', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '800', '-', '5000', '18', '0', 0, 0, 'IP54', 'Radio FM, microSD hingga 1TB, fingerprint di tombol power, triple slot', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(79, '79', 'Advan X1', 'Advan', '2025', '1.699.000', 'MediaTek Helio G100', '400.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '64', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '450', '-', '5000', '18', '0', 0, 0, '-', 'Sensor gyro hardware, fingerprint di tombol power, slot microSD hingga 512 GB, jack audio 3.5mm', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(80, '80', 'Infiix Note 50X', 'Infinix', '2025', '2.399.000', 'MediaTek Dimensity 7300 Ultimate', '617.912', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', 'Sony IMX882', '0', '0', '8', 'IPS', '120', '560', '-', '5200', '45', '0', 0, 0, 'IP64', 'MIL-STD-810H, Speaker stereo JBL, Radio FM, Infinix AI, Infrared', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(81, '81', 'POCO M6 PRO', 'POCO', '2024', '2.499.000', 'MediaTek Helio G99 Ultra', '417.930', '8', 'LPDDR4X', '256', 'UFS 2.2', '64', 'OIS', 'OmniVision OV64B', '8', '2', '16', 'AMOLED', '120', '1.300', 'Corning Gorilla Glass 5', '5000', '67', '0', 0, 0, 'IP56', 'Speaker stereo Dolby Atmos - Extended RAM hingga 12 GB - microSD hingga 1 TB - Infrared blaster - TÜV Rheinland sertifikasi layar', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(82, '82', 'INFINIX NOTE 50S', 'Infinix', '2025', '3.049.000', 'MediaTek Dimensity 7300 Ultimate', '670.436', '8', 'LPDDR5X', '256', 'UFS 2.2', '64', 'PDAF', '-', '2', '0', '13', 'AMOLED', '144', '1.300', 'Corning Gorilla Glass 5', '5200', '45', '0', 0, 0, 'IP64', 'Kedap debu, tahan ciprakan air, tahan benturan, lampu RGB notifikasi', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(83, '83', 'POCO X6 PRO', 'POCO', '2024', '4.299.000', 'MediaTek Dimensity 8300 Ultra', '1.301.839', '12', 'LPDDR5X', '512', 'UFS 4.0', '64', 'OIS', 'OmniVision OV64B', '8', '2', '16', 'AMOLED', '120', '1.800', 'Corning Gorilla Glass 5', '5000', '67', '0', 0, 0, 'IP54', 'Fingerprint under display, stereo speaker, infrared, HyperOS, HDR', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(84, '84', 'INFINIX GT 30 PRO 8GB | 256GB', 'Infinix', '2025', '3.999.000', 'MediaTek Dimensity 8350', '1.306.960', '8', 'LPDDR5X', '256', 'UFS 4.0', '108', 'OIS', 'Samsung ISOCELL HM6', '8', '0', '13', 'AMOLED', '144', '4.500', 'Corning Gorilla Glass 7i', '5500', '45', '30', 0, 0, 'IP64', 'GT Trigger (R1+L1), MagCharge Cooler, MagCase, stereo speaker, giroskop, haptic feedback, RGB Mecha Light Strip', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(85, '85', 'INFINIX GT 30 PRO 12GB | 512GB', 'Infinix', '2025', '4.599.000', 'MediaTek Dimensity 8350', '1.376.960', '12', 'LPDDR5X', '512', 'UFS 4.0', '108', 'OIS', 'Samsung ISOCELL HM6', '8', '0', '13', 'AMOLED', '144', '4.500', 'Corning Gorilla Glass 7i', '5500', '45', '30', 0, 0, 'IP64', 'GT Trigger (R1+L1), MagCharge Cooler, MagCase, stereo speaker, giroskop, haptic feedback, RGB Mecha Light Strip', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(86, '86', 'Redmi Note 14 Pro 5G 8GB | 256GB', 'REDMI', '2025', '3.999.000', 'MediaTek Dimensity 7300 Ultra', '625.540', '8', 'LPDDR4X', '256', 'UFS 2.2', '200', 'OIS', 'Samsung ISOCELL HP3', '8', '2', '20', 'AMOLED', '120', '3.000', 'Corning Gorilla Glass Victus 2', '5110', '45', '0', 0, 0, 'IP68', 'Speaker stereo, eSIM, Infrared, Wi-Fi 6, Bluetooth 5.4, USB-C 2.0', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(87, '87', 'Redmi Note 14 Pro 5G 12GB | 512GB', 'REDMI', '2025', '4.599.000', 'MediaTek Dimensity 7300 Ultra', '625.540', '12', 'LPDDR4X', '512', 'UFS 2.2', '200', 'OIS', 'Samsung ISOCELL HP3', '8', '2', '20', 'AMOLED', '120', '3.000', 'Corning Gorilla Glass Victus 2', '5110', '45', '0', 0, 0, 'IP68', 'Speaker stereo, eSIM, Infrared, Wi-Fi 6, Bluetooth 5.4, USB-C 2.0', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(88, '88', 'Xiaomi 14T PRO 12GB | 256GB', 'Xiaomi', '2024', '8.499.000', 'MediaTek Dimensity 9300+', '1.726.904', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'OmniVision OV50H (1/1,3″)', '12', '50', '32', 'AMOLED', '144', '4.000', 'Corning Gorilla Glass 5', '5000', '120', '50', 0, 0, 'IP68', 'Audio resolusi tinggi 24-bit/192 kHz; Speaker stereo', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(89, '89', 'Xiaomi 14T PRO 12GB | 512GB', 'Xiaomi', '2024', '8.999.000', 'MediaTek Dimensity 9300+', '1.726.904', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'OmniVision OV50H (1/1,3″)', '12', '50', '32', 'AMOLED', '144', '4.000', 'Corning Gorilla Glass 5', '5000', '120', '50', 0, 0, 'IP68', 'Audio resolusi tinggi 24-bit/192 kHz; Speaker stereo', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(90, '90', 'Samsung S24 FE 8GB | 128GB', 'Samsung', '2024', '7.549.000', 'Exynos 2400e', '1.555.955', '8', 'LPDDR5', '128', 'UFS 3.1', '50', 'OIS', 'Samsung S5KGN', '12', '8', '10', 'AMOLED', '120', '1.900', 'Gorilla Glass Victus+', '4700', '25', '15', 0, 0, 'IP68', 'eSIM, Dual SIM, stereo speaker, Samsung Knox, Knox Vault, Samsung DeX, Circle to Search', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(91, '91', 'Samsung S24 FE 8GB | 256GB', 'Samsung', '2024', '8.499.000', 'Exynos 2400e', '1.555.955', '8', 'LPDDR5', '256', 'UFS 3.1', '50', 'OIS', 'Samsung S5KGN', '12', '8', '10', 'AMOLED', '120', '1.900', 'Gorilla Glass Victus+', '4700', '25', '15', 0, 0, 'IP68', 'eSIM, Dual SIM, stereo speaker, Samsung Knox, Knox Vault, Samsung DeX, Circle to Search', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(92, '92', 'Samsung S24 FE 8GB | 512GB', 'Samsung', '2024', '9.699.000', 'Exynos 2400e', '1.555.955', '8', 'LPDDR5', '512', 'UFS 3.1', '50', 'OIS', 'Samsung S5KGN', '12', '8', '10', 'AMOLED', '120', '1.900', 'Gorilla Glass Victus+', '4700', '25', '15', 0, 0, 'IP68', 'eSIM, Dual SIM, stereo speaker, Samsung Knox, Knox Vault, Samsung DeX, Circle to Search', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(93, '93', 'POCO F7 ULTRA 12GB | 256GB', 'POCO', '2025', '9.799.000', 'Qualcomm Snapdragon 8 Elite', '2.440.879', '12', 'LPDDR5X', '256', 'UFS 4.1', '50', 'OIS', 'OmniVision OVX8000', '8', '50', '32', 'AMOLED', '120', '3.200', 'Poco Shield Glass', '5300', '120', '50', 0, 0, 'IP68', 'Audio Hi-Res 24-bit/192 kHz Snapdragon Sound Speaker stereo Xiaomi HyperAI', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(94, '94', 'POCO F7 ULTRA 16GB | 512GB', 'POCO', '2025', '10.799.000', 'Qualcomm Snapdragon 8 Elite', '2.440.879', '12', 'LPDDR5X', '512', 'UFS 4.1', '50', 'OIS', 'OmniVision OVX8000', '8', '50', '32', 'AMOLED', '120', '3.200', 'Poco Shield Glass', '5300', '120', '50', 0, 0, 'IP68', 'Audio Hi-Res 24-bit/192 kHz Snapdragon Sound Speaker stereo Xiaomi HyperAI', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(95, '95', 'Iphone 15 6GB | 128GB', 'Apple', '2023', '11.499.000', 'Apple A16 Bionic', '1.319.704', '8', 'LPDDR5', '128', 'NVMe', '48', 'OIS', 'Sony', '12', '0', '12', 'OLED', '60', '2.000', 'Ceramic Shield Glass', '3349', '20', '20', 0, 0, 'IP68', 'eSIM; USB-C dengan display-out; HDR10, Dolby Vision; stereo speaker; UWB 2; SOS via satelit; iOS 17', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(96, '96', 'Iphone 15 6GB | 256GB\n', 'Apple', '2023', '13.999.000', 'Apple A16 Bionic', '1.319.704', '8', 'LPDDR5', '256', 'NVMe', '48', 'OIS', 'Sony', '12', '0', '12', 'OLED', '60', '2.000', 'Ceramic Shield Glass', '3349', '20', '20', 0, 0, 'IP68', 'eSIM; USB-C dengan display-out; HDR10, Dolby Vision; stereo speaker; UWB 2; SOS via satelit; iOS 17', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(97, '97', 'Iphone 15 6GB | 512GB', 'Apple', '2023', '17.999.000', 'Apple A16 Bionic', '1.319.704', '8', 'LPDDR5', '512', 'NVMe', '48', 'OIS', 'Sony', '12', '0', '12', 'OLED', '60', '2.000', 'Ceramic Shield Glass', '3349', '20', '20', 0, 0, 'IP68', 'eSIM; USB-C dengan display-out; HDR10, Dolby Vision; stereo speaker; UWB 2; SOS via satelit; iOS 17', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(98, '98', 'Iphone 16 Pro 8GB | 128GB', 'Apple', '2024', '18.499.000', 'Apple A18 Pro', '1.636.086', '8', 'LPDDR5x', '128', 'NVMe', '48', 'OIS', 'Sony', '12', '48', '12', 'OLED', '120', '2.000', 'Ceramic Shield Glass', '3582', '20', '30', 0, 0, 'IP68', 'eSIM, Ultra Wideband 2, LiDAR Scanner, DisplayPort via USB-C, Apple MGIE AI, Emergency SOS via satelit', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(99, '99', 'Iphone 16 Pro 8GB | 256GB', 'Apple', '2024', '18.499.000', 'Apple A18 Pro', '1.636.086', '8', 'LPDDR5x', '256', 'NVMe', '48', 'OIS', 'Sony', '12', '48', '12', 'OLED', '120', '2.000', 'Ceramic Shield Glass', '3582', '20', '30', 0, 0, 'IP68', 'eSIM, Ultra Wideband 2, LiDAR Scanner, DisplayPort via USB-C, Apple MGIE AI, Emergency SOS via satelit', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(100, '100', 'Iphone 16 Pro 8GB | 512GB', 'Apple', '2024', '18.499.000', 'Apple A18 Pro', '1.636.086', '8', 'LPDDR5x', '512', 'NVMe', '48', 'OIS', 'Sony', '12', '48', '12', 'OLED', '120', '2.000', 'Ceramic Shield Glass', '3582', '20', '30', 0, 0, 'IP68', 'eSIM, Ultra Wideband 2, LiDAR Scanner, DisplayPort via USB-C, Apple MGIE AI, Emergency SOS via satelit', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(101, '101', 'Iphone 16 Pro 8GB | 1TB', 'Apple', '2024', '18.499.000', 'Apple A18 Pro', '1.636.086', '8', 'LPDDR5x', '1000', 'NVMe', '48', 'OIS', 'Sony', '12', '48', '12', 'OLED', '120', '2.000', 'Ceramic Shield Glass', '3582', '20', '30', 0, 0, 'IP68', 'eSIM, Ultra Wideband 2, LiDAR Scanner, DisplayPort via USB-C, Apple MGIE AI, Emergency SOS via satelit', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(102, '102', 'OPPO FIND X8 PRO', 'OPPO', '2024', '19.999.000', 'MediaTek Dimensity 9400', '2.700.000', '16', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', '-', '50', '50', '32', 'AMOLED', '120', '1.600', 'Corning Gorilla Glass Victus 2', '5910', '80', '50', 0, 0, 'IP69', 'Komunikasi satelit (varian memori 16 GB/1 TB), speaker stereo', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(103, '103', 'vivo X200 ULTRA', 'vivo', '2025', '-', 'Qualcomm Snapdragon 8 Elite', '2.885.215', '12', 'Tidak disebutkan', '256', 'UFS 4.1', '50', 'OIS', 'Sony LYT-818', '50', '200', '50', 'LTPO AMOLED', '120', '4.500', 'Armor glass', '6000', '90', '40', 0, 0, 'IP69', 'Audio resolusi tinggi 24-bit/192 kHz; Speaker stereo; Layanan komunikasi darurat via satelit', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(104, '104', 'SAMSUNG S25 ULTRA 12GB | 256GB', 'Samsung', '2025', '22.499.000', 'Qualcomm Snapdragon 8 Elite', '2.200.000', '12', 'LPDDR5X', '256', 'UFS 4.0', '200', 'OIS', 'Samsung ISOCELL', '50', '10', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Armor 2', '5000', '45', '15', 0, 0, 'IP68', 'Stylus S Pen; Samsung Knox; Samsung DeX; UWB; Circle to Search', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(105, '105', 'SAMSUNG S25 ULTRA 12GB | 512GB', 'Samsung', '2025', '24.499.000', 'Qualcomm Snapdragon 8 Elite', '2.200.000', '12', 'LPDDR5X', '512', 'UFS 4.0', '200', 'OIS', 'Samsung ISOCELL', '50', '10', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Armor 2', '5000', '45', '15', 0, 0, 'IP68', 'Stylus S Pen; Samsung Knox; Samsung DeX; UWB; Circle to Search', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(106, '106', 'SAMSUNG S25 ULTRA 12GB | 1TB', 'Samsung', '2025', '28.299.000', 'Qualcomm Snapdragon 8 Elite', '2.200.000', '12', 'LPDDR5X', '1000', 'UFS 4.0', '200', 'OIS', 'Samsung ISOCELL', '50', '10', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Armor 2', '5000', '45', '15', 0, 0, 'IP68', 'Stylus S Pen; Samsung Knox; Samsung DeX; UWB; Circle to Search', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(107, '107', 'Iphone 16 Pro Max 8GB | 256GB', 'Apple', '2024', '22.499.000', 'Apple A18 Pro', '1.653.121', '8', 'LPDDR5x', '256', 'NVMe', '48', 'OIS', 'sony', '12', '48', '12', 'OLED', '120', '-', 'Ceramic Shield Glass', '4685', '45', '25', 0, 0, 'IP68', 'Speaker stereo; Ultra Wideband 2 (UWB2); LiDAR Scanner; Emergency SOS via satelit; Apple MGIE AI; Apple Pay; USB-C DisplayPort; Always-On Display', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(108, '108', 'Iphone 16 Pro Max 8GB | 512GB', 'Apple', '2024', '27.999.000', 'Apple A18 Pro', '1.653.121', '8', 'LPDDR5x', '512', 'NVMe', '48', 'OIS', 'sony', '12', '48', '12', 'OLED', '120', '-', 'Ceramic Shield Glass', '4685', '45', '25', 0, 0, 'IP68', 'Speaker stereo; Ultra Wideband 2 (UWB2); LiDAR Scanner; Emergency SOS via satelit; Apple MGIE AI; Apple Pay; USB-C DisplayPort; Always-On Display', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(109, '109', 'Iphone 16 Pro Max 8GB | 1TB', 'Apple', '2024', '32.999.000', 'Apple A18 Pro', '1.653.121', '8', 'LPDDR5x', '1000', 'NVMe', '48', 'OIS', 'sony', '12', '48', '12', 'OLED', '120', '-', 'Ceramic Shield Glass', '4685', '45', '25', 0, 0, 'IP68', 'Speaker stereo; Ultra Wideband 2 (UWB2); LiDAR Scanner; Emergency SOS via satelit; Apple MGIE AI; Apple Pay; USB-C DisplayPort; Always-On Display', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(110, '110', 'redmagic 10 pro+ 5g', 'Nubia', '2024', 'Belum tersedia resmi di Indonesia', 'Qualcomm Snapdragon 8 Elite (Oryon V2 Phoenix L/M)', '3.102.960', '24', 'LPDDR5X Ultra (9 600 MT/s)', '1000', 'UFS 4.0 Pro', '50', 'OIS', 'OmniVision OV50D40', '50', '2', '16', 'AMOLED', '144', '2.000', 'Corning Gorilla Glass Victus 2', '7050', '120', '0', 0, 0, 'IP68', '- Kipas internal (20 000 rpm)', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(111, '111', 'Tecno Pova 7 Ultra', 'Tecno', '2025', '4.891.555', 'MediaTek Dimensity 8350 Ultimate', '1.300.000', '12', 'LPDDR5X', '256', 'UFS 4.0', '108', 'PDAF', '-', '8', '0', '12', 'AMOLED', '144', '4.500', '-', '6000', '70', '30', 0, 0, 'IP64', 'LED Status Light, Dynamic Port 2.0, HiOS 15, Tecno AI (Ella, DeepSeek-R1, Call Summary, Call Translation, Smart Touch), Dolby Atmos, stereo speaker, in-display fingerprint, reverse charging', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(112, '112', 'Tecno Camon 40 Pro 5G', 'Tecno', '2025', '4.178.000', 'MediaTek Dimensity 7300', '679.446', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Sony LYT-700C', '8', '0', '50', 'AMOLED', '144', '1.600', 'Corning Gorilla Glass 7i', '5200', '45', '0', 0, 0, 'IP69', 'Audio resolusi tinggi; Speaker stereo', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(113, '113', 'Tecno POVA 7 5G 8/128 GB', 'Tecno', '2025', '2.924.900', 'MediaTek Dimensity 7300 Ultimate', '730.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '12', 'IPS', '144', '900', '-', '6000', '45', '0', 0, 0, 'IP64', 'Dual SIM, side-mounted fingerprint, Dolby Atmos stereo speaker, FM radio, mini-LED back panel, Dynamic Port 2.0 notifications', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(114, '114', 'Tecno POVA 7 5G 8/256 GB', 'Tecno', '2025', '3.149.000', 'MediaTek Dimensity 7300 Ultimate', '740.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '12', 'IPS', '144', '900', '-', '6000', '45', '0', 0, 0, 'IP64', 'Dual SIM, side-mounted fingerprint, Dolby Atmos stereo speaker, FM radio, mini-LED back panel, Dynamic Port 2.0 notifications', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(115, '115', 'Tecno POVA Curve 5G', 'Tecno', '2025', '3.449.000', 'MediaTek Dimensity 7300 Ultimate (Carisinyal, NanoReview.net)', '684.142', '8', 'LPDDR4X', '256', 'UFS 2.2', '64', 'PDAF', 'Sony IMX682', '2', '0', '12', 'AMOLED', '144', '1.300', 'Corning Gorilla Glass 5', '5500', '45', '0', 0, 0, 'IP64', 'IR blaster, stereo speaker, high‑res audio, in‑display fingerprint, Android 15/HIOS 15, update ke Android 16 satu kali (Carisinyal, Croma)', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(116, '116', 'Tecno Spark Go 2', 'Tecno', '2025', '949.000', 'UNISOC Tiger T7250', '301.646', '3', 'LPDDR4', '64', 'eMMC 5.1', '13', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '700', '-', '5000', '18', '0', 0, 0, 'IP64', '- Speaker stereo - DTS Sound - FM radio - Sensor sidik jari pada tombol power - Dynamic Port (notifikasi ala Dynamic Island) - Tahan jatuh 1,5 m', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(117, '117', 'Infinix Note 50', 'Infinix', '2025', '2.699.000', 'MediaTek Helio G100', '420.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Sony IMX896', '2', '0', '13', 'AMOLED', '144', '1.000', 'Corning Gorilla Glass 5', '5200', '45', '30', 0, 0, 'IP64', '- Speaker stereo disetel oleh JBL- Infinix AI- Infrared- OS upgrade 2x, security patch 3 tahun', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(118, '118', 'Infinix Note 50X 5G', 'Infinix', '2025', '2.399.000', 'MediaTek Dimensity 7300 Ultimate (4nm)', '730.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '472', '-', '5200', '45', '0', 0, 0, 'IP64', 'Sertifikasi MIL-STD-810H - Speaker stereo JBL - Radio FM - Infinix AI - Fingerprint di tombol power', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(119, '119', 'Infinix Smart 10', 'Infinix', '2025', '1.199.000', 'Unisoc T7250', '300.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '8', 'PDAF', '-', '2', '0', '8', 'IPS', '120', '700', '-', '5000', '15', '0', 0, 0, 'IP64', 'Dynamic Bar, Always-on Display, Radio FM, microSD hingga 2 TB, Folax AI', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(120, '120', 'Infinix Smart 10 Plus', 'Infinix', '2025', '1.499.000', 'Unisoc T7250', '300.000', '8', 'LPDDR4X', '128', 'eMMC 5.1', '8', 'PDAF', '-', '2', '0', '8', 'IPS', '120', '700', '-', '6000', '18', '0', 0, 0, 'IP64', 'Always-on Display; Dynamic Bar; Dual-LED flash; panorama; video hingga 1440p@30fps; LED front flash; infrared port; FM radio; microSD hingga 2 TB; side-mounted fingerprint sensor', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(121, '121', 'Infinix Hot 60i', 'Infinix', '2025', '1.749.000', 'MediaTek Helio G81 Ultimate', '310.000', '8', 'LPDDR4x', '256', 'eMMC 5.1', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '700', '-', '5160', '45', '0', 0, 0, 'IP64', 'Fingerprint (power button), akselerometer, proksimitas, cahaya, kompas, gyro, speaker stereo, radio FM, dukungan microSD hingga 2 TB', '2026-01-18 05:37:41', '2026-01-18 05:37:41');
INSERT INTO `hps` (`id`, `no`, `nama`, `merek`, `tahun_rilis`, `harga`, `chipset`, `skor_antutu`, `kapasitas_ram`, `jenis_ram`, `kapasitas_storage`, `jenis_storage`, `camera_utama`, `stabilizer_kamera`, `teknologi_kamera`, `camera_tambahan_1`, `camera_tambahan_2`, `camera_depan`, `teknologi_layar`, `refresh_rate`, `tingkat_kecerahan`, `pelindung_layar`, `kapasitas_baterai`, `charger_kabel`, `charger_wireless`, `bypass_charging`, `nfc`, `ingress_protection`, `fitur_tambahan`, `created_at`, `updated_at`) VALUES
(122, '122', 'Infinix Hot 60 Pro', 'Infinix', '2.025', '2.199.000', 'MediaTek Helio G200', '520.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '0', '0', '13', 'AMOLED', '120', '1.000', 'Corning Gorilla Glass 7i', '5160', '45', '0', 0, 0, 'IP64', 'Speaker stereo (JBL); Radio FM; One-Tap AI button; Upgrade OS 2× & security patch 3 tahun', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(123, '123', 'Infinix Note 50 Pro', 'Infinix', '2.025', '3.199.000', 'MediaTek Helio G100', '420.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '8', '0', '32', 'AMOLED', '144', '1.000', '-', '5200', '90', '30', 0, 0, 'IP64', 'Speaker stereo by JBL; Radio FM; Infinix AI; reverse charging; OS upgrade 2× & security patch 3 tahun', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(124, '124', 'Samsung Galaxy S25', 'Samsung', '2025', '14.699.000', 'Qualcomm Snapdragon 8 Elite', '2.017.805', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Samsung ISOCELL GN3', '12', '10', '12', 'AMOLED', '120', '2.600', 'Corning Gorilla Glass Victus 2', '4000', '25', '15', 0, 0, 'IP68', '• Samsung DeX & Wireless DeX• Bixby & Samsung Pay• Stereo speakers tuned AKG & High-Res audio 32-bit/384 kHz• Android 15 & One UI 7 (7-tahun update OS/security)• eSIM support, fingerprint ultrasonik layar dalam', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(125, '125', 'Samsung Galaxy S25+ 12GB | 256GB', 'Samsung', '2025', '17.599.000', 'Qualcomm Snapdragon 8 Elite', '2.076.776', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Samsung ISOCELL GN3', '12', '10', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Glass Victus 2', '4900', '45', '15', 0, 0, 'IP68', 'Galaxy AI (Now Brief, AI Agents), Samsung DeX & Wireless DeX, Bixby, Samsung Pay, Ultra-Wideband (UWB), speaker stereo AKG, Hi-Res audio, 7 tahun OS update', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(126, '126', 'Samsung Galaxy S25+ 12GB | 512GB', 'Samsung', '2025', '17.599.000', 'Qualcomm Snapdragon 8 Elite', '2.076.776', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Samsung ISOCELL GN3', '12', '10', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Glass Victus 2', '4900', '45', '15', 0, 0, 'IP68', 'Galaxy AI (Now Brief, AI Agents), Samsung DeX & Wireless DeX, Bixby, Samsung Pay, Ultra-Wideband (UWB), speaker stereo AKG, Hi-Res audio, 7 tahun OS update', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(127, '127', 'Samsung Galaxy S25 Ultra 12 / 256 GB', 'Samsung', '2025', '22.499.000', 'Qualcomm Snapdragon 8 Elite', '2.100.000', '12', 'LPDDR5X', '256', 'UFS 4.0', '200', 'OIS', 'ISOCELL HP2', '50', '10', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Armor 2', '5000', '45', '15', 0, 0, 'IP68', 'Speaker stereo AKG, dukungan S Pen, Samsung Knox & Knox Vault, Samsung DeX, UWB, jaminan pembaruan OS 7 x dan security patch 7 tahun, Circle to Search, HDR10+ & Always-on Display', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(128, '128', 'Samsung Galaxy S25 Ultra 12 / 512 GB', 'Samsung', '2025', '24.499.000', 'Qualcomm Snapdragon 8 Elite', '2.449.900', '12', 'LPDDR5X', '512', 'UFS 4.0', '200', 'OIS', 'ISOCELL HP2', '50', '10', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Armor 2', '5000', '45', '15', 0, 0, 'IP68', 'Speaker stereo AKG, dukungan S Pen, Samsung Knox & Knox Vault, Samsung DeX, UWB, jaminan pembaruan OS 7 x dan security patch 7 tahun, Circle to Search, HDR10+ & Always-on Display', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(129, '129', 'Samsung Galaxy S25 Ultra 12 / 1TB', 'Samsung', '2025', '28.299.000', 'Qualcomm Snapdragon 8 Elite', '2.829.900', '12', 'LPDDR5X', '1000', 'UFS 4.0', '200', 'OIS', 'ISOCELL HP2', '50', '10', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Armor 2', '5000', '45', '15', 0, 0, 'IP68', 'Speaker stereo AKG, dukungan S Pen, Samsung Knox & Knox Vault, Samsung DeX, UWB, jaminan pembaruan OS 7 x dan security patch 7 tahun, Circle to Search, HDR10+ & Always-on Display', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(130, '130', 'Samsung Galaxy A56 5G 8GB | 128GB', 'Samsung', '2025', '6.199.000', 'Exynos 1580', '881.871', '8', 'LPDDR5', '128', 'UFS 3.1', '50', 'OIS', '-', '12', '5', '12', 'Super AMOLED', '120', '1.200', 'Corning Gorilla Glass Victus+', '5000', '45', '0', 0, 0, 'IP67', 'eSIM; Android 15 dengan One UI 7; upgrade OS 6x & security updates 6 tahun; speaker stereo; Samsung Knox Vault; Circle to search; Object Eraser', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(131, '131', 'Samsung Galaxy A56 5G 8GB | 256GB', 'Samsung', '2025', '6.699.000', 'Exynos 1580', '881.871', '8', 'LPDDR5', '256', 'UFS 3.1', '50', 'OIS', '-', '12', '5', '12', 'Super AMOLED', '120', '1.200', 'Corning Gorilla Glass Victus+', '5000', '45', '0', 0, 0, 'IP67', 'eSIM; Android 15 dengan One UI 7; upgrade OS 6x & security updates 6 tahun; speaker stereo; Samsung Knox Vault; Circle to search; Object Eraser', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(132, '132', 'Samsung Galaxy A56 5G 12GB | 256GB', 'Samsung', '2025', '7.199.000', 'Exynos 1580', '881.871', '12', 'LPDDR5', '256', 'UFS 3.1', '50', 'OIS', '-', '12', '5', '12', 'Super AMOLED', '120', '1.200', 'Corning Gorilla Glass Victus+', '5000', '45', '0', 0, 0, 'IP67', 'eSIM; Android 15 dengan One UI 7; upgrade OS 6x & security updates 6 tahun; speaker stereo; Samsung Knox Vault; Circle to search; Object Eraser', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(133, '133', 'Samsung Galaxy A36 5G 8GB | 128GB', 'Samsung', '2025', '5.199.000', 'Qualcomm Snapdragon 6 Gen 3', '631.052', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'OIS', 'samsung ISOCELL GM6 (S5KGM6)', '8', '5', '12', 'Super AMOLED', '120', '1.900', 'Gorilla Glass Victus+', '5000', '45', '0', 0, 0, 'IP67', 'One UI 7; Galaxy AI; Samsung Knox Vault; eSIM support', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(134, '134', 'Samsung Galaxy A36 5G 8GB | 256GB', 'Samsung', '2025', '5.699.000', 'Qualcomm Snapdragon 6 Gen 3', '631.052', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'samsung ISOCELL GM6 (S5KGM6)', '8', '5', '12', 'Super AMOLED', '120', '1.900', 'Gorilla Glass Victus+', '5000', '45', '0', 0, 0, 'IP67', 'One UI 7; Galaxy AI; Samsung Knox Vault; eSIM support', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(135, '135', 'Samsung Galaxy A36 5G 12GB | 256GB', 'Samsung', '2025', '6.199.000', 'Qualcomm Snapdragon 6 Gen 3', '631.052', '12', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'samsung ISOCELL GM6 (S5KGM6)', '8', '5', '12', 'Super AMOLED', '120', '1.900', 'Gorilla Glass Victus+', '5000', '45', '0', 0, 0, 'IP67', 'One UI 7; Galaxy AI; Samsung Knox Vault; eSIM support', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(136, '136', 'Samsung Galaxy A06 5G', 'Samsung', '2025', '2.199.000', 'MediaTek Dimensity 6300', '400.000', '6', 'LPDDR4x', '128', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '8', 'IPS', '90', '800', '-', '5000', '25', '0', 0, 0, 'IP54', 'Side-mounted fingerprint; microSD up to 1.5 TB; OS upgrade to Android 19 & security patches until 2030; Samsung Knox Vault; 3.5 mm jack; accelerometer, proximity, light, compass, gyroscope', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(137, '137', 'Samsung Galaxy A26 5G', 'Samsung', '2025', '4.399.000', 'Exynos 1380', '570.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Samsung ISOCELL JN1', '8', '2', '13', 'Super AMOLED', '120', '1.000', 'Corning Gorilla Glass Victus+', '5000', '25', '0', 0, 0, 'IP67', 'Always-on display; rasio layar ke bodi 86,7%; Circle to Search; Object Eraser; upgrade OS 6×; update keamanan 6 tahun', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(138, '138', 'Samsung Galaxy S25 Edge 12GB | 256GB', 'Samsung', '2025', '19.499.000', 'Qualcomm Snapdragon 8 Elite', '2.600.000', '12', 'LPDDR5X', '256', 'UFS 4.0', '200', 'OIS', 'ISOCELL HP2', '12', '0', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Glass Ceramic 2', '3900', '25', '15', 0, 0, 'IP68', 'eSIM, Ultra-Wideband (UWB), Samsung DeX & Wireless DeX, Bixby, Samsung Pay, speaker stereo, Hi-Res Audio 32-bit/384 kHz, AI features, jaminan update OS 7 tahun', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(139, '139', 'Samsung Galaxy S25 Edge 12GB | 512GB', 'Samsung', '2025', '21.499.000', 'Qualcomm Snapdragon 8 Elite', '2.600.000', '12', 'LPDDR5X', '512', 'UFS 4.0', '200', 'OIS', 'ISOCELL HP2', '12', '0', '12', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Glass Ceramic 2', '3900', '25', '15', 0, 0, 'IP68', 'eSIM, Ultra-Wideband (UWB), Samsung DeX & Wireless DeX, Bixby, Samsung Pay, speaker stereo, Hi-Res Audio 32-bit/384 kHz, AI features, jaminan update OS 7 tahun', '2026-01-18 05:37:41', '2026-01-18 05:37:41'),
(140, '140', 'Samsung Galaxy Z Fold7 5G 12GB | 256GB', 'Samsung', '2025', '28.499.000', 'Qualcomm Snapdragon 8 Elite', '1.900.927', '12', 'LPDDR5X', '256', 'UFS 4.0', '200', 'OIS', 'Samsung ISOCELL GN3', '10', '12', '10', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Glass Ceramic 2', '4400', '25', '15', 0, 0, 'IP48', 'USB display out; Samsung DeX; S Pen support; Stereo speaker by AKG; UWB; Bixby; Samsung Pay', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(141, '141', 'Samsung Galaxy Z Fold7 5G 12GB | 512GB', 'Samsung', '2025', '31.499.000', 'Qualcomm Snapdragon 8 Elite', '1.900.927', '12', 'LPDDR5X', '512', 'UFS 4.0', '200', 'OIS', 'Samsung ISOCELL GN3', '10', '12', '10', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Glass Ceramic 2', '4400', '25', '15', 0, 0, 'IP48', 'USB display out; Samsung DeX; S Pen support; Stereo speaker by AKG; UWB; Bixby; Samsung Pay', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(142, '142', 'Samsung Galaxy Z Fold7 5G 16GB | 1TB', 'Samsung', '2025', '34.999.000', 'Qualcomm Snapdragon 8 Elite', '1.900.927', '16', 'LPDDR5X', '1000', 'UFS 4.0', '200', 'OIS', 'Samsung ISOCELL GN3', '10', '12', '10', 'LTPO AMOLED', '120', '2.600', 'Corning Gorilla Glass Ceramic 2', '4400', '25', '15', 0, 0, 'IP48', 'USB display out; Samsung DeX; S Pen support; Stereo speaker by AKG; UWB; Bixby; Samsung Pay', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(143, '143', 'Samsung Galaxy Z Flip7 12GB | 256GB', 'Samsung', '2025', '17.999.000', 'Exynos 2500', '2.154.825', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Samsung ISOCELL GN3', '12', '0', '10', 'AMOLED', '120', '2.600', 'Corning Gorilla Glass Victus 2', '4300', '25', '15', 0, 0, 'IP48', 'Desain ringkas ala flip; layar kover 4,1″ fungsi luas; perekaman 4K 60 fps belakang/depan; USB display out via USB 3.2; Android 16 One UI 8; speaker stereo; audio 32-bit/384 kHz; Circle to Search; update OS 6×; security patch 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(144, '144', 'Samsung Galaxy Z Flip7 12GB | 512GB', 'Samsung', '2025', '19.999.000', 'Exynos 2500', '2.154.825', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Samsung ISOCELL GN3', '12', '0', '10', 'AMOLED', '120', '2.600', 'Corning Gorilla Glass Victus 2', '4300', '25', '15', 0, 0, 'IP48', 'Desain ringkas ala flip; layar kover 4,1″ fungsi luas; perekaman 4K 60 fps belakang/depan; USB display out via USB 3.2; Android 16 One UI 8; speaker stereo; audio 32-bit/384 kHz; Circle to Search; update OS 6×; security patch 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(145, '145', 'ASUS ROG Phone 9 Pro Edition', 'ASUS', '2024', '21.999.000', 'Snapdragon 8 Elite', '3.118.803', '24', 'LPDDR5X', '1000', 'UFS 4.0', '50', 'OIS', 'Sony LYT-700', '13', '32', '32', 'LTPO AMOLED', '185', '2.500', 'Corning Gorilla Glass Victus 2', '5800', '65', '15', 0, 0, 'IP69', 'Mini-LED 648 dots AniMe Vision, Air Trigger, dual USB-C, audio jack 3.5mm, speaker stereo Hi-Res, 3 mikrofon dengan noise reduction, konektor POGO pin, WiFi 7, eSIM, reverse wireless charging 10W', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(146, '146', 'ASUS ROG Phone 9 Pro', 'ASUS', '2025', '17.000.000', 'Snapdragon 8 Elite', '3.118.803', '16', 'LPDDR5X', '512', 'UFS 4.0', '60', 'OIS', 'Sony LYT-700', '13', '32', '32', 'LTPO AMOLED', '185', '2.500', 'Corning Gorilla Glass Victus 2', '5800', '65', '15', 0, 0, 'IP69', 'Lampu RGB AniMe Vision 648 titik, Air Trigger, speaker stereo Hi-Res, 3.5mm jack, WiFi 7, dual USB-C, reverse wireless charging 10W, konektor POGO pin, sensor lengka', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(147, '147', 'ASUS ROG Phone 9 FE 12/256', 'ASUS', '2025', '9.499.000', 'Snapdragon 8 Gen 3', '2.200.000', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Sony IMX890', '13', '5', '32', 'LTPO AMOLED', '185', '2.500', 'Corning Gorilla Glass Victus 2', '5500', '65', '15', 0, 0, 'IP69', 'Lampu RGB AniMe Vision (341 mini-LED), AirTrigger (tombol ultrasonik), speaker stereo Hi-Res, jack audio 3.5mm, WiFi 7, dual port USB-C, reverse wireless charging 10W', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(148, '148', 'ASUS ROG Phone 9 FE 12/512', 'ASUS', '2025', '11.500.000', 'Snapdragon 8 Gen 3', '2.200.000', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Sony IMX890', '13', '5', '32', 'LTPO AMOLED', '185', '2.500', 'Corning Gorilla Glass Victus 2', '5500', '65', '15', 0, 0, 'IP69', 'Lampu RGB AniMe Vision (341 mini-LED), AirTrigger (tombol ultrasonik), speaker stereo Hi-Res, jack audio 3.5mm, WiFi 7, dual port USB-C, reverse wireless charging 10W', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(149, '149', 'ASUS Zenfone 11 Ultra 12/256', 'ASUS', '2024', '7.499.000', 'Snapdragon 8 Gen 3', '2.100.000', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Sony IMX890', '13', '32', '32', 'LTPO AMOLED', '144', '2.500', 'Corning Gorilla Glass Victus 2', '5500', '65', '15', 0, 0, 'IP68', 'Audio jack 3.5mm, speaker stereo, dukungan audio resolusi tinggi, pengisian balik 10W, material ramah lingkungan (frame aluminium daur ulang, kaca daur ulang)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(150, '150', 'ASUS Zenfone 11 Ultra 12/512', 'ASUS', '2024', '9.499.000', 'Snapdragon 8 Gen 3', '2.100.000', '16', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Sony IMX890', '13', '32', '32', 'LTPO AMOLED', '144', '2.500', 'Corning Gorilla Glass Victus 2', '5500', '65', '15', 0, 0, 'IP68', 'Audio jack 3.5mm, speaker stereo, dukungan audio resolusi tinggi, pengisian balik 10W, material ramah lingkungan (frame aluminium daur ulang, kaca daur ulang)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(151, '151', 'ASUS ROG Phone 8 Pro Edition', 'ASUS', '2024', '28.999.000', 'Snapdragon 8 Gen 3', '2.113.236', '24', 'LPDDR5X', '1000', 'UFS 4.0', '50', 'OIS', 'Sony IMX890', '13', '32', '32', 'LTPO AMOLED', '165', '1600 nit (typical), 2500 nit (peak)', 'Corning Gorilla Glass Victus 2', '5500', '65', '15', 0, 0, 'IP68', 'Lampu RGB AniMe Vision (341 Mini-LED), AirTrigger (zona sensitif tekanan), speaker stereo Hi-Res, 3.5mm jack audio, WiFi 7, USB-C ganda, reverse wireless charging 10W, konektor aksesori POGO pin', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(152, '152', 'ASUS ROG Phone 8 Pro', 'ASUS', '2024', '14.999.000', 'Snapdragon 8 Gen 3', '2.113.236', '16', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'Sony IMX890', '13', '32', '32', 'LTPO AMOLED', '165', '2.500', 'Corning Gorilla Glass Victus 2', '5500', '65', '15', 0, 0, 'IP68', 'AniMe Vision (341 Mini-LED di bodi belakang), AirTrigger (zona sensitif tekanan), speaker stereo Hi-Res, jack audio 3.5mm, mikrofon ganda dengan noise reduction, konektor aksesori POGO pin', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(153, '153', 'ASUS ROG Phone 8', 'ASUS', '2024', '10.999.000', 'Snapdragon 8 Gen 3', '2.200.533', '12', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Sony IMX890', '13', '32', '32', 'LTPO AMOLED', '165', '1600 nit (typical), 2500 nit (peak)', 'Corning Gorilla Glass Victus 2', '5500', '65', '15', 0, 0, 'IP68', 'Logo iluminasi Aura RGB, AirTrigger (tombol bahu sensitif tekanan), speaker stereo ganda, audio Hi-Res 32-bit/384kHz, mikrofon ganda dengan noise reduction, konektor aksesori POGO pin, WiFi 7, 5G, jack audio 3.5mm', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(154, '154', 'Google Pixel 9 Pro ', 'Google', '2024', '-', 'Google Tensor G4', '1.050.000', '16', 'LPDDR5', '1000', 'UFS', '50', 'OIS', 'Dual Pixel PDAF, multi‑zone Laser AF, Ultra‑HDR, Pixel Shift, 10‑bit HDR video', '48', '48', '42', 'LTPO AMOLED', '120', '3.000', 'Corning Gorilla Glass Victus 2', '4700', '27', '21', 0, 0, 'ip68', 'Stereo speakers, Satellite SOS, Ultra Wideband (UWB), Always‑on display, 7 tahun update OS', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(155, '155', 'vivo Y400 8/128', 'vivo', '2025', '3.199.000', 'Qualcomm Snapdragon 685', '300.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'PDAF', 'Sony IMX882', '2', '0', '8', 'AMOLED', '120', '1.800', '-', '6000', '44', '0', 0, 0, 'IP69', 'Wet Touch, Water Ejection, Dynamic Light Notification, Dual Speaker dengan 400% Audio Booster, desain tipis <8 mm, OS Android 15 + Funtouch OS 15, jaminan update OS 2x & patch keamanan 3 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(156, '156', 'vivo Y400 8/256', 'vivo', '2025', '3.499.000', 'Qualcomm Snapdragon 685', '300.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', 'Sony IMX882', '2', '0', '8', 'AMOLED', '120', '1.800', '-', '6000', '44', '0', 0, 0, 'IP69', 'Wet Touch, Water Ejection, Dynamic Light Notification, Dual Speaker dengan 400% Audio Booster, desain tipis <8 mm, OS Android 15 + Funtouch OS 15, jaminan update OS 2x & patch keamanan 3 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(157, '157', 'vivo Y04s', 'vivo', '2025', '1.399.000', 'UNISOC T7225', '250.000', '4', 'LPDDR4X', '64', 'eMMC 5.1', '13', 'PDAF', '-', '0', '0', '5', 'ips', '90', '570', '-', '6000', '15', '0', 0, 0, 'ip64', 'Sertifikasi MIL-STD-810H & SGS five-star drop resistance, Radio FM, slot microSD hingga 2 TB, TÜV Low Blue Light, jack audio 3.5mm', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(158, '158', 'vivo Y19sGT 5G 6/128', 'vivo', '2025', '1.999.000', 'MediaTek Dimensity 6300 5G (6nm)', '434.000', '6', 'LPDDR4X', '128', 'eMMC 5.1', '50', 'PDAF', '-', '2', '0', '5', 'IPS', '90', '1.000', '-', '5500', '15', '0', 0, 0, 'IP64', 'Sertifikasi MIL-STD 810H & SGS 5-Star Drop Resistance, speaker stereo, dukungan microSD hingga 1TB, jack audio 3.5mm', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(159, '159', 'vivo Y19sGT 5G 8/128', 'vivo', '2025', '2.199.000', 'MediaTek Dimensity 6300 5G (6nm)', '434.000', '8', 'LPDDR4X', '128', 'eMMC 5.1', '50', 'PDAF', '-', '2', '0', '5', 'IPS', '90', '1.000', '-', '5500', '15', '0', 0, 0, 'IP64', 'Sertifikasi MIL-STD 810H & SGS 5-Star Drop Resistance, speaker stereo, dukungan microSD hingga 1TB, jack audio 3.5mm', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(160, '160', 'vivo Y19sGT 5G 8/256', 'vivo', '2025', '2.399.000', 'MediaTek Dimensity 6300 5G (6nm)', '434.000', '8', 'LPDDR4X', '256', 'eMMC 5.1', '50', 'PDAF', '-', '2', '0', '5', 'IPS', '90', '1.000', '-', '5500', '15', '0', 0, 0, 'IP64', 'Sertifikasi MIL-STD 810H & SGS 5-Star Drop Resistance, speaker stereo, dukungan microSD hingga 1TB, jack audio 3.5mm', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(161, '161', 'vivo Y19s Pro 4/64', 'vivo', '2025', '1.599.000', 'UNISOC Tiger T612', '200.000', '4', 'LPDDR4X', '64', 'eMMC 5.1', '50', 'PDFA', '-', '0', '0', '5', 'IPS', '90', '1.000', '-', '6000', '44', '0', 0, 0, 'IP64', 'Sertifikasi MIL-STD 810H & SGS 5-Star Drop Resistance, Rock-Solid body, speaker stereo, dukungan microSD hingga 1 TB', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(162, '162', 'vivo Y19s Pro 6/128', 'vivo', '2025', '1.799.000', 'UNISOC Tiger T612', '200.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '50', 'PDFA', '-', '0', '0', '5', 'IPS', '90', '1.000', '-', '6000', '44', '0', 0, 0, 'IP64', 'Sertifikasi MIL-STD 810H & SGS 5-Star Drop Resistance, Rock-Solid body, speaker stereo, dukungan microSD hingga 1 TB', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(163, '163', 'vivo Y19s Pro 8/256', 'vivo', '2025', '1.999.000', 'UNISOC Tiger T612', '200.000', '6', 'LPDDR4X', '256', 'eMMC 5.1', '50', 'PDFA', '-', '0', '0', '5', 'IPS', '90', '1.000', '-', '6000', '44', '0', 0, 0, 'IP64', 'Sertifikasi MIL-STD 810H & SGS 5-Star Drop Resistance, Rock-Solid body, speaker stereo, dukungan microSD hingga 1 TB', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(164, '164', 'Motorola Moto G45 5G 8/256', 'Motorola', '2024', '2.399.000', 'Qualcomm Snapdragon 6s Gen 3', '760.000', '8', 'LPDDR4x', '256', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '16', 'ips', '120', '550', 'Corning Gorilla Glass', '5000', '18', '0', 0, 0, 'IP52', 'Speaker stereo, jack audio 3.5mm, dukungan microSD hingga 1TB, Radio FM, Moto Gestures, Smart Connect, Moto Secure 3.0', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(165, '165', 'Motorola Moto G45 5G 8/128', 'Motorola', '2024', '2.250.000', 'Qualcomm Snapdragon 6s Gen 3', '760.000', '8', 'LPDDR4x', '128', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '16', 'ips', '120', '550', 'Corning Gorilla Glass', '5000', '18', '0', 0, 0, 'IP52', 'Speaker stereo, jack audio 3.5mm, dukungan microSD hingga 1TB, Radio FM, Moto Gestures, Smart Connect, Moto Secure 3.0', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(166, '166', 'Motorola Edge 60 Fusion', 'Motorola', '2025', '5.700.000', 'MediaTek Dimensity 7400', '690.000', '12', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Sony LYTIA 700C', '12', '0', '32', 'AMOLED', '120', '1500 nit (HBM), 4500 nit (puncak)', 'Corning Gorilla Glass 7i', '5500', '68', '0', 0, 0, 'IP69', 'Speaker stereo Dolby Atmos, Smart Connect, bodi vegan leather, tahan benturan, tahan semprotan air bersuhu tinggi', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(167, '167', 'Motorola Moto G86 Power', 'Motorola', '2025', '4.499.000', 'MediaTek Dimensity 7400', '640.000', '8', 'LPDDR4X', '256', 'uMCP', '50', 'ois', 'Sony LYTIA 600', '8', '0', '32', 'OLED', '120', '4.500', 'Corning Gorilla Glass 7i', '6270', '33', '0', 0, 0, 'IP69', 'Speaker stereo Dolby Atmos, Smart Connect, tahan air 1,5 m/30 menit, tahan semprotan air bersuhu tinggi, tahan benturan', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(168, '168', 'Infinix Hot 60 Pro+ 8/128', 'Infinix', '2025', '2.469.000', 'MediaTek Helio G200', '520.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '0', '0', '12', 'AMOLED', '120', '4.500', 'Corning Gorilla Glass 7i', '5160', '45', '0', 0, 0, 'IP65', 'Reverse charging 10W, tahan jatuh 1,5 m, Always-on Display, Touch sampling rate 240 Hz, Radio FM, Infinix AI', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(169, '169', 'Infinix Hot 60 Pro+ 8/256', 'Infinix', '2025', '2.669.000', 'MediaTek Helio G200', '520.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Sony IMX882', '0', '0', '12', 'AMOLED', '120', '4.500', 'Corning Gorilla Glass 7i', '5160', '45', '0', 0, 0, 'IP65', 'Reverse charging 10W, tahan jatuh 1,5 m, Always-on Display, Touch sampling rate 240 Hz, Radio FM, Infinix AI', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(170, '170', 'Redmi 15C 6/128', 'REDMI', '2025', '1.599.000', 'MediaTek Helio G81 Ultra', '256.627', '6', 'LPDDR4X', '128', 'eMMC 5.1.', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '810', 'Corning Gorilla Glass 3', '6000', '33', '0', 0, 0, 'IP64', 'Wet Touch 2.0, Low Blue Light, Flicker Free, Circadian Friendly, DC Dimming, 200% Volume Boost, Android 15 + HyperOS 2, update OS 4 tahun, update keamanan 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(171, '171', 'Redmi 15C 8/256', 'REDMI', '2025', '1.799.000', 'MediaTek Helio G81 Ultra', '256.627', '8', 'LPDDR4X', '256', 'eMMC 5.1.', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '810', 'Corning Gorilla Glass 3', '6000', '33', '0', 0, 0, 'IP64', 'Wet Touch 2.0, Low Blue Light, Flicker Free, Circadian Friendly, DC Dimming, 200% Volume Boost, Android 15 + HyperOS 2, update OS 4 tahun, update keamanan 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(172, '172', 'Honor X9c', 'Honor', '2025', '4.599.000', 'Qualcomm Snapdragon 6 Gen 1', '606.000', '12', 'LPDDR4X', '256', 'UFS 2.2', '108', 'OIS', '-', '5', '0', '16', 'AMOLED', '120', '4.000', '-', '6600', '66', '0', 0, 0, 'IP65', 'Speaker stereo, tahan benturan 2 m (sertifikasi SGS), USB-C 2.0 OTG, tidak ada slot microSD, tidak ada jack audio 3.5mm', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(173, '173', 'Honor 200 Pro', 'Honor', '2024', '8.799.000', 'Qualcomm Snapdragon 8s Gen 3', '1.200.000', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', '-', '50', '12', '50', 'OLED', '120', '4.000', '-', '5200', '100', '66', 0, 0, 'IP65', 'Stereo speaker, upgrade OS 4x, security patch 5 tahun, reverse charging 5W (wired & wireless)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(174, '174', 'Honor Magic V3', 'Honor', '2024', '24.999.000', 'Qualcomm Snapdragon 8 Gen 2', '1.600.000', '12', 'LPDDR5', '512', 'UFS 4.0', '50', 'OIS', '-', '50', '40', '20', 'AMOLED', '120', '4.500', 'King Kong Rhinoceros', '5150', '66', '50', 0, 0, 'IP68', 'Dukungan stylus, DisplayPort 1.2, stereo speaker, Hi-Res Audio, pengisian daya terbalik 5W', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(175, '175', 'Honor 400', 'Honor', '2025', '6.999.000', 'Qualcomm Snapdragon 7 Gen 3', '850.000', '12', 'LPDDR4X', '512', 'UFS 3.1', '200', 'OIS', '-', '12', '0', '50', 'AMOLED', '120', '5.000', '-', '6000', '80', '0', 0, 0, 'IP66', 'Speaker stereo, eSIM, bodi kedap debu & tahan cipratan air, tahan semprotan air', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(176, '176', 'Samsung Galaxy A07 4/64', 'Samsung', '2025', '1.399.000', 'MediaTek Helio G99', '406.000', '4', 'LPDDR4X', '64', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '8', 'PLS LCD', '90', '810', '-', '5000', '25', '0', 0, 0, 'IP54', 'Samsung Knox Vault, EAL 5+ certified, Dolby Atmos, jack audio 3.5mm, slot microSD khusus', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(177, '177', 'Samsung Galaxy A07 4/128', 'Samsung', '2025', '1.649.000', 'MediaTek Helio G99', '406.000', '4', 'LPDDR4X', '128', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '8', 'PLS LCD', '90', '810', '-', '5000', '25', '0', 0, 0, 'IP54', 'Samsung Knox Vault, EAL 5+ certified, Dolby Atmos, jack audio 3.5mm, slot microSD khusus', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(178, '178', 'Samsung Galaxy A07 6/128', 'Samsung', '2025', '1.949.000', 'MediaTek Helio G99', '406.000', '6', 'LPDDR4X', '128', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '8', 'PLS LCD', '90', '810', '-', '5000', '25', '0', 0, 0, 'IP54', 'Samsung Knox Vault, EAL 5+ certified, Dolby Atmos, jack audio 3.5mm, slot microSD khusus', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(179, '179', 'Samsung Galaxy A07 8/128', 'Samsung', '2025', '2.299.000', 'MediaTek Helio G99', '406.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '8', 'PLS LCD', '90', '810', '-', '5000', '25', '0', 0, 0, 'IP54', 'Samsung Knox Vault, EAL 5+ certified, Dolby Atmos, jack audio 3.5mm, slot microSD khusus', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(180, '180', 'vivo V60 8/256', 'vivo', '2025', '6.999.000', 'Qualcomm Snapdragon 7 Gen 4', '1.000.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Zeiss optics', '50', '8', '50', 'AMOLED', '120', '5.000', 'Schott Xensation Alpha Glass', '6500', '90', '0', 0, 0, 'ip69', 'Stereo speaker, reverse charging, Wi-Fi 6E, Bluetooth 5.4, infrared, jaminan update OS 4 kali & keamanan 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(181, '181', 'vivo V60 12/256', 'vivo', '2025', '7.499.000', 'Qualcomm Snapdragon 7 Gen 4', '1.000.000', '12', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', 'Zeiss optics', '50', '8', '50', 'AMOLED', '120', '5.000', 'Schott Xensation Alpha Glass', '6500', '90', '0', 0, 0, 'ip69', 'Stereo speaker, reverse charging, Wi-Fi 6E, Bluetooth 5.4, infrared, jaminan update OS 4 kali & keamanan 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(182, '182', 'vivo V60 12/512', 'vivo', '2025', '8.499.000', 'Qualcomm Snapdragon 7 Gen 4', '1.000.000', '12', 'LPDDR4X', '512', 'UFS 2.2', '50', 'OIS', 'Zeiss optics', '50', '8', '50', 'AMOLED', '120', '5.000', 'Schott Xensation Alpha Glass', '6500', '90', '0', 0, 0, 'ip69', 'Stereo speaker, reverse charging, Wi-Fi 6E, Bluetooth 5.4, infrared, jaminan update OS 4 kali & keamanan 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(183, '183', 'realme C75 8/128', 'realme', '2024', '2.399.000', 'MediaTek Helio G92 Max', '299.947', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '90', '690', 'ArmorShell Glass', '6000', '45', '0', 0, 0, 'IP69', 'Tahan debu & air (hingga 2 m/24 jam), tahan semprotan air bertekanan tinggi, tahan benturan hingga 2 m, Always-on display, pengisian balik (reverse charging)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(184, '184', 'realme C75 8/256', 'realme', '2024', '2.799.000', 'MediaTek Helio G92 Max', '299.947', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '90', '690', 'ArmorShell Glass', '6000', '45', '0', 0, 0, 'IP69', 'Tahan debu & air (hingga 2 m/24 jam), tahan semprotan air bertekanan tinggi, tahan benturan hingga 2 m, Always-on display, pengisian balik (reverse charging)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(185, '185', 'iQOO Z10 Lite 8/128', 'iQOO', '2025', '2.499.000', 'Qualcomm Snapdragon 685', '370.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'PDAF', 'Sony IMX852', '2', '0', '8', 'AMOLED', '120', '1.800', '-', '6000', '44', '0', 0, 0, 'IP69', 'Sertifikasi MIL-STD-810H, tahan banting, Wet Touch, Water Ejection, Dual Speaker stereo dengan 400% Audio Booster, Dynamic Light Notification, area pendinginan >40.000 mm², jaminan update OS 2x & patch keamanan 3 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(186, '186', 'iQOO Z10 Lite 8/256', 'iQOO', '2025', '2.699.000', 'Qualcomm Snapdragon 685', '370.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', 'Sony IMX852', '2', '0', '8', 'AMOLED', '120', '1.800', '-', '6000', '44', '0', 0, 0, 'IP69', 'Sertifikasi MIL-STD-810H, tahan banting, Wet Touch, Water Ejection, Dual Speaker stereo dengan 400% Audio Booster, Dynamic Light Notification, area pendinginan >40.000 mm², jaminan update OS 2x & patch keamanan 3 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(187, '187', 'Tecno Spark 40 Pro', 'Tecno', '2025', '1.979.000', 'MediaTek Helio G100', '440.000', '8', 'LPDDR4X', '128', 'UFS', '50', 'PDAF', '-', '0', '0', '13', 'AMOLED', '144', '4.500', 'Corning Gorilla Glass 7i', '5200', '45', '0', 0, 0, 'IP64', 'Speaker stereo Dolby Atmos, Ella Assistant, FM Radio, tahan jatuh 1,5 m, sertifikasi 5 years lasting fluency, kesehatan baterai terjaga >80% setelah 2000 siklus pengisian, Pro XDR, Wet Touch, Outdoor Booster', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(188, '188', 'Tecno Spark 40 Pro+ 8/128', 'Tecno', '2025', '2.449.000', 'MediaTek Helio G200', '440.000', '8', 'LPDDR4X', '128', 'UFS', '50', 'EIS', ' Samsung S5KJN1SQ03', '0', '0', '13', 'AMOLED', '144', '4.500', 'Corning Gorilla Glass 7i', '5200', '45', '30', 0, 0, 'IP64', 'Speaker stereo Dolby Atmos- Ella Assistant- FM Radio- Reverse charging 10W (kabel) & 5W (wireless)- Sertifikasi 5 years lasting fluency- Tahan jatuh hingga 2 meter', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(189, '189', 'Tecno Spark 40 Pro+ 8/256', 'Tecno', '2025', '2.579.000', 'MediaTek Helio G200', '440.000', '8', 'LPDDR4X', '256', 'UFS', '50', 'EIS', ' Samsung S5KJN1SQ03', '0', '0', '13', 'AMOLED', '144', '4.500', 'Corning Gorilla Glass 7i', '5200', '45', '30', 0, 0, 'IP64', 'Speaker stereo Dolby Atmos- Ella Assistant- FM Radio- Reverse charging 10W (kabel) & 5W (wireless)- Sertifikasi 5 years lasting fluency- Tahan jatuh hingga 2 meter', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(190, '190', 'Samsung Galaxy A17 5G', 'Samsung', '2025', '3.699.000', 'Exynos 1330', '430.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', ' Samsung ISOCELL JN1', '5', '2', '13', 'AMOLED', '90', '800', 'Corning Gorilla Glass Victus', '5000', '25', '0', 0, 0, 'IP54', 'Slot microSD (hybrid), sensor lengkap (fingerprint samping, gyro hardware), jaminan upgrade OS 6 kali & patch keamanan 6 tahun, desain tipis & ringan', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(191, '191', 'vivo X Fold5', 'vivo', '2025', '24.999.000', 'Qualcomm Snapdragon 8 Gen 3', '2.200.000', '16', 'LPDDR5X Ultra', '512', 'UFS 4.1', '50', 'OIS', 'Zeiss optics', '50', '50', '20', 'LTPO AMOLED', '120', '5.500', 'Armor Glass', '6000', '80', '40', 0, 0, 'IP59', 'Stereo speaker, Snapdragon Sound, audio Hi-Res 24-bit/192kHz, infrared blaster, USB 3.2 dengan DisplayPort, Android 15 + Funtouch 15, jaminan update OS 4x & patch keamanan 5 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(192, '192', 'Villaon V40s', 'itel ', '2025', '899.000', 'UNISOC Tiger T603', '145.000', '4', 'LPDDR4x', '128', 'eMMC 5.1', '8', '-', '-', '2', '0', '5', 'IPS', '60', '-', '-', '4000', '10', '0', 0, 0, '-', 'Triple slot (Dual SIM + microSD), sensor sidik jari di tombol power, jack audio 3.5mm, dukungan microSD hingga 2 TB', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(193, '193', 'itel A90 4/64', 'itel', '2025', '999.000', 'UNISOC T7100', '145.000', '4', 'LPDDR4X', '64', 'eMMC 5.1', '13', '-', '-', '0', '0', '5', 'IPS', '90', '480', '-', '5000', '15', '0', 0, 0, 'IP54', 'Dynamic Bar, Landscape Display (Always-on Display), dukungan microSD hingga 2 TB, garansi 24 bulan, jaminan performa anti lag 36 bulan', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(194, '194', 'itel A90 4/128', 'itel', '2025', '1.099.000', 'UNISOC T7100', '145.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '13', '-', '-', '0', '0', '5', 'IPS', '90', '480', '-', '5000', '15', '0', 0, 0, 'IP54', 'Dynamic Bar, Landscape Display (Always-on Display), dukungan microSD hingga 2 TB, garansi 24 bulan, jaminan performa anti lag 36 bulan', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(195, '195', 'itel A90 4/256', 'itel', '2025', '1.299.000', 'UNISOC T7100', '145.000', '4', 'LPDDR4X', '256', 'eMMC 5.1', '13', '-', '-', '0', '0', '5', 'IPS', '90', '480', '-', '5000', '15', '0', 0, 0, 'IP54', 'Dynamic Bar, Landscape Display (Always-on Display), dukungan microSD hingga 2 TB, garansi 24 bulan, jaminan performa anti lag 36 bulan', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(196, '196', 'itel P70 4/128', 'itel', '2025', '1.249.000', 'MediaTek Helio G50', '145.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '13', '-', '-', '0', '0', '8', 'IPS', '120', '700', '-', '6000', '18', '0', 0, 0, 'IP54', 'Dual SIM + slot microSD khusus (hingga 1 TB), USB Type-C, jack audio 3.5mm, sensor sidik jari di tombol power, Bluetooth 5.0, Wi-Fi dual-band', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(197, '197', 'itel P70 8/128', 'itel', '2025', '1.379.000', 'MediaTek Helio G50', '145.000', '8', 'LPDDR4X', '128', 'eMMC 5.1', '13', '-', '-', '0', '0', '8', 'IPS', '120', '700', '-', '6000', '18', '0', 0, 0, 'IP54', 'Dual SIM + slot microSD khusus (hingga 1 TB), USB Type-C, jack audio 3.5mm, sensor sidik jari di tombol power, Bluetooth 5.0, Wi-Fi dual-band', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(198, '198', 'itel A50 3/64', 'itel', '2024', '935.000', 'UNISOC T603', '145.000', '3', 'LPDDR4x', '64', 'eMMC 5.1', '8', '-', '-', '0', '0', '5', 'IPS', '60', '480', '-', '5000', '10', '0', 0, 0, '-', 'Android 14 Go Edition, sensor sidik jari di samping, slot microSD khusus, jack audio 3.5mm, warna Lime Green & Misty Black', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(199, '199', 'itel A50 4/64', 'itel', '2024', '949.000', 'UNISOC T603', '145.000', '4', 'LPDDR4x', '64', 'eMMC 5.1', '8', '-', '-', '0', '0', '5', 'IPS', '60', '480', '-', '5000', '10', '0', 0, 0, '-', 'Android 14 Go Edition, sensor sidik jari di samping, slot microSD khusus, jack audio 3.5mm, warna Lime Green & Misty Black', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(200, '200', 'itel A50 3/128', 'itel', '2024', '1.099.000', 'UNISOC T603', '145.000', '3', 'LPDDR4x', '128', 'eMMC 5.1', '8', '-', '-', '0', '0', '5', 'IPS', '60', '480', '-', '5000', '10', '0', 0, 0, '-', 'Android 14 Go Edition, sensor sidik jari di samping, slot microSD khusus, jack audio 3.5mm, warna Lime Green & Misty Black', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(201, '201', 'POCO C85 6/128', 'POCO', '2025', '1.549.000', 'MediaTek Helio G81 Ultra', '240.000', '6', 'LPDDR4x', '128', 'eMMC 5.1', '50', '-', ' Samsung S5KJN1SQ03', '0', '0', '8', 'IPS', '120', '810 nits (puncak)', 'Corning Gorilla Glass 3', '6000', '33', '0', 0, 0, 'IP64', 'Wet Touch Display 2.0, TÜV Rheinland (Low Blue Light, Flicker Free, Circadian Friendly), DC Dimming, Touch sampling rate 240 Hz, Reverse charging 10W, 200% Volume Boost, FM Radio, Slot MicroSD hingga 1TB, Jack audio 3.5mm', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(202, '202', 'POCO C85 8/256', 'POCO', '2025', '1.749.000', 'MediaTek Helio G81 Ultra', '240.000', '8', 'LPDDR4x', '256', 'eMMC 5.1', '50', '-', ' Samsung S5KJN1SQ03', '0', '0', '8', 'IPS', '120', '810 nits (puncak)', 'Corning Gorilla Glass 3', '6000', '33', '0', 0, 0, 'IP64', 'Wet Touch Display 2.0, TÜV Rheinland (Low Blue Light, Flicker Free, Circadian Friendly), DC Dimming, Touch sampling rate 240 Hz, Reverse charging 10W, 200% Volume Boost, FM Radio, Slot MicroSD hingga 1TB, Jack audio 3.5mm', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(203, '203', 'realme Note 70 4/64', 'realme', '2025', '1.399.000', 'UNISOC Tiger T7250', '280.000', '4', 'LPDDR4X', '64', 'eMMC 5.1', '12', '-', 'OmniVision OV13B10', '0', '0', '5', 'IPS', '90', '563', 'Panda Glass', '6300', '15', '0', 0, 0, 'IP54', 'ArmorShell Tough Bull, tahan jatuh 1,8 m, chassis aluminium die-cast, Speaker Cleaner, Always-On Display, Mini Capsule, Pulse Light Notification (9 warna), 300% Ultra Volume, Smart Touch, DC Dimming, Eye Comfort Display', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(204, '204', 'realme Note 70 4/128', 'realme', '2025', '1.499.000', 'UNISOC Tiger T7250', '280.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '12', '-', 'OmniVision OV13B10', '0', '0', '5', 'IPS', '90', '563', 'Panda Glass', '6300', '15', '0', 0, 0, 'IP54', 'ArmorShell Tough Bull, tahan jatuh 1,8 m, chassis aluminium die-cast, Speaker Cleaner, Always-On Display, Mini Capsule, Pulse Light Notification (9 warna), 300% Ultra Volume, Smart Touch, DC Dimming, Eye Comfort Display', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(205, '205', 'Xiaomi 15T', 'Xiaomi', '2025', '7.499.000', 'Mediatek Dimensity 8400 Ultra', '1.872.827', '12', 'LPDDR5X', '512', 'UFS 4.1', '50', 'OIS', 'Leica Summilux', '50', '12', '32', 'AMOLED', '120', '3.200', 'Corning Gorilla Glass 7i', '5500', '67', '0', 0, 0, 'IP68', 'Xiaomi Hyper AI, Xiaomi Astral Communication, Xiaomi 3D IceLoop System, Stereo speaker Dolby Atmos, AI NPU 880, X-Axis linear vibration motor', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(206, '206', 'Xiaomi 15T Pro 12GB | 512GB', 'Xiaomi', '2025', '9.999.000', 'Mediatek Dimensity 9400+', '2.600.000', '12', 'LPDDR5X', '512', 'UFS 4.1', '50', 'ois', 'Leica Summilux', '50', '12', '32', 'AMOLED', '144', '3.200', 'Corning Gorilla Glass 7i', '5500', '90', '50', 0, 0, 'IP68', 'Xiaomi Hyper AI, AI NPU 890, Stereo speaker Dolby Atmos, Dukungan audio resolusi tinggi 24-bit/192kHz, Xiaomi 3D IceLoop System, Wi-Fi 7', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(207, '207', 'Xiaomi 15T Pro 12GB | 1TB', 'Xiaomi', '2025', '10.999.000', 'Mediatek Dimensity 9400+', '2.600.000', '12', 'LPDDR5X', '1000', 'UFS 4.1', '50', 'ois', 'Leica Summilux', '50', '12', '32', 'AMOLED', '144', '3.200', 'Corning Gorilla Glass 7i', '5500', '90', '50', 0, 0, 'IP68', 'Xiaomi Hyper AI, AI NPU 890, Stereo speaker Dolby Atmos, Dukungan audio resolusi tinggi 24-bit/192kHz, Xiaomi 3D IceLoop System, Wi-Fi 7', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(208, '208', 'OPPO A6 Pro 8GB | 128GB', 'OPPO', '2025', '3.699.000', 'MediaTek Helio G100', '405.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '16', 'AMOLED', '120', '1.400', '-', '7000', '80', '0', 0, 0, 'IP69', 'SuperCool VC System, Underwater Photography, Dual stereo speaker, AI GameBoost 2.0, RAM Expansion, Ultra Volume Mode 300%, jaminan kelancaran sistem & baterai 5 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(209, '209', 'OPPO A6 Pro 8GB | 256GB', 'OPPO', '2025', '3.999.000', 'MediaTek Helio G100', '405.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '16', 'AMOLED', '120', '1.400', '-', '7000', '80', '0', 0, 0, 'IP69', 'SuperCool VC System, Underwater Photography, Dual stereo speaker, AI GameBoost 2.0, RAM Expansion, Ultra Volume Mode 300%, jaminan kelancaran sistem & baterai 5 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(210, '210', 'OPPO A6 Pro 5G', 'OPPO', '2025', '4.599.000', 'MediaTek Dimensity 6300', '405.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '16', 'AMOLED', '120', '1.400', 'AGC DT-Star D+', '7000', '80', '0', 0, 0, 'IP69', 'SuperCool VC System, Underwater Photography, Dual stereo speaker, AI GameBoost 2.0, RAM Expansion, Ultra Volume Mode 300%, jaminan kelancaran sistem & baterai 5 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(211, '211', 'vivo V60 Lite 5G 8GB | 256GB', 'vivo', '2025', '4.999.000', 'Qualcomm Snapdragon 685', '310.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '8', '0', '32', 'AMOLED', '120', '1.800', '-', '6500', '90', '0', 0, 0, 'IP65', 'Stereo speaker (volume hingga 400%), Extended RAM hingga 8 GB, Ultra Game Mode, Game Boost Mode, Esport DND Mode, Circle to Search, jaminan performa 50 bulan, Reverse Charging 6W', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(212, '212', 'vivo V60 Lite 5G 12GB | 512GB\n', 'vivo', '2025', '5.999.000', 'Qualcomm Snapdragon 685', '310.000', '12', 'LPDDR4X', '512', 'UFS 2.2', '50', 'PDAF', '-', '8', '0', '32', 'AMOLED', '120', '1.800', '-', '6500', '90', '0', 0, 0, 'IP65', 'Stereo speaker (volume hingga 400%), Extended RAM hingga 8 GB, Ultra Game Mode, Game Boost Mode, Esport DND Mode, Circle to Search, jaminan performa 50 bulan, Reverse Charging 6W', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(213, '213', 'vivo V60 Lite', 'vivo', '2025', '3.999.000', 'Qualcomm Snapdragon 685', '310.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDFA', '-', '8', '0', '32', 'AMOLED', '120', '1.800', '-', '6500', '90', '0', 0, 0, 'IP65', 'Reverse charging 6W, Stereo speaker (hingga 400% volume), Extended RAM +8 GB, Ultra Game Mode, Game Boost Mode, Esport DND Mode, Circle to Search, jaminan performa 50 bulan, sensor sidik jari di layar', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(214, '214', 'itel S26 Ultra (Super 26 Ultra) 8GB | 128GB', 'itel', '2025', '2.399.000', 'Unisoc T7300', '510.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'EIS', '-', '2', '0', '32', 'AMOLED', '144', '4.500', 'Corning Gorilla Glass 7i', '6000', '18', '0', 0, 0, 'IP65', 'OS: Android 15, itelOS 15.1.2; Extended RAM hingga 8GB; DTS Audio; AI Mono speaker; FM Radio; Z-Axis Linear Motor; Enhanced Gaming Engine 2.0; Jaminan update 1,5 tahun; Jaminan kesehatan baterai >80% setelah 4 tahun; Jaminan performa 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(215, '215', 'itel S26 Ultra (Super 26 Ultra) 8GB | 256GB', 'itel', '2025', '2.599.000', 'Unisoc T7300', '510.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'EIS', '-', '2', '0', '32', 'AMOLED', '144', '4.500', 'Corning Gorilla Glass 7i', '6000', '18', '0', 0, 0, 'IP65', 'OS: Android 15, itelOS 15.1.2; Extended RAM hingga 8GB; DTS Audio; AI Mono speaker; FM Radio; Z-Axis Linear Motor; Enhanced Gaming Engine 2.0; Jaminan update 1,5 tahun; Jaminan kesehatan baterai >80% setelah 4 tahun; Jaminan performa 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(216, '216', 'Infinix GT 30', 'Infinix', '2025', '3.499.000', 'MediaTek Dimensity 7400', '760.000', '8', 'LPDDR5X', '256', 'UFS 2.2', '64', '-', 'Sony IMX682', '8', '0', '13', 'AMOLED', '144', '4.500', 'Corning Gorilla Glass 7i', '5500', '45', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, XOS 15; Update OS 2 kali; Extended RAM 8GB; Speaker stereo JBL; RGB Mecha Lights; Gaming triggers; 3D Vapor Chamber Cooling; Reverse charging 10W; FM Radio.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(217, '217', 'Redmi 15 8GB | 128GB', 'Xiaomi', '2025', '2.099.000', 'Qualcomm Snapdragon 6s Gen 3', '459.712', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', '-', '-', '0', '0', '8', 'IPS', '144', '850', 'Corning Gorilla Glass 3', '7000', '33', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, HyperOS 2.2; Hi-Res Audio, Dolby Atmos, RAM Extender hingga 8GB, IR Blaster, Reverse charging 18W, tahan suhu -20°C, sensor sidik jari di tombol daya', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(218, '218', 'Redmi 15 8GB | 256GB', 'Xiaomi', '2025', '2.299.000', 'Qualcomm Snapdragon 6s Gen 3', '459.712', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', '-', '-', '0', '0', '8', 'IPS', '144', '850', 'Corning Gorilla Glass 3', '7000', '33', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, HyperOS 2.2; Hi-Res Audio, Dolby Atmos, RAM Extender hingga 8GB, IR Blaster, Reverse charging 18W, tahan suhu -20°C, sensor sidik jari di tombol daya', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(219, '219', 'Samsung Galaxy S25 FE 8GB | 128GB', 'Samsung', '2025', '9.999.000', 'Exynos 2400 (4 nm)', '1.521.140', '8', 'LPDDR5X', '128', 'UFS 4.0', '50', 'OIS', 'Samsung ISOCELL GN3 (S5KGN3)', '8', '12', '12', 'AMOLED', '120', '1.900', 'Corning Gorilla Glass Victus+', '4900', '45', '15', 0, 0, 'IP68', 'OS saat rilis: Android 15 (Carisinyal) / Android 16 (GSM Arena); One UI 7/8; Jaminan update OS 7 kali; Samsung DeX & Wireless DeX; Speaker stereo AKG; RAM Plus hingga 8GB; Dual eSIM; Display out; Circle to Search; Galaxy AI', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(220, '220', 'Samsung Galaxy S25 FE 8GB | 256GB', 'Samsung', '2025', '10.999.000', 'Exynos 2400 (4 nm)', '1.521.140', '8', 'LPDDR5X', '256', 'UFS 4.0', '50', 'OIS', 'Samsung ISOCELL GN3 (S5KGN3)', '8', '12', '12', 'AMOLED', '120', '1.900', 'Corning Gorilla Glass Victus+', '4900', '45', '15', 0, 0, 'IP68', 'OS saat rilis: Android 15 (Carisinyal) / Android 16 (GSM Arena); One UI 7/8; Jaminan update OS 7 kali; Samsung DeX & Wireless DeX; Speaker stereo AKG; RAM Plus hingga 8GB; Dual eSIM; Display out; Circle to Search; Galaxy AI', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(221, '221', 'Samsung Galaxy A17 8GB | 128GB', 'Samsung', '2025', '2.999.000', 'MediaTek Helio G99', '400.000', '8', 'LPDDR4X', '128', 'UFS 2.2', '50', 'OIS', '-', '8', '2', '13', 'AMOLED', '90', '-', 'Corning Gorilla Glass Victus+', '5000', '25', '0', 0, 0, 'IP54', 'OS saat rilis: Android 15, One UI 7; Jaminan update OS 6 kali; RAM Plus hingga 8GB; Samsung Knox Vault; Dual mic.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(222, '222', 'Samsung Galaxy A17 8GB | 256GB\n', 'Samsung', '2025', '3.399.000', 'MediaTek Helio G99', '400.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'OIS', '-', '8', '2', '13', 'AMOLED', '90', '-', 'Corning Gorilla Glass Victus+', '5000', '25', '0', 0, 0, 'IP54', 'OS saat rilis: Android 15, One UI 7; Jaminan update OS 6 kali; RAM Plus hingga 8GB; Samsung Knox Vault; Dual mic.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(223, '223', 'Realme 15 Pro 12/256', 'realme', '2025', '6.999.000', 'Qualcomm Snapdragon 7 Gen 4', '1.100.000', '12', 'LPDDR4X', '256', 'UFS 3.1', '50', 'OIS', 'Sony IMX896', '50', '0', '50', 'OLED', '144', '6.500', 'Corning Gorilla Glass', '7000', '80', '0', 0, 0, 'IP68', 'OS saat rilis: Android 15, realme UI 6.0; Dual Stereo speaker; AirFlow VC Cooling seluas 7000 mm²; Struktur rangka ArmorShell; Fitur gaming (AI Gaming Coach, GT Boost); Dynamic RAM hingga 14 GB; Infrared. (Carisinyal)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(224, '224', 'Realme 15 Pro 12/512', 'realme', '2025', '7.499.000', 'Qualcomm Snapdragon 7 Gen 4', '1.100.000', '12', 'LPDDR4X', '512', 'UFS 3.1', '50', 'OIS', 'Sony IMX896', '50', '0', '50', 'OLED', '144', '6.500', 'Corning Gorilla Glass', '7000', '80', '0', 0, 0, 'IP68', 'OS saat rilis: Android 15, realme UI 6.0; Dual Stereo speaker; AirFlow VC Cooling seluas 7000 mm²; Struktur rangka ArmorShell; Fitur gaming (AI Gaming Coach, GT Boost); Dynamic RAM hingga 14 GB; Infrared. (Carisinyal)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(225, '225', 'Realme 15 5G 8/256', 'realme', '2025', '4.999.000', 'MediaTek Dimensity 7300+', '760.000', '8', 'LPDDR4X', '256', 'UFS 3.1', '50', 'OIS', 'Sony IMX882', '8', '0', '50', 'OLED', '144', '4500 (nit)', 'Corning Gorilla Glass', '7000', '80', '0', 0, 0, 'IP69', 'OS saat rilis: Android 15, realme UI 6.0; Dual stereo speaker; Dynamic RAM hingga 14 GB. (Carisinyal)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(226, '226', 'Realme 15 5G 12/256', 'realme', '2025', '5.299.000', 'MediaTek Dimensity 7300+', '760.000', '12', 'LPDDR4X', '256', 'UFS 3.1', '50', 'OIS', 'Sony IMX882', '8', '0', '50', 'OLED', '144', '4500 (nit)', 'Corning Gorilla Glass', '7000', '80', '0', 0, 0, 'IP69', 'OS saat rilis: Android 15, realme UI 6.0; Dual stereo speaker; Dynamic RAM hingga 14 GB. (Carisinyal)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(227, '227', 'Huawei Pure 80 Ultra', 'Huawei', '2025', '22.999.000', 'Kirin 9020', '1.100.000', '16', '-', '512', 'UFS', '50', 'OIS', 'SmartSens', '40', '50', '13', 'LTPO AMOLED', '120', '3.000', 'Crystal Armor Kunlun Glass 2', '5170', '100', '80', 0, 0, 'IP69', 'Tahan debu dan air hingga 2m selama 30 menit, tahan semprotan air bertekanan dan bersuhu tinggi, tombol smart control, material frame alumunium, speaker stereo, fast charging 100W, wireless charging 80W, reverse charging 18W, reverse wireless charging 20W (Carisinyal)', '2026-01-18 05:37:42', '2026-01-18 05:37:42');
INSERT INTO `hps` (`id`, `no`, `nama`, `merek`, `tahun_rilis`, `harga`, `chipset`, `skor_antutu`, `kapasitas_ram`, `jenis_ram`, `kapasitas_storage`, `jenis_storage`, `camera_utama`, `stabilizer_kamera`, `teknologi_kamera`, `camera_tambahan_1`, `camera_tambahan_2`, `camera_depan`, `teknologi_layar`, `refresh_rate`, `tingkat_kecerahan`, `pelindung_layar`, `kapasitas_baterai`, `charger_kabel`, `charger_wireless`, `bypass_charging`, `nfc`, `ingress_protection`, `fitur_tambahan`, `created_at`, `updated_at`) VALUES
(228, '228', 'Huawei Pura 80 Pro', 'Huawei', '2025', '14.999.000', 'Kirin 9020', '1.300.000', '12', 'LPDDR5X', '512', 'UFS 4.0', '50', 'OIS', 'SmartSens', '48', '40', '13', 'AMOLED', '120', '3.000', 'Crystal Armor Kunlun Glass 2', '5700', '100', '80', 0, 0, 'IP69', 'OS saat rilis: EMUI 15.0 (Internasional); Speaker stereo (Huawei Histen); Infrared port; USB-C 3.1 dengan DisplayPort 1.2; BDS Satellite Messaging (Cina); Sensor sidik jari (side-mounted).', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(229, '229', 'OPPO A5i Pro 5G', 'OPPO', '2025', '3.299.000', 'MediaTek Dimensity 6300', '440.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', '-', '-', '2', '0', '8', 'IPS', '120', '1000 nit (HBM)', 'Corning Gorilla Glass 7i', '6000', '45', '0', 0, 0, 'IP65', 'OS saat rilis: Android 15, ColorOS 15.0.1; Damage-Proof 360° Armour Body; Jack 3.5mm Ada; Sensor Fingerprint (menyatu dengan tombol power); RAM Expansion. (Carisinyal)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(230, '230', 'Motorola Moto G06 Power', 'Motorola', '2025', '1.499.000', 'MediaTek Helio G81 Extreme', '370.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '600', 'Corning Gorilla Glass 3', '7000', '18', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, Hello UI; Stereo speaker Dolby Atmos Bass Boost; RAM Boost hingga 8 GB; ThinkShield for Mobile & Moto Secure.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(231, '231', 'POCO M7', 'POCO', '2.025', '2.299.000', 'Qualcomm Snapdragon 685', '500.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', '-', '-', '0', '0', '8', 'IPS', '144', '850', '-', '7000', '33', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, HyperOS 2; Reverse Charging 18W; Tahan debu dan percikan air (IP64); RAM Extender hingga 8 GB; Hi-Res Audio; Dolby Atmos; Jack 3.5mm: Tidak Ada.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(232, '232', ' iPhone 17 8/256', 'Apple', '2.025', '17.249.000', 'Apple A19', '2.106.644', '8', 'LPDDR5x', '256', 'NVMe', '48', 'OIS', 'Sony', '48', '0', '18', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3692', '40', '25', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Speaker stereo; Fitur AI berbasiskan Apple MGIE AI; Dukungan Ultra Wideband 2 (UWB), SOS via satelit.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(233, '233', ' iPhone 17 8/512', 'Apple', '2.025', '21.999.000', 'Apple A19', '2.106.644', '8', 'LPDDR5x', '512', 'NVMe', '48', 'OIS', 'Sony', '48', '0', '18', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3692', '40', '25', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Speaker stereo; Fitur AI berbasiskan Apple MGIE AI; Dukungan Ultra Wideband 2 (UWB), SOS via satelit.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(234, '234', ' iPhone 17 Pro 12/256', 'Apple', '2.025', '23.749.000', 'Apple A19', '2.206.644', '8', 'LPDDR5x', '256', 'NVMe', '48', 'OIS', 'Sony', '48', '0', '18', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3692', '30', '25', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Apple Intelligence; Face ID; UWB gen2; SOS satelit; Apple Pay; Kamera Belakang mendukung zoom optik 2x; Video 4K 60fps, Dolby Vision HDR, audio spasial 3D.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(235, '235', ' iPhone 17 Pro 12/512', 'Apple', '2.025', '28.249.000', 'Apple A19', '2.206.644', '8', 'LPDDR5x', '512', 'NVMe', '48', 'OIS', 'Sony', '48', '0', '18', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3692', '30', '25', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Apple Intelligence; Face ID; UWB gen2; SOS satelit; Apple Pay; Kamera Belakang mendukung zoom optik 2x; Video 4K 60fps, Dolby Vision HDR, audio spasial 3D.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(236, '236', ' iPhone 17 Pro 12/1000', 'Apple', '2.025', '32.999.000', 'Apple A19', '2.206.644', '8', 'LPDDR5x', '1000', 'NVMe', '48', 'OIS', 'Sony', '48', '0', '18', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3692', '30', '25', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Apple Intelligence; Face ID; UWB gen2; SOS satelit; Apple Pay; Kamera Belakang mendukung zoom optik 2x; Video 4K 60fps, Dolby Vision HDR, audio spasial 3D.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(237, '237', ' iPhone 17 Pro Max 12/256', 'Apple', '2.025', '25.749.000', 'Apple A19 Pro', '2.500.000', '12', 'LPDDR5x', '256', 'NVMe', '48', 'OIS', 'Sony', '48', '48', '18', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3988', '40', '25', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Dual SIM (Single SIM, eSIM); USB Type-C 3.2 Gen 2, DisplayPort; Speaker stereo', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(238, '238', ' iPhone 17 Pro Max 12/512', 'Apple', '2.025', '25.749.000', 'Apple A19 Pro', '2.500.000', '12', 'LPDDR5x', '512', 'NVMe', '48', 'OIS', 'Sony', '48', '48', '18', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3988', '40', '25', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Dual SIM (Single SIM, eSIM); USB Type-C 3.2 Gen 2, DisplayPort; Speaker stereo', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(239, '239', ' iPhone 17 Pro Max 12/1000', 'Apple', '2.025', '25.749.000', 'Apple A19 Pro', '2.500.000', '12', 'LPDDR5x', '1000', 'NVMe', '48', 'OIS', 'Sony', '48', '48', '18', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3988', '40', '25', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Dual SIM (Single SIM, eSIM); USB Type-C 3.2 Gen 2, DisplayPort; Speaker stereo', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(240, '240', ' iPhone 17 Pro Max 12/2000', 'Apple', '2.025', '25.749.000', 'Apple A19 Pro', '2.500.000', '12', 'LPDDR5x', '2000', 'NVMe', '48', 'OIS', 'Sony', '48', '48', '18', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3988', '40', '25', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Dual SIM (Single SIM, eSIM); USB Type-C 3.2 Gen 2, DisplayPort; Speaker stereo', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(241, '241', ' iPhone Air 8/256', 'Apple', '2.025', '21.249.000', 'Apple A19 Pro', '2.500.000', '8', 'LPDDR5x', '256', 'NVMe', '48', 'OIS', 'Sony', '0', '0', '12', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3149', '20', '20', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Material frame: titanium grade 5; Fitur AI berbasiskan Apple MGIE AI; Face ID; Ultra Wideband 2 (UWB); Pengiriman pesan darurat SOS via satelit.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(242, '242', ' iPhone Air 8/512', 'Apple', '2.025', '21.249.000', 'Apple A19 Pro', '2.500.000', '8', 'LPDDR5x', '512', 'NVMe', '48', 'OIS', 'Sony', '0', '0', '12', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3149', '20', '20', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Material frame: titanium grade 5; Fitur AI berbasiskan Apple MGIE AI; Face ID; Ultra Wideband 2 (UWB); Pengiriman pesan darurat SOS via satelit.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(243, '243', ' iPhone Air 8/1000', 'Apple', '2.025', '21.249.000', 'Apple A19 Pro', '2.500.000', '8', 'LPDDR5x', '1000', 'NVMe', '48', 'OIS', 'Sony', '0', '0', '12', 'LTPO AMOLED', '120', '3.000', 'Ceramic Shield 2', '3149', '20', '20', 0, 0, 'IP68', 'OS saat rilis: iOS 26; Material frame: titanium grade 5; Fitur AI berbasiskan Apple MGIE AI; Face ID; Ultra Wideband 2 (UWB); Pengiriman pesan darurat SOS via satelit.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(244, '244', 'Xiaomi 17 Pro Max', 'Xiaomi', '2.025', '22.000.000', 'Qualcomm Snapdragon 8 Elite Gen 5', '3.233.146', '16', 'LPDDR5X', '1000', 'UFS 4.1', '50', 'OIS', 'Light Hunter 950L, Omnivision OV50M', '50', '50', '50', 'LTPO AMOLED', '120', '3.500', 'Xiaomi Dragon Crystal Glass 3', '7500', '100', '50', 0, 0, 'IP68', 'OS saat rilis: Android 16, HyperOS 3; Reverse wireless charging 22.5W; Magic Back Screen 2.9 inci; Stereo speaker Dolby Atmos; Ultra Wideband (UWB); DisplayPort; Fingerprint ultrasonik di layar. (Carisinyal)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(245, '245', 'iQOO Z10R 5G 8/128', 'iQOO', '2.025', '3.299.000', 'MediaTek Dimensity 7360-Turbo', '717.489', '8', 'LPDDR4X', '128', 'UFS 3.1', '50', 'PDAF', 'Sony IMX882', '8', '0', '32', 'AMOLED', '120', '3.000', 'Shield Glass', '6500', '90', '0', 0, 0, 'IP65', 'Dual stereo speaker, HDR10+, 2160Hz PWM dimming, AI Aura Light, AI Erase 3.0, 4K video depan & belakang, 5 tahun pengalaman lancar, Game Voice Changer', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(246, '246', 'iQOO Z10R 5G 8/256', 'iQOO', '2.025', '3.599.000', 'MediaTek Dimensity 7360-Turbo', '717.489', '8', 'LPDDR4X', '256', 'UFS 3.1', '50', 'PDAF', 'Sony IMX882', '8', '0', '32', 'AMOLED', '120', '3.000', 'Shield Glass', '6500', '90', '0', 0, 0, 'IP65', 'Dual stereo speaker, HDR10+, 2160Hz PWM dimming, AI Aura Light, AI Erase 3.0, 4K video depan & belakang, 5 tahun pengalaman lancar, Game Voice Changer', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(247, '247', 'iQOO Z10R 5G 12/256', 'iQOO', '2.025', '3.899.000', 'MediaTek Dimensity 7360-Turbo', '717.489', '12', 'LPDDR4X', '256', 'UFS 3.1', '50', 'PDAF', 'Sony IMX882', '8', '0', '32', 'AMOLED', '120', '3.000', 'Shield Glass', '6500', '90', '0', 0, 0, 'IP65', 'Dual stereo speaker, HDR10+, 2160Hz PWM dimming, AI Aura Light, AI Erase 3.0, 4K video depan & belakang, 5 tahun pengalaman lancar, Game Voice Changer', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(248, '248', 'Samsung Galaxy M54 5G', 'Samsung', '2.023', '6.499.000', 'Exynos 1380', '604.000', '8', 'LPDDR4X', '256', 'UFS 3.1', '108', 'OIS', 'Samsung HM6', '8', '2', '32', 'Super AMOLED', '120', '800', 'Corning Gorilla Glass 5', '6000', '25', '0', 0, 0, '-', 'OS saat rilis: Android 13, One UI 5.1; Jaminan update OS 4 generasi; Keamanan 5 tahun; Speaker stereo; Voice Focus; WiFi 6; Bluetooth 5.3', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(249, '249', 'vivo X60', 'vivo', '2.021', '7.999.000', 'Qualcomm Snapdragon 870', '616.255', '12', 'LPDDR5', '256', 'UFS 3.1', '48', 'OIS', 'Zeiss optics', '13', '13', '32', 'AMOLED', '120', '-', '-', '4300', '33', '0', 0, 0, '-', 'OS saat rilis: Android 11 (Funtouch 11.1)', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(250, '250', 'Sony Xperia 5 III', 'Sony', '2.021', '10.000.000', 'Qualcomm Snapdragon 888', '735.000', '8', 'LPDDR5', '256', 'UFS 3.1', '12', 'OIS', 'Zeiss optics', '12', '12', '8', 'OLED', '120', '-', 'Corning Gorilla Glass 6', '4500', '30', '0', 0, 0, 'IP68', 'OS saat rilis: Android 11', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(251, '251', 'HUAWEI P30 Pro', 'Huawei', '2.019', '16.000.000', 'HiSilicon Kirin 980', '601.701', '8', 'LPDDR4X', '256', 'UFS 2.1', '40', 'OIS', 'Leica Summilux', '8', '30', '32', 'OLED', '60', '830', 'Corning Gorilla Glass 6', '4200', '40', '15', 0, 0, 'IP68', 'OS saat rilis: Android 9.0 (Pie); slot NM card; speaker stereo; fast charging.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(252, '252', 'LG V60 ThinQ', 'LG', '2.020', '7.000.000', 'Qualcomm Snapdragon 865', '755.528', '8', 'LPDDR5', '256', 'UFS 2.1', '64', 'OIS', 'Samsung ISOCELL GWB', '13', '0', '10', 'OLED', '60', '578', 'Corning Gorilla Glass 5', '5000', '25', '9', 0, 0, 'IP68', 'Android 10 (saat rilis), speaker stereo, jack audio 3.5 mm, dukungan Dual Screen opsional', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(253, '253', 'Samsung Galaxy S20 FE', 'Samsung', '2.020', '10.000.000', 'Exynos 990', '713.203', '8', 'LPDDR5', '128', 'UFS 3.1', '12', 'OIS', 'Sony IMX582', '8', '12', '32', 'Super AMOLED', '120', '700', 'Corning Gorilla Glass 3', '4500', '25', '15', 0, 0, 'IP68', 'OS saat rilis: Android 10 (One UI 2.5); dukungan Samsung DeX; stereo speaker AKG; Always On Display; RAM Plus.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(254, '254', 'POCO F8 Ultra 12/25', 'POCO', '2.025', '11.631.604', 'Qualcomm Snapdragon 8 Elite Gen 5', '3.789.332', '12', 'LPDDR5X', '256', 'UFS 4.1', '50', 'OIS', ' Samsung S5KJN5', '50', '50', '32', 'AMOLED', '120', '3.500', 'Poco Shield Glass', '6500', '100', '50', 0, 0, 'IP68', 'OS saat rilis: Android 16, HyperOS 3; Jaminan update OS hingga 4 kali, keamanan 6 tahun; Speaker Bose 2.1 dengan Dolby Atmos; Stereo speaker; Display Port; Reverse wireless charging 22.5W; eSIM; Tahan debu dan air 1,5m/30 menit', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(255, '255', 'POCO F8 Ultra 16/512', 'POCO', '2.025', '12.463.622', 'Qualcomm Snapdragon 8 Elite Gen 5', '3.789.332', '16', 'LPDDR5X', '512', 'UFS 4.1', '50', 'OIS', ' Samsung S5KJN5', '50', '50', '32', 'AMOLED', '120', '3.500', 'Poco Shield Glass', '6500', '100', '50', 0, 0, 'IP68', 'OS saat rilis: Android 16, HyperOS 3; Jaminan update OS hingga 4 kali, keamanan 6 tahun; Speaker Bose 2.1 dengan Dolby Atmos; Stereo speaker; Display Port; Reverse wireless charging 22.5W; eSIM; Tahan debu dan air 1,5m/30 menit', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(256, '256', 'Vivo x300 12/256', 'vivo', '2.025', '14.999.000', 'Mediatek Dimensity 9500', '2.050.921', '12', 'LPDDR5X', '256', 'UFS 4.1', '200', 'OIS', 'Sony IMX602', '50', '50', '50', 'LTPO AMOLED', '120', '4.500', 'Reinforced Glass', '6040', '90', '40', 0, 0, 'IP69', 'OS saat rilis: Android 16, OriginOS 6; Update OS hingga 5 kali, keamanan 7 tahun; Stereo speaker Hi-Res, Face Unlock, Extended RAM hingga 16GB, Vapor Chamber 4K VC, One-Tap Water Ejection, DisplayPort, Reverse Wireless Charging, Battery Life Extender.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(257, '257', 'Vivo x300 16/512', 'vivo', '2.025', '16.999.000', 'Mediatek Dimensity 9500', '2.050.921', '16', 'LPDDR5X', '512', 'UFS 4.1', '200', 'OIS', 'Sony IMX602', '50', '50', '50', 'LTPO AMOLED', '120', '4.500', 'Reinforced Glass', '6040', '90', '40', 0, 0, 'IP69', 'OS saat rilis: Android 16, OriginOS 6; Update OS hingga 5 kali, keamanan 7 tahun; Stereo speaker Hi-Res, Face Unlock, Extended RAM hingga 16GB, Vapor Chamber 4K VC, One-Tap Water Ejection, DisplayPort, Reverse Wireless Charging, Battery Life Extender.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(258, '258', 'POCO F8 Pro', 'POCO', '2.025', '10.305.019', 'Qualcomm Snapdragon 8 Elite', '3.023.050', '12', 'LPDDR5X', '256', 'UFS 4.1', '50', 'OIS', 'Omnivision OV50M', '50', '8', '20', 'AMOLED', '120', '3.500', 'Corning Gorilla Glass 7i', '6210', '100', '0', 0, 0, 'IP68', 'OS saat rilis: Android 16, HyperOS 3; Stereo speaker Bose dengan Dolby Atmos; Hi-Res audio; Fingerprint ultrasonic under-display; eSIM; Infrared; Reverse charging 22.5W; Sertifikasi TÜV Rheinland (Eye Comfort, Flicker-free, Full Care Display).', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(259, '259', 'IQOO 15 12/256', 'iQOO', '2.025', '12.999.000', 'Qualcomm Snapdragon 8 Elite Gen 5', '3.891.331', '12', 'LPDDR5X', '256', 'UFS 4.1', '50', 'OIS', 'Sony IMX921', '50', '50', '32', 'LTPO AMOLED', '144', '6.000', 'SCHOTT Diamond Shield', '7000', '100', '40', 0, 0, 'ip69', 'OS saat rilis: Android 16, OriginOS 6; Q3 Gaming Chip; Stereo speaker Hi-Res; Snapdragon Sound; VC Ice Dome Cooling System 14000 mm²; AI Gaming Signal Engine 2.0; Wi-Fi Gaming Signal Chip; Fingerprint ultrasonic under-display.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(260, '260', 'IQOO 15 16/512', 'iQOO', '2.025', '13.999.000', 'Qualcomm Snapdragon 8 Elite Gen 5', '3.891.331', '16', 'LPDDR5X', '512', 'UFS 4.1', '50', 'OIS', 'Sony IMX921', '50', '50', '32', 'LTPO AMOLED', '144', '6.000', 'SCHOTT Diamond Shield', '7000', '100', '40', 0, 0, 'ip69', 'OS saat rilis: Android 16, OriginOS 6; Q3 Gaming Chip; Stereo speaker Hi-Res; Snapdragon Sound; VC Ice Dome Cooling System 14000 mm²; AI Gaming Signal Engine 2.0; Wi-Fi Gaming Signal Chip; Fingerprint ultrasonic under-display.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(261, '261', 'IQ00 15 16/1T', 'iQOO', '2.025', '15.999.000', 'Qualcomm Snapdragon 8 Elite Gen 5', '3.891.331', '16', 'LPDDR5X', '1000', 'UFS 4.1', '50', 'OIS', 'Sony IMX921', '50', '50', '32', 'LTPO AMOLED', '144', '6.000', 'SCHOTT Diamond Shield', '7000', '100', '40', 0, 0, 'ip69', 'OS saat rilis: Android 16, OriginOS 6; Q3 Gaming Chip; Stereo speaker Hi-Res; Snapdragon Sound; VC Ice Dome Cooling System 14000 mm²; AI Gaming Signal Engine 2.0; Wi-Fi Gaming Signal Chip; Fingerprint ultrasonic under-display.', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(262, '262', 'Tecno Spark 40 6GB | 128GB', 'Tecno', '2.025', '1.799.000', 'MediaTek Helio G91', '370.000', '8', 'LPDDR4x', '256', 'eMMC 5.1', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '800', '-', '5200', '45', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, HiOS 15; Speaker stereo DTS; Infrared; FM Radio; RAM virtual hingga 8GB; FreeLink; Sertifikasi TDV (kelancaran performa 4 tahun); Tahan jatuh 1,5', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(263, '263', 'Tecno Spark 40 8GB | 256GB', 'Tecno', '2.025', '1.999.000', 'MediaTek Helio G91', '370.000', '8', 'LPDDR4x', '256', 'eMMC 5.1', '50', 'PDAF', '-', '0', '0', '8', 'IPS', '120', '800', '-', '5200', '45', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, HiOS 15; Speaker stereo DTS; Infrared; FM Radio; RAM virtual hingga 8GB; FreeLink; Sertifikasi TDV (kelancaran performa 4 tahun); Tahan jatuh 1,5', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(264, '264', 'Realme C85 Pro 8/128', 'Realme', '2.025', '2.999.000', 'Qualcomm Snapdragon 685 (6 nm)', '320.528', '8', 'LPDDR4x', '128', 'eMMC 5.1', '50', 'PDAF', '-', '0', '0', '8', 'AMOLED', '120', '600 nit (standar), 1200 nit (HBM), 4000 nit (puncak)', '-', '7000', '45', '0', 0, 0, 'IP69', 'OS saat rilis: Android 15, realme UI 6.0; Dynamic RAM hingga 24GB; Reverse Charging 10W; Speaker cleaner; Pulse Light; Jaminan update OS 2 tahun & keamanan 3 tahun; Warna: Parrot Purple, Peacock Green', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(265, '265', 'Realme C85 Pro 8/256', 'Realme', '2.025', '3.299.000', 'Qualcomm Snapdragon 685 (6 nm)', '320.528', '8', 'LPDDR4x', '256', 'eMMC 5.1', '50', 'PDAF', '-', '0', '0', '8', 'AMOLED', '120', '600 nit (standar), 1200 nit (HBM), 4000 nit (puncak)', '-', '7000', '45', '0', 0, 0, 'IP69', 'OS saat rilis: Android 15, realme UI 6.0; Dynamic RAM hingga 24GB; Reverse Charging 10W; Speaker cleaner; Pulse Light; Jaminan update OS 2 tahun & keamanan 3 tahun; Warna: Parrot Purple, Peacock Green', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(266, '266', 'Oppo A6x 4/64', 'OPPO', '2.025', '1.599.000', 'Qualcomm Snapdragon 685', '409.000', '4', 'LPDDR4X', '64', 'UFS 2.2', '13', '-', '-', '0', '0', '5', 'IPS', '120', '1.125', '-', '6500', '15', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, ColorOS 15.0; Fingerprint di tombol power; Mono speaker; RAM virtual hingga 6GB; Jack audio 3.5mm; Warna: Plum Purple, Violet Purple, Ice Blue', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(267, '267', 'Oppo A6x 4/128', 'OPPO', '2.025', '1.799.000', 'Qualcomm Snapdragon 685', '409.000', '4', 'LPDDR4X', '128', 'UFS 2.2', '13', '-', '-', '0', '0', '5', 'IPS', '120', '1.125', '-', '6500', '15', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, ColorOS 15.0; Fingerprint di tombol power; Mono speaker; RAM virtual hingga 6GB; Jack audio 3.5mm; Warna: Plum Purple, Violet Purple, Ice Blue', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(268, '268', 'Oppo A6x 6/128', 'OPPO', '2.025', '2.399.000', 'Qualcomm Snapdragon 685', '409.000', '6', 'LPDDR4X', '128', 'UFS 2.2', '13', '-', '-', '0', '0', '5', 'IPS', '120', '1.125', '-', '6500', '15', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, ColorOS 15.0; Fingerprint di tombol power; Mono speaker; RAM virtual hingga 6GB; Jack audio 3.5mm; Warna: Plum Purple, Violet Purple, Ice Blue', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(269, '269', 'Oppo A6x 6/256', 'OPPO', '2.025', '2.699.000', 'Qualcomm Snapdragon 685', '409.000', '6', 'LPDDR4X', '256', 'UFS 2.2', '13', '-', '-', '0', '0', '5', 'IPS', '120', '1.125', '-', '6500', '15', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, ColorOS 15.0; Fingerprint di tombol power; Mono speaker; RAM virtual hingga 6GB; Jack audio 3.5mm; Warna: Plum Purple, Violet Purple, Ice Blue', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(270, '270', 'realme P3 5G', 'realme', '2.025', '3.499.000', 'Qualcomm Snapdragon 6 Gen 4', '760.000', '12', 'LPDDR4X', '256', 'UFS 3.1', '50', 'EIS', '-', '0', '0', '16', 'AMOLED', '120', '2.000', '-', '6000', '45', '0', 0, 0, 'IP69', 'OS saat rilis: Android 15, Realme UI 6.0; Speaker stereo; Sensor fingerprint optik di layar; Warna: Space Silver, Comet Grey, Nebula Pink', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(271, '271', 'Infinix Hot 50 Pro', 'Infinix', '2.024', '2.249.000', 'MediaTek Helio G100', '400.000', '8', 'LPDDR4X', '256', 'UFS 2.2', '50', 'PDAF', '-', '2', '0', '8', 'AMOLED', '120', '1.800', 'Corning Gorilla Glass', '5000', '33', '0', 0, 0, 'IP54', 'OS saat rilis: Android 14, XOS 14.5; Speaker stereo JBL; Dynamic RAM Expansion hingga 8GB; Always On Display; TUV Rheinland Low Blue Light; PWM Dimming 2160 Hz; Radio FM; Jack 3.5mm; Jaminan kesehatan baterai >80% setelah 4 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(272, '272', 'itel A100C', 'itel', '2025', '987.000', 'Unisoc T7100', '320.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '8', '-', '-', '0', '0', '5', 'IPS', '90', '400', '-', '5000', '10', '0', 0, 0, 'MIL-STD-810H', 'OS saat rilis: Android 15 (Go edition), itel OS 15; Sensors: Fingerprint (side-mounted), accelerometer; RAM Extension hingga 8 GB; Face Unlock; DTS Audio; Infrared; Ketebalan: 8.49 mm; Ukuran Layar: 6.6 inci; Resolusi Layar: 720x1612', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(273, '273', 'RedMagic 11 Pro', 'ZTE Nubia', '2025', 'Rp19.999.000', 'Snapdragon 8 Elite Gen 5', '4.208.874', '16', 'LPDDR5X / LPDDR5T', '512', 'UFS 4.1', '50', 'OIS', 'OmniVision OV50 Light Hunter 800 CMOS', '50', '2', '16', 'AMOLED', '144', '1800', 'Corning Gorilla Glass', '7500', '80', '80', 0, 0, 'IP68', 'OS saat rilis: Android 16, Redmagic OS 11; Jaminan update OS hingga 3 kali, update keamanan 5 tahun; Shoulder Trigger Buttons 520Hz, Cooling Fan, Stereo Speaker, Hi-Res Audio, Infrared, DisplayPort, RedCore R4 gaming chip, 4D vibration, Face Recognition', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(274, '274', 'Oppo Reno15 8GB | 256GB', 'Oppo', '2026', 'Rp7.699.000', 'Snapdragon 7 Gen 4', '1.600.000', '8', 'LPDDR5X', '256', 'UFS 3.1', '50', 'OIS', '-', '50', '8', '50', 'AMOLED', '120', '600 (typical), 1200 (HBM), 1800 (Carisinyal)', 'Corning Gorilla Glass 7i', '6500', '80', '0', 0, 0, 'IP69', 'OS saat rilis: Android 16, ColorOS 16; Stereo speaker; Infrared; Facial Recognition; AI HyperBoost 2.0; Game Capture; Jaminan performa hingga 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(275, '275', 'Oppo Reno15 12GB | 256GB', 'Oppo', '2026', 'Rp8.299.000', 'Snapdragon 7 Gen 4', '1.600.000', '12', 'LPDDR5X', '256', 'UFS 3.1', '50', 'OIS', '-', '50', '8', '50', 'AMOLED', '120', '600 (typical), 1200 (HBM), 1800 (Carisinyal)', 'Corning Gorilla Glass 7i', '6500', '80', '0', 0, 0, 'IP69', 'OS saat rilis: Android 16, ColorOS 16; Stereo speaker; Infrared; Facial Recognition; AI HyperBoost 2.0; Game Capture; Jaminan performa hingga 6 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(276, '276', 'Poco C85 6GB | 128GB', 'Xiaomi', '2025', 'Rp1.499.000', 'Mediatek Helio G81 Ultra', '240.000', '6', 'LPDDR4X', '128', 'eMMC 5.1', '50', '-', '-', '0', '0', '8', 'IPS', '120', '810', 'Corning Gorilla Glass 3', '6000', '33', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, HyperOS 2; Jaminan update OS 4 kali, keamanan 6 tahun; Wet Touch Display 2.0; Sertifikasi TÜV Rheinland (Low Blue Light, Flicker Free, Circadian Friendly); Reverse charging 10W; Fingerprint samping; Jack 3.5mm; FM Radio; Volume Boost 200%', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(277, '277', 'Poco C85 8GB | 256GB', 'Xiaomi', '2025', 'Rp1.899.000', 'Mediatek Helio G81 Ultra', '240.000', '8', 'LPDDR4X', '128', 'eMMC 5.1', '50', '-', '-', '0', '0', '8', 'IPS', '120', '810', 'Corning Gorilla Glass 3', '6000', '33', '0', 0, 0, 'IP64', 'OS saat rilis: Android 15, HyperOS 2; Jaminan update OS 4 kali, keamanan 6 tahun; Wet Touch Display 2.0; Sertifikasi TÜV Rheinland (Low Blue Light, Flicker Free, Circadian Friendly); Reverse charging 10W; Fingerprint samping; Jack 3.5mm; FM Radio; Volume Boost 200%', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(278, '278', 'Oppo Reno15 F 8GB | 128GB', 'Oppo', '2026', 'Rp5.499.000', 'Snapdragon 6 Gen 1', '510.000', '8', 'LPDDR4X', '128', 'UFS 3.1', '50', 'OIS', '-', '8', '2', '50', 'AMOLED', '120', '600 (standar), 1400 (HBM)', 'Corning Gorilla Glass', '7000', '80', '46155', 0, 0, 'IP69', 'OS saat rilis: Android 16, ColorOS 16; Stereo speaker; Facial Recognition; AI HyperBoost 2.0; Game Capture; Aura Glow (Afterglow Pink); Aerospace-grade Aluminum Frame; Jaminan performa hingga 5 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(279, '279', 'Oppo Reno15 F 8GB | 256GB', 'Oppo', '2026', 'Rp5.999.000', 'Snapdragon 6 Gen 1', '510.000', '8', 'LPDDR4X', '256', 'UFS 3.1', '50', 'OIS', '-', '8', '2', '50', 'AMOLED', '120', '600 (standar), 1400 (HBM)', 'Corning Gorilla Glass', '7000', '80', '46155', 0, 0, 'IP69', 'OS saat rilis: Android 16, ColorOS 16; Stereo speaker; Facial Recognition; AI HyperBoost 2.0; Game Capture; Aura Glow (Afterglow Pink); Aerospace-grade Aluminum Frame; Jaminan performa hingga 5 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(280, '280', 'Oppo Reno15 F 12GB | 256GB', 'Oppo', '2026', 'Rp6.499.000', 'Snapdragon 6 Gen 1', '510.000', '12', 'LPDDR4X', '256', 'UFS 3.1', '50', 'OIS', '-', '8', '2', '50', 'AMOLED', '120', '600 (standar), 1400 (HBM)', 'Corning Gorilla Glass', '7000', '80', '46155', 0, 0, 'IP69', 'OS saat rilis: Android 16, ColorOS 16; Stereo speaker; Facial Recognition; AI HyperBoost 2.0; Game Capture; Aura Glow (Afterglow Pink); Aerospace-grade Aluminum Frame; Jaminan performa hingga 5 tahun', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(281, '281', 'Infinix GT 20 Pro 8GB | 128GB', 'Infinix', '2024', 'Rp3.600.000', 'MediaTek Dimensity 8200 Ultimate', '900.000', '8', 'LPDDR5X', '256', 'UFS 3.1', '108', 'OIS', 'Samsung ISOCELL HM6', '2', '2', '32', 'AMOLED', '144', '1300', '-', '5000', '45', '0', 0, 0, 'IP54', 'OS saat rilis: Android 14, XOS 14; Jaminan update OS hingga 2 kali dan keamanan 3 tahun; Speaker stereo JBL; IR Blaster; Lampu RGB Mecha Loop; Radio FM', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(282, '282', 'Infinix GT 20 Pro 12GB | 128GB', 'Infinix', '2024', 'Rp4.000.000', 'MediaTek Dimensity 8200 Ultimate', '900.000', '12', 'LPDDR5X', '256', 'UFS 3.1', '108', 'OIS', 'Samsung ISOCELL HM6', '2', '2', '32', 'AMOLED', '144', '1300', '-', '5000', '45', '0', 0, 0, 'IP54', 'OS saat rilis: Android 14, XOS 14; Jaminan update OS hingga 2 kali dan keamanan 3 tahun; Speaker stereo JBL; IR Blaster; Lampu RGB Mecha Loop; Radio FM', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(283, '283', 'vivo Y21d 4GB | 128GB', 'Vivo', '2025', 'Rp2.099.000', 'Unisoc T7225', '350.000', '4', 'LPDDR4X', '128', 'eMMC 5.1', '50', '-', 'CMOS', '0', '0', '5', 'IPS', '90', '1000', 'Guardian Glass', '6500', '44', '0', 0, 0, 'IP69', 'OS saat rilis: Android 15, Funtouch OS 15; MIL-STD-810H; SGS Gold Five-Star; Extended RAM hingga 8GB; FM Radio; Stereo speaker Hi-Res Audio; Jaminan kesehatan baterai hingga 5 tahun; Warna: Ungu Lavender, Hitam Angkasa, Coral Red, Jade Green', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(284, '284', 'vivo Y21d 6GB | 128GB', 'Vivo', '2025', 'Rp2.399.000', 'Unisoc T7225', '350.000', '6', 'LPDDR4X', '128', 'eMMC 5.1', '50', '-', 'CMOS', '0', '0', '5', 'IPS', '90', '1000', 'Guardian Glass', '6500', '44', '0', 0, 0, 'IP69', 'OS saat rilis: Android 15, Funtouch OS 15; MIL-STD-810H; SGS Gold Five-Star; Extended RAM hingga 8GB; FM Radio; Stereo speaker Hi-Res Audio; Jaminan kesehatan baterai hingga 5 tahun; Warna: Ungu Lavender, Hitam Angkasa, Coral Red, Jade Green', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(285, '285', 'vivo Y21d 6GB | 256GB', 'Vivo', '2025', 'Rp2.599.000', 'Unisoc T7225', '350.000', '6', 'LPDDR4X', '256', 'eMMC 5.1', '50', '-', 'CMOS', '0', '0', '5', 'IPS', '90', '1000', 'Guardian Glass', '6500', '44', '0', 0, 0, 'IP69', 'OS saat rilis: Android 15, Funtouch OS 15; MIL-STD-810H; SGS Gold Five-Star; Extended RAM hingga 8GB; FM Radio; Stereo speaker Hi-Res Audio; Jaminan kesehatan baterai hingga 5 tahun; Warna: Ungu Lavender, Hitam Angkasa, Coral Red, Jade Green', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(286, '286', 'vivo Y21d 8GB | 128GB', 'Vivo', '2025', 'Rp2.599.000', 'Unisoc T7225', '350.000', '8', 'LPDDR4X', '128', 'eMMC 5.1', '50', '-', 'CMOS', '0', '0', '5', 'IPS', '90', '1000', 'Guardian Glass', '6500', '44', '0', 0, 0, 'IP69', 'OS saat rilis: Android 15, Funtouch OS 15; MIL-STD-810H; SGS Gold Five-Star; Extended RAM hingga 8GB; FM Radio; Stereo speaker Hi-Res Audio; Jaminan kesehatan baterai hingga 5 tahun; Warna: Ungu Lavender, Hitam Angkasa, Coral Red, Jade Green', '2026-01-18 05:37:42', '2026-01-18 05:37:42'),
(287, '287', 'Oppo Reno11', 'Oppo', '2024', 'Rp. 4099000', 'MediaTek Dimensity 7050', '623.559', '8', 'LPDDR4x', '256', 'UFS 2.2', '50', 'OIS', '-', '8', '32', '32', 'OLED', '120', '950', 'AGC DT-Star2', '5000', '67', '0', 0, 0, 'IP54', 'OS saat rilis: Android 14, ColorOS 14; speaker stereo; Infrared port; Sensor: Fingerprint (optik, di bawah permukaan layar), Pengenalan Wajah, akselerometer, cahaya, giroskop, proksimitas, kompas, gravitasi, penghitung langkah; Jack 3.5mm: Tidak Ada; Audio resolusi tinggi 24-bit/192kHz; Kamera depan dengan autofokus; Dual SIM (Slot Khusus); Video (Kamera Utama): 4K@30fps, 1080p@30/60fps, gyro-EIS; Video (Kamera Depan): 4K@30fps, 1080p@30fps, gyro-EIS; Wi-Fi 6, Bluetooth 5.3; GPS, GLONASS, BDS, Galileo, QZSS.', '2026-01-18 05:37:42', '2026-01-18 05:37:42');

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
(4, '2024_08_03_134313_create_pelanggarans_table', 1),
(5, '2024_09_21_005435_create_products_table', 1),
(6, '2024_09_21_012555_create_trollings_table', 1),
(7, '2024_09_26_062232_create_points_table', 1),
(8, '2024_10_07_053932_create_datawbps_table', 1),
(9, '2024_10_13_122340_create_penggeledahans_table', 1),
(10, '2025_03_18_173805_create_disposisis_table', 1),
(15, '2026_01_18_105204_create_hps_table', 2);

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
-- Table structure for table `pelanggarans`
--

CREATE TABLE `pelanggarans` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggeledahans`
--

CREATE TABLE `penggeledahans` (
  `id` bigint UNSIGNED NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rupam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_akhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sajam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `narkoba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_razia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelanggaran_id` bigint UNSIGNED NOT NULL,
  `rupam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('erENeVtJN61cqaKJNU8LMKauvxtZHBeOUkVdDNJV', 199408192017121004, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVWJEb2U1d0d6cndmZ0tBZFp0UXVNTEdRSUw3MWg0dlZPMzZVdEdPSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3Qva3BscC9wdWJsaWMvZ2VuZXJhdGUtcGRmLzgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7czoxODoiMTk5NDA4MTkyMDE3MTIxMDA0Ijt9', 1743927603),
('HCGKgDeO26EygqP1m9WtGiLuyo3fZgObm0eR6eui', 199408192017121004, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY2xXQ1ZXVHd4N2dDcWtIOW55dVBoQlBNaTBkNzh0MnZNNlc1U3V3RyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9zaW1wbGUudGVzdC9ocCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtzOjE4OiIxOTk0MDgxOTIwMTcxMjEwMDQiO30=', 1768714662),
('LZRqDRbxjrbVtC3KR0Q0roU17sTHBYuhUnGgchfB', 199408192017121004, '192.168.0.102', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMnNiQTVjTU81UzQ1NjhrN3l6QU5WZFZDWlMzTUZFcXdNMmNkcWlnbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly8xOTIuMTY4LjAuMTEzL2twbHAvcHVibGljL2dlbmVyYXRlLXBkZi82Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO3M6MTg6IjE5OTQwODE5MjAxNzEyMTAwNCI7fQ==', 1743926247);

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
-- Indexes for table `datawbps`
--
ALTER TABLE `datawbps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisis`
--
ALTER TABLE `disposisis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hps`
--
ALTER TABLE `hps`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pelanggarans`
--
ALTER TABLE `pelanggarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggeledahans`
--
ALTER TABLE `penggeledahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `points_pelanggaran_id_foreign` (`pelanggaran_id`);

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
-- AUTO_INCREMENT for table `datawbps`
--
ALTER TABLE `datawbps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disposisis`
--
ALTER TABLE `disposisis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hps`
--
ALTER TABLE `hps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pelanggarans`
--
ALTER TABLE `pelanggarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penggeledahans`
--
ALTER TABLE `penggeledahans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trollings`
--
ALTER TABLE `trollings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_pelanggaran_id_foreign` FOREIGN KEY (`pelanggaran_id`) REFERENCES `pelanggarans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

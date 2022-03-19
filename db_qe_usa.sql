-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 06:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_qe_usa`
--

-- --------------------------------------------------------

--
-- Table structure for table `consignees`
--

CREATE TABLE `consignees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consignee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issued_bies`
--

CREATE TABLE `issued_bies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issued_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issued_bies`
--

INSERT INTO `issued_bies` (`id`, `issued_by`, `created_at`, `updated_at`) VALUES
(1, 'is baru', '2022-03-16 08:38:04', '2022-03-16 08:38:04'),
(2, 'demek', '2022-03-16 08:42:04', '2022-03-16 08:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `issued_bys`
--

CREATE TABLE `issued_bys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issued_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(5, '2022_03_02_040825_create_insurance_telkoms_table', 2),
(6, '2022_03_02_045020_add_insurance_st_to_insurance_telkom', 3),
(7, '2022_03_03_234841_create_setting_products_table', 4),
(8, '2022_03_04_022954_create_setting_diskons_table', 5),
(9, '2022_03_04_031222_create_setting_premis_table', 6),
(35, '2014_10_12_000000_create_users_table', 7),
(36, '2014_10_12_100000_create_password_resets_table', 7),
(37, '2019_08_19_000000_create_failed_jobs_table', 7),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 7),
(39, '2022_03_15_164616_create_quality_expresses_table', 7),
(40, '2022_03_16_124434_create_shippers_table', 7),
(41, '2022_03_16_124541_create_consignees_table', 7),
(42, '2022_03_16_124643_create_notify_parties_table', 7),
(43, '2022_03_16_124728_create_issued_bies_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasis`
--

CREATE TABLE `notifikasis` (
  `id` bigint(20) NOT NULL,
  `jenis_notif` enum('submit_asuransi','pembayaran') NOT NULL,
  `company` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `isi_notif` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasis`
--

INSERT INTO `notifikasis` (`id`, `jenis_notif`, `company`, `nama_lengkap`, `isi_notif`, `created_at`, `updated_at`) VALUES
(3, 'submit_asuransi', 'Telkomsel', 'lathiif aji santhosho', 'Telah melakukan submit pada form asuransi.', '2022-03-11 08:58:18', '2022-03-11 08:58:18'),
(4, 'submit_asuransi', 'Pelita', 'mitrabaru', 'Telah melakukan submit pada form asuransi.', '2022-03-14 09:22:04', '2022-03-14 09:22:04'),
(5, 'submit_asuransi', 'Pelita', 'lathiif aji santhosho', 'Telah melakukan submit pada form asuransi.', '2022-03-15 00:58:27', '2022-03-15 00:58:27'),
(6, 'submit_asuransi', 'Pelita', 'lathiif aji santhosho', 'Telah melakukan submit pada form asuransi.', '2022-03-15 01:01:37', '2022-03-15 01:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `notify_parties`
--

CREATE TABLE `notify_parties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notify_party` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notify_parties`
--

INSERT INTO `notify_parties` (`id`, `notify_party`, `created_at`, `updated_at`) VALUES
(1, 'notify_tes', '2022-03-16 08:27:29', '2022-03-16 08:27:29'),
(2, 'is', '2022-03-16 08:35:46', '2022-03-16 08:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `notify_partys`
--

CREATE TABLE `notify_partys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notify_party` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quality_expresses`
--

CREATE TABLE `quality_expresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper_exporter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `export_references` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_of_lading_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fmc_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_original_signed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_delivery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifi_party` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `also_notify` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vessel_voy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_of_loading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pier_or_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_move` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_of_discharge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_of_delivery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `container_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seal_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_pkgs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind_of_pkgs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_gross_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_measur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_no_pkgs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freight_and_charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repaid_collect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_and_date_issue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `as_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippers`
--

INSERT INTO `shippers` (`id`, `shipper`, `created_at`, `updated_at`) VALUES
(1, 'shp 1', '2022-03-16 08:31:11', '2022-03-16 08:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consignees`
--
ALTER TABLE `consignees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `issued_bies`
--
ALTER TABLE `issued_bies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_bys`
--
ALTER TABLE `issued_bys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_parties`
--
ALTER TABLE `notify_parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_partys`
--
ALTER TABLE `notify_partys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quality_expresses`
--
ALTER TABLE `quality_expresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `consignees`
--
ALTER TABLE `consignees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issued_bies`
--
ALTER TABLE `issued_bies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `issued_bys`
--
ALTER TABLE `issued_bys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `notifikasis`
--
ALTER TABLE `notifikasis`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notify_parties`
--
ALTER TABLE `notify_parties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notify_partys`
--
ALTER TABLE `notify_partys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quality_expresses`
--
ALTER TABLE `quality_expresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippers`
--
ALTER TABLE `shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

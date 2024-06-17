-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 02:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_01_131855_create_user_table', 1);

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
-- Table structure for table `tbl_adopsi`
--

CREATE TABLE `tbl_adopsi` (
  `id_adopsi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_hewan` int(11) DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_adopsi`
--

INSERT INTO `tbl_adopsi` (`id_adopsi`, `id_user`, `id_hewan`, `alasan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'test', '2022-06-05 03:01:33', '2022-06-05 03:01:33'),
(2, 1, 1, 'test', '2022-06-05 03:02:49', '2022-06-05 03:02:49'),
(3, 1, 1, 'inginnbjb jnkj', '2022-06-05 03:21:10', '2022-06-05 03:21:10'),
(4, 1, 1, 'karna aku suka', '2022-06-06 15:53:49', '2022-06-06 15:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donasi`
--

CREATE TABLE `tbl_donasi` (
  `id_donasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nominal` int(11) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_donasi`
--

INSERT INTO `tbl_donasi` (`id_donasi`, `id_user`, `nominal`, `file_upload`, `created_at`, `updated_at`) VALUES
(1, 1, 100000, '1654136388.Desktop - 9.jpg', '2022-06-02 02:19:48', '2022-06-02 02:19:48'),
(2, 1, 100000, '1654136572.Desktop - 9.jpg', '2022-06-02 02:22:52', '2022-06-02 02:22:52'),
(3, 1, 10000, '1654137253.Desktop - 9.jpg', '2022-06-02 02:34:13', '2022-06-02 02:34:13'),
(4, 1, 200000, '1654399317.Desktop - 9.jpg', '2022-06-05 03:21:57', '2022-06-05 03:21:57'),
(5, 1, 2000000, '1654399377.lalala.jpeg', '2022-06-05 03:22:57', '2022-06-05 03:22:57'),
(6, 1, 200000, '1654530501.lalala.jpeg', '2022-06-06 15:48:21', '2022-06-06 15:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hewan`
--

CREATE TABLE `tbl_hewan` (
  `id_hewan` int(10) NOT NULL,
  `nama_hewan` varchar(100) NOT NULL,
  `jenis_hewan` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `usia` varchar(30) NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hewan`
--

INSERT INTO `tbl_hewan` (`id_hewan`, `nama_hewan`, `jenis_hewan`, `jenis_kelamin`, `usia`, `lokasi`) VALUES
(1, 'Mama', 'Kucing', 'Betina', '1 Tahun', 'Jakarta Timur'),
(2, 'Lucy', 'Kucing', 'Betina', '8 Bulan', 'Jakarta Selatan'),
(3, 'Vivi', 'Anjing', 'Jantan', '4 Tahun', 'Bekasi'),
(4, 'Temmy', 'Kucing', 'Betina', '11 Bulan', 'Jakarta Selatan'),
(5, 'Kuma', 'Anjing', 'Jantan', '4 Tahun', 'Bogor'),
(6, 'Ghia', 'Kucing', 'Betina', '5 Bulan', 'Depok'),
(7, 'Bobby', 'Anjing', 'Jantan', '2 Tahun', 'Jakarta Barat'),
(8, 'Baha', 'Kucing', 'Jantan', '8 Bulan', 'Depok'),
(9, 'Bibu', 'Kucing', 'Jantan', '1 Tahun', 'Jakarta Utara'),
(10, 'Belang', 'Kucing', 'Betina', '10 Bulan', 'Jakarta Selatan'),
(11, 'Zero', 'Anjing', 'Jantan', '1 Tahun', 'Bogor'),
(12, 'Ayi', 'Kucing', 'Betina', '10 Bulan', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `profesi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `no_telepon`, `alamat`, `kelurahan`, `kecamatan`, `kode_pos`, `profesi`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', NULL, '$2y$10$2CxOgdmADPAMZkbG/T67sO3vtKaWPINdjJjIQP//AiamO3P2TD4.m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 18:40:50', '2022-06-01 18:40:50'),
(2, 'ppppp', 'pppp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ppppp', 'poop@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'mmm', 'mmm@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'mmm', 'mmooo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'oioioi', 'kkkk@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'oiollioi', 'kknunuk@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'asd', 'aswk@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'ooo', 'ooo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'salsabila', 'salsabila@gamil.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'salsa', 'salsabilafaihap@gmail.com', NULL, NULL, '081317776305', 'lembah griya', 'cipayung jaya', 'cipayung', 12345, 'mhs', NULL, NULL, NULL),
(17, 'salsabila', 'salsa@gmail.com', NULL, NULL, '081317776305', 'lembah griya indah', 'cipayung jaya', 'cipayung', 12345, 'mhs', NULL, NULL, NULL),
(18, 'salsa', 'hijklm@gmail.com', NULL, NULL, '081317776305', 'xxxxxx', 'abc', 'efew', 67890, 'programmer', NULL, NULL, NULL),
(19, 'Widya Arum Amalia', 'qw@gmial.com', NULL, NULL, '081317776305', 'xxxxxx', 'xxx', 'xxx', 67890, 'programmer', NULL, NULL, NULL),
(20, 'salsa', 'asd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'salsa', 'z@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'marella', 'marella@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'selse', 'selse@gmail.com', NULL, NULL, '082242349103', 'lembah griya', 'cipayung jaya', 'cipayung', 12345, 'mhs', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_adopsi`
--
ALTER TABLE `tbl_adopsi`
  ADD PRIMARY KEY (`id_adopsi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_hewan` (`id_hewan`);

--
-- Indexes for table `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_hewan`
--
ALTER TABLE `tbl_hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_adopsi`
--
ALTER TABLE `tbl_adopsi`
  MODIFY `id_adopsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_hewan`
--
ALTER TABLE `tbl_hewan`
  MODIFY `id_hewan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

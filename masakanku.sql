-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 09:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masakanku`
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_09_09_131940_create_sessions_table', 1),
(7, '2020_09_10_005413_create_recipes_table', 1);

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
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredient` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `title`, `duration`, `category`, `picture`, `ingredient`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'omlete mie', '15', 'Makanan Sedang', 'webomlet.jpg', '1 bks mie instan (rasa apa saja)\n2 btr telur\n secukupnya Garam dan penyedap', '1. Rebus mie instan seperti biasa... angkat beri bumbunya dlm kemasan (kuahnya jgn dipakai)\n\n2. Masukan telurnya aduk2 sampai rata\n\n3. Icip rasa bs ditambah garam atau penyedap sesuai selera\n\n4. Goreng dgn api sedang sampai kecoklatan (bolak balik)\n\n5. Angkat siap disajikan\n\n6. Selamat mencoba', '2020-09-26 01:26:32', '2020-09-26 01:26:32'),
(2, 1, 'Es Buah', '20', 'Dessert', 'es buah.jpg', 'Bahan Buah:\n2 potong Semangka.\n2 potong Melon.\n2 buah strawberry\n\nBahan Air Es:\n2 Gelas Air Mineral (500ml).\n5 Sdm Susu Kental Manis.\n5 Sdm Sirup Cocopandan.\nSecukupnya Es Batu.\n', '1. Potong semua bahan buah sesuai selera. Boleh dipotong agak kecil ataupun agak besar. Sisihkan.\n2. Siapkan wadah, masukan semua bahan Air Es, kecuali es batu. Aduk sampai rata menggunakan sendok, hingga warnanya berubah merah jambu, lalu sisihkan.\n3. Siapkan gelas, lalu masukkan potongan buah secukupnya. Tambahkan bahan air es secukupnya, lalu tambahkan es batu.\n4. Es buah segar siap disajikan.\n', '2020-10-25 19:26:35', '2020-10-25 19:26:35'),
(3, 1, 'Ayam Bakar', '30', 'Makanan Berat', 'ayam bakar.jpg', '1 kg Ayam\nBumbu ungkep :\n10 Bawang putih\n1 sdt ketumbar\n1 sdt merica butir\n5 butir Kemiri\nLengkuas\nBeberapa ruas kunyit\n3 cm jahe (digeprek)\nGaram\n4 lembar daun salam\n\nBumbu olesan :\n4 siung bawang putih\n1 sdt ketumbar\n20 cabai rawit (sesuaikan dgn selera)\nKecap manis\n1 buah jeruk limau/nipis\nMinyak', '1. Ulek semua bumbu ungkep lalu tumis hingga harum, beri air, masukkan daun salam dan ayam. Ungkep kurang lebih 1 jam agar daging empuk. Angkat dan lalu buat beberapa belahan agar ketika dibakar, bumbu meresap sampai ke dalam\n2. Ulek semua bumbu olesan, tuang kecap, beri perasan air jeruk nipis dan tambahkan minyak\n3. Bakar dan olesi dgn bumbu olesan (saya sih pakainya banyak, supaya rasanya meresap)\n4. Selesai! Sajikan dgn sambal dan nikmati selagi hangat \n', '2020-10-25 19:30:15', '2020-10-25 19:30:15'),
(4, 1, 'Salad Sayur', '15', 'Makanan Sedang', 'salad sayur.jpg', '1 Buah Tomat\n1 Buah wortel\n1 Buah Timun\n10 Lembar Selada air (lettuce)\n1/2 bawang bombay\n1/8 buah kol putih / kubis\n\nbahan dressing/ thousan island :\n100 gr mayonaise (1 sachet maestro mayonaise)\n1/2 sdt garam\n1 sdt gula\n1 sdm saus tomat/saus sambal\n1/2 sdt merica bubuk\n1 sdm air jeruk nipis\n', '1. Cuci bersih semua sayuran. Untuk kol/kubis dan selada, cuci sampai tiga kali ya. Untuk memastikan kotoran dan bahan kimia yang menempel bisa hilang.\n2. Sobek-sobek selada seukuran yang diinginkan. Potong-potong kubis/kol tipis-tipis. Lebih tipis dan lebih kecil-kecil, lebih enak...\n3. Iris timun dan tomat kotak-kotak. Untuk wortel, diparut kasar.\n4. Untuk dressingnya, saus thousan island, campurkan semua bahan dressingnya.\n5. Dan langkah terakhir adalah campurkan semua sayuran dan sausnya. Sisa bahannya bisa ditaruh di wadah tertutup, dan masukkan di dalam kulkas. Sayuran dan sausnya jangan dicampurkan ya agar tahan lama\n', '2020-10-25 19:33:58', '2020-10-25 19:33:58'),
(5, 3, 'nasi goreng', '15', 'Makanan Berat', 'nasi goreng.jpg', '1 piring nasi\n5 buah cabe rawit, iris\n3 buah bawang merah, iris\n2 siung bawang putih, iris\n1 btr telur\n1 sdm kecap manis\n1 sdm kecap asin\n1/2 sdt gula pasir\n1/2 sdt merica\nGaram secukupnya', '1. Kocok telur kemudian beri sedikit garam, Panaskan minyak di wajan, Masukkan telur, bikin orak arik, lalu sisihkan\n2. Dengan sisa minyak di wajan, tumis bawang merah, bawang putih dan cabe hingga harum. Masukkan nasi dan telur orak arik. Beri kecap2an, garam, gula dan merica. Kemudian aduk rata\n3. Masak sambil terus diaduk hingga nasi agak kering. Koreksi rasa. Angkat. Sajikan nasi goreng dengang telur ceplok dan irisan timun\nnb : jumlah kecap bisa ditambah sesuai selera\n\n', '2020-11-05 20:25:30', '2020-11-05 20:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2F4wBozSzUaGxR4ZZzFsTiIe17qcCF7CXqjPdsjJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVktJNzdkcDZaSzNpVDM3UnRkVEF6VmRrMmJGejU4ZjF4d0I4VDM1dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1613659834),
('2LTyKSVju0miVz0qNkHGZ8UKt0IWXeVloPVwaQQK', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZ1pac1plTWxRSGdTQzZzYnVwVjI1MVFyVVNOZUNsanlHUWI2eHY0NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQxdmlWVk9BcUhVM3dBRXQ1R2JHLzdPN0RUeER0YkpHS2UuTzBJYU9RZkV2YVphdndYbTk4NiI7fQ==', 1613191099),
('3Iu90fj6t7tk6KXh1YjQmX9UqtcNzyofA69RSO74', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTdQSVVuUWRTZ3d1MDJiQllTZDFGU3lKUnNEcnh2a09ySUEyenBnSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1613659835),
('7NMnCMQvVJ8DrGTHGwZFQIV9sjt2YehLKIz0SkZ1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidmdlZEE1Qkw1aHR5UzlBaTF2b3VjcnB1ME5CdUZDZ1VBQzlPZUZ2cSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1611978654),
('CmULddd8cDbdGxdly9YvdpELPgSBOn1Yk10jBDZW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGl3QXFFN1pwU2NFMWpMNDl6VEVZWVJYYVVLbjd3MGQwOWFXZVhRMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1613659833),
('oEOtxrSJxe5ZBaFW6RiVheFL1aJleBvxjJtfbKdD', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQVdqV1BVb0xLc1pwajJGemxlVTQ2VGdkVFlyTGNTUVpMYllZVUJiZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9NYWthbmFuJTIwU2VkYW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFpTbUUyRmpDTHVrYm5zQy9lRTdpLnVKVTVCMXI5SWluQU9ybHpZWFlMS0wvdWNDOGJNU3hDIjt9', 1613114545),
('rB26IHxmCqlK9ugA23SUnirE0ZjOVivh9XFu2Mvr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHNpTU1XSDdTYjdLTkFGUm1tRVh5MlQ4RUltaDFhU1JLeTlpazdtTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1613659930),
('xkAKFeUCTHbsIpYMUmXkeEDNriI9jGuaEAE90SVF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYm9qYlFOWlRxaTEybHU1Q09TdzhmS21rVnpISmNLSE8xZEQ3Z1hDMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1613659832),
('YCfzMc3cWYxe9AtuaRSnLKTPgE9FEHbB9ukeoK18', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFZnOEZLZVA5SFJ1V3IxSHJXbGtqVUdiWTBKOGpsMTViVWlrcDhPZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1613659831);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'dea', 'admin@admin.com', NULL, '$2y$10$ZSmE2FjCLukbnsC/eE7i.uJU5B1r9IinAOrlzYXYLKL/ucC8bMSxC', NULL, NULL, NULL, NULL, NULL, '2020-09-26 01:18:56', '2020-09-26 01:18:56'),
(2, 'deavita', 'deavitaa@gmail.com', NULL, '$2y$10$1viVVOAqHU3wAEt5GbG/7O7DTxDtbJGKe.O0IaOQfEvaZavwXm986', NULL, NULL, NULL, NULL, NULL, '2020-11-05 06:53:37', '2020-11-05 06:53:37'),
(3, 'caryta', 'caca@gmail.com', NULL, '$2y$10$BR6YKBwVQmLhUuQrq/fKDuOYy23J9/eT9i6eRZpYNlYzwm0sdMxLa', NULL, NULL, NULL, NULL, NULL, '2020-11-05 20:22:38', '2020-11-05 20:22:38');

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
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

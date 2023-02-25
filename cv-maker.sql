-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 02:35 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv-maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv_infos`
--

CREATE TABLE `cv_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `html` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `js` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jquery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `react` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `php` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aws` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_learning` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_word` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_excel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adobe_photoshop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adobe_xd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_you` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cv_more_infos`
--

CREATE TABLE `cv_more_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvinfo_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `exp_year1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_exp1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_year2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_exp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_year3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_exp3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_year4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_exp4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_year5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_exp5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_year1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst_name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_edu1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_year2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst_name2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_edu2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_year3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst_name3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_edu3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_year4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst_name4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_edu4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_year5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst_name5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_edu5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(5, '2023_01_28_132836_create_cv_infos_table', 2),
(6, '2023_01_28_152444_create_cv_more_infos_table', 3);

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
  `expires_at` timestamp NULL DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sumon', 'admin@gmail.com', NULL, '$2y$10$GMZ5QVmO2FO9PixSbLYLGeEVnMz62SqWiBsRGpMwWp/xdpjCQrcKG', NULL, '2023-01-26 07:07:07', '2023-01-26 07:07:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv_infos`
--
ALTER TABLE `cv_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_more_infos`
--
ALTER TABLE `cv_more_infos`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `cv_infos`
--
ALTER TABLE `cv_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cv_more_infos`
--
ALTER TABLE `cv_more_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

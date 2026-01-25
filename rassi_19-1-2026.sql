-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2026 at 11:59 AM
-- Server version: 8.0.41
-- PHP Version: 8.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rassi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_description` longtext COLLATE utf8mb4_unicode_ci,
  `ar_description` longtext COLLATE utf8mb4_unicode_ci,
  `en_ourstory` longtext COLLATE utf8mb4_unicode_ci,
  `ar_ourstory` longtext COLLATE utf8mb4_unicode_ci,
  `en_safety` longtext COLLATE utf8mb4_unicode_ci,
  `ar_safety` longtext COLLATE utf8mb4_unicode_ci,
  `en_transparency` longtext COLLATE utf8mb4_unicode_ci,
  `ar_transparency` longtext COLLATE utf8mb4_unicode_ci,
  `en_innovation` longtext COLLATE utf8mb4_unicode_ci,
  `ar_innovation` longtext COLLATE utf8mb4_unicode_ci,
  `en_credibility` longtext COLLATE utf8mb4_unicode_ci,
  `ar_credibility` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `en_description`, `ar_description`, `en_ourstory`, `ar_ourstory`, `en_safety`, `ar_safety`, `en_transparency`, `ar_transparency`, `en_innovation`, `ar_innovation`, `en_credibility`, `ar_credibility`, `created_at`, `updated_at`) VALUES
(1, 'about-us/01KF0GS45HA95VVY9Z2STGKP10.jpg', '<p><span style=\"font-size: 24px;\"><span style=\"color: #f1c40f;\">Our journey</span> to redefine the world of auctions</span><br><span style=\"font-size: 24px;\">The Rassi platform was created to make buying and selling in online auctions easier, safe, transparent and fast.</span></p>', '<h1 class=\"about-hero-title\"><span style=\"color: #f1c40f;\">رحلتنا&nbsp;</span>في إعادة تعريف عالم المزادات</h1>\n<p class=\"about-hero-subtitle mt-3\">منصة راسي وُجدت لتسهّل عليك البيع والشراء في المزادات أونلاين بشكل آمن وشفاف وسريع.</p>', '<p>A paragraph explaining why the platform was created (for example: to provide an alternative to attending traditional auctions, or to increase opportunities for buying and selling online).</p>', '<p>فقرة تحكي ليه المنصة اتعملت (مثلاً: عشان توفر سهولة بدل حضور المزادات التقليدية، أو لزيادة فرص البيع والشراء أونلاين.)</p>', 'We maintain the privacy of your data and transactions.', 'نحافظ على خصوصية بياناتك ومعاملاتك.', 'Every auction is conducted with complete transparency.', 'كل مزاد يتم بوضوح كامل.', 'We facilitate the process with modern technology.', 'نسهل العملية بتكنولوجيا حديثة.', 'We provide a reliable buying and selling environment.', 'نوفر بيئة بيع وشراء موثوقة.', '2026-01-15 07:37:51', '2026-01-15 07:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:2;', 1768815749),
('laravel_cache_da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1768815749;', 1768815749),
('laravel_cache_livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6', 'i:1;', 1768810338),
('laravel_cache_livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6:timer', 'i:1768810338;', 1768810338);

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
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_description` longtext COLLATE utf8mb4_unicode_ci,
  `ar_description` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `image`, `en_description`, `ar_description`, `phone`, `email`, `facebook`, `tiktok`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'contact-us/01KFAT3S0VF1M19PN62S0S5BRJ.jpg', '<p style=\"text-align: center;\"><strong><span style=\"font-size: 24pt; color: #f1c40f;\">Contact us</span></strong></p>\n<p style=\"text-align: center;\"><span style=\"font-size: 16pt;\">Do you have a question or inquiry? We are here to help. Contact us via the form or the following methods...</span></p>', '<h1 class=\"about-hero-title\" style=\"text-align: center;\"><span style=\"color: #f1c40f;\">تواصل معنا</span></h1>\n<p class=\"about-hero-subtitle mt-3\" style=\"text-align: center;\"><span style=\"font-size: 16pt;\">هل لديك سؤال أو استفسار؟ نحن هنا لمساعدتك، تواصل معنا عبر النموذج أو الوسائل التالية..</span></p>', '+20 123 456 789', 'Contact@moralizer.com', 'https://www.facebook.com', 'https://www.tiktok.com', 'https://www.youtube.com', '2026-01-19 07:25:08', '2026-01-19 07:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_messages`
--

CREATE TABLE `contact_us_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us_messages`
--

INSERT INTO `contact_us_messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Youssef Hagag', 'yossifwork179@gmail.com', '+20 123 456 789', 'Test . . .', '2026-01-19 08:39:32', '2026-01-19 08:52:47');

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
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `en_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `en_title`, `ar_title`, `en_description`, `ar_description`, `video`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to your secure platform for online auctions', 'أهلا بك في منصتك الآمنة للمزادات الإلكترونيه', '<h3>Your first platform for online auctions, with a safe and easy experience. Participate in live auctions, pay a refundable deposit with complete transparency, and enjoy multiple payment options to ensure a convenient process from start to finish.</h3>', '<h3>منصتك الأولى للمزادات الإلكترونية، بتجربة آمنة وسهلة شارك في المزادات المباشرة، ادفع تأمين مسترجع بكل شفافية، واستمتع بخيارات دفع متعددة لتضمن عملية مريحة من البداية للنهاية.</h3>', 'videos/01KEY9Q5FG03XMKA64VKQKXJD9.mp4', '2026-01-14 10:32:59', '2026-01-14 11:04:31');

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
(4, '2025_09_15_075216_add_account_type_to_users_table', 1),
(5, '2025_09_15_085607_add_phone_to_users_table', 1),
(6, '2026_01_14_105053_create_home_pages_table', 2),
(7, '2026_01_15_085356_create_about_us_table', 3),
(8, '2026_01_15_142729_create_terms_conditions_table', 4),
(9, '2026_01_19_090906_create_contact_us_table', 5),
(11, '2026_01_19_100356_create_contact_us_messages_table', 6);

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
('drsCPh9B8aIjzPsUqRHBVmt3of2WhcFMXeQTNBq4', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoicEJNc3Nvd0tIUzkzdWlhOHdYN3h6UEc4WldWd0NZRjZVSERwcGY5NCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vcmFzc2kudGVzdC9hZG1pbi9jb250YWN0LXVzLW1lc3NhZ2VzIjtzOjU6InJvdXRlIjtzOjUwOiJmaWxhbWVudC5hZG1pbi5yZXNvdXJjZXMuY29udGFjdC11cy1tZXNzYWdlcy5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjQ6ImQ3NGY1M2Y2OGE1N2Y5OWYxNTdiNjhkYmQ2MzU1YzlhMjE3NDY1YWYwNDFiNjE2MmQxNDVhMTJmYTNlOTkxZDIiO3M6NjoidGFibGVzIjthOjI6e3M6NDA6ImFiZWVmNzNmMGU5MjRlNWQyMDY0MzhlNjA5MTczNDExX2NvbHVtbnMiO2E6Nzp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjg6ImVuX3RpdGxlIjtzOjU6ImxhYmVsIjtzOjEwOiJUaXRsZSAoRU4pIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MDt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjg6ImFyX3RpdGxlIjtzOjU6ImxhYmVsIjtzOjEwOiJUaXRsZSAoQVIpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MDt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJlbl9jb250ZW50IjtzOjU6ImxhYmVsIjtzOjEyOiJDb250ZW50IChFTikiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImFyX2NvbnRlbnQiO3M6NToibGFiZWwiO3M6MTI6IkNvbnRlbnQgKEFSKSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJpc19hY3RpdmUiO3M6NToibGFiZWwiO3M6OToiSXMgYWN0aXZlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MDt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJDcmVhdGVkIEF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MDt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIEF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9fXM6NDA6IjY0N2RhZGZhOGVlYzhhZDgwMzZiZjdjOTUyOWQ3NWNmX2NvbHVtbnMiO2E6Njp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6Im5hbWUiO3M6NToibGFiZWwiO3M6NDoiTmFtZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjA7fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJlbWFpbCI7czo1OiJsYWJlbCI7czo1OiJFbWFpbCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjA7fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJwaG9uZSI7czo1OiJsYWJlbCI7czo1OiJQaG9uZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjA7fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo3OiJtZXNzYWdlIjtzOjU6ImxhYmVsIjtzOjc6Ik1lc3NhZ2UiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IkNyZWF0ZWQgQXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjowO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgQXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO319fXM6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1768821008);

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` bigint UNSIGNED NOT NULL,
  `en_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `en_title`, `ar_title`, `en_content`, `ar_content`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Acceptance of conditions', 'القبول بالشروط', '<p>By using this website, you acknowledge and accept all the terms and conditions contained herein. If you do not agree to any part of these terms, please cease using the website.</p>', '<div class=\"terms-info text-start mb-4\">\n<p class=\"mt-4\">باستخدامك لهذا الموقع، فإنك تقر بقبول جميع الشروط والأحكام الواردة هنا. إذا كنت لا توافق على أي جزء من هذه الشروط، يُرجى التوقف عن استخدام الموقع.</p>\n</div>', 1, '2026-01-15 12:58:14', '2026-01-15 13:24:54'),
(2, 'Available services', 'الخدمات المتاحة', '<ul>\n<li>The website offers student registration services for specialized nursing programs and provides information about the academy.</li>\n<li>The academy reserves the right to modify or discontinue any service at any time without prior notice.</li>\n</ul>', '<div class=\"terms-info text-start mb-4\">\n<ul class=\"terms-list mt-4\">\n<li>يقدم الموقع خدمات تسجيل الطلاب في برامج التمريض الخاصة وتوفير معلومات حول الأكاديمية.</li>\n<li>تحتفظ الأكاديمية بحق تعديل أو إيقاف أي خدمة في أي وقت دون إشعار مسبق.</li>\n</ul>\n</div>', 1, '2026-01-15 12:59:29', '2026-01-15 13:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'individual',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commercial_register` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `account_type`, `company_name`, `commercial_register`) VALUES
(1, 'Test User', 'test@example.com', NULL, '2026-01-07 11:44:17', '$2y$12$PGx0gJE3QVQ7sZLlZnV18u6uIRTubHvQMfztvK2Chn7avgGRdWc3W', 'S3GHdAzCrZ', '2026-01-07 11:44:17', '2026-01-07 11:44:17', 'individual', NULL, NULL),
(2, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$12$pDExjwEu2mrNwVe0qLZmO.rSNjUZ5Ssst1SE/yz/.SWbwLGqaws3W', NULL, '2026-01-07 12:16:28', '2026-01-07 12:16:28', 'individual', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_messages`
--
ALTER TABLE `contact_us_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us_messages`
--
ALTER TABLE `contact_us_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

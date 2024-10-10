-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Eki 2024, 16:01:55
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `laravel11project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0d23747b9a9eddf7153afdb05c4566d2', 'i:1;', 1728305480),
('0d23747b9a9eddf7153afdb05c4566d2:timer', 'i:1728305480;', 1728305480),
('cf67bcabac0e50426c1f2bd6cf2864e3', 'i:2;', 1728297738),
('cf67bcabac0e50426c1f2bd6cf2864e3:timer', 'i:1728297738;', 1728297738),
('dda3f1cb110db62b221e0fcc61fcb076', 'i:1;', 1728559046),
('dda3f1cb110db62b221e0fcc61fcb076:timer', 'i:1728559046;', 1728559046),
('deneme@deneme.com|127.0.0.1', 'i:2;', 1728297738),
('deneme@deneme.com|127.0.0.1:timer', 'i:1728297738;', 1728297738);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_Id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `parent_Id`, `title`, `keywords`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Math', 'About the math everything', '<p>About the math everything</p>', 'public/images/6qGh3yk83tv2RhFJhWYMlzgGzGZHaejtMI2mRueQ.jpg', 'True', '2024-10-02 02:02:30', '2024-10-02 02:08:04'),
(2, 1, 'Geometry', 'About the geometry everything', 'About the geometry everything', 'public/images/xH7rpXZHhHRTy47z4GGvXxYBRchpNx1QOqlNV9tW.jpg', 'True', '2024-10-02 02:09:38', '2024-10-02 02:09:38'),
(3, 2, 'Analytical Geometry', 'About the analytcial geometry everything', 'About the analytcial geometry everything', 'public/images/UkXO3ND6FyJ9VkyyCtKP4JaP1mmUcDiZRgCkfcb7.jpg', 'True', '2024-10-02 02:10:18', '2024-10-02 02:10:18'),
(4, 0, 'Chemistry', 'About the chemistry everything', 'About the chemistry everything', 'public/images/qUv8NsuJbJEjsi6uOoEEc1ixm8XwxiZ9nSQ5JTBB.jpg', 'True', '2024-10-02 02:12:53', '2024-10-02 02:12:53'),
(5, 4, 'Organic Chemistry', 'About the organic chemistry everything', 'About the organic chemistry everything', 'public/images/XZJIOyum1VPF20U0HEHUjRgbpvCZDAUnzGOy7f11.jpg', 'True', '2024-10-02 02:13:58', '2024-10-02 02:13:58'),
(6, 4, 'Classic Chemistry', 'About the classic chemistry everything', 'About the classic chemistry everything', 'public/images/oY9bSCLzPKcWkgLbIsdoVhAoqMZHyiFEQlKd95cy.jpg', 'True', '2024-10-02 02:15:38', '2024-10-02 02:15:38'),
(7, 0, 'Biology', 'About the biology everything', 'About the biology everything', 'public/images/0kYt34LgAgzUOxUg632epMOZFFTz8yUTNXPXQK8I.jpg', 'True', '2024-10-02 02:16:29', '2024-10-02 02:16:29'),
(8, 7, 'Micro Biology', 'About the micro biology everything', 'About the micro biology everything', 'public/images/ZbzPUSLV5PJg1dzk8XrKp32sO8Z1OTicNAGMMCgK.jpg', 'True', '2024-10-02 02:17:04', '2024-10-02 02:17:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `IP` varchar(20) DEFAULT NULL,
  `rate` int(11) NOT NULL DEFAULT 0,
  `status` varchar(5) NOT NULL DEFAULT 'New',
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`user_id`, `product_id`, `subject`, `review`, `IP`, `rate`, `status`, `id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sample Subject', 'Sample descriptions from here', '127.0.0.1', 3, 'New', 1, '2024-10-02 02:32:16', '2024-10-02 02:32:16'),
(1, 1, 'Sample Subject', 'Sample descriptions from here', '127.0.0.1', 3, 'New', 2, '2024-10-02 02:32:27', '2024-10-02 02:32:27'),
(1, 1, 'Sample Subject', 'Sample descriptions from here', '127.0.0.1', 3, 'New', 3, '2024-10-02 02:32:41', '2024-10-02 02:32:41'),
(1, 2, 'Sample Subject', 'Sample descriptions from here', '127.0.0.1', 3, 'New', 4, '2024-10-02 02:33:12', '2024-10-02 02:33:12'),
(1, 2, 'Sample Subject', 'Sample descriptions from here', '127.0.0.1', 5, 'Old', 5, '2024-10-02 02:33:35', '2024-10-08 02:53:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
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
-- Tablo için tablo yapısı `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `status` varchar(5) DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `product_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'public/images/hrIWaXGzCejXuIlmuXmSikraoWCOCkaqfnBo3OYM.jpg', '2024-10-02 02:25:02', '2024-10-02 02:25:02'),
(2, 1, '2', 'public/images/umwcr7TZYmtIW04kwugH0bn1Wz2O0dOXFAW6de46.jpg', '2024-10-02 02:25:07', '2024-10-02 02:25:07'),
(3, 1, '3', 'public/images/Qyy6okDTZiD2otP1j29L0juVwh9uSINQxxKnSYY6.jpg', '2024-10-02 02:25:13', '2024-10-02 02:25:13'),
(4, 2, '1', 'public/images/mkoI1ox3vL2DGa80s0rxCLLvBGYxV2kxCJi4cbxe.jpg', '2024-10-02 02:25:38', '2024-10-02 02:25:38'),
(5, 2, '2', 'public/images/AuGUMf5cM9UEwoFbftOAxgyjmtPHRVj3oUiHOHjO.jpg', '2024-10-02 02:25:43', '2024-10-02 02:25:43'),
(6, 2, '3', 'public/images/wJ0ZACY1SYnVRIlpXM6L87IuuUaZx74oW520AotD.jpg', '2024-10-02 02:25:49', '2024-10-02 02:25:49'),
(7, 3, '1', 'public/images/AC4QHtabV28ShVZ4dWzmNO8n4v1TozT1W0zx13qD.jpg', '2024-10-02 02:26:03', '2024-10-02 02:26:03'),
(8, 3, '2', 'public/images/l46lYtJ6WcBjZAhD4LkCUogCkBTwcJl3O15RWSVh.jpg', '2024-10-02 02:26:18', '2024-10-02 02:26:18'),
(9, 3, '3', 'public/images/hMGhUnegERtqq8qrORGe2VngJA2kjSr02uQrMRQ8.jpg', '2024-10-02 02:26:24', '2024-10-02 02:26:24'),
(10, 4, '1', 'public/images/b3nLhN7zPgLCVJDMF6oh8fMiJEZE9TAcewWIoV4u.jpg', '2024-10-02 02:26:48', '2024-10-02 02:26:48'),
(11, 4, '2', 'public/images/yy94KhN78tFwEA9sBhSetwlNDCOTUkztygGHBW6M.jpg', '2024-10-02 02:26:54', '2024-10-02 02:26:54'),
(12, 4, '3', 'public/images/amOFtEnQTvw6cjZdI7EaWZ0f6O4BJpXvcbDdayil.jpg', '2024-10-02 02:26:59', '2024-10-02 02:26:59'),
(13, 5, '1', 'public/images/0XnRxEpk0ehVSnMKgUE0e8CioSGm5ooiNGbECAsu.jpg', '2024-10-02 02:27:10', '2024-10-02 02:27:10'),
(14, 5, '2', 'public/images/ou4w3viiKGb38JX7NG4vYpkHKV9iKAISlfb5sLUW.jpg', '2024-10-02 02:27:16', '2024-10-02 02:27:16'),
(15, 5, '3', 'public/images/Kh1l3nC6BBb8XOmMPjFECs5qEdzcUobHidLFV9tN.jpg', '2024-10-02 02:27:24', '2024-10-02 02:27:24'),
(16, 6, '1', 'public/images/2ibpBTQJU3Nu6C0vwCGScNqhSO0RWPZ4lTpeieDs.jpg', '2024-10-02 02:27:36', '2024-10-02 02:27:36'),
(17, 6, '2', 'public/images/Aj2spqsrOwUzVsKCBOjdcDPX9UeiYhaXcoqj5kBO.jpg', '2024-10-02 02:27:43', '2024-10-02 02:27:43'),
(18, 6, '4', 'public/images/BYqPJVflxCzwEGQDx28LQDYAXGN2EqANPopNIVL3.jpg', '2024-10-02 02:27:51', '2024-10-02 02:27:51'),
(19, 7, '1', 'public/images/kBLOOHwnGENhqIa0o5GGeTSJ3jWLzkwGATLRJYWh.jpg', '2024-10-02 02:28:01', '2024-10-02 02:28:01'),
(20, 7, '2', 'public/images/br42EOPrtEPbMgZd7RNC5FNtGkdomfcCh753LzxF.jpg', '2024-10-02 02:28:07', '2024-10-02 02:28:07'),
(21, 7, '4', 'public/images/T2K2vYanFWeyV5QCLgaqD8S4dfs8i7U4gHbeqUjd.jpg', '2024-10-02 02:28:13', '2024-10-02 02:28:13'),
(22, 8, '4', 'public/images/XJ60jL31zVqbH07iRNRWprH8IaY4sp6YOl3IPfa9.jpg', '2024-10-02 02:28:29', '2024-10-02 02:28:29'),
(23, 8, '3', 'public/images/NvC8S3hSS1JGAAlHX5mrP7tlJc9ZOgzkn6e9SqLT.jpg', '2024-10-02 02:28:34', '2024-10-02 02:28:34'),
(24, 8, '1', 'public/images/iWdWvQu0DfHWw9mSRt6S8moXmFilfpssAO6cdnDj.jpg', '2024-10-02 02:28:40', '2024-10-02 02:28:40');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `jobs`
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
-- Tablo için tablo yapısı `job_batches`
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
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `status` varchar(5) DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `note`, `ip`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sezer', 'unalmissezer@gmail.com', NULL, NULL, NULL, NULL, '127.0.0.1', 'New', '2024-10-10 04:57:01', '2024-10-10 04:57:01'),
(2, 'Sezer', 'unalmissezer@gmail.com', NULL, NULL, NULL, NULL, '127.0.0.1', 'New', '2024-10-10 04:57:08', '2024-10-10 04:57:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_09_162841_add_two_factor_columns_to_users_table', 1),
(5, '2024_06_09_162904_create_personal_access_tokens_table', 1),
(6, '2024_06_09_162904_create_teams_table', 1),
(7, '2024_06_09_162905_create_team_user_table', 1),
(8, '2024_06_09_162906_create_team_invitations_table', 1),
(9, '2024_06_12_202010_create_categories_table', 1),
(10, '2024_07_08_191059_create_products_table', 1),
(11, '2024_07_21_190838_create_images_table', 1),
(12, '2024_09_08_141925_create_settings_table', 1),
(13, '2024_09_09_184036_create_messages_table', 1),
(14, '2024_09_13_183532_create_faqs_table', 1),
(15, '2024_09_15_142805_create_comments_table', 1),
(16, '2024_10_03_072006_create_roles_table', 2),
(17, '2024_10_03_072204_create_role_users_table', 2),
(18, '2024_10_08_081505_create_shop_carts_table', 3),
(19, '2024_10_09_125700_create_orders_table', 4),
(20, '2024_10_09_125756_create_order_products_table', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `total` double NOT NULL,
  `note` varchar(150) DEFAULT NULL,
  `IP` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `address`, `phone`, `total`, `note`, `IP`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sezer', 'unalmissezer@gmail.com', 'asdasdasdasd', '3522221255', 78, 'We aceepted', '127.0.0.1', 'New', '2024-10-10 05:08:06', '2024-10-10 10:45:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double NOT NULL,
  `note` varchar(150) DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `order_products`
--

INSERT INTO `order_products` (`id`, `user_id`, `order_id`, `product_id`, `price`, `quantity`, `amount`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 11, 6, 66, NULL, 'New', '2024-10-10 05:08:06', '2024-10-10 05:08:06'),
(2, 1, 1, 2, 12, 1, 12, NULL, 'New', '2024-10-10 05:08:06', '2024-10-10 05:08:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `minquantity` int(11) DEFAULT NULL,
  `tax` int(11) DEFAULT NULL,
  `status` varchar(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `category_id`, `user_id`, `title`, `keywords`, `description`, `image`, `detail`, `price`, `quantity`, `minquantity`, `tax`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Math 1', 'About the math 1 everything', 'About the math 1 everything', 'public/images/4b4xhoEToBeVLLIfDB7DlrsaummEJU2NUN53UPaf.jpg', 'About the math 1 everything', 11, 12, 1, 3, 'True', '2024-10-02 02:17:54', '2024-10-02 02:17:54'),
(2, 2, NULL, 'Geometry 1', 'About the Geometry 1 everything', 'About the Geometry 1 everything', 'public/images/rgOY0j6nBh2cyUSN9dU4yhQHRQ5c37DLWAtgXhFH.jpg', 'About the Geometry 1 everything', 12, 13, 3, 4, 'True', '2024-10-02 02:18:41', '2024-10-02 02:18:41'),
(3, 3, NULL, 'Analytical Geometry 1', 'About the Analytical Geometry 1 everything', 'About the Analytical Geometry 1 everything', 'public/images/q5TIMmmohlEnLXxitxBgpDAc4XW2XDziPRmoOJ7B.jpg', 'About the Analytical Geometry 1 everything', 13, 14, 4, 5, 'True', '2024-10-02 02:19:37', '2024-10-02 02:19:37'),
(4, 4, NULL, 'Chemistry 1', 'About the Chemistry 1 everything', 'About the Chemistry 1 everything', 'public/images/eVjnz1rTkWLMzfhiTm7WdrKWKxDYq9cyszagjy2U.jpg', 'About the Chemistry 1 everything', 14, 15, 5, 6, 'True', '2024-10-02 02:20:23', '2024-10-02 02:20:23'),
(5, 5, NULL, 'Organic Chemistry 1', 'About the Organic Chemistry 1 everything', 'About the Organic Chemistry 1 everything', 'public/images/qFbO7P841B3atpbz0TIA47lCfrNmh34tO6rHuK4F.jpg', 'About the Organic Chemistry 1 everything', 15, 16, 6, 7, 'True', '2024-10-02 02:21:10', '2024-10-02 02:21:10'),
(6, 6, NULL, 'Classic Chemistry 1', 'About the Classic Chemistry 1 everything', 'About the Classic Chemistry 1 everything', 'public/images/R61zUSJGos8AN17bPZraF8loEqAKxX5TGm0W0EBX.jpg', 'About the Classic Chemistry 1 everything', 16, 17, 7, 8, 'True', '2024-10-02 02:22:07', '2024-10-02 02:22:07'),
(7, 7, NULL, 'Biology 1', 'About the biology 1 everything', 'About the biology 1 everything', 'public/images/opYNg2tIuPvDtJ1rqkAxJxeCspSByFMY7v5rXta3.jpg', 'About the biology 1 everything', 17, 18, 8, 9, 'True', '2024-10-02 02:23:21', '2024-10-02 02:23:43'),
(8, 8, NULL, 'Micro Biology 1', 'About the Micro Biology 1 everything', 'About the Micro Biology 1 everything', 'public/images/zWFscd4C3aRawp9synRQjomIcFUo9ENeCmUL56Zl.jpg', 'About the Micro Biology 1 everything', 17, 18, 8, 9, 'True', '2024-10-02 02:24:28', '2024-10-02 02:24:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL),
(3, 'sale', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `role_users`
--

CREATE TABLE `role_users` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `role_users`
--

INSERT INTO `role_users` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
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
-- Tablo döküm verisi `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QVqlcQl64I00gFtTsOqwJtOKM9gY8eeHWzclbbwk', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVzFzVHFGRlU3bXBlWHV5WElRc1ZZNmczMm1CUkhTeHZTUnhReVJSWCI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9vcmRlci9OZXciO319', 1728568286),
('VGUzj6qpG8Sf7if3NrKUVnUR4M6SMQfYa9NyghEu', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicWVhQmdETjZoaGFXSWc4RlNOa041ZElSVmJBb3k1NTI0Tko5R3RXRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL3Nob3BjYXJ0L3VzZXJfb3JkZXJfZGV0YWlscy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1728550266);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `company` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `aboutus` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `status` text DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `title`, `keywords`, `description`, `company`, `address`, `phone`, `email`, `contact`, `aboutus`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sample Project Title', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>', 'public/images/EPQGJTFAmzoD7oUXwAMrMTr69v4XVNoywZEuJs7S.jpg', 'True', NULL, '2024-10-02 02:35:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `shop_carts`
--

CREATE TABLE `shop_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sezer\'s Team', 1, '2024-10-02 02:31:30', '2024-10-02 02:31:30'),
(2, 2, 'Sezer\'s Team', 1, '2024-10-04 03:03:02', '2024-10-04 03:03:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Sezer', 'unalmissezer@gmail.com', NULL, '$2y$12$Awprt0fK76IT6LJOjwRNP.p.vIara0eGMP3SiUhOD5Kx5cJkzKN8q', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-02 02:31:30', '2024-10-02 02:31:30'),
(2, 'Sample User2', 'sample@sample2.com', NULL, '$2y$12$DrvdGqc0/9UvmpX9xmWu2etF8/N5b.r4BnNgmrmztaAWvpvAQhM06', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-04 03:03:02', '2024-10-07 09:55:03');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Tablo için indeksler `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Tablo için indeksler `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `shop_carts`
--
ALTER TABLE `shop_carts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Tablo için indeksler `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Tablo için indeksler `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `shop_carts`
--
ALTER TABLE `shop_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

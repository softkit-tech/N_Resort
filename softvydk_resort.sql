-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2021 at 02:13 PM
-- Server version: 10.3.30-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softvydk_resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$wioR3tgnAjhOPQRZuC.JFexBic1yfhkYitOQ0FrwjHRDL7eB2C3OK', '01740125203', NULL, '2021-02-02 17:43:24', '2021-02-02 17:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `postcategory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `postcategory_id`, `date`, `title`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, '7', '2021-02-09', 'A wedding night in resort', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum dolore euLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum dolore eu', '1612862816.jpg', '2021-02-09 17:26:56', '2021-02-09 17:26:56'),
(2, '12', '2021-02-09', 'A wedding night in resort', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum dolore euLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum dolore eu', '1612862870.jpg', '2021-02-09 17:27:50', '2021-02-09 17:40:57'),
(3, '10', '2021-02-09', 'A wedding night in resort', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum dolore euLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum dolore eu', '1612862884.jpg', '2021-02-09 17:28:04', '2021-02-09 17:28:04'),
(4, '12', '2021-02-09', 'A wedding night in resort', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum dolore euLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum dolore eu', '1612862898.jpg', '2021-02-09 17:28:18', '2021-02-09 17:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tranction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `room_id`, `arrival_date`, `arrival_time`, `department_date`, `department_time`, `payment_type`, `tranction_id`, `bkash_number`, `created_at`, `updated_at`, `status`) VALUES
(4, '1', '5', '2021-02-05', '6pm', '2021-02-06', '6pm', 'Bkash', '1231', '01969004645', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Couple Room', '1612332544.jpg', '2021-02-03 14:09:04', '2021-02-03 14:09:04'),
(2, 'Family Room', '1612332556.jpg', '2021-02-03 14:09:17', '2021-02-03 14:09:17'),
(4, 'Others Room', '1612332772.jpg', '2021-02-03 14:12:53', '2021-02-03 14:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `subject`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '2021-02-06 17:10:50', '2021-02-06 17:10:50'),
(2, NULL, NULL, NULL, NULL, NULL, '2021-02-06 17:10:56', '2021-02-06 17:10:56'),
(3, NULL, NULL, NULL, NULL, NULL, '2021-02-06 17:11:14', '2021-02-06 17:11:14'),
(4, 'shakir Ahmed', '01740125203', NULL, 'admin@gmail.com', 'sss', '2021-02-06 17:11:24', '2021-02-06 17:11:24');

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
-- Table structure for table `hotals`
--

CREATE TABLE `hotals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `perday` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childen` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_rate` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotals`
--

INSERT INTO `hotals` (`id`, `room_number`, `room_title`, `room_details`, `status`, `created_at`, `updated_at`, `perday`, `detail`, `category_id`, `childen`, `adult`, `room_rate`) VALUES
(3, '101', 'Superior King', 'quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.', '0', '2021-02-03 17:26:14', '2021-02-03 17:26:14', 'Night', '10x15Mountain view2 Balcony', '4', '2', '2', '2000'),
(4, '102', 'Superior Twin', 'quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.', '0', '2021-02-03 17:32:55', '2021-02-03 17:32:55', 'Night', '10x15Mountain view2 Balcony', '4', '2', '2', '2500'),
(5, '103', 'Premium King', 'quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.', '0', '2021-02-03 17:33:45', '2021-02-03 17:33:45', 'Night', '10x15Mountain view2 Balcony', '4', '2', '2', '1500'),
(6, '201', 'Superior King', 'quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.', '0', '2021-02-03 17:38:34', '2021-02-03 17:38:34', 'Night', '10x15Mountain view2 Balcony', '1', '0', '0', '1600');

-- --------------------------------------------------------

--
-- Table structure for table `hotal_images`
--

CREATE TABLE `hotal_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotal_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotal_images`
--

INSERT INTO `hotal_images` (`id`, `hotal_id`, `image`, `created_at`, `updated_at`) VALUES
(4, '1', 'public/backend/media/hotal/1612262415-14519685_1593367064306514_8154873233459343050_n.jpg', '2021-02-02 18:40:15', '2021-02-02 18:40:15'),
(5, '1', 'public/backend/media/hotal/1612262416-69472100_2151254091851139_3523335374271152128_n.jpg', '2021-02-02 18:40:16', '2021-02-02 18:40:16'),
(8, '1', 'public/backend/media/hotal/1612265195-78265364_1503251509812570_889158689557053440_n.jpg', '2021-02-02 19:26:35', '2021-02-02 19:26:35'),
(9, '2', 'public/backend/media/hotal/1612334342-room-l-1.jpg', '2021-02-03 14:39:02', '2021-02-03 14:39:02'),
(10, '2', 'public/backend/media/hotal/1612334342-room-l-2.jpg', '2021-02-03 14:39:02', '2021-02-03 14:39:02'),
(11, '2', 'public/backend/media/hotal/1612334342-room-l-3.jpg', '2021-02-03 14:39:02', '2021-02-03 14:39:02'),
(12, '3', 'public/backend/media/hotal/1612344374-room-l-1.jpg', '2021-02-03 17:26:14', '2021-02-03 17:26:14'),
(13, '3', 'public/backend/media/hotal/1612344374-room-l-2.jpg', '2021-02-03 17:26:14', '2021-02-03 17:26:14'),
(14, '3', 'public/backend/media/hotal/1612344374-room-l-3.jpg', '2021-02-03 17:26:14', '2021-02-03 17:26:14'),
(15, '4', 'public/backend/media/hotal/1612344775-room-l-1.jpg', '2021-02-03 17:32:55', '2021-02-03 17:32:55'),
(16, '4', 'public/backend/media/hotal/1612344775-room-l-2.jpg', '2021-02-03 17:32:55', '2021-02-03 17:32:55'),
(17, '4', 'public/backend/media/hotal/1612344775-room-l-3.jpg', '2021-02-03 17:32:55', '2021-02-03 17:32:55'),
(18, '5', 'public/backend/media/hotal/1612344825-room-l-1.jpg', '2021-02-03 17:33:45', '2021-02-03 17:33:45'),
(19, '5', 'public/backend/media/hotal/1612344825-room-l-2.jpg', '2021-02-03 17:33:45', '2021-02-03 17:33:45'),
(20, '5', 'public/backend/media/hotal/1612344825-room-l-3.jpg', '2021-02-03 17:33:45', '2021-02-03 17:33:45'),
(21, '6', 'public/backend/media/hotal/1612345114-room-l-1.jpg', '2021-02-03 17:38:34', '2021-02-03 17:38:34'),
(22, '6', 'public/backend/media/hotal/1612345114-room-l-2.jpg', '2021-02-03 17:38:34', '2021-02-03 17:38:34'),
(23, '6', 'public/backend/media/hotal/1612345114-room-l-3.jpg', '2021-02-03 17:38:34', '2021-02-03 17:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1612603801.png', '2021-02-06 17:30:04', '2021-02-06 17:30:04');

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
(4, '2020_12_27_232640_create_admins_table', 1),
(5, '2020_12_30_005005_create_contacts_table', 1),
(6, '2021_01_14_084341_create_socials_table', 1),
(7, '2021_02_02_085857_create_sliders_table', 1),
(8, '2021_02_02_090243_create_logos_table', 1),
(9, '2021_02_02_092840_create_hotals_table', 1),
(10, '2021_02_02_092913_create_hotal_images_table', 1),
(11, '2021_02_03_055955_create_categories_table', 2),
(12, '2021_02_05_014054_create_orders_table', 3),
(13, '2021_02_05_014158_create_order_details_table', 3),
(14, '2021_02_05_082029_create_carts_table', 4),
(15, '2021_02_07_081814_create_blogs_table', 5),
(16, '2021_02_09_083653_create_post_categories_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tranction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `total`, `payment_type`, `tranction_id`, `bkash_number`, `status`, `adult`, `child`, `arrival_date`, `arrival_time`, `department_date`, `department_time`, `created_at`, `updated_at`) VALUES
(3, '1', '1,500.00', '1,500.00', 'Handcash', NULL, NULL, '0', '0', '2', '2021-02-04', '6pm', '2021-02-05', '6pm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singleprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `postcategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `postcategory`, `created_at`, `updated_at`) VALUES
(7, 'RESTURENT', '2021-02-09 16:52:24', '2021-02-09 16:56:24'),
(8, 'Travel Tips', '2021-02-09 16:52:50', '2021-02-09 16:52:50'),
(9, 'Resort', '2021-02-09 16:53:01', '2021-02-09 16:53:01'),
(10, 'General Care Tips', '2021-02-09 16:53:13', '2021-02-09 16:53:13'),
(11, 'Activies', '2021-02-09 16:53:23', '2021-02-09 16:53:23'),
(12, 'Photo Gallary', '2021-02-09 16:53:31', '2021-02-09 16:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `link`, `created_at`, `updated_at`, `title`) VALUES
(2, '1612327619.jpg', 'https://www.facebook.com/profile.php?id=100008997065132', '2021-02-03 12:46:59', '2021-02-03 12:46:59', 'semester final'),
(3, '1612327627.jpg', 'https://www.facebook.com/profile.php?id=100008997065132', '2021-02-03 12:47:07', '2021-02-03 12:47:07', 'semester final'),
(4, '1612327636.jpg', 'https://www.facebook.com/profile.php?id=100008997065132', '2021-02-03 12:47:16', '2021-02-03 12:47:16', 'semester final'),
(5, '1612327649.jpg', 'https://www.youtube.com/watch?v=iXMqV5BBHf4&t=930s', '2021-02-03 12:47:29', '2021-02-03 12:47:29', 'new exam'),
(6, '1612862469.jpg', NULL, '2021-02-09 17:21:11', '2021-02-09 17:21:11', 'A wedding night in resort'),
(7, '1612862602.jpg', NULL, '2021-02-09 17:23:23', '2021-02-09 17:23:23', 'A wedding night in resort');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-facebook', 'https://www.facebook.com/profile.php?id=100008997065132', '2021-02-09 18:17:58', '2021-02-09 18:17:58'),
(2, 'fa fa-youtube', 'https://www.youtube.com/watch?v=5LVnIRADTSE&t=342s', '2021-02-09 18:21:14', '2021-02-09 18:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@gmail.com', NULL, '$2y$10$u2JRdSb8wNgZQ6XXEUYCjeaq71tvnKeR75hDH5eUj9Jtz.3ylkHI6', NULL, NULL, '2021-02-05 08:00:39', '2021-02-05 08:00:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotals`
--
ALTER TABLE `hotals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotal_images`
--
ALTER TABLE `hotal_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotals`
--
ALTER TABLE `hotals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotal_images`
--
ALTER TABLE `hotal_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

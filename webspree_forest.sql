-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2024 at 12:39 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webspree_forest`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievementschools_universities`
--

CREATE TABLE `achievementschools_universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievementschools_universities`
--

INSERT INTO `achievementschools_universities` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '৫ এর মধ্যে', 'Out of 5', '2024-05-30 09:48:15', '2024-05-30 09:49:08', NULL),
(2, '৪ এর মধ্যে', 'Out of 4', '2024-05-30 09:48:35', '2024-05-30 09:48:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acr_monitorings`
--

CREATE TABLE `acr_monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `reviewer` varchar(150) DEFAULT NULL,
  `review_date` date DEFAULT NULL,
  `remarks` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acr_monitorings`
--

INSERT INTO `acr_monitorings` (`id`, `year`, `reviewer`, `review_date`, `remarks`, `created_at`, `updated_at`, `deleted_at`, `employee_id`) VALUES
(1, 2022, NULL, NULL, '<p>Problem</p>', '2024-05-27 13:19:51', '2024-05-27 13:19:51', NULL, 1),
(2, 2024, 'Synergy Inteface Ltd.', '2024-07-01', '<p>N/A</p>', '2024-06-01 05:57:52', '2024-06-01 05:57:52', NULL, 3),
(3, 2022, 'Nurujjaman', '2024-04-04', NULL, '2024-06-01 08:40:27', '2024-06-01 08:40:27', NULL, 4),
(4, 2000, 'পর্যালোচক', '2023-07-19', NULL, '2024-06-01 13:28:53', '2024-06-01 13:28:53', NULL, 5),
(5, 2021, 'Nurujjaman', '2023-06-21', '<p>OK</p>', '2024-06-01 14:01:15', '2024-06-01 14:01:15', NULL, 6),
(6, 1995, 'Enim irure qui nostr', '2024-06-05', '<p>cfvcv</p>', '2024-06-01 15:36:29', '2024-06-01 15:36:29', NULL, 1),
(7, 1997, 'Nurujjaman', '2024-06-01', '<p>Demo Test</p>', '2024-06-01 19:14:44', '2024-06-01 19:14:44', NULL, 7),
(8, 1995, 'Nurujjaman', '2024-06-02', NULL, '2024-06-02 10:51:56', '2024-06-02 10:51:56', NULL, 9),
(9, 1990, 'Nurujjaman', '2024-06-02', '<p>R4F44V</p>', '2024-06-02 16:51:12', '2024-06-02 16:51:12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `addressdetailes`
--

CREATE TABLE `addressdetailes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_type` varchar(150) NOT NULL,
  `flat_house` varchar(150) DEFAULT NULL,
  `post_office` varchar(150) DEFAULT NULL,
  `post_code` varchar(150) DEFAULT NULL,
  `phone_number` varchar(150) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `thana_upazila_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addressdetailes`
--

INSERT INTO `addressdetailes` (`id`, `address_type`, `flat_house`, `post_office`, `post_code`, `phone_number`, `status`, `created_at`, `updated_at`, `deleted_at`, `employee_id`, `thana_upazila_id`) VALUES
(1, 'Present', '358 South Paikpara', 'Mirpur-2', '7230', '9026394', 'No', '2024-05-27 12:29:17', '2024-05-28 13:47:39', '2024-05-28 13:47:39', 1, 1),
(2, 'Permanent', '358 South Paikpara', 'Mirpur-2', '7230', '9026394', 'No', '2024-05-27 12:29:32', '2024-05-27 12:29:32', NULL, 1, 1),
(3, 'Permanent', 'Soyedgram', 'Kheruajani', '2210', '01764894771', 'No', '2024-06-01 05:34:05', '2024-06-01 05:34:05', NULL, 3, 295),
(4, 'Present', 'DOHS', 'Mirpur', '2212', '01764894771', 'No', '2024-06-01 05:36:08', '2024-06-01 05:36:08', NULL, 3, 245),
(5, 'Present', 'Mirpur-1', 'Mirpur', '7230', '01957073942', 'Yes', '2024-06-01 08:28:42', '2024-06-01 08:28:42', NULL, 4, 245),
(6, 'Present', 'Mirpur-1', 'Mirpur', '7230', '01957073942', 'Yes', '2024-06-01 13:16:28', '2024-06-01 13:16:28', NULL, 5, 94),
(7, 'Present', '358 South Paikpara', 'Mirpur-2', '7230', '01957073942', 'No', '2024-06-01 13:46:59', '2024-06-01 13:46:59', NULL, 6, 93),
(8, 'Present', 'Jhenaidah', 'Jhenaidah', '22219', '01609758377', 'Yes', '2024-06-01 19:16:20', '2024-06-01 19:16:20', NULL, 7, 91),
(9, 'Present', '3/3 , Bana Bithi Complex , Sector-8', 'Uttara', '7230', '01711283846', 'No', '2024-06-02 11:19:49', '2024-06-02 11:19:49', NULL, 9, 245),
(10, 'Permanent', 'House No-2 , Road No-13', 'Magura', '7610', '01711283846', 'No', '2024-06-02 11:21:27', '2024-06-02 11:21:27', NULL, 9, 260);

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(150) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` text DEFAULT NULL,
  `host` varchar(46) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(1, 'audit:created', 1, 'App\\Models\\Examination#1', NULL, '{\"name_en\":\"PSC\\/5 pass\",\"name_bn\":\"PSC\\/5 pass\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":1}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(2, 'audit:created', 2, 'App\\Models\\Examination#2', NULL, '{\"name_en\":\"JSC\\/JDC\\/8 pass\",\"name_bn\":\"JSC\\/JDC\\/8 pass\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":2}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(3, 'audit:created', 3, 'App\\Models\\Examination#3', NULL, '{\"name_en\":\"Secondary\",\"name_bn\":\"Secondary\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":3}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(4, 'audit:created', 4, 'App\\Models\\Examination#4', NULL, '{\"name_en\":\"Higher Secondary\",\"name_bn\":\"Higher Secondary\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":4}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(5, 'audit:created', 5, 'App\\Models\\Examination#5', NULL, '{\"name_en\":\"Diploma\",\"name_bn\":\"Diploma\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":5}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(6, 'audit:created', 6, 'App\\Models\\Examination#6', NULL, '{\"name_en\":\"Bachelor\\/Honors\",\"name_bn\":\"Bachelor\\/Honors\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":6}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(7, 'audit:created', 7, 'App\\Models\\Examination#7', NULL, '{\"name_en\":\"Masters\",\"name_bn\":\"Masters\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":7}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(8, 'audit:created', 8, 'App\\Models\\Examination#8', NULL, '{\"name_en\":\"PhD (Doctor of Philosophy)\",\"name_bn\":\"PhD (Doctor of Philosophy)\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":8}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(9, 'audit:created', 1, 'App\\Models\\Country#1', NULL, '{\"name_en\":\"Afghanistan\",\"name_bn\":\"\\u0986\\u09ab\\u0997\\u09be\\u09a8\\u09bf\\u09b8\\u09cd\\u09a4\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":1}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(10, 'audit:created', 2, 'App\\Models\\Country#2', NULL, '{\"name_en\":\"Albania\",\"name_bn\":\"\\u0986\\u09b2\\u09ac\\u09c7\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":2}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(11, 'audit:created', 3, 'App\\Models\\Country#3', NULL, '{\"name_en\":\"Algeria\",\"name_bn\":\"\\u0986\\u09b2\\u099c\\u09c7\\u09b0\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":3}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(12, 'audit:created', 4, 'App\\Models\\Country#4', NULL, '{\"name_en\":\"Andorra\",\"name_bn\":\"\\u0986\\u09a8\\u09cd\\u09a1\\u09cb\\u09b0\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":4}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(13, 'audit:created', 5, 'App\\Models\\Country#5', NULL, '{\"name_en\":\"Angola\",\"name_bn\":\"\\u0985\\u09cd\\u09af\\u09be\\u0999\\u09cd\\u0997\\u09cb\\u09b2\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":5}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(14, 'audit:created', 6, 'App\\Models\\Country#6', NULL, '{\"name_en\":\"Antigua and Barbuda\",\"name_bn\":\"\\u0985\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u099f\\u09bf\\u0997\\u09c1\\u09af\\u09bc\\u09be \\u0993 \\u09ac\\u09be\\u09b0\\u09ac\\u09c1\\u09a1\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":6}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(15, 'audit:created', 7, 'App\\Models\\Country#7', NULL, '{\"name_en\":\"Argentina\",\"name_bn\":\"\\u0986\\u09b0\\u09cd\\u099c\\u09c7\\u09a8\\u09cd\\u099f\\u09bf\\u09a8\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":7}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(16, 'audit:created', 8, 'App\\Models\\Country#8', NULL, '{\"name_en\":\"Armenia\",\"name_bn\":\"\\u0986\\u09b0\\u09cd\\u09ae\\u09c7\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":8}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(17, 'audit:created', 9, 'App\\Models\\Country#9', NULL, '{\"name_en\":\"Australia\",\"name_bn\":\"\\u0985\\u09b8\\u09cd\\u099f\\u09cd\\u09b0\\u09c7\\u09b2\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":9}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(18, 'audit:created', 10, 'App\\Models\\Country#10', NULL, '{\"name_en\":\"Austria\",\"name_bn\":\"\\u0985\\u09b8\\u09cd\\u099f\\u09cd\\u09b0\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":10}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(19, 'audit:created', 11, 'App\\Models\\Country#11', NULL, '{\"name_en\":\"Azerbaijan\",\"name_bn\":\"\\u0986\\u099c\\u09be\\u09b0\\u09ac\\u09be\\u0987\\u099c\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":11}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(20, 'audit:created', 12, 'App\\Models\\Country#12', NULL, '{\"name_en\":\"Bahamas\",\"name_bn\":\"\\u09ac\\u09be\\u09b9\\u09be\\u09ae\\u09be\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":12}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(21, 'audit:created', 13, 'App\\Models\\Country#13', NULL, '{\"name_en\":\"Bahrain\",\"name_bn\":\"\\u09ac\\u09be\\u09b9\\u09b0\\u09be\\u0987\\u09a8\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":13}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(22, 'audit:created', 14, 'App\\Models\\Country#14', NULL, '{\"name_en\":\"Bangladesh\",\"name_bn\":\"\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":14}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(23, 'audit:created', 15, 'App\\Models\\Country#15', NULL, '{\"name_en\":\"Barbados\",\"name_bn\":\"\\u09ac\\u09be\\u09b0\\u09cd\\u09ac\\u09be\\u09a1\\u09cb\\u09b8\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":15}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(24, 'audit:created', 16, 'App\\Models\\Country#16', NULL, '{\"name_en\":\"Belarus\",\"name_bn\":\"\\u09ac\\u09c7\\u09b2\\u09be\\u09b0\\u09c1\\u09b6\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":16}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(25, 'audit:created', 17, 'App\\Models\\Country#17', NULL, '{\"name_en\":\"Belgium\",\"name_bn\":\"\\u09ac\\u09c7\\u09b2\\u099c\\u09bf\\u09af\\u09bc\\u09be\\u09ae\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":17}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(26, 'audit:created', 18, 'App\\Models\\Country#18', NULL, '{\"name_en\":\"Belize\",\"name_bn\":\"\\u09ac\\u09c7\\u09b2\\u09bf\\u099c\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":18}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(27, 'audit:created', 19, 'App\\Models\\Country#19', NULL, '{\"name_en\":\"Benin\",\"name_bn\":\"\\u09ac\\u09c7\\u09a8\\u09bf\\u09a8\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":19}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(28, 'audit:created', 20, 'App\\Models\\Country#20', NULL, '{\"name_en\":\"Bhutan\",\"name_bn\":\"\\u09ad\\u09c1\\u099f\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:53\",\"created_at\":\"2024-05-26 21:01:53\",\"id\":20}', '127.0.0.1', '2024-05-27 01:01:53', '2024-05-27 01:01:53'),
(29, 'audit:created', 21, 'App\\Models\\Country#21', NULL, '{\"name_en\":\"Bolivia\",\"name_bn\":\"\\u09ac\\u09b2\\u09bf\\u09ad\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":21}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(30, 'audit:created', 22, 'App\\Models\\Country#22', NULL, '{\"name_en\":\"Bosnia and Herzegovina\",\"name_bn\":\"\\u09ac\\u09b8\\u09a8\\u09bf\\u09af\\u09bc\\u09be \\u0993 \\u09b9\\u09be\\u09b0\\u09cd\\u099c\\u09c7\\u0997\\u09cb\\u09ad\\u09bf\\u09a8\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":22}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(31, 'audit:created', 23, 'App\\Models\\Country#23', NULL, '{\"name_en\":\"Botswana\",\"name_bn\":\"\\u09ac\\u099f\\u09b8\\u09cb\\u09af\\u09bc\\u09be\\u09a8\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":23}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(32, 'audit:created', 24, 'App\\Models\\Country#24', NULL, '{\"name_en\":\"Brazil\",\"name_bn\":\"\\u09ac\\u09cd\\u09b0\\u09be\\u099c\\u09bf\\u09b2\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":24}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(33, 'audit:created', 25, 'App\\Models\\Country#25', NULL, '{\"name_en\":\"Brunei\",\"name_bn\":\"\\u09ac\\u09cd\\u09b0\\u09c1\\u09a8\\u09c7\\u0987\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":25}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(34, 'audit:created', 26, 'App\\Models\\Country#26', NULL, '{\"name_en\":\"Bulgaria\",\"name_bn\":\"\\u09ac\\u09c1\\u09b2\\u0997\\u09c7\\u09b0\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":26}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(35, 'audit:created', 27, 'App\\Models\\Country#27', NULL, '{\"name_en\":\"Burkina Faso\",\"name_bn\":\"\\u09ac\\u09c1\\u09b0\\u09cd\\u0995\\u09bf\\u09a8\\u09be \\u09ab\\u09be\\u09b8\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":27}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(36, 'audit:created', 28, 'App\\Models\\Country#28', NULL, '{\"name_en\":\"Burundi\",\"name_bn\":\"\\u09ac\\u09c1\\u09b0\\u09c1\\u09a8\\u09cd\\u09a1\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":28}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(37, 'audit:created', 29, 'App\\Models\\Country#29', NULL, '{\"name_en\":\"Cabo Verde\",\"name_bn\":\"\\u0995\\u09c7\\u09aa \\u09ad\\u09be\\u09b0\\u09cd\\u09a6\\u09c7\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":29}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(38, 'audit:created', 30, 'App\\Models\\Country#30', NULL, '{\"name_en\":\"Cambodia\",\"name_bn\":\"\\u0995\\u09ae\\u09cd\\u09ac\\u09cb\\u09a1\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":30}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(39, 'audit:created', 31, 'App\\Models\\Country#31', NULL, '{\"name_en\":\"Cameroon\",\"name_bn\":\"\\u0995\\u09cd\\u09af\\u09be\\u09ae\\u09c7\\u09b0\\u09c1\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":31}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(40, 'audit:created', 32, 'App\\Models\\Country#32', NULL, '{\"name_en\":\"Canada\",\"name_bn\":\"\\u0995\\u09be\\u09a8\\u09be\\u09a1\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":32}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(41, 'audit:created', 33, 'App\\Models\\Country#33', NULL, '{\"name_en\":\"Central African Republic\",\"name_bn\":\"\\u09ae\\u09a7\\u09cd\\u09af \\u0986\\u09ab\\u09cd\\u09b0\\u09bf\\u0995\\u09be\\u09a8 \\u09aa\\u09cd\\u09b0\\u099c\\u09be\\u09a4\\u09a8\\u09cd\\u09a4\\u09cd\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":33}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(42, 'audit:created', 34, 'App\\Models\\Country#34', NULL, '{\"name_en\":\"Chad\",\"name_bn\":\"\\u099a\\u09be\\u09a6\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":34}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(43, 'audit:created', 35, 'App\\Models\\Country#35', NULL, '{\"name_en\":\"Chile\",\"name_bn\":\"\\u099a\\u09bf\\u09b2\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":35}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(44, 'audit:created', 36, 'App\\Models\\Country#36', NULL, '{\"name_en\":\"China\",\"name_bn\":\"\\u099a\\u09c0\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":36}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(45, 'audit:created', 37, 'App\\Models\\Country#37', NULL, '{\"name_en\":\"Colombia\",\"name_bn\":\"\\u0995\\u09b2\\u09ae\\u09cd\\u09ac\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":37}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(46, 'audit:created', 38, 'App\\Models\\Country#38', NULL, '{\"name_en\":\"Comoros\",\"name_bn\":\"\\u0995\\u09ae\\u09cb\\u09b0\\u09cb\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":38}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(47, 'audit:created', 39, 'App\\Models\\Country#39', NULL, '{\"name_en\":\"Congo (Congo-Brazzaville)\",\"name_bn\":\"\\u0995\\u0999\\u09cd\\u0997\\u09cb (\\u0995\\u0999\\u09cd\\u0997\\u09cb-\\u09ac\\u09cd\\u09b0\\u09be\\u099c\\u09be\\u09ad\\u09bf\\u09b2)\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":39}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(48, 'audit:created', 40, 'App\\Models\\Country#40', NULL, '{\"name_en\":\"Costa Rica\",\"name_bn\":\"\\u0995\\u09cb\\u09b8\\u09cd\\u099f\\u09be \\u09b0\\u09bf\\u0995\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":40}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(49, 'audit:created', 41, 'App\\Models\\Country#41', NULL, '{\"name_en\":\"Croatia\",\"name_bn\":\"\\u0995\\u09cd\\u09b0\\u09cb\\u09af\\u09bc\\u09c7\\u09b6\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":41}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(50, 'audit:created', 42, 'App\\Models\\Country#42', NULL, '{\"name_en\":\"Cuba\",\"name_bn\":\"\\u0995\\u09bf\\u0989\\u09ac\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":42}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(51, 'audit:created', 43, 'App\\Models\\Country#43', NULL, '{\"name_en\":\"Cyprus\",\"name_bn\":\"\\u09b8\\u09be\\u0987\\u09aa\\u09cd\\u09b0\\u09be\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":43}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(52, 'audit:created', 44, 'App\\Models\\Country#44', NULL, '{\"name_en\":\"Czechia (Czech Republic)\",\"name_bn\":\"\\u099a\\u09c7\\u0995\\u09bf\\u09af\\u09bc\\u09be (\\u099a\\u09c7\\u0995 \\u09aa\\u09cd\\u09b0\\u099c\\u09be\\u09a4\\u09a8\\u09cd\\u09a4\\u09cd\\u09b0)\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":44}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(53, 'audit:created', 45, 'App\\Models\\Country#45', NULL, '{\"name_en\":\"Denmark\",\"name_bn\":\"\\u09a1\\u09c7\\u09a8\\u09ae\\u09be\\u09b0\\u09cd\\u0995\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":45}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(54, 'audit:created', 46, 'App\\Models\\Country#46', NULL, '{\"name_en\":\"Djibouti\",\"name_bn\":\"\\u099c\\u09bf\\u09ac\\u09c1\\u09a4\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":46}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(55, 'audit:created', 47, 'App\\Models\\Country#47', NULL, '{\"name_en\":\"Dominica\",\"name_bn\":\"\\u09a1\\u09cb\\u09ae\\u09bf\\u09a8\\u09bf\\u0995\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":47}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(56, 'audit:created', 48, 'App\\Models\\Country#48', NULL, '{\"name_en\":\"Dominican Republic\",\"name_bn\":\"\\u09a1\\u09cb\\u09ae\\u09bf\\u09a8\\u09bf\\u0995\\u09be\\u09a8 \\u09aa\\u09cd\\u09b0\\u099c\\u09be\\u09a4\\u09a8\\u09cd\\u09a4\\u09cd\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":48}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(57, 'audit:created', 49, 'App\\Models\\Country#49', NULL, '{\"name_en\":\"Ecuador\",\"name_bn\":\"\\u0987\\u0995\\u09c1\\u09af\\u09bc\\u09c7\\u09a1\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":49}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(58, 'audit:created', 50, 'App\\Models\\Country#50', NULL, '{\"name_en\":\"Egypt\",\"name_bn\":\"\\u09ae\\u09bf\\u09b6\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":50}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(59, 'audit:created', 51, 'App\\Models\\Country#51', NULL, '{\"name_en\":\"El Salvador\",\"name_bn\":\"\\u098f\\u09b2 \\u09b8\\u09be\\u09b2\\u09ad\\u09be\\u09a6\\u09cb\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":51}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(60, 'audit:created', 52, 'App\\Models\\Country#52', NULL, '{\"name_en\":\"Equatorial Guinea\",\"name_bn\":\"\\u09a8\\u09bf\\u09b0\\u0995\\u09cd\\u09b7\\u09c0\\u09af\\u09bc \\u0997\\u09bf\\u09a8\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":52}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(61, 'audit:created', 53, 'App\\Models\\Country#53', NULL, '{\"name_en\":\"Eritrea\",\"name_bn\":\"\\u0987\\u09b0\\u09bf\\u09a4\\u09cd\\u09b0\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":53}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(62, 'audit:created', 54, 'App\\Models\\Country#54', NULL, '{\"name_en\":\"Estonia\",\"name_bn\":\"\\u098f\\u09b8\\u09cd\\u09a4\\u09cb\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":54}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(63, 'audit:created', 55, 'App\\Models\\Country#55', NULL, '{\"name_en\":\"Eswatini (fmr. \\\"Swaziland\\\")\",\"name_bn\":\"\\u0987\\u09b8\\u0993\\u09af\\u09bc\\u09be\\u09a4\\u09bf\\u09a8\\u09bf (\\u09aa\\u09cd\\u09b0\\u09be\\u0995\\u09cd\\u09a4 \\\"\\u09b8\\u09cb\\u09af\\u09bc\\u09be\\u099c\\u09bf\\u09b2\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09a1\\\")\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":55}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(64, 'audit:created', 56, 'App\\Models\\Country#56', NULL, '{\"name_en\":\"Ethiopia\",\"name_bn\":\"\\u0987\\u09a5\\u09bf\\u0993\\u09aa\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":56}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(65, 'audit:created', 57, 'App\\Models\\Country#57', NULL, '{\"name_en\":\"Fiji\",\"name_bn\":\"\\u09ab\\u09bf\\u099c\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":57}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(66, 'audit:created', 58, 'App\\Models\\Country#58', NULL, '{\"name_en\":\"Finland\",\"name_bn\":\"\\u09ab\\u09bf\\u09a8\\u09b2\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09a1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":58}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(67, 'audit:created', 59, 'App\\Models\\Country#59', NULL, '{\"name_en\":\"France\",\"name_bn\":\"\\u09ab\\u09cd\\u09b0\\u09be\\u09a8\\u09cd\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":59}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(68, 'audit:created', 60, 'App\\Models\\Country#60', NULL, '{\"name_en\":\"Gabon\",\"name_bn\":\"\\u0997\\u09be\\u09ac\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":60}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(69, 'audit:created', 61, 'App\\Models\\Country#61', NULL, '{\"name_en\":\"Gambia\",\"name_bn\":\"\\u0997\\u09be\\u09ae\\u09cd\\u09ac\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":61}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(70, 'audit:created', 62, 'App\\Models\\Country#62', NULL, '{\"name_en\":\"Georgia\",\"name_bn\":\"\\u099c\\u09b0\\u09cd\\u099c\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":62}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(71, 'audit:created', 63, 'App\\Models\\Country#63', NULL, '{\"name_en\":\"Germany\",\"name_bn\":\"\\u099c\\u09be\\u09b0\\u09cd\\u09ae\\u09be\\u09a8\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":63}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(72, 'audit:created', 64, 'App\\Models\\Country#64', NULL, '{\"name_en\":\"Ghana\",\"name_bn\":\"\\u0998\\u09be\\u09a8\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":64}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(73, 'audit:created', 65, 'App\\Models\\Country#65', NULL, '{\"name_en\":\"Greece\",\"name_bn\":\"\\u0997\\u09cd\\u09b0\\u09c0\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":65}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(74, 'audit:created', 66, 'App\\Models\\Country#66', NULL, '{\"name_en\":\"Grenada\",\"name_bn\":\"\\u0997\\u09cd\\u09b0\\u09c7\\u09a8\\u09be\\u09a1\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":66}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(75, 'audit:created', 67, 'App\\Models\\Country#67', NULL, '{\"name_en\":\"Guatemala\",\"name_bn\":\"\\u0997\\u09c1\\u09af\\u09bc\\u09be\\u09a4\\u09c7\\u09ae\\u09be\\u09b2\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":67}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(76, 'audit:created', 68, 'App\\Models\\Country#68', NULL, '{\"name_en\":\"Guinea\",\"name_bn\":\"\\u0997\\u09bf\\u09a8\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":68}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(77, 'audit:created', 69, 'App\\Models\\Country#69', NULL, '{\"name_en\":\"Guinea-Bissau\",\"name_bn\":\"\\u0997\\u09bf\\u09a8\\u09bf-\\u09ac\\u09bf\\u09b8\\u09be\\u0989\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":69}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(78, 'audit:created', 70, 'App\\Models\\Country#70', NULL, '{\"name_en\":\"Guyana\",\"name_bn\":\"\\u0997\\u09be\\u09af\\u09bc\\u09be\\u09a8\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":70}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(79, 'audit:created', 71, 'App\\Models\\Country#71', NULL, '{\"name_en\":\"Haiti\",\"name_bn\":\"\\u09b9\\u09be\\u0987\\u09a4\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":71}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(80, 'audit:created', 72, 'App\\Models\\Country#72', NULL, '{\"name_en\":\"Holy See\",\"name_bn\":\"\\u09aa\\u09ac\\u09bf\\u09a4\\u09cd\\u09b0 \\u09a6\\u09b0\\u09cd\\u09b6\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":72}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(81, 'audit:created', 73, 'App\\Models\\Country#73', NULL, '{\"name_en\":\"Honduras\",\"name_bn\":\"\\u09b9\\u09a8\\u09cd\\u09a1\\u09c1\\u09b0\\u09be\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":73}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(82, 'audit:created', 74, 'App\\Models\\Country#74', NULL, '{\"name_en\":\"Hungary\",\"name_bn\":\"\\u09b9\\u09be\\u0999\\u09cd\\u0997\\u09c7\\u09b0\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":74}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(83, 'audit:created', 75, 'App\\Models\\Country#75', NULL, '{\"name_en\":\"Iceland\",\"name_bn\":\"\\u0986\\u0987\\u09b8\\u09b2\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09a1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":75}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(84, 'audit:created', 76, 'App\\Models\\Country#76', NULL, '{\"name_en\":\"India\",\"name_bn\":\"\\u09ad\\u09be\\u09b0\\u09a4\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":76}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(85, 'audit:created', 77, 'App\\Models\\Country#77', NULL, '{\"name_en\":\"Indonesia\",\"name_bn\":\"\\u0987\\u09a8\\u09cd\\u09a6\\u09cb\\u09a8\\u09c7\\u09b6\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":77}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(86, 'audit:created', 78, 'App\\Models\\Country#78', NULL, '{\"name_en\":\"Iran\",\"name_bn\":\"\\u0987\\u09b0\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":78}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(87, 'audit:created', 79, 'App\\Models\\Country#79', NULL, '{\"name_en\":\"Iraq\",\"name_bn\":\"\\u0987\\u09b0\\u09be\\u0995\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":79}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(88, 'audit:created', 80, 'App\\Models\\Country#80', NULL, '{\"name_en\":\"Ireland\",\"name_bn\":\"\\u0986\\u09af\\u09bc\\u09be\\u09b0\\u09b2\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09a1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":80}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(89, 'audit:created', 81, 'App\\Models\\Country#81', NULL, '{\"name_en\":\"Israel\",\"name_bn\":\"\\u0987\\u09b8\\u09b0\\u09be\\u09af\\u09bc\\u09c7\\u09b2\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":81}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(90, 'audit:created', 82, 'App\\Models\\Country#82', NULL, '{\"name_en\":\"Italy\",\"name_bn\":\"\\u0987\\u09a4\\u09be\\u09b2\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":82}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(91, 'audit:created', 83, 'App\\Models\\Country#83', NULL, '{\"name_en\":\"Jamaica\",\"name_bn\":\"\\u099c\\u09be\\u09ae\\u09be\\u0987\\u0995\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":83}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(92, 'audit:created', 84, 'App\\Models\\Country#84', NULL, '{\"name_en\":\"Japan\",\"name_bn\":\"\\u099c\\u09be\\u09aa\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":84}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(93, 'audit:created', 85, 'App\\Models\\Country#85', NULL, '{\"name_en\":\"Jordan\",\"name_bn\":\"\\u099c\\u09b0\\u09cd\\u09a1\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":85}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(94, 'audit:created', 86, 'App\\Models\\Country#86', NULL, '{\"name_en\":\"Kazakhstan\",\"name_bn\":\"\\u0995\\u09be\\u099c\\u09be\\u0996\\u09b8\\u09cd\\u09a4\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":86}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(95, 'audit:created', 87, 'App\\Models\\Country#87', NULL, '{\"name_en\":\"Kenya\",\"name_bn\":\"\\u0995\\u09c7\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":87}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(96, 'audit:created', 88, 'App\\Models\\Country#88', NULL, '{\"name_en\":\"Kiribati\",\"name_bn\":\"\\u0995\\u09bf\\u09b0\\u09bf\\u09ac\\u09be\\u09a4\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":88}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(97, 'audit:created', 89, 'App\\Models\\Country#89', NULL, '{\"name_en\":\"Korea, North\",\"name_bn\":\"\\u0989\\u09a4\\u09cd\\u09a4\\u09b0 \\u0995\\u09cb\\u09b0\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":89}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(98, 'audit:created', 90, 'App\\Models\\Country#90', NULL, '{\"name_en\":\"Korea, South\",\"name_bn\":\"\\u09a6\\u0995\\u09cd\\u09b7\\u09bf\\u09a3 \\u0995\\u09cb\\u09b0\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":90}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(99, 'audit:created', 91, 'App\\Models\\Country#91', NULL, '{\"name_en\":\"Kosovo\",\"name_bn\":\"\\u0995\\u09b8\\u09cb\\u09ad\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":91}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(100, 'audit:created', 92, 'App\\Models\\Country#92', NULL, '{\"name_en\":\"Kuwait\",\"name_bn\":\"\\u0995\\u09c1\\u09af\\u09bc\\u09c7\\u09a4\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":92}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(101, 'audit:created', 93, 'App\\Models\\Country#93', NULL, '{\"name_en\":\"Kyrgyzstan\",\"name_bn\":\"\\u0995\\u09bf\\u09b0\\u0997\\u09bf\\u099c\\u09bf\\u09b8\\u09cd\\u09a4\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":93}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(102, 'audit:created', 94, 'App\\Models\\Country#94', NULL, '{\"name_en\":\"Laos\",\"name_bn\":\"\\u09b2\\u09be\\u0993\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":94}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(103, 'audit:created', 95, 'App\\Models\\Country#95', NULL, '{\"name_en\":\"Latvia\",\"name_bn\":\"\\u09b2\\u09be\\u099f\\u09ad\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":95}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(104, 'audit:created', 96, 'App\\Models\\Country#96', NULL, '{\"name_en\":\"Lebanon\",\"name_bn\":\"\\u09b2\\u09c7\\u09ac\\u09be\\u09a8\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":96}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(105, 'audit:created', 97, 'App\\Models\\Country#97', NULL, '{\"name_en\":\"Lesotho\",\"name_bn\":\"\\u09b2\\u09c7\\u09b8\\u09cb\\u09a5\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":97}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(106, 'audit:created', 98, 'App\\Models\\Country#98', NULL, '{\"name_en\":\"Liberia\",\"name_bn\":\"\\u09b2\\u09be\\u0987\\u09ac\\u09c7\\u09b0\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":98}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(107, 'audit:created', 99, 'App\\Models\\Country#99', NULL, '{\"name_en\":\"Libya\",\"name_bn\":\"\\u09b2\\u09bf\\u09ac\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":99}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(108, 'audit:created', 100, 'App\\Models\\Country#100', NULL, '{\"name_en\":\"Liechtenstein\",\"name_bn\":\"\\u09b2\\u09bf\\u099a\\u09c7\\u09a8\\u09b8\\u09cd\\u099f\\u09c7\\u0987\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":100}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(109, 'audit:created', 101, 'App\\Models\\Country#101', NULL, '{\"name_en\":\"Lithuania\",\"name_bn\":\"\\u09b2\\u09bf\\u09a5\\u09c1\\u09af\\u09bc\\u09be\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":101}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(110, 'audit:created', 102, 'App\\Models\\Country#102', NULL, '{\"name_en\":\"Luxembourg\",\"name_bn\":\"\\u09b2\\u09be\\u0995\\u09cd\\u09b8\\u09c7\\u09ae\\u09ac\\u09be\\u09b0\\u09cd\\u0997\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":102}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(111, 'audit:created', 103, 'App\\Models\\Country#103', NULL, '{\"name_en\":\"Madagascar\",\"name_bn\":\"\\u09ae\\u09be\\u09a6\\u09be\\u0997\\u09be\\u09b8\\u09cd\\u0995\\u09be\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":103}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(112, 'audit:created', 104, 'App\\Models\\Country#104', NULL, '{\"name_en\":\"Malawi\",\"name_bn\":\"\\u09ae\\u09be\\u09b2\\u09be\\u0989\\u0987\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":104}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(113, 'audit:created', 105, 'App\\Models\\Country#105', NULL, '{\"name_en\":\"Malaysia\",\"name_bn\":\"\\u09ae\\u09be\\u09b2\\u09af\\u09bc\\u09c7\\u09b6\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":105}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(114, 'audit:created', 106, 'App\\Models\\Country#106', NULL, '{\"name_en\":\"Maldives\",\"name_bn\":\"\\u09ae\\u09be\\u09b2\\u09a6\\u09cd\\u09ac\\u09c0\\u09aa\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":106}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(115, 'audit:created', 107, 'App\\Models\\Country#107', NULL, '{\"name_en\":\"Mali\",\"name_bn\":\"\\u09ae\\u09be\\u09b2\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":107}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(116, 'audit:created', 108, 'App\\Models\\Country#108', NULL, '{\"name_en\":\"Malta\",\"name_bn\":\"\\u09ae\\u09be\\u09b2\\u09cd\\u099f\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":108}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(117, 'audit:created', 109, 'App\\Models\\Country#109', NULL, '{\"name_en\":\"Marshall Islands\",\"name_bn\":\"\\u09ae\\u09be\\u09b0\\u09cd\\u09b6\\u09be\\u09b2 \\u09a6\\u09cd\\u09ac\\u09c0\\u09aa\\u09aa\\u09c1\\u099e\\u09cd\\u099c\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":109}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(118, 'audit:created', 110, 'App\\Models\\Country#110', NULL, '{\"name_en\":\"Mauritania\",\"name_bn\":\"\\u09ae\\u09b0\\u09bf\\u09a4\\u09be\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":110}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(119, 'audit:created', 111, 'App\\Models\\Country#111', NULL, '{\"name_en\":\"Mauritius\",\"name_bn\":\"\\u09ae\\u09b0\\u09bf\\u09b6\\u09be\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":111}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(120, 'audit:created', 112, 'App\\Models\\Country#112', NULL, '{\"name_en\":\"Mexico\",\"name_bn\":\"\\u09ae\\u09c7\\u0995\\u09cd\\u09b8\\u09bf\\u0995\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":112}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(121, 'audit:created', 113, 'App\\Models\\Country#113', NULL, '{\"name_en\":\"Micronesia\",\"name_bn\":\"\\u09ae\\u09be\\u0987\\u0995\\u09cd\\u09b0\\u09cb\\u09a8\\u09c7\\u09b6\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":113}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(122, 'audit:created', 114, 'App\\Models\\Country#114', NULL, '{\"name_en\":\"Moldova\",\"name_bn\":\"\\u09ae\\u09b2\\u09cd\\u09a6\\u09cb\\u09ad\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":114}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(123, 'audit:created', 115, 'App\\Models\\Country#115', NULL, '{\"name_en\":\"Monaco\",\"name_bn\":\"\\u09ae\\u09cb\\u09a8\\u09be\\u0995\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":115}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(124, 'audit:created', 116, 'App\\Models\\Country#116', NULL, '{\"name_en\":\"Mongolia\",\"name_bn\":\"\\u09ae\\u0999\\u09cd\\u0997\\u09cb\\u09b2\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":116}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(125, 'audit:created', 117, 'App\\Models\\Country#117', NULL, '{\"name_en\":\"Montenegro\",\"name_bn\":\"\\u09ae\\u09a8\\u09cd\\u099f\\u09c7\\u09a8\\u09bf\\u0997\\u09cd\\u09b0\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":117}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(126, 'audit:created', 118, 'App\\Models\\Country#118', NULL, '{\"name_en\":\"Morocco\",\"name_bn\":\"\\u09ae\\u09b0\\u0995\\u09cd\\u0995\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":118}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(127, 'audit:created', 119, 'App\\Models\\Country#119', NULL, '{\"name_en\":\"Mozambique\",\"name_bn\":\"\\u09ae\\u09cb\\u099c\\u09be\\u09ae\\u09cd\\u09ac\\u09bf\\u0995\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":119}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(128, 'audit:created', 120, 'App\\Models\\Country#120', NULL, '{\"name_en\":\"Myanmar (formerly Burma)\",\"name_bn\":\"\\u09ae\\u09be\\u09af\\u09bc\\u09be\\u09a8\\u09ae\\u09be\\u09b0 (\\u09aa\\u09c2\\u09b0\\u09cd\\u09ac\\u09ac\\u09b0\\u09cd\\u09a4\\u09c0 \\u09ac\\u09b0\\u09cd\\u09ae\\u09be)\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":120}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(129, 'audit:created', 121, 'App\\Models\\Country#121', NULL, '{\"name_en\":\"Namibia\",\"name_bn\":\"\\u09a8\\u09be\\u09ae\\u09bf\\u09ac\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":121}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(130, 'audit:created', 122, 'App\\Models\\Country#122', NULL, '{\"name_en\":\"Nauru\",\"name_bn\":\"\\u09a8\\u09be\\u0989\\u09b0\\u09c1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":122}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(131, 'audit:created', 123, 'App\\Models\\Country#123', NULL, '{\"name_en\":\"Nepal\",\"name_bn\":\"\\u09a8\\u09c7\\u09aa\\u09be\\u09b2\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":123}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(132, 'audit:created', 124, 'App\\Models\\Country#124', NULL, '{\"name_en\":\"Netherlands\",\"name_bn\":\"\\u09a8\\u09c7\\u09a6\\u09be\\u09b0\\u09b2\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09a1\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":124}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(133, 'audit:created', 125, 'App\\Models\\Country#125', NULL, '{\"name_en\":\"New Zealand\",\"name_bn\":\"\\u09a8\\u09bf\\u0989\\u099c\\u09bf\\u09b2\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09a1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":125}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(134, 'audit:created', 126, 'App\\Models\\Country#126', NULL, '{\"name_en\":\"Nicaragua\",\"name_bn\":\"\\u09a8\\u09bf\\u0995\\u09be\\u09b0\\u09be\\u0997\\u09c1\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":126}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(135, 'audit:created', 127, 'App\\Models\\Country#127', NULL, '{\"name_en\":\"Niger\",\"name_bn\":\"\\u09a8\\u09be\\u0987\\u099c\\u09be\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":127}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(136, 'audit:created', 128, 'App\\Models\\Country#128', NULL, '{\"name_en\":\"Nigeria\",\"name_bn\":\"\\u09a8\\u09be\\u0987\\u099c\\u09c7\\u09b0\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":128}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(137, 'audit:created', 129, 'App\\Models\\Country#129', NULL, '{\"name_en\":\"North Macedonia\",\"name_bn\":\"\\u0989\\u09a4\\u09cd\\u09a4\\u09b0 \\u09ae\\u09cd\\u09af\\u09be\\u09b8\\u09c7\\u09a1\\u09cb\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":129}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(138, 'audit:created', 130, 'App\\Models\\Country#130', NULL, '{\"name_en\":\"Norway\",\"name_bn\":\"\\u09a8\\u09b0\\u0993\\u09af\\u09bc\\u09c7\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":130}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(139, 'audit:created', 131, 'App\\Models\\Country#131', NULL, '{\"name_en\":\"Oman\",\"name_bn\":\"\\u0993\\u09ae\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":131}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(140, 'audit:created', 132, 'App\\Models\\Country#132', NULL, '{\"name_en\":\"Pakistan\",\"name_bn\":\"\\u09aa\\u09be\\u0995\\u09bf\\u09b8\\u09cd\\u09a4\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":132}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(141, 'audit:created', 133, 'App\\Models\\Country#133', NULL, '{\"name_en\":\"Palau\",\"name_bn\":\"\\u09aa\\u09be\\u09b2\\u09be\\u0989\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":133}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(142, 'audit:created', 134, 'App\\Models\\Country#134', NULL, '{\"name_en\":\"Palestine State\",\"name_bn\":\"\\u09aa\\u09cd\\u09af\\u09be\\u09b2\\u09c7\\u09b8\\u09cd\\u099f\\u09be\\u0987\\u09a8 \\u09b0\\u09be\\u09b7\\u09cd\\u099f\\u09cd\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":134}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(143, 'audit:created', 135, 'App\\Models\\Country#135', NULL, '{\"name_en\":\"Panama\",\"name_bn\":\"\\u09aa\\u09be\\u09a8\\u09be\\u09ae\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":135}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(144, 'audit:created', 136, 'App\\Models\\Country#136', NULL, '{\"name_en\":\"Papua New Guinea\",\"name_bn\":\"\\u09aa\\u09be\\u09aa\\u09c1\\u09af\\u09bc\\u09be \\u09a8\\u09bf\\u0989 \\u0997\\u09bf\\u09a8\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":136}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(145, 'audit:created', 137, 'App\\Models\\Country#137', NULL, '{\"name_en\":\"Paraguay\",\"name_bn\":\"\\u09aa\\u09cd\\u09af\\u09be\\u09b0\\u09be\\u0997\\u09c1\\u09af\\u09bc\\u09c7\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":137}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(146, 'audit:created', 138, 'App\\Models\\Country#138', NULL, '{\"name_en\":\"Peru\",\"name_bn\":\"\\u09aa\\u09c7\\u09b0\\u09c1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":138}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(147, 'audit:created', 139, 'App\\Models\\Country#139', NULL, '{\"name_en\":\"Philippines\",\"name_bn\":\"\\u09ab\\u09bf\\u09b2\\u09bf\\u09aa\\u09be\\u0987\\u09a8\\u09cd\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":139}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(148, 'audit:created', 140, 'App\\Models\\Country#140', NULL, '{\"name_en\":\"Poland\",\"name_bn\":\"\\u09aa\\u09cb\\u09b2\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09a1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":140}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(149, 'audit:created', 141, 'App\\Models\\Country#141', NULL, '{\"name_en\":\"Portugal\",\"name_bn\":\"\\u09aa\\u09b0\\u09cd\\u09a4\\u09c1\\u0997\\u09be\\u09b2\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":141}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(150, 'audit:created', 142, 'App\\Models\\Country#142', NULL, '{\"name_en\":\"Qatar\",\"name_bn\":\"\\u0995\\u09be\\u09a4\\u09be\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":142}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(151, 'audit:created', 143, 'App\\Models\\Country#143', NULL, '{\"name_en\":\"Romania\",\"name_bn\":\"\\u09b0\\u09c1\\u09ae\\u09be\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":143}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(152, 'audit:created', 144, 'App\\Models\\Country#144', NULL, '{\"name_en\":\"Russia\",\"name_bn\":\"\\u09b0\\u09be\\u09b6\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":144}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(153, 'audit:created', 145, 'App\\Models\\Country#145', NULL, '{\"name_en\":\"Rwanda\",\"name_bn\":\"\\u09b0\\u09c1\\u09af\\u09bc\\u09be\\u09a8\\u09cd\\u09a1\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":145}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(154, 'audit:created', 146, 'App\\Models\\Country#146', NULL, '{\"name_en\":\"Saint Kitts and Nevis\",\"name_bn\":\"\\u09b8\\u09c7\\u09a8\\u09cd\\u099f \\u0995\\u09bf\\u099f\\u09b8 \\u0993 \\u09a8\\u09c7\\u09ad\\u09bf\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":146}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(155, 'audit:created', 147, 'App\\Models\\Country#147', NULL, '{\"name_en\":\"Saint Lucia\",\"name_bn\":\"\\u09b8\\u09c7\\u09a8\\u09cd\\u099f \\u09b2\\u09c1\\u09b8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":147}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(156, 'audit:created', 148, 'App\\Models\\Country#148', NULL, '{\"name_en\":\"Saint Vincent and the Grenadines\",\"name_bn\":\"\\u09b8\\u09c7\\u09a8\\u09cd\\u099f \\u09ad\\u09bf\\u09a8\\u09b8\\u09c7\\u09a8\\u09cd\\u099f \\u098f\\u09ac\\u0982 \\u0997\\u09cd\\u09b0\\u09c7\\u09a8\\u09be\\u09a1\\u09bf\\u09a8\\u09b8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":148}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(157, 'audit:created', 149, 'App\\Models\\Country#149', NULL, '{\"name_en\":\"Samoa\",\"name_bn\":\"\\u09b8\\u09be\\u09ae\\u09cb\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":149}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(158, 'audit:created', 150, 'App\\Models\\Country#150', NULL, '{\"name_en\":\"San Marino\",\"name_bn\":\"\\u09b8\\u09be\\u09a8 \\u09ae\\u09be\\u09b0\\u09bf\\u09a8\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":150}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(159, 'audit:created', 151, 'App\\Models\\Country#151', NULL, '{\"name_en\":\"Sao Tome and Principe\",\"name_bn\":\"\\u09b8\\u09be\\u0993 \\u099f\\u09cb\\u09ae\\u09bf \\u0993 \\u09aa\\u09cd\\u09b0\\u09bf\\u09a8\\u09cd\\u09b8\\u09bf\\u09aa\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":151}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(160, 'audit:created', 152, 'App\\Models\\Country#152', NULL, '{\"name_en\":\"Saudi Arabia\",\"name_bn\":\"\\u09b8\\u09cc\\u09a6\\u09bf \\u0986\\u09b0\\u09ac\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":152}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(161, 'audit:created', 153, 'App\\Models\\Country#153', NULL, '{\"name_en\":\"Senegal\",\"name_bn\":\"\\u09b8\\u09c7\\u09a8\\u09c7\\u0997\\u09be\\u09b2\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":153}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(162, 'audit:created', 154, 'App\\Models\\Country#154', NULL, '{\"name_en\":\"Serbia\",\"name_bn\":\"\\u09b8\\u09be\\u09b0\\u09cd\\u09ac\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":154}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(163, 'audit:created', 155, 'App\\Models\\Country#155', NULL, '{\"name_en\":\"Seychelles\",\"name_bn\":\"\\u09b8\\u09bf\\u09b8\\u09bf\\u09b2\\u09bf\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":155}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(164, 'audit:created', 156, 'App\\Models\\Country#156', NULL, '{\"name_en\":\"Sierra Leone\",\"name_bn\":\"\\u09b8\\u09bf\\u09af\\u09bc\\u09c7\\u09b0\\u09be \\u09b2\\u09bf\\u0993\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":156}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(165, 'audit:created', 157, 'App\\Models\\Country#157', NULL, '{\"name_en\":\"Singapore\",\"name_bn\":\"\\u09b8\\u09bf\\u0999\\u09cd\\u0997\\u09be\\u09aa\\u09c1\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":157}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(166, 'audit:created', 158, 'App\\Models\\Country#158', NULL, '{\"name_en\":\"Slovakia\",\"name_bn\":\"\\u09b8\\u09cd\\u09b2\\u09cb\\u09ad\\u09be\\u0995\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":158}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(167, 'audit:created', 159, 'App\\Models\\Country#159', NULL, '{\"name_en\":\"Slovenia\",\"name_bn\":\"\\u09b8\\u09cd\\u09b2\\u09cb\\u09ad\\u09c7\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":159}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(168, 'audit:created', 160, 'App\\Models\\Country#160', NULL, '{\"name_en\":\"Solomon Islands\",\"name_bn\":\"\\u09b8\\u09b2\\u09cb\\u09ae\\u09a8 \\u09a6\\u09cd\\u09ac\\u09c0\\u09aa\\u09aa\\u09c1\\u099e\\u09cd\\u099c\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":160}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(169, 'audit:created', 161, 'App\\Models\\Country#161', NULL, '{\"name_en\":\"Somalia\",\"name_bn\":\"\\u09b8\\u09cb\\u09ae\\u09be\\u09b2\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":161}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(170, 'audit:created', 162, 'App\\Models\\Country#162', NULL, '{\"name_en\":\"South Africa\",\"name_bn\":\"\\u09a6\\u0995\\u09cd\\u09b7\\u09bf\\u09a3 \\u0986\\u09ab\\u09cd\\u09b0\\u09bf\\u0995\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":162}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(171, 'audit:created', 163, 'App\\Models\\Country#163', NULL, '{\"name_en\":\"South Sudan\",\"name_bn\":\"\\u09a6\\u0995\\u09cd\\u09b7\\u09bf\\u09a3 \\u09b8\\u09c1\\u09a6\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":163}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(172, 'audit:created', 164, 'App\\Models\\Country#164', NULL, '{\"name_en\":\"Spain\",\"name_bn\":\"\\u09b8\\u09cd\\u09aa\\u09c7\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":164}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(173, 'audit:created', 165, 'App\\Models\\Country#165', NULL, '{\"name_en\":\"Sri Lanka\",\"name_bn\":\"\\u09b6\\u09cd\\u09b0\\u09c0\\u09b2\\u0999\\u09cd\\u0995\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":165}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(174, 'audit:created', 166, 'App\\Models\\Country#166', NULL, '{\"name_en\":\"Sudan\",\"name_bn\":\"\\u09b8\\u09c1\\u09a6\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":166}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(175, 'audit:created', 167, 'App\\Models\\Country#167', NULL, '{\"name_en\":\"Suriname\",\"name_bn\":\"\\u09b8\\u09c1\\u09b0\\u09bf\\u09a8\\u09be\\u09ae\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":167}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(176, 'audit:created', 168, 'App\\Models\\Country#168', NULL, '{\"name_en\":\"Sweden\",\"name_bn\":\"\\u09b8\\u09c1\\u0987\\u09a1\\u09c7\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":168}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(177, 'audit:created', 169, 'App\\Models\\Country#169', NULL, '{\"name_en\":\"Switzerland\",\"name_bn\":\"\\u09b8\\u09c1\\u0987\\u099c\\u09be\\u09b0\\u09b2\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09a1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":169}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(178, 'audit:created', 170, 'App\\Models\\Country#170', NULL, '{\"name_en\":\"Syria\",\"name_bn\":\"\\u09b8\\u09bf\\u09b0\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":170}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(179, 'audit:created', 171, 'App\\Models\\Country#171', NULL, '{\"name_en\":\"Tajikistan\",\"name_bn\":\"\\u09a4\\u09be\\u099c\\u09bf\\u0995\\u09bf\\u09b8\\u09cd\\u09a4\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":171}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(180, 'audit:created', 172, 'App\\Models\\Country#172', NULL, '{\"name_en\":\"Tanzania\",\"name_bn\":\"\\u09a4\\u09be\\u099e\\u09cd\\u099c\\u09be\\u09a8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":172}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(181, 'audit:created', 173, 'App\\Models\\Country#173', NULL, '{\"name_en\":\"Thailand\",\"name_bn\":\"\\u09a5\\u09be\\u0987\\u09b2\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09a1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":173}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(182, 'audit:created', 174, 'App\\Models\\Country#174', NULL, '{\"name_en\":\"Timor-Leste\",\"name_bn\":\"\\u09a4\\u09bf\\u09ae\\u09c1\\u09b0-\\u09b2\\u09c7\\u09b8\\u09cd\\u09a4\\u09c7\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":174}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(183, 'audit:created', 175, 'App\\Models\\Country#175', NULL, '{\"name_en\":\"Togo\",\"name_bn\":\"\\u099f\\u09cb\\u0997\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":175}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(184, 'audit:created', 176, 'App\\Models\\Country#176', NULL, '{\"name_en\":\"Tonga\",\"name_bn\":\"\\u099f\\u0999\\u09cd\\u0997\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":176}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(185, 'audit:created', 177, 'App\\Models\\Country#177', NULL, '{\"name_en\":\"Trinidad and Tobago\",\"name_bn\":\"\\u099f\\u09cd\\u09b0\\u09bf\\u09a8\\u09bf\\u09a1\\u09be\\u09a1 \\u0993 \\u099f\\u09cb\\u09ac\\u09be\\u0997\\u09cb\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":177}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(186, 'audit:created', 178, 'App\\Models\\Country#178', NULL, '{\"name_en\":\"Tunisia\",\"name_bn\":\"\\u09a4\\u09bf\\u0989\\u09a8\\u09bf\\u09b8\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":178}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(187, 'audit:created', 179, 'App\\Models\\Country#179', NULL, '{\"name_en\":\"Turkey\",\"name_bn\":\"\\u09a4\\u09c1\\u09b0\\u09b8\\u09cd\\u0995\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":179}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(188, 'audit:created', 180, 'App\\Models\\Country#180', NULL, '{\"name_en\":\"Turkmenistan\",\"name_bn\":\"\\u09a4\\u09c1\\u09b0\\u09cd\\u0995\\u09ae\\u09c7\\u09a8\\u09bf\\u09b8\\u09cd\\u09a4\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":180}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(189, 'audit:created', 181, 'App\\Models\\Country#181', NULL, '{\"name_en\":\"Tuvalu\",\"name_bn\":\"\\u099f\\u09c1\\u09ad\\u09be\\u09b2\\u09c1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":181}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(190, 'audit:created', 182, 'App\\Models\\Country#182', NULL, '{\"name_en\":\"Uganda\",\"name_bn\":\"\\u0989\\u0997\\u09be\\u09a8\\u09cd\\u09a1\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":182}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(191, 'audit:created', 183, 'App\\Models\\Country#183', NULL, '{\"name_en\":\"Ukraine\",\"name_bn\":\"\\u0987\\u0989\\u0995\\u09cd\\u09b0\\u09c7\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":183}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(192, 'audit:created', 184, 'App\\Models\\Country#184', NULL, '{\"name_en\":\"United Arab Emirates\",\"name_bn\":\"\\u09b8\\u0982\\u09af\\u09c1\\u0995\\u09cd\\u09a4 \\u0986\\u09b0\\u09ac \\u0986\\u09ae\\u09bf\\u09b0\\u09be\\u09a4\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":184}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(193, 'audit:created', 185, 'App\\Models\\Country#185', NULL, '{\"name_en\":\"United Kingdom\",\"name_bn\":\"\\u09af\\u09c1\\u0995\\u09cd\\u09a4\\u09b0\\u09be\\u099c\\u09cd\\u09af\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":185}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(194, 'audit:created', 186, 'App\\Models\\Country#186', NULL, '{\"name_en\":\"United States of America\",\"name_bn\":\"\\u09ae\\u09be\\u09b0\\u09cd\\u0995\\u09bf\\u09a8 \\u09af\\u09c1\\u0995\\u09cd\\u09a4\\u09b0\\u09be\\u09b7\\u09cd\\u099f\\u09cd\\u09b0\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":186}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(195, 'audit:created', 187, 'App\\Models\\Country#187', NULL, '{\"name_en\":\"Uruguay\",\"name_bn\":\"\\u0989\\u09b0\\u09c1\\u0997\\u09c1\\u09af\\u09bc\\u09c7\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":187}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(196, 'audit:created', 188, 'App\\Models\\Country#188', NULL, '{\"name_en\":\"Uzbekistan\",\"name_bn\":\"\\u0989\\u099c\\u09ac\\u09c7\\u0995\\u09bf\\u09b8\\u09cd\\u09a4\\u09be\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":188}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(197, 'audit:created', 189, 'App\\Models\\Country#189', NULL, '{\"name_en\":\"Vanuatu\",\"name_bn\":\"\\u09ad\\u09be\\u09a8\\u09c1\\u09af\\u09bc\\u09be\\u099f\\u09c1\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":189}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(198, 'audit:created', 190, 'App\\Models\\Country#190', NULL, '{\"name_en\":\"Venezuela\",\"name_bn\":\"\\u09ad\\u09c7\\u09a8\\u09c7\\u099c\\u09c1\\u09af\\u09bc\\u09c7\\u09b2\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":190}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(199, 'audit:created', 191, 'App\\Models\\Country#191', NULL, '{\"name_en\":\"Vietnam\",\"name_bn\":\"\\u09ad\\u09bf\\u09af\\u09bc\\u09c7\\u09a4\\u09a8\\u09be\\u09ae\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":191}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(200, 'audit:created', 192, 'App\\Models\\Country#192', NULL, '{\"name_en\":\"Yemen\",\"name_bn\":\"\\u0987\\u09af\\u09bc\\u09c7\\u09ae\\u09c7\\u09a8\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":192}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(201, 'audit:created', 193, 'App\\Models\\Country#193', NULL, '{\"name_en\":\"Zambia\",\"name_bn\":\"\\u099c\\u09be\\u09ae\\u09cd\\u09ac\\u09bf\\u09af\\u09bc\\u09be\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":193}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(202, 'audit:created', 194, 'App\\Models\\Country#194', NULL, '{\"name_en\":\"Zimbabwe\",\"name_bn\":\"\\u099c\\u09bf\\u09ae\\u09cd\\u09ac\\u09be\\u09ac\\u09c1\\u09af\\u09bc\\u09c7\",\"updated_at\":\"2024-05-26 21:01:54\",\"created_at\":\"2024-05-26 21:01:54\",\"id\":194}', '127.0.0.1', '2024-05-27 01:01:54', '2024-05-27 01:01:54'),
(203, 'audit:created', 1, 'App\\Models\\EmployeeList#1', 2, '{\"fullname_bn\":\"\\u09a1. \\u09ae\\u09b0\\u09bf\\u09df\\u09ae \\u0986\\u0995\\u09cd\\u09a4\\u09be\\u09b0\",\"fullname_en\":\"Dr. Mariam Akhter\",\"employeeid\":\"13271\",\"cadreid\":null,\"batch_id\":null,\"fname_bn\":\"\\u09ae\\u09a4\\u09bf\\u0989\\u09b0 \\u09b0\\u09b9\\u09ae\\u09be\\u09a8 (\\u09ae\\u09c3\\u09a4)\",\"fname_en\":\"Matiur Rahman (Late)\",\"mname_bn\":\"\\u09b9\\u09cb\\u09b8\\u09a8\\u09c7 \\u0986\\u09b0\\u09be \\u09ac\\u09c7\\u0997\\u09ae\",\"mname_en\":\"Hosne Ara Begum\",\"date_of_birth\":\"31\\/12\\/1968\",\"height\":\"155\",\"special_identity\":null,\"home_district_id\":\"18\",\"marital_statu_id\":\"1\",\"gender_id\":\"2\",\"religion_id\":\"1\",\"blood_group_id\":\"2\",\"email\":\"mariamakter2002@gmail.com\",\"mobile_number\":\"01711170697\",\"nid\":\"19682694811012373\",\"passport\":null,\"license_type_id\":\"1\",\"joiningexaminfo_id\":\"1\",\"date_of_regularization\":\"13\\/03\\/2024\",\"regularization_issue_date\":\"27\\/05\\/2024\",\"grade_id\":null,\"fjoining_date\":\"22\\/02\\/1995\",\"first_joining_office_name\":\"Development Planning Unit , Bana Bhaban, Agargaon, Dhaka\",\"first_joining_memo_no\":null,\"date_of_gazette\":\"27\\/05\\/2024\",\"date_of_con_serviec\":\"23\\/06\\/2019\",\"quota_id\":\"2\",\"updated_at\":\"2024-05-27 05:57:48\",\"created_at\":\"2024-05-27 05:57:48\",\"id\":1,\"birth_certificate_upload\":null,\"nid_upload\":null,\"passport_upload\":null,\"license_upload\":null,\"certificate_upload\":null,\"first_joining_order\":null,\"fjoining_letter\":null,\"date_of_gazette_if_any\":null,\"regularization_office_orde_go\":null,\"confirmation_in_service\":null,\"electric_signature\":null,\"employee_photo\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 09:57:48', '2024-05-27 09:57:48'),
(204, 'audit:created', 1, 'App\\Models\\EmergenceContacte#1', 2, '{\"contact_person_name\":\"S. M. Ahsanul Aziz\",\"contact_person_relation\":\"Husband\",\"contact_person_number\":\"01711170697\",\"address\":\"Mirpur-2\",\"updated_at\":\"2024-05-27 06:50:43\",\"created_at\":\"2024-05-27 06:50:43\",\"id\":1}', '27.147.163.77', '2024-05-27 10:50:43', '2024-05-27 10:50:43'),
(205, 'audit:created', 1, 'App\\Models\\Child#1', 2, '{\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"date_of_birth\":\"29\\/04\\/2002\",\"complite_21\":\"29\\/04\\/2023\",\"gender_id\":\"1\",\"nid_number\":null,\"passport_number\":null,\"updated_at\":\"2024-05-27 07:10:39\",\"created_at\":\"2024-05-27 07:10:39\",\"id\":1,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 11:10:39', '2024-05-27 11:10:39'),
(206, 'audit:created', 1, 'App\\Models\\JobHistory#1', 2, '{\"office_unit_id\":\"2\",\"circle_list_id\":\"1\",\"designation_id\":\"1\",\"joining_date\":\"27\\/05\\/2000\",\"release_date\":\"27\\/05\\/2025\",\"grade_id\":\"1\",\"updated_at\":\"2024-05-27 07:28:17\",\"created_at\":\"2024-05-27 07:28:17\",\"id\":1,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 11:28:17', '2024-05-27 11:28:17'),
(207, 'audit:created', 2, 'App\\Models\\JobHistory#2', 2, '{\"office_unit_id\":\"1\",\"level_2\":\"2\",\"designation_id\":\"1\",\"joining_date\":\"27\\/05\\/2000\",\"release_date\":\"27\\/05\\/2025\",\"grade_id\":\"1\",\"updated_at\":\"2024-05-27 07:29:26\",\"created_at\":\"2024-05-27 07:29:26\",\"id\":2,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 11:29:26', '2024-05-27 11:29:26'),
(208, 'audit:created', 3, 'App\\Models\\JobHistory#3', 2, '{\"office_unit_id\":\"3\",\"institutename\":\"Institution\",\"academy_type\":\"FSTI\",\"posting_in_circle\":\"Chittagong\",\"designation_id\":\"1\",\"joining_date\":\"27\\/05\\/2000\",\"release_date\":\"27\\/05\\/2025\",\"grade_id\":\"1\",\"updated_at\":\"2024-05-27 07:31:15\",\"created_at\":\"2024-05-27 07:31:15\",\"id\":3,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 11:31:15', '2024-05-27 11:31:15'),
(209, 'audit:created', 1, 'App\\Models\\EmployeePromotion#1', 2, '{\"new_designation_id\":\"1\",\"go_issue_date\":\"26\\/05\\/2023\",\"office_order_date\":\"27\\/05\\/2025\",\"updated_at\":\"2024-05-27 08:05:34\",\"created_at\":\"2024-05-27 08:05:34\",\"id\":1,\"office_order\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 12:05:34', '2024-05-27 12:05:34'),
(210, 'audit:created', 1, 'App\\Models\\LeaveRecord#1', 2, '{\"leave_category_id\":\"1\",\"type_of_leave_id\":\"1\",\"start_date\":\"27\\/05\\/2024\",\"end_date\":\"29\\/05\\/2024\",\"reason\":\"<figure class=\\\"image\\\"><img src=\\\"http:\\/\\/localhost\\/storage\\/7\\/android.png\\\"><\\/figure>\",\"updated_at\":\"2024-05-27 08:16:03\",\"created_at\":\"2024-05-27 08:16:03\",\"id\":1}', '27.147.163.77', '2024-05-27 12:16:03', '2024-05-27 12:16:03'),
(211, 'audit:updated', 1, 'App\\Models\\LeaveRecord#1', 2, '{\"reason\":null,\"updated_at\":\"2024-05-27 08:21:16\",\"employee_id\":\"1\"}', '27.147.163.77', '2024-05-27 12:21:16', '2024-05-27 12:21:16'),
(212, 'audit:created', 1, 'App\\Models\\EducationInformatione#1', 2, '{\"employee_id\":\"1\",\"name_of_exam_id\":\"1\",\"school_university_name\":\"Khagrachari Govt. High School, Khagrachari\",\"exam_board_id\":\"2\",\"result_id\":\"1\",\"concentration_major_group\":\"Science\",\"passing_year\":\"1978\",\"updated_at\":\"2024-05-27 08:23:03\",\"created_at\":\"2024-05-27 08:23:03\",\"id\":1,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 12:23:03', '2024-05-27 12:23:03'),
(213, 'audit:created', 1, 'App\\Models\\Professionale#1', 2, '{\"qualification_title\":\"BSC\",\"institution\":\"Dhaka College\",\"from_date\":\"01\\/01\\/2019\",\"to_date\":\"23\\/08\\/2024\",\"passing_year\":\"2001\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 08:25:10\",\"created_at\":\"2024-05-27 08:25:10\",\"id\":1}', '27.147.163.77', '2024-05-27 12:25:10', '2024-05-27 12:25:10'),
(214, 'audit:created', 1, 'App\\Models\\SpouseInformatione#1', 2, '{\"employee_id\":\"1\",\"name_bn\":\"\\u098f\\u09b8. \\u098f\\u09ae. \\u0986\\u09b9\\u09b8\\u09be\\u09a8\\u09c1\\u09b2 \\u0986\\u099c\\u09bf\\u099c\",\"name_en\":\"Mashrur Ahsan\",\"nid_number\":\"45345345345345\",\"occupation\":\"Govt. Service\",\"office_address\":\"Dhaka\",\"phone_number\":\"01957073942\",\"present_addess\":\"<p>dfdfsd<\\/p>\",\"permanent_addess\":\"<p>sdfsdf<\\/p>\",\"updated_at\":\"2024-05-27 08:26:33\",\"created_at\":\"2024-05-27 08:26:33\",\"id\":1,\"nid_upload\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 12:26:33', '2024-05-27 12:26:33'),
(215, 'audit:created', 1, 'App\\Models\\Addressdetaile#1', 2, '{\"address_type\":\"Present\",\"flat_house\":\"358 South Paikpara\",\"post_office\":\"Mirpur-2\",\"post_code\":\"7230\",\"thana_upazila_id\":\"1\",\"phone_number\":\"9026394\",\"status\":\"No\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 08:29:17\",\"created_at\":\"2024-05-27 08:29:17\",\"id\":1}', '27.147.163.77', '2024-05-27 12:29:17', '2024-05-27 12:29:17'),
(216, 'audit:created', 2, 'App\\Models\\Addressdetaile#2', 2, '{\"address_type\":\"Permanent\",\"flat_house\":\"358 South Paikpara\",\"post_office\":\"Mirpur-2\",\"post_code\":\"7230\",\"thana_upazila_id\":\"1\",\"phone_number\":\"9026394\",\"status\":\"No\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 08:29:32\",\"created_at\":\"2024-05-27 08:29:32\",\"id\":2}', '27.147.163.77', '2024-05-27 12:29:32', '2024-05-27 12:29:32'),
(217, 'audit:created', 2, 'App\\Models\\SpouseInformatione#2', 2, '{\"employee_id\":\"1\",\"name_bn\":\"\\u098f\\u09b8. \\u098f\\u09ae. \\u0986\\u09b9\\u09b8\\u09be\\u09a8\\u09c1\\u09b2 \\u0986\\u099c\\u09bf\\u099c\",\"name_en\":\"S. M. Ahsanul Aziz\",\"nid_number\":\"45345345345345\",\"occupation\":\"Govt. Service\",\"office_address\":\"Dhaka\",\"phone_number\":\"9026394\",\"present_addess\":null,\"permanent_addess\":null,\"updated_at\":\"2024-05-27 08:30:06\",\"created_at\":\"2024-05-27 08:30:06\",\"id\":2,\"nid_upload\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 12:30:06', '2024-05-27 12:30:06'),
(218, 'audit:created', 1, 'App\\Models\\Training#1', 2, '{\"training_type_id\":\"1\",\"training_name\":\"Training on Apprising Bangladesh Delta Plan 2100\",\"institute_name\":\"The General Economics Division(GED) of the Bangladesh Planning Commission,\",\"country_id\":\"14\",\"start_date\":\"22\\/07\\/2020\",\"end_date\":\"25\\/07\\/2020\",\"grade\":null,\"position\":null,\"location\":\"Dhaka\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 08:38:05\",\"created_at\":\"2024-05-27 08:38:05\",\"id\":1}', '27.147.163.77', '2024-05-27 12:38:05', '2024-05-27 12:38:05'),
(219, 'audit:created', 1, 'App\\Models\\TravelRecord#1', 2, '{\"country_id\":\"76\",\"title\":null,\"purpose_id\":null,\"start_date\":\"12\\/09\\/2018\",\"end_date\":\"14\\/09\\/2018\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 08:42:12\",\"created_at\":\"2024-05-27 08:42:12\",\"id\":1}', '27.147.163.77', '2024-05-27 12:42:12', '2024-05-27 12:42:12'),
(220, 'audit:created', 1, 'App\\Models\\ForeignTravelPersonal#1', 2, '{\"title\":null,\"country_id\":\"76\",\"purpose_id\":\"1\",\"from_date\":\"27\\/05\\/2024\",\"to_date\":\"29\\/05\\/2024\",\"leave_id\":\"1\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 08:50:00\",\"created_at\":\"2024-05-27 08:50:00\",\"id\":1}', '27.147.163.77', '2024-05-27 12:50:00', '2024-05-27 12:50:00'),
(221, 'audit:created', 1, 'App\\Models\\Extracurriculam#1', 2, '{\"activity_name\":\"Bangladesh\",\"organization\":null,\"position\":null,\"start_date\":null,\"end_date\":null,\"description\":\"<p>Nothing<\\/p>\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 08:57:57\",\"created_at\":\"2024-05-27 08:57:57\",\"id\":1,\"attatchment\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 12:57:57', '2024-05-27 12:57:57'),
(222, 'audit:created', 1, 'App\\Models\\Publication#1', 2, '{\"title\":\"Asian Journal\",\"publication_type\":\"Books\",\"publication_media\":null,\"publication_date\":\"25\\/05\\/2024\",\"publication_link\":null,\"description\":\"<figure class=\\\"image\\\"><img src=\\\"http:\\/\\/localhost\\/storage\\/9\\/play-store.png\\\"><\\/figure>\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 09:00:52\",\"created_at\":\"2024-05-27 09:00:52\",\"id\":1}', '27.147.163.77', '2024-05-27 13:00:52', '2024-05-27 13:00:52'),
(223, 'audit:created', 1, 'App\\Models\\CriminalProsecutione#1', 2, '{\"judgement_type\":\"Nothing\",\"natureof_offence\":\"Demo\",\"government_order_no\":\"12365\",\"remzrk\":\"<p>Dhaka<\\/p>\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 09:13:06\",\"created_at\":\"2024-05-27 09:13:06\",\"id\":1,\"court_order\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:13:06', '2024-05-27 13:13:06'),
(224, 'audit:created', 1, 'App\\Models\\CriminalproDisciplinary#1', 2, '{\"criminalprosecutione_id\":\"1\",\"judgement_type\":\"Nothing\",\"government_order_no\":\"12365\",\"remarks\":\"Dhaka\",\"updated_at\":\"2024-05-27 09:16:45\",\"created_at\":\"2024-05-27 09:16:45\",\"id\":1,\"order_upload_file\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:16:45', '2024-05-27 13:16:45'),
(225, 'audit:created', 1, 'App\\Models\\Language#1', 2, '{\"employee_id\":\"1\",\"language_id\":\"1\",\"read_id\":\"2\",\"write_id\":\"2\",\"speak_id\":\"3\",\"updated_at\":\"2024-05-27 09:17:07\",\"created_at\":\"2024-05-27 09:17:07\",\"id\":1}', '27.147.163.77', '2024-05-27 13:17:07', '2024-05-27 13:17:07'),
(226, 'audit:created', 1, 'App\\Models\\AcrMonitoring#1', 2, '{\"year\":\"2022\",\"reviewer\":null,\"review_date\":null,\"remarks\":\"<p>Problem<\\/p>\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 09:19:51\",\"created_at\":\"2024-05-27 09:19:51\",\"id\":1}', '27.147.163.77', '2024-05-27 13:19:51', '2024-05-27 13:19:51'),
(227, 'audit:created', 2, 'App\\Models\\EmergenceContacte#2', 2, '{\"contact_person_name\":\"S. M. Ahsanul Aziz\",\"contact_person_relation\":\"Husband\",\"contact_person_number\":\"01711170697\",\"address\":\"Dhaka\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 09:21:06\",\"created_at\":\"2024-05-27 09:21:06\",\"id\":2}', '27.147.163.77', '2024-05-27 13:21:06', '2024-05-27 13:21:06'),
(228, 'audit:created', 2, 'App\\Models\\Child#2', 2, '{\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"date_of_birth\":\"04\\/04\\/2002\",\"complite_21\":\"04\\/04\\/2023\",\"gender_id\":\"1\",\"nid_number\":null,\"passport_number\":null,\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 09:23:54\",\"created_at\":\"2024-05-27 09:23:54\",\"id\":2,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:23:54', '2024-05-27 13:23:54'),
(229, 'audit:created', 3, 'App\\Models\\Child#3', 2, '{\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"date_of_birth\":\"29\\/04\\/2002\",\"complite_21\":\"29\\/04\\/2023\",\"gender_id\":\"1\",\"nid_number\":null,\"passport_number\":null,\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 09:25:06\",\"created_at\":\"2024-05-27 09:25:06\",\"id\":3,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:25:06', '2024-05-27 13:25:06'),
(230, 'audit:created', 4, 'App\\Models\\Child#4', 2, '{\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"date_of_birth\":\"14\\/05\\/2024\",\"complite_21\":\"14\\/05\\/2045\",\"gender_id\":\"1\",\"nid_number\":null,\"passport_number\":null,\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 09:26:31\",\"created_at\":\"2024-05-27 09:26:31\",\"id\":4,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:26:31', '2024-05-27 13:26:31'),
(231, 'audit:deleted', 2, 'App\\Models\\Child#2', 2, '{\"id\":2,\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"date_of_birth\":\"04\\/04\\/2002\",\"complite_21\":\"04\\/04\\/2023\",\"nid_number\":null,\"passport_number\":null,\"created_at\":\"2024-05-27 09:23:54\",\"updated_at\":\"2024-05-27 09:28:56\",\"deleted_at\":\"2024-05-27 09:28:56\",\"employee_id\":1,\"gender_id\":1,\"birth_certificate\":{\"id\":12,\"model_type\":\"App\\\\Models\\\\Child\",\"model_id\":2,\"uuid\":\"01e75f55-13de-46a6-9eb1-7d094ec60e1e\",\"collection_name\":\"birth_certificate\",\"name\":\"665450a764087_android\",\"file_name\":\"665450a764087_android.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":2835,\"manipulations\":[],\"custom_properties\":[],\"generated_conversions\":{\"thumb\":true,\"preview\":true},\"responsive_images\":[],\"order_column\":12,\"created_at\":\"2024-05-27T09:23:54.000000Z\",\"updated_at\":\"2024-05-27T09:23:54.000000Z\",\"original_url\":\"http:\\/\\/localhost\\/storage\\/12\\/665450a764087_android.png\",\"preview_url\":\"http:\\/\\/localhost\\/storage\\/12\\/conversions\\/665450a764087_android-preview.jpg\"},\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[{\"id\":12,\"model_type\":\"App\\\\Models\\\\Child\",\"model_id\":2,\"uuid\":\"01e75f55-13de-46a6-9eb1-7d094ec60e1e\",\"collection_name\":\"birth_certificate\",\"name\":\"665450a764087_android\",\"file_name\":\"665450a764087_android.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":2835,\"manipulations\":[],\"custom_properties\":[],\"generated_conversions\":{\"thumb\":true,\"preview\":true},\"responsive_images\":[],\"order_column\":12,\"created_at\":\"2024-05-27T09:23:54.000000Z\",\"updated_at\":\"2024-05-27T09:23:54.000000Z\",\"original_url\":\"http:\\/\\/localhost\\/storage\\/12\\/665450a764087_android.png\",\"preview_url\":\"http:\\/\\/localhost\\/storage\\/12\\/conversions\\/665450a764087_android-preview.jpg\"}]}', '27.147.163.77', '2024-05-27 13:28:56', '2024-05-27 13:28:56'),
(232, 'audit:deleted', 3, 'App\\Models\\Child#3', 2, '{\"id\":3,\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"date_of_birth\":\"29\\/04\\/2002\",\"complite_21\":\"29\\/04\\/2023\",\"nid_number\":null,\"passport_number\":null,\"created_at\":\"2024-05-27 09:25:06\",\"updated_at\":\"2024-05-27 09:28:56\",\"deleted_at\":\"2024-05-27 09:28:56\",\"employee_id\":1,\"gender_id\":1,\"birth_certificate\":{\"id\":13,\"model_type\":\"App\\\\Models\\\\Child\",\"model_id\":3,\"uuid\":\"db7da9d6-c843-4236-8dad-10266a694e86\",\"collection_name\":\"birth_certificate\",\"name\":\"665451589442d_android\",\"file_name\":\"665451589442d_android.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":2835,\"manipulations\":[],\"custom_properties\":[],\"generated_conversions\":{\"thumb\":true,\"preview\":true},\"responsive_images\":[],\"order_column\":13,\"created_at\":\"2024-05-27T09:25:06.000000Z\",\"updated_at\":\"2024-05-27T09:25:06.000000Z\",\"original_url\":\"http:\\/\\/localhost\\/storage\\/13\\/665451589442d_android.png\",\"preview_url\":\"http:\\/\\/localhost\\/storage\\/13\\/conversions\\/665451589442d_android-preview.jpg\"},\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[{\"id\":13,\"model_type\":\"App\\\\Models\\\\Child\",\"model_id\":3,\"uuid\":\"db7da9d6-c843-4236-8dad-10266a694e86\",\"collection_name\":\"birth_certificate\",\"name\":\"665451589442d_android\",\"file_name\":\"665451589442d_android.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":2835,\"manipulations\":[],\"custom_properties\":[],\"generated_conversions\":{\"thumb\":true,\"preview\":true},\"responsive_images\":[],\"order_column\":13,\"created_at\":\"2024-05-27T09:25:06.000000Z\",\"updated_at\":\"2024-05-27T09:25:06.000000Z\",\"original_url\":\"http:\\/\\/localhost\\/storage\\/13\\/665451589442d_android.png\",\"preview_url\":\"http:\\/\\/localhost\\/storage\\/13\\/conversions\\/665451589442d_android-preview.jpg\"}]}', '27.147.163.77', '2024-05-27 13:28:56', '2024-05-27 13:28:56'),
(233, 'audit:deleted', 4, 'App\\Models\\Child#4', 2, '{\"id\":4,\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"date_of_birth\":\"14\\/05\\/2024\",\"complite_21\":\"14\\/05\\/2045\",\"nid_number\":null,\"passport_number\":null,\"created_at\":\"2024-05-27 09:26:31\",\"updated_at\":\"2024-05-27 09:28:56\",\"deleted_at\":\"2024-05-27 09:28:56\",\"employee_id\":1,\"gender_id\":1,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:28:56', '2024-05-27 13:28:56'),
(234, 'audit:created', 4, 'App\\Models\\JobHistory#4', 2, '{\"office_unit_id\":\"1\",\"level_2\":\"2\",\"designation_id\":\"1\",\"joining_date\":\"27\\/05\\/2024\",\"release_date\":\"29\\/05\\/2024\",\"grade_id\":\"1\",\"updated_at\":\"2024-05-27 09:30:33\",\"created_at\":\"2024-05-27 09:30:33\",\"id\":4,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:30:33', '2024-05-27 13:30:33'),
(235, 'audit:deleted', 1, 'App\\Models\\JobHistory#1', 2, '{\"id\":1,\"level_1\":null,\"joining_date\":\"27\\/05\\/2000\",\"release_date\":\"27\\/05\\/2025\",\"level_2\":null,\"level_3\":null,\"level_4\":null,\"level_5\":null,\"institutename\":null,\"academy_type\":null,\"acadaylocation\":null,\"posting_in_circle\":null,\"postingindivision\":null,\"posting_in_range\":null,\"created_at\":\"2024-05-27 07:28:17\",\"updated_at\":\"2024-05-27 07:28:17\",\"designation_id\":1,\"employee_id\":null,\"grade_id\":1,\"circle_list_id\":1,\"division_list_id\":null,\"range_list_id\":null,\"beat_list_id\":null,\"office_unit_id\":2,\"go_upload\":null}', '27.147.163.77', '2024-05-27 13:31:26', '2024-05-27 13:31:26'),
(236, 'audit:deleted', 3, 'App\\Models\\JobHistory#3', 2, '{\"id\":3,\"level_1\":null,\"joining_date\":\"27\\/05\\/2000\",\"release_date\":\"27\\/05\\/2025\",\"level_2\":null,\"level_3\":null,\"level_4\":null,\"level_5\":null,\"institutename\":\"Institution\",\"academy_type\":\"FSTI\",\"acadaylocation\":null,\"posting_in_circle\":\"Chittagong\",\"postingindivision\":null,\"posting_in_range\":null,\"created_at\":\"2024-05-27 07:31:15\",\"updated_at\":\"2024-05-27 07:31:15\",\"designation_id\":1,\"employee_id\":null,\"grade_id\":1,\"circle_list_id\":null,\"division_list_id\":null,\"range_list_id\":null,\"beat_list_id\":null,\"office_unit_id\":3,\"go_upload\":null}', '27.147.163.77', '2024-05-27 13:31:26', '2024-05-27 13:31:26'),
(237, 'audit:deleted', 4, 'App\\Models\\JobHistory#4', 2, '{\"id\":4,\"level_1\":null,\"joining_date\":\"27\\/05\\/2024\",\"release_date\":\"29\\/05\\/2024\",\"level_2\":\"2\",\"level_3\":null,\"level_4\":null,\"level_5\":null,\"institutename\":null,\"academy_type\":null,\"acadaylocation\":null,\"posting_in_circle\":null,\"postingindivision\":null,\"posting_in_range\":null,\"created_at\":\"2024-05-27 09:30:33\",\"updated_at\":\"2024-05-27 09:30:33\",\"designation_id\":1,\"employee_id\":null,\"grade_id\":1,\"circle_list_id\":null,\"division_list_id\":null,\"range_list_id\":null,\"beat_list_id\":null,\"office_unit_id\":1,\"go_upload\":null}', '27.147.163.77', '2024-05-27 13:31:26', '2024-05-27 13:31:26'),
(238, 'audit:created', 5, 'App\\Models\\JobHistory#5', 2, '{\"office_unit_id\":\"2\",\"circle_list_id\":\"5\",\"designation_id\":\"1\",\"joining_date\":\"27\\/05\\/2024\",\"release_date\":\"29\\/05\\/2024\",\"grade_id\":\"1\",\"updated_at\":\"2024-05-27 09:32:31\",\"created_at\":\"2024-05-27 09:32:31\",\"id\":5,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:32:31', '2024-05-27 13:32:31'),
(239, 'audit:deleted', 2, 'App\\Models\\JobHistory#2', 2, '{\"id\":2,\"level_1\":null,\"joining_date\":\"27\\/05\\/2000\",\"release_date\":\"27\\/05\\/2025\",\"level_2\":\"2\",\"level_3\":null,\"level_4\":null,\"level_5\":null,\"institutename\":null,\"academy_type\":null,\"acadaylocation\":null,\"posting_in_circle\":null,\"postingindivision\":null,\"posting_in_range\":null,\"created_at\":\"2024-05-27 07:29:26\",\"updated_at\":\"2024-05-27 07:29:26\",\"designation_id\":1,\"employee_id\":null,\"grade_id\":1,\"circle_list_id\":null,\"division_list_id\":null,\"range_list_id\":null,\"beat_list_id\":null,\"office_unit_id\":1,\"go_upload\":null}', '27.147.163.77', '2024-05-27 13:32:47', '2024-05-27 13:32:47'),
(240, 'audit:created', 2, 'App\\Models\\EmployeePromotion#2', 2, '{\"new_designation_id\":\"1\",\"go_issue_date\":\"27\\/05\\/2024\",\"office_order_date\":\"28\\/05\\/2024\",\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 09:35:10\",\"created_at\":\"2024-05-27 09:35:10\",\"id\":2,\"office_order\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:35:10', '2024-05-27 13:35:10'),
(241, 'audit:deleted', 1, 'App\\Models\\EmployeePromotion#1', 2, '{\"id\":1,\"go_issue_date\":\"26\\/05\\/2023\",\"office_order_date\":\"27\\/05\\/2025\",\"created_at\":\"2024-05-27 08:05:34\",\"updated_at\":\"2024-05-27 09:35:36\",\"deleted_at\":\"2024-05-27 09:35:36\",\"employee_id\":null,\"new_designation_id\":1,\"office_order\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:35:36', '2024-05-27 13:35:36'),
(242, 'audit:created', 5, 'App\\Models\\Child#5', 2, '{\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"date_of_birth\":\"29\\/04\\/2002\",\"complite_21\":\"29\\/04\\/2023\",\"gender_id\":\"1\",\"nid_number\":null,\"passport_number\":null,\"employee_id\":\"1\",\"updated_at\":\"2024-05-27 09:36:40\",\"created_at\":\"2024-05-27 09:36:40\",\"id\":5,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:36:40', '2024-05-27 13:36:40'),
(243, 'audit:created', 6, 'App\\Models\\JobHistory#6', 2, '{\"office_unit_id\":\"2\",\"circle_list_id\":\"5\",\"designation_id\":\"1\",\"joining_date\":\"27\\/05\\/2024\",\"release_date\":\"29\\/05\\/2024\",\"grade_id\":\"1\",\"updated_at\":\"2024-05-27 09:38:03\",\"created_at\":\"2024-05-27 09:38:03\",\"id\":6,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:38:03', '2024-05-27 13:38:03'),
(244, 'audit:deleted', 5, 'App\\Models\\Child#5', 2, '{\"id\":5,\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"date_of_birth\":\"29\\/04\\/2002\",\"complite_21\":\"29\\/04\\/2023\",\"nid_number\":null,\"passport_number\":null,\"created_at\":\"2024-05-27 09:36:40\",\"updated_at\":\"2024-05-27 09:42:55\",\"deleted_at\":\"2024-05-27 09:42:55\",\"employee_id\":1,\"gender_id\":1,\"birth_certificate\":{\"id\":17,\"model_type\":\"App\\\\Models\\\\Child\",\"model_id\":5,\"uuid\":\"ce9b043e-1f37-461f-8435-323df76a067a\",\"collection_name\":\"birth_certificate\",\"name\":\"6654541a8b32a_play store\",\"file_name\":\"6654541a8b32a_play-store.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":7284,\"manipulations\":[],\"custom_properties\":[],\"generated_conversions\":{\"thumb\":true,\"preview\":true},\"responsive_images\":[],\"order_column\":16,\"created_at\":\"2024-05-27T09:36:40.000000Z\",\"updated_at\":\"2024-05-27T09:36:40.000000Z\",\"original_url\":\"http:\\/\\/localhost\\/storage\\/17\\/6654541a8b32a_play-store.png\",\"preview_url\":\"http:\\/\\/localhost\\/storage\\/17\\/conversions\\/6654541a8b32a_play-store-preview.jpg\"},\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[{\"id\":17,\"model_type\":\"App\\\\Models\\\\Child\",\"model_id\":5,\"uuid\":\"ce9b043e-1f37-461f-8435-323df76a067a\",\"collection_name\":\"birth_certificate\",\"name\":\"6654541a8b32a_play store\",\"file_name\":\"6654541a8b32a_play-store.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":7284,\"manipulations\":[],\"custom_properties\":[],\"generated_conversions\":{\"thumb\":true,\"preview\":true},\"responsive_images\":[],\"order_column\":16,\"created_at\":\"2024-05-27T09:36:40.000000Z\",\"updated_at\":\"2024-05-27T09:36:40.000000Z\",\"original_url\":\"http:\\/\\/localhost\\/storage\\/17\\/6654541a8b32a_play-store.png\",\"preview_url\":\"http:\\/\\/localhost\\/storage\\/17\\/conversions\\/6654541a8b32a_play-store-preview.jpg\"}]}', '27.147.163.77', '2024-05-27 13:42:55', '2024-05-27 13:42:55'),
(245, 'audit:created', 7, 'App\\Models\\JobHistory#7', 2, '{\"office_unit_id\":\"3\",\"institutename\":\"Institution\",\"academy_type\":\"Forest Academy\",\"designation_id\":\"1\",\"joining_date\":\"14\\/05\\/2024\",\"release_date\":\"27\\/05\\/2024\",\"grade_id\":\"1\",\"updated_at\":\"2024-05-27 09:43:58\",\"created_at\":\"2024-05-27 09:43:58\",\"id\":7,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-05-27 13:43:58', '2024-05-27 13:43:58'),
(246, 'audit:deleted', 5, 'App\\Models\\JobHistory#5', 2, '{\"id\":5,\"level_1\":null,\"joining_date\":\"27\\/05\\/2024\",\"release_date\":\"29\\/05\\/2024\",\"level_2\":null,\"level_3\":null,\"level_4\":null,\"level_5\":null,\"institutename\":null,\"academy_type\":null,\"acadaylocation\":null,\"posting_in_circle\":null,\"postingindivision\":null,\"posting_in_range\":null,\"created_at\":\"2024-05-27 09:32:31\",\"updated_at\":\"2024-05-27 09:32:31\",\"designation_id\":1,\"employee_id\":null,\"grade_id\":1,\"circle_list_id\":5,\"division_list_id\":null,\"range_list_id\":null,\"beat_list_id\":null,\"office_unit_id\":2,\"go_upload\":null}', '175.41.44.6', '2024-05-27 13:48:55', '2024-05-27 13:48:55'),
(247, 'audit:deleted', 6, 'App\\Models\\JobHistory#6', 2, '{\"id\":6,\"level_1\":null,\"joining_date\":\"27\\/05\\/2024\",\"release_date\":\"29\\/05\\/2024\",\"level_2\":null,\"level_3\":null,\"level_4\":null,\"level_5\":null,\"institutename\":null,\"academy_type\":null,\"acadaylocation\":null,\"posting_in_circle\":null,\"postingindivision\":null,\"posting_in_range\":null,\"created_at\":\"2024-05-27 09:38:03\",\"updated_at\":\"2024-05-27 09:38:03\",\"designation_id\":1,\"employee_id\":null,\"grade_id\":1,\"circle_list_id\":5,\"division_list_id\":null,\"range_list_id\":null,\"beat_list_id\":null,\"office_unit_id\":2,\"go_upload\":null}', '175.41.44.6', '2024-05-27 13:48:56', '2024-05-27 13:48:56'),
(248, 'audit:deleted', 7, 'App\\Models\\JobHistory#7', 2, '{\"id\":7,\"level_1\":null,\"joining_date\":\"14\\/05\\/2024\",\"release_date\":\"27\\/05\\/2024\",\"level_2\":null,\"level_3\":null,\"level_4\":null,\"level_5\":null,\"institutename\":\"Institution\",\"academy_type\":\"Forest Academy\",\"acadaylocation\":null,\"posting_in_circle\":null,\"postingindivision\":null,\"posting_in_range\":null,\"created_at\":\"2024-05-27 09:43:58\",\"updated_at\":\"2024-05-27 09:43:58\",\"designation_id\":1,\"employee_id\":null,\"grade_id\":1,\"circle_list_id\":null,\"division_list_id\":null,\"range_list_id\":null,\"beat_list_id\":null,\"office_unit_id\":3,\"go_upload\":null}', '175.41.44.6', '2024-05-27 13:48:56', '2024-05-27 13:48:56'),
(249, 'audit:created', 8, 'App\\Models\\JobHistory#8', 2, '{\"office_unit_id\":\"1\",\"level_2\":\"gfyfu\",\"designation_id\":\"1\",\"joining_date\":\"01\\/05\\/2024\",\"release_date\":\"25\\/05\\/2024\",\"grade_id\":\"1\",\"updated_at\":\"2024-05-27 09:49:52\",\"created_at\":\"2024-05-27 09:49:52\",\"id\":8,\"go_upload\":null,\"media\":[]}', '175.41.44.6', '2024-05-27 13:49:52', '2024-05-27 13:49:52'),
(250, 'audit:created', 1, 'App\\Models\\Project#1', 2, '{\"name_bn\":\"\\u09aa\\u09cd\\u09b0\\u099c\\u09c7\\u0995\\u09cd\\u099f-\\u09e7\",\"name_en\":\"Project-1\",\"updated_at\":\"2024-05-27 10:06:35\",\"created_at\":\"2024-05-27 10:06:35\",\"id\":1}', '175.41.44.6', '2024-05-27 14:06:35', '2024-05-27 14:06:35'),
(251, 'audit:created', 2, 'App\\Models\\Project#2', 2, '{\"name_bn\":\"\\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa-\\u09e8\",\"name_en\":\"Project-2\",\"updated_at\":\"2024-05-27 10:06:51\",\"created_at\":\"2024-05-27 10:06:51\",\"id\":2}', '175.41.44.6', '2024-05-27 14:06:51', '2024-05-27 14:06:51'),
(252, 'audit:created', 1, 'App\\Models\\ProjectRevenueExam#1', 2, '{\"exam_id\":\"2\",\"exam_name_bn\":\"\\u09ac\\u09bf\\u09ad\\u09be\\u0997\\u09c0\\u09df \\u09aa\\u09b0\\u09c0\\u0995\\u09cd\\u09b7\\u09be\",\"exam_name_en\":\"Departmental Exam\",\"updated_at\":\"2024-05-27 10:08:21\",\"created_at\":\"2024-05-27 10:08:21\",\"id\":1}', '175.41.44.6', '2024-05-27 14:08:21', '2024-05-27 14:08:21'),
(253, 'audit:created', 2, 'App\\Models\\ProjectRevenueExam#2', 2, '{\"exam_id\":\"2\",\"exam_name_bn\":\"\\u09b8\\u09bf\\u09a8\\u09bf\\u09df\\u09b0 \\u09b8\\u09cd\\u0995\\u09c7\\u09b2 \\u09aa\\u09b0\\u09c0\\u0995\\u09cd\\u09b7\\u09be\",\"exam_name_en\":\"Senior Scale Exam\",\"updated_at\":\"2024-05-27 10:08:29\",\"created_at\":\"2024-05-27 10:08:29\",\"id\":2}', '175.41.44.6', '2024-05-27 14:08:29', '2024-05-27 14:08:29'),
(254, 'audit:deleted', 1, 'App\\Models\\Addressdetaile#1', 2, '{\"id\":1,\"address_type\":\"Present\",\"flat_house\":\"358 South Paikpara\",\"post_office\":\"Mirpur-2\",\"post_code\":\"7230\",\"phone_number\":\"9026394\",\"status\":\"No\",\"created_at\":\"2024-05-27 08:29:17\",\"updated_at\":\"2024-05-28 09:47:39\",\"deleted_at\":\"2024-05-28 09:47:39\",\"employee_id\":1,\"thana_upazila_id\":1}', '123.49.2.190', '2024-05-28 13:47:39', '2024-05-28 13:47:39'),
(255, 'audit:updated', 1, 'App\\Models\\EmployeeList#1', 2, '{\"approve\":\"Approved\",\"approveby\":2,\"updated_at\":\"2024-05-29 04:51:28\"}', '27.147.163.77', '2024-05-29 08:51:28', '2024-05-29 08:51:28'),
(256, 'audit:created', 2, 'App\\Models\\EmployeeList#2', 2, '{\"fullname_bn\":\"jg\",\"fullname_en\":\"topgkl\",\"cadreid\":\"123456\",\"batch_id\":null,\"fname_bn\":\"hhjj\",\"fname_en\":\"jhkjjk\",\"mname_bn\":\"ghyty\",\"mname_en\":\"ytyuj\",\"date_of_birth\":\"09\\/05\\/1985\",\"height\":\"155\",\"special_identity\":null,\"home_district_id\":\"40\",\"marital_statu_id\":\"1\",\"gender_id\":\"1\",\"religion_id\":\"1\",\"blood_group_id\":\"4\",\"email\":\"test@admin.com\",\"mobile_number\":\"01711170697\",\"nid\":\"1111111111\",\"passport\":\"232344355\",\"license_type_id\":\"2\",\"joiningexaminfo_id\":\"2\",\"projectrevenue_id\":\"2\",\"departmental_exam_id\":\"1\",\"date_of_regularization\":null,\"regularization_issue_date\":null,\"grade_id\":\"1\",\"fjoining_date\":\"30\\/05\\/2024\",\"first_joining_office_name\":\"Development Planning Unit , Bana Bhaban, Agargaon, Dhaka\",\"first_joining_memo_no\":\"efw4jh\",\"date_of_gazette\":\"29\\/04\\/2024\",\"date_of_con_serviec\":\"06\\/05\\/2024\",\"quota_id\":\"2\",\"employeeid\":\"2201210001\",\"updated_at\":\"2024-05-30 05:20:27\",\"created_at\":\"2024-05-30 05:20:27\",\"id\":2,\"birth_certificate_upload\":null,\"nid_upload\":null,\"passport_upload\":null,\"license_upload\":null,\"certificate_upload\":null,\"first_joining_order\":null,\"fjoining_letter\":null,\"date_of_gazette_if_any\":null,\"regularization_office_orde_go\":null,\"confirmation_in_service\":null,\"electric_signature\":null,\"employee_photo\":null,\"media\":[]}', '175.41.44.6', '2024-05-30 09:20:27', '2024-05-30 09:20:27'),
(257, 'audit:updated', 2, 'App\\Models\\EmployeeList#2', 2, '{\"approve\":\"Approved\",\"approveby\":2,\"updated_at\":\"2024-05-30 05:20:42\"}', '175.41.44.6', '2024-05-30 09:20:42', '2024-05-30 09:20:42'),
(258, 'audit:created', 2, 'App\\Models\\EducationInformatione#2', 2, '{\"employee_id\":\"2\",\"name_of_exam_id\":\"1\",\"school_university_name\":\"Muminunnisa Govt. Mahila College, Mymensingh\",\"exam_board_id\":\"5\",\"result_id\":\"1\",\"concentration_major_group\":\"Science\",\"passing_year\":\"1974\",\"updated_at\":\"2024-05-30 05:37:55\",\"created_at\":\"2024-05-30 05:37:55\",\"id\":2,\"catificarte\":null,\"media\":[]}', '175.41.44.6', '2024-05-30 09:37:55', '2024-05-30 09:37:55'),
(259, 'audit:updated', 7, 'App\\Models\\Examination#7', 2, '{\"name_bn\":\"\\u09ae\\u09be\\u09b8\\u09cd\\u099f\\u09be\\u09b0\\u09cd\\u09b8\",\"updated_at\":\"2024-05-30 05:43:52\"}', '27.147.163.77', '2024-05-30 09:43:52', '2024-05-30 09:43:52'),
(260, 'audit:updated', 6, 'App\\Models\\Examination#6', 2, '{\"name_bn\":\"\\u09ac\\u09cd\\u09af\\u09be\\u099a\\u09c7\\u09b2\\u09b0\\/\\u09b8\\u09ae\\u09cd\\u09ae\\u09be\\u09a8\",\"updated_at\":\"2024-05-30 05:44:16\"}', '27.147.163.77', '2024-05-30 09:44:16', '2024-05-30 09:44:16'),
(261, 'audit:updated', 5, 'App\\Models\\Examination#5', 2, '{\"name_bn\":\"\\u09a1\\u09bf\\u09aa\\u09cd\\u09b2\\u09cb\\u09ae\\u09be\",\"updated_at\":\"2024-05-30 05:44:27\"}', '27.147.163.77', '2024-05-30 09:44:27', '2024-05-30 09:44:27'),
(262, 'audit:updated', 4, 'App\\Models\\Examination#4', 2, '{\"name_bn\":\"\\u0989\\u099a\\u09cd\\u099a \\u09ae\\u09be\\u09a7\\u09cd\\u09af\\u09ae\\u09bf\\u0995\",\"updated_at\":\"2024-05-30 05:44:39\"}', '27.147.163.77', '2024-05-30 09:44:39', '2024-05-30 09:44:39'),
(263, 'audit:updated', 3, 'App\\Models\\Examination#3', 2, '{\"name_bn\":\"\\u09ae\\u09be\\u09a7\\u09cd\\u09af\\u09ae\\u09bf\\u0995\",\"updated_at\":\"2024-05-30 05:44:51\"}', '27.147.163.77', '2024-05-30 09:44:51', '2024-05-30 09:44:51');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(264, 'audit:updated', 2, 'App\\Models\\Examination#2', 2, '{\"name_bn\":\"\\u099c\\u09c7\\u098f\\u09b8\\u09b8\\u09bf\\/\\u099c\\u09c7\\u09a1\\u09bf\\u09b8\\u09bf\\/\\u0985\\u09b7\\u09cd\\u099f\\u09ae \\u09b6\\u09cd\\u09b0\\u09c7\\u09a3\\u09c0\",\"updated_at\":\"2024-05-30 05:45:02\"}', '27.147.163.77', '2024-05-30 09:45:02', '2024-05-30 09:45:02'),
(265, 'audit:updated', 1, 'App\\Models\\Examination#1', 2, '{\"name_bn\":\"\\u09aa\\u09cd\\u09b0\\u09be\\u09a5\\u09ae\\u09bf\\u0995\\/\\u09eb\\u09ae \\u09b6\\u09cd\\u09b0\\u09c7\\u09a3\\u09c0\",\"updated_at\":\"2024-05-30 05:45:14\"}', '27.147.163.77', '2024-05-30 09:45:14', '2024-05-30 09:45:14'),
(266, 'audit:updated', 8, 'App\\Models\\Examination#8', 2, '{\"name_bn\":\"\\u09aa\\u09bf\\u098f\\u0987\\u099a\\u09a1\\u09bf (\\u09a1\\u0995\\u09cd\\u099f\\u09b0 \\u0985\\u09ac \\u09ab\\u09bf\\u09b2\\u09cb\\u09b8\\u09ab\\u09bf)\",\"updated_at\":\"2024-05-30 05:46:24\"}', '27.147.163.77', '2024-05-30 09:46:24', '2024-05-30 09:46:24'),
(267, 'audit:deleted', 1, 'App\\Models\\Project#1', 2, '{\"id\":1,\"name_bn\":\"\\u09aa\\u09cd\\u09b0\\u099c\\u09c7\\u0995\\u09cd\\u099f-\\u09e7\",\"name_en\":\"Project-1\",\"created_at\":\"2024-05-27 10:06:35\",\"updated_at\":\"2024-05-30 10:17:39\",\"deleted_at\":\"2024-05-30 10:17:39\"}', '27.147.163.77', '2024-05-30 14:17:39', '2024-05-30 14:17:39'),
(268, 'audit:deleted', 2, 'App\\Models\\Project#2', 2, '{\"id\":2,\"name_bn\":\"\\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa-\\u09e8\",\"name_en\":\"Project-2\",\"created_at\":\"2024-05-27 10:06:51\",\"updated_at\":\"2024-05-30 10:17:43\",\"deleted_at\":\"2024-05-30 10:17:43\"}', '27.147.163.77', '2024-05-30 14:17:43', '2024-05-30 14:17:43'),
(269, 'audit:created', 3, 'App\\Models\\Project#3', 2, '{\"name_bn\":\"\\u09ad\\u09be\\u0993\\u09af\\u09bc\\u09be\\u09b2 \\u099c\\u09be\\u09a4\\u09c0\\u09af\\u09bc \\u0989\\u09a6\\u09cd\\u09af\\u09be\\u09a8 \\u0989\\u09a8\\u09cd\\u09a8\\u09af\\u09bc\\u09a8 \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Bhawal National Park Development Project\",\"updated_at\":\"2024-05-30 10:20:28\",\"created_at\":\"2024-05-30 10:20:28\",\"id\":3}', '27.147.163.77', '2024-05-30 14:20:28', '2024-05-30 14:20:28'),
(270, 'audit:created', 4, 'App\\Models\\Project#4', 2, '{\"name_bn\":\"\\u09b8\\u09ae\\u09cd\\u09aa\\u09cd\\u09b0\\u09b8\\u09be\\u09b0\\u09bf\\u09a4 \\u09ab\\u09b0\\u09c7\\u09b8\\u09cd\\u099f \\u09b0\\u09bf\\u09b8\\u09cb\\u09b0\\u09cd\\u09b8\\u09c7\\u09b8 \\u09ae\\u09cd\\u09af\\u09be\\u09a8\\u09c7\\u099c\\u09ae\\u09c7\\u09a8\\u09cd\\u099f \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Extended Forest Resources Management Project\",\"updated_at\":\"2024-05-30 10:28:25\",\"created_at\":\"2024-05-30 10:28:25\",\"id\":4}', '27.147.163.77', '2024-05-30 14:28:25', '2024-05-30 14:28:25'),
(271, 'audit:created', 5, 'App\\Models\\Project#5', 2, '{\"name_bn\":\"\\u09ab\\u09b0\\u09c7\\u09b8\\u09cd\\u099f\\u09cd\\u09b0\\u09c0 \\u09b8\\u09c7\\u0995\\u09cd\\u099f\\u09b0 \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Forestry Sector Project\",\"updated_at\":\"2024-05-30 10:29:56\",\"created_at\":\"2024-05-30 10:29:56\",\"id\":5}', '27.147.163.77', '2024-05-30 14:29:56', '2024-05-30 14:29:56'),
(272, 'audit:created', 6, 'App\\Models\\Project#6', 2, '{\"name_bn\":\"\\u09b8\\u09ae\\u09be\\u09aa\\u09cd\\u09a4 \\u09ae\\u09c1\\u099c\\u09bf\\u09ac\\u09a8\\u0997\\u09b0 \\u0995\\u09ae\\u09aa\\u09cd\\u09b2\\u09c7\\u0995\\u09cd\\u09b8 (\\u09ac\\u09a8 \\u0985\\u09a7\\u09bf\\u09a6\\u09aa\\u09cd\\u09a4\\u09b0 \\u0985\\u0999\\u09cd\\u0997) \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Completed Mujibnagar Complex (Part of Forest Department) Project\",\"updated_at\":\"2024-05-30 10:33:52\",\"created_at\":\"2024-05-30 10:33:52\",\"id\":6}', '27.147.163.77', '2024-05-30 14:33:52', '2024-05-30 14:33:52'),
(273, 'audit:created', 7, 'App\\Models\\Project#7', 2, '{\"name_bn\":\"\\u0989\\u09aa\\u0995\\u09c2\\u09b2\\u09c0\\u09df \\u09b8\\u09ac\\u09c1\\u099c \\u09ac\\u09c7\\u09b7\\u09cd\\u099f\\u09a8\\u09c0\",\"name_en\":\"Coastal Green Belt\",\"updated_at\":\"2024-05-30 10:35:28\",\"created_at\":\"2024-05-30 10:35:28\",\"id\":7}', '27.147.163.77', '2024-05-30 14:35:28', '2024-05-30 14:35:28'),
(274, 'audit:created', 8, 'App\\Models\\Project#8', 2, '{\"name_bn\":\"\\u09ac\\u09a8\\u09cd\\u09af\\u09aa\\u09cd\\u09b0\\u09be\\u09a3\\u09c0 \\u09b8\\u0982\\u09b0\\u0995\\u09cd\\u09b7\\u09a3 \\u0993 \\u09ac\\u09cd\\u09af\\u09ac\\u09b8\\u09cd\\u09a5\\u09be\\u09aa\\u09a8\\u09be \\u099c\\u09cb\\u09b0\\u09a6\\u09be\\u09b0\\u0995\\u09b0\\u09a3 (SRCWP) \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Wildlife Conservation and Management Strengthening (SRCWP) Scheme\",\"updated_at\":\"2024-05-30 10:37:52\",\"created_at\":\"2024-05-30 10:37:52\",\"id\":8}', '27.147.163.77', '2024-05-30 14:37:52', '2024-05-30 14:37:52'),
(275, 'audit:created', 9, 'App\\Models\\Project#9', 2, '{\"name_bn\":\"\\u09b8\\u09ae\\u09be\\u09aa\\u09cd\\u09a4 \\u09b0\\u09be\\u09ae\\u0997\\u09b0 \\u09b8\\u09c0\\u09a4\\u09be\\u0995\\u09c1\\u09a3\\u09cd\\u09a1 \\u098f\\u09b2\\u09be\\u0995\\u09be\\u09df \\u09a8\\u0997\\u09cd\\u09a8 \\u09aa\\u09be\\u09b9\\u09be\\u09dc \\u09ac\\u09a8\\u09be\\u09df\\u09a8 \\u09b6\\u09c0\\u09b0\\u09cd\\u09b7\\u0995 \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Completed Bare Hill Afforestation project in Sitakunda area of \\u200b\\u200bRamgarh\",\"updated_at\":\"2024-05-30 10:40:29\",\"created_at\":\"2024-05-30 10:40:29\",\"id\":9}', '27.147.163.77', '2024-05-30 14:40:29', '2024-05-30 14:40:29'),
(276, 'audit:created', 10, 'App\\Models\\Project#10', 2, '{\"name_bn\":\"\\u09b8\\u09ae\\u09be\\u09aa\\u09cd\\u09a4 \\u09b6\\u09c7\\u0996 \\u09b0\\u09be\\u09b8\\u09c7\\u09b2 \\u098f\\u09ad\\u09bf\\u09df\\u09be\\u09b0\\u09c0 \\u098f\\u09a8\\u09cd\\u09a1 \\u0987\\u0995\\u09cb\\u09aa\\u09be\\u09b0\\u09cd\\u0995, \\u09b0\\u09be\\u0999\\u09cd\\u0997\\u09c1\\u09a8\\u09bf\\u09af\\u09bc\\u09be ,\\u099a\\u099f\\u09cd\\u099f\\u0997\\u09cd\\u09b0\\u09be\\u09ae\",\"name_en\":\"Completed Sheikh Russell Aviary & Ecopark, Rangunia, Chittagong\",\"updated_at\":\"2024-05-30 10:44:02\",\"created_at\":\"2024-05-30 10:44:02\",\"id\":10}', '27.147.163.77', '2024-05-30 14:44:02', '2024-05-30 14:44:02'),
(277, 'audit:created', 11, 'App\\Models\\Project#11', 2, '{\"name_bn\":\"\\u201c\\u099c\\u09be\\u09a4\\u09c0\\u09df \\u09ac\\u09cb\\u099f\\u09be\\u0995\\u09bf\\u09a8\\u09bf\\u0995\\u09cd\\u09af\\u09be\\u09b2 \\u0989\\u09a6\\u09cd\\u09af\\u09be\\u09a8, \\u09ac\\u09b2\\u09a7\\u09be \\u0989\\u09a6\\u09cd\\u09af\\u09be\\u09a8  \\u0993 \\u09b9\\u09be\\u09b0\\u09ac\\u09c7\\u09b0\\u09bf\\u09df\\u09be\\u09ae\\u09c7\\u09b0 \\u09b8\\u09ae\\u09a8\\u09cd\\u09ac\\u09bf\\u09a4 \\u0989\\u09a8\\u09cd\\u09a8\\u09df\\u09a8\\u201d \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"\\u201cIntegrated Development of National Botanic Garden, Baldha Garden and Herbarium\\u201d project\",\"updated_at\":\"2024-05-30 10:48:56\",\"created_at\":\"2024-05-30 10:48:56\",\"id\":11}', '27.147.163.77', '2024-05-30 14:48:56', '2024-05-30 14:48:56'),
(278, 'audit:created', 12, 'App\\Models\\Project#12', 2, '{\"name_bn\":\"\\u09ac\\u0999\\u09cd\\u0997\\u09ac\\u09a8\\u09cd\\u09a7\\u09c1 \\u09b6\\u09c7\\u0996 \\u09ae\\u09c1\\u099c\\u09bf\\u09ac \\u09b8\\u09be\\u09ab\\u09be\\u09b0\\u09c0 \\u09aa\\u09be\\u09b0\\u09cd\\u0995 , \\u0995\\u0995\\u09cd\\u09b8\\u09ac\\u09be\\u099c\\u09be\\u09b0\",\"name_en\":\"Bangabandhu Sheikh Mujib Safari Park, Cox\'s Bazar\",\"updated_at\":\"2024-05-30 10:50:58\",\"created_at\":\"2024-05-30 10:50:58\",\"id\":12}', '27.147.163.77', '2024-05-30 14:50:58', '2024-05-30 14:50:58'),
(279, 'audit:created', 13, 'App\\Models\\Project#13', 2, '{\"name_bn\":\"\\u09a1\\u09c1\\u09b2\\u09be\\u09b9\\u09be\\u099c\\u09b0\\u09be \\u09b8\\u09be\\u09ab\\u09be\\u09b0\\u09c0 \\u09aa\\u09be\\u09b0\\u09cd\\u0995, \\u0995\\u0995\\u09cd\\u09b8\\u09ac\\u09be\\u099c\\u09be\\u09b0\",\"name_en\":\"Dullahazra Safari Park, Cox\'s Bazar\",\"updated_at\":\"2024-05-30 11:18:40\",\"created_at\":\"2024-05-30 11:18:40\",\"id\":13}', '27.147.163.77', '2024-05-30 15:18:40', '2024-05-30 15:18:40'),
(280, 'audit:created', 14, 'App\\Models\\Project#14', 2, '{\"name_bn\":\"\\u09ac\\u0999\\u09cd\\u0997\\u09ac\\u09a8\\u09cd\\u09a7\\u09c1 \\u09b6\\u09c7\\u0996 \\u09ae\\u09c1\\u099c\\u09bf\\u09ac \\u09b8\\u09be\\u09ab\\u09be\\u09b0\\u09c0 \\u09aa\\u09be\\u09b0\\u09cd\\u0995 , \\u0997\\u09be\\u099c\\u09c0\\u09aa\\u09c1\\u09b0\",\"name_en\":\"Bangabandhu Sheikh Mujib Safari Park, Gazipur\",\"updated_at\":\"2024-05-30 11:20:30\",\"created_at\":\"2024-05-30 11:20:30\",\"id\":14}', '27.147.163.77', '2024-05-30 15:20:30', '2024-05-30 15:20:30'),
(281, 'audit:created', 15, 'App\\Models\\Project#15', 2, '{\"name_bn\":\"\\u201c\\u09aa\\u09be\\u09b0\\u09cd\\u09ac\\u09a4\\u09cd\\u09af \\u099a\\u099f\\u09cd\\u099f\\u0997\\u09cd\\u09b0\\u09be\\u09ae\\u09c7\\u09b0 \\u0985\\u09b6\\u09cd\\u09b0\\u09c7\\u09a8\\u09c0\\u09ad\\u09c1\\u0995\\u09cd\\u09a4 \\u0993 \\u09b8\\u0982\\u09b0\\u0995\\u09cd\\u09b7\\u09bf\\u09a4 \\u09ac\\u09a8\\u09be\\u099e\\u09cd\\u099a\\u09b2\\u09c7 \\u09ac\\u09a8\\u09c0\\u0995\\u09b0\\u09a3 \\u0993 \\u099d\\u09c1\\u09ae\\u09bf\\u09df\\u09be \\u09aa\\u09c1\\u09a8\\u09b0\\u09cd\\u09ac\\u09be\\u09b8\\u09a8\\u201d\",\"name_en\":\"\\\"Afforestation and Jhumia Rehabilitation in Unclassified and Reserved Forest Areas of Chittagong Hill Tracts\\\"\",\"updated_at\":\"2024-05-30 11:26:23\",\"created_at\":\"2024-05-30 11:26:23\",\"id\":15}', '27.147.163.77', '2024-05-30 15:26:23', '2024-05-30 15:26:23'),
(282, 'audit:created', 16, 'App\\Models\\Project#16', 2, '{\"name_bn\":\"\\u099c\\u09c0\\u09ac\\u09ac\\u09c8\\u099a\\u09bf\\u09a4\\u09cd\\u09b0\\u09cd\\u09af \\u09b8\\u0982\\u09b0\\u0995\\u09cd\\u09b7\\u09a3 \\u0993 \\u0987\\u0995\\u09cb\\u099f\\u09cd\\u09af\\u09c1\\u09b0\\u09bf\\u099c\\u09ae \\u0989\\u09a8\\u09cd\\u09a8\\u09df\\u09a8 \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Biodiversity Conservation and Ecotourism Development Project\",\"updated_at\":\"2024-05-30 11:30:48\",\"created_at\":\"2024-05-30 11:30:48\",\"id\":16}', '27.147.163.77', '2024-05-30 15:30:48', '2024-05-30 15:30:48'),
(283, 'audit:created', 17, 'App\\Models\\Project#17', 2, '{\"name_bn\":\"\\u09ae\\u09a7\\u09c1\\u09aa\\u09c1\\u09b0 \\u099c\\u09be\\u09a4\\u09c0\\u09df \\u0989\\u09a6\\u09cd\\u09af\\u09be\\u09a8 \\u0989\\u09a8\\u09cd\\u09a8\\u09df\\u09a8 \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Madhupur National Park Development Project\",\"updated_at\":\"2024-05-30 11:32:53\",\"created_at\":\"2024-05-30 11:32:53\",\"id\":17}', '27.147.163.77', '2024-05-30 15:32:53', '2024-05-30 15:32:53'),
(284, 'audit:created', 18, 'App\\Models\\Project#18', 2, '{\"name_bn\":\"\\u09ac\\u09cb\\u099f\\u09be\\u0995\\u09bf\\u09a8\\u09bf\\u0995\\u09cd\\u09af\\u09be\\u09b2 \\u0997\\u09be\\u09b0\\u09cd\\u09a1\\u09c7\\u09a8 \\u0987\\u0995\\u09cb\\u09aa\\u09be\\u09b0\\u09cd\\u0995 \\u09b8\\u09cd\\u09a5\\u09be\\u09aa\\u09a8 \\u09b8\\u09c0\\u09a4\\u09be\\u0995\\u09c1\\u09a8\\u09cd\\u09a1, \\u099a\\u099f\\u09cd\\u099f\\u0997\\u09cd\\u09b0\\u09be\\u09ae\",\"name_en\":\"Establishment of Botanic Garden Ecopark Sitakund, Chittagong\",\"updated_at\":\"2024-05-30 11:35:44\",\"created_at\":\"2024-05-30 11:35:44\",\"id\":18}', '27.147.163.77', '2024-05-30 15:35:44', '2024-05-30 15:35:44'),
(285, 'audit:created', 19, 'App\\Models\\Project#19', 2, '{\"name_bn\":\"\\u09ae\\u09be\\u09a7\\u09ac\\u0995\\u09c1\\u09a8\\u09cd\\u09a1 \\u0987\\u0995\\u09cb\\u09aa\\u09be\\u09b0\\u09cd\\u0995 \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Madhavkund Ecopark Project\",\"updated_at\":\"2024-05-30 11:37:13\",\"created_at\":\"2024-05-30 11:37:13\",\"id\":19}', '27.147.163.77', '2024-05-30 15:37:13', '2024-05-30 15:37:13'),
(286, 'audit:created', 20, 'App\\Models\\Project#20', 2, '{\"name_bn\":\"\\u09b8\\u09ae\\u09be\\u09aa\\u09cd\\u09a4 \\u0995\\u09b2\\u09be\\u09aa\\u09be\\u09dc\\u09be \\u0989\\u09aa\\u099c\\u09c7\\u09b2\\u09be\\u09b0 \\u0995\\u09c1\\u09df\\u09be\\u0995\\u09be\\u099f\\u09be \\u0987\\u0995\\u09cb\\u09aa\\u09be\\u09b0\\u09cd\\u0995  \\u09b8\\u09cd\\u09a5\\u09be\\u09aa\\u09a8 \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Kuakata Ecopark establishment project of Kalapara upazila completed\",\"updated_at\":\"2024-05-30 11:39:49\",\"created_at\":\"2024-05-30 11:39:49\",\"id\":20}', '27.147.163.77', '2024-05-30 15:39:49', '2024-05-30 15:39:49'),
(287, 'audit:created', 21, 'App\\Models\\Project#21', 2, '{\"name_bn\":\"\\u09ac\\u09be\\u09df\\u09cb\\u09a1\\u09be\\u0987\\u09ad\\u09be\\u09b0\\u09b8\\u09bf\\u099f\\u09bf \\u0995\\u09a8\\u099c\\u09be\\u09c7\\u09b0\\u09ad\\u09b6\\u09a8 \\u0987\\u09a8 \\u09a6\\u09bf \\u09b8\\u09c1\\u09a8\\u09cd\\u09a6\\u09b0\\u09ac\\u09a8 \\u09b0\\u09bf\\u099c\\u09be\\u09b0\\u09cd\\u09ad \\u09ab\\u09b0\\u09c7\\u09b8\\u09cd\\u099f \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa \\u09b8\\u09c1\\u09a8\\u09cd\\u09a6\\u09b0\\u09ac\\u09a8 \\u09b8\\u0982\\u09b0\\u0995\\u09cd\\u09b7\\u09bf\\u09a4 \\u09ac\\u09a8\\u09be\\u099e\\u09cd\\u099a\\u09b2 \\u09ac\\u09cd\\u09af\\u09ac\\u09b8\\u09cd\\u09a5\\u09be\\u09aa\\u09a8\\u09be \\u09b8\\u09b9\\u09be\\u09df\\u09a4\\u09be \\u09aa\\u09cd\\u09b0\\u09a6\\u09be\\u09a8\",\"name_en\":\"Biodiversity Conservation in the Sundarbans Reserve Forest Project Providing management support to Sundarbans Reserve Forests\",\"updated_at\":\"2024-05-30 11:43:56\",\"created_at\":\"2024-05-30 11:43:56\",\"id\":21}', '27.147.163.77', '2024-05-30 15:43:56', '2024-05-30 15:43:56'),
(288, 'audit:created', 22, 'App\\Models\\Project#22', 2, '{\"name_bn\":\"\\u09ac\\u09be\\u09df\\u09cb\\u09a1\\u09be\\u0987\\u09ad\\u09be\\u09b0\\u09b8\\u09bf\\u099f\\u09bf \\u0995\\u09a8\\u099c\\u09be\\u09c7\\u09b0\\u09ad\\u09b6\\u09a8 \\u0987\\u09a8 \\u09a6\\u09bf \\u09b8\\u09c1\\u09a8\\u09cd\\u09a6\\u09b0\\u09ac\\u09a8 \\u09b0\\u09bf\\u099c\\u09be\\u09b0\\u09cd\\u09ad \\u09ab\\u09b0\\u09c7\\u09b8\\u09cd\\u099f\",\"name_en\":\"Biodiversity Conservation in the Sundarban Reserve Forest\",\"updated_at\":\"2024-05-30 11:45:54\",\"created_at\":\"2024-05-30 11:45:54\",\"id\":22}', '27.147.163.77', '2024-05-30 15:45:54', '2024-05-30 15:45:54'),
(289, 'audit:created', 23, 'App\\Models\\Project#23', 2, '{\"name_bn\":\"\\u09ac\\u09be\\u0981\\u09b6\\u0996\\u09be\\u09b2\\u09c0 \\u0987\\u0995\\u09cb\\u09aa\\u09be\\u09b0\\u09cd\\u0995 , \\u099a\\u099f\\u09cd\\u099f\\u0997\\u09cd\\u09b0\\u09be\\u09ae\",\"name_en\":\"Banskhali Ecopark, Chittagong\",\"updated_at\":\"2024-05-30 11:47:40\",\"created_at\":\"2024-05-30 11:47:40\",\"id\":23}', '27.147.163.77', '2024-05-30 15:47:40', '2024-05-30 15:47:40'),
(290, 'audit:created', 24, 'App\\Models\\Project#24', 2, '{\"name_bn\":\"\\u09ae\\u09a7\\u09c1\\u099f\\u09bf\\u09b2\\u09be \\u0987\\u0995\\u09cb\\u09aa\\u09be\\u09b0\\u09cd\\u0995 (\\u09e8\\u09df \\u09aa\\u09b0\\u09cd\\u09af\\u09be\\u09df)\",\"name_en\":\"Madhutila Ecopark (2nd Phase)\",\"updated_at\":\"2024-05-30 11:49:59\",\"created_at\":\"2024-05-30 11:49:59\",\"id\":24}', '27.147.163.77', '2024-05-30 15:49:59', '2024-05-30 15:49:59'),
(291, 'audit:updated', 1, 'App\\Models\\Extracurriculam#1', 2, '{\"start_date\":\"2024-05-31\",\"end_date\":\"2024-06-02\",\"updated_at\":\"2024-05-31 09:35:19\"}', '27.147.163.77', '2024-05-31 13:35:19', '2024-05-31 13:35:19'),
(292, 'audit:updated', 1, 'App\\Models\\Extracurriculam#1', 2, '{\"organization\":\"k\",\"position\":\"ff\",\"updated_at\":\"2024-05-31 09:35:33\"}', '27.147.163.77', '2024-05-31 13:35:33', '2024-05-31 13:35:33'),
(293, 'audit:updated', 15, 'App\\Models\\Project#15', 2, '{\"name_bn\":\"\\u09aa\\u09be\\u09b0\\u09cd\\u09ac\\u09a4\\u09cd\\u09af \\u099a\\u099f\\u09cd\\u099f\\u0997\\u09cd\\u09b0\\u09be\\u09ae\\u09c7\\u09b0 \\u0985\\u09b6\\u09cd\\u09b0\\u09c7\\u09a8\\u09c0\\u09ad\\u09c1\\u0995\\u09cd\\u09a4 \\u0993 \\u09b8\\u0982\\u09b0\\u0995\\u09cd\\u09b7\\u09bf\\u09a4 \\u09ac\\u09a8\\u09be\\u099e\\u09cd\\u099a\\u09b2\\u09c7 \\u09ac\\u09a8\\u09c0\\u0995\\u09b0\\u09a3 \\u0993 \\u099d\\u09c1\\u09ae\\u09bf\\u09df\\u09be \\u09aa\\u09c1\\u09a8\\u09b0\\u09cd\\u09ac\\u09be\\u09b8\\u09a8\",\"name_en\":\"Afforestation and Jhumia Rehabilitation in Unclassified and Reserved Forest Areas of Chittagong Hill Tracts\",\"updated_at\":\"2024-05-31 18:57:38\"}', '120.89.66.1', '2024-05-31 22:57:38', '2024-05-31 22:57:38'),
(294, 'audit:updated', 11, 'App\\Models\\Project#11', 2, '{\"name_bn\":\"\\u099c\\u09be\\u09a4\\u09c0\\u09df \\u09ac\\u09cb\\u099f\\u09be\\u0995\\u09bf\\u09a8\\u09bf\\u0995\\u09cd\\u09af\\u09be\\u09b2 \\u0989\\u09a6\\u09cd\\u09af\\u09be\\u09a8, \\u09ac\\u09b2\\u09a7\\u09be \\u0989\\u09a6\\u09cd\\u09af\\u09be\\u09a8  \\u0993 \\u09b9\\u09be\\u09b0\\u09ac\\u09c7\\u09b0\\u09bf\\u09df\\u09be\\u09ae\\u09c7\\u09b0 \\u09b8\\u09ae\\u09a8\\u09cd\\u09ac\\u09bf\\u09a4 \\u0989\\u09a8\\u09cd\\u09a8\\u09df\\u09a8\\u201d \\u09aa\\u09cd\\u09b0\\u0995\\u09b2\\u09cd\\u09aa\",\"name_en\":\"Integrated Development of National Botanic Garden, Baldha Garden and Herbarium\\u201d project\",\"updated_at\":\"2024-05-31 18:57:52\"}', '120.89.66.1', '2024-05-31 22:57:52', '2024-05-31 22:57:52'),
(295, 'audit:updated', 1, 'App\\Models\\Quotum#1', 2, '{\"name_bn\":\"\\u09ae\\u09c1\\u0995\\u09cd\\u09a4\\u09bf\\u09af\\u09cb\\u09a6\\u09cd\\u09a7\\u09be \\u0995\\u09cb\\u099f\\u09be\",\"name_en\":\"Freedom Fighter Quota\",\"updated_at\":\"2024-06-01 00:52:34\"}', '42.0.7.228', '2024-06-01 04:52:34', '2024-06-01 04:52:34'),
(296, 'audit:created', 3, 'App\\Models\\Quotum#3', 2, '{\"name_bn\":\"\\u09aa\\u09cd\\u09b0\\u09a4\\u09bf\\u09ac\\u09a8\\u09cd\\u09a7\\u09c0 \\u0995\\u09cb\\u099f\\u09be\",\"name_en\":\"Autism Quota\",\"remark\":null,\"updated_at\":\"2024-06-01 00:52:58\",\"created_at\":\"2024-06-01 00:52:58\",\"id\":3}', '42.0.7.228', '2024-06-01 04:52:58', '2024-06-01 04:52:58'),
(297, 'audit:created', 4, 'App\\Models\\Quotum#4', 2, '{\"name_bn\":\"\\u0986\\u09a8\\u09b8\\u09be\\u09b0\\/\\u09ad\\u09bf\\u09a1\\u09bf\\u09aa\\u09bf \\u0995\\u09cb\\u099f\\u09be\",\"name_en\":\"Ansar\\/VDP Quota\",\"remark\":null,\"updated_at\":\"2024-06-01 00:53:37\",\"created_at\":\"2024-06-01 00:53:37\",\"id\":4}', '42.0.7.228', '2024-06-01 04:53:37', '2024-06-01 04:53:37'),
(298, 'audit:created', 5, 'App\\Models\\Quotum#5', 2, '{\"name_bn\":\"\\u09ae\\u09b9\\u09bf\\u09b2\\u09be \\u0995\\u09cb\\u099f\\u09be\",\"name_en\":\"Women Quota\",\"remark\":null,\"updated_at\":\"2024-06-01 00:54:09\",\"created_at\":\"2024-06-01 00:54:09\",\"id\":5}', '42.0.7.228', '2024-06-01 04:54:09', '2024-06-01 04:54:09'),
(299, 'audit:created', 6, 'App\\Models\\Quotum#6', 2, '{\"name_bn\":\"\\u0989\\u09aa\\u099c\\u09be\\u09a4\\u09bf \\u0995\\u09cb\\u099f\\u09be\",\"name_en\":\"Tribe Quota\",\"remark\":null,\"updated_at\":\"2024-06-01 00:55:32\",\"created_at\":\"2024-06-01 00:55:32\",\"id\":6}', '42.0.7.228', '2024-06-01 04:55:32', '2024-06-01 04:55:32'),
(300, 'audit:created', 7, 'App\\Models\\Quotum#7', 2, '{\"name_bn\":\"\\u098f\\u09a4\\u09bf\\u09ae \\u0995\\u09cb\\u099f\\u09be\",\"name_en\":\"Atim Quota\",\"remark\":null,\"updated_at\":\"2024-06-01 00:55:59\",\"created_at\":\"2024-06-01 00:55:59\",\"id\":7}', '42.0.7.228', '2024-06-01 04:55:59', '2024-06-01 04:55:59'),
(301, 'audit:updated', 2, 'App\\Models\\LanguageList#2', 2, '{\"name\":\"\\u0987\\u0982\\u09b0\\u09c7\\u099c\\u09bf\",\"updated_at\":\"2024-06-01 00:56:46\"}', '42.0.7.228', '2024-06-01 04:56:46', '2024-06-01 04:56:46'),
(302, 'audit:updated', 1, 'App\\Models\\LanguageList#1', 2, '{\"name\":\"\\u09ac\\u09be\\u0982\\u09b2\\u09be\",\"updated_at\":\"2024-06-01 00:56:58\"}', '42.0.7.228', '2024-06-01 04:56:58', '2024-06-01 04:56:58'),
(303, 'audit:updated', 3, 'App\\Models\\OfficeUnit#3', 2, '{\"name_bn\":\"\\u0985\\u09a8\\u09cd\\u09af\\u09be\\u09a8\\u09cd\\u09af\",\"updated_at\":\"2024-06-01 00:58:46\"}', '42.0.7.228', '2024-06-01 04:58:46', '2024-06-01 04:58:46'),
(304, 'audit:updated', 1, 'App\\Models\\OfficeUnit#1', 2, '{\"name_bn\":\"\\u09b9\\u09c7\\u09a1 \\u0985\\u09ab\\u09bf\\u09b8\",\"updated_at\":\"2024-06-01 00:59:01\"}', '42.0.7.228', '2024-06-01 04:59:01', '2024-06-01 04:59:01'),
(305, 'audit:updated', 2, 'App\\Models\\OfficeUnit#2', 2, '{\"name_bn\":\"\\u09b8\\u09be\\u09b0\\u09cd\\u0995\\u09c7\\u09b2\",\"updated_at\":\"2024-06-01 00:59:20\"}', '42.0.7.228', '2024-06-01 04:59:20', '2024-06-01 04:59:20'),
(306, 'audit:created', 1, 'App\\Models\\Traveltype#1', 2, '{\"name_bn\":\"\\u09ac\\u09cd\\u09af\\u0995\\u09cd\\u09a4\\u09bf\\u0997\\u09a4 \\u0995\\u09be\\u09b0\\u09a3\\u09c7 \\u09ad\\u09cd\\u09b0\\u09ae\\u09a3\",\"name_en\":\"Personal Travel\",\"updated_at\":\"2024-06-01 01:02:28\",\"created_at\":\"2024-06-01 01:02:28\",\"id\":1}', '42.0.7.228', '2024-06-01 05:02:28', '2024-06-01 05:02:28'),
(307, 'audit:created', 2, 'App\\Models\\Traveltype#2', 2, '{\"name_bn\":\"\\u09a6\\u09be\\u09aa\\u09cd\\u09a4\\u09b0\\u09bf\\u0995 \\u0995\\u09be\\u099c\\u09c7 \\u09ad\\u09cd\\u09b0\\u09ae\\u09a3\",\"name_en\":\"Official Travel\",\"updated_at\":\"2024-06-01 01:02:57\",\"created_at\":\"2024-06-01 01:02:57\",\"id\":2}', '42.0.7.228', '2024-06-01 05:02:57', '2024-06-01 05:02:57'),
(308, 'audit:created', 1, 'App\\Models\\Batch#1', 2, '{\"batch_bn\":\"\\u09e8\\u09e8 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"22nd Batch\",\"updated_at\":\"2024-06-01 01:03:38\",\"created_at\":\"2024-06-01 01:03:38\",\"id\":1}', '42.0.7.228', '2024-06-01 05:03:38', '2024-06-01 05:03:38'),
(309, 'audit:created', 2, 'App\\Models\\Batch#2', 2, '{\"batch_bn\":\"\\u09e8\\u09e9 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"23rd Batch\",\"updated_at\":\"2024-06-01 01:04:10\",\"created_at\":\"2024-06-01 01:04:10\",\"id\":2}', '42.0.7.228', '2024-06-01 05:04:10', '2024-06-01 05:04:10'),
(310, 'audit:created', 3, 'App\\Models\\Batch#3', 2, '{\"batch_bn\":\"\\u09e8\\u09ea \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"24th Batch\",\"updated_at\":\"2024-06-01 01:04:42\",\"created_at\":\"2024-06-01 01:04:42\",\"id\":3}', '42.0.7.228', '2024-06-01 05:04:42', '2024-06-01 05:04:42'),
(311, 'audit:created', 4, 'App\\Models\\Batch#4', 2, '{\"batch_bn\":\"\\u09e8\\u09eb \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"25th Batch\",\"updated_at\":\"2024-06-01 01:05:08\",\"created_at\":\"2024-06-01 01:05:08\",\"id\":4}', '42.0.7.228', '2024-06-01 05:05:09', '2024-06-01 05:05:09'),
(312, 'audit:created', 5, 'App\\Models\\Batch#5', 2, '{\"batch_bn\":\"\\u09e8\\u09ec \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"26th Batch\",\"updated_at\":\"2024-06-01 01:05:38\",\"created_at\":\"2024-06-01 01:05:38\",\"id\":5}', '42.0.7.228', '2024-06-01 05:05:38', '2024-06-01 05:05:38'),
(313, 'audit:created', 6, 'App\\Models\\Batch#6', 2, '{\"batch_bn\":\"\\u09e8\\u09ed\\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"27th Batch\",\"updated_at\":\"2024-06-01 01:06:07\",\"created_at\":\"2024-06-01 01:06:07\",\"id\":6}', '42.0.7.228', '2024-06-01 05:06:07', '2024-06-01 05:06:07'),
(314, 'audit:updated', 6, 'App\\Models\\Batch#6', 2, '{\"batch_bn\":\"\\u09e8\\u09ed \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"updated_at\":\"2024-06-01 01:06:24\"}', '42.0.7.228', '2024-06-01 05:06:24', '2024-06-01 05:06:24'),
(315, 'audit:created', 7, 'App\\Models\\Batch#7', 2, '{\"batch_bn\":\"\\u09e8\\u09ee \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"28th Batch\",\"updated_at\":\"2024-06-01 01:06:51\",\"created_at\":\"2024-06-01 01:06:51\",\"id\":7}', '42.0.7.228', '2024-06-01 05:06:51', '2024-06-01 05:06:51'),
(316, 'audit:created', 8, 'App\\Models\\Batch#8', 2, '{\"batch_bn\":\"\\u09e8\\u09ef \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"29th Batch\",\"updated_at\":\"2024-06-01 01:07:27\",\"created_at\":\"2024-06-01 01:07:27\",\"id\":8}', '42.0.7.228', '2024-06-01 05:07:27', '2024-06-01 05:07:27'),
(317, 'audit:created', 9, 'App\\Models\\Batch#9', 2, '{\"batch_bn\":\"\\u09e9\\u09e6 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"30th Batch\",\"updated_at\":\"2024-06-01 01:08:14\",\"created_at\":\"2024-06-01 01:08:14\",\"id\":9}', '42.0.7.228', '2024-06-01 05:08:14', '2024-06-01 05:08:14'),
(318, 'audit:created', 10, 'App\\Models\\Batch#10', 2, '{\"batch_bn\":\"\\u09e9\\u09e7 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"31st Batch\",\"updated_at\":\"2024-06-01 01:08:34\",\"created_at\":\"2024-06-01 01:08:34\",\"id\":10}', '42.0.7.228', '2024-06-01 05:08:34', '2024-06-01 05:08:34'),
(319, 'audit:created', 11, 'App\\Models\\Batch#11', 2, '{\"batch_bn\":\"\\u09e9\\u09e8 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"32nd Batch\",\"updated_at\":\"2024-06-01 01:08:55\",\"created_at\":\"2024-06-01 01:08:55\",\"id\":11}', '42.0.7.228', '2024-06-01 05:08:55', '2024-06-01 05:08:55'),
(320, 'audit:created', 12, 'App\\Models\\Batch#12', 2, '{\"batch_bn\":\"\\u09e9\\u09e9 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"33rd Batch\",\"updated_at\":\"2024-06-01 01:09:23\",\"created_at\":\"2024-06-01 01:09:23\",\"id\":12}', '42.0.7.228', '2024-06-01 05:09:23', '2024-06-01 05:09:23'),
(321, 'audit:created', 13, 'App\\Models\\Batch#13', 2, '{\"batch_bn\":\"\\u09e9\\u09ea \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"34th Batch\",\"updated_at\":\"2024-06-01 01:09:48\",\"created_at\":\"2024-06-01 01:09:48\",\"id\":13}', '42.0.7.228', '2024-06-01 05:09:48', '2024-06-01 05:09:48'),
(322, 'audit:created', 14, 'App\\Models\\Batch#14', 2, '{\"batch_bn\":\"\\u09e9\\u09eb \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"35th Batch\",\"updated_at\":\"2024-06-01 01:10:12\",\"created_at\":\"2024-06-01 01:10:12\",\"id\":14}', '42.0.7.228', '2024-06-01 05:10:12', '2024-06-01 05:10:12'),
(323, 'audit:created', 15, 'App\\Models\\Batch#15', 2, '{\"batch_bn\":\"\\u09e9\\u09ec \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"36th Batch\",\"updated_at\":\"2024-06-01 01:10:30\",\"created_at\":\"2024-06-01 01:10:30\",\"id\":15}', '42.0.7.228', '2024-06-01 05:10:31', '2024-06-01 05:10:31'),
(324, 'audit:created', 16, 'App\\Models\\Batch#16', 2, '{\"batch_bn\":\"\\u09e9\\u09ed \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"37th Batch\",\"updated_at\":\"2024-06-01 01:11:01\",\"created_at\":\"2024-06-01 01:11:01\",\"id\":16}', '42.0.7.228', '2024-06-01 05:11:01', '2024-06-01 05:11:01'),
(325, 'audit:created', 17, 'App\\Models\\Batch#17', 2, '{\"batch_bn\":\"\\u09e9\\u09ee \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"38th Batch\",\"updated_at\":\"2024-06-01 01:11:22\",\"created_at\":\"2024-06-01 01:11:22\",\"id\":17}', '42.0.7.228', '2024-06-01 05:11:22', '2024-06-01 05:11:22'),
(326, 'audit:created', 18, 'App\\Models\\Batch#18', 2, '{\"batch_bn\":\"\\u09e9\\u09ef \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"39th Batch\",\"updated_at\":\"2024-06-01 01:11:41\",\"created_at\":\"2024-06-01 01:11:41\",\"id\":18}', '42.0.7.228', '2024-06-01 05:11:41', '2024-06-01 05:11:41'),
(327, 'audit:created', 19, 'App\\Models\\Batch#19', 2, '{\"batch_bn\":\"\\u09ea\\u09e6 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"40th Batch\",\"updated_at\":\"2024-06-01 01:11:58\",\"created_at\":\"2024-06-01 01:11:58\",\"id\":19}', '42.0.7.228', '2024-06-01 05:11:58', '2024-06-01 05:11:58'),
(328, 'audit:created', 20, 'App\\Models\\Batch#20', 2, '{\"batch_bn\":\"\\u09ea\\u09e7 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"41st Batch\",\"updated_at\":\"2024-06-01 01:12:16\",\"created_at\":\"2024-06-01 01:12:16\",\"id\":20}', '42.0.7.228', '2024-06-01 05:12:16', '2024-06-01 05:12:16'),
(329, 'audit:created', 21, 'App\\Models\\Batch#21', 2, '{\"batch_bn\":\"\\u09ea\\u09e8 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"42nd Batch\",\"updated_at\":\"2024-06-01 01:12:34\",\"created_at\":\"2024-06-01 01:12:34\",\"id\":21}', '42.0.7.228', '2024-06-01 05:12:34', '2024-06-01 05:12:34'),
(330, 'audit:created', 22, 'App\\Models\\Batch#22', 2, '{\"batch_bn\":\"\\u09ea\\u09e9 \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"43rd Batch\",\"updated_at\":\"2024-06-01 01:12:56\",\"created_at\":\"2024-06-01 01:12:56\",\"id\":22}', '42.0.7.228', '2024-06-01 05:12:56', '2024-06-01 05:12:56'),
(331, 'audit:created', 23, 'App\\Models\\Batch#23', 2, '{\"batch_bn\":\"\\u09ea\\u09ea \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"44th Batch\",\"updated_at\":\"2024-06-01 01:13:13\",\"created_at\":\"2024-06-01 01:13:13\",\"id\":23}', '42.0.7.228', '2024-06-01 05:13:13', '2024-06-01 05:13:13'),
(332, 'audit:created', 24, 'App\\Models\\Batch#24', 2, '{\"batch_bn\":\"\\u09ea\\u09eb \\u09a4\\u09ae \\u09ac\\u09cd\\u09af\\u09be\\u099a\",\"batch_en\":\"45th Batch\",\"updated_at\":\"2024-06-01 01:14:26\",\"created_at\":\"2024-06-01 01:14:26\",\"id\":24}', '42.0.7.228', '2024-06-01 05:14:26', '2024-06-01 05:14:26'),
(333, 'audit:created', 3, 'App\\Models\\EmployeeList#3', 2, '{\"fullname_bn\":\"\\u0995\\u09be\\u09ae\\u09b0\\u09be\\u09a8 \\u09b9\\u09cb\\u09b8\\u09be\\u0987\\u09a8\",\"fullname_en\":\"Kamran Hosan\",\"cadreid\":\"4512345\",\"batch_id\":\"24\",\"fname_bn\":\"\\u09ae\\u09cb\\u0983 \\u0986\\u09ac\\u09cd\\u09a6\\u09c1\\u09b2 \\u0995\\u09a6\\u09cd\\u09a6\\u09c1\\u09b8\",\"fname_en\":\"Md Abdul Quddus\",\"mname_bn\":\"\\u09ae\\u09cb\\u099b\\u09be\\u0983 \\u09b6\\u09b0\\u09bf\\u09ab\\u09be \\u09ac\\u09c7\\u0997\\u09ae\",\"mname_en\":\"Mst Sharifa Begum\",\"date_of_birth\":\"28\\/02\\/1998\",\"marital_statu_id\":\"1\",\"gender_id\":\"1\",\"religion_id\":\"1\",\"height\":\"165\",\"special_identity\":null,\"home_district_id\":\"27\",\"blood_group_id\":\"1\",\"email\":\"mdkamranhosan98@gmail.com\",\"mobile_number\":\"01764894771\",\"nid\":\"8456950236\",\"passport\":null,\"license_type_id\":null,\"joiningexaminfo_id\":\"2\",\"date_of_regularization\":null,\"regularization_issue_date\":null,\"grade_id\":\"9\",\"fjoining_date\":\"09\\/05\\/2024\",\"first_joining_office_name\":\"Ban Bhaban, Agargaon, Dhaka\",\"first_joining_memo_no\":\"12\\/05\\/24 - 325\",\"date_of_gazette\":\"04\\/01\\/2024\",\"date_of_con_serviec\":\"12\\/06\\/2024\",\"quota_id\":\"2\",\"employeeid\":\"2201100001\",\"updated_at\":\"2024-06-01 01:25:36\",\"created_at\":\"2024-06-01 01:25:36\",\"id\":3,\"birth_certificate_upload\":null,\"nid_upload\":null,\"passport_upload\":null,\"license_upload\":null,\"certificate_upload\":null,\"first_joining_order\":null,\"fjoining_letter\":null,\"date_of_gazette_if_any\":null,\"regularization_office_orde_go\":null,\"confirmation_in_service\":null,\"electric_signature\":null,\"employee_photo\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:25:36', '2024-06-01 05:25:36'),
(334, 'audit:updated', 3, 'App\\Models\\EmployeeList#3', 2, '{\"approve\":\"Approved\",\"approveby\":2,\"updated_at\":\"2024-06-01 01:25:44\"}', '42.0.7.228', '2024-06-01 05:25:44', '2024-06-01 05:25:44'),
(335, 'audit:created', 3, 'App\\Models\\EducationInformatione#3', 2, '{\"employee_id\":\"3\",\"name_of_exam_id\":\"3\",\"school_university_name\":\"Kheruajani High School\",\"exam_board_id\":\"4\",\"achievement_types_id\":\"1\",\"cgpa\":\"4\",\"concentration_major_group\":\"Beng, Eng, Math\",\"passing_year\":\"2011\",\"updated_at\":\"2024-06-01 01:27:41\",\"created_at\":\"2024-06-01 01:27:41\",\"id\":3,\"catificarte\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:27:41', '2024-06-01 05:27:41'),
(336, 'audit:created', 4, 'App\\Models\\EducationInformatione#4', 2, '{\"employee_id\":\"3\",\"name_of_exam_id\":\"2\",\"school_university_name\":\"Cantonment Public School & College, Momenshahi\",\"exam_board_id\":\"7\",\"achievement_types_id\":\"1\",\"cgpa\":\"5\",\"concentration_major_group\":\"Beng, Eng, Math, Phy, Che\",\"passing_year\":\"2016\",\"updated_at\":\"2024-06-01 01:30:32\",\"created_at\":\"2024-06-01 01:30:32\",\"id\":4,\"catificarte\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:30:32', '2024-06-01 05:30:32'),
(337, 'audit:created', 2, 'App\\Models\\Professionale#2', 2, '{\"qualification_title\":\"Software Developer\",\"institution\":\"Synergy Interface Ltd.\",\"from_date\":\"05\\/10\\/2023\",\"to_date\":\"08\\/03\\/2024\",\"passing_year\":\"2024\",\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:31:42\",\"created_at\":\"2024-06-01 01:31:42\",\"id\":2}', '42.0.7.228', '2024-06-01 05:31:42', '2024-06-01 05:31:42'),
(338, 'audit:created', 5, 'App\\Models\\EducationInformatione#5', 2, '{\"employee_id\":\"3\",\"name_of_exam_id\":\"16\",\"school_university_name\":\"Jatiya Kabi Kazi Nazrul Islam University\",\"exam_board_id\":\"7\",\"achievement_types_id\":\"2\",\"cgpa\":\"3.20\",\"concentration_major_group\":null,\"passing_year\":\"2023\",\"updated_at\":\"2024-06-01 01:32:49\",\"created_at\":\"2024-06-01 01:32:49\",\"id\":5,\"catificarte\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:32:49', '2024-06-01 05:32:49'),
(339, 'audit:created', 3, 'App\\Models\\Addressdetaile#3', 2, '{\"address_type\":\"Permanent\",\"flat_house\":\"Soyedgram\",\"post_office\":\"Kheruajani\",\"post_code\":\"2210\",\"thana_upazila_id\":\"295\",\"phone_number\":\"01764894771\",\"status\":\"No\",\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:34:05\",\"created_at\":\"2024-06-01 01:34:05\",\"id\":3}', '42.0.7.228', '2024-06-01 05:34:05', '2024-06-01 05:34:05'),
(340, 'audit:created', 4, 'App\\Models\\Addressdetaile#4', 2, '{\"address_type\":\"Present\",\"flat_house\":\"DOHS\",\"post_office\":\"Mirpur\",\"post_code\":\"2212\",\"thana_upazila_id\":\"245\",\"phone_number\":\"01764894771\",\"status\":\"No\",\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:36:08\",\"created_at\":\"2024-06-01 01:36:08\",\"id\":4}', '42.0.7.228', '2024-06-01 05:36:08', '2024-06-01 05:36:08'),
(341, 'audit:created', 3, 'App\\Models\\EmergenceContacte#3', 2, '{\"contact_person_name\":\"Kawsary Akter\",\"contact_person_relation\":\"Elder Sister\",\"contact_person_number\":\"01609758377\",\"address\":\"Nokhali DC Office, Noakhali\",\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:37:11\",\"created_at\":\"2024-06-01 01:37:11\",\"id\":3}', '42.0.7.228', '2024-06-01 05:37:11', '2024-06-01 05:37:11'),
(342, 'audit:created', 3, 'App\\Models\\SpouseInformatione#3', 2, '{\"employee_id\":\"3\",\"name_bn\":\"\\u09b0\\u0993\\u09a8\\u0995 \\u099c\\u09be\\u09b9\\u09be\\u09a8 \\u09ae\\u09bf\\u09b6\\u09c1\",\"name_en\":\"Rawnak Jahan Mishu\",\"nid_number\":\"4212345678\",\"phone_number\":\"01764894771\",\"present_addess\":\"<p>Mymensingh&nbsp;<\\/p>\",\"permanent_addess\":\"<p>Mymensingh&nbsp;<\\/p>\",\"updated_at\":\"2024-06-01 01:38:00\",\"created_at\":\"2024-06-01 01:38:00\",\"id\":3,\"nid_upload\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:38:00', '2024-06-01 05:38:00'),
(343, 'audit:created', 6, 'App\\Models\\Child#6', 2, '{\"name_bn\":\"\\u09a1\\u09c7\\u09ae\\u09cb \\u09a8\\u09be\\u09ae\",\"name_en\":\"Demo Name\",\"date_of_birth\":\"01\\/12\\/2023\",\"complite_21\":\"01\\/12\\/2044\",\"gender_id\":\"2\",\"nid_number\":null,\"passport_number\":null,\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:39:52\",\"created_at\":\"2024-06-01 01:39:52\",\"id\":6,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:39:52', '2024-06-01 05:39:52'),
(344, 'audit:created', 9, 'App\\Models\\JobHistory#9', 2, '{\"office_unit_id\":\"1\",\"level_2\":\"Ban Bhaban\",\"designation_id\":\"6\",\"joining_date\":\"22\\/05\\/2024\",\"release_date\":\"01\\/06\\/2024\",\"grade_id\":\"9\",\"updated_at\":\"2024-06-01 01:42:46\",\"created_at\":\"2024-06-01 01:42:46\",\"id\":9,\"go_upload\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:42:46', '2024-06-01 05:42:46'),
(345, 'audit:created', 3, 'App\\Models\\EmployeePromotion#3', 2, '{\"new_designation_id\":\"10\",\"go_issue_date\":\"29\\/05\\/2024\",\"office_order_date\":\"29\\/05\\/2024\",\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:43:24\",\"created_at\":\"2024-06-01 01:43:24\",\"id\":3,\"office_order\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:43:24', '2024-06-01 05:43:24'),
(346, 'audit:created', 2, 'App\\Models\\LeaveRecord#2', 2, '{\"leave_category_id\":\"9\",\"type_of_leave_id\":\"1\",\"start_date\":\"30\\/05\\/2024\",\"end_date\":\"31\\/05\\/2024\",\"reason\":null,\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:44:08\",\"created_at\":\"2024-06-01 01:44:08\",\"id\":2}', '42.0.7.228', '2024-06-01 05:44:08', '2024-06-01 05:44:08'),
(347, 'audit:created', 2, 'App\\Models\\Training#2', 2, '{\"training_type_id\":\"2\",\"training_name\":\"Regional Training Workshop on Integrated Watershed Mgt.\",\"institute_name\":\"FDTC, Forest Academy\",\"country_id\":\"76\",\"start_date\":\"24\\/05\\/2024\",\"end_date\":\"27\\/05\\/2024\",\"grade\":null,\"position\":null,\"location\":null,\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:45:50\",\"created_at\":\"2024-06-01 01:45:50\",\"id\":2}', '42.0.7.228', '2024-06-01 05:45:50', '2024-06-01 05:45:50'),
(348, 'audit:created', 2, 'App\\Models\\TravelRecord#2', 2, '{\"country_id\":\"76\",\"title\":\"Official Purpose\",\"purpose_id\":\"1\",\"start_date\":\"28\\/05\\/2024\",\"end_date\":\"29\\/05\\/2024\",\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:46:43\",\"created_at\":\"2024-06-01 01:46:43\",\"id\":2}', '42.0.7.228', '2024-06-01 05:46:43', '2024-06-01 05:46:43'),
(349, 'audit:created', 2, 'App\\Models\\ForeignTravelPersonal#2', 2, '{\"title\":\"Personal Tour\",\"country_id\":\"123\",\"purpose_id\":\"2\",\"from_date\":\"01\\/06\\/2024\",\"to_date\":\"01\\/06\\/2024\",\"leave_id\":\"2\",\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:48:26\",\"created_at\":\"2024-06-01 01:48:26\",\"id\":2}', '42.0.7.228', '2024-06-01 05:48:26', '2024-06-01 05:48:26'),
(350, 'audit:created', 2, 'App\\Models\\Extracurriculam#2', 2, '{\"activity_name\":\"CSE Fest Organiser\",\"organization\":\"Det of CSE\",\"position\":\"Organiser\",\"start_date\":\"01\\/06\\/2023\",\"end_date\":\"03\\/06\\/2023\",\"description\":null,\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:50:00\",\"created_at\":\"2024-06-01 01:50:00\",\"id\":2,\"attatchment\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:50:00', '2024-06-01 05:50:00'),
(351, 'audit:created', 2, 'App\\Models\\Publication#2', 2, '{\"title\":\"Covid-19: Introduce yourself to the world.\",\"publication_type\":\"Magazine\",\"publication_media\":\"Newspaper\",\"publication_date\":null,\"publication_link\":null,\"description\":null,\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:52:39\",\"created_at\":\"2024-06-01 01:52:39\",\"id\":2}', '42.0.7.228', '2024-06-01 05:52:39', '2024-06-01 05:52:39'),
(352, 'audit:created', 2, 'App\\Models\\Language#2', 2, '{\"employee_id\":\"3\",\"language_id\":\"1\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-01 01:55:14\",\"created_at\":\"2024-06-01 01:55:14\",\"id\":2}', '42.0.7.228', '2024-06-01 05:55:14', '2024-06-01 05:55:14'),
(353, 'audit:created', 3, 'App\\Models\\Language#3', 2, '{\"employee_id\":\"3\",\"language_id\":\"2\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"2\",\"updated_at\":\"2024-06-01 01:55:31\",\"created_at\":\"2024-06-01 01:55:31\",\"id\":3}', '42.0.7.228', '2024-06-01 05:55:31', '2024-06-01 05:55:31'),
(354, 'audit:created', 2, 'App\\Models\\CriminalProsecutione#2', 2, '{\"judgement_type\":\"N\\/A\",\"natureof_offence\":\"N\\/A\",\"government_order_no\":\"22\\/02\\/2022- A\",\"remzrk\":null,\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:56:26\",\"created_at\":\"2024-06-01 01:56:26\",\"id\":2,\"court_order\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:56:26', '2024-06-01 05:56:26'),
(355, 'audit:created', 2, 'App\\Models\\CriminalproDisciplinary#2', 2, '{\"criminalprosecutione_id\":\"2\",\"judgement_type\":\"N\\/A\",\"government_order_no\":\"22\\/02\\/2022- A\",\"remarks\":\"N\\/A\",\"updated_at\":\"2024-06-01 01:56:55\",\"created_at\":\"2024-06-01 01:56:55\",\"id\":2,\"order_upload_file\":null,\"media\":[]}', '42.0.7.228', '2024-06-01 05:56:55', '2024-06-01 05:56:55'),
(356, 'audit:created', 2, 'App\\Models\\AcrMonitoring#2', 2, '{\"year\":\"2024\",\"reviewer\":\"Synergy Inteface Ltd.\",\"review_date\":\"01\\/07\\/2024\",\"remarks\":\"<p>N\\/A<\\/p>\",\"employee_id\":\"3\",\"updated_at\":\"2024-06-01 01:57:52\",\"created_at\":\"2024-06-01 01:57:52\",\"id\":2}', '42.0.7.228', '2024-06-01 05:57:52', '2024-06-01 05:57:52'),
(357, 'audit:created', 4, 'App\\Models\\EmployeeList#4', 2, '{\"fullname_bn\":\"\\u09a8\\u09c1\\u09b0\\u09c1\\u099c\\u09cd\\u099c\\u09be\\u09ae\\u09be\\u09a8\",\"fullname_en\":\"Nurujjaman\",\"cadreid\":\"123456\",\"batch_id\":\"1\",\"fname_bn\":\"\\u099c\\u09be\\u09b2\\u09be\\u09b2 \\u0989\\u09a6\\u09cd\\u09a6\\u09bf\\u09a8\",\"fname_en\":\"Jalal Uddin\",\"mname_bn\":\"\\u09a8\\u09c1\\u09b0\\u099c\\u09be\\u09b9\\u09be\\u09a8 \\u09b8\\u09c1\\u09b2\\u09a4\\u09be\\u09a8\\u09be\",\"mname_en\":\"Nurjahan Sultana\",\"date_of_birth\":\"21\\/09\\/1999\",\"marital_statu_id\":\"2\",\"gender_id\":\"1\",\"religion_id\":\"1\",\"height\":\"155\",\"special_identity\":null,\"home_district_id\":\"38\",\"blood_group_id\":\"2\",\"email\":\"mdrabbi329@gmail.com\",\"mobile_number\":\"01957073942\",\"nid\":\"4204994498\",\"passport\":null,\"license_type_id\":\"2\",\"joiningexaminfo_id\":\"1\",\"project_id\":\"7\",\"date_of_regularization\":\"27\\/05\\/2024\",\"regularization_issue_date\":\"03\\/06\\/2024\",\"grade_id\":\"8\",\"fjoining_date\":\"30\\/04\\/2024\",\"first_joining_office_name\":\"Development Planning Unit , Bana Bhaban, Agargaon, Dhaka\",\"first_joining_memo_no\":\"efw4jh\",\"date_of_gazette\":\"01\\/04\\/2024\",\"date_of_con_serviec\":null,\"quota_id\":\"1\",\"employeeid\":\"2201210002\",\"updated_at\":\"2024-06-01 04:23:17\",\"created_at\":\"2024-06-01 04:23:17\",\"id\":4,\"birth_certificate_upload\":null,\"nid_upload\":null,\"passport_upload\":null,\"license_upload\":null,\"certificate_upload\":null,\"first_joining_order\":null,\"fjoining_letter\":null,\"date_of_gazette_if_any\":null,\"regularization_office_orde_go\":null,\"confirmation_in_service\":null,\"electric_signature\":null,\"employee_photo\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 08:23:17', '2024-06-01 08:23:17'),
(358, 'audit:updated', 4, 'App\\Models\\EmployeeList#4', 2, '{\"approve\":\"Approved\",\"approveby\":2,\"updated_at\":\"2024-06-01 04:23:33\"}', '27.147.163.77', '2024-06-01 08:23:33', '2024-06-01 08:23:33'),
(359, 'audit:created', 6, 'App\\Models\\EducationInformatione#6', 2, '{\"employee_id\":\"4\",\"name_of_exam_id\":\"3\",\"school_university_name\":\"Swaruppur kushumpur High School\",\"exam_board_id\":\"6\",\"achievement_types_id\":\"1\",\"cgpa\":\"5.00\",\"concentration_major_group\":\"Science\",\"passing_year\":\"2011\",\"updated_at\":\"2024-06-01 04:24:53\",\"created_at\":\"2024-06-01 04:24:53\",\"id\":6,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 08:24:53', '2024-06-01 08:24:53'),
(360, 'audit:created', 3, 'App\\Models\\Professionale#3', 2, '{\"qualification_title\":\"BSC\",\"institution\":\"Dhaka City College\",\"from_date\":\"22\\/02\\/2018\",\"to_date\":\"28\\/03\\/2023\",\"passing_year\":\"2022\",\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:27:08\",\"created_at\":\"2024-06-01 04:27:08\",\"id\":3}', '27.147.163.77', '2024-06-01 08:27:08', '2024-06-01 08:27:08'),
(361, 'audit:created', 5, 'App\\Models\\Addressdetaile#5', 2, '{\"address_type\":\"Present\",\"flat_house\":\"Mirpur-1\",\"post_office\":\"Mirpur\",\"post_code\":\"7230\",\"thana_upazila_id\":\"245\",\"phone_number\":\"01957073942\",\"status\":\"Yes\",\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:28:42\",\"created_at\":\"2024-06-01 04:28:42\",\"id\":5}', '27.147.163.77', '2024-06-01 08:28:42', '2024-06-01 08:28:42'),
(362, 'audit:created', 4, 'App\\Models\\EmergenceContacte#4', 2, '{\"contact_person_name\":\"Azad\",\"contact_person_relation\":\"Brother\",\"contact_person_number\":\"01518311454\",\"address\":\"Jhenaidah\",\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:30:04\",\"created_at\":\"2024-06-01 04:30:04\",\"id\":4}', '27.147.163.77', '2024-06-01 08:30:04', '2024-06-01 08:30:04'),
(363, 'audit:created', 4, 'App\\Models\\SpouseInformatione#4', 2, '{\"employee_id\":\"4\",\"name_bn\":\"N\\/A\",\"name_en\":\"N\\/A\",\"nid_number\":null,\"phone_number\":null,\"present_addess\":null,\"permanent_addess\":null,\"updated_at\":\"2024-06-01 04:31:06\",\"created_at\":\"2024-06-01 04:31:06\",\"id\":4,\"nid_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 08:31:06', '2024-06-01 08:31:06'),
(364, 'audit:created', 7, 'App\\Models\\Child#7', 2, '{\"name_bn\":\"N\\/A\",\"name_en\":\"N\\/A\",\"date_of_birth\":\"29\\/04\\/2024\",\"complite_21\":\"29\\/04\\/2045\",\"gender_id\":\"1\",\"nid_number\":null,\"passport_number\":null,\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:32:36\",\"created_at\":\"2024-06-01 04:32:36\",\"id\":7,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 08:32:36', '2024-06-01 08:32:36'),
(365, 'audit:created', 10, 'App\\Models\\JobHistory#10', 2, '{\"office_unit_id\":\"2\",\"circle_list_id\":\"2\",\"postingindivision\":\"Posting in Office\",\"posting_in_range\":\"Posting in Office\",\"designation_id\":\"15\",\"joining_date\":\"27\\/05\\/2024\",\"release_date\":\"08\\/04\\/2024\",\"grade_id\":\"3\",\"updated_at\":\"2024-06-01 04:33:57\",\"created_at\":\"2024-06-01 04:33:57\",\"id\":10,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 08:33:57', '2024-06-01 08:33:57'),
(366, 'audit:created', 4, 'App\\Models\\EmployeePromotion#4', 2, '{\"new_designation_id\":\"15\",\"go_issue_date\":\"01\\/01\\/2019\",\"office_order_date\":\"01\\/01\\/2019\",\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:34:30\",\"created_at\":\"2024-06-01 04:34:30\",\"id\":4,\"office_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 08:34:30', '2024-06-01 08:34:30'),
(367, 'audit:created', 3, 'App\\Models\\LeaveRecord#3', 2, '{\"leave_category_id\":\"2\",\"type_of_leave_id\":\"1\",\"start_date\":\"01\\/06\\/2024\",\"end_date\":\"04\\/06\\/2024\",\"reason\":null,\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:34:51\",\"created_at\":\"2024-06-01 04:34:51\",\"id\":3}', '27.147.163.77', '2024-06-01 08:34:51', '2024-06-01 08:34:51'),
(368, 'audit:created', 3, 'App\\Models\\Training#3', 2, '{\"training_type_id\":\"1\",\"training_name\":\"Training on Apprising Bangladesh Delta Plan 2100\",\"institute_name\":\"The General Economics Division(GED) of the Bangladesh Planning Commission,\",\"country_id\":\"14\",\"start_date\":\"30\\/04\\/2024\",\"end_date\":\"01\\/05\\/2024\",\"grade\":null,\"position\":null,\"location\":null,\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:36:39\",\"created_at\":\"2024-06-01 04:36:39\",\"id\":3}', '27.147.163.77', '2024-06-01 08:36:39', '2024-06-01 08:36:39'),
(369, 'audit:created', 3, 'App\\Models\\TravelRecord#3', 2, '{\"country_id\":\"14\",\"title\":null,\"purpose_id\":\"1\",\"start_date\":\"26\\/02\\/2024\",\"end_date\":\"03\\/03\\/2024\",\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:37:27\",\"created_at\":\"2024-06-01 04:37:27\",\"id\":3}', '27.147.163.77', '2024-06-01 08:37:27', '2024-06-01 08:37:27'),
(370, 'audit:created', 3, 'App\\Models\\ForeignTravelPersonal#3', 2, '{\"title\":null,\"country_id\":\"14\",\"purpose_id\":\"2\",\"from_date\":\"08\\/04\\/2024\",\"to_date\":\"19\\/04\\/2024\",\"leave_id\":\"3\",\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:37:58\",\"created_at\":\"2024-06-01 04:37:58\",\"id\":3}', '27.147.163.77', '2024-06-01 08:37:58', '2024-06-01 08:37:58'),
(371, 'audit:created', 3, 'App\\Models\\Extracurriculam#3', 2, '{\"activity_name\":\"Bangladesh\",\"organization\":\"DCC\",\"position\":\"Demo\",\"start_date\":\"26\\/02\\/2024\",\"end_date\":\"02\\/04\\/2024\",\"description\":null,\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:38:32\",\"created_at\":\"2024-06-01 04:38:32\",\"id\":3,\"attatchment\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 08:38:32', '2024-06-01 08:38:32'),
(372, 'audit:created', 3, 'App\\Models\\Publication#3', 2, '{\"title\":\"Publications\",\"publication_type\":\"Books\",\"publication_media\":null,\"publication_date\":null,\"publication_link\":null,\"description\":null,\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:39:09\",\"created_at\":\"2024-06-01 04:39:09\",\"id\":3}', '27.147.163.77', '2024-06-01 08:39:09', '2024-06-01 08:39:09'),
(373, 'audit:created', 4, 'App\\Models\\Language#4', 2, '{\"employee_id\":\"4\",\"language_id\":\"1\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-01 04:39:39\",\"created_at\":\"2024-06-01 04:39:39\",\"id\":4}', '27.147.163.77', '2024-06-01 08:39:39', '2024-06-01 08:39:39'),
(374, 'audit:created', 3, 'App\\Models\\CriminalProsecutione#3', 2, '{\"judgement_type\":\"Nothing\",\"natureof_offence\":\"Demo\",\"government_order_no\":\"12365\",\"remzrk\":null,\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:39:50\",\"created_at\":\"2024-06-01 04:39:50\",\"id\":3,\"court_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 08:39:50', '2024-06-01 08:39:50'),
(375, 'audit:created', 3, 'App\\Models\\CriminalproDisciplinary#3', 2, '{\"criminalprosecutione_id\":\"2\",\"judgement_type\":\"Nothing\",\"government_order_no\":\"12365\",\"remarks\":null,\"updated_at\":\"2024-06-01 04:40:03\",\"created_at\":\"2024-06-01 04:40:03\",\"id\":3,\"order_upload_file\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 08:40:03', '2024-06-01 08:40:03'),
(376, 'audit:created', 3, 'App\\Models\\AcrMonitoring#3', 2, '{\"year\":\"2022\",\"reviewer\":\"Nurujjaman\",\"review_date\":\"04\\/04\\/2024\",\"remarks\":null,\"employee_id\":\"4\",\"updated_at\":\"2024-06-01 04:40:27\",\"created_at\":\"2024-06-01 04:40:27\",\"id\":3}', '27.147.163.77', '2024-06-01 08:40:27', '2024-06-01 08:40:27');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(377, 'audit:created', 346, 'App\\Models\\Permission#346', 1, '{\"title\":\"dfo\",\"updated_at\":\"2024-06-01 08:16:16\",\"created_at\":\"2024-06-01 08:16:16\",\"id\":346}', '27.147.163.77', '2024-06-01 12:16:16', '2024-06-01 12:16:16'),
(378, 'audit:created', 4, 'App\\Models\\CriminalProsecutione#4', 1, '{\"judgement_type\":\"Eaque doloribus exce\",\"natureof_offence\":\"Iste veniam culpa\",\"government_order_no\":\"Maiores nesciunt si\",\"remzrk\":\"<p>rtyrtyrtyrty<\\/p>\",\"employee_id\":\"2\",\"updated_at\":\"2024-06-01 08:35:35\",\"created_at\":\"2024-06-01 08:35:35\",\"id\":4,\"court_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 12:35:35', '2024-06-01 12:35:35'),
(379, 'audit:created', 11, 'App\\Models\\JobHistory#11', 1, '{\"office_unit_id\":\"2\",\"circle_list_id\":\"2\",\"postingindivision\":\"Range\\/SFNTC\\/Station\",\"posting_in_range\":\"Beat\\/SFNTC\\/Camp\",\"beat_list_id\":\"284\",\"employee_id\":\"1\",\"designation_id\":\"15\",\"joining_date\":\"18\\/06\\/2024\",\"release_date\":\"05\\/06\\/2024\",\"grade_id\":\"6\",\"updated_at\":\"2024-06-01 08:52:25\",\"created_at\":\"2024-06-01 08:52:25\",\"id\":11,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 12:52:26', '2024-06-01 12:52:26'),
(380, 'audit:created', 5, 'App\\Models\\EmployeeList#5', 2, '{\"fullname_bn\":\"\\u09b0\\u09be\\u09ab\\u09bf\",\"fullname_en\":\"Rafiul\",\"cadreid\":\"123456\",\"batch_id\":\"2\",\"fname_bn\":\"\\u09ae\\u09a4\\u09bf\\u0989\\u09b0 \\u09b0\\u09b9\\u09ae\\u09be\\u09a8 (\\u09ae\\u09c3\\u09a4)\",\"fname_en\":\"Matiur Rahman (Late)\",\"mname_bn\":\"\\u09b9\\u09cb\\u09b8\\u09a8\\u09c7 \\u0986\\u09b0\\u09be \\u09ac\\u09c7\\u0997\\u09ae\",\"mname_en\":\"Hosne Ara Begum\",\"date_of_birth\":\"06\\/03\\/1995\",\"marital_statu_id\":\"1\",\"gender_id\":\"1\",\"religion_id\":\"1\",\"height\":\"155\",\"special_identity\":null,\"home_district_id\":\"45\",\"blood_group_id\":\"5\",\"email\":\"test@admin.com\",\"mobile_number\":\"01957073942\",\"nid\":\"6547891236\",\"passport\":null,\"license_type_id\":\"2\",\"joiningexaminfo_id\":\"2\",\"projectrevenue_id\":\"2\",\"departmental_exam_id\":\"1\",\"date_of_regularization\":null,\"regularization_issue_date\":null,\"grade_id\":\"7\",\"fjoining_date\":\"13\\/09\\/2023\",\"first_joining_office_name\":\"Development Planning Unit , Bana Bhaban, Agargaon, Dhaka\",\"first_joining_memo_no\":\"efw4jh\",\"date_of_gazette\":\"03\\/01\\/2023\",\"date_of_con_serviec\":\"08\\/01\\/2024\",\"quota_id\":\"2\",\"employeeid\":\"2201210003\",\"updated_at\":\"2024-06-01 09:07:54\",\"created_at\":\"2024-06-01 09:07:54\",\"id\":5,\"birth_certificate_upload\":null,\"nid_upload\":null,\"passport_upload\":null,\"license_upload\":null,\"certificate_upload\":null,\"first_joining_order\":null,\"fjoining_letter\":null,\"date_of_gazette_if_any\":null,\"regularization_office_orde_go\":null,\"confirmation_in_service\":null,\"electric_signature\":null,\"employee_photo\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:07:54', '2024-06-01 13:07:54'),
(381, 'audit:updated', 5, 'App\\Models\\EmployeeList#5', 3, '{\"approve\":\"Approved\",\"approveby\":3,\"updated_at\":\"2024-06-01 09:10:28\"}', '27.147.163.77', '2024-06-01 13:10:28', '2024-06-01 13:10:28'),
(382, 'audit:created', 7, 'App\\Models\\EducationInformatione#7', 2, '{\"employee_id\":\"5\",\"name_of_exam_id\":\"26\",\"school_university_name\":\"Khagrachari  High School, Khagrachari\",\"exam_board_id\":\"1\",\"result_id\":\"1\",\"concentration_major_group\":\"Science\",\"passing_year\":\"1974\",\"updated_at\":\"2024-06-01 09:14:34\",\"created_at\":\"2024-06-01 09:14:34\",\"id\":7,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:14:34', '2024-06-01 13:14:34'),
(383, 'audit:created', 4, 'App\\Models\\Professionale#4', 2, '{\"qualification_title\":\"BSC\",\"institution\":\"Dhaka City College\",\"from_date\":\"02\\/01\\/2018\",\"to_date\":\"31\\/01\\/2023\",\"passing_year\":\"2023\",\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:15:16\",\"created_at\":\"2024-06-01 09:15:16\",\"id\":4}', '27.147.163.77', '2024-06-01 13:15:16', '2024-06-01 13:15:16'),
(384, 'audit:created', 6, 'App\\Models\\Addressdetaile#6', 2, '{\"address_type\":\"Present\",\"flat_house\":\"Mirpur-1\",\"post_office\":\"Mirpur\",\"post_code\":\"7230\",\"thana_upazila_id\":\"94\",\"phone_number\":\"01957073942\",\"status\":\"Yes\",\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:16:28\",\"created_at\":\"2024-06-01 09:16:28\",\"id\":6}', '27.147.163.77', '2024-06-01 13:16:28', '2024-06-01 13:16:28'),
(385, 'audit:created', 5, 'App\\Models\\EmergenceContacte#5', 2, '{\"contact_person_name\":\"S. M. Ahsanul Aziz\",\"contact_person_relation\":\"Brother\",\"contact_person_number\":\"01711170697\",\"address\":null,\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:16:39\",\"created_at\":\"2024-06-01 09:16:39\",\"id\":5}', '27.147.163.77', '2024-06-01 13:16:39', '2024-06-01 13:16:39'),
(386, 'audit:created', 5, 'App\\Models\\SpouseInformatione#5', 2, '{\"employee_id\":\"5\",\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"nid_number\":\"45345345345345\",\"phone_number\":\"9026394\",\"present_addess\":null,\"permanent_addess\":null,\"updated_at\":\"2024-06-01 09:17:34\",\"created_at\":\"2024-06-01 09:17:34\",\"id\":5,\"nid_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:17:34', '2024-06-01 13:17:34'),
(387, 'audit:created', 8, 'App\\Models\\Child#8', 2, '{\"name_bn\":\"\\u098f\\u09b8. \\u098f\\u09ae. \\u0986\\u09b9\\u09b8\\u09be\\u09a8\\u09c1\\u09b2 \\u0986\\u099c\\u09bf\\u099c\",\"name_en\":\"S. M. Ahsanul Aziz\",\"date_of_birth\":\"29\\/03\\/2023\",\"complite_21\":\"29\\/03\\/2044\",\"gender_id\":\"1\",\"nid_number\":\"45345345345345\",\"passport_number\":null,\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:18:12\",\"created_at\":\"2024-06-01 09:18:12\",\"id\":8,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:18:12', '2024-06-01 13:18:12'),
(388, 'audit:created', 12, 'App\\Models\\JobHistory#12', 2, '{\"office_unit_id\":\"2\",\"circle_list_id\":\"1\",\"employee_id\":\"5\",\"designation_id\":\"15\",\"joining_date\":\"02\\/01\\/2018\",\"release_date\":\"14\\/03\\/2018\",\"grade_id\":\"3\",\"updated_at\":\"2024-06-01 09:19:36\",\"created_at\":\"2024-06-01 09:19:36\",\"id\":12,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:19:36', '2024-06-01 13:19:36'),
(389, 'audit:created', 5, 'App\\Models\\EmployeePromotion#5', 2, '{\"new_designation_id\":\"14\",\"go_issue_date\":\"08\\/02\\/2023\",\"office_order_date\":\"29\\/03\\/2023\",\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:19:56\",\"created_at\":\"2024-06-01 09:19:56\",\"id\":5,\"office_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:19:56', '2024-06-01 13:19:56'),
(390, 'audit:created', 4, 'App\\Models\\LeaveRecord#4', 2, '{\"leave_category_id\":\"2\",\"type_of_leave_id\":\"1\",\"start_date\":\"04\\/01\\/2023\",\"end_date\":\"07\\/04\\/2023\",\"reason\":null,\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:20:26\",\"created_at\":\"2024-06-01 09:20:26\",\"id\":4}', '27.147.163.77', '2024-06-01 13:20:26', '2024-06-01 13:20:26'),
(391, 'audit:created', 4, 'App\\Models\\Training#4', 2, '{\"training_type_id\":\"1\",\"training_name\":\"Training on Apprising Bangladesh Delta Plan 2100\",\"institute_name\":\"The General Economics Division(GED) of the Bangladesh Planning Commission,\",\"country_id\":\"2\",\"start_date\":\"02\\/08\\/2023\",\"end_date\":\"01\\/09\\/2023\",\"location\":\"Dhaka\",\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:21:07\",\"created_at\":\"2024-06-01 09:21:07\",\"id\":4}', '27.147.163.77', '2024-06-01 13:21:07', '2024-06-01 13:21:07'),
(392, 'audit:created', 4, 'App\\Models\\TravelRecord#4', 2, '{\"country_id\":\"191\",\"title\":\"Demo\",\"purpose_id\":\"Demo\",\"start_date\":\"30\\/10\\/2023\",\"end_date\":\"17\\/02\\/2021\",\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:22:07\",\"created_at\":\"2024-06-01 09:22:07\",\"id\":4}', '27.147.163.77', '2024-06-01 13:22:07', '2024-06-01 13:22:07'),
(393, 'audit:created', 4, 'App\\Models\\ForeignTravelPersonal#4', 2, '{\"title\":\"\\u09a1\\u09c7\\u09ae\\u09cb\",\"country_id\":\"1\",\"purpose_id\":\"\\u09b8\\u09a0\\u09bf\\u0995\",\"from_date\":\"07\\/11\\/2023\",\"to_date\":\"04\\/06\\/2024\",\"leave_id\":\"2\",\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:23:15\",\"created_at\":\"2024-06-01 09:23:15\",\"id\":4}', '27.147.163.77', '2024-06-01 13:23:15', '2024-06-01 13:23:15'),
(394, 'audit:created', 4, 'App\\Models\\Extracurriculam#4', 2, '{\"activity_name\":\"Bangladesh\",\"organization\":\"DCC\",\"position\":\"Demo\",\"start_date\":\"12\\/09\\/2023\",\"end_date\":\"06\\/03\\/2024\",\"description\":null,\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:23:36\",\"created_at\":\"2024-06-01 09:23:36\",\"id\":4,\"attatchment\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:23:36', '2024-06-01 13:23:36'),
(395, 'audit:created', 4, 'App\\Models\\Publication#4', 2, '{\"title\":\"\\u09b6\\u09bf\\u09b0\\u09cb\\u09a8\\u09be\\u09ae\",\"publication_type\":\"Mobograph\",\"publication_media\":null,\"publication_date\":\"16\\/01\\/2024\",\"publication_link\":null,\"description\":null,\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:24:18\",\"created_at\":\"2024-06-01 09:24:18\",\"id\":4}', '27.147.163.77', '2024-06-01 13:24:18', '2024-06-01 13:24:18'),
(396, 'audit:created', 5, 'App\\Models\\Language#5', 2, '{\"employee_id\":\"5\",\"language_id\":\"1\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-01 09:25:53\",\"created_at\":\"2024-06-01 09:25:53\",\"id\":5}', '27.147.163.77', '2024-06-01 13:25:53', '2024-06-01 13:25:53'),
(397, 'audit:created', 5, 'App\\Models\\CriminalProsecutione#5', 2, '{\"judgement_type\":\"\\u09a7\\u09b0\\u09a8\",\"natureof_offence\":\"\\u0985\\u09aa\\u09b0\\u09be\\u09a7\\u09c7\\u09b0\",\"government_order_no\":\"\\u09e7\\u09e9\",\"remzrk\":null,\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:26:09\",\"created_at\":\"2024-06-01 09:26:09\",\"id\":5,\"court_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:26:09', '2024-06-01 13:26:09'),
(398, 'audit:created', 6, 'App\\Models\\CriminalProsecutione#6', 2, '{\"judgement_type\":\"\\u09a7\\u09b0\\u09a8\",\"natureof_offence\":\"\\u0985\\u09aa\\u09b0\\u09be\\u09a7\\u09c7\\u09b0\",\"government_order_no\":\"\\u09e7\\u09e9\",\"remzrk\":null,\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:26:23\",\"created_at\":\"2024-06-01 09:26:23\",\"id\":6,\"court_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:26:23', '2024-06-01 13:26:23'),
(399, 'audit:created', 4, 'App\\Models\\CriminalproDisciplinary#4', 2, '{\"criminalprosecutione_id\":\"5\",\"judgement_type\":\"\\u09a7\\u09b0\\u09a8\",\"government_order_no\":\"\\u09e7\\u09e9\",\"remarks\":\"\\u09a2\\u09be\\u0995\\u09be\",\"updated_at\":\"2024-06-01 09:27:14\",\"created_at\":\"2024-06-01 09:27:14\",\"id\":4,\"order_upload_file\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:27:15', '2024-06-01 13:27:15'),
(400, 'audit:created', 4, 'App\\Models\\AcrMonitoring#4', 2, '{\"year\":\"2000\",\"reviewer\":\"\\u09aa\\u09b0\\u09cd\\u09af\\u09be\\u09b2\\u09cb\\u099a\\u0995\",\"review_date\":\"19\\/07\\/2023\",\"remarks\":null,\"employee_id\":\"5\",\"updated_at\":\"2024-06-01 09:28:53\",\"created_at\":\"2024-06-01 09:28:53\",\"id\":4}', '27.147.163.77', '2024-06-01 13:28:53', '2024-06-01 13:28:53'),
(401, 'audit:created', 6, 'App\\Models\\EmployeeList#6', 2, '{\"fullname_bn\":\"\\u09a8\\u09be\\u0988\\u09ae \\u09b9\\u09be\\u09b8\\u09be\\u09a8\",\"fullname_en\":\"Naim Hasan\",\"cadreid\":\"123456\",\"batch_id\":\"1\",\"fname_bn\":\"\\u09ae\\u09a4\\u09bf\\u0989\\u09b0 \\u09b0\\u09b9\\u09ae\\u09be\\u09a8 (\\u09ae\\u09c3\\u09a4)\",\"fname_en\":\"Matiur Rahman (Late)\",\"mname_bn\":\"\\u09b9\\u09cb\\u09b8\\u09a8\\u09c7 \\u0986\\u09b0\\u09be \\u09ac\\u09c7\\u0997\\u09ae\",\"mname_en\":\"Hosne Ara Begum\",\"date_of_birth\":\"03\\/06\\/2009\",\"marital_statu_id\":\"1\",\"gender_id\":\"1\",\"religion_id\":\"1\",\"height\":\"155\",\"special_identity\":\"No\",\"home_district_id\":\"60\",\"blood_group_id\":\"5\",\"email\":\"test@admin.com\",\"mobile_number\":\"01957073942\",\"nid\":\"8989978456\",\"passport\":null,\"license_type_id\":\"2\",\"joiningexaminfo_id\":\"1\",\"project_id\":\"3\",\"date_of_regularization\":\"23\\/05\\/2023\",\"regularization_issue_date\":\"16\\/08\\/2023\",\"grade_id\":\"12\",\"fjoining_date\":\"07\\/09\\/2023\",\"first_joining_office_name\":null,\"first_joining_memo_no\":\"efw4jh\",\"date_of_gazette\":\"14\\/06\\/2023\",\"date_of_con_serviec\":\"10\\/05\\/2023\",\"quota_id\":\"4\",\"employeeid\":\"2201210004\",\"updated_at\":\"2024-06-01 09:40:03\",\"created_at\":\"2024-06-01 09:40:03\",\"id\":6,\"birth_certificate_upload\":null,\"nid_upload\":null,\"passport_upload\":null,\"license_upload\":null,\"certificate_upload\":null,\"first_joining_order\":null,\"fjoining_letter\":null,\"date_of_gazette_if_any\":null,\"regularization_office_orde_go\":null,\"confirmation_in_service\":null,\"electric_signature\":null,\"employee_photo\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:40:03', '2024-06-01 13:40:03'),
(402, 'audit:updated', 6, 'App\\Models\\EmployeeList#6', 3, '{\"approve\":\"Approved\",\"approveby\":3,\"updated_at\":\"2024-06-01 09:40:28\"}', '27.147.163.77', '2024-06-01 13:40:28', '2024-06-01 13:40:28'),
(403, 'audit:created', 8, 'App\\Models\\EducationInformatione#8', 2, '{\"employee_id\":\"6\",\"name_of_exam_id\":\"3\",\"school_university_name\":\"SK High School\",\"exam_board_id\":\"6\",\"result_id\":\"4\",\"concentration_major_group\":\"Science\",\"passing_year\":\"1968\",\"updated_at\":\"2024-06-01 09:45:32\",\"created_at\":\"2024-06-01 09:45:32\",\"id\":8,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:45:32', '2024-06-01 13:45:32'),
(404, 'audit:created', 5, 'App\\Models\\Professionale#5', 2, '{\"qualification_title\":\"BSC\",\"institution\":\"Dhaka College\",\"from_date\":\"31\\/01\\/2019\",\"to_date\":\"01\\/02\\/2023\",\"passing_year\":\"2023\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 09:46:02\",\"created_at\":\"2024-06-01 09:46:02\",\"id\":5}', '27.147.163.77', '2024-06-01 13:46:02', '2024-06-01 13:46:02'),
(405, 'audit:created', 9, 'App\\Models\\EducationInformatione#9', 2, '{\"employee_id\":\"6\",\"name_of_exam_id\":\"3\",\"school_university_name\":\"Khagrachari Govt. High School, Khagrachari\",\"exam_board_id\":\"1\",\"achievement_types_id\":\"1\",\"cgpa\":\"5\",\"concentration_major_group\":\"Science\",\"passing_year\":\"1970\",\"updated_at\":\"2024-06-01 09:46:35\",\"created_at\":\"2024-06-01 09:46:35\",\"id\":9,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:46:35', '2024-06-01 13:46:35'),
(406, 'audit:created', 7, 'App\\Models\\Addressdetaile#7', 2, '{\"address_type\":\"Present\",\"flat_house\":\"358 South Paikpara\",\"post_office\":\"Mirpur-2\",\"post_code\":\"7230\",\"thana_upazila_id\":\"93\",\"phone_number\":\"01957073942\",\"status\":\"No\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 09:46:59\",\"created_at\":\"2024-06-01 09:46:59\",\"id\":7}', '27.147.163.77', '2024-06-01 13:46:59', '2024-06-01 13:46:59'),
(407, 'audit:created', 6, 'App\\Models\\EmergenceContacte#6', 2, '{\"contact_person_name\":\"S. M. Ahsanul Aziz\",\"contact_person_relation\":\"Husband\",\"contact_person_number\":\"01711170697\",\"address\":\"Dhaka\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 09:47:25\",\"created_at\":\"2024-06-01 09:47:25\",\"id\":6}', '27.147.163.77', '2024-06-01 13:47:25', '2024-06-01 13:47:25'),
(408, 'audit:created', 6, 'App\\Models\\SpouseInformatione#6', 2, '{\"employee_id\":\"6\",\"name_bn\":\"\\u09ae\\u09be\\u09b6\\u09b0\\u09c1\\u09b0 \\u0986\\u09b9\\u09b8\\u09be\\u09a8\",\"name_en\":\"Mashrur Ahsan\",\"nid_number\":\"45345345345345\",\"phone_number\":\"01957073942\",\"present_addess\":null,\"permanent_addess\":null,\"updated_at\":\"2024-06-01 09:48:28\",\"created_at\":\"2024-06-01 09:48:28\",\"id\":6,\"nid_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:48:28', '2024-06-01 13:48:28'),
(409, 'audit:created', 9, 'App\\Models\\Child#9', 2, '{\"name_bn\":\"\\u098f\\u09b8. \\u098f\\u09ae. \\u0986\\u09b9\\u09b8\\u09be\\u09a8\\u09c1\\u09b2 \\u0986\\u099c\\u09bf\\u099c\",\"name_en\":\"S. M. Ahsanul Aziz\",\"date_of_birth\":\"03\\/06\\/2019\",\"complite_21\":\"03\\/06\\/2040\",\"gender_id\":\"1\",\"nid_number\":\"45345345345345\",\"passport_number\":\"2156\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 09:48:59\",\"created_at\":\"2024-06-01 09:48:59\",\"id\":9,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:48:59', '2024-06-01 13:48:59'),
(410, 'audit:created', 13, 'App\\Models\\JobHistory#13', 2, '{\"office_unit_id\":\"3\",\"institutename\":\"Institution\",\"academy_type\":\"FSTI\",\"posting_in_circle\":\"Chittagong\",\"employee_id\":\"6\",\"designation_id\":\"153\",\"joining_date\":\"28\\/03\\/2023\",\"release_date\":\"27\\/05\\/2024\",\"grade_id\":\"3\",\"updated_at\":\"2024-06-01 09:49:51\",\"created_at\":\"2024-06-01 09:49:51\",\"id\":13,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:49:51', '2024-06-01 13:49:51'),
(411, 'audit:created', 6, 'App\\Models\\EmployeePromotion#6', 2, '{\"new_designation_id\":\"15\",\"go_issue_date\":\"30\\/01\\/2019\",\"office_order_date\":\"02\\/04\\/2022\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 09:50:35\",\"created_at\":\"2024-06-01 09:50:35\",\"id\":6,\"office_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:50:35', '2024-06-01 13:50:35'),
(412, 'audit:created', 5, 'App\\Models\\LeaveRecord#5', 2, '{\"leave_category_id\":\"1\",\"type_of_leave_id\":\"1\",\"start_date\":\"14\\/03\\/2019\",\"end_date\":\"01\\/06\\/2024\",\"reason\":null,\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 09:50:58\",\"created_at\":\"2024-06-01 09:50:58\",\"id\":5}', '27.147.163.77', '2024-06-01 13:50:58', '2024-06-01 13:50:58'),
(413, 'audit:created', 5, 'App\\Models\\Training#5', 2, '{\"training_type_id\":\"1\",\"training_name\":\"Training on Apprising Bangladesh Delta Plan 2100\",\"institute_name\":\"The General Economics Division(GED) of the Bangladesh Planning Commission,\",\"country_id\":\"1\",\"start_date\":\"06\\/03\\/2020\",\"end_date\":\"05\\/03\\/2021\",\"location\":\"Dhaka\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 09:51:55\",\"created_at\":\"2024-06-01 09:51:55\",\"id\":5}', '27.147.163.77', '2024-06-01 13:51:55', '2024-06-01 13:51:55'),
(414, 'audit:created', 5, 'App\\Models\\TravelRecord#5', 2, '{\"country_id\":\"2\",\"title\":\"Nothing\",\"purpose_id\":\"Demo\",\"start_date\":\"01\\/02\\/2018\",\"end_date\":\"04\\/03\\/2021\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 09:52:42\",\"created_at\":\"2024-06-01 09:52:42\",\"id\":5}', '27.147.163.77', '2024-06-01 13:52:42', '2024-06-01 13:52:42'),
(415, 'audit:created', 5, 'App\\Models\\ForeignTravelPersonal#5', 2, '{\"title\":\"Demo\",\"country_id\":\"2\",\"purpose_id\":\"Demo\",\"from_date\":\"01\\/06\\/2024\",\"to_date\":\"28\\/05\\/2024\",\"leave_id\":\"2\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 09:55:09\",\"created_at\":\"2024-06-01 09:55:09\",\"id\":5}', '27.147.163.77', '2024-06-01 13:55:09', '2024-06-01 13:55:09'),
(416, 'audit:created', 5, 'App\\Models\\Extracurriculam#5', 2, '{\"activity_name\":\"Bangladesh\",\"organization\":\"DCC\",\"position\":\"Demo\",\"start_date\":\"29\\/01\\/2020\",\"end_date\":\"02\\/04\\/2021\",\"description\":null,\"updated_at\":\"2024-06-01 09:55:36\",\"created_at\":\"2024-06-01 09:55:36\",\"id\":5,\"attatchment\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 13:55:36', '2024-06-01 13:55:36'),
(417, 'audit:created', 5, 'App\\Models\\Publication#5', 2, '{\"title\":\"Demo\",\"publication_type\":\"Books\",\"publication_media\":\"Ok\",\"publication_date\":\"09\\/02\\/2022\",\"publication_link\":\"https:\\/\\/forestpims.xyz\\/admin\\/publications\\/create\",\"description\":null,\"updated_at\":\"2024-06-01 09:56:08\",\"created_at\":\"2024-06-01 09:56:08\",\"id\":5}', '27.147.163.77', '2024-06-01 13:56:08', '2024-06-01 13:56:08'),
(418, 'audit:created', 6, 'App\\Models\\Language#6', 2, '{\"employee_id\":\"6\",\"language_id\":\"1\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-01 09:58:54\",\"created_at\":\"2024-06-01 09:58:54\",\"id\":6}', '27.147.163.77', '2024-06-01 13:58:54', '2024-06-01 13:58:54'),
(419, 'audit:created', 7, 'App\\Models\\CriminalProsecutione#7', 2, '{\"judgement_type\":\"Nothing\",\"natureof_offence\":\"Demo\",\"government_order_no\":\"12365\",\"remzrk\":null,\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 10:00:02\",\"created_at\":\"2024-06-01 10:00:02\",\"id\":7,\"court_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 14:00:02', '2024-06-01 14:00:02'),
(420, 'audit:created', 5, 'App\\Models\\CriminalproDisciplinary#5', 2, '{\"criminalprosecutione_id\":\"5\",\"judgement_type\":\"Nothing\",\"government_order_no\":\"12365\",\"remarks\":\"OK\",\"updated_at\":\"2024-06-01 10:00:56\",\"created_at\":\"2024-06-01 10:00:56\",\"id\":5,\"order_upload_file\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 14:00:56', '2024-06-01 14:00:56'),
(421, 'audit:created', 5, 'App\\Models\\AcrMonitoring#5', 2, '{\"year\":\"2021\",\"reviewer\":\"Nurujjaman\",\"review_date\":\"21\\/06\\/2023\",\"remarks\":\"<p>OK<\\/p>\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 10:01:15\",\"created_at\":\"2024-06-01 10:01:15\",\"id\":5}', '27.147.163.77', '2024-06-01 14:01:15', '2024-06-01 14:01:15'),
(422, 'audit:created', 6, 'App\\Models\\Extracurriculam#6', 2, '{\"activity_name\":\"Bangladesh\",\"organization\":\"DCC\",\"position\":\"Demo\",\"start_date\":\"27\\/02\\/2020\",\"end_date\":\"29\\/05\\/2024\",\"description\":\"<p>OK<\\/p>\",\"employee_id\":\"6\",\"updated_at\":\"2024-06-01 10:03:09\",\"created_at\":\"2024-06-01 10:03:09\",\"id\":6,\"attatchment\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 14:03:09', '2024-06-01 14:03:09'),
(423, 'audit:created', 14, 'App\\Models\\JobHistory#14', 2, '{\"office_unit_id\":\"2\",\"circle_list_id\":\"2\",\"postingindivision\":\"Range\\/SFNTC\\/Station\",\"posting_in_range\":\"Beat\\/SFNTC\\/Camp\",\"beat_list_id\":\"284\",\"employee_id\":\"3\",\"designation_id\":\"15\",\"joining_date\":\"04\\/06\\/2024\",\"release_date\":\"19\\/06\\/2024\",\"grade_id\":\"5\",\"updated_at\":\"2024-06-01 10:18:13\",\"created_at\":\"2024-06-01 10:18:13\",\"id\":14,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 14:18:13', '2024-06-01 14:18:13'),
(424, 'audit:created', 6, 'App\\Models\\AcrMonitoring#6', 1, '{\"year\":\"1995\",\"reviewer\":\"Enim irure qui nostr\",\"review_date\":\"05\\/06\\/2024\",\"remarks\":\"<p>cfvcv<\\/p>\",\"employee_id\":\"1\",\"updated_at\":\"2024-06-01 11:36:29\",\"created_at\":\"2024-06-01 11:36:29\",\"id\":6}', '27.147.163.77', '2024-06-01 15:36:29', '2024-06-01 15:36:29'),
(425, 'audit:created', 7, 'App\\Models\\EmployeeList#7', 2, '{\"fullname_bn\":\"\\u0995\\u09be\\u09ae\\u09b0\\u09be\\u09a8\",\"fullname_en\":\"Kamran\",\"cadreid\":\"123456\",\"batch_id\":\"1\",\"fname_bn\":\"\\u0986\\u09ac\\u09cd\\u09a6\\u09c1\\u09b2 \\u0995\\u09c1\\u09a6\\u09cd\\u09a6\\u09c1\\u09b8\",\"fname_en\":\"Abdul Quddus\",\"mname_bn\":\"\\u09b6\\u09b0\\u09bf\\u09ab\\u09be \\u09ac\\u09c7\\u0997\\u09ae\",\"mname_en\":\"Sharifa Begum\",\"date_of_birth\":\"01\\/06\\/2024\",\"prl_date\":\"31\\/05\\/2083\",\"marital_statu_id\":\"1\",\"gender_id\":\"1\",\"religion_id\":\"1\",\"height\":\"165\",\"special_identity\":\"Birth Sign\",\"home_district_id\":\"27\",\"blood_group_id\":\"1\",\"email\":\"kamranraz28@gmail.com\",\"mobile_number\":\"01764894771\",\"nid\":\"1234567891\",\"passport\":\"12345678\",\"license_type_id\":\"1\",\"joiningexaminfo_id\":\"2\",\"projectrevenue_id\":\"2\",\"departmental_exam_id\":\"1\",\"date_of_regularization\":null,\"regularization_issue_date\":null,\"grade_id\":\"5\",\"fjoining_date\":\"01\\/06\\/2024\",\"first_joining_office_name\":\"Ban Bhaban\",\"first_joining_memo_no\":\"01\\/06\\/2024 - 113\",\"date_of_gazette\":\"01\\/06\\/2024\",\"date_of_con_serviec\":\"01\\/06\\/2024\",\"quota_id\":\"1\",\"employeeid\":\"2201100002\",\"updated_at\":\"2024-06-01 14:17:33\",\"created_at\":\"2024-06-01 14:17:33\",\"id\":7,\"birth_certificate_upload\":null,\"nid_upload\":null,\"passport_upload\":null,\"license_upload\":null,\"certificate_upload\":null,\"first_joining_order\":null,\"fjoining_letter\":null,\"date_of_gazette_if_any\":null,\"regularization_office_orde_go\":null,\"confirmation_in_service\":null,\"electric_signature\":null,\"employee_photo\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 18:17:33', '2024-06-01 18:17:33'),
(426, 'audit:updated', 7, 'App\\Models\\EmployeeList#7', 3, '{\"approve\":\"Approved\",\"approveby\":3,\"updated_at\":\"2024-06-01 14:18:16\"}', '27.147.163.77', '2024-06-01 18:18:16', '2024-06-01 18:18:16'),
(427, 'audit:created', 10, 'App\\Models\\EducationInformatione#10', 2, '{\"employee_id\":\"7\",\"name_of_exam_id\":\"1\",\"school_university_name\":\"Kheruajani High School\",\"exam_board_id\":\"7\",\"cgpa\":\"5.00\",\"concentration_major_group\":\"Science\",\"passing_year\":\"2014\",\"updated_at\":\"2024-06-01 14:23:02\",\"created_at\":\"2024-06-01 14:23:02\",\"id\":10,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 18:23:02', '2024-06-01 18:23:02'),
(428, 'audit:created', 11, 'App\\Models\\EducationInformatione#11', 2, '{\"employee_id\":\"7\",\"name_of_exam_id\":\"2\",\"school_university_name\":\"Cantonment Public School & College, Momenshahi\",\"exam_board_id\":\"7\",\"cgpa\":\"5.00\",\"concentration_major_group\":\"Science\",\"passing_year\":\"2016\",\"updated_at\":\"2024-06-01 14:23:59\",\"created_at\":\"2024-06-01 14:23:59\",\"id\":11,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 18:23:59', '2024-06-01 18:23:59'),
(429, 'audit:created', 6, 'App\\Models\\Professionale#6', 2, '{\"qualification_title\":\"Software Developer\",\"institution\":\"Synergy Interface Limited\",\"from_date\":\"01\\/06\\/2024\",\"to_date\":\"01\\/06\\/2024\",\"passing_year\":\"2024\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 14:38:54\",\"created_at\":\"2024-06-01 14:38:54\",\"id\":6}', '27.147.163.77', '2024-06-01 18:38:54', '2024-06-01 18:38:54'),
(430, 'audit:created', 7, 'App\\Models\\EmergenceContacte#7', 2, '{\"contact_person_name\":\"\\u09a8\\u09c1\\u09b0\\u09c1\\u099c\\u09cd\\u099c\\u09be\\u09ae\\u09be\\u09a8\",\"contact_person_relation\":\"\\u09ad\\u09be\\u0987\",\"contact_person_number\":\"\\u09e6\\u09e7\\u09ef\\u09eb\\u09ed\\u09e6\\u09ed\\u09e9\\u09ef\\u09ea\\u09e8\",\"address\":\"\\u09a2\\u09be\\u0995\\u09be\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 14:41:19\",\"created_at\":\"2024-06-01 14:41:19\",\"id\":7}', '27.147.163.77', '2024-06-01 18:41:19', '2024-06-01 18:41:19'),
(431, 'audit:created', 7, 'App\\Models\\SpouseInformatione#7', 2, '{\"employee_id\":\"7\",\"name_bn\":\"\\u09b0\\u0993\\u09a8\\u0995 \\u099c\\u09be\\u09b9\\u09be\\u09a8\",\"name_en\":\"Rawnak Jahan\",\"nid_number\":\"1234561234\",\"phone_number\":\"01609758377\",\"present_addess\":\"<p>Mymensingh<\\/p>\",\"permanent_addess\":\"<p>Mymensingh<\\/p>\",\"updated_at\":\"2024-06-01 14:50:48\",\"created_at\":\"2024-06-01 14:50:48\",\"id\":7,\"nid_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 18:50:48', '2024-06-01 18:50:48'),
(432, 'audit:created', 7, 'App\\Models\\EmployeePromotion#7', 2, '{\"new_designation_id\":\"16\",\"go_issue_date\":\"01\\/06\\/2024\",\"office_order_date\":\"01\\/06\\/2024\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 14:53:21\",\"created_at\":\"2024-06-01 14:53:21\",\"id\":7,\"office_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 18:53:21', '2024-06-01 18:53:21'),
(433, 'audit:created', 6, 'App\\Models\\LeaveRecord#6', 2, '{\"leave_category_id\":\"3\",\"type_of_leave_id\":\"1\",\"start_date\":\"01\\/06\\/2024\",\"end_date\":\"04\\/06\\/2024\",\"reason\":\"<p>\\u09aa\\u09be\\u09b0\\u09b8\\u09cb\\u09a8\\u09be\\u09b2<\\/p>\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 14:53:58\",\"created_at\":\"2024-06-01 14:53:58\",\"id\":6}', '27.147.163.77', '2024-06-01 18:53:58', '2024-06-01 18:53:58'),
(434, 'audit:created', 6, 'App\\Models\\Training#6', 2, '{\"training_type_id\":\"1\",\"training_name\":\"UNFCCC Cop18\",\"institute_name\":\"UNDP\",\"country_id\":\"7\",\"start_date\":\"01\\/06\\/2024\",\"end_date\":null,\"location\":\"01\\/07\\/2024\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 14:55:53\",\"created_at\":\"2024-06-01 14:55:53\",\"id\":6}', '27.147.163.77', '2024-06-01 18:55:53', '2024-06-01 18:55:53'),
(435, 'audit:created', 7, 'App\\Models\\Training#7', 2, '{\"training_type_id\":\"2\",\"training_name\":\"UNFCCC Cop18\",\"institute_name\":\"UNDPTVC\",\"country_id\":\"3\",\"start_date\":\"05\\/06\\/2024\",\"end_date\":\"27\\/06\\/2024\",\"location\":\"27\\/06\\/2024\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 14:57:12\",\"created_at\":\"2024-06-01 14:57:12\",\"id\":7}', '27.147.163.77', '2024-06-01 18:57:12', '2024-06-01 18:57:12'),
(436, 'audit:created', 6, 'App\\Models\\TravelRecord#6', 2, '{\"country_id\":\"76\",\"title\":\"Seminar on National Forest Program\",\"purpose_id\":\"Nothing\",\"start_date\":\"01\\/06\\/2024\",\"end_date\":\"06\\/06\\/2024\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 14:58:42\",\"created_at\":\"2024-06-01 14:58:42\",\"id\":6}', '27.147.163.77', '2024-06-01 18:58:42', '2024-06-01 18:58:42'),
(437, 'audit:created', 7, 'App\\Models\\TravelRecord#7', 2, '{\"country_id\":\"20\",\"title\":\"SAARC Forestry Governing Body Meeting\",\"purpose_id\":\"Nothing-1\",\"start_date\":\"01\\/06\\/2024\",\"end_date\":\"07\\/06\\/2024\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:00:09\",\"created_at\":\"2024-06-01 15:00:09\",\"id\":7}', '27.147.163.77', '2024-06-01 19:00:09', '2024-06-01 19:00:09'),
(438, 'audit:created', 6, 'App\\Models\\ForeignTravelPersonal#6', 2, '{\"title\":\"Seminar on National Forest Program\",\"country_id\":\"76\",\"purpose_id\":\"Nothing-2\",\"from_date\":\"01\\/06\\/2024\",\"to_date\":\"06\\/06\\/2024\",\"leave_id\":\"6\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:01:42\",\"created_at\":\"2024-06-01 15:01:42\",\"id\":6}', '27.147.163.77', '2024-06-01 19:01:43', '2024-06-01 19:01:43'),
(439, 'audit:created', 7, 'App\\Models\\ForeignTravelPersonal#7', 2, '{\"title\":\"Mangrove for the Future Regional Steeing Comittee Meeting\",\"country_id\":\"76\",\"purpose_id\":\"Nothing\",\"from_date\":\"01\\/06\\/2024\",\"to_date\":\"12\\/06\\/2024\",\"leave_id\":\"4\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:02:55\",\"created_at\":\"2024-06-01 15:02:55\",\"id\":7}', '27.147.163.77', '2024-06-01 19:02:55', '2024-06-01 19:02:55'),
(440, 'audit:created', 7, 'App\\Models\\Extracurriculam#7', 2, '{\"activity_name\":\"CSE fest\",\"organization\":\"CSE\",\"position\":\"Organizer\",\"start_date\":\"01\\/06\\/2024\",\"end_date\":\"13\\/06\\/2024\",\"description\":\"<p>CSE &amp; Forest<\\/p>\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:04:57\",\"created_at\":\"2024-06-01 15:04:57\",\"id\":7,\"attatchment\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 19:04:57', '2024-06-01 19:04:57'),
(441, 'audit:created', 6, 'App\\Models\\Publication#6', 2, '{\"title\":\"Monograph\",\"publication_type\":\"Journal\",\"publication_media\":\"Monograph Test\",\"publication_date\":\"01\\/06\\/2024\",\"publication_link\":\"Monograph Test-1\",\"description\":\"<p>Test<\\/p>\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:08:47\",\"created_at\":\"2024-06-01 15:08:47\",\"id\":6}', '27.147.163.77', '2024-06-01 19:08:47', '2024-06-01 19:08:47'),
(442, 'audit:created', 7, 'App\\Models\\Language#7', 2, '{\"employee_id\":\"7\",\"language_id\":\"1\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-01 15:12:40\",\"created_at\":\"2024-06-01 15:12:40\",\"id\":7}', '27.147.163.77', '2024-06-01 19:12:41', '2024-06-01 19:12:41'),
(443, 'audit:created', 8, 'App\\Models\\CriminalProsecutione#8', 2, '{\"judgement_type\":\"Criminal\",\"natureof_offence\":\"Criminal  Test\",\"government_order_no\":\"01\\/02\\/2024\",\"remzrk\":\"<p>None<\\/p>\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:13:43\",\"created_at\":\"2024-06-01 15:13:43\",\"id\":8,\"court_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 19:13:44', '2024-06-01 19:13:44'),
(444, 'audit:created', 6, 'App\\Models\\CriminalproDisciplinary#6', 2, '{\"criminalprosecutione_id\":\"8\",\"judgement_type\":\"Criminal\",\"government_order_no\":\"01\\/02\\/2024\",\"remarks\":\"Criminal\",\"updated_at\":\"2024-06-01 15:14:14\",\"created_at\":\"2024-06-01 15:14:14\",\"id\":6,\"order_upload_file\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 19:14:15', '2024-06-01 19:14:15'),
(445, 'audit:created', 7, 'App\\Models\\AcrMonitoring#7', 2, '{\"year\":\"1997\",\"reviewer\":\"Nurujjaman\",\"review_date\":\"01\\/06\\/2024\",\"remarks\":\"<p>Demo Test<\\/p>\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:14:44\",\"created_at\":\"2024-06-01 15:14:44\",\"id\":7}', '27.147.163.77', '2024-06-01 19:14:44', '2024-06-01 19:14:44'),
(446, 'audit:created', 8, 'App\\Models\\Addressdetaile#8', 2, '{\"address_type\":\"Present\",\"flat_house\":\"Jhenaidah\",\"post_office\":\"Jhenaidah\",\"post_code\":\"22219\",\"thana_upazila_id\":\"91\",\"phone_number\":\"01609758377\",\"status\":\"Yes\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:16:20\",\"created_at\":\"2024-06-01 15:16:20\",\"id\":8}', '27.147.163.77', '2024-06-01 19:16:20', '2024-06-01 19:16:20'),
(447, 'audit:created', 15, 'App\\Models\\JobHistory#15', 2, '{\"office_unit_id\":\"2\",\"circle_list_id\":\"2\",\"postingindivision\":\"Range\\/SFNTC\\/Station\",\"posting_in_range\":\"Beat\\/SFNTC\\/Camp\",\"beat_list_id\":\"286\",\"employee_id\":\"7\",\"designation_id\":\"13\",\"joining_date\":\"01\\/06\\/2024\",\"release_date\":\"14\\/06\\/2024\",\"grade_id\":\"4\",\"updated_at\":\"2024-06-01 15:23:15\",\"created_at\":\"2024-06-01 15:23:15\",\"id\":15,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 19:23:15', '2024-06-01 19:23:15'),
(448, 'audit:created', 10, 'App\\Models\\Child#10', 2, '{\"name_bn\":\"\\u09b0\\u0993\\u09a8\\u0995 \\u099c\\u09be\\u09b9\\u09be\\u09a8\",\"name_en\":\"Rawnak Jahan\",\"date_of_birth\":\"10\\/06\\/2024\",\"complite_21\":\"10\\/06\\/2045\",\"gender_id\":\"1\",\"nid_number\":\"1234567898\",\"passport_number\":\"1245\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:24:43\",\"created_at\":\"2024-06-01 15:24:43\",\"id\":10,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 19:24:43', '2024-06-01 19:24:43'),
(449, 'audit:created', 8, 'App\\Models\\TravelRecord#8', 2, '{\"country_id\":\"3\",\"title\":\"DEmo\",\"purpose_id\":\"Nothing-1\",\"start_date\":\"01\\/06\\/2024\",\"end_date\":\"14\\/06\\/2024\",\"employee_id\":\"7\",\"updated_at\":\"2024-06-01 15:30:20\",\"created_at\":\"2024-06-01 15:30:20\",\"id\":8}', '27.147.163.77', '2024-06-01 19:30:21', '2024-06-01 19:30:21'),
(450, 'audit:created', 8, 'App\\Models\\SpouseInformatione#8', 2, '{\"employee_id\":\"7\",\"name_bn\":\"\\u09b0\\u0993\\u09a8\\u0995 \\u099c\\u09be\\u09b9\\u09be\\u09a8\",\"name_en\":\"Rawnak Jahan\",\"nid_number\":\"1234561234\",\"phone_number\":\"01609758377\",\"present_addess\":\"<p>Dhaka<\\/p>\",\"permanent_addess\":\"<p>Mirpur<\\/p>\",\"updated_at\":\"2024-06-01 15:46:24\",\"created_at\":\"2024-06-01 15:46:24\",\"id\":8,\"nid_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-01 19:46:24', '2024-06-01 19:46:24'),
(451, 'audit:updated', 11, 'App\\Models\\EducationInformatione#11', 2, '{\"updated_at\":\"2024-06-01 16:03:00\",\"name_of_exam_id\":\"4\"}', '27.147.163.77', '2024-06-01 20:03:00', '2024-06-01 20:03:00'),
(452, 'audit:created', 8, 'App\\Models\\Language#8', 2, '{\"employee_id\":\"7\",\"language_id\":\"1\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-02 04:44:50\",\"created_at\":\"2024-06-02 04:44:50\",\"id\":8}', '202.134.9.150', '2024-06-02 08:44:50', '2024-06-02 08:44:50'),
(453, 'audit:created', 9, 'App\\Models\\Language#9', 2, '{\"employee_id\":\"2\",\"language_id\":\"1\",\"read_id\":\"1\",\"write_id\":\"1\",\"speak_id\":\"1\",\"updated_at\":\"2024-06-02 04:46:20\",\"created_at\":\"2024-06-02 04:46:20\",\"id\":9}', '27.147.163.77', '2024-06-02 08:46:20', '2024-06-02 08:46:20'),
(454, 'audit:created', 10, 'App\\Models\\Language#10', 2, '{\"employee_id\":\"2\",\"language_id\":\"2\",\"read_id\":\"2\",\"write_id\":\"2\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-02 04:46:29\",\"created_at\":\"2024-06-02 04:46:29\",\"id\":10}', '27.147.163.77', '2024-06-02 08:46:29', '2024-06-02 08:46:29'),
(455, 'audit:deleted', 7, 'App\\Models\\Language#7', 2, '{\"id\":7,\"created_at\":\"2024-06-01 15:12:40\",\"updated_at\":\"2024-06-01 15:12:40\",\"employee_id\":7,\"read_id\":3,\"write_id\":3,\"speak_id\":3,\"language_id\":1}', '27.147.163.77', '2024-06-02 08:47:54', '2024-06-02 08:47:54'),
(456, 'audit:deleted', 8, 'App\\Models\\Language#8', 2, '{\"id\":8,\"created_at\":\"2024-06-02 04:44:50\",\"updated_at\":\"2024-06-02 04:44:50\",\"employee_id\":7,\"read_id\":3,\"write_id\":3,\"speak_id\":3,\"language_id\":1}', '27.147.163.77', '2024-06-02 08:48:04', '2024-06-02 08:48:04'),
(457, 'audit:created', 11, 'App\\Models\\Language#11', 2, '{\"employee_id\":\"7\",\"language_id\":\"1\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-02 04:48:43\",\"created_at\":\"2024-06-02 04:48:43\",\"id\":11}', '27.147.163.77', '2024-06-02 08:48:43', '2024-06-02 08:48:43'),
(458, 'audit:created', 12, 'App\\Models\\Language#12', 2, '{\"employee_id\":\"7\",\"language_id\":\"2\",\"read_id\":\"1\",\"write_id\":\"1\",\"speak_id\":\"1\",\"updated_at\":\"2024-06-02 04:48:54\",\"created_at\":\"2024-06-02 04:48:54\",\"id\":12}', '27.147.163.77', '2024-06-02 08:48:54', '2024-06-02 08:48:54'),
(459, 'audit:created', 8, 'App\\Models\\EmployeeList#8', 2, '{\"fullname_bn\":\"\\u09b0\\u09be\\u09ab\\u09bft\",\"fullname_en\":\"Rafiult\",\"cadreid\":\"123456\",\"batch_id\":\"1\",\"fname_bn\":\"hhjj\",\"fname_en\":\"jhkjjk\",\"mname_bn\":\"ghyty\",\"mname_en\":\"ytyuj\",\"date_of_birth\":\"04\\/06\\/2024\",\"prl_date\":\"03\\/06\\/2083\",\"marital_statu_id\":\"1\",\"gender_id\":\"1\",\"religion_id\":\"1\",\"height\":\"155\",\"special_identity\":\"No\",\"home_district_id\":\"45\",\"blood_group_id\":\"4\",\"email\":\"test@admin.com\",\"mobile_number\":\"01711170697\",\"nid\":\"7894563214\",\"passport\":\"789542\",\"license_type_id\":\"1\",\"joiningexaminfo_id\":\"1\",\"project_id\":\"5\",\"date_of_regularization\":\"13\\/05\\/2024\",\"regularization_issue_date\":\"27\\/05\\/2024\",\"grade_id\":\"5\",\"fjoining_date\":\"30\\/04\\/2024\",\"first_joining_office_name\":\"Development Planning Unit , Bana Bhaban, Agargaon, Dhaka\",\"first_joining_memo_no\":\"efw4jh\",\"date_of_gazette\":\"27\\/02\\/2024\",\"date_of_con_serviec\":\"03\\/06\\/2024\",\"quota_id\":\"1\",\"employeeid\":\"2201100003\",\"updated_at\":\"2024-06-02 05:04:33\",\"created_at\":\"2024-06-02 05:04:33\",\"id\":8,\"birth_certificate_upload\":null,\"nid_upload\":null,\"passport_upload\":null,\"license_upload\":null,\"certificate_upload\":null,\"first_joining_order\":null,\"fjoining_letter\":null,\"date_of_gazette_if_any\":null,\"regularization_office_orde_go\":null,\"confirmation_in_service\":null,\"electric_signature\":null,\"employee_photo\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 09:04:33', '2024-06-02 09:04:33'),
(460, 'audit:updated', 8, 'App\\Models\\EmployeeList#8', 3, '{\"approve\":\"Approved\",\"approveby\":3,\"updated_at\":\"2024-06-02 05:05:07\"}', '27.147.163.77', '2024-06-02 09:05:07', '2024-06-02 09:05:07'),
(461, 'audit:created', 12, 'App\\Models\\EducationInformatione#12', 2, '{\"employee_id\":\"8\",\"name_of_exam_id\":\"3\",\"exam_degree\":\"1\",\"school_university_name\":\"ABC School\",\"exam_board_id\":\"4\",\"cgpa\":\"4.5\",\"concentration_major_group\":\"Science\",\"passing_year\":\"2012\",\"updated_at\":\"2024-06-02 05:16:18\",\"created_at\":\"2024-06-02 05:16:18\",\"id\":12,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 09:16:18', '2024-06-02 09:16:18'),
(462, 'audit:created', 13, 'App\\Models\\EducationInformatione#13', 2, '{\"employee_id\":\"7\",\"name_of_exam_id\":\"2\",\"exam_degree\":\"3\",\"school_university_name\":\"Khagrachari Govt. High School, Khagrachari\",\"exam_board_id\":\"3\",\"cgpa\":\"4.25\",\"concentration_major_group\":\"Science\",\"passing_year\":\"2015\",\"updated_at\":\"2024-06-02 05:22:48\",\"created_at\":\"2024-06-02 05:22:48\",\"id\":13,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 09:22:48', '2024-06-02 09:22:48'),
(463, 'audit:created', 9, 'App\\Models\\EmployeeList#9', 2, '{\"fullname_bn\":\"\\u0986\\u09ab\\u09b0\\u09cb\\u099c\\u09be \\u09ac\\u09c7\\u0997\\u09ae\",\"fullname_en\":\"Afroza Begum\",\"cadreid\":null,\"batch_id\":null,\"fname_bn\":\"\\u09ae\\u09cb : \\u0986\\u09ac\\u09cd\\u09a6\\u09c1\\u09b2 \\u0996\\u09be\\u09b2\\u09c7\\u0995\",\"fname_en\":\"Md. Abdul Khaleque\",\"mname_bn\":\"\\u09ab\\u09bf\\u09b0\\u09cb\\u099c\\u09be \\u09ac\\u09c7\\u0997\\u09ae\",\"mname_en\":\"Firoza Begum\",\"date_of_birth\":\"21\\/11\\/1969\",\"prl_date\":\"20\\/11\\/2028\",\"marital_statu_id\":\"4\",\"gender_id\":\"2\",\"religion_id\":\"1\",\"height\":\"155\",\"special_identity\":null,\"home_district_id\":\"41\",\"blood_group_id\":\"2\",\"email\":null,\"mobile_number\":\"01711170697\",\"nid\":\"8692036471\",\"passport\":null,\"license_type_id\":null,\"joiningexaminfo_id\":\"3\",\"grade_id\":null,\"fjoining_date\":\"31\\/01\\/2001\",\"first_joining_office_name\":\"Bana Bhaban , Agargaon , Dhaka\",\"first_joining_memo_no\":\"09-04-2017\",\"date_of_gazette\":null,\"date_of_con_serviec\":\"09\\/04\\/2017\",\"quota_id\":\"2\",\"employeeid\":\"2201100004\",\"updated_at\":\"2024-06-02 06:00:58\",\"created_at\":\"2024-06-02 06:00:58\",\"id\":9,\"birth_certificate_upload\":null,\"nid_upload\":null,\"passport_upload\":null,\"license_upload\":null,\"certificate_upload\":null,\"first_joining_order\":null,\"fjoining_letter\":null,\"date_of_gazette_if_any\":null,\"regularization_office_orde_go\":null,\"confirmation_in_service\":null,\"electric_signature\":null,\"employee_photo\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 10:00:58', '2024-06-02 10:00:58'),
(464, 'audit:updated', 9, 'App\\Models\\EmployeeList#9', 3, '{\"approve\":\"Approved\",\"approveby\":3,\"updated_at\":\"2024-06-02 06:01:22\"}', '27.147.163.77', '2024-06-02 10:01:22', '2024-06-02 10:01:22'),
(465, 'audit:created', 14, 'App\\Models\\EducationInformatione#14', 2, '{\"employee_id\":\"9\",\"name_of_exam_id\":\"3\",\"exam_degree\":\"1\",\"school_university_name\":\"Foujdarhat K.M. High School\",\"exam_board_id\":\"2\",\"result_id\":\"2\",\"concentration_major_group\":\"Bangla ,English , General Math , Elective Math , Science etc.\",\"passing_year\":\"1985\",\"updated_at\":\"2024-06-02 06:05:57\",\"created_at\":\"2024-06-02 06:05:57\",\"id\":14,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 10:05:57', '2024-06-02 10:05:57'),
(466, 'audit:created', 15, 'App\\Models\\EducationInformatione#15', 2, '{\"employee_id\":\"9\",\"name_of_exam_id\":\"4\",\"exam_degree\":\"2\",\"school_university_name\":\"Magura Govt. Hossain Shaheed Sohrawardy College\",\"exam_board_id\":\"6\",\"result_id\":\"2\",\"concentration_major_group\":\"Physics , Chemistry , Biology & Mathematics\",\"passing_year\":\"1987\",\"updated_at\":\"2024-06-02 06:09:06\",\"created_at\":\"2024-06-02 06:09:06\",\"id\":15,\"catificarte\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 10:09:06', '2024-06-02 10:09:06'),
(467, 'audit:created', 7, 'App\\Models\\Professionale#7', 2, '{\"qualification_title\":\"BSC\",\"institution\":\"Dhaka College\",\"from_date\":\"09\\/02\\/1989\",\"to_date\":\"09\\/02\\/1994\",\"passing_year\":\"1995\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:12:12\",\"created_at\":\"2024-06-02 06:12:12\",\"id\":7}', '27.147.163.77', '2024-06-02 10:12:12', '2024-06-02 10:12:12'),
(468, 'audit:created', 8, 'App\\Models\\EmergenceContacte#8', 2, '{\"contact_person_name\":\"Kamran\",\"contact_person_relation\":\"Brother\",\"contact_person_number\":\"01711170697\",\"address\":\"Dhaka\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:15:03\",\"created_at\":\"2024-06-02 06:15:03\",\"id\":8}', '27.147.163.77', '2024-06-02 10:15:03', '2024-06-02 10:15:03'),
(469, 'audit:created', 9, 'App\\Models\\SpouseInformatione#9', 2, '{\"employee_id\":\"9\",\"name_bn\":\"\\u09ae\\u09cb\\u0983 \\u0986\\u09a4\\u09bf\\u0995\\u09c1\\u09b2 \\u0987\\u09b8\\u09b2\\u09be\\u09ae\",\"name_en\":\"Md. Atikul Islam\",\"nid_number\":null,\"phone_number\":\"01957073942\",\"present_addess\":\"<p>Magura , Bangladesh<\\/p>\",\"permanent_addess\":\"<p>Magura , Bangladesh<\\/p>\",\"updated_at\":\"2024-06-02 06:17:05\",\"created_at\":\"2024-06-02 06:17:05\",\"id\":9,\"nid_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 10:17:05', '2024-06-02 10:17:05'),
(470, 'audit:created', 11, 'App\\Models\\Child#11', 2, '{\"name_bn\":\"\\u09ae\\u09cb\\u09b9\\u09be\\u09ae\\u09cd\\u09ae\\u09a6 \\u09a4\\u09be\\u09b8\\u09a8\\u09bf\\u09ae \\u09b8\\u09bf\\u09ab\\u09be\\u09a4\",\"name_en\":\"Mohammed Tasnim Sifat\",\"date_of_birth\":\"26\\/03\\/2000\",\"complite_21\":\"26\\/03\\/2021\",\"gender_id\":\"1\",\"nid_number\":null,\"passport_number\":null,\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:18:52\",\"created_at\":\"2024-06-02 06:18:52\",\"id\":11,\"birth_certificate\":null,\"childdren_nid\":null,\"childdren_passporft\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 10:18:52', '2024-06-02 10:18:52'),
(471, 'audit:created', 16, 'App\\Models\\JobHistory#16', 2, '{\"office_unit_id\":\"1\",\"level_2\":\"Forestry Sector Project(FSP) , Ban Bhaban , Mohakhali , Dhaka\",\"employee_id\":\"9\",\"designation_id\":\"11\",\"joining_date\":\"30\\/01\\/2001\",\"release_date\":\"30\\/06\\/2006\",\"grade_id\":\"9\",\"updated_at\":\"2024-06-02 06:22:28\",\"created_at\":\"2024-06-02 06:22:28\",\"id\":16,\"go_upload\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 10:22:28', '2024-06-02 10:22:28'),
(472, 'audit:created', 8, 'App\\Models\\EmployeePromotion#8', 2, '{\"new_designation_id\":\"11\",\"go_issue_date\":null,\"office_order_date\":\"15\\/11\\/2012\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:24:03\",\"created_at\":\"2024-06-02 06:24:03\",\"id\":8,\"office_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 10:24:04', '2024-06-02 10:24:04'),
(473, 'audit:created', 7, 'App\\Models\\LeaveRecord#7', 2, '{\"leave_category_id\":\"1\",\"type_of_leave_id\":\"1\",\"start_date\":\"26\\/11\\/2014\",\"end_date\":\"26\\/02\\/2015\",\"reason\":\"<p>Personal Reason .<\\/p>\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:25:35\",\"created_at\":\"2024-06-02 06:25:35\",\"id\":7}', '27.147.163.77', '2024-06-02 10:25:35', '2024-06-02 10:25:35'),
(474, 'audit:created', 8, 'App\\Models\\Training#8', 2, '{\"training_type_id\":\"1\",\"training_name\":\"Fundamental Computing & Computer Automation\",\"institute_name\":\"BADS\",\"country_id\":\"14\",\"start_date\":\"07\\/09\\/2001\",\"end_date\":\"06\\/10\\/2001\",\"location\":\"Dhaka\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:28:14\",\"created_at\":\"2024-06-02 06:28:14\",\"id\":8}', '27.147.163.77', '2024-06-02 10:28:14', '2024-06-02 10:28:14'),
(475, 'audit:created', 9, 'App\\Models\\TravelRecord#9', 2, '{\"country_id\":\"14\",\"title\":\"Join Forest Management Training\",\"purpose_id\":\"Training\",\"start_date\":\"05\\/05\\/2005\",\"end_date\":\"11\\/05\\/2005\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:30:39\",\"created_at\":\"2024-06-02 06:30:39\",\"id\":9}', '27.147.163.77', '2024-06-02 10:30:39', '2024-06-02 10:30:39'),
(476, 'audit:created', 8, 'App\\Models\\ForeignTravelPersonal#8', 2, '{\"title\":\"Development of National Land Cover Monitoring System for Bangladesh\",\"country_id\":\"14\",\"purpose_id\":\"Training\",\"from_date\":\"14\\/10\\/2019\",\"to_date\":\"18\\/10\\/2019\",\"leave_id\":\"1\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:32:43\",\"created_at\":\"2024-06-02 06:32:43\",\"id\":8}', '27.147.163.77', '2024-06-02 10:32:43', '2024-06-02 10:32:43'),
(477, 'audit:created', 8, 'App\\Models\\Extracurriculam#8', 2, '{\"activity_name\":\"Sports\",\"organization\":\"Ban Bhaban\",\"position\":null,\"start_date\":null,\"end_date\":null,\"description\":\"<p>Ban Bhaban<\\/p>\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:37:04\",\"created_at\":\"2024-06-02 06:37:04\",\"id\":8,\"attatchment\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 10:37:04', '2024-06-02 10:37:04'),
(478, 'audit:created', 7, 'App\\Models\\Publication#7', 2, '{\"title\":\"Asian Journal of Geoinformatic\",\"publication_type\":\"Journal\",\"publication_media\":null,\"publication_date\":null,\"publication_link\":null,\"description\":\"<p>Asian Journal of Geoinformatic<\\/p>\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:49:00\",\"created_at\":\"2024-06-02 06:49:00\",\"id\":7}', '27.147.163.77', '2024-06-02 10:49:00', '2024-06-02 10:49:00'),
(479, 'audit:created', 13, 'App\\Models\\Language#13', 2, '{\"employee_id\":\"9\",\"language_id\":\"1\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-02 06:50:14\",\"created_at\":\"2024-06-02 06:50:14\",\"id\":13}', '27.147.163.77', '2024-06-02 10:50:14', '2024-06-02 10:50:14');
INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(480, 'audit:created', 14, 'App\\Models\\Language#14', 2, '{\"employee_id\":\"9\",\"language_id\":\"2\",\"read_id\":\"3\",\"write_id\":\"3\",\"speak_id\":\"3\",\"updated_at\":\"2024-06-02 06:50:23\",\"created_at\":\"2024-06-02 06:50:23\",\"id\":14}', '27.147.163.77', '2024-06-02 10:50:23', '2024-06-02 10:50:23'),
(481, 'audit:created', 8, 'App\\Models\\AcrMonitoring#8', 2, '{\"year\":\"1995\",\"reviewer\":\"Nurujjaman\",\"review_date\":\"02\\/06\\/2024\",\"remarks\":null,\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 06:51:56\",\"created_at\":\"2024-06-02 06:51:56\",\"id\":8}', '27.147.163.77', '2024-06-02 10:51:56', '2024-06-02 10:51:56'),
(482, 'audit:created', 9, 'App\\Models\\Addressdetaile#9', 2, '{\"address_type\":\"Present\",\"flat_house\":\"3\\/3 , Bana Bithi Complex , Sector-8\",\"post_office\":\"Uttara\",\"post_code\":\"7230\",\"thana_upazila_id\":\"245\",\"phone_number\":\"01711283846\",\"status\":\"No\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 07:19:49\",\"created_at\":\"2024-06-02 07:19:49\",\"id\":9}', '27.147.163.77', '2024-06-02 11:19:49', '2024-06-02 11:19:49'),
(483, 'audit:created', 10, 'App\\Models\\Addressdetaile#10', 2, '{\"address_type\":\"Permanent\",\"flat_house\":\"House No-2 , Road No-13\",\"post_office\":\"Magura\",\"post_code\":\"7610\",\"thana_upazila_id\":\"260\",\"phone_number\":\"01711283846\",\"status\":\"No\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 07:21:27\",\"created_at\":\"2024-06-02 07:21:27\",\"id\":10}', '27.147.163.77', '2024-06-02 11:21:27', '2024-06-02 11:21:27'),
(484, 'audit:created', 9, 'App\\Models\\CriminalProsecutione#9', 2, '{\"judgement_type\":\"Nothing\",\"natureof_offence\":\"Demo\",\"government_order_no\":\"12365-456\",\"remzrk\":\"<p>Nothing<\\/p>\",\"employee_id\":\"9\",\"updated_at\":\"2024-06-02 07:48:46\",\"created_at\":\"2024-06-02 07:48:46\",\"id\":9,\"court_order\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 11:48:46', '2024-06-02 11:48:46'),
(485, 'audit:created', 7, 'App\\Models\\CriminalproDisciplinary#7', 2, '{\"criminalprosecutione_id\":\"1\",\"judgement_type\":\"Nothing\",\"government_order_no\":\"12365-456\",\"remarks\":\"None\",\"updated_at\":\"2024-06-02 07:49:17\",\"created_at\":\"2024-06-02 07:49:17\",\"id\":7,\"order_upload_file\":null,\"media\":[]}', '27.147.163.77', '2024-06-02 11:49:17', '2024-06-02 11:49:17'),
(486, 'audit:created', 9, 'App\\Models\\AcrMonitoring#9', 2, '{\"year\":\"1990\",\"reviewer\":\"Nurujjaman\",\"review_date\":\"02\\/06\\/2024\",\"remarks\":\"<p>R4F44V<\\/p>\",\"employee_id\":\"1\",\"updated_at\":\"2024-06-02 12:51:12\",\"created_at\":\"2024-06-02 12:51:12\",\"id\":9}', '123.49.53.202', '2024-06-02 16:51:12', '2024-06-02 16:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `ground_area` varchar(150) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `title`, `ground_area`, `date`, `created_at`, `updated_at`, `deleted_at`, `employee_id`) VALUES
(1, 'Award', NULL, NULL, '2024-05-27 13:05:06', '2024-05-29 23:35:20', '2024-05-29 23:35:20', NULL),
(2, NULL, NULL, NULL, '2024-05-27 13:09:45', '2024-05-29 23:35:17', '2024-05-29 23:35:17', NULL),
(3, 'Test', 'Test', '2024-05-30', '2024-05-29 23:35:40', '2024-05-29 23:35:40', NULL, 1),
(4, 'Contest Winner', 'Programming Contest by CSE', '2022-06-01', '2024-06-01 05:53:30', '2024-06-01 05:53:30', NULL, 3),
(5, NULL, NULL, NULL, '2024-06-01 08:39:15', '2024-06-01 08:39:15', NULL, 4),
(6, 'পুরস্কার', 'ডেমো', '2023-11-07', '2024-06-01 13:25:00', '2024-06-01 13:25:00', NULL, 5),
(7, 'Award', 'Area', '2022-03-04', '2024-06-01 13:56:45', '2024-06-01 13:56:45', NULL, NULL),
(8, 'CSE FEST', 'CSE', '2024-06-01', '2024-06-01 19:09:22', '2024-06-01 19:09:22', NULL, 7),
(9, 'Ban Bhaban Reward', 'Area-Demo', '2024-05-29', '2024-06-02 11:50:20', '2024-06-02 11:50:20', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_bn` varchar(150) NOT NULL,
  `batch_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `batch_bn`, `batch_en`, `created_at`, `updated_at`) VALUES
(1, '২২ তম ব্যাচ', '22nd Batch', '2024-06-01 05:03:38', '2024-06-01 05:03:38'),
(2, '২৩ তম ব্যাচ', '23rd Batch', '2024-06-01 05:04:10', '2024-06-01 05:04:10'),
(3, '২৪ তম ব্যাচ', '24th Batch', '2024-06-01 05:04:42', '2024-06-01 05:04:42'),
(4, '২৫ তম ব্যাচ', '25th Batch', '2024-06-01 05:05:08', '2024-06-01 05:05:08'),
(5, '২৬ তম ব্যাচ', '26th Batch', '2024-06-01 05:05:38', '2024-06-01 05:05:38'),
(6, '২৭ তম ব্যাচ', '27th Batch', '2024-06-01 05:06:07', '2024-06-01 05:06:24'),
(7, '২৮ তম ব্যাচ', '28th Batch', '2024-06-01 05:06:51', '2024-06-01 05:06:51'),
(8, '২৯ তম ব্যাচ', '29th Batch', '2024-06-01 05:07:27', '2024-06-01 05:07:27'),
(9, '৩০ তম ব্যাচ', '30th Batch', '2024-06-01 05:08:14', '2024-06-01 05:08:14'),
(10, '৩১ তম ব্যাচ', '31st Batch', '2024-06-01 05:08:34', '2024-06-01 05:08:34'),
(11, '৩২ তম ব্যাচ', '32nd Batch', '2024-06-01 05:08:55', '2024-06-01 05:08:55'),
(12, '৩৩ তম ব্যাচ', '33rd Batch', '2024-06-01 05:09:23', '2024-06-01 05:09:23'),
(13, '৩৪ তম ব্যাচ', '34th Batch', '2024-06-01 05:09:48', '2024-06-01 05:09:48'),
(14, '৩৫ তম ব্যাচ', '35th Batch', '2024-06-01 05:10:12', '2024-06-01 05:10:12'),
(15, '৩৬ তম ব্যাচ', '36th Batch', '2024-06-01 05:10:30', '2024-06-01 05:10:30'),
(16, '৩৭ তম ব্যাচ', '37th Batch', '2024-06-01 05:11:01', '2024-06-01 05:11:01'),
(17, '৩৮ তম ব্যাচ', '38th Batch', '2024-06-01 05:11:22', '2024-06-01 05:11:22'),
(18, '৩৯ তম ব্যাচ', '39th Batch', '2024-06-01 05:11:41', '2024-06-01 05:11:41'),
(19, '৪০ তম ব্যাচ', '40th Batch', '2024-06-01 05:11:58', '2024-06-01 05:11:58'),
(20, '৪১ তম ব্যাচ', '41st Batch', '2024-06-01 05:12:16', '2024-06-01 05:12:16'),
(21, '৪২ তম ব্যাচ', '42nd Batch', '2024-06-01 05:12:34', '2024-06-01 05:12:34'),
(22, '৪৩ তম ব্যাচ', '43rd Batch', '2024-06-01 05:12:56', '2024-06-01 05:12:56'),
(23, '৪৪ তম ব্যাচ', '44th Batch', '2024-06-01 05:13:13', '2024-06-01 05:13:13'),
(24, '৪৫ তম ব্যাচ', '45th Batch', '2024-06-01 05:14:26', '2024-06-01 05:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'A (+)ve', 'A (+)ve', NULL, '2024-06-01 04:50:42'),
(2, 'B (+)ve', 'B (+)ve', NULL, '2024-06-01 04:48:03'),
(3, 'O (+)ve', 'O (+)ve', NULL, '2024-06-01 04:49:06'),
(4, 'AB (+)ve', 'AB (+)ve', NULL, '2024-06-01 04:49:50'),
(5, 'A (-)ve', 'A (-)ve', NULL, '2024-06-01 04:51:00'),
(6, 'O (-)ve', 'O (-)ve', NULL, '2024-06-01 04:49:31'),
(7, 'B (-)ve', 'B (-)ve', NULL, '2024-06-01 04:48:41'),
(8, 'AB (-)ve', 'AB (-)ve', NULL, '2024-06-01 04:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `complite_21` varchar(150) NOT NULL,
  `nid_number` varchar(150) DEFAULT NULL,
  `passport_number` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gender_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `name_bn`, `name_en`, `date_of_birth`, `complite_21`, `nid_number`, `passport_number`, `created_at`, `updated_at`, `deleted_at`, `employee_id`, `gender_id`) VALUES
(1, 'মাশরুর আহসান', 'Mashrur Ahsan', '2002-04-29', '29/04/2023', NULL, NULL, '2024-05-27 11:10:39', '2024-05-27 11:10:39', NULL, NULL, 1),
(2, 'মাশরুর আহসান', 'Mashrur Ahsan', '2002-04-04', '04/04/2023', NULL, NULL, '2024-05-27 13:23:54', '2024-05-27 13:28:56', '2024-05-27 13:28:56', 1, 1),
(3, 'মাশরুর আহসান', 'Mashrur Ahsan', '2002-04-29', '29/04/2023', NULL, NULL, '2024-05-27 13:25:06', '2024-05-27 13:28:56', '2024-05-27 13:28:56', 1, 1),
(4, 'মাশরুর আহসান', 'Mashrur Ahsan', '2024-05-14', '14/05/2045', NULL, NULL, '2024-05-27 13:26:31', '2024-05-27 13:28:56', '2024-05-27 13:28:56', 1, 1),
(5, 'মাশরুর আহসান', 'Mashrur Ahsan', '2002-04-29', '29/04/2023', NULL, NULL, '2024-05-27 13:36:40', '2024-05-27 13:42:55', '2024-05-27 13:42:55', 1, 1),
(6, 'ডেমো নাম', 'Demo Name', '2023-12-01', '01/12/2044', NULL, NULL, '2024-06-01 05:39:52', '2024-06-01 05:39:52', NULL, 3, 2),
(7, 'N/A', 'N/A', '2024-04-29', '29/04/2045', NULL, NULL, '2024-06-01 08:32:36', '2024-06-01 08:32:36', NULL, 4, 1),
(8, 'এস. এম. আহসানুল আজিজ', 'S. M. Ahsanul Aziz', '2023-03-29', '29/03/2044', '45345345345345', NULL, '2024-06-01 13:18:12', '2024-06-01 13:18:12', NULL, 5, 1),
(9, 'এস. এম. আহসানুল আজিজ', 'S. M. Ahsanul Aziz', '2019-06-03', '03/06/2040', '45345345345345', '2156', '2024-06-01 13:48:59', '2024-06-01 13:48:59', NULL, 6, 1),
(10, 'রওনক জাহান', 'Rawnak Jahan', '2024-06-10', '10/06/2045', '1234567898', '1245', '2024-06-01 19:24:43', '2024-06-01 19:24:43', NULL, 7, 1),
(11, 'মোহাম্মদ তাসনিম সিফাত', 'Mohammed Tasnim Sifat', '2000-03-26', '26/03/2021', NULL, NULL, '2024-06-02 10:18:52', '2024-06-02 10:18:52', NULL, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `grocode` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name_bn`, `name_en`, `grocode`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'আফগানিস্তান', 'Afghanistan', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(2, 'আলবেনিয়া', 'Albania', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(3, 'আলজেরিয়া', 'Algeria', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(4, 'আন্ডোরা', 'Andorra', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(5, 'অ্যাঙ্গোলা', 'Angola', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(6, 'অ্যান্টিগুয়া ও বারবুডা', 'Antigua and Barbuda', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(7, 'আর্জেন্টিনা', 'Argentina', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(8, 'আর্মেনিয়া', 'Armenia', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(9, 'অস্ট্রেলিয়া', 'Australia', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(10, 'অস্ট্রিয়া', 'Austria', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(11, 'আজারবাইজান', 'Azerbaijan', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(12, 'বাহামা', 'Bahamas', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(13, 'বাহরাইন', 'Bahrain', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(14, 'বাংলাদেশ', 'Bangladesh', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(15, 'বার্বাডোস', 'Barbados', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(16, 'বেলারুশ', 'Belarus', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(17, 'বেলজিয়াম', 'Belgium', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(18, 'বেলিজ', 'Belize', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(19, 'বেনিন', 'Benin', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(20, 'ভুটান', 'Bhutan', NULL, '2024-05-27 01:01:53', '2024-05-27 01:01:53', NULL),
(21, 'বলিভিয়া', 'Bolivia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(22, 'বসনিয়া ও হার্জেগোভিনা', 'Bosnia and Herzegovina', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(23, 'বটসোয়ানা', 'Botswana', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(24, 'ব্রাজিল', 'Brazil', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(25, 'ব্রুনেই', 'Brunei', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(26, 'বুলগেরিয়া', 'Bulgaria', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(27, 'বুর্কিনা ফাসো', 'Burkina Faso', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(28, 'বুরুন্ডি', 'Burundi', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(29, 'কেপ ভার্দে', 'Cabo Verde', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(30, 'কম্বোডিয়া', 'Cambodia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(31, 'ক্যামেরুন', 'Cameroon', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(32, 'কানাডা', 'Canada', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(33, 'মধ্য আফ্রিকান প্রজাতন্ত্র', 'Central African Republic', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(34, 'চাদ', 'Chad', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(35, 'চিলি', 'Chile', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(36, 'চীন', 'China', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(37, 'কলম্বিয়া', 'Colombia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(38, 'কমোরোস', 'Comoros', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(39, 'কঙ্গো (কঙ্গো-ব্রাজাভিল)', 'Congo (Congo-Brazzaville)', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(40, 'কোস্টা রিকা', 'Costa Rica', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(41, 'ক্রোয়েশিয়া', 'Croatia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(42, 'কিউবা', 'Cuba', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(43, 'সাইপ্রাস', 'Cyprus', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(44, 'চেকিয়া (চেক প্রজাতন্ত্র)', 'Czechia (Czech Republic)', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(45, 'ডেনমার্ক', 'Denmark', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(46, 'জিবুতি', 'Djibouti', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(47, 'ডোমিনিকা', 'Dominica', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(48, 'ডোমিনিকান প্রজাতন্ত্র', 'Dominican Republic', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(49, 'ইকুয়েডর', 'Ecuador', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(50, 'মিশর', 'Egypt', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(51, 'এল সালভাদোর', 'El Salvador', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(52, 'নিরক্ষীয় গিনি', 'Equatorial Guinea', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(53, 'ইরিত্রিয়া', 'Eritrea', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(54, 'এস্তোনিয়া', 'Estonia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(55, 'ইসওয়াতিনি (প্রাক্ত \"সোয়াজিল্যান্ড\")', 'Eswatini (fmr. \"Swaziland\")', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(56, 'ইথিওপিয়া', 'Ethiopia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(57, 'ফিজি', 'Fiji', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(58, 'ফিনল্যান্ড', 'Finland', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(59, 'ফ্রান্স', 'France', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(60, 'গাবন', 'Gabon', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(61, 'গাম্বিয়া', 'Gambia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(62, 'জর্জিয়া', 'Georgia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(63, 'জার্মানি', 'Germany', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(64, 'ঘানা', 'Ghana', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(65, 'গ্রীস', 'Greece', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(66, 'গ্রেনাডা', 'Grenada', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(67, 'গুয়াতেমালা', 'Guatemala', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(68, 'গিনি', 'Guinea', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(69, 'গিনি-বিসাউ', 'Guinea-Bissau', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(70, 'গায়ানা', 'Guyana', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(71, 'হাইতি', 'Haiti', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(72, 'পবিত্র দর্শন', 'Holy See', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(73, 'হন্ডুরাস', 'Honduras', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(74, 'হাঙ্গেরি', 'Hungary', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(75, 'আইসল্যান্ড', 'Iceland', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(76, 'ভারত', 'India', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(77, 'ইন্দোনেশিয়া', 'Indonesia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(78, 'ইরান', 'Iran', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(79, 'ইরাক', 'Iraq', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(80, 'আয়ারল্যান্ড', 'Ireland', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(81, 'ইসরায়েল', 'Israel', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(82, 'ইতালি', 'Italy', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(83, 'জামাইকা', 'Jamaica', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(84, 'জাপান', 'Japan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(85, 'জর্ডান', 'Jordan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(86, 'কাজাখস্তান', 'Kazakhstan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(87, 'কেনিয়া', 'Kenya', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(88, 'কিরিবাতি', 'Kiribati', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(89, 'উত্তর কোরিয়া', 'Korea, North', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(90, 'দক্ষিণ কোরিয়া', 'Korea, South', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(91, 'কসোভো', 'Kosovo', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(92, 'কুয়েত', 'Kuwait', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(93, 'কিরগিজিস্তান', 'Kyrgyzstan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(94, 'লাওস', 'Laos', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(95, 'লাটভিয়া', 'Latvia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(96, 'লেবানন', 'Lebanon', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(97, 'লেসোথো', 'Lesotho', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(98, 'লাইবেরিয়া', 'Liberia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(99, 'লিবিয়া', 'Libya', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(100, 'লিচেনস্টেইন', 'Liechtenstein', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(101, 'লিথুয়ানিয়া', 'Lithuania', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(102, 'লাক্সেমবার্গ', 'Luxembourg', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(103, 'মাদাগাস্কার', 'Madagascar', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(104, 'মালাউই', 'Malawi', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(105, 'মালয়েশিয়া', 'Malaysia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(106, 'মালদ্বীপ', 'Maldives', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(107, 'মালি', 'Mali', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(108, 'মাল্টা', 'Malta', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(109, 'মার্শাল দ্বীপপুঞ্জ', 'Marshall Islands', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(110, 'মরিতানিয়া', 'Mauritania', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(111, 'মরিশাস', 'Mauritius', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(112, 'মেক্সিকো', 'Mexico', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(113, 'মাইক্রোনেশিয়া', 'Micronesia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(114, 'মল্দোভা', 'Moldova', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(115, 'মোনাকো', 'Monaco', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(116, 'মঙ্গোলিয়া', 'Mongolia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(117, 'মন্টেনিগ্রো', 'Montenegro', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(118, 'মরক্কো', 'Morocco', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(119, 'মোজাম্বিক', 'Mozambique', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(120, 'মায়ানমার (পূর্ববর্তী বর্মা)', 'Myanmar (formerly Burma)', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(121, 'নামিবিয়া', 'Namibia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(122, 'নাউরু', 'Nauru', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(123, 'নেপাল', 'Nepal', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(124, 'নেদারল্যান্ডস', 'Netherlands', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(125, 'নিউজিল্যান্ড', 'New Zealand', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(126, 'নিকারাগুয়া', 'Nicaragua', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(127, 'নাইজার', 'Niger', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(128, 'নাইজেরিয়া', 'Nigeria', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(129, 'উত্তর ম্যাসেডোনিয়া', 'North Macedonia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(130, 'নরওয়ে', 'Norway', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(131, 'ওমান', 'Oman', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(132, 'পাকিস্তান', 'Pakistan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(133, 'পালাউ', 'Palau', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(134, 'প্যালেস্টাইন রাষ্ট্র', 'Palestine State', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(135, 'পানামা', 'Panama', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(136, 'পাপুয়া নিউ গিনি', 'Papua New Guinea', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(137, 'প্যারাগুয়ে', 'Paraguay', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(138, 'পেরু', 'Peru', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(139, 'ফিলিপাইন্স', 'Philippines', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(140, 'পোল্যান্ড', 'Poland', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(141, 'পর্তুগাল', 'Portugal', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(142, 'কাতার', 'Qatar', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(143, 'রুমানিয়া', 'Romania', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(144, 'রাশিয়া', 'Russia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(145, 'রুয়ান্ডা', 'Rwanda', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(146, 'সেন্ট কিটস ও নেভিস', 'Saint Kitts and Nevis', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(147, 'সেন্ট লুসিয়া', 'Saint Lucia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(148, 'সেন্ট ভিনসেন্ট এবং গ্রেনাডিনস', 'Saint Vincent and the Grenadines', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(149, 'সামোয়া', 'Samoa', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(150, 'সান মারিনো', 'San Marino', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(151, 'সাও টোমি ও প্রিন্সিপি', 'Sao Tome and Principe', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(152, 'সৌদি আরব', 'Saudi Arabia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(153, 'সেনেগাল', 'Senegal', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(154, 'সার্বিয়া', 'Serbia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(155, 'সিসিলি', 'Seychelles', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(156, 'সিয়েরা লিওন', 'Sierra Leone', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(157, 'সিঙ্গাপুর', 'Singapore', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(158, 'স্লোভাকিয়া', 'Slovakia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(159, 'স্লোভেনিয়া', 'Slovenia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(160, 'সলোমন দ্বীপপুঞ্জ', 'Solomon Islands', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(161, 'সোমালিয়া', 'Somalia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(162, 'দক্ষিণ আফ্রিকা', 'South Africa', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(163, 'দক্ষিণ সুদান', 'South Sudan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(164, 'স্পেন', 'Spain', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(165, 'শ্রীলঙ্কা', 'Sri Lanka', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(166, 'সুদান', 'Sudan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(167, 'সুরিনাম', 'Suriname', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(168, 'সুইডেন', 'Sweden', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(169, 'সুইজারল্যান্ড', 'Switzerland', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(170, 'সিরিয়া', 'Syria', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(171, 'তাজিকিস্তান', 'Tajikistan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(172, 'তাঞ্জানিয়া', 'Tanzania', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(173, 'থাইল্যান্ড', 'Thailand', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(174, 'তিমুর-লেস্তে', 'Timor-Leste', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(175, 'টোগো', 'Togo', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(176, 'টঙ্গা', 'Tonga', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(177, 'ট্রিনিডাড ও টোবাগো', 'Trinidad and Tobago', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(178, 'তিউনিসিয়া', 'Tunisia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(179, 'তুরস্ক', 'Turkey', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(180, 'তুর্কমেনিস্তান', 'Turkmenistan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(181, 'টুভালু', 'Tuvalu', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(182, 'উগান্ডা', 'Uganda', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(183, 'ইউক্রেন', 'Ukraine', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(184, 'সংযুক্ত আরব আমিরাত', 'United Arab Emirates', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(185, 'যুক্তরাজ্য', 'United Kingdom', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(186, 'মার্কিন যুক্তরাষ্ট্র', 'United States of America', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(187, 'উরুগুয়ে', 'Uruguay', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(188, 'উজবেকিস্তান', 'Uzbekistan', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(189, 'ভানুয়াটু', 'Vanuatu', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(190, 'ভেনেজুয়েলা', 'Venezuela', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(191, 'ভিয়েতনাম', 'Vietnam', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(192, 'ইয়েমেন', 'Yemen', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(193, 'জাম্বিয়া', 'Zambia', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL),
(194, 'জিম্বাবুয়ে', 'Zimbabwe', NULL, '2024-05-27 01:01:54', '2024-05-27 01:01:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criminalpro_disciplinaries`
--

CREATE TABLE `criminalpro_disciplinaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judgement_type` varchar(150) DEFAULT NULL,
  `government_order_no` varchar(150) DEFAULT NULL,
  `remarks` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `criminalprosecutione_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criminalpro_disciplinaries`
--

INSERT INTO `criminalpro_disciplinaries` (`id`, `judgement_type`, `government_order_no`, `remarks`, `created_at`, `updated_at`, `deleted_at`, `criminalprosecutione_id`) VALUES
(1, 'Nothing', '12365', 'Dhaka', '2024-05-27 13:16:45', '2024-05-27 13:16:45', NULL, 1),
(2, 'N/A', '22/02/2022- A', 'N/A', '2024-06-01 05:56:55', '2024-06-01 05:56:55', NULL, 2),
(3, 'Nothing', '12365', NULL, '2024-06-01 08:40:03', '2024-06-01 08:40:03', NULL, 2),
(4, 'ধরন', '১৩', 'ঢাকা', '2024-06-01 13:27:14', '2024-06-01 13:27:14', NULL, 5),
(5, 'Nothing', '12365', 'OK', '2024-06-01 14:00:56', '2024-06-01 14:00:56', NULL, 5),
(6, 'Criminal', '01/02/2024', 'Criminal', '2024-06-01 19:14:14', '2024-06-01 19:14:14', NULL, 8),
(7, 'Nothing', '12365-456', 'None', '2024-06-02 11:49:17', '2024-06-02 11:49:17', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `criminal_prosecutiones`
--

CREATE TABLE `criminal_prosecutiones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judgement_type` varchar(150) DEFAULT NULL,
  `natureof_offence` varchar(150) DEFAULT NULL,
  `government_order_no` varchar(150) DEFAULT NULL,
  `remzrk` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criminal_prosecutiones`
--

INSERT INTO `criminal_prosecutiones` (`id`, `judgement_type`, `natureof_offence`, `government_order_no`, `remzrk`, `created_at`, `updated_at`, `employee_id`) VALUES
(1, 'Nothing', 'Demo', '12365', '<p>Dhaka</p>', '2024-05-27 13:13:06', '2024-05-27 13:13:06', 1),
(2, 'N/A', 'N/A', '22/02/2022- A', NULL, '2024-06-01 05:56:26', '2024-06-01 05:56:26', 3),
(3, 'Nothing', 'Demo', '12365', NULL, '2024-06-01 08:39:50', '2024-06-01 08:39:50', 4),
(4, 'Eaque doloribus exce', 'Iste veniam culpa', 'Maiores nesciunt si', '<p>rtyrtyrtyrty</p>', '2024-06-01 12:35:35', '2024-06-01 12:35:35', 2),
(5, 'ধরন', 'অপরাধের', '১৩', NULL, '2024-06-01 13:26:09', '2024-06-01 13:26:09', 5),
(6, 'ধরন', 'অপরাধের', '১৩', NULL, '2024-06-01 13:26:23', '2024-06-01 13:26:23', 5),
(7, 'Nothing', 'Demo', '12365', NULL, '2024-06-01 14:00:02', '2024-06-01 14:00:02', 6),
(8, 'Criminal', 'Criminal  Test', '01/02/2024', '<p>None</p>', '2024-06-01 19:13:43', '2024-06-01 19:13:43', 7),
(9, 'Nothing', 'Demo', '12365-456', '<p>Nothing</p>', '2024-06-02 11:48:46', '2024-06-02 11:48:46', 9);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `value` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name_bn`, `name_en`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 'মহুকুমা বন কর্মকর্তা', 'Subdivisional Forest Officer', NULL, NULL, NULL, NULL),
(15, 'আইন অফিসার', 'Law Officer', NULL, NULL, NULL, NULL),
(14, 'সিনিয়র বায়োডাইভারসিটি কনজারভেশন অফিসার', 'Senior Biodiversity Conservation Officer', NULL, NULL, NULL, NULL),
(13, 'সিনিয়র বোটানিস্ট', 'Senior Botanist', NULL, NULL, NULL, NULL),
(12, 'সিনিয়র ভেটেরিনারী সার্জন', 'Senior Veterinary Surgeon', NULL, NULL, NULL, NULL),
(11, 'সিনিয়র রিসার্চ অফিসার', 'Senior Research Officer', NULL, NULL, NULL, NULL),
(10, 'সিনিয়র সহকারী বন সংরক্ষক (অতিরিক্ত বিভাগীয় বন কর্মকর্তা/সিনিয়র সহকারী বন সংরক্ষক/উপ—পরিচালক)', 'Senior Asstt. Conservator of Forests (ADFO/SACF/DD)', NULL, NULL, NULL, NULL),
(9, 'মেইনটেনেন্স ইঞ্জিনিয়ার', 'Maintenance Engineer', NULL, NULL, NULL, NULL),
(8, 'কম্পিউটার প্রোগ্রামার', 'Computer Programmer', NULL, NULL, NULL, NULL),
(7, 'চিফ ইন্সট্রাক্টর', 'Chief Instructor', NULL, NULL, NULL, NULL),
(6, 'উপবন সংরক্ষক (বিভাগীয় বন কর্মকর্তা/সহকারী প্রধান বন সংরক্ষক/উপ বন সংরক্ষক/অতিরিক্ত পরিচালক/ অধ্যক্ষ/পার্ক ব্যবস্থাপক)', 'Deputy Conservator of Forests (DFO/DCF/Addl. Director/Principal/Curator)', NULL, NULL, NULL, NULL),
(5, 'বন সংরক্ষক (বন সংরক্ষক/পরিচালক)', 'Conservator of Forests (CF/Director)', NULL, NULL, NULL, NULL),
(4, 'উপপ্রধান বনসংরক্ষক ', 'Deputy Chief Conservator of Forests', NULL, NULL, NULL, NULL),
(3, 'অতিরিক্ত প্রধান বন সংরক্ষক', 'Additional Chief Conservator of Forests', NULL, NULL, NULL, NULL),
(2, 'প্রধান বন সংরক্ষক', 'Chief Conservator of Forests', NULL, NULL, NULL, NULL),
(17, 'সিনিয়র ইনস্ট্রাক্টর', 'Senior Instractor ', NULL, NULL, NULL, NULL),
(18, 'সহকারী এস্টেট অফিসার (প্রেষণে)', 'Assistant Estate Officer (On Deputation)', NULL, NULL, NULL, NULL),
(19, 'সহকারী বন সংরক্ষক (সহকারী বন সংরক্ষক/ সহকারী পরিচালক/সহকারী পার্ক ব্যবস্থাপক)', 'Assistant  Conservator of Forests (ACF/Assistant Director/Assistant Curator) ', NULL, NULL, NULL, NULL),
(20, 'ইকোলজিস্ট', 'Ecologist', NULL, NULL, NULL, NULL),
(21, 'এপিডেমিওলজিস্ট', 'Epidemiologist', NULL, NULL, NULL, NULL),
(22, 'হারপেটোলজিস্ট', 'Herpetologist', NULL, NULL, NULL, NULL),
(23, 'মৎস্য বিশেষজ্ঞ', 'Ichthyologist', NULL, NULL, NULL, NULL),
(24, 'স্তন্যপায়ী প্রাণীবিদ', 'Mammalogist', NULL, NULL, NULL, NULL),
(25, 'পাখিবিদ', 'Ornithologist', NULL, NULL, NULL, NULL),
(26, 'টেক্সোনমিস্ট', 'Taxonomist', NULL, NULL, NULL, NULL),
(27, 'রিসার্চ অফিসার', 'Research Officer', NULL, NULL, NULL, NULL),
(28, 'বন্যপ্রাণী গবেষণা কর্মকর্তা', 'Wildlife research officer', NULL, NULL, NULL, NULL),
(29, 'বোটানিস্ট', 'Botanist', NULL, NULL, NULL, NULL),
(30, 'বন্যপ্রাণী ও জীববৈচিত্র্য সংরক্ষণ কর্মকর্তা', 'Biodiversity Conservation Officer', NULL, NULL, NULL, NULL),
(31, 'ইনস্ট্রাক্টর', ' Instructor', NULL, NULL, NULL, NULL),
(32, 'বাজেট অফিসার', 'Budget Officer', NULL, NULL, NULL, NULL),
(33, 'হিসাব কর্মকর্তা', 'Accounts Officer', NULL, NULL, NULL, NULL),
(34, 'সহকারী কম্পিউটার প্রোগ্রামার', 'Assistant Computer Programmer', NULL, NULL, NULL, NULL),
(35, 'জিআইএস অফিসার', 'GIS Officer', NULL, NULL, NULL, NULL),
(36, 'সহকারী মেইনটেনেন্স ইঞ্জিনিয়ার', 'Assistant Maintanance Engineer', NULL, NULL, NULL, NULL),
(37, 'ভেটেরিনারী সার্জন', 'Veterinary Surgeon', NULL, NULL, NULL, NULL),
(38, 'সহকারী পশু চিকিৎসক', 'Assistant Veterinary Surgeon', NULL, NULL, NULL, NULL),
(39, 'ভেটেরিনারী অফিসার', 'Veterinary Officer ', NULL, NULL, NULL, NULL),
(40, 'সহকারী প্রকৌশলী (সিভিল—১, ইলেক্ট্রো—মেকানিক্যাল—১, অটোমোবাইল—১, মেরিন—১)', 'Assistant Engineer (Civil/Machanical/Marine)', NULL, NULL, NULL, NULL),
(41, 'লাইব্রেরিয়ান', 'Librarian', NULL, NULL, NULL, NULL),
(42, 'কিউরেটর', 'Curetor', NULL, NULL, NULL, NULL),
(43, 'গণসংযোগ কর্মকর্তা', 'Mass Communication Officer', NULL, NULL, NULL, NULL),
(44, 'সোসিওলজিস্ট', 'Sociologist', NULL, NULL, NULL, NULL),
(45, 'ফিজিক্যাল/পিটি ইনস্ট্রাক্টর', 'Physical Training Instructor', NULL, NULL, NULL, NULL),
(46, 'ডেমোনেস্ট্রেটর', 'Demonstrator', NULL, NULL, NULL, NULL),
(47, 'প্রশাসনিক কর্মকর্তা', 'Administrative Officer', NULL, NULL, NULL, NULL),
(48, 'ব্যক্তিগত কর্মকর্তা', 'Personal Officer', NULL, NULL, NULL, NULL),
(49, 'ফরেষ্ট রেঞ্জার/ফিল্ড ইনভেস্টিগেটর', 'Forest Ranger/Field Investigetor', NULL, NULL, NULL, NULL),
(50, 'সহকারী ভেটেরিনারী সার্জন', 'Assistant Veterinary Surgeon', NULL, NULL, NULL, NULL),
(51, 'ওয়াইল্ডলাইফ রেঞ্জার', 'Wildlife Ranger', NULL, NULL, NULL, NULL),
(52, 'বন্যপ্রাণী পরিদর্শক', 'Wildlife Inspector', NULL, NULL, NULL, NULL),
(53, 'ওয়াইল্ডলাইফ সুপারভাইজার', 'Wildlife Supervisor', NULL, NULL, NULL, NULL),
(54, 'উপসহকারী প্রকৌশলী (প্রস্তাবিত: সিভিল—৪ ইলেক্ট্রিক্যাল—৪, অটোমোবাইল—৩, মেরিন—৩)', 'Sub-Assistant Engineer (Civil/Mechanical/Electrical/ Automobile/Marine)', NULL, NULL, NULL, NULL),
(55, 'সহকারী লাইব্রেরিয়ান', 'Junior Librarian', NULL, NULL, NULL, NULL),
(56, 'ড্রাফটসম্যান/কার্টোগ্রাফার', 'Draftsman', NULL, NULL, NULL, NULL),
(57, 'ডিপ্লোমা ইঞ্জিনিয়ার', 'Diploma Engineer', NULL, NULL, NULL, NULL),
(58, 'জুনিয়র জিআইএস অফিসার', 'Junior GIS Officer', NULL, NULL, NULL, NULL),
(59, 'উর্ধ্বতন ল্যাব টেকনিশিয়ান', 'Senior Lab Technician', NULL, NULL, NULL, NULL),
(60, 'ওয়াইল্ড লাইফ ওয়ার্ডেন', 'Wildlife Warden', NULL, NULL, NULL, NULL),
(61, 'মেকানিক্যাল সুপারভাইজার/মেকানিক', 'Mechanical Supervisor/Mechanic', NULL, NULL, NULL, NULL),
(62, 'কম্পিউটার অপারেটর', 'Computer Operator', NULL, NULL, NULL, NULL),
(63, 'ফোরম্যান', 'Foreman', NULL, NULL, NULL, NULL),
(64, 'প্যাথোলজিস্ট', 'Pathologist', NULL, NULL, NULL, NULL),
(65, 'ইঞ্জিন ড্রাইভার/ইঞ্জিনম্যান', 'Engine Driver/Engineman', NULL, NULL, NULL, NULL),
(66, 'প্রধান সহকারী', 'Head Assistant', NULL, NULL, NULL, NULL),
(67, 'সাঁটলিপিকার—কাম—কম্পিউটার অপারেটর', 'Stenographer-cum-computer operator', NULL, NULL, NULL, NULL),
(68, 'ল্যাব টেকনিশিয়ান', 'Lab. Technician', NULL, NULL, NULL, NULL),
(69, 'ডেপুটি রেঞ্জার', 'Deputy Ranger', NULL, NULL, NULL, NULL),
(70, 'হিসাব রক্ষক', 'Accountant', NULL, NULL, NULL, NULL),
(71, 'ক্যাশিয়ার', 'Cashier', NULL, NULL, NULL, NULL),
(72, 'বেতার যন্ত্র চালক/ওয়ারলেস অপারেটর', 'RT Set Operator/Wireless Operator', NULL, NULL, NULL, NULL),
(73, 'সাঁটমুদ্রাক্ষরিক—কাম—কম্পিউটার অপারেটর', 'Stenotypist-cum-computer operator', NULL, NULL, NULL, NULL),
(74, 'ইলেকট্রিশিয়ান', 'Electrician', NULL, NULL, NULL, NULL),
(75, 'জেনারেটর কাম ইলেকট্রিশিয়ান', 'Generator cum Electrician', NULL, NULL, NULL, NULL),
(76, 'সুপারভাইজার', 'Supervisor', NULL, NULL, NULL, NULL),
(77, 'উচ্চমান সহকারী', 'UD Assistant', NULL, NULL, NULL, NULL),
(78, 'ফরেষ্টার', 'Forester', NULL, NULL, NULL, NULL),
(79, 'সিনিয়র ওয়াইল্ডলাইফ স্কাউট', 'Senior Wildlife Scout', NULL, NULL, NULL, NULL),
(80, 'অডিও ভিজুয়াল ইকুইপমেন্ট অপারেটর', 'Audio-visual Equipment Operator', NULL, NULL, NULL, NULL),
(81, 'ড্রাফটসম্যান (নন—ডিপ্লোমা)', 'Draftsman (Non-Diploma)', NULL, NULL, NULL, NULL),
(82, 'সারেং', 'Sareng', NULL, NULL, NULL, NULL),
(83, 'সার্ভেয়ার/ওভারসিয়ার', 'Surveyor ', NULL, NULL, NULL, NULL),
(84, 'স্টোর কিপার', 'Store Keeper', NULL, NULL, NULL, NULL),
(85, 'স্টোর সহকারী', 'Store  Assistant', NULL, NULL, NULL, NULL),
(86, 'সার্ভেয়ার', 'Surveyor ', NULL, NULL, NULL, NULL),
(87, 'সহকারী ফরেষ্টার', 'Assistant Forester', NULL, NULL, NULL, NULL),
(88, 'ওয়াইল্ডলাইফ স্কাউট', 'Wildlife Scout', NULL, NULL, NULL, NULL),
(89, 'কম্পাউন্ডার', 'Compounder', NULL, NULL, NULL, NULL),
(90, 'লাইব্রেরী অ্যাসিস্ট্যান্ট', 'Library Assistant', NULL, NULL, NULL, NULL),
(91, 'ডাটা এন্ট্রি অপারেটর', 'Data Entry Operator', NULL, NULL, NULL, NULL),
(92, 'অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক', 'Office Assistant cum Computer Typist', NULL, NULL, NULL, NULL),
(93, 'ইলেকট্রিক জেনারেটার ড্রাইভার', 'Electric Generator Driver', NULL, NULL, NULL, NULL),
(94, 'পাম্প অপারেটর/ডিপ টিউবওয়েল অপারেটর', 'Pump Operator/Deep Tubewell Operator', NULL, NULL, NULL, NULL),
(95, 'পাম্প মেশিন অপারেটর—কাম—ইলেকট্রিশিয়ান', 'Pump Machine Operator cum Electrician', NULL, NULL, NULL, NULL),
(96, 'টার্নার', 'Turner', NULL, NULL, NULL, NULL),
(97, 'ফিটার', 'Fitter', NULL, NULL, NULL, NULL),
(98, 'গাড়ী চালক', 'Driver', NULL, NULL, NULL, NULL),
(99, 'ট্রাক হেলপার', 'Track Helper', NULL, NULL, NULL, NULL),
(100, 'স্পিডবোট/ট্রলার ড্রাইভার', 'Speed Boat Driver', NULL, NULL, NULL, NULL),
(101, 'কার্পেন্টার', 'Carpenter ', NULL, NULL, NULL, NULL),
(102, 'টেক্সিডারমিস্ট', 'Taxidermist', NULL, NULL, NULL, NULL),
(103, 'এনিমেল কিপার', 'Animal Keeper', NULL, NULL, NULL, NULL),
(104, 'এনিমেল ট্রেপার', ' Animal Traper', NULL, NULL, NULL, NULL),
(105, 'ব্ল্যাক স্মিথ/কর্মকার', 'Blacksmith/Kormokar', NULL, NULL, NULL, NULL),
(106, 'পাম্প মেশিন অপারেটর', 'Pump Machine Operator ', NULL, NULL, NULL, NULL),
(107, 'ইলেকট্রিশিয়ান/জেনারেটর অপারেটর', 'Electrician/Genertor Operator', NULL, NULL, NULL, NULL),
(108, 'ক্যাবল অপারেটর', 'Cable Operator', NULL, NULL, NULL, NULL),
(109, 'বন প্রহরী', 'Forest Guard', NULL, NULL, NULL, NULL),
(110, 'ফরেস্ট গার্ড', 'Forest Guard', NULL, NULL, NULL, NULL),
(111, 'জুনিয়র ওয়াইল্ডলাইফ স্কাউট', 'Junior Wildlife Scout', NULL, NULL, NULL, NULL),
(112, 'বন্যপ্রাণী রক্ষক', 'Animal Keeper/Wildlife Protector', NULL, NULL, NULL, NULL),
(113, 'ক্যাশ সরকার', 'Cash Sarkar', NULL, NULL, NULL, NULL),
(114, 'প্লাম্বার', 'Plumber', NULL, NULL, NULL, NULL),
(115, 'ফটোকপি অপারেটর', 'Photocopy Operator', NULL, NULL, NULL, NULL),
(116, 'ওয়েল্ডার', 'Welder', NULL, NULL, NULL, NULL),
(117, 'বাবুর্চি', 'Cook', NULL, NULL, NULL, NULL),
(118, 'সুকানী', 'Sukani', NULL, NULL, NULL, NULL),
(119, 'রেকর্ড সাপ্লায়ার', 'Record Supplier', NULL, NULL, NULL, NULL),
(120, 'নিরাপত্তা প্রহরী (সিকিউরিটি গার্ড)', 'Security Guard (Night Guard)', NULL, NULL, NULL, NULL),
(121, 'বনপ্রহরী/নিরাপত্তা প্রহরী', ' Forest Guard/ Security Guard', NULL, NULL, NULL, NULL),
(122, 'ডুপ্লিকেটিং/ফটোকপি অপারেটর', 'Duplicating/Photocopy Operator', NULL, NULL, NULL, NULL),
(123, 'ডেসপাচ রাইডার', 'Despatch Rider', NULL, NULL, NULL, NULL),
(124, 'ওয়াচার/পেট্রোল গার্ড', 'Watcher/ Patrol Gard', NULL, NULL, NULL, NULL),
(125, 'সিকিউরিটি ইন্সপেক্টর', 'Security Inspector', NULL, NULL, NULL, NULL),
(126, 'টেন্ডল', 'Tandol', NULL, NULL, NULL, NULL),
(127, 'লিফট অপারেটর', 'Lift Operator', NULL, NULL, NULL, NULL),
(128, 'হেডমালী', 'Head Mali', NULL, NULL, NULL, NULL),
(129, 'বাবুচি', 'Cook', NULL, NULL, NULL, NULL),
(130, 'গেইটম্যান', 'Gate Man', NULL, NULL, NULL, NULL),
(131, 'বাংলো এটেনডেন্ট', 'Banglo Attendant', NULL, NULL, NULL, NULL),
(132, 'বাংলো চৌকিদার/কটেজ কিপার', 'Bangalow Chowkider', NULL, NULL, NULL, NULL),
(133, 'বাংলো চৌকিদার কাম কুক', 'Bangalow Chowkider cum Cook', NULL, NULL, NULL, NULL),
(134, 'অফিস সহায়ক', 'Office Shahayak', NULL, NULL, NULL, NULL),
(135, 'নিরাপত্তা প্রহরী', 'Security Guard', NULL, NULL, NULL, NULL),
(136, 'পরিচ্ছন্নতা কর্মী ', 'Cleaner', NULL, NULL, NULL, NULL),
(137, 'মালী', 'Mali', NULL, NULL, NULL, NULL),
(138, 'বাগান মালী', 'Plantation Mali', NULL, NULL, NULL, NULL),
(139, 'বাগানমালী—কাম—গার্ড', 'Plantation Mali-Cum-Guard', NULL, NULL, NULL, NULL),
(140, 'নৌকা চালক', 'Boatman', NULL, NULL, NULL, NULL),
(141, 'লস্কর/খালাসি', 'Laskar/Khalashi ', NULL, NULL, NULL, NULL),
(142, 'ল্যাব বেয়ারা', 'Laboratory Bearer ', NULL, NULL, NULL, NULL),
(143, 'ল্যাবরেটরি এটেনডেন্ট', 'Laboratory Attendent', NULL, NULL, NULL, NULL),
(144, 'গ্রাস কাটার', 'Grass Cutter', NULL, NULL, NULL, NULL),
(145, 'মাহুত', 'Mahut', NULL, NULL, NULL, NULL),
(146, 'ড্রেসার', 'Dresser', NULL, NULL, NULL, NULL),
(147, 'হেলপার', 'Helper', NULL, NULL, NULL, NULL),
(148, 'ট্রাক্টর হেলপার', 'Tracktor Helper', NULL, NULL, NULL, NULL),
(149, 'সহকারী বাবুর্চী', 'Assistant Cook', NULL, NULL, NULL, NULL),
(150, 'ওয়াটার কেরিয়ার', 'Water Carrier ', NULL, NULL, NULL, NULL),
(151, 'ওয়াটার কেরিয়ার হেলপার', 'Water Carrier Helper', NULL, NULL, NULL, NULL),
(152, 'গ্রীজার/ফায়ার গ্রীজার', 'Greezer/Fire Greezer', NULL, NULL, NULL, NULL),
(153, 'ওয়েলম্যান', 'Oil-man', NULL, NULL, NULL, NULL),
(154, 'ডেক কেশব', 'Deck Keshob', NULL, NULL, NULL, NULL),
(155, 'ইঞ্জিনরুম কেশব', 'Engine Room Keshob ', NULL, NULL, NULL, NULL),
(156, 'টেন্ডল স্ট্রোকার', 'Tandol Stocker', NULL, NULL, NULL, NULL),
(157, 'ইলেকট্রিক স্ট্রোকার', 'Electric Stocker', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `grocode` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `divisions_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name_bn`, `name_en`, `grocode`, `created_at`, `updated_at`, `divisions_id`) VALUES
(45, 'বগুড়া ', 'BOGRA', '10', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 5),
(44, 'সাতক্ষীরা ', 'SATKHIRA', '87', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(43, 'নড়াইল ', 'NARAIL', '65', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(42, 'মেহেরপুর ', 'MEHERPUR', '57', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(41, 'মাগুরা', 'MAGURA', '55', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(40, 'কুষ্টিয়া ', 'KUSHTIA', '50', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(39, 'খুলনা ', 'KHULNA', '47', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(38, 'ঝিনাইদহ ', 'JHENAIDAH', '44', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(37, 'যশোর', 'JESSORE', '41', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(36, 'চুয়াডাঙ্গা ', 'CHUADANGA', '18', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(35, 'বাগেরহাট', 'BAGERHAT', '01', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 4),
(34, 'টাঙ্গাইল ', 'TANGAIL', '93', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(33, 'শেরপুর ', 'SHERPUR', '89', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 9),
(32, 'শরীয়তপুর  ', 'SHARIATPUR', '86', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(31, 'রাজবাড়ী ', 'RAJBARI', '82', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(30, 'নেত্রকোণা ', 'NETRAKONA', '72', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 9),
(29, 'নরসিংদী ', 'NARSINGDI', '68', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(28, 'নারায়ণগঞ্জ ', 'NARAYANGANJ', '67', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(27, 'ময়মনসিংহ ', 'MYMENSINGH', '61', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 9),
(26, 'মুন্সিগঞ্জ ', 'MUNSHIGANJ', '59', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(25, 'মানিকগঞ্জ ', 'MANIKGANJ', '56', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(24, 'মাদারীপুর ', 'MADARIPUR', '54', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(23, 'কিশোরগঞ্জ ', 'KISHOREGONJ', '48', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(22, 'জামালপুর ', 'JAMALPUR', '39', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 9),
(21, 'গোপালগঞ্জ', 'GOPALGANJ', '35', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(20, 'গাজীপুর ', 'GAZIPUR', '33', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(19, 'ফরিদপুর ', 'FARIDPUR', '29', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(18, 'ঢাকা ', 'DHAKA', '26', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 3),
(17, 'রাঙ্গামাটি', 'RANGAMATI', '84', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(16, 'নোয়াখালী', 'NOAKHALI', '75', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(15, 'লক্ষ্মীপুর', 'LAKSHMIPUR', '51', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(14, 'খাগড়াছড়ি', 'KHAGRACHHARI', '46', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(13, 'ফেনী', 'FENI', '30', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(12, 'কক্সবাজার ', 'COX\'S BAZAR', '22', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(11, 'কুমিল্লা', 'COMILLA', '19', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(10, 'চট্টগ্রাম', 'CHITTAGONG', '15', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(9, 'চাঁদপুর', 'CHANDPUR', '13', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(8, 'ব্রাহ্মণবাড়িয়া', 'BRAHMANBARIA', '12', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(7, 'বান্দরবান', 'BANDARBAN', '03', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 2),
(6, 'পিরোজপুর ', 'PIROJPUR', '79', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 1),
(5, 'পটুয়াখালী ', 'PATUAKHALI', '78', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 1),
(4, 'ঝালকাঠি', 'JHALOKATI', '42', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 1),
(3, 'ভোলা', 'BHOLA', '09', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 1),
(2, 'বরিশাল', 'BARISAL', '06', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 1),
(1, 'বরগুনা', 'BARGUNA', '04', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 1),
(46, 'জয়পুরহাট', 'JOYPURHAT', '38', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 5),
(47, 'নওগাঁ ', 'NAOGAON', '64', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 5),
(48, 'নাটোর ', 'NATORE', '69', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 5),
(49, 'চাঁপাই নাবাবগঞ্জ ', 'CHAPAI NABABGANJ', '70', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 5),
(50, 'পাবনা', 'PABNA', '76', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 5),
(51, 'রাজশাহী ', 'RAJSHAHI', '81', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 5),
(52, 'সিরাজগঞ্জ', 'SIRAJGANJ', '88', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 5),
(53, 'দিনাজপুর ', 'DINAJPUR', '27', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 6),
(54, 'গাইবান্ধা ', 'GAIBANDHA', '32', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 6),
(55, 'কুড়িগ্রাম ', 'KURIGRAM', '49', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 6),
(56, 'লালমনিরহাট ', 'LALMONIRHAT', '52', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 6),
(57, 'নীলফামারী', 'NILPHAMARI', '73', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 6),
(58, 'পঞ্চগড় ', 'PANCHAGARH', '77', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 6),
(59, 'রংপুর ', 'RANGPUR', '85', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 6),
(60, 'ঠাকুরগাঁও', 'THAKURGAON', '94', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 6),
(61, 'হবিগঞ্জ ', 'HABIGANJ', '36', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 7),
(62, 'মৌলভীবাজার ', 'MAULVIBAZAR', '58', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 7),
(63, 'সুনামগঞ্জ ', 'SUNAMGANJ', '90', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 7),
(64, 'সিলেট', 'SYLHET', '91', '2020-03-29 00:07:03', '2020-03-29 00:07:03', 7);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `grocode` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name_bn`, `name_en`, `grocode`, `created_at`, `updated_at`, `country_id`) VALUES
(6, 'রংপুর', 'Rangpur', '60', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(5, 'রাজশাহী', 'Rajshahi', '50', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(4, 'খুলনা', 'Khulna', '40', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(3, 'ঢাকা', 'Dhaka', '30', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(2, 'চট্টগ্রাম', 'Chittagong', '20', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(1, 'বরিশাল', 'Barisal', '10', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(7, 'সিলেট', 'Sylhet', '70', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(9, 'ময়মনসিংহ', 'Mymensingh', '45', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14);

-- --------------------------------------------------------

--
-- Table structure for table `education_informationes`
--

CREATE TABLE `education_informationes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `concentration_major_group` varchar(150) DEFAULT NULL,
  `school_university_name` varchar(150) NOT NULL,
  `passing_year` int(11) DEFAULT NULL,
  `achivement` varchar(150) DEFAULT NULL,
  `exam_degree` varchar(150) DEFAULT NULL,
  `cgpa` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name_of_exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `exam_board_id` bigint(20) UNSIGNED DEFAULT NULL,
  `result_id` bigint(20) UNSIGNED DEFAULT NULL,
  `achievement_types_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_informationes`
--

INSERT INTO `education_informationes` (`id`, `concentration_major_group`, `school_university_name`, `passing_year`, `achivement`, `exam_degree`, `cgpa`, `created_at`, `updated_at`, `deleted_at`, `name_of_exam_id`, `exam_board_id`, `result_id`, `achievement_types_id`, `employee_id`) VALUES
(1, 'Science', 'Khagrachari Govt. High School, Khagrachari', 1978, NULL, NULL, NULL, '2024-05-27 12:23:03', '2024-05-27 12:23:03', NULL, 1, 2, 1, NULL, 1),
(2, 'Science', 'Muminunnisa Govt. Mahila College, Mymensingh', 1974, NULL, NULL, NULL, '2024-05-30 09:37:55', '2024-05-30 09:37:55', NULL, 1, 5, 1, NULL, 2),
(3, 'Beng, Eng, Math', 'Kheruajani High School', 2011, NULL, NULL, '4', '2024-06-01 05:27:41', '2024-06-01 05:27:41', NULL, 3, 4, NULL, 1, 3),
(4, 'Beng, Eng, Math, Phy, Che', 'Cantonment Public School & College, Momenshahi', 2016, NULL, NULL, '5', '2024-06-01 05:30:32', '2024-06-01 05:30:32', NULL, 2, 7, NULL, 1, 3),
(5, NULL, 'Jatiya Kabi Kazi Nazrul Islam University', 2023, NULL, NULL, '3.20', '2024-06-01 05:32:49', '2024-06-01 05:32:49', NULL, 16, 7, NULL, 2, 3),
(6, 'Science', 'Swaruppur kushumpur High School', 2011, NULL, NULL, '5.00', '2024-06-01 08:24:53', '2024-06-01 08:24:53', NULL, 3, 6, NULL, 1, 4),
(7, 'Science', 'Khagrachari  High School, Khagrachari', 1974, NULL, NULL, NULL, '2024-06-01 13:14:34', '2024-06-01 13:14:34', NULL, 26, 1, 1, NULL, 5),
(8, 'Science', 'SK High School', 1968, NULL, NULL, NULL, '2024-06-01 13:45:32', '2024-06-01 13:45:32', NULL, 3, 6, 4, NULL, 6),
(9, 'Science', 'Khagrachari Govt. High School, Khagrachari', 1970, NULL, NULL, '5', '2024-06-01 13:46:35', '2024-06-01 13:46:35', NULL, 3, 1, NULL, 1, 6),
(10, 'Science', 'Kheruajani High School', 2014, NULL, NULL, '5.00', '2024-06-01 18:23:02', '2024-06-01 18:23:02', NULL, 1, 7, NULL, NULL, 7),
(11, 'Science', 'Cantonment Public School & College, Momenshahi', 2016, NULL, NULL, '5.00', '2024-06-01 18:23:59', '2024-06-01 20:03:00', NULL, 4, 7, NULL, NULL, 7),
(12, 'Science', 'ABC School', 2012, NULL, '1', '4.5', '2024-06-02 09:16:18', '2024-06-02 09:16:18', NULL, 3, 4, NULL, NULL, 8),
(13, 'Science', 'Khagrachari Govt. High School, Khagrachari', 2015, NULL, '3', '4.25', '2024-06-02 09:22:48', '2024-06-02 09:22:48', NULL, 2, 3, NULL, NULL, 7),
(14, 'Bangla ,English , General Math , Elective Math , Science etc.', 'Foujdarhat K.M. High School', 1985, NULL, '1', NULL, '2024-06-02 10:05:57', '2024-06-02 10:05:57', NULL, 3, 2, 2, NULL, 9),
(15, 'Physics , Chemistry , Biology & Mathematics', 'Magura Govt. Hossain Shaheed Sohrawardy College', 1987, NULL, '2', NULL, '2024-06-02 10:09:06', '2024-06-02 10:09:06', NULL, 4, 6, 2, NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `emergence_contactes`
--

CREATE TABLE `emergence_contactes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_person_name` varchar(150) NOT NULL,
  `contact_person_relation` varchar(150) NOT NULL,
  `address` longtext DEFAULT NULL,
  `contact_person_number` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emergence_contactes`
--

INSERT INTO `emergence_contactes` (`id`, `contact_person_name`, `contact_person_relation`, `address`, `contact_person_number`, `created_at`, `updated_at`, `employee_id`) VALUES
(1, 'S. M. Ahsanul Aziz', 'Husband', 'Mirpur-2', '01711170697', '2024-05-27 10:50:43', '2024-05-27 10:50:43', NULL),
(2, 'S. M. Ahsanul Aziz', 'Husband', 'Dhaka', '01711170697', '2024-05-27 13:21:06', '2024-05-27 13:21:06', 1),
(3, 'Kawsary Akter', 'Elder Sister', 'Nokhali DC Office, Noakhali', '01609758377', '2024-06-01 05:37:11', '2024-06-01 05:37:11', 3),
(4, 'Azad', 'Brother', 'Jhenaidah', '01518311454', '2024-06-01 08:30:04', '2024-06-01 08:30:04', 4),
(5, 'S. M. Ahsanul Aziz', 'Brother', NULL, '01711170697', '2024-06-01 13:16:39', '2024-06-01 13:16:39', 5),
(6, 'S. M. Ahsanul Aziz', 'Husband', 'Dhaka', '01711170697', '2024-06-01 13:47:25', '2024-06-01 13:47:25', 6),
(7, 'নুরুজ্জামান', 'ভাই', 'ঢাকা', '০১৯৫৭০৭৩৯৪২', '2024-06-01 18:41:19', '2024-06-01 18:41:19', 7),
(8, 'Kamran', 'Brother', 'Dhaka', '01711170697', '2024-06-02 10:15:03', '2024-06-02 10:15:03', 9);

-- --------------------------------------------------------

--
-- Table structure for table `employee_lists`
--

CREATE TABLE `employee_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeeid` varchar(150) NOT NULL,
  `cadreid` varchar(150) DEFAULT NULL,
  `fullname_bn` varchar(150) NOT NULL,
  `fullname_en` varchar(150) NOT NULL,
  `fname_bn` varchar(150) NOT NULL,
  `fname_en` varchar(150) NOT NULL,
  `mname_bn` varchar(150) NOT NULL,
  `mname_en` varchar(150) NOT NULL,
  `date_of_birth` date NOT NULL,
  `prl_date` date DEFAULT NULL,
  `height` varchar(150) DEFAULT NULL,
  `special_identity` varchar(150) DEFAULT NULL,
  `passport` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `mobile_number` varchar(150) NOT NULL,
  `fjoining_date` date NOT NULL,
  `first_joining_office_name` varchar(150) DEFAULT NULL,
  `first_joining_g_o_date` date DEFAULT NULL,
  `first_joining_memo_no` varchar(150) DEFAULT NULL,
  `date_of_gazette` date DEFAULT NULL,
  `date_of_regularization` date DEFAULT NULL,
  `regularization_issue_date` date DEFAULT NULL,
  `date_of_con_serviec` date DEFAULT NULL,
  `license_number` varchar(150) DEFAULT NULL,
  `approve` varchar(150) DEFAULT NULL,
  `approveby` varchar(150) DEFAULT NULL,
  `nid` decimal(20,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `batch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `home_district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `marital_statu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `religion_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blood_group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `license_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `projectrevenue_id` bigint(20) UNSIGNED DEFAULT NULL,
  `joiningexaminfo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `departmental_exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `grade_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `freedomfighter_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_lists`
--

INSERT INTO `employee_lists` (`id`, `employeeid`, `cadreid`, `fullname_bn`, `fullname_en`, `fname_bn`, `fname_en`, `mname_bn`, `mname_en`, `date_of_birth`, `prl_date`, `height`, `special_identity`, `passport`, `email`, `mobile_number`, `fjoining_date`, `first_joining_office_name`, `first_joining_g_o_date`, `first_joining_memo_no`, `date_of_gazette`, `date_of_regularization`, `regularization_issue_date`, `date_of_con_serviec`, `license_number`, `approve`, `approveby`, `nid`, `created_at`, `updated_at`, `deleted_at`, `batch_id`, `home_district_id`, `marital_statu_id`, `gender_id`, `religion_id`, `blood_group_id`, `license_type_id`, `projectrevenue_id`, `joiningexaminfo_id`, `departmental_exam_id`, `project_id`, `grade_id`, `quota_id`, `freedomfighter_id`) VALUES
(1, '13271', NULL, 'ড. মরিয়ম আক্তার', 'Dr. Mariam Akhter', 'মতিউর রহমান (মৃত)', 'Matiur Rahman (Late)', 'হোসনে আরা বেগম', 'Hosne Ara Begum', '1968-12-31', '2027-12-30', '155', NULL, NULL, 'mariamakter2002@gmail.com', '01711170697', '1995-02-22', 'Development Planning Unit , Bana Bhaban, Agargaon, Dhaka', NULL, NULL, '2024-05-27', '2024-03-13', '2024-05-27', '2019-06-23', NULL, 'Approved', '2', 19682694811012373, '2024-05-27 09:57:48', '2024-05-29 08:51:28', NULL, NULL, 18, 1, 2, 1, 2, 1, NULL, 1, NULL, NULL, NULL, 2, NULL),
(2, '2201210001', '123456', 'jg', 'topgkl', 'hhjj', 'jhkjjk', 'ghyty', 'ytyuj', '1985-05-09', '2044-05-08', '155', NULL, '232344355', 'test@admin.com', '01711170697', '2024-05-30', 'Development Planning Unit , Bana Bhaban, Agargaon, Dhaka', NULL, 'efw4jh', '2024-04-29', NULL, NULL, '2024-05-06', NULL, 'Approved', '2', 1111111111, '2024-05-30 09:20:27', '2024-05-30 09:20:42', NULL, NULL, 40, 1, 1, 1, 4, 2, 2, 2, 1, NULL, 1, 2, NULL),
(3, '2201100001', '4512345', 'কামরান হোসাইন', 'Kamran Hosan', 'মোঃ আব্দুল কদ্দুস', 'Md Abdul Quddus', 'মোছাঃ শরিফা বেগম', 'Mst Sharifa Begum', '1998-02-28', '2057-02-27', '165', NULL, NULL, 'mdkamranhosan98@gmail.com', '01764894771', '2024-05-09', 'Ban Bhaban, Agargaon, Dhaka', NULL, '12/05/24 - 325', '2024-01-04', NULL, NULL, '2024-06-12', NULL, 'Approved', '2', 8456950236, '2024-06-01 05:25:36', '2024-06-01 05:25:44', NULL, 24, 27, 1, 1, 1, 1, NULL, NULL, 2, NULL, NULL, 9, 2, NULL),
(4, '2201210002', '123456', 'নুরুজ্জামান', 'Nurujjaman', 'জালাল উদ্দিন', 'Jalal Uddin', 'নুরজাহান সুলতানা', 'Nurjahan Sultana', '1999-09-21', '2058-09-20', '155', NULL, NULL, 'mdrabbi329@gmail.com', '01957073942', '2024-04-30', 'Development Planning Unit , Bana Bhaban, Agargaon, Dhaka', NULL, 'efw4jh', '2024-04-01', '2024-05-27', '2024-06-03', NULL, NULL, 'Approved', '2', 4204994498, '2024-06-01 08:23:17', '2024-06-01 08:23:33', NULL, 1, 38, 2, 1, 1, 2, 2, NULL, 1, NULL, 7, 8, 1, NULL),
(5, '2201210003', '123456', 'রাফি', 'Rafiul', 'মতিউর রহমান (মৃত)', 'Matiur Rahman (Late)', 'হোসনে আরা বেগম', 'Hosne Ara Begum', '1995-03-06', '2054-03-05', '155', NULL, NULL, 'test@admin.com', '01957073942', '2023-09-13', 'Development Planning Unit , Bana Bhaban, Agargaon, Dhaka', NULL, 'efw4jh', '2023-01-03', NULL, NULL, '2024-01-08', NULL, 'Approved', '3', 6547891236, '2024-06-01 13:07:54', '2024-06-01 13:10:28', NULL, 2, 45, 1, 1, 1, 5, 2, 2, 2, 1, NULL, 7, 2, NULL),
(6, '2201210004', '123456', 'নাঈম হাসান', 'Naim Hasan', 'মতিউর রহমান (মৃত)', 'Matiur Rahman (Late)', 'হোসনে আরা বেগম', 'Hosne Ara Begum', '2009-06-03', '2068-06-02', '155', 'No', NULL, 'test@admin.com', '01957073942', '2023-09-07', NULL, NULL, 'efw4jh', '2023-06-14', '2023-05-23', '2023-08-16', '2023-05-10', NULL, 'Approved', '3', 8989978456, '2024-06-01 13:40:03', '2024-06-01 13:40:28', NULL, 1, 60, 1, 1, 1, 5, 2, NULL, 1, NULL, 3, 12, 4, NULL),
(7, '2201100002', '123456', 'কামরান', 'Kamran', 'আব্দুল কুদ্দুস', 'Abdul Quddus', 'শরিফা বেগম', 'Sharifa Begum', '2024-06-01', '2083-05-31', '165', 'Birth Sign', '12345678', 'kamranraz28@gmail.com', '01764894771', '2024-06-01', 'Ban Bhaban', NULL, '01/06/2024 - 113', '2024-06-01', NULL, NULL, '2024-06-01', NULL, 'Approved', '3', 1234567891, '2024-06-01 18:17:33', '2024-06-01 18:18:16', NULL, 1, 27, 1, 1, 1, 1, 1, 2, 2, 1, NULL, 5, 1, NULL),
(8, '2201100003', '123456', 'রাফিt', 'Rafiult', 'hhjj', 'jhkjjk', 'ghyty', 'ytyuj', '2024-06-04', '2083-06-03', '155', 'No', '789542', 'test@admin.com', '01711170697', '2024-04-30', 'Development Planning Unit , Bana Bhaban, Agargaon, Dhaka', NULL, 'efw4jh', '2024-02-27', '2024-05-13', '2024-05-27', '2024-06-03', NULL, 'Approved', '3', 7894563214, '2024-06-02 09:04:33', '2024-06-02 09:05:07', NULL, 1, 45, 1, 1, 1, 4, 1, NULL, 1, NULL, 5, 5, 1, NULL),
(9, '2201100004', NULL, 'আফরোজা বেগম', 'Afroza Begum', 'মো : আব্দুল খালেক', 'Md. Abdul Khaleque', 'ফিরোজা বেগম', 'Firoza Begum', '1969-11-21', '2028-11-20', '155', NULL, NULL, NULL, '01711170697', '2001-01-31', 'Bana Bhaban , Agargaon , Dhaka', NULL, '09-04-2017', NULL, NULL, NULL, '2017-04-09', NULL, 'Approved', '3', 8692036471, '2024-06-02 10:00:58', '2024-06-02 10:01:22', NULL, NULL, 41, 4, 2, 1, 2, NULL, NULL, 3, NULL, NULL, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_promotions`
--

CREATE TABLE `employee_promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `go_issue_date` date DEFAULT NULL,
  `office_order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `new_designation_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_promotions`
--

INSERT INTO `employee_promotions` (`id`, `go_issue_date`, `office_order_date`, `created_at`, `updated_at`, `deleted_at`, `employee_id`, `new_designation_id`) VALUES
(1, '2023-05-26', '2025-05-27', '2024-05-27 12:05:34', '2024-05-27 13:35:36', '2024-05-27 13:35:36', NULL, 1),
(2, '2024-05-27', '2024-05-28', '2024-05-27 13:35:10', '2024-05-27 13:35:10', NULL, 1, 1),
(3, '2024-05-29', '2024-05-29', '2024-06-01 05:43:24', '2024-06-01 05:43:24', NULL, 3, 10),
(4, '2019-01-01', '2019-01-01', '2024-06-01 08:34:30', '2024-06-01 08:34:30', NULL, 4, 15),
(5, '2023-02-08', '2023-03-29', '2024-06-01 13:19:56', '2024-06-01 13:19:56', NULL, 5, 14),
(6, '2019-01-30', '2022-04-02', '2024-06-01 13:50:35', '2024-06-01 13:50:35', NULL, 6, 15),
(7, '2024-06-01', '2024-06-01', '2024-06-01 18:53:21', '2024-06-01 18:53:21', NULL, 7, 16),
(8, NULL, '2012-11-15', '2024-06-02 10:24:03', '2024-06-02 10:24:03', NULL, 9, 11);

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examinations`
--

INSERT INTO `examinations` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`) VALUES
(2, 'জেএসসি/জেডিসি/অষ্টম শ্রেণী', 'JSC/JDC/8 pass', '2024-05-27 01:01:53', '2024-05-30 09:45:02'),
(3, 'মাধ্যমিক', 'Secondary', '2024-05-27 01:01:53', '2024-05-30 09:44:51'),
(4, 'উচ্চ মাধ্যমিক', 'Higher Secondary', '2024-05-27 01:01:53', '2024-05-30 09:44:39'),
(5, 'ডিপ্লোমা', 'Diploma', '2024-05-27 01:01:53', '2024-05-30 09:44:27'),
(6, 'ব্যাচেলর/সম্মান', 'Bachelor/Honors', '2024-05-27 01:01:53', '2024-05-30 09:44:16'),
(7, 'মাস্টার্স', 'Masters', '2024-05-27 01:01:53', '2024-05-30 09:43:52'),
(8, 'পিএইচডি (ডক্টর অব ফিলোসফি)', 'PhD (Doctor of Philosophy)', '2024-05-27 01:01:53', '2024-05-30 09:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `exam_boards`
--

CREATE TABLE `exam_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `examination_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_boards`
--

INSERT INTO `exam_boards` (`id`, `name_bn`, `name_en`, `description`, `created_at`, `updated_at`, `examination_id`) VALUES
(1, 'বরিশাল', 'Barishal', NULL, '2024-05-27 01:01:53', '2024-05-30 13:40:23', NULL),
(2, 'চট্টগ্রাম', 'Chattogram', NULL, '2024-05-27 01:01:53', '2024-05-30 13:40:06', NULL),
(3, 'কুমিল্লা', 'Cumilla', NULL, '2024-05-27 01:01:53', '2024-05-30 13:39:00', NULL),
(4, 'ঢাকা', 'Dhaka', NULL, '2024-05-27 01:01:53', '2024-05-30 13:38:45', NULL),
(5, 'দিনাজপুর', 'Dinajpur', NULL, '2024-05-27 01:01:53', '2024-05-30 13:38:25', NULL),
(6, 'যশোর', 'Jashore', NULL, '2024-05-27 01:01:53', '2024-05-30 13:38:08', NULL),
(7, 'ময়মনসিংহ', 'Mymensingh', NULL, '2024-05-27 01:01:53', '2024-05-30 13:37:51', NULL),
(8, 'রাজশাহী', 'Rajshahi', NULL, '2024-05-27 01:01:53', '2024-05-30 13:37:33', NULL),
(9, 'সিলেট', 'Sylhet', NULL, '2024-05-27 01:01:53', '2024-05-30 13:37:07', NULL),
(10, 'বাংলাদেশ মাদ্রাসা শিক্ষা বোর্ড', 'Bangladesh Madrasah Education Board', 'Madrasah', '2024-05-27 01:01:53', '2024-05-30 13:36:41', NULL),
(11, 'বাংলাদেশ কারিগরি শিক্ষা বোর্ড', 'Bangladesh Technical Education Board', NULL, '2024-05-27 01:01:53', '2024-05-30 13:35:28', NULL),
(12, 'বাংলাদেশ উন্মুক্ত বিশ্ববিদ্যালয়', 'Bangladesh Open University', NULL, '2024-05-27 01:01:53', '2024-05-30 13:33:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_degrees`
--

CREATE TABLE `exam_degrees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `examination_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_degrees`
--

INSERT INTO `exam_degrees` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`, `examination_id`) VALUES
(1, 'এসএসসি', 'SSC', '2024-05-27 10:12:32', '2024-05-27 10:12:32', NULL, 3),
(2, 'এইচএসসি', 'HSC', '2024-05-27 10:14:41', '2024-05-27 10:14:41', NULL, 4),
(3, 'জেএসসি', 'JSC', '2024-05-30 10:10:13', '2024-05-30 10:10:13', NULL, 2),
(4, 'জেডিসি', 'JDC', '2024-05-30 10:10:49', '2024-05-30 10:10:49', NULL, 2),
(5, 'অষ্টম শ্রেণী', 'Class 8', '2024-05-30 10:13:16', '2024-05-30 10:13:16', NULL, 2),
(6, 'এসএসসি', 'SSC', '2024-05-30 10:14:39', '2024-05-30 10:18:24', '2024-05-30 10:18:24', 3),
(7, 'এইচএসসি', 'HSC', '2024-05-30 10:15:05', '2024-05-30 10:16:47', '2024-05-30 10:16:47', 3),
(8, 'দাখিল', 'Dakhil', '2024-05-30 10:16:36', '2024-05-30 10:27:14', NULL, 3),
(9, 'ও-লেভেল', 'O-Level', '2024-05-30 10:17:22', '2024-05-30 10:17:22', NULL, 3),
(10, 'এইচএসসি', 'HSC', '2024-05-30 10:19:42', '2024-05-30 10:19:53', '2024-05-30 10:19:53', 4),
(11, 'আলিম', 'Alim', '2024-05-30 10:20:23', '2024-05-30 10:20:23', NULL, 4),
(12, 'এ-লেভেল', 'A-level', '2024-05-30 10:22:40', '2024-05-30 10:22:40', NULL, 4),
(13, 'ভোকেশনাল', 'Vocational', '2024-05-30 10:29:23', '2024-05-30 10:29:23', NULL, 3),
(14, 'ভোকেশনাল', 'Vocational', '2024-05-30 10:31:05', '2024-05-30 10:38:13', NULL, 4),
(15, 'ব্যাচেলর অফ আর্টস', 'Bachelor of Arts', '2024-05-30 10:40:49', '2024-05-30 10:43:29', '2024-05-30 10:43:29', 6),
(16, 'কম্পিউটার সায়েন্স অ্যান্ড ইঞ্জিনিয়ারিং', 'Computer Science and Engineering', '2024-05-30 10:44:40', '2024-05-30 10:44:40', NULL, 6),
(17, 'ইলেকট্রিক্যাল অ্যান্ড ইলেকট্রনিক্স ইঞ্জিনিয়ারিং', 'Electrical and Electronics Engineering', '2024-05-30 10:46:20', '2024-05-30 10:46:20', NULL, 6),
(18, 'অর্থনীতি', 'Economics', '2024-05-30 10:47:11', '2024-05-30 10:47:11', NULL, 6),
(19, 'পরিসংখ্যান', 'Statistics', '2024-05-30 10:48:29', '2024-05-30 10:48:29', NULL, 6),
(20, 'ব্যবসায় প্রশাসন (বিবিএ)', 'Business Administration (BBA)', '2024-05-30 10:51:55', '2024-05-30 10:51:55', NULL, 6),
(21, 'ব্যবসায় প্রশাসন (বিবিএ)', 'Business Administration (BBA)', '2024-05-30 10:59:46', '2024-05-30 10:59:46', NULL, 7),
(22, 'পরিসংখ্যান', 'Statistics', '2024-05-30 11:00:48', '2024-05-30 11:00:48', NULL, 7),
(23, 'অর্থনীতি', 'Economics', '2024-05-30 11:01:20', '2024-05-30 11:01:20', NULL, 7),
(24, 'ইলেকট্রিক্যাল অ্যান্ড ইলেকট্রনিক্স ইঞ্জিনিয়ারিং', 'Electrical and Electronics Engineering', '2024-05-30 11:02:09', '2024-05-30 11:02:09', NULL, 7),
(25, 'কম্পিউটার সায়েন্স অ্যান্ড ইঞ্জিনিয়ারিং', 'Computer Science and Engineering', '2024-05-30 11:03:05', '2024-05-30 11:03:05', NULL, 7),
(26, 'পিএসসি', 'PSC', '2024-05-30 11:08:55', '2024-05-30 11:08:55', NULL, 1),
(27, 'কম্পিউটার সায়েন্স অ্যান্ড ইঞ্জিনিয়ারিং', 'Computer Science and Engineering', '2024-05-30 11:10:50', '2024-05-30 11:10:50', NULL, 5),
(28, 'ইলেকট্রিক্যাল অ্যান্ড ইলেকট্রনিক্স ইঞ্জিনিয়ারিং', 'Electrical and Electronics Engineering', '2024-05-30 11:11:49', '2024-05-30 11:11:49', NULL, 5),
(29, 'সিভিল ইঞ্জিনিয়ারিং', 'Civil Engineering', '2024-05-30 11:13:01', '2024-05-30 11:13:01', NULL, 5),
(30, 'টেক্সটাইল ইঞ্জিনিয়ারিং', 'Textile Engineering', '2024-05-30 11:14:05', '2024-05-30 11:14:05', NULL, 5),
(31, 'পিএইচডি (ডক্টর অফ ফিলোসফি)', 'PHD (Doctor of Philosophy)', '2024-05-30 11:16:27', '2024-05-30 11:16:27', NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `extracurriculams`
--

CREATE TABLE `extracurriculams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_name` varchar(150) NOT NULL,
  `organization` varchar(150) DEFAULT NULL,
  `position` varchar(150) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extracurriculams`
--

INSERT INTO `extracurriculams` (`id`, `activity_name`, `organization`, `position`, `start_date`, `end_date`, `description`, `created_at`, `updated_at`, `employee_id`) VALUES
(1, 'Bangladesh', 'k', 'ff', '2024-05-31', '2024-06-02', '<p>Nothing</p>', '2024-05-27 12:57:57', '2024-05-31 13:35:33', 1),
(2, 'CSE Fest Organiser', 'Det of CSE', 'Organiser', '2023-06-01', '2023-06-03', NULL, '2024-06-01 05:50:00', '2024-06-01 05:50:00', 3),
(3, 'Bangladesh', 'DCC', 'Demo', '2024-02-26', '2024-04-02', NULL, '2024-06-01 08:38:32', '2024-06-01 08:38:32', 4),
(4, 'Bangladesh', 'DCC', 'Demo', '2023-09-12', '2024-03-06', NULL, '2024-06-01 13:23:36', '2024-06-01 13:23:36', 5),
(5, 'Bangladesh', 'DCC', 'Demo', '2020-01-29', '2021-04-02', NULL, '2024-06-01 13:55:36', '2024-06-01 13:55:36', NULL),
(6, 'Bangladesh', 'DCC', 'Demo', '2020-02-27', '2024-05-29', '<p>OK</p>', '2024-06-01 14:03:09', '2024-06-01 14:03:09', 6),
(7, 'CSE fest', 'CSE', 'Organizer', '2024-06-01', '2024-06-13', '<p>CSE &amp; Forest</p>', '2024-06-01 19:04:57', '2024-06-01 19:04:57', 7),
(8, 'Sports', 'Ban Bhaban', NULL, NULL, NULL, '<p>Ban Bhaban</p>', '2024-06-02 10:37:04', '2024-06-02 10:37:04', 9);

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_questions`
--

CREATE TABLE `faq_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext DEFAULT NULL,
  `answer` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foreign_travel_personals`
--

CREATE TABLE `foreign_travel_personals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `leave_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `purpose_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foreign_travel_personals`
--

INSERT INTO `foreign_travel_personals` (`id`, `title`, `from_date`, `to_date`, `created_at`, `updated_at`, `country_id`, `leave_id`, `employee_id`, `purpose_id`) VALUES
(1, NULL, '2024-05-27', '2024-05-29', '2024-05-27 12:50:00', '2024-05-27 12:50:00', 76, 1, 1, ''),
(2, 'Personal Tour', '2024-06-01', '2024-06-01', '2024-06-01 05:48:26', '2024-06-01 05:48:26', 123, 2, 3, ''),
(3, NULL, '2024-04-08', '2024-04-19', '2024-06-01 08:37:58', '2024-06-01 08:37:58', 14, 3, 4, ''),
(4, 'ডেমো', '2023-11-07', '2024-06-04', '2024-06-01 13:23:15', '2024-06-01 13:23:15', 1, 2, 5, 'সঠিক'),
(5, 'Demo', '2024-06-01', '2024-05-28', '2024-06-01 13:55:09', '2024-06-01 13:55:09', 2, 2, 6, 'Demo'),
(6, 'Seminar on National Forest Program', '2024-06-01', '2024-06-06', '2024-06-01 19:01:42', '2024-06-01 19:01:42', 76, 6, 7, 'Nothing-2'),
(7, 'Mangrove for the Future Regional Steeing Comittee Meeting', '2024-06-01', '2024-06-12', '2024-06-01 19:02:55', '2024-06-01 19:02:55', 76, 4, 7, 'Nothing'),
(8, 'Development of National Land Cover Monitoring System for Bangladesh', '2019-10-14', '2019-10-18', '2024-06-02 10:32:43', '2024-06-02 10:32:43', 14, 1, 9, 'Training');

-- --------------------------------------------------------

--
-- Table structure for table `forest_beats`
--

CREATE TABLE `forest_beats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `forest_range_id` bigint(20) UNSIGNED DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `upazila_id` int(11) DEFAULT NULL,
  `grocode` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `forest_state_id` int(11) DEFAULT NULL,
  `forest_division_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forest_beats`
--

INSERT INTO `forest_beats` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`, `forest_range_id`, `division_id`, `district_id`, `upazila_id`, `grocode`, `status_id`, `forest_state_id`, `forest_division_id`) VALUES
(1, 'বাগেরহাট সদর', 'BAGERHAT SADAR', '2015-11-15 17:01:41', '2023-06-21 07:39:02', NULL, 35, 4, 35, 1, 8, 1, 4, 20),
(5, 'মোল্লাহাট', 'MOLLAHAT', '2015-11-15 17:01:41', '2023-06-21 07:39:38', NULL, 35, 4, 35, 5, 56, 1, 4, 20),
(8, 'রামপাল', 'RAMPAL', '2015-11-15 17:01:41', '2023-06-21 07:38:34', NULL, 35, 4, 35, 8, 73, 1, 4, 20),
(9, 'শরনখোলা', 'SARANKHOLA', '2015-11-15 17:01:41', '2023-06-21 07:37:43', NULL, 35, 4, 35, 9, 77, 1, 4, 20),
(33, 'বোরহানউদ্দীন', 'BURHANUDDIN', '2015-11-15 17:01:41', '2023-06-22 02:59:02', NULL, 3, 1, 3, 33, 21, 1, 3, 31),
(71, 'কালুখালী', 'KALUKHALI', '2015-11-15 17:01:41', '2023-06-21 06:27:57', NULL, 31, 3, 31, 400, 47, 1, 1, 21),
(80, 'রাউজানঢালা বিট', 'RAOZANDHALA BIT', '2015-11-15 17:01:41', '2023-06-21 23:30:12', NULL, 179, 2, 10, 79, 74, 1, 6, 2),
(83, 'সীতাকুন্ড বিট', 'SITAKUNDA Bit', '2015-11-15 17:01:41', '2023-06-21 23:42:08', NULL, 162, 2, 10, 83, 86, 1, 6, 2),
(84, 'আলমডাঙ্গা', 'ALAMDANGA', '2015-11-15 17:01:41', '2023-06-21 07:13:49', NULL, 36, 4, 36, 84, 7, 1, 4, 19),
(85, 'চুয়াডাঙ্গা সদর', 'CHUADANGA SADAR', '2015-11-15 17:01:41', '2023-06-21 07:14:24', NULL, 36, 4, 36, 85, 23, 1, 4, 19),
(86, 'দামুড়হুদা', 'DAMURHUDA', NULL, '2023-06-21 07:14:55', NULL, 36, 4, 36, 86, 31, 1, 4, 19),
(87, 'জীবন নগর', 'JIBAN NAGAR', '2015-11-15 17:01:41', '2023-06-21 07:15:22', NULL, 36, 4, 36, 87, 55, 1, 4, 19),
(118, 'বিরামপুর', 'BIRAMPUR', '2015-11-15 17:01:41', '2023-06-21 05:05:07', NULL, 131, 6, 53, 118, 10, 1, 8, 11),
(119, 'বীরগঞ্জ', 'BIRGANJ', '2015-11-15 17:01:41', '2023-06-21 06:50:18', NULL, 60, 6, 53, 119, 12, 1, 8, 11),
(122, 'চিরিরবন্দর', 'CHIRIRBANDAR', '2015-11-15 17:01:41', '2023-06-21 04:31:42', NULL, 132, 6, 53, 122, 30, 1, 8, 11),
(127, 'খানসামা', 'KHANSAMA', '2015-11-15 17:01:41', '2023-06-21 04:34:22', NULL, 132, 6, 53, 127, 60, 1, 8, 11),
(131, 'আলফাডাঙ্গা', 'ALFADANGA', '2015-11-15 17:01:41', '2023-06-21 09:25:32', NULL, 168, 3, 19, 135, 3, 1, 4, 21),
(135, 'ফরিদপুর সদর', 'FARIDPUR SADAR', '2015-11-15 17:01:41', '2023-06-21 09:22:21', NULL, 168, 3, 19, 135, 47, 1, 4, 21),
(136, 'মধুখালী', 'MADHUKHALI', '2015-11-15 17:01:41', '2023-06-21 09:30:06', NULL, 168, 3, 19, 135, 56, 1, 4, 21),
(139, 'ছাগলনাইয়া', 'CHHAGALNAIYA', '2015-11-15 17:01:41', '2023-06-21 04:40:54', NULL, 136, 2, 13, 139, 14, 1, 2, 16),
(140, 'দাগনভূঞাঁ', 'DAGANBHUIYAN', '2015-11-15 17:01:41', '2023-06-21 04:38:56', NULL, 135, 2, 13, 140, 25, 1, 2, 16),
(142, 'ফুলগাজী', 'FULGAZI', '2015-11-15 17:01:41', '2023-06-21 04:43:52', NULL, 138, 2, 13, 142, 41, 1, 6, 16),
(143, 'পরশুরাম', 'PARSHURAM', '2015-11-15 17:01:41', '2023-06-21 04:42:48', NULL, 138, 2, 13, 143, 51, 1, 2, 16),
(145, 'ফুলছড়ি এসএফপিসি', 'FULCHHARI SFPC', '2015-11-15 17:01:41', '2022-08-09 15:49:49', NULL, 54, 6, 54, 145, 21, 1, 8, 6),
(146, 'গাইবান্ধা সদর', 'GAIBANDHA SADAR', '2015-11-15 17:01:41', '2022-08-09 15:45:06', NULL, 54, 6, 54, 146, 24, 1, 8, 6),
(147, 'গোবিন্দগঞ্জ এসএফপিসি', 'GOBINDAGANJ SFPC', '2015-11-15 17:01:41', '2022-08-09 15:48:37', NULL, 54, 6, 54, 147, 30, 1, 8, 6),
(148, 'পলাশবাড়ী এসএফপিসি', 'PALASHBARI SFPC', '2015-11-15 17:01:41', '2022-08-09 15:48:00', NULL, 54, 6, 54, 148, 67, 1, 8, 6),
(149, 'সাদুল্যাপুর এসএফপিসি', 'SADULLAPUR SFPC', '2015-11-15 17:01:41', '2023-06-21 07:39:40', NULL, 54, 6, 54, 149, 82, 1, 8, 6),
(150, 'সাঘাটা এসএফপিসি', 'SAGHATA SFPC', '2015-11-15 17:01:41', '2023-07-05 06:37:13', NULL, 54, 6, 54, 150, 88, 1, 8, 6),
(151, 'সুন্দরগঞ্জ এসএফপিসি', 'SUNDARGANJ SFPC', '2015-11-15 17:01:41', '2022-08-09 15:45:45', NULL, 54, 6, 54, 151, 91, 1, 8, 6),
(152, 'গাজীপুর সদর এসএফপিসি', 'GAZIPUR SADAR SFPC', '2015-11-15 17:01:41', '2023-06-20 15:13:09', NULL, 81, 3, 20, 152, 30, 1, 1, 3),
(153, 'কালিয়াকৈর এসএফপিসি', 'KALIAKAIR SFPC', '2015-11-15 17:01:41', '2023-06-20 10:36:11', NULL, 81, 3, 20, 153, 32, 1, 1, 3),
(158, 'কাশিয়ানী', 'KASHIANI', '2015-11-15 17:01:41', '2023-06-21 09:29:11', NULL, 21, 3, 21, 157, 43, 1, 4, 21),
(159, 'কোটালীপাড়া', 'KOTALIPARA', '2015-11-15 17:01:41', '2023-06-21 09:42:43', NULL, 21, 3, 21, 157, 51, 1, 4, 21),
(182, 'অভয়নগর', 'ABHAYNAGAR', '2015-11-15 17:01:41', '2023-06-21 04:50:43', NULL, 37, 4, 37, 182, 4, 1, 4, 18),
(183, 'বাঘারপাড়া', 'BAGHERPARA', '2015-11-15 17:01:41', '2023-06-21 04:50:08', NULL, 37, 4, 37, 183, 9, 1, 4, 18),
(184, 'চৌগাছা', 'CHAUGACHHA', '2015-11-15 17:01:41', '2023-06-21 04:54:16', NULL, 140, 4, 37, 189, 11, 1, 4, 18),
(186, 'কেশবপুর', 'KESHABPUR', '2015-11-15 17:01:41', '2023-06-21 04:51:48', NULL, 37, 4, 37, 186, 38, 1, 4, 18),
(187, 'যশোর সদর', 'JASHORE SADAR', '2015-11-15 17:01:41', '2023-06-21 04:49:15', NULL, 37, 4, 37, 187, 47, 1, 4, 18),
(188, 'মনিরামপুর', 'MANIRAMPUR', '2015-11-15 17:01:41', '2023-06-21 04:51:16', NULL, 37, 4, 37, 188, 61, 1, 4, 18),
(194, 'হরিণাকুন্ড', 'HARINAKUNDA', '2015-11-15 17:01:41', '2023-06-21 04:58:02', NULL, 38, 4, 38, 194, 14, 1, 4, 18),
(195, 'ঝিনাইদহ সদর', 'JHENAIDAH SADAR', '2015-11-15 17:01:41', '2023-06-21 06:52:17', NULL, 38, 4, 38, 195, 19, 1, 4, 18),
(197, 'কোটচাঁদপুর', 'KOTCHANDPUR', '2015-11-15 17:01:41', '2023-06-21 05:01:31', NULL, 142, 4, 38, 197, 42, 1, 4, 18),
(209, 'দাকোপ', 'DAKOP', NULL, '2023-06-21 07:40:53', NULL, 39, 4, 39, 209, 17, 1, 4, 20),
(231, 'ভুরুঙ্গামারী এসএফপিসি', 'BHURUNGAMARI SFPC', '2015-11-15 17:01:41', '2022-08-09 15:42:13', NULL, 55, 6, 55, 231, 6, 1, 8, 6),
(232, 'রাজিবপুর এসএফপিসি', 'RAJIBPUR SFPC', '2015-11-15 17:01:41', '2022-08-09 15:43:09', NULL, 55, 6, 55, 232, 8, 1, 8, 6),
(233, 'চিলমারী এসএফপিসি', 'CHILMARI SFPC', '2015-11-15 17:01:41', '2022-08-09 15:39:54', NULL, 55, 6, 55, 233, 9, 1, 8, 6),
(234, 'ফুলবাড়ী এসএফপিসি', 'PHULBARI SFPC', '2015-11-15 17:01:41', '2022-08-09 15:40:28', NULL, 55, 6, 55, 234, 18, 1, 8, 6),
(235, 'কুড়িগ্রাম সদর', 'KURIGRAM SADAR', '2015-11-15 17:01:41', '2022-08-09 15:38:22', NULL, 55, 6, 55, 235, 52, 1, 8, 6),
(236, 'নাগেশ্বরী এসএফপিসি', 'NAGESHWARI SFPC', '2015-11-15 17:01:41', '2022-08-09 15:37:13', NULL, 55, 6, 55, 236, 61, 1, 8, 6),
(237, 'রাজারহাট এসএফপিসি', 'RAJARHAT SFPC', '2015-11-15 17:01:41', '2022-08-09 08:57:13', NULL, 55, 6, 55, 237, 77, 1, 8, 6),
(238, 'রৌমারী এসএফপিসি', 'RAUMARI SFPC', '2015-11-15 17:01:41', '2022-08-09 08:55:31', NULL, 55, 6, 55, 238, 79, 1, 8, 6),
(239, 'উলিপুর এসএফপিসি', 'ULIPUR SFPC', '2015-11-15 17:01:41', '2022-08-09 08:54:53', NULL, 55, 6, 55, 239, 94, 1, 8, 6),
(241, 'দৌলতপুর', 'DAULATPUR', '2015-11-15 17:01:41', '2023-06-21 07:28:28', NULL, 40, 4, 40, 241, 39, 1, 4, 19),
(242, 'খোক্‌সা', 'KHOKSA', '2015-11-15 17:01:41', '2023-06-21 07:26:51', NULL, 147, 4, 40, 242, 63, 1, 4, 19),
(243, 'কুমারখালী', 'KUMARKHALI', NULL, '2023-06-21 07:26:10', NULL, 147, 4, 40, 243, 71, 1, 4, 19),
(245, 'মিরপুর', 'MIRPUR', '2015-11-15 17:01:41', '2023-06-21 07:19:19', NULL, 40, 4, 40, 245, 94, 1, 4, 19),
(251, 'অদিতমারী এসএফপিসি', 'ADITMARI SFPC', '2015-11-15 17:01:41', '2022-08-09 08:52:17', NULL, 56, 6, 56, 251, 2, 1, 8, 6),
(252, 'হাতীবান্ধা এসএফপিসি', 'HATIBANDHA SFPC', '2015-11-15 17:01:41', '2022-08-09 08:51:40', NULL, 56, 6, 56, 252, 33, 1, 8, 6),
(253, 'কালীগঞ্জ এসএফপিসি', 'KALIGANJ SFPC', '2015-11-15 17:01:41', '2023-06-20 10:44:04', NULL, 81, 3, 20, 154, 39, 1, 8, 3),
(254, 'লালমনিরহাট সদর', 'LALMONIRHAT SADAR', '2015-11-15 17:01:41', '2022-08-09 16:13:37', NULL, 56, 6, 56, 254, 55, 1, 8, 6),
(255, 'পাটগ্রাম এসএফপিসি', 'PATGRAM SFPC', '2015-11-15 17:01:41', '2022-08-09 08:49:33', NULL, 56, 6, 56, 255, 70, 1, 8, 6),
(258, 'রাজৈর', 'RAJOIR', '2015-11-15 17:01:41', '2023-06-21 09:36:54', NULL, 24, 3, 24, 258, 80, 1, 4, 21),
(261, 'মহম্মদপুর', 'MOHAMMADPUR', '2015-11-15 17:01:41', '2023-06-21 06:58:17', NULL, 41, 4, 41, 261, 66, 1, 4, 18),
(271, 'গাংনী', 'GANGNI', '2015-11-15 17:01:41', '2023-06-21 07:16:07', NULL, 42, 4, 42, 271, 47, 1, 4, 19),
(273, 'মেহেরপুর সদর', 'MEHERPUR SADAR', '2015-11-15 17:01:41', '2023-06-21 07:16:49', NULL, 42, 4, 42, 273, 87, 1, 4, 19),
(284, 'সিরাজদীখান', 'SERAJDIKHAN', '2015-11-15 17:01:41', '2023-06-21 04:04:00', NULL, 26, 3, 26, 284, 74, 1, 2, 14),
(285, 'শ্রীনগর', 'SREENAGAR', '2015-11-15 17:01:41', '2023-06-21 04:05:29', NULL, 26, 3, 26, 285, 84, 1, 2, 14),
(286, 'টঙ্গিবাড়ী', 'TONGIBARI', NULL, '2023-06-21 04:06:21', NULL, 26, 3, 26, 286, 94, 1, 2, 14),
(310, 'কালিয়া', 'KALIA', '2015-11-15 17:01:41', '2023-06-21 09:14:15', NULL, 163, 4, 43, 310, 28, 1, 4, 18),
(313, 'আড়াইহাজার এস এফ পি সি', 'ARAIHAZAR SFPC', '2015-11-15 17:01:41', '2023-05-02 10:42:01', NULL, 29, 3, 28, 313, 2, 1, 2, 14),
(314, 'সোনারগাঁ এসএফপিসি', 'SONARGAON SFPC', '2015-11-15 17:01:41', '2023-06-21 03:08:51', NULL, 79, 3, 28, 314, 4, 1, 2, 14),
(317, 'রূপগঞ্জ এস এফ পি সি', 'RUPGANJ SFPC', '2015-11-15 17:01:41', '2022-09-13 07:46:27', NULL, 79, 3, 28, 317, 68, 1, 2, 14),
(345, 'ডিম্‌লা এসএফপিসি', 'DIMLA SFPC', '2015-11-15 17:01:41', '2022-08-08 22:19:33', NULL, 57, 6, 57, 345, 12, 1, 8, 6),
(346, 'ডোমার সদর বিট', 'Domar Sadar Beat', '2015-11-15 17:01:41', '2022-08-09 19:18:52', NULL, 76, 6, 57, 346, 15, 1, 8, 6),
(347, 'জলঢাকা এসএফপিসি', 'JALDHAKA SFPC', '2015-11-15 17:01:41', '2022-08-08 22:16:51', NULL, 57, 6, 57, 347, 36, 1, 8, 6),
(348, 'কিশোরগঞ্জ এসএফপিসি', 'KISHOREGANJ SFPC', '2015-11-15 17:01:41', '2022-08-08 22:15:58', NULL, 57, 6, 57, 348, 45, 1, 8, 6),
(349, 'নীলফামারী সদর', 'NILPHAMARI SADAR', '2015-11-15 17:01:41', '2022-08-08 22:15:30', NULL, 57, 6, 57, 349, 64, 1, 8, 6),
(350, 'সৈয়দপুর এসএফপিসি', 'SAIDPUR SFPC', '2015-11-15 17:01:41', '2022-08-08 22:15:06', NULL, 57, 6, 57, 350, 85, 1, 8, 6),
(370, 'বোদা', 'BODA', '2015-11-15 17:01:41', '2023-06-21 07:15:16', NULL, 145, 6, 58, 370, 25, 1, 8, 11),
(411, 'বদরগঞ্জ এসএফপিসি', 'BADARGANJ SFPC', '2015-11-15 17:01:41', '2022-08-08 22:13:59', NULL, 59, 6, 59, 411, 3, 1, 8, 6),
(412, 'গংগাচড়া এসএফপিসি', 'GANGACHARA SFPC', '2015-11-15 17:01:41', '2022-08-08 22:13:07', NULL, 59, 6, 59, 412, 27, 1, 8, 6),
(413, 'কাউনিয়া এসএফপিসি', 'KAUNIA SFPC', '2015-11-15 17:01:41', '2022-08-08 22:12:13', NULL, 59, 6, 59, 413, 42, 1, 8, 6),
(414, 'রংপুর সদর', 'RANGPUR SADAR', '2015-11-15 17:01:41', '2022-08-08 22:09:37', NULL, 59, 6, 59, 414, 49, 1, 8, 6),
(415, 'মিঠাপুকুর এসএফপিসি', 'MITHA PUKUR SFPC', '2015-11-15 17:01:41', '2022-08-08 22:07:56', NULL, 59, 6, 59, 415, 58, 1, 8, 6),
(416, 'পীরগাছা এসএফপিসি', 'PIRGACHHA SFPC', '2015-11-15 17:01:41', '2022-08-08 22:07:02', NULL, 59, 6, 59, 416, 73, 1, 8, 6),
(417, 'পীরগঞ্জ এসএফপিসি', 'PIRGANJ SFPC', '2015-11-15 17:01:41', '2023-07-05 06:36:43', NULL, 59, 6, 59, 417, 88, 1, 8, 6),
(418, 'তারাগঞ্জ এসএফপিসি', 'TARAGANJ SFPC', '2015-11-15 17:01:41', '2022-08-08 22:05:33', NULL, 59, 6, 59, 418, 92, 1, 8, 6),
(419, 'ভেদরগঞ্জ', 'BHEDARGANJ', '2015-11-15 17:01:41', '2023-06-21 09:39:49', NULL, 32, 3, 32, 423, 14, 1, 4, 21),
(424, 'জাজিরা', 'ZANJIRA', '2015-11-15 17:01:41', '2023-06-21 09:40:48', NULL, 32, 3, 32, 423, 94, 1, 4, 21),
(425, 'আশাশুনি', 'ASSASUNI', '2015-11-15 17:01:41', '2023-06-21 05:16:38', NULL, 44, 4, 44, 425, 4, 1, 4, 18),
(428, 'কালীগঞ্জ', 'KALIGANJ', '2015-11-15 17:01:41', '2023-06-21 05:18:35', NULL, 44, 4, 38, 196, 47, 1, 4, 18),
(430, 'শ্যামনগর', 'SHYAMNAGAR', '2015-11-15 17:01:41', '2023-06-21 05:17:23', NULL, 44, 4, 44, 430, 86, 1, 4, 18),
(431, 'তালা', 'TALA', '2015-11-15 17:01:41', '2023-06-21 05:12:37', NULL, 44, 4, 44, 431, 90, 1, 4, 18),
(436, 'রায়গঞ্জ', 'Raiganj', '2015-11-15 17:01:41', '2023-06-21 03:22:26', NULL, 117, 5, 52, 436, 61, 1, 8, 13),
(482, 'হরিপুর', 'HARIPUR', '2015-11-15 17:01:41', '2023-06-21 04:53:18', NULL, 131, 6, 53, 129, 51, 1, 8, 11),
(486, 'সালথা', 'SALTHA', '2015-11-15 17:01:41', '2023-06-21 09:26:12', NULL, 168, 3, 19, 135, 90, 1, 4, 21),
(516, 'টেস্ট এসএফপিসি', 'Test SFPC', '2022-10-16 12:37:54', '2022-10-16 12:37:54', NULL, 79, 3, 28, 314, 1001, 1, 8, 14),
(517, 'চন্দ্রা বিট', 'Chandra Bit', '2023-06-20 09:58:05', '2023-06-20 09:58:05', NULL, 80, 3, 20, 153, 2346, 1, 2, 3),
(518, 'মৌচাক বিট', 'Mouchak Bit', '2023-06-20 10:14:51', '2023-06-20 10:14:51', NULL, 80, 3, 20, 153, 2347, 1, 1, 3),
(519, 'বোয়ালী বিট', 'Boali Bit', '2023-06-20 10:16:10', '2023-06-20 10:16:10', NULL, 80, 3, 20, 153, 2348, 1, 1, 3),
(520, 'রঘুনাথপুর বিট', 'Raghunathpur Bit', '2023-06-20 10:17:29', '2023-06-20 10:17:29', NULL, 80, 3, 20, 153, 2349, 1, 1, 3),
(521, 'কাশিমপুর বিট', 'Kashimpur Bit', '2023-06-20 10:19:35', '2023-06-20 10:19:35', NULL, 80, 3, 20, 152, 2350, 1, 1, 3),
(522, 'কাচিঘাটা সদর বিট', 'Kachighata Sadar Bit', '2023-06-20 14:42:35', '2023-06-20 14:42:35', NULL, 82, 3, 20, 153, 2363, 1, 1, 3),
(523, 'জাথিলা বিট', 'Jathila Bit', '2023-06-20 14:43:57', '2023-06-20 14:43:57', NULL, 82, 3, 20, 153, 2634, 1, 1, 3),
(524, 'খালিশাজানী বিট', 'Khalishajani Bit', '2023-06-20 14:45:17', '2023-06-20 14:45:17', NULL, 82, 3, 20, 153, 2365, 1, 1, 3),
(525, 'সালনা বিট কাম চেকস্টেশন', 'Salna Bit Kam Checkstation', '2023-06-20 14:50:57', '2023-06-20 14:50:57', NULL, 83, 3, 20, 152, 2371, 1, 1, 3),
(526, 'রাজেন্দ্রপুর পূর্ব বিট', 'Rajendrapur Purbo Bit', '2023-06-20 14:52:30', '2023-06-20 14:52:30', NULL, 83, 3, 20, 156, 2372, 1, 1, 3),
(527, 'সূর্যনারায়নপুর বিট', 'Surjonarayanpur Bit', '2023-06-20 14:54:54', '2023-06-20 14:54:54', NULL, 83, 3, 20, 155, 2373, 1, 1, 3),
(528, 'মনিপুর বিট', 'Monipur Bit', '2023-06-20 14:56:15', '2023-06-20 14:56:15', NULL, 83, 3, 20, 152, 2374, 1, 1, 3),
(529, 'শ্রীপুর সদর বিট', 'Sreepur Sadar Bit', '2023-06-20 15:01:49', '2023-06-20 15:01:49', NULL, 84, 3, 20, 156, 2380, 1, 1, 3),
(530, 'শিংড়াতলী বিট', 'Singratoli Bit', '2023-06-20 15:03:36', '2023-06-20 15:03:36', NULL, 84, 3, 20, 156, 2381, 1, 1, 3),
(531, 'গোসিংগা বিট', 'Gusinggha Bit', '2023-06-20 15:05:04', '2023-06-20 15:05:04', NULL, 84, 3, 20, 156, 2382, 1, 1, 3),
(532, 'সাতখামাইর বিট', 'Shatkhamair Bit', '2023-06-20 15:06:18', '2023-06-20 15:06:18', NULL, 84, 3, 20, 156, 2383, 1, 1, 3),
(533, 'কাওরাইদ বিট', 'Kawraid Bit', '2023-06-20 15:07:24', '2023-06-20 15:07:24', NULL, 84, 3, 20, 156, 2384, 1, 1, 3),
(534, 'শিমলাপাড়া বিট', 'Shimlapara Bit', '2023-06-20 15:08:13', '2023-06-20 15:08:13', NULL, 84, 3, 20, 156, 2385, 1, 1, 3),
(535, 'রাথুরা বিট', 'Rathura bit', '2023-06-20 15:09:06', '2023-06-20 15:09:06', NULL, 84, 3, 20, 156, 2386, 1, 1, 3),
(536, 'সন্তোষপুর', 'Santoshpur', '2023-06-20 15:20:30', '2023-06-20 15:20:30', NULL, 85, 9, 27, 289, 2397, 1, 1, 9),
(537, 'হালুয়াঘাট', 'Haluaghat', '2023-06-20 15:31:55', '2023-06-20 15:31:55', NULL, 86, 9, 27, 292, 2398, 1, 1, 9),
(538, 'সদর বিট', 'Sadara Bit', '2023-06-20 15:35:52', '2023-06-20 15:35:52', NULL, 87, 9, 33, 445, 2399, 1, 1, 9),
(539, 'ডুমুরতলা বিট', 'Dumurthola Bit', '2023-06-20 16:00:01', '2023-06-20 16:00:01', NULL, 88, 9, 33, 500, 2400, 1, 1, 9),
(540, 'গজনী', 'Ghazni', '2023-06-20 16:01:09', '2023-06-20 16:01:09', NULL, 89, 9, 33, 441, 2401, 1, 1, 9),
(541, 'সমেষচুড়া', 'Shumeshchura', '2023-06-20 16:04:23', '2023-06-20 16:04:23', NULL, 90, 9, 33, 443, 2403, 1, 1, 9),
(542, 'বাতকুচি বিট', 'Bhatkhuchi Bit', '2023-06-20 16:05:48', '2023-06-20 16:05:48', NULL, 90, 9, 33, 443, 2404, 1, 1, 9),
(543, 'সদর বিট', 'Sadar Bit', '2023-06-20 16:08:16', '2023-06-20 16:08:16', NULL, 91, 9, 30, 337, 2405, 1, 1, 9),
(544, 'ভেদিকুড়া বিট', 'Vedhikura Bit', '2023-06-20 16:09:55', '2023-06-20 16:09:55', NULL, 91, 9, 30, 337, 2406, 1, 1, 9),
(545, 'লেঙ্গুড়া বিট', 'Lengura Bit', '2023-06-20 16:11:03', '2023-07-05 09:56:31', NULL, 91, 9, 30, 337, 412, 1, 1, 9),
(546, 'সদর বিট', 'Sadar Bit', '2023-06-20 16:14:31', '2023-06-20 16:14:31', NULL, 92, 9, 27, 287, 2408, 1, 1, 9),
(547, 'আঙ্গারগাড়া বিট', 'Angargara Bit', '2023-06-20 16:15:56', '2023-06-20 16:15:56', NULL, 92, 9, 27, 287, 2409, 1, 1, 9),
(548, 'গোপালপুর বিট', 'Gopalpur Bit', '2023-06-20 16:19:36', '2023-07-05 06:37:56', NULL, 93, 9, 33, 443, 24, 1, 1, 9),
(549, 'কিশোরগঞ্জ', 'Kishoreganj', '2023-06-20 16:24:03', '2023-06-20 16:24:03', NULL, 94, 3, 23, 225, 24516, 1, 1, 9),
(550, 'তাড়াইল', 'Tarail', '2023-06-20 16:26:40', '2023-06-20 16:26:40', NULL, 95, 3, 23, 230, 2418, 1, 1, 9),
(551, 'সদর বিট', 'Sadara Bit', '2023-06-20 16:35:36', '2023-06-20 16:35:36', NULL, 85, 9, 27, 295, 23920, 1, 1, 9),
(552, 'কাদিগড়', 'Kadigarh', '2023-06-20 16:43:08', '2023-06-20 16:43:08', NULL, 96, 9, 27, 287, 24520, 1, 1, 9),
(553, 'এনায়েতপুর বিট', 'Enayetpur Bit', '2023-06-20 16:49:00', '2023-06-20 16:49:00', NULL, 97, 9, 27, 289, 20615, 1, 1, 9),
(554, 'বিজয়পুর বিট', 'Bijoy Bit', '2023-06-20 16:54:24', '2023-06-20 16:54:24', NULL, 91, 9, 30, 337, 1214, 1, 1, 9),
(555, 'কৃষি বিশ্ববিদ্যালয়', 'Agricultural University', '2023-06-20 17:00:31', '2023-06-20 17:00:31', NULL, 98, 9, 27, 294, 1452, 1, 1, 9),
(556, 'নেত্রকোনা', 'Netrakona', '2023-06-20 17:04:35', '2023-06-20 17:04:35', NULL, 99, 9, 30, 343, 17201, 1, 1, 9),
(557, 'করিমগঞ্জ', 'Karimganj', '2023-06-20 17:08:02', '2023-06-20 17:08:02', NULL, 100, 3, 23, 223, 10230, 1, 1, 9),
(558, 'মালাকোচা বিট', 'Malacocha Bit', '2023-06-20 17:14:17', '2023-06-20 17:14:17', NULL, 88, 9, 33, 445, 1542, 1, 1, 9),
(559, 'ধলাপাড়া সদর', 'Dhalapara Sadar', '2023-06-21 02:15:27', '2023-06-21 02:15:27', NULL, 101, 3, 34, 473, 1657, 1, 1, 10),
(560, 'সাগরদিঘী', 'Sagardighi', '2023-06-21 02:17:12', '2023-06-21 02:17:12', NULL, 101, 3, 34, 473, 1798, 1, 1, 10),
(561, 'দেওপাড়া', 'Deopara', '2023-06-21 02:25:55', '2023-06-21 02:25:55', NULL, 101, 3, 34, 473, 1487, 1, 1, 10),
(562, 'হেলেঞ্চা বিট', 'Helencha Bit', '2023-06-21 02:26:17', '2023-06-21 02:26:17', NULL, 102, 6, 59, 415, 6011, 1, 1, 6),
(563, 'ঝাড়বিশলা বিট', 'Jharabisala Bit', '2023-06-21 02:36:03', '2023-06-21 07:46:31', NULL, 102, 6, 59, 417, 60102, 1, 8, 6),
(564, 'বাজাইল', 'Bazail', '2023-06-21 02:41:09', '2023-06-21 02:41:09', NULL, 104, 3, 34, 479, 4569, 1, 8, 10),
(565, 'কাকড়াজান', 'Kakrajan', '2023-06-21 02:45:52', '2023-06-21 02:45:52', NULL, 106, 3, 34, 479, 7954, 1, 1, 10),
(566, 'নন্দীগ্রাম এসএফপিসি', 'Nandigram SFPC', '2023-06-21 02:45:53', '2023-07-05 07:28:33', NULL, 105, 5, 45, 45, 11, 1, 8, 12),
(567, 'শেরপুর এসএফপিসি', 'Sherpur SFPC', '2023-06-21 02:50:24', '2023-06-21 02:50:24', NULL, 107, 5, 45, 48, 651, 1, 8, 12),
(568, 'দুপচাঁচিয়া এসএফপিসি', 'Dupchanchia SFPC', '2023-06-21 02:54:23', '2023-06-21 02:54:23', NULL, 108, 5, 45, 42, 6501, 1, 8, 12),
(569, 'গাছাবাড়ী', 'Gachabari', '2023-06-21 02:55:34', '2023-06-21 02:55:34', NULL, 109, 3, 34, 476, 4689, 1, 8, 10),
(570, 'শিবগঞ্জ এসএফপিসি', 'Shibganj SFPC', '2023-06-21 02:58:20', '2023-06-21 02:58:20', NULL, 110, 5, 45, 49, 5601, 1, 1, 12),
(571, 'চাড়ালজানী', 'Chadaljani', '2023-06-21 02:59:55', '2023-06-21 02:59:55', NULL, 111, 3, 34, 476, 7895, 1, 8, 10),
(572, 'মহিষমারা', 'Mahishmara', '2023-06-21 03:01:28', '2023-06-21 03:01:28', NULL, 111, 3, 34, 476, 7895, 1, 1, 10),
(573, 'আক্কেলপুর এসএফপিসি', 'Akkelpur SFPC', '2023-06-21 03:01:28', '2023-06-21 03:01:28', NULL, 112, 5, 46, 170, 6520, 1, 1, 12),
(574, 'বটতলী', 'Battali', '2023-06-21 03:05:15', '2023-06-21 03:05:15', NULL, 101, 3, 34, 473, 7895, 1, 8, 10),
(575, 'ক্ষেতলাল এসএফপিসি', 'Khetlal SFPC', '2023-06-21 03:05:41', '2023-06-21 03:05:41', NULL, 113, 5, 46, 173, 532, 1, 1, 12),
(576, 'কড়ইচালা', 'Karichala', '2023-06-21 03:07:24', '2023-07-05 09:58:56', NULL, 104, 3, 34, 479, 158, 1, 1, 10),
(577, 'কালমেঘা', 'Kalmegha', '2023-06-21 03:08:46', '2023-06-21 03:08:46', NULL, 104, 3, 34, 479, 4582, 1, 1, 10),
(578, 'কালাই এসএফপিসি', 'Kalai SFPC', '2023-06-21 03:08:59', '2023-06-21 03:08:59', NULL, 114, 5, 46, 172, 3540, 1, 1, 12),
(579, 'বহেড়াতলী সদর', 'Baheratli Sadar', '2023-06-21 03:10:44', '2023-06-21 03:10:44', NULL, 106, 3, 34, 479, 7894, 1, 8, 10),
(580, 'ডিবি গজারিয়া', 'D.B. Ghazaria', '2023-06-21 03:12:28', '2023-06-21 03:12:28', NULL, 106, 3, 34, 479, 9845, 1, 1, 10),
(581, 'সাথিয়া', 'Santhia', '2023-06-21 03:17:11', '2023-06-21 03:17:11', NULL, 115, 5, 50, 368, 7501, 1, 1, 13),
(582, 'হতেয়া সদর', 'Hateya', '2023-06-21 03:17:12', '2023-06-21 03:17:12', NULL, 104, 3, 34, 479, 6548, 1, 8, 10),
(583, 'সিরাজগঞ্জ সদর', 'Sirajganj Sadara', '2023-06-21 03:19:45', '2023-06-21 03:19:45', NULL, 116, 5, 52, 438, 7510, 1, 1, 13),
(584, 'এম এম চালা', 'MM Chala', '2023-06-21 03:21:03', '2023-06-21 03:21:03', NULL, 106, 3, 34, 479, 3548, 1, 8, 10),
(585, 'জাতীয় উদ্যান সদর', 'National Botanical Garden Sadar', '2023-06-21 03:25:16', '2023-06-21 03:25:16', NULL, 111, 3, 34, 476, 6589, 1, 1, 10),
(586, 'কাজীপুর', 'Kazipur', '2023-06-21 03:26:51', '2023-06-21 03:26:51', NULL, 118, 5, 52, 435, 7520, 1, 1, 13),
(587, 'গোদাগাড়ী এসএফপিসি', 'Godagari SFPC', '2023-06-21 03:30:40', '2023-06-21 03:30:40', NULL, 119, 5, 51, 392, 9500, 1, 8, 5),
(588, 'দোখলা সদর বিট', 'Dokhla Sadar Beat', '2023-06-21 03:32:41', '2023-06-21 03:47:49', NULL, 120, 3, 34, 476, 785, 1, 1, 10),
(589, 'নিয়ামতপুর এসএফপিসি', 'Niamatpur SFPC', '2023-06-21 03:33:33', '2023-06-21 03:33:33', NULL, 121, 5, 47, 305, 9510, 1, 1, 5),
(590, 'নওগাঁ এসএফপিসি', 'Naogaon SFPC', '2023-06-21 03:37:32', '2023-06-21 03:37:32', NULL, 122, 5, 47, 304, 9530, 1, 8, 5),
(591, 'ঝড়কা বিট', 'Jharka Beat', '2023-06-21 03:38:07', '2023-06-21 03:46:58', NULL, 101, 3, 34, 473, 365, 1, 1, 10),
(592, 'পত্নীতলা বিট', 'Potnitola Bit', '2023-06-21 03:41:15', '2023-07-05 09:58:18', NULL, 123, 5, 47, 306, 174, 1, 8, 5),
(593, 'নলুয়া', 'Nalua', '2023-06-21 03:41:16', '2023-07-05 09:57:41', NULL, 124, 3, 34, 479, 175, 1, 1, 10),
(594, 'পাথরঘাটা বিট', 'Patharghata Beat', '2023-06-21 03:42:40', '2023-06-21 03:47:24', NULL, 124, 3, 34, 479, 3654, 1, 1, 10),
(595, 'ধামেইরহাট বিট', 'Dhamoirhat Bit', '2023-06-21 03:44:49', '2023-06-21 03:44:49', NULL, 125, 5, 47, 301, 95010, 1, 1, 5),
(596, 'কালিদাস বিট', 'Kalidas Beat', '2023-06-21 03:46:22', '2023-06-21 03:46:22', NULL, 104, 3, 34, 479, 963, 1, 8, 10),
(597, 'সদর বিট, কোটবাড়ি', 'Sadara Bit, Kotbari', '2023-06-21 03:49:10', '2023-06-21 03:49:10', NULL, 126, 2, 11, 93, 5500, 1, 1, 15),
(598, 'যশপুর বিট', 'Jashpur Bit', '2023-06-21 03:50:03', '2023-06-21 03:50:24', NULL, 126, 2, 11, 93, 5501, 1, 2, 15),
(599, 'কচুয়া বিট', 'Kachua Beat', '2023-06-21 03:50:57', '2023-06-21 03:50:57', NULL, 106, 3, 34, 479, 658, 1, 2, 10),
(600, 'নাঙ্গলকোট এসএফপিসি', 'Nangalkot SFPC', '2023-06-21 03:51:29', '2023-06-21 03:51:29', NULL, 126, 2, 11, 93, 5502, 1, 1, 15),
(601, 'লাকসাম এসএফপিসি', 'Laksam SFPC', '2023-06-21 03:53:47', '2023-06-21 07:51:19', NULL, 126, 2, 11, 93, 5502, 1, 2, 15),
(602, 'সদর বিট', 'Sadar Beat', '2023-06-21 03:54:56', '2023-06-21 03:54:56', NULL, 127, 3, 34, 476, 7536, 1, 2, 10),
(603, 'শাহরাস্তি এসএফপিসি', 'Shahrasti SFPC', '2023-06-21 03:57:44', '2023-06-21 03:57:44', NULL, 128, 2, 9, 66, 55020, 1, 1, 15),
(605, 'ফেনী সদর', 'Feni Sadar', '2023-06-21 04:26:12', '2023-06-21 04:26:12', NULL, 130, 2, 13, 141, 8500, 1, 2, 16),
(606, 'সদর', 'Sadar', '2023-06-21 04:27:35', '2023-06-21 04:27:35', NULL, 132, 6, 53, 128, 786, 1, 2, 11),
(607, 'সোনাগাজী', 'Sonagazi', '2023-06-21 04:30:49', '2023-06-21 04:33:07', NULL, 133, 2, 13, 144, 8500, 1, 2, 16),
(608, 'ফুলবাড়ি', 'Fulbari', '2023-06-21 04:37:35', '2023-06-21 04:37:35', NULL, 134, 6, 53, 123, 6531, 1, 2, 11),
(609, 'ভবানীপুর', 'Bhowanipore', '2023-06-21 04:39:28', '2023-06-21 04:39:28', NULL, 53, 6, 53, 123, 651, 1, 8, 11),
(610, 'ভবানীপুর', 'Bhowanipore', '2023-06-21 04:43:04', '2023-06-21 04:43:04', NULL, 137, 6, 53, 130, 957, 1, 8, 11),
(611, 'আফতাবগঞ্জ', 'Aftabgonj', '2023-06-21 04:46:52', '2023-06-21 04:46:52', NULL, 139, 6, 53, 129, 3629, 1, 8, 11),
(612, 'নবাবগঞ্জ', 'Nawabganj', '2023-06-21 04:50:53', '2023-06-21 04:50:53', NULL, 131, 6, 53, 129, 9635, 1, 8, 11),
(613, 'কালিগঞ্জ', 'Kaliganj', '2023-06-21 05:04:20', '2023-06-21 05:04:20', NULL, 142, 4, 38, 196, 4673, 1, 8, 18),
(614, 'সদর', 'Sadara', '2023-06-21 06:20:03', '2023-07-05 06:34:13', NULL, 26, 3, 26, 283, 50, 1, 2, 14),
(615, 'সদর', 'Sadar', '2023-06-21 06:23:32', '2023-07-05 10:00:23', NULL, 141, 6, 53, 118, 196, 1, 8, 11),
(616, 'ধর্মপুর', 'Dharmopur', '2023-06-21 06:26:50', '2023-06-21 06:26:50', NULL, 143, 6, 53, 120, 5494, 1, 8, 11),
(617, 'ভাদুরিয়া', 'Bhaduria', '2023-06-21 06:32:40', '2023-06-21 06:32:40', NULL, 131, 6, 53, 129, 9875, 1, 8, 11),
(618, 'প্রায়াগপুর', 'Prayagpur', '2023-06-21 06:34:59', '2023-06-21 06:34:59', NULL, 53, 6, 53, 118, 7895, 1, 8, 11),
(619, 'সদর', 'Sadar', '2023-06-21 06:38:14', '2023-06-21 06:38:14', NULL, 134, 6, 53, 130, 346, 1, 8, 11),
(620, 'হরিপুর', 'Haripur', '2023-06-21 06:47:59', '2023-06-21 06:47:59', NULL, 139, 6, 53, 129, 315, 1, 8, 11),
(621, 'রাণীশংকৈল', 'Ranisankail', '2023-06-21 06:55:10', '2023-06-21 06:55:10', NULL, 144, 6, 60, 484, 336, 1, 8, 11),
(622, 'পীরগঞ্জ', 'Pirganj', '2023-06-21 07:11:01', '2023-06-21 07:11:01', NULL, 144, 6, 60, 483, 333, 1, 8, 11),
(623, 'সদর', 'Sadar', '2023-06-21 07:23:58', '2023-07-05 07:42:17', NULL, 145, 6, 58, 371, 647, 1, 8, 11),
(624, 'সদর', 'Sadar', '2023-06-21 07:29:32', '2023-06-21 07:29:32', NULL, 148, 6, 58, 372, 3426, 1, 8, 11),
(625, 'বাঘারপাড়া', 'Bagherpara', '2023-06-21 08:36:01', '2023-06-21 08:36:01', NULL, 151, 4, 37, 183, 7851, 1, 8, 18),
(626, 'সদর বিট রাংঙ্গীপাড়া বিট', 'Sadar Bit Rangipara Bit', '2023-06-21 08:38:56', '2023-06-21 08:38:56', NULL, 152, 2, 17, 401, 2010, 1, 4, 2),
(627, 'মারিশ্যা বিট', 'Marishya Bit', '2023-06-21 08:41:53', '2023-06-21 08:41:53', NULL, 153, 2, 17, 401, 2012, 1, 6, 2),
(628, 'মহম্মদপুর', 'Mohammadpur', '2023-06-21 08:44:50', '2023-06-21 08:44:50', NULL, 154, 4, 41, 261, 111, 1, 6, 18),
(629, 'কাপ্তই সদর বিট', 'Kaptai Sadara Range Bit', '2023-06-21 08:44:59', '2023-06-21 08:44:59', NULL, 155, 2, 17, 405, 2300, 1, 4, 24),
(630, 'রামপাহাড় বিট', 'Rampahar Bit', '2023-06-21 08:46:09', '2023-06-21 08:46:09', NULL, 155, 2, 17, 405, 2302, 1, 6, 24),
(631, 'ব্যাঙ্গাছড়ি বিট', 'Bangachori Bit', '2023-06-21 08:47:09', '2023-06-21 08:47:09', NULL, 155, 2, 17, 405, 2303, 1, 6, 24),
(632, 'কামিল্যাছড়ি বিট', 'Kamilachri Bit', '2023-06-21 08:48:01', '2023-06-21 08:48:01', NULL, 155, 2, 17, 405, 2304, 1, 6, 24),
(633, 'কর্ণফুলি সদর বিট', 'Karnaphuli Sadara Bit', '2023-06-21 08:50:33', '2023-06-21 08:50:33', NULL, 158, 2, 17, 405, 2330, 1, 6, 24),
(634, 'কাপ্তাইমুখ বিট', 'Kaptaimukh bit', '2023-06-21 08:52:50', '2023-06-21 08:52:50', NULL, 158, 2, 17, 405, 2330, 1, 6, 24),
(635, 'আলিখিয়ং সদর বিট', 'Alikhiyong Sadara Bit', '2023-06-21 08:58:30', '2023-06-21 08:58:30', NULL, 159, 2, 17, 405, 2340, 1, 6, 24),
(636, 'শুক্কুরছড়ি বিট', 'Shukurchori Bit', '2023-06-21 09:01:17', '2023-06-21 09:01:17', NULL, 160, 2, 17, 405, 2350, 1, 6, 24),
(637, 'কুমিরা সদর বিট', 'Kumira Sadara Bit', '2023-06-21 09:09:13', '2023-06-21 09:09:13', NULL, 161, 2, 10, 83, 2060, 1, 6, 2),
(638, 'ফৌজদার হাট বিট', 'Faujdarhat Bit', '2023-06-21 09:10:43', '2023-06-21 09:10:43', NULL, 161, 2, 10, 83, 2062, 1, 6, 2),
(639, 'বারৈয়াঢালা বিট', 'Baraiyadhala Bit', '2023-06-21 09:12:43', '2023-06-21 09:12:43', NULL, 162, 2, 10, 75, 2050, 1, 6, 2),
(640, 'বালুখালী বিট', 'Balukhali bit', '2023-06-21 09:14:19', '2023-06-21 09:14:19', NULL, 164, 2, 10, 72, 2070, 1, 6, 2),
(641, 'দাঁতমারা বিট', 'Dantmara Bit', '2023-06-21 09:15:12', '2023-06-21 09:15:12', NULL, 164, 2, 10, 72, 2072, 1, 6, 2),
(642, 'করেরহাট বিট', 'Kararhat Bit', '2023-06-21 09:17:47', '2023-06-21 09:17:47', NULL, 165, 2, 10, 75, 2093, 1, 6, 2),
(643, 'গোবানিয়া বিট', 'Gobaniya Bit', '2023-06-21 09:19:26', '2023-06-21 09:19:26', NULL, 167, 2, 10, 75, 21101, 1, 6, 2),
(645, 'হিংগুলি বিট', 'Hinguli Bit', '2023-06-21 09:23:06', '2023-06-21 09:23:06', NULL, 167, 2, 10, 75, 2119, 1, 6, 2),
(646, 'ফটিকছড়ি বিট', 'Fatikchhari Bit', '2023-06-21 09:25:07', '2023-06-21 09:25:07', NULL, 169, 2, 10, 72, 2330, 1, 6, 2),
(647, 'বারমাসিয়া বিট', 'Baramasia  Bit', '2023-06-21 09:26:20', '2023-06-21 09:26:20', NULL, 169, 2, 10, 72, 23301, 1, 6, 2),
(648, 'হাজারীখিল বিট', 'Hazarikhil Bit', '2023-06-21 09:27:36', '2023-06-21 09:27:36', NULL, 169, 2, 10, 72, 23307, 1, 6, 2),
(649, 'হাটহাজারী বিট', 'Hathazari Bit', '2023-06-21 09:31:26', '2023-06-21 09:31:26', NULL, 170, 2, 10, 73, 2660, 1, 6, 2),
(650, 'মন্দাকিনি বিট', 'Mondakini Bit', '2023-06-21 09:32:59', '2023-06-21 09:32:59', NULL, 170, 2, 10, 73, 2667, 1, 6, 2),
(651, 'শোভনছড়ি বিট', 'Shovanchari Bit', '2023-06-21 09:35:10', '2023-06-21 09:35:10', NULL, 170, 2, 10, 73, 2669, 1, 6, 2),
(652, 'সর্তা বিট', 'Sharta Bit', '2023-06-21 09:36:51', '2023-06-21 09:36:51', NULL, 170, 2, 10, 73, 298, 1, 6, 2),
(653, 'অলিনগর বিট', 'Olinagar Bit', '2023-06-21 09:39:53', '2023-06-21 09:39:53', NULL, 172, 2, 10, 75, 20301, 1, 6, 2),
(654, 'শিতলপুর বিট', 'Sitalpur Bit', '2023-06-21 09:41:02', '2023-06-21 09:41:02', NULL, 172, 2, 10, 75, 20307, 1, 6, 2),
(655, 'বারকুন্ড বিট', 'Barabkunda Bit', '2023-06-21 09:42:12', '2023-06-21 09:42:12', NULL, 172, 2, 10, 75, 20301, 1, 6, 2),
(656, 'ফৌজদার হাট বিট', 'Faujdarhat Bit', '2023-06-21 09:43:02', '2023-06-21 09:43:02', NULL, 172, 2, 10, 75, 2038, 1, 6, 2),
(657, 'ধুরং বিট', 'Dhaurang Bit', '2023-06-21 09:51:03', '2023-06-21 09:51:03', NULL, 164, 2, 10, 72, 2077, 1, 6, 2),
(658, 'কয়লা বিট', 'Koyla bit', '2023-06-21 09:53:17', '2023-06-21 09:53:17', NULL, 165, 2, 10, 75, 2018, 1, 6, 2),
(659, 'বারবাকিয়া', 'Barabakia', '2023-06-21 09:53:21', '2023-06-21 09:53:21', NULL, 173, 2, 12, 108, 1221, 1, 6, 24),
(660, 'পাহাড়চান্দা', 'Paharchanda', '2023-06-21 09:56:12', '2023-06-21 09:56:12', NULL, 174, 2, 12, 104, 3113, 1, 6, 24),
(661, 'হাসনাবাদ বিট', 'Hasnabad Bit', '2023-06-21 09:56:53', '2023-07-05 06:36:19', NULL, 175, 2, 10, 72, 202, 1, 6, 2),
(662, 'নারায়ন হাট বিট', 'Narayan Hat Bit', '2023-06-21 09:59:08', '2023-06-21 09:59:08', NULL, 164, 2, 10, 72, 2075, 1, 6, 2),
(663, 'ধোপাছড়ি', 'Dhopachari', '2023-06-21 10:00:07', '2023-06-21 10:00:07', NULL, 176, 2, 10, 70, 3654, 1, 6, 24),
(664, 'জোরারগঞ্জ বিট', 'Zorargonj Bit', '2023-06-21 10:00:39', '2023-06-21 10:00:39', NULL, 167, 2, 10, 75, 2110, 1, 6, 2),
(665, 'লালুটিয়া', 'Lalutia', '2023-06-21 10:03:25', '2023-06-21 10:03:25', NULL, 176, 2, 10, 70, 6666, 1, 6, 24),
(666, 'সাংগু', 'Sangu', '2023-06-21 10:04:52', '2023-06-21 10:04:52', NULL, 176, 2, 10, 70, 4567, 1, 6, 24),
(667, 'খুরুশিয়া', 'Khurasiya', '2023-06-21 10:07:59', '2023-06-21 10:07:59', NULL, 177, 2, 10, 79, 362, 1, 6, 24),
(668, 'সুখবিলাস', 'Sukhbilas', '2023-06-21 10:09:30', '2023-06-21 10:09:30', NULL, 177, 2, 10, 79, 6542, 1, 6, 24),
(669, 'নারিশ্চা', 'Narishcha', '2023-06-21 10:12:05', '2023-06-21 10:12:05', NULL, 178, 2, 10, 79, 9856, 1, 6, 24),
(670, 'ইছামতি বিট', 'Ichamati Bit', '2023-06-21 23:27:49', '2023-06-21 23:27:49', NULL, 179, 2, 10, 79, 2031, 1, 6, 2),
(671, 'নিশ্চিন্তপুর বিট', 'Nischinta Pur Bit', '2023-06-21 23:34:01', '2023-06-21 23:34:01', NULL, 179, 2, 10, 79, 2032, 1, 6, 2),
(672, 'বারড়কুন্ড বিট', 'Barrkundo Bit', '2023-06-21 23:36:20', '2023-06-21 23:36:20', NULL, 161, 2, 10, 83, 2069, 1, 6, 2),
(673, 'ফৌজদার হাট বিট', 'Faujdarhat Bit', '2023-06-21 23:37:29', '2023-06-21 23:38:02', NULL, 161, 2, 10, 83, 2010, 1, 6, 2),
(674, 'বড়তাকিয়া বিট', 'Baratakia Bit', '2023-06-21 23:39:26', '2023-06-21 23:39:26', NULL, 162, 2, 10, 83, 2056, 1, 6, 2),
(675, 'বাড়বকুন্ড বিট', 'Barabkunda Bit', '2023-06-21 23:40:59', '2023-06-21 23:40:59', NULL, 162, 2, 10, 83, 2010, 1, 6, 2),
(676, 'তারাখোঁ বিট', 'Tarakhon Bit', '2023-06-21 23:51:01', '2023-06-21 23:51:01', NULL, 175, 2, 10, 83, 2023, 1, 6, 2),
(677, 'হাংগর', 'Haangor', '2023-06-22 02:15:23', '2023-06-22 02:15:23', NULL, 180, 2, 10, 74, 23303, 1, 6, 24),
(678, 'টংকাবতি', 'Togkaboti', '2023-06-22 02:17:08', '2023-06-22 02:17:08', NULL, 180, 2, 10, 74, 23310, 1, 6, 24),
(679, 'চিড়িংগা', 'Chiringa', '2023-06-22 02:18:00', '2023-06-22 02:18:00', NULL, 178, 2, 10, 79, 9635, 1, 6, 24),
(680, 'বরগুনি', 'Brguni', '2023-06-22 02:19:33', '2023-06-22 02:19:33', NULL, 181, 2, 10, 78, 2311, 1, 6, 24),
(681, 'সাধনপুর', 'Sadhanpur', '2023-06-22 02:21:07', '2023-06-22 02:21:07', NULL, 182, 2, 10, 68, 8889, 1, 6, 24),
(682, 'বড়দুয়ারা', 'Boroduyara', '2023-06-22 02:21:50', '2023-06-22 02:22:20', NULL, 180, 2, 10, 82, 2339, 1, 6, 24),
(683, 'ডলু', 'Dalu', '2023-06-22 02:23:54', '2023-06-22 02:23:54', NULL, 180, 2, 10, 74, 23310, 1, 6, 24),
(684, 'কেলিশহর', 'Kelishahar', '2023-06-22 02:25:43', '2023-06-22 02:25:43', NULL, 181, 2, 10, 78, 2301, 1, 6, 24),
(685, 'ভান্ডালজুড়ি', 'Vandaljuri', '2023-06-22 02:27:00', '2023-07-05 06:35:13', NULL, 181, 2, 10, 69, 65, 1, 6, 24),
(686, 'সাতগড়', 'Satgarh', '2023-06-22 02:27:45', '2023-06-22 02:27:45', NULL, 183, 2, 10, 74, 456, 1, 6, 24),
(688, 'হারবাং', 'Harbang', '2023-06-22 02:37:34', '2023-06-22 02:37:34', NULL, 183, 2, 12, 104, 6530, 1, 6, 24),
(689, 'মাদার্শা', 'Madarsha', '2023-06-22 02:40:44', '2023-06-22 02:40:44', NULL, 185, 2, 10, 82, 2390, 1, 6, 24),
(690, 'বড়মাদ্রা', 'Boromadra', '2023-06-22 02:42:26', '2023-06-22 02:42:26', NULL, 185, 2, 10, 82, 2390, 1, 6, 24),
(691, 'চুড়ামনি', 'Churamoni', '2023-06-22 02:43:30', '2023-06-22 02:43:30', NULL, 185, 2, 10, 82, 2394, 1, 6, 24),
(692, 'ঢালচর সদর বিট', 'Dhalchar Sadara Bit', '2023-06-22 03:01:54', '2023-06-22 03:01:54', NULL, 187, 1, 3, 34, 3600, 1, 6, 31),
(693, 'কালকিনি বিট', 'Kalkini Bit', '2023-06-22 03:03:48', '2023-06-22 03:03:48', NULL, 187, 1, 3, 34, 3601, 1, 3, 31),
(694, 'হারবাং', 'Harbang', '2023-06-22 03:06:15', '2023-06-22 03:06:15', NULL, 186, 2, 12, 104, 636, 1, 3, 24),
(695, 'লালমোহন উপজেলা নার্সারী কেন্দ্র', 'Lalmohan Upazila Narsari Center', '2023-06-22 03:07:05', '2023-06-22 03:07:05', NULL, 188, 1, 3, 36, 3630, 1, 6, 31),
(696, 'কচুয়খালী বন কেন্দ্র', 'Kchuoakhali Bun center', '2023-06-22 03:09:04', '2023-06-22 03:09:04', NULL, 188, 1, 3, 36, 3631, 1, 3, 31),
(697, 'শশীগঞ্জ বিট', 'Shoshigonj Bit', '2023-06-22 03:12:27', '2023-06-22 03:12:27', NULL, 189, 1, 3, 35, 3640, 1, 3, 31),
(698, 'চরজহিরউদ্দিন বিট', 'Chrjohiruddin Bit', '2023-06-22 03:15:03', '2023-06-22 03:15:03', NULL, 189, 1, 3, 35, 3642, 1, 3, 31),
(699, 'বাংলা বাজার বন কেন্দ্র', 'Bangla Bazar Forest Center', '2023-06-22 03:16:35', '2023-06-22 03:16:35', NULL, 189, 1, 3, 35, 3643, 1, 3, 31),
(700, 'তজুমদ্দিন এসএফপিসি', 'Tazumuddin SFPC', '2023-06-22 03:18:08', '2023-06-22 03:18:08', NULL, 189, 1, 3, 35, 3644, 1, 3, 31),
(701, 'পচাকোড়ালিয়া বিট', 'Ponchakoralia Bit', '2023-06-22 03:21:32', '2023-06-22 03:21:32', NULL, 190, 1, 3, 37, 3601, 1, 3, 31),
(702, 'তুলাতলী বন কেন্দ্র', 'Tultoli Forest Center', '2023-06-22 03:25:09', '2023-06-22 03:25:09', NULL, 189, 1, 3, 35, 3643, 1, 3, 31),
(703, 'বেতুয়া বন কেন্দ্র', 'Betuwa Forest Center', '2023-06-22 03:32:50', '2023-06-22 03:32:50', NULL, 191, 1, 3, 34, 3660, 1, 3, 31),
(704, 'বাশিরদোন বিট', 'Bashirdon Bit', '2023-06-22 03:34:12', '2023-06-22 03:34:12', NULL, 191, 1, 3, 34, 3661, 1, 3, 31),
(705, 'চর মানিকা বিট', 'Chor Manika Bit', '2023-06-22 03:35:09', '2023-06-22 03:35:09', NULL, 191, 1, 3, 34, 3662, 1, 3, 31),
(706, 'কুকরী মুকরী সদর বিট', 'Kukri Mukri Sadara Bit', '2023-06-22 03:37:03', '2023-06-22 03:37:03', NULL, 192, 1, 3, 34, 3670, 1, 3, 31),
(707, 'পাতিলা বিট', 'Patila Bit', '2023-06-22 03:37:57', '2023-06-22 03:37:57', NULL, 192, 1, 3, 34, 3672, 1, 3, 31),
(708, 'চর কালাম বিট', 'Chor Kalam Bit', '2023-06-22 03:41:21', '2023-06-22 03:41:21', NULL, 193, 2, 16, 354, 3300, 1, 3, 30),
(709, 'ওছখালী বিট', 'Ochkhali Bit', '2023-06-22 03:44:15', '2023-06-22 03:44:15', NULL, 194, 2, 16, 354, 3310, 1, 3, 30),
(710, 'চর আলীম বিট', 'Chor Alim Bit', '2023-06-22 03:46:08', '2023-06-22 03:46:08', NULL, 195, 2, 16, 354, 3360, 1, 3, 30),
(711, 'বাঁশখালী বিট', 'Banshkhali Bit', '2023-06-22 03:48:47', '2023-06-22 03:48:47', NULL, 196, 2, 16, 354, 3320, 1, 3, 30),
(712, 'সদর বিট', 'Sadara Bit', '2023-06-22 03:54:39', '2023-06-22 03:54:39', NULL, 197, 2, 16, 358, 3360, 1, 3, 30),
(713, 'সদর বিট', 'Sadara', '2023-06-22 03:58:53', '2023-06-22 03:58:53', NULL, 197, 2, 16, 354, 3360, 1, 3, 30),
(714, 'চরবালুয়া বিট', 'Chorbalua Bit', '2023-06-22 04:05:46', '2023-06-22 04:05:46', NULL, 198, 2, 16, 354, 33110, 1, 3, 30),
(715, 'চরবালুয়া বিট', 'Chorbalua Bit', '2023-06-22 04:07:27', '2023-06-22 04:07:27', NULL, 198, 2, 16, 353, 33111, 1, 3, 30),
(716, 'চরবালুয়া বিট', 'Chorbalua Bit', '2023-06-22 04:12:03', '2023-06-22 04:12:03', NULL, 199, 2, 16, 359, 3120, 1, 3, 30),
(717, 'বাঁশখালী বিট', 'Banshkhali Bit', '2023-06-22 04:14:36', '2023-07-05 09:29:22', NULL, 200, 2, 16, 354, 330, 1, 3, 30),
(719, 'সুবর্নচর উপজেলা এসএফপিসি', 'Subarnachar Upazila SFPC', '2023-06-22 04:18:55', '2023-06-22 04:18:55', NULL, 201, 2, 16, 358, 33140, 1, 3, 30),
(720, 'বেগমগঞ্জ উপজেলা এসএফপিসি', 'Begumganj Upazila SFPC', '2023-06-22 04:22:29', '2023-06-22 04:22:29', NULL, 201, 2, 16, 351, 231, 1, 3, 30),
(721, 'সোনাইমুড়ি উপজেলা এসএফপিসি', 'Sonaimuri Upazila SFPC', '2023-06-22 04:24:20', '2023-06-22 04:24:20', NULL, 201, 2, 16, 357, 2100, 1, 3, 30),
(722, 'সোনাইমুড়ি উপজেলা এসএফপিসি', 'Sonaimuri Upazila SFPC', '2023-06-22 04:32:09', '2023-06-22 04:32:09', NULL, 15, 2, 15, 247, 510, 1, 3, 30),
(723, 'সোনাইমুড়ি উপজেলা এসএফপিসি', 'Sonaimuri Upazila SFPC', '2023-06-22 04:34:53', '2023-06-22 04:34:53', NULL, 202, 2, 15, 247, 3310, 1, 3, 30),
(724, 'সোনাইমুড়ি উপজেলা এসএফপিসি', 'Sonaimuri Upazila SFPC', '2023-06-22 04:36:59', '2023-07-05 10:01:24', NULL, 203, 2, 15, 250, 302, 1, 3, 30),
(725, 'ফাসিয়াখালী', 'Fasciakhali', '2023-06-22 09:26:04', '2023-06-22 09:26:04', NULL, 204, 2, 12, 104, 3646, 1, 3, 25),
(726, 'খুটাখালী', 'Khutakhali', '2023-06-22 09:30:56', '2023-06-22 09:30:56', NULL, 205, 2, 12, 104, 3338, 1, 6, 25),
(727, 'খুটাখালী', 'Khutakhali', '2023-06-22 09:35:11', '2023-06-22 09:35:11', NULL, 206, 2, 12, 104, 5236, 1, 6, 25),
(728, 'মেধাকচ্ছপিয়া', 'Medhakachhapia', '2023-06-22 09:37:04', '2023-06-22 09:37:04', NULL, 205, 2, 12, 104, 6359, 1, 6, 25),
(729, 'ব্যাংডেপা', 'Bangdepa', '2023-06-22 09:40:47', '2023-06-22 09:40:47', NULL, 207, 2, 12, 109, 1231, 1, 6, 25),
(730, 'রাজঘাট', 'Rajghat', '2023-06-22 09:55:07', '2023-06-22 09:55:07', NULL, 208, 2, 12, 105, 798, 1, 6, 25),
(731, 'ভোমারিয়াঘোনা', 'Bhomariaghona', '2023-07-04 06:15:23', '2023-07-04 06:15:23', NULL, 209, 2, 12, 109, 8956, 1, 6, 25),
(732, 'জোয়ারিনালা', 'Jowarianala', '2023-07-04 06:19:01', '2023-07-04 06:19:01', NULL, 207, 2, 12, 109, 9652, 1, 6, 25),
(733, 'তুলাতোলী', 'Tulatoli', '2023-07-04 06:24:35', '2023-07-04 06:24:35', NULL, 210, 2, 12, 109, 856, 1, 6, 25),
(734, 'বাইশারী', 'Baishari', '2023-07-04 06:28:29', '2023-07-04 06:28:29', NULL, 210, 2, 12, 109, 785, 1, 6, 25),
(735, 'মেহেরঘোনা', 'Meherghona', '2023-07-04 06:34:09', '2023-07-04 06:34:09', NULL, 211, 2, 12, 105, 5356, 1, 6, 25),
(736, 'মাছুয়াখালী', 'Machuakhali', '2023-07-04 06:36:07', '2023-07-04 06:36:07', NULL, 211, 2, 12, 105, 8485, 1, 6, 25),
(737, 'কালিরছড়া', 'Kalirchara', '2023-07-04 06:37:35', '2023-07-04 06:37:35', NULL, 211, 2, 12, 105, 9635, 1, 6, 25),
(738, 'ধলিরছড়া', 'Dhalirchar', '2023-07-04 06:42:35', '2023-07-04 06:42:35', NULL, 211, 2, 12, 105, 7985, 1, 6, 25),
(739, 'ফুলছড়ি', 'Fulchhari', '2023-07-04 06:46:03', '2023-07-04 06:46:03', NULL, 208, 2, 12, 104, 8456, 1, 6, 25),
(740, 'বাঘখালী', 'Bagkhali', '2023-07-04 06:51:14', '2023-07-04 06:51:14', NULL, 212, 2, 12, 109, 8532, 1, 6, 25),
(741, 'গিলাতলী', 'Ghilatali', '2023-07-04 06:53:05', '2023-07-04 06:53:05', NULL, 212, 2, 12, 109, 5632, 1, 6, 25),
(742, 'কচ্ছপিয়া', 'Kachhapia', '2023-07-04 06:54:11', '2023-07-04 06:54:11', NULL, 212, 2, 12, 109, 8563, 1, 6, 25),
(743, 'পূর্ণগ্রাম', 'Purnagram', '2023-07-04 07:01:52', '2023-07-04 07:01:52', NULL, 213, 2, 12, 104, 6343, 1, 6, 25),
(744, 'ঈদগড়', 'Eidgarh', '2023-07-04 07:08:47', '2023-07-04 07:08:47', NULL, 210, 2, 12, 109, 853, 1, 6, 25),
(745, 'কলিরছড়া', 'Kolirsora', '2023-07-04 07:16:57', '2023-07-04 07:16:57', NULL, 211, 2, 12, 105, 3666, 1, 6, 25),
(746, 'কাকারা', 'Kakara', '2023-07-04 07:28:45', '2023-07-04 07:28:45', NULL, 204, 2, 12, 104, 9654, 1, 6, 25),
(747, 'তুতোকখালী', 'Tutokhali', '2023-07-04 07:34:29', '2023-07-04 07:34:29', NULL, 214, 2, 12, 105, 8888, 1, 6, 25),
(748, 'ডুলাহাজরা', 'Dulahazara', '2023-07-04 07:36:32', '2023-07-04 07:36:32', NULL, 204, 2, 12, 104, 4444, 1, 6, 25),
(749, 'ভোমারিয়াঘোনা', 'Bhomriaghona', '2023-07-04 07:40:46', '2023-07-04 07:40:46', NULL, 215, 2, 12, 105, 6348, 1, 6, 25),
(750, 'বাঘখালী সদর', 'Bagkhali Sadar', '2023-07-04 07:43:20', '2023-07-04 07:43:20', NULL, 212, 2, 12, 109, 6663, 1, 6, 25),
(751, 'কস্তুরাঘাট', 'Kasturaghat', '2023-07-04 07:47:14', '2023-07-04 07:47:14', NULL, 216, 2, 12, 105, 875, 1, 6, 26),
(752, 'লিংকরোড', 'Linkroad', '2023-07-04 07:48:19', '2023-07-04 07:48:19', NULL, 216, 2, 12, 105, 365, 1, 6, 26),
(753, 'হিমছড়ি', 'Himchari', '2023-07-04 07:49:27', '2023-07-04 07:49:27', NULL, 216, 2, 12, 105, 965, 1, 6, 26),
(754, 'ঝিলংজা', 'Jhelongja', '2023-07-04 07:50:58', '2023-07-04 07:50:58', NULL, 216, 2, 12, 105, 777, 1, 6, 26),
(755, 'রাজারকুল', 'Rajarkul', '2023-07-04 07:53:36', '2023-07-04 07:53:36', NULL, 217, 2, 12, 109, 7895, 1, 6, 26),
(756, 'আপাররেজু', 'Upperreju', '2023-07-04 07:55:06', '2023-07-04 07:55:06', NULL, 217, 2, 12, 109, 7521, 1, 6, 26),
(757, 'দারিয়ারদিঘী', 'Dariyardighi', '2023-07-04 07:56:09', '2023-07-04 07:56:09', NULL, 217, 2, 12, 109, 2342, 1, 6, 26),
(758, 'পাগলিরবিল', 'Paglir Bill', '2023-07-04 07:58:46', '2023-07-04 07:58:46', NULL, 218, 2, 12, 111, 9841, 1, 6, 26),
(759, 'পানেরছড়া', 'Panerchara', '2023-07-04 08:01:34', '2023-07-04 08:01:34', NULL, 219, 2, 12, 109, 4354, 1, 6, 26),
(760, 'ধোয়াপালং', 'Dhwapalang', '2023-07-04 08:05:54', '2023-07-04 08:05:54', NULL, 220, 2, 12, 109, 5631, 1, 6, 26),
(761, 'খুনিয়াপালং', 'Khuniapalong', '2023-07-04 08:07:30', '2023-07-04 08:07:30', NULL, 220, 2, 12, 109, 969, 1, 6, 26),
(762, 'থাইংখালী', 'Thaingkhali', '2023-07-04 08:10:34', '2023-07-04 08:10:34', NULL, 221, 2, 12, 111, 9635, 1, 6, 26),
(763, 'ওয়ালাপালং', 'Wallapalong', '2023-07-04 08:11:32', '2023-07-04 08:11:32', NULL, 221, 2, 12, 111, 4235, 1, 6, 26),
(764, 'দোছড়ি', 'Dochiri', '2023-07-04 08:12:42', '2023-07-04 08:12:42', NULL, 221, 2, 12, 111, 9632, 1, 6, 26),
(765, 'ভালুকিয়া', 'Valukia', '2023-07-04 08:13:51', '2023-07-04 08:13:51', NULL, 221, 2, 12, 111, 963, 1, 6, 26),
(766, 'ইনানী', 'Inani', '2023-07-04 08:14:58', '2023-07-04 08:14:58', NULL, 221, 2, 12, 111, 8562, 1, 6, 26),
(767, 'জালিয়াপালং', 'Jaliapalong', '2023-07-04 08:22:23', '2023-07-04 08:22:23', NULL, 222, 2, 12, 111, 7895, 1, 6, 26),
(768, 'সোয়ানখালী', 'Swankhali', '2023-07-04 08:25:02', '2023-07-04 08:25:02', NULL, 222, 2, 12, 111, 5613, 1, 6, 26),
(769, 'রাজাপালং', 'Rajapalong', '2023-07-04 08:27:14', '2023-07-04 08:27:14', NULL, 222, 2, 12, 111, 8563, 1, 6, 26),
(770, 'হোয়াইক্যং', 'Whykong', '2023-07-04 08:29:43', '2023-07-04 08:29:43', NULL, 223, 2, 12, 110, 5632, 1, 6, 26),
(771, 'রইক্ষ্যং', 'Raikhong', '2023-07-04 08:31:14', '2023-07-04 08:31:14', NULL, 223, 2, 12, 110, 5525, 1, 6, 26),
(772, 'শাপলাপুর', 'Saflapur', '2023-07-04 08:32:22', '2023-07-04 08:32:22', NULL, 223, 2, 12, 110, 3423, 1, 6, 26),
(773, 'মনখালী', 'Mankhali', '2023-07-04 08:34:16', '2023-07-04 08:34:16', NULL, 224, 2, 12, 111, 7569, 1, 6, 26),
(774, 'শিলখালী', 'Shilkali', '2023-07-04 08:36:18', '2023-07-04 08:36:18', NULL, 225, 2, 12, 110, 4568, 1, 6, 26),
(775, 'টেকনাফ', 'Teknaf', '2023-07-04 08:38:23', '2023-07-04 08:38:23', NULL, 226, 2, 12, 110, 6785, 1, 6, 26),
(776, 'মোচনী', 'Mohini', '2023-07-04 08:39:38', '2023-07-04 08:39:38', NULL, 226, 2, 12, 110, 4598, 1, 6, 26),
(777, 'হ্নীলা', 'Nhila', '2023-07-04 08:40:29', '2023-07-04 08:40:29', NULL, 226, 2, 12, 110, 3443, 1, 6, 26),
(778, 'মধ্যহ্নীলা', 'Madhyahnila', '2023-07-04 08:41:17', '2023-07-04 08:41:17', NULL, 226, 2, 12, 110, 2345, 1, 6, 26),
(779, 'ঝিলংজা', 'Jhelongja', '2023-07-04 08:42:07', '2023-07-04 08:42:07', NULL, 226, 2, 12, 110, 5432, 1, 6, 26),
(780, 'পানেরছড়া', 'Panerchara', '2023-07-04 08:46:11', '2023-07-04 08:46:11', NULL, 227, 2, 12, 105, 4556, 1, 6, 26),
(781, 'উখিয়া', 'Ukhiya', '2023-07-04 08:54:18', '2023-07-04 08:54:18', NULL, 221, 2, 12, 111, 4355, 1, 6, 26),
(782, 'কানকুনিপাড়া ফরেষ্ট ক্যাম্প', 'Kankuni Para Forest Camp', '2023-07-04 09:12:10', '2023-07-04 09:12:10', NULL, 230, 1, 5, 77, 4565, 1, 6, 32),
(783, 'এসএফপিসি গলাচিপা', 'SFPC Galachipa', '2023-07-04 09:14:12', '2023-07-04 09:14:12', NULL, 231, 1, 5, 377, 2435, 1, 3, 32),
(784, 'পক্ষিয়া ফরেষ্ট ক্যাম্প', 'Pakhya Forest Camp', '2023-07-04 09:15:29', '2023-07-04 09:15:29', NULL, 231, 1, 5, 377, 4357, 1, 3, 32),
(785, 'চরআগস্তি ফরেষ্ট ক্যাম্প', 'Charagasti Forest Camp', '2023-07-04 09:16:13', '2023-07-04 09:16:13', NULL, 231, 1, 5, 377, 4356, 1, 3, 32),
(786, 'বাহেরচর ফরেষ্ট ক্যাম্প', 'Baherchar Forest Camp', '2023-07-04 09:18:38', '2023-07-04 09:18:38', NULL, 230, 1, 5, 77, 4546, 1, 3, 32),
(787, 'মৌডুবি ফরেষ্ট ক্যাম্প', 'Maudubi Forest Camp', '2023-07-04 09:19:23', '2023-07-04 09:19:23', NULL, 230, 1, 5, 77, 3546, 1, 3, 32),
(788, 'চরকাশেম ফরেষ্ট ক্যাম্প', 'Charkashem Forest Camp', '2023-07-04 09:20:24', '2023-07-04 09:20:24', NULL, 230, 1, 5, 77, 9765, 1, 3, 32),
(789, 'গুঙ্গিপাড়া ফরেষ্ট ক্যাম্প', 'Gungipara Forest Camp', '2023-07-04 09:21:25', '2023-07-04 09:21:25', NULL, 230, 1, 5, 77, 5677, 1, 3, 32),
(790, 'চরমোন্তাজ সদর ক্যাম্প', 'Chermontaj Sadar Camp', '2023-07-04 09:34:13', '2023-07-04 09:34:13', NULL, 232, 1, 5, 77, 4567, 1, 3, 32),
(791, 'সোনাচর বিট', 'Sonachara Beat', '2023-07-04 09:36:21', '2023-07-04 09:36:21', NULL, 232, 1, 5, 77, 8795, 1, 3, 32),
(792, 'চরবেষ্টিন ফরেষ্ট ক্যাম্প', 'Charbeshtin Forest Camp', '2023-07-04 09:37:17', '2023-07-04 09:37:17', NULL, 232, 1, 5, 77, 6787, 1, 3, 32),
(793, 'কুয়াকাটা সদর বিট', 'Kuakata sadar bit', '2023-07-04 09:39:51', '2023-07-04 09:39:51', NULL, 233, 1, 5, 378, 5456, 1, 3, 32),
(794, 'এসএফপিসি কলাপাড়া', 'SFPC Kalapara', '2023-07-04 09:42:59', '2023-07-04 09:42:59', NULL, 234, 1, 5, 378, 3876, 1, 3, 32),
(795, 'চরহাদি ফরেষ্ট ক্যাম্প', 'Charhadi Forest Camp', '2023-07-04 09:48:56', '2023-07-04 09:48:56', NULL, 235, 1, 5, 375, 5678, 1, 3, 32),
(796, 'চরহায়দার ফরেষ্ট ক্যাম্প', 'Charhaydar Forest Camp', '2023-07-04 09:49:51', '2023-07-04 09:49:51', NULL, 235, 1, 5, 375, 6787, 1, 3, 32),
(797, 'টেংরাগিরি ফরেষ্ট ক্যাম্প', 'Tengragiri Forest Camp', '2023-07-04 09:51:53', '2023-07-04 09:51:53', NULL, 236, 1, 1, 21, 5743, 1, 3, 32),
(798, 'বাবুগঞ্জ ফরেষ্ট ক্যাম্প', 'Babuganj Forest Camp', '2023-07-04 09:55:08', '2023-07-04 09:55:08', NULL, 237, 1, 1, 19, 875, 1, 3, 32),
(799, 'গঙ্গামতি ফরেষ্ট ক্যাম্প', 'Gangamati Forest Camp', '2023-07-04 09:58:40', '2023-07-04 09:58:40', NULL, 233, 1, 5, 378, 7890, 1, 3, 32),
(800, 'বড়নিশানবাড়িয়া ক্যাম্প', 'Bara Nishanbaria Camp', '2023-07-04 10:02:46', '2023-07-04 10:02:46', NULL, 238, 1, 1, 497, 5231, 1, 3, 32),
(801, 'চরলাঠিমারা ফরেষ্ট ক্যাম্প', 'Charlathimara Forest Camp', '2023-07-04 10:05:34', '2023-07-04 10:05:34', NULL, 236, 1, 1, 21, 3456, 1, 3, 32),
(802, 'কুয়াকাটা ফরেষ্ট ক্যাম্প', 'Kuakata Forest Camp', '2023-07-04 10:08:55', '2023-07-04 10:08:55', NULL, 233, 1, 5, 378, 4567, 1, 3, 32),
(803, 'সোনারচর বিট', 'Sonar Char Bit', '2023-07-04 10:11:28', '2023-07-04 10:11:28', NULL, 232, 1, 5, 77, 4568, 1, 3, 32),
(804, 'হরিণবাড়িয়া ফরেষ্ট ক্যাম্প', 'Harinbaria Forest Camp', '2023-07-04 14:11:18', '2023-07-04 14:11:18', NULL, 236, 1, 1, 21, 6764, 1, 3, 32),
(805, 'এসএফপিসি বাউফল', 'SFPC Bowfall', '2023-07-04 14:37:04', '2023-07-04 14:37:04', NULL, 239, 1, 5, 374, 4334, 1, 3, 32),
(806, 'পাথরঘাটা সদর বিট', 'Patharghata', '2023-07-04 14:38:33', '2023-07-04 14:38:33', NULL, 236, 1, 1, 21, 5666, 1, 3, 32),
(807, 'এসএফপিসি আমতলী', 'SFPC Amtali', '2023-07-04 14:41:24', '2023-07-04 14:41:24', NULL, 240, 1, 1, 17, 3213, 1, 3, 32),
(808, 'বালিয়াতলী ক্যাম্প', 'Baliatali camp', '2023-07-04 14:44:58', '2023-07-04 14:44:58', NULL, 233, 1, 5, 378, 4546, 1, 3, 32),
(809, 'ধুলেশ্বর ফরেষ্ট ক্যাম্প', 'Dhuleshwar Forest Camp', '2023-07-04 14:46:59', '2023-07-04 14:46:59', NULL, 233, 1, 5, 378, 3424, 1, 3, 32),
(810, 'বাহেরচর সদর ক্যাম্প', 'Baherchar Sadar Camp', '2023-07-04 14:49:31', '2023-07-04 14:49:31', NULL, 230, 1, 5, 77, 3453, 1, 3, 32),
(811, 'এসএফপিসি মির্জাগঞ্জ', 'SFPC Mirzaganj', '2023-07-04 14:52:58', '2023-07-04 14:52:58', NULL, 242, 1, 5, 379, 3215, 1, 3, 32),
(812, 'আমতলী রেঞ্জ সদর', 'Amtali Range Sadar', '2023-07-04 14:55:22', '2023-07-04 14:55:22', NULL, 238, 1, 1, 497, 2135, 1, 3, 32),
(813, 'বাকেরগঞ্জ এসএফপিসি', 'Bakerganj SFPC', '2023-07-04 15:03:45', '2023-07-04 15:03:45', NULL, 243, 1, 2, 24, 2346, 1, 3, 1),
(814, 'বাবুগঞ্জ এসএফপিসি', 'Babuganj SFPC', '2023-07-04 15:08:02', '2023-07-04 15:08:02', NULL, 244, 1, 2, 23, 3452, 1, 3, 1),
(815, 'বানারীপাড়াএসএফপিসি', 'Banaripara SFPC', '2023-07-04 15:11:18', '2023-07-04 15:11:18', NULL, 245, 1, 2, 25, 4523, 1, 3, 1),
(816, 'মেহেন্দীগঞ্জ এসএফপিসি', 'Mehendiganj SFP', '2023-07-04 15:13:32', '2023-07-04 15:13:32', NULL, 246, 1, 2, 29, 2323, 1, 3, 1),
(817, 'ঝালকাঠি', 'Jhalkathi', '2023-07-04 15:16:20', '2023-07-04 15:16:20', NULL, 247, 1, 4, 190, 333, 1, 3, 1),
(818, 'নলছিটি এসএফপিসি', 'Tubular SFPC', '2023-07-04 15:18:50', '2023-07-04 15:18:50', NULL, 248, 1, 4, 192, 5553, 1, 3, 1),
(819, 'কেরনতলী', 'Keruntali', '2023-07-05 02:09:05', '2023-07-05 02:09:05', NULL, 249, 2, 12, 107, 3216, 1, 3, 33),
(820, 'মুদিরছড়া', 'Mudirchhara', '2023-07-05 02:10:07', '2023-07-05 02:10:07', NULL, 249, 2, 12, 107, 6467, 1, 6, 33),
(821, 'দিনেশপুর', 'Dineshpur', '2023-07-05 02:11:08', '2023-07-05 02:11:08', NULL, 249, 2, 12, 107, 8656, 1, 6, 33),
(822, 'শাপলাপুর', 'Saflapur', '2023-07-05 02:12:19', '2023-07-05 02:12:19', NULL, 249, 2, 12, 107, 3245, 1, 6, 33),
(823, 'কালারমারছড়া', 'Kalamarchhara', '2023-07-05 02:13:29', '2023-07-05 02:13:29', NULL, 249, 2, 12, 107, 7879, 1, 6, 33),
(824, 'গন্ডামারা', 'Gandamara', '2023-07-05 02:17:49', '2023-07-05 02:17:49', NULL, 250, 2, 10, 68, 6493, 1, 6, 33),
(825, 'প্রেমাশিয়া', 'Premashia', '2023-07-05 02:18:41', '2023-07-05 02:18:41', NULL, 250, 2, 10, 68, 6578, 1, 6, 33),
(826, 'রতনপুর', 'Ratanpur', '2023-07-05 02:19:33', '2023-07-05 02:19:33', NULL, 250, 2, 10, 68, 4566, 1, 6, 33),
(827, 'ছনুয়া সদর', 'Chanua Sadar', '2023-07-05 02:21:45', '2023-07-05 09:49:53', NULL, 251, 2, 10, 68, 411, 1, 6, 33),
(828, 'কাট্টলি', 'Kattali', '2023-07-05 02:24:48', '2023-07-05 02:24:48', NULL, 252, 2, 10, 83, 435, 1, 6, 33),
(829, 'বামনসুন্দর', 'Bamansundar', '2023-07-05 02:32:36', '2023-07-05 02:32:36', NULL, 253, 2, 10, 75, 4565, 1, 6, 33),
(830, 'মঘাদিয়া', 'Maghadia', '2023-07-05 02:34:19', '2023-07-05 02:34:19', NULL, 253, 2, 10, 75, 4578, 1, 6, 33),
(831, 'গুপ্তছড়া', 'Guptachara', '2023-07-05 02:38:03', '2023-07-05 09:42:42', NULL, 254, 2, 10, 81, 636, 1, 6, 33),
(832, 'পুবেরচর', 'Puber Char', '2023-07-05 02:41:19', '2023-07-05 02:41:19', NULL, 255, 2, 10, 81, 2345, 1, 6, 33),
(833, 'পার্ক বিট', 'Park bit', '2023-07-05 02:42:36', '2023-07-05 08:50:31', NULL, 256, 3, 20, 152, 371, 1, 1, 34),
(834, 'উত্তরচর', 'UttorChor', '2023-07-05 02:43:19', '2023-07-05 02:43:19', NULL, 255, 2, 10, 81, 6652, 1, 1, 33),
(835, 'বনখৈরা বিট', 'Bonkhira bit', '2023-07-05 02:44:03', '2023-07-05 02:44:03', NULL, 256, 3, 20, 156, 3712, 1, 6, 34),
(836, 'কুতুবদিয়া সদর', 'Kutubdia Sadar', '2023-07-05 02:45:21', '2023-07-05 09:43:05', NULL, 257, 2, 12, 106, 567, 1, 6, 33),
(837, 'বাউপাড়া বিট', 'Baupara bit', '2023-07-05 02:45:57', '2023-07-05 02:45:57', NULL, 256, 3, 20, 152, 3713, 1, 6, 34);
INSERT INTO `forest_beats` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`, `forest_range_id`, `division_id`, `district_id`, `upazila_id`, `grocode`, `status_id`, `forest_state_id`, `forest_division_id`) VALUES
(838, 'হ্নীলা', 'Nhila', '2023-07-05 02:48:48', '2023-07-05 02:48:48', NULL, 258, 2, 12, 110, 4568, 1, 1, 33),
(839, 'শাহপরীরদ্বীপ', 'Shapuree Island', '2023-07-05 02:49:58', '2023-07-05 02:49:58', NULL, 258, 2, 12, 110, 4563, 1, 6, 33),
(840, 'টেকনাফ সদর', 'Teknaf Sadar', '2023-07-05 02:51:53', '2023-07-05 02:51:53', NULL, 258, 2, 12, 110, 456, 1, 6, 33),
(841, 'রাজেন্দ্রপুর প: বিট', 'Rajendrapur P: Bit', '2023-07-05 02:53:55', '2023-07-05 02:53:55', NULL, 259, 3, 20, 152, 3720, 1, 6, 34),
(842, 'বারুইপাড়া বিট', 'Baruipara bit', '2023-07-05 02:54:54', '2023-07-05 02:54:54', NULL, 259, 3, 20, 152, 371, 1, 1, 34),
(843, 'ভবানীপুর বিট', 'Bhavanipur Bit', '2023-07-05 02:55:39', '2023-07-05 02:55:39', NULL, 259, 3, 20, 152, 3723, 1, 1, 34),
(844, 'ভাটেরখিল', 'Bhatterkhil', '2023-07-05 02:56:02', '2023-07-05 02:56:02', NULL, 260, 2, 10, 83, 5689, 1, 1, 33),
(845, 'বিকে বাড়ী', 'BK Bari', '2023-07-05 02:57:24', '2023-07-05 02:57:24', NULL, 259, 3, 20, 152, 373, 1, 6, 34),
(846, 'মাতারবাড়ী', 'Matarbari', '2023-07-05 02:58:57', '2023-07-05 02:58:57', NULL, 261, 2, 12, 107, 3468, 1, 1, 33),
(847, 'মহেশখালী এসএফএনটিসি', 'Maheshkhali SFNTC', '2023-07-05 03:01:27', '2023-07-05 06:31:11', NULL, 249, 2, 12, 107, 34, 1, 6, 33),
(848, 'চাম্বল বন্যপ্রাণী অভয়ারণ্য রেঞ্জ', 'Chambal Wildlife Sanctuary Range', '2023-07-05 03:06:35', '2023-07-05 03:06:35', NULL, 262, 2, 10, 68, 380, 1, 6, 35),
(849, 'কালাছড়া বিট', 'Kalachhara bit', '2023-07-05 07:59:14', '2023-07-05 07:59:14', NULL, 62, 7, 62, 276, 1, 1, 6, 36),
(850, 'লাউয়াছড়া বিট', 'Lawachara Bit', '2023-07-05 08:01:00', '2023-07-05 08:01:00', NULL, 62, 7, 62, 276, 2, 1, 10, 36),
(851, 'চাউতলী বিট', 'Chautoli Bit', '2023-07-05 08:03:58', '2023-07-05 08:03:58', NULL, 62, 7, 62, 280, 3, 1, 10, 36),
(852, 'সাতছড়ি বিট', 'Satchari Bit', '2023-07-05 08:06:57', '2023-07-05 10:02:18', NULL, 263, 7, 61, 165, 430, 1, 10, 36),
(853, 'মাগুরা সদর', 'Magura Sadara', '2023-07-05 08:10:21', '2023-07-05 10:02:43', NULL, 154, 4, 41, 260, 431, 1, 4, 18),
(854, 'বাঁশখালী বিট', 'Bashkhali Bit', '2023-07-05 09:31:49', '2023-07-05 09:31:49', NULL, 200, 2, 16, 358, 301, 1, 4, 30);

-- --------------------------------------------------------

--
-- Table structure for table `forest_divisions`
--

CREATE TABLE `forest_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `forest_state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `geocode` varchar(10) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forest_divisions`
--

INSERT INTO `forest_divisions` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`, `forest_state_id`, `geocode`, `status_id`) VALUES
(1, 'সামাজিক বন বিভাগ বরিশাল', 'Social Forest Division Barishal', '2015-11-16 11:01:41', '2022-07-13 23:06:57', NULL, 3, '10', 1),
(2, 'চট্টগ্রাম উত্তর বন বিভাগ', 'Chattogram North Forest Division', '2015-11-16 11:01:41', '2022-07-13 23:09:45', NULL, 6, '20', 1),
(3, 'ঢাকা  বন বিভাগ', 'Dhaka Forest Division', '2015-11-16 11:01:41', '2022-08-28 10:19:22', NULL, 1, '30', 1),
(4, 'খুলনা', 'Khulna', '2015-11-16 11:01:41', '2022-07-13 23:12:01', NULL, 5, '40', 1),
(5, 'সামাজিক বন বিভাগ রাজশাহী', 'Social Forest Division Rajshahi', '2015-11-16 11:01:41', '2022-07-13 23:13:17', NULL, 8, '95', 1),
(6, 'সামাজিক বন বিভাগ রংপুর', 'Social Forest Division Rangpur', '2015-11-16 11:01:41', '2022-07-13 23:14:11', NULL, 8, '60', 1),
(7, 'সিলেট বন বিভাগ', 'Sylhet Forest  Division', '2015-11-16 11:01:41', '2022-07-13 23:14:52', NULL, 1, '70', 1),
(9, 'ময়মনসিংহ বন বিভাগ', 'Mymensingh Forest Division', '2015-11-16 11:01:41', '2022-07-13 23:15:19', NULL, 1, '45', 1),
(10, 'টাঙ্গাইল বন বিভাগ', 'TANGAIL Forest Division', '2022-06-17 11:14:53', '2022-07-13 23:15:36', NULL, 1, '80', 1),
(11, 'সামাজিক বন বিভাগ দিনাজপুর', 'Social Forest Division Dinajpur', '2022-06-17 11:17:45', '2022-07-13 23:16:04', NULL, 8, '50', 1),
(12, 'সামাজিক বন বিভাগ বগুড়া', 'Social Forest Division Bogura', '2022-06-17 13:11:29', '2022-07-13 23:18:45', NULL, 8, '65', 1),
(13, 'সামাজিক বন বিভাগ পাবনা', 'Social Forest Division Pabna', '2022-06-17 13:12:29', '2022-07-13 23:16:17', NULL, 8, '75', 1),
(14, 'সামাজিক বন বিভাগ ঢাকা', 'Social Forest Division Dhaka', '2022-06-17 13:14:41', '2022-10-18 12:11:55', NULL, 2, '35', 1),
(15, 'সামাজিক বন বিভাগ কুমিল্লা', 'Social Forest Division Cumilla', '2022-06-17 13:16:00', '2022-07-13 23:17:54', NULL, 2, '55', 1),
(16, 'সামাজিক বন বিভাগ ফেনী', 'Social Forest Division Feni', '2022-06-17 13:16:48', '2022-07-13 23:18:17', NULL, 2, '85', 1),
(17, 'জাতীয় উদ্ভিদ উদ্যান', 'National Botanical Garden', '2022-06-17 13:18:43', '2022-07-13 23:20:16', NULL, 1, '90', 1),
(18, 'সামাজিক বন বিভাগ যশোর', 'Social Forest Division Jashore', '2022-06-17 13:20:21', '2022-07-13 23:18:37', NULL, 4, '46', 1),
(19, 'সামাজিক বন বিভাগ কুষ্টিয়া', 'Social Forest Division Kushtia', '2022-06-17 13:21:29', '2022-07-13 23:19:12', NULL, 4, '15', 1),
(20, 'সামাজিক বন বিভাগ বাগেরহাট', 'Social Forest Division Bagerhat', '2022-06-17 13:22:22', '2022-07-13 23:21:45', NULL, 4, '25', 1),
(21, 'সামাজিক বন বিভাগ ফরিদপুর', 'Social Forest Division Faridpur', '2022-06-17 13:26:20', '2022-07-13 23:22:04', NULL, 4, '93', 1),
(22, 'খাগড়াছড়ি বন বিভাগ', 'Khagrachhari Forest Division', '2022-06-17 13:27:15', '2022-07-13 23:23:25', NULL, 7, '83', 1),
(23, 'ঝুম নিয়ন্ত্রণ বন বিভাগ', 'Jhum Control Forest Division', '2022-06-17 13:28:19', '2022-07-13 23:23:47', NULL, 7, '86', 1),
(24, 'চট্টগ্রাম দক্ষিণ বন বিভাগ', 'Chattogram South Forest Division', '2022-06-17 13:30:13', '2022-07-13 23:24:22', NULL, 6, '23', 1),
(25, 'কক্সবাজার উত্তর বন বিভাগ', 'Cox Bazar North Forest Division', '2022-06-17 13:31:28', '2022-07-13 23:24:32', NULL, 6, '73', 1),
(26, 'কক্সবাজার দক্ষিণ বন বিভাগ', 'Cox Bazar South Forest Division', '2022-06-17 13:32:05', '2022-07-13 23:24:50', NULL, 6, '76', 1),
(27, 'বান্দরবান বন বিভাগ', 'Bandarban Forest Division', '2022-06-17 13:32:40', '2022-07-13 23:25:01', NULL, 6, '63', 1),
(28, 'লামা বন বিভাগ', 'Lama Forest Division', '2022-06-17 13:34:22', '2022-07-13 23:25:18', NULL, 6, '13', 1),
(29, 'উপকূলী বন বিভাগ', 'Coastal Forest Division', '2022-06-17 13:35:09', '2022-07-13 23:26:24', NULL, 3, '26', 1),
(30, 'উপকূলীয় বন বিভাগ নোয়াখালী', 'Coastal Forest Division Noakhali', '2022-06-17 13:36:21', '2022-07-13 23:26:52', NULL, 3, '33', 1),
(31, 'উপকূলীয় বন বিভাগ ভোলা', 'Coastal Forest Division Bhola', '2022-06-17 13:37:14', '2022-07-13 23:27:05', NULL, 3, '36', 1),
(32, 'উপকূলীয় বন বিভাগ পটুয়াখালী', 'Coastal Forest Division Patuakhali', '2022-06-17 13:38:02', '2022-07-13 23:27:12', NULL, 3, '43', 1),
(33, 'উপকূলীয় বন বিভাগ, চট্টগ্রাম', 'Coastal Forest Division, Chittagong', '2023-07-04 09:27:05', '2023-07-04 09:27:05', NULL, 6, '85', 1),
(34, 'বন্যপ্রাণী ব্যবস্থাপনা ও প্রকৃতি সংরক্ষণ বিভাগ ঢাকা', 'Department of Wildlife Management and Nature Conservation, Dhaka', '2023-07-05 02:38:35', '2023-07-05 02:38:35', NULL, 1, '37', 1),
(35, 'বন্যপ্রাণী ব্যবস্থাপনা ও প্রকৃতি সংরক্ষণ বিভাগ, চট্টগ্রাম', 'Department of Wildlife Management and Nature Conservation, Chittagong', '2023-07-05 03:00:09', '2023-07-05 03:00:09', NULL, 6, '38', 1),
(36, 'বন্যপ্রাণী ব্যবস্থাপনা ও প্রকৃতি সংরক্ষণ বিভাগ মৌলভীবাজার', 'Department of Wildlife Management and Nature Conservation Moulvibazar', '2023-07-05 07:56:53', '2023-07-05 07:56:53', NULL, 10, '01', 1),
(37, 'জাতীয় উদ্ভিদ উদ্যান, মিরপুর ও বলদা গার্ডেন', 'National Botanical Gardens, Mirpur and Balda Gardens', '2023-07-05 08:22:29', '2023-07-05 08:22:29', NULL, 1, '78', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forest_ranges`
--

CREATE TABLE `forest_ranges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `forest_state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `forest_division_id` bigint(20) UNSIGNED DEFAULT NULL,
  `division_id` bigint(10) DEFAULT NULL,
  `district_id` bigint(10) DEFAULT NULL,
  `upazila_id` bigint(10) DEFAULT NULL,
  `grocode` varchar(10) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forest_ranges`
--

INSERT INTO `forest_ranges` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`, `forest_state_id`, `forest_division_id`, `division_id`, `district_id`, `upazila_id`, `grocode`, `status_id`) VALUES
(80, 'কালিয়াকৈর রেঞ্জ', 'Kalyiakoir Range', '2023-06-20 09:27:39', '2023-06-20 09:27:39', NULL, 2, 3, 3, 20, 153, '2345', 1),
(79, 'সোনারগাঁ এস এফ এন টি সি', 'Sonargaon', '2022-09-13 07:38:39', '2022-09-25 03:52:19', NULL, 2, 14, 3, 28, 314, '1001', 1),
(78, 'চিলমারী এসএফএনটিসি', 'Chilmari SFNTC', '2022-08-08 21:58:52', '2022-08-08 21:58:52', NULL, 8, 6, 6, 55, NULL, NULL, 1),
(77, 'সৈয়দপুর এসএফএনটিসি', 'Sayedpur SFNTC', '2022-08-08 21:57:35', '2022-08-08 21:57:35', NULL, 8, 6, 6, 57, NULL, NULL, 1),
(76, 'ডোমার রেঞ্জ', 'Domer Range', '2022-08-08 21:54:49', '2022-08-09 16:06:22', NULL, 8, 6, 6, 57, 346, NULL, 1),
(75, 'পীরগাছা এসএফএনটিসি', 'Peergacha SFNTC', '2022-08-08 21:52:52', '2022-08-08 21:53:22', NULL, 8, 6, 6, 59, NULL, '102', 1),
(74, 'সদর রেঞ্জ', 'Sadar Range', '2022-08-08 21:51:39', '2022-08-08 21:51:39', NULL, 3, 6, 6, 59, NULL, '101', 1),
(73, 'কক্সবাজার', 'Cox Bazar', '2022-06-17 16:39:28', '2022-06-17 16:39:28', NULL, 3, 29, NULL, NULL, NULL, '23', 1),
(72, 'বান্দরবান', 'Bandarban', '2022-06-17 16:36:21', '2022-06-17 16:37:18', NULL, 6, 28, NULL, NULL, NULL, '14', 1),
(70, 'চট্টগ্রাম', 'CHATTOGRAM', '2022-06-17 16:13:48', '2022-07-02 01:36:20', NULL, 6, 24, NULL, NULL, NULL, '24', 1),
(65, 'কালিয়াকৈর', 'Kaliakair', '2022-06-16 19:47:53', '2022-06-16 19:53:04', NULL, 1, 3, NULL, NULL, NULL, '301', 1),
(69, 'ঢাকা', 'Dhaka', '2022-06-17 15:44:42', '2022-06-17 16:53:45', NULL, 1, 17, NULL, NULL, NULL, '92', 1),
(64, 'সিলেট', 'SYLHET', '2020-03-27 12:07:03', '2020-03-27 12:07:03', NULL, 1, 7, NULL, NULL, NULL, '91', 1),
(63, 'সুনামগঞ্জ ', 'SUNAMGANJ', '2020-03-27 12:07:03', '2020-03-27 12:07:03', NULL, 1, 7, NULL, NULL, NULL, '90', 1),
(62, 'মৌলভীবাজার বন্যপ্রাণী রেঞ্জ, শ্রীমঙ্গল', 'MAULVIBAZAR Wildlife Range, Sreemangal', '2020-03-27 12:07:03', '2023-07-05 07:57:23', NULL, 1, 36, 7, 62, 276, '58', 1),
(60, 'ঠাকুরগাঁও', 'THAKURGAON', '2020-03-27 12:07:03', '2023-06-21 06:49:10', NULL, 8, 11, 6, 53, 119, '94', 1),
(59, 'আলমনগর এসএফএনটিসি', 'Alamnagar SFNTC', '2020-03-27 12:07:03', '2022-08-08 21:45:23', NULL, 8, 6, 6, 59, NULL, '85', 1),
(57, 'নীলফামারী এসএফএনটিসি', 'NILPHAMARI SFNTC', '2020-03-27 12:07:03', '2022-08-08 21:47:22', NULL, 8, 6, 6, 57, NULL, '73', 1),
(56, 'লালমনিরহাট এসএফএনটিসি', 'LALMONIRHAT SFNTC', '2020-03-27 12:07:03', '2022-08-08 21:48:37', NULL, 8, 6, 6, 56, NULL, '52', 1),
(55, 'কুড়িগ্রাম এসএফএনটিসি', 'KURIGRAM SFNTC', '2020-03-27 12:07:03', '2022-08-08 21:49:05', NULL, 8, 6, 6, 55, NULL, '49', 1),
(54, 'গাইবান্ধা এসএফএনটিসি', 'GAIBANDHA SFNTC', '2020-03-27 12:07:03', '2023-06-21 07:38:33', NULL, 8, 6, 6, 54, 149, '32', 1),
(53, 'দিনাজপুর', 'DINAJPUR', '2020-03-27 12:07:03', '2023-07-05 07:34:56', NULL, 8, 11, 6, 53, NULL, '27', 1),
(44, 'সাতক্ষীরা এসএফএনটিসি', 'SATKHIRA SFNTC', '2020-03-27 12:07:03', '2023-06-21 05:13:21', NULL, 4, 18, 4, 44, 429, '87', 1),
(42, 'মেহেরপুর', 'MEHERPUR', '2020-03-27 12:07:03', '2023-06-21 07:23:23', NULL, 4, 19, 4, 42, 273, '57', 1),
(41, 'মাগুরা', 'MAGURA', '2020-03-27 12:07:03', '2023-07-05 07:27:26', NULL, 4, 18, 4, 41, NULL, '55', 1),
(40, 'ভেড়ামারা', 'Bheramara', '2020-03-27 12:07:03', '2023-06-21 07:22:01', NULL, 4, 19, 4, 40, 240, '50', 1),
(39, 'খুলনা', 'KHULNA', '2020-03-27 12:07:03', '2023-07-05 07:26:15', NULL, 4, 20, 4, 39, NULL, '47', 1),
(38, 'ঝিনাইদহ এসএফএনটিসি', 'JHENAIDAH SFNTC', '2020-03-27 12:07:03', '2023-06-21 04:57:21', NULL, 4, 18, 4, 38, 194, '44', 1),
(37, 'যশোর এসএফএনটিসি', 'JASHORE', '2020-03-27 12:07:03', '2023-06-21 04:47:25', NULL, 4, 18, 4, 37, 187, '41', 1),
(36, 'চুয়াডাঙ্গা', 'CHUADANGA', '2020-03-27 12:07:03', '2023-06-21 07:20:21', NULL, 4, 19, 4, 36, 85, '18', 1),
(35, 'ষাটগম্বুজ', 'Satgambuj', '2020-03-27 12:07:03', '2023-06-21 07:35:29', NULL, 4, 20, 4, 35, 1, '01', 1),
(32, 'শরীয়তপুর', 'SHARIATPUR', '2020-03-27 12:07:03', '2023-07-05 07:17:31', NULL, 4, 21, 3, 32, 423, '86', 1),
(31, 'রাজবাড়ী', 'RAJBARI', '2020-03-27 12:07:03', '2023-06-21 06:26:26', NULL, 4, 21, 3, 31, 400, '82', 1),
(29, 'নরসিংদী', 'NARSINGDI', '2020-03-27 12:07:03', '2022-06-17 15:25:18', NULL, 2, 14, NULL, NULL, NULL, '68', 1),
(26, 'মুন্সিগঞ্জ', 'MUNSHIGANJ', '2020-03-27 12:07:03', '2023-07-05 07:03:10', NULL, 2, 14, 3, 26, 283, '59', 1),
(24, 'মাদারীপুর', 'MADARIPUR', '2020-03-27 12:07:03', '2023-06-21 09:36:13', NULL, 4, 21, 3, 24, 257, '54', 1),
(21, 'গোপালগঞ্জ', 'GOPALGANJ', '2020-03-27 12:07:03', '2023-06-21 09:28:16', NULL, 4, 21, 3, 21, 157, '35', 1),
(20, 'গাজীপুর', 'GAZIPUR', '2020-03-27 12:07:03', '2022-08-11 12:27:08', NULL, 1, 3, 3, 20, 152, '33', 1),
(17, 'রাঙ্গামাটি', 'RANGAMATI', '2020-03-27 12:07:03', '2022-10-16 03:00:19', NULL, 7, 23, 2, 17, 410, '84', 1),
(15, 'লক্ষ্মীপুর এসএফএনটিসি', 'LAKSHMIPUR SFNTC', '2020-03-27 12:07:03', '2023-06-22 04:30:22', NULL, 3, 30, 2, 15, 247, '51', 1),
(3, 'ভোলা এসএফএনটিসি', 'BHOLA', '2020-03-27 12:07:03', '2023-06-22 02:55:37', NULL, 3, 31, 1, 3, 32, '09', 1),
(81, 'মৌচাক এসএফএনটিসি', 'Mouchak SFNTC', '2023-06-20 10:27:29', '2023-06-20 10:27:29', NULL, 1, 3, 3, 20, 153, '234', 1),
(82, 'কাচিঘাটা রেঞ্জ', 'Kachighata Range', '2023-06-20 14:40:52', '2023-06-20 14:40:52', NULL, 1, 3, 3, 20, 153, '236', 1),
(83, 'রাজেন্দ্রপুর রেঞ্জ', 'Rajendrapur Range', '2023-06-20 14:47:57', '2023-06-20 14:47:57', NULL, 1, 3, 3, 20, 152, '237', 1),
(84, 'শ্রীপুর রেঞ্জ', 'Sreepur Range', '2023-06-20 14:59:58', '2023-06-20 14:59:58', NULL, 1, 3, 3, 20, 156, '238', 1),
(85, 'রসুলপুর রেঞ্জ', 'Rosulpur Range', '2023-06-20 15:16:48', '2023-06-20 15:19:16', NULL, 1, 9, 9, 27, 289, '239', 1),
(86, 'গৌরীপুর এসএফএনটিসি', 'Gauripur SFNTC', '2023-06-20 15:30:27', '2023-06-20 15:30:27', NULL, 1, 9, 9, 27, 292, '239', 1),
(87, 'বালিজুরী রেঞ্জ', 'Balijuri Range', '2023-06-20 15:34:19', '2023-06-20 15:34:19', NULL, 1, 9, 9, 33, 445, '239', 1),
(88, 'বালিজুরী রেঞ্জ', 'Balijuri Range', '2023-06-20 15:56:29', '2023-06-20 15:56:29', NULL, 1, 9, 9, 33, 500, '240', 1),
(89, 'রাংটিয়া রেঞ্জ', 'Rangtia Range', '2023-06-20 15:57:55', '2023-06-20 15:57:55', NULL, 1, 9, 9, 33, 441, '240', 1),
(90, 'মধুটিলা রেঞ্জ', 'Madhutila Range', '2023-06-20 16:02:46', '2023-06-20 16:02:46', NULL, 1, 9, 9, 33, 443, '240', 1),
(91, 'দূর্গাপুর রেঞ্জ', 'Durgapur Range', '2023-06-20 16:07:10', '2023-06-20 16:07:10', NULL, 1, 9, 9, 30, 337, '240', 1),
(92, 'উথুরা রেঞ্জ', 'Uthura range', '2023-06-20 16:12:03', '2023-06-20 16:12:03', NULL, 1, 9, 9, 27, 287, '240', 1),
(93, 'সদর রেঞ্জ', 'Sadara  Range', '2023-06-20 16:17:56', '2023-06-20 16:17:56', NULL, 1, 9, 9, 33, 443, '241', 1),
(94, 'কিশোরগঞ্জ এসএফএনটিসি', 'Kishoreganj SFNTC', '2023-06-20 16:22:52', '2023-06-20 16:22:52', NULL, 1, 9, 3, 23, 225, '245', 1),
(95, 'নান্দাইল এসএফএনটিসি', 'Nandail SFNTC', '2023-06-20 16:25:28', '2023-06-20 16:25:28', NULL, 1, 9, 3, 23, 230, '2451', 1),
(96, 'ভালুকা রেঞ্জ', 'Bhaluka Range', '2023-06-20 16:39:59', '2023-06-20 16:39:59', NULL, 1, 9, 9, 27, 287, '4524', 1),
(97, 'উথুরা রেঞ্জ', 'Uthura Range', '2023-06-20 16:47:05', '2023-06-20 16:47:05', NULL, 1, 9, 9, 27, 289, '2061', 1),
(98, 'কৃষি বিশ্ববিদ্যালয় এসএফএনটিসি', 'Agricultural University SFNTC', '2023-06-20 16:59:39', '2023-06-20 16:59:39', NULL, 1, 9, 9, 27, 294, '1452', 1),
(99, 'নেত্রকোনা এসএফএনটিসি', 'Netrakona SFNTC', '2023-06-20 17:03:18', '2023-06-20 17:03:18', NULL, 1, 9, 9, 30, 343, '1243', 1),
(100, 'করিমগঞ্জ এসএফএনটিসি', 'Karimganj SFNTC', '2023-06-20 17:06:33', '2023-06-20 17:06:33', NULL, 1, 9, 3, 23, 223, '1423', 1),
(101, 'ধলাপাড়া', 'Dhalapara', '2023-06-21 02:09:21', '2023-07-05 07:20:24', NULL, 1, 10, 3, 34, 473, '125', 1),
(102, 'মিঠাপুকুর রেঞ্জ', 'Mithapukur Range', '2023-06-21 02:23:55', '2023-06-21 07:45:32', NULL, 8, 6, 6, 59, 417, '601', 1),
(103, 'চিলমারি এসএফএনটিসি', 'Chilmari SFNTC', '2023-06-21 02:28:13', '2023-06-21 02:28:13', NULL, 8, 6, 6, 55, 239, '602', 1),
(104, 'হতেয়া', 'Hateya', '2023-06-21 02:34:55', '2023-06-21 02:34:55', NULL, 8, 10, 3, 34, 479, '234', 1),
(105, 'সদর রেঞ্জ বগুড়া', 'Sadara Range Bogura', '2023-06-21 02:42:08', '2023-07-05 07:31:34', NULL, 8, 12, 5, 45, 45, '501', 1),
(106, 'বহেড়াতলী', 'Baheratoli', '2023-06-21 02:43:43', '2023-06-21 02:43:43', NULL, 8, 10, 3, 34, 479, '456', 1),
(107, 'শেরপুর এসএফএসটিসি', 'Sherpur SFSTC', '2023-06-21 02:47:53', '2023-07-05 07:31:12', NULL, 8, 12, 5, 45, 48, '502', 1),
(108, 'দুপচাঁচিয়া এসএফএসটিসি', 'Dupchanchia SFSTC', '2023-06-21 02:52:13', '2023-06-21 02:52:13', NULL, 8, 12, 5, 45, 42, '605', 1),
(109, 'জাতীয় উদ্যান সদর', 'National Botanical Garden Sadar', '2023-06-21 02:54:02', '2023-06-21 02:54:02', NULL, 8, 10, 3, 34, 476, '789', 1),
(110, 'কালাই এসএফএসটিসি', 'Kalai SFSTC', '2023-06-21 02:56:21', '2023-06-21 02:56:21', NULL, 1, 12, 5, 45, 49, '560', 1),
(111, 'মধুপুর', 'Madhupur', '2023-06-21 02:57:48', '2023-06-21 02:57:48', NULL, 8, 10, 3, 34, 476, '798', 1),
(112, 'জয়পুরহাট এসএফএসটিসি', 'Joypurhat SFSTC', '2023-06-21 03:00:23', '2023-06-21 03:00:23', NULL, 1, 12, 5, 46, 170, '652', 1),
(113, 'কালাই এসএফএসটিসি', 'Kalai SFSTC', '2023-06-21 03:04:18', '2023-06-21 03:04:18', NULL, 8, 12, 5, 46, 173, '650', 1),
(114, 'কালাই এসএফএসটিসি', 'Kali SFSTC', '2023-06-21 03:07:36', '2023-06-21 03:07:36', NULL, 8, 12, 5, 46, 172, '354', 1),
(115, 'সুজানগর এসএফএনটিসি', 'Sujanagar SFNTC', '2023-06-21 03:16:24', '2023-06-21 03:16:24', NULL, 8, 13, 5, 50, 368, '750', 1),
(116, 'সিরাজগঞ্জ এসএফএনটিসি', 'Sirajganj SFNTC', '2023-06-21 03:18:47', '2023-07-05 07:38:19', NULL, 8, 13, 5, 52, 438, '20', 1),
(117, 'রায়গঞ্জ এসএফএনটিসি', 'Raiganj SFNTC', '2023-06-21 03:21:06', '2023-07-05 07:38:39', NULL, 8, 13, 5, 52, 436, '71', 1),
(118, 'রায়গঞ্জ এসএফএনটিসি', 'Raiganj SFNTC', '2023-06-21 03:25:30', '2023-06-21 03:25:30', NULL, 8, 13, 5, 52, 435, '752', 1),
(119, 'পবা এসএফএনটিসি', 'Paba SFNTC', '2023-06-21 03:29:19', '2023-06-21 03:29:19', NULL, 8, 5, 5, 51, 392, '950', 1),
(120, 'দোখলা রেঞ্জ', 'Dokhla Range', '2023-06-21 03:30:36', '2023-06-21 03:30:36', NULL, 8, 10, 3, 34, 476, '458', 1),
(121, 'নিয়ামতপুর এসএফএনটিসি', 'Niamatpur SFNTC', '2023-06-21 03:32:30', '2023-06-21 03:32:30', NULL, 1, 5, 5, 47, 305, '951', 1),
(122, 'নওগাঁ এসএফএনটিসি', 'Naogaon SFNTC', '2023-06-21 03:35:38', '2023-06-21 03:35:38', NULL, 8, 5, 5, 47, 304, '953', 1),
(123, 'পাইকবান্দা রেঞ্জ', 'Paikbanda Range', '2023-06-21 03:39:12', '2023-06-21 03:39:12', NULL, 8, 5, 5, 47, 306, '956', 1),
(124, 'বাঁশতৈল', 'Banshtail', '2023-06-21 03:39:40', '2023-06-21 03:39:40', NULL, 8, 10, 3, 34, 479, '653', 1),
(125, 'পাইকবান্দা রেঞ্জ', 'Paikbanda Range', '2023-06-21 03:43:09', '2023-06-21 03:43:09', NULL, 1, 5, 5, 47, 301, '9501', 1),
(126, 'কোটবাড়ি রেঞ্জ', 'Kotbari Ranage', '2023-06-21 03:48:07', '2023-06-21 03:48:07', NULL, 8, 15, 2, 11, 93, '550', 1),
(127, 'অরণখোলা', 'Arankhola', '2023-06-21 03:52:58', '2023-06-21 03:52:58', NULL, 2, 10, 3, 34, 476, '693', 1),
(128, 'চাদপুর এসএফএনটিসি', 'Chandpur SFNTC', '2023-06-21 03:56:24', '2023-06-21 03:56:40', NULL, 2, 15, 2, 9, 66, '5502', 1),
(130, 'সদর রেঞ্জ', 'Sadar Range', '2023-06-21 04:18:17', '2023-06-21 04:19:23', NULL, 2, 16, 2, 13, 141, '850', 1),
(131, 'চরকাই', 'Charkai', '2023-06-21 04:21:31', '2023-06-21 04:21:31', NULL, 2, 11, 6, 53, 129, '789', 1),
(132, 'উত্তরগোবিন্দপুর', 'Uttar Gobindapur', '2023-06-21 04:25:42', '2023-06-21 04:25:42', NULL, 8, 11, 6, 53, 128, '459', 1),
(133, 'সোনাগাজী রেঞ্জ', 'Sonagazi Gazi', '2023-06-21 04:29:13', '2023-06-21 04:29:13', NULL, 8, 16, 2, 13, 144, '850', 1),
(134, 'মধ্যপাড়া', 'Madhyapara', '2023-06-21 04:36:23', '2023-06-21 04:36:23', NULL, 2, 11, 6, 53, 123, '638', 1),
(135, 'দাগনভূঞা রেঞ্জ', 'Daganbhuiyan Range', '2023-06-21 04:38:46', '2023-06-21 04:38:46', NULL, 8, 16, 2, 13, 140, '851', 1),
(136, 'ছাগলনাইয়া রেঞ্জ', 'Chhagalnaiya Range', '2023-06-21 04:40:43', '2023-06-21 04:40:43', NULL, 2, 16, 2, 13, 139, '853', 1),
(137, 'মধ্যপাড়া', 'Madhyapara', '2023-06-21 04:41:16', '2023-06-21 04:41:16', NULL, 2, 11, 6, 53, 130, '357', 1),
(138, 'পরশুরাম রেঞ্জ', 'Parshuram Range', '2023-06-21 04:42:21', '2023-06-21 04:42:21', NULL, 8, 16, 2, 13, 143, '853', 1),
(139, 'মধ্যপাড়া', 'Madhyapara', '2023-06-21 04:45:03', '2023-06-21 04:45:03', NULL, 2, 11, 6, 53, 129, '356', 1),
(140, 'শার্শা এসএফএনটিসি', 'Sharsha Range', '2023-06-21 04:53:41', '2023-06-21 04:53:41', NULL, 8, 18, 4, 37, 189, '460', 1),
(141, 'চরকাই', 'Charkai', '2023-06-21 04:59:45', '2023-06-21 04:59:45', NULL, 4, 11, 6, 53, 118, '547', 1),
(142, 'কোটচাঁদপুর এসএফএনটিসি', 'Kotchandpur SFNTC', '2023-06-21 05:00:42', '2023-06-21 05:00:42', NULL, 8, 18, 4, 38, 197, '467', 1),
(143, 'সদর', 'Sadar', '2023-06-21 06:25:02', '2023-06-21 06:25:02', NULL, 4, 11, 6, 53, 120, '265', 1),
(144, 'ঠাকুরগাঁও', 'Thakurgaon', '2023-06-21 06:52:40', '2023-06-21 06:52:40', NULL, 8, 11, 6, 60, 484, '969', 1),
(145, 'দেবীগঞ্জ', 'Debiganj', '2023-06-21 07:14:21', '2023-06-21 07:14:21', NULL, 8, 11, 6, 58, 370, '751', 1),
(147, 'জগতি', 'Joguti', '2023-06-21 07:25:32', '2023-06-21 07:25:32', NULL, 8, 19, 4, 40, 243, '150', 1),
(148, 'পঞ্চগড়', 'Panchagarh', '2023-06-21 07:26:05', '2023-07-05 07:41:12', NULL, 8, 11, 6, 58, 372, '63', 1),
(150, 'গাইবান্ধা এসএফএনটিসি', 'Gaibandha SFNTC', '2023-06-21 07:43:19', '2023-06-21 07:43:19', NULL, 8, 6, 6, 54, 147, '647', 1),
(151, 'যশোর এসএফএনটিসি', 'Jessore SFNTC', '2023-06-21 08:34:24', '2023-06-21 08:34:24', NULL, 8, 18, 4, 37, 183, '978', 1),
(152, 'পাবলাখালী রেঞ্জ', 'Pablakhali Range', '2023-06-21 08:36:36', '2023-06-21 08:36:36', NULL, 4, 2, 2, 17, 401, '201', 1),
(153, 'শিশক রেঞ্জ', 'Shsik Range', '2023-06-21 08:40:44', '2023-06-21 08:40:44', NULL, 6, 2, 2, 17, 401, '201', 1),
(154, 'মাগুরা এসএফএনটিসি', 'Magura SFNTC', '2023-06-21 08:41:43', '2023-06-21 08:41:43', NULL, 6, 18, 4, 41, 261, '444', 1),
(155, 'কাপ্তাই রেঞ্জ', 'Kaptai Range', '2023-06-21 08:43:58', '2023-06-21 08:43:58', NULL, 4, 24, 2, 17, 405, '230', 1),
(156, 'ঝিনাইদহ এসএফএনটিসি', 'Jhenaidah SFNTC', '2023-06-21 08:46:34', '2023-06-21 08:46:34', NULL, 6, 18, 4, 38, 195, '751', 1),
(157, 'কালিয়া', 'Kalia', '2023-06-21 08:49:21', '2023-06-21 08:49:21', NULL, 4, 18, 4, 43, 310, '937', 1),
(158, 'কর্ণফুলি রেঞ্জ', 'Karnaphuli Range', '2023-06-21 08:49:39', '2023-06-21 08:49:39', NULL, 4, 24, 2, 17, 405, '233', 1),
(159, 'আলিখিয়ং রেঞ্জ', 'Alikhiyong Range', '2023-06-21 08:56:20', '2023-06-21 08:57:05', NULL, 6, 24, 2, 17, 405, '234', 1),
(160, 'ফারুয়া রেঞ্জ', 'Faruya Range', '2023-06-21 08:59:57', '2023-06-21 08:59:57', NULL, 6, 24, 2, 17, 405, '235', 1),
(161, 'কুমিরা', 'Kumira', '2023-06-21 09:08:09', '2023-06-21 09:08:09', NULL, 6, 2, 2, 10, 83, '206', 1),
(162, 'বারৈয়াঢালা', 'Baraiyadhala', '2023-06-21 09:11:59', '2023-06-21 09:11:59', NULL, 6, 2, 2, 10, 75, '205', 1),
(163, 'নড়াইল এসএফএনটিসি', 'Narail SFNTC', '2023-06-21 09:12:57', '2023-06-21 09:12:57', NULL, 6, 18, 4, 43, 310, '985', 1),
(164, 'নারায়নহাট', 'Narayanhat', '2023-06-21 09:13:25', '2023-06-21 09:13:25', NULL, 4, 2, 2, 10, 72, '207', 1),
(165, 'করেরহাট', 'Korerhat', '2023-06-21 09:17:00', '2023-06-21 09:17:00', NULL, 6, 2, 2, 10, 75, '209', 1),
(166, 'কোটচাঁদপুর এসএফএনটিসি', 'Kotchandpur SFNTC', '2023-06-21 09:18:19', '2023-06-21 09:18:19', NULL, 6, 18, 4, 38, 196, '963', 1),
(167, 'মীরসরাই রেঞ্জ', 'Mirsharai Range', '2023-06-21 09:18:48', '2023-06-21 09:18:48', NULL, 4, 2, 2, 10, 75, '211', 1),
(168, 'পূর্বগংগাবর্দী (ফরিদপুর)', 'Purgangavardi (Faridpur)', '2023-06-21 09:20:53', '2023-06-21 09:20:53', NULL, 6, 21, 3, 19, 135, '777', 1),
(169, 'হাজারীখিল', 'Hazarikhil', '2023-06-21 09:24:23', '2023-06-21 09:24:23', NULL, 4, 2, 2, 10, 72, '233', 1),
(170, 'হাটহাজারী', 'Hathazari', '2023-06-21 09:30:50', '2023-06-21 09:30:50', NULL, 6, 2, 2, 10, 73, '266', 1),
(172, 'অলিনগর', 'Olinagar', '2023-06-21 09:39:11', '2023-06-21 09:39:11', NULL, 4, 2, 2, 10, 75, '203', 1),
(173, 'বারবাকিয়া', 'Barabakia', '2023-06-21 09:52:28', '2023-06-21 09:52:28', NULL, 6, 24, 2, 12, 108, '156', 1),
(174, 'বারবাকিয়া', 'Barabakia', '2023-06-21 09:54:49', '2023-06-21 09:54:49', NULL, 6, 24, 2, 12, 104, '2332', 1),
(175, 'হাসনাবাদ', 'Hasnabad', '2023-06-21 09:55:47', '2023-06-21 09:57:16', NULL, 6, 2, 2, 10, 72, '202', 1),
(176, 'দোহাজারী', 'Dohazari', '2023-06-21 09:58:44', '2023-06-21 09:58:44', NULL, 6, 24, 2, 10, 70, '999', 1),
(177, 'খুরুশিয়া', 'Khurasiya', '2023-06-21 10:06:14', '2023-06-21 10:06:14', NULL, 6, 24, 2, 10, 79, '365', 1),
(178, 'রাংগুনিয়া', 'Rangunia', '2023-06-21 10:11:00', '2023-06-21 10:11:00', NULL, 6, 24, 2, 10, 79, '213', 1),
(179, 'ইছামতি', 'Ichamati', '2023-06-21 23:27:06', '2023-06-21 23:27:06', NULL, 6, 2, 2, 10, 79, '203', 1),
(180, 'পদুয়া', 'Padua', '2023-06-21 23:57:19', '2023-06-21 23:57:19', NULL, 6, 24, 2, 10, 74, '233', 1),
(181, 'পটিয়া', 'Ptiya', '2023-06-22 02:18:31', '2023-06-22 02:18:31', NULL, 6, 24, 2, 10, 70, '230', 1),
(182, 'কালীপুর', 'Kalipur', '2023-06-22 02:19:33', '2023-06-22 02:19:33', NULL, 6, 24, 2, 10, 68, '555', 1),
(183, 'চুনতি', 'Chunati', '2023-06-22 02:22:29', '2023-06-22 02:22:29', NULL, 6, 24, 2, 10, 74, '653', 1),
(185, 'মাদার্শা', 'Madarsha', '2023-06-22 02:39:48', '2023-06-22 02:39:48', NULL, 6, 24, 2, 10, 82, '239', 1),
(186, 'চুনতি', 'Chunati', '2023-06-22 02:59:03', '2023-06-22 02:59:03', NULL, 6, 24, 2, 12, 104, '321', 1),
(187, 'ঢালচর রেঞ্জ', 'Dhalchar Range', '2023-06-22 03:00:58', '2023-06-22 03:00:58', NULL, 6, 31, 1, 3, 34, '360', 1),
(188, 'লালমোহন রেঞ্জ', 'Lalmohan Range', '2023-06-22 03:05:11', '2023-06-22 03:05:37', NULL, 3, 31, 1, 3, 36, '363', 1),
(189, 'দৌলতখান রেঞ্জ', 'Daulatkhan Range', '2023-06-22 03:10:50', '2023-06-22 03:10:50', NULL, 3, 31, 1, 3, 35, '364', 1),
(190, 'মনপুরা রেঞ্জ', 'Manpura Range', '2023-06-22 03:19:52', '2023-06-22 03:19:52', NULL, 3, 31, 1, 3, 37, '360', 1),
(191, 'চরফ্যাশন রেঞ্জ', 'CharFasson Range', '2023-06-22 03:32:01', '2023-07-05 08:54:30', NULL, 3, 31, 1, 3, 34, '366', 1),
(192, 'কুকরী মুকরী রেঞ্জ', 'Kukri Mukri Range', '2023-06-22 03:36:02', '2023-06-22 03:36:02', NULL, 3, 31, 1, 3, 34, '367', 1),
(193, 'জাহাজমারা রেঞ্জ', 'Jahajmara Range', '2023-06-22 03:40:24', '2023-06-22 03:40:24', NULL, 3, 30, 2, 16, 354, '330', 1),
(194, 'নলচিরা রেঞ্জ', 'Nalchira Range', '2023-06-22 03:43:20', '2023-06-22 03:43:20', NULL, 3, 30, 2, 16, 354, '331', 1),
(195, 'সাগরিয়া রেঞ্জ', 'Sagarya Range', '2023-06-22 03:45:29', '2023-06-22 03:45:29', NULL, 3, 30, 2, 16, 354, '336', 1),
(196, 'চরবাটা রেঞ্জ', 'Chorbata Range', '2023-06-22 03:47:41', '2023-06-22 03:47:41', NULL, 3, 30, 2, 16, 354, '332', 1),
(197, 'চরআলাউদ্দিন রেঞ্জ', 'Choraliuddin Range', '2023-06-22 03:54:02', '2023-06-22 03:54:02', NULL, 3, 30, 2, 16, 358, '336', 1),
(198, 'কোম্পানিগঞ্জ রেঞ্জ', 'Companiganj Range', '2023-06-22 04:05:01', '2023-06-22 04:05:01', NULL, 3, 30, 2, 16, 353, '3311', 1),
(199, 'নোয়াখালী রেঞ্জ', 'Noakhali Rage', '2023-06-22 04:11:11', '2023-06-22 04:11:11', NULL, 3, 30, 2, 16, 359, '312', 1),
(200, 'হাবিবিয়া রেঞ্জ', 'Habibia Range', '2023-06-22 04:13:22', '2023-06-22 04:13:22', NULL, 3, 30, 2, 16, 354, '3313', 1),
(201, 'মাইজদী এসএফএনটিসি', 'Maijdee SFNTC', '2023-06-22 04:17:40', '2023-06-22 04:17:40', NULL, 3, 30, 2, 16, 358, '3314', 1),
(202, 'লক্ষীপুর সদর নার্সারী রেঞ্জ', 'Lakshmipur Sadar Narsari Range', '2023-06-22 04:34:03', '2023-06-22 04:34:03', NULL, 3, 30, 2, 15, 247, '331', 1),
(203, 'চর আলেকজান্ডার রেঞ্জ', 'Char Alexandar Range', '2023-06-22 04:36:18', '2023-06-22 04:36:18', NULL, 3, 30, 2, 15, 250, '3301', 1),
(204, 'ফাসিয়াখালী', 'Fasciakhali', '2023-06-22 09:24:28', '2023-06-22 09:24:28', NULL, 3, 25, 2, 12, 104, '534', 1),
(205, 'ফুলছড়ি', 'Phulchari', '2023-06-22 09:27:28', '2023-06-22 09:27:28', NULL, 6, 25, 2, 12, 104, '352', 1),
(206, 'রাজঘাট', 'Rajghat', '2023-06-22 09:32:56', '2023-06-22 09:32:56', NULL, 6, 25, 2, 12, 104, '563', 1),
(207, 'জোয়ারিনালা', 'Jowarianala', '2023-06-22 09:39:21', '2023-06-22 09:39:21', NULL, 6, 25, 2, 12, 109, '633', 1),
(208, 'ফুলছড়ি', 'Phulchari', '2023-06-22 09:47:57', '2023-06-22 09:47:57', NULL, 6, 25, 2, 12, 105, '787', 1),
(209, 'ঈদগাঁও', 'Eidgaon', '2023-07-04 06:13:03', '2023-07-04 06:13:03', NULL, 6, 25, 2, 12, 109, '635', 1),
(210, 'ঈদগড়', 'Eidgarh', '2023-07-04 06:22:42', '2023-07-04 06:22:42', NULL, 6, 25, 2, 12, 109, '565', 1),
(211, 'মেহেরঘোনা', 'Meherghona', '2023-07-04 06:33:18', '2023-07-04 06:33:18', NULL, 6, 25, 2, 12, 105, '235', 1),
(212, 'বাঘখালী', 'Bagkhali', '2023-07-04 06:49:52', '2023-07-04 06:49:52', NULL, 6, 25, 2, 12, 109, '856', 1),
(213, 'ঈদগাঁও', 'Eidgaon', '2023-07-04 06:59:27', '2023-07-04 06:59:27', NULL, 6, 25, 2, 12, 104, '785', 1),
(214, 'পিএমখালী', 'P.M.Khali', '2023-07-04 07:32:50', '2023-07-04 07:32:50', NULL, 6, 25, 2, 12, 105, '999', 1),
(215, 'ঈদগাঁও', 'Eidgaon', '2023-07-04 07:39:33', '2023-07-04 07:39:33', NULL, 6, 25, 2, 12, 105, '555', 1),
(216, 'কক্সবাজার', 'Cox\'s Bazar', '2023-07-04 07:46:12', '2023-07-04 07:46:12', NULL, 6, 26, 2, 12, 105, '356', 1),
(217, 'রাজারকুল', 'Rajarkul', '2023-07-04 07:52:17', '2023-07-04 07:52:17', NULL, 6, 26, 2, 12, 109, '353', 1),
(218, 'রাজারকুল', 'Rajarkul', '2023-07-04 07:57:36', '2023-07-04 07:57:36', NULL, 6, 26, 2, 12, 111, '999', 1),
(219, 'পানেরছড়া', 'Panerchara', '2023-07-04 08:00:32', '2023-07-04 08:00:32', NULL, 6, 26, 2, 12, 109, '666', 1),
(220, 'ধোয়াপালং', 'Dhwapalang', '2023-07-04 08:03:40', '2023-07-04 08:03:40', NULL, 6, 26, 2, 12, 109, '569', 1),
(221, 'উখিয়া', 'Ukhiya', '2023-07-04 08:09:27', '2023-07-04 08:09:27', NULL, 6, 26, 2, 12, 111, '985', 1),
(222, 'ইনানী', 'Inani', '2023-07-04 08:21:10', '2023-07-04 08:21:10', NULL, 6, 26, 2, 12, 111, '456', 1),
(223, 'হোয়াইক্যং', 'Whykong', '2023-07-04 08:28:47', '2023-07-04 08:28:47', NULL, 6, 26, 2, 12, 110, '8563', 1),
(224, 'হোয়াইক্যং', 'Whykong', '2023-07-04 08:33:17', '2023-07-04 08:33:17', NULL, 6, 26, 2, 12, 111, '563', 1),
(225, 'শিলখালী', 'Shilkali', '2023-07-04 08:35:39', '2023-07-04 08:35:39', NULL, 6, 26, 2, 12, 110, '554', 1),
(226, 'টেকনাফ', 'Teknaf', '2023-07-04 08:37:41', '2023-07-04 08:37:41', NULL, 6, 26, 2, 12, 110, '365', 1),
(227, 'পানেরছড়া', 'Panerchara', '2023-07-04 08:45:14', '2023-07-04 08:45:14', NULL, 6, 26, 2, 12, 105, '344', 1),
(228, 'সদর উপজেলা', 'Sadar Range', '2023-07-04 08:59:53', '2023-07-04 08:59:53', NULL, 6, 27, 2, 7, 11, '344', 1),
(229, 'বেতছড়া রেঞ্জ', 'Betchara Range', '2023-07-04 09:01:44', '2023-07-04 09:01:44', NULL, 6, 27, 2, 7, 14, '879', 1),
(230, 'রাঙ্গাবালি রেঞ্জ', 'Rangabali Range', '2023-07-04 09:10:10', '2023-07-04 09:10:10', NULL, 6, 32, 1, 5, 77, '878', 1),
(231, 'গলাচিপা রেঞ্জ', 'Galachipa', '2023-07-04 09:13:16', '2023-07-04 09:13:16', NULL, 3, 32, 1, 5, 377, '344', 1),
(232, 'চরমোন্তাজ রেঞ্জ', 'Charmontaj Range', '2023-07-04 09:33:21', '2023-07-05 09:26:53', NULL, 3, 32, 1, 5, 77, '77', 1),
(233, 'মহিপুর রেঞ্জ', 'Mohipur range', '2023-07-04 09:38:51', '2023-07-04 09:38:51', NULL, 3, 32, 1, 5, 378, '465', 1),
(234, 'এসএফপিসি কলাপাড়া', 'SFPC Kalapara', '2023-07-04 09:42:06', '2023-07-04 09:42:06', NULL, 3, 32, 1, 5, 378, '567', 1),
(235, 'দশমিনা রেঞ্জ', 'Dashmina Range', '2023-07-04 09:48:03', '2023-07-04 09:48:03', NULL, 3, 32, 1, 5, 375, '657', 1),
(236, 'পাথরঘাটা রেঞ্জ', 'Patharghata', '2023-07-04 09:50:58', '2023-07-04 09:50:58', NULL, 3, 32, 1, 1, 21, '654', 1),
(237, 'এসএফএনটিসি বরগুনা', 'SFNTC Barguna', '2023-07-04 09:53:36', '2023-07-04 09:53:36', NULL, 3, 32, 1, 1, 19, '677', 1),
(238, 'আমতলী রেঞ্জ', 'Amtoli Range', '2023-07-04 10:01:48', '2023-07-04 10:01:48', NULL, 3, 32, 1, 1, 497, '468', 1),
(239, 'এসএফপিসি বাউফল', 'SFPC Bowfall', '2023-07-04 14:36:20', '2023-07-04 14:36:20', NULL, 3, 32, 1, 5, 374, '456', 1),
(240, 'এসএফপিসি আমতলী', 'SFPC Amtali', '2023-07-04 14:40:23', '2023-07-04 14:40:23', NULL, 3, 32, 1, 1, 17, '654', 1),
(241, 'সদর রেঞ্জ পটুয়াখালী', 'Patuakhali Sadar Range', '2023-07-04 14:42:47', '2023-07-04 14:42:47', NULL, 3, 32, 1, 5, 380, '342', 1),
(242, 'এসএফপিসি মির্জাগঞ্জ', 'SFPC Mirzaganj', '2023-07-04 14:51:38', '2023-07-04 14:51:38', NULL, 3, 32, 1, 5, 379, '345', 1),
(243, 'সদর রেঞ্জ', 'Sadar Range', '2023-07-04 15:02:08', '2023-07-04 15:02:08', NULL, 3, 1, 1, 2, 24, '325', 1),
(244, 'কাশিপুর এসএফএনটিসি', 'Kashipur SFNTC', '2023-07-04 15:06:08', '2023-07-04 15:06:08', NULL, 3, 1, 1, 2, 23, '232', 1),
(245, 'কাশিপুর এসএফএনটিসি', 'Kashipur SFNTC', '2023-07-04 15:09:38', '2023-07-04 15:09:38', NULL, 3, 1, 1, 2, 25, '324', 1),
(246, 'মুলাদি এসএফপিসি', 'Muladi SFPC', '2023-07-04 15:12:29', '2023-07-04 15:12:29', NULL, 3, 1, 1, 2, 29, '232', 1),
(247, 'ঝালকাঠি এসএফএনটিসি', 'Jhalakathi SFNTC.', '2023-07-04 15:15:18', '2023-07-04 15:15:18', NULL, 3, 1, 1, 4, 190, '121', 1),
(248, 'ঝালকাঠি এসএফএনটিসি', 'Jhalakathi SFNTC', '2023-07-04 15:17:25', '2023-07-04 15:17:25', NULL, 3, 1, 1, 4, 192, '344', 1),
(249, 'মহেশখালী', 'Moheskhali', '2023-07-05 02:08:10', '2023-07-05 02:08:10', NULL, 3, 33, 2, 12, 107, '123', 1),
(250, 'বাঁশখালী', 'Banshkhali', '2023-07-05 02:16:46', '2023-07-05 02:16:46', NULL, 6, 33, 2, 10, 68, '256', 1),
(251, 'ছনুয়া', 'Chanua', '2023-07-05 02:20:52', '2023-07-05 02:20:52', NULL, 6, 33, 2, 10, 68, '456', 1),
(252, 'সদর', 'Sadar', '2023-07-05 02:23:39', '2023-07-05 02:23:39', NULL, 6, 33, 2, 10, 83, '653', 1),
(253, 'মিরসরাই', 'Mirsharai', '2023-07-05 02:26:20', '2023-07-05 02:26:20', NULL, 6, 33, 2, 10, 75, '346', 1),
(254, 'সন্দ্বীপ', 'Sandwip', '2023-07-05 02:35:34', '2023-07-05 02:35:34', NULL, 6, 33, 2, 10, 81, '635', 1),
(255, 'উড়িরচর', 'Urirchar', '2023-07-05 02:38:53', '2023-07-05 02:38:53', NULL, 6, 33, 2, 10, 81, '245', 1),
(256, 'জাতীয় উদ্যান রেঞ্জ', 'National Park Range', '2023-07-05 02:41:25', '2023-07-05 02:41:25', NULL, 6, 34, 3, 20, 152, '371', 1),
(257, 'কুতুবদিয়া', 'Kutubdia', '2023-07-05 02:44:09', '2023-07-05 02:44:09', NULL, 1, 33, 2, 12, 106, '467', 1),
(258, 'টেকনাফ', 'Teknaf', '2023-07-05 02:47:35', '2023-07-05 02:47:35', NULL, 6, 33, 2, 12, 110, '456', 1),
(259, 'ভাওয়াল রেঞ্জ', 'Bhawal Range', '2023-07-05 02:52:59', '2023-07-05 02:52:59', NULL, 6, 34, 3, 20, 152, '372', 1),
(260, 'সীতাকুন্ড', 'Sitakunda', '2023-07-05 02:55:18', '2023-07-05 02:55:18', NULL, 1, 33, 2, 10, 83, '465', 1),
(261, 'গোরকঘাটা', 'Gorakghata', '2023-07-05 02:58:10', '2023-07-05 02:58:10', NULL, 6, 33, 2, 12, 107, '347', 1),
(262, 'জলদী বন্যপ্রাণী অভয়ারণ্য রেঞ্জ', 'Jaldi Wildlife Sanctuary Range', '2023-07-05 03:01:55', '2023-07-05 03:02:13', NULL, 6, 35, 2, 10, 68, '380', 1),
(263, 'মৌলভীবাজার বন্যপ্রাণী রেঞ্জ সাতছড়ি', 'Moulvibazar Wildlife Range, Satchari', '2023-07-05 08:05:23', '2023-07-05 08:05:23', NULL, 6, 36, 7, 61, 165, '02', 1),
(264, 'পূর্ব, পশ্চিম ও সদর রেঞ্জ', 'East, West and Sadara Ranges', '2023-07-05 08:24:19', '2023-07-05 08:24:19', NULL, 10, 37, 3, 18, NULL, '01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forest_states`
--

CREATE TABLE `forest_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `grocode` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forest_states`
--

INSERT INTO `forest_states` (`id`, `name_bn`, `name_en`, `grocode`, `created_at`, `updated_at`, `deleted_at`, `status_id`) VALUES
(1, 'কেন্দ্রিয় অঞ্চল , ঢাকা', 'Central Circle, Dhaka', '1', '2022-07-13 16:00:59', '2023-07-05 07:56:19', NULL, 1),
(2, 'সামাজিক বনায়ন অঞ্চল, ঢাকা', 'Social Forestry Circle, Dhaka', '2', '2022-07-13 16:01:55', '2023-07-05 07:56:25', NULL, 1),
(3, 'উপকূলীয় অঞ্চল, বরিশাল', 'Coastal Circle, Barishal', '3', '2022-07-13 16:02:52', '2023-07-05 07:56:58', NULL, 1),
(4, 'সামাজিক বন অঞ্চল, যশোর', 'Social Forest Circle, Jashore', '4', '2022-07-13 16:04:19', '2023-07-05 07:57:08', NULL, 1),
(5, 'খুলনা অঞ্চল', 'Khulna Circle', '5', '2022-07-13 16:05:01', '2023-07-05 07:57:21', NULL, 1),
(6, 'চট্টগ্রাম, অঞ্চল', 'Chattogram, Circle', '6', '2022-07-13 16:05:48', '2023-07-05 07:57:33', NULL, 1),
(7, 'রাঙামাটি অঞ্চল', 'Rangamati, Circle', '7', '2022-07-13 16:06:19', '2023-07-05 07:57:55', NULL, 1),
(8, 'সামাজিক বন অঞ্চল, বগুড়া', 'Social Forest Circle, Bogra', '8', '2022-07-13 16:07:09', '2023-07-05 07:57:42', NULL, 1),
(9, 'প্রধান কার্যালয়', 'Head Office', '0001', '2022-08-24 16:05:19', '2022-08-24 16:05:19', NULL, 1),
(10, 'বন্যপ্রাণী ও প্রকৃতি সংরক্ষণ অঞ্চল', 'WILDLIFE & NATURE CONSERVATION CIRCLE', '009', '2023-07-05 07:55:28', '2023-07-05 07:55:28', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `freedom_fighte_relations`
--

CREATE TABLE `freedom_fighte_relations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freedom_fighte_relations`
--

INSERT INTO `freedom_fighte_relations` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'সন্তান', 'Children', '2024-06-01 04:57:34', '2024-06-01 04:57:34', NULL),
(2, 'নাতি/নাতনি', 'Grand Child', '2024-06-01 04:58:08', '2024-06-01 04:58:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'পুরুষ', 'Male', NULL, NULL, NULL),
(2, 'মহিলা', 'Female', NULL, NULL, NULL),
(3, 'তৃতীয় লিঙ্গ', 'Third Gender', '2024-06-01 04:46:38', '2024-06-01 04:46:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `salary_range` varchar(150) DEFAULT NULL,
  `current_basic_pay` varchar(150) DEFAULT NULL,
  `basic_pay_scale` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name_bn`, `name_en`, `salary_range`, `current_basic_pay`, `basic_pay_scale`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'গ্রেড ১', 'Grade 1', '78000', '', 'Scale 1', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(2, 'গ্রেড ২', 'Grade 2', '66000-76490', '', 'Scale 2', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(3, 'গ্রেড ৩', 'Grade 3', '56500-74400', '', 'Scale 3', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(4, 'গ্রেড ৪', 'Grade 4', '50000-71200', '', 'Scale 4', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(5, 'গ্রেড ৫', 'Grade 5', '43000-69850', '', 'Scale 5', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(6, 'গ্রেড ৬', 'Grade 6', '35500-67010', '', 'Scale 6', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(7, 'গ্রেড ৭', 'Grade 7', '29000-63410', '', 'Scale 7', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(8, 'গ্রেড ৮', 'Grade 8', '23000-55470', '', 'Scale 8', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(9, 'গ্রেড ৯', 'Grade 9', '22000-53060', '', 'Scale 9', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(10, 'গ্রেড ১০', 'Grade 10', '16000-38640', '', 'Scale 10', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(11, 'গ্রেড ১১', 'Grade 11', '12500-30230', '', 'Scale 11', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(12, 'গ্রেড ১২', 'Grade 12', '11300-27300', '', 'Scale 12', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(13, 'গ্রেড ১৩', 'Grade 13', '11000-26590', '', 'Scale 13', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(14, 'গ্রেড ১৪', 'Grade 14', '10200-24680', '', 'Scale 14', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(15, 'গ্রেড ১৫', 'Grade 15', '9700-23490', '', 'Scale 15', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(16, 'গ্রেড ১৬', 'Grade 16', '9300-22490', '', 'Scale 16', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(17, 'গ্রেড ১৭', 'Grade 17', '9000-21800', '', 'Scale 17', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(18, 'গ্রেড ১৮', 'Grade 18', '8800-21310', '', 'Scale 18', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(19, 'গ্রেড ১৯', 'Grade 19', '8500-20570', '', 'Scale 19', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL),
(20, 'গ্রেড ২০', 'Grade 20', '8250-20010', '', 'Scale 20', '2024-05-29 09:29:57', '2024-05-29 09:29:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_histories`
--

CREATE TABLE `job_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_1` varchar(150) DEFAULT NULL,
  `joining_date` date NOT NULL,
  `release_date` date NOT NULL,
  `level_2` varchar(150) DEFAULT NULL,
  `level_3` varchar(150) DEFAULT NULL,
  `level_4` varchar(150) DEFAULT NULL,
  `level_5` varchar(150) DEFAULT NULL,
  `institutename` varchar(150) DEFAULT NULL,
  `academy_type` varchar(150) DEFAULT NULL,
  `acadaylocation` varchar(150) DEFAULT NULL,
  `posting_in_circle` varchar(150) DEFAULT NULL,
  `postingindivision` varchar(150) DEFAULT NULL,
  `posting_in_range` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `designation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `grade_id` bigint(20) UNSIGNED DEFAULT NULL,
  `circle_list_id` bigint(20) UNSIGNED DEFAULT NULL,
  `division_list_id` bigint(20) UNSIGNED DEFAULT NULL,
  `range_list_id` bigint(20) UNSIGNED DEFAULT NULL,
  `beat_list_id` bigint(20) UNSIGNED DEFAULT NULL,
  `office_unit_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_histories`
--

INSERT INTO `job_histories` (`id`, `level_1`, `joining_date`, `release_date`, `level_2`, `level_3`, `level_4`, `level_5`, `institutename`, `academy_type`, `acadaylocation`, `posting_in_circle`, `postingindivision`, `posting_in_range`, `created_at`, `updated_at`, `designation_id`, `employee_id`, `grade_id`, `circle_list_id`, `division_list_id`, `range_list_id`, `beat_list_id`, `office_unit_id`) VALUES
(9, NULL, '2024-05-22', '2024-06-01', 'Ban Bhaban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-01 05:42:46', '2024-06-01 05:42:46', 6, 4, 9, NULL, NULL, NULL, NULL, 1),
(10, NULL, '2024-05-27', '2024-04-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Posting in Office', 'Posting in Office', '2024-06-01 08:33:57', '2024-06-01 08:33:57', 15, 4, 3, 2, NULL, NULL, NULL, 2),
(8, NULL, '2024-05-01', '2024-05-25', 'gfyfu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-27 13:49:52', '2024-05-27 13:49:52', 1, 4, 1, NULL, NULL, NULL, NULL, 1),
(11, NULL, '2024-06-18', '2024-06-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Range/SFNTC/Station', 'Beat/SFNTC/Camp', '2024-06-01 12:52:25', '2024-06-01 12:52:25', 15, 1, 6, 2, NULL, NULL, 284, 2),
(12, NULL, '2018-01-02', '2018-03-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-01 13:19:36', '2024-06-01 13:19:36', 15, 5, 3, 1, NULL, NULL, NULL, 2),
(13, NULL, '2023-03-28', '2024-05-27', NULL, NULL, NULL, NULL, 'Institution', 'FSTI', NULL, 'Chittagong', NULL, NULL, '2024-06-01 13:49:51', '2024-06-01 13:49:51', 153, 6, 3, NULL, NULL, NULL, NULL, 3),
(14, NULL, '2024-06-04', '2024-06-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Range/SFNTC/Station', 'Beat/SFNTC/Camp', '2024-06-01 14:18:13', '2024-06-01 14:18:13', 15, 3, 5, 2, NULL, NULL, 284, 2),
(15, NULL, '2024-06-01', '2024-06-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Range/SFNTC/Station', 'Beat/SFNTC/Camp', '2024-06-01 19:23:15', '2024-06-01 19:23:15', 13, 7, 4, 2, NULL, NULL, 286, 2),
(16, NULL, '2001-01-30', '2006-06-30', 'Forestry Sector Project(FSP) , Ban Bhaban , Mohakhali , Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-02 10:22:28', '2024-06-02 10:22:28', 11, 9, 9, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `joininginfos`
--

CREATE TABLE `joininginfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_revenue_bn` varchar(150) NOT NULL,
  `project_revenue_en` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joininginfos`
--

INSERT INTO `joininginfos` (`id`, `project_revenue_bn`, `project_revenue_en`, `created_at`, `updated_at`) VALUES
(1, 'উন্নয়ন প্রকল্প', 'Development Project', NULL, '2024-05-27 14:00:27'),
(2, 'রাজস্ব', 'Revenue', NULL, NULL),
(3, 'অ্যাডহক', 'Adhoc', '2024-05-30 10:53:01', '2024-05-30 10:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `read_id` bigint(20) UNSIGNED DEFAULT NULL,
  `write_id` bigint(20) UNSIGNED DEFAULT NULL,
  `speak_id` bigint(20) UNSIGNED DEFAULT NULL,
  `language_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `created_at`, `updated_at`, `employee_id`, `read_id`, `write_id`, `speak_id`, `language_id`) VALUES
(1, '2024-05-27 13:17:07', '2024-05-27 13:17:07', 1, 2, 2, 3, 1),
(2, '2024-06-01 05:55:14', '2024-06-01 05:55:14', 3, 3, 3, 3, 1),
(3, '2024-06-01 05:55:31', '2024-06-01 05:55:31', 3, 3, 3, 2, 2),
(4, '2024-06-01 08:39:39', '2024-06-01 08:39:39', 4, 3, 3, 3, 1),
(5, '2024-06-01 13:25:53', '2024-06-01 13:25:53', 5, 3, 3, 3, 1),
(6, '2024-06-01 13:58:54', '2024-06-01 13:58:54', 6, 3, 3, 3, 1),
(12, '2024-06-02 08:48:54', '2024-06-02 08:48:54', 7, 1, 1, 1, 2),
(11, '2024-06-02 08:48:43', '2024-06-02 08:48:43', 7, 3, 3, 3, 1),
(9, '2024-06-02 08:46:20', '2024-06-02 08:46:20', 2, 1, 1, 1, 1),
(10, '2024-06-02 08:46:29', '2024-06-02 08:46:29', 2, 2, 2, 3, 2),
(13, '2024-06-02 10:50:14', '2024-06-02 10:50:14', 9, 3, 3, 3, 1),
(14, '2024-06-02 10:50:23', '2024-06-02 10:50:23', 9, 3, 3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `language_lists`
--

CREATE TABLE `language_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `nmae_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_lists`
--

INSERT INTO `language_lists` (`id`, `name`, `nmae_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'বাংলা', 'Bengali', NULL, '2024-06-01 04:56:58', NULL),
(2, 'ইংরেজি', 'English', NULL, '2024-06-01 04:56:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_proficiencies`
--

CREATE TABLE `language_proficiencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_proficiencies`
--

INSERT INTO `language_proficiencies` (`id`, `name`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'চলনসই', 'Basic', '2024-05-27 13:12:13', '2024-05-27 13:12:13', NULL),
(2, 'ভাল', 'Good', '2024-05-27 13:12:29', '2024-05-27 13:12:29', NULL),
(3, 'খুব ভাল', 'Very Good', '2024-05-27 13:12:59', '2024-05-27 13:12:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leave_categories`
--

CREATE TABLE `leave_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `value` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_categories`
--

INSERT INTO `leave_categories` (`id`, `name_bn`, `name_en`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'অর্জিত ছুটি', 'Earned Leave', NULL, NULL, NULL, NULL),
(2, 'অসাধারণ ছুটি', 'Extraordinary Leave', NULL, NULL, NULL, NULL),
(3, 'অধ্যয়ন ছুটি', 'Study Leave', NULL, NULL, NULL, NULL),
(4, 'সংগনিরোধ ছুটি', 'Quarantine Leave', NULL, NULL, NULL, NULL),
(5, 'প্রসূতি ছুটি', 'Maternity Leave', NULL, NULL, NULL, NULL),
(6, 'প্রাপ্যতাবিহীন ছুটি', 'Leave not due', NULL, NULL, NULL, NULL),
(7, 'অবসর উত্তর ছুটি', 'Post Retirement Leave', NULL, NULL, NULL, NULL),
(8, 'নৈমিত্তিক ছুটি', 'Casual Leave', NULL, NULL, NULL, NULL),
(9, 'সাধারণ ছুটি', 'Public Holiday', NULL, NULL, NULL, NULL),
(10, 'নির্বাহী আদেশে ছুটি', 'Government Holiday', NULL, NULL, NULL, NULL),
(11, 'ঐচ্ছিক ছুটি', 'Optional Leave', NULL, NULL, NULL, NULL),
(12, 'শ্রান্তি বিনোদন ছুটি', 'Rest and Recreation Leave', NULL, NULL, NULL, NULL),
(13, 'অক্ষমতা জনিত বিশেষ ছুটি', 'Special Disability Leave', NULL, NULL, NULL, NULL),
(14, 'বিশেষ অসুস্থতা জনিত ছুটি', 'Special Sick Leave', NULL, NULL, NULL, NULL),
(15, 'অবকাশ বিভাগের ছুটি', 'Leave of Vacation Department', NULL, NULL, NULL, NULL),
(16, 'বিভাগীয় ছুটি', 'Departmental Leave', NULL, NULL, NULL, NULL),
(17, 'চিকিৎসালয় ছুটি', 'Hospital Leave', NULL, NULL, NULL, NULL),
(18, 'বাধ্যতামূলক ছুটি', 'Compulsory Leave', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leave_records`
--

CREATE TABLE `leave_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `leave_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_of_leave_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_records`
--

INSERT INTO `leave_records` (`id`, `start_date`, `end_date`, `reason`, `created_at`, `updated_at`, `deleted_at`, `employee_id`, `leave_category_id`, `type_of_leave_id`) VALUES
(1, '2024-05-27', '2024-05-29', NULL, '2024-05-27 12:16:03', '2024-05-27 12:21:16', NULL, 1, 1, 1),
(2, '2024-05-30', '2024-05-31', NULL, '2024-06-01 05:44:08', '2024-06-01 05:44:08', NULL, 3, 9, 1),
(3, '2024-06-01', '2024-06-04', NULL, '2024-06-01 08:34:51', '2024-06-01 08:34:51', NULL, 4, 2, 1),
(4, '2023-01-04', '2023-04-07', NULL, '2024-06-01 13:20:26', '2024-06-01 13:20:26', NULL, 5, 2, 1),
(5, '2019-03-14', '2024-06-01', NULL, '2024-06-01 13:50:58', '2024-06-01 13:50:58', NULL, 6, 1, 1),
(6, '2024-06-01', '2024-06-04', '<p>পারসোনাল</p>', '2024-06-01 18:53:58', '2024-06-01 18:53:58', NULL, 7, 3, 1),
(7, '2014-11-26', '2015-02-26', '<p>Personal Reason .</p>', '2024-06-02 10:25:35', '2024-06-02 10:25:35', NULL, 9, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `value` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `name_bn`, `name_en`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'সম্পূর্ন বেতনে ছুটি', 'Leave with full payment', NULL, '2024-05-27 12:15:33', '2024-05-27 12:15:33', NULL),
(2, 'অর্ধ বেতনে ছুটি', 'Leave with half payment', NULL, '2024-05-27 12:15:57', '2024-05-27 12:15:57', NULL),
(3, 'বিনা বেতনে ছুটি', 'Leave without payment', NULL, '2024-06-01 05:00:05', '2024-06-01 05:00:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `license_types`
--

CREATE TABLE `license_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `license_types`
--

INSERT INTO `license_types` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ভারী', 'Heavy', NULL, NULL, NULL),
(2, 'হালকা', 'Light', NULL, NULL, NULL),
(3, 'লাইসেন্স নেই', 'No licence', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maritalstatuses`
--

CREATE TABLE `maritalstatuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `value` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maritalstatuses`
--

INSERT INTO `maritalstatuses` (`id`, `name`, `name_en`, `value`, `created_at`, `updated_at`) VALUES
(1, 'বিবাহিত', 'Married', '1', NULL, NULL),
(2, 'অবিবাহিত', 'Unmarried', '2', NULL, NULL),
(3, 'তালাকপ্রাপ্ত', 'Divorced', '3', '2024-06-01 04:45:59', '2024-06-02 09:51:19'),
(4, 'বিধবা', 'Widow', '4', '2024-06-02 09:49:48', '2024-06-02 09:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(150) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `mime_type` varchar(150) DEFAULT NULL,
  `disk` varchar(150) NOT NULL,
  `conversions_disk` varchar(150) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\EmployeeList', 1, '060f7572-b35d-4bac-aef3-3502eeb5be8c', 'nid_upload', '66541a97e1fe0_android-removebg-preview', '66541a97e1fe0_android-removebg-preview.png', 'image/png', 'public', 'public', 46008, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 1, '2024-05-27 09:57:48', '2024-05-27 09:57:49'),
(2, 'App\\Models\\EmployeeList', 1, 'e64bc745-c25c-44dd-83bd-24d1bb5588db', 'license_upload', '66541b797c5b4_android-removebg-preview', '66541b797c5b4_android-removebg-preview.png', 'image/png', 'public', 'public', 46008, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 2, '2024-05-27 09:57:49', '2024-05-27 09:57:49'),
(3, 'App\\Models\\EmployeeList', 1, '8267a3b1-a5fc-4c39-b843-58ec1e0014bf', 'first_joining_order', '66541f9f2fcca_android', '66541f9f2fcca_android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 3, '2024-05-27 09:57:49', '2024-05-27 09:57:49'),
(4, 'App\\Models\\Child', 1, '4c3a3589-9bd5-48db-9172-4af14bdb3b88', 'birth_certificate', '665431caf211a_android', '665431caf211a_android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 4, '2024-05-27 11:10:39', '2024-05-27 11:10:39'),
(5, 'App\\Models\\LeaveRecord', 0, '01e78b87-cc36-4b3f-bf7b-41aa3da8ec12', 'ck-media', 'android', 'android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 5, '2024-05-27 12:08:35', '2024-05-27 12:08:35'),
(6, 'App\\Models\\LeaveRecord', 0, '9bba5a4a-63fd-4fe1-97d1-597963db56a8', 'ck-media', 'android', 'android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 6, '2024-05-27 12:08:53', '2024-05-27 12:08:53'),
(7, 'App\\Models\\LeaveRecord', 1, '342e0f11-0bf3-4abc-84a4-6fd6e2e7ea49', 'ck-media', 'android', 'android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 7, '2024-05-27 12:15:56', '2024-05-27 12:16:03'),
(8, 'App\\Models\\Extracurriculam', 1, '8090577d-8535-4d45-9021-c28bb70072b1', 'attatchment', '66544b13bbc34_android', '66544b13bbc34_android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 8, '2024-05-27 12:57:57', '2024-05-27 12:57:57'),
(9, 'App\\Models\\Publication', 1, 'bba4776a-aede-4113-afca-b34f5ce787f3', 'ck-media', 'play store', 'play-store.png', 'image/png', 'public', 'public', 7284, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 9, '2024-05-27 13:00:50', '2024-05-27 13:00:52'),
(10, 'App\\Models\\CriminalProsecutione', 1, 'e09ca84b-42f5-44c0-a930-826ba12cdcfd', 'court_order', '66544e9c035fe_play store', '66544e9c035fe_play-store.png', 'image/png', 'public', 'public', 7284, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 10, '2024-05-27 13:13:06', '2024-05-27 13:13:06'),
(11, 'App\\Models\\CriminalproDisciplinary', 1, 'c3d29690-946a-4517-a995-7f5a4a7a74a3', 'order_upload_file', '66544f76b568c_android', '66544f76b568c_android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 11, '2024-05-27 13:16:45', '2024-05-27 13:16:45'),
(12, 'App\\Models\\Child', 2, '01e75f55-13de-46a6-9eb1-7d094ec60e1e', 'birth_certificate', '665450a764087_android', '665450a764087_android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 12, '2024-05-27 13:23:54', '2024-05-27 13:23:54'),
(13, 'App\\Models\\Child', 3, 'db7da9d6-c843-4236-8dad-10266a694e86', 'birth_certificate', '665451589442d_android', '665451589442d_android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 13, '2024-05-27 13:25:06', '2024-05-27 13:25:06'),
(22, 'App\\Models\\EmployeeList', 7, 'f91f0f70-3ff1-4037-bc81-899f92e0ca10', 'nid_upload', '665b2cbba0251_2', '665b2cbba0251_2.PNG', 'image/png', 'public', 'public', 607133, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 19, '2024-06-01 18:17:33', '2024-06-01 18:17:34'),
(16, 'App\\Models\\EmployeePromotion', 2, 'daafef4c-981d-4ba6-a0a1-20ac88e05458', 'office_order', '665453cc65d34_android', '665453cc65d34_android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 15, '2024-05-27 13:35:10', '2024-05-27 13:35:10'),
(17, 'App\\Models\\Child', 5, 'ce9b043e-1f37-461f-8435-323df76a067a', 'birth_certificate', '6654541a8b32a_play store', '6654541a8b32a_play-store.png', 'image/png', 'public', 'public', 7284, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 16, '2024-05-27 13:36:40', '2024-05-27 13:36:40'),
(21, 'App\\Models\\CriminalProsecutione', 7, '1b185c4d-4f72-4a2b-a2e0-e0a6e1894b0f', 'court_order', '665af100aacd4_android-removebg-preview', '665af100aacd4_android-removebg-preview.png', 'image/png', 'public', 'public', 46008, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 18, '2024-06-01 14:00:02', '2024-06-01 14:00:03'),
(20, 'App\\Models\\Award', 3, '3ae2b534-ec8d-4f3f-afd0-24126015b8e0', 'certificate', '665783a7aea40_baad', '665783a7aea40_baad.JPG', 'image/jpeg', 'public', 'public', 86018, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 17, '2024-05-29 23:36:09', '2024-05-29 23:36:10'),
(23, 'App\\Models\\EmployeeList', 7, '206f4242-cd02-4e76-89d2-41f6a5953f9c', 'passport_upload', '665b2ccd1e02e_2', '665b2ccd1e02e_2.PNG', 'image/png', 'public', 'public', 607133, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 20, '2024-06-01 18:17:34', '2024-06-01 18:17:34'),
(24, 'App\\Models\\EmployeeList', 7, '7c4bdae1-687f-47e0-a39c-a2b47bee1114', 'license_upload', '665b2cf1258c1_2', '665b2cf1258c1_2.PNG', 'image/png', 'public', 'public', 607133, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 21, '2024-06-01 18:17:34', '2024-06-01 18:17:35'),
(25, 'App\\Models\\EmployeeList', 7, 'd8cb47de-0bcb-4a9b-a7f0-c8bf32587024', 'first_joining_order', '665b2d2bdb284_2', '665b2d2bdb284_2.PNG', 'image/png', 'public', 'public', 607133, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 22, '2024-06-01 18:17:35', '2024-06-01 18:17:35'),
(26, 'App\\Models\\EmployeeList', 7, '148ed9ab-4c4d-4a82-8534-8fad8d9b3b5c', 'fjoining_letter', '665b2d32bdc9a_fav', '665b2d32bdc9a_fav.ico', 'image/vnd.microsoft.icon', 'public', 'public', 4158, '[]', '[]', '[]', '[]', 23, '2024-06-01 18:17:35', '2024-06-01 18:17:35'),
(27, 'App\\Models\\EmployeeList', 7, '6f1af453-ce5a-425f-96f5-e47a52afb3e8', 'date_of_gazette_if_any', '665b2d3d39e7c_Presentation1', '665b2d3d39e7c_Presentation1.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'public', 'public', 1583541, '[]', '[]', '[]', '[]', 24, '2024-06-01 18:17:35', '2024-06-01 18:17:35'),
(28, 'App\\Models\\EmployeeList', 7, '80e77993-d80a-48d1-aac3-87b4cca0de3f', 'regularization_office_orde_go', '665b2d463ca2e_1', '665b2d463ca2e_1.PNG', 'image/png', 'public', 'public', 135748, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 25, '2024-06-01 18:17:36', '2024-06-01 18:17:36'),
(29, 'App\\Models\\EmployeeList', 7, '60593ae9-a8b8-451b-946f-98ad6c39bb1e', 'confirmation_in_service', '665b2d52cb30a_images', '665b2d52cb30a_images.jpeg', 'image/jpeg', 'public', 'public', 4579, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 26, '2024-06-01 18:17:36', '2024-06-01 18:17:36'),
(30, 'App\\Models\\EmployeeList', 7, 'e6db4e21-e8ab-4cfe-91bc-89a441a48c7d', 'electric_signature', '665b2d61895e8_2', '665b2d61895e8_2.PNG', 'image/png', 'public', 'public', 607133, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 27, '2024-06-01 18:17:36', '2024-06-01 18:17:36'),
(31, 'App\\Models\\EmployeeList', 7, '88edb859-ce11-4341-a22e-c1a4b5d005c8', 'employee_photo', '665b2d6cdc221_2', '665b2d6cdc221_2.PNG', 'image/png', 'public', 'public', 607133, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 28, '2024-06-01 18:17:36', '2024-06-01 18:17:37'),
(32, 'App\\Models\\EducationInformatione', 10, '9a525ed2-cd7a-41c2-a615-f44aed8ddb6f', 'catificarte', '665b2ec1ce788_2201100001_Kamran Hosan_employee (12)', '665b2ec1ce788_2201100001_Kamran-Hosan_employee-(12).pdf', 'application/pdf', 'public', 'public', 144036, '[]', '[]', '[]', '[]', 29, '2024-06-01 18:23:02', '2024-06-01 18:23:02'),
(33, 'App\\Models\\EducationInformatione', 11, '43593d4e-aa6a-484d-a76e-c23d87aa58fb', 'catificarte', '665b2efbd57e3_2201210002_Nurujjaman_employee', '665b2efbd57e3_2201210002_Nurujjaman_employee.pdf', 'application/pdf', 'public', 'public', 119591, '[]', '[]', '[]', '[]', 30, '2024-06-01 18:23:59', '2024-06-01 18:23:59'),
(34, 'App\\Models\\SpouseInformatione', 7, 'f727ea9d-ee1e-46a6-82bc-9ffc685a0cf9', 'nid_upload', '665b349d35c09_2', '665b349d35c09_2.PNG', 'image/png', 'public', 'public', 607133, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 31, '2024-06-01 18:50:48', '2024-06-01 18:50:49'),
(35, 'App\\Models\\EmployeePromotion', 7, 'd42d81e9-0027-413a-a032-fb2b5aba6864', 'office_order', '665b35df5b833_2201100001_Kamran Hosan_employee (8)', '665b35df5b833_2201100001_Kamran-Hosan_employee-(8).pdf', 'application/pdf', 'public', 'public', 120804, '[]', '[]', '[]', '[]', 32, '2024-06-01 18:53:21', '2024-06-01 18:53:21'),
(36, 'App\\Models\\Extracurriculam', 7, '2327b6ff-efb6-45c8-aa91-998ba4bbcdb7', 'attatchment', '665b38803dc16_2201210002_Nurujjaman_employee', '665b38803dc16_2201210002_Nurujjaman_employee.pdf', 'application/pdf', 'public', 'public', 119591, '[]', '[]', '[]', '[]', 33, '2024-06-01 19:04:57', '2024-06-01 19:04:57'),
(37, 'App\\Models\\Award', 8, 'bb49ae61-43e1-48fc-98f9-4def6beefecb', 'certificate', '665b39a0e22c5_2201100001_Kamran Hosan_employee (7)', '665b39a0e22c5_2201100001_Kamran-Hosan_employee-(7).pdf', 'application/pdf', 'public', 'public', 120804, '[]', '[]', '[]', '[]', 34, '2024-06-01 19:09:23', '2024-06-01 19:09:23'),
(38, 'App\\Models\\CriminalProsecutione', 8, 'b07cbd1e-bcf6-4234-9cb9-682fdc889487', 'court_order', '665b3aa0e6b97_2201100001_Kamran Hosan_employee (7)', '665b3aa0e6b97_2201100001_Kamran-Hosan_employee-(7).pdf', 'application/pdf', 'public', 'public', 120804, '[]', '[]', '[]', '[]', 35, '2024-06-01 19:13:44', '2024-06-01 19:13:44'),
(39, 'App\\Models\\CriminalproDisciplinary', 6, 'd191fd05-cead-46c6-84df-b1d77eae8742', 'order_upload_file', '665b3ac071637_2201100001_Kamran Hosan_employee (9) (1)', '665b3ac071637_2201100001_Kamran-Hosan_employee-(9)-(1).pdf', 'application/pdf', 'public', 'public', 120799, '[]', '[]', '[]', '[]', 36, '2024-06-01 19:14:15', '2024-06-01 19:14:15'),
(40, 'App\\Models\\JobHistory', 15, '1e0825c9-237e-482e-8217-6b760f90c514', 'go_upload', '665b3cdf719fe_2201100001_Kamran Hosan_employee (9)', '665b3cdf719fe_2201100001_Kamran-Hosan_employee-(9).pdf', 'application/pdf', 'public', 'public', 120799, '[]', '[]', '[]', '[]', 37, '2024-06-01 19:23:15', '2024-06-01 19:23:15'),
(41, 'App\\Models\\Child', 10, 'ca685fa2-a545-4cd6-9a1b-e08227e2c3c6', 'birth_certificate', '665b3d17c5e1f_2201210002_Nurujjaman_employee', '665b3d17c5e1f_2201210002_Nurujjaman_employee.pdf', 'application/pdf', 'public', 'public', 119591, '[]', '[]', '[]', '[]', 38, '2024-06-01 19:24:43', '2024-06-01 19:24:43'),
(42, 'App\\Models\\Child', 10, '57c173bd-a275-4f56-b8d3-218bbedfd80a', 'childdren_nid', '665b3d22392ac_2201210002_Nurujjaman_employee', '665b3d22392ac_2201210002_Nurujjaman_employee.pdf', 'application/pdf', 'public', 'public', 119591, '[]', '[]', '[]', '[]', 39, '2024-06-01 19:24:43', '2024-06-01 19:24:43'),
(43, 'App\\Models\\Child', 10, '8a5e7fa0-c740-4934-bfc0-f05ad41c9903', 'childdren_passporft', '665b3d3a036a6_2201210002_Nurujjaman_employee', '665b3d3a036a6_2201210002_Nurujjaman_employee.pdf', 'application/pdf', 'public', 'public', 119591, '[]', '[]', '[]', '[]', 40, '2024-06-01 19:24:43', '2024-06-01 19:24:43'),
(44, 'App\\Models\\SpouseInformatione', 8, '23834109-041a-48b3-88e8-3a0493f683ef', 'nid_upload', '665b42477db6d_2201100001_Kamran Hosan_employee (12)', '665b42477db6d_2201100001_Kamran-Hosan_employee-(12).pdf', 'application/pdf', 'public', 'public', 144036, '[]', '[]', '[]', '[]', 41, '2024-06-01 19:46:24', '2024-06-01 19:46:24'),
(45, 'App\\Models\\EmployeeList', 8, '70827127-9fb5-4dfc-9e9d-02cfd8e08252', 'nid_upload', '665bfd0f61e7f_২২ প্রকল্পের নাম', '665bfd0f61e7f_২২-প্রকল্পের-নাম.pdf', 'application/pdf', 'public', 'public', 52089, '[]', '[]', '[]', '[]', 42, '2024-06-02 09:04:33', '2024-06-02 09:04:33'),
(46, 'App\\Models\\EmployeeList', 8, '93b2ff09-4ce5-4462-8fc0-e76f0c856dc3', 'passport_upload', '665bfd166c887_২২ প্রকল্পের নাম', '665bfd166c887_২২-প্রকল্পের-নাম.pdf', 'application/pdf', 'public', 'public', 52089, '[]', '[]', '[]', '[]', 43, '2024-06-02 09:04:34', '2024-06-02 09:04:34'),
(47, 'App\\Models\\EmployeeList', 8, 'f21c93f9-81d3-4303-8725-cdbeb8ed3c90', 'license_upload', '665bfd1e604b0_Mobile', '665bfd1e604b0_Mobile.jpg', 'image/jpeg', 'public', 'public', 127994, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 44, '2024-06-02 09:04:34', '2024-06-02 09:04:34'),
(48, 'App\\Models\\EmployeeList', 8, 'dd2c47dc-0ffd-4540-9f79-9c0495ed687d', 'fjoining_letter', '665bfd3c09efb_২২ প্রকল্পের নাম', '665bfd3c09efb_২২-প্রকল্পের-নাম.pdf', 'application/pdf', 'public', 'public', 52089, '[]', '[]', '[]', '[]', 45, '2024-06-02 09:04:34', '2024-06-02 09:04:34'),
(49, 'App\\Models\\EmployeeList', 8, 'd1e03cf7-3bf9-436b-924e-be0018380925', 'date_of_gazette_if_any', '665bfd43a3666_play store', '665bfd43a3666_play-store.png', 'image/png', 'public', 'public', 7284, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 46, '2024-06-02 09:04:34', '2024-06-02 09:04:34'),
(50, 'App\\Models\\EmployeeList', 8, '783ace74-3bb0-4628-bd7a-9775fd6c3d81', 'regularization_office_orde_go', '665bfd49ac4ec_android-removebg-preview', '665bfd49ac4ec_android-removebg-preview.png', 'image/png', 'public', 'public', 46008, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 47, '2024-06-02 09:04:34', '2024-06-02 09:04:34'),
(51, 'App\\Models\\EmployeeList', 8, 'dba12127-fcda-488a-8de5-d90c92dd9748', 'confirmation_in_service', '665bfd4fab642_Flutter_logo.svg', '665bfd4fab642_Flutter_logo.svg.png', 'image/png', 'public', 'public', 63981, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 48, '2024-06-02 09:04:34', '2024-06-02 09:04:35'),
(52, 'App\\Models\\EmployeeList', 8, '136a47c2-054f-40c1-9644-4159abcc215e', 'electric_signature', '665bfd58e81ff_Flutter_logo.svg', '665bfd58e81ff_Flutter_logo.svg.png', 'image/png', 'public', 'public', 63981, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 49, '2024-06-02 09:04:35', '2024-06-02 09:04:35'),
(53, 'App\\Models\\EmployeeList', 8, 'd9d55efb-175f-4e5a-9d9c-490b2b8f91d3', 'employee_photo', '665bfd5f3e253_play store', '665bfd5f3e253_play-store.png', 'image/png', 'public', 'public', 7284, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 50, '2024-06-02 09:04:35', '2024-06-02 09:04:35'),
(54, 'App\\Models\\EducationInformatione', 13, '4d3eac62-a819-44ab-af14-00f40d868c9f', 'catificarte', '665c01a29d224_android', '665c01a29d224_android.png', 'image/png', 'public', 'public', 2835, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 51, '2024-06-02 09:22:48', '2024-06-02 09:22:48'),
(55, 'App\\Models\\EmployeeList', 9, 'ddd7fa5c-5909-4468-b947-90684fcad25b', 'nid_upload', '665c099e02594_nid', '665c099e02594_nid.webp', 'image/webp', 'public', 'public', 25314, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 52, '2024-06-02 10:00:59', '2024-06-02 10:00:59'),
(56, 'App\\Models\\EmployeeList', 9, 'c0f3d861-4e99-42a7-80bb-b447cf9d31a2', 'first_joining_order', '665c0a2c64176_2201100002_Kamran_employee (5)', '665c0a2c64176_2201100002_Kamran_employee-(5).pdf', 'application/pdf', 'public', 'public', 147462, '[]', '[]', '[]', '[]', 53, '2024-06-02 10:00:59', '2024-06-02 10:00:59'),
(57, 'App\\Models\\EmployeeList', 9, 'c744b711-3139-4c6a-afd4-ae05e0b4e18d', 'fjoining_letter', '665c0a353a776_2201100002_Kamran_employee (4)', '665c0a353a776_2201100002_Kamran_employee-(4).pdf', 'application/pdf', 'public', 'public', 124589, '[]', '[]', '[]', '[]', 54, '2024-06-02 10:00:59', '2024-06-02 10:00:59'),
(58, 'App\\Models\\EmployeeList', 9, '3b2b8845-3b63-4dc7-8603-53fce604aee8', 'date_of_gazette_if_any', '665c0a55d0f4d_2201100002_Kamran_employee (1)', '665c0a55d0f4d_2201100002_Kamran_employee-(1).pdf', 'application/pdf', 'public', 'public', 123868, '[]', '[]', '[]', '[]', 55, '2024-06-02 10:00:59', '2024-06-02 10:00:59'),
(59, 'App\\Models\\EmployeeList', 9, '0cea2bd3-956b-4568-a16b-957164ff1a47', 'regularization_office_orde_go', '665c0a666f32b_2201100002_Kamran_employee (3)', '665c0a666f32b_2201100002_Kamran_employee-(3).pdf', 'application/pdf', 'public', 'public', 124589, '[]', '[]', '[]', '[]', 56, '2024-06-02 10:00:59', '2024-06-02 10:00:59'),
(60, 'App\\Models\\EmployeeList', 9, 'a36901b4-a15f-4d8e-895c-d1c97db4949a', 'confirmation_in_service', '665c0a5973a6f_2201210002_Nurujjaman_employee', '665c0a5973a6f_2201210002_Nurujjaman_employee.pdf', 'application/pdf', 'public', 'public', 140569, '[]', '[]', '[]', '[]', 57, '2024-06-02 10:00:59', '2024-06-02 10:00:59'),
(61, 'App\\Models\\CriminalProsecutione', 9, '31efe8bf-d985-4931-9f78-1a6a93209f5d', 'court_order', '665c23d77d14c_2201100004_Afroza Begum_employee', '665c23d77d14c_2201100004_Afroza-Begum_employee.pdf', 'application/pdf', 'public', 'public', 110702, '[]', '[]', '[]', '[]', 58, '2024-06-02 11:48:46', '2024-06-02 11:48:46'),
(62, 'App\\Models\\CriminalproDisciplinary', 7, 'e1386c6d-1b9f-4c5e-a648-0935b7ec2504', 'order_upload_file', '665c23eee7d83_2201100004_Afroza Begum_employee', '665c23eee7d83_2201100004_Afroza-Begum_employee.pdf', 'application/pdf', 'public', 'public', 110702, '[]', '[]', '[]', '[]', 59, '2024-06-02 11:49:17', '2024-06-02 11:49:17'),
(63, 'App\\Models\\Award', 9, '9238f6a5-d26f-471a-a4b5-19d6cd56bbf5', 'certificate', '665c2421b808b_2201100004_Afroza Begum_employee (1)', '665c2421b808b_2201100004_Afroza-Begum_employee-(1).pdf', 'application/pdf', 'public', 'public', 134089, '[]', '[]', '[]', '[]', 60, '2024-06-02 11:50:20', '2024-06-02 11:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_05_26_000001_create_audit_logs_table', 1),
(4, '2024_05_26_000002_create_media_table', 1),
(5, '2024_05_26_000003_create_permissions_table', 1),
(6, '2024_05_26_000004_create_roles_table', 1),
(7, '2024_05_26_000005_create_users_table', 1),
(8, '2024_05_26_000006_create_divisions_table', 1),
(9, '2024_05_26_000007_create_districts_table', 1),
(10, '2024_05_26_000008_create_maritalstatuses_table', 1),
(11, '2024_05_26_000009_create_genders_table', 1),
(12, '2024_05_26_000010_create_religions_table', 1),
(13, '2024_05_26_000011_create_blood_groups_table', 1),
(14, '2024_05_26_000012_create_quota_table', 1),
(15, '2024_05_26_000013_create_examinations_table', 1),
(16, '2024_05_26_000014_create_exam_boards_table', 1),
(17, '2024_05_26_000015_create_office_units_table', 1),
(18, '2024_05_26_000016_create_designations_table', 1),
(19, '2024_05_26_000017_create_leave_categories_table', 1),
(20, '2024_05_26_000018_create_leave_types_table', 1),
(21, '2024_05_26_000019_create_training_types_table', 1),
(22, '2024_05_26_000020_create_countries_table', 1),
(23, '2024_05_26_000021_create_travel_purposes_table', 1),
(24, '2024_05_26_000022_create_employee_lists_table', 1),
(25, '2024_05_26_000023_create_license_types_table', 1),
(26, '2024_05_26_000024_create_job_types_table', 1),
(27, '2024_05_26_000025_create_grades_table', 1),
(28, '2024_05_26_000026_create_education_informationes_table', 1),
(29, '2024_05_26_000027_create_professionales_table', 1),
(30, '2024_05_26_000028_create_addressdetailes_table', 1),
(31, '2024_05_26_000029_create_upazilas_table', 1),
(32, '2024_05_26_000030_create_emergence_contactes_table', 1),
(33, '2024_05_26_000031_create_spouse_informationes_table', 1),
(34, '2024_05_26_000032_create_children_table', 1),
(35, '2024_05_26_000033_create_job_histories_table', 1),
(36, '2024_05_26_000034_create_employee_promotions_table', 1),
(37, '2024_05_26_000035_create_leave_records_table', 1),
(38, '2024_05_26_000036_create_trainings_table', 1),
(39, '2024_05_26_000037_create_traveltypes_table', 1),
(40, '2024_05_26_000038_create_travel_records_table', 1),
(41, '2024_05_26_000039_create_extracurriculams_table', 1),
(42, '2024_05_26_000040_create_publications_table', 1),
(43, '2024_05_26_000041_create_languages_table', 1),
(44, '2024_05_26_000042_create_criminal_prosecutiones_table', 1),
(45, '2024_05_26_000043_create_criminalpro_disciplinaries_table', 1),
(46, '2024_05_26_000044_create_acr_monitorings_table', 1),
(47, '2024_05_26_000045_create_faq_categories_table', 1),
(48, '2024_05_26_000046_create_faq_questions_table', 1),
(49, '2024_05_26_000047_create_site_settings_table', 1),
(50, '2024_05_26_000048_create_batches_table', 1),
(51, '2024_05_26_000049_create_joininginfos_table', 1),
(52, '2024_05_26_000050_create_project_revenuelones_table', 1),
(53, '2024_05_26_000051_create_project_revenue_exams_table', 1),
(54, '2024_05_26_000052_create_service_particulars_table', 1),
(55, '2024_05_26_000053_create_foreign_travel_personals_table', 1),
(56, '2024_05_26_000054_create_social_ass_pr_attachments_table', 1),
(57, '2024_05_26_000055_create_awards_table', 1),
(58, '2024_05_26_000056_create_other_service_jobs_table', 1),
(59, '2024_05_26_000057_create_language_proficiencies_table', 1),
(60, '2024_05_26_000058_create_language_lists_table', 1),
(61, '2024_05_26_000059_create_statuses_table', 1),
(62, '2024_05_26_000060_create_years_table', 1),
(63, '2024_05_26_000061_create_freedom_fighte_relations_table', 1),
(64, '2024_05_26_000062_create_achievementschools_universities_table', 1),
(65, '2024_05_26_000063_create_projects_table', 1),
(66, '2024_05_26_000064_create_forest_states_table', 1),
(67, '2024_05_26_000065_create_forest_ranges_table', 1),
(68, '2024_05_26_000066_create_forest_beats_table', 1),
(69, '2024_05_26_000067_create_forest_divisions_table', 1),
(70, '2024_05_26_000068_create_exam_degrees_table', 1),
(71, '2024_05_26_000069_create_result_groups_table', 1),
(72, '2024_05_26_000070_create_results_table', 1),
(73, '2024_05_26_000071_create_permission_role_pivot_table', 1),
(74, '2024_05_26_000072_create_role_user_pivot_table', 1),
(75, '2024_05_26_000073_add_relationship_fields_to_users_table', 1),
(76, '2024_05_26_000074_add_relationship_fields_to_divisions_table', 1),
(77, '2024_05_26_000075_add_relationship_fields_to_districts_table', 1),
(78, '2024_05_26_000076_add_relationship_fields_to_exam_boards_table', 1),
(79, '2024_05_26_000077_add_relationship_fields_to_employee_lists_table', 1),
(80, '2024_05_26_000078_add_relationship_fields_to_education_informationes_table', 1),
(81, '2024_05_26_000079_add_relationship_fields_to_professionales_table', 1),
(82, '2024_05_26_000080_add_relationship_fields_to_addressdetailes_table', 1),
(83, '2024_05_26_000081_add_relationship_fields_to_upazilas_table', 1),
(84, '2024_05_26_000082_add_relationship_fields_to_emergence_contactes_table', 1),
(85, '2024_05_26_000083_add_relationship_fields_to_spouse_informationes_table', 1),
(86, '2024_05_26_000084_add_relationship_fields_to_children_table', 1),
(87, '2024_05_26_000085_add_relationship_fields_to_job_histories_table', 1),
(88, '2024_05_26_000086_add_relationship_fields_to_employee_promotions_table', 1),
(89, '2024_05_26_000087_add_relationship_fields_to_leave_records_table', 1),
(90, '2024_05_26_000088_add_relationship_fields_to_trainings_table', 1),
(91, '2024_05_26_000089_add_relationship_fields_to_travel_records_table', 1),
(92, '2024_05_26_000090_add_relationship_fields_to_extracurriculams_table', 1),
(93, '2024_05_26_000091_add_relationship_fields_to_publications_table', 1),
(94, '2024_05_26_000092_add_relationship_fields_to_languages_table', 1),
(95, '2024_05_26_000093_add_relationship_fields_to_criminal_prosecutiones_table', 1),
(96, '2024_05_26_000094_add_relationship_fields_to_criminalpro_disciplinaries_table', 1),
(97, '2024_05_26_000095_add_relationship_fields_to_acr_monitorings_table', 1),
(98, '2024_05_26_000096_add_relationship_fields_to_faq_questions_table', 1),
(99, '2024_05_26_000097_add_relationship_fields_to_project_revenuelones_table', 1),
(100, '2024_05_26_000098_add_relationship_fields_to_project_revenue_exams_table', 1),
(101, '2024_05_26_000099_add_relationship_fields_to_service_particulars_table', 1),
(102, '2024_05_26_000100_add_relationship_fields_to_foreign_travel_personals_table', 1),
(103, '2024_05_26_000101_add_relationship_fields_to_social_ass_pr_attachments_table', 1),
(104, '2024_05_26_000102_add_relationship_fields_to_awards_table', 1),
(105, '2024_05_26_000103_add_relationship_fields_to_other_service_jobs_table', 1),
(106, '2024_05_26_000104_add_relationship_fields_to_forest_states_table', 1),
(107, '2024_05_26_000105_add_relationship_fields_to_forest_ranges_table', 1),
(108, '2024_05_26_000106_add_relationship_fields_to_forest_beats_table', 1),
(109, '2024_05_26_000107_add_relationship_fields_to_forest_divisions_table', 1),
(110, '2024_05_26_000108_add_relationship_fields_to_exam_degrees_table', 1),
(111, '2024_05_26_000109_add_relationship_fields_to_results_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `office_units`
--

CREATE TABLE `office_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `code` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_units`
--

INSERT INTO `office_units` (`id`, `name_bn`, `name_en`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'হেড অফিস', 'Head Office', NULL, NULL, '2024-06-01 04:59:01', NULL),
(2, 'সার্কেল', 'Circle', NULL, NULL, '2024-06-01 04:59:20', NULL),
(3, 'অন্যান্য', 'Others', NULL, NULL, '2024-06-01 04:58:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `other_service_jobs`
--

CREATE TABLE `other_service_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer` varchar(150) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `service_type` varchar(150) DEFAULT NULL,
  `position` varchar(150) DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_service_jobs`
--

INSERT INTO `other_service_jobs` (`id`, `employer`, `address`, `service_type`, `position`, `from`, `to`, `created_at`, `updated_at`, `deleted_at`, `employee_id`) VALUES
(1, 'Employer', 'rtegw', 'reg', 'eg', '2024-05-27', '31/05/2024', '2024-05-27 13:10:22', '2024-05-27 13:10:22', NULL, 1),
(2, 'Questlog Holdings Ltd.', 'North Badda', 'Software Development', 'Software Developer', '2023-05-16', '04/10/2023', '2024-06-01 05:54:51', '2024-06-01 05:54:51', NULL, 3),
(3, 'Employer', 'Dhaka', NULL, NULL, NULL, NULL, '2024-06-01 08:39:27', '2024-06-01 08:39:27', NULL, 4),
(4, 'চাকরি', 'ঢাকা', 'অন্যান্য', 'অবস্থান', '2023-09-05', '06/12/2023', '2024-06-01 13:25:41', '2024-06-01 13:25:41', NULL, 5),
(5, 'Employer', 'Dhaka', 'Demo', 'Developer', '2021-03-05', '02/04/2022', '2024-06-01 13:58:26', '2024-06-01 13:58:26', NULL, 6),
(6, 'Employer Test', 'Dhaka', 'Service Type', 'Organizer', '2024-06-01', '05/06/2024', '2024-06-01 19:11:31', '2024-06-01 19:11:31', NULL, 7),
(7, 'Employer', 'Dhaka', 'Demo', 'Developer', '2024-04-09', '02/06/2024', '2024-06-02 11:51:14', '2024-06-02 11:51:14', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_access', NULL, NULL, NULL),
(6, 'role_create', NULL, NULL, NULL),
(7, 'role_edit', NULL, NULL, NULL),
(8, 'role_show', NULL, NULL, NULL),
(9, 'role_delete', NULL, NULL, NULL),
(10, 'role_access', NULL, NULL, NULL),
(11, 'user_create', NULL, NULL, NULL),
(12, 'user_edit', NULL, NULL, NULL),
(13, 'user_show', NULL, NULL, NULL),
(14, 'user_delete', NULL, NULL, NULL),
(15, 'user_access', NULL, NULL, NULL),
(16, 'division_create', NULL, NULL, NULL),
(17, 'division_edit', NULL, NULL, NULL),
(18, 'division_show', NULL, NULL, NULL),
(19, 'division_delete', NULL, NULL, NULL),
(20, 'division_access', NULL, NULL, NULL),
(21, 'configuration_access', NULL, NULL, NULL),
(22, 'district_create', NULL, NULL, NULL),
(23, 'district_edit', NULL, NULL, NULL),
(24, 'district_show', NULL, NULL, NULL),
(25, 'district_delete', NULL, NULL, NULL),
(26, 'district_access', NULL, NULL, NULL),
(27, 'maritalstatus_create', NULL, NULL, NULL),
(28, 'maritalstatus_edit', NULL, NULL, NULL),
(29, 'maritalstatus_show', NULL, NULL, NULL),
(30, 'maritalstatus_access', NULL, NULL, NULL),
(31, 'gender_create', NULL, NULL, NULL),
(32, 'gender_edit', NULL, NULL, NULL),
(33, 'gender_show', NULL, NULL, NULL),
(34, 'gender_delete', NULL, NULL, NULL),
(35, 'gender_access', NULL, NULL, NULL),
(36, 'religion_create', NULL, NULL, NULL),
(37, 'religion_edit', NULL, NULL, NULL),
(38, 'religion_show', NULL, NULL, NULL),
(39, 'religion_delete', NULL, NULL, NULL),
(40, 'religion_access', NULL, NULL, NULL),
(41, 'blood_group_create', NULL, NULL, NULL),
(42, 'blood_group_edit', NULL, NULL, NULL),
(43, 'blood_group_show', NULL, NULL, NULL),
(44, 'blood_group_delete', NULL, NULL, NULL),
(45, 'blood_group_access', NULL, NULL, NULL),
(46, 'quotum_create', NULL, NULL, NULL),
(47, 'quotum_edit', NULL, NULL, NULL),
(48, 'quotum_show', NULL, NULL, NULL),
(49, 'quotum_delete', NULL, NULL, NULL),
(50, 'quotum_access', NULL, NULL, NULL),
(51, 'examination_create', NULL, NULL, NULL),
(52, 'examination_edit', NULL, NULL, NULL),
(53, 'examination_show', NULL, NULL, NULL),
(54, 'examination_access', NULL, NULL, NULL),
(55, 'exam_board_create', NULL, NULL, NULL),
(56, 'exam_board_edit', NULL, NULL, NULL),
(57, 'exam_board_show', NULL, NULL, NULL),
(58, 'exam_board_delete', NULL, NULL, NULL),
(59, 'exam_board_access', NULL, NULL, NULL),
(60, 'office_unit_create', NULL, NULL, NULL),
(61, 'office_unit_edit', NULL, NULL, NULL),
(62, 'office_unit_show', NULL, NULL, NULL),
(63, 'office_unit_delete', NULL, NULL, NULL),
(64, 'office_unit_access', NULL, NULL, NULL),
(65, 'designation_create', NULL, NULL, NULL),
(66, 'designation_edit', NULL, NULL, NULL),
(67, 'designation_show', NULL, NULL, NULL),
(68, 'designation_delete', NULL, NULL, NULL),
(69, 'designation_access', NULL, NULL, NULL),
(70, 'leave_category_create', NULL, NULL, NULL),
(71, 'leave_category_edit', NULL, NULL, NULL),
(72, 'leave_category_show', NULL, NULL, NULL),
(73, 'leave_category_delete', NULL, NULL, NULL),
(74, 'leave_category_access', NULL, NULL, NULL),
(75, 'leave_type_create', NULL, NULL, NULL),
(76, 'leave_type_edit', NULL, NULL, NULL),
(77, 'leave_type_show', NULL, NULL, NULL),
(78, 'leave_type_delete', NULL, NULL, NULL),
(79, 'leave_type_access', NULL, NULL, NULL),
(80, 'training_type_create', NULL, NULL, NULL),
(81, 'training_type_edit', NULL, NULL, NULL),
(82, 'training_type_show', NULL, NULL, NULL),
(83, 'training_type_delete', NULL, NULL, NULL),
(84, 'training_type_access', NULL, NULL, NULL),
(85, 'country_create', NULL, NULL, NULL),
(86, 'country_edit', NULL, NULL, NULL),
(87, 'country_show', NULL, NULL, NULL),
(88, 'country_delete', NULL, NULL, NULL),
(89, 'country_access', NULL, NULL, NULL),
(90, 'travel_purpose_create', NULL, NULL, NULL),
(91, 'travel_purpose_edit', NULL, NULL, NULL),
(92, 'travel_purpose_show', NULL, NULL, NULL),
(93, 'travel_purpose_delete', NULL, NULL, NULL),
(94, 'travel_purpose_access', NULL, NULL, NULL),
(95, 'employee_list_create', NULL, NULL, NULL),
(96, 'employee_list_edit', NULL, NULL, NULL),
(97, 'employee_list_show', NULL, NULL, NULL),
(98, 'employee_list_delete', NULL, NULL, NULL),
(99, 'employee_list_access', NULL, NULL, NULL),
(100, 'license_type_create', NULL, NULL, NULL),
(101, 'license_type_edit', NULL, NULL, NULL),
(102, 'license_type_show', NULL, NULL, NULL),
(103, 'license_type_delete', NULL, NULL, NULL),
(104, 'license_type_access', NULL, NULL, NULL),
(105, 'job_type_create', NULL, NULL, NULL),
(106, 'job_type_edit', NULL, NULL, NULL),
(107, 'job_type_show', NULL, NULL, NULL),
(108, 'job_type_delete', NULL, NULL, NULL),
(109, 'job_type_access', NULL, NULL, NULL),
(110, 'grade_create', NULL, NULL, NULL),
(111, 'grade_edit', NULL, NULL, NULL),
(112, 'grade_show', NULL, NULL, NULL),
(113, 'grade_delete', NULL, NULL, NULL),
(114, 'grade_access', NULL, NULL, NULL),
(115, 'employee_detail_access', NULL, NULL, NULL),
(116, 'education_informatione_create', NULL, NULL, NULL),
(117, 'education_informatione_edit', NULL, NULL, NULL),
(118, 'education_informatione_show', NULL, NULL, NULL),
(119, 'education_informatione_delete', NULL, NULL, NULL),
(120, 'education_informatione_access', NULL, NULL, NULL),
(121, 'professionale_create', NULL, NULL, NULL),
(122, 'professionale_edit', NULL, NULL, NULL),
(123, 'professionale_show', NULL, NULL, NULL),
(124, 'professionale_delete', NULL, NULL, NULL),
(125, 'professionale_access', NULL, NULL, NULL),
(126, 'addressdetaile_create', NULL, NULL, NULL),
(127, 'addressdetaile_edit', NULL, NULL, NULL),
(128, 'addressdetaile_show', NULL, NULL, NULL),
(129, 'addressdetaile_delete', NULL, NULL, NULL),
(130, 'addressdetaile_access', NULL, NULL, NULL),
(131, 'upazila_create', NULL, NULL, NULL),
(132, 'upazila_edit', NULL, NULL, NULL),
(133, 'upazila_show', NULL, NULL, NULL),
(134, 'upazila_delete', NULL, NULL, NULL),
(135, 'upazila_access', NULL, NULL, NULL),
(136, 'emergence_contacte_create', NULL, NULL, NULL),
(137, 'emergence_contacte_edit', NULL, NULL, NULL),
(138, 'emergence_contacte_show', NULL, NULL, NULL),
(139, 'emergence_contacte_delete', NULL, NULL, NULL),
(140, 'emergence_contacte_access', NULL, NULL, NULL),
(141, 'spouse_informatione_create', NULL, NULL, NULL),
(142, 'spouse_informatione_edit', NULL, NULL, NULL),
(143, 'spouse_informatione_show', NULL, NULL, NULL),
(144, 'spouse_informatione_delete', NULL, NULL, NULL),
(145, 'spouse_informatione_access', NULL, NULL, NULL),
(146, 'child_create', NULL, NULL, NULL),
(147, 'child_edit', NULL, NULL, NULL),
(148, 'child_show', NULL, NULL, NULL),
(149, 'child_delete', NULL, NULL, NULL),
(150, 'child_access', NULL, NULL, NULL),
(151, 'job_history_create', NULL, NULL, NULL),
(152, 'job_history_edit', NULL, NULL, NULL),
(153, 'job_history_show', NULL, NULL, NULL),
(154, 'job_history_delete', NULL, NULL, NULL),
(155, 'job_history_access', NULL, NULL, NULL),
(156, 'employee_promotion_create', NULL, NULL, NULL),
(157, 'employee_promotion_edit', NULL, NULL, NULL),
(158, 'employee_promotion_show', NULL, NULL, NULL),
(159, 'employee_promotion_delete', NULL, NULL, NULL),
(160, 'employee_promotion_access', NULL, NULL, NULL),
(161, 'leave_record_create', NULL, NULL, NULL),
(162, 'leave_record_edit', NULL, NULL, NULL),
(163, 'leave_record_show', NULL, NULL, NULL),
(164, 'leave_record_delete', NULL, NULL, NULL),
(165, 'leave_record_access', NULL, NULL, NULL),
(166, 'training_create', NULL, NULL, NULL),
(167, 'training_edit', NULL, NULL, NULL),
(168, 'training_show', NULL, NULL, NULL),
(169, 'training_delete', NULL, NULL, NULL),
(170, 'training_access', NULL, NULL, NULL),
(171, 'traveltype_create', NULL, NULL, NULL),
(172, 'traveltype_edit', NULL, NULL, NULL),
(173, 'traveltype_show', NULL, NULL, NULL),
(174, 'traveltype_delete', NULL, NULL, NULL),
(175, 'traveltype_access', NULL, NULL, NULL),
(176, 'travel_record_create', NULL, NULL, NULL),
(177, 'travel_record_edit', NULL, NULL, NULL),
(178, 'travel_record_show', NULL, NULL, NULL),
(179, 'travel_record_delete', NULL, NULL, NULL),
(180, 'travel_record_access', NULL, NULL, NULL),
(181, 'extracurriculam_create', NULL, NULL, NULL),
(182, 'extracurriculam_edit', NULL, NULL, NULL),
(183, 'extracurriculam_show', NULL, NULL, NULL),
(184, 'extracurriculam_delete', NULL, NULL, NULL),
(185, 'extracurriculam_access', NULL, NULL, NULL),
(186, 'publication_create', NULL, NULL, NULL),
(187, 'publication_edit', NULL, NULL, NULL),
(188, 'publication_show', NULL, NULL, NULL),
(189, 'publication_delete', NULL, NULL, NULL),
(190, 'publication_access', NULL, NULL, NULL),
(191, 'language_create', NULL, NULL, NULL),
(192, 'language_edit', NULL, NULL, NULL),
(193, 'language_show', NULL, NULL, NULL),
(194, 'language_delete', NULL, NULL, NULL),
(195, 'language_access', NULL, NULL, NULL),
(196, 'criminal_prosecutione_create', NULL, NULL, NULL),
(197, 'criminal_prosecutione_edit', NULL, NULL, NULL),
(198, 'criminal_prosecutione_show', NULL, NULL, NULL),
(199, 'criminal_prosecutione_delete', NULL, NULL, NULL),
(200, 'criminal_prosecutione_access', NULL, NULL, NULL),
(201, 'criminalpro_disciplinary_create', NULL, NULL, NULL),
(202, 'criminalpro_disciplinary_edit', NULL, NULL, NULL),
(203, 'criminalpro_disciplinary_show', NULL, NULL, NULL),
(204, 'criminalpro_disciplinary_delete', NULL, NULL, NULL),
(205, 'criminalpro_disciplinary_access', NULL, NULL, NULL),
(206, 'acr_monitoring_create', NULL, NULL, NULL),
(207, 'acr_monitoring_edit', NULL, NULL, NULL),
(208, 'acr_monitoring_show', NULL, NULL, NULL),
(209, 'acr_monitoring_delete', NULL, NULL, NULL),
(210, 'acr_monitoring_access', NULL, NULL, NULL),
(211, 'audit_log_show', NULL, NULL, NULL),
(212, 'audit_log_access', NULL, NULL, NULL),
(213, 'faq_management_access', NULL, NULL, NULL),
(214, 'faq_category_create', NULL, NULL, NULL),
(215, 'faq_category_edit', NULL, NULL, NULL),
(216, 'faq_category_show', NULL, NULL, NULL),
(217, 'faq_category_delete', NULL, NULL, NULL),
(218, 'faq_category_access', NULL, NULL, NULL),
(219, 'faq_question_create', NULL, NULL, NULL),
(220, 'faq_question_edit', NULL, NULL, NULL),
(221, 'faq_question_show', NULL, NULL, NULL),
(222, 'faq_question_delete', NULL, NULL, NULL),
(223, 'faq_question_access', NULL, NULL, NULL),
(224, 'edu_config_access', NULL, NULL, NULL),
(225, 'office_config_access', NULL, NULL, NULL),
(226, 'site_setting_create', NULL, NULL, NULL),
(227, 'site_setting_edit', NULL, NULL, NULL),
(228, 'site_setting_show', NULL, NULL, NULL),
(229, 'site_setting_delete', NULL, NULL, NULL),
(230, 'site_setting_access', NULL, NULL, NULL),
(231, 'batch_create', NULL, NULL, NULL),
(232, 'batch_edit', NULL, NULL, NULL),
(233, 'batch_show', NULL, NULL, NULL),
(234, 'batch_delete', NULL, NULL, NULL),
(235, 'batch_access', NULL, NULL, NULL),
(236, 'joininginfo_create', NULL, NULL, NULL),
(237, 'joininginfo_edit', NULL, NULL, NULL),
(238, 'joininginfo_show', NULL, NULL, NULL),
(239, 'joininginfo_delete', NULL, NULL, NULL),
(240, 'joininginfo_access', NULL, NULL, NULL),
(241, 'project_revenuelone_create', NULL, NULL, NULL),
(242, 'project_revenuelone_edit', NULL, NULL, NULL),
(243, 'project_revenuelone_show', NULL, NULL, NULL),
(244, 'project_revenuelone_delete', NULL, NULL, NULL),
(245, 'project_revenuelone_access', NULL, NULL, NULL),
(246, 'project_revenue_exam_create', NULL, NULL, NULL),
(247, 'project_revenue_exam_edit', NULL, NULL, NULL),
(248, 'project_revenue_exam_show', NULL, NULL, NULL),
(249, 'project_revenue_exam_access', NULL, NULL, NULL),
(250, 'service_particular_create', NULL, NULL, NULL),
(251, 'service_particular_edit', NULL, NULL, NULL),
(252, 'service_particular_show', NULL, NULL, NULL),
(253, 'service_particular_delete', NULL, NULL, NULL),
(254, 'service_particular_access', NULL, NULL, NULL),
(255, 'foreign_travel_personal_create', NULL, NULL, NULL),
(256, 'foreign_travel_personal_edit', NULL, NULL, NULL),
(257, 'foreign_travel_personal_show', NULL, NULL, NULL),
(258, 'foreign_travel_personal_delete', NULL, NULL, NULL),
(259, 'foreign_travel_personal_access', NULL, NULL, NULL),
(260, 'social_ass_pr_attachment_create', NULL, NULL, NULL),
(261, 'social_ass_pr_attachment_edit', NULL, NULL, NULL),
(262, 'social_ass_pr_attachment_show', NULL, NULL, NULL),
(263, 'social_ass_pr_attachment_access', NULL, NULL, NULL),
(264, 'award_create', NULL, NULL, NULL),
(265, 'award_edit', NULL, NULL, NULL),
(266, 'award_show', NULL, NULL, NULL),
(267, 'award_delete', NULL, NULL, NULL),
(268, 'award_access', NULL, NULL, NULL),
(269, 'other_service_job_create', NULL, NULL, NULL),
(270, 'other_service_job_edit', NULL, NULL, NULL),
(271, 'other_service_job_show', NULL, NULL, NULL),
(272, 'other_service_job_delete', NULL, NULL, NULL),
(273, 'other_service_job_access', NULL, NULL, NULL),
(274, 'language_proficiency_create', NULL, NULL, NULL),
(275, 'language_proficiency_edit', NULL, NULL, NULL),
(276, 'language_proficiency_show', NULL, NULL, NULL),
(277, 'language_proficiency_delete', NULL, NULL, NULL),
(278, 'language_proficiency_access', NULL, NULL, NULL),
(279, 'language_list_create', NULL, NULL, NULL),
(280, 'language_list_edit', NULL, NULL, NULL),
(281, 'language_list_show', NULL, NULL, NULL),
(282, 'language_list_delete', NULL, NULL, NULL),
(283, 'language_list_access', NULL, NULL, NULL),
(284, 'status_create', NULL, NULL, NULL),
(285, 'status_edit', NULL, NULL, NULL),
(286, 'status_show', NULL, NULL, NULL),
(287, 'status_delete', NULL, NULL, NULL),
(288, 'status_access', NULL, NULL, NULL),
(289, 'year_create', NULL, NULL, NULL),
(290, 'year_edit', NULL, NULL, NULL),
(291, 'year_show', NULL, NULL, NULL),
(292, 'year_delete', NULL, NULL, NULL),
(293, 'year_access', NULL, NULL, NULL),
(294, 'freedom_fighte_relation_create', NULL, NULL, NULL),
(295, 'freedom_fighte_relation_edit', NULL, NULL, NULL),
(296, 'freedom_fighte_relation_show', NULL, NULL, NULL),
(297, 'freedom_fighte_relation_delete', NULL, NULL, NULL),
(298, 'freedom_fighte_relation_access', NULL, NULL, NULL),
(299, 'achievementschools_university_create', NULL, NULL, NULL),
(300, 'achievementschools_university_edit', NULL, NULL, NULL),
(301, 'achievementschools_university_show', NULL, NULL, NULL),
(302, 'achievementschools_university_delete', NULL, NULL, NULL),
(303, 'achievementschools_university_access', NULL, NULL, NULL),
(304, 'project_create', NULL, NULL, NULL),
(305, 'project_edit', NULL, NULL, NULL),
(306, 'project_show', NULL, NULL, NULL),
(307, 'project_delete', NULL, NULL, NULL),
(308, 'project_access', NULL, NULL, NULL),
(309, 'forest_state_create', NULL, NULL, NULL),
(310, 'forest_state_edit', NULL, NULL, NULL),
(311, 'forest_state_show', NULL, NULL, NULL),
(312, 'forest_state_delete', NULL, NULL, NULL),
(313, 'forest_state_access', NULL, NULL, NULL),
(314, 'forest_range_create', NULL, NULL, NULL),
(315, 'forest_range_edit', NULL, NULL, NULL),
(316, 'forest_range_show', NULL, NULL, NULL),
(317, 'forest_range_delete', NULL, NULL, NULL),
(318, 'forest_range_access', NULL, NULL, NULL),
(319, 'forest_beat_create', NULL, NULL, NULL),
(320, 'forest_beat_edit', NULL, NULL, NULL),
(321, 'forest_beat_show', NULL, NULL, NULL),
(322, 'forest_beat_delete', NULL, NULL, NULL),
(323, 'forest_beat_access', NULL, NULL, NULL),
(324, 'job_configuration_access', NULL, NULL, NULL),
(325, 'forest_division_create', NULL, NULL, NULL),
(326, 'forest_division_edit', NULL, NULL, NULL),
(327, 'forest_division_show', NULL, NULL, NULL),
(328, 'forest_division_delete', NULL, NULL, NULL),
(329, 'forest_division_access', NULL, NULL, NULL),
(330, 'exam_degree_create', NULL, NULL, NULL),
(331, 'exam_degree_edit', NULL, NULL, NULL),
(332, 'exam_degree_show', NULL, NULL, NULL),
(333, 'exam_degree_delete', NULL, NULL, NULL),
(334, 'exam_degree_access', NULL, NULL, NULL),
(335, 'result_group_create', NULL, NULL, NULL),
(336, 'result_group_edit', NULL, NULL, NULL),
(337, 'result_group_show', NULL, NULL, NULL),
(338, 'result_group_delete', NULL, NULL, NULL),
(339, 'result_group_access', NULL, NULL, NULL),
(340, 'result_create', NULL, NULL, NULL),
(341, 'result_edit', NULL, NULL, NULL),
(342, 'result_show', NULL, NULL, NULL),
(343, 'result_delete', NULL, NULL, NULL),
(344, 'result_access', NULL, NULL, NULL),
(345, 'profile_password_edit', NULL, NULL, NULL),
(346, 'dfo', '2024-06-01 12:16:16', '2024-06-01 12:16:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(1, 125),
(1, 126),
(1, 127),
(1, 128),
(1, 129),
(1, 130),
(1, 131),
(1, 132),
(1, 133),
(1, 134),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(1, 149),
(1, 150),
(1, 151),
(1, 152),
(1, 153),
(1, 154),
(1, 155),
(1, 156),
(1, 157),
(1, 158),
(1, 159),
(1, 160),
(1, 161),
(1, 162),
(1, 163),
(1, 164),
(1, 165),
(1, 166),
(1, 167),
(1, 168),
(1, 169),
(1, 170),
(1, 171),
(1, 172),
(1, 173),
(1, 174),
(1, 175),
(1, 176),
(1, 177),
(1, 178),
(1, 179),
(1, 180),
(1, 181),
(1, 182),
(1, 183),
(1, 184),
(1, 185),
(1, 186),
(1, 187),
(1, 188),
(1, 189),
(1, 190),
(1, 191),
(1, 192),
(1, 193),
(1, 194),
(1, 195),
(1, 196),
(1, 197),
(1, 198),
(1, 199),
(1, 200),
(1, 201),
(1, 202),
(1, 203),
(1, 204),
(1, 205),
(1, 206),
(1, 207),
(1, 208),
(1, 209),
(1, 210),
(1, 211),
(1, 212),
(1, 213),
(1, 214),
(1, 215),
(1, 216),
(1, 217),
(1, 218),
(1, 219),
(1, 220),
(1, 221),
(1, 222),
(1, 223),
(1, 224),
(1, 225),
(1, 226),
(1, 227),
(1, 228),
(1, 229),
(1, 230),
(1, 231),
(1, 232),
(1, 233),
(1, 234),
(1, 235),
(1, 236),
(1, 237),
(1, 238),
(1, 239),
(1, 240),
(1, 241),
(1, 242),
(1, 243),
(1, 244),
(1, 245),
(1, 246),
(1, 247),
(1, 248),
(1, 249),
(1, 250),
(1, 251),
(1, 252),
(1, 253),
(1, 254),
(1, 255),
(1, 256),
(1, 257),
(1, 258),
(1, 259),
(1, 260),
(1, 261),
(1, 262),
(1, 263),
(1, 264),
(1, 265),
(1, 266),
(1, 267),
(1, 268),
(1, 269),
(1, 270),
(1, 271),
(1, 272),
(1, 273),
(1, 274),
(1, 275),
(1, 276),
(1, 277),
(1, 278),
(1, 279),
(1, 280),
(1, 281),
(1, 282),
(1, 283),
(1, 284),
(1, 285),
(1, 286),
(1, 287),
(1, 288),
(1, 289),
(1, 290),
(1, 291),
(1, 292),
(1, 293),
(1, 294),
(1, 295),
(1, 296),
(1, 297),
(1, 298),
(1, 299),
(1, 300),
(1, 301),
(1, 302),
(1, 303),
(1, 304),
(1, 305),
(1, 306),
(1, 307),
(1, 308),
(1, 309),
(1, 310),
(1, 311),
(1, 312),
(1, 313),
(1, 314),
(1, 315),
(1, 316),
(1, 317),
(1, 318),
(1, 319),
(1, 320),
(1, 321),
(1, 322),
(1, 323),
(1, 324),
(1, 325),
(1, 326),
(1, 327),
(1, 328),
(1, 329),
(1, 330),
(1, 331),
(1, 332),
(1, 333),
(1, 334),
(1, 335),
(1, 336),
(1, 337),
(1, 338),
(1, 339),
(1, 340),
(1, 341),
(1, 342),
(1, 343),
(1, 344),
(1, 345),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69),
(2, 70),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(2, 75),
(2, 76),
(2, 77),
(2, 78),
(2, 79),
(2, 80),
(2, 81),
(2, 82),
(2, 83),
(2, 84),
(2, 85),
(2, 86),
(2, 87),
(2, 88),
(2, 89),
(2, 90),
(2, 91),
(2, 92),
(2, 93),
(2, 94),
(2, 95),
(2, 96),
(2, 97),
(2, 98),
(2, 99),
(2, 100),
(2, 101),
(2, 102),
(2, 103),
(2, 104),
(2, 105),
(2, 106),
(2, 107),
(2, 108),
(2, 109),
(2, 110),
(2, 111),
(2, 112),
(2, 113),
(2, 114),
(2, 115),
(2, 116),
(2, 117),
(2, 118),
(2, 119),
(2, 120),
(2, 121),
(2, 122),
(2, 123),
(2, 124),
(2, 125),
(2, 126),
(2, 127),
(2, 128),
(2, 129),
(2, 130),
(2, 131),
(2, 132),
(2, 133),
(2, 134),
(2, 135),
(2, 136),
(2, 137),
(2, 138),
(2, 139),
(2, 140),
(2, 141),
(2, 142),
(2, 143),
(2, 144),
(2, 145),
(2, 146),
(2, 147),
(2, 148),
(2, 149),
(2, 150),
(2, 151),
(2, 152),
(2, 153),
(2, 154),
(2, 155),
(2, 156),
(2, 157),
(2, 158),
(2, 159),
(2, 160),
(2, 161),
(2, 162),
(2, 163),
(2, 164),
(2, 165),
(2, 166),
(2, 167),
(2, 168),
(2, 169),
(2, 170),
(2, 171),
(2, 172),
(2, 173),
(2, 174),
(2, 175),
(2, 176),
(2, 177),
(2, 178),
(2, 179),
(2, 180),
(2, 181),
(2, 182),
(2, 183),
(2, 184),
(2, 185),
(2, 186),
(2, 187),
(2, 188),
(2, 189),
(2, 190),
(2, 191),
(2, 192),
(2, 193),
(2, 194),
(2, 195),
(2, 196),
(2, 197),
(2, 198),
(2, 199),
(2, 200),
(2, 201),
(2, 202),
(2, 203),
(2, 204),
(2, 205),
(2, 206),
(2, 207),
(2, 208),
(2, 209),
(2, 210),
(2, 211),
(2, 212),
(2, 213),
(2, 214),
(2, 215),
(2, 216),
(2, 217),
(2, 218),
(2, 219),
(2, 220),
(2, 221),
(2, 222),
(2, 223),
(2, 224),
(2, 225),
(2, 226),
(2, 227),
(2, 228),
(2, 229),
(2, 230),
(2, 231),
(2, 232),
(2, 233),
(2, 234),
(2, 235),
(2, 236),
(2, 237),
(2, 238),
(2, 239),
(2, 240),
(2, 241),
(2, 242),
(2, 243),
(2, 244),
(2, 245),
(2, 246),
(2, 247),
(2, 248),
(2, 249),
(2, 250),
(2, 251),
(2, 252),
(2, 253),
(2, 254),
(2, 255),
(2, 256),
(2, 257),
(2, 258),
(2, 259),
(2, 260),
(2, 261),
(2, 262),
(2, 263),
(2, 264),
(2, 265),
(2, 266),
(2, 267),
(2, 268),
(2, 269),
(2, 270),
(2, 271),
(2, 272),
(2, 273),
(2, 274),
(2, 275),
(2, 276),
(2, 277),
(2, 278),
(2, 279),
(2, 280),
(2, 281),
(2, 282),
(2, 283),
(2, 284),
(2, 285),
(2, 286),
(2, 287),
(2, 288),
(2, 289),
(2, 290),
(2, 291),
(2, 292),
(2, 293),
(2, 294),
(2, 295),
(2, 296),
(2, 297),
(2, 298),
(2, 299),
(2, 300),
(2, 301),
(2, 302),
(2, 303),
(2, 304),
(2, 305),
(2, 306),
(2, 307),
(2, 308),
(2, 309),
(2, 310),
(2, 311),
(2, 312),
(2, 313),
(2, 314),
(2, 315),
(2, 316),
(2, 317),
(2, 318),
(2, 319),
(2, 320),
(2, 321),
(2, 322),
(2, 323),
(2, 324),
(2, 325),
(2, 326),
(2, 327),
(2, 328),
(2, 329),
(2, 330),
(2, 331),
(2, 332),
(2, 333),
(2, 334),
(2, 335),
(2, 336),
(2, 337),
(2, 338),
(2, 339),
(2, 340),
(2, 341),
(2, 342),
(2, 343),
(2, 344),
(2, 345),
(3, 139),
(3, 138),
(3, 137),
(3, 136),
(3, 135),
(3, 134),
(3, 133),
(3, 132),
(3, 131),
(3, 130),
(3, 129),
(3, 128),
(3, 127),
(3, 126),
(3, 125),
(3, 124),
(3, 123),
(3, 122),
(3, 121),
(3, 120),
(3, 119),
(3, 118),
(3, 117),
(3, 116),
(3, 114),
(3, 113),
(3, 112),
(3, 111),
(3, 110),
(3, 109),
(3, 108),
(3, 107),
(3, 106),
(3, 105),
(3, 104),
(3, 103),
(3, 102),
(3, 101),
(3, 100),
(3, 99),
(3, 98),
(3, 97),
(3, 96),
(3, 95),
(3, 94),
(3, 93),
(3, 92),
(3, 91),
(3, 90),
(3, 89),
(3, 88),
(3, 87),
(3, 86),
(3, 85),
(3, 84),
(3, 83),
(3, 82),
(3, 81),
(3, 80),
(3, 79),
(3, 78),
(3, 77),
(3, 76),
(3, 75),
(3, 74),
(3, 73),
(3, 72),
(3, 71),
(3, 70),
(3, 69),
(3, 68),
(3, 67),
(3, 66),
(3, 65),
(3, 64),
(3, 63),
(3, 62),
(3, 61),
(3, 60),
(3, 59),
(3, 58),
(3, 57),
(3, 56),
(3, 55),
(3, 54),
(3, 53),
(3, 52),
(3, 51),
(3, 50),
(3, 49),
(3, 140),
(3, 141),
(3, 142),
(3, 143),
(3, 144),
(3, 145),
(3, 146),
(3, 147),
(3, 148),
(3, 149),
(3, 150),
(3, 151),
(3, 152),
(3, 153),
(3, 154),
(3, 155),
(3, 156),
(3, 157),
(3, 158),
(3, 159),
(3, 160),
(3, 161),
(3, 162),
(3, 163),
(3, 164),
(3, 165),
(3, 166),
(3, 167),
(3, 168),
(3, 169),
(3, 170),
(3, 171),
(3, 172),
(3, 173),
(3, 174),
(3, 175),
(3, 176),
(3, 177),
(3, 178),
(3, 179),
(3, 180),
(3, 181),
(3, 182),
(3, 183),
(3, 184),
(3, 185),
(3, 186),
(3, 187),
(3, 188),
(3, 189),
(3, 190),
(3, 191),
(3, 192),
(3, 193),
(3, 194),
(3, 195),
(3, 196),
(3, 197),
(3, 198),
(3, 199),
(3, 200),
(3, 201),
(3, 202),
(3, 203),
(3, 204),
(3, 205),
(3, 206),
(3, 207),
(3, 208),
(3, 209),
(3, 210),
(3, 211),
(3, 212),
(3, 213),
(3, 214),
(3, 215),
(3, 216),
(3, 217),
(3, 218),
(3, 219),
(3, 220),
(3, 221),
(3, 222),
(3, 223),
(3, 346),
(3, 226),
(3, 227),
(3, 228),
(3, 229),
(3, 230),
(3, 231),
(3, 232),
(3, 233),
(3, 234),
(3, 235),
(3, 236),
(3, 237),
(3, 238),
(3, 239),
(3, 240),
(3, 241),
(3, 242),
(3, 243),
(3, 244),
(3, 245),
(3, 246),
(3, 247),
(3, 248),
(3, 249),
(3, 250),
(3, 251),
(3, 252),
(3, 253),
(3, 254),
(3, 255),
(3, 256),
(3, 257),
(3, 258),
(3, 259),
(3, 260),
(3, 261),
(3, 262),
(3, 263),
(3, 264),
(3, 265),
(3, 266),
(3, 267),
(3, 268),
(3, 269),
(3, 270),
(3, 271),
(3, 272),
(3, 273),
(3, 274),
(3, 275),
(3, 276),
(3, 277),
(3, 278),
(3, 279),
(3, 280),
(3, 281),
(3, 282),
(3, 283),
(3, 284),
(3, 285),
(3, 286),
(3, 287),
(3, 288),
(3, 289),
(3, 290),
(3, 291),
(3, 292),
(3, 293),
(3, 294),
(3, 295),
(3, 296),
(3, 297),
(3, 298),
(3, 299),
(3, 300),
(3, 301),
(3, 302),
(3, 303),
(3, 304),
(3, 305),
(3, 306),
(3, 307),
(3, 308),
(3, 309),
(3, 310),
(3, 311),
(3, 312),
(3, 313),
(3, 314),
(3, 315),
(3, 316),
(3, 317),
(3, 318),
(3, 319),
(3, 320),
(3, 321),
(3, 322),
(3, 323),
(3, 325),
(3, 326),
(3, 327),
(3, 328),
(3, 329),
(3, 330),
(3, 331),
(3, 332),
(3, 333),
(3, 334),
(3, 335),
(3, 336),
(3, 337),
(3, 338),
(3, 339),
(3, 340),
(3, 341),
(3, 342),
(3, 343),
(3, 344),
(3, 345);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(150) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professionales`
--

CREATE TABLE `professionales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qualification_title` varchar(150) NOT NULL,
  `institution` varchar(150) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date DEFAULT NULL,
  `passing_year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professionales`
--

INSERT INTO `professionales` (`id`, `qualification_title`, `institution`, `from_date`, `to_date`, `passing_year`, `created_at`, `updated_at`, `deleted_at`, `employee_id`) VALUES
(1, 'BSC', 'Dhaka College', '2019-01-01', '2024-08-23', 2001, '2024-05-27 12:25:10', '2024-05-27 12:25:10', NULL, 1),
(2, 'Software Developer', 'Synergy Interface Ltd.', '2023-10-05', '2024-03-08', 2024, '2024-06-01 05:31:42', '2024-06-01 05:31:42', NULL, 3),
(3, 'BSC', 'Dhaka City College', '2018-02-22', '2023-03-28', 2022, '2024-06-01 08:27:08', '2024-06-01 08:27:08', NULL, 4),
(4, 'BSC', 'Dhaka City College', '2018-01-02', '2023-01-31', 2023, '2024-06-01 13:15:16', '2024-06-01 13:15:16', NULL, 5),
(5, 'BSC', 'Dhaka College', '2019-01-31', '2023-02-01', 2023, '2024-06-01 13:46:02', '2024-06-01 13:46:02', NULL, 6),
(6, 'Software Developer', 'Synergy Interface Limited', '2024-06-01', '2024-06-01', 2024, '2024-06-01 18:38:54', '2024-06-01 18:38:54', NULL, 7),
(7, 'BSC', 'Dhaka College', '1989-02-09', '1994-02-09', 1995, '2024-06-02 10:12:12', '2024-06-02 10:12:12', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'প্রজেক্ট-১', 'Project-1', '2024-05-27 14:06:35', '2024-05-30 14:17:39', '2024-05-30 14:17:39'),
(2, 'প্রকল্প-২', 'Project-2', '2024-05-27 14:06:51', '2024-05-30 14:17:43', '2024-05-30 14:17:43'),
(3, 'ভাওয়াল জাতীয় উদ্যান উন্নয়ন প্রকল্প', 'Bhawal National Park Development Project', '2024-05-30 14:20:28', '2024-05-30 14:20:28', NULL),
(4, 'সম্প্রসারিত ফরেস্ট রিসোর্সেস ম্যানেজমেন্ট প্রকল্প', 'Extended Forest Resources Management Project', '2024-05-30 14:28:25', '2024-05-30 14:28:25', NULL),
(5, 'ফরেস্ট্রী সেক্টর প্রকল্প', 'Forestry Sector Project', '2024-05-30 14:29:56', '2024-05-30 14:29:56', NULL),
(6, 'সমাপ্ত মুজিবনগর কমপ্লেক্স (বন অধিদপ্তর অঙ্গ) প্রকল্প', 'Completed Mujibnagar Complex (Part of Forest Department) Project', '2024-05-30 14:33:52', '2024-05-30 14:33:52', NULL),
(7, 'উপকূলীয় সবুজ বেষ্টনী', 'Coastal Green Belt', '2024-05-30 14:35:28', '2024-05-30 14:35:28', NULL),
(8, 'বন্যপ্রাণী সংরক্ষণ ও ব্যবস্থাপনা জোরদারকরণ (SRCWP) প্রকল্প', 'Wildlife Conservation and Management Strengthening (SRCWP) Scheme', '2024-05-30 14:37:52', '2024-05-30 14:37:52', NULL),
(9, 'সমাপ্ত রামগর সীতাকুণ্ড এলাকায় নগ্ন পাহাড় বনায়ন শীর্ষক প্রকল্প', 'Completed Bare Hill Afforestation project in Sitakunda area of ​​Ramgarh', '2024-05-30 14:40:29', '2024-05-30 14:40:29', NULL),
(10, 'সমাপ্ত শেখ রাসেল এভিয়ারী এন্ড ইকোপার্ক, রাঙ্গুনিয়া ,চট্টগ্রাম', 'Completed Sheikh Russell Aviary & Ecopark, Rangunia, Chittagong', '2024-05-30 14:44:02', '2024-05-30 14:44:02', NULL),
(11, 'জাতীয় বোটাকিনিক্যাল উদ্যান, বলধা উদ্যান  ও হারবেরিয়ামের সমন্বিত উন্নয়ন” প্রকল্প', 'Integrated Development of National Botanic Garden, Baldha Garden and Herbarium” project', '2024-05-30 14:48:56', '2024-05-31 22:57:52', NULL),
(12, 'বঙ্গবন্ধু শেখ মুজিব সাফারী পার্ক , কক্সবাজার', 'Bangabandhu Sheikh Mujib Safari Park, Cox\'s Bazar', '2024-05-30 14:50:58', '2024-05-30 14:50:58', NULL),
(13, 'ডুলাহাজরা সাফারী পার্ক, কক্সবাজার', 'Dullahazra Safari Park, Cox\'s Bazar', '2024-05-30 15:18:40', '2024-05-30 15:18:40', NULL),
(14, 'বঙ্গবন্ধু শেখ মুজিব সাফারী পার্ক , গাজীপুর', 'Bangabandhu Sheikh Mujib Safari Park, Gazipur', '2024-05-30 15:20:30', '2024-05-30 15:20:30', NULL),
(15, 'পার্বত্য চট্টগ্রামের অশ্রেনীভুক্ত ও সংরক্ষিত বনাঞ্চলে বনীকরণ ও ঝুমিয়া পুনর্বাসন', 'Afforestation and Jhumia Rehabilitation in Unclassified and Reserved Forest Areas of Chittagong Hill Tracts', '2024-05-30 15:26:23', '2024-05-31 22:57:38', NULL),
(16, 'জীববৈচিত্র্য সংরক্ষণ ও ইকোট্যুরিজম উন্নয়ন প্রকল্প', 'Biodiversity Conservation and Ecotourism Development Project', '2024-05-30 15:30:48', '2024-05-30 15:30:48', NULL),
(17, 'মধুপুর জাতীয় উদ্যান উন্নয়ন প্রকল্প', 'Madhupur National Park Development Project', '2024-05-30 15:32:53', '2024-05-30 15:32:53', NULL),
(18, 'বোটাকিনিক্যাল গার্ডেন ইকোপার্ক স্থাপন সীতাকুন্ড, চট্টগ্রাম', 'Establishment of Botanic Garden Ecopark Sitakund, Chittagong', '2024-05-30 15:35:44', '2024-05-30 15:35:44', NULL),
(19, 'মাধবকুন্ড ইকোপার্ক প্রকল্প', 'Madhavkund Ecopark Project', '2024-05-30 15:37:13', '2024-05-30 15:37:13', NULL),
(20, 'সমাপ্ত কলাপাড়া উপজেলার কুয়াকাটা ইকোপার্ক  স্থাপন প্রকল্প', 'Kuakata Ecopark establishment project of Kalapara upazila completed', '2024-05-30 15:39:49', '2024-05-30 15:39:49', NULL),
(21, 'বায়োডাইভারসিটি কনজােরভশন ইন দি সুন্দরবন রিজার্ভ ফরেস্ট প্রকল্প সুন্দরবন সংরক্ষিত বনাঞ্চল ব্যবস্থাপনা সহায়তা প্রদান', 'Biodiversity Conservation in the Sundarbans Reserve Forest Project Providing management support to Sundarbans Reserve Forests', '2024-05-30 15:43:56', '2024-05-30 15:43:56', NULL),
(22, 'বায়োডাইভারসিটি কনজােরভশন ইন দি সুন্দরবন রিজার্ভ ফরেস্ট', 'Biodiversity Conservation in the Sundarban Reserve Forest', '2024-05-30 15:45:54', '2024-05-30 15:45:54', NULL),
(23, 'বাঁশখালী ইকোপার্ক , চট্টগ্রাম', 'Banskhali Ecopark, Chittagong', '2024-05-30 15:47:40', '2024-05-30 15:47:40', NULL),
(24, 'মধুটিলা ইকোপার্ক (২য় পর্যায়)', 'Madhutila Ecopark (2nd Phase)', '2024-05-30 15:49:59', '2024-05-30 15:49:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_revenuelones`
--

CREATE TABLE `project_revenuelones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_revenue_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_revenuelones`
--

INSERT INTO `project_revenuelones` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `project_revenue_id`) VALUES
(2, 'ক্যাডার', 'Cadre', NULL, '2024-05-27 14:04:29', 2),
(3, 'নন ক্যাডার', 'Non Cadre', '2024-05-27 14:05:04', '2024-05-27 14:05:04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `project_revenue_exams`
--

CREATE TABLE `project_revenue_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name_bn` varchar(150) NOT NULL,
  `exam_name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `exam_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_revenue_exams`
--

INSERT INTO `project_revenue_exams` (`id`, `exam_name_bn`, `exam_name_en`, `created_at`, `updated_at`, `exam_id`) VALUES
(1, 'বিভাগীয় পরীক্ষা', 'Departmental Exam', '2024-05-27 14:08:21', '2024-05-27 14:08:21', 2),
(2, 'সিনিয়র স্কেল পরীক্ষা', 'Senior Scale Exam', '2024-05-27 14:08:29', '2024-05-27 14:08:29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `publication_type` varchar(150) NOT NULL,
  `publication_media` varchar(150) DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `publication_link` varchar(150) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title`, `publication_type`, `publication_media`, `publication_date`, `publication_link`, `description`, `created_at`, `updated_at`, `employee_id`) VALUES
(1, 'Asian Journal', 'Books', NULL, '2024-05-25', NULL, '<figure class=\"image\"><img src=\"http://localhost/storage/9/play-store.png\"></figure>', '2024-05-27 13:00:52', '2024-05-27 13:00:52', 1),
(2, 'Covid-19: Introduce yourself to the world.', 'Magazine', 'Newspaper', NULL, NULL, NULL, '2024-06-01 05:52:39', '2024-06-01 05:52:39', 3),
(3, 'Publications', 'Books', NULL, NULL, NULL, NULL, '2024-06-01 08:39:09', '2024-06-01 08:39:09', 4),
(4, 'শিরোনাম', 'Mobograph', NULL, '2024-01-16', NULL, NULL, '2024-06-01 13:24:18', '2024-06-01 13:24:18', 5),
(5, 'Demo', 'Books', 'Ok', '2022-02-09', 'https://forestpims.xyz/admin/publications/create', NULL, '2024-06-01 13:56:08', '2024-06-01 13:56:08', NULL),
(6, 'Monograph', 'Journal', 'Monograph Test', '2024-06-01', 'Monograph Test-1', '<p>Test</p>', '2024-06-01 19:08:47', '2024-06-01 19:08:47', 7),
(7, 'Asian Journal of Geoinformatic', 'Journal', NULL, NULL, NULL, '<p>Asian Journal of Geoinformatic</p>', '2024-06-02 10:49:00', '2024-06-02 10:49:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `quota`
--

CREATE TABLE `quota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `remark` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quota`
--

INSERT INTO `quota` (`id`, `name_bn`, `name_en`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'মুক্তিযোদ্ধা কোটা', 'Freedom Fighter Quota', NULL, NULL, '2024-06-01 04:52:34'),
(2, 'কোটা নাই', 'Non Quota', NULL, NULL, NULL),
(3, 'প্রতিবন্ধী কোটা', 'Autism Quota', NULL, '2024-06-01 04:52:58', '2024-06-01 04:52:58'),
(4, 'আনসার/ভিডিপি কোটা', 'Ansar/VDP Quota', NULL, '2024-06-01 04:53:37', '2024-06-01 04:53:37'),
(5, 'মহিলা কোটা', 'Women Quota', NULL, '2024-06-01 04:54:09', '2024-06-01 04:54:09'),
(6, 'উপজাতি কোটা', 'Tribe Quota', NULL, '2024-06-01 04:55:32', '2024-06-01 04:55:32'),
(7, 'এতিম কোটা', 'Atim Quota', NULL, '2024-06-01 04:55:59', '2024-06-01 04:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'মুসলিম', 'Muslim', NULL, NULL),
(2, 'হিন্দু', 'Hindu', NULL, NULL),
(3, 'খ্রিস্টান', 'Christian', NULL, NULL),
(4, 'বৌদ্ধ', 'Buddhist', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `resultgroup_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`, `resultgroup_id`) VALUES
(1, 'ফার্স্ট ডিভিশন', 'First Division', NULL, '2024-05-28 09:41:48', NULL, 1),
(2, 'সেকেন্ড ডিভিশন', 'Second Division', NULL, '2024-05-28 09:40:56', NULL, 1),
(3, 'থার্ড ডিভিশন', 'Third Division', NULL, '2024-05-28 09:40:41', NULL, 1),
(4, 'ফাস্ট ক্লাস', 'First Class', NULL, '2024-05-28 09:42:05', NULL, 3),
(5, 'সেকেন্ড ক্লাস', 'Second Class', NULL, '2024-05-28 09:41:21', NULL, 3),
(6, 'Third', 'Third', NULL, '2024-05-28 09:39:37', '2024-05-28 09:39:37', NULL),
(7, 'Appeared', 'Appeared', NULL, '2024-06-01 05:19:21', '2024-06-01 05:19:21', NULL),
(8, 'নিবন্ধিত', 'Enrolled', NULL, '2024-05-28 09:42:53', NULL, NULL),
(9, 'এওয়ার্ডেড', 'Awarded', NULL, '2024-06-01 05:18:36', '2024-06-01 05:18:36', NULL),
(10, 'পাস', 'Pass', NULL, '2024-05-28 09:41:32', NULL, NULL),
(11, 'থার্ড ক্লাস', 'Third Class', '2024-05-28 09:40:13', '2024-05-28 09:40:13', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `result_groups`
--

CREATE TABLE `result_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_groups`
--

INSERT INTO `result_groups` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ডিভিশন', 'Division', NULL, '2024-05-28 09:38:53', NULL),
(2, 'গ্রেড', 'Grade', NULL, '2024-05-28 09:38:35', NULL),
(3, 'ক্লাস', 'Class', NULL, '2024-05-28 09:39:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL),
(3, 'dfo', '2024-06-01 11:40:58', '2024-06-01 11:40:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `service_particulars`
--

CREATE TABLE `service_particulars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_status` varchar(150) DEFAULT NULL,
  `office_organization_institute` varchar(150) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `designation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_particulars`
--

INSERT INTO `service_particulars` (`id`, `designation_status`, `office_organization_institute`, `joining_date`, `release_date`, `created_at`, `updated_at`, `deleted_at`, `designation_id`, `employee_id`) VALUES
(1, 'None', 'Dhaka', '2024-05-27', '2024-05-31', '2024-05-27 13:39:14', '2024-05-27 13:47:40', '2024-05-27 13:47:40', 1, 1),
(2, 'None', 'Dhaka', '2024-05-27', '2024-05-31', '2024-05-27 13:47:14', '2024-05-27 13:47:14', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `copyright` varchar(150) NOT NULL,
  `helpline` varchar(150) DEFAULT NULL,
  `title_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_ass_pr_attachments`
--

CREATE TABLE `social_ass_pr_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree_membership_organization` varchar(150) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `certificate_achievement` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_ass_pr_attachments`
--

INSERT INTO `social_ass_pr_attachments` (`id`, `degree_membership_organization`, `description`, `certificate_achievement`, `created_at`, `updated_at`, `employee_id`) VALUES
(1, 'None', 'Demo', 'Demo', '2024-05-27 13:46:37', '2024-05-27 13:46:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spouse_informationes`
--

CREATE TABLE `spouse_informationes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) DEFAULT NULL,
  `nid_number` varchar(150) DEFAULT NULL,
  `occupation` varchar(150) DEFAULT NULL,
  `office_address` varchar(150) DEFAULT NULL,
  `phone_number` varchar(150) DEFAULT NULL,
  `present_addess` longtext DEFAULT NULL,
  `permanent_addess` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spouse_informationes`
--

INSERT INTO `spouse_informationes` (`id`, `name_bn`, `name_en`, `nid_number`, `occupation`, `office_address`, `phone_number`, `present_addess`, `permanent_addess`, `created_at`, `updated_at`, `deleted_at`, `employee_id`) VALUES
(1, 'এস. এম. আহসানুল আজিজ', 'Mashrur Ahsan', '45345345345345', 'Govt. Service', 'Dhaka', '01957073942', '<p>dfdfsd</p>', '<p>sdfsdf</p>', '2024-05-27 12:26:33', '2024-05-27 12:26:33', NULL, 1),
(2, 'এস. এম. আহসানুল আজিজ', 'S. M. Ahsanul Aziz', '45345345345345', 'Govt. Service', 'Dhaka', '9026394', NULL, NULL, '2024-05-27 12:30:06', '2024-05-27 12:30:06', NULL, 1),
(3, 'রওনক জাহান মিশু', 'Rawnak Jahan Mishu', '4212345678', NULL, NULL, '01764894771', '<p>Mymensingh&nbsp;</p>', '<p>Mymensingh&nbsp;</p>', '2024-06-01 05:38:00', '2024-06-01 05:38:00', NULL, 3),
(4, 'N/A', 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-01 08:31:06', '2024-06-01 08:31:06', NULL, 4),
(5, 'মাশরুর আহসান', 'Mashrur Ahsan', '45345345345345', NULL, NULL, '9026394', NULL, NULL, '2024-06-01 13:17:34', '2024-06-01 13:17:34', NULL, 5),
(6, 'মাশরুর আহসান', 'Mashrur Ahsan', '45345345345345', NULL, NULL, '01957073942', NULL, NULL, '2024-06-01 13:48:28', '2024-06-01 13:48:28', NULL, 6),
(7, 'রওনক জাহান', 'Rawnak Jahan', '1234561234', NULL, NULL, '01609758377', '<p>Mymensingh</p>', '<p>Mymensingh</p>', '2024-06-01 18:50:48', '2024-06-01 18:50:48', NULL, 7),
(8, 'রওনক জাহান', 'Rawnak Jahan', '1234561234', NULL, NULL, '01609758377', '<p>Dhaka</p>', '<p>Mirpur</p>', '2024-06-01 19:46:24', '2024-06-01 19:46:24', NULL, 7),
(9, 'মোঃ আতিকুল ইসলাম', 'Md. Atikul Islam', NULL, NULL, NULL, '01957073942', '<p>Magura , Bangladesh</p>', '<p>Magura , Bangladesh</p>', '2024-06-02 10:17:05', '2024-06-02 10:17:05', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Active', '', NULL, NULL, NULL),
(2, 'Inactive', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `training_name` varchar(150) DEFAULT NULL,
  `institute_name` varchar(150) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `grade` varchar(150) DEFAULT NULL,
  `position` varchar(150) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `training_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `training_name`, `institute_name`, `start_date`, `end_date`, `grade`, `position`, `location`, `created_at`, `updated_at`, `deleted_at`, `employee_id`, `training_type_id`, `country_id`) VALUES
(1, 'Training on Apprising Bangladesh Delta Plan 2100', 'The General Economics Division(GED) of the Bangladesh Planning Commission,', '2020-07-22', '2020-07-25', NULL, NULL, 'Dhaka', '2024-05-27 12:38:05', '2024-05-27 12:38:05', NULL, 1, 1, 14),
(2, 'Regional Training Workshop on Integrated Watershed Mgt.', 'FDTC, Forest Academy', '2024-05-24', '2024-05-27', NULL, NULL, NULL, '2024-06-01 05:45:50', '2024-06-01 05:45:50', NULL, 3, 2, 76),
(3, 'Training on Apprising Bangladesh Delta Plan 2100', 'The General Economics Division(GED) of the Bangladesh Planning Commission,', '2024-04-30', '2024-05-01', NULL, NULL, NULL, '2024-06-01 08:36:39', '2024-06-01 08:36:39', NULL, 4, 1, 14),
(4, 'Training on Apprising Bangladesh Delta Plan 2100', 'The General Economics Division(GED) of the Bangladesh Planning Commission,', '2023-08-02', '2023-09-01', NULL, NULL, 'Dhaka', '2024-06-01 13:21:07', '2024-06-01 13:21:07', NULL, 5, 1, 2),
(5, 'Training on Apprising Bangladesh Delta Plan 2100', 'The General Economics Division(GED) of the Bangladesh Planning Commission,', '2020-03-06', '2021-03-05', NULL, NULL, 'Dhaka', '2024-06-01 13:51:55', '2024-06-01 13:51:55', NULL, 6, 1, 1),
(6, 'UNFCCC Cop18', 'UNDP', '2024-06-01', NULL, NULL, NULL, '01/07/2024', '2024-06-01 18:55:53', '2024-06-01 18:55:53', NULL, 7, 1, 7),
(7, 'UNFCCC Cop18', 'UNDPTVC', '2024-06-05', '2024-06-27', NULL, NULL, '27/06/2024', '2024-06-01 18:57:12', '2024-06-01 18:57:12', NULL, 7, 2, 3),
(8, 'Fundamental Computing & Computer Automation', 'BADS', '2001-09-07', '2001-10-06', NULL, NULL, 'Dhaka', '2024-06-02 10:28:14', '2024-06-02 10:28:14', NULL, 9, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `training_types`
--

CREATE TABLE `training_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `value` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_types`
--

INSERT INTO `training_types` (`id`, `name_bn`, `name_en`, `value`, `created_at`, `updated_at`) VALUES
(1, 'স্থানীয় প্রশিক্ষণ', 'Local Training', NULL, NULL, NULL),
(2, 'বিদেশী প্রশিক্ষণ', 'Foreign Training', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `traveltypes`
--

CREATE TABLE `traveltypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traveltypes`
--

INSERT INTO `traveltypes` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'ব্যক্তিগত কারণে ভ্রমণ', 'Personal Travel', '2024-06-01 05:02:28', '2024-06-01 05:02:28'),
(2, 'দাপ্তরিক কাজে ভ্রমণ', 'Official Travel', '2024-06-01 05:02:57', '2024-06-01 05:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `travel_purposes`
--

CREATE TABLE `travel_purposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `remark` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_purposes`
--

INSERT INTO `travel_purposes` (`id`, `name_bn`, `name_en`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'উদ্দেশ্য -১', 'Purpose -1', NULL, '2024-05-27 12:45:54', '2024-05-27 12:45:54'),
(2, 'উদ্দেশ্য -২', 'Purpose -2', NULL, '2024-05-27 12:46:02', '2024-05-27 12:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `travel_records`
--

CREATE TABLE `travel_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `purpose_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_records`
--

INSERT INTO `travel_records` (`id`, `title`, `start_date`, `end_date`, `created_at`, `updated_at`, `employee_id`, `country_id`, `purpose_id`) VALUES
(1, NULL, '2018-09-12', '2018-09-14', '2024-05-27 12:42:12', '2024-05-27 12:42:12', 1, 76, ''),
(2, 'Official Purpose', '2024-05-28', '2024-05-29', '2024-06-01 05:46:43', '2024-06-01 05:46:43', 3, 76, ''),
(3, NULL, '2024-02-26', '2024-03-03', '2024-06-01 08:37:27', '2024-06-01 08:37:27', 4, 14, ''),
(4, 'Demo', '2023-10-30', '2021-02-17', '2024-06-01 13:22:07', '2024-06-01 13:22:07', 5, 191, 'Demo'),
(5, 'Nothing', '2018-02-01', '2021-03-04', '2024-06-01 13:52:42', '2024-06-01 13:52:42', 6, 2, 'Demo'),
(6, 'Seminar on National Forest Program', '2024-06-01', '2024-06-06', '2024-06-01 18:58:42', '2024-06-01 18:58:42', 7, 76, 'Nothing'),
(7, 'SAARC Forestry Governing Body Meeting', '2024-06-01', '2024-06-07', '2024-06-01 19:00:09', '2024-06-01 19:00:09', 7, 20, 'Nothing-1'),
(8, 'DEmo', '2024-06-01', '2024-06-14', '2024-06-01 19:30:20', '2024-06-01 19:30:20', 7, 3, 'Nothing-1'),
(9, 'Join Forest Management Training', '2005-05-05', '2005-05-11', '2024-06-02 10:30:39', '2024-06-02 10:30:39', 9, 14, 'Training');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `grocode` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `name_bn`, `name_en`, `grocode`, `created_at`, `updated_at`, `district_id`) VALUES
(95, 'দেবিদ্বার', 'DEBIDWAR', '40', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(94, 'দাউদকান্দি', 'DAUDKANDI', '36', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(93, 'কুমিল্লা সদর দক্ষিণ', 'COMILLA SADAR DAKSHIN', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(92, 'চৌদ্দগ্রাম', 'CHAUDDAGRAM', '31', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(91, 'চান্দিনা', 'CHANDINA', '27', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(90, 'বুড়িচং', 'BURICHANG', '18', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(89, 'ব্রাক্ষ্মণ পাড়া', 'BRAHMAN PARA', '15', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(88, 'বরুড়া', 'BARURA', '09', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(87, 'জীবন নগর', 'JIBAN NAGAR', '55', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 36),
(86, 'দামুড়হুদা', 'DAMURHUDA', '31', NULL, '2019-04-17 03:11:44', 36),
(85, 'চুয়াডাঙ্গা সদর', 'CHUADANGA SADAR', '23', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 36),
(84, 'আলমডাঙ্গা', 'ALAMDANGA', '07', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 36),
(83, 'সীতাকুন্ড', 'SITAKUNDA', '86', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(82, 'সাতকানীয়া', 'SATKANIA', '82', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(81, 'সন্দ্বীপ', 'SANDWIP', '78', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(80, 'রাউজান', 'RAOZAN', '74', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(79, 'রাঙ্গুনীয়া', 'RANGUNIA', '70', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(78, 'পটিয়া', 'PATIYA', '61', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(77, 'রাঙ্গাবালি', 'RANGABALI', '97', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 5),
(76, 'বিজয়নগর', 'BIJOYNAGAR', '07', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 8),
(75, 'মীরসরাই', 'MIRSHARAI', '53', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(74, 'লোহাগাড়া', 'LOHAGARA', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(73, 'হাটহাজারী', 'HATHAZARI', '37', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(72, 'ফটিকছড়ি', 'FATIKCHHARI', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(71, 'কালুখালী', 'KALUKHALI', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 31),
(70, 'চন্দনাইশ', 'CHANDANAISH', '18', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(69, 'বোয়ালখালী', 'BOALKHALI', '12', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(68, 'বাঁশখালী', 'BANSHKHALI', '08', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(67, 'আনোয়ারা', 'ANOWARA', '04', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 10),
(66, 'শাহরাস্তি', 'SHAHRASTI', '95', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 9),
(65, 'মতলব উত্তর', 'MATLAB UTTAR', '79', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 9),
(63, 'কচুয়া', 'KACHUA', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 9),
(64, 'মতলব দক্ষিণ', 'MATLAB DAKSHIN', '76', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 9),
(62, 'হাজীগঞ্জ', 'HAJIGANJ', '49', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 9),
(61, 'হাইমচর', 'HAIM CHAR', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 9),
(60, 'ফরিদগঞ্জ', 'FARIDGANJ', '45', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 9),
(59, 'চাঁদপুর সদর', 'CHANDPUR SADAR', '22', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 9),
(58, 'সরাইল', 'SARAIL', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 8),
(57, 'নাসিরনগর', 'NASIRNAGAR', '90', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 8),
(56, 'নবীনগর', 'NABINAGAR', '85', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 8),
(55, 'কস্‌বা', 'KASBA', '63', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 8),
(54, 'আশুগঞ্জ', 'ASHUGANJ', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 8),
(53, 'ব্রাক্ষ্মণবাড়িয়া সদর', 'BRAHMANBARIA SADAR', '13', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 8),
(52, 'বাঞ্ছারামপুর', 'BANCHHARAMPUR', '04', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 8),
(51, 'আখাউড়া', 'AKHAURA', '02', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 8),
(50, 'সোনাতলা', 'SONATOLA', '95', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(49, 'শিব্‌গঞ্জ', 'SHIBGANJ', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(48, 'শেরপুর', 'SHERPUR', '88', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(47, 'শাজাহানপুর', 'SHAJAHANPUR', '85', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(46, 'সারিয়াকান্দি', 'SARIAKANDI', '81', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(45, 'নন্দীগ্রাম', 'NANDIGRAM', '67', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(44, 'কাহালু', 'KAHALOO', '54', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(43, 'গাবতলী', 'GABTALI', '40', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(42, 'দুপচাঁচিয়া', 'DHUPCHANCHIA', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(41, 'ধুনট', 'DHUNAT', '27', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(40, 'বগুড়া সদর', 'BOGRA SADAR', '20', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(39, 'আদমদিঘী', 'ADAMDIGHI', '06', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 45),
(38, 'তজুমদ্দিন', 'TAZUMUDDIN', '91', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 3),
(37, 'মনপুরা', 'MANPURA', '65', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 3),
(36, 'লালমোহন', 'LALMOHAN', '54', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 3),
(35, 'দৌলত খান', 'DAULAT KHAN', '29', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 3),
(34, 'চর ফ্যাশন', 'CHAR FASSON', '25', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 3),
(33, 'বোরহানউদ্দীন', 'BURHANUDDIN', '21', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 3),
(32, 'ভোলা সদর', 'BHOLA SADAR', '18', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 3),
(31, 'উজিরপুর', 'WAZIRPUR', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(30, 'মুলাদী', 'MULADI', '69', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(29, 'মেহেন্দীগঞ্জ', 'MHENDIGANJ', '62', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(28, 'বরিশাল সদর', 'BARISAL SADAR (KOTWALI)', '51', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(27, 'হিজলা', 'HIZLA', '36', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(26, 'গৌরনদী', 'GAURNADI', '32', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(25, 'বানারী পাড়া', 'BANARI PARA', '10', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(24, 'বাকেরগঞ্জ', 'BAKERGANJ', '07', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(23, 'বাবুগঞ্জ', 'BABUGANJ', '03', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(22, 'আগৈলঝাড়া', 'AGAILJHARA', '02', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 2),
(21, 'পাথরঘাটা', 'PATHARGHATA', '85', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 1),
(20, 'বেতাগী', 'BETAGI', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 1),
(19, 'বরগুনা সদর', 'BARGUNA SADAR', '28', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 1),
(18, 'বামনা', 'BAMNA', '19', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 1),
(17, 'আমতলী', 'AMTALI', '09', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 1),
(16, 'থানচি', 'THANCHI', '95', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 7),
(15, 'রুমা', 'RUMA', '91', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 7),
(14, 'রোয়াংছড়ি', 'ROWANGCHHARI', '89', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 7),
(12, 'লামা', 'LAMA', '51', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 7),
(13, 'নাইক্ষ্যংছড়ি', 'NAIKHONGCHHARI', '73', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 7),
(11, 'বান্দরবন সদর', 'BANDARBAN SADAR', '14', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 7),
(10, 'আলীকদম', 'ALIKADAM', '04', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 7),
(9, 'শরনখোলা', 'SARANKHOLA', '77', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 35),
(8, 'রামপাল', 'RAMPAL', '73', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 35),
(7, 'মোড়েলগঞ্জ', 'MORRELGANJ', '60', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 35),
(6, 'মোংলা', 'MONGLA', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 35),
(5, 'মোল্লাহাট', 'MOLLAHAT', '56', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 35),
(4, 'কচুয়া 38', 'KACHUA 38', '38', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 35),
(3, 'ফকিরহাট', 'FAKIRHAT', '34', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 35),
(2, 'চিতলমারী', 'CHITALMARI', '14', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 35),
(1, 'বাগেরহাট সদর', 'BAGERHAT SADAR', '08', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 35),
(96, 'হোমনা', 'HOMNA', '54', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(97, 'আদর্শ সদর', 'COMILLA ADARSHA SADAR', '67', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(98, 'লাকসাম', 'LAKSAM', '72', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(99, 'মনোহরগঞ্জ', 'MANOHARGANJ', '74', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(100, 'মেঘনা', 'MEGHNA', '75', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(101, 'মুরাদনগর', 'MURADNAGAR', '81', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(102, 'নাঙ্গলকোট', 'NANGALKOT', '87', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(103, 'তিতাস', 'TITAS', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 11),
(104, 'চকরিয়া', 'CHAKARIA', '16', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 12),
(105, 'কক্সবাজার সদর', 'COX\'S BAZAR SADAR', '24', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 12),
(106, 'কুতুবদিয়া', 'KUTUBDIA', '45', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 12),
(107, 'মহেশখালী', 'MAHESHKHALI', '49', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 12),
(108, 'পেকুয়া', 'PEKUA', '56', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 12),
(109, 'রামু', 'RAMU', '66', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 12),
(110, 'টেক্‌নাফ', 'TEKNAF', '90', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 12),
(111, 'উখিয়া ', 'UKHIA UPAZILA', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 12),
(112, 'তেজগাঁও উন্নয়ন সার্কেল', 'TEJGAON UNNAYAN CIRCLE', '04', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 18),
(113, 'ধামরাই', 'DHAMRAI', '14', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 18),
(114, 'দোহার', 'DOHAR', '18', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 18),
(115, 'কেরানীগঞ্জ', 'KERANIGANJ', '38', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 18),
(116, 'নবাবগঞ্জ', 'NAWABGANJ', '62', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 18),
(117, 'সাভার', 'SAVAR', '72', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 18),
(118, 'বিরামপুর', 'BIRAMPUR', '10', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(119, 'বীরগঞ্জ', 'BIRGANJ', '12', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(120, 'বিরল', 'BIRAL', '17', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(121, 'বোঁচাগঞ্জ', 'BOCHAGANJ', '21', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(122, 'চিরিরবন্দর', 'CHIRIRBANDAR', '30', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(123, 'ফুলবাড়ী', 'FULBARI', '38', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(124, 'ঘোড়াঘাট', 'GHORAGHAT', '43', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(125, 'হাকিমপুর', 'HAKIMPUR', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(126, 'কাহারোল', 'KAHAROLE', '56', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(127, 'খানসামা', 'KHANSAMA', '60', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(128, 'দিনাজপুর সদর', 'DINAJPUR SADAR', '64', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(129, 'নবাবগঞ্জ', 'NAWABGANJ', '69', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(130, 'পার্বতীপুর', 'PARBATIPUR', '77', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 53),
(131, 'আলফাডাঙ্গা', 'ALFADANGA', '03', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 19),
(132, 'ভাংগা', 'BHANGA', '10', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 19),
(133, 'বোয়ালমারী', 'BOALMARI', '18', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 19),
(134, 'চর ভদ্রাসন', 'CHAR BHADRASAN', '21', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 19),
(135, 'ফরিদপুর সদর', 'FARIDPUR SADAR', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 19),
(136, 'মধুখালী', 'MADHUKHALI', '56', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 19),
(137, 'নগরকান্দা', 'NAGARKANDA', '62', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 19),
(138, 'সদরপুর', 'SADARPUR', '84', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 19),
(139, 'ছাগলনাইয়া', 'CHHAGALNAIYA', '14', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 13),
(140, 'দাগনভূঞাঁ', 'DAGANBHUIYAN', '25', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 13),
(141, 'ফেনী সদর', 'FENI SADAR', '29', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 13),
(142, 'ফুলগাজী', 'FULGAZI', '41', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 13),
(143, 'পরশুরাম', 'PARSHURAM', '51', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 13),
(144, 'সোনাগাজী', 'SONAGAZI', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 13),
(145, 'ফুলছড়ি', 'FULCHHARI', '21', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 54),
(146, 'গাইবান্ধা সদর', 'GAIBANDHA SADAR', '24', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 54),
(147, 'গোবিন্দগঞ্জ', 'GOBINDAGANJ', '30', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 54),
(148, 'পলাশবাড়ী', 'PALASHBARI', '67', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 54),
(149, 'সাদুল্যাপুর', 'SADULLAPUR', '82', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 54),
(150, 'সাঘাটা', 'SAGHATA', '88', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 54),
(151, 'সুন্দরগঞ্জ', 'SUNDARGANJ', '91', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 54),
(152, 'গাজীপুর সদর', 'GAZIPUR SADAR', '30', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 20),
(153, 'কালিয়াকৈর', 'KALIAKAIR', '32', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 20),
(154, 'কালীগঞ্জ', 'KALIGANJ', '34', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 20),
(155, 'কাপাসিয়া', 'KAPASIA', '36', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 20),
(156, 'শ্রীপুর', 'SREEPUR', '86', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 20),
(157, 'গোপালগঞ্জ সদর', 'GOPALGANJ SADAR', '32', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 21),
(158, 'কাশিয়ানী', 'KASHIANI', '43', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 21),
(159, 'কোটালীপাড়া', 'KOTALIPARA', '51', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 21),
(160, 'মুকসুদপুর', 'MUKSUDPUR', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 21),
(161, 'টুংগীপাড়া', 'TUNGIPARA', '91', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 21),
(162, 'আজমিরীগঞ্জ', 'AJMIRIGANJ', '02', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 61),
(163, 'বাহুবল', 'BAHUBAL', '05', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 61),
(164, 'বানিয়াচং', 'BANIACHONG', '11', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 61),
(165, 'চুনারুঘাট', 'CHUNARUGHAT', '26', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 61),
(166, 'হবিগঞ্জ সদর', 'HABIGANJ SADAR', '44', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 61),
(167, 'লাখাই', 'LAKHAI', '68', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 61),
(168, 'মাধবপুর', 'MADHABPUR', '71', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 61),
(169, 'নবীগঞ্জ', 'NABIGANJ', '77', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 61),
(170, 'আক্কেলপুর', 'AKKELPUR', '13', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 46),
(171, 'জয়পুরহাট সদর', 'JOYPURHAT SADAR', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 46),
(172, 'কালাই', 'KALAI', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 46),
(173, 'ক্ষেতলাল', 'KHETLAL', '61', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 46),
(174, 'পাঁচবিবি', 'PANCHBIBI', '74', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 46),
(175, 'বক্‌শীগঞ্জ', 'BAKSHIGANJ', '07', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 22),
(176, 'দেওয়ানগঞ্জ', 'DEWANGANJ', '15', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 22),
(177, 'ইসলামপুর', 'ISLAMPUR', '29', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 22),
(178, 'জামালপুর সদর', 'JAMALPUR SADAR', '36', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 22),
(179, 'মাদারগঞ্জ', 'MADARGANJ', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 22),
(180, 'মেলান্দহ', 'MELANDAHA', '61', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 22),
(181, 'সরিষাবাড়ী', 'SARISHABARI ', '85', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 22),
(182, 'অভয়নগর', 'ABHAYNAGAR', '04', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 37),
(183, 'বাঘেরপাড়া', 'BAGHER PARA', '09', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 37),
(184, 'চৌগাছা', 'CHAUGACHHA', '11', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 37),
(185, 'ঝিকরগাছা', 'JHIKARGACHHA', '23', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 37),
(186, 'কেশবপুর', 'KESHABPUR', '38', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 37),
(187, 'যশোর সদর', 'Jessore Sadar', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 37),
(188, 'মনিরামপুর', 'MANIRAMPUR', '61', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 37),
(189, 'শার্শা', 'SHARSHA', '90', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 37),
(190, 'ঝালকাঠী সদর', 'JHALOKATI SADAR', '40', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 4),
(191, 'কাঁঠালিয়া', 'KANTHALIA', '43', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 4),
(192, 'নলছিটি', 'NALCHITY', '73', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 4),
(193, 'রাজাপুর', 'RAJAPUR', '84', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 4),
(194, 'হরিণাকুন্ড', 'HARINAKUNDA', '14', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 38),
(195, 'ঝিনাইদহ সদর', 'JHENAIDAH SADAR', '19', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 38),
(196, 'কালীগঞ্জ', 'KALIGANJ', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 38),
(197, 'কোটচাঁদপুর', 'KOTCHANDPUR', '42', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 38),
(198, 'মহেশপুর', 'MAHESHPUR', '71', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 38),
(199, 'শৈলকুপা', 'SHAILKUPA', '80', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 38),
(200, 'দিঘীনালা', 'DIGHINALA', '43', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(201, 'খাগড়াছড়ি সদর', 'KHAGRACHHARI SADAR', '49', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(202, 'লক্ষীছড়ি', 'LAKSHMICHHARI', '61', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(203, 'মহালছড়ি', 'MAHALCHHARI', '65', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(204, 'মানিকছড়ি', 'MANIKCHHARI', '67', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(205, 'মাটিরাঙ্গা', 'MATIRANGA', '70', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(206, 'পানছড়ি', 'PANCHHARI', '77', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(207, 'রামগড়', 'RAMGARH', '80', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 14),
(208, 'বটিয়াঘাটা', 'BATIAGHATA', '12', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 39),
(209, 'দাকোপ', 'Dakop', '17', NULL, '2019-04-17 04:25:07', 39),
(210, 'ডুমুরিয়া', 'DUMURIA', '30', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 39),
(211, 'দিঘলিয়া', 'DIGHALIA', '40', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 39),
(212, 'কয়রা', 'KOYRA', '53', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 39),
(213, 'পাইকগাছা', 'PAIKGACHHA', '64', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 39),
(214, 'ফুলতলা', 'PHULTALA', '69', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 39),
(215, 'রূপসা', 'RUPSA', '75', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 39),
(217, 'তেরখাদা', 'TEROKHADA', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 39),
(218, 'অষ্টগ্রাম', 'AUSTAGRAM', '02', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(219, 'বাজিতপুর', 'BAJITPUR', '06', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(220, 'ভৈরব', 'BHAIRAB', '11', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(221, 'হোসেনপুর', 'HOSSAINPUR', '27', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(222, 'ইটনা', 'ITNA', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(223, 'করিমগঞ্জ', 'KARIMGANJ', '42', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(224, 'কটিয়াদী', 'KATIADI', '45', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(225, 'কিশোরগঞ্জ সদর', 'KISHOREGANJ SADAR', '49', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(226, 'কুলিয়ারচর', 'KULIAR CHAR', '54', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(227, 'মিঠামইন', 'MITHAMAIN', '59', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(228, 'নিকলী', 'NIKLI', '76', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(229, 'পাকুন্দিয়া', 'PAKUNDIA', '79', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(230, 'তাড়াইল', 'TARAIL', '92', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 23),
(231, 'ভুরুঙ্গামারী', 'BHURUNGAMARI', '06', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 55),
(232, 'রাজীবপুর', 'CHAR RAJIBPUR', '08', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 55),
(233, 'চিলমারী', 'CHILMARI', '09', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 55),
(234, 'ফুলবাড়ী', 'PHULBARI', '18', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 55),
(235, 'কুড়িগ্রাম সদর', 'KURIGRAM SADAR', '52', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 55),
(236, 'নাগেশ্বরী', 'NAGESHWARI', '61', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 55),
(237, 'রাজারহাট', 'RAJARHAT', '77', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 55),
(238, 'রৌমারী', 'RAUMARI', '79', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 55),
(239, 'উলিপুর', 'ULIPUR', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 55),
(240, 'ভেড়ামারা', 'BHERAMARA', '15', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 40),
(241, 'দৌলতপুর', 'DAULATPUR', '39', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 40),
(242, 'খোক্‌সা', 'KHOKSA', '63', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 40),
(243, 'কুমারখালী', 'KUMARKHALI', '71', NULL, '2019-02-05 08:16:05', 40),
(244, 'কুষ্টিয়া সদর', 'KUSHTIA SADAR', '79', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 40),
(245, 'মিরপুর', 'MIRPUR', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 40),
(246, 'কমলনগর', 'KAMALNAGAR', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 15),
(247, 'লক্ষ্ণীপুর সদর', 'LAKSHMIPUR SADAR', '43', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 15),
(248, 'রায়পুর', 'ROYPUR', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 15),
(249, 'রামগঞ্জ', 'RAMGANJ', '65', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 15),
(250, 'রামগতি', 'RAMGATI', '73', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 15),
(251, 'অদিতমারী', 'ADITMARI', '02', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 56),
(252, 'হাতীবান্ধা', 'HATIBANDHA', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 56),
(253, 'কালীগঞ্জ', 'KALIGANJ', '39', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 56),
(254, 'লালমনিরহাট সদর', 'LALMONIRHAT SADAR', '55', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 56),
(255, 'পাটগ্রাম', 'PATGRAM', '70', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 56),
(256, 'কালকিনী', 'KALKINI', '40', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 24),
(257, 'মাদারিপুর সদর', 'MADARIPUR SADAR', '54', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 24),
(258, 'রাজৈর', 'RAJOIR', '80', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 24),
(259, 'শিবচর', 'SHIB CHAR', '87', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 24),
(260, 'মাগুরা সদর', 'MAGURA SADAR', '57', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 41),
(261, 'মহম্মদপুর', 'MOHAMMADPUR', '66', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 41),
(262, 'শালিখা', 'SHALIKHA', '85', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 41),
(263, 'শ্রীপুর', 'SREEPUR', '95', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 41),
(264, 'দৌলতপুর', 'DAULATPUR', '10', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 25),
(265, 'ঘিওর', 'GHIOR', '22', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 25),
(266, 'হরিরামপুর', 'HARIRAMPUR', '28', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 25),
(267, 'মানিকগঞ্জ সদর', 'MANIKGANJ SADAR', '46', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 25),
(268, 'সাটুরিয়া', 'SATURIA', '70', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 25),
(269, 'শিবালয়', 'SHIBALAYA', '78', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 25),
(270, 'সিংগাইর', 'SINGAIR', '82', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 25),
(271, 'গাংনী', 'GANGNI', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 42),
(272, 'মুজিব নগর', 'MUJIB NAGAR', '60', NULL, '2019-02-05 08:43:09', 42),
(273, 'মেহেরপুর সদর', 'MEHERPUR SADAR', '87', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 42),
(274, 'বড়লেখা', 'BARLEKHA', '14', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 62),
(275, 'জুড়ী', 'JURI', '35', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 62),
(276, 'কমলগঞ্জ', 'KAMALGANJ', '56', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 62),
(277, 'কুলাউড়া', 'KULAURA', '65', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 62),
(278, 'মৌলভীবাজার সদর', 'MAULVIBAZAR SADAR', '74', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 62),
(279, 'রাজনগর', 'RAJNAGAR', '80', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 62),
(280, 'শ্রীমঙ্গল', 'SREEMANGAL', '83', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 62),
(281, 'গজারিয়া', 'GAZARIA', '24', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 26),
(282, 'লৌহজং', 'LOHAJANG', '44', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 26),
(283, 'মুন্সীগঞ্জ সদর', 'MUNSHIGANJ SADAR', '56', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 26),
(284, 'সিরাজদীখান', 'SERAJDIKHAN', '74', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 26),
(285, 'শ্রীনগর', 'SREENAGAR', '84', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 26),
(286, 'টঙ্গিবাড়ী', 'TONGIBARI', '94', NULL, '2019-03-04 08:15:10', 26),
(287, 'ভালুকা', 'BHALUKA', '13', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(288, 'ধোবাউড়া', 'DHOBAURA', '16', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(289, 'ফুলবাড়ীয়া', 'FULBARIA', '20', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(290, 'গফরগাঁও', 'GAFFARGAON', '22', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(291, 'গৌরীপুর', 'GAURIPUR', '23', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(292, 'হালূয়াঘাট', 'HALUAGHAT', '24', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(293, 'ঈশ্বরগঞ্জ', 'ISHWARGANJ', '31', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(294, 'ময়মনসিংহ সদর', 'MYMENSINGH SADAR', '52', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(295, 'মুক্তাগাছা', 'MUKTAGACHHA', '65', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(296, 'নান্দাইল', 'NANDAIL', '72', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(297, 'ফুলপুর', 'PHULPUR', '81', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(298, 'ত্রিশাল', 'TRISHAL', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 27),
(299, 'আত্রাই', 'ATRAI', '03', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(300, 'বাদলগাছী', 'BADALGACHHI', '06', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(301, 'ধামইরহাট', 'DHAMOIRHAT', '28', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(302, 'মান্দা', 'MANDA', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(303, 'মহাদেবপুর', 'MAHADEBPUR', '50', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(304, 'নওগাঁ সদর', 'NAOGAON SADAR', '60', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(305, 'নিয়ামতপুর', 'NIAMATPUR', '69', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(306, 'পত্নীতলা', 'PATNITALA', '75', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(307, 'পোরশা', 'PORSHA', '79', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(308, 'রাণীনগর', 'RANINAGAR', '85', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(309, 'সাপাহার', 'SAPAHAR', '86', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 47),
(310, 'কালিয়া', 'KALIA', '28', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 43),
(311, 'লোহাগড়া', 'LOHAGARA', '52', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 43),
(312, 'নড়াইল সদর', 'NARAIL SADAR', '76', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 43),
(313, 'আড়াইহাজার', 'ARAIHAZAR', '02', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 28),
(314, 'সোনারগাঁ', 'SONARGAON', '04', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 28),
(315, 'বন্দর', 'BANDAR', '06', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 28),
(316, 'নারায়নগঞ্জ সদর', 'NARAYANGANJ SADAR', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 28),
(317, 'রূপগঞ্জ', 'RUPGANJ', '68', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 28),
(318, 'বেলাব', 'BELABO', '07', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 29),
(319, 'মনোহরদী', 'MANOHARDI', '52', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 29),
(320, 'নরসিংদী সদর', 'NARSINGDI SADAR', '60', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 29),
(321, 'পলাশ', 'PALASH', '63', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 29),
(322, 'রায়পুরা', 'ROYPURA', '64', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 29),
(323, 'শিবপুর', 'SHIBPUR', '76', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 29),
(324, 'বাগাতীপাড়া', 'BAGATIPARA', '09', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 48),
(325, 'বড়াইগ্রাম', 'BARAIGRAM', '15', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 48),
(326, 'গুরুদাসপুর', 'GURUDASPUR', '41', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 48),
(327, 'লালপুর', 'LALPUR', '44', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 48),
(328, 'নাটোর সদর', 'NATORE SADAR', '63', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 48),
(329, 'সিংড়া', 'SINGRA', '91', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 48),
(330, 'ভোলাহাট', 'BHOLAHAT', '18', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 49),
(331, 'গোমস্তাপুর', 'GOMASTAPUR', '37', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 49),
(332, 'নাচোল', 'NACHOLE', '56', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 49),
(333, 'চাঁপাই নবাবগঞ্জ সদর', 'CHAPAI NABABGANJ SADAR', '66', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 49),
(334, 'শিবগঞ্জ', 'SHIBGANJ', '88', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 49),
(335, 'আটপাড়া', 'ATPARA', '04', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(336, 'বারহাট্টা', 'BARHATTA', '09', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(337, 'দুর্গাপুর', 'DURGAPUR', '18', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(338, 'খালিয়াজুরী', 'KHALIAJURI', '38', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(339, 'কলমাকান্দা', 'KALMAKANDA', '40', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(340, 'কেন্দুয়া', 'KENDUA', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(341, 'মদন ', 'MADAN', '56', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(342, 'মোহনগঞ্জ', 'MOHANGANJ', '63', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(343, 'নেত্রকোনা সদর', 'NETROKONA SADAR', '74', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(344, 'পূর্বধলা', 'PURBADHALA', '83', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 30),
(345, 'ডিম্‌লা', 'DIMLA UPAZILA', '12', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 57),
(346, 'ডোমার', 'DOMAR UPAZILA', '15', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 57),
(347, 'জলঢাকা ', 'JALDHAKA UPAZILA', '36', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 57),
(348, 'কিশোরগঞ্জ', 'KISHOREGANJ UPAZILA', '45', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 57),
(349, 'নীলফামারী সদর ', 'NILPHAMARI SADAR UPAZ', '64', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 57),
(350, 'সৈয়দপুর ', 'SAIDPUR UPAZILA', '85', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 57),
(351, 'বেগমগঞ্জ', 'BEGUMGANJ', '07', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 16),
(352, 'চাট্‌খিল', 'CHATKHIL', '10', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 16),
(353, 'কোম্পানীগঞ্জ', 'COMPANIGANJ', '21', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 16),
(354, 'হাতিয়া', 'HATIYA', '36', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 16),
(355, 'কবিরহাট', 'KABIRHAT', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 16),
(356, 'সেনবাগ', 'SENBAGH', '80', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 16),
(357, 'সোনাইমুড়ী', 'SONAIMURI', '83', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 16),
(358, 'সুবর্ণচর', 'SUBARNACHAR', '85', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 16),
(359, 'নোয়াখালী সদর', 'NOAKHALI SADAR', '87', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 16),
(360, 'আটঘরিয়া', 'ATGHARIA', '05', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 50),
(361, 'বেড়া', 'BERA', '16', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 50),
(362, 'ভাঙ্গুড়া', 'BHANGURA', '19', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 50),
(363, 'চাট্‌মোহর', 'CHATMOHAR', '22', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 50),
(364, 'ফরিদপুর', 'FARIDPUR', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 50),
(365, 'ঈশ্বরদী', 'ISHWARDI', '39', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 50),
(366, 'পাবনা সদর', 'PABNA SADAR', '55', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 50),
(367, 'সাঁথিয়া', 'SANTHIA', '72', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 50),
(368, 'সুজানগর', 'SUJANAGAR', '83', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 50),
(369, 'আটোয়ারী', 'ATWARI', '04', NULL, '2019-01-31 02:57:39', 58),
(370, 'বোদা', 'BODA', '25', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 58),
(371, 'দেবীগঞ্জ', 'DEBIGANJ', '34', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 58),
(372, 'পঞ্চগড় সদর', 'PANCHAGARH SADAR', '73', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 58),
(373, 'তেঁতুলিয়া', 'TENTULIA', '90', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 58),
(374, 'বাউফল', 'BAUPHAL', '38', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 5),
(375, 'দশ্‌মিনা', 'DASHMINA', '52', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 5),
(376, 'দুম্‌কী ', 'DUMKI UPAZILA', '55', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 5),
(377, 'গলাচিপা', 'GALACHIPA', '57', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 5),
(378, 'কলাপাড়া', 'KALA PARA', '66', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 5),
(379, 'মির্জাগঞ্জ', 'MIRZAGANJ UPAZILA', '76', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 5),
(380, 'পটুয়াথালী সদর', 'PATUAKHALI SADAR', '95', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 5),
(381, 'ভান্ডারিয়া', 'BHANDARIA', '14', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 6),
(382, 'কাউখালী', 'KAWKHALI', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 6),
(383, 'মঠবাড়িয়া', 'MATHBARIA', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 6),
(384, 'নাজিরপুর', 'NAZIRPUR UPAZILA', '76', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 6),
(385, 'পিরোজপুর সদর', 'PIROJPUR SADAR', '80', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 6),
(386, 'নেছারাবাদ', 'NESARABAD (SWARUPKATI)', '87', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 6),
(387, 'ইন্দুরকানী', 'Indurkani', '90', NULL, '2019-04-28 10:02:12', 6),
(388, 'বাঘা', 'BAGHA', '10', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 51),
(389, 'বাগমারা', 'BAGHMARA', '12', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 51),
(390, 'চারঘাট', 'CHARGHAT', '25', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 51),
(391, 'দুর্গাপুর', 'DURGAPUR', '31', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 51),
(392, 'গোদাগাড়ী', 'GODAGARI', '34', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 51),
(393, 'মোহনপুর', 'MOHANPUR', '53', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 51),
(394, 'পবা', 'PABA', '72', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 51),
(395, 'পুঠিয়া', 'PUTHIA', '82', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 51),
(396, 'তানোর', 'TANORE', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 51),
(397, 'বালিয়াকান্দি', 'BALIAKANDI', '07', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 31),
(398, 'গোয়ালন্দ', 'GOALANDA', '29', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 31),
(399, 'পাংশা', 'PANGSHA', '73', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 31),
(400, 'রাজবাড়ী সদর', 'RAJBARI SADAR', '76', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 31),
(401, 'বাঘাইছড়ি', 'BAGHAICHHARI', '07', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(402, 'বরকল', 'BARKAL UPAZILA', '21', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(403, 'কাউখালী', 'KAWKHALI (BETBUNIA)', '25', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(404, 'বিলাইছড়ি', 'BELAI CHHARI  UPAZI', '29', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(405, 'কাপ্তাই', 'KAPTAI  UPAZILA', '36', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(406, 'জুরাছড়ি', 'JURAI CHHARI UPAZIL', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(407, 'লংগদু', 'LANGADU  UPAZILA', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(408, 'নানিয়ারচর', 'NANIARCHAR  UPAZILA', '75', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(409, 'রাজস্থলী', 'RAJASTHALI  UPAZILA', '78', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(410, 'রাঙ্গামাটি সদর', 'RANGAMATI SADAR  ', '87', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 17),
(411, 'বদরগঞ্জ', 'BADARGANJ', '03', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 59),
(412, 'গংগাচড়া', 'GANGACHARA', '27', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 59),
(413, 'কাউনিয়া', 'KAUNIA', '42', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 59),
(414, 'রংপুর সদর', 'RANGPUR SADAR', '49', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 59),
(415, 'মিঠাপুকুর', 'MITHA PUKUR', '58', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 59),
(416, 'পীরগাছা', 'PIRGACHHA', '73', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 59),
(417, 'পীরগঞ্জ', 'PIRGANJ', '76', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 59),
(418, 'তারাগঞ্জ', 'TARAGANJ', '92', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 59),
(419, 'ভেদরগঞ্জ', 'BHEDARGANJ', '14', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 32),
(420, 'ডামুড্যা', 'DAMUDYA', '25', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 32),
(421, 'গোসাইরহাট', 'GOSAIRHAT', '36', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 32),
(422, 'নড়িয়া', 'NARIA', '65', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 32),
(423, 'শরিয়তপুর সদর', 'SHARIATPUR SADAR', '69', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 32),
(424, 'জাজিরা', 'ZANJIRA', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 32),
(425, 'আশাশুনি', 'ASSASUNI', '04', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 44),
(426, 'দেবহাটা', 'DEBHATA', '25', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 44),
(427, 'কলারোয়া', 'KALAROA', '43', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 44),
(428, 'কালীগঞ্জ', 'KALIGANJ', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 44),
(429, 'সাতক্ষীরা সদর', 'SATKHIRA SADAR', '82', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 44),
(430, 'শ্যামনগর', 'SHYAMNAGAR', '86', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 44),
(431, 'তালা', 'TALA', '90', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 44),
(432, 'বেলকুচি', 'BELKUCHI', '11', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 52),
(433, 'চৌহালী', 'CHAUHALI', '27', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 52),
(434, 'কামারখন্দ', 'KAMARKHANDA', '44', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 52),
(435, 'কাজীপুর', 'KAZIPUR', '50', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 52),
(436, 'রায়গঞ্জ', 'ROYGANJ', '61', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 52),
(437, 'শাহজাদপুর', 'SHAHJADPUR', '67', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 52),
(438, 'সিরাজগঞ্জ সদর', 'SIRAJGANJ SADAR', '78', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 52),
(439, 'তাড়াশ', 'TARASH', '89', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 52),
(440, 'উল্লাপাড়া', 'ULLAH PARA', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 52),
(441, 'ঝিনাইগাতি', 'JHENAIGATI', '37', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 33),
(442, 'নকলা', 'NAKLA', '67', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 33),
(443, 'নালিতাবাড়ী', 'NALITABARI', '70', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 33),
(444, 'শেরপুর সদর', 'SHERPUR SADAR', '88', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 33),
(445, 'শ্রীবরদী', 'SREEBARDI', '90', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 33),
(446, 'বিশ্বম্ভরপুর', 'BISHWAMBARPUR', '18', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(447, 'ছাতক', 'CHHATAK', '23', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(448, 'দক্ষিন সুনামগঞ্জ', 'DAKSHIN SUNAMGANJ', '27', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(449, 'দিরাই', 'DERAI', '29', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(450, 'ধর্মপাশা', 'DHARAMPASHA', '32', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(451, 'দোয়ারাবাজার', 'DOWARABAZAR', '33', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(452, 'জগন্নাথপুর', 'JAGANNATHPUR', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(453, 'জামালগঞ্জ', 'JAMALGANJ', '50', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(454, 'শাল্লা', 'SULLA', '86', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(455, 'সুনামগঞ্জ সদর', 'SUNAMGANJ SADAR', '89', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(456, 'তাহিরপুর', 'TAHIRPUR', '92', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 63),
(457, 'বালাগঞ্জ', 'BALAGANJ', '08', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(458, 'বিয়ানীবাজার', 'BEANI BAZAR', '17', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(459, 'বিশ্বনাথ', 'BISHWANATH', '20', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(460, 'কোম্পানীগঞ্জ', 'COMPANIGANJ', '27', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(461, 'দক্ষিণ সুরমা', 'DAKSHIN SURMA', '31', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(462, 'ফেঞ্চুগঞ্জ', 'FENCHUGANJ', '35', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(463, 'গোলাপগঞ্জ', 'GOLAPGANJ', '38', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(464, 'গোয়াইনঘাট', 'GOWAINGHAT', '41', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(465, 'জৈন্তাপুর', 'JAINTIAPUR', '53', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(466, 'কানাইঘাট', 'KANAIGHAT', '59', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(467, 'সিলেট সদর', 'SYLHET SADAR', '62', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(468, 'জকিগঞ্জ', 'ZAKIGANJ', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 64),
(469, 'বাসাইল', 'BASAIL', '09', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(470, 'ভূঞাপুর', 'BHUAPUR', '19', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(471, 'দেলদোয়ার', 'DELDUAR', '23', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(472, 'ধনবাড়ী', 'DHANBARI', '25', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(473, 'ঘাটাইল', 'GHATAIL', '28', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(474, 'গোপালপুর', 'GOPALPUR', '38', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(475, 'কালিহাতী', 'KALIHATI', '47', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(476, 'মধুপুর', 'MADHUPUR', '57', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(477, 'মির্জাপুর', 'MIRZAPUR', '66', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(478, 'নাগরপুর', 'NAGARPUR', '76', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(479, 'সখীপুর', 'SAKHIPUR', '85', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(480, 'টাঙ্গাইল সদর', 'TANGAIL SADAR', '95', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 34),
(481, 'বালিয়াডাংগী', 'BALIADANGI', '08', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 60),
(482, 'হরিপুর', 'HARIPUR', '51', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 60),
(483, 'পীরগঞ্জ', 'PIRGANJ', '82', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 60),
(484, 'রানীশংকৈল', 'RANISANKAIL', '86', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 60),
(485, 'ঠাকুরগাঁও সদর', 'THAKURGAON SADAR', '94', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 60),
(486, 'সালথা', 'SALTHA', '90', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 19),
(490, 'নলডাঙ্গা', 'Noldanga', '55', '2015-11-17 05:01:41', '2016-02-09 13:06:15', 48),
(491, 'ওসমানী নগর', 'Osmani Nagar', '60', NULL, '2020-03-30 15:54:49', 64),
(493, 'তারাকান্দা', 'Tarakanda', '88', NULL, '2020-03-30 15:54:22', 27),
(495, 'কর্ণফুলী', 'KARNAFULI', '39', NULL, '2020-03-30 15:54:03', 10),
(496, 'শায়েস্তাগঞ্জ', 'Shayestaganj', '87', NULL, '2020-03-30 15:53:38', 61),
(497, 'তালতলী', 'TALTALI', '90', NULL, '2020-03-30 15:53:19', 1),
(498, 'গুইমারা', 'Guimara', '47', NULL, '2020-03-30 15:52:51', 14),
(499, 'লালমাই', 'Lalmai', '73', NULL, '2020-03-30 15:52:16', 11),
(500, 'বক্সীগঞ্জ', 'Bakshiganj', '494', '2023-06-20 15:45:50', '2023-06-20 15:45:50', 33);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `name_en` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `two_factor` tinyint(1) DEFAULT 0,
  `two_factor_code` varchar(150) DEFAULT NULL,
  `remember_token` varchar(150) DEFAULT NULL,
  `two_factor_expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `designations_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `name_en`, `email`, `email_verified_at`, `password`, `two_factor`, `two_factor_code`, `remember_token`, `two_factor_expires_at`, `created_at`, `updated_at`, `deleted_at`, `designations_id`) VALUES
(1, 'Shakil Hossain', '', 'shakilaust81@gmail.com', NULL, '$2y$10$FCZy/znPgrRwQpiL/XqIPOEDRN1WA0jEoGear0.ABNcVVVhoCAX4m', 0, '', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'এডমিন', 'Admin', 'test@admin.com', NULL, '$2y$10$9rxMAJ7dbqNPMoB7.ZtZD.Vakv1JRYYJNyDbNXlVaOIX4qkYBk8LS', 0, NULL, NULL, NULL, '2024-05-27 01:02:45', '2024-05-29 08:59:43', NULL, 1),
(3, 'DFO BN', 'DFO EN', 'dfo@dfo.dfo', NULL, '$2y$10$1V1a48oZ7ymXfcCoQLGo2etrxTu0SWamDWqEmn2e.qRy1lb/6oKyi', 0, NULL, NULL, NULL, '2024-06-01 11:42:38', '2024-06-02 13:59:15', NULL, 14);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievementschools_universities`
--
ALTER TABLE `achievementschools_universities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `achievementschools_universities_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `achievementschools_universities_name_en_unique` (`name_en`);

--
-- Indexes for table `acr_monitorings`
--
ALTER TABLE `acr_monitorings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9733006` (`employee_id`);

--
-- Indexes for table `addressdetailes`
--
ALTER TABLE `addressdetailes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732774` (`employee_id`),
  ADD KEY `thana_upazila_fk_9732790` (`thana_upazila_id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9751296` (`employee_id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `batches_batch_bn_unique` (`batch_bn`),
  ADD UNIQUE KEY `batches_batch_en_unique` (`batch_en`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blood_groups_name_bn_unique` (`name_bn`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732850` (`employee_id`),
  ADD KEY `gender_fk_9732843` (`gender_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_bn_unique` (`name_bn`);

--
-- Indexes for table `criminalpro_disciplinaries`
--
ALTER TABLE `criminalpro_disciplinaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criminalprosecutione_fk_9732994` (`criminalprosecutione_id`);

--
-- Indexes for table `criminal_prosecutiones`
--
ALTER TABLE `criminal_prosecutiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732983` (`employee_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_name_bn_unique` (`name_bn`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districts_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `districts_name_en_unique` (`name_en`),
  ADD KEY `divisions_fk_9742470` (`divisions_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `divisions_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `divisions_name_en_unique` (`name_en`),
  ADD KEY `country_fk_9742468` (`country_id`);

--
-- Indexes for table `education_informationes`
--
ALTER TABLE `education_informationes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_of_exam_fk_9732742` (`name_of_exam_id`),
  ADD KEY `result_fk_9818038` (`result_id`),
  ADD KEY `achievement_types_fk_9806856` (`achievement_types_id`),
  ADD KEY `employee_fk_9732747` (`employee_id`);

--
-- Indexes for table `emergence_contactes`
--
ALTER TABLE `emergence_contactes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732798` (`employee_id`);

--
-- Indexes for table `employee_lists`
--
ALTER TABLE `employee_lists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_lists_employeeid_unique` (`employeeid`),
  ADD UNIQUE KEY `employee_lists_fullname_bn_unique` (`fullname_bn`),
  ADD KEY `batch_fk_9753599` (`batch_id`),
  ADD KEY `home_district_fk_9732641` (`home_district_id`),
  ADD KEY `marital_statu_fk_9732642` (`marital_statu_id`),
  ADD KEY `gender_fk_9732643` (`gender_id`),
  ADD KEY `religion_fk_9732644` (`religion_id`),
  ADD KEY `blood_group_fk_9732645` (`blood_group_id`),
  ADD KEY `license_type_fk_9732658` (`license_type_id`),
  ADD KEY `projectrevenue_fk_9810612` (`projectrevenue_id`),
  ADD KEY `joiningexaminfo_fk_9751239` (`joiningexaminfo_id`),
  ADD KEY `departmental_exam_fk_9810640` (`departmental_exam_id`),
  ADD KEY `project_fk_9810849` (`project_id`),
  ADD KEY `grade_fk_9751240` (`grade_id`),
  ADD KEY `quota_fk_9732701` (`quota_id`),
  ADD KEY `freedomfighter_fk_9817545` (`freedomfighter_id`);

--
-- Indexes for table `employee_promotions`
--
ALTER TABLE `employee_promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732871` (`employee_id`),
  ADD KEY `new_designation_fk_9732872` (`new_designation_id`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `examinations_name_bn_unique` (`name_bn`);

--
-- Indexes for table `exam_boards`
--
ALTER TABLE `exam_boards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_boards_name_bn_unique` (`name_bn`),
  ADD KEY `examination_fk_9818007` (`examination_id`);

--
-- Indexes for table `exam_degrees`
--
ALTER TABLE `exam_degrees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examination_fk_9818009` (`examination_id`);

--
-- Indexes for table `extracurriculams`
--
ALTER TABLE `extracurriculams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732941` (`employee_id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_questions`
--
ALTER TABLE `faq_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_9733029` (`category_id`);

--
-- Indexes for table `foreign_travel_personals`
--
ALTER TABLE `foreign_travel_personals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_fk_9751262` (`country_id`),
  ADD KEY `leave_fk_9751266` (`leave_id`),
  ADD KEY `employee_fk_9783410` (`employee_id`);

--
-- Indexes for table `forest_beats`
--
ALTER TABLE `forest_beats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forest_range_fk_9813432` (`forest_range_id`);

--
-- Indexes for table `forest_divisions`
--
ALTER TABLE `forest_divisions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forest_divisions_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `forest_divisions_name_en_unique` (`name_en`),
  ADD KEY `forest_state_fk_9817337` (`forest_state_id`);

--
-- Indexes for table `forest_ranges`
--
ALTER TABLE `forest_ranges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forest_state_fk_9813380` (`forest_state_id`),
  ADD KEY `forest_division_fk_9813430` (`forest_division_id`);

--
-- Indexes for table `forest_states`
--
ALTER TABLE `forest_states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forest_states_name_en_unique` (`name_en`),
  ADD KEY `status_fk_9813374` (`status_id`);

--
-- Indexes for table `freedom_fighte_relations`
--
ALTER TABLE `freedom_fighte_relations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `freedom_fighte_relations_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `freedom_fighte_relations_name_en_unique` (`name_en`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grades_name_bn_unique` (`name_bn`);

--
-- Indexes for table `job_histories`
--
ALTER TABLE `job_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designation_fk_9732855` (`designation_id`),
  ADD KEY `employee_fk_9733003` (`employee_id`),
  ADD KEY `grade_fk_9789447` (`grade_id`),
  ADD KEY `circle_list_fk_9817370` (`circle_list_id`),
  ADD KEY `division_list_fk_9817371` (`division_list_id`),
  ADD KEY `range_list_fk_9817372` (`range_list_id`),
  ADD KEY `beat_list_fk_9817373` (`beat_list_id`),
  ADD KEY `office_unit_fk_9817374` (`office_unit_id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_types_name_bn_unique` (`name_bn`);

--
-- Indexes for table `joininginfos`
--
ALTER TABLE `joininginfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `joininginfos_project_revenue_bn_unique` (`project_revenue_bn`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732974` (`employee_id`),
  ADD KEY `read_fk_9751302` (`read_id`),
  ADD KEY `write_fk_9751303` (`write_id`),
  ADD KEY `speak_fk_9751304` (`speak_id`),
  ADD KEY `language_fk_9820299` (`language_id`);

--
-- Indexes for table `language_lists`
--
ALTER TABLE `language_lists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `language_lists_name_unique` (`name`),
  ADD UNIQUE KEY `language_lists_nmae_en_unique` (`nmae_en`);

--
-- Indexes for table `language_proficiencies`
--
ALTER TABLE `language_proficiencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `language_proficiencies_name_unique` (`name`),
  ADD UNIQUE KEY `language_proficiencies_name_en_unique` (`name_en`);

--
-- Indexes for table `leave_categories`
--
ALTER TABLE `leave_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_categories_name_bn_unique` (`name_bn`);

--
-- Indexes for table `leave_records`
--
ALTER TABLE `leave_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732881` (`employee_id`),
  ADD KEY `leave_category_fk_9751248` (`leave_category_id`),
  ADD KEY `type_of_leave_fk_9751247` (`type_of_leave_id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_types_name_bn_unique` (`name_bn`);

--
-- Indexes for table `license_types`
--
ALTER TABLE `license_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `license_types_name_bn_unique` (`name_bn`);

--
-- Indexes for table `maritalstatuses`
--
ALTER TABLE `maritalstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_units`
--
ALTER TABLE `office_units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `office_units_name_bn_unique` (`name_bn`);

--
-- Indexes for table `other_service_jobs`
--
ALTER TABLE `other_service_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9751292` (`employee_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_9728272` (`role_id`),
  ADD KEY `permission_id_fk_9728272` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `professionales`
--
ALTER TABLE `professionales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732759` (`employee_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `projects_name_en_unique` (`name_en`);

--
-- Indexes for table `project_revenuelones`
--
ALTER TABLE `project_revenuelones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_revenuelones_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `project_revenuelones_name_en_unique` (`name_en`),
  ADD KEY `project_revenue_fk_9751156` (`project_revenue_id`);

--
-- Indexes for table `project_revenue_exams`
--
ALTER TABLE `project_revenue_exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_revenue_exams_exam_name_bn_unique` (`exam_name_bn`),
  ADD UNIQUE KEY `project_revenue_exams_exam_name_en_unique` (`exam_name_en`),
  ADD KEY `exam_fk_9751184` (`exam_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9733004` (`employee_id`);

--
-- Indexes for table `quota`
--
ALTER TABLE `quota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `quota_name_bn_unique` (`name_bn`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `religions_name_bn_unique` (`name_bn`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `results_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `results_name_en_unique` (`name_en`),
  ADD KEY `resultgroup_fk_9818034` (`resultgroup_id`);

--
-- Indexes for table `result_groups`
--
ALTER TABLE `result_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `result_groups_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `result_groups_name_en_unique` (`name_en`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_9728281` (`user_id`),
  ADD KEY `role_id_fk_9728281` (`role_id`);

--
-- Indexes for table `service_particulars`
--
ALTER TABLE `service_particulars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designation_fk_9751250` (`designation_id`),
  ADD KEY `employee_fk_9783275` (`employee_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_settings_title_unique` (`title`);

--
-- Indexes for table `social_ass_pr_attachments`
--
ALTER TABLE `social_ass_pr_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9783509` (`employee_id`);

--
-- Indexes for table `spouse_informationes`
--
ALTER TABLE `spouse_informationes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732825` (`employee_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_name_unique` (`name`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732890` (`employee_id`),
  ADD KEY `training_type_fk_9732891` (`training_type_id`),
  ADD KEY `country_fk_9732894` (`country_id`);

--
-- Indexes for table `training_types`
--
ALTER TABLE `training_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `training_types_name_bn_unique` (`name_bn`);

--
-- Indexes for table `traveltypes`
--
ALTER TABLE `traveltypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_purposes`
--
ALTER TABLE `travel_purposes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `travel_purposes_name_bn_unique` (`name_bn`);

--
-- Indexes for table `travel_records`
--
ALTER TABLE `travel_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_9732930` (`employee_id`),
  ADD KEY `country_fk_9732931` (`country_id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_fk_9742469` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `designations_fk_9820585` (`designations_id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `years_year_unique` (`year`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievementschools_universities`
--
ALTER TABLE `achievementschools_universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `acr_monitorings`
--
ALTER TABLE `acr_monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `addressdetailes`
--
ALTER TABLE `addressdetailes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=487;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `criminalpro_disciplinaries`
--
ALTER TABLE `criminalpro_disciplinaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `criminal_prosecutiones`
--
ALTER TABLE `criminal_prosecutiones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `education_informationes`
--
ALTER TABLE `education_informationes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `emergence_contactes`
--
ALTER TABLE `emergence_contactes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_lists`
--
ALTER TABLE `employee_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee_promotions`
--
ALTER TABLE `employee_promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exam_boards`
--
ALTER TABLE `exam_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `exam_degrees`
--
ALTER TABLE `exam_degrees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `extracurriculams`
--
ALTER TABLE `extracurriculams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_questions`
--
ALTER TABLE `faq_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foreign_travel_personals`
--
ALTER TABLE `foreign_travel_personals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `forest_beats`
--
ALTER TABLE `forest_beats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=855;

--
-- AUTO_INCREMENT for table `forest_divisions`
--
ALTER TABLE `forest_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `forest_ranges`
--
ALTER TABLE `forest_ranges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `forest_states`
--
ALTER TABLE `forest_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `freedom_fighte_relations`
--
ALTER TABLE `freedom_fighte_relations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `job_histories`
--
ALTER TABLE `job_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `joininginfos`
--
ALTER TABLE `joininginfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `language_lists`
--
ALTER TABLE `language_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `language_proficiencies`
--
ALTER TABLE `language_proficiencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_categories`
--
ALTER TABLE `leave_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `leave_records`
--
ALTER TABLE `leave_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `license_types`
--
ALTER TABLE `license_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `maritalstatuses`
--
ALTER TABLE `maritalstatuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `office_units`
--
ALTER TABLE `office_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `other_service_jobs`
--
ALTER TABLE `other_service_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professionales`
--
ALTER TABLE `professionales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `project_revenuelones`
--
ALTER TABLE `project_revenuelones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_revenue_exams`
--
ALTER TABLE `project_revenue_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quota`
--
ALTER TABLE `quota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `result_groups`
--
ALTER TABLE `result_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_particulars`
--
ALTER TABLE `service_particulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_ass_pr_attachments`
--
ALTER TABLE `social_ass_pr_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spouse_informationes`
--
ALTER TABLE `spouse_informationes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `training_types`
--
ALTER TABLE `training_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `traveltypes`
--
ALTER TABLE `traveltypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travel_purposes`
--
ALTER TABLE `travel_purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travel_records`
--
ALTER TABLE `travel_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

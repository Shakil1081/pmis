-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2024 at 05:18 PM
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
(1, 'Division', 'Division', '2024-05-22 00:03:20', '2024-05-22 00:03:20', NULL),
(2, 'Class', 'Class', '2024-05-22 00:03:26', '2024-05-22 00:03:26', NULL),
(3, 'GPA out of 5', 'GPA out of 5', '2024-05-22 00:03:34', '2024-05-22 00:03:34', NULL),
(4, 'GPA out of 4', 'GPA out of 4', '2024-05-22 00:03:42', '2024-05-22 00:03:42', NULL);

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
(1, 'audit:created', 1, 'App\\Models\\ProjectRevenueExam#1', 1, '{\"exam_id\":\"1\",\"exam_name_bn\":\"Price Stewart\",\"exam_name_en\":\"Portia Talley\",\"updated_at\":\"2024-05-22 16:52:53\",\"created_at\":\"2024-05-22 16:52:53\",\"id\":1,\"upload\":null,\"media\":[]}', '103.96.89.123', '2024-05-22 20:52:53', '2024-05-22 20:52:53');

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
(1, '১৯৮২', '1982', '2024-05-19 00:37:29', '2024-05-19 00:37:29');

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
(1, 'এ পজিটিভ', 'A Positive', '2024-05-18 21:52:50', '2024-05-18 21:52:50'),
(2, 'বি পজিটিভ', 'B positive', '2024-05-18 21:53:28', '2024-05-18 21:53:28'),
(3, 'ও পজিটিভ', 'O positive', '2024-05-18 21:54:32', '2024-05-18 21:54:32'),
(4, 'এবি পজিটিভ', 'AB positive', '2024-05-18 21:55:24', '2024-05-18 21:55:24'),
(5, 'এ নেগেটিভ', 'A negative', '2024-05-18 21:58:35', '2024-05-18 21:58:35'),
(6, 'ও নেগেটিভ', 'O negative', '2024-05-18 21:59:21', '2024-05-18 21:59:21'),
(7, 'বি নেগেটিভ', 'B negative', '2024-05-18 22:00:05', '2024-05-18 22:00:05'),
(8, 'এবি নেগেটিভ', 'AB negative', '2024-05-18 22:00:39', '2024-05-18 22:00:39');

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
(1, 'বাংলাদেশ', 'Bangladesh', 'BN', '2024-05-17 15:20:43', '2024-05-17 15:20:43', NULL);

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
(1, 'সিসিএফ', 'CCF', NULL, '2024-05-19 01:26:58', '2024-05-19 01:26:58', NULL);

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
(1, 'শরীয়তপুর', 'Shariatpur', '8000', '2024-05-19 00:52:16', '2024-05-19 00:52:16', 1);

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
(1, 'ঢাকা ১২১২', 'Dhaka', '1212', '2024-05-19 00:45:16', '2024-05-19 00:45:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education_informationes`
--

CREATE TABLE `education_informationes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_university_name` varchar(150) NOT NULL,
  `achivement` varchar(150) DEFAULT NULL,
  `passing_year` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name_of_exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `exam_board_id` bigint(20) UNSIGNED DEFAULT NULL,
  `achievement_types_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_informationes`
--

INSERT INTO `education_informationes` (`id`, `school_university_name`, `achivement`, `passing_year`, `created_at`, `updated_at`, `deleted_at`, `name_of_exam_id`, `exam_board_id`, `achievement_types_id`, `employee_id`) VALUES
(1, 'Jaujira High Shool', '1st Division', 1972, '2024-05-19 11:45:23', '2024-05-19 11:45:23', NULL, 1, 1, NULL, 1),
(2, 'ABC School', NULL, 1988, '2024-05-19 13:18:00', '2024-05-19 13:18:30', '2024-05-19 13:18:30', 1, 1, NULL, 1);

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
(1, 'Miran Rhman', 'Miran Rhman', 'House 327, Road 05Mirpur DOHS', '01722600610', '2024-05-19 13:46:17', '2024-05-19 13:46:17', NULL);

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
  `nid` int(11) NOT NULL,
  `passport` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `mobile_number` varchar(150) NOT NULL,
  `project_revenue` varchar(150) DEFAULT NULL,
  `fjoining_date` date NOT NULL,
  `first_joining_office_name` varchar(150) DEFAULT NULL,
  `first_joining_g_o_date` date DEFAULT NULL,
  `first_joining_memo_no` varchar(150) DEFAULT NULL,
  `date_of_gazette` date DEFAULT NULL,
  `date_of_regularization` date DEFAULT NULL,
  `regularization_issue_date` date DEFAULT NULL,
  `date_of_con_serviec` date DEFAULT NULL,
  `freedomfighter` varchar(150) DEFAULT NULL,
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
  `joiningexaminfo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `grade_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quota_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_lists`
--

INSERT INTO `employee_lists` (`id`, `employeeid`, `cadreid`, `fullname_bn`, `fullname_en`, `fname_bn`, `fname_en`, `mname_bn`, `mname_en`, `date_of_birth`, `prl_date`, `height`, `special_identity`, `nid`, `passport`, `email`, `mobile_number`, `project_revenue`, `fjoining_date`, `first_joining_office_name`, `first_joining_g_o_date`, `first_joining_memo_no`, `date_of_gazette`, `date_of_regularization`, `regularization_issue_date`, `date_of_con_serviec`, `freedomfighter`, `created_at`, `updated_at`, `deleted_at`, `batch_id`, `home_district_id`, `marital_statu_id`, `gender_id`, `religion_id`, `blood_group_id`, `license_type_id`, `joiningexaminfo_id`, `grade_id`, `quota_id`) VALUES
(1, '13062', NULL, 'মোঃ ইউনুস আলী', 'Md Younus Ali', 'মোহর আলী মাতব্বর', 'Mohor Ali Matbar', 'মাজু বিবি', 'Maju Bibi', '1958-01-27', NULL, '165', NULL, 1244415456, NULL, 'younusbd@gmail.com', '01715371965', NULL, '1984-04-03', 'Ban Bhaban, Agargaon, Dhaka', '1990-05-27', NULL, '1984-04-03', NULL, NULL, NULL, NULL, '2024-05-19 11:32:03', '2024-05-19 11:32:03', NULL, 1, 1, 1, 1, 1, 1, 2, 1, 1, 2);

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
(1, 'এসএসসি বা সমমান', 'SSC or equivalent', '2024-05-18 22:08:56', '2024-05-18 22:09:37'),
(2, 'এইচএসসি বা সমমান', 'HSC or equivalent', '2024-05-18 22:10:46', '2024-05-18 22:10:46');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_boards`
--

INSERT INTO `exam_boards` (`id`, `name_bn`, `name_en`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ঢাকা', 'Dhaka', NULL, '2024-05-18 22:11:22', '2024-05-18 22:11:22'),
(2, 'ময়মনসিংহ', 'Mymensingh', NULL, '2024-05-18 22:12:14', '2024-05-18 22:12:14'),
(3, 'চট্টগ্রাম', 'Chattogram', NULL, '2024-05-18 22:12:46', '2024-05-18 22:12:46');

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
  `purpose_id` bigint(20) UNSIGNED DEFAULT NULL,
  `leave_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'পুরুষ', 'Male', '2024-05-18 21:48:16', '2024-05-18 21:48:16', NULL),
(2, 'মহিলা', 'Female', '2024-05-18 21:48:41', '2024-05-18 21:48:41', NULL);

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
(1, 'নবম', 'Ninth', '22000-33000', '22000', '22000', '2024-05-19 01:32:27', '2024-05-19 01:32:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_histories`
--

CREATE TABLE `job_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_name` varchar(150) NOT NULL,
  `joining_date` date NOT NULL,
  `release_date` date DEFAULT NULL,
  `level_1` varchar(150) DEFAULT NULL,
  `level_2` varchar(150) DEFAULT NULL,
  `level_3` varchar(150) DEFAULT NULL,
  `level_4` varchar(150) DEFAULT NULL,
  `level_5` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `grade_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'টাইপ -১', 'Type- 1', '2024-05-19 14:36:55', '2024-05-19 14:36:55', NULL),
(2, 'টাইপ - ২', 'Type-2', '2024-05-19 14:37:02', '2024-05-19 14:37:02', NULL);

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
(1, 'প্রকল্প', 'Project', '2024-05-18 21:34:29', '2024-05-18 21:34:29'),
(2, 'রাজস্ব', 'Revenue', '2024-05-18 21:35:34', '2024-05-18 21:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `read_id` bigint(20) UNSIGNED DEFAULT NULL,
  `write_id` bigint(20) UNSIGNED DEFAULT NULL,
  `speak_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language_lists`
--

CREATE TABLE `language_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_lists`
--

INSERT INTO `language_lists` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bengali', '2024-05-18 22:04:18', '2024-05-18 22:04:18', NULL),
(2, 'English', '2024-05-18 22:04:41', '2024-05-18 22:04:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_proficiencies`
--

CREATE TABLE `language_proficiencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_proficiencies`
--

INSERT INTO `language_proficiencies` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Basic', '2024-05-18 22:06:55', '2024-05-18 22:06:55', NULL),
(2, 'Good', '2024-05-18 22:07:03', '2024-05-18 22:07:03', NULL),
(3, 'Very Good', '2024-05-18 22:07:16', '2024-05-18 22:07:16', NULL);

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
(1, 'ক্যাট-১', 'Cat-1', 1, '2024-05-19 14:32:22', '2024-05-19 14:32:22', NULL),
(2, 'ক্যাট-২', 'Cat-2', 2, '2024-05-19 14:32:52', '2024-05-19 14:32:52', NULL);

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
(1, 'টাইপ -১', 'Type- 1', 1, '2024-05-19 14:34:22', '2024-05-19 14:34:22', NULL),
(2, 'টাইপ - ২', 'Type-2', 2, '2024-05-19 14:34:44', '2024-05-19 14:34:44', NULL);

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
(1, 'ভারী', 'Heavy', '2024-05-19 11:21:41', '2024-05-19 14:08:31', NULL),
(2, 'হালকা', 'Light', '2024-05-19 11:22:21', '2024-05-19 14:08:22', NULL);

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
(1, 'বিবাহিত', 'Married', '1', '2024-05-18 21:46:46', '2024-05-18 21:46:46'),
(2, 'অবিবাহিত', 'Unmarried', '2', '2024-05-18 21:47:30', '2024-05-18 21:47:30');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_05_21_000001_create_audit_logs_table', 1),
(3, '2024_05_21_000002_create_media_table', 1),
(4, '2024_05_21_000003_create_permissions_table', 1),
(5, '2024_05_21_000004_create_roles_table', 1),
(6, '2024_05_21_000005_create_users_table', 1),
(7, '2024_05_21_000006_create_divisions_table', 1),
(8, '2024_05_21_000007_create_districts_table', 1),
(9, '2024_05_21_000008_create_maritalstatuses_table', 1),
(10, '2024_05_21_000009_create_genders_table', 1),
(11, '2024_05_21_000010_create_religions_table', 1),
(12, '2024_05_21_000011_create_blood_groups_table', 1),
(13, '2024_05_21_000012_create_quota_table', 1),
(14, '2024_05_21_000013_create_examinations_table', 1),
(15, '2024_05_21_000014_create_exam_boards_table', 1),
(16, '2024_05_21_000015_create_office_units_table', 1),
(17, '2024_05_21_000016_create_designations_table', 1),
(18, '2024_05_21_000017_create_leave_categories_table', 1),
(19, '2024_05_21_000018_create_leave_types_table', 1),
(20, '2024_05_21_000019_create_training_types_table', 1),
(21, '2024_05_21_000020_create_countries_table', 1),
(22, '2024_05_21_000021_create_travel_purposes_table', 1),
(23, '2024_05_21_000022_create_employee_lists_table', 1),
(24, '2024_05_21_000023_create_license_types_table', 1),
(25, '2024_05_21_000024_create_job_types_table', 1),
(26, '2024_05_21_000025_create_grades_table', 1),
(27, '2024_05_21_000026_create_education_informationes_table', 1),
(28, '2024_05_21_000027_create_professionales_table', 1),
(29, '2024_05_21_000028_create_addressdetailes_table', 1),
(30, '2024_05_21_000029_create_upazilas_table', 1),
(31, '2024_05_21_000030_create_emergence_contactes_table', 1),
(32, '2024_05_21_000031_create_spouse_informationes_table', 1),
(33, '2024_05_21_000032_create_children_table', 1),
(34, '2024_05_21_000033_create_job_histories_table', 1),
(35, '2024_05_21_000034_create_employee_promotions_table', 1),
(36, '2024_05_21_000035_create_leave_records_table', 1),
(37, '2024_05_21_000036_create_trainings_table', 1),
(38, '2024_05_21_000037_create_traveltypes_table', 1),
(39, '2024_05_21_000038_create_travel_records_table', 1),
(40, '2024_05_21_000039_create_extracurriculams_table', 1),
(41, '2024_05_21_000040_create_publications_table', 1),
(42, '2024_05_21_000041_create_languages_table', 1),
(43, '2024_05_21_000042_create_criminal_prosecutiones_table', 1),
(44, '2024_05_21_000043_create_criminalpro_disciplinaries_table', 1),
(45, '2024_05_21_000044_create_acr_monitorings_table', 1),
(46, '2024_05_21_000045_create_faq_categories_table', 1),
(47, '2024_05_21_000046_create_faq_questions_table', 1),
(48, '2024_05_21_000047_create_site_settings_table', 1),
(49, '2024_05_21_000048_create_batches_table', 1),
(50, '2024_05_21_000049_create_joininginfos_table', 1),
(51, '2024_05_21_000050_create_project_revenuelones_table', 1),
(52, '2024_05_21_000051_create_project_revenue_exams_table', 1),
(53, '2024_05_21_000052_create_service_particulars_table', 1),
(54, '2024_05_21_000053_create_foreign_travel_personals_table', 1),
(55, '2024_05_21_000054_create_social_ass_pr_attachments_table', 1),
(56, '2024_05_21_000055_create_awards_table', 1),
(57, '2024_05_21_000056_create_other_service_jobs_table', 1),
(58, '2024_05_21_000057_create_language_proficiencies_table', 1),
(59, '2024_05_21_000058_create_language_lists_table', 1),
(60, '2024_05_21_000059_create_statuses_table', 1),
(61, '2024_05_21_000060_create_years_table', 1),
(62, '2024_05_21_000061_create_freedom_fighte_relations_table', 1),
(63, '2024_05_21_000062_create_achievementschools_universities_table', 1),
(64, '2024_05_21_000063_create_permission_role_pivot_table', 1),
(65, '2024_05_21_000064_create_role_user_pivot_table', 1),
(66, '2024_05_21_000065_add_relationship_fields_to_divisions_table', 1),
(67, '2024_05_21_000066_add_relationship_fields_to_districts_table', 1),
(68, '2024_05_21_000067_add_relationship_fields_to_employee_lists_table', 1),
(69, '2024_05_21_000068_add_relationship_fields_to_education_informationes_table', 1),
(70, '2024_05_21_000069_add_relationship_fields_to_professionales_table', 1),
(71, '2024_05_21_000070_add_relationship_fields_to_addressdetailes_table', 1),
(72, '2024_05_21_000071_add_relationship_fields_to_upazilas_table', 1),
(73, '2024_05_21_000072_add_relationship_fields_to_emergence_contactes_table', 1),
(74, '2024_05_21_000073_add_relationship_fields_to_spouse_informationes_table', 1),
(75, '2024_05_21_000074_add_relationship_fields_to_children_table', 1),
(76, '2024_05_21_000075_add_relationship_fields_to_job_histories_table', 1),
(77, '2024_05_21_000076_add_relationship_fields_to_employee_promotions_table', 1),
(78, '2024_05_21_000077_add_relationship_fields_to_leave_records_table', 1),
(79, '2024_05_21_000078_add_relationship_fields_to_trainings_table', 1),
(80, '2024_05_21_000079_add_relationship_fields_to_travel_records_table', 1),
(81, '2024_05_21_000080_add_relationship_fields_to_extracurriculams_table', 1),
(82, '2024_05_21_000081_add_relationship_fields_to_publications_table', 1),
(83, '2024_05_21_000082_add_relationship_fields_to_languages_table', 1),
(84, '2024_05_21_000083_add_relationship_fields_to_criminal_prosecutiones_table', 1),
(85, '2024_05_21_000084_add_relationship_fields_to_criminalpro_disciplinaries_table', 1),
(86, '2024_05_21_000085_add_relationship_fields_to_acr_monitorings_table', 1),
(87, '2024_05_21_000086_add_relationship_fields_to_faq_questions_table', 1),
(88, '2024_05_21_000087_add_relationship_fields_to_project_revenuelones_table', 1),
(89, '2024_05_21_000088_add_relationship_fields_to_project_revenue_exams_table', 1),
(90, '2024_05_21_000089_add_relationship_fields_to_service_particulars_table', 1),
(91, '2024_05_21_000090_add_relationship_fields_to_foreign_travel_personals_table', 1),
(92, '2024_05_21_000091_add_relationship_fields_to_social_ass_pr_attachments_table', 1),
(93, '2024_05_21_000092_add_relationship_fields_to_awards_table', 1),
(94, '2024_05_21_000093_add_relationship_fields_to_other_service_jobs_table', 1);

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
(304, 'profile_password_edit', NULL, NULL, NULL);

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
(2, 304);

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
(1, 'Kevin Donovan', 'Nevada Holt', '2024-05-22 20:51:39', '2024-05-22 20:51:39', 1),
(2, 'Dora Burris', 'Kiona Frank', '2024-05-22 20:52:45', '2024-05-22 20:52:45', 2);

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
(1, 'Price Stewart', 'Portia Talley', '2024-05-22 20:52:53', '2024-05-22 20:52:53', 1);

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
(2, 'User', NULL, NULL, NULL);

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
(2, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `spouse_informationes`
--

CREATE TABLE `spouse_informationes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(150) NOT NULL,
  `name_en` varchar(150) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `purpose_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `two_factor` tinyint(1) DEFAULT 0,
  `two_factor_code` varchar(150) DEFAULT NULL,
  `remember_token` varchar(150) DEFAULT NULL,
  `two_factor_expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor`, `two_factor_code`, `remember_token`, `two_factor_expires_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'shakilaust81@gmail.com', NULL, '$2y$10$K/ZSLnq7aIiJ/Xaxv1P.wO1dY5CNEm7oZeoC4hHFvyLkSfRoS9gdC', 0, '', NULL, NULL, NULL, NULL, NULL),
(2, 'Testadmin', 'test@admin.com', NULL, '$2y$10$Xf1U560G6FgJm/ZiwYApn.gzVDyVI1hRpW4VBMuqFIM.65U/3qWk.', 0, NULL, NULL, NULL, '2024-05-22 12:46:57', '2024-05-22 12:46:57', NULL);

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
  ADD UNIQUE KEY `education_informationes_school_university_name_unique` (`school_university_name`),
  ADD KEY `name_of_exam_fk_9732742` (`name_of_exam_id`),
  ADD KEY `exam_board_fk_9732743` (`exam_board_id`),
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
  ADD KEY `joiningexaminfo_fk_9751239` (`joiningexaminfo_id`),
  ADD KEY `grade_fk_9751240` (`grade_id`),
  ADD KEY `quota_fk_9732701` (`quota_id`);

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
  ADD UNIQUE KEY `exam_boards_name_bn_unique` (`name_bn`);

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
  ADD KEY `purpose_fk_9751263` (`purpose_id`),
  ADD KEY `leave_fk_9751266` (`leave_id`),
  ADD KEY `employee_fk_9783410` (`employee_id`);

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
  ADD KEY `job_type_fk_9732854` (`job_type_id`),
  ADD KEY `designation_fk_9732855` (`designation_id`),
  ADD KEY `employee_fk_9733003` (`employee_id`),
  ADD KEY `grade_fk_9789447` (`grade_id`);

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
  ADD KEY `speak_fk_9751304` (`speak_id`);

--
-- Indexes for table `language_lists`
--
ALTER TABLE `language_lists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `language_lists_name_unique` (`name`);

--
-- Indexes for table `language_proficiencies`
--
ALTER TABLE `language_proficiencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `language_proficiencies_name_unique` (`name`);

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
  ADD KEY `country_fk_9732931` (`country_id`),
  ADD KEY `purpose_fk_9732934` (`purpose_id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `upazilas_name_bn_unique` (`name_bn`),
  ADD UNIQUE KEY `upazilas_name_en_unique` (`name_en`),
  ADD KEY `district_fk_9742469` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `acr_monitorings`
--
ALTER TABLE `acr_monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addressdetailes`
--
ALTER TABLE `addressdetailes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `criminalpro_disciplinaries`
--
ALTER TABLE `criminalpro_disciplinaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `criminal_prosecutiones`
--
ALTER TABLE `criminal_prosecutiones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_informationes`
--
ALTER TABLE `education_informationes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emergence_contactes`
--
ALTER TABLE `emergence_contactes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_lists`
--
ALTER TABLE `employee_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_promotions`
--
ALTER TABLE `employee_promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_boards`
--
ALTER TABLE `exam_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `extracurriculams`
--
ALTER TABLE `extracurriculams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freedom_fighte_relations`
--
ALTER TABLE `freedom_fighte_relations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_histories`
--
ALTER TABLE `job_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `joininginfos`
--
ALTER TABLE `joininginfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_records`
--
ALTER TABLE `leave_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `license_types`
--
ALTER TABLE `license_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `maritalstatuses`
--
ALTER TABLE `maritalstatuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `office_units`
--
ALTER TABLE `office_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other_service_jobs`
--
ALTER TABLE `other_service_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professionales`
--
ALTER TABLE `professionales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_revenuelones`
--
ALTER TABLE `project_revenuelones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_revenue_exams`
--
ALTER TABLE `project_revenue_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quota`
--
ALTER TABLE `quota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_particulars`
--
ALTER TABLE `service_particulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_ass_pr_attachments`
--
ALTER TABLE `social_ass_pr_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spouse_informationes`
--
ALTER TABLE `spouse_informationes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_types`
--
ALTER TABLE `training_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traveltypes`
--
ALTER TABLE `traveltypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel_purposes`
--
ALTER TABLE `travel_purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel_records`
--
ALTER TABLE `travel_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

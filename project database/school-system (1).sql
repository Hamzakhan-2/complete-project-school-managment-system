-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 11:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_books`
--

CREATE TABLE `assign_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classbook_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_books`
--

INSERT INTO `assign_books` (`id`, `classbook_id`, `subject_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '2023-11-24 02:05:45', '2023-11-24 02:05:45'),
(2, 2, 3, '1', '2023-11-24 02:09:26', '2023-11-24 02:09:26'),
(3, 3, 2, '1', '2023-11-24 02:09:37', '2023-11-24 02:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reqularity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `othermetrics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `parent_id`, `teacher_id`, `date`, `time`, `reqularity`, `othermetrics`, `created_at`, `updated_at`) VALUES
(2, 10, 6, '2024-01-10', '15:36', 'no', 'no', '2024-01-10 05:37:05', '2024-01-10 05:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `chathead`
--

CREATE TABLE `chathead` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `to_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_favorites`
--

INSERT INTO `ch_favorites` (`id`, `user_id`, `favorite_id`, `created_at`, `updated_at`) VALUES
('6032e17b-e181-4766-9e5c-256756fbcbc4', 2, 5, '2024-01-17 11:30:38', '2024-01-17 11:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('25bceb9f-0a4f-4144-bb63-69be67113490', 5, 2, '😁', NULL, 1, '2024-01-16 00:57:33', '2024-01-16 05:54:38'),
('33500319-8132-4f76-8b99-24d63c8f0d97', 2, 31, 'hi', NULL, 0, '2024-01-16 00:48:50', '2024-01-16 00:48:50'),
('59b6475c-4448-47e6-bbb4-644cebc0e762', 5, 2, 'im good', NULL, 1, '2024-01-16 00:56:00', '2024-01-16 02:16:41'),
('64b5b95b-38ee-45bc-a2c3-b1bfe4d1fb9e', 2, 31, 'hamza', NULL, 0, '2024-01-16 00:48:52', '2024-01-16 00:48:52'),
('7e743640-b194-4630-91ac-89f98d50c8d1', 2, 5, '', '{\"new_name\":\"42bb3d47-ef92-4377-badd-032b0c5fd6f9.jpg\",\"old_name\":\"Picccc..jpg\"}', 0, '2024-01-16 04:12:19', '2024-01-16 04:12:19'),
('941f0dc5-db61-4ebe-9845-bba60b9a5b67', 2, 31, 'how are you', NULL, 0, '2024-01-16 00:48:56', '2024-01-16 00:48:56'),
('a0f1a31d-1fc4-41bc-b7b9-f05cd7279220', 2, 5, 'hi im admin how are you todaay', NULL, 1, '2024-01-16 00:49:37', '2024-01-16 00:55:34'),
('c035f1bb-0326-4c9f-b359-e3481c11a6da', 2, 2, 'hi', NULL, 1, '2024-01-16 00:50:22', '2024-01-16 02:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `classbooks`
--

CREATE TABLE `classbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_books`
--

CREATE TABLE `class_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_books`
--

INSERT INTO `class_books` (`id`, `class_name`, `section`, `status`, `created_at`, `updated_at`) VALUES
(1, '1stclass', 'A', '1', '2023-11-24 02:05:22', '2023-11-24 02:05:22'),
(2, '2ndclass', 'C', '1', '2023-11-24 02:08:29', '2023-11-24 02:08:29'),
(3, '3rdclass', 'B', '1', '2023-11-24 02:08:36', '2023-11-24 02:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_date` date NOT NULL,
  `publish_date` date NOT NULL,
  `messageto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messagebox` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `title`, `notice_date`, `publish_date`, `messageto`, `messagebox`, `created_at`, `updated_at`) VALUES
(9, 'importent annoucment', '2024-01-11', '2024-01-11', '10', 'aoa app ka sir hamza kal sy app ke chutiya ho gye hy 10 din ky leyay', '2024-01-11 03:02:33', '2024-01-11 03:02:33'),
(10, 'Haf Day', '2024-01-11', '2024-01-11', 'sadeem', 'nm', '2024-01-11 03:03:40', '2024-01-11 03:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(21, '2023_11_24_032918_create_classes_table', 2),
(24, '2023_11_24_061457_create_classbooks_table', 5),
(25, '2023_11_24_062715_create_classbooks_table', 6),
(27, '2023_11_24_064202_assignbook', 8),
(37, '2014_10_12_000000_create_users_table', 9),
(38, '2014_10_12_100000_create_password_reset_tokens_table', 9),
(39, '2019_08_19_000000_create_failed_jobs_table', 9),
(40, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(41, '2023_10_31_121104_create_parents_table', 9),
(42, '2023_10_31_180807_create_teachers_table', 9),
(43, '2023_11_01_040243_create_students_table', 9),
(44, '2023_11_02_041428_create_request_meetings_table', 9),
(45, '2023_11_02_065112_create_attendences_table', 9),
(46, '2023_11_02_113452_create_transportations_table', 9),
(47, '2023_11_03_052303_create_transportations_table', 9),
(48, '2023_11_15_035014_create_permission_tables', 9),
(49, '2023_11_15_045027_create_dashboards_table', 9),
(50, '2023_11_20_999999_add_active_status_to_users', 9),
(51, '2023_11_20_999999_add_avatar_to_users', 9),
(52, '2023_11_20_999999_add_dark_mode_to_users', 9),
(53, '2023_11_20_999999_add_messenger_color_to_users', 9),
(54, '2023_11_20_999999_create_chatify_favorites_table', 9),
(55, '2023_11_20_999999_create_chatify_messages_table', 9),
(56, '2023_11_23_040301_students', 9),
(57, '2023_11_24_042421_create_subjects_table', 9),
(58, '2023_11_24_063411_create_class_books_table', 10),
(59, '2023_11_24_070209_create_assign_books_table', 11),
(60, '2023_11_24_071951_create_time_tables_table', 12),
(61, '2024_01_10_145700_create_complains_table', 13),
(62, '2024_01_12_061454_create_new_users_table', 14),
(63, '2024_01_12_100640_create_notifications_table', 14),
(64, '2024_01_12_103859_create_notifications_table', 15),
(65, '2024_01_13_105046_rollback_table_2023_10_31_121104_create_parents_table', 16),
(66, '2024_01_13_110030_rollback_table_2023_10_31_121104_create_parents_table', 17),
(67, '2024_01_16_999999_add_active_status_to_users', 18),
(68, '2024_01_16_999999_add_avatar_to_users', 18),
(69, '2024_01_16_999999_add_dark_mode_to_users', 18),
(70, '2024_01_16_999999_add_messenger_color_to_users', 18),
(71, '2024_01_16_092153_create_chathead', 19);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 6),
(5, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 8),
(5, 'App\\Models\\User', 9),
(5, 'App\\Models\\User', 10),
(5, 'App\\Models\\User', 11),
(5, 'App\\Models\\User', 26),
(5, 'App\\Models\\User', 28),
(5, 'App\\Models\\User', 29),
(5, 'App\\Models\\User', 30),
(5, 'App\\Models\\User', 31),
(5, 'App\\Models\\User', 32),
(5, 'App\\Models\\User', 33),
(5, 'App\\Models\\User', 34);

-- --------------------------------------------------------

--
-- Table structure for table `new_users`
--

CREATE TABLE `new_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('1', 'Test', 'Annoucment', 10, '12/1/2024', '2024-01-12 11:44:09', '2024-01-12 11:44:09', '2024-01-12 11:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneno` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `name`, `email`, `password`, `phoneno`, `address`, `gender`, `status`, `occupation`, `profile_picture`, `created_at`, `updated_at`) VALUES
(10, 'hamza khan', 'hamzakhanking7@gmail.com', '1234', '456789', 'peshawar', 'male', '0', 'Test', 'images/1704626854.jpeg', '2024-01-07 06:27:34', '2024-01-17 23:24:41'),
(11, 'sadeem', 'sadeem@gmail.com', '1234', '03028096643', 'Test1', 'male', '1', 'Test', 'images/1704627050.jpeg', '2024-01-07 06:30:50', '2024-01-13 14:55:45'),
(15, 'hamza khan', 'maaz@gmail.com', '1234', '456789', 'peshawar', 'male', '1', 'Test', 'images/1705379691.jpg', '2024-01-15 23:34:51', '2024-01-15 23:34:51');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `request_meetings`
--

CREATE TABLE `request_meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `meeting_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_meetings`
--

INSERT INTO `request_meetings` (`id`, `parent_id`, `teacher_id`, `meeting_date`, `meeting_start_time`, `meeting_end_time`, `purpose`, `status`, `created_at`, `updated_at`) VALUES
(2, 11, 5, '2024-01-07', '20:32', '22:32', 'test', '1', '2024-01-07 10:32:44', '2024-01-07 10:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(5, 'parent', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `admission_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `parent_id`, `name`, `admission_number`, `roll_number`, `class`, `gender`, `mobile_number`, `admission_date`, `profile_picture`, `blood_group`, `status`, `email`, `age`, `created_at`, `updated_at`) VALUES
(4, 10, 'hamza khan', '34567', '345', 'a', 'male', 123456, '2024-01-07', 'images/1704629451.jpg', 's', '1', 'admin@gmail.com', '324', '2024-01-07 07:10:51', '2024-01-07 07:10:51'),
(5, 11, 'ubaid', '3456756', '1', 'B', 'male', 234566578, '2024-01-07', 'images/1704629763.jpg', 'B-', '1', 'admin@gmail.com', '3', '2024-01-07 07:16:03', '2024-01-07 07:16:03'),
(6, 10, 'ubaid', '34567567', '6', 'c', 'male', 5678, '2024-01-07', 'images/1704629840.jpg', 'B-', '1', 'hamza1@gmail.com', '324', '2024-01-07 07:17:20', '2024-01-07 07:17:20'),
(7, 10, 'hamza khan', '3456756', '345', 'c', 'male', 234456578, '2024-01-10', 'images/1704866456.jpg', 'B-', '1', 'maaz@gmail.com', '324', '2024-01-10 01:00:56', '2024-01-10 01:00:56'),
(9, 10, 'hamza khan', '34567', '234565677', 'a', 'male', 1324567899, '2024-01-10', 'images/1704883516.jpeg', 'B-', '1', 'hamza@gmail.com', '324', '2024-01-10 05:45:16', '2024-01-10 05:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Arrabic', 'Programing', '1', '2023-11-24 02:05:33', '2023-11-24 02:05:33'),
(2, 'English', 'Paglo Wale Zuban', '1', '2023-11-24 02:09:01', '2023-11-24 02:09:01'),
(3, 'Maths', 'Test2', '1', '2023-11-24 02:09:12', '2023-11-24 02:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_joining` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `gender`, `password`, `date_of_joining`, `phone_number`, `address`, `work_experience`, `qualification`, `status`, `profile_picture`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'admin123@gmail.com', 'female', '1234', '2024-01-07', '12345678', 'peshawar', 'master', 'yes', '1', 'images/1704641367.jpg', '2024-01-07 10:29:27', '2024-01-07 10:29:27'),
(6, 'admin', 'admin@gmail.com', 'female', '1234', '2024-01-07', '21345678', 'Test@', 'master', 'yes', '1', 'images/1704641879.jpg', '2024-01-07 10:37:59', '2024-01-07 10:37:59'),
(7, 'Forrest Toy', 'garnett43@example.net', 'Male', '$2y$10$aPIhFCao3TKzEavipSGBBuiaIXwuIGpNrLIlBa49weFWO3lC7QARS', '2018-04-11 09:36:00', '353033976093198', '460 Samir Mountain\nWest Edd, TX 94684', '6', 'Master\'s Degree', 'Inactive', 'https://via.placeholder.com/640x480.png/0055bb?text=quia', '2024-01-11 06:52:44', '2024-01-11 06:52:44'),
(8, 'Percy Senger', 'maxie83@example.org', 'Female', '$2y$10$TlIed/MhFyWntjt6oowxGenJT75TI3uiF/v488sBLZNpfJtxydGZ.', '2015-07-28 20:13:23', '382927002245943', '767 Pagac Cliffs Apt. 904\nStiedemanntown, WI 28326-2180', '4', 'Bachelor\'s Degree', 'Inactive', 'https://via.placeholder.com/640x480.png/007766?text=quia', '2024-01-11 06:52:45', '2024-01-11 06:52:45'),
(9, 'Mr. Lucio Heller PhD', 'goodwin.dahlia@example.org', 'Female', '$2y$10$0EdmkicOWRcHEnqngM875.a/KmrPdCTIBXRgOqTnuEWwl9kB4n7kO', '2019-04-24 22:34:10', '956776241229304', '2430 Fleta Court\nNorth Adahtown, TN 83408', '6', 'Bachelor\'s Degree', 'Active', 'https://via.placeholder.com/640x480.png/00ff33?text=alias', '2024-01-11 06:52:45', '2024-01-11 06:52:45'),
(10, 'Kelli Hackett', 'vpredovic@example.net', 'Male', '$2y$10$ekHoDOzQhrFVPIBbMp1JTeYv8ujkzkDh5zQVXts2a0lJM18feTNa2', '2017-09-27 17:44:59', '313780649244988', '206 Nick Bridge Suite 746\nSouth Irving, CO 43061', '8', 'Bachelor\'s Degree', 'Inactive', 'https://via.placeholder.com/640x480.png/00aa99?text=esse', '2024-01-11 06:52:46', '2024-01-11 06:52:46'),
(11, 'Dr. Collin Rogahn Jr.', 'fanny24@example.org', 'Female', '$2y$10$Tp9Ujlssi/hgcd/krZ8t3.9ml4OgULAxKmzRC/eB97edsi4BEsJbm', '2023-09-24 11:43:06', '943443017612774', '390 Rutherford Circle\nLebsackhaven, NJ 24475', '1', 'Bachelor\'s Degree', 'Inactive', 'https://via.placeholder.com/640x480.png/003300?text=quia', '2024-01-11 06:52:46', '2024-01-11 06:52:46'),
(12, 'Ms. Elta Rau V', 'reba.beahan@example.com', 'Male', '$2y$10$QZDNe1zrQG6EE8MaA1/YFeluI1Cde2WjTH3GADSGXmht3e71HPXBi', '2016-05-06 13:29:37', '594627445918120', '399 Greenfelder Locks\nSouth Makenzie, ND 56419', '8', 'Bachelor\'s Degree', 'Active', 'https://via.placeholder.com/640x480.png/0088dd?text=voluptas', '2024-01-11 06:52:46', '2024-01-11 06:52:46'),
(13, 'Dr. Layne Bauch IV', 'kcorkery@example.org', 'Female', '$2y$10$Qdz0cYLLlPn36D1/uhqV.Or6HQ1/uSIDZKE2RyamcXey8pqsLBg26', '2022-10-01 04:44:57', '372311435702765', '3148 Ondricka Summit\nEast Jerrellland, HI 84255-2283', '6', 'Bachelor\'s Degree', 'Active', 'https://via.placeholder.com/640x480.png/005511?text=dolorum', '2024-01-11 06:52:46', '2024-01-11 06:52:46'),
(14, 'Leora Armstrong', 'cadams@example.com', 'Female', '$2y$10$pCL5LIaOkRqqH00sjrYmtOLLz/Fm1jSiEB71a/wU8RIOw7Gj1YtcC', '2020-09-19 12:00:58', '470023780835696', '71041 Lenora Keys Suite 120\nWalterburgh, OK 36866', '0', 'Master\'s Degree', 'Inactive', 'https://via.placeholder.com/640x480.png/001144?text=voluptatem', '2024-01-11 06:52:46', '2024-01-11 06:52:46'),
(15, 'Eveline Pouros', 'estefania46@example.net', 'Female', '$2y$10$uPTSU4KPW6L99ycQjB5NE.uv6.ebRG2gtCsrjj8mEnv0id.TZIfya', '2023-06-29 02:22:03', '958950661130198', '485 Funk Grove\nTessberg, ME 17715', '5', 'Bachelor\'s Degree', 'Active', 'https://via.placeholder.com/640x480.png/00aa55?text=necessitatibus', '2024-01-11 06:52:46', '2024-01-11 06:52:46'),
(16, 'Hailey Kovacek', 'alta90@example.com', 'Female', '$2y$10$T.OvglODx7dHaOFDY/vlsuHdOBYT1oubo.sKQLKv4bxDdpoo8BuH6', '2018-10-23 06:40:59', '772295126279954', '896 Zemlak Lane Apt. 481\nMozellfurt, WA 13813-7897', '9', 'Bachelor\'s Degree', 'Inactive', 'https://via.placeholder.com/640x480.png/003300?text=possimus', '2024-01-11 06:52:47', '2024-01-11 06:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `time_tables`
--

CREATE TABLE `time_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classbook_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `week` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_tables`
--

INSERT INTO `time_tables` (`id`, `classbook_id`, `subject_id`, `week`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'monday', '15:22', '17:22', '2023-11-24 05:22:52', '2023-11-24 05:22:52'),
(2, 2, 2, 'tuesday', '15:23', '16:23', '2023-11-24 05:23:08', '2023-11-24 05:23:08'),
(3, 1, 3, 'tuesday', '17:36', '18:36', '2023-11-24 05:36:23', '2023-11-24 05:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transportations`
--

CREATE TABLE `transportations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `bus_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `active_status`, `avatar`, `dark_mode`, `messenger_color`, `is_approved`) VALUES
(2, 'admin', 'maaz@gmail.com', NULL, '$2y$10$.0AgewDT.bm28em6DB8Ev.gTMMtPreTaHsE0fYfoZn7WQqliouwra', NULL, '2023-11-27 00:02:50', '2024-01-16 02:13:35', 0, '656574a9-a8b9-4954-b6e3-558d825145e1.jpg', 0, '#2180f3', 1),
(5, 'parentaccount', 'paraentaccount@gmail.com', NULL, '$2y$10$yBGaTdREi5fLc1B4tMImoeuAU0bdK0VAsRsrtSn4IPGspT545npEa', NULL, '2023-11-27 01:30:39', '2024-01-18 01:12:14', 0, 'avatar.png', 0, NULL, 1),
(26, 'parent12345', 'parent2345@gmail.com', NULL, '$2y$10$ckMw9zSgXSCCpjaV/BsxyeMEr7Yx75FQRC8dWlMXwyFBxxxkqhnEO', NULL, '2024-01-15 07:04:27', '2024-01-16 00:16:54', 0, 'avatar.png', 0, NULL, 0),
(28, 'parent11', 'parent11@gmail.com', NULL, '$2y$10$0q077L82nNYlQ3Y/iLBYk.kX3XPC1RMpBJgrPvM5H59p2puAC7UBe', NULL, '2024-01-15 23:52:53', '2024-01-16 00:16:11', 0, 'avatar.png', 0, NULL, 0),
(29, 'hamza khan5', 'hamza5@gmail.com', NULL, '$2y$10$eDlpDoPZxQnKzxj/lkkzn.gGzCfXGcbSuiVbaNYE7vQysnGGhOPeq', NULL, '2024-01-16 00:11:55', '2024-01-16 00:16:12', 0, 'avatar.png', 0, NULL, 0),
(30, 'hamzakhan6', 'hamza6@gmail.com', NULL, '$2y$10$5.bbGFkFrKnAV0to1TQSbeSyxz0VLQPW/2p3AzEonQWpBpJz4izoS', NULL, '2024-01-16 00:12:44', '2024-01-16 00:16:17', 0, 'avatar.png', 0, NULL, 0),
(31, 'hamza khan7', 'hamza7@gmail.com', NULL, '$2y$10$gHkCQygzp.nkBKtjyF8hn.dhC776Z7uCv0qJXeOqYJjifL0.P34q6', NULL, '2024-01-16 00:13:26', '2024-01-16 00:16:14', 0, 'avatar.png', 0, NULL, 0),
(32, 'notification1', 'notification1@gmail.com', NULL, '$2y$10$9cq4xvWlA02hzcQjsLxSqONcJeEPDuGcbjsoQHcTUu/1qtgl70v.e', NULL, '2024-01-17 12:11:53', '2024-01-17 12:11:53', 0, 'avatar.png', 0, NULL, 0),
(33, 'newnotification', 'newnotification@gmail.com', NULL, '$2y$10$7quuglr7o64bidfZ8L3CHOsBIoOHCWbFTRayLIpcjdtpGEA/RNo3C', NULL, '2024-01-18 01:01:24', '2024-01-18 01:01:24', 0, 'avatar.png', 0, NULL, 0),
(34, 'notification5', 'notification5@gmail.com', NULL, '$2y$10$ISn7rl3AezKpGmZuium1C.hgLoANO/tC05njFu7wqGUnypO9wT6pK', NULL, '2024-01-18 01:37:15', '2024-01-18 01:37:15', 0, 'avatar.png', 0, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_books`
--
ALTER TABLE `assign_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_books_classbook_id_foreign` (`classbook_id`),
  ADD KEY `assign_books_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendences_parent_id_foreign` (`parent_id`),
  ADD KEY `attendences_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `chathead`
--
ALTER TABLE `chathead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classbooks`
--
ALTER TABLE `classbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_books`
--
ALTER TABLE `class_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `new_users`
--
ALTER TABLE `new_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parents_email_unique` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `request_meetings`
--
ALTER TABLE `request_meetings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_meetings_parent_id_foreign` (`parent_id`),
  ADD KEY `request_meetings_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `time_tables`
--
ALTER TABLE `time_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_tables_classbook_id_foreign` (`classbook_id`),
  ADD KEY `time_tables_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportations`
--
ALTER TABLE `transportations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportations_parent_id_foreign` (`parent_id`),
  ADD KEY `transportations_student_id_foreign` (`student_id`);

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
-- AUTO_INCREMENT for table `assign_books`
--
ALTER TABLE `assign_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chathead`
--
ALTER TABLE `chathead`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classbooks`
--
ALTER TABLE `classbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class_books`
--
ALTER TABLE `class_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `new_users`
--
ALTER TABLE `new_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_meetings`
--
ALTER TABLE `request_meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `time_tables`
--
ALTER TABLE `time_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transportations`
--
ALTER TABLE `transportations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_books`
--
ALTER TABLE `assign_books`
  ADD CONSTRAINT `assign_books_classbook_id_foreign` FOREIGN KEY (`classbook_id`) REFERENCES `class_books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_books_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attendences`
--
ALTER TABLE `attendences`
  ADD CONSTRAINT `attendences_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attendences_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `request_meetings`
--
ALTER TABLE `request_meetings`
  ADD CONSTRAINT `request_meetings_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `request_meetings_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `time_tables`
--
ALTER TABLE `time_tables`
  ADD CONSTRAINT `time_tables_classbook_id_foreign` FOREIGN KEY (`classbook_id`) REFERENCES `class_books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_tables_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transportations`
--
ALTER TABLE `transportations`
  ADD CONSTRAINT `transportations_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transportations_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

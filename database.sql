-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2021 at 09:58 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartgs5_future`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `text`, `url`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"About the institute\",\"ar\":\"\\u0646\\u0628\\u0630\\u0629 \\u0639\\u0646 \\u0627\\u0644\\u0645\\u0639\\u0647\\u062f\"}', '{\"en\":\"The Future Higher Institute for Engineering and Technology was established in Mansoura by Ministerial Resolution No. 3828 dated 7\\/15\\/2017 and the institute aims to graduate generations of engineers who are able to innovate and excel in various engineering fields to keep pace with development in technological fields in line with the needs of the local and international market. The institute includes three departments, which are Department of Mechanical, Architectural and Civil Engineering. One of the most important distinctions of the institute is that it is the only one in the Delta region to have a mechanical engineering department.\",\"ar\":\"\\u0623\\u0646\\u0634\\u0626 \\u0645\\u0639\\u0647\\u062f \\u0627\\u0644\\u0645\\u0633\\u062a\\u0642\\u0628\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0649 \\u0644\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0643\\u0646\\u0648\\u0644\\u0648\\u062c\\u064a\\u0627 \\u0628\\u0627\\u0644\\u0645\\u0646\\u0635\\u0648\\u0631\\u0629 \\u0628\\u0627\\u0644\\u0642\\u0631\\u0627\\u0631 \\u0627\\u0644\\u0648\\u0632\\u0627\\u0631\\u0649 \\u0631\\u0642\\u0645 3828 \\u0628\\u062a\\u0627\\u0631\\u064a\\u062e 15\\/7\\/2017\\u0648\\u064a\\u0647\\u062f\\u0641 \\u0627\\u0644\\u0645\\u0639\\u0647\\u062f \\u0625\\u0644\\u0649 \\u062a\\u062e\\u0631\\u064a\\u062c \\u0623\\u062c\\u064a\\u0627\\u0644 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0647\\u0646\\u062f\\u0633\\u064a\\u0646 \\u0627\\u0644\\u0642\\u0627\\u062f\\u0631\\u064a\\u0646 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0625\\u0628\\u062f\\u0627\\u0639 \\u0648\\u0627\\u0644\\u062a\\u0645\\u064a\\u0632 \\u0641\\u0649 \\u0634\\u062a\\u0649 \\u0627\\u0644\\u0645\\u062c\\u0627\\u0644\\u0627\\u062a \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u064a\\u0629 \\u0644\\u0645\\u0648\\u0627\\u0643\\u0628\\u0629 \\u0627\\u0644\\u062a\\u0637\\u0648\\u0631 \\u0641\\u0649 \\u0627\\u0644\\u0645\\u062c\\u0627\\u0644\\u0627\\u062a \\u0627\\u0644\\u062a\\u0643\\u0646\\u0648\\u0644\\u0648\\u062c\\u064a\\u0629 \\u0628\\u0645\\u0627 \\u064a\\u062a\\u0645\\u0627\\u0634\\u0649 \\u0645\\u0639 \\u0625\\u062d\\u062a\\u064a\\u0627\\u062c\\u0627\\u062a \\u0627\\u0644\\u0633\\u0648\\u0642 \\u0627\\u0644\\u0645\\u062d\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629\\u060c \\u0648\\u064a\\u0634\\u062a\\u0645\\u0644 \\u0627\\u0644\\u0645\\u0639\\u0647\\u062f \\u0639\\u0644\\u0649 \\u062b\\u0644\\u0627\\u062b \\u0623\\u0642\\u0633\\u0627\\u0645 \\u0648\\u0647\\u0649 \\u0642\\u0633\\u0645 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0645\\u0627\\u0631\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629. \\u0648\\u0645\\u0646 \\u0623\\u0647\\u0645 \\u0646\\u0642\\u0627\\u0637 \\u0627\\u0644\\u062a\\u0645\\u064a\\u0632 \\u0628\\u0627\\u0644\\u0645\\u0639\\u0647\\u062f \\u0623\\u0646\\u0647 \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0628\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u062f\\u0644\\u062a\\u0627 \\u0628\\u0647 \\u0642\\u0633\\u0645 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629.\"}', 'https://video.wixstatic.com/video/2da85a_8937f033c0e1405fb76714d1f32f7a18/480p/mp4/file.mp4', 1, '2021-01-24 06:59:26', '2021-01-25 09:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `text`, `url`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Student Welfare Department activities\",\"ar\":\"\\u0641\\u0639\\u0627\\u0644\\u064a\\u0627\\u062a \\u0642\\u0633\\u0645 \\u0631\\u0639\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628\"}', '{\"en\":\"<ul style=\\\"color:white;\\\"><li style=\\\"line-height: 20px;\\\">Annual Prize Distribution (Culture \\/Sports)<\\/li><li style=\\\"line-height: 20px;\\\">Anti-ragging Cell<\\/li><li style=\\\"line-height: 20px;\\\">Nirbhay Kanya Abhiyan (Fearless Girl Campaign)<\\/li><li style=\\\"line-height: 20px;\\\">Central Placement Cell<\\/li><li style=\\\"line-height: 20px;\\\">Soft Skills Programme<\\/li><li style=\\\"line-height: 20px;\\\">Career Guidance Scheme<\\/li><li style=\\\"line-height: 20px;\\\">Students\\u2019 Safety Insurance Scheme<\\/li><li style=\\\"line-height: 20px;\\\">Student-related Seminar\\/Conferences\\/Workshops\\/Camps etc.<\\/li><li style=\\\"line-height: 20px;\\\">Youth Festivals<\\/li><\\/ul>\",\"ar\":\"<div style=\\\"text-align: justify;\\\"><ul style=\\\"font-family: Poppins, Helvetica, sans-serif;color:white\\\"><li>\\u062a\\u0648\\u0632\\u064a\\u0639 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0626\\u0632 \\u0627\\u0644\\u0633\\u0646\\u0648\\u064a\\u0629 (\\u062b\\u0642\\u0627\\u0641\\u0629 \\/ \\u0631\\u064a\\u0627\\u0636\\u0629)<\\/li><li>\\u062e\\u0644\\u064a\\u0629 \\u0645\\u0643\\u0627\\u0641\\u062d\\u0629 \\u0627\\u0644\\u062a\\u0645\\u0632\\u0642<br><\\/li><li>\\u0646\\u064a\\u0631\\u0628\\u0647\\u0627\\u064a \\u0643\\u0627\\u0646\\u064a\\u0627 \\u0623\\u0628\\u0647\\u064a\\u0627\\u0646 (\\u062d\\u0645\\u0644\\u0629 \\u0627\\u0644\\u0641\\u062a\\u0627\\u0629 \\u0627\\u0644\\u0634\\u062c\\u0627\\u0639\\u0629)<\\/li><li>\\u062e\\u0644\\u064a\\u0629 \\u0627\\u0644\\u062a\\u0646\\u0633\\u064a\\u0628 \\u0627\\u0644\\u0645\\u0631\\u0643\\u0632\\u064a\\u0629<\\/li><li>\\u0628\\u0631\\u0646\\u0627\\u0645\\u062c \\u0627\\u0644\\u0645\\u0647\\u0627\\u0631\\u0627\\u062a \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629<\\/li><li>\\u0645\\u062e\\u0637\\u0637 \\u0627\\u0644\\u062a\\u0648\\u062c\\u064a\\u0647 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a<\\/li><li>\\u062e\\u0637\\u0629 \\u062a\\u0623\\u0645\\u064a\\u0646 \\u0633\\u0644\\u0627\\u0645\\u0629 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628<\\/li><li>\\u0627\\u0644\\u0646\\u062f\\u0648\\u0627\\u062a \\/ \\u0627\\u0644\\u0645\\u0624\\u062a\\u0645\\u0631\\u0627\\u062a \\/ \\u0648\\u0631\\u0634 \\u0627\\u0644\\u0639\\u0645\\u0644 \\/ \\u0627\\u0644\\u0645\\u0639\\u0633\\u0643\\u0631\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0639\\u0644\\u0642\\u0629 \\u0628\\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0625\\u0644\\u062e.<\\/li><li>\\u0645\\u0647\\u0631\\u062c\\u0627\\u0646\\u0627\\u062a \\u0627\\u0644\\u0634\\u0628\\u0627\\u0628<\\/li><\\/ul><\\/div>\"}', 'https://video.wixstatic.com/video/2da85a_4d21923190d14501842c62498552f358/1080p/mp4/file.mp4', 1, '2021-01-24 12:46:40', '2021-01-25 08:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'zepojome', 'dobub@mailinator.com', 'Suscipit nihil odio', 'In Nam explicabo In', '2021-01-26 10:05:22', '2021-01-26 10:05:22'),
(2, 'zepojome', 'dobub@mailinator.com', 'Suscipit nihil odio', 'In Nam explicabo In', '2021-01-26 10:06:50', '2021-01-26 10:06:50'),
(3, 'rudaqixen', 'pirapawod@mailinator.com', 'Qui accusantium ut r', 'Dolorum enim tempora', '2021-01-26 10:07:09', '2021-01-26 10:07:09'),
(4, 'rudaqixen', 'pirapawod@mailinator.com', 'Qui accusantium ut r', 'Dolorum enim tempora', '2021-01-26 10:10:12', '2021-01-26 10:10:12'),
(5, 'rudaqixen', 'pirapawod@mailinator.com', 'Qui accusantium ut r', 'Dolorum enim tempora', '2021-01-26 10:12:22', '2021-01-26 10:12:22'),
(6, 'kuvetu', 'qoryvilef@mailinator.com', 'Vel doloremque debit', 'Hic sed obcaecati ve', '2021-01-26 10:12:34', '2021-01-26 10:12:34'),
(7, 'kuvetu', 'qoryvilef@mailinator.com', 'Vel doloremque debit', 'Hic sed obcaecati ve', '2021-01-26 10:18:38', '2021-01-26 10:18:38'),
(8, 'kuvetu', 'qoryvilef@mailinator.com', 'Vel doloremque debit', 'Hic sed obcaecati ve', '2021-01-26 10:20:17', '2021-01-26 10:20:17'),
(9, 'Hanan', 'hanan@gmail.com', 'Sapiente dolorum dol', 'Loreom', '2021-01-26 10:20:58', '2021-01-26 10:20:58'),
(10, 'sadyhemiz', 'xevigari@mailinator.com', 'Architecto duis magn', 'Et illum esse eiusm', '2021-01-29 18:56:11', '2021-01-29 18:56:11'),
(11, 'sadyhemiz', 'xevigari@mailinator.com', 'Architecto duis magn', 'Et illum esse eiusm', '2021-01-29 18:56:19', '2021-01-29 18:56:19'),
(12, 'sadyhemiz', 'xevigari@mailinator.com', 'Architecto duis magn', 'Et illum esse eiusm', '2021-01-29 18:56:46', '2021-01-29 18:56:46'),
(13, 'sadyhemiz', 'xevigari@mailinator.com', 'Architecto duis magn', 'Et illum esse eiusm', '2021-01-29 18:59:39', '2021-01-29 18:59:39'),
(14, 'mydeve', 'hananmohammed2468@gmail.com', 'Nisi id repudiandae', 'Sed consequuntur et', '2021-01-29 19:00:07', '2021-01-29 19:00:07'),
(15, 'mydeve', 'hananmohammed2468@gmail.com', 'Nisi id repudiandae', 'Sed consequuntur et', '2021-01-29 19:15:11', '2021-01-29 19:15:11'),
(16, 'Test', 'Test@test.com', 'Test', 'Test', '2021-01-29 19:17:42', '2021-01-29 19:17:42'),
(17, 'mydeve', 'hananmohammed2468@gmail.com', 'Nisi id repudiandae', 'Sed consequuntur et', '2021-01-29 19:20:55', '2021-01-29 19:20:55'),
(18, 'Test', 'Test@test.com', 'Test', 'test', '2021-01-29 19:25:33', '2021-01-29 19:25:33'),
(19, 'mezabeg', 'rojaw@mailinator.com', 'Obcaecati duis occae', 'Dicta dolor hic laud', '2021-01-29 19:28:14', '2021-01-29 19:28:14'),
(20, 'cucyji', 'fisozo@mailinator.com', 'Consectetur aliquid', 'Excepturi tempor acc', '2021-01-29 19:30:51', '2021-01-29 19:30:51'),
(21, 'Test', 'Test@test.com', 'Test', 'Test', '2021-01-29 19:31:50', '2021-01-29 19:31:50'),
(22, 'cucyji', 'fisozo@mailinator.com', 'Consectetur aliquid', 'Excepturi tempor acc', '2021-01-29 19:32:16', '2021-01-29 19:32:16'),
(23, 'cucyji', 'fisozo@mailinator.com', 'Consectetur aliquid', 'Excepturi tempor acc', '2021-01-29 19:37:09', '2021-01-29 19:37:09'),
(24, 'nucapacyk', 'wijo@mailinator.com', 'Temporibus doloremqu', 'Aut aliquid repellen', '2021-01-29 19:43:52', '2021-01-29 19:43:52'),
(25, 'qydiburuj', 'nykyne@mailinator.com', 'Dolor cillum qui vol', 'Laboris est velit no', '2021-01-29 19:46:27', '2021-01-29 19:46:27'),
(26, 'qydiburuj', 'nykyne@mailinator.com', 'Dolor cillum qui vol', 'Laboris est velit no', '2021-01-29 19:47:18', '2021-01-29 19:47:18'),
(27, 'qydiburuj', 'nykyne@mailinator.com', 'Dolor cillum qui vol', 'Laboris est velit no', '2021-01-29 19:48:58', '2021-01-29 19:48:58'),
(28, 'qydiburuj', 'nykyne@mailinator.com', 'Dolor cillum qui vol', 'Laboris est velit no', '2021-01-29 19:52:49', '2021-01-29 19:52:49'),
(29, 'qydiburuj', 'nykyne@mailinator.com', 'Dolor cillum qui vol', 'Laboris est velit no', '2021-01-29 20:06:32', '2021-01-29 20:06:32'),
(30, 'fyloxuc', 'fobucynemy@mailinator.com', 'Eos recusandae Cons', 'Quasi sed nisi qui q', '2021-01-29 20:12:57', '2021-01-29 20:12:57'),
(31, 'fyloxuc', 'fobucynemy@mailinator.com', 'Eos recusandae Cons', 'Quasi sed nisi qui q', '2021-01-29 20:17:10', '2021-01-29 20:17:10'),
(32, 'zecopixita', 'gonix@mailinator.com', 'Nulla natus quidem n', 'Nihil duis dicta num', '2021-01-29 20:19:26', '2021-01-29 20:19:26'),
(33, 'zecopixita', 'gonix@mailinator.com', 'Nulla natus quidem n', 'Nihil duis dicta num', '2021-01-29 20:21:21', '2021-01-29 20:21:21'),
(34, 'zecopixita', 'gonix@mailinator.com', 'Nulla natus quidem n', 'Nihil duis dicta num', '2021-01-29 20:21:47', '2021-01-29 20:21:47'),
(35, 'zecopixita', 'gonix@mailinator.com', 'Nulla natus quidem n', 'Nihil duis dicta num', '2021-01-29 20:22:42', '2021-01-29 20:22:42'),
(36, 'zecopixita', 'gonix@mailinator.com', 'Nulla natus quidem n', 'Nihil duis dicta num', '2021-01-29 20:28:45', '2021-01-29 20:28:45'),
(37, 'hyhacyfin', 'fymufin@mailinator.com', 'Ut enim velit nemo', 'Consectetur officia', '2021-01-29 20:32:31', '2021-01-29 20:32:31'),
(38, 'hyhacyfin', 'fymufin@mailinator.com', 'Ut enim velit nemo', 'Consectetur officia', '2021-01-29 20:33:46', '2021-01-29 20:33:46'),
(39, 'hyhacyfin', 'fymufin@mailinator.com', 'Ut enim velit nemo', 'Consectetur officia', '2021-01-29 20:35:57', '2021-01-29 20:35:57'),
(40, 'ruxoly', 'kokadyj@mailinator.com', 'Aliqua Quos tempor', 'Odit magni totam ut', '2021-01-29 20:41:43', '2021-01-29 20:41:43'),
(41, 'Future Contact Mail', 'future@gmail.com', 'Future Contact Mail', 'Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail', '2021-01-29 20:43:50', '2021-01-29 20:43:50'),
(42, 'Future Contact Mail', 'future@gmail.com', 'Future Contact Mail', 'Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail Future Contact Mail', '2021-01-29 20:47:22', '2021-01-29 20:47:22'),
(43, 'cogofymy', 'tyrasup@mailinator.com', 'Non eos veniam des', 'Veniam ut mollitia', '2021-01-29 21:26:24', '2021-01-29 21:26:24'),
(44, 'Test', 'Test@test.com', 'Test', 'Test', '2021-01-29 21:43:11', '2021-01-29 21:43:11'),
(45, 'Test Test', 'Test@test.com', 'Test Test', 'Test Message', '2021-01-29 22:01:20', '2021-01-29 22:01:20'),
(46, 'Test Name', 'test@test.com', 'Test', 'Test Test Test', '2021-01-29 22:03:19', '2021-01-29 22:03:19'),
(47, 'Test Name', 'testemail@domain.com', 'Test Website Contact', 'Hello\r\nTest the contact us message.', '2021-01-29 23:50:35', '2021-01-29 23:50:35'),
(48, 'Test', 'f@Test', 'Test', 'Test', '2021-01-30 22:51:13', '2021-01-30 22:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `teaching_staff_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `teaching_staff_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `text`, `teaching_staff_en`, `teaching_staff_ar`, `time`, `image`, `created_by`, `created_at`, `updated_at`) VALUES
(2, '{\"en\":\"Math\",\"ar\":\"\\u0627\\u0644\\u0631\\u064a\\u0627\\u0636\\u064a\\u0627\\u062a\"}', '{\"en\":\"<span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.<\\/span>\",\"ar\":\"<p><span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.<\\/span><\\/p><p>\\r\\n                <\\/p>\"}', '[\"Dr. Nasreddin Mahmoud Abdel Rahman. (Physics - Solid State Physics)\"]', '[\"\\u062f\\/ \\u0646\\u0635\\u0631 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0645\\u062d\\u0645\\u0648\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u0631\\u062d\\u0645\\u0646 . ( \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0640  \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0645\\u062f )\"]', '02:00:00', 'image1611478290.png', 1, '2021-01-24 06:51:30', '2021-01-25 09:39:46'),
(3, '{\"en\":\"Chemistry\",\"ar\":\"\\u0627\\u0644\\u0643\\u0645\\u064a\\u0627\\u0621\"}', '{\"en\":\"Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.\",\"ar\":\"\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.\"}', '[\"Dr. Sherif Mohamed Abdel-Hamid. (Chemistry - Inorganic Chemistry)\",\"Dr. Aladdin Al-Sayed Hassanein. (Chemistry - Organic Chemistry)\"]', '[\"\\u062f\\/ \\u0634\\u0631\\u064a\\u0641 \\u0645\\u062d\\u0645\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u062d\\u0645\\u064a\\u062f . ( \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0640 \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u063a\\u064a\\u0631 \\u0639\\u0636\\u0648\\u064a\\u0629 )\",\"\\u062f\\/ \\u0639\\u0644\\u0627\\u0621 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0627\\u0644\\u0633\\u064a\\u062f \\u062d\\u0633\\u0627\\u0646\\u064a\\u0646 . ( \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0640  \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0639\\u0636\\u0648\\u064a\\u0629  )\"]', '02:01:00', 'image1611478522.png', 1, '2021-01-24 06:46:43', '2021-01-24 06:55:22'),
(4, '{\"en\":\"Physics\",\"ar\":\"\\u0627\\u0644\\u0641\\u064a\\u0632\\u064a\\u0627\\u0621\"}', '{\"en\":\"Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.\",\"ar\":\"\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.\"}', '[\"Dr. Nasreddin Mahmoud Abdel Rahman. (Physics - Solid State Physics)\"]', '[\"\\u062f\\/ \\u0646\\u0635\\u0631 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0645\\u062d\\u0645\\u0648\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u0631\\u062d\\u0645\\u0646 . ( \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0640  \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0645\\u062f )\"]', '02:00:00', 'image1611478003.png', 1, '2021-01-24 06:46:43', '2021-01-24 06:48:42'),
(7, '{\"en\":\"Math\",\"ar\":\"\\u0627\\u0644\\u0631\\u064a\\u0627\\u0636\\u064a\\u0627\\u062a\"}', '{\"en\":\"<span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.<\\/span>\",\"ar\":\"<p><span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.<\\/span><\\/p><p>\\r\\n                <\\/p>\"}', '[\"Dr. Nasreddin Mahmoud Abdel Rahman. (Physics - Solid State Physics)\"]', '[\"\\u062f\\/ \\u0646\\u0635\\u0631 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0645\\u062d\\u0645\\u0648\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u0631\\u062d\\u0645\\u0646 . ( \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0640  \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0645\\u062f )\"]', '02:00:00', 'image1611478290.png', 1, '2021-01-24 06:51:30', '2021-01-25 09:39:46'),
(8, '{\"en\":\"Chemistry\",\"ar\":\"\\u0627\\u0644\\u0643\\u0645\\u064a\\u0627\\u0621\"}', '{\"en\":\"Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.\",\"ar\":\"\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.\"}', '[\"Dr. Sherif Mohamed Abdel-Hamid. (Chemistry - Inorganic Chemistry)\",\"Dr. Aladdin Al-Sayed Hassanein. (Chemistry - Organic Chemistry)\"]', '[\"\\u062f\\/ \\u0634\\u0631\\u064a\\u0641 \\u0645\\u062d\\u0645\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u062d\\u0645\\u064a\\u062f . ( \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0640 \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u063a\\u064a\\u0631 \\u0639\\u0636\\u0648\\u064a\\u0629 )\",\"\\u062f\\/ \\u0639\\u0644\\u0627\\u0621 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0627\\u0644\\u0633\\u064a\\u062f \\u062d\\u0633\\u0627\\u0646\\u064a\\u0646 . ( \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0640  \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0639\\u0636\\u0648\\u064a\\u0629  )\"]', '02:01:00', 'image1611478522.png', 1, '2021-01-24 06:46:43', '2021-01-24 06:55:22'),
(9, '{\"en\":\"Physics\",\"ar\":\"\\u0627\\u0644\\u0641\\u064a\\u0632\\u064a\\u0627\\u0621\"}', '{\"en\":\"Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.\",\"ar\":\"\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.\"}', '[\"Dr. Nasreddin Mahmoud Abdel Rahman. (Physics - Solid State Physics)\"]', '[\"\\u062f\\/ \\u0646\\u0635\\u0631 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0645\\u062d\\u0645\\u0648\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u0631\\u062d\\u0645\\u0646 . ( \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0640  \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0645\\u062f )\"]', '02:00:00', 'image1611478003.png', 1, '2021-01-24 06:46:43', '2021-01-24 06:48:42'),
(10, '{\"en\":\"Math\",\"ar\":\"\\u0627\\u0644\\u0631\\u064a\\u0627\\u0636\\u064a\\u0627\\u062a\"}', '{\"en\":\"<span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.<\\/span>\",\"ar\":\"<p><span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.<\\/span><\\/p><p>\\r\\n                <\\/p>\"}', '[\"Dr. Nasreddin Mahmoud Abdel Rahman. (Physics - Solid State Physics)\"]', '[\"\\u062f\\/ \\u0646\\u0635\\u0631 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0645\\u062d\\u0645\\u0648\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u0631\\u062d\\u0645\\u0646 . ( \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0640  \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0645\\u062f )\"]', '02:00:00', 'image1611478290.png', 1, '2021-01-24 06:51:30', '2021-01-25 09:39:46'),
(11, '{\"en\":\"Chemistry\",\"ar\":\"\\u0627\\u0644\\u0643\\u0645\\u064a\\u0627\\u0621\"}', '{\"en\":\"Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.\",\"ar\":\"\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.\"}', '[\"Dr. Sherif Mohamed Abdel-Hamid. (Chemistry - Inorganic Chemistry)\",\"Dr. Aladdin Al-Sayed Hassanein. (Chemistry - Organic Chemistry)\"]', '[\"\\u062f\\/ \\u0634\\u0631\\u064a\\u0641 \\u0645\\u062d\\u0645\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u062d\\u0645\\u064a\\u062f . ( \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0640 \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u063a\\u064a\\u0631 \\u0639\\u0636\\u0648\\u064a\\u0629 )\",\"\\u062f\\/ \\u0639\\u0644\\u0627\\u0621 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0627\\u0644\\u0633\\u064a\\u062f \\u062d\\u0633\\u0627\\u0646\\u064a\\u0646 . ( \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0640  \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0639\\u0636\\u0648\\u064a\\u0629  )\"]', '02:01:00', 'image1611478522.png', 1, '2021-01-24 06:46:43', '2021-01-24 06:55:22'),
(12, '{\"en\":\"Physics\",\"ar\":\"\\u0627\\u0644\\u0641\\u064a\\u0632\\u064a\\u0627\\u0621\"}', '{\"en\":\"Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.\",\"ar\":\"\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.\"}', '[\"Dr. Nasreddin Mahmoud Abdel Rahman. (Physics - Solid State Physics)\"]', '[\"\\u062f\\/ \\u0646\\u0635\\u0631 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0645\\u062d\\u0645\\u0648\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u0631\\u062d\\u0645\\u0646 . ( \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0640  \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0645\\u062f )\"]', '02:00:00', 'image1611478003.png', 1, '2021-01-24 06:46:43', '2021-01-24 06:48:42'),
(13, '{\"en\":\"Math\",\"ar\":\"\\u0627\\u0644\\u0631\\u064a\\u0627\\u0636\\u064a\\u0627\\u062a\"}', '{\"en\":\"<span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.<\\/span>\",\"ar\":\"<p><span style=\\\"font-family: Poppins, Helvetica, sans-serif;\\\">\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.<\\/span><\\/p><p>\\r\\n                <\\/p>\"}', '[\"Dr. Nasreddin Mahmoud Abdel Rahman. (Physics - Solid State Physics)\"]', '[\"\\u062f\\/ \\u0646\\u0635\\u0631 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0645\\u062d\\u0645\\u0648\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u0631\\u062d\\u0645\\u0646 . ( \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0640  \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0645\\u062f )\"]', '02:00:00', 'image1611478290.png', 1, '2021-01-24 06:51:30', '2021-01-25 09:39:46'),
(14, '{\"en\":\"Chemistry\",\"ar\":\"\\u0627\\u0644\\u0643\\u0645\\u064a\\u0627\\u0621\"}', '{\"en\":\"Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.\",\"ar\":\"\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.\"}', '[\"Dr. Sherif Mohamed Abdel-Hamid. (Chemistry - Inorganic Chemistry)\",\"Dr. Aladdin Al-Sayed Hassanein. (Chemistry - Organic Chemistry)\"]', '[\"\\u062f\\/ \\u0634\\u0631\\u064a\\u0641 \\u0645\\u062d\\u0645\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u062d\\u0645\\u064a\\u062f . ( \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0640 \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u063a\\u064a\\u0631 \\u0639\\u0636\\u0648\\u064a\\u0629 )\",\"\\u062f\\/ \\u0639\\u0644\\u0627\\u0621 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0627\\u0644\\u0633\\u064a\\u062f \\u062d\\u0633\\u0627\\u0646\\u064a\\u0646 . ( \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0640  \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0639\\u0636\\u0648\\u064a\\u0629  )\"]', '02:01:00', 'image1611478522.png', 1, '2021-01-24 06:46:43', '2021-01-24 06:55:22'),
(15, '{\"en\":\"Physics\",\"ar\":\"\\u0627\\u0644\\u0641\\u064a\\u0632\\u064a\\u0627\\u0621\"}', '{\"en\":\"Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.\",\"ar\":\"\\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0627\\u0644\\u0645\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0634\\u0627\\u0631\\u064a\\u0639 \\u0647\\u0648 \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u062a\\u0623\\u0637\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a \\u0623\\u062f\\u0627\\u0629 \\u0645\\u0631\\u0646\\u0629 \\u0644\\u0644\\u062a\\u0623\\u0637\\u064a\\u0631.\"}', '[\"Dr. Nasreddin Mahmoud Abdel Rahman. (Physics - Solid State Physics)\"]', '[\"\\u062f\\/ \\u0646\\u0635\\u0631 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0645\\u062d\\u0645\\u0648\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u0631\\u062d\\u0645\\u0646 . ( \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0640  \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0645\\u062f )\"]', '02:00:00', 'image1611478003.png', 1, '2021-01-24 06:46:43', '2021-01-24 06:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `lessons` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `text`, `image`, `lessons`, `created_by`, `created_at`, `updated_at`) VALUES
(3, '{\"en\":\"Basic sciences\",\"ar\":\"\\u0627\\u0644\\u0639\\u0644\\u0648\\u0645 \\u0627\\u0644\\u0623\\u0633\\u0627\\u0633\\u064a\\u0629\"}', '{\"en\":\"<div>The Department of Basic Sciences is considered a supportive and fundamental part of the institute\\u2019s departments, and its main importance lies in providing students with aspects of scientific and linguistic knowledge that they gain from basic science courses:<\\/div><div><br><\\/div><div>&nbsp;(Mathematics - Physics - Engineering Mechanics - Engineering Chemistry) to become competent and highly professional in their various specializations and in line with the programs and plans of the institute, but it aims to raise the level of understanding and comprehension of students in their various specialties to the level that is equivalent to the global level.<\\/div>\",\"ar\":\"\\u064a\\u0639\\u062a\\u0628\\u0631 \\u0642\\u0633\\u0645 \\u0627\\u0644\\u0639\\u0644\\u0648\\u0645 \\u0627\\u0644\\u0623\\u0633\\u0627\\u0633\\u064a\\u0629 \\u0642\\u0633\\u0645\\u0627 \\u0645\\u0633\\u0627\\u0646\\u062f\\u0627\\u064b \\u0648\\u0623\\u0633\\u0627\\u0633\\u064a\\u0627\\u064b \\u0644\\u0623\\u0642\\u0633\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0639\\u0647\\u062f \\u0648\\u062a\\u0643\\u0645\\u0646 \\u0623\\u0647\\u0645\\u064a\\u062a\\u0647 \\u0627\\u0644\\u0623\\u0633\\u0627\\u0633\\u064a\\u0629 \\u0641\\u064a \\u062a\\u0632\\u0648\\u064a\\u062f \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0628\\u062c\\u0648\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0645\\u0639\\u0631\\u0641\\u0629 \\u0627\\u0644\\u0639\\u0644\\u0645\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0644\\u063a\\u0648\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u064a\\u0643\\u062a\\u0633\\u0628\\u0648\\u0646\\u0647\\u0627 \\u0645\\u0646 \\u0645\\u0642\\u0631\\u0631\\u0627\\u062a \\u0627\\u0644\\u0639\\u0644\\u0648\\u0645 \\u0627\\u0644\\u0623\\u0633\\u0627\\u0633\\u064a\\u0629 :\\r\\n\\r\\n (\\u0631\\u064a\\u0627\\u0636\\u064a\\u0627\\u062a \\u2013 \\u0641\\u064a\\u0632\\u064a\\u0627\\u0621 \\u2013 \\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u0627 \\u0647\\u0646\\u062f\\u0633\\u064a\\u0629- \\u0643\\u064a\\u0645\\u064a\\u0627\\u0621 \\u0647\\u0646\\u062f\\u0633\\u064a\\u0647 ) \\u0644\\u064a\\u0635\\u0628\\u062d\\u0648\\u0627 \\u0623\\u0643\\u0641\\u0627\\u0621 \\u0648\\u0630\\u0648 \\u0642\\u062f\\u0631\\u0629 \\u0639\\u0627\\u0644\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0627\\u062d\\u062a\\u0631\\u0627\\u0641 \\u0641\\u064a \\u062a\\u062e\\u0635\\u0635\\u0627\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0645\\u062e\\u062a\\u0644\\u0641\\u0629 \\u0648\\u0628\\u0645\\u0627 \\u064a\\u062a\\u0644\\u0627\\u0621\\u0645 \\u0645\\u0639 \\u0627\\u0644\\u0628\\u0631\\u0627\\u0645\\u062c \\u0648\\u0627\\u0644\\u062e\\u0637\\u0637 \\u0627\\u0644\\u062e\\u0627\\u0635\\u0629 \\u0628\\u0627\\u0644\\u0645\\u0639\\u0647\\u062f \\u060c\\u0625\\u0644\\u0627 \\u0625\\u0646\\u0647 \\u064a\\u0647\\u062f\\u0641 \\u0625\\u0644\\u0649 \\u0631\\u0641\\u0639 \\u0645\\u0633\\u062a\\u0648\\u0649 \\u0641\\u0647\\u0645 \\u0648\\u0627\\u0633\\u062a\\u064a\\u0639\\u0627\\u0628 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628  \\u0641\\u064a \\u062a\\u062e\\u0635\\u0635\\u0627\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0645\\u062e\\u062a\\u0644\\u0641\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0648\\u0649 \\u0627\\u0644\\u0630\\u064a \\u064a\\u0648\\u0627\\u0632\\u064a \\u0627\\u0644\\u0645\\u0633\\u062a\\u0648\\u0649 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\\u064a.\"}', 'image1611409378.png', '[\"2\",\"3\",\"4\"]', 1, '2021-01-21 11:04:20', '2021-01-26 11:56:59'),
(4, '{\"en\":\"civil engineering\",\"ar\":\"\\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629\"}', '{\"en\":\"Graduates who are able to understand the challenges posed by development projects and deal with them, in terms of design and implementation of all development projects that contribute to the development and progress of society. The Civil Engineering Department is working to prepare engineers familiar with modern technology in the field of specialization and who is witnessing continuous development in the scientific and applied field equipped with the foundations of basic sciences And applied according to international standards and the requirements of civil projects to meet the needs of the local and international labor market\",\"ar\":\"\\u0627\\u0644\\u062e\\u0631\\u064a\\u062c\\u064a\\u0646 \\u0627\\u0644\\u0642\\u0627\\u062f\\u0631\\u064a\\u0646 \\u0639\\u0644\\u0649 \\u0641\\u0647\\u0645 \\u0627\\u0644\\u062a\\u062d\\u062f\\u064a\\u0627\\u062a \\u0627\\u0644\\u062a\\u0649 \\u062a\\u0634\\u0643\\u0644\\u0647\\u0627 \\u0645\\u0634\\u0631\\u0648\\u0639\\u0627\\u062a \\u0627\\u0644\\u062a\\u0646\\u0645\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639\\u0647\\u0627\\u060c\\u0645\\u0646 \\u062d\\u064a\\u062b \\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0648\\u0627\\u0644\\u062a\\u0646\\u0641\\u064a\\u0630 \\u0644\\u0643\\u0627\\u0641\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639\\u0627\\u062a \\u0627\\u0644\\u062a\\u0646\\u0645\\u0648\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u0633\\u0627\\u0647\\u0645 \\u0641\\u064a \\u062a\\u0637\\u0648\\u064a\\u0631 \\u0627\\u0644\\u0645\\u062c\\u062a\\u0645\\u0639 \\u0648\\u062a\\u0642\\u062f\\u0645\\u0647 \\u064a\\u0639\\u0645\\u0644 \\u0642\\u0633\\u0645 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0625\\u0639\\u062f\\u0627\\u062f \\u0645\\u0647\\u0646\\u062f\\u0633\\u064a\\u0646 \\u0645\\u0644\\u0645\\u064a\\u0646 \\u0628\\u0627\\u0644\\u062a\\u0643\\u0646\\u0648\\u0644\\u064a\\u062c\\u064a\\u0627 \\u0627\\u0644\\u062d\\u062f\\u064a\\u062b\\u0629 \\u0641\\u064a \\u0645\\u062c\\u0627\\u0644 \\u0627\\u0644\\u062a\\u062e\\u0635\\u0635 \\u0648\\u0627\\u0644\\u0630\\u064a \\u064a\\u0634\\u0647\\u062f \\u062a\\u0637\\u0648\\u0631 \\u0645\\u0633\\u062a\\u0645\\u0631 \\u0641\\u064a \\u0627\\u0644\\u0646\\u0627\\u062d\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0644\\u0645\\u064a\\u0629\\r\\n\\r\\n\\u0648\\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642\\u064a\\u0629 \\u0645\\u0632\\u0648\\u062f\\u064a\\u0646 \\u0628\\u0623\\u0633\\u0633 \\u0627\\u0644\\u0639\\u0644\\u0648\\u0645 \\u0627\\u0644\\u0623\\u0633\\u0627\\u0633\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0637\\u0628\\u064a\\u0642\\u064a\\u0629 \\u0637\\u0628\\u0642\\u0627 \\u0644\\u0644\\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u062f\\u0648\\u0644\\u064a\\u0629 \\u0648\\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u0645\\u0634\\u0631\\u0648\\u0639\\u0627\\u062a \\u0627\\u0644\\u0645\\u062f\\u0646\\u064a\\u0629 \\u0628\\u0645\\u0627 \\u064a\\u0644\\u0628\\u064a \\u0627\\u062d\\u062a\\u064a\\u0627\\u062c\\u0627\\u062a \\u0633\\u0648\\u0642 \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0627\\u0644\\u0645\\u062d\\u0644\\u064a \\u0648\\u0627\\u0644\\u062f\\u0648\\u0644\\u0649\"}', 'image1611409447.png', '[\"2\",\"3\",\"4\"]', 1, '2021-01-21 11:23:09', '2021-01-26 11:57:34'),
(5, '{\"en\":\"architecture\",\"ar\":\"\\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0645\\u0627\\u0631\\u064a\\u0629\"}', '{\"en\":\"The Department of Architectural Engineering is the department that specializes in building and reconstruction engineering, starting from designing buildings and units projects of all kinds until it reaches the planning of neighborhoods and whole cities through its various academic specializations, which also represent multiple areas to join the labor market\",\"ar\":\"\\u0642\\u0633\\u0645 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0645\\u0627\\u0631\\u064a\\u0629 \\u0647\\u0648 \\u0627\\u0644\\u0642\\u0633\\u0645 \\u0627\\u0644\\u0630\\u0649 \\u064a\\u062e\\u062a\\u0635 \\u0641\\u0649 \\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0628\\u0646\\u0627\\u0621 \\u0648\\u0627\\u0644\\u062a\\u0639\\u0645\\u064a\\u0631 \\u0628\\u062f\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0645\\u0634\\u0631\\u0648\\u0639\\u0627\\u062a \\u0627\\u0644\\u0645\\u0628\\u0627\\u0646\\u0649 \\u0648\\u0627\\u0644\\u0648\\u062d\\u062f\\u0627\\u062a \\u0628\\u0643\\u0644 \\u0623\\u0646\\u0648\\u0627\\u0639\\u0647\\u0627 \\u062d\\u062a\\u0649 \\u064a\\u0635\\u0644 \\u0625\\u0644\\u0649 \\u062a\\u062e\\u0637\\u064a\\u0637 \\u0627\\u0644\\u0623\\u062d\\u064a\\u0627\\u0621 \\u0648\\u0627\\u0644\\u0645\\u062f\\u0646 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644\\u0629 \\u0648\\u0630\\u0644\\u0643 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u062a\\u062e\\u0635\\u0635\\u0627\\u062a\\u0647 \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u064a\\u0629 \\u0627\\u0644\\u0645\\u062e\\u062a\\u0644\\u0641\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0649 \\u062a\\u0645\\u062b\\u0644 \\u0623\\u064a\\u0636\\u0627 \\u0645\\u062c\\u0627\\u0644\\u0627\\u062a \\u0645\\u062a\\u0639\\u062f\\u062f\\u0629 \\u0644\\u0644\\u0625\\u0644\\u062a\\u062d\\u0627\\u0642 \\u0628\\u0633\\u0648\\u0642 \\u0627\\u0644\\u0639\\u0645\\u0644\"}', 'image1611409477.png', '[\"2\",\"3\",\"4\"]', 1, '2021-01-21 11:31:29', '2021-01-26 11:57:58'),
(6, '{\"en\":\"Mechanical engineering\",\"ar\":\"\\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629\"}', '{\"en\":\"The Mechanical Engineering Department is considered one of the most important departments within the Future Institute, as it is unique in being the only institute in the Delta that includes a mechanical engineering department\\r\\n\\r\\nA cooperation protocol was signed between the Future Higher Institute and the College of Engineering - Mansoura University in the field of exchanging experiences and practical training for students\\r\\n\\r\\nThe department has the distinction of combining mechanical strength engineering, production engineering and mechanical design, so it is a broad field of study that deals with most of the physical matters and materials that can be used mechanically in all respects, which qualifies the institute\\u2019s graduate to work in various fields and many specializations.\",\"ar\":\"\\u064a\\u0639\\u062a\\u0628\\u0631 \\u0642\\u0633\\u0645 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u0643\\u064a\\u0629 \\u0645\\u0646 \\u0623\\u0647\\u0645 \\u0627\\u0644\\u0623\\u0642\\u0633\\u0627\\u0645 \\u062f\\u0627\\u062e\\u0644 \\u0645\\u0639\\u0647\\u062f \\u0627\\u0644\\u0645\\u0633\\u062a\\u0642\\u0628\\u0644 \\u062d\\u064a\\u062b \\u064a\\u0646\\u0641\\u0631\\u062f \\u0628\\u0643\\u0648\\u0646\\u0647 \\u0627\\u0644\\u0645\\u0639\\u0647\\u062f \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0628\\u0627\\u0644\\u062f\\u0644\\u062a\\u0627 \\u0627\\u0644\\u0630\\u064a \\u064a\\u0636\\u0645 \\u0642\\u0633\\u0645\\u0627\\u064b \\u0644\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u0643\\u064a\\u0629\\r\\n\\r\\n\\u0648\\u0642\\u062f \\u062a\\u0645 \\u062a\\u0648\\u0642\\u064a\\u0639 \\u0628\\u0631\\u0648\\u062a\\u0648\\u0643\\u0648\\u0644 \\u062a\\u0639\\u0627\\u0648\\u0646 \\u0628\\u064a\\u0646 \\u0645\\u0639\\u0647\\u062f \\u0627\\u0644\\u0645\\u0633\\u062a\\u0642\\u0628\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0644\\u064a \\u0648 \\u0643\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 - \\u062c\\u0627\\u0645\\u0639\\u0629 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0648\\u0631\\u0629 \\u0641\\u064a \\u0645\\u062c\\u0627\\u0644 \\u062a\\u0628\\u0627\\u062f\\u0644 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0627\\u062a \\u0648\\u0627\\u0644\\u062a\\u062f\\u0631\\u064a\\u0628 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a \\u0644\\u0644\\u0637\\u0644\\u0627\\u0628  \\r\\n\\r\\n\\u0648\\u064a\\u0645\\u062a\\u0627\\u0632 \\u0627\\u0644\\u0642\\u0633\\u0645 \\u0628\\u0623\\u0646\\u0647 \\u064a\\u062c\\u0645\\u0639 \\u0645\\u0627 \\u0628\\u064a\\u0646 \\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0642\\u0648\\u064a \\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0629 \\u0648\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0627\\u062c \\u0648\\u0627\\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u0645\\u064a\\u0643\\u0627\\u0646 \\u0644\\u0630\\u0644\\u0643 \\u0641\\u0647\\u0648 \\u0643\\u0645\\u062c\\u0627\\u0644 \\u062f\\u0631\\u0627\\u0633\\u064a \\u0648\\u0627\\u0633\\u0639 \\u064a\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0639 \\u0645\\u0639\\u0638\\u0645 \\u0627\\u0644\\u0623\\u0645\\u0648\\u0631 \\u0627\\u0644\\u0641\\u064a\\u0632\\u064a\\u0627\\u0626\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0648\\u0627\\u062f \\u0627\\u0644\\u062a\\u0649 \\u064a\\u0645\\u0643\\u0646 \\u0623\\u0646 \\u062a\\u064f\\u0633\\u062a\\u062e\\u062f\\u0645 \\u0645\\u064a\\u0643\\u0627\\u0646\\u064a\\u0643\\u064a\\u0627\\u064b \\u0645\\u0646 \\u0643\\u0644 \\u0627\\u0644\\u0646\\u0648\\u0627\\u062d\\u0649 \\u0645\\u0645\\u0627 \\u064a\\u0624\\u0647\\u0644 \\u062e\\u0631\\u064a\\u062c \\u0627\\u0644\\u0645\\u0639\\u0647\\u062f \\u0644\\u0644\\u0639\\u0645\\u0644 \\u0641\\u064a \\u0645\\u062c\\u0627\\u0644\\u0627\\u062a \\u0645\\u062e\\u062a\\u0644\\u0641\\u0629 \\u0648\\u062a\\u062e\\u0635\\u0635\\u0627\\u062a \\u0639\\u062f\\u064a\\u062f\\u0629\"}', 'image1611668087.png', '[\"2\",\"3\",\"4\"]', 1, '2021-01-21 11:37:16', '2021-01-26 11:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_en` text COLLATE utf8mb4_unicode_ci,
  `time_ar` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_by` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title_en`, `title_ar`, `text_en`, `text_ar`, `time_en`, `time_ar`, `image`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Marathon cycling', 'ماراثون دراجات', 'The Higher Institute for Engineering and Technology in Mansoura held a bicycle marathon for the purpose of developing awareness among students and spreading the cycling culture adopted by the Foundation and presenting it as a solution to overcome traffic problems in Dakahlia, in which about 150 competitors from various colleges of Mansoura University participated in it.', 'ا  اقام معهد المستقبل العالى للهندسه والتكنولوجيا بالمنصوره ماراثون دراجات بغرض تنميه الوعى لدى الطلاب ونشر ثقافه ركوب الدراجات التى تتبناها مؤسسه الرياسه  وتقديمه كحل للتغلب على مشاكل المرور بالدقهليه , وقد شارك فيه نحو 150 متسابقا من مختلف كليات جامعه المنصوره', 'September 23 @ 7:30 Am - 12:00 Am', '23 سبتمبر @ 7:30 صباحًا - 12:00 صباحًا', 'ezgif.com-gif-maker.jpg', 0, NULL, NULL),
(2, 'A trip to El-Rayan Valley and Cairo', 'رحلة إلى وادى الريان والقاهرة', 'The institute organized a trip to Wadi El-Rayan and Cairo, and the number of students participating in the trip was 67 students, the number of supervisors was 3, namely (A- Ahmed Abdel Halim // A- Jihan Shafiq // A- Mona Makawy).', 'قام المعهد بتنظيم رحلة إلى وادى الريان والقاهرة وكان عدد الطلاب المشتركين فى الرحلة 67 طالب  عدد المشرفين 3 وهما ( أ- احمد عبدالحليم // أ- جيهان شفيق // أ- منى مكاوى ) .', 'December 25 @ 8:30 Am - 10:00 Am', '23 ديسمبر @ 7:30 صباحًا - 12:00 صباحًا', 'ezgif.com-gif-maker (1).jpg', 0, NULL, NULL),
(3, 'Football match', 'مبارة كرة قدم', ' Mansoura, Talkha City, Talkha, Dakahlia Governorate, Egypt\r\n', 'المنصورة ، مدينة طلخا ، طلخا ، الدقهلية ، مصر', 'September 25 @ 8:30 Am - 10:00 Am', '25 سبتمبر @ 8:30 صباحًا - 10:00 صباحًا', 'football.jpg', 0, NULL, NULL),
(4, 'Friendship Course matches', 'مبارايات دورة الصداقة', ' Mansoura, Talkha City, Talkha, Dakahlia Governorate, Egypt\r\n', 'المنصورة ، مدينة طلخا ، طلخا ، الدقهلية ، مصر', 'September 25 @ 8:30 Am - 10:00 Am', '25 سبتمبر @ 8:30 صباحًا - 10:00 صباحًا', 'sadaka.jpg', 0, NULL, NULL),
(5, 'Reception for new students', 'حفل استقبال الطلبة الجدد\r\n', ' Mansoura, Talkha City, Talkha, Dakahlia Governorate, Egypt\r\n', 'المنصورة ، مدينة طلخا ، طلخا ، الدقهلية ، مصر', 'September 25 @ 8:30 Am - 10:00 Am', '25 سبتمبر @ 8:30 صباحًا - 10:00 صباحًا', 'reciption.jpg', 0, NULL, NULL),
(6, 'Auto Maintenance Seminar', 'ندوة صيانة السيارات', ' Mansoura, Talkha City, Talkha, Dakahlia Governorate, Egypt\r\n', 'المنصورة ، مدينة طلخا ، طلخا ، الدقهلية ، مصر', 'September 25 @ 8:30 Am - 10:00 Am', '25 سبتمبر @ 8:30 صباحًا - 10:00 صباحًا', 'event.jpg', 0, NULL, NULL),
(7, 'Honoring students who are the top middle school students', 'تكريم الطلبة أوائل الفرقة الإعدادية', 'Location is TBD', 'Location is TBD', '', '', 'event2.jpg', 0, NULL, NULL),
(8, 'A trip to Alexandria, corresponding to Thursday', 'رحلة إلى مدينة الإسكندرية الموافق الخميس', 'Location is TBD\r\n', 'Location is TBD\r\n', '', '', 'event2.jpg', 0, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `lesson`, `doctor_name`, `time`, `created_by`, `created_at`, `updated_at`) VALUES
(2, '{\"en\":\"Maths\",\"ar\":\"\\u0627\\u0644\\u0631\\u064a\\u0627\\u0636\\u064a\\u0627\\u062a\"}', '{\"en\":\"Dr. Hatem Abdel Aziz Al-Ajmi\",\"ar\":\"\\u062f\\/ \\u062d\\u0627\\u062a\\u0645 \\u0639\\u0628\\u062f \\u0627\\u0644\\u0639\\u0632\\u064a\\u0632 \\u0627\\u0644\\u0639\\u062c\\u0645\\u064a\"}', '02:00:00', 1, '2021-01-21 10:54:16', '2021-01-21 10:54:16'),
(3, '{\"en\":\"Physics\",\"ar\":\"\\u0627\\u0644\\u0641\\u064a\\u0632\\u064a\\u0627\\u0621\"}', '{\"en\":\"Dr. Nasreddin Mahmoud Abdel Rahman\",\"ar\":\"\\u062f\\/ \\u0646\\u0635\\u0631 \\u0627\\u0644\\u062f\\u064a\\u0646 \\u0645\\u062d\\u0645\\u0648\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u0631\\u062d\\u0645\\u0646\"}', '02:30:00', 1, '2021-01-21 10:56:21', '2021-01-21 10:56:21'),
(4, '{\"en\":\"Chemistry\",\"ar\":\"\\u0627\\u0644\\u0643\\u064a\\u0645\\u064a\\u0627\\u0621\"}', '{\"en\":\"Dr. Sherif Mohamed Abdel-Hamid\",\"ar\":\"\\u062f\\/ \\u0634\\u0631\\u064a\\u0641 \\u0645\\u062d\\u0645\\u062f \\u0639\\u0628\\u062f \\u0627\\u0644\\u062d\\u0645\\u064a\\u062f\"}', '03:00:00', 1, '2021-01-21 10:57:05', '2021-01-21 10:57:05');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2014_10_12_000000_create_users_table', 2),
(10, '2014_10_12_100000_create_password_resets_table', 2),
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(12, '2019_08_19_000000_create_failed_jobs_table', 2),
(13, '2021_01_05_153436_create_sessions_table', 2),
(14, '2021_01_06_091134_create_icons_table', 2),
(16, '2021_01_18_085021_create_sliders_table', 3),
(18, '2021_01_19_142610_create_teaching_staff_table', 4),
(24, '2021_01_19_142400_create_lessons_table', 5),
(25, '2021_01_19_143153_create_departments_table', 5),
(29, '2021_01_23_110619_create_abouts_table', 7),
(30, '2021_01_23_051742_create_courses_table', 8),
(33, '2021_01_24_105919_create_news_letters_table', 10),
(34, '2021_01_24_091105_create_news_table', 11),
(35, '2021_01_24_140442_create_activities_table', 12),
(40, '2021_01_25_103200_create_events_table', 13),
(41, '2021_01_26_120254_create_contacts_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Just in case\",\"ar\":\"\\u0641\\u0642\\u0637 \\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0648\\u062c\\u0648\\u062f\"}', '{\"en\":\"Just in case there is aJust in case there is anyone looking for it, new expertise to our knowledge base to make you happy as wellnyone looking for it, new expertise to our knowledge base to make you happy as well.\",\"ar\":\"\\u0641\\u0642\\u0637 \\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0648\\u062c\\u0648\\u062f \\u0623\\u064a \\u0634\\u062e\\u0635 \\u064a\\u0628\\u062d\\u062b \\u0639\\u0646\\u0647\\u0627 \\u060c \\u0641\\u0625\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0627\\u0644\\u062c\\u062f\\u064a\\u062f\\u0629 \\u0644\\u0642\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0631\\u0641\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u062a\\u062c\\u0639\\u0644\\u0643 \\u0633\\u0639\\u064a\\u062f\\u064b\\u0627 \\u0623\\u064a\\u0636\\u064b\\u0627.\"}', 1, '2021-01-24 09:28:35', '2021-01-25 09:41:17'),
(2, '{\"en\":\"Officially The Best\",\"ar\":\"\\u0631\\u0633\\u0645\\u064a\\u064b\\u0627 \\u0627\\u0644\\u0623\\u0641\\u0636\\u0644\"}', '{\"en\":\"Just in case there is anyone looking for it, new expertise to our knowledge base to make you happy as well.\",\"ar\":\"\\u0641\\u0642\\u0637 \\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0648\\u062c\\u0648\\u062f \\u0623\\u064a \\u0634\\u062e\\u0635 \\u064a\\u0628\\u062d\\u062b \\u0639\\u0646\\u0647\\u0627 \\u060c \\u0641\\u0625\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0627\\u0644\\u062c\\u062f\\u064a\\u062f\\u0629 \\u0644\\u0642\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0631\\u0641\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u062a\\u062c\\u0639\\u0644\\u0643 \\u0633\\u0639\\u064a\\u062f\\u064b\\u0627 \\u0623\\u064a\\u0636\\u064b\\u0627.\"}', 1, '2021-01-24 09:28:35', '2021-01-25 09:42:46'),
(3, '{\"en\":\"Redesigned Website\",\"ar\":\"\\u0625\\u0639\\u0627\\u062f\\u0629 \\u062a\\u0635\\u0645\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0648\\u0642\\u0639\"}', '{\"en\":\"Just in case there is anyone looking for it, new expertise to our knowledge base to make you happy as well.\",\"ar\":\"\\u0641\\u0642\\u0637 \\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0648\\u062c\\u0648\\u062f \\u0623\\u064a \\u0634\\u062e\\u0635 \\u064a\\u0628\\u062d\\u062b \\u0639\\u0646\\u0647\\u0627 \\u060c \\u0641\\u0625\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0627\\u0644\\u062c\\u062f\\u064a\\u062f\\u0629 \\u0644\\u0642\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0631\\u0641\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u062a\\u062c\\u0639\\u0644\\u0643 \\u0633\\u0639\\u064a\\u062f\\u064b\\u0627 \\u0623\\u064a\\u0636\\u064b\\u0627.\"}', 1, '2021-01-24 09:28:35', '2021-01-25 09:43:42'),
(4, '{\"en\":\"We Are Launching\",\"ar\":\"\\u0646\\u062d\\u0646 \\u0646\\u0646\\u0637\\u0644\\u0642\"}', '{\"en\":\"Just in case there is anyone looking for it, new expertise to our knowledge base to make you happy as well.\",\"ar\":\"\\u0641\\u0642\\u0637 \\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0648\\u062c\\u0648\\u062f \\u0623\\u064a \\u0634\\u062e\\u0635 \\u064a\\u0628\\u062d\\u062b \\u0639\\u0646\\u0647\\u0627 \\u060c \\u0641\\u0625\\u0646 \\u0627\\u0644\\u062e\\u0628\\u0631\\u0629 \\u0627\\u0644\\u062c\\u062f\\u064a\\u062f\\u0629 \\u0644\\u0642\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0631\\u0641\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627 \\u062a\\u062c\\u0639\\u0644\\u0643 \\u0633\\u0639\\u064a\\u062f\\u064b\\u0627 \\u0623\\u064a\\u0636\\u064b\\u0627.\"}', 1, '2021-01-24 09:28:35', '2021-01-25 09:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sales@admin.com', '2021-01-24 09:37:52', '2021-01-24 09:37:52'),
(2, 'admin@admin.com', '2021-01-25 09:23:09', '2021-01-25 09:23:09'),
(3, 'future@gmail.com', '2021-01-26 11:54:04', '2021-01-26 11:54:04'),
(4, 'admin@admin.com', '2021-01-29 19:27:39', '2021-01-29 19:27:39'),
(5, 'author@author.com', '2021-01-29 19:27:49', '2021-01-29 19:27:49'),
(6, 'Test@test.com', '2021-01-30 22:51:31', '2021-01-30 22:51:31');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HNsfNycBMItw6RoGMvjivN3KgByj581MoumjmVpi', NULL, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV2FHMGxzUzdSRUpHeHB3VlZvWE1kS05ZM3ZDbG5YSzVQVzlibEtJaiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovL2xvY2FsaG9zdC9mdXR1cmUvYXIvYWRtaW4iO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMjoiaHR0cDovL2xvY2FsaG9zdC9mdXR1cmUvYXIvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1611401545);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `text`, `image`, `created_by`, `created_at`, `updated_at`) VALUES
(6, '{\"en\":\"Explore your path way. Higher future\",\"ar\":\"\\u0627\\u0633\\u062a\\u0643\\u0634\\u0641 \\u0637\\u0631\\u064a\\u0642\\u0643. \\u0645\\u0633\\u062a\\u0642\\u0628\\u0644 \\u0623\\u0639\\u0644\\u0649\"}', '{\"en\":\"institute of engineering and technology\",\"ar\":\"\\u0645\\u0639\\u0647\\u062f \\u0627\\u0644\\u0647\\u0646\\u062f\\u0633\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0643\\u0646\\u0648\\u0644\\u0648\\u062c\\u064a\\u0627&nbsp;\"}', 'image1611411826.jpeg', 1, '2021-01-19 08:27:40', '2021-01-23 12:23:46'),
(7, '{\"en\":\"because of the current situation of COVID-19\",\"ar\":\"\\u0628\\u0633\\u0628\\u0628 \\u0627\\u0644\\u0648\\u0636\\u0639 \\u0627\\u0644\\u062d\\u0627\\u0644\\u064a \\u0644\\u0640 COVID-19\"}', '{\"en\":\"the courses will be offered ONLY online until Other instructions issued\",\"ar\":\"\\u0633\\u064a\\u062a\\u0645 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u062f\\u0648\\u0631\\u0627\\u062a \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a \\u0641\\u0642\\u0637 \\u062d\\u062a\\u0649 \\u064a\\u062a\\u0645 \\u0625\\u0635\\u062f\\u0627\\u0631 \\u062a\\u0639\\u0644\\u064a\\u0645\\u0627\\u062a \\u0623\\u062e\\u0631\\u0649&nbsp;\"}', 'image1611411855.jpg', 1, '2021-01-19 08:32:08', '2021-01-23 12:24:15'),
(8, '{\"en\":\"Welcome to Higher Future Institute\",\"ar\":\"\\u0645\\u0631\\u062d\\u0628\\u0627 \\u0628\\u0643\\u0645 \\u0641\\u064a \\u0645\\u0639\\u0647\\u062f \\u0627\\u0644\\u0645\\u0633\\u062a\\u0642\\u0628\\u0644 \\u0627\\u0644\\u0639\\u0627\\u0644\\u064a\"}', '{\"en\":\"Start a successful professional career here\",\"ar\":\"\\u0627\\u0628\\u062f\\u0623 \\u0645\\u0633\\u064a\\u0631\\u0629 \\u0645\\u0647\\u0646\\u064a\\u0629 \\u0646\\u0627\\u062c\\u062d\\u0629 \\u0647\\u0646\\u0627\"}', 'image1611411893.jpeg', 1, '2021-01-19 09:22:46', '2021-01-23 12:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_staff`
--

CREATE TABLE `teaching_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` tinyint(4) NOT NULL,
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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'future', 'future@gmail.com', NULL, '$2y$10$TjYKNlbaOHdIriea2gdOf.S6oB313UMSKBmVzBqF5vn/780Vodcna', NULL, NULL, NULL, NULL, NULL, '2021-01-18 08:08:44', '2021-01-18 08:08:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_created_by_index` (`created_by`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_created_by_index` (`created_by`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_created_by_index` (`created_by`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_created_by_index` (`created_by`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_created_by_index` (`created_by`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_created_by_index` (`created_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_created_by_index` (`created_by`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 07:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uccility_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `session_id` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `isActivated` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`session_id`, `email`, `token`, `isActivated`, `created_at`) VALUES
('SapgArI0aNfcGtFXvsJfs5RZx5LEMn1uqQfeKVc7', 'e.loquine00@gmail.com', '$2y$10$OXWQnRra17SenT/z5y7FcOJUX7KVDz0cvBtdEuDHJYFXPVfdmrQLW', 0, '2017-10-11 17:56:50'),
('SapgArI0aNfcGtFXvsJfs5RZx5LEMn1uqQfeKVc7', 'e.loquine00@gmail.com', '$2y$10$/6JjfV8lDGbq1JlzDN8JfOv//6XMPIHh71KNf5GjFm1/zXo8Jqrz2', 0, '2017-10-11 17:58:08'),
('SapgArI0aNfcGtFXvsJfs5RZx5LEMn1uqQfeKVc7', 'e.loquine00@gmail.com', '$2y$10$JXDlnEJ5ZI/jkdFtOcE7fuWn4JWuVbvcDLhF5hPDRhPo7dRaWYtAC', 0, '2017-10-11 17:58:49'),
('SapgArI0aNfcGtFXvsJfs5RZx5LEMn1uqQfeKVc7', 'e.loquine00@gmail.com', '$2y$10$hL8XrbBy.9UFJuayc5Gvze3hHhMdSghvfiWubxNe7FAB8YNxAS1lq', 0, '2017-10-11 17:59:50'),
('SapgArI0aNfcGtFXvsJfs5RZx5LEMn1uqQfeKVc7', 'e.loquine00@gmail.com', '$2y$10$uXMC.3cRUot48YWbh04wLO3J2DNxF.V5iPI05LpppbSdoI/AlExJ6', 0, '2017-10-11 18:00:09'),
('SapgArI0aNfcGtFXvsJfs5RZx5LEMn1uqQfeKVc7', 'e.loquine00@gmail.com', '$2y$10$bQ88RaRvdF5YVIyEQ8t/JOTVV0Awo.kxDM1mKa55uwBqXMsPHgVOm', 0, '2017-10-11 18:00:54'),
('SapgArI0aNfcGtFXvsJfs5RZx5LEMn1uqQfeKVc7', 'e.loquine00@gmail.com', '$2y$10$1bkIti6EjyaIHSpWFoGR1uDGyR6Fu4yFPnjugaMIUgE1XbCb7ImVW', 0, '2017-10-11 18:05:30'),
('swlyaHlgcobVKu1sjlslJcpnC2hTKn4DUqjy8I4r', 'e.loquine00@gmail.com', 'eBOfkaUCKi7pitTUf2IsyCtT33Xaij', 0, '2017-10-11 23:23:44'),
('swlyaHlgcobVKu1sjlslJcpnC2hTKn4DUqjy8I4r', 'e.loquine00@gmail.com', 'EBzTwiTgFSqhnULxM9WAOtpYsvNx6KGKDd8eY3R62Zswd52lVt', 0, '2017-10-12 00:08:03'),
('swlyaHlgcobVKu1sjlslJcpnC2hTKn4DUqjy8I4r', 'e.loquine00@gmail.com', 'PZXetHo5CpLjQHoS3KFEO7s1mP3UaDSPDaDqjtWzkKOcCQOf7R', 0, '2017-10-12 00:57:02'),
('qWwMJBj8tSux9lDB8pYMMpMR82kzIjc8qRe4kgZv', 'e.loquine00@gmail.com', '30tiq4RI3WCRGlrVoF8Q2yCGUyaw14oRqhhfhSmUbngZvCLC2l', 0, '2017-10-12 04:41:45'),
('V6yOfsP6LWOHRybTZazJW69BzAWI1WbL14f4SF5k', 'e.loquine00@gmail.com', 'OMlW5CTlY2VKM2arXxAB2AYwmrY3CKYaxH2JESfR3IGMYwxu0L', NULL, '2017-10-12 08:25:40'),
('V6yOfsP6LWOHRybTZazJW69BzAWI1WbL14f4SF5k', 'e.loquine00@gmail.com', 'RHvYf6i3gxm4OllHgyjyBVOCV2NDqL5a6cF9PUbD2eLnggDu2r', NULL, '2017-10-12 08:27:07'),
('V6yOfsP6LWOHRybTZazJW69BzAWI1WbL14f4SF5k', 'e.loquine00@gmail.com', '4dZGxLmmogcqfzwK0fUdgDMia6tBF9QY8aJvSUuB2YgjpoCSK7', NULL, '2017-10-12 08:31:13'),
('V6yOfsP6LWOHRybTZazJW69BzAWI1WbL14f4SF5k', 'e.loquine00@gmail.com', 'FrfKg8GJqg5UQ9GW3pFigI0elWMnVwTXAQXN61qcwjQYz5iYvl', NULL, '2017-10-12 08:33:09'),
('tQt5sloV73zBD5vLaEhoZo04XZNNr4pgIFpevJD5', 'bertlokeen@gmail.com', 'mTfNGcnz1YF6k7oa3rpS1rkDpW9FbsAzyqmbr7T4qSFsFSfPGT', NULL, '2017-11-03 11:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`) VALUES
(1, 'CSD', 'Computer Studies Department'),
(2, 'DoE', 'Department of Education'),
(3, 'DoPS', 'Political Science Department'),
(4, 'PD', 'Psychology Department');

-- --------------------------------------------------------

--
-- Table structure for table `department_heads`
--

CREATE TABLE `department_heads` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_heads`
--

INSERT INTO `department_heads` (`id`, `user_id`, `department_id`) VALUES
(1, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_data`
--

CREATE TABLE `enrollment_data` (
  `id` int(10) NOT NULL,
  `student_number` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `middle_name` varchar(191) NOT NULL,
  `location` varchar(191) NOT NULL,
  `sex` varchar(191) NOT NULL,
  `course` varchar(191) NOT NULL,
  `year` varchar(191) NOT NULL,
  `section` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment_data`
--

INSERT INTO `enrollment_data` (`id`, `student_number`, `last_name`, `first_name`, `middle_name`, `location`, `sex`, `course`, `year`, `section`) VALUES
(1, '20140590', 'Dela Cruz', 'Juan', 'Pedro', 'Congress', 'Male', 'BSCS', '3rd', 'C'),
(2, '20140591', 'Cruz', 'John Daryl', 'Tonyo', 'Camarin', 'Male', 'BSIT', '4th', 'A'),
(3, '20140948', 'Galanaga', 'Mary Grace', 'Alburo', 'Congress', 'Female', 'BSCS', '4th', 'B'),
(4, '20140593', 'Loquine', 'Edilbert', 'Pantajo', 'Congress', 'Male', 'BSCS', '4th', 'C'),
(5, '20140969', 'Coco', 'Jerome', 'Solano', 'Congress', 'Male', 'BSCS', '4th', 'C'),
(6, '20140208', 'Isog', 'Aeron', 'Javier', 'Congress', 'Male', 'BSCS', '4th', 'B'),
(7, '20142841', 'Olazo', 'Krizia Mae', 'Conejos', 'Congress', 'Male', 'BSCS', '4th', 'B'),
(8, '12345', 'qwerty', 'uiop', 'qeqweqw', 'eqweqweqwe', 'Male', 'qewqeq', '1312', 'e'),
(9, '00000', 'Dalisay', 'Rodrigo', 'Martin', 'Camarin', 'Male', 'BSCS', '4th', 'F'),
(10, '911', 'huehue', 'huehuehuehue', 'hue', 'Congress', 'Male', 'BSCS', '3rd', 'D'),
(11, '201405933', 'Loquine', 'Edilbert', 'Pantajo', 'Congress', 'Male', 'BSCS', '4th', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_results`
--

CREATE TABLE `evaluation_results` (
  `id` int(10) NOT NULL,
  `professor_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_results`
--

INSERT INTO `evaluation_results` (`id`, `professor_id`, `student_id`, `question_id`, `rating`) VALUES
(1, 34, 76, 2, 5),
(2, 34, 76, 4, 4),
(3, 34, 76, 1, 4),
(4, 34, 76, 3, 3),
(5, 34, 76, 5, 4),
(6, 34, 76, 6, 5),
(7, 34, 76, 7, 5),
(8, 34, 36, 2, 4),
(9, 34, 36, 4, 5),
(10, 34, 36, 1, 4),
(11, 34, 36, 3, 4),
(12, 34, 36, 5, 4),
(13, 34, 36, 6, 5),
(14, 34, 36, 7, 5),
(15, 34, 16, 1, 4),
(16, 34, 16, 2, 5),
(17, 34, 16, 4, 4),
(18, 34, 16, 3, 4),
(19, 34, 16, 5, 4),
(20, 34, 16, 6, 5),
(21, 34, 16, 7, 5),
(22, 34, 16, 1, 1),
(23, 34, 16, 2, 2),
(24, 34, 16, 4, 3),
(25, 34, 16, 3, 2),
(26, 34, 16, 5, 2),
(27, 34, 16, 6, 3),
(28, 34, 16, 7, 1),
(29, 34, 16, 1, 4),
(30, 34, 16, 2, 3),
(31, 34, 16, 4, 3),
(32, 34, 16, 3, 4),
(33, 34, 16, 5, 5),
(34, 34, 16, 6, 5),
(35, 34, 16, 7, 4),
(36, 34, 16, 1, 5),
(37, 34, 16, 2, 4),
(38, 34, 16, 4, 5),
(39, 34, 16, 3, 5),
(40, 34, 16, 5, 5),
(41, 34, 16, 6, 5),
(42, 34, 16, 7, 4),
(43, 34, 16, 1, 4),
(44, 34, 16, 2, 5),
(45, 34, 16, 4, 4),
(46, 34, 16, 3, 4),
(47, 34, 16, 5, 4),
(48, 34, 16, 6, 5),
(49, 34, 16, 7, 4),
(50, 34, 16, 1, 5),
(51, 34, 16, 2, 5),
(52, 34, 16, 4, 5),
(53, 34, 16, 3, 5),
(54, 34, 16, 5, 5),
(55, 34, 16, 6, 5),
(56, 34, 16, 7, 5),
(57, 34, 16, 1, 5),
(58, 34, 16, 2, 4),
(59, 34, 16, 4, 4),
(60, 34, 16, 3, 4),
(61, 34, 16, 5, 4),
(62, 34, 16, 6, 4),
(63, 34, 16, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_summary`
--

CREATE TABLE `evaluation_summary` (
  `id` int(10) NOT NULL,
  `professor_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `rating_5` int(10) NOT NULL,
  `rating_4` int(10) NOT NULL,
  `rating_3` int(10) NOT NULL,
  `rating_2` int(10) NOT NULL,
  `rating_1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_08_24_234744_laratrust_setup_tables', 1),
(3, '2017_09_13_013637_uccility_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `header` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `creator` varchar(191) NOT NULL,
  `position` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('joemengonzales@gmail.com', '$2y$10$IzjLilVeagUuqQLyXxP34uKlptWUqojERllLYgeynmP/F0.m6Jc4u', '2017-09-15 17:18:55'),
('e.loquine00@gmail.com', '$2y$10$v9Vr8/pRhuUJPDr/OUPed.lhM7rLiTzNFbPA97SBbKXTMra9wNUEO', '2017-10-12 00:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `employment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id`, `department_id`, `user_id`, `employment_status`, `campus`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Part time', 'Camarin', '2017-09-12 20:12:25', '2017-09-12 20:12:25'),
(2, 3, 7, 'Part time', 'Camarin', '2017-09-13 00:32:12', '2017-09-13 00:32:12'),
(3, 1, 8, 'Regular', 'Main', '2017-09-13 00:37:27', '2017-09-13 00:37:27'),
(4, 4, 29, 'Regular', 'Congress', '2017-09-19 07:10:27', '2017-09-19 07:10:27'),
(5, 1, 43, 'Regular', 'Congress', '2017-09-21 21:54:01', '2017-09-21 21:54:01'),
(6, 1, 51, 'Part time', 'Camarin', '2017-10-12 00:55:33', '2017-10-12 00:55:33'),
(7, 1, 52, 'Regular', 'Congress', '2017-11-16 23:00:28', '2017-11-16 23:00:28'),
(8, 1, 53, 'Regular', 'Camarin', '2017-11-16 23:58:31', '2017-11-16 23:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic_id`, `question`, `created_at`, `updated_at`) VALUES
(1, 1, 'He/She demonstrates accurate knowledge of the subject matter.', '2017-11-14 06:37:21', '2017-11-14 06:37:21'),
(2, 1, 'He/She exhibits up-to-date knowledge of the subject matter.', '2017-11-14 06:48:49', '2017-11-14 06:48:49'),
(3, 2, 'He/She follows consistently the course outline/syllabus.', '2017-11-14 06:48:49', '2017-11-14 06:48:49'),
(4, 1, 'He/She cites, relates, ties up present lesson with current issues, trends and developments.', '2017-11-14 06:52:59', '2017-11-14 06:52:59'),
(5, 2, 'He/She states and explains the objectives of the lesson at the start of the class.', '2017-11-14 06:52:59', '2017-11-14 06:52:59'),
(6, 3, 'He/She possesses clear and well-modulated voice.', '2017-11-14 07:00:35', '2017-11-14 07:00:35'),
(7, 4, 'He/She starts and ends classes on time.', '2017-11-14 07:00:35', '2017-11-14 07:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(10) NOT NULL,
  `scale` int(10) NOT NULL,
  `description` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `scale`, `description`) VALUES
(1, 5, 'Outstading'),
(2, 4, 'Above Average'),
(3, 3, 'Average'),
(4, 2, 'Fair'),
(5, 1, 'Poor');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'Super Admin', NULL, '2017-09-12 18:48:24', '2017-09-12 18:48:24'),
(2, 'registrar', 'Registrar', NULL, '2017-09-12 19:04:57', '2017-09-12 19:04:57'),
(3, 'hr', 'Human Resource', NULL, '2017-09-12 19:06:03', '2017-09-12 19:06:03'),
(4, 'department head', 'Department Head', NULL, '2017-09-13 00:34:28', '2017-09-13 00:34:28'),
(5, 'student', 'Student', NULL, '2017-10-11 20:55:43', '2017-10-11 20:55:43'),
(6, 'professor', 'Professor', NULL, '2017-10-11 20:56:23', '2017-10-11 20:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `type_id`, `user_type`) VALUES
(1, 1, 1, 'App\\User'),
(2, 2, 0, 'App\\User'),
(3, 3, 0, 'App\\User'),
(4, 8, 0, 'App\\User'),
(5, 50, 0, 'App\\User'),
(6, 53, 0, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `student_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`user_id`, `student_number`, `program`, `year`, `section`, `campus`, `status`, `created_at`, `updated_at`) VALUES
(27, '20140590', 'BSCS', '3rd', 'C', 'A', 'Regular', '2017-09-15 13:33:18', '2017-09-15 13:33:18'),
(28, '20140948', 'BSCS', '4th', 'B', 'B', 'Regular', '2017-09-15 17:15:38', '2017-09-15 17:15:38'),
(42, '20140208', 'BSCS', '4th', 'B', 'Congress', 'Regular', '2017-09-21 21:13:54', '2017-09-21 21:13:54'),
(44, '20142841', 'BSCS', '4th', 'B', 'Congress', 'Regular', '2017-09-22 00:31:03', '2017-09-22 00:31:03'),
(45, '20140969', 'BSCS', '4th', 'C', 'Congress', 'Regular', '2017-10-11 16:36:08', '2017-10-11 16:36:08'),
(47, '12345', 'qewqeq', '1312', 'e', 'eqweqweqwe', 'Regular', '2017-10-11 16:57:25', '2017-10-11 16:57:25'),
(48, '00000', 'BSCS', '4th', 'F', 'Camarin', 'Regular', '2017-10-11 20:42:24', '2017-10-11 20:42:24'),
(50, '201405933', 'BSCS', '4th', 'C', 'Congress', 'Regular', '2017-10-12 00:33:20', '2017-10-12 00:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `student_assistants`
--

CREATE TABLE `student_assistants` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `super_admins`
--

CREATE TABLE `super_admins` (
  `id` int(10) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admins`
--

INSERT INTO `super_admins` (`id`, `name`) VALUES
(1, 'Mis Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(10) NOT NULL,
  `description` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Master of the Subject Matter', NULL, NULL),
(2, 'Teaching Skills', NULL, NULL),
(3, 'Communication Skills', NULL, NULL),
(4, 'Classroom Management', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civil_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_status` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `middle_name`, `extension_name`, `gender`, `civil_status`, `date_of_birth`, `place_of_birth`, `email`, `mobile_no`, `current_address`, `permanent_address`, `photo`, `username`, `password`, `log_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Loquine', 'Edilbert', 'Pantajo', NULL, 'Male', 'Single', 'June 20, 1998', 'Batasan Hills Quezon City', 'e.loquine00@gmail.com', '0', 'North Triangle', NULL, 'avatar.png', 'admin', '$2y$10$zFpg3lckCjCsde.MfcsC.eQxU6ENkfP1YFuHZKkAn/XACaA4BVlLq', 0, 'GgbejnzPKRRuLe7yxjGWcD2SBbFtQnRk68T7Ix27y3p5SX9roMAqBNfzmqir', '2017-09-12 18:54:30', '2017-09-22 00:43:48'),
(2, 'De Jesus', 'Rizaldy', NULL, NULL, 'Male', 'Married', 'January 1, 1980', 'Hospital', 'rizaldy@app.com', '09123131', 'Dunno', NULL, 'avatar.png', 'registrar', '$2y$10$svLUtOkYH3y0r50GsyhE/e1gUiM9.7BjfaXNohviWltL1ejMg9uh.', 0, 'tBouHot0vKuIZvbNJrYaUgAkXaz6UkMwKOWHAanWKLhp8e6MP3HPOb4EI5kP', NULL, NULL),
(3, 'Manalo', 'Jose', NULL, NULL, 'Male', 'Married', 'February 27, 1980', 'Hospital', 'humanresource@app.com', '090312313', 'DUnno', NULL, 'avatar.png', 'human_resource', '$2y$10$oHCaY2EmBfRFssCM/bYDOO/glod3h1Whca8r7B3gTJU5RV64Tcx5K', 0, 'KDQcN8uqzQ6wZZZIjuPePtMBebwqOgnANWXUEKTArFxTRiulIcnJVEbFevyl', NULL, NULL),
(4, 'fdsfs', 'sdfs', 'sdfds', 'Jr', 'Male', 'Single', '2017-12-31', 'asfasf', 'sdfsdf@app.com', '9878', 'jkhjkhjkh', 'khlsdvsdgjk', '8ESwxAV6Pp2Ipo68AumOBmKjJOQD0Cjttrx8Wmli.png', 'qwr', '$2y$10$1NObV5SgHgXZJBzTu26T2.cpObpDb3u3aGg0IvJYSiq5GLYO45Vl2', 0, NULL, '2017-09-12 20:09:56', '2017-09-12 20:09:56'),
(6, 'Barrios', 'Joemen', 'Gonzales', '', 'Female', 'Married', '2017-12-31', 'asfasfafa', 'joemen@app.com', '0909090', 'popopop', 'opopopop', 'avatar.png', 'wqrqw', '$2y$10$VghxB0MIKEDVIl/KtTh9IuqYzc4NLvNq9EVBG2y1l.cQ21geJGUU6', 0, NULL, '2017-09-12 20:12:25', '2017-09-12 20:12:25'),
(7, 'Rizal', 'Jose', 'Protacio', NULL, 'Male', 'Single', '2017-12-31', 'Bagumbayan', 'jose@app.com', '23123131', 'Pilipinas', 'Pilipinas', '0hVHvoKMwpV0fEHoPJqDSjcbjXFGo3M9nsjsuU8k.png', 'jose', '$2y$10$.SrbKDgtheZQmwiFQ32hTOkFFPcSEevXwb4DGs/P13FOSmVnxUjla', 0, NULL, '2017-09-13 00:32:11', '2017-09-13 00:32:11'),
(8, 'Theodoro', 'Macaraeg', 'teddy', NULL, 'Male', 'Married', '2017-12-31', 'Dsafasdf', 'tedmac@app.com', '8797897', 'shfsdjfkhj jsadsa asjdasjd', 'asdsa sadsad dsnsads sda', 'W6me9PraFtr3siQoBoNU9dbOo52EHG5kHswiweiG.png', 'tedmac', '$2y$10$T8kaL46EdEX6OgXi3UFsJ.Y3pBKshtjYVA1tABFzjfdUm/V375tt6', 0, 'elHHKgCXXeun7PQYuDGJOAyVqR1DQUIPt03BydpSuOoEYK0YdwtXiJwGCGcV', '2017-09-13 00:37:27', '2017-09-13 00:37:27'),
(27, 'Dela Cruz', 'Juan', 'Pedro', 'Jr', 'Female', 'Single', '2017-12-31', 'sdsaf', 'e.loquine00@gmail.com', 'dsada', 'wqeqwe', 'wqeqwe', NULL, 'bertlokeen', '$2y$10$5XpFJ7AL/f60IK290jg/nux/.OThCpRCcKKmTj0uOfHn9FBsECUqS', 0, NULL, '2017-09-15 13:33:18', '2017-09-15 13:33:18'),
(28, 'Galanaga', 'Mary Grace', 'Alburo', NULL, 'Female', 'Single', '2017-12-31', 'Masbate', 'joemengonzales@gmail.com', '093121231', 'Bagong Silang Ph5', 'Bagong Silang Ph5', NULL, 'joemen', '$2y$10$u9OtI0dcf61FuXM98GEI8elUijxUpfd2d/703ZH8cxH0REKIS.O9i', 0, '5NsrKjFM142HWp1lXzBbS6SYAhrmxRuK8sONNfz5AuLwx9G4aaoEI6A9gECq', '2017-09-15 17:15:36', '2017-09-15 17:15:36'),
(29, 'Decina', 'Francisco', 'Margarret', NULL, 'Female', 'Married', '1982-12-31', 'Philippines', 'francisco@app.com', '09123123131', 'Caloocan City', 'Bagong Silang Ph. 5', '4FoQ0W9ZVFKTJKX6rFgfghW2BHKXZ2hMpMfTa7gr.png', 'francisco', '$2y$10$3a5Mf5a1CoFT8f1Q7ZEYb.t3v56gsVdcaQTF/tH63wGTsFhWa/txC', 0, NULL, '2017-09-19 07:10:27', '2017-09-19 07:10:27'),
(34, 'Coco', 'Jerome', 'Solano', NULL, 'Male', 'Single', '1997-08-25', 'Quezon City', 'cmanlaban@gmail.com', '09123456789', 'Deparo', 'Deparo', NULL, 'jeromecocococo', '$2y$10$fpJcwcIPcBlOi8GyPkpPWeKAUE9GZUOrYsxMrG7ghOrR11F3dBxCW', 0, NULL, '2017-09-19 18:04:04', '2017-09-19 18:04:04'),
(42, 'Isog', 'Aeron', 'Javier', NULL, 'Male', 'Single', '1998-09-28', 'Quezon City', 'e.loquine00@gmail.com', '09123456789', 'Bagong Silang', 'Bagong Silang', NULL, 'aerony', '$2y$10$GJv/zPmrHkYQbtS2w0WUn.0wepm8kwkBcRBfPvbw8Ry.NVuAXYShy', 0, NULL, '2017-09-21 21:13:54', '2017-09-21 21:13:54'),
(43, 'Morales', 'Ryan Kenth', 'Gonzalo', NULL, 'Male', 'Single', '1997-09-22', 'Bagong Silang', 'morales@app.com', '09123456789', 'Bagong Silang', 'Caloocan CIty', 'SAmZBx4hgWFXLXdwmKkW2E18QXPLlmxsr30Im031.png', 'kenth00', '$2y$10$ePV/JmeXUxzlPDdJdsfTN.bXvExEQz4myv61yXjUYQoUJtDItFrGK', 0, NULL, '2017-09-21 21:54:01', '2017-09-21 21:54:01'),
(44, 'Olazo', 'Krizia Mae', 'Conejos', NULL, 'Female', 'Single', '1997-12-06', 'Quezon CIty', 'e.loquine00@gmail.com', '09434921921', 'Bagong Silang', 'Bagong Silang', NULL, 'krizia00', '$2y$10$CmRdXOT3eW5ZycqOE92L2.FVDOLt2Pc5mQRz/IuSUD04ro4tYlyqC', 0, NULL, '2017-09-22 00:31:03', '2017-09-22 00:31:03'),
(45, 'Coco', 'Jerome', 'Solano', NULL, 'Male', NULL, '2017-10-31', 'qweqwewqeeewqeq', 'e.loquine00@gmail.com', '093012312313', 'eqweqweqw', 'gfhfghgfhf', NULL, 'czxczxczxc', '$2y$10$Gzqoq6hpUzDtd3w4OEmt7uLxrCh7TP2VGTj0L0GRc69eK7p1i3w62', 0, NULL, '2017-10-11 16:36:07', '2017-10-11 16:36:07'),
(47, 'qwerty', 'uiop', 'qeqweqw', NULL, 'Male', NULL, '2017-10-27', 'fdsfsdf', 'e.loquine00@gmail.com', '2345323253245', 'eqweqweqw', 'eqweqweq', NULL, 'qweqwe', '$2y$10$THOK3.ScCMYclxK1KKWhnu5VIABLCJOThNPe5aAPkEph631pWPf8a', 0, NULL, '2017-10-11 16:57:25', '2017-10-11 16:57:25'),
(48, 'Dalisay', 'Rodrigo', 'Martin', NULL, 'Male', NULL, '2018-01-05', 'Quezon City', 'e.loquine00@gmail.com', '09212312313', 'Bagong Silang Ph5', 'Caloocan City', NULL, 'publisher', '$2y$10$VwidB4BGbnsT1Wj8gqT1eOKQCVUOd36OyUefr3qB0ek9XUQcZWFL2', 0, '27NlhW1jxWgXBYR5xdaNhoxifjCxctvaQRCW2dDFAFd5TTrHHw3Lxio3gc12', '2017-10-11 20:42:24', '2017-10-11 20:42:24'),
(50, 'Loquine', 'Edilbert', 'Pantajo', NULL, 'Male', NULL, '1998-06-20', 'QC', 'e.loquine00@gmail.com', '32321', 'Bagong Silang', 'Caloocan City', NULL, 'akosibert999', '$2y$10$blwKRrl7LdJpLRAhjN5BSOaea8KxXc5usmjeXLjMzRARSmOR2fhhC', 0, NULL, '2017-10-12 00:33:19', '2017-10-12 00:33:19'),
(51, 'Monzales', 'Neil James', 'Raypan', NULL, 'Male', 'Single', '1991-12-02', 'Quezon City', 'neiljames@gmail.com', '091234566', 'Bagong Silang', 'Bagong SIlang Ph5', 'e0nlYqzRJA4LrwnRvtiRfyw0nQfnbLG8APvfmX9w.jpeg', 'jamesjames', '$2y$10$8.TtrzZWK5fQvobSrmLipuOFGTTymJwzfik.K85RpS3PJzsEP.0sG', 0, NULL, '2017-10-12 00:55:33', '2017-10-12 00:55:33'),
(52, 'qwerty', 'wertyu', 'wertyu', 'Jr', 'Female', 'Married', '2017-12-31', 'wfwerwe', 'awdwq@asda.com', '12312313', 'asdsaf', 'dfdasfa', 'WyBK8xoHgwBDkpqUK6jb0vicIFWsEYI6kWDxJcGB.jpeg', 'testuser', '$2y$10$ffJDkKpaE50Q3JQO9yPLpOT1qr0./gKDqCoEpXkbUUnpvwynn0L/a', 0, 'hDf9n54YOnzs5fu9fItOd7Xkd05RFHMeR4v75jYWWgs0OV679mMgJv8EXPsl', '2017-11-16 23:00:28', '2017-11-16 23:00:28'),
(53, 'velasquez', 'cong', 'kuri', NULL, 'Male', 'Single', '2016-10-30', 'qweqweqeqwe', 'kuricong@app.com', '23213213', 'qweqwe', 'eqweqwe', 'B9jZtENgjMW43p3ufWFpU8M1AfCEs4koq8HzT5aw.jpeg', 'kuricong', '$2y$10$JExdb5iHBPW6M4kk1BowsuzEo8Fl55481/vxkQGh.baFogJg07Ew.', 0, '4iNexdhABFGd1OMBXhisINuaVFFlUPScZcI4Oj7Ekj5NrFttJ0vqcbWw5NLK', '2017-11-16 23:58:31', '2017-11-16 23:58:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coordinators_department_id_foreign` (`department_id`),
  ADD KEY `coordinators_user_id_foreign` (`user_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_heads`
--
ALTER TABLE `department_heads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_heads_department_id_foreign` (`department_id`),
  ADD KEY `department_heads_user_id_foreign` (`user_id`);

--
-- Indexes for table `enrollment_data`
--
ALTER TABLE `enrollment_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_results`
--
ALTER TABLE `evaluation_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_summary`
--
ALTER TABLE `evaluation_summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professors_department_id_foreign` (`department_id`),
  ADD KEY `professors_user_id_foreign` (`user_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programs_department_id_foreign` (`department_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indexes for table `student_assistants`
--
ALTER TABLE `student_assistants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_assistants_department_id_foreign` (`department_id`),
  ADD KEY `student_assistants_user_id_foreign` (`user_id`);

--
-- Indexes for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `department_heads`
--
ALTER TABLE `department_heads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enrollment_data`
--
ALTER TABLE `enrollment_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `evaluation_results`
--
ALTER TABLE `evaluation_results`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `evaluation_summary`
--
ALTER TABLE `evaluation_summary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student_assistants`
--
ALTER TABLE `student_assistants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `super_admins`
--
ALTER TABLE `super_admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD CONSTRAINT `coordinators_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coordinators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_heads`
--
ALTER TABLE `department_heads`
  ADD CONSTRAINT `department_heads_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `department_heads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professors`
--
ALTER TABLE `professors`
  ADD CONSTRAINT `professors_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `professors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_assistants`
--
ALTER TABLE `student_assistants`
  ADD CONSTRAINT `student_assistants_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_assistants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2018 at 03:14 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todotask`
--

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invitations`
--

INSERT INTO `invitations` (`id`, `admin_id`, `worker_id`, `is_accepted`, `created_at`, `updated_at`) VALUES
(6, 2, 6, 1, '2018-06-07 13:07:32', '2018-06-07 13:08:33'),
(7, 2, 5, 1, '2018-06-07 13:08:07', '2018-06-07 13:08:40');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_05_191800_create_tasks_table', 1),
(4, '2018_06_07_040715_create_invitations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `admin_id`, `status`, `content`, `created_at`, `updated_at`) VALUES
(5, 1, NULL, 0, 'Go to Home in 12th June', '2018-06-06 00:25:22', '2018-06-06 06:50:10'),
(6, 1, NULL, 0, 'Organize The Iftar Party', '2018-06-06 00:25:48', '2018-06-06 13:22:43'),
(7, 1, NULL, 0, 'Hellow', '2018-06-06 00:27:18', '2018-06-06 06:48:55'),
(8, 1, NULL, 0, 'ass', '2018-06-06 11:11:13', '2018-06-06 11:11:13'),
(11, 1, NULL, 0, 'Do the Homework', '2018-06-06 13:14:26', '2018-06-06 13:22:39'),
(12, 2, 2, 0, 'Testing Task', '2018-06-21 02:12:20', '2018-06-12 14:29:12'),
(13, 2, NULL, 0, 'Going to home', '2018-06-07 12:20:02', '2018-06-07 14:05:41'),
(14, 2, NULL, 0, 'aaa', '2018-06-07 12:22:58', '2018-06-07 12:22:58'),
(15, 2, NULL, 0, 'new 1as', '2018-06-07 13:17:46', '2018-06-07 14:35:22'),
(16, 6, 2, 0, 'Avijit', '2018-06-07 13:42:05', '2018-06-07 13:42:05'),
(17, 6, 2, 0, 'asas', '2018-06-07 13:51:56', '2018-06-07 13:51:56'),
(18, 2, 5, 0, 'asa', '2018-06-07 13:53:29', '2018-06-07 13:53:29'),
(22, 5, 2, 0, 'new avi', '2018-06-08 03:13:12', '2018-06-08 03:34:20'),
(23, 5, 2, 0, 'aaaa', '2018-06-08 03:15:37', '2018-06-08 03:15:37'),
(24, 6, 2, 0, 'home', '2018-06-08 03:15:54', '2018-06-08 03:15:54'),
(25, 6, 2, 0, 'qqqq', '2018-06-08 03:21:52', '2018-06-08 03:21:52'),
(26, 5, 2, 0, '11111', '2018-06-08 03:22:05', '2018-06-08 03:22:05'),
(27, 2, 6, 0, 'asas', '2018-06-08 03:23:44', '2018-06-08 03:23:44'),
(28, 2, NULL, 0, 'asass', '2018-06-08 03:24:33', '2018-06-08 03:24:33'),
(29, 2, NULL, 0, '432', '2018-06-08 03:24:45', '2018-06-08 03:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'aa@a.a', 'aa@a.a', '$2y$10$XbnqVc6DCHz8EKzUPGtAY.84Nn6ExDyYeWKZlPaLCoP.0m0hv8w/m', 'MuJarz3CrZ5ToUe1NXJRGOo0joSQKhZ8fZ9TaxydxdCO4ztZhCQ9l3k9SK5B', '2018-06-05 13:22:08', '2018-06-05 13:22:08', 0),
(3, 'admin', '019129avijit@gmail.com', '123456', NULL, NULL, NULL, 1),
(4, 'cc@c.c', 'cc@c.c', '$2y$10$Et/u9E30JDwSfB4PKn6UVObO1lQzE1n4q3U7HZ2jdK57hS2mJG18O', 'GRy4RQ6Q38Ybc8oMNqOKg0NkIT8sx1dM9P0ooq71ndMx10eS58dpj1xvUslC', '2018-06-07 00:37:18', '2018-06-07 00:37:18', 0),
(5, 'uu@u.u', 'uu@u.u', '$2y$10$cSK5Y/0LYDdM7d8dO1RGDegB3taulV2p90UnhFgr.LnvmdnnN8oIS', 'GwbPr8hKzmtkgBN6m772cIGY4aBs9wCeONOScsA6op9PVrAD49QTLFmuKxaV', '2018-06-07 12:56:07', '2018-06-07 12:56:07', 0),
(6, 'u1@u.u', 'u1@u.u', '$2y$10$GHo9ycj2x/7lNEEnz0NsUuzcxAmhoAxoX6sWBRFfSEEdXoZiWwMUK', 'Y0pPDf2hcURfgxycOirnCjQZp8ezli7xezAf4ks6aBt8qd31kZC6ryj1z1mJ', '2018-06-07 12:56:40', '2018-06-07 12:56:40', 0),
(7, 'Avijit Biswas', 'avijit@gmail.com', '$2y$10$8MRM7W3FCLvzJ8dmKhW9ieJEbPO4mAJ6k2HEbfrPPOlwyErG2U.c.', 'QSy4Z019bReSYJfwoei1ywSybtyLJD4LwULRBwEar6dHZO5fHzZF1VYXa1jv', '2018-06-08 03:44:02', '2018-06-08 03:44:02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

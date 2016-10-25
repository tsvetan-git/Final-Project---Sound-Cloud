-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concept`
--

-- --------------------------------------------------------

--
-- Структура на таблица `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `on_post` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `from_user` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`id`, `on_post`, `from_user`, `body`, `created_at`, `updated_at`) VALUES
(9, 92, 15, 'fresh mix', '2016-10-19 06:17:42', '2016-10-19 06:17:42'),
(10, 92, 15, 'superb track', '2016-10-19 06:18:03', '2016-10-19 06:18:03'),
(11, 92, 16, 'nope bad track man shame on you ;)', '2016-10-19 06:19:50', '2016-10-19 06:19:50'),
(12, 97, 14, 'super !!', '2016-10-19 06:38:28', '2016-10-19 06:38:28'),
(13, 97, 14, 'top !!', '2016-10-19 06:38:36', '2016-10-19 06:38:36'),
(14, 97, 14, 'Best !!', '2016-10-19 06:38:43', '2016-10-19 06:38:43'),
(15, 97, 15, 'best of the best ', '2016-10-19 06:40:39', '2016-10-19 06:40:39'),
(16, 97, 15, 'wow', '2016-10-19 06:40:43', '2016-10-19 06:40:43'),
(17, 97, 15, 'i lol', '2016-10-19 06:40:49', '2016-10-19 06:40:49'),
(18, 97, 15, 'olo :)', '2016-10-19 06:40:56', '2016-10-19 06:40:56'),
(19, 98, 22, 'super cool', '2016-10-19 08:16:19', '2016-10-19 08:16:19');

-- --------------------------------------------------------

--
-- Структура на таблица `likeables`
--

CREATE TABLE `likeables` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `likeable_id` int(11) NOT NULL,
  `likeable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `likeables`
--

INSERT INTO `likeables` (`id`, `user_id`, `likeable_id`, `likeable_type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(35, 15, 92, 'App\\Post', NULL, '2016-10-19 06:17:13', '2016-10-19 06:17:13'),
(36, 15, 90, 'App\\Post', NULL, '2016-10-19 06:17:18', '2016-10-19 06:17:18'),
(37, 15, 91, 'App\\Post', NULL, '2016-10-19 06:17:24', '2016-10-19 06:17:24'),
(38, 16, 92, 'App\\Post', NULL, '2016-10-19 06:19:14', '2016-10-19 06:19:14'),
(39, 16, 91, 'App\\Post', NULL, '2016-10-19 06:19:16', '2016-10-19 06:19:16'),
(40, 16, 90, 'App\\Post', NULL, '2016-10-19 06:19:23', '2016-10-19 06:19:23'),
(41, 17, 93, 'App\\Post', NULL, '2016-10-19 06:23:56', '2016-10-19 06:23:56'),
(42, 17, 92, 'App\\Post', '2016-10-19 06:28:10', '2016-10-19 06:24:00', '2016-10-19 06:28:10'),
(43, 17, 96, 'App\\Post', NULL, '2016-10-19 06:28:04', '2016-10-19 06:28:04'),
(44, 17, 95, 'App\\Post', NULL, '2016-10-19 06:28:04', '2016-10-19 06:28:04'),
(45, 17, 94, 'App\\Post', NULL, '2016-10-19 06:28:17', '2016-10-19 06:28:17'),
(46, 18, 96, 'App\\Post', NULL, '2016-10-19 06:31:13', '2016-10-19 06:31:13'),
(47, 18, 95, 'App\\Post', NULL, '2016-10-19 06:31:16', '2016-10-19 06:31:16'),
(48, 18, 94, 'App\\Post', NULL, '2016-10-19 06:31:22', '2016-10-19 06:31:22'),
(49, 18, 93, 'App\\Post', NULL, '2016-10-19 06:31:29', '2016-10-19 06:31:29'),
(50, 18, 91, 'App\\Post', NULL, '2016-10-19 06:31:37', '2016-10-19 06:31:37'),
(51, 18, 90, 'App\\Post', NULL, '2016-10-19 06:31:44', '2016-10-19 06:31:44'),
(52, 18, 89, 'App\\Post', NULL, '2016-10-19 06:32:00', '2016-10-19 06:32:00'),
(53, 14, 97, 'App\\Post', NULL, '2016-10-19 06:37:38', '2016-10-19 06:39:02'),
(54, 14, 96, 'App\\Post', NULL, '2016-10-19 06:37:43', '2016-10-19 06:37:43'),
(55, 14, 95, 'App\\Post', NULL, '2016-10-19 06:37:48', '2016-10-19 06:37:48'),
(56, 14, 94, 'App\\Post', NULL, '2016-10-19 06:37:54', '2016-10-19 06:37:54'),
(57, 15, 97, 'App\\Post', NULL, '2016-10-19 06:40:12', '2016-10-19 06:40:12'),
(58, 15, 96, 'App\\Post', NULL, '2016-10-19 06:40:15', '2016-10-19 06:40:15');

-- --------------------------------------------------------

--
-- Структура на таблица `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_16_142031_posts', 1),
('2016_10_16_142040_comments', 1),
('2016_10_16_142314_create_likes_table', 2),
('2016_10_16_145311_create_likeables_table', 3);

-- --------------------------------------------------------

--
-- Структура на таблица `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('amail@abv.bg', '93d3324d5db0ce329ae2e0260af1d6f80b9a63ebf4d3d9e52ec9b93ac5c08114', '2016-10-19 06:36:16');

-- --------------------------------------------------------

--
-- Структура на таблица `playlist`
--

CREATE TABLE `playlist` (
  `user_id` int(11) NOT NULL,
  `track_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `track_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `track_path` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `playlist`
--

INSERT INTO `playlist` (`user_id`, `track_id`, `track_name`, `track_path`) VALUES
(16, '67', 'Voice Accapella mixdown', 'uploads/58073add533ec.mp3'),
(16, '68', 'testing new mixer just for fun', 'uploads/58073b1801195.mp3'),
(16, '69', 'Deep Trance Dance vocal mix', 'uploads/58073b465742d.mp3'),
(16, '67', 'Voice Accapella mixdown', 'uploads/58073add533ec.mp3'),
(16, '68', 'testing new mixer just for fun', 'uploads/58073b1801195.mp3'),
(16, '69', 'Deep Trance Dance vocal mix', 'uploads/58073b465742d.mp3'),
(16, '67', 'Voice Accapella mixdown', 'uploads/58073add533ec.mp3'),
(16, '68', 'testing new mixer just for fun', 'uploads/58073b1801195.mp3'),
(16, '69', 'Deep Trance Dance vocal mix', 'uploads/58073b465742d.mp3'),
(18, '74', 'Slow Piano Mixdown ', 'uploads/58073e04594af.mp3'),
(18, '75', 'Dash berlin live mix from today', 'uploads/58073e34425f3.mp3'),
(15, '62', 'jazz vocal remix', 'uploads/58073985f20f9.mp3'),
(15, '63', 'Piano Prego remix', 'uploads/580739a884ab4.mp3'),
(15, '64', 'Techno logikal dubstep', 'uploads/580739cb29f80.mp3'),
(15, '65', 'dash berlin live mix', 'uploads/580739f436f9e.mp3'),
(15, '66', 'Piano slow track', 'uploads/58073a0c5c0dc.mp3'),
(15, '76', 'Bass Test Sound ', 'uploads/5807401500a7c.mp3'),
(22, '77', 'Song New Remix', 'uploads/580755aada953.mp3'),
(22, '78', 'Summer Remix Song', 'uploads/58075653029cf.mp3'),
(22, '77', 'Song New Remix', 'uploads/580755aada953.mp3'),
(22, '78', 'Summer Remix Song', 'uploads/58075653029cf.mp3');

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `body`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(86, 14, 'ATB piano cover', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/5807388509029.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'atb-piano-cover', 1, '2016-10-19 06:10:35', '2016-10-19 06:10:35'),
(87, 14, 'ATB remix mix down', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/580738b6824cd.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'atb-remix-mix-down', 1, '2016-10-19 06:11:31', '2016-10-19 06:11:31'),
(88, 14, 'vibe style new mix ', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/5807391a6be7e.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'vibe-style-new-mix', 1, '2016-10-19 06:13:03', '2016-10-19 06:13:03'),
(89, 14, 'techno tronik super mix', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/5807393543dba.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'techno-tronik-super-mix', 1, '2016-10-19 06:13:30', '2016-10-19 06:13:30'),
(90, 15, 'jazz vocal remix', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/58073985f20f9.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'jazz-vocal-remix', 1, '2016-10-19 06:14:50', '2016-10-19 06:14:50'),
(91, 15, 'Piano Prego remix', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/580739a884ab4.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'piano-prego-remix', 1, '2016-10-19 06:15:25', '2016-10-19 06:15:25'),
(92, 15, 'Techno logikal dubstep', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/580739cb29f80.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'techno-logikal-dubstep', 1, '2016-10-19 06:15:59', '2016-10-19 06:15:59'),
(93, 16, 'testing new mixer just for fun', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/58073b1801195.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'testing-new-mixer-just-for-fun', 1, '2016-10-19 06:21:40', '2016-10-19 06:21:40'),
(94, 17, 'Cool Piano grande Remix', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/58073c27c6724.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'cool-piano-grande-remix', 1, '2016-10-19 06:26:37', '2016-10-19 06:26:37'),
(95, 17, 'Chill out beat', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/58073bd144b48.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'chill-out-beat', 1, '2016-10-19 06:26:46', '2016-10-19 06:26:46'),
(96, 17, 'Chill out summer beat', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/58073c47ef49e.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'chill-out-summer-beat', 1, '2016-10-19 06:27:56', '2016-10-19 06:27:56'),
(97, 18, 'Slow Piano Mixdown ', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/58073e04594af.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'slow-piano-mixdown', 1, '2016-10-19 06:34:01', '2016-10-19 06:34:01'),
(98, 22, 'Song New Remix', '								<wavesurfer\r\n			                    data-wave-color="#666" data-progress-color="#f60"\r\n			                    data-url="uploads/580755aada953.mp3">\r\n			                    </wavesurfer>\r\n		                    ', 'song-new-remix', 1, '2016-10-19 08:15:04', '2016-10-19 08:15:04');

-- --------------------------------------------------------

--
-- Структура на таблица `track`
--

CREATE TABLE `track` (
  `track_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `track_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `track_path` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `upload_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `track`
--

INSERT INTO `track` (`track_id`, `user_id`, `track_name`, `track_path`, `upload_at`) VALUES
(58, 14, 'ATB piano cover', 'uploads/5807388509029.mp3', '2016-10-19 09:10:29'),
(59, 14, 'ATB remix mix down', 'uploads/580738b6824cd.mp3', '2016-10-19 09:11:18'),
(60, 14, 'vibe style new mix ', 'uploads/5807391a6be7e.mp3', '2016-10-19 09:12:58'),
(61, 14, 'techno tronik super mix', 'uploads/5807393543dba.mp3', '2016-10-19 09:13:25'),
(62, 15, 'jazz vocal remix', 'uploads/58073985f20f9.mp3', '2016-10-19 09:14:45'),
(63, 15, 'Piano Prego remix', 'uploads/580739a884ab4.mp3', '2016-10-19 09:15:20'),
(64, 15, 'Techno logikal dubstep', 'uploads/580739cb29f80.mp3', '2016-10-19 09:15:55'),
(65, 15, 'dash berlin live mix', 'uploads/580739f436f9e.mp3', '2016-10-19 09:16:36'),
(66, 15, 'Piano slow track', 'uploads/58073a0c5c0dc.mp3', '2016-10-19 09:17:00'),
(67, 16, 'Voice Accapella mixdown', 'uploads/58073add533ec.mp3', '2016-10-19 09:20:29'),
(68, 16, 'testing new mixer just for fun', 'uploads/58073b1801195.mp3', '2016-10-19 09:21:28'),
(69, 16, 'Deep Trance Dance vocal mix', 'uploads/58073b465742d.mp3', '2016-10-19 09:22:14'),
(70, 17, 'Chill out beat', 'uploads/58073bd144b48.mp3', '2016-10-19 09:24:33'),
(71, 17, 'Cool Piano grande Remix', 'uploads/58073c27c6724.mp3', '2016-10-19 09:25:59'),
(72, 17, 'Chill out summer beat', 'uploads/58073c47ef49e.mp3', '2016-10-19 09:26:31'),
(73, 17, 'dubstep chill vibes', 'uploads/58073c92b9cfe.mp3', '2016-10-19 09:27:46'),
(74, 18, 'Slow Piano Mixdown ', 'uploads/58073e04594af.mp3', '2016-10-19 09:33:56'),
(75, 18, 'Dash berlin live mix from today', 'uploads/58073e34425f3.mp3', '2016-10-19 09:34:44'),
(76, 15, 'Bass Test Sound ', 'uploads/5807401500a7c.mp3', '2016-10-19 09:42:45'),
(77, 22, 'Song New Remix', 'uploads/580755aada953.mp3', '2016-10-19 11:14:50'),
(78, 22, 'Summer Remix Song', 'uploads/58075653029cf.mp3', '2016-10-19 11:17:39');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','author','subscriber') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'author',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Alexander Petrov', 'amail@abv.bg', '$2y$10$gB1A4xORypL8WjIYKpX.neItpEf3cUnf9rluxOxRmtzV1fDsYY8nG', 'author', 'Xgxtwy3OMdUxxTkvG6LUWiVypayNbuubRQU9vpqE05c98zJ9Ktg58kWR72lL', '2016-10-19 05:59:18', '2016-10-19 08:04:20'),
(15, 'Boian Ivanov', 'bmail@abv.bg', '$2y$10$4/y8dPHB85NuxX36VHrsF.RAhOrkygL/T9VyDudeQS1gEEiUcciRi', 'author', 'qgorDkG2QzSp3fuW6JPIBQSWxoyE4g58vEyyYmNsqBNgJgsMUjMNbAMPZPi2', '2016-10-19 05:59:58', '2016-10-19 07:08:53'),
(16, 'Cvetelina Dimova', 'cmail@abv.bg', '$2y$10$.EQKbJ7NRR3Gmo5QICx6Gu63lE3Ufwavk2SWpJyznkYzV5keFyK3a', 'author', 'o2akLOQDh23bqSPRGwgIWl7K8eZNesVxdeoZM6bymsQroWkoaKB3IvefsxhD', '2016-10-19 06:00:48', '2016-10-19 06:23:14'),
(17, 'Daniela Dimitrova', 'dmail@abv.bg', '$2y$10$9viRMPh/z11.TtEIPffnU.bpg52zoC31qOfuqKKTYQj2yiV/UvWmK', 'author', '3rkZeDwF1Li6kIlJYVW5oP3Y8s0HqbqBut5UwTcEcnkIXbQnsLYNAhdlvc3Z', '2016-10-19 06:01:27', '2016-10-19 06:30:17'),
(18, 'Elena Petrova', 'email@abv.bg', '$2y$10$SIpEfhxKo/N8o69QhUyrHOsDqjW.nmtU2KxPnaZ8nl3MIXElnI2ku', 'author', 'crHogWFlgEu8RmBJL5A7sHuc5lZ1psb8ET0NT7cjO6kvZxyGm0kaQz1akbXT', '2016-10-19 06:01:59', '2016-10-19 06:35:24'),
(19, 'Filip Kostadinov', 'fmail@abv.bg', '$2y$10$rBYXb8i/4Bdq1VPU1C8bq.ZzKmHHSOCQrmVGdyeo4Z6DlJa2dWnhO', 'author', 'WrNeQTHyNCHIov79jFGvdo3MSeOsYktVLYjMoZqEOWQS82E5nMc4Rningj0H', '2016-10-19 06:02:38', '2016-10-19 06:02:42'),
(20, 'Georgi Hristov', 'gmail@abv.bg', '$2y$10$4o7KXuDuOP3ToqcA4/v50ezcroF8q9WYLB0JKUVOAxN94p6WhqT0e', 'author', 'ZjwQBfFVSwaZ4MFyj8WEydNouDmd9XnEjRi01IpUoWFuYHFXDY3PcPzhEjjo', '2016-10-19 06:03:19', '2016-10-19 06:03:21'),
(21, 'Hristina Hristova', 'hmail@abv.bg', '$2y$10$hqNcTdXEZaXMkjyGSwhq7eBF9WE7lcu6WjHvfC5yAqtLRyj8DweKC', 'author', 'YPwNK0E775onra4BlTRJB7GnpY7xRFfE1ChEo0OnOLih425YJy1gVCvjBteO', '2016-10-19 06:04:04', '2016-10-19 06:04:11'),
(22, 'iana Yakimova', 'zmail@abv.bg', '$2y$10$VO/KHwJ5Xj95XIygFojr3.EHNwB.boHVQY.8Q7PuZpihmgbhoRcgC', 'author', NULL, '2016-10-19 08:13:42', '2016-10-19 08:13:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_on_post_foreign` (`on_post`),
  ADD KEY `comments_from_user_foreign` (`from_user`);

--
-- Indexes for table `likeables`
--
ALTER TABLE `likeables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`),
  ADD UNIQUE KEY `track_track_id_unique` (`track_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `likeables`
--
ALTER TABLE `likeables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `track_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

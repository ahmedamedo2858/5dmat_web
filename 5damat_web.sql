-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 11:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dos`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `meta_keywords`, `meta_des`, `created_at`, `updated_at`) VALUES
(1, 'dolore', 'Miss Briana Jakubowski II', 'Max Effertz', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(2, 'rem', 'Gerald Lubowitz DDS', 'Ms. Wava Altenwerth', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(3, 'minima', 'Obie King I', 'Sanford Wintheiser', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(4, 'autem', 'Miss Caitlyn Gerlach', 'Mr. Santino Ullrich DVM', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(5, 'eos', 'Jeremie Bartoletti', 'Kailee Hauck', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(6, 'consequatur', 'Kaden Schaden', 'Prof. Jewell Bauch Jr.', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(7, 'odio', 'Mr. Kiel Koss', 'Shad Prosacco', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(8, 'voluptas', 'Mr. Norberto Schmidt III', 'Maurine Kris', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(9, 'officia', 'Ms. Kaelyn Lang', 'Ms. Queen Boyer PhD', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(10, 'facere', 'Prof. Kellie Hane', 'Aaliyah Fahey Sr.', '2020-07-17 14:06:26', '2020-07-17 14:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `video_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Magni eaque et doloribus esse distinctio natus et velit. Assumenda adipisci tempora corrupti quaerat nobis id voluptatibus. Sit aut id harum autem fuga tenetur quasi dicta. Omnis officiis pariatur recusandae eum.', '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(2, 1, 2, 'Natus consequatur dolorem nulla inventore incidunt. Nobis necessitatibus nesciunt repellat est non nesciunt.', '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(3, 1, 7, 'Debitis eveniet blanditiis eum ut voluptatem distinctio. Omnis enim quaerat voluptatem nulla ipsam quisquam. Voluptas molestiae voluptatem aliquam. Ut animi et ducimus neque sint.', '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(4, 1, 4, 'Laudantium voluptatibus quae dolorum beatae quas vero amet. Quam qui accusantium fuga ratione voluptas. Eveniet non sunt facere nemo possimus facilis. Dolorum quas ut libero quia et aut laudantium.', '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(5, 1, 5, 'Enim animi mollitia molestiae sequi. Molestiae minima enim asperiores vel hic et. Voluptas blanditiis velit corrupti illo porro ex quos. Quisquam et soluta nihil impedit.', '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(6, 1, 8, 'Necessitatibus occaecati enim beatae qui sed. Et rem laboriosam minima repudiandae consequuntur autem. Blanditiis quia quis nihil laborum doloribus vel esse.', '2020-07-17 14:06:30', '2020-07-17 14:06:30'),
(7, 1, 1, 'Et impedit sit reiciendis qui. Velit et reprehenderit quibusdam et consequuntur veniam nihil dolores. Enim natus non rerum est.', '2020-07-17 14:06:30', '2020-07-17 14:06:30'),
(8, 1, 9, 'Ea dolores rerum explicabo quo. Ut illum voluptates aspernatur veritatis incidunt voluptatem in. Illo ea dicta sed accusamus blanditiis corrupti fugiat eos.', '2020-07-17 14:06:30', '2020-07-17 14:06:30'),
(9, 1, 4, 'Est aut saepe aperiam et molestiae. Quis totam quia corporis tempora. Repudiandae ut omnis ipsum possimus consequatur.', '2020-07-17 14:06:30', '2020-07-17 14:06:30'),
(10, 1, 9, 'Sit reprehenderit tenetur numquam beatae repellendus. Dolorum aut itaque amet. Qui omnis dolores sit nisi dolore sed et.', '2020-07-17 14:06:30', '2020-07-17 14:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'admin@websit.com', 'messagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessagemessage', '2020-07-17 15:01:27', '2020-07-17 15:01:27');

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
(3, '2020_06_08_165948_create_categories_table', 1),
(4, '2020_06_09_124633_create_skills_table', 1),
(5, '2020_06_09_151442_create_tags_table', 1),
(6, '2020_06_10_071310_create_pages_table', 1),
(7, '2020_06_10_102615_create_videos_table', 1),
(8, '2020_06_16_231420_create_skills_videos_table', 1),
(9, '2020_06_19_040227_create_tags_videos_table', 1),
(10, '2020_07_01_041305_create_comments_table', 1),
(11, '2020_07_12_034157_add_group_to_users_tabel', 1),
(12, '2020_07_13_052811_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'et', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(2, 'aut', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(3, 'dolore', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(4, 'non', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(5, 'rerum', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(6, 'vel', '2020-07-17 14:06:28', '2020-07-17 14:06:28'),
(7, 'rerum', '2020-07-17 14:06:28', '2020-07-17 14:06:28'),
(8, 'corporis', '2020-07-17 14:06:28', '2020-07-17 14:06:28'),
(9, 'qui', '2020-07-17 14:06:28', '2020-07-17 14:06:28'),
(10, 'ut', '2020-07-17 14:06:28', '2020-07-17 14:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `skills_videos`
--

CREATE TABLE `skills_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` int(11) NOT NULL,
  `Video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'magni', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(2, 'est', '2020-07-17 14:06:26', '2020-07-17 14:06:26'),
(3, 'itaque', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(4, 'ipsum', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(5, 'dolorem', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(6, 'sed', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(7, 'illo', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(8, 'eius', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(9, 'optio', '2020-07-17 14:06:27', '2020-07-17 14:06:27'),
(10, 'saepe', '2020-07-17 14:06:27', '2020-07-17 14:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `tags_videos`
--

CREATE TABLE `tags_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` int(11) NOT NULL,
  `Video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `group`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$dtJ./KWbOORg5oCGkecYLOHwVIy2YzqIi.atLSRrTTRoO4jDfVSJ.', NULL, '2020-07-17 14:06:24', '2020-07-17 14:06:24', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `meta_keywords`, `meta_des`, `des`, `youtube`, `published`, `image`, `cat_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'dolorem', 'Felton Cronin', 'Alfredo Mann', 'Asperiores provident ipsum minima tempore. Necessitatibus amet aut necessitatibus. Minus expedita sequi optio natus assumenda. Odio voluptatem earum et neque ipsa laudantium quo. Rerum perferendis sit sapiente laudantium nihil eum.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 0, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:28', '2020-07-17 14:06:28'),
(2, 'amet', 'Lucile Deckow', 'Miss Eden Cole', 'Suscipit et qui recusandae similique voluptas laboriosam. Autem aliquid sit quia placeat ducimus. Est fugit explicabo quia nobis hic. Eos odio id in voluptates.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 0, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:28', '2020-07-17 14:06:28'),
(3, 'rerum', 'Desiree Rohan', 'Dr. Armani Jacobson V', 'Officiis non explicabo repellendus cumque quia enim. Suscipit odit itaque corrupti aut eum. Suscipit voluptate atque quae impedit amet incidunt laudantium voluptatem. Architecto repudiandae in velit.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 1, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:28', '2020-07-17 14:06:28'),
(4, 'consequatur', 'Hailee DuBuque', 'Prof. Olaf Dibbert', 'Fugiat necessitatibus non et est quod quas nostrum sequi. Est voluptatem sit alias ut modi. Et est dolor qui voluptas dolorum atque error nam.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 1, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:28', '2020-07-17 14:06:28'),
(5, 'minus', 'Dr. Alexandro Lehner', 'Ms. Viva Bergstrom DDS', 'Qui quis deserunt quo molestias delectus sint. Itaque corporis velit ex aut ea ut. Ad aut ipsa consectetur beatae minus quia sed commodi. Quisquam quaerat voluptatem molestiae.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 1, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(6, 'facilis', 'Mr. Wilber Franecki', 'Daphney Moen', 'Et sit porro unde occaecati. Qui nemo nisi recusandae dicta.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 1, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(7, 'rerum', 'Vince Dietrich', 'Mrs. Neoma Dach', 'Ipsam provident et non dicta possimus non pariatur nam. Sit ut enim minima vel. Accusantium mollitia et ut omnis ut. Vitae necessitatibus ipsum unde quo architecto nemo.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 0, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(8, 'laudantium', 'Dr. Richie Effertz', 'Miss Brianne O\'Keefe', 'Omnis debitis ratione et. Labore ut qui quasi inventore enim. Distinctio placeat est voluptatem cum.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 0, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(9, 'distinctio', 'Brenden Marvin I', 'Carlie Cruickshank', 'Officia qui modi nihil hic omnis quasi. Iusto sit accusamus id molestiae quidem. Laudantium beatae perferendis necessitatibus aliquid sed. Fugiat saepe modi est nesciunt assumenda veniam.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 0, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:29', '2020-07-17 14:06:29'),
(10, 'assumenda', 'Mr. Gaetano Rutherford', 'Guido Wuckert DVM', 'Omnis repellendus ullam reprehenderit voluptates ab. Dolor blanditiis tenetur consectetur qui.', 'https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs', 1, '1592794120xkQq680Ovg.jpg', 1, 1, '2020-07-17 14:06:29', '2020-07-17 14:06:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_videos`
--
ALTER TABLE `skills_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags_videos`
--
ALTER TABLE `tags_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skills_videos`
--
ALTER TABLE `skills_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags_videos`
--
ALTER TABLE `tags_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 08:30 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diplom`
--

-- --------------------------------------------------------

--
-- Table structure for table `common_settings`
--

CREATE TABLE IF NOT EXISTS `common_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Название элемента',
  `value` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `download_profiles`
--

CREATE TABLE IF NOT EXISTS `download_profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_student` int(11) NOT NULL,
  `pasport` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diplom` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ident_code` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diplom_compl` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `certificate` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `health_book` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `download_profiles`
--

INSERT INTO `download_profiles` (`id`, `id_student`, `pasport`, `diplom`, `ident_code`, `diplom_compl`, `certificate`, `health_book`, `foto`, `created_at`, `updated_at`) VALUES
(6, 2, NULL, NULL, 'public/uploads/tmp20191004082806.jpg', NULL, NULL, NULL, 'public/uploads/tmp20191020172945.JPG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formsnights`
--

CREATE TABLE IF NOT EXISTS `formsnights` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `diagnoses` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `num_card` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Номер стац карты',
  `apdate` date NOT NULL COMMENT 'Дата начала и конца',
  `fio` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Фио больного',
  `work` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Що робив',
  `station` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Місце роботи',
  `id_student` int(11) NOT NULL COMMENT 'Код студента',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `formspracticedays`
--

CREATE TABLE IF NOT EXISTS `formspracticedays` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `get_skills` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `sum_number` int(11) NOT NULL COMMENT 'Кількість',
  `id_student` int(11) NOT NULL COMMENT 'Код студента',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `formssurgeries`
--

CREATE TABLE IF NOT EXISTS `formssurgeries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `viewsurgery` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `num_card` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Номер стац карты',
  `type_work` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Вид работы',
  `id_student` int(11) NOT NULL COMMENT 'Код студента',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `formssurgerydays`
--

CREATE TABLE IF NOT EXISTS `formssurgerydays` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `viewsurgery` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `num_card` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Номер стац карты',
  `type_work` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Вид работы',
  `id_student` int(11) NOT NULL COMMENT 'Код студента',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `get_skills`
--

CREATE TABLE IF NOT EXISTS `get_skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `get_skills` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `sum_number` int(11) NOT NULL COMMENT 'Кількість',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inputforms`
--

CREATE TABLE IF NOT EXISTS `inputforms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `diagnoses` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `num_card` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Номер стац карты',
  `apdate` date NOT NULL COMMENT 'Дата начала и конца',
  `fio` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'НФио больного',
  `id_student` int(11) NOT NULL COMMENT 'Код студента',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inputformsdays`
--

CREATE TABLE IF NOT EXISTS `inputformsdays` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `diagnoses` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `num_card` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Номер стац карты',
  `apdate` date NOT NULL COMMENT 'Дата начала и конца',
  `id_student` int(11) NOT NULL COMMENT 'Код студента',
  `fio` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'НФио больного',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `memorisplans`
--

CREATE TABLE IF NOT EXISTS `memorisplans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Название элемента',
  `value` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_27_174145_create_common_settings_table', 1),
(4, '2019_07_28_083238_create_practice_skills_categories_table', 1),
(5, '2019_07_28_083309_create_operation_skills_categories_table', 1),
(6, '2019_07_29_182458_create_operation_skills_table', 1),
(7, '2019_07_29_182526_create_practice_skills_table', 1),
(8, '2019_07_30_182249_create_inputforms_table', 1),
(9, '2019_08_01_074138_create_topclasses_table', 1),
(10, '2019_08_01_164930_create_pages_table', 1),
(11, '2019_08_06_183255_create_formssurgeries_table', 1),
(12, '2019_08_06_204749_create_get_skills_table', 1),
(13, '2019_08_10_053523_create_memorisplans_table', 1),
(14, '2019_08_30_095555_create_user_profiles_table', 1),
(15, '2019_08_30_095640_create_download_profiles_table', 1),
(16, '2019_09_19_040001_create_inputformsdays_table', 1),
(17, '2019_09_19_082242_create_formssurgerydays_table', 1),
(18, '2019_09_19_091129_create_formspracticedays_table', 1),
(19, '2019_09_20_034309_create_formsnights_table', 1),
(20, '2019_09_20_035400_create_nightworkdays_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nightworkdays`
--

CREATE TABLE IF NOT EXISTS `nightworkdays` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `diagnoses` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `num_card` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Номер стац карты',
  `apdate` date NOT NULL COMMENT 'Дата начала и конца',
  `fio` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Фио больного',
  `work` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Що робив',
  `station` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Місце роботи',
  `id_student` int(11) NOT NULL COMMENT 'Код студента',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `operation_skills`
--

CREATE TABLE IF NOT EXISTS `operation_skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `operation_skills_categories`
--

CREATE TABLE IF NOT EXISTS `operation_skills_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Page title',
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Page slug',
  `content` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Page content',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `practice_skills`
--

CREATE TABLE IF NOT EXISTS `practice_skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) DEFAULT NULL,
  `specify` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `practice_skills_categories`
--

CREATE TABLE IF NOT EXISTS `practice_skills_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `topclasses`
--

CREATE TABLE IF NOT EXISTS `topclasses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Название элемента',
  `value` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cодержимое элемента',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `form` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0' COMMENT '0:student; 1:teacher; 2:manager; 3:root',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `course` int(11) NOT NULL DEFAULT '1' COMMENT '1:day; 2:noday;',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `form`, `email`, `role`, `email_verified_at`, `password`, `course`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'root', '', 'root@mail.com', 3, NULL, '$2y$10$8ZNk49hBEAFWVAewdg9/2e6mvw1F/iddjnoCxCp.Vw4GyfpuwzuKC', 1, 'wmjinUCf2pB8RlVsPywElecvgFAS0V4w9nlZXgq0Gv5LjDv34p4QxHtrxPJn', NULL, NULL),
(2, 'alex', 'очная', 'alex@gmail.com', 0, NULL, '$2y$10$wAx9AbOigXB1DAHWA8dEs.SuHTH.SjhajcqfVecXL507r5WdsOs7W', 1, 'pjFDGFE1YC0kTDdiLx1itdPOWy54PNvBcSFAtxOFj49hZijaO2DBjZqON8iY', '2019-09-23 10:56:03', '2019-09-23 10:56:03'),
(3, 'serg', 'заочная', 'serg@gmail.com', 0, NULL, '$2y$10$H1QEJ9XwJKhPKhM8CozWIOB3dVaqoNDicBBv.IhYwa7rxwDubi446', 2, NULL, '2019-09-23 10:56:43', '2019-09-23 10:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'email',
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surnamefirst` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'фио ранее',
  `fullname_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'фио на англ',
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'проживание студента',
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `village` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `index` int(11) NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apartment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telm` int(11) NOT NULL COMMENT 'тел моб',
  `telc` int(11) NOT NULL COMMENT 'тел дом',
  `country1` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'прописка студента',
  `city1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `village1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `index1` int(11) NOT NULL,
  `adres1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `house1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apartment1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country2` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'родители',
  `city2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `village2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `index2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adres2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel1` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `created_at`, `updated_at`, `user_id`, `email`, `surname`, `name`, `lastname`, `gender`, `surnamefirst`, `fullname_en`, `country`, `city`, `village`, `index`, `adress`, `house`, `apartment`, `telm`, `telc`, `country1`, `city1`, `village1`, `index1`, `adres1`, `house1`, `apartment1`, `country2`, `city2`, `village2`, `index2`, `adres2`, `tel1`) VALUES
(1, '2019-09-22 21:00:00', '2019-10-20 14:28:55', 2, 'alex444@gmail.com', 'surname', 'name', 'lastname', 'Жіноча', 'surname', 'fullname', 'country', 'city', 'village', 14052, 'ch', 'house', '54', 100, 99, 'country1', 'city1', 'village1', 14011, 'adres1', 'house1', 'apartment1', 'country2', 'city2', 'village2', '14034', 'adres2', 101),
(2, '2019-09-23 13:11:57', '2019-09-23 16:21:42', 1, 'alex444@gmail.com', 'surname', 'name', 'lastname', 'Жіноча', 'surnamefirst', 'fullname_en', 'country', 'city', 'village', 14032, 'ch', 'house', '54', 99, 99, 'country1', 'city1', 'village1', 14033, 'adres1', 'house1', 'apartment1', 'country2', 'city2', 'village2', '14034', 'adres2', 100),
(3, '2019-09-23 13:13:27', '2019-09-23 13:13:27', 1, 'alex@gmail.com', 'surname', 'name', 'lastname', 'Чоловіча', 'surnamefirst', 'fullname_en', 'country', 'city', 'village', 14032, 'ch', 'house', '54', 99, 99, 'country1', 'city1', 'village1', 14033, 'adres1', 'house1', 'apartment1', 'country2', 'city2', 'village2', '14034', 'adres2', 100),
(4, '2019-09-23 13:21:38', '2019-09-23 13:21:38', 1, 'alex@gmail.com', 'surname', 'name', 'lastname', 'Чоловіча', 'surnamefirst', 'fullname_en', 'country', 'city', 'village', 14032, 'ch', 'house', '54', 99, 99, 'country1', 'city1', 'village1', 14033, 'adres1', 'house1', 'apartment1', 'country2', 'city2', 'village2', '14034', 'adres2', 100),
(5, '2019-09-23 13:23:08', '2019-09-23 13:23:08', 0, 'alex@gmail.com', 'surname', 'name', 'lastname', 'Чоловіча', 'surnamefirst', 'fullname_en', 'country', 'city', 'village', 14032, 'ch', 'house', '54', 99, 99, 'country1', 'city1', 'village1', 14033, 'adres1', 'house1', 'apartment1', 'country2', 'city2', 'village2', '14034', 'adres2', 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 03, 2022 at 09:26 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'https://laravelnews.imgix.net/images/laravel-featured.png', '2022-05-20 00:00:00', '2022-05-20 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `karma_score` int(11) NOT NULL DEFAULT '0',
  `image_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=1224 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `karma_score`, `image_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 1, 1, '2022-05-20 00:00:00', '2022-05-20 00:00:00', NULL),
(2, '12', 12, 1, '2022-05-20 00:00:00', '2022-05-20 00:00:00', NULL),
(3, '13', 14, 1, '2022-05-20 00:00:00', '2022-05-20 00:00:00', NULL),
(4, '14', 14, 1, '2022-05-20 00:00:00', '2022-05-20 00:00:00', NULL),
(5, '15', 15, 1, '2022-05-20 00:00:00', '2022-05-20 00:00:00', NULL),
(6, '16', 16, 1, '2022-05-20 00:00:00', '2022-05-20 00:00:00', NULL),
(7, '17', 17, 1, '2022-05-20 00:00:00', '2022-05-20 00:00:00', NULL),
(8, '18', 18, 1, '2022-05-20 00:00:00', '2022-05-20 00:00:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

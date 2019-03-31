-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2019 at 07:40 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(3, 'Mobiles'),
(4, 'Laptops'),
(7, 'Video tutorials'),
(8, 'Desktop');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES
(1, 1023564898, 'Sanu', 'signaturecoder', 4, 'snkmr13@gmail.com', 'gmail.com', 'unknown.png', 'This is a demo comment.\r\n', 'approve'),
(2, 1023564898, 'Sanchita', 'ladycoder', 4, 'snkmr13@gmail.com', 'gmail.com', 'unknown.png', 'This is a another demo comment.\r\n', 'approve'),
(3, 1023564898, 'Ramesh', 'ziddicoder', 4, 'snkmr13@gmail.com', 'gmail.com', 'unknown.png', 'This is a another demo comment.\r\n', 'pending'),
(4, 1551442803, 'sanu', 'user', 4, 'dsf@gmail.com', 'bh', 'unknown.png', 'jkbk', 'approve'),
(5, 1551443002, 'sanu', 'user', 4, 'dsf@gmail.com', 'bh', 'unknown.png', 'jkbk', 'pending'),
(6, 1551443095, 'sanu', 'user', 4, 'dsf@gmail.com', 'bh', 'unknown.png', 'jkbk', 'pending'),
(7, 1551443712, 'sanu', 'user', 4, 'dsf@gmail.com', 'bh', 'unknown.png', 'sw', 'pending'),
(8, 1551443727, ' gdfg', 'user', 4, ' fdg', ' ', 'unknown.png', ' dgfg', 'pending'),
(9, 1553320181, 'sanu', 'user', 4, 'snkmr13@gmail.com', 'ffug', 'unknown.png', 'gibgbyhuiniu', 'pending'),
(10, 1553320227, ' sanu', 'user', 4, 'snkmr13@gmail.com', 'kafhs', 'unknown.png', 'my name is khan\r\n ', 'pending'),
(11, 1553320361, ' sanu', 'user', 4, 'snkmr13@gmail.com', 'kafhs', 'unknown.png', 'my name is khan\r\n ', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `post_data` text NOT NULL,
  `view` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `category`, `tags`, `post_data`, `view`, `status`) VALUES
(1, 1457895484, 'How to remove folder from windows', 'Sanu kumar', 'profilePic.jpg', 'banner8.png', 'Video tutorials', ' hindi tutorials, videos, online tutorials', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?', 45, 'publish'),
(2, 1345679890, 'How to rename google website in hindi', 'Ramesh', 'unknown.png', 'banner7.jpg', 'books', 'tutorial, poetry book', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?', 44, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'sanu kumar', 'snkmr13@gmail.com', NULL, NULL, NULL, NULL, '106367391318338751350');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

DROP TABLE IF EXISTS `users_details`;
CREATE TABLE IF NOT EXISTS `users_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `details` text,
  `salt` varchar(255) NOT NULL DEFAULT '$2y$10$quickbrownfoxjumpsover',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`, `details`, `salt`) VALUES
(5, 1552140178, 'sanchita', 'roy', 'roy', 'fdsf', 'technoLogoSmall.png', '$1$9XyaIMLr$dq..PHYy8KEbv6Def1t8X1', 'author', '', '$2y$10$quickbrownfoxjumpsover'),
(6, 1552335710, 'sanu', 'kumar', 'signature', 'sanukmr333@gmail.com', 'technoLogoSmall.png', '$2y$10$quickbrownfoxjumpsoveeIWYZYq2qF9uzDPZ86fdKor7kzYijyti', 'admin', '', '$2y$10$quickbrownfoxjumpsover'),
(9, 1553321061, 'sunny', 'Narayan', 'sunnyn', 'sunnykumar424@gmail.com', 'technoLogoSmall.png', '$2y$10$quickbrownfoxjumpsoveeBQvfaibOXKa5Z4P6ZhUnZKCmB6toBj6', 'author', NULL, '$2y$10$quickbrownfoxjumpsover');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2019 at 12:32 PM
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
  `date` date DEFAULT NULL,
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
(1, '2019-03-31', 'Sanu', 'signaturecoder', 4, 'snkmr13@gmail.com', 'gmail.com', 'unknown.png', 'This is a demo comment.\r\n', 'approve'),
(2, '2019-03-31', 'Sanchita', 'ladycoder', 4, 'snkmr13@gmail.com', 'gmail.com', 'unknown.png', 'This is a another demo comment.\r\n', 'approve'),
(3, '2019-03-31', 'Ramesh', 'ziddicoder', 4, 'snkmr13@gmail.com', 'gmail.com', 'unknown.png', 'This is a another demo comment.\r\n', 'pending'),
(4, '2019-03-31', 'sanu', 'user', 4, 'dsf@gmail.com', 'bh', 'unknown.png', 'jkbk', 'approve'),
(5, '2019-03-31', 'sanu', 'user', 4, 'dsf@gmail.com', 'bh', 'unknown.png', 'jkbk', 'pending'),
(6, NULL, 'sanu', 'user', 4, 'dsf@gmail.com', 'bh', 'unknown.png', 'jkbk', 'pending'),
(7, NULL, 'sanu', 'user', 4, 'dsf@gmail.com', 'bh', 'unknown.png', 'sw', 'pending'),
(8, NULL, ' gdfg', 'user', 4, ' fdg', ' ', 'unknown.png', ' dgfg', 'pending'),
(9, NULL, 'sanu', 'user', 4, 'snkmr13@gmail.com', 'ffug', 'unknown.png', 'gibgbyhuiniu', 'pending'),
(10, NULL, ' sanu', 'user', 4, 'snkmr13@gmail.com', 'kafhs', 'unknown.png', 'my name is khan\r\n ', 'pending'),
(11, NULL, ' sanu', 'user', 4, 'snkmr13@gmail.com', 'kafhs', 'unknown.png', 'my name is khan\r\n ', 'pending');

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
  `date` date DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `category`, `tags`, `post_data`, `view`, `status`) VALUES
(6, '2019-03-30', 'Learning to build cms', 'sanu', 'unknown.png', 'banner7.jpg', 'guitar', 'video tutorials', '', 44, 'publish'),
(7, '2019-03-31', 'Learning to build an online test', 'sunny', 'unknown.png', 'banner8.png', 'guitar', 'video tutorials', '', 50, 'publish');

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
  `date` date DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'unknown.png',
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT 'author',
  `details` text,
  `salt` varchar(255) NOT NULL DEFAULT '$2y$10$quickbrownfoxjumpsover',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`, `details`, `salt`) VALUES
(5, NULL, 'sanchita', 'roy', 'roy', 'fdsf', 'technoLogoSmall.png', '$1$9XyaIMLr$dq..PHYy8KEbv6Def1t8X1', 'author', '', '$2y$10$quickbrownfoxjumpsover'),
(6, NULL, 'sanu', 'kumar', 'signature', 'sanukmr333@gmail.com', 'technoLogoSmall.png', '$2y$10$quickbrownfoxjumpsoveeIWYZYq2qF9uzDPZ86fdKor7kzYijyti', 'admin', '', '$2y$10$quickbrownfoxjumpsover'),
(9, NULL, 'sunny', 'Narayan', 'sunnyn', 'sunnykumar424@gmail.com', 'technoLogoSmall.png', '$2y$10$quickbrownfoxjumpsoveeBQvfaibOXKa5Z4P6ZhUnZKCmB6toBj6', 'admin', NULL, '$2y$10$quickbrownfoxjumpsover'),
(11, NULL, 'shashi', 'kant', 'pathak', 'shashi@gmail.com', 'unknown.png', '$2y$10$quickbrownfoxjumpsovee.6eGmSmNsOUG35.tVMH/qM5vzgs76FG', 'author', NULL, '$2y$10$quickbrownfoxjumpsover'),
(12, NULL, 'ram', 'kumar', 'ramu', 'ram@gmail.com', 'unknown.png', '$2y$10$quickbrownfoxjumpsoveeggQx8s9En/S.kb17IoDT6kp47WDvxRe', 'author', NULL, '$2y$10$quickbrownfoxjumpsover'),
(13, NULL, 'shayam', 'kumar', 'shayma', 'shyam@gmail.com', 'unknown.png', '$2y$10$quickbrownfoxjumpsoveeprg1xz2aNOWxFwbHQ79BaBMdeYrnHXK', 'author', NULL, '$2y$10$quickbrownfoxjumpsover'),
(14, NULL, 'vivek', 'kumar', 'kushwaha', '123@gmail.com', 'passport_size_photo_2_.jpeg', '$2y$10$quickbrownfoxjumpsoveej72VuDqUreNbHwlMG529L8v5MjY7lWq', 'author', NULL, '$2y$10$quickbrownfoxjumpsover'),
(16, '2019-03-31', 'sumeet', 'kumar', 'summet', 'sumit@gmail.com', 'passport_size_photo_2_.jpeg', '$2y$10$quickbrownfoxjumpsoveenTYUuH2MSYrEZdF7FN/IwN6EPrIwuou', 'author', NULL, '$2y$10$quickbrownfoxjumpsover');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

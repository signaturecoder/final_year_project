-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 07:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `post_data` text NOT NULL,
  `view` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `category`, `tags`, `post_data`, `view`, `status`) VALUES
(1, 1457895484, 'How to remove folder from windows', 'Sanu kumar', 'profilePic.jpg', 'banner8.png', 'Video tutorials', ' hindi tutorials, videos, online tutorials', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?', 45, 'publish'),
(2, 1345679890, 'How to rename google website in hindi', 'Ramesh', 'unknown.png', 'banner7.jpg', 'books', 'tutorial, poetry book', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?', 44, 'publish'),
(3, 1457892201, 'How to talk with your teacher', 'Shaunak', 'technoLogo2.png', 'facebookIcon.png', 'books', 'tutorial, guitar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?', 42, 'publish'),
(4, 1457892201, 'How to talk with your teacher', 'Sanchita', 'technoLogo2.png', 'facebookIcon.png', 'books', 'tutorial, guitar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti at, sint neque accusantium laborum, cupiditate quis delectus. Vel quia reprehenderit repellendus quos doloribus esse ducimus corporis id tenetur itaque?', 200, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'sanu kumar', 'snkmr13@gmail.com', NULL, NULL, NULL, NULL, '106367391318338751350');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

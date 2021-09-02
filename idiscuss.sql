-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2020 at 03:31 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_descreption` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_descreption`, `created`) VALUES
(1, 'Python', 'Python is an interpreted, high-level and general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace.', '2020-11-01 22:12:04'),
(2, 'Javascript', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-or', '2020-11-01 22:13:05'),
(3, 'JAVA', 'Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible', '2020-11-02 02:26:12'),
(4, 'PHP', 'PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.', '2020-11-02 02:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `comment_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `thread_id` int NOT NULL,
  `comment_by` int NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'this is a comment', 1, 1, '2020-11-03 18:18:03'),
(2, 'uyfhgdngf', 1, 1, '2020-11-03 19:56:48'),
(3, 'please fix it somebody\r\n', 0, 0, '2020-11-03 20:03:27'),
(23, 'dsdfs', 19, 6, '2020-11-05 00:56:26'),
(22, 'kjndsnjds', 16, 0, '2020-11-05 00:45:29'),
(21, 'kjndsnjds', 16, 0, '2020-11-05 00:42:22'),
(20, 'knzxvlknzlvknzdsdsad', 13, 0, '2020-11-04 17:55:04'),
(19, 'watch utube video', 12, 1, '2020-11-03 23:17:30'),
(18, 'kjsfbkadsjfhasdf', 11, 0, '2020-11-03 22:16:47'),
(24, 'check youtube vidoes', 23, 7, '2020-11-05 01:05:24'),
(25, 'cigaret komai do', 25, 6, '2020-11-06 02:02:16'),
(26, 'mhgvjhfjgvmvnmvnbv', 27, 6, '2020-11-30 02:01:11'),
(27, 'Yes I ahave an internship I can help u', 28, 7, '2020-12-08 23:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `name`, `email`, `contact`, `country`) VALUES
(1, 'asif', 'asifchy@gmail.com', '012345', 'Bangladesh'),
(4, 'asif ', 'asif@asif.com', 'asas', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

DROP TABLE IF EXISTS `threads`;
CREATE TABLE IF NOT EXISTS `threads` (
  `thread_id` int NOT NULL AUTO_INCREMENT,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int NOT NULL,
  `thread_user_id` int NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`thread_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'Unable to install playaudio', 'I am  not able to install .....', 1, 0, '2020-11-02 18:37:18'),
(2, 'assa', 'sa', 1, 0, '2020-11-02 23:50:30'),
(3, 'new titlene', 'new desc', 2, 0, '2020-11-02 23:54:25'),
(4, 'new titlr', 'new dsc', 2, 0, '2020-11-02 23:54:44'),
(5, 'added', 'thanks', 3, 0, '2020-11-03 00:02:19'),
(6, 'HI', 'How are you?\r\n', 2, 0, '2020-11-03 00:41:04'),
(8, '', '', 1, 0, '2020-11-03 17:57:52'),
(9, 'Music', 'I cant play guitar', 1, 0, '2020-11-03 18:35:00'),
(10, 'msmsmsm', 's', 4, 0, '2020-11-03 21:32:01'),
(11, 'Music', 'jhsjdhadsd', 1, 0, '2020-11-03 22:16:36'),
(12, 'Django', 'I cant code', 1, 0, '2020-11-03 23:17:08'),
(13, 'dadkjfnadf', 'fjadnfladnflksdnv', 1, 0, '2020-11-04 17:54:46'),
(14, 'saijclakxnclkznc', 'askcnlkjcn', 1, 0, '2020-11-04 23:59:46'),
(15, 'saijclakxnclkznc', 'askcnlkjcn', 1, 0, '2020-11-05 00:01:01'),
(16, 'wqqqwwqwq', 'qwqwqwqwwqqw', 1, 0, '2020-11-05 00:04:25'),
(17, 'wqqqwwqwq', 'qwqwqwqwwqqw', 1, 0, '2020-11-05 00:05:08'),
(18, 'wqqqwwqwq', 'qwqwqwqwwqqw', 1, 0, '2020-11-05 00:19:13'),
(19, 'wqqqwwqwq', 'qwqwqwqwwqqw', 1, 5, '2020-11-05 00:20:58'),
(20, 'Music', 'dfsefsdfs', 1, 0, '2020-11-05 00:56:16'),
(21, 'Bismilah', 'Allah one', 1, 6, '2020-11-05 01:00:27'),
(22, 'Bismilah', 'Allah one', 1, 6, '2020-11-05 01:02:52'),
(23, 'PHP', 'I want to learn php...........', 4, 8, '2020-11-05 01:04:36'),
(24, 'Music', 'hi all', 2, 6, '2020-11-05 03:36:54'),
(25, 'mukhe ruchi nai', 'khaite parina ami, shokale matro 10ta ruti, ekta murgi, 5 ta dim khai. dupure 1 ta chagol r ek dekshi vat r 1 balti dal. rat a 1 ta goru r 2 drum vat khai. tar por o mukhe ruchi nai. ki kori blen?', 1, 10, '2020-11-06 02:01:27'),
(26, 'sadsad', 'adsassad', 3, 6, '2020-11-23 02:33:18'),
(27, 'jyjfjhgfhgfjg', 'jygjgjhgvjh', 2, 6, '2020-11-30 02:01:04'),
(28, 'Need a internship', 'here is resume.can anyone help me?', 1, 6, '2020-12-08 23:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(9, 'mako@gmail.com', '$2y$10$/Z.5diTqrHC4Bkktc3y4U.4n3IFKixw13cd1oNIngTQ..PUHLhtCK', '2020-11-05 03:57:18'),
(8, 'asifchy@gmail.com', '$2y$10$jCFm.6Amy7RTLXPgfFOo7Oa.knZIeHQ/7VfrFoEao1FoSYkFomQV2', '2020-11-05 01:03:22'),
(6, 'asif@asif.com', '$2y$10$2LNbrCzOERWwog7ZgPvOcePLpRcweE6Nqe78GZjkboxUFZV3CtgZi', '2020-11-04 02:26:35'),
(7, 'limu@limu.com', '$2y$10$MdYmwbNlVKeorxhl0FxK2.Uz4wRQOPG3fHBTQzneQ12BG64GYVBu.', '2020-11-04 17:54:14'),
(10, 'hoo@gmail.com', '$2y$10$jY2f6EIQpCEjeOekjCMiWu3JdSz1P9lvyAs3zWuRKk.8TYcVf9Inm', '2020-11-06 01:59:24'),
(11, 'makko@makko.com', '$2y$10$jyush2hGby0V/4detHQd..Ae5H5pBFH9xUmGxRxzeqgj0YI7yjV8m', '2020-11-08 00:21:32'),
(14, 'maksud@gmail.com', '$2y$10$3PQxpgEIZwz8R1/53ArYougN/BKaU.ytxx5B7LdwkqA6TBE9EW.eC', '2020-11-30 01:45:29'),
(15, 'Rahman@gmail.com', '$2y$10$nwkkjDDV4aF44oz5K8tx7e37T46bSxpWWbrPrYieY0BCQj2DJs1U.', '2020-11-30 01:46:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

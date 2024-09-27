-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2024 at 09:45 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whelps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `act_id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `user_type` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `activity` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`act_id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`act_id`, `image`, `username`, `user_type`, `activity`, `date`) VALUES
(1, NULL, 'techeons', 'admin', 'Added a new pet.', '2024-04-02 13:43:03'),
(2, NULL, 'techeons', 'admin', 'Added a new pet.', '2024-04-02 13:44:56'),
(3, NULL, 'techeons', 'admin', 'Added a new pet.', '2024-04-02 13:49:53'),
(4, NULL, 'techeons', 'admin', 'Added a new pet.', '2024-04-02 13:51:48'),
(5, NULL, 'techeons', 'admin', 'Added a new pet.', '2024-04-02 13:53:59'),
(6, NULL, 'aaaa', 'user', 'Logged in', '2024-04-03 09:33:24'),
(7, NULL, 'a', 'user', 'Logged in', '2024-04-03 10:34:39'),
(8, NULL, 'a', 'user', 'Logged in', '2024-04-03 15:36:19'),
(9, NULL, 'a', 'user', 'Logged in', '2024-04-03 15:40:21'),
(10, NULL, 'techeons', 'admin', 'Logged in', '2024-04-05 05:29:44'),
(11, NULL, 'techeons', 'admin', 'Edited a pet.', '2024-04-05 05:30:17'),
(12, NULL, 'a', 'user', 'Logged in', '2024-04-05 06:10:52'),
(13, NULL, 'techeons', 'admin', 'Logged in', '2024-04-05 06:25:42'),
(14, NULL, 'a', 'user', 'Logged in', '2024-04-05 07:34:30'),
(15, NULL, 'a', 'user', 'Logged in', '2024-04-05 07:55:51'),
(16, NULL, 'aaaa', 'user', 'Logged in', '2024-04-05 09:43:09'),
(17, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:10:23'),
(18, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:14:50'),
(19, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:18:22'),
(20, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:18:29'),
(21, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:19:41'),
(22, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:22:00'),
(23, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:24:22'),
(24, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:24:46'),
(25, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:25:06'),
(26, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:26:32'),
(27, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:26:51'),
(28, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:27:04'),
(29, NULL, 'a', 'user', 'Logged in', '2024-04-05 10:27:26'),
(30, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:17:21'),
(31, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:23:28'),
(32, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:26:11'),
(33, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:26:50'),
(34, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:29:15'),
(35, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:30:34'),
(36, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:30:57'),
(37, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:44:14'),
(38, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:55:00'),
(39, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:56:17'),
(40, NULL, 'a', 'user', 'Logged in', '2024-04-05 13:58:40'),
(41, NULL, 'a', 'user', 'Logged in', '2024-04-05 15:43:48'),
(42, NULL, 'a', 'user', 'Logged in', '2024-04-06 09:11:24'),
(43, NULL, 'a', 'user', 'Logged in', '2024-04-06 14:48:22'),
(44, NULL, 'a', 'user', 'Logged in', '2024-04-06 14:48:44'),
(45, NULL, 'a', 'user', 'Logged in', '2024-04-06 14:56:55'),
(46, NULL, 'a', 'user', 'Logged in', '2024-04-06 14:58:17'),
(47, NULL, 'a', 'user', 'Logged in', '2024-04-06 15:04:47'),
(48, NULL, 'a', 'user', 'Logged in', '2024-04-06 15:05:00'),
(49, NULL, 'a', 'user', 'Logged in', '2024-04-06 15:07:24'),
(50, NULL, 'a', 'user', 'Logged in', '2024-04-06 15:22:38'),
(51, NULL, 'a', 'user', 'Logged in', '2024-04-06 15:26:27'),
(52, NULL, 'a', 'user', 'Logged in', '2024-04-06 15:31:49'),
(53, NULL, 'a', 'user', 'Logged in', '2024-04-06 15:32:22'),
(54, NULL, 'a', 'user', 'Logged in', '2024-04-06 15:32:43'),
(55, NULL, 'a', 'user', 'Logged in', '2024-04-06 15:42:54'),
(56, NULL, 'techeons', 'admin', 'Logged in', '2024-04-09 14:46:54'),
(57, NULL, 'techeons', 'admin', 'Added a new pet.', '2024-04-09 14:48:33'),
(58, NULL, 'techeons', 'admin', 'Logged in', '2024-04-10 02:35:20'),
(59, NULL, 'a', 'user', 'Logged in', '2024-04-10 10:02:02'),
(60, NULL, 'a', 'user', 'Logged in', '2024-04-10 12:34:40'),
(61, NULL, 'a', 'user', 'Logged in', '2024-04-10 12:42:14'),
(62, NULL, 'a', 'user', 'Logged in', '2024-04-10 14:22:27'),
(63, NULL, 'a', 'user', 'Logged in', '2024-04-11 08:58:14'),
(64, NULL, 'a', 'user', 'Logged in', '2024-04-11 13:59:02'),
(65, NULL, 'techeons', 'admin', 'Logged in', '2024-04-18 08:44:32'),
(66, NULL, 'techeons', 'admin', 'Logged in', '2024-04-18 14:21:04'),
(67, NULL, 'techeons', 'admin', 'Logged in', '2024-04-19 14:53:27'),
(68, 'Images/Default.png', 'techeons', 'admin', 'Logged in', '2024-04-21 05:04:11'),
(69, 'Images/Default.png', 'a', 'user', 'Logged in', '2024-04-21 13:55:34'),
(70, 'Images/Default.png', 'techeons', 'admin', 'Logged in', '2024-04-21 16:12:35'),
(71, NULL, 'techeons', 'admin', 'Logged in', '2024-04-21 16:13:03'),
(72, 'Images/Default.png', 'techeons', 'admin', 'Logged in', '2024-06-21 01:11:56'),
(73, 'Images/Default.png', 'a', 'user', 'Logged in', '2024-06-21 01:24:57'),
(74, 'Images/Default.png', 'techeons', 'admin', 'Logged in', '2024-06-21 01:26:29'),
(75, 'Images/Default.png', 'techeons', 'admin', 'Logged in', '2024-07-01 09:07:41'),
(76, 'Images/Default.png', 'techeons', 'admin', 'Logged in', '2024-07-01 10:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `adopters`
--

DROP TABLE IF EXISTS `adopters`;
CREATE TABLE IF NOT EXISTS `adopters` (
  `adopter_id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `date_joined` timestamp NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`adopter_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adopters`
--

INSERT INTO `adopters` (`adopter_id`, `image`, `username`, `first_name`, `last_name`, `age`, `gender`, `email`, `date_joined`, `status`) VALUES
(1, 'Images/user sample.png', 'admin', 'tech', 'eons', 21, 'Male', 'techeons5@gmail.com', '2024-04-09 16:26:35', 'don\'t know');

-- --------------------------------------------------------

--
-- Table structure for table `adoption_history`
--

DROP TABLE IF EXISTS `adoption_history`;
CREATE TABLE IF NOT EXISTS `adoption_history` (
  `adopt_id` int NOT NULL AUTO_INCREMENT,
  `request_id` int NOT NULL,
  `user_id` int NOT NULL,
  `pet_id` int NOT NULL,
  `status` varchar(45) NOT NULL,
  `date_adopted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`adopt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adoption_history`
--

INSERT INTO `adoption_history` (`adopt_id`, `request_id`, `user_id`, `pet_id`, `status`, `date_adopted`) VALUES
(1, 10, 24, 16, 'Adopted', '2024-04-18 13:20:42'),
(2, 9, 24, 16, 'Adopted', '2024-04-18 13:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `adoption_request`
--

DROP TABLE IF EXISTS `adoption_request`;
CREATE TABLE IF NOT EXISTS `adoption_request` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `pet_id` int DEFAULT NULL,
  `agree` int NOT NULL DEFAULT '0',
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `h1` varchar(45) DEFAULT NULL,
  `h2` varchar(45) DEFAULT NULL,
  `h3` varchar(45) DEFAULT NULL,
  `h4` varchar(45) DEFAULT NULL,
  `p1` varchar(45) DEFAULT NULL,
  `p2` varchar(45) DEFAULT NULL,
  `p3` varchar(45) DEFAULT NULL,
  `p4` varchar(45) DEFAULT NULL,
  `c1` varchar(45) DEFAULT NULL,
  `c2` varchar(45) DEFAULT NULL,
  `c3` varchar(45) DEFAULT NULL,
  `c4` varchar(45) DEFAULT NULL,
  `c5` varchar(45) DEFAULT NULL,
  `c6` varchar(45) DEFAULT NULL,
  `stage` varchar(45) NOT NULL DEFAULT '',
  `status` varchar(45) DEFAULT 'Pending',
  `date_submitted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adoption_request`
--

INSERT INTO `adoption_request` (`request_id`, `user_id`, `pet_id`, `agree`, `first_name`, `last_name`, `age`, `gender`, `phone`, `address`, `h1`, `h2`, `h3`, `h4`, `p1`, `p2`, `p3`, `p4`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `stage`, `status`, `date_submitted`) VALUES
(1, NULL, NULL, 1, 'Sweet', 'Scent', 21, 'Male', 2147483647, 'Angono,rizal', 'Own', 'Yes', 'Secret', 'Yes', 'Yes', 'Yes', 'No', 'non', 'Secret', 'Undecided', 'Yes', 'No', 'Yes', 'Yes', 'Home Visitation', 'Pending', '2024-04-14 00:27:02'),
(2, 0, 0, 1, 'Sweet', 'Scent', 21, 'Male', 2147483647, 'Angono,rizal', 'Own', 'No', 'Secret', 'No', 'Yes', 'Yes', 'No', 'non', 'Secret', 'Undecided', 'No', 'Undecided', 'No', 'Yes', 'Email Sent', 'Pending', '2024-04-14 00:11:21'),
(3, 0, 6, 1, 'Sweet', 'Scent', 21, 'Male', 2147483647, 'Angono,rizal', 'Own', 'No', 'Secret', 'No', 'Yes', 'Yes', 'No', 'non', 'Secret', 'Undecided', 'No', 'Undecided', 'No', 'Yes', 'Home Visitation', 'Pending', '2024-04-14 00:27:02'),
(4, 24, 1, 1, 'Sweet', 'Scent', 21, 'Male', 2147483647, 'Angono,rizal', 'Own', 'No', 'Me', 'No', 'No', 'No', 'No', 'sdasd', 'Secret', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Final Approval', 'Pending', '2024-04-18 20:46:22'),
(5, 25, 4, 1, 'asad', 'asdas', 0, 'Male', 435435, 'Angono,rizal', 'Own', 'No', 'sadad', 'No', 'No', 'No', 'No', 'sadasd', 'sdad', 'No', 'No', 'Undecided', 'No', 'Yes', 'Home Visitation', 'Pending', '2024-04-14 00:27:02'),
(6, 25, 4, 1, 'asad', 'asdas', 0, 'Male', 435435, 'Angono,rizal', 'Own', 'No', 'sadad', 'No', 'No', 'No', 'No', 'sadasd', 'sdad', 'No', 'No', 'Undecided', 'No', 'Yes', 'Email Sent', 'Pending', '2024-04-14 01:12:46'),
(7, 24, 5, 1, 'Sweet', 'Scent', 20, 'Female', 2147483647, 'Angono,rizal', 'Own', 'No', 'sadad', 'No', 'Yes', 'No', 'No', 'sadasd', 'sdad', 'No', 'No', 'Undecided', 'No', 'Yes', 'Home Visitation', 'Pending', '2024-04-14 01:13:47'),
(9, 24, 3, 1, 'Sweet', 'Scent', 20, 'Male', 2147483647, 'Angono,rizal', 'Own', 'No', 'asdasd', 'No', 'No', 'No', 'No', 'sdasd', 'Secret', 'No', 'No', 'Undecided', 'No', 'Yes', 'Final Approval', 'Approved', '2024-04-18 23:24:17'),
(11, 25, 1, 1, 'a', 'aa', 0, 'Female', 11, 'qq', 'Own', 'No', 'a', 'No', 'Yes', 'Yes', 'No', 'a', 'a', 'Undecided', 'No', 'Undecided', 'No', 'Yes', 'Final Approval', 'Pending', '2024-07-01 17:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_name` varchar(45) NOT NULL,
  `rating_id` int NOT NULL,
  `comment` varchar(45) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rating_id` (`rating_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_queque`
--

DROP TABLE IF EXISTS `email_queque`;
CREATE TABLE IF NOT EXISTS `email_queque` (
  `id` int NOT NULL AUTO_INCREMENT,
  `request_id` int NOT NULL,
  `email_data` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `email_queque`
--

INSERT INTO `email_queque` (`id`, `request_id`, `email_data`, `expiration_date`, `created_at`) VALUES
(29, 9, 'sweetscentg@gmail.com', '2024-04-14 01:18:49', '2024-04-13 17:16:53'),
(28, 7, 'sweetscentg@gmail.com', '2024-04-14 01:15:08', '2024-04-13 17:13:11'),
(27, 6, 'emc200320@gmail.com', '2024-04-14 01:14:46', '2024-04-13 17:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `fav_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `pet_id` int NOT NULL,
  PRIMARY KEY (`fav_id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`fav_id`, `user_id`, `pet_id`) VALUES
(1, 375397, 3),
(2, 375397, 4),
(9, 270100, 3),
(4, 129171, 5),
(24, 686942, 1),
(14, 563139, 5),
(20, 563139, 1),
(30, 611888, 4),
(25, 686942, 1),
(28, 575310, 2),
(31, 611888, 4),
(32, 611888, 1),
(33, 611888, 1),
(70, 204263, 1),
(89, 2, 1),
(90, 845298, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personality`
--

DROP TABLE IF EXISTS `personality`;
CREATE TABLE IF NOT EXISTS `personality` (
  `personality_id` int NOT NULL AUTO_INCREMENT,
  `personality` varchar(45) NOT NULL,
  PRIMARY KEY (`personality_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `personality`
--

INSERT INTO `personality` (`personality_id`, `personality`) VALUES
(1, 'lovely'),
(2, 'calm'),
(3, 'assertive'),
(8, 'shy'),
(7, 'Joyful');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
CREATE TABLE IF NOT EXISTS `pets` (
  `pet_id` int NOT NULL AUTO_INCREMENT,
  `pet_image` varchar(100) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `pet_type` varchar(5) NOT NULL,
  `breed` varchar(45) NOT NULL,
  `pet_sex` varchar(10) NOT NULL,
  `pet_age` varchar(45) NOT NULL,
  `age_type` varchar(10) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `height` int NOT NULL,
  `weight` int NOT NULL,
  `personality` varchar(100) NOT NULL,
  `health_status` varchar(45) NOT NULL,
  `vaccination` varchar(20) NOT NULL,
  `neutered` varchar(10) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `pet_image`, `pet_name`, `pet_type`, `breed`, `pet_sex`, `pet_age`, `age_type`, `color`, `height`, `weight`, `personality`, `health_status`, `vaccination`, `neutered`, `availability`, `date_added`) VALUES
(1, '../Images/111.jpg', 'Ben', 'dog', 'Aspin', 'Male', '2 Years', 'year', 'Black', 86, 20, 'lovely,calm,assertive', 'Complete', 'Complete', 'yes', 'Available', '2024-04-05 05:29:19'),
(2, '../Images/22.PNG', 'Minnie', 'dog', 'Beagle', 'Female', '11 Months', 'months', 'White', 70, 10, 'lovely,shy', 'With Allergies', 'Complete', 'no', 'Not Available', '2024-04-02 13:44:56'),
(3, '../Images/333.PNG', 'Leonel', 'dog', 'German Shepherd', 'Male', '5 Years', 'year', 'Mixed Brown and Black', 85, 60, 'assertive', 'Complete', 'Complete', 'yes', 'Available', '2024-04-05 05:30:17'),
(4, '../Images/received_764956125492398.jpeg', 'Nam-ra', 'cat', 'Persian', 'Female', '10 Months', 'months', 'White', 30, 10, 'lovely,calm', 'Unknown', 'Complete', 'no', 'Available', '2024-04-02 13:51:48'),
(5, '../Images/IMG20231229082657.jpg', 'Metri', 'cat', 'Siamese', 'Female', '3 Years', 'year', 'Mixed', 35, 10, 'calm', 'With Allergies', 'Incomplete', 'no', 'Available', '2024-04-02 13:53:59'),
(6, '../Images/IMG20231229082707.jpg', 'Layla', 'cat', 'Siamese', 'Male', '3 Years', 'year', 'Mixed', 20, 20, 'assertive,shy', 'Healthy', 'Complete', 'yes', 'Available', '2024-04-09 14:46:31'),
(7, '../Images/3333.PNG', 'Layla', 'dog', 'Beagle', 'Male', '5 Months', 'months', 'Mixed', 20, 20, 'assertive', 'Healthy', 'Complete', 'yes', 'Available', '2024-04-09 14:48:33'),
(8, 'Images/IMG20231229082648.jpg', 'asdad', 'Cat', 'Persian', 'Female', '3 Years', 'year', 'sadasd', 27, 14, 'assertive', 'Healthy', 'Complete', 'Yes', 'Available', '2024-04-10 03:11:30'),
(9, 'Images/IMG20231229082648.jpg', 'asdad', 'Cat', 'Persian', 'Female', '3 Years', 'year', 'sadasd', 27, 14, 'assertive', 'Healthy', 'Complete', 'Yes', 'Available', '2024-04-10 03:12:41'),
(11, '', 'test', 'Cat', 'Persian', 'Male', '2 Months', 'months', 'mix', 1, 4, 'calm', 'Healthy', 'Complete', 'No', 'Available', '2024-04-10 03:16:13'),
(12, 'Images/IMG20231229082654.jpg', 'test', 'Cat', 'Persian', 'Male', '3 Months', 'months', 'mix', 1, 4, 'calm', 'Healthy', 'Complete', 'No', 'Available', '2024-04-10 03:16:46'),
(13, '', 'meow', 'Cat', 'Persian', 'Male', '2 Months', 'months', 'Mixed', 1, 3, 'lovely,calm', 'Healthy', 'Incomplete', 'Yes', 'Available', '2024-04-10 03:55:01'),
(14, 'Images/1.jpg', 'meow', 'Dog', 'German Shepherd', 'Male', '3 Months', 'months', 'Mixed', 1, 3, 'calm,assertive', 'Healthy', 'Complete', 'Yes', 'Available', '2024-04-10 03:55:38'),
(15, '', 'meow', 'Dog', 'German Shepherd', 'Male', '3 Months', 'months', 'Mixed', 1, 3, 'calm,assertive', 'Healthy', 'Complete', 'Yes', 'Available', '2024-04-10 03:56:50'),
(16, 'Images/11111.PNG', 'meow', 'Cat', 'Siamese', 'Male', '3 Years', 'year', 'Mixed', 1, 3, 'assertive', 'Healthy', 'Complete', 'Yes', 'Available', '2024-04-10 03:57:07'),
(17, 'Images/11.jpg', 'asda ada', 'Cat', 'Persian', 'Female', '7 Years', 'year', 'asdad', 4, 4, 'calm,assertive', 'With Allergies', 'Complete', 'Yes', 'Available', '2024-04-13 06:47:20'),
(18, '', 'a', 'Dog', 'German Shepherd', 'Male', '1 Year', 'year', 'a', 2, 2, 'lovely,calm', 'Healthy', 'Complete', 'No', 'Available', '2024-06-21 01:44:05'),
(19, '', 'a', 'Cat', 'Persian', 'Male', '1 Month', 'months', 'a', 2, 2, 'lovely,calm', 'Healthy', 'Complete', 'No', 'Available', '2024-06-21 01:44:34'),
(20, 'Images/Screenshot (2).png', 'a', 'Cat', 'Persian', 'Male', '1 Month', 'months', 'a', 2, 2, 'lovely,calm', 'Healthy', 'Complete', 'No', 'Available', '2024-06-21 01:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `pet_archive`
--

DROP TABLE IF EXISTS `pet_archive`;
CREATE TABLE IF NOT EXISTS `pet_archive` (
  `pet_id` int NOT NULL AUTO_INCREMENT,
  `pet_image` varchar(100) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `pet_type` varchar(5) NOT NULL,
  `breed` varchar(45) NOT NULL,
  `pet_sex` varchar(10) NOT NULL,
  `pet_age` varchar(45) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `height` int NOT NULL,
  `weight` int NOT NULL,
  `personality` varchar(100) NOT NULL,
  `health_status` varchar(45) NOT NULL,
  `vaccination` varchar(20) NOT NULL,
  `neutered` varchar(10) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `date_deleted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_archive`
--

INSERT INTO `pet_archive` (`pet_id`, `pet_image`, `pet_name`, `pet_type`, `breed`, `pet_sex`, `pet_age`, `color`, `height`, `weight`, `personality`, `health_status`, `vaccination`, `neutered`, `availability`, `date_deleted`) VALUES
(10, 'Images/IMG20231229082700.jpg', 'test', 'Cat', 'Persian', 'Male', '2 Months', 'mixed', 1, 4, 'calm', 'Healthy', 'Complete', 'No', 'Available', '2024-04-18 12:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `pet_type`
--

DROP TABLE IF EXISTS `pet_type`;
CREATE TABLE IF NOT EXISTS `pet_type` (
  `breed_id` int NOT NULL AUTO_INCREMENT,
  `pet_type` varchar(100) NOT NULL,
  `breed` varchar(100) NOT NULL,
  PRIMARY KEY (`breed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_type`
--

INSERT INTO `pet_type` (`breed_id`, `pet_type`, `breed`) VALUES
(1, 'dog', 'German Shepherd'),
(2, 'cat', 'Persian'),
(23, 'Cat', 'Siamese'),
(24, 'Dog', 'Beagle'),
(25, 'Dog', 'Shih Tzu');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `user_name` varchar(45) NOT NULL,
  `pet_id` int NOT NULL,
  `rating` int NOT NULL,
  `comment` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `pet_id` int NOT NULL,
  `stage` varchar(45) NOT NULL,
  `date_requested` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `user_id`, `pet_id`, `stage`, `date_requested`) VALUES
(2, 25, 4, ' Adoption Request', '2024-04-10 22:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL,
  `gender` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_joined` date NOT NULL,
  `user_type` varchar(10) DEFAULT 'user',
  `verified` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'no',
  `status` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'activated',
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `date` (`date_joined`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `first_name`, `last_name`, `username`, `email`, `password`, `birthday`, `gender`, `date_joined`, `user_type`, `verified`, `status`) VALUES
(2, 'Images/Default.png', 'tech', 'eons', 'techeons', 'techeons5@gmail.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '2024-04-16 00:00:00', 'female', '2024-04-02', 'admin', 'yes', 'activated'),
(24, 'Images/66252c1258783_Screenshot (56).png', 'engks', 'sdadasd', 'asdasd', 'sweetscentg@gmail.com', '', '0000-00-00 00:00:00', 'Male', '2024-04-06', 'user', 'no', 'activated'),
(25, 'Images/Default.png', 'a', 'a', 'a', 'emc200320@gmail.com', '61be55a8e2f6b4e172338bddf184d6dbee29c98853e0a0485ecee7f27b9af0b4', '2024-04-07 00:00:00', 'male', '2024-04-10', 'user', 'no', 'activated'),
(26, NULL, 'sadad', 'sadada', 'sadsad', 'adssda', 'dsdad', '2024-04-13 08:57:27', 'sada', '2024-04-15', 'user', 'no', 'activated'),
(27, NULL, 'sdad', 'sdad', 'sdasd', 'sdad', 'sdasd', '2024-04-13 08:57:27', 'sdadd', '2024-04-16', 'user', 'no', 'activated'),
(28, NULL, 'asdasd', 'sdad', 'sdads', 'sdsd', 'sdadsd', '2024-04-13 08:58:07', 'sdadsd', '2024-04-10', 'user', 'no', 'deactivated'),
(29, NULL, 'asadad', 'sdasdad', 'sdadsa', 'xzczc', 'zczxczx', '2024-04-13 09:00:11', 'xzczcx', '2024-04-23', 'user', 'no', 'activated');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

DROP TABLE IF EXISTS `verify`;
CREATE TABLE IF NOT EXISTS `verify` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` int NOT NULL,
  `expires` int NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`id`, `code`, `expires`, `email`) VALUES
(1, 90743, 1712743659, 'emc200320@gmail.com'),
(2, 73681, 1712418091, 'sweetscentg@gmail.com'),
(3, 22022, 1712153180, 'sweetsdad@gmail.com'),
(4, 80321, 1712159591, 'mccatacuts05@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `visitation`
--

DROP TABLE IF EXISTS `visitation`;
CREATE TABLE IF NOT EXISTS `visitation` (
  `visit_id` int NOT NULL AUTO_INCREMENT,
  `request_id` int DEFAULT NULL,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date` date DEFAULT '0000-00-00',
  `note` varchar(45) NOT NULL,
  `status` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'No Schedule',
  PRIMARY KEY (`visit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visitation`
--

INSERT INTO `visitation` (`visit_id`, `request_id`, `name`, `date`, `note`, `status`) VALUES
(8, 11, 'a aa', '2024-07-17', 'asdsd', 'Scheduled');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_count`
--

DROP TABLE IF EXISTS `visitor_count`;
CREATE TABLE IF NOT EXISTS `visitor_count` (
  `dateCreated` timestamp NOT NULL,
  `count` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_count`
--

INSERT INTO `visitor_count` (`dateCreated`, `count`) VALUES
('2024-04-16 03:18:12', 1),
('2024-04-16 03:19:34', 1),
('2024-04-16 03:19:35', 1),
('2024-04-16 03:19:42', 1),
('2024-04-16 03:20:14', 1),
('2024-04-16 03:23:05', 1),
('2024-04-18 05:37:14', 1),
('2024-04-18 06:20:29', 1),
('2024-04-18 06:20:30', 1),
('2024-04-18 06:30:24', 1),
('2024-04-19 09:00:52', 1),
('2024-04-19 09:00:55', 1),
('2024-04-19 22:24:42', 1),
('2024-04-19 22:26:37', 1),
('2024-04-19 22:26:42', 1),
('2024-04-19 22:30:56', 1),
('2024-04-19 22:31:20', 1),
('2024-04-19 22:31:41', 1),
('2024-04-19 22:32:09', 1),
('2024-04-19 22:32:20', 1),
('2024-04-19 22:32:39', 1),
('2024-04-19 22:32:52', 1),
('2024-04-19 22:34:13', 1),
('2024-04-19 22:34:56', 1),
('2024-04-19 22:35:39', 1),
('2024-04-19 22:35:48', 1),
('2024-04-19 22:35:49', 1),
('2024-04-19 22:37:00', 1),
('2024-04-19 22:37:18', 1),
('2024-04-19 22:37:53', 1),
('2024-04-19 22:45:09', 1),
('2024-04-19 22:46:00', 1),
('2024-04-19 22:46:18', 1),
('2024-04-19 22:46:26', 1),
('2024-04-19 22:47:01', 1),
('2024-04-19 22:47:09', 1),
('2024-04-19 22:47:27', 1),
('2024-04-19 22:47:36', 1),
('2024-04-19 23:29:35', 1),
('2024-04-19 23:29:38', 1),
('2024-04-19 23:56:31', 1),
('2024-04-20 00:05:27', 1),
('2024-04-20 00:05:33', 1),
('2024-04-20 00:11:30', 1),
('2024-04-20 00:13:34', 1),
('2024-04-20 00:13:50', 1),
('2024-04-20 00:14:24', 1),
('2024-04-20 00:15:25', 1),
('2024-04-20 00:16:03', 1),
('2024-04-20 00:16:53', 1),
('2024-04-20 00:16:58', 1),
('2024-04-20 00:18:00', 1),
('2024-04-20 00:18:57', 1),
('2024-04-20 00:19:12', 1),
('2024-04-20 00:20:59', 1),
('2024-04-20 00:22:23', 1),
('2024-04-20 00:24:52', 1),
('2024-04-20 00:25:29', 1),
('2024-04-20 01:42:26', 1),
('2024-04-20 01:43:23', 1),
('2024-04-20 01:43:30', 1),
('2024-04-20 01:44:20', 1),
('2024-07-06 02:36:19', 1),
('2024-07-06 02:36:41', 1),
('2024-07-06 02:39:29', 1),
('2024-07-06 02:43:41', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

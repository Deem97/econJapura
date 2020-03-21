-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2020 at 11:12 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
CREATE TABLE IF NOT EXISTS `student_details` (
  `s_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `subject_1` varchar(100) DEFAULT NULL,
  `result_1` varchar(1) DEFAULT NULL,
  `subject_2` varchar(100) DEFAULT NULL,
  `result_2` varchar(1) DEFAULT NULL,
  `subject_3` varchar(100) DEFAULT NULL,
  `result_3` varchar(1) DEFAULT NULL,
  `general_english` varchar(1) DEFAULT NULL,
  `m_name` varchar(100) DEFAULT NULL,
  `m_education_level` varchar(100) DEFAULT NULL,
  `m_occupation` varchar(100) DEFAULT NULL,
  `m_telephone` varchar(12) DEFAULT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `f_education_level` varchar(100) DEFAULT NULL,
  `f_occupation` varchar(100) DEFAULT NULL,
  `f_telephone` varchar(12) DEFAULT NULL,
  `no_of_brothers` int(2) DEFAULT NULL,
  `no_of_sisters` int(2) DEFAULT NULL,
  `ref_name` varchar(100) DEFAULT NULL,
  `ref_address` varchar(255) DEFAULT NULL,
  `ref_telephone` varchar(12) DEFAULT NULL,
  `prospected_job` int(1) DEFAULT NULL,
  `prospected_job_field` varchar(100) DEFAULT NULL,
  `cv` blob,
  PRIMARY KEY (`s_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

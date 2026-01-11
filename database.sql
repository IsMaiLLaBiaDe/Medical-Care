-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2026 at 09:15 PM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resident-evil`
--

-- --------------------------------------------------------

--
-- Table structure for table `alertes`
--

DROP TABLE IF EXISTS `alertes`;
CREATE TABLE IF NOT EXISTS `alertes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alertes`
--

INSERT INTO `alertes` (`id`, `name`) VALUES
(100, 'hello'),
(101, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

DROP TABLE IF EXISTS `analysis`;
CREATE TABLE IF NOT EXISTS `analysis` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

DROP TABLE IF EXISTS `blocks`;
CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `block` int NOT NULL,
  `room` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

DROP TABLE IF EXISTS `certifications`;
CREATE TABLE IF NOT EXISTS `certifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `core`
--

DROP TABLE IF EXISTS `core`;
CREATE TABLE IF NOT EXISTS `core` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `pnumber` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `cimage` varchar(255) DEFAULT NULL,
  `about` text,
  `status` varchar(50) DEFAULT NULL,
  `uaddress` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `username`, `fname`, `lname`, `email`, `password_hash`, `password`, `birthday`, `pnumber`, `gender`, `pimage`, `cimage`, `about`, `status`, `uaddress`, `type`, `date`) VALUES
(2001, 'iL', 'iL', 'iL', 'iL', 'iL', 'iL', '2025-11-11', 'iL', 'Male', 'iL', 'iL', 'iL', 'iL', 'iL', 'clients', '2025-11-25 06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`) VALUES
(1, 'Chief Complaint'),
(2, 'Consultation Notes'),
(3, 'Discharge Summary'),
(4, 'Family History of Present Illness'),
(5, 'Past Medical History'),
(6, 'Physical Examination'),
(7, 'Progress Notes'),
(8, 'Review of Systems'),
(9, 'Social History');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` int NOT NULL,
  `lname` int NOT NULL,
  `country` int NOT NULL,
  `subject` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `sp` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `ld` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital-map`
--

DROP TABLE IF EXISTS `hospital-map`;
CREATE TABLE IF NOT EXISTS `hospital-map` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Blocks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mangers`
--

DROP TABLE IF EXISTS `mangers`;
CREATE TABLE IF NOT EXISTS `mangers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `pnumber` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `cimage` varchar(255) DEFAULT NULL,
  `about` text,
  `status` varchar(50) DEFAULT NULL,
  `uaddress` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

DROP TABLE IF EXISTS `nurses`;
CREATE TABLE IF NOT EXISTS `nurses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `pnumber` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `cimage` varchar(255) DEFAULT NULL,
  `about` text,
  `status` varchar(50) DEFAULT NULL,
  `uaddress` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=1111113 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `username`, `fname`, `lname`, `email`, `password_hash`, `password`, `birthday`, `pnumber`, `gender`, `pimage`, `cimage`, `about`, `status`, `uaddress`, `type`, `date`) VALUES
(1111111, 'h', 'h', 'h', 'iL@iL.com', '$2y$10$4X5Qam3pxN7J8cO0z0gUvOD0Fl3q04Zei9KpANaekNulnWJ5BpBuC', 'FnwE5}Md9,^#gNV', '2025-11-17', 'h', NULL, 'h', 'h', 'h', 'h', 'h', 'nurses', '2025-11-26 08:41:21'),
(1111112, 'helloworld', 'hello', 'world', 'helloworld@hello.hello', '$2y$10$bMjMLs7PQlk4RE95T4wWGeL/V6aPbTM2Ss5slqbmdi2XAdLb6bwGa', 'helloworld', '2025-12-17', '061111111', 'Male', 'uploads/img_694a0bac0cc5a2.12248561.jpg', 'uploads/img_694a0bac0cc5a2.12248561.jpg', 'Hello World', 'Hello World', 'HelloWorld.hw', 'nurses', '2025-12-23 03:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `pnumber` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `cimage` varchar(255) DEFAULT NULL,
  `about` text,
  `status` varchar(50) DEFAULT NULL,
  `uaddress` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=1111112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `username`, `fname`, `lname`, `email`, `password_hash`, `password`, `birthday`, `pnumber`, `gender`, `pimage`, `cimage`, `about`, `status`, `uaddress`, `type`, `date`) VALUES
(1111111, 'h', 'h', 'h', 'iL@iL.com', '$2y$10$4X5Qam3pxN7J8cO0z0gUvOD0Fl3q04Zei9KpANaekNulnWJ5BpBuC', 'FnwE5}Md9,^#gNV', '2025-11-17', 'h', NULL, 'h', 'h', 'h', 'h', 'h', 'patients', '2025-11-26 08:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `pre-visit`
--

DROP TABLE IF EXISTS `pre-visit`;
CREATE TABLE IF NOT EXISTS `pre-visit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre-visit`
--

INSERT INTO `pre-visit` (`id`, `patient_id`, `date`, `status`, `specialty`) VALUES
(1, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL),
(5, 1, '2025-11-22', '', 'Cardiology'),
(6, 1, '2025-11-22', 'hello', 'Cardiology'),
(7, 1, '2025-11-22', 'helll', NULL),
(8, 1, '2025-11-29', 'helll', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE IF NOT EXISTS `records` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `urgence`
--

DROP TABLE IF EXISTS `urgence`;
CREATE TABLE IF NOT EXISTS `urgence` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

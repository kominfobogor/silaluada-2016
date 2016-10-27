-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2016 at 08:37 AM
-- Server version: 10.1.17-MariaDB-1~precise
-- PHP Version: 5.6.26-2+deb.sury.org~precise+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sil`
--

-- --------------------------------------------------------

--
-- Table structure for table `izin_persyaratan`
--

CREATE TABLE `izin_persyaratan` (
  `jenisizin_id` int(2) NOT NULL,
  `persyaratan_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `izin_persyaratan`
--

INSERT INTO `izin_persyaratan` (`jenisizin_id`, `persyaratan_id`) VALUES
(1, 1),
(1, 4),
(1, 5),
(1, 6),
(1, 8),
(1, 9),
(1, 10),
(2, 1),
(2, 4),
(2, 6),
(2, 7),
(2, 11),
(2, 9),
(2, 10),
(3, 1),
(3, 4),
(3, 5),
(3, 12),
(3, 10),
(4, 2),
(4, 5),
(4, 12),
(4, 10),
(5, 3),
(5, 5),
(5, 12),
(5, 10),
(1, 7),
(4, 6),
(2, 5),
(5, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

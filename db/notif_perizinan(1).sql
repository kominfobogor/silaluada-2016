-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2016 at 08:38 AM
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
-- Table structure for table `notif_perizinan`
--

CREATE TABLE `notif_perizinan` (
  `notif_id` int(5) NOT NULL,
  `permohonan_id` varchar(20) NOT NULL,
  `member_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif_perizinan`
--

INSERT INTO `notif_perizinan` (`notif_id`, `permohonan_id`, `member_id`) VALUES
(1, 'SPPL-2016-1585858588', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notif_perizinan`
--
ALTER TABLE `notif_perizinan`
  ADD PRIMARY KEY (`notif_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notif_perizinan`
--
ALTER TABLE `notif_perizinan`
  MODIFY `notif_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

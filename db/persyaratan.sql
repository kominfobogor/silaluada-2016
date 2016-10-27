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
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `persyaratan_id` int(2) NOT NULL,
  `persyaratan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persyaratan`
--

INSERT INTO `persyaratan` (`persyaratan_id`, `persyaratan`) VALUES
(1, 'Surat Permohonan Penerbitan SPPL'),
(2, 'Surat Permohonan Dokumen UKL UPL'),
(3, 'Surat Permohonan Dokumen AMDAL'),
(4, 'Surat Pernyataan Kesanggupan Pengelolaan Pemantauan Lingkungan Hidup (SPPL)'),
(5, 'Foto Kopi KTP Pemohon'),
(6, 'Foto Copy Pengumuman KEGIATAN USAHA yang diajukan isinya di Media Masa Cetak'),
(7, 'Foto Kopi IMB'),
(8, 'Ho Kecamatan Lama'),
(9, 'Foto Kopi Surat Tidak Keberatan Tetangga'),
(10, 'Surat Kuasa'),
(11, 'Ho BPPT Lama'),
(12, 'Foto Kopi Izin Penggunaan Pemanfaatan  Tanah (IPPT)'),
(13, 'Data Pemohon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`persyaratan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `persyaratan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

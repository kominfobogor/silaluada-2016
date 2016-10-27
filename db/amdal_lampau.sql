-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2016 at 08:36 AM
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
-- Table structure for table `amdal_lampau`
--

CREATE TABLE `amdal_lampau` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `alamat_kegiatan` text NOT NULL,
  `ka_andal` varchar(255) NOT NULL,
  `tanggal_ka_andal` varchar(50) NOT NULL,
  `amdal` varchar(255) NOT NULL,
  `tanggal_amdal` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amdal_lampau`
--

INSERT INTO `amdal_lampau` (`id`, `nama_kegiatan`, `alamat_kegiatan`, `ka_andal`, `tanggal_ka_andal`, `amdal`, `tanggal_amdal`, `keterangan`) VALUES
(2, 'Perumahan Bukit Villa Cimanggu (Bukit Cimanggu City)', 'Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', '-', '', '660.1/1435-KPLH', '1 Juli 2004', 'Beroperasi '),
(3, 'Pusat Perbelanjaan PT. Bogor Anggana Cendekia (BAC)/Botani Square ', 'Jl. Pajajaran Kelurahan Tegallega Kecamatan Bogor Tengah ', '-', '', '660.1/1652-KPLH', '26 Juli 2004', 'Beroperasi '),
(4, 'Pusat Perbelanjaan Plaza Kebun Raya (BTM)', 'Jl. Ir. H Juanda Kelurahan Paledang ', '-', '', '660/89-DLHK', '24 Januari 2005', 'Beroperasi '),
(5, 'Pembangunan Stasiun Perantara Antara (SPA) Sampah ', 'Kelurahan Ciluar Kecamatan Bogor Utara ', '-', '', '2006', '', 'Tidak jadi beroperasi '),
(6, 'Bogor Cyber Park ', 'Cibeureum Sunting Kelurahan Mulyaharja Kecamatan Bogor Selatan ', '660.1/511-DLHK', '', '660.1/839-DLHK', '14 Nopember 2006', 'Tidak jadi beroperasi '),
(7, 'Rumah Sakit Palang Merah Indonesia (PMI)', 'Jl. Raya Pajajaran No. 80 Kelurahan Tegallega Kecamatan Bogor Tengah ', '-', '', '660.1/571-DLHK', '11 Juli 2007', 'Beroperasi '),
(8, 'PT. Nutrifood Indonesia ', 'Kelurahan Harjasari Kecamatan Bogor Selatan  Kelurahan Sindangsari Kecamatan Bogor Timur ', '-', '', '660.1/640-DLHK', '30 Juli 2007', 'Beroperasi '),
(9, '', '', '', '', '', '', ''),
(10, 'Pusat Perbelanjaan Ekalokasari Plaza ', 'Jl. Sukasari No. 123 Kelurahan Sukasari Kecamatan Bogor Timur ', '660.1/382-DLHK             ', '7 Mei 2007', '660.1/700-DLHK', '16 Agustus 2007', 'Beroperasi '),
(11, 'Pusat Grosir Sepatu dan Tas ?TATOS? Taman Topi Square ', 'Jl. Kapten Muslihat Rt 03/01 Kelurahan Paledang Kecamatan Bogor Tengah ', '660.1/374-DLHK              ', '7 Mei 2007 ', '660.1/1004-DLHK', '29 Nopember 2007', 'Beroperasi '),
(12, 'Industri Pulp Separator Storage Battery (Accu) PT. Sepindo Perdana ', 'Jl. Batu Tulis No. 57 Kelurahan Batu Tulis Kecamatan Bogor Selatan ', '-', '', '660.1/63-DLHK', '28 Januari 2008', 'Beroperasi '),
(13, 'Pusat Perbelanjaan Matahari ', 'Jl. Soleh Iskandar Kelurahan Kedung Badak Kecamatan Tanah Sareal ', '660.1/960-DLHK              ', '19 Nopember 2007', '660.1/96-DLHK', '6 Pebruari 2008', 'Sudah tidak beroperasi '),
(14, 'Perumahan dan Lapangan Golf  Rancamaya ', 'Jl. Rancamaya Kelurahan Rancamaya ', '-', '', '660.1/301-DLHK Tanggal 18 April 2008', '', 'Revisi RKL-RPL, Beroperasi'),
(15, 'PT. Good Year', 'Jl. Pemuda No. 27 Kelurahan Kebon Pedes Kecamatan Tanah Sareal ', '-', '', '660.1/964-DLHK, Tanggal 17 Desember 2008', '', 'Revisi RKL-RPL, Beroperasi'),
(16, 'Perumahan dan Kawasan Wisata Bogor Nirwana Residence (BNR)', 'Jl. Bogor Nirwana Residence Dreded-Pahlawan Kelurahan Mulyaharja Kecamatan Bogor Selatan ', '660.1/648-DLHK   ', '2 September 2008', '660.1/981-DLHK', '31 Desember 2008', 'Beroperasi '),
(17, 'Pusat Perbelanjaan Yogya Sudirman ', 'Jl. Jenderal Sudirman Kelurahan Pabaton Kecamatan Bogor Tengah ', '-', '', '660.1/2113-KLH ', '13 Oktober 2009', 'Beroperasi '),
(18, 'Pembangunan Kegiatan Jalan (Inner Ring Road) ', 'Kecamatan Bogor Barat ? Bogor Selatan- Bogor Timur ', '-', '', 'Keputusan Walikota Bogor Nomor. 660.45-193 Tahun 2011 ', '', 'AMDAL '),
(19, 'Pengembangan Jaringan PDAM Distribusi', 'Kecamatan Bogor Barat, Bogor Timur, Bogor Selatan, Bogor Utara, Tanah Sareal ', '-', '', 'Keputusan Kepala BPLH Kota Bogor Nomor 660.1-451132 Tahun 2011', '22 Nopember 2011', 'AMDAL'),
(20, 'Pembangunan Kegiatan Jalan R3', 'Villa Duta-Parung Banteng-Wangun ', 'Keputusan Kepala BPLH Nomor 660.1.45-403Tahun 2011', '11 April 2011', 'Keputusan Kepala BPLH Bogor Nomor 660.1.45-108 Tahun 2012', '12 Maret 2012', 'AMDAL'),
(21, 'Perumahan Bukit Villa Cimanggu (Bukit Cimanggu City)', 'Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', '-', '', 'Keputusan Kepala BPLH Bogor 660.1.45.618 Tahun 2012 ', '12 Juni 2012', 'Adendum'),
(22, 'PT. Nutrifood Indonesia ', 'Kelurahan Harjasari Kecamatan Bogor Selatan Kelurahan Sindangsari Kecamatan Bogor Timur ', '-', '', 'Keputusan Kepala BPLH Bogor Nomor 660.1.45-644', '15 Juni 2012', 'Adendum'),
(23, '', '', '', '', '', '', ''),
(24, 'Pusat Perbelanjaan Ekalokasari Plaza ', 'Jl. Sukasari No. 123 Kelurahan Sukasari Kecamatan Bogor Timur ', '-', '', 'Keputusan Kepala BPLH Bogor Nomor 660.1/700-DLHK ', '5 Oktober 2012', 'Adendum'),
(25, 'Tempat Pengolahan dan Pemrosesan Akhir Sampah Kayumanis ', 'Kp. Sumur Wangi Kelurahan Kayumanis Kecamatan Tanah Sareal ', 'Keputusan Kepala BPLH Nomor 660.1.45-1172 ', '30 Nopember 2012', 'Keputusan Kepala BPLH Nomor 658.1.45/1168 Tahun 2013', '24 september 2013', 'AMDAL (Tidak Layak)'),
(26, 'Pusat Perbelanjaan ?Mall Bogor?', 'Jl. KH. Soleh Iskandar Kelurahan Kedung Jaya Kecamatan Tanah Sareal Kota Bogor ', 'Keputusan Kepala BPLH Nomor 660.1.45.1024 Tahun 2012 ', '5 Oktober 2012', 'Keputusan Kepala BPLH Bogor Nomor 660.1.45.1383 Tahun 2012 ', '26 Desember 2012', 'AMDAL'),
(27, 'Tempat Pengolahan dan Pemrosesan Akhir Sampah Kayumanis ', 'Kp. Sumur Wangi Kelurahan Kayumanis Kecamatan Tanah Sareal ', 'Keputusan Kepala BPLH Nomor 660.1.45-1172', '30 Nopember 2012', 'Keputusan Kepala BPLH Nomor 658.1.45/1168 Tahun 2013', '24 september 2013', 'AMDAL (Tidak Layak)'),
(28, 'Pembangunan Gedung Kuliah dan Laboratorium Program Diploma IPB ', 'Jl. Kumbang No. 14 RT.002/02 Kelurahan Babakan Kecamatan Bogor Tengah ', 'Keputusan Kepala BPLH Nomor 660.1.45-381 Tahun 2012', '2 April 2012', 'Keputusan Walikota Bogor Nomor 660.1.45-20 Tahun 2013 ', '5 Januari 2013 ', 'AMDAL'),
(29, 'Optimalisasi Aset Terminal Baranangsiang ', 'Jl. Pajajaran RT.01 dan RT. 04 RW. 02 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Keputusan Kepala BPLH Nomor 660.1-45-173  Tahun 2013', '23 Januari 2013', 'Keputusan Kepala BPLH Nomor 660.1.45/773 Tahun 2013', '11 Juni 2013', 'AMDAL'),
(30, 'Pembangunan Yasmin Mall dan Condotel ', 'Jl. Soleh Iskandar Kelurahan Cibadak dan Kedung Waringin Kecamatan Tanah Sareal ', 'Keputusan Kepala BPLH Nomor 660.1.45/734 Tahun 2013', '31 Mei 2013', 'Keputusan Kepala BPLH Nomor 660.1.45/1011 Tahun 2013   ', '2 Agustus 2013', 'AMDAL'),
(31, 'Pusat Perbelanjaan (Mall) dan Hotel Tajur ', 'Jl. Raya Wangun RT.003/004 Krelurahan Sindangsari dan Kelurahan Muarasari Kecamatan Bogor Timur dan Bogor Selatan ', 'Keputusan Kepala BPLH Nomor 660.1.45/1200 Tahun 2013 ', '3 Oktober 2013', 'Keputusan Kepala BPLH Nomor 660.1.45/1408-BPLH Tahun 2013 ', '28 Nopember 2013', 'AMDAL'),
(32, 'Pengembangan Gedung Blok C-D Pasar Kebon Kembang ', 'Jl. Dewi Sartika Kelurahan Cibogor Kecamatan Bogor Tengah ', 'Keputusan Kepala BPLH Nomor 660.1.45/81 Tahun 2014', '28 Januari 2014', 'Dalam Proses', '', 'Baru Pembahasan Andal, RKL-RPL'),
(33, 'Pembangunan Apartemen Botanical Residence ', 'Kampung Babakan fakultas RT. 001/004 Kel. Tegallega Kecamatan Bogor Tengah ', 'Keputusan Kepala BPLH Nomor 660.1.45-624 Tahun 2014', '16 Juni 2014', 'Keputusan Kepala BPLH Nomor 660.1.45/866 Tahun 2014', '5 September 2014', 'AMDAL'),
(34, 'Pembangunan Toko Swalayan Yogya ', 'Jl. Pahlawan Revolusi Kelurahan Pondok Bambu Kecamatan Duret Sawit Jakarta Timur ', 'Keputusan Kepala BPLH Nomor 660.1.45/1469 Tahun 2013 ', '6 Desember 2013', 'Keputusan Kepala BPLH Nomor 660.1.45/216-BPLH Tahun 2014 ', '28 Februari 2014', '-'),
(35, 'Pembangunan Revitalisasi Bale Binarum ', 'Jl. Pajajaran No. 25 RT. 01/05 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Keputusan Kepala BPLH Nomor 660.1.45/327 Tahun 2014', '1 April 2014', 'Keputusan Kepala BPLH Nomor 660.1.45573BPLH Tahun 2014', '30 Mei 2014', '-'),
(36, 'Pembangunan Bogor Green Forest', 'Jl. RE. Soemantadiredja Kelurahan Pamoyanan Kecamatan Bogor Selatan ', 'Keputusan Kepala BPLH Nomor 660.1.45/828 Tahun 2013', '26 Juni 2013', 'Keputusan Kepala BPLH Nomor 660.1.45/350 Tahun 2014', '15 April 2014', 'AMDAL'),
(37, 'Pembangunan Apartemen dan Hotel (PT. Mirah Segar)', 'Jl. Pangrango Kelurahan Babakan Kecamatan Bogor Tengah ', 'Dalam Proses', '', '-', '', 'Baru pembahaan KA-Andal'),
(38, 'Pembangunan Hotel Syariah ', 'Jl. Veteran Kelurahan Panaragan Kecamatan Bogor Tengah ', 'Dalam Proses', '', '-', '', 'Baru pembahaan KA-Andal'),
(39, 'Pembangunan Hotel, Mall, dan Apartemen ', 'Jl. KS. Tubun Kelurahan Cibuluh Kecamatan Bogor Utara ', 'Dalam Proses', '', '-', '', 'Baru pembahaan KA-Andal'),
(40, 'Universitas Pakuan ', 'Jl. Pakuan No. 1 dan Jalan Babakan Fakultas Kelurahan Tegallega Kecamatan Bogor Tengah ', '-', '', '660.1.45/1342-BPLH Tahun 2014', '17 Desember 2014', 'DELH'),
(41, 'Pembangunan Yasmin Mall dan Condotel ', 'Jl. Soleh Iskandar Kelurahan Cibadak dan Kedung Waringin Kecamatan Tanah Sareal ', 'Keputusan Kepala BPLH Nomor 660.1.45/734 Tahun 2013', '31 Mei 2013', 'Keputusan Kepala BPLH Nomor 660.1.45/1011 Tahun 2013 ', '2 Agustus 2013 ', 'AMDAL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amdal_lampau`
--
ALTER TABLE `amdal_lampau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amdal_lampau`
--
ALTER TABLE `amdal_lampau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

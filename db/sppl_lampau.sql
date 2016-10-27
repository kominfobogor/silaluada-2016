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
-- Table structure for table `sppl_lampau`
--

CREATE TABLE `sppl_lampau` (
  `id` int(11) NOT NULL,
  `no_sppl` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `alamat_kegiatan` text NOT NULL,
  `nama_pemilik` varchar(200) NOT NULL,
  `alamat_pemilik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sppl_lampau`
--

INSERT INTO `sppl_lampau` (`id`, `no_sppl`, `tanggal`, `nama_kegiatan`, `alamat_kegiatan`, `nama_pemilik`, `alamat_pemilik`) VALUES
(2, ' 660.1/30-TLDL', '18 Januari 2011  ', 'Pembangunan Perumahan', 'Jl. Perdana Raya Rt 02/10 Kelurahan Kedung Badak Kecamatan Tanah Sareal', 'Dody Ferryanto, SE', 'Jl. Apel IV Blok A/V No. 3 Rt 02/12 Cimanggis Depok'),
(3, '660.1/28-TLDL', '18 Januari 2011  ', 'Pembangunan Tower / Antena Radio TV Megaswara', 'Jl. Suryakencana No. 228 ? 230 Kelurahan Gudang Kecamatan Bogor Tengah', 'B. Sumarwoto SE, MM              a.n Megaswara Corporate', 'Bumi Nasio Indah A 12/12 Rt 09/05 Jati Mekar ? Jati Asih Bekasi'),
(4, '660.1/29-TLDL', '18 Januari 2011  ', 'Pembangunan Toko Kulit Imitasi', 'Jl. Kapten Yusuf Rt 04/1 Kelurahan Cikaret Kecamatan Bogor Selatan', 'Petrus Suyanto', 'Jl. Kenanga 38 Rt 02/09 Kota Batu Kecamatan Ciomas '),
(5, '660.1/31-TLDL', '18 Januari 2011  ', 'Renovasi Rumah Tinggal untuk Gedung Bank Syariah Mandiri Cabang Bogor', 'Jl. Pajajaran No. 31 Rt 02/04 Kelurahan Babakan Kecamatan Bogor Tengah', 'Ridwan Sudjono', 'Jl. Gunung Gede No. 29 Rt 02/04 Kelurahan Babakan Kecamatan Bogor Tengah'),
(6, '660.1/32-TLDL', '18 Januari 2011  ', 'Pembangunan Toko Plastik', 'Jl. Kapt Yusuf Rt 04/01 Kelurahan Cikaret Kecamatan Bogor Selatan', 'Hendra Eng', 'Jl. Saribentang No. 10 Rt 07/14 Kelurahan Baranangsiang Kecamatan Bogor Timur '),
(7, '660.1/27-TLDL', '18 Januari 2011  ', 'Pembangunan Toko Mainan ', 'Jl. Kapten Yusuf Rt 01/1 Kelurahan Cikaret Kecamatan Bogor Selatan', 'Hasiti', 'Jl. Kenanga 38 Rt 02/09 Kota Batu Kelurahan Ciomas '),
(8, '660.1/70-PDPL', '31 Januari 2011', 'Pembangunan Perkantoran', 'Jl. Pakuan Rt 04/11 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Gunawan Elisa ', 'Jl. Dahlia Komp. Pakuan Rt 01/03 Kelurahan Pakuan Kecamatan Bogor Selatan'),
(9, '660.1/62-DL', '31 Januari 2011', 'Pembangunan Area Pemakaman ', 'Kp. Cipaku Skip Rt 02/6 Kelurahan Cipaku Kecamatan Bogor Selatan', 'Muhtar Bin H Saefudin ', 'Kp. Rancamaya Rt 01/02 Kelurahan Rancamaya Kecamatan Bogor Selatan'),
(10, '660.1/66-DL', '31 Januari 2011', 'Pembangunan Perumahan', 'Kp. Warung Bandrek Rt 05/05 Kelurahan Bondongan Kecamatan Bogor Selatan', 'Dadang Kurniawan', 'Danau Bogor Raya K. 15 Rt 02/13 Kelurahan Katulampa Kecamatan Bogor Timur'),
(11, ' 660.1/61-DL', '31 Januari 2011', 'Pembangunan  Toko Sembako ', 'Jl. Raya Wangun Rt 04/07 Kelurahan Sindangsari Kecamatan Bogor Timur', 'Sutajab', 'Danau Bogor Raya Rt 04/07 Kelurahan Katulampa Kecamatan Bogor Timur'),
(12, '660.1/63-DL', '31 Januari 2011', 'Pembangunan Kos-Kosan (10 Kamar)', 'Jl. Gereja No. 25 Rt 02/08 Kelurahan Paledang Kecamatan Bogor Tengah', 'Frans Hendra', 'Jl. Gereja No. 25 Rt 02/08 Kelurahan Paledang Kecamatan Bogor Tengah '),
(13, '660.1/64-DL', '31 Januari 2011', 'Pembangunan Pertokoan ', 'Jl. Durian Raya No. 2 Rt 01/05 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Ferdi', 'Jl. Tamiang No. 2 Rt 04/07 Haurjaya Kelurahan Kebon Pedes Kecamatan Tanah Sareal'),
(14, '660.1/69-DL', '31 Januari 2011', 'Pembangunan Gudang Ikan ', 'Jl. Raya Pemda Kedung Halang Rt 02/13 Kelurahan Kedung Halang Kecamatan Bogor Utara', 'Turmina MT Silalahi', 'Jl. Gatot Kaca V No. 2 Rt 06/15 Kelurahan Bantarjati Kecamatan Bogor Utara'),
(15, '660.1/67-DL', '31 Januari 2011', 'Pembangunan Showroom Meubel', 'Jl. Pajajaran KM. 63 Rt 04/03 Kelurahan Bantarjati Kecamatan Bogor Utara', 'Wunwun Maulidi', 'Jl. Mandala Raya II Rt 01/08 Desa Cimandala Kecamatan Sukaraja Kab. Bogor'),
(16, '660.1/68-DL', '31 Januari 2011', 'Pembangunan Toko Sembako', 'Jl. Neglasari II Rt 02/01 Kelurahan Ciparigi Kecamatan  Bogor Utara', 'Ny. Nurwahabian', 'Jl. Mandala II Rt 01/08 Desa Cimnadala Kecamatan Sukaraja'),
(17, '660.1/65-DL', '31 Januari 2011', 'Perluasan Toko Terang', 'Jl. Mantarena Rt 07/03 Kelurahan Panaragan Kecamatan Bogor Tengah', 'Melawati', 'JL. Veteran No. 51 Rt 07/03 Kelurahan Panaragan Kecamatan Bogor Tengah'),
(18, '660.1/78-DL', '2 Feruari 2011', 'Pembangunan Rumah Toko', 'Jl. Taman Panaragan Blok A No.1 Rt 03/07 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Januar Lukman Linous', 'Jl. Kuwung-Kuwung No. 2 Villa Duta Bogor'),
(19, '660.1/118-DL', '18 Febuari 2011', 'Pembangunan Lapangan Futsal (2 Lapangan)', 'Jl. P&K Kelurahan Kedung Halang Kecamatan Bogor Utara', 'Martina Sari Lubis', 'Jl. Ciburial Indah No. 5 Rt 03/04 Kelurahan Ciparigi Kecamatan Bogor Utara'),
(20, '660.1/119-DL', '18 Febuari 2011', 'Pembangunan Pertokoan (7 Unit) ', 'Jl. Raya Sindangbarang Rt 04/01 Kelurahan Sindangbarang Kecamatan Bogor Barat', 'Ali Abu Bakar Alatas ', 'Jl. Pasir Mulya Blok U-15 Rt 01/07 Kelurahan Pasir Mulya Kecamatan Bogor Barat'),
(21, '660.1/120-DL', '18 Febuari 2011', 'Pembangunan Perumahan', 'Jl. Binamarga Kelurahan Kayu Manis Kecamatan Tanah Sareal ', 'Drs. H. Mastee Adi Putra / haryanto a.n Koprimda Birama Nusantara', 'Jl. Loader No. 5 Komp Binamarga Kelurahan Baranangsiang Kecamatan Bogor Timur'),
(22, '660.1/121-DL', '18 Febuari 2011', 'Pembangunan Toko', 'Jl. Palupuh Raya No. 6 Rt 02/06 Kelurahan Tegal Gundil Kecamatan Bogor Utara ', 'Taty Susanti', 'Jl. Pamikul 1/20 Rt 02/06 Kelurahan Tegal Gundil Kecamatan Bogor Utara'),
(23, '660.1/122-DL', '18 Febuari 2011', 'Pembangunan Majlis Ta?lim', 'Jl. Cimanggu Kecil Rt 04/12 Kelurahan Ciwaringin Kecamatan Bogor Tengah', 'Drs. Wan Ali', 'Jl. Cimanggu Mantri Guru Rt 04/01 Kelurahan Kedung Jaya Kecamatan Tanah Sareal'),
(24, ' 660.1/123-DL', '18 Febuari 2011', 'Pembangunan Toko Mainan & Minuman', 'Jl. Sukasari I Rt 03/06 Kelurahan Sukasari Kecamatan Bogor Timur', 'Ravi Dharma Kumara', 'Jl. Siliwangi No. 27 C I Rt 02/02 Kelurahan Sukasari Kecamatan Bogor Timur'),
(25, '660.1/180-DL', '4 Maret 2011', 'Pembangunan Perkantoran', 'Jl. RE Martadinata 32 No. 01/11 Kelurahan Ciwaringin Kecamatan Bogor Tengah', 'Indrawan Djapa', 'Jl. Raya Pajajaran Rt 01/11 No. 63 '),
(26, '660.1/189-DL', '4 Maret 2011', 'Pembangunan Bengkel Reparasi Bak Mobil', 'Bubulak Rt 01/01 Kelurahan Bubulak Kecamatan Bogor Barat', 'Tatang Mulyana ', 'Jl. Sadeng Kp. Sadeng Rt 01/02 Kecamatan Leuwi Sadeng '),
(27, ' 660.1/182-DL', '4 Maret 2011', 'Pembangunan Toko Sembako', 'Jl. Rambutan No. 6 Rt 05/06 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Nurmaritis', 'Baranagsiang III Blok 6/6 Rt 05/08 Kelurahan Tegallega Kecamatan Bogor Tengah'),
(28, '660.1/183-DL', '4 Maret 2011', 'Pembangunan Gedung Kantor BP4K Kabupaten Bogor', 'Jl. Letjen Ibrahim Adjie Rt01/09 Kelurahan Sindangbarang Kecamatan Bogor Barat', 'Ir. Hj Siti Farikah, MM                    a.n BP4K Kabupaten Bogor', 'Jl. Letjen Ibrahim Adjie Rt 01/09 Kelurahan Sindangbarang Kecamatan Bogor Barat'),
(29, '660.1/181-DL', '4 Maret 2011', 'Pembangunan Pertokoan (8 unit)', 'Jl. Soleh Iskandar Rt 05/09 Kelurahan Kedung Badak Kecamatan Tanah Sareal ', 'Soenaryo', 'Jl. Baru Rt 05/03 Kelurahan Pabaton Kecamatan Bogor Tengah'),
(30, '660.1/216-DL', '14 Maret 2011', 'Pembangunan Pertokoan (12 unit)', 'Jl. Raya Sukabumi Rt 03/10 Kelurahan Harjasari Kecamatan Bogor Selatan', 'Makmur', 'Kp. Bitung Omo Rt 02/05 Desa Bitungsari Kecamatan Ciawi'),
(31, '660.1/217-DL', '14 Maret 2011', 'Pembangunan Home Schooling BER Montessori School', 'Jl. Sawojajar No. 12 Rt 01/02 Kelurahan Pabaton Kecamatan Bogor Tengah', 'Hadi Prahoro', 'Jl. Dr. Sumeru No. 12 Rt 03/04 Kelurahan Kebon Kalapa Kecamatan Bogor Tengah'),
(32, '660.1/219-DL', '14 Maret 2011', 'Pembangunan Toko Onderdil ', 'Jl. R Saleh Syarief No. 29 Rt 02/11 Kelurahan Empang Kecamatan Bogor Selatan', 'Cin Hiang Liong', 'Jl. Arimbi I No. 4 Bumi Indra Prasta Kelurahan Bantarjati Kecamatan Bogor Utara'),
(33, '660.1/218-DL', '14 Maret 2011', 'Pembangunan  SLB Al-Irsyad', 'Jl. Sedane Gg. Banjar Rt 05/12 Kelurahan Empang Bogor Selatan', 'Helmiah A Thalib', 'Jl. Sedane No. 67 Rt 03/03 Kelurahan Empang Kecamatan Bogor Selatan'),
(34, '660.1/230-DL', '21 Maret 2011', 'Pembangunan Toko Sepatu', 'Jl. Kap Yusuf No. 60 Rt 03/11 Kelurahan Cikaret Kecamatan Bogor Selatan', 'Harvani', 'Parakan Mulya Rt 03/07 Ciomas Kab. Bogor'),
(35, ' 660.1/241-DL', '24 Maret 2011', 'Pembangunan Kos-Kosan', 'Kp. Muara Babadak Rt 02/12 Kelurahan Sindangrasa Kecamatan Bogor Timur ', 'Adhi Satrianto ', 'Jl. Gumilang No. 10 Kelurahan Baranangsiang Kecamatan Bogor Timur'),
(36, '660.1/247-DL', '24 Maret 2011', 'Pembangunan Perumahan', 'JL. Pembangunan Rt 03/06 Kelurahan Kedung Halang Kecamatan Bogor Utara', 'Yanti Handayani', 'Villa Bogor Indah Blok C2/8 Bogor Rt 07/13 Kelurahan Ciparigi Kecamatan Bogor Utara'),
(37, '660.1/-246-DL', '24 Maret 2011', 'Pembangunan Kontrakan', 'Jl. Akasia Rt 03/5 Kelurahan Kedung Waringin Kecamatan Tanah Sareal Kota Bogor', 'Ir. Heri DB', 'Taman Cimanggu Begonia II Q VII/1 Rt 04/05 Kelurahan Kedung Waringin Kecamatan Tanah Sareal '),
(38, ' 660.1/245-DL', '24 Maret 2011', 'Pembangunan dan Perluasan SLB', 'Jl. Malabar Ujung No. 2 Rt 02/02 Kelurahan Babakan Kecamatan Bogor Tengah ', 'Elly Yulianty', 'Babakan Kenari I No. 4 Rt 06/05 Kelurahan Babakan Kecamatan Bogor Tengah'),
(39, '660.1/243-DL', '24 Maret 2011', 'Pembangunan Toko Listrik', 'Jl. Raya Prapatan Ciawi Rt 02/06 Kelurahan Harjasari Kecamatan Bogor Selatan', 'Haryo Pramono ', 'Jl. Cuhan III/20 Taman Yasmin Rt 01/08 '),
(40, ' 660.1/244-DL', '24 Maret 2011', 'Pembangunan SD IT Anak Shalih', 'Kp. Kebon Awi Rt 02/06 Kelurahan Cimahpar Kecamatan Bogor Utara', 'Bukit Adinugraha', 'Kpp Baranangsiang IV Blok A Rt 03/10 Kelurahan Tanah Baru Kecamatan Bogor Utara'),
(41, '', '24 Maret 2011', 'Pembangunan Pertokoan (3 unit) ', 'Jl. KH. Sholeh Iskandar Kelurahan Kedung Jaya Kecamatan Tanah Sreal ', 'Wirahadi Kosasih', 'Jl. Bangwa No. 6 Rt 03/02 Kelurahan Barangsiang Kecamatan Bogor Timur'),
(42, '', '28 Maret 2011', 'Pembangunan Menara Telekomunikasi ', 'Jl. Mayjen Ishak Juarsa (Komp Ba Talyon 315/GRO) Kel Gunung Batu', 'Wiryawan Isjawara', 'Menara Mulia Lt 10 Jl. Gatot Subroto Jakarta'),
(43, '660.1/274-DL', '31 Maret 2011', 'Pembangunan Toko Pakaian ', 'Jl. Mawar Rt 01/05 Kelurahan Menteng Kecamatan Bogor Barat', 'H. Subandi Husen', 'Jl. Roda Kebon Jukut No. 35 Rt 03/01 Kelurahan Babakan Pasar Kecamatan Bogor Tengah'),
(44, ' 660.1/384-DL', '31 Maret 2011', 'Pembangunan Sekolah Infokom ', 'Jl. Letjen Ibrahim Adjie Rt 06/08 Keurahan Sindangbarang Kecamatan Bogor Barat', 'Ir. E Mulyati Chandra,Ms', 'Kp. Selagalih Rt 02/8 Ciomas Rahayu '),
(45, '660.1/382-DL', '31 Maret 2011', 'Pembangunan Pertokoan  (7 unit) ', 'Jl. Raya Cibuluh KM 52 No. 285 Rt 03/01 Kelurahan Ciparigi Kecamatan Bogor Utara', 'Sri Widjaya', 'Kp. Cingcau No. 1 Rt 03/08 Kelurahan Gudang Kecamatan Bogor Tengah'),
(46, '660.1/381-DL', '31 Maret 2011', 'Pembangunan Rumah Kontrakan ', 'Kp. Cipinang Gading Rt 03/04 Kelurahan Rangga  Mekar Kecamatan Bogor Selatan', 'H. Atje Sasmita Hasan ', 'Perum Purimas Blok B7 Rt 03/14 Kelurahan Bondongan Kecamatan Bogor Selatan'),
(47, '660.1/383-DL', '31 Maret 2011', 'Pembangunan Apotek, Praktek Dokter Bersama, dan Klinik Kecantikan, Laboratorium ', 'Jl. Medika Blok AA No. 1 Rt 01/019 Kelurahan Menteng Kecamatan Bogor Barat', 'Dra. Fatiah', 'Jl. Medika Blok AA No. 1 Rt 01/019 Kelurahan Menteng Kecamatan Bogor Barat'),
(48, '660.1/379-DL', '31 Maret 2011', 'Pembangunan Bengkel Reklame', 'Jl. Abdullah Rt 001/01 Kelurahan Kayumanis Kecamatan Tanah Sareal', 'Andi Mulia ', 'Bukit Cimanggu City Blok N7 No. 12 Bogor.'),
(49, '660.1/380-DL', '31 Maret 2011', 'Pembangunan Showroom Mobil', 'Jl. Raya Wangun Rt 001/04 Kelurahan Sindangsari Kecamatan Bogor Timur', 'Ahyar Suryadi', 'Kp. Sukabirus Rt 03/06 Desa Gadog Megamendung'),
(50, ' 660.1/385-DL', '31 Maret 2011', 'Pembangunan Toko Kusen', 'Jl. Sremped Rt 01/04 Kelurahan Cibadak Kecamatan Tanah Sareal', 'Wiratmo Sudjono', 'Jl. Pahlawan No. 37 Rt 02/09 Kelurahan Bondongan Kecamatan Bogor Selatan'),
(51, '660.1/386-DL', '31 Maret 2011', 'Pembangunan Kos Kosan', 'Babakan Rt 02/07 Kelurahan Babakan Kecamatan Bogor Tengah', 'Jono M. Munandar', 'Jl. Lodaya Ujung 1/20 Rt 02/07 Kelurahan Babakan Kecamatan Bogor Tengah'),
(52, '660.1/399-DL', '12 April 2011', 'Pembangunan Kos Kosan', 'Babakan Lebak Rt 02/05 Kelurahan Balumbang Jaya Kecamatan Bogor Barat', 'Sri Wangi Tejaresmi', 'Jl. Sembilang Gg Pinang Rt 03/05 Limbangan Rumbai Pesisir Pekanbaru Riau'),
(53, '660.1/394-DL', '8 April 2011', 'Pembangunan Pertokoan', 'Jl. Pajajaran 21 Rt 03/05 Kelurahan Bantarjati Kecamatan Bogor Utara', 'H. Umar Ahmad Batafie', 'Jl. Rengganis No. 2-4 Rt 04/14 Kelurahan Baranagsiang Kecamatan Bogor Timur'),
(54, '660.1/398-DL', '12 April 2011', 'Pembangunan Lapangan Olahraga Futsal ', 'Jl. Adnawijaya Rt 01/05 Kelurahan Tegal Gundil Kecamatan Bogor Utara ', 'Narifani Anwar', 'Jl. Nakala Raya No. 8 Perumahan Bumi Indra Prasta Rt 03/14 Kelurahan '),
(55, '660.1/400-DL', '12 April 2011', 'Pembangunan Kantor ', 'Jl. Pajajaran Rt 03/03 Kelurahan Bantarjati Kecamatan Bogor Utara', 'Januar Lukman L', 'Jl. Rengganis No. 2-4 Rt 04/14 Kelurahan Baranangsiang'),
(56, '660.1/393-DL', '8 April 2011', 'Pembangunan Pertokoan', 'Jl. R. T. Wirawiredja Rt 05/05 Kelurahan Tanah Baru Kecamatan Bogor Utara', 'Andiyo Lalito ', 'Jl. R. Hanafiah Rt 001/007 Kelurahan Cimahpar Kecamatan Bogor Utara'),
(57, '660.1/395-DL', '8 April 2011', 'Pembangunan Toko ATK', 'Jl. Perikanan Darat No. 58 Rt 004/01 Kelurahan Kedung Waringin Kecamatan Tanah Sareal', 'Fauziah Hatim', 'Jl. Anyelir III Blok WIV No. 18 Rt 04/09 Kelurahan Kedung Waringin Kecamatan Tanah Saeral'),
(58, '660.1/418-DL', '15 April 2011', 'Pembangunan Showroom Kendaraan ', 'Jl. Raya Wangun No. 411 Rt 05/01 Kelurahan Sindangsari Kecamatan Bogor Selatan', 'Yenny Iswarno', 'Jl. Sukajadi II No. 16 Rt 04/05 Kelurahan Tajur Kecamatan Bogor Timur'),
(59, '660.1/438-DL', '25 April 2011', 'Pembangunan Perumahan ', 'Perumahan Cimanggu Permai Rt05/09 Kelurahan Kedung Badak Kecamatan  Tanah Sareal', 'Gini Semiati Hendarso', 'Jl. Pejaten Mas V Blok C No. 7 Jakarta Selatan'),
(60, '660.1/439-DL', '25 April 2011', 'Pembangunan Kantor Ekspedisi', 'Jl. Paledang Rt 02/01 Kelurahan Paledang ', 'Tjoa Lies Nio', 'Jl. H. Ipin No. 8 Rt 08/01 Pondok Labu Jakarta Selatan'),
(61, '660.1/435-DL', '25 April 2011', 'Pembangunan Lapangan Futsal ', 'Jl. Bima Raya Ujung Kelurahan Cibuluh Kecamatan Bogor ', 'Fika Dwianti', 'Jl. Srikandi V No. 26 Rt 02/15 Kelurahan Bantarjati Kecamatan Bogor Utara'),
(62, '660.1/433-DL', '25 April 2011', 'Pembangunan Showroom Mobil', 'Jl. Raya Kedung Halang Rt 01/09 Kelurahan Cibuluh Kecamatan Bogor Utara', 'Benedict', 'Kampung Cingcau Rt 03/08 Kelurahan Gudang Kecamatan Bogor Tengah'),
(63, '660.1/432-DL', '21 April 2011', 'Pembangunan Perumahan', 'Jl. KH. Abdullah Bin Nuh Rt 012/012 Kelurahan Cilendek Barat Kecamatan Bogor Barat', 'Ir. H. Sony Novansya', 'Jl. Menteng Gg Mambo No. 12 Rt 03/04 Kelurahan Menteng Kecamatan Bogor Barat'),
(64, '660.1/434-DL', '25 April 2011', 'Pembangunan Kost-kosan', 'Babakan Lio Rt 01/07 Kelurahan Balumbang Jaya Kecamatan Bogor Barat', 'Ance Trio Marta', 'Kampung Cibuntu Kulon Rt 02/02 Desa Cibuntu Kecamatan Ciampea '),
(65, '660.1/431-DL', '21 April 2011', 'Pembangunan Pertokoan', 'Jl. Darul Quran No. 5 Rt 01/10 Kelurahan Loji Kecamatan Bogor Barat', 'H.M. Arief', 'Jl. Komplek IPB/PLN H. Muslihin Rt 02/12 Kelurahan Loji Kecamatan Bogor Barat'),
(66, '660.1/434-DL', '25 April 2011', 'Pembangunan Perumahan', 'Jl. Jatayu IV Rt 08/03 Kelurahan Curug Kecamatan Bogor Barat', 'Sukatma Priatna Hasan', 'Bubulak No. 57 Rt 01/06 Kelurahan Kebon Pedes Kecamatan Tanah Sareal'),
(67, '660.1/440-DL', '25 April 2011', 'Pembangunan Pertokoan (2 unit)', 'Jl. Raya Wangun No. 351 Rt 02/04 Kelurahan Sindangsari Kecamatan Bogor Timur', 'Erwin Djapa', 'Danau Bogor Raya C2/6 Rt 01/13 Keluarahan Katulampa Kecamatan Bogor Timur '),
(68, '660.1/436-DL', '25 April 2011', 'Pembangunan Pertokoan ', 'Jl. Batutulis No. 99 Rt 04/04 Kelurahan Batutulis Kecamatan Bogor Selatan', 'Indrawan Djapa', 'Jl. Pajajaran No. 63 Rt 01/11 Kelurahan Baranangsiang Kecamatan Bogor Timur'),
(69, '660.1/449-DL', '28 April 2011', 'Pembangunan Klinik Centra Medika ', 'Jl. Medika Blok AA No. 1 Rt 001/019 Kelurahan Menteng Kecamatan Bogor Barat', 'Riyananto MBA', 'Jl. Danau Daya Blok D1/10 Permata Puri Laguna Rt 001/021 Kelurahan Mekar Sari Depok'),
(70, '660.1/478-DL', '5 Mei 2011', 'Pembangunan Lapangan Futsal ', 'Jl. Sukasari II No. 14 Rt 07/02 Kelurahan Sukasari ', 'S. Renaldi Mulyadi ', 'Jl. Saribentang No. 14 Rt 07/14 Kelurahan Baranangsiang Kecamatan Bogor Timur'),
(71, '660.1/492-DL ', '10 Mei 2011', 'Kegiatan Jasa Multimedia ', 'Jl. Bango No. 2 Rt 05/03 Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', 'Benyamin Setjasoebrata', 'Jl. Pasir Layung Utama II No. B-30 Bandung'),
(72, '660.1/503-DL', '18 Mei 2011', 'Pembangunan Pertokoan Sembako', 'Jl. KH. Sholeh Iskandar Rt 01/04 Kelurahan Cibadak Kecamatan Tanah Sareal ', 'Linggawati Djapa ', 'Jl. MA. Salmun No. 38 Rt 01/03 Kelurahan Ciwaringin Kecamatan Bogor Tengah'),
(73, '660.1/500-DL', '18 Mei 2011', 'Perluasan Sarana Kerja Balai Penelitian Bioteknologi Perkebunan', 'Jl. Salak No. 1 Bogor Kelurahan Babakan Kecamatan Bogor Tengah', 'Dr. Ir. Uhendi Haris, MSI', 'Jl. Salak No. 1 Bogor'),
(74, '660.1/502-DL', '18 Mei 2011', 'Pembangunan Balai Pengobatan Assyfa', 'Kp. Kalimurni Rt 04/1 Kelurahan Kencana Kecamatan Tanah Sareal', 'Moh. Jeri Sapei ', 'Kp. Kalimurni Rt 04/1 Kelurahan Kencana Kecamatan Tanah Sareal '),
(75, '660.1/501-DL', '18 Mei 2011', 'Pembangunan Kos-kosan', 'Jl. Curug III Rt 02/1 Kelurahan Curug Kecamatan Bogor Barat', 'Agus Prasetyo ', 'Jl. Wuwung 2 No. 27 Rt 01/09 Kelurahan Bantarjati Kecamatan Bogor Utara'),
(76, '660.1/529-DL', '26 Mei 2011', 'Pembangunan Tower CBN ', 'Jl. Raya Pajajaran No. 17 Rt 03/5 Kelurahan Bantarjati (diatas gedung CBN)', 'Bayu Dani Danarto', 'Jl. Jatipadang Raya No. 3 B Rt 07/09 Kecamatan Pasar Minggu Jakarta Selatan'),
(77, '660.1/562-DL', '26 Mei 2011', 'Pembangunan Sarana Penunjang Sekolah Budi Mulya', 'Jl. Kapten Muslihat No. 22 Rt 04/1 Kelurahan Paledang Kecamatan Bogor Tengah', 'B. Sudarto PR', 'Jl. Kapten Muslihat No. 22 Rt 04/1 Kelurahan Paledang Kecamatan Bogor Tengah'),
(78, '660.1/561-DL', '31 Mei 2011', 'Pembangunan Perkantoran (7 unit) ', 'Jl. Pajajaran 59 Rt 06/13 Kelurahan Baranangsiang Kecamatan Bogor Timur', 'Ali Senjaya', 'Jl. Wijaya Kusuma No. 50 Rt 02/01 Kelurahan Pakuan Kecamatan Bogor Selatan'),
(79, '660.1/558-DL', '31 Mei 2011', 'Pembangunan Rumah Toko (5 unit)', 'Jl. Raya Tajur No. 55 Rt 01/02 Kelurahan Tajur Kecamatan Bogor Timur', 'Hj. Tutie H. Hastika SH,MM', 'Jl. Raya Tajur No. 55 Rt 01/02 Kelurahan Tajur Kecamatan Bogor Timur '),
(80, '660.1/559-DL', '31 Mei 2011', 'Pembangunan Pertokoan  (7 unit) ', 'Jl. Bogor Baru Rt 01/01 Kelurahan Tegallega Kecamatan Bogor Tengah', 'Drs. Lili Suhata', 'Bogor Baru Blok AXI Rt 01/01 Kelurahan Tegallega Kecamatan Bogor Tengah'),
(81, '660.1/560-DL', '31 Mei 2011', 'Alih Fungsi Perkantoran Menjadi Toko', 'Jl. Dewi Sartika No. 2 Rt 01/01 Kelurahan Pabaton Kecamatan Bogor Tengah', 'Andry Kurniawan ', 'Baranangsiang Indah C. 18 Rt 04/05 Kelurahan Katulampa Kecamatan Bogor Timur'),
(82, '660.1/577-DL', '7 Juni 2011', 'Pembangunan Pertokoan (2 unit)', 'Jl. Raya Cifor Rt 01/08 Kelurahan Bubulak Kecamatan Bogor Barat', 'Hasanudin Ayun', 'Bharata Pura Rt 04/04 Kelurahan Kedung Badak Tanah Sareal '),
(83, '660.1/578-DL', '7 Juni 2011', 'Pembangunan Toko Beras ', 'Jl. Pancasan No. 27 Rt 02/07 Kelurahan Pasir Jaya Kecamatan Bogor Barat ', 'Martin Heryadi ', 'Jl. Pancasan No. 27 Rt 02/07 Kelurahan Pasir Jaya Kecamatan Bogor Barat'),
(84, '660.1/579-DL', '7 Juni 2011', 'Pembangunan Pondok Pesantren ', 'Kp. Girangsari Rt 06/08 Kelurahan Harjasari Kecamatan Bogor Selatan ', 'KH. Dalili Abdul Muti ', 'Kp. Kambangan Rt 11/03 Desa Banjarsari Kelurahan Ciawi '),
(85, '', '14 Juni 2011', 'Pembangunan Toko Material ', 'Jl. KH. Soleh Iskandar No. 88 Rt 03/10 Kelurahan Kedung Badak ', 'Tjia Hoa Tjuan', 'Jl. Palem Praja V No. 11 A Rt 07/10 Kelurahan Curug Mekar '),
(86, '', '14 Juni 2011', 'Pembangunan Klinik ', 'Jl. Raya Tajur No. 248 Rt 02/07 Kelurahan Muarasari ', 'Waty Surahman', 'Komp. Kehutanan No. 26 Rt 01/03 Kelurahan Muarasari'),
(87, '', '20 Juni 2011', 'Permbangunan Perumahan (Pesona Intiland) ', 'Kelurahan Sukaresmi Kecamatan Tanah Sareal', 'Fahrul Roji', 'Jl. Aman No. 2 Kedung Badak Baru Kelurahan Kedung Badak'),
(88, '660.1/635-DL', '20 Juni 2011', 'Pembangunan Rumah Kantor (7 unit)', 'Jl. Perintis Kemerdekaan Rt 03/03 Kelurahan Kebon Kalapa Kecamatan Bogor Tengah.', 'Junus Rusli', 'Jl. Metro Ria I Blok I No. 35 Rt 07/04 Paparinggo Kec. Tanjung Priok Jakarta Utara'),
(89, '660.1/663-DL', '20 Juni 2011', 'Pembangunan UIKA Bogor', 'Cimanggu Wates Rt 03/16 Kelurahan Kedung Badak Kecamatan Tanah Sareal', 'H. Didi Hilman', 'Sindangbarang Asri Blok A-12 Rt 06/03 Kelurahan Sindangbarang Kecamatan Bogor  Barat'),
(90, '', '20 Juni 2011', 'Pembangunan Sekolah TK', 'Kp. Kalimurni Rt 02/1 Kelurahan Kencana Kecamatan Tanah Sareal', 'Dra. Juju Juariah', 'Jl. Teratai V No. 2 Rt 04/15 Kelurahan Cilendek Baru Kecamatan Bogor Barat'),
(91, '660.1/636-DL', '20 Juni 2011', 'Pembangunan Sekolah TK', 'Danau Bogor Raya Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Panter Prawijaya', 'Danau Bogor Raya Rt 01/13 Kelurahan Cimahpar Kecamatan Bogor Utara'),
(92, '660.1/632-DL ', '20 Juni 2011', 'Pengavlingan Rumah Tinggal', 'Jl. Palayu Raya Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Ir. Thariq Abudan', 'Jl. Kumala No. 6 Villa Duta Rt 02/14 '),
(93, '660.1/682-DL        ', '30 Juni 2011', 'Pembangunan Pertokoan ', 'Jl. Letjen Ibrahim Adjie No. 199 Rt 01/03 Kelurahan Sinangbarang ', 'Eddy Muchlis', 'Jl. Bima Blok III/6 Rt 03/11 Kelurahan Klender Kec. Duren Sawit Jakarta Timur'),
(94, '660.1/693-DL', '6 Juli 2011', 'Pembangunan Kantor Jamsostek (Persero) Bogor I', 'Jl. Pemuda No. 28 Rt 04/02 Kelurahan Tanah Sareal Kecamatan Tanah Sareal', 'Refdist', 'Jl. Kemuning Kav. 936 BNI Rt 09/16 Serua Ciputat Tanggerang Selatan'),
(95, '660.1/692-DL', '6 Juli 2011', 'Pembangunan Rumah Kontrakan ', 'Kp. Kukupu Rt 03/06 Kelurahan Cibadak Kecamatan Tanah Sareal ', 'Arlan Christy', 'Taman Sari Persada Blok A No. 7 Rt 06/03 Kelurahan Cibadak Kecamatan Tanah Sareal'),
(96, '660.1/691-DL', '6 Juli 2011', 'Pembangunan Kos kosan ', 'Jl. Babakan Lebak Rt 01/05 Kelurahan Balumbang Jaya Kecamatan Bogor Barat', 'Deddy Mahendra Desta', 'Jl. Tari Indang E/1 Rt 07/08 Kelapa Gading Timur Kecamatan Kepala Gading Jakarta Utara'),
(97, '660.1/689-DL', '6 Juli 2011', 'Pembangunan Perumahan ', 'Jl. Loji Rt 01/1 Rt 04/12 Kelurahan Loji Kecamatan Bogor Barat', 'Gozi Ahmad', 'Jl. Ciwaringin No. 70 Rt 03/10 '),
(98, '660.1/690-DL', '6 Juli 2011', 'Pembangunan Pertokoan (4 Unit)', 'Jl. Baru 16-18 Rt 05/03 Kelurahan Pabaton Kecamatan Bogor Tengah ', 'Soenaryo', 'Jl. Baru No. 18 Rt 05/03 Kelurahan Pabaton Kecamatan Bogor Tengah'),
(99, '660.1/688-DL', '6 Juli 2011', 'Pembangunan Klinik ', 'Jl. Raya Tajur No 59 A Rt 01/02 Kelurahan Tajur Kecamatan Bogor Timur', 'H. Muchlis Jawas an PT. Emir Medika', 'Cijujung Rt 03/03 Kelurahan Cijujung Kecamatan Sukaraja Kab Bogor '),
(100, '660.1/687-DL', '30 Juni 2011', 'Pembangunan Pusat Perdagangan Alat Rumah Tangga M 10', 'Kelurahan Kedung Badak Kecamatan Tanah Sareal ', 'Indra Gunawan', 'Jl. Duri Mas 7 Blok J/262 A Rt 02/10 Kelurahan Duri Kepa Kecamatan Kebon Jeruk '),
(101, '660.1/716-DL', '8 Juli 2011', 'Pembangunan Pertokoan (3 unit)', 'Jl. KS. Tubun Rt 03/1 Kelurahan Cibuluh Kecamatan Bogor Utara', 'Indri Anggriani ', 'Jl. Sawojajar No. 8 Rt 01/02 Kelurahan Pabaton Kecamatan Bogor Tengah'),
(102, '660.1/717-DL', '7 Juli 2011', 'Pembangunan Perumahan ', 'Jl. Pangeran Sogiri Rt 03/04 Kelurahan Tanah Baru Kecamatan Bogor Utara ', 'H.M. Murzid Hilmi', 'Jl. Buah Batu No. 145 B Rt 06/06 Kelurahan Rurangga Kecamatan Lengkong Bandung'),
(103, '660.1/741-DL', '19 Juli 2011', 'Pembangunan Kos kosan ', 'Jl. Sancang Dalam Rt 03/07 Kelurahan Babakan Kecamatan Bogor Tengah', 'Dra. Sukaesih', 'Istana Regency II F/9 Rt 01/10 Bandung'),
(104, '660.1/752-DL', '19 Juli 2011', 'Pembangunan Pertokoan (3 unit)', 'Jl. Sawojajar No. 32 Rt 01/02 Kelurahan Pabaton Kecamatan Bogor Tengah', 'Honey Kurniawan', 'Jl. Sawojajar No. 32 Rt 01/02 Kelurahan Pabaton Kecamatan Bogor Tengah'),
(105, '660.1/742-DL', '19 Juli 2011', 'Pembangunan Perumahan ', 'Jl. Nusa Indah Kelurahan Loji Kecamatan Bogor Barat', 'Budiarto Diektur Utama PT. Sekar Artha Sentosa', 'Gd. Granadi Lt. 10 Jl. H.R. Rasuna Said Kav X-1 No. 8-9 Jakarta'),
(106, '660.1/745-DL', '19 Juli 2011', 'Pembangunan Pertokoan     (2 unit)', 'Jl. Pahlawan No. 141 Rt 02/16 Kelurahan Bondongan Kecamatan Bogor Selatan', 'Yoan Cicilia', 'Jl. Pahlawan No. 141 Rt 02/16 Kelurahan Bondongan Kecamatan Bogor Selatan'),
(107, '660.1/744-DL', '19 Juli 2011', 'Pembangunan Pusat Perdagangan Alat Rumah Tangga AC Hardware', 'Jl. Baru Poncol Rt 04/03 Kelurahan Kedung Badak Kecamatan Tanah Sareal ', 'Rudy Hartono', 'Jl. Kelapa Nias III Pc 6/10 Rt 02/17 Kelurahan Pengangasan Kecamatan Kelapa Gading '),
(108, '660.1/746-DL', '19 Juli 2011', 'Pembangunana Pertokoan  (4 unit)', 'Jl. KS. Tubun No. 20 Rt 02/1 Kelurahan Ciluar Kecamatan Bogor Utara', 'Okky Tanusi', 'Jl. Ashari Jaya No. 38 Rt 04/04 Bogor'),
(109, '660.1/739-DL', '19 Juli 2011', 'Pembangunan Toko Elektronik ', 'Jl. Dreded No. 2A Rt 01/07 Kelurahan  Empang Kecamatan Bogor Selatan', 'Lenny Widyawatie', 'Jl. Padasuka 97 Rt 01/12 Kelurahan Gudang Kecamatan Bogor Tengah'),
(110, '660.1/740-DL', '19 Juli 2011', 'Pembangunan Toko Sparepart Motor ', 'Jl. Raya Dramaga Rt 05/02 Kelurahan Sukasari Kecamatan Bogor Barat ', 'Markus Susanto', 'Jl. Sinangling No. 7 Villa Duta Rt 06/14 Kelurahan Baranangsiang Kecamatan Bogor Timur'),
(111, '660.1/740-DL', '19 Juli 2011', 'Pembangunan Klinik Gigi ?Gemilang Bakti Persada?', 'Jl. Sukasari II No. 11 D Rt 07/02 Kelurahan Sukasari Kecamatan Bogor Timur', 'Surdjono, ST', 'Jl. Sukasari II No. II D Rt 07/02 Kelurahan Sukasari Kecamatan Bogor Timur'),
(112, '660.1/763-DL', '22 Juli 2011', 'Pembangunan Salon Mobil ', 'Jl. Adnawijaya Kp. Anyar Rt 01/04 Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Sjahrun S Sikar', 'Jl. Gunung Raya No. 19 Rt 01/01 Kelurahan Cirendeu Kecamatan Ciputat Timur Tanggerang'),
(113, '660.1/762-DL', '22 Juli 2011', 'Pembangunan Pertokoan   (4 Unit)', 'Kelurahan Kedung Badak Rt 01/11 Kecamatan Tanah Sareal', 'Djamin Andi ', 'Jl. Sukamulya 1 No. 5 Rt 01/4 Kelurahan Sukasari '),
(114, '660.1/761-DL', '22 Juli 2011', 'Pembangunan Perumahan ', 'Jl. H. Abdullah Rt 01/01 Kelurahan Kayumanis Kecamatan Tanah Sareal ', 'Ganis GA', 'Jl. Kentang No. 16 Rt 01/10 Kelurahan Baranangsiang Kecamatan Bogor Timur'),
(115, '660.1/759-DL', '22 Juli 2011', 'Pembangunan Perumahan ', 'Jl. Rangga Mekar Rt 01/9 Kelurahan Rangga Mekar Kecamatan Bogor Selatan', 'Syafaat Andriyanto ', 'Komplek Duta Kencana II Jl. Duta Permata B6 No. 11 Rt 03/11 Kelurahan Kedung Badak Kecamatan Tanah Sareal'),
(116, '660.1/758-DL', '22 Juli 2011', 'Pembangunan Toko Pakaian ', 'Jl. Kapt Yusuf No. 103 Rt 01/07 Kelurahan Cikaret Kecamatan Bogor Selatan ', 'Teresyatan dan Junaedi ', 'Jl. Durian No. 19 Desa Kota Batu Rt 05/09 Kecamatan Ciomas Kabupaten Bogor'),
(117, '660.1/757-DL', '22 Juli 2011', 'Pembangunan Toko Sembako', 'Kedung Badak Rt 07/04 Kelurahan Kedung Badak Kecamatan Tanah Sarea ', 'Maryam Lalita', 'Jl. KH. Soleh Iskandar Rt 08/01 Kelurahan Kedung Badak Kecamatan Tanah Sareal '),
(118, '660.1/765-DL', '25 Juli 2011', 'Pembangunan Klinik Gigi ', 'Jl. RE. Martadinata No. 8 Kelurahan Sempur Kecamatan Bogor Selatan ', 'Drg. Rini Utari Anggraeni ', 'Jl. Selakopi No. 6 Rt 01/04 Kelurahan Loji Kecamatan Bogor Barat '),
(119, '660.1/766-DL', '25 Juli 2011', 'Pembangunan Pabrik Air Minum Dalam Kemasan     (AMDK)', 'Jl. Raya Pemda KM2 No. 6 Rt 04/12 Kelurahan Kedung Halang Kecamatan Bogor Utara ', 'RO. Kuswati ', 'Jl. Raya Pajajaran No. 97 Rt 02/03 Kalibata Kelurahan Bantarjati Kecamatan Bogor Utara'),
(120, '660.1/779-DL', '29 Juli 2011', 'Pembangunan Salon Mobil/Cuci Mobil ', 'Jl. Pahlawan No. 68 Rt 04/02 Kelurahan Empang Kecamatan Bogor Selatan ', 'Djon Gunawan ', 'Jl. Walet No. 3 Rt 04/02 Kelurahan Tanah Sreal Kecamatan Tanah Sareal '),
(121, '660.1/788-DL', '3 Agustus 2011', 'Pembangunan Showroom Mobil ', 'Jl. Raya Tajur Rt 02/07 Kelurahan Muarasari Kecamatan Bogor Selatan', 'Hanjaya Sutanto', 'Jl. Niaga Hijau II/II Rt 03/17 Kelurahan Pondok Pinang Kebayoran Lama Jakarta Selatan'),
(122, '660.1/793-DL', '3 Agustus 2011', 'Pembangunan Toko Furniture ', 'Jl. Raya Dramaga Rt 05/02 Kelurahan Margajaya Kecamatan Bogor Barat ', 'Suryadi ', 'Bisma Tengah II Blok C10 No. 4 Rt 06/10 Papanggo Tanjung Priuk Jakarta Utara'),
(123, '660.1/792-DL', '3 Agustus 2011', 'Pembangunan Showroom Mobil ', 'Jl. Raya Tajur Rt 04/05 Kelurahan Tajur Kecamatan Bogor Timur ', 'Hendra Librata ', 'Jl. Siliwangi No. 119 Rt 07/02 Kelurahan Sukasari Kecamatan Bogor Timur '),
(124, '660.1/791-DL', '3 Agustus 2011', 'Pembangunan Klinik Gigi dan Kecantikan ', 'Villa Citra Bantarjati 02/5 Rt 01/11 Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Agung Setiabudi ', 'Bogor Baru Blok C1/8 Rt 07/09 Kelurahan Tegallega Kecamatan Bogor Tengah '),
(125, '660.1/790-DL', '3 Agustus 2011', 'Perluasan Pembangunan UIKA Bogor ', 'Cimanggu Wates Rt 03/10 Kelurahan Badak Kecamatan Tanah Sareal ', 'H. Didi Hilman, SH', 'Sindang Barang Asri Blok A-12 Rt 06/03 Kelurahan Sindang Barang Kecamatan Bogor Barat'),
(126, '660.1/789-DL ', '3 Agustus 2011', 'Pembangunan Pertokoan   (2 unit)', 'Jl. Ahmad Syam Komplek IPB IV Rt 03/10 Kelurahan Tanah Baru Kecamatan Bogor Utara', 'David Kurniawan ', 'Jl. Cristal Barek 2 No. 16 Rt 01/18 Desa Pakuloran Barat Kelapa Dua Tanggerang '),
(127, '660.1/804-DL', '9 Agustus 2011', 'Pembangunan Pertokoan (4 unit)', 'Jl. Sukasari No. 11 Rt 06/02 Kelurahan Sukasari Kecamatan Bogor Timur', 'Hari Sutiawan', 'Jl. Sukasari I No. ii Rt 06/02 Kelurahan Sukasari Kecamatan Bogor Timur'),
(128, '660.1/805-DL', '9 Agustus 2011', 'Pembangunan Lembaga Kursus Salon dan Spa', 'Jl. Adnawijaya C1 No. 4 Rt 02/05 Kelurahan Tegalgundil Kecamatan Bogor Utara', 'Tri Nuningsih ', 'Jl. Bangbarung Raya No. 26 Rt 06/07 Kelurahan Bantarjati Kecamatan Bogor Utara'),
(129, '660.1/807-DL', '9 Agustus 2011', 'Pembangunan Perumahan ', 'Kelurahan Curug Kecamatan Bogor Barat', 'Steve Harsono ', 'Jl. Letjen Blok A No. 127 Jaka Sempurna Bekasi Barat '),
(130, '660.1/803-DL', '9 Agustus 2011', 'Pembangunan Perumahan ', 'Jl. Musholah Kelurahan Mekar Wangi Kecamatan Tanah Sareal ', 'M. Kasir an. PT. Kreasi Bersama Mandiri', 'Ruko Golden Madrid I Blok A No. 18 BSD Jl. Letnan Sutopo BSD City'),
(131, '660.1/802-DL', '9 Agustus 2011', 'Pembangunan Pertokoan (3 unit)', 'Jl. Ciherang Kp. Margasari Rt 03/05 Kelurahan Margajaya Kecamatan Bogor Barat', 'Drs. H. Ace Hendarmin BC, IP', 'Jl. TGK Abdurahman MM No. 11 Emperan Kecamatan Jaya Baru Kota Banda Aceh'),
(132, '660.1/816-DL', '12 Agustus 2011', 'Revisi Fungsi Pertokoan Menjadi Pertokoan dan Jasa Perbankan ', 'Jl. Dewi Sartika Rt 1/1 Kelurahan Pabaton Kecamatan Bogor Tengah', 'Gunawan', 'Jl. Suryakencana Rt 01/02 Kelurahan Babakan Pasar Kecamatan Bogor Tengah'),
(133, '660.1/814-DL', '', 'Pembangunan Kontrakan (20 Kamar)', 'Kp. Cipaku SKIP Rt 4/6 Kelurahan Cipaku Kecamatan Bogor Selatan', 'Dicky Moan', 'Komp. Perkasa No. 15 Rt 03/3 Kelurahan Cipaku Kecamatan Bogor Selatan'),
(134, '', '', '', '', '', ''),
(135, '660.1/815-DL', '', 'Pembangunan Kos-Kosan (10 pintu)', 'Kap IPB Baranangsiang Blok C/10 Kelurahan Tegallega Kecamatan Bogor Tengah', 'Gembong Winduadji', 'Panindi Pantai Rt 03/05 Manokwari Kecamatan Manokwari Papua '),
(136, '660.1/828-DL', '', 'Pembangunan Pertokoan(2 unit)', 'Jl. Brigjen Saptaji Hadi Prawira Rt 02/07 Kelurahan Cilendek Barat Bogor Barat', 'Hendri Wiharsa', 'Jl. Suryakencana No. 228 Rt 01/12 Kelurahan Gudang Kecamatan Bogor Tengah'),
(137, '', '', '', '', '', ''),
(138, '660.1/829-DL', '', 'Pembangunan Lapangan Futsal (2 lapangan)', 'Kp. Babakan Baru Rt 02/08 Kelurahan Cipaku Kecamatan Bogor Selatan ', 'Gunda Agus Susanto ', 'BTN Cipaku Indah Blok D/1 Rt 01/11 Kelurahan Cipaku Kecamatan Bogor Selatan'),
(139, '660.1/830-DL', '', 'Pembangunan Perumahan ', 'Jl. Nusa Indah No. 234 Rt 03/12 Kelurahan Loji Kecamatan Bogor Barat', 'Faris Ahmad ', 'Jl. Paledang No. 53 Rt 03/02 Kelurahan Paledang Kecamatan Bogor Tengah'),
(140, '660.1/831-DL', '', 'Pembangunan Salon Mobil ', 'Jl. Letjen Ibrahim Adjie No. 175 Rt 6/8 Kelurahan Sindang Barang Kecamatan Bogor Barat', 'Ir. H. Indra M Roesli, MM', 'Jl. Palayu Raya No. 33 Rt 4/7 Kelurahan Tegalgundil Kecamatan Bogor Utara'),
(141, '660.1/832-DL', '', 'Industri Pengemasan Kosmetik ', 'Jl. Raya Ciawi No. 280 A Kelurahan Sindangsari Kecamatan Bogor Timur ', 'Ir. Suselo Harjo an PT. Nutrifood Indonesia', 'Jl. Raya Ciawi No. 280 A Kelurahan Sindangsari Kecamatan Bogor Timur'),
(142, '660.1/840-DL ', '24 Agustus 2011', 'Pembangunan Showroom  Mobil', 'Jl. Raya Tajur Rt 01/07 Kelurahan Muarasari Kecamatan Bogor Selatan ', 'Hj. Imas Maesaroh ', 'Kp. Cileko Rt 02/06 Desa Citeko Kecamatan Cisarua Kabupaten Bogor '),
(143, '660.1/839-DL', '', 'Pembangunan Toko Aquarium ', 'Jl. Mantarena No. 2 Rt 07/03 Keluarahan Panaragan Kecamatan Bogor Tengah ', 'Melawati ', 'Jl. Veteran No. 17 Rt 07/03 Kelurahan Panaragan Kecamatan Bogor Tengah'),
(144, '660.1/850-DL', '25 Agustus 2011', 'Pembangunan Perkantoran (4 unit)', 'Jl. Ahmad Adnawijaya No. 43 Rt 01/16 Kelurahan Tegalgundil Kecamatan Bogor Utara', 'Julius Soepratman ', 'Jl. Ciliwung No. 5 Rt 03/1 Kelurahan Sempur Kecamatan Bogor Tengah'),
(145, '660.1/849-DL', '25 Agustus 2011', 'Pembangunan SMK Mekanika ', 'Jl Pangkalan II Rt 01/02 Kelurahan Kedung Halang Kecamatan Bogor Utara', 'Drs. Sukendar an Yayasan Pendawa ', 'Jl. Katelia Raya No. 26 Rt 01/09 Kelurahan Cilendek Kecamatan Bogor Barat'),
(146, '660.1/848-DL', '25 Agustus 2011', 'Pembangunan Ruko   (3 unit)', 'Jl. KH. Soleh Iskandar Rt 01/04 Kelurahan Cibadak Kecamatan Tanah Sareal', 'F. Andjarsari ', 'Bogor Raya Permai FE 1/28 Rt 01/13 Kelurahan Curug Kecamatan Bogor Barat'),
(147, '660.1/845-DL ', '25 Agustus 2011', 'Pembangunan Pertokoan (9 unit)', 'Jl. RE. Abdullah No. 14 Rt 04/05 Kelurahan Pasir Mulya Kecamatan Bogor Barat', 'Sidqi Chomis Bisyir', 'Bogor Baru Blok A4 No. 6 Rt 08/09 Kelurahan Tegallega Kecamatan Bogor Tengah'),
(148, '660.1/846-DL', '25 Agustus 2011', 'Pembangunan  Kantor ', 'Jl. Achmad Adnawijaya Rt 01/15 Kelurahan Tegalgundil Kecamatan Bogor Utara', 'Irawan Ridwan', 'Jl. Ahmad Sobana No. 69 Rt 05/02 Kelurahan Tegalgundil Kecamatan Bogor Utara'),
(149, '660.1/847-DL', '25 Agustus 2011', 'Alih Fungsi Rumah Tinggal menjadi Tempat Cuci Mobil ', 'Jl. Mayjen Ishak Djuarsa Rt 06/03 Kelurahan Gunung Batu Kecamatan Bogor Barat', 'Fitriawati', 'Jl. Minangkabau Rt 01/10 Pasar Manggis Jakarta Selatan Jakarta '),
(150, '660.1/900-DL', '', 'Pembangunan Klinik Gigi', 'Jl. KH. Soleh Iskandar No. 10 Rt 06/03 Kelurahan Kedung Badak Kecamatan Tanah Sareal ', 'Drg. Bramantio,SP,Ort', 'KJl. Kebon Kacang Rt 07/09 Kelurahan Utan Kayu Selatan Kecamatan Matraman Jakarta Timur'),
(151, '660.1/901-DL', '', 'Pembangunan Kontrakan (10 Kamar)', 'Lebak Kongsi Rt 02/07 Kelurahan Sindangsari Kecamatan Bogor Timur', 'Ardi Susandra', 'Jl. Tengah No. 10 Rt 08/03 Kelurahan Gedong Pasar Rebo Jakarta Timur'),
(152, '660.1/902-DL', '', 'Pembangunan Pertokoan   (4 unit)', 'Jl. Kebon Pedes No. 44 Rt 01/04 Kelurahan Kebon Pedes Kecamatan Tanah Sareal ', 'Mutiah', 'Jl. Empang No. 26 Rt 05/01 Kelurahan Empang Kecamatan Bogor Selatan '),
(153, '660.1/903-DL', '', 'Pembangunan Baby Spa dan Boutieq', 'Jl. Sancang No. 10 Rt 03/07 Kelurahan Babakan Kecamatan Bogor Tengah', 'Jasmin Saleh', 'Jl. Sedap Malam IV/9 Rt 03/02 Komp Pakuan '),
(154, '660.1/904-DL', '', 'Pembangunan Pertokoan (7 unit)', 'Jl. Ahmad Yani No. 126 Rt 01/04 Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', 'H. Eddi Tarmili', 'Jl. Burangrang No. 1 Rt 04/02 Kelurahan Babakan Kecamatan Bogor Tengah'),
(155, '660.1/947-DL', '', 'Perumahan', 'Kp. Kramat Rt 01/01 Kelurahan Tanah Baru Kecamatan Bogor Utara', 'Jody Nyo', 'Jl. Raya Kandang Roda Rt 03/05 Kelurahan Cimandala Kecamatan Sukaraja'),
(156, '660.1/943-DL', '6 Oktober 2011', 'Pembangunan Toko Matrial', 'Jl. Sancang Rt 03/07 Kelurahan Babakan Kecamatan Bogor Tengah', 'Yadi Prawira Firman', 'Jl. Darmawangsa No. 1 Rt 05/06 Kelurahan Babakan Kecamatan Bogor Tengah'),
(157, '660.1/944-DL', '6 Oktober 2011', 'Pembangunan Pertokoan (4 unit)', 'Jl. Bondongan Rt 02/06 Kelurahan Empang Kecamatan Bogor Selatan', 'Elisabeth Elisa', 'Jl. APT Taman Rasuna 15 UGP Rt 03/10 Menteng Atas Setia Budi Jakarta Selatan'),
(158, '660.1/945-DL', '6 Oktober 2011', 'Pembangunan Klinik Pratama', 'Jl. Raya Wangun Rt 01/02 Kelurahan Sindangsari Kecamatan Bogor Timur', 'Murni Ismail ', 'Jl. Rawa Wangun Rt 01/02 Kelurahan Sindangbarang Kecamatan Bogor Timur'),
(159, '660.1/948-DL ', '6 Oktober 2011', 'Pembangunan Pertokoan  (1 unit 3 lantai)', 'Jl. Pandu Raya No. 11 Rt 06/14 Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'M. Muhammad Saleh, SE', 'Jl. Drupada Raya No.11 Rt 01/14 Kelurahan Tegal Gundil Kecamatan Bogor Utara'),
(160, '660.1/949-DL', '6 Oktober 2011', 'Pembangunan Lapangan Futsal (2 lapangan)', 'Jl. Perdana Raya No. 7 Rt 03/10 Kelurahan Kedung Badak Kecamatan Tanah Sareal', 'Nicky Australiano L', 'Jl. Kumbang No. 8 Rt 02/02 Kelurahan Babakan Kecamatan Bogor Tengah'),
(161, '660.1/950-DL', '6 Oktober 2011', 'Pembangunan Toko', 'Jl. Surya Kencana No. 209 Rt 01/02 Kelurahan Babakan Pasar Kecamatan Bogor Tengah ', 'Lely Olivia ', 'Jl. Roda No. 130 / 90 Rt 04/02 Kelurahan Babakan Pasar Kecamatan Bogor Tengah'),
(162, '660.1/951-DL ', '6 Oktober 2011', 'Pembangunan Pertokoan (1 unit)', 'Jl. Raya Tajur 73 Rt 02/07 Kelurahan Muarasari Kecamatan Bogor Selatan', 'Ir. Kusianti', 'Jl. Villa Intan Pakuan III Rt 02/07 Tajur Bogor'),
(163, '660.1/955-DL', '10 Oktober 2011', 'Pembangunan Perumahan Bogor View 2', 'Kelurahan Semplak dan Kelurahan Cilendek Barat Kecamatan Bogor Barat', 'Agus Junaedi a.n PT. Aldi Putra Utama', 'Jl. Dewi Kunti Raya No. 58 Rt 03/16 Kelurahan Tegal Gundil Kecamatan Bogor Utara.'),
(164, '660.1/956-DL', '10 Oktober 2011', 'Showroom Mazda ', 'Jl. Pajajaran No. 45 Rt 04/03 Kelurahan Babakan Kecamatan Bogor Tengah', 'Djunaedi Hadiwijaya', 'Jl. Jatinegara Barat No. 140 Jakarta Timur'),
(165, '660.1/957-DL', '10 Oktober 2011', 'Pembangunan Klinik Pratama Gigi dan Dokter Umum', 'Jl. Tentara Pelajar No. 20 Kelurahan Ciwaringin Kecamatan Bogor Tengah', 'Drg. Iik Yani Hidayati ', 'Villa Ciomas Indah Blok H 11/37 Rt 03/14 Kelurahan Ciomas Rahayu Kecamatan Ciomas'),
(166, '660.1/969-DL', '', 'Pembangunan Pertokoan (3 unit)', 'Jl. Adnawijaya 106 Rt 01/15 Kelurahan Tegal gundil Kecamatan Bogor Utara', 'Ny. Arik Wahyu Prabandari', 'Griya Anggraini Blok G1 No. 1 Rt 09/11 Citeureup Kabupaten Bogor.'),
(167, '660.1/969-DL', '17 Oktober 2011', 'Pembangunan Toko (2 unit)              ', 'Jl. H. Ahmad Sobana Rt 03/07 Kelurahan Bantarjati Kecamatan Bogor Utara', 'Buche Tandia H', 'Jl. Sanjaya No. 5 Rt 05/06 Kelurahan Babakan Kecamatan Bogor Tengah'),
(168, '660.1/975-DL               ', '17 Oktober 2011', 'Pembangunan Toko (2 unit)', 'Jl. H. Achmad Sobana Kp. Bojong Enyod Rt 03/12 Kelurahan Tegal Gundil ', 'Ir. Chaidar Bisyir', 'Jl. Sukasari I No. 8 Rt 06/02 Kelurahan Sukasari Kecamatan Bogor Timur'),
(169, '660.1/974-DL', '17 Oktober 2011', 'Pembangunan Industri Jely ', 'Kp. Sumur Wangi No. 40 Rt 02/10 Kelurahan Kayu Manis Kecamatan Tanah Sareal', 'Kanti Rahayu ', 'Villa Bogor Indah Blok D1 No. 4 Rt 01/12 Kelurahan Ciparigi Kecamatan Bogor Utara'),
(170, '660.1/972-DL', '17 Oktober 2011', 'Pembangunan Pencucian Mobil', 'Jl. Adnawijaya No. 106 Rt 04/04 Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Ma?ruf', 'Kalibata Rt 03/01 Kelurahan Bantarjati Kecamatan Bogor Utara '),
(171, '660.1/971-DL', '17 Oktober 2011', 'Pembangunan Perumahan', 'Kelurahan Semplak Kecamatan Bogor Barat', 'Hengky MS', 'Jl. Raya Baru No. 9 Kelurahan Kedung Badak Kecamatan Tanah Sareal '),
(172, '660.1/968-DL ', '17 Oktober 2011', 'Pembangunan Majlis Ta?lim Nur Al Ghoni', 'Rt 01/09 Kelurahan Kencana Kecamatan Tanah Sareal ', 'H. Asep Burhanudin', 'Kp. Kencana No. 2 Rt 01/09 Kelurahan Kencana Kecamatan Tanah Sareal '),
(173, '660.1/970-DL', '17 Oktober 2011', 'Pembangunan Showroom Mobil ', 'Jl. Raya Tajur Rt 03/03 Kelurahan Tajur Kecamatan Bogor Timur', 'Ulung Bursa', 'Kalibata Timur Rt 11/08 Kalibata Kecamatan Pancoran Jakarta Selatan'),
(174, '660.1/987-DL', '24 Oktober 2011', 'Pembangunan Klinik Kesehatan ', 'Jl. Aria Surialaga No. 9 Rt 02/02 Kelurahan Pasir Jaya Kecamatan Bogor Barat', 'Ir. Hiadayat Salim', 'Komp BPPB Jl. Pasir Mulya Kecamatan Bogor Barat'),
(175, '660.1/988-DL', '24 Oktober 2011', 'Pembangunan Industri Packaging Kabel', 'Jl. KS. Tubun Rt 02/03 Kelurahan Cibuluh Kecamatan Bogor Utara ', 'Johan Famdi a.n PT. Sutrakabel Intimandiri ', 'Green Garden Blok A3/21 Rt 01/03 Kedoya Utara Kecamatan Kebon Jeruk Jakarta Pusat'),
(176, '660.1/989-DL', '24 Oktober 2011', 'Pembangunan Pertokoan', 'Jl. Ahmad Sobana Rt 05/07 Kelurahan Bantarjati Kecamatan Bogor Utara', 'Adi Rukmadany', 'Jl. Dumeling No. 14 Rt 03/14 Kelurahan Baranangsiang Kecamatan Bogor Timur'),
(177, '660.1/973-DL', '17 Oktober 2011', 'Pembangunan Perumahan ', 'Kedung Jaya Kecamatan Tanah Sareal ', 'Djunaedi Suhanda', 'Jl. Raya Semplak No. 09 Rt 01/06 Kelurahan Semplak Kecamatan Bogor Barat.'),
(178, '660.1/1011-DL ', '31 Oktober 2011', 'Pembangunan Perkantoran (2 unit 3 lantai)', 'Jl. Raya Wangun Rt 04/02 Kelurahan Sindangsari Kecamatan Bogor Timur', 'Armen Yusuf ', 'Jl. Seruni II No. 15 Rt 02/02 Kelurahan Pakuan Kecamatan Bogor Selatan'),
(179, '660.1/1017-DL', '31 Oktober 2011', 'Pembangunan Perumahan', 'Cimanggu Lamping Kelurahan IKedung Waringin Kecamatan Tanah Sareal ', 'Kristiono', 'Jl. Penataran Blok N III No. 12 Komp Cimanggu Permai I Bogor '),
(180, '660.1/1015-DL', '31 Oktober 2011', 'Pembangunan Kantor Pos Bogor dan Giro 16000', 'Jl. Ir. H Djuanda No. 5 Rt 03/02 Kelurahan Paledang Kecamatan Bogor Tengah', 'Jafar an Kepala Kantor Pos Bogor', 'Jl. Ir. H Juanda No. 5 Rt 03/02 Kelurahan Paledang Kecamatan Bogor Tengah'),
(181, '660.1/1013-DL', '31 Oktober 2011', 'Pembangunan Toko Sembako', 'Jl. Cimanggu Raya No. 13 Rt 02/01 Kelurahan Kedung Waringin Kecamatan Tanah Sareal', 'A. Ani', 'Gg. M Tarmidi Rt 03/06 Kelurahan Cibogor Kecamatan Bogor Tengah'),
(182, '660.1/1018-DL', '31 Oktober 2011', 'Pembangunan Pertokoan (4 unit)', 'Jl. Adnawijaya 54-56 Rt 04/01 Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'M. Riza', 'Jl. Ceremai Ujung No. 240 Rt 01/05 Kelurahan Bantarjati Kecamatan Bogor Utara'),
(183, '660.1/990-DL', '24 Oktober 2011', 'Pembangunan Pertokoan', 'Jl. Pandu Raya 129/31 Rt 03/16 Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Dra Widiastuti ', 'Jl. Bhisma 4/21 Rt 4/21 Rt 04/15 Perumahan Indraprasta II Kelurahan Tegalgundil Kecamatan Bogor Utara '),
(184, '660.1/1012-DL', '31 Oktober 2011', 'Pembangunan Perumahan    Mount View Residence', 'Kelurahan Kertamaya Kecamatan Bogor Selatan ', 'Basuki Kurniawan a.n PT. Rivela International ', 'Komp Golden Plaza Blok B-25 Jl. RS Fatmawati No. 15 Jakarta Selatan'),
(185, '660.1/1098-DL', '14 November 2011', 'Pembangunan Perumahan', 'Jl. KH. M. Syarifudin Rt 01/03 Kelurahan Bubulak Kecamatan Bogor Barat ', 'H. Erik Irawan Suganda', 'Jl. Merdeka No. 121 Bogor Kelurahan Ciwaringin Kecamatan Bogor Tengah'),
(186, '660.1/1096-DL', '14 November 2011', 'PembangunannToko Material', 'Jl. KH. Soleh Iskandar Rt 04/03 Kelurahan Kedung Badak Kecamatan Tanah Sareal ', 'Winky Soesanto', 'Cluster Jade No. 36 Rt 01/06 PHG Serpong Tanggerang.'),
(187, '660.1/1097-DL ', '14 November 2011', 'Pembangunan Pertokoan ', 'Jl. KH. Soleh Iskandar Rt 05/11 Kelurahan Kedung Badak Kecamatan Tanah Sareal', 'Edwin Setiadi', 'Jl. Cingcau No. 30 Rt 01/07 Kelurahan Gudang Kecamatan Bogor Tengah'),
(188, '660.1/1095-DL ', '14 November 2011', 'Pembangunan Kantor', 'Jl. Raya Ciomas Bojong Menteng Rt 01/02 Kelurahan Pasir Mulya Kecamatan Bogor Barat', 'Faisal A Thalib', 'Jl. Lolongok Rt 02/03 Kelurahan Empang Kecamatan Bogor Selatan'),
(189, '660.1/1099-DL', '14 November 2011', 'Pembangunan Kontrakan (20 kamar)', 'Jl. Sukajaya 2 No. 14 Rt 04/05 Kelurahan Tajur Kecamatan Bogor Timur', 'Danial Nagaria', 'Jl. Sukajaya 2 No. 14 Rt 04/05 Kelurahan Tajur Kecamatan Bogor Timur'),
(190, '660.1/972-DL', '17 Oktober 2011', 'Pembangunan Pencucian Mobil dengan Deskripsi Identitas Pemrakarsa', 'Jl. Adnawijaya 106 Rt 04/04 Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Ma?ruf', 'Kalibata Rt 03/11 Kelurahan Bantarjati Kecamatan Bogor Utara'),
(191, '660.1/1010-DL', '31 Oktober 2011', 'Pembangunan Kantor', 'Jl. Sancang No. 6 Rt 01/02 Kelurahan Babakan Kecamatan Bogor Tengah', 'Ridwan Haris', 'Jl. Sedap Malam IV/9 Rt 03/02 Kelurahan Pakuan Kecamatan Bogor Selatan'),
(192, '660.1/1151-DL ', '22 November 2011', 'Kantor Dinas Kependudukan dan Pencatatan Sipil Kota Bogor', 'Jl. Ahmad Adnawijaya Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Drs. Agung Prihanto Selaku Sekretaris Dinas Kependudukan dan Pencatatan Sipil Kota Bogor', 'Curug Permai Blok N No. 5 Rt 005/010 Kelurahan Curug Kecamatan Bogor Barat'),
(193, '660.1/1114-DL', '17 November 2011', 'Revisi Pembangunan Perumahan Kosasih Andi ', 'Jl. Tumenggung Wiradiredja Kelurahan Cimahpar Kecamatan Bogor Utara', 'Kosasih Andi', 'Komplek Ruko Bangbarung Grande No. 2 Jl. Achmad Adnawijaya Kav 27 Rt 006 Rw 014 Kelurahan Tegal Gundil Kecamatan Bogor Utara'),
(194, '660.1/1157-DL ', '28 November 2011', 'Pembangunan Perumahan', 'Cibeureum Rt 04/05 Kelurahan Mulyaharja Kecamatan Bogor Selatan', 'PT. Cyberindo ', 'Jl. HR. Rasuna Said Kav c-17 Kuningan Jakarta Selatan'),
(195, '660.1/    -DL ', '28 November 2011', 'Pembangunan Perumahan ', 'Jl. Loji Pagentongan Kelurahan Loji Kecamatan Bogor Barat', 'Neo Sugandi', 'Jl. Mandu No. 7 Rt 01/03 Kelurahan Mangga Besar Kecamatan Taman Sari Jakarta Barat.'),
(196, '660.1/1156-DL', '28 November 2011', 'Pembangunan Perumahan', 'Jl. Pabuaran Rt 005/008 Kelurahan Cilendek Timur Kecamatan Bogor Barat', 'Direktur PT. Pilar Tata Pratama', 'Jl. Hamid No. 10 Rt 001/003 Kelurahan Kedung Waringin Kecamatan Tanah Sareal '),
(197, '660.1/1153-DL', '28 November 2011', 'Pembangunan Kos Kosan', 'Tegal Mangga Rt 01/03 Kelurahan Babakan Kecamatan Bogor Tengah', 'Tati Amalia Badriat', 'Jl. Sukasari No. 20 Rt 006/003 Kelurahan Sukasari Kecamatan Bogor Tengah'),
(198, '660.1/1154-DL', '28 November 2011', 'Pembangunan Pertokoan ', 'Jl. Pandu Raya No.11 Rt 06/14 Kelurahan Tegal Gundil Bogor Utara', 'H. Muhammad Saleh, SE', 'Jl. Drupada Raya No. 11 Rt 01/14 Kelurahan Tegal Gundil Kecamatan Bogor Utara'),
(199, '660.1/1155-DL', '28 November 2011', 'Pembangunan Sekolah TK Mutiara Sari', 'Jl. Ciheuleut Rt 04/06 Kelurahan Cibuluh Kecamatan Bogor Utara', 'Ahmad Abdul Kohar', 'Kelurahan Cibuluh Kecamatan Bogor Utara'),
(200, '660.1/1158-DL', '28 November 2011', 'Pembangunan Pertokoan', 'Jl. KS. Tubun Gg Kondang Rt 03/08 Kelurahan Cibuluh Kecamatan Bogor Utara', 'Elis Suryani', 'Villa Bogor Indah Rt 04/12 Kelurahan Ciparigi Kecamatan Bogor Utara'),
(201, '660.1/1159-DL', '28 November 2011', 'Pembangunan Toko Bahan Bangunan ', 'Jl. Achmad Adnawijaya Rt 003/004 Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Fahad Muhammad', 'Jl. Sedane No. 59 Rt 03/03 Kelurahan Empang Kecamatan Bogor Selatan '),
(202, '660.1/1195-DL ', '6 Desember 2011', 'Pembangunan Klinik Pratama ', 'Kp. Kalimurni Rt 04/1 Kelurahan Kencana Kecamatan Tanah Sareal', ' Moh Jeri Sapei', 'Kp. Kalimurni Rt 04/1 Kelurahan Kencana Kecamatan Tanah Sareal '),
(203, '660.1/1189-DL', '', 'Pembangunan Lapangan  Olahraga', 'Jl. Ceremai Ujung Rt 01/05 Kelurahan Bantarjati Kecamatan Bogor Utara', 'Syarif Kemala', 'Jl. Sempur No. 25 Bogor Rt 03/1 Kelurahan Sempur Kecamatan Bogor Tengah'),
(204, '660.1/490-DL', '6 Desember 2011', 'Pembangunan Kos- Kosan ', 'Kp. Babakan Lebak Rt 02/05 Kelurahan Balumbang Jaya Kecamatan Bogor Barat', 'Yuliati Siti Aminah ', 'Jl. Kayarun No. 12 Rt 02/14 Kelurahan Halim Perdana Kusuma Kecamatan Makasar Jakarta Timur'),
(205, '660.1/1191-DL', '6 Desember 2011', 'Pembangunan Klinik Utama Renata', 'Jl. Ahmad Sobana No. 39 Rt 03/07 Kelurahan Bantarjati Kecamatan Bogor Utara', 'Dra. Feny Indriani Y', 'Jl. Ahmad Sobana No. 39 Rt 03/07 Kelurahan Bantarjati Kecamatan Bogor Utara'),
(206, '660.1/1192-DL', '6 Desember 2011', 'Pembangunan Pertokoan (4 unit)', 'Jl. Pancasan No. 28 Rt 02, 03 / 07 Kelurahan Pasir Jaya Kecamatan Bogor Barat', 'Abdullah Umar B', 'Jl. Letjen Ibrahim Adjie Rt 04/03 Kelurahan Loji Kecamatan Bogor Barat'),
(207, '660.1/1193-DL ', '6 Desember 2011', 'Pembangunan Perumahan (15 unit)', 'Jl. Cimangu Permai Rt 01/09 Kelurahan Kedung Jaya Kecamatan Tanah Sareal', 'Najibah Ali ', 'Jl. Merdeka No. 170 Rt 02/09 Kelurahan Ciwaringin Kecamatan Bogor Tengah'),
(208, '660.1/1192-DL', '', 'Pembangunan Toko Mebel', 'Jl. Muara No. 21 A Rt 02/01 Kelurahan Pasir Kuda Kecamatan Bogor Barat', 'Jamal Jafar Seff', 'Jl. Lolongok Gg Tengah Rt 01/02'),
(209, '660.1/1135-DL', '22 November 2011', 'Penanaman Kabel Serat Optik Crossing / Melintasi Jalan Kereta Api  ', 'Stasiun Cilebud-Stasiun Kebon Pedes ', 'GM  Regulatory dan Government Relation Graha XL', 'Jl. Mega Kuningan Jakarta '),
(210, '', '', '', '', '', ''),
(211, '660.1/1247-DL', '20 Desember 2011', 'Pembangunan Pertokoan   (4 unit)', 'Jl. RE Sumantadiredja Kp. Bojong Rt 06/01 Kelurahan Pamoyanan Kecamatan Bogor Selatan ', 'Chandra Nery ', 'Jl. RE Sumantadiredja Rt 05/07 Kelurahan Pamoyanan Kecamatan Bogor Selatan'),
(212, '660.1/1246-DL', '', 'Pembangunan Pertokoan', 'Jl. Ahmad Adnawijaya Rt 01/04 Kelurahan Tegal Gundil Kecamatan Bogor Utara', 'Drs. HR. Dadang Sayuti ', 'Jl. Ahmad Adnawijaya Rt 01/04 Kelurahan Tegal Gundil Kecamatan Bogor Utara'),
(213, '660.1/1250-DL ', '20 Desember 2011', 'Pembangunan Pertokoan (2 unit)', 'Jl. Sawojajar 13/7 Rt 01/02 Kelurahan Pabaton Kecamatan Bogor Tengah', 'Melawati Djapa ', 'Jl. Pajajaran No. 01 Rt 01/11 Kelurahan Baranagsiang Kecamatan Bogor Timur'),
(214, '660.1/1249-DL', '20 Desember 2011', 'Pembangunan PAUD Formal dan Sarana Penunjang lainnya', 'Jl. Aria Surialaga No. 9 Rt 02/02 Kelurahan Pasir Jaya Kecamatan Bogor Barat', 'Hj. Aan Siti Hasanah an Yayasan Annizariyyah', 'Jl. Pasir Kuda No. 102 /09 Rt 01/05 Kelurahan Pasir Kuda Kecamatan Bogor Barat ');
INSERT INTO `sppl_lampau` (`id`, `no_sppl`, `tanggal`, `nama_kegiatan`, `alamat_kegiatan`, `nama_pemilik`, `alamat_pemilik`) VALUES
(215, '660.1/1231-DL', '', 'Pembangunan Showroom Motor', 'Jl. Raya Cimanggu Rt 02/15 Kelurahan Kedung Waringin Kecamatan Tanah Sareal ', 'Daniel', 'Jl. Palem Putri II No. 24 Rt 01/01 Taman Yasmin Kelurahan Curug Kecamatan Bogor Barat'),
(216, '660.1/1251-DL', '20 Desember 2011', 'Pembangunan Klinik Kesehatan Sehati ', 'Jl. Pamoyanan Bogor Park Residence Kav No. A-05 Kelurahan Pamoyanan Kecamatan Bogor Selatan', 'Samuel Stemi', 'Bogor Baru Blok C 3/16 Rt 07/03 Kelurahan Tegallega Kecamatan Bogor Tengah'),
(217, '660.1/1276-DL', '30 Desember 2011', 'Pembangunan Pertokoan (5 Unit)', 'Jl. Letjen Ibrahim Adjie No. 159 Rt 02/04 Kelurahan Loji Kecamatan Bogor Barat', 'Jeti', 'Jl. APT Atap Merah 1083 Jakarta Pusat'),
(218, '', '', '', '', '', ''),
(219, '660.1/08-DL', '3 Januari 2012', 'Pembangunan Pertokoan (5 unit)', 'Jl. Sukasari I No. 4 Rt 06/02 Kelurahan Sukasari Kecamatan Bogor Timur', 'Jefry', 'Jl. Sukasari I No. 4 Rt 06/02'),
(220, '660.1/07-DL ', '3 Januari 2012', 'Pembangunan SMK Windian Nugraha', 'Jl. Mekar Saluyu Rt 03/16 Kelurahan Cilendek Barat Kecamatan Bogor Barat', 'Drs. Tommy Wardiatmo an. Yayasan Windian Nugraha', 'Jl. Mekar Saluyu Cilendek Barat'),
(221, '660.1/05-DL ', '3 Januari 2012', 'Pembangunan Gedung Olahraga ', 'Jl. Raya Tajur Rt 05/04 Kelurahan Tajur Kecamatan Timur ', 'Rudi Kurnianto', 'Perum Pulo Armen No. 63 Rt 06/04 Kelurahan Baranangsiang Kecamatan Bogor Timur'),
(222, '660.1/03-DL ', '3 Januari 2012', 'Pembangunan Toko Alumunium', 'Jl. Mayjen Ishak Djuarsa No. 3 Rt 01/01 Kelurahan Loji Kecamatan Bogor Barat ', 'Linawati ', 'Jembatan Gambang II/28 Rt 14/04 Kelurahan Penjagalan Kecamatan Penjaringan Jakarta Utara'),
(223, '660.1/01-DL ', '3 Januari 2012', 'Pembangunan Sarana Olahraga', 'Jl. HM. Syarifudin No. 13 Rt 04/09 Kelurahan Sindangbarang Kecamatan Bogor Barat', 'Syafril Kemala', 'Jl. Sempur No. 25 Rt 03/1 Kelurahan Sempur Kecamatan Bogor Tengah'),
(224, '660.1/02-DL ', '3 Januari 2012', 'Pembangunan Penginapan (9 Penginapan)', 'Jl. Achmad Adnawijaya ', 'Hendra Winata', 'Jl. Melati VI/16 Rt 03/06 Kelurahan Sindangrasa Kecamatan Bogor Timur '),
(225, '660.1/04-DL  ', '3 Januari 2012', 'Pembangunan Toko Mebeuler', 'Jl. Adnawijaya Rt 03/04 Kel Tegal Gundil Kec. Bogor Utara', 'Hj. R. Evi Sukaesih ', 'Jl. Calincing I Blok B3/ 13-14 Bantarjati Permai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sppl_lampau`
--
ALTER TABLE `sppl_lampau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sppl_lampau`
--
ALTER TABLE `sppl_lampau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

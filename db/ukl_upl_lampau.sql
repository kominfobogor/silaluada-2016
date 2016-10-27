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
-- Table structure for table `ukl_upl_lampau`
--

CREATE TABLE `ukl_upl_lampau` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(30) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `nama_kegiatan` text,
  `alamat_kegiatan` text,
  `nama_pemilik` varchar(255) DEFAULT NULL,
  `alamat_pemilik` text,
  `keterangan` text,
  `alamat_kegiatan_lain` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukl_upl_lampau`
--

INSERT INTO `ukl_upl_lampau` (`id`, `no_surat`, `tanggal`, `nama_kegiatan`, `alamat_kegiatan`, `nama_pemilik`, `alamat_pemilik`, `keterangan`, `alamat_kegiatan_lain`) VALUES
(2, '', '28 Maret 2011', 'Instalasi Pengolahan Air (IPA) Dekeng II ', 'Kelurahan Genteng Kecamatan Bogor Selatan ', 'Direktur Utama PDAM Tirta Pakuan ', '', '', ''),
(3, '', '5-Apr-11', 'Pusat Perbelanjaan Buah-buahan ', 'Jl. Pajajaran No. 43 Kelurahan Babakan Kecamatan Bogor Tengah', 'Yeni Tania', '', '', 'Jl. Pajajaran No. 43 Kelurahan Babakan Kecamatan Bogor Tengah'),
(4, '', '20 Mei 2011', 'Perbaikan Pipa Distribusi Air Minum ', 'Kel. Sukasari Kec Bogor Timur\nKel. Gudang, Kel Babakan Pasar, \nKec. Bogor Tengah \nKel Bondongan, Kel Empang, Kel. Batu Tulis Kec. Bogor Selatan\n', 'Direktur Utama PDAM Tirta Pakuan', '', '', 'Jl. Siliwangi No. 121 Kel Sukasari Kec Bogor Timur'),
(5, '', '16 Juni 2011', 'Rumah Sakit Umum Medika Dramaga ', 'Jl. Raya Dramaga Rt 01/06 Kelurahan Margajaya Kecamatan Bogor Barat', 'Dr. Salwan Hartano\nDirektur PT. Dramaga Bina Medika\n', '', '', 'Jl. Raya Dramaga Rt 01/06 Kelurahan Margajaya Kecamatan Bogor Barat'),
(6, '', '19 Juli 2011', 'Pusat Pertokoan Milenium Propertindo', 'Jl. Pangeran Sogiri Rt 04/03 Kelurahan Tanah Baru Kecamatan Bogor Utara', 'PT. Milenium Propertindo', '', '', 'Jl. Pangeran Jayakarta 121/19 Rt 006/007 Mangga Dua Selatan Jakarta'),
(7, '', '19 Juli 2011', 'Rumah Sakit Vania', 'Jl. Siliwangi No. 11 Rt 03/03 Kecamatan Bogor Timur ', 'Direktur PT. Karunia Asih Cemerlang', '', '', 'Jl. Pajajaran Indah 1/7 Rt 05/XIII'),
(8, '', '22 Juli 2011', 'Horison Butik Hotel Bogor ', 'Jl. Pakuan Rt 4/11 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'General Manager Horison Butik Hotel Bogor \nan. Gunawan Elisa\n', '', '', 'Jl. Dahlia Komplek Pakuan Kelurahan Pakuan Kecamatan Bogor Selatan'),
(9, '', '24 Agustus 2011', 'Rumah Makan Pajajaran', 'Jl. Pajajaran Indah Raya No. 9 Rt 001/11 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Andreyadi Miharja', '', '', 'Jl. Pajajaran Indah Raya No. 9 Rt 001/11 Kelurahan Baranangsiang Kecamatan Bogor Timur '),
(10, '', '22-Sep', 'Rumah Makan Hatsu-Tei', 'Jl. Kumbang No. 33 Kelurahan Babakan Kecamatan Bogor Tengah', 'Rumah Makan Hatsu-Tei', '', '', 'Jl. Kumbang No. 33 Kelurahan Babakan Kecamatan Bogor Tengah'),
(11, '', '13 Oktober 2011', 'Rumah Sakit Pajajaran ', 'Jl. Pajajaran Kelurahan Bantarjati Kecamatan Bogor Utara', 'PT. Pradana Anugrah Mulia ', '', '', 'Jl. Pajajaran Kelurahan Bantarjati Kecamatan Bogor Utara'),
(12, '', '10 Oktober 2011', 'SPBU Total Oil Indonesia', 'Jl. Jenderal Ahmad Yani No. 16 Rt 005/03 Kelurahan Sempur Kecamatan Bogor Tengah', 'Direktur PT. Total Oil Indonesia ', '', '', 'Jl. Jenderal Ahmad Yani No. 16 Rt 005/03 Kelurahan Sempur Kecamatan Bogor Tengah'),
(13, '', '24 Oktober 2011', 'SPBU Sindangbarang ', 'Jl. Letjen Ibrahim Adjie Rt 01/02 Kelurahan Sindangbarang Kecamatan Bogor Barat Kota Bogor ', 'SPBU Sindang Barang ', '', '', 'Pondok Kopi Indah Blok PA/4 Rt 010/001 Kelurahan Pondok Kopi Kecamatan Duren Sawit Jakarta Timur '),
(14, '', '24 Oktober 2011', 'Rumah Makan dan Wisma Pondok Nirmala', 'Jl. KH. Soleh Iskandar No. 91 Rt 01/10 Kelurahan Kedung Badak Kecamatan Tanah Sareal', 'Rumah Makan dan Wisma Pondok Nirmala ', '', '', 'Jl. KH. Soleh Iskandar No. 91 Rt 01/10 Kelurahan Kedung Badak Kecamatan Tanah Sareal'),
(15, '', '24 Oktober 2011', 'Restoran Dapur Geulis ', 'Jl. Lodaya II Rt 02/02 Kelurahan Babakan Kecamatan Bogor Tengah', 'Pemilik Restoran Dapur Geulis ', '', '', 'Jl. Baranagsiang III Blok G no. 5 Rt 05/08 Kelurahan Baranagsiang Kecamatan Bogor Timur '),
(16, '', '24 Oktober 2011', 'Rumah Bersalin UMMI', 'Jl. Empang II No. 2 Rt 04/02 Kelurahan Empang Kecamatan Bogor Selatan', 'Direktur PT. Dutagraha Sekawan ', '', '', 'Jl. Otista Cawang Jakarta'),
(17, '', '1-Nov-11', 'Industri Pakaian Jadi PT. Bina Karib Lestari', 'Jl. Raya Bogor ? Parung KM. 5 Rt 03/13 No. 83 Kelurahan Cilendek Barat Kecamatan Bogor Barat', 'Direktur PT. Bina Karib Lestari', '', '', 'Jl. Raya Bogor ? Parung KM. 5 Rt 03/13 No. 83 Kelurahan Cilendek Barat Kecamatan Bogor Barat'),
(18, '', '24 Juni 2011', 'Showroom Mobil dan Bengkel ', 'Jl. KH. Soleh Iskandar Rt 01/08 Kelurahan Kedung Badak Kecamatan Tanah Sareal', 'Supriyadi Syarif Safitri', '', '', 'Jl. KH. Soleh Iskandar Rt 01/08 Kelurahan Kedung Badak Kecamatan Tanah Sareal'),
(19, '', '14-Nov-11', 'Hotel Amaroosa Bogor an PT. Aramanda Bogor Indonesia ', 'Jl. Otto Iskandardinata No. 84 Rt 04/02 Kelurahan Baranangsiang Kecamatan Bogor Timur', 'Andromeda, BA,SH', '', '', 'Jl. Otto Iskandardinata No. 24 Kelurahan Baranangsiang Kecamatan Bogor Timur'),
(20, '', '14-Nov-11', 'Mid East Restaurant Shisha Caf? dan Lounge', 'Jl. Sancang No. 8B Rt 002/002 Kelurahan Babakan Kecamatan Bogor Tengah', 'Mid East Restaurant Shisha Caf? dan Lounge', '', '', 'Jl. Lolongok No. 21 Rt 003/015 Kelurahan Babakan Kecamatan Bogor Tengah '),
(21, '', '14-Nov-11', 'Fave Hotel', 'Jl. Cidangiang Rt 04/05 Kelurahan Tegallega Kecamatan Bogor Tengah', 'PT. Catur  Utama Pangestu ', '', '', 'Jl. Walet Permai 3/18 Jakarta Utara'),
(22, '', '1-Nov-11', 'Hotel Botani ', 'Jl. Raya Pajajaran Rt 04/05 Kelurahan Tegallega Kecamatan Bogor Tengah', 'PT. Bogor Life Science dan Technologi', '', '', 'Jl. Kencana No. 3 Rt 001/003 Kelurahan Babakan Kecamatan Bogor Tengah'),
(23, '', '14-Nov-11', 'Hotel Grand Royal Pajajaran', 'Jl. Pajajaran No. 12 Kelurahan Babakan Kecamatan Bogor Tengah ', 'PT. Hotel Graha Royal Pajajaran ', '', '', 'Jl. Pajajaran No. 12 Kelurahan Babakan Kecamatan Bogor Tengah '),
(24, '', '22-Nov-11', 'Residential & Condotel Bogor Icon', 'Jl. Raya Baru No. 1 Kelurahan Cibadak Kecamatan Tanah Sareal', 'Direktur PT. Gapura Kecamatan Abadi', '', '', 'Jl. Raya Baru No. 1 Kelurahan Cibadak Kecamatan Tanah Sareal'),
(25, '', '12 Desember 2011', 'Pool Bus dan SPBU PT. Ekasari Lorena Transport', 'Jl. Raya Tajur No. 106 Kelurahan Tajur Kecamatan Bogor Timur ', 'PT. Ekasari Lorena Transport', '', '', 'Jl. KH. Hasyim Ashari No. 15 C'),
(26, '', '1-Nov-11', 'Pertokoan Tegal Gundil ', 'Ahmad Adnawijaya Kelurahan Tegal Gundil Kecamatan Bogor Utara ', 'Liauw Ahmad Santosa', '', '', 'Jl. Batu Tulis No. 14 Kelurahan Bondongan Kecamatan Bogor Selatan'),
(27, '', '10-Nov-11', 'SPBU PT. Vyati Agra ', 'Letjen Ibrahim Adjie Rt 01/02 Kelurahan Sindangbarang Kecamatan Bogor Barat', 'SPBU Sindangbarang ', '', '', 'Pondok Kopi Indah Blok PAJ4 Rt 001/001 '),
(28, '', '14-Nov-11', 'Pembangunan Jaringan  Gas Bumi untuk Rumah Susun Sewa Menteng Asri Kota Bogor ', 'Jl. Dr. Semeru Jl. Medika Kelurahan Menteng Kecamatan Bogor Barat', 'Direktur Pembinaan Usaha Hilir Migas', '', '', 'Jl. HR. Rasuna Said Kav B5 Jakarta Selatan 12910'),
(29, '', '1-Nov-11', 'Pasar Cilendek an PT. Delta Bravo Indonesia ', 'Jl. Bridgen Saptaji Hadiprawira No. 49 Kelurahan Cilendek Barat Kecamatan Bogor Barat', 'Direktur PT. Delta Bravo Indonesia ', '', '', 'Jl. Pasar Minggu No. 3A Rt 002/05 Kelurahan Pejaten Barat Kecamatan Pasar  Minggu Jakarta Selatan'),
(30, '', '22-Nov-11', 'Bengkel PT. Astra International Auto 2000 Cabang Yasmin ', 'Jl. KH. Abdullah Bin Nuh Kelurahan Cibadak Kecamatan Tanah Sareal ', 'PT. Asia International ? Auto 2000 Cabang Yasmin ', '', '', 'Jl. KH. Abdullah Bin Nuh Kelurahan Cibadak Kecamatan Tanah Sareal'),
(32, '660.1/39-DL', '13 Januari 2012', 'Restoran Makaroni panggang ', 'Jl. Salak No. 24 Kelurahan Babakan Kecamatan Bogor Tengah Kota Bogor ', 'Pemillik macaroni panggang ', 'Cibereum RT.002/004 Kelurahan Mulyaharja Kecamatan Bogor Selatan ', 'PT. Enviro Indobuana', ''),
(34, '660.1/60-DL', '24 Januari 2012', 'Restoran Ayam Cacah ', 'Hl. H. Achmad Adnawijaya Kelurahan Tegal Gundil Kecamatan Bogor Utara ', 'Hendro Wicaksono ', 'Villa Permata No. 7 RT.001/012 Kelurahan Tegal Gundil Kecamatan Bogor Utara ', 'PT. Enviro Indobuana ', ''),
(36, '660.1/61-DL', '24 Januari 2012', 'Perumahan Tanah Baru Residence ', 'Jl. Tumenggung Wiradireja KelurahannTanah Baru Kecamatan Bogor Utara ', 'Alwi Setiawan ', 'Jl. Pasar Pagi No. 47 Kelurahan Roa Malaka  Kecamatan Tambora Jakarta Barat ', 'PT. Enviro Indobuana ', ''),
(38, '660.1/117-DL', '13 Febuari 2012', 'RSIA Juliana ', 'Jl. Raya Tajur No. 75 Kelurahan Tajur Kecamatan Bogor Timur ', 'Alwan Prasetia ', 'Jl. Raya Tajur No. 75 Kelurahan Tajur Kecamatan Bogor Timur ', 'PT. Indoconsult', ''),
(40, '660.1/118-DL', '13 Febuari 2012', 'Pertokoan Sinbad Shopping Centre ', 'Jl. KH. Abdullah Bin Nuh RW. 001 Kelurahan Sindangbarang Kecamatan Bogor Barat ', 'Ir. Amir Balfas', 'Jl. Cempaka Putih Tengah 27 C/1 RT.06/08 Kelurahan Cempaka Putih Jakarta Pusat ', 'PT. Eranusa ', ''),
(42, '660.1/144-DL', '21 Febuari 2012', 'Restoran Pajajaran ', 'Jl. Pajajaran Kelurahan Bantarjati Kecamatan Bogor Utara ', 'Romzi', 'Jl. Tunjung Biru No. 1 RT.002/014 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'PT. Indoconsult ', ''),
(44, '660.1/185-DL', '02 Maret 2012', 'Perumahan Cluster Hollywood Greenwood Residence ', 'Jl. Pangeran Sogiri Kel tanah Baru Kec Bogor Utara ', 'Novita Santoso ', 'JL. KH. Soleh Iskandar', 'PT. Enviro Indobuana', ''),
(46, '660.1/186-DL', '02 Maret 2014', 'Restoran Ayam Geprek Istimewa ', 'Jl. H. Ahmad Sobana No. 27 Kel Bantarjati Kec Bogor Utara ', 'Yudo Yuwono ', 'Villa Citra Bantarjati Blok A No. 1 RT.006/005 Kel Tegal Gundil Kec Bogor Utara ', 'PT. Enviro Indobuana', ''),
(48, '660.1/237-DL', '12 Maret 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Restoran Sariwangi ', 'Jl. Ringroad Terminal Bubulak Kp. Bubulak Rt 01/11 Kelurahan Bubulak Kecamatan Bogor Barat', 'Melitawati Kawitan ', 'Jl. Batutulis No. 93 Rt 005/004 Kelurahan Batutulis Kecamatan Bogor Selatan ', 'PT. Enviro Indobuana', ''),
(50, '660.1/224-DL', '12 Maret 2012', 'Pusat Pertokoan Sinar Bogor ', 'Jl. Pajajaran No. 21 Rt 03/05 Kelurahan  Bantarjati Kecamatan Bogor Utara ', 'H. Umar Ahmad Batarfie', 'Jl. Pajajaran Kp. Bangkalan Rt 03/05 Kelurahan Bantarjati ', 'PT. Sujanji Citra', ''),
(52, '660.1/184-DL', '29 Febuari 2012', 'Restoran Mbah Jingkrak ', 'Jl. Kumbang No. 15 Rt 02/04 Kelurahan Babakan Kecamatan Bogor Tengah', 'Budianto', 'Jl. Kumbang No. 15 Rt 02/04 Kelurahan Babakan Kecamatan Bogor Tengah', 'PT. Sujanji Citra', ''),
(53, '', '', '', '', '', '', '', ''),
(54, '660.1/265-DL', '20 Maret 2012', 'Klinik Bogor Kidney Center', 'Jl. Pajajaran No. 41 Rt 03/04 Kelurahan Babakan Kecamatan Bogor Tengah', 'H. Muhlis Jawas', 'Jl. Raya Semplak Cilendek Barat No. 26 Bogor ', 'PT. Indo Citra ', ''),
(56, '660.1/271-DL ', '21 Maret 2012', 'Sahira Butik Hotel ', 'Jl. Ahmad Yani No. 17-23 Kel Tanah Sareal Kec Tanah Sareal ', 'Adli ', 'Jl. Paledang ', 'PT. Triwala ', ''),
(58, '660.1/1281-DL', '26 Maret 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Restoran Gedong Dalam', 'Jl. Sukasari Rt 02/02 Kelurahan Sukasari Kecamatan Bogor Timur', 'Liem Nyok Pin', 'Jl. Sukasari 1 Rt 02/02 Kelurahan Sukasari Kecamatan Bogor Timur ', 'PT. Enviro Indobuana ', ''),
(60, '660.1/280-DL', '26 Maret 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Restoran Rumah Air ', 'Jl. Raya Boulevard CBD Perumahan Bogor Nirwana Residence ST 00-0240 Kampung Pabuaran Rt 01/06 Kelurahan Mulyaharja Kecamatan Bogor Selatan.', 'Direktur PT DAS BROTHERS', '', 'PT. Enviro Indobuana', ''),
(62, '660.1/280.A-DL', '26 Maret 2012', 'Kampus STIE Kesatuan ', 'Jl. Rangga Gading Kelurahan Gudang Kecamatan Bogor Tengah ', 'Yayasan Kesatuan ', 'Jl. Raya Pajajaran Pulo No. 54 ', 'PT. Indoconsult ', ''),
(64, '660.1/310-DL', '03 April 2012', 'Pembahasan Dokumen UKL-UPL Whiz Hotel ', 'Jl. Cikurai Kelurahan Babakan Kecamatan Bogor Tengah', 'Direktur PT. Estrella Tujuh Indonesia ', 'Intiland Tower M2 Floor Jl. Jenderal Sudirman Kav 32. Jakarta ', 'PT. Indoconsult ', ''),
(66, '660.1/353-DL', '10 April 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Pertokoan dan Kavling De Botanica ', 'Jl. Letnan Jenderal Ibrahim Adjie Kelurahan Sindangbarang Kecamatan Bogor Barat', 'Direktur PT. Kirana Mega Persada ', 'Jl. H Achmad Adnawijaya Kav 27 Kelurahan Tegal gundil Kecamatan Bogor Utara ', 'PT. Indoconsult', ''),
(68, '660.1/369-DL', '12 April 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Bogor Valley Condotel ', 'Jl. KH. Soleh Iskandar Rt 001/11 Kelurahan Kedung Badak Kecamatan Tanah Sareal', 'PT. Binakarya Cira Buana an Budianto Halim ', 'Pusat Elektronik Harso Mangga Dua Lt.4 Jl. Mangga Dua Raya Jakarta ', 'PT. Eranusa ', ''),
(70, '660.1/436-DL', '30 April 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Royal Tajur Residence ', 'Jl. Raya Tajur Kelurahan Pakuan Kecamatan Bogor Selatan Kota Bogor', 'Direktur PT. Tajur Surya Abadi ', 'Gedung Sudirman Plaza Bussines Complex-Plaza Marein Lt. 16 ', 'PT. Enviro Indobuana', ''),
(72, '660.1/440-DL', '30 April 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Hotel Oasis (Hotel 101) ', 'Jl. Suryakencana Kelurahan Babakan Pasar Kecamatan Bogor Tengah', 'Direktur PT. Oasis Hotel Bogor ', 'Gedung Panorama Jl. Tomang Raya No. 63 Jakarta ', 'PT. Indoconsult ', ''),
(74, '660.1/473-DL', '11 Mei 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Rancamaya Boutique Hotel dan Resort ', 'Jl. Rancamaya Utara Komplek Perumahan Rancamaya Kelurahan Harjasari Kota Bogor', 'Direktur PT. Suryamas Dutamakmur,Tbk', 'Sudirman Plaza Business Complex Plaza Marein Lt. 16 ', 'PT. Indoconsult ', ''),
(76, '660.1/497-DL', '14 Mei 2012', 'Pembahasan Dokumen Ukl-UPL Kegiatan Restoran Domino Pizza ', 'Jl. Pajajaran No. 27 Rt 02/04 Kelurahan Babakan Kecamatan Bogor Tengah ', 'PT. Dom Pizza Indonesia ', 'Wisma BNI 46 Lt. 7 Jl. Jend Sudirman Kav 1 Jakarta ', 'PT. Enviro Indobuana ', ''),
(78, '660.1/474-DL', '11 Mei 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Hotel Salak Boutique The Heritage ', 'Jl. Salak No. 38 dan 40 Kelurahan Babakan Kecamatan Bogor Tengah', '', 'Jl. Ir. H Juanda No. 8 Kelurahan Pabaton Kecamatan Bogor Tengah ', 'PT. Indoconsult ', ''),
(80, '660.1/505-DL', '15 Mei 2012', 'Menara BTS ', 'Jl. Kampung Pasir RT.01/12 Kel Cimahpar Kec Bogor Utara ', 'PT. Tower Bersama Group', 'Jl. Jendr Sudirman Kav 22-23 Jakarta Selatan ', 'PT. Cikaracak Sejati', ''),
(82, '660.1/506-DL', '15 Mei 2014', 'Menara BTS ', 'Jl. Raya Cipaku No. 2 RT.02/03 Kel Cipaku Kec Bogor Selatan ', 'PT. Tower Bersama Group', 'Jl. Jendr Sudirman Kav 22-23 Jakarta Selatan ', 'PT. Cikaracak Sejati', ''),
(84, '660.1/539-DL', '29 Mei 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan The Pakuan Suites Residence', 'Perumahan Villa Intan Pakuan Raya No. 8 Kelurahan Pakuan Kecamatan Bogor Selatan', 'PT. Graha Indah Pesona ', 'Ekalokasari Plaza 5 Floor ', 'PT. Eranusa ', ''),
(86, '660.1/616-DL', '11 Juni 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Hotel Pajajaran Resort', 'Jl. Bogor Nirwana Raya Blok CIB Kelurahan Mulyaharja Kecamatan Bogor Selatan', 'PT. Graha Bogor Sentosa ', 'Bogor Nirwana Raya Blok C 16 Kelurahan Mulyaharja Kecamatan Bogor Selatan ', 'PT. Indocitra ', ''),
(88, '660.1/544-DL', '04 Juni 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan RSB Suryatni ', 'Jl. Soleh Iskandar No. 21 Kelurahan Cibadak Kecamatan Tanah Sareal', 'Dr. Al-Fardy an Yayasan Bunda Suryatni ', 'Jl. Soleh Iskandar No. 21 Kelurahan Cibadak Kecamatan Tanah Sareal ', 'PT. Indoconsult ', ''),
(90, '660.1/532-DL', '25 Mei 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Sekolah Ummul Quro ', 'Kp. Munjul Rt 006/005 Kelurahan Kayumanis Kecamatan Tanah Sareal', 'Ketua Yayasan Ummul Quro ', 'Komplek Mandala Citra Indah F5/1 Lopang Serang ', 'PT. Indocitra ', ''),
(92, '660.1/616-DL', '11 Juni 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Bengkel Sukawarna ', 'Jl. Raya Cipaku No. 9 Rt 002/010 Kelurahan Cipaku Kecamatan Bogor Selatan', 'Sutomo Gunawan ', 'BTN Cipaku Indah Blok F1 Rt 02/11 Kelurahan Cipaku Kecamatan Bogor Selatan ', 'PT. Eranusa', ''),
(94, '660.1/621-DL', '13 Juni 2012', 'Pembahasan Dokumen UKL-UPL kegiatan perluasan RSIA Hermina ', 'KH. Raden Abdullah Bin Nuh No. 23,25,27 Kelurahan Curug Mekar Kecamatan Bogor Barat', 'Dr. Yuni Panjawardhani Direktur PT. Medika Loka Bogor ', 'Jl. KH Raden Abdullah Bin Nuh No. 23,25,27 Kelurahan Curug Mekar Kecamatan Bogor Barat', 'PT. Sujanji', ''),
(96, '660.1/622-DL', '13 Juni 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Amaris 2 Hotel ', 'Jl. Pajajaran Rt 01/11 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Direktur PT. Esta Prima Investama', 'Gedung PPM Motor Lt 2 ', 'PT. Enviro ', ''),
(98, '660.1/627-DL', '15 Juni 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Perumahan Sinbad ', 'JL. KH. Abdullah Bin Nuh Rt 03/01 Kelurahan Sindangbarang Kecamatan Bogor Barat', 'Ir. Amir Balfas', 'Jl. Cempaka Putih Tengah 27 C1 Rt 06/08 Jakarta Pusat ', 'PT. Enviro ', ''),
(100, '660.1/679-DL', '20 Juni 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Bengkel Carwash dan Caf? Autoland', 'Jl Pahlawan 101 Rt 01/07 Kelurahan Bondongan Kecamatan Bogor Selatan ', 'Panca SH Direktur CV Anugrah Persada ', 'Jl. Batu Nunggal Elok No. 48 Bandung ', 'PT. Indoconsult ', ''),
(102, '660.1/688-DL', '26 Juni 2012', 'PD. Pasar Pakuan Jaya', 'Jl. Dewi Sartika Kelurahan Cibogor Kec Bogor Tengah ', 'Bakri M SE,MP ', 'Jl Surya Kencana No. 3 Lt. 4 Bogor Tengah ', 'PT. Dalla Billa Sejati ', ''),
(104, '660.1/722-DL', '05 Juni 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Supermarket Bahan Bangunan ?Depo Bangunan?', 'Jl. KH. Soleh Iskandar Rt 11/11 Kelurahan Kedung Badak Kecamatan Tanah Sareal  ', 'Kimbariyanto an Direktur PT. Catur Karda Depo Bangunan ', 'Jl. Raya Serpong KM 2 Pakulonan Serpong Tanggerang ', 'CV. Bintaro Karya Mandiri', ''),
(106, '660.1/775-DL', '19 Juni 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Wisma Saung Dolken ', 'Jl. Guru Muhtar No. 9 Rt 01/16 Kelurahan Cimahpar Kecamatan Bogor Utara', '', 'Jl Heulang No. 6A Rt 03/06 Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', 'PT. Indo Citra ', ''),
(108, '660.1/831-DL', '06 Agustus 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Body Repair ', 'Jl. Pakuan No. 23 Kelurahan Baranangsiang Kecamatan Bogor Timur', 'Diana Prasetya ', 'Bogor Baru Blok D-IV/10 Rt 07/01 Kelurahan Tegallega Kecamatan Bogor Tengah ', 'PT. Indo Citra ', ''),
(110, '660.1/858-DL', '10 Agustus 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Perkulakan atau Grosir an PT. Yasmin Bersaudara ', 'Jl. KH. Soleh Iskandar (Simpang Yasmin) Kelurahan Kedung Waringin, Cibadak Kecamatan Tanah Sareal', 'Heri Sutirman an Direktur PT Yasmin Bersaudara ', 'Jl. H. Achmad Sobana No. 107 Rt 08/06 Kelurahan Tegal Gundil Kecamatan Bogor Utara ', 'PT. Eranusa ', ''),
(112, '660.1/803-DL', '10 Agustus 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan SPBU An PT. Total Oil Indonesia ', 'Jl. KH. Soleh Iskandar Kelurahan Kedung Badak Kecamatan Tanah Sareal', 'PT. Total Oil Indonesia ', 'Wisma 46 Kota BNI Lt 12 ', 'PT. Indoconsult ', ''),
(116, '660.1/895-DL', '29 Agustus 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Showroom dam Bengkel Daihatsu ', 'Jl. KH. Abdullah Bin Nuh Rt 01/04 Kelurahan Curug Mekar Kecamatan Bogor Barat', 'Direktur PT. Astra Daihatsu Motor ', 'Jl. Laksamana Yos Sudarso Sunter II Jakarta ', 'PT. Enviro Indobuana ', ''),
(118, '660.1/908-DL', '05 September 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Pertokoan Taman Topi ', 'Jl. Nyi Raja Permas Kelurahan Cibogor Kecamatan Bogor Tengah', 'CV Bogor Utama Raya ', 'Villa Bogor Indah Blok CC 10 No. 25', 'PT. Indoconsult ', ''),
(120, '660.1/947-DL', '17 September 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Hotel Medina ', 'Jl. Pahlawan No. 26 Kelurahan Baranagsiang Kecamatan Bogor Timur', 'Direktur PT. Nippindo Indah ', 'Jl. Pahlawan No. 26 Kelurahan Baranagsiang Kecamatan Bogor Timur', 'PT. Sangga Buana Nusantara ', ''),
(122, '660.1/974-DL', '21 September 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Restoran Saung Kuring ', 'Jl. Soleh Iskandar Rt 05/11 Kelurahan Kedung Badak Kecamatan Tanah Sareal', 'Mulyadi ', 'BNR Blok J No. 35 Rt 02/10 Kelurahan Rangga Mekar Kecamatan Bogor Selatan', 'PT. Indocitra ', ''),
(124, '660.1/282-DL', '03 Agustus 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Pengembangan CV Arira Pangindo ', 'Jl. Sukaraja Ciluar No. 51 Rt 04/01 Kelurahan Ciluar Kecamatan Bogor Utara', 'Direktur CV. Arira Pangindo ', 'Jl. Sukaraja Ciluar No. 51 Rt 04/01 Kelurahan Ciluar Kecamatan Bogor Utara', 'PT. Indoconsult ', ''),
(126, '660.1/1037-DL', '09 Oktober 2012', 'Restoran Kebon Kuring dan Sarana Penunjangnya ', 'Jl. Pangeran Sogiri No. 138 RT.02/06 Kel Tanah Baru Kec Bogor Utara ', 'R. Moh Rizal Mutaqin,SE', 'Bogor Baru Blok A III No. 2o RT.001/008 Kel Tegal Gundil  Kec Bogor Utara ', 'PT. Indoconsult ', ''),
(128, '660.1/1063-DL', '11 Oktober 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Pasar Kebon Kembang Blok G ', 'Jl. Nyi Raja Permas Rt 04/06 Kelurahan Cibogor Kecamatan Bogor Tengah', 'Direktur PD Pasar Pakuan Jaya Kota Bogor ', 'Jl. Suryakencana No. 3 Lantai IV', 'PT. Enviro Indobuana ', ''),
(130, '660.1/1105-DL', '25 Oktober 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Perluasan RSIA UMMI', 'Jl. Empang II No. 2 Rt 04/02 Kelurahan Empang Kecamatan Bogor Selatan', 'Direktur Duta Graha Afiah ', 'Jl. Empang II No. 2 Rt 04/02 Kelurahan Empang Kecamatan Bogor Selatan', 'PT. Enviro Indobuana ', ''),
(132, '660.1/1106-DL', '25 Oktober 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Laboratorium Veteriner ?Duta Medika Satwa Laboratories?', 'Jl. Kampung Kayu Manis Rt 01/01 Kelurahan Cibadak Kecamatan Tanah Sareal', 'Direktur PT. Duta Medika Satwa Laboratories ', 'Jl. Raya Pajajaran Pamulang Plaza Blok C No. 8 Pamulang Barat Tanggerang', 'PT. Indoconsult ', ''),
(134, '660.1/1173-DL', '14 November 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Gedung Pertokoan ', 'Jl. Pajajaran No. 18 Rt 006/013 Kelurahan Baranangsiang Kecamatan Bogor Timur', 'Yansen Hardja ', 'Jl. Pajajaran No. 18 Rt 006/013 Kelurahan Baranangsiang Kecamatan Bogor Timur', 'PT. Indoconsult ', ''),
(136, '660.1/1211-DL', '23 November 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Hotel Horison Pajajaran ', 'Jl. Pajajaran No. 225 Kelurahan Bantarjati Kecamatan Bogor Utara', 'Direktur PT. Arch Hotelindo  Elizabeth Elisa', 'Jl. Pajajaran No. 225 Kelurahan Bantarjati Kecamatan Bogor Utara', 'PT. Indoconsult ', ''),
(138, '660.1/1211-DL', '23 November 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Zest Hotel Bogor ', 'Jl. Pajajaran No. 27 Rt 02/04 Kelurahan Babakan Kecamatan Bogor Tengah ', 'Direktur PT. Pajajaran Swiss Mitra Sejati Andrey Sudjono', 'Jl. Pajajaran No. 27 Rt 02/04 Kelurahan Babakan Kecamatan Bogor Tengah ', 'PT. Enviro Indobuana ', ''),
(140, '660.1/1343-DL', '17 Desember 2012', 'Rumah Susun Sewa Cibuluh ', 'Jl. Pangeran Sogiri Kel Cibuluh Kec Bogor Utara ', 'Kepala Dinas Wasbangkim ', 'Jl. Pengadilan No 8', 'PT. Indoconsult ', ''),
(142, '660.1/1357-DL', '20 Desember 2012', 'Pembahasan Dokumen UKL-UPL Kegiatan Restoran Cepat Saji Mc. Donald?s ', 'Jl. Ir. H Juanda No. 34 Kelurahan Paledang Kecamatan Bogor Tengah', 'PT. Rekso Nasional Food ', 'Jl. Bloulevard Artha Gading Kav. 17 Graha Rekso Building Sentra Bisnis Artha Gading Jakarta Utara ', 'PT. Indoconsult ', ''),
(144, '660.1/1345-DL', '20 Desember 2012', 'Restoran Leuit Ageung', 'Jl. Raya Abdullah Bin Nuh RT. 02/03 Kel Curug Mekar Kec Bogor Barat ', 'PT. Prima Asia Glorindo ', 'Office Space Jl. Garau Asem 171 Kemayoran Jakarta Pusat ', 'PT. Triwala ', ''),
(146, '660.1/70-DL', '30 Januari 2013', 'Pengembangan Balai Mutu Pengujian Peternakan (BPMPP) ', 'Jl. Pemuda No. 29 RT.001/006 Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', 'Kepala BPMPP', 'Jl. Pemuda No.29 RT.001/006 Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', '', ''),
(148, '660.1/60-DL', '21 Januari 2013', 'SPBU PT. Shell Indonesia ', 'Jl. Pajajaran No. 99 RT.003/003 Kelurahan Bantarjati Kecamatan Bogor Utara ', 'Direktur PT. Shell Indonesia ', 'Talavera Office Park Floor ', '', ''),
(150, '660.1/24-DL', '09 Januari 2013', 'Pembangunan Sekolah Al-Azhar Syifa Budi ', 'Jl. Boulevard Bogor Nirwana Raya RT.01/06 Kelurahan Mulyaharja Kecamatan Bogor Selatan ', 'PT. Bumi Karya Purnatama ', 'Jl. Pangadegan Barat IX/B-6 Pancoran Jakarta Selatan ', '', ''),
(152, '660.1/34-DL', '11 Januari 2013', 'Pertokoan Simpang Yasmin Semplak', 'Jl. Raya Semplak RT.02/01Kelurahan Semplak Kecamatan Bogor Barat ', 'Sutardi ', 'Jl. Arif Rahman Hakim No. 17 Kelurahan Muka Kecamatan Cianjur Kabupaten Cianjur ', '', ''),
(154, '660.1/38-DL', '14 Januari 2013', 'Bengkel Hj. Pipin Rahayu', 'Jl. Encep Nawawi RT.004/011 Kelurahan Bubulak Kecamatan Bogor Barat ', 'Hj Pipin Rahayu ', 'Jl. Kampung Tajur Halang RT.001/003 Desa Tajur Halang Kecamatan Cijeruk Kabupaten Bogor ', '', ''),
(156, '660.1/65-DL', '25 Januari 2013', 'Perumahan Bogor View 3 ', 'Jl. Bridgen Saptaji Adiprawira RT.01/08 dan RT. 05/05 Kelurahan Cilendek Kecamatan Bogor Barat', 'PT. Aldi Putra Utama ', 'Jl. Dewi Kunthi Raya N0. 58 RT.003/016 Kelurahan Tegal Gundil Kecamatan Bogor Utara ', '', ''),
(158, '660.1/170-DL', '14 Febuari 2013', 'Showroom dan Bengkel Ford', 'Jl. Pajajaran RT.02/03 Kelurahan Bantarjati Kecamatan Bogor Utara ', 'Hartono Sohor ', 'Nirwana Asri S TR Tahap 3 Blok D No. 15 RT.003/013 Kelurahan Papanggo Kecamatan Tanjung Priok Kotamadya Jakarta Utara ', '', ''),
(160, '660.1/204-DL', '19 Febuari 2013', 'Komplek Pertokoan Graha ', 'Jl. Letjen Ibrahim Adjie RT.04/02 Kelurahan Sindangbarang Kecamatan Bogor Barat ', 'Ir. John Santoso ', 'Kopo Mas Regensi Blok H ? 27 Margasuka Babakan Ciparay ', '', ''),
(162, '660.1/25-DL', '25 Januari 2013', 'Hotel Holiday Inn Express Bogor ', 'Jl. Pajajaran No. 37 RT.001/04 Kelurahan Babakan Kecamatan Bogor Tengah ', 'Widono Salim ', 'Jl. Daksa III/2 RT.006/02 Kelurahan Selong Kecamatan Kebayoran Baru Kodya Jakarta Selatan ', '', ''),
(164, '660.1/277-DL', '06 Maret 2013', 'Pertokoan dan Restoran Taman Palem ', 'Jl. Pajajaran No. 21 RT.03/06 Kelurahan Sukasari Kecamatan Bogor Timur ', 'Yansen Hardja ', 'Jl. Raya Tajur No. 34 RT.04/01 Kelurahan Pakuan Kecamatan Bogor Selatan ', '', ''),
(166, '660.1/303-DL', '08 Maret 2013', 'Kedai Fatimah (Resto)', 'Jl. KH. Abdullah Bin Nuh RT. 04/7 Kelurahan Sindangbarang Kecamatan Bogor Barat ', 'Hj. Siti Fatimah ', 'Jl. Kemuning I, Blok S.IV No.1 RT.05/10 Perum Taman Cimanggu Kelurahan Kedung Waringin Kecamatan Tanah Sareal ', '', ''),
(168, '660.1/322-DL', '11 Maret 2013', 'Peningkatan Kapasitas Instalasi Pengolahan Air (IPA) Kedung Halang', 'Jl. Raya Pemda RT.004/07 Kampung Pangkalan Batu I Kelurahan Kedung Halang Kecamatan Bogor Utara ', 'Direktur PDAM Tirta Khuripan Kabupaten Bogor ', 'Jl. Raya tegal Beriman ? Cibinong Kabupaten Bogor', '', ''),
(170, '660.1/394-DL', '20 Maret 2013', 'Pengembangan Showroom  dan Bengkel Nissan ', 'Jl. Raya Pajajaran RT.004/003 Kelurahan Babakan Kecamatan Bogor Tengah ', 'PT. Mobil Trada Nasional ', 'Jl. Letjend MT. Haryono Kav 16 Jakarta Timur ', '', ''),
(172, '660.1/427-DL', '02 April 2013', 'Perluasan Hotel Permata ', 'Jl. Raya Pajajaran No. 35 RT.001/04 Kelurahan Babakan Kecamatan Bogor Tengah ', 'PT. Permata Mulia Jaya Indah ', 'Jl. Pajajaran No. 35 RT.001/004 Kelurahan Babakan Kecamatan Bogor Tengah ', '', ''),
(174, '660.1/460-DL', '05 April 2013', 'Rumah Sakit MH. Thamrin ', 'Jl. KH. Abdullah Bin Nuh RT.05/01 Kelurahan Sindangbarang Kecamatan Bogor Barat ', 'Dr. H Abdul Radjak,DSOG ', 'Jl. Salemba Tengah No. 24-26-28 Kelurahan Paseban Kecamatan Senen Jakarta ', '', ''),
(176, '660.1/471-DL', '09 April 2013', 'Hotel @ HOM Tajur ', 'Jl. Raya Tajur No. 612 RT.03/07 Kelurahan Muarasari Kecamatan Bogor Selatan ', 'Prawira Suryaatmaja ', 'Jl. Raya Tajur No. 612 RT.003/07 Kelurahan Muarasari Kecamatan Bogor Selatan ', '', ''),
(178, '660.1/495-DL', '16 April 2013', 'Pertokoan a.n. Bunawan Djapa ', 'Jl. Soleh Iskandar RT.01/04 Kelurahan Cibadak Kecamatan Tanah Sareal ', 'Bunawan Djapa ', 'Jl. Raya Pajajaran No. 63 Kelurahan Baranangsiang Kecamatan Bogor Timur ', '', ''),
(180, '660.1/496-DL', '16 April 2013', 'Rumah Sakit Ibu dan Anak Nuraida ', 'Jl. Ahmad Sobana No. 105 Pamikul Ujung RT.001/006 Kelurahan Tegal Gundil Kecamatan Bogor Utara ', 'Dr. Lukman Hakim Muchsin,SPOG(K)', 'Jl. H. Achmad Sobana No. 87-89 RT.001/006 Kelurahan Tegal Gundil Kecamatan Bogor Utara ', '', ''),
(182, '660.1/541-DL', '23 April 2013', 'Hotel Duta Berlian ', 'Jl. Raya Dramaga KM.8 RT.02/04 Kelurahan Balumbang Jaya Kecamatan Bogor Barat ', 'Ir. Irma Rahmawati Johan,MM', 'Komplek IPB 2 Jl. Icarus Blok O No. 15 RT.004/004 Desa Ciherang Kecamatan Dramaga ', '', ''),
(184, '660.1/608-DL', '03 Mei 2013', 'Perumahan Royal Tajur 2 ', 'Jl. Raya Tajur Kelurahan Muarasari Kelurahan Kertamaya Kecamatan Bogor Selatan ', 'PT. Tajur Surya Abadi ', 'Jl. Raya Tajur ', '', ''),
(186, '660.1/780-DL', '12 Juni 2013', 'Pembangunan Kantor dan Laboratorium LPPOM MUI ', 'Jl. Pemuda No. 5 Kelurahan Sempur Kecamatan Bogor  Tengah ', 'LPPOM MUI', 'Kampus IPB Baranangsiang Jl. Raya Pajajaran Bogor ', '', ''),
(188, '660.1/801-DL', '18 Juni 2013', 'Rumah Sakit  Ibu dan Anak Pelita Bunda ', 'Jl. KH. Soleh Iskandar No. 12 RT.01/04 Kelurahan Cibadak Kecamatan Tanah  Sareal ', 'PT. Pelita Bunda ', 'Jl. KH. Soleh Iskandar No. 12 RT.01/04 Kelurahan Cibadak Kecamatan Tanah Sareal ', '', ''),
(190, '660.1/808-DL', '24 Juni 2013', 'Restoran Mang Udel', 'Jl. Raya Semplak No. 214 Kelurahan Semplak Kecamatan Bogor Barat ', 'Melli Suciati ', 'Jl. Rembiga L/87 Jakarta ', '', ''),
(192, '660.1/842-DL', '28 Juni 2013', 'Pembangunan Showroom dan Bengkel Nissan Datsun Bogor Curug ', 'Jl. Raya KH. Abdullah Bin Nuh RT.02/03 Kelurahan Curug Mekar Kecamatan Bogor Barat ', 'PT. Indomobil Trada Nasional ', 'Jl. Letjen MT. Haryono Kav. 10 Jakarta Timur ', '', ''),
(194, '660.1/867-DL', '03 Juli 2013', 'Pembangunan Laboratorium dan Workshop Balai Penelitian Bioteknologi Perkebunan Indonesia ', 'Jl. Taman Kencana I  Kelurahan Pasir Kuda Kecamatan Bogor Barat ', 'PT. Riset Perkebunan Nusantara ', 'Jl. Salak Kelurahan Babakan Kecamatan Bogor Tengah ', '', ''),
(197, '660.1/894-DL', '11 Juli 2013', 'Perluasan Sahira Butik Hotel ', 'Jl. Paledang No. 53 Kelurahan Paledang Kecamatan Bogor Tengah ', 'PT. Sahira Butik Hotel', 'Jl. Paledang No. 53 Kelurahan Paledang Kecamatan Bogor Tengah ', '', ''),
(201, '660.1/9926-DL', '18 Juli 2013', 'Pembangunan Depo Pemasaran Hasil Perikanan ', 'Jl. Raya Pajajaran Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Dinas Pertanian Kota Bogor ', 'Jl. Raya Cipaku ', '', ''),
(203, '660.1/920-DL', '17 Juli 2013', 'Pembangunan Restoran Raja Penyet ', 'Jl. KH. Abdullah Bin Nuh Kelurahan Curug Mekar Kecamatan Bogor Barat ', 'Yuniarthi ', 'Jl. Majapahit Blok O-11 No. 1 Cimanggu Permai ', '', ''),
(205, '660.1/968-DL', '23 Juli 2013', 'Rumah Makan Bumi Aki (Makanan Khas Sunda)', 'Jl. Raya Pajajaran No. 51 RT.03/04 Kelurahan Babakan Kecamatan Bogor Tengah ', 'Anisha Desiliana Resti, MT', 'Kampung Puncak No. 59 RT.005/001 Kelurahan Ciloto Kecamatan Cipanas Kabupaten Bogor', '', ''),
(207, '660.1/997-DL', '30 Juli 2013', 'Perluasan Bengkel Guna Motor ', 'Jl. Siliwangi No. 60 B Kelurahan Lawang Gintung Kecamatan Bogor Selatan ', 'CV. Guna Motor ', 'Jl. Tanjung Biru No. 19 RT.01/14 Kelurahan Baranangsiang Kecamatan Bogor Timur ', '', ''),
(209, '660.1/1004-DL', '01 Agustus 2013', 'Restoran Ayam Geprek Istimewa ', 'Jl. Dr. Sumeru No. 100 B RT.01/01 Kelurahan Menteng Kecamatan Bogor Barat ', 'CV. Anugrah Rasa Istimewa ', 'Jl. Villa Citra Bantarjati Blok AIX No. 3 RT.06/05 Kelurahan Tegal Gundil Kecamatan Bogor Utara ', '', ''),
(211, '660.1/1125-DL', '12 September 2013', 'Pembangunan Balai Kirti ', 'Jl. Ir. H Djuanda No. 1 Kelurahan Paledang Kecamatan Bogor Tengah ', 'Kementerian Sekretariat Negara ', 'Jl. Ir.H.Djuanda No. 1 Kelurahan Paledang ', '', ''),
(212, '', '', '', '', '', '', '', ''),
(213, '660.1/1137-DL', '17 September 2013', 'Pembangunan Panti Jompo-Klinik dan Rehabilitasi (Bogor Senior Clinic and Rehabilitation Center) ', 'Jl. Raya Tajur No. 168 Rt.003/007 Kelurahan Muarasari Kecamatan Bogor Selatan ', 'PT. Karya Purna Sejahtera ', 'Jl. Raya Tajur No. 168 RT.003/007 Kelurahan Muarasari Kecamatan Bogor Selatan ', '', ''),
(214, '', '', '', '', '', '', '', ''),
(215, '660.1/1146-DL', '19 September 2013', 'Gedung Sekolah Bogor Raya 3 ', 'Jl. Sekolah Bogor Raya Perumahan Danau Bogor Raya Kelurahan Tanah Baru Kecamatan Bogor Utara ', 'Yayasan Danasha ', 'Jl. Sekolah Bogor Raya Perumahan Danau Bogor Raya Kelurahan Tanah Baru Kecamatan Bogor Utara ', '', ''),
(216, '', '', '', '', '', '', '', ''),
(217, '660.1/1214-DL', '08 Oktober 2013', 'Pembangunan Showroom dan Bengkel KIA ', 'Jl. Pajajaran No. 47 RT.004/03 Kelurahan Babakan Kecamatan Bogor Tengah ', 'PT. KIA Indonesia Motor ', 'Jl. Sunter Garden Blok D8 No. 1 Kelurahan Sunter Kecamatan Tanjung Priuk', '', ''),
(218, '', '', '', '', '', '', '', ''),
(219, '660.1/1257-DL', '22 Oktober 2013', 'Industri Pakaian Jadi (PT. Muara Krakatau)', 'Jl. Raya Tajur No. 22 RT. 004/001 Kelurahan Pakuan Kecamatan Bogor Selatan ', 'Kasiviswanathan Prakash', 'Jl. Raya Tajur No. 22 RT.004/001 Kelurahan Pakuan Kecamatan Bogor Selatan ', '', ''),
(220, '', '', '', '', '', '', '', ''),
(221, '660.1/1271-DL', '25 Oktober 2013', 'Perluasan Showroom dan Bengkel Mitsubishi', 'Jl. Pajajaran No. 20 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Iwan Tjokrosendjodjo selaku Direktur Utama PT. Prabu Pendawa Motor', 'Jl. Pajajaran No. 20 Kelurahan Baranangsiang Kecamatan Bogor Timur', '', ''),
(222, '', '', '', '', '', '', '', ''),
(223, '660.1/1278-DL', '28 Oktober 2013', 'Pasar Gunung Batu', 'Jl. Ishak Djuarsa No. 21 A Kelurahan Gunung Batu Kecamatan Bogor Barat ', 'PD. Pasar Pakuan Jaya ', 'Jl. Suryakencana No. 3 Lt. 4 Rt.03/06 Kelurahan Babakan Pasar Kecamatan Bogor Tengah ', '', ''),
(224, '', '', '', '', '', '', '', ''),
(225, '660.1/1279-DL', '28 Oktober 2013', 'Pasar Devries', 'Jl. Veteran Kelurahan Panaragan Kecamatan Bogor Tengah ', 'PD. Pasar Pakuan Jaya ', 'Jl. Suryakencana No. 3 Lt. 4 Rt 03/06 Kelurahan Babakan Pasar Kecamatan Bogor Tengah ', '', ''),
(226, '', '', '', '', '', '', '', ''),
(227, '660.1/1280-DL', '30 Oktober 2013', 'Pembangunan Hotel Jam Tower', 'Jl. KH. Abdullah Bin Nuh Rt.01/01 Kelurahan Bubulak Kecamatan Bogor Barat ', 'Sara Tiodora Silalahi', 'Jl. Ceremai Ujung No. 11 RT.02/002 Kelurahan Bantarjati Kecamatan Bogor Utara ', '', ''),
(228, '', '', '', '', '', '', '', ''),
(229, '660.1/1384-DL', '21 November 2013', 'Pembangunan Perumahan Bogor Raya Residence ', 'Jl. Tumenggung Wiradiredja Kelurahan Cimahpar Kecamatan Bogor Utara ', 'Leonard Pandy Phua ', 'Klub House Golf Bogor Raya Desa Sukaraja Kecamatan Sukaraja', '', ''),
(230, '', '', '', '', '', '', '', ''),
(231, '660.1/422-DL', '02 Desember 2013', 'Pembangunan Hotel Savero Golden Flower ', 'Jl. Raya Pajajaran No. 27 RT.001/004 Kelurahan Babakan Kecamatan Bogor Tengah ', 'Syarifudin Zuhri,MBA', 'Jl. Raya Pajajaran No. 27 Rt.001/004 Kelurahan Babakan Kecamatan Bogor Tengah ', '', ''),
(232, '', '', '', '', '', '', '', ''),
(233, '660.1/1495-DL', '19 Desember 2013', 'Pusat rekreasi Hotel dan Olahraga Taman Yasmin ', 'Jl. KH. Abdullah Bin Nuh Taman Yasmin Ring Road Kel. Curug Mekar Kec. Bogor Utara ', 'PT. Inti Innovaco ', 'Jl. Binamarga 1 Kav. 16', '', ''),
(234, '', '', '', '', '', '', '', ''),
(235, '', '', '', '', '', '', '', ''),
(236, '660.1/1496-DL', '19 Desember 2013', 'Pembangunan Restoran Pajajaran Bogor ', 'Jl. Pajajaran RT.03/03 Kelurahan Bantarjati Kecamatan Bogor Utara ', 'Hujaya Dani Kusuma ', 'Jl. Pajajaran RT.03/03 Kelurahan Bantarjati Kecamatan Bogor Utara ', '', ''),
(237, '', '', '', '', '', '', '', ''),
(238, '', '', '', '', '', '', '', ''),
(239, '660.1/1499-DL', '20 Desember 2013', 'Pembangunan Rumah Sakit Umum Melania ', 'Jl. Pahlawan No. 91 Kelurahan Bondongan Kecamatan Bogor Selatan ', 'Dr. Petrus Sediawan Atmajaya, SP.B', 'Jl. Pahlawan No. 91 Kelurahan Bonndongan Kecamatan Bogor Selatan ', '', ''),
(240, '', '', '', '', '', '', '', ''),
(241, '660.1/1509-DL', '23 Desember 2013', 'Rumah Makan Kedai Kita ', 'Jl. Kantor Pos 3 No. 10 RT. 11/04 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Gunawan ', 'Jl. Suryakencana No. 259 Rt.001/002 Kelurahan Babakan Kecamatan Bogor Tengah ', '', ''),
(242, '', '', '', '', '', '', '', ''),
(243, '660.1/1517-DL', '24 Desember 2013', 'Pembangunan Bengkel Kendaraan ', 'Jl. Gg Pesantren 15 A RT.008/002 Kelurahan Tajur Kecamatan Bogor Timur ', 'Agus Setiawan,SE', 'Jl. Pajajaran No. 15 A RT.008/002 Kelurahan Tajur Kecamatan Bogor Timur ', '', ''),
(244, '', '', '', '', '', '', '', ''),
(245, '660.1/1518-DL', '24 Desember 2013', 'Restoran Abuba Steak ', 'Jl. Ahmad Sobana RT.05/07 Kelurahan Bantarjati Kecamatan Bogor Utara ', 'Aminah ', 'Jl. Cipete Raya RT.02/04 Cipete Selatan Cilandak Jakarta Selatan ', '', ''),
(246, '', '', '', '', '', '', '', ''),
(247, '660.1/1524-DL', '24 Desember 2013', 'Pembangunan Sekolah Islam Terpadu ', 'Jl. Bojongkeler RT.001/004 Kelurahan Bojongkerta Kec Bogor Selatan ', 'Ketua Yayasan Khasanah Cahaya Iman ', 'Jl, Kapten Tendean No. 24 Jakarta Selatan ', '', ''),
(248, '', '', '', '', '', '', '', ''),
(249, '660.1/157-DL', '28 Januari 2014', 'Pembangunan Perumahan Nusa Indah Residence', 'Jl. Tanah Baru Kelurahan Tanah Baru Kecamatan Bogor Utara ', 'Ir. Yono Widodo selaku dirut PT. Inti Innovaco', 'Jl. Binamarga I kav 16 Kel Br. Siang Kecamata Bogor Timur ', '', ''),
(250, '', '', '', '', '', '', '', ''),
(251, '660.1/86-DL', '29 Januari 2014', 'Kegitan Makanan dan Minuman Kesehatan Herbal ', 'Jl. Raya Pemda KM.2 No. 17 Rt.004/002 Kel Kedung halang Kec. Bogor Utara ', 'PT. Inti Kiat Alam ', 'Jl. Sunter Muara No. 8A Kel. Sunter Agung Kec. Tanjung Priok Jakarta Utara ', '', ''),
(252, '', '', '', '', '', '', '', ''),
(253, '660.1/144-DL', '12 Febuari 2014', 'Pembangunan Body Repair and Paint ', 'Jl. Soleh Iskandar Rt. 01/01 Kel. Cibadak Kec. T.Sareal ', 'Drs. Johanes Hermawan ', 'Jl. Cipinang Elok Blok BK no. 107 Cipinang Muara Jatinegara Jakarta Timur', '', ''),
(254, '', '', '', '', '', '', '', ''),
(255, '660.1/168-DL', '19 Febuari 2014', 'Pembangunan Hotel Onih ', 'Jl. Paledang Rt. 04/07 Kel Paledang Kec Bogor Tengah ', 'Pipih Saputra', 'Kp. Pasir Angin Rt. 04/06 Desa Cipayung Kecamatan Mega Mendung Kab. Bogor ', '', ''),
(256, '', '', '', '', '', '', '', ''),
(257, '660.1/220-Dl', '05 Maret 2014', 'Pembangunan Hotel di Jl. A Yani ', 'Jl. Ahmad Yani No. 44 RT. 06/01Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', 'Direktur PT. Graha Citra Perkasa ', 'Jl. Ahmad Yani No. 44 RT. 06/01 Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', '', ''),
(258, '', '', '', '', '', '', '', ''),
(259, '660.1/258-DL', '17 Maret 2014', 'Pengembangan Rumah Sakit Ibu dan Anak Azzahra ', 'Jl. Sancang No. 4 Kelurahan Babakan Kecamatan Bogor Tengah ', 'Direktur Utama PT. Multazam Lestari ', 'Jl. Sancang No. 4 RT. 03/07 Kelurahan Babakan Kecamatan Bogor Tengah ', '', ''),
(260, '', '', '', '', '', '', '', ''),
(261, '660.1/268-DL', '19 Maret 2014', 'Pembangunan Pasar Swalayan Giant Ekstra ', 'Jl. Dramaga KM. 6,5 RT.003/002 Kelurahan Margajaya Kecamatan Bogor Barat ', 'PPT. Hero Supermarket ', 'Graha Hero, CBN Bintaro Jaya Sektor 7 Blok  B7/A7 Pondok Jaya Pondok Aren Tanggerang Selatan ', '', ''),
(262, '', '', '', '', '', '', '', ''),
(263, '660.1/153-DL', '17 Febuari 2014', 'Pembangunan Menara BTS telkomsel ', 'Kelurahan Kayumanis Kecamatan Tanah Sareal ', 'Ir. Hermawan Alfianto', 'GM. RO Jabodetabek Gedung Graha Pratama Lantai 5 Jl. MT. Haryono', '', ''),
(264, '', '', '', '', '', '', '', ''),
(265, '660.1/152-DL', '17 Febuari 2014', 'Pembangunan Menara BTS Telkomsel ', 'Kelurahan Mulyaharja Kecamatan Bogor Selatan ', 'Ir. Hermawan Alfianto', 'GM. RO Jabodetabek Gedung Graha Pratama Lantai 5 Jl. MT. Haryono', '', ''),
(266, '', '', '', '', '', '', '', ''),
(267, '660.1/267-DL', '19 Maret 2014', 'Pembangunan Stasiun dan Stabling KRL di Sukaresmi', 'Kelurahan Sukaresmi dan Kelurahan Kedung Badak Kecamatan Tanah Sareal ', 'PT. Kereta Api Indonesia ', 'Jl. Perintis Kemerdekaan No. 1', '', ''),
(268, '', '', '', '', '', '', '', ''),
(269, '660.1/542-DL', '19 Mei 2014', 'Pengenbangan Kantor, Gudang, dan SPBG', 'Jl. MA Salmun Kelurahan Ciwaringin Kecamatan Bogor Tengah ', 'PT. Perusahaan Gas Negara (Persero)Tbk', 'Jl. KH. Zainal Arifin No. 20 Krukut Taman Sari ', '', ''),
(270, '', '', '', '', '', '', '', ''),
(271, '', '', '', '', '', '', '', ''),
(272, '660.1/567-DL', '28 Mei 2014', 'Pembangunan Menara Telekomunikasi  Sukaresmi Bogor ', 'Jl. Raya Pemda Kp. Tunggilis RT. 01/013 Kelurahan Kedung Halang Kecamatan Bogor Utara ', 'Ir. Herman Setya Budi Selaku Dirut PT. Solusindo Kreasi', 'Gedung Internasional Financial Centre Jl. Jend Sudirman ', '', ''),
(273, '', '', '', '', '', '', '', ''),
(274, '660.1/639-DL', '16 Juni 2014', 'Rumah Makan dan Bengkel Motor ?Yasmin Point?', 'Jl. KH. Abdullah Bin Nuh No. 33 RT. 06/08 Kelurahan Curug Mekar Kecamatan Bogor Barat ', 'Drs. Ir. Indra Sumardi M. Comp', 'Cimanggu Permai Blok N 513 RT .006/009 Kelurahan Kedung Badak Kecamatan Tanah Sareal ', '', ''),
(275, '', '', '', '', '', '', '', ''),
(276, '660.1/710-DL', '02 Juli 2014', 'Pembangunan Pertokoan ', 'Jl. Mayjend Isjak Djuarsa RT. 01/02 Kelurahan Loji Kecamatan Bogor Barat ', 'Hendra Eng ', 'Jl. Sari Bentang No. 10 RT.01/14 Kelurahan Baranangsiang Kecamatan Bogor Timur ', '', ''),
(277, '', '', 'a.n Hendra Eng ', '', '', '', '', ''),
(278, '660.1/711-DL', '02 Juli 2014', 'Kegiatan Kursus Bahasa Inggris dan Restoran ', 'Jl. KH. Abdullah Bin Nuh Kelurahan Curug Mekar Kecamatan Bogor Barat ', 'Mustika Ningrum Halim ', 'Jl. KH. Abdullah Bin Nuh Kelurahan Curug Mekar Kecamatan Bogor Barat ', '', ''),
(279, '', '', '', '', '', '', '', ''),
(280, '660.1/721-DL ', '07 Juli 2014', 'Menara Telekomunikasi ?Soemantadiredja?', 'Jl. Soemantadiredja Kampung Bojong RT. 03/08 Kelurahan Pamoyanan Kecamatan Bogor Selatan ', 'Charles Chrustian Gandha ', 'Menara Batavia Lt. 10 Jl. KH. Mansyur Kav. 126 Jakarta ', '', ''),
(281, '', '', '', '', '', '', '', ''),
(282, '660.1/854-DL ', '28 Agustus 2014', 'DPLH Kegiatan Rumah Makan Ayam Goreng ?Maulagie?', 'Jl. Merdeka No. 137 Kelurahan Menteng Kecamatan Bogor Tengah ', 'Arifin Harimat selaku Pemilik ', 'Jl. Merdeka No. 137 Kelurahan Menteng Kecamatan Bogor Tengah ', '', ''),
(283, '', '', '', '', '', '', '', ''),
(284, '660.1/891-DL', '08 September 2014', 'Pembangunan Restoran Arafah Fried Chicken', 'Jl. Aria Surialaga No. 11 RT.002/002 Kelurahan Pasir Jaya Kecamatan Bogor Barat ', 'Drs. Hamid Mundzir a.n PT. Arafah Cita Rasa Indonesia', 'Jl. Raya Pajajaran No. 17 Kelurahan Bantarjati Kecamatan Bogor Utara ', '', ''),
(285, '', '', '', '', '', '', '', ''),
(286, '660.1/921-DL', '15 September 2014', 'Pembangunan Pusdiklat BPJS Ketenagakerjaan ', 'Jl. Dadali Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', 'Herry Purwanto selaku Kepala Urusan Pelayanan Umum', 'Jl. Jenderal Gatot Subroto No. 79', '', ''),
(287, '', '', '', '', '', '', '', ''),
(288, '660.1/895-DL', '01 September 2014', 'Kegiatan Gedung Destinasi Wisata Kuliner', 'Jl. Binamarga RT.04/11  Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Kepala Dinas Kebudayaan dan Priwisata Kota Bogor ', 'Jl. Pandu No. 45', '', ''),
(289, '', '', '', '', '', '', '', ''),
(290, '660.1/1004-DL', '02 Oktober', 'Pembangunan Toko Roti dan Kue dan Pembuatan Roti dan Kue', 'Jl. KS. Tubun No. 232 Kelurahan Cibuluh Kecamatan Bogor Utara ', 'Liauw Paulus Tejakusuma selaku Dirut PT. Indo Sukses Abadi ', 'Karang Bolong Raya No. 11 Ancol Jakarta Utara ', '', ''),
(291, '', '', '', '', '', '', '', ''),
(292, '660.1/1162-DL', '7 November 2014', 'Keiatan DPLH Bengkel Djaja Motor ', 'Jl. Raya Tajur No. 21 Rt. 03/02 Kelurahan Tajur Kecamatan Bogor Timur ', 'Bartholomeus Darmawan Djajadi', 'Taman Pajajaran Tahap III Blok D5/5 RT. 04/01 Katulampa ', '', ''),
(293, '', '', '', '', '', '', '', ''),
(294, '', '', '', '', '', '', '', ''),
(295, '660.1/1170 ?DL', '11 November 2014', 'Kegiatan Pusat Perkulakan, Produksi Roti dan Kue', 'Jl. KH. Soleh Iskandar Kel Kedung Waringin dan Kel Cibadak Kec Tanah Sareal', 'Wayan Gede Suci,ST selaku Dirut PT. Lotte Shopping Indonesia ', 'Jl. KH. Soleh Iskandar', '', ''),
(296, '', '', '', '', '', '', '', ''),
(297, '660.1/1094-DL', '23 Oktober 2014', 'GuestHouse dan Sarana Pendukungnya ', 'Kelurahan Rancamaya RT.003/004 dan Kel Bojong Kerta RT.005/001 Kec Bogor Selatan ', 'Ibnu Dwi Surya ', 'Jl. Hj. Uung RT.005/002 Kelurahan Utan Panjang Kec Kemayoran Jakarta Pusat ', '', ''),
(298, '', '', '', '', '', '', '', ''),
(299, '660.1/1254-DL', '01 Desember 2014', 'Pembangunan Restoran Vamilk ', 'Jl. Achmad Adnawijaya No. 69 Kelurahan Tegal Gundil Kec Bogor Utara ', 'Tirza Pohan,BA', 'Jl. Destranata Raya No. 4 RT.002/016 Kelurahan Tegal Gundil Kecamatan Bogor Utara ', '', ''),
(300, '', '', '', '', '', '', '', ''),
(301, '660.1/1288-DL', '08 Desember 2014', 'Waroeng Steak and Shake ', 'Jl. Sukasari 1 No. 7 RT.004/002 Kelurahan Sukasari Kecamatan Bogor Timur ', 'Nurjianto ', 'Kuncen RT.04/02 Desa Tanjungsari Kec Banyu Biru', '', ''),
(302, '', '', '', '', '', '', '', ''),
(303, '660.1/1324-DL', '12 Desember 2014', 'DPLH Gedung Data Center', 'Gedung Sanggar Kesatria Liema Jl. Pajajaran No. 17 RT. 06/13 Kelurahan Baranangsiang Kecamatan Bogor Timur ', 'Trisna Sadeli selaku PT. Fassri Utama Sakti', 'Jl. Pajajaran No. 17 RT.06/13 Kel Baranangsiang Kecamatan Bogor Timur ', '', ''),
(304, '', '', '', '', '', '', '', ''),
(305, '660.1/1357-DL', '16 Desember 2014', 'Rekomendasi bahwa Belum dapat disetujui pembangunan Gedung Sentra Kuliner', 'Jl. Ahmad Adnawijaya Kelurahan Tegal Gundil Kec Bogor Utara ', 'Kantor Koperasi dan UMKM ', 'Jl. Dadali III No. 3 Kelurahan Tanah Sareal Kecamatan Tanah Sareal ', '', ''),
(306, '660.1/210-DL', '13 Februari 2015', 'Rekomendasi Revisi UKL-UPL Rumah Sakit Azra ', 'Jl. Pajajaran No. 219 Kelurahan Bantarjati Kecamatan Bogor Utara ', 'Dr. Rizasah Daud, M.Sc SPPO-KR FINASIM selaku Dirut Rs Azra ', 'Jl. Atletik No. 22 Tanah Sareal ', '', ''),
(307, '', '', '', '', '', '', '', ''),
(308, '', '', '', '', '', '', '', ''),
(309, '660.1/224-DL', '17 Febuari 2015', 'Rekomendasi Pembangunan Industri Mesin dan Perkakas Mesin ', 'Kamp. Tunggilis RT.02/13 Kelurahan Kedung Halang Kecamatan Bogor Utara ', 'PT. AIEI Guna Sena Enginerring, Hanna Elisa selaku Dirut', 'Jl. Pangkalan III KM. 214 Kelurahan Kedung Halang Kecamatan Bogor Utara ', '', ''),
(310, '660.1/225-DL', '17 Febuari 2015', 'Rekomendasi Pembangunan Industri Suku Cadang dan Aksesoris Kendaraan ', 'Kamp. Tunggilis RT.02/13 Kelurahan Kedung Halang Kecamatan Bogor Utara ', 'PT. AIEI Guna Sena Stamping a.n John Isac Elisa selaku Direktur', 'Jl. Pangkalan III KM. 214 Kelurahan Kedung Halang Kecamatan Bogor Utara ', '', ''),
(311, '660.1/241-DL', '24 Febuari 2015', 'Rekomendasi Pembangunan Pertokoan ', 'Jl. Taman Cimanggu 50 A RT.005/001 Kelurahan Kedung Waringin Kecamatan Tanah Sareal ', 'Romzi', 'Jl. Tunjung Biru No. 1 RT.002/014 Kelurahan Baranangsiang Kecamatan Bogor Timur ', '', ''),
(312, '660.1/304-DL', '04 Maret 2015', 'Rekomendasi DPLH Kegiatan Plaza Dewi Sartika ', 'Jl. Dewi Sartika No. 01 RT.05/06 ', 'Totong Kurniawan ', 'Jl. Gajah Mada No. 58 Kelurahan Krukut Kecamatan Taman Sari ', '', ''),
(313, '660.1/320-DL', '10 Maret 2015', 'Dokumen UKL-UPL Pengembangan IPB Convention Hotel ', 'Jl. Raya Pajajaran Kelurahan Tegallega Kecamatan Bogor Tengah ', 'Dr, Mieka Syahbana Rusli Selaku Dirut PT. Bogor Life Science and Technology', 'Jl. Raya Pajajaran Kelurahan Tegallega Kecamatan Bogor Tengah ', '', ''),
(314, '660.1/314-DL ', '10 Maret 2015', 'Rekomendasi Perluasan Gudang, Ruang Produksi dan Prasarana ', 'Jl. Lawang Gintung No. 89 Kelurahan Batu Tulis Kecamatan Bogor Selatan ', 'Yusuf Rantaw Selaku Plant Direktor PT. Boehringer Ingelheim Indonesia ', 'Sampoerna Strategis Square North Tower Level 6th ', '', ''),
(315, '', '', '', '', '', 'Jl . Jend Sudirman Kav 45-46 Jakarta ', '', ''),
(316, '660.1/316-DL', '10 Maret 2015', 'Dokumen UKL-UPL Pembangunan Hotel ', 'Jl. Dr. Sumeru RT.02/01 Kelurahan Menteng Kecamatan Bogor Barat ', 'Arief Dharyanto Selaku Dirut PT. Thryosa Mustika ', 'Jl. Pajajaran No. 57 Baranangsiang ', '', ''),
(317, '660.1/419-DL', '31 Maret 2015', 'Rekomendasi Kegiatan Showroom, Bengkel, dan Carwash Carroke ', 'Jl. KH. Soleh Iskandar No. 5 RT.004/003 Kelurahan Cibadak Kecamatan Tanah Sareal ', 'PT. Carroke Service Gemilang ', 'Jl. KH. Soleh Iskandar No. 5 RT.004/003 Kelurahan Cibadak Kecamatan Tanah Sareal ', '', ''),
(318, '660.1/532-DL', '21 April 2015', 'Rekomendasi Revisi Dokumen Rumah Sakit Medika Dramaga ', 'Jl. Raya Dramaga RT.01/06 Kelurahan Margajaya Kecamatan Bogor Barat ', 'Dr. Dewi Basmala, MARS selaku direktur RS. Medika Dramaga ', 'Jl. Teraapi Blok AF II RT.002/019 Kelurahan Menteng Kecamatan Bogor Barat', '', ''),
(319, '660.1/807-DL', '19 Juni 2015', 'Rekomendasi Pembangunan Klinik Pratama dan Hemodialisa ', 'Jl. Raya Wangun No. 04/09 RT.04/03 Kelurahan Sindangsari Kecamatan Bogor Timur ', 'Dr.dr.Lucky Aziza B, Sp.PD,KGH', 'Jl. Teuku Umar No. 45 RT.001/001 Kelurahan Gondangdia Kecamatan Menteng ', '', ''),
(320, '660.1/805-DL', '19 Juni 2015', 'Rekomendasi Revisi Dokumen menjadi Pembangunan Hotel Pondok Makanan dan Pertokoan ', 'Jl. Dr. Sumeru RT.02/01 Kelurahan Menteng Kecamatan Bogor Barat ', 'Arief Dharyanto Dirut PT. Thryosa Mustika ', 'Jl. Pajajaran No. 57 Baranangsiang ', '', ''),
(321, '660.1/822-DL', '23 Juni 2015', 'Rekomendasi Kegiatan Pengembangan Kawasan Stasiun Kereta Api Paledang ', 'Jl. Sekolah Dalam RT.002/004 Kelurahan Paledang Kecamatan Bogor Tengah ', 'Syarif Hidayat selaku Senior Manager Asset aop I ', 'Jl. Taman Stasiun No. 1 Kelurahan Pinangsi ', '', ''),
(322, '660.1/862-DL', '30 Juni 2015', 'Rekomendasi Kegiatan Klinik Geriatri Wijayakusuma ', 'Jl. Dr. Semeru No. 43 RT.01/12 Kelurahan Menteng Kecamatan Bogor Barat ', 'Dr.dr.Hendro Darmawan MSC,SP.JP Selaku direktur ', 'Baranangsiang Indah 3/1 No. 2 RT.05/08 Kelurahan Tegallega Kecamatan Bogor Tengah ', '', ''),
(323, '660.1/914-DL', '10 Juli 2015', 'Revisi Rekomendasi dari Rumah Sakit Bersalin menjadi Rumah Sakit Khusus Ibu dan Anak Sawojajar', 'Jl. Sawojajar No.9 Pabaton Kecamatan Bogor Tengah ', 'Dr. Lukman Biran Hudono ', 'Jl. Sawojajar No. 9 Kelurahan Pabaton Kecamatan Bogor Tengah ', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ukl_upl_lampau`
--
ALTER TABLE `ukl_upl_lampau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ukl_upl_lampau`
--
ALTER TABLE `ukl_upl_lampau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

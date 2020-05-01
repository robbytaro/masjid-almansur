-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 04:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery_id`
--

CREATE TABLE `gallery_id` (
  `gid_id` int(11) NOT NULL,
  `id_id` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_id`
--

INSERT INTO `gallery_id` (`gid_id`, `id_id`, `keterangan`, `gambar_id`) VALUES
(3, '1', 'Idul Kurban, September 2019, Masjid Al-Mansur', 'daftar prefix subnet.jpg'),
(4, '1', 'Idul Kurban, September 2019, Masjid Al-Mansur', 'IMG-312893.jpg'),
(5, '2', 'Sholat Idul Adha, September 2019, Masjid Al-Mansur', 'IMG-20191008-WA0006.jpg'),
(6, '2', 'Sholat Idul Adha, September 2019, Masjid Al-Mansur', 'IMG-20191008-WA0007.jpg'),
(7, '2', 'Sholat Idul Adha, September 2019, Masjid Al-Mansur', 'IMG-20191008-WA0008.jpg'),
(8, '2', 'Sholat Idul Adha, September 2019, Masjid Al-Mansur', 'IMG-20191008-WA0009.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_if`
--

CREATE TABLE `gallery_if` (
  `gid_if` int(11) NOT NULL,
  `id_if` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar_if` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_if`
--

INSERT INTO `gallery_if` (`gid_if`, `id_if`, `keterangan`, `gambar_if`) VALUES
(1, '1', 'Idul Fitri, Jumat 5 Juli 2019, Masjid Al-Mansur', '1.jpg'),
(2, '1', 'Idul Fitri, Jumat 5 Juli 2019, Masjid Al-Mansur', 'IMG-20190416-WA0000.jpg'),
(3, '2', 'Sholat IdulFitri, 5 Juli 2019, Masjid Al-Mansur, Bandung', 'kit.png'),
(4, '2', 'Sholat IdulFitri, 5 Juli 2019, Masjid Al-Mansur, Bandung', 'numbers.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_kb`
--

CREATE TABLE `gallery_kb` (
  `gid_kb` int(11) NOT NULL,
  `id_kb` varchar(50) NOT NULL,
  `keterangan_kb` varchar(100) NOT NULL,
  `gambar_kb` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_kb`
--

INSERT INTO `gallery_kb` (`gid_kb`, `id_kb`, `keterangan_kb`, `gambar_kb`) VALUES
(1, 'B001', 'Kajian Bulanan, 27 Okt 2019 Masjid Al-Mansur', 'Galaxtion.jpg'),
(2, 'B001', 'Kajian Bulanan, 27 Okt 2019 Masjid Al-Mansur', 'Sky Photos and Wallpapers 10.jpg'),
(3, 'B002', 'Kajian Bulanan, 24 Nop 2019 Masjid Al-Mansur', '34-wallpaper-luar-angkasa-paling-populer.jpg'),
(4, 'B002', 'Kajian Bulanan, 24 Nop 2019 Masjid Al-Mansur', 'Gambar Pemandangan Langit Indah Matahari Terbenam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_km`
--

CREATE TABLE `gallery_km` (
  `gid_km` int(11) NOT NULL,
  `id_km` varchar(70) NOT NULL,
  `keterangan_km` varchar(70) NOT NULL,
  `gambar_km` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_km`
--

INSERT INTO `gallery_km` (`gid_km`, `id_km`, `keterangan_km`, `gambar_km`) VALUES
(43, 'M001', 'Kajian Mingguan, Selasa 15 Oktober 2019', 'LostSagaShot_190822_030802.jpg'),
(44, 'M001', 'Kajian Mingguan, Selasa 15 Oktober 2019', 'LostSagaShot_190822_030817.jpg'),
(45, 'M001', 'Kajian Mingguan, Selasa 15 Oktober 2019', 'relay.jpg'),
(46, 'M002', 'Kajian Mingguan, Selasa 22 Oktober 2019', 'IMG_20190814_150630.jpg'),
(47, 'M002', 'Kajian Mingguan, Selasa 22 Oktober 2019', 'IMG_20190814_151241.jpg'),
(48, 'M005', 'Kajian Mingguan, Selasa 29 Oktober 2019', 'BSI.png'),
(49, 'M005', 'Kajian Mingguan, Selasa 29 Oktober 2019', 'lcd.jpg'),
(50, 'M004', 'Kajian Mingguan, Selasa 5 November 2019', 'daihatsu-sirion-merah.jpeg'),
(51, 'M004', 'Kajian Mingguan, Selasa 5 November 2019', 'daihatsu-terios-putih.jpeg'),
(52, 'M004', 'Kajian Mingguan, Selasa 5 November 2019', 'toyota-avanza-biru.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_kr`
--

CREATE TABLE `gallery_kr` (
  `gid_kr` int(11) NOT NULL,
  `id_kr` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar_kr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_kr`
--

INSERT INTO `gallery_kr` (`gid_kr`, `id_kr`, `keterangan`, `gambar_kr`) VALUES
(1, 'R001', 'Kajian Ramadhan, 21 Juni 2019, Masjid Al-Mansur', 'Dok baru 2019-08-06 14.06.24_1.jpg'),
(2, 'R001', 'Kajian Ramadhan, 21 Juni 2019, Masjid Al-Mansur', 'Dok baru 2019-08-06 14.13.24.jpg'),
(3, 'R002', 'Kajian Ramadhan, 21 Juni 2019, Masjid Al-Mansur', 'pp.jpg'),
(4, 'R002', 'Kajian Ramadhan, 21 Juni 2019, Masjid Al-Mansur', 'WhatsApp Image 2018-12-11 at 17.09.33.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_promas`
--

CREATE TABLE `gallery_promas` (
  `gid_promas` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar_promas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_promas`
--

INSERT INTO `gallery_promas` (`gid_promas`, `id`, `keterangan`, `gambar_promas`) VALUES
(1, '1', 'Program Masjid Kegiatan, Selasa 8 Feb 2019, Masjid Al-Mansur', 'kit.png'),
(2, '1', 'Program Masjid Kegiatan, Selasa 8 Feb 2019, Masjid Al-Mansur', 'numbers.png');

-- --------------------------------------------------------

--
-- Table structure for table `idul_adha`
--

CREATE TABLE `idul_adha` (
  `id_id` int(11) NOT NULL,
  `tema` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `khotib` varchar(50) NOT NULL,
  `imam` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idul_adha`
--

INSERT INTO `idul_adha` (`id_id`, `tema`, `tanggal`, `waktu`, `tempat`, `khotib`, `imam`, `gambar`) VALUES
(1, 'Menimba Pahala dengan Berkurban', '2019-09-13', '06:55:00', 'Masjid Al-Mansur Bandung', 'Ustadz Umar Hakim', 'Ustadz Umar Hakim', 'id_1.jpg'),
(2, 'Menjemput Ridho Allah SWT dengan Memperbaiki Diri', '2019-10-12', '06:30:00', 'Masjid Al-Mansur Bandung', 'Ustadz Umar Hakim', 'Ustadz Danang Umar', 'id_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `idul_fitri`
--

CREATE TABLE `idul_fitri` (
  `id_if` int(11) NOT NULL,
  `tema` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `khotib` varchar(50) NOT NULL,
  `imam` varchar(70) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idul_fitri`
--

INSERT INTO `idul_fitri` (`id_if`, `tema`, `tanggal`, `waktu`, `tempat`, `khotib`, `imam`, `gambar`) VALUES
(1, 'Menteladani Istiqomah Sahabat Nabi SAW', '2019-09-13', '07:00:00', 'Masjid Al-Mansur Bandung', 'Ustadz Arfan Widadi', 'Ustadz Arfan Widadi', 'if_1.jpg'),
(2, 'Meneruskan Kebaikan Setelah Puasa', '2021-08-10', '07:05:00', 'Masjid Al-Mansur Bandung', 'Ustadz Umar Hakim', 'Ustadz Umar Hakim', 'if_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kajian_bulanan`
--

CREATE TABLE `kajian_bulanan` (
  `id_kb` varchar(12) NOT NULL,
  `judul_kajian` varchar(70) NOT NULL,
  `pengisi_kajian` varchar(25) NOT NULL,
  `tanggal_kajian` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kajian_bulanan`
--

INSERT INTO `kajian_bulanan` (`id_kb`, `judul_kajian`, `pengisi_kajian`, `tanggal_kajian`, `gambar`, `keterangan`) VALUES
('B001', 'Terapi Iman dan Takwa', 'Ustadz Arfan Widadi', '2019-09-29', 'kb_1.jpg', 'Bada Dzuhur Berjamaah'),
('B002', 'Berkendara untuk Keselamatan Akhirat', 'Ustadz Kamil Ilham', '2019-09-20', 'kb_2.jpg', 'Bada Isya Berjamaah Masjid Al-Mansur'),
('B003', 'Semangat Meraih Berkah Allah', 'Ustadz Pepen Sholeh', '2019-09-12', 'kb_3.jpg', 'Bada Isya Berjamaah Masjid Al-Mansur'),
('B004', 'Taklukan dia Dengan Istighfar', 'Ustadz Pepen Sholeh', '2019-10-04', 'kb_4.jpg', 'Bada Isya Berjamaah Masjid Al-Mansur');

-- --------------------------------------------------------

--
-- Table structure for table `kajian_mingguan`
--

CREATE TABLE `kajian_mingguan` (
  `id_km` varchar(12) NOT NULL,
  `judul_kajian` varchar(70) NOT NULL,
  `pengisi_kajian` varchar(25) NOT NULL,
  `tanggal_kajian` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kajian_mingguan`
--

INSERT INTO `kajian_mingguan` (`id_km`, `judul_kajian`, `pengisi_kajian`, `tanggal_kajian`, `gambar`, `keterangan`) VALUES
('M001', 'Habluminallah wa Habluminannas', 'Ustadz Akrie', '2019-09-17', 'k_m1.jpg', 'Bada Isya di Masjid Al-Mansur'),
('M002', 'Ketahanan Iman dan Takwa', 'Ustadz Pepen Sholeh', '2019-09-11', 'k_m2.jpg', 'Bada Isya Berjamaah Masjid Al-Mansur'),
('M004', 'Manfaat Kebaikan di Bulan Ramadhan', 'Ustadz Danang Hilal', '2019-09-23', 'k_m4.jpg', 'Bada Isya Berjamaah Masjid Al-Mansur'),
('M005', 'Hakikat Hijrah di Masa Keemasan', 'Ustadz Arifin Yahfid', '2019-09-19', 'k_m3.jpg', 'Bada Isya Berjamaah Masjid Al-Mansur');

-- --------------------------------------------------------

--
-- Table structure for table `kajian_ramadhan`
--

CREATE TABLE `kajian_ramadhan` (
  `id_kr` varchar(12) NOT NULL,
  `judul_kajian` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(12) NOT NULL,
  `pengisi` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kajian_ramadhan`
--

INSERT INTO `kajian_ramadhan` (`id_kr`, `judul_kajian`, `tanggal`, `jam`, `pengisi`, `gambar`) VALUES
('R001', 'Istiqomah Berpuasa', '2019-09-12', '16:45', 'H. Abbassajiminn', 'kr_1.jpg'),
('R002', 'Puasa Meningkatkan Ketaqwaan', '2019-10-05', '16:30', 'Ustadz Rifgi Rambe', 'kr_2.jpg'),
('R003', 'Generasi Penerus Agama Allah', '2019-10-18', '17:00', 'Ustadz Pepen Sholeh', 'kr_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `program_masjid`
--

CREATE TABLE `program_masjid` (
  `id` int(11) NOT NULL,
  `nama_program` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_masjid`
--

INSERT INTO `program_masjid` (`id`, `nama_program`, `tanggal`, `tempat`, `gambar`) VALUES
(1, 'Santunan Yatim dan Dhuafa Bersama PayTren', '2019-09-22', 'Halaman Masjid Al-Mansur Bandung', 'pm_1.jpg'),
(2, 'Wisuda Akbar Santri Yayasan Masjid Al-Mansur', '2019-10-12', 'Aula Masjid Al-Mansur Bandung', 'pm_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sholat_jumat`
--

CREATE TABLE `sholat_jumat` (
  `id` int(11) NOT NULL,
  `judul_tausiyah` varchar(70) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `khotib` varchar(70) NOT NULL,
  `imam` varchar(70) NOT NULL,
  `muadzin` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sholat_jumat`
--

INSERT INTO `sholat_jumat` (`id`, `judul_tausiyah`, `tanggal`, `waktu`, `tempat`, `khotib`, `imam`, `muadzin`) VALUES
(1, 'Niat Hijrah Nasuha', '2019-09-20', '11:30:00', 'Masjid Al-Mansur Bandung', 'Ustadz Pepen Sholeh', 'Ustadz Pepen Sholeh', 'Sdr. Amil'),
(2, 'Niat Hijrah Nasuha', '2019-10-11', '11:45:00', 'Masjid Al-Mansur Bandung', 'Ustadz Rifgi Rambe', 'Ustadz Pepen Sholeh', 'Sdr. Andi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Admin','User','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery_id`
--
ALTER TABLE `gallery_id`
  ADD PRIMARY KEY (`gid_id`);

--
-- Indexes for table `gallery_if`
--
ALTER TABLE `gallery_if`
  ADD PRIMARY KEY (`gid_if`);

--
-- Indexes for table `gallery_kb`
--
ALTER TABLE `gallery_kb`
  ADD PRIMARY KEY (`gid_kb`);

--
-- Indexes for table `gallery_km`
--
ALTER TABLE `gallery_km`
  ADD PRIMARY KEY (`gid_km`);

--
-- Indexes for table `gallery_kr`
--
ALTER TABLE `gallery_kr`
  ADD PRIMARY KEY (`gid_kr`);

--
-- Indexes for table `gallery_promas`
--
ALTER TABLE `gallery_promas`
  ADD PRIMARY KEY (`gid_promas`);

--
-- Indexes for table `idul_adha`
--
ALTER TABLE `idul_adha`
  ADD PRIMARY KEY (`id_id`);

--
-- Indexes for table `idul_fitri`
--
ALTER TABLE `idul_fitri`
  ADD PRIMARY KEY (`id_if`);

--
-- Indexes for table `kajian_bulanan`
--
ALTER TABLE `kajian_bulanan`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indexes for table `kajian_mingguan`
--
ALTER TABLE `kajian_mingguan`
  ADD PRIMARY KEY (`id_km`);

--
-- Indexes for table `kajian_ramadhan`
--
ALTER TABLE `kajian_ramadhan`
  ADD PRIMARY KEY (`id_kr`);

--
-- Indexes for table `program_masjid`
--
ALTER TABLE `program_masjid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sholat_jumat`
--
ALTER TABLE `sholat_jumat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery_id`
--
ALTER TABLE `gallery_id`
  MODIFY `gid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery_if`
--
ALTER TABLE `gallery_if`
  MODIFY `gid_if` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery_kb`
--
ALTER TABLE `gallery_kb`
  MODIFY `gid_kb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery_km`
--
ALTER TABLE `gallery_km`
  MODIFY `gid_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `gallery_kr`
--
ALTER TABLE `gallery_kr`
  MODIFY `gid_kr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery_promas`
--
ALTER TABLE `gallery_promas`
  MODIFY `gid_promas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `idul_adha`
--
ALTER TABLE `idul_adha`
  MODIFY `id_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `idul_fitri`
--
ALTER TABLE `idul_fitri`
  MODIFY `id_if` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_masjid`
--
ALTER TABLE `program_masjid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sholat_jumat`
--
ALTER TABLE `sholat_jumat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

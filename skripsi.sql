-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2022 at 06:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `id_objek_wisata` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `id_objek_wisata`, `nama`) VALUES
(19, 1, 'Taman Rekreasi Sengkaling'),
(20, 4, 'Coban Parang Tejo'),
(22, 10, 'Bumi Perkemahan Bedengan'),
(23, 5, 'Wisata Lembah Gunung Sari Kucur'),
(24, 3, 'Wisata Agro Petik Jeruk');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_objek_wisata` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT -1,
  `nama` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `input_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `id_objek_wisata`, `parent_id`, `nama`, `content`, `input_date`) VALUES
(1, 1, -1, 'akhdan', 'comment page1', '2022-06-18 15:22:23'),
(53, 2, -1, 'novian', 'comment page2', '2022-06-18 16:05:59'),
(54, 3, -1, 'fidy', 'comment page3', '2022-06-18 16:06:52'),
(68, 1, -1, 'besta', 'comment page 1 yg kedua', '2022-06-18 18:21:32'),
(79, 4, -1, 'akhdan', 'wah bagus sekali cobannya!', '2022-06-23 05:31:58'),
(80, 9, -1, 'akhdan', 'track nya sulit tapi menantang!', '2022-06-23 05:32:16'),
(81, 5, -1, 'akhdan', 'kolam renang buatan dengan nuansa alami yang ciamik!', '2022-06-23 05:32:46'),
(82, 8, -1, 'akhdan', 'pemandian dengan nuansa bali, cukup murah', '2022-06-23 05:33:11'),
(83, 7, -1, 'akhdan', 'wisata bersejarah dan tiket masuknya gratis!', '2022-06-23 05:33:38'),
(84, 10, -1, 'akhdan', 'seru banget bisa ngecamp disini sambil main air', '2022-06-23 06:18:58'),
(85, 4, -1, 'royyan', 'tes komen', '2022-07-15 13:47:43'),
(86, 5, -1, 'tes', 'tes komen', '2022-07-21 11:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `ir`
--

CREATE TABLE `ir` (
  `jumlah` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ir`
--

INSERT INTO `ir` (`jumlah`, `nilai`) VALUES
(1, 0),
(2, 0),
(3, 0.58),
(4, 0.9),
(5, 1.12),
(6, 1.24),
(7, 1.32),
(8, 1.41),
(9, 1.45),
(10, 1.49),
(11, 1.51),
(12, 1.48),
(13, 1.56),
(14, 1.57),
(15, 1.59);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`) VALUES
(28, 'Harga Tiket'),
(29, 'Jarak'),
(31, 'Ketersediaan Hotel'),
(32, 'Transportasi'),
(36, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `kt_angkutan`
--

CREATE TABLE `kt_angkutan` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kt_angkutan`
--

INSERT INTO `kt_angkutan` (`id`, `value`) VALUES
(1, '0 Angkutan'),
(2, '3 Angkutan'),
(3, '5 Angkutan');

-- --------------------------------------------------------

--
-- Table structure for table `kt_harga`
--

CREATE TABLE `kt_harga` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kt_harga`
--

INSERT INTO `kt_harga` (`id`, `value`) VALUES
(1, 'Free'),
(2, 'Rp 10.000'),
(3, 'Rp 20.000'),
(4, 'Rp 30.000'),
(5, 'Rp 40.000');

-- --------------------------------------------------------

--
-- Table structure for table `kt_hotel`
--

CREATE TABLE `kt_hotel` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kt_hotel`
--

INSERT INTO `kt_hotel` (`id`, `value`) VALUES
(1, '0 Hotel'),
(2, '3 Hotel'),
(3, '5 Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `kt_jarak`
--

CREATE TABLE `kt_jarak` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kt_jarak`
--

INSERT INTO `kt_jarak` (`id`, `value`) VALUES
(1, '0 KM'),
(2, '5 KM'),
(3, '10 KM'),
(4, '15 KM'),
(5, '20 KM');

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_alternatif`
--

CREATE TABLE `perbandingan_alternatif` (
  `id` int(11) NOT NULL,
  `alternatif1` int(11) NOT NULL,
  `alternatif2` int(11) NOT NULL,
  `pembanding` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_alternatif`
--

INSERT INTO `perbandingan_alternatif` (`id`, `alternatif1`, `alternatif2`, `pembanding`, `nilai`) VALUES
(16, 19, 20, 28, 1.3),
(18, 19, 22, 28, 0.555556),
(19, 19, 23, 28, 0.833333),
(20, 19, 24, 28, 0.666667),
(26, 20, 22, 28, 1),
(27, 20, 23, 28, 1),
(28, 20, 24, 28, 1.7),
(40, 22, 23, 28, 1.7),
(41, 22, 24, 28, 1.5),
(46, 23, 24, 28, 1.2),
(71, 19, 20, 29, 3.54),
(73, 19, 22, 29, 2.16),
(74, 19, 23, 29, 3.44),
(75, 19, 24, 29, 1.63),
(82, 20, 22, 29, 0.502513),
(83, 20, 23, 29, 1.65),
(84, 20, 24, 29, 0.806452),
(98, 22, 23, 29, 2.04),
(99, 22, 24, 29, 1.34),
(105, 23, 24, 29, 0.564972),
(181, 19, 20, 31, 3.28),
(183, 19, 22, 31, 1.76),
(184, 19, 23, 31, 2.25),
(185, 19, 24, 31, 1.7),
(192, 20, 22, 31, 1.93),
(193, 20, 23, 31, 1.2),
(194, 20, 24, 31, 1.14),
(208, 22, 23, 31, 1.69),
(209, 22, 24, 31, 1),
(215, 23, 24, 31, 1.33),
(236, 19, 20, 32, 3.13),
(238, 19, 22, 32, 2.17),
(239, 19, 23, 32, 2),
(240, 19, 24, 32, 1.54),
(247, 20, 22, 32, 0.421941),
(248, 20, 23, 32, 1.07),
(249, 20, 24, 32, 0.869565),
(263, 22, 23, 32, 1.78),
(264, 22, 24, 32, 1.3),
(270, 23, 24, 32, 0.970874);

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_kriteria`
--

CREATE TABLE `perbandingan_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria1` int(11) NOT NULL,
  `kriteria2` int(11) NOT NULL,
  `nilai` float NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id`, `kriteria1`, `kriteria2`, `nilai`) VALUES
(7, 28, 29, 2.6),
(9, 28, 31, 2.2),
(10, 28, 32, 0.769231),
(12, 29, 31, 1.6),
(13, 29, 32, 1.1),
(16, 31, 32, 0.625),
(17, 28, 36, 1),
(18, 29, 36, 1),
(19, 31, 36, 1),
(20, 32, 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pv_alternatif`
--

CREATE TABLE `pv_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pv_alternatif`
--

INSERT INTO `pv_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(40, 19, 28, 0.167284),
(41, 20, 28, 0.211253),
(43, 22, 28, 0.26363),
(44, 23, 28, 0.186899),
(45, 24, 28, 0.170934),
(51, 19, 29, 0.378718),
(52, 20, 29, 0.129245),
(54, 22, 29, 0.214673),
(55, 23, 29, 0.0977822),
(56, 24, 29, 0.179583),
(73, 19, 31, 0.346053),
(74, 20, 31, 0.184938),
(76, 22, 31, 0.168326),
(77, 23, 31, 0.147169),
(78, 24, 31, 0.153515),
(84, 19, 32, 0.341707),
(85, 20, 32, 0.123971),
(87, 22, 32, 0.224816),
(88, 23, 32, 0.141983),
(89, 24, 32, 0.167523);

-- --------------------------------------------------------

--
-- Table structure for table `pv_kriteria`
--

CREATE TABLE `pv_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pv_kriteria`
--

INSERT INTO `pv_kriteria` (`id_kriteria`, `nilai`) VALUES
(28, 0.266782),
(29, 0.183384),
(31, 0.137182),
(32, 0.2202),
(36, 0.192452);

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id_alternatif`, `nilai`) VALUES
(19, 0.28996),
(20, 0.16461),
(22, 0.227559),
(23, 0.148611),
(24, 0.16926);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `nama`, `is_active`, `password`) VALUES
(2, 'akhdanx@gmail.com', 'akhdan', 1, '$2y$10$KeMi6Fr8VsTUUjubKXUapuVVBmdXuTneX39/POXn9A15o.wWNYCHG'),
(4, 'novian@gmail.com', 'Novian Nurrohman', 1, '$2y$10$rbFYW/wR9efs5/itpsQzMeIQvoAO2fgr4pICjEAMeo6tqDf28H01q'),
(5, 'admin@gmail.com', 'disparbud', 1, '$2y$10$r.Jc2xMsT1FsgnIGKSKwp.rHxDaFE8GfkSdaCH5fM2KuiX2hx13iW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_detail_map` (`id_objek_wisata`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_objek_wisata` (`id_objek_wisata`);

--
-- Indexes for table `ir`
--
ALTER TABLE `ir`
  ADD PRIMARY KEY (`jumlah`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kt_angkutan`
--
ALTER TABLE `kt_angkutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kt_harga`
--
ALTER TABLE `kt_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kt_hotel`
--
ALTER TABLE `kt_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kt_jarak`
--
ALTER TABLE `kt_jarak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternatif1` (`alternatif1`),
  ADD KEY `alternatif2` (`alternatif2`);

--
-- Indexes for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriteria1` (`kriteria1`),
  ADD KEY `kriteria2` (`kriteria2`);

--
-- Indexes for table `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `pv_kriteria`
--
ALTER TABLE `pv_kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kt_angkutan`
--
ALTER TABLE `kt_angkutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kt_harga`
--
ALTER TABLE `kt_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kt_hotel`
--
ALTER TABLE `kt_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kt_jarak`
--
ALTER TABLE `kt_jarak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

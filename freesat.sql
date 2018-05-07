-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2018 at 11:23 PM
-- Server version: 10.2.14-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freesat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayarlar`
--

CREATE TABLE `ayarlar` (
  `site_url` varchar(250) NOT NULL,
  `site_baslik` varchar(250) NOT NULL,
  `site_desc` varchar(300) NOT NULL,
  `site_keyw` varchar(300) NOT NULL,
  `site_tema` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ayarlar`
--

INSERT INTO `ayarlar` (`site_url`, `site_baslik`, `site_desc`, `site_keyw`, `site_tema`) VALUES
('http://localhost/freesat', 'FreeSAT Online İşlemler Sistemi', 'Bu sistemi kullanarak, FreeSAT kullanıcıları hatları ile ilgili işlemleri halledebilir.', 'freesat, mobil, operatör, sistem, online, işlem, kontör, fatura, tarife, paket', 'v1');

-- --------------------------------------------------------

--
-- Table structure for table `banka_karti`
--

CREATE TABLE `banka_karti` (
  `id` int(11) NOT NULL,
  `kartno` char(16) NOT NULL,
  `ad_soyad` varchar(30) NOT NULL,
  `ay` int(11) NOT NULL,
  `yil` int(11) NOT NULL,
  `guvenlik_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `engelli_numara`
--

CREATE TABLE `engelli_numara` (
  `kullanici_id` int(11) NOT NULL,
  `engelli_numara` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fatura`
--

CREATE TABLE `fatura` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `tutar` int(11) NOT NULL,
  `son_gun` date NOT NULL,
  `odendi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faturasiz_kullanici`
--

CREATE TABLE `faturasiz_kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `bakiye` int(11) NOT NULL,
  `kritik_bakiye` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faturasiz_kullanici`
--

INSERT INTO `faturasiz_kullanici` (`kullanici_id`, `bakiye`, `kritik_bakiye`) VALUES
(1, 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `fiyatlandirma_sistemi`
--

CREATE TABLE `fiyatlandirma_sistemi` (
  `id` int(11) NOT NULL,
  `isim` varchar(255) NOT NULL,
  `konusma` int(11) NOT NULL,
  `sms` int(11) NOT NULL,
  `internet` int(11) NOT NULL,
  `gun` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL,
  `tarife` tinyint(1) NOT NULL,
  `faturali` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `harcama_kurali`
--

CREATE TABLE `harcama_kurali` (
  `id` int(11) NOT NULL,
  `fiyatlandirma_sistemi_id` int(11) NOT NULL,
  `kalan_konusma` int(11) NOT NULL,
  `kalan_sms` int(11) NOT NULL,
  `kalan_internet` int(11) NOT NULL,
  `kalan_gun` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `istek_sikayet`
--

CREATE TABLE `istek_sikayet` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `mesaj` text NOT NULL,
  `gonderilmeZamani` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `adSoyad` varchar(30) NOT NULL,
  `telefonNo` char(14) NOT NULL,
  `hatAktifligi` tinyint(1) NOT NULL,
  `faturali` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`id`, `adSoyad`, `telefonNo`, `hatAktifligi`, `faturali`) VALUES
(1, 'sistem', '4444', 1, 0),
(2, 'kobe bryant', '12345678', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kullanici_servisleri`
--

CREATE TABLE `kullanici_servisleri` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `servis_id` int(11) NOT NULL,
  `durum` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rehber_kaydi`
--

CREATE TABLE `rehber_kaydi` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `ad_soyad` varchar(30) NOT NULL,
  `telefon_no` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE `servis` (
  `id` int(11) NOT NULL,
  `isim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `gonderen_kullanici_id` int(11) NOT NULL,
  `gonderilen_kullanici_id` int(11) NOT NULL,
  `mesaj` text NOT NULL,
  `gonderlime_zamani` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `gonderen_kullanici_id`, `gonderilen_kullanici_id`, `mesaj`, `gonderlime_zamani`) VALUES
(1, 1, 2, '5513476', '2018-05-02 21:20:01'),
(2, 1, 1, '1278446', '2018-05-02 21:57:05'),
(3, 1, 1, '2215837', '2018-05-02 22:02:15'),
(4, 1, 1, '6513319', '2018-05-02 22:03:38'),
(5, 1, 1, '8389830', '2018-05-02 22:04:28'),
(6, 1, 2, '8047545', '2018-05-02 22:08:44'),
(7, 1, 1, '5443919', '2018-05-02 22:16:07'),
(8, 1, 1, '8836790', '2018-05-02 22:17:02'),
(9, 1, 1, '1568480', '2018-05-02 22:23:54'),
(10, 1, 1, '2744350', '2018-05-02 22:24:40'),
(11, 1, 1, '2881426', '2018-05-02 22:26:50'),
(12, 1, 1, '9865481', '2018-05-02 22:29:32'),
(13, 1, 1, '6415881', '2018-05-02 22:30:05'),
(14, 1, 1, '1719371', '2018-05-02 22:33:33'),
(15, 1, 1, '5395999', '2018-05-02 22:36:13'),
(16, 1, 1, '6722387', '2018-05-02 22:42:24'),
(17, 1, 1, '934936', '2018-05-02 22:44:30'),
(18, 1, 1, '7127958', '2018-05-02 22:46:22'),
(19, 1, 1, '3880785', '2018-05-02 22:47:37'),
(20, 1, 1, '9130197', '2018-05-02 22:49:55'),
(21, 1, 1, '5309036', '2018-05-03 13:07:40'),
(22, 1, 1, '695546', '2018-05-03 13:28:52'),
(23, 1, 1, '6880149', '2018-05-03 13:29:52'),
(24, 1, 1, '3076512', '2018-05-03 13:43:22'),
(25, 1, 1, '7384130', '2018-05-03 13:43:45'),
(26, 1, 1, '7507514', '2018-05-03 13:44:08'),
(27, 1, 1, '1502992', '2018-05-03 13:45:54'),
(28, 1, 1, '1824280', '2018-05-03 13:50:27'),
(29, 1, 2, '3901298', '2018-05-03 13:54:57'),
(30, 1, 1, '2385089', '2018-05-03 13:57:55'),
(31, 1, 1, '8413150', '2018-05-03 22:27:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banka_karti`
--
ALTER TABLE `banka_karti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fatura`
--
ALTER TABLE `fatura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faturasiz_kullanici`
--
ALTER TABLE `faturasiz_kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Indexes for table `fiyatlandirma_sistemi`
--
ALTER TABLE `fiyatlandirma_sistemi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harcama_kurali`
--
ALTER TABLE `harcama_kurali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `istek_sikayet`
--
ALTER TABLE `istek_sikayet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kullanici_servisleri`
--
ALTER TABLE `kullanici_servisleri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rehber_kaydi`
--
ALTER TABLE `rehber_kaydi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banka_karti`
--
ALTER TABLE `banka_karti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fatura`
--
ALTER TABLE `fatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `harcama_kurali`
--
ALTER TABLE `harcama_kurali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `istek_sikayet`
--
ALTER TABLE `istek_sikayet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kullanici_servisleri`
--
ALTER TABLE `kullanici_servisleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rehber_kaydi`
--
ALTER TABLE `rehber_kaydi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servis`
--
ALTER TABLE `servis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

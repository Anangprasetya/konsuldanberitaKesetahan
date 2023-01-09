-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2023 at 10:44 PM
-- Server version: 8.0.31-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwdrescpba_Latihan-Website-Pure-PHP`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jabatan_admin` varchar(30) NOT NULL,
  `foto_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `jabatan_admin`, `foto_admin`) VALUES
(10, 'Anang Nur Prasetya Ganteng', 'anangnur', 'anangnur', 'admin', '../ResourcesPWD/assets/img/admin/gambar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(100) NOT NULL,
  `tanggal_berita` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slug_berita` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `tanggal_berita`, `slug_berita`) VALUES
(1, '2 Orang mati ditikung', 'diketahu di suatu masa ada pemuda ....', '../ResourcesPWD/assets/img/berita/carbon.png', '2023-01-09 02:17:11', '2-orang-mati-ditikung'),
(10, 'berita terbaru edit', 'berita ini adalah berita yang membahasa tentnag kesehatan', '../ResourcesPWD/assets/img/berita/Screenshot from 2022-11-05 18-52-49.png', '2023-01-09 15:37:45', 'berita-terbaru-edit'),
(11, 'akan di  ganti hapus habis ini', 'berita ini adalah berita yang membahasa tentnag kesehatan okee', '../ResourcesPWD/assets/img/berita/Screenshot from 2021-04-08 10-31-57.png', '2023-01-08 07:42:20', 'akan-di-edit'),
(12, 'Penumua obat baru demam', 'Obat adalah sekian dan sekian', '../ResourcesPWD/assets/img/berita/Screenshot from 2022-10-25 08-18-57.png', '2023-01-08 10:39:05', 'penumua-obat-baru-demam'),
(13, 'Riset penyebab kematian', 'Ini adalah artikel yang menjelaskan tentang informasi dalam bidang kesehatan', '../ResourcesPWD/assets/img/berita/Screenshot from 2022-12-21 09-48-41.png', '2023-01-09 15:39:52', 'riset-penyebab-kematian');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_tamu` int NOT NULL,
  `nama_tamu` varchar(30) NOT NULL,
  `alamat_tamu` varchar(100) NOT NULL,
  `tanggal_tamu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_tamu`, `nama_tamu`, `alamat_tamu`, `tanggal_tamu`) VALUES
(5, 'Bintang Jata', 'Bantul', '2023-01-09 03:23:01'),
(9, 'Adi Amba', 'Sleman', '2023-01-09 03:23:20'),
(10, 'Alex', 'Kota Yogyakarta', '2023-01-09 15:23:37'),
(11, 'Merina', 'Bantul', '2023-01-09 15:23:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_tamu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 12, 2021 at 05:43 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tempat_lhr` varchar(30) NOT NULL,
  `tgl_lhr` varchar(20) NOT NULL,
  `pbnu` varchar(50) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `pernah_menyenyam` varchar(50) NOT NULL,
  `lama_pendidikan` varchar(30) NOT NULL,
  `nama_pesantren` varchar(50) NOT NULL,
  `alamat_pesantren` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id`, `nama`, `nik`, `tempat_lhr`, `tgl_lhr`, `pbnu`, `status_perkawinan`, `pekerjaan`, `pendidikan_terakhir`, `pernah_menyenyam`, `lama_pendidikan`, `nama_pesantren`, `alamat_pesantren`) VALUES
(2, 'FAHRURROZI', '98989', 'WAKAN', '', '00ok', '', '', '', '', '', '', ''),
(4, '2', 'raden', 'JEROWARU', '050920', 'tidak tau', 'nikah', 'Mahasiswa', '2018', 'Pernah', '3 Tahun', 'Berugak NWDI', 'Jerowaru Kabupaten Lombok Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

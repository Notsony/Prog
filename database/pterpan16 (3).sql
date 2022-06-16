-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Des 2016 pada 06.21
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pterpan16`
--
CREATE DATABASE IF NOT EXISTS `pterpan16` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pterpan16`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `akses`) VALUES
('vinton22', 'vinton', 'admin'),
('robby12', 'robby12', 'admin'),
('sony41', 'sony41', 'admin'),
('user23', 'user23', 'riset'),
('user45', 'user45', 'humas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prog_kerja`
--

CREATE TABLE IF NOT EXISTS `prog_kerja` (
  `kode_prog` char(5) NOT NULL,
  `divisi` varchar(20) DEFAULT NULL,
  `nm_prog` varchar(100) NOT NULL,
  `ren_indikator` varchar(100) NOT NULL,
  `ren_jumlah` int(10) NOT NULL,
  `ren_satuan` char(10) NOT NULL,
  `ren_anggaran` int(11) NOT NULL,
  `ren_bln1` char(1) DEFAULT NULL,
  `ren_bln2` char(1) DEFAULT NULL,
  `ren_bln3` char(1) DEFAULT NULL,
  `ren_bln4` char(1) DEFAULT NULL,
  `ren_bln5` char(1) DEFAULT NULL,
  `ren_bln6` char(1) DEFAULT NULL,
  `ren_bln7` char(1) DEFAULT NULL,
  `ren_bln8` char(1) DEFAULT NULL,
  `ren_bln9` char(1) DEFAULT NULL,
  `ren_bln10` char(1) DEFAULT NULL,
  `ren_bln11` char(1) DEFAULT NULL,
  `ren_bln12` char(1) DEFAULT NULL,
  `tahun` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prog_kerja`
--

INSERT INTO `prog_kerja` (`kode_prog`, `divisi`, `nm_prog`, `ren_indikator`, `ren_jumlah`, `ren_satuan`, `ren_anggaran`, `ren_bln1`, `ren_bln2`, `ren_bln3`, `ren_bln4`, `ren_bln5`, `ren_bln6`, `ren_bln7`, `ren_bln8`, `ren_bln9`, `ren_bln10`, `ren_bln11`, `ren_bln12`, `tahun`) VALUES
('P0001', 'Humas', 'Open Recruitment Anggota HMSI', 'Penambahan Anggota Baru', 10, 'Orang', 500000, '', NULL, 'y', NULL, NULL, 'y', NULL, NULL, 'y', NULL, NULL, 'y', '2016'),
('P0002', 'Riset', 'Pelaksanaan SI Night', 'Riset tempat diadakan SI Night', 40, 'Orang', 2000000, NULL, NULL, NULL, 'y', NULL, NULL, NULL, NULL, 'y', NULL, NULL, NULL, '2016'),
('P0003', 'Riset', 'Test Komputer Mac', 'Test komputer Mac di Lab baru', 10, 'Unit', 3000000, NULL, NULL, NULL, 'y', NULL, NULL, NULL, 'y', NULL, NULL, NULL, 'y', '2016'),
('P0004', 'Pendidikan', 'Kejar Matkul Struktur Data', 'Memberikan bimbingan matkul Struktur Data dalam kerja kelompok', 8, 'Unit', 1000000, NULL, NULL, 'y', NULL, NULL, NULL, 'y', NULL, NULL, NULL, 'y', NULL, '2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `realisasi`
--

CREATE TABLE IF NOT EXISTS `realisasi` (
`kode_res` int(11) NOT NULL,
  `kode_prog` char(5) NOT NULL,
  `cawu` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` char(10) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `rel_bln1` char(1) DEFAULT NULL,
  `rel_bln2` char(1) DEFAULT NULL,
  `rel_bln3` char(1) DEFAULT NULL,
  `rel_bln4` char(1) DEFAULT NULL,
  `rel_bln5` char(1) DEFAULT NULL,
  `rel_bln6` char(1) DEFAULT NULL,
  `rel_bln7` char(1) DEFAULT NULL,
  `rel_bln8` char(1) DEFAULT NULL,
  `rel_bln9` char(1) DEFAULT NULL,
  `rel_bln10` char(1) DEFAULT NULL,
  `rel_bln11` char(1) DEFAULT NULL,
  `rel_bln12` char(1) DEFAULT NULL,
  `tahun` char(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `realisasi`
--

INSERT INTO `realisasi` (`kode_res`, `kode_prog`, `cawu`, `jumlah`, `satuan`, `anggaran`, `rel_bln1`, `rel_bln2`, `rel_bln3`, `rel_bln4`, `rel_bln5`, `rel_bln6`, `rel_bln7`, `rel_bln8`, `rel_bln9`, `rel_bln10`, `rel_bln11`, `rel_bln12`, `tahun`) VALUES
(1, 'P0001', 1, 2, 'Orang', 30000, NULL, NULL, 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
(2, 'P0001', 2, 4, 'Orang', 20000, NULL, NULL, NULL, NULL, NULL, NULL, 'y', NULL, NULL, NULL, NULL, NULL, '2016'),
(3, 'P0001', 3, 4, 'Orang', 50000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'y', 'y', '2016'),
(4, 'P0002', 1, 10, 'Orang', 500000, NULL, NULL, NULL, 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
(5, 'P0002', 2, 0, 'Orang', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016'),
(17, 'P0003', 3, 3, 'Orang', 5000000, '', '', '', '', '', '', '', 'y', 'y', '', 'y', 'y', '2016'),
(21, 'P0004', 1, 5, 'Unit', 20000, '', '', 'y', '', '', '', '', '', '', '', '', '', '2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `swot`
--

CREATE TABLE IF NOT EXISTS `swot` (
`kode_swot` int(11) NOT NULL,
  `kode_res` char(5) NOT NULL,
  `ket_swot` longtext,
  `tipe_swot` char(1) NOT NULL,
  `tahun` char(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `swot`
--

INSERT INTO `swot` (`kode_swot`, `kode_res`, `ket_swot`, `tipe_swot`, `tahun`) VALUES
(1, '1', 'Blablabalaalab....', 'S', '2016'),
(2, '1', 'bwbwbwbwbwb', 'S', '2016'),
(3, '1', 'Blabbaba', 'W', '2016'),
(4, '1', 'Bkabakabak', 'O', '2016'),
(5, '1', 'BLbblabla', 'T', '2016'),
(6, '1', 'Blablabla', 'T', '2016'),
(7, '2', 'Blabalabla', 'S', '2016'),
(8, '2', 'Bkabakbaklaab', 'W', '2016'),
(9, '2', 'Blablablabala', 'W', '2016'),
(10, '2', 'Hahahahahahah', 'W', '2016'),
(11, '2', 'Wooooooooowow', 'O', '2016'),
(12, '3', 'Weiiiiieieieki', 'S', '2016'),
(13, '3', 'NOooooooooNONOno', 'W', '2016'),
(14, '3', 'Hmmmmmmmm', 'O', '2016'),
(15, '3', 'Wkwkwkwkwkwwkwk', 'T', '2016'),
(16, '4', 'Eaaaaaaaaaa', 'W', '2016'),
(17, '5', 'Nannananananananan', 'S', '2016'),
(18, '5', 'Balbalabal', 'W', '2016'),
(19, '5', 'Woowowoowoooo', 'O', '2016'),
(20, '5', 'Dammmmmmnnnaman', 'O', '2016'),
(21, '5', 'Yeaaaaahhah', 'T', '2016'),
(22, '5', 'Yeeeeesssyssys', 'T', '2016'),
(23, '6', 'Blabalablabal', 'W', '2016'),
(24, '6', 'Blalablablabala', 'O', '2016'),
(25, '13', 'Hah', 'S', '2016'),
(26, '6', 'Coba coba bro', 'S', '2016'),
(27, '17', 'satu', 'S', '2016'),
(28, '17', 'satu', 'S', '2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prog_kerja`
--
ALTER TABLE `prog_kerja`
 ADD PRIMARY KEY (`kode_prog`);

--
-- Indexes for table `realisasi`
--
ALTER TABLE `realisasi`
 ADD PRIMARY KEY (`kode_res`);

--
-- Indexes for table `swot`
--
ALTER TABLE `swot`
 ADD PRIMARY KEY (`kode_swot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `realisasi`
--
ALTER TABLE `realisasi`
MODIFY `kode_res` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `swot`
--
ALTER TABLE `swot`
MODIFY `kode_swot` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

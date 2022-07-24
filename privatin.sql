-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 06:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `privatin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `id_akun` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `password`, `status`, `role_id`) VALUES
('0uxfi6', 'putri', '1234567890', NULL, 2),
('azmni8', 'ahmad rizaldi', '1234567890', NULL, 3),
('dx39lu', 'mamat', '1234567890', NULL, 3),
('lyze1i', 'Agus junedi', '123456', NULL, 2),
('nzvia5', 'Anisa Khourinisa', '1234567890', NULL, 3),
('st2yaq', 'admin', '1234567890', NULL, 1),
('zn7c6v', 'afandi agus', '1234567890', NULL, 2),
('zp5s7m', 'ageng subagja', '1234567890', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(10) NOT NULL,
  `id_pengajar` varchar(10) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_pesanan` varchar(10) NOT NULL,
  `nama_siswa` varchar(20) DEFAULT NULL,
  `kontrak` varchar(20) DEFAULT NULL,
  `foto_pembayaran` varchar(50) DEFAULT NULL,
  `create_ate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesanan` varchar(6) NOT NULL,
  `id_siswa` varchar(6) NOT NULL,
  `id_pengajar` varchar(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `kontrak` varchar(20) NOT NULL,
  `tanggal_les` date NOT NULL,
  `statuss` varchar(15) NOT NULL,
  `create_ate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_ate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` varchar(10) NOT NULL,
  `id_akun` varchar(10) NOT NULL,
  `nama_pengajar` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status` varchar(12) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `id_akun`, `nama_pengajar`, `bidang`, `gambar`, `no_hp`, `alamat`, `deskripsi`, `status`, `tanggal`) VALUES
('nj7ec9', 'nzvia5', 'Anisa Khourinisa', 'SMA (IPA)', '62ce7e3e25121.png', '6281220395252', 'Desa Tugu Kecamatan Lelea Kabupaten Indramayu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae elit eget mauris euismod laoreet at a enim. Suspendisse in ligula bibendum, accumsan nunc lobortis, fermentum felis. Aliquam et lectus dui. Nullam sodales lacus nec nulla ornare sceler', 'SETUJU', '2022-07-18 12:51:40'),
('qoiv69', 'azmni8', 'ahmad rizaldi', 'SMK (RPL)', '62ce7eaa2f4b1.jpg', '85724004624', 'desa penganjang kecamatan indramayu kabupaten indramayu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae elit eget mauris euismod laoreet at a enim. Suspendisse in ligula bibendum, accumsan nunc lobortis, fermentum felis. Aliquam et lectus dui. Nullam sodales lacus nec nulla ornare sceler', 'SETUJU', '2022-07-14 15:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `review_les`
--

CREATE TABLE `review_les` (
  `id_reviews` varchar(10) NOT NULL,
  `id_pengajar` varchar(10) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `hasil_review` text NOT NULL,
  `pertemuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(6) NOT NULL,
  `id_akun` varchar(6) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_akun`, `nama_siswa`, `alamat`, `no_hp`) VALUES
('4dmb5l', 'zn7c6v', 'afandi agus', 'Desa celeng kecamatan lohbener kabupaten indramayu', '6285724004624'),
('4rg7i3', '0uxfi6', 'putri', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae elit eget mauris euismod laoreet at a enim. Suspendisse in ligula bibendum, accumsan nunc lobortis, fermentum felis. Aliquam et lectus dui. Nullam sodales lacus nec nulla ornare sceler', '081220395222'),
('5tveda', 'lyze1i', 'Agus junedi', 'desa pekandangan lelea indramayu', '083220395252'),
('75c1pa', 'zp5s7m', 'ageng subagja', 'Tugu Lelea Indramayau', '081220395252');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `review_les`
--
ALTER TABLE `review_les`
  ADD PRIMARY KEY (`id_reviews`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

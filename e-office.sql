-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 09:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-office`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `nama_general` varchar(255) NOT NULL,
  `telp_pemohon` text NOT NULL,
  `email_pemohon` varchar(255) NOT NULL,
  `no_permohonan` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `jenis_permohonan` varchar(255) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `kelas_pemohon` varchar(255) NOT NULL,
  `tempatlahir_pemohon` varchar(255) NOT NULL,
  `ttl_pemohon` date NOT NULL,
  `nis_pemohon` varchar(255) NOT NULL,
  `nisn_pemohon` varchar(255) NOT NULL,
  `keperluan_pemohon` varchar(255) NOT NULL,
  `kegiatan_pemohon` varchar(255) NOT NULL,
  `durasi_awal_pemohon` date NOT NULL,
  `durasi_akhir_pemohon` date NOT NULL,
  `lampiran_pemohon` varchar(255) NOT NULL,
  `waktu_permohonan` datetime NOT NULL,
  `status_permohonan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `nama_general`, `telp_pemohon`, `email_pemohon`, `no_permohonan`, `no_surat`, `jenis_permohonan`, `nama_pemohon`, `kelas_pemohon`, `tempatlahir_pemohon`, `ttl_pemohon`, `nis_pemohon`, `nisn_pemohon`, `keperluan_pemohon`, `kegiatan_pemohon`, `durasi_awal_pemohon`, `durasi_akhir_pemohon`, `lampiran_pemohon`, `waktu_permohonan`, `status_permohonan`) VALUES
(1, '', '0', '', 'id0000001', '', 'Surat Keterangan Siswa', 'Ahmad Hamra', 'XII-A', '', '2006-11-02', '00000000000000001', '0064734653', 'Untuk Pemberkasan MYRES 2024', '', '0000-00-00', '0000-00-00', '-', '2024-09-02 00:00:00', 'Diproses'),
(10, 'Ahmad Hamra', '2147483647', 'ahamra.1120@gmail.com', 'id0005', '', 'Surat Keterangan Rekomendasi Siswa', 'Ahmad Hamra', 'XII-A', 'Selayang, Malaysia', '2024-09-03', '', '0064734673', 'Pemberkasan MYRES 2024', '', '0000-00-00', '0000-00-00', 'lampiran-id0005.pdf', '2024-09-12 08:20:58', 'Menunggu Konfirmasi'),
(11, 'Cetta Ananta Maulana', '085159164493', 'cettaanantamaulana@gmail.com', 'id0006', '', 'Surat Keterangan Rekomendasi Siswa', 'Ahmad Hamra', 'XII-A', 'Selayang, Malaysia', '0000-00-00', '', '0064734653', 'JMC 2024', '', '0000-00-00', '0000-00-00', 'lampiran-id0006.pdf', '2024-09-13 11:07:29', 'Menunggu Konfirmasi'),
(12, 'Ahmad Hamra', '085159164493', 'ahamra.1120@gmail.com', 'id0004', '', 'Surat Keterangan Aktif Siswa', 'Ahmad Hamra', 'XII-A', 'Selayang, Malaysia', '2006-11-02', '', '0064734653', 'JMC Robotik 2024', '', '0000-00-00', '0000-00-00', 'lampiran-id0004.pdf', '2024-09-13 11:20:40', 'Menunggu Konfirmasi'),
(16, 'Ahmad Hamra', '085159164493', 'ahamra.1120@gmail.com', 'id0008', '', 'Surat Keterangan Aktif Siswa', 'Ahmad Hamra', 'XII-B', 'Selayang, Malaysia', '2006-11-02', '', '2345', 'qwasedfrthy', '', '0000-00-00', '0000-00-00', 'lampiran-id0008.pdf', '2024-09-16 13:48:47', 'Menunggu Konfirmasi'),
(17, 'Ahmad Hamra', '085159164493', 'ahamra.1120@gmail.com', 'id0006', '', 'Surat Keterangan Aktif Siswa', 'Ahmad Hamra', 'XII-B', 'Selayang, Malaysia', '2006-11-02', '1234546', '1234567', '', '', '0000-00-00', '0000-00-00', 'lampiran-id0006.pdf', '2024-09-16 18:00:31', 'Menunggu Konfirmasi'),
(18, 'Ahmad Hamra', '085159164493', 'ahamra.1120@gmail.com', 'id0007', '', 'Surat Keterangan Kelakuan Baik', 'Ahmad Hamra', 'XI-H', 'Selayang, Malaysia', '2006-11-02', '12345', '12345', 'ewqrgtrh', '', '0000-00-00', '0000-00-00', 'lampiran-id0007.pdf', '2024-09-16 21:38:49', 'Menunggu Konfirmasi'),
(19, 'Ahmad Hamra', '085159164493', 'ahamra.1120@gmail.com', 'id0008', '', 'Surat Keterangan Aktif Siswa', 'Ahmad Hamra', 'X-C', 'Selayang, Malaysia', '2006-11-02', '000', '006473', 'JMC', '', '0000-00-00', '0000-00-00', 'lampiran-id0008.pdf', '2024-09-16 21:43:33', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `name`, `class`, `telp`) VALUES
(1, 'user1', '123', 'user', 'Ahmad Hamra', 'XII-A', '6285159164493'),
(2, 'admin1', '123', 'admin', '', '', '0'),
(3, 'user2', '123', 'user', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

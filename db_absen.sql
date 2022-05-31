-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 12:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tgl_absen` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time DEFAULT NULL,
  `suket` varchar(50) DEFAULT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absen`, `nip`, `tgl_absen`, `jam_masuk`, `jam_keluar`, `suket`, `keterangan`) VALUES
(37, '11223344', '2021-07-08', '23:19:14', '23:19:44', NULL, 'Hadir'),
(38, '12345678', '2021-07-09', '07:41:11', '17:26:41', NULL, 'Hadir'),
(39, '11223344', '2021-07-09', '19:21:12', '19:40:38', NULL, 'Hadir'),
(40, '13322334', '2021-07-10', '12:24:25', '16:44:26', NULL, 'Hadir'),
(41, '12345678', '2021-07-10', '08:25:31', '15:18:48', NULL, 'Hadir'),
(42, '11223344', '2021-07-10', '15:20:46', '15:46:21', NULL, 'Hadir'),
(43, '122115566', '2021-07-10', '18:13:46', '18:13:52', NULL, 'Hadir'),
(44, '14422345', '2021-07-10', '20:01:39', '20:05:28', NULL, 'Hadir'),
(45, '15533223', '2021-07-10', '20:03:07', '20:06:15', NULL, 'Hadir'),
(46, '12345678', '2021-07-15', '11:40:54', NULL, NULL, 'Hadir'),
(47, '122115566', '2021-07-15', '11:42:23', NULL, NULL, 'Hadir'),
(48, '12345678', '2021-07-17', '10:28:07', '14:19:01', NULL, 'Hadir'),
(49, '12345678', '2021-07-18', '15:22:48', '15:24:31', NULL, 'Hadir'),
(50, '12345678', '2021-07-20', '15:16:16', '22:11:07', 'Soal+uji+Kompetensi+TIK.pdf', 'Cuti'),
(51, '16627373', '2021-07-22', '09:49:34', NULL, NULL, 'Hadir'),
(52, '12345678', '2021-07-22', '10:34:43', '11:47:16', NULL, 'Hadir'),
(53, '11223344', '2021-07-22', '10:37:25', NULL, NULL, 'Hadir'),
(54, '14422345', '2021-07-22', '10:41:23', NULL, NULL, 'Hadir'),
(55, '122115566', '2021-07-22', '10:43:26', NULL, NULL, 'Hadir'),
(56, '13322334', '2021-07-22', '11:00:08', NULL, NULL, 'Hadir'),
(57, '155443322', '2021-07-22', '11:30:31', NULL, NULL, 'Hadir'),
(58, '19982723', '2021-07-22', '11:40:39', NULL, NULL, 'Hadir'),
(59, '18927253', '2021-07-22', '11:43:28', NULL, NULL, 'Hadir'),
(60, '12345678', '2021-07-24', '12:11:09', NULL, NULL, 'Hadir'),
(61, '12345678', '2021-07-25', '13:50:56', '13:51:10', NULL, 'Hadir'),
(62, '12345678', '2021-07-27', '13:43:33', '13:44:57', NULL, 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Direktur'),
(2, 'Staff'),
(3, 'Wakil Direktur I'),
(4, 'Wakil Direktur II'),
(5, 'Wakil Direktur III'),
(7, 'Kaprodi'),
(9, 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_jabatan_k` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nip`, `nama`, `id_jabatan_k`, `jenis_kelamin`, `username`, `password`) VALUES
(1, '12345678', 'Musa S.Kom', 2, 'Pria', 'musa', 'musa123'),
(3, '11223344', 'Rahmat', 2, 'Pria', 'rahmat', 'rahmat'),
(4, '13322334', 'Sofyan Amd ', 2, 'Pria', 'sofyan', 'sofyan'),
(5, '122115566', 'Nur Haedar S.Kom', 7, 'Wanita', 'nurhaedar', '123'),
(6, '14422345', 'Salma ', 2, 'Wanita', 'salma', 'salma'),
(8, '16627373', 'Ibu Eta', 9, 'Wanita', 'eta', 'eta'),
(10, '19982723', 'Syamsuddin S.Kom', 3, 'Pria', 'syam', 'syam'),
(11, '18927253', 'nenni', 2, 'Wanita', 'nenni', 'nenni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

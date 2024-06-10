-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 09:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakultas`
--

CREATE TABLE `tbl_fakultas` (
  `fakultas_id` int(11) NOT NULL,
  `fakultas_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fakultas`
--

INSERT INTO `tbl_fakultas` (`fakultas_id`, `fakultas_nama`) VALUES
(1, 'Jawa Tengah'),
(2, 'Jawa Barat'),
(3, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `jurusan_id` int(11) NOT NULL,
  `jurusan_fakultas` int(11) NOT NULL,
  `jurusan_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`jurusan_id`, `jurusan_fakultas`, `jurusan_nama`) VALUES
(1, 1, 'Surakarta'),
(2, 1, 'Sukoharjo'),
(3, 1, 'Karanganyar'),
(4, 1, 'Wonogiri'),
(5, 2, 'Bandung'),
(6, 2, 'Bekasi'),
(9, 2, 'Cilegon'),
(10, 2, 'Bogor'),
(11, 3, 'Surabaya'),
(12, 3, 'Malang'),
(13, 3, 'Madiun'),
(14, 3, 'Blitar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `karyawan_id` int(11) NOT NULL,
  `karyawan_nama` varchar(100) DEFAULT NULL,
  `karyawan_alamat` varchar(100) DEFAULT NULL,
  `karyawan_email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`karyawan_id`, `karyawan_nama`, `karyawan_alamat`, `karyawan_email`) VALUES
(6, 'Desi Mursalina', 'Pakjo Palembang', 'desimursalina@admin.com'),
(7, 'Lana Aldillah', 'Bukit ', 'lanaaldillah@admin.com'),
(8, 'Ramadhona Utama', 'Komp. Sentaraland Jln. Palem Putri No. 7', 'ramadhona@admin.com'),
(9, 'Ahmad Alqayyum SA', 'Jln. Komering Blok P No. 3 Palembang', 'aasablues@admin.com'),
(10, 'Muhammad Ilham Ismail', 'Komp. Alam Raya Residence Blok E.', 'milhamismail1@admin.com'),
(11, 'Zafran Arif Satriadi', 'Komp. Sangkuriang Indah SMP 53 Palembang', 'zafranarip09@admin.com'),
(12, 'Muhammad Maturidi', '12 Ulu Palembang', 'maturidimuhammad@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  ADD PRIMARY KEY (`fakultas_id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`jurusan_id`),
  ADD KEY `jurusan_fakultas` (`jurusan_fakultas`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`karyawan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  MODIFY `fakultas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `karyawan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD CONSTRAINT `tbl_jurusan_ibfk_1` FOREIGN KEY (`jurusan_fakultas`) REFERENCES `tbl_fakultas` (`fakultas_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

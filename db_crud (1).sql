-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:44 PM
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
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(36, 'Marshayang', 'GAK DIJUAL YAAA!!!', 'Dedek UWU pacar aku!', '54634IMG_20210718_213508.jpg'),
(38, 'GEDANG', 'murah aja', '-', '32455animasi-bermain-komputer-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `id` int(11) NOT NULL,
  `nama_domain` varchar(100) DEFAULT NULL,
  `harga_domain` varchar(50) DEFAULT NULL,
  `desc_domain` text DEFAULT NULL,
  `gambar_domain` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`id`, `nama_domain`, `harga_domain`, `desc_domain`, `gambar_domain`) VALUES
(3, '.co.id', '123000', 'domain', '75146co id.png'),
(4, '.id', '123500', 'ena', '37761id.png'),
(6, '.com', '123500', 'Murah', '15345com.png'),
(9, '.shop', '123500', 'domain', '38868shop.png'),
(10, '.xyz', '123500', '-', '60164xyz.png'),
(11, '.net', '123000', '-', '23999net.png');

-- --------------------------------------------------------

--
-- Table structure for table `hosting`
--

CREATE TABLE `hosting` (
  `id` int(11) NOT NULL,
  `nama_hosting` varchar(100) DEFAULT NULL,
  `harga_hosting` varchar(50) DEFAULT NULL,
  `desc_hosting` text DEFAULT NULL,
  `gambar_hosting` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hosting`
--

INSERT INTO `hosting` (`id`, `nama_hosting`, `harga_hosting`, `desc_hosting`, `gambar_hosting`) VALUES
(2, 'Basic', '255000', 'Paket hosting paling worth it dengan sumber daya yang cukup', '24514images (7).jpeg'),
(3, 'Standard', '335000', '', ''),
(4, 'Premium', '650000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `kota_id` int(11) NOT NULL,
  `kota_provinsi` int(11) NOT NULL,
  `kota_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`kota_id`, `kota_provinsi`, `kota_nama`) VALUES
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
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `provinsi_id` int(11) NOT NULL,
  `provinsi_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`provinsi_id`, `provinsi_nama`) VALUES
(1, 'Jawa Tengah'),
(2, 'Jawa Barat'),
(3, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'okik@gmail.com', '1234567899'),
(10, 'Okikkk', 'okikkk@gmail.com', 'f5f091a697cd91c4170cda38e81f4b1a');

-- --------------------------------------------------------

--
-- Table structure for table `vps`
--

CREATE TABLE `vps` (
  `id` int(11) NOT NULL,
  `nama_vps` varchar(100) DEFAULT NULL,
  `harga_vps` varchar(50) DEFAULT NULL,
  `desc_vps` text DEFAULT NULL,
  `gambar_vps` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vps`
--

INSERT INTO `vps` (`id`, `nama_vps`, `harga_vps`, `desc_vps`, `gambar_vps`) VALUES
(2, 'VPS Bisnis', '125000', 'Ini Paket', '27362images (10).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`kota_id`),
  ADD KEY `jurusan_fakultas` (`kota_provinsi`);

--
-- Indexes for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  ADD PRIMARY KEY (`provinsi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vps`
--
ALTER TABLE `vps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hosting`
--
ALTER TABLE `hosting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `kota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  MODIFY `provinsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vps`
--
ALTER TABLE `vps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD CONSTRAINT `tbl_kota_ibfk_1` FOREIGN KEY (`kota_provinsi`) REFERENCES `tbl_provinsi` (`provinsi_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 08:22 AM
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
-- Database: `tharz_computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` int(4) NOT NULL COMMENT 'p001',
  `id_transaksi` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah` int(11) NOT NULL,
  `metode` enum('cash','transfer') NOT NULL,
  `status` enum('dp','lunas') NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `no_telepon`, `email`) VALUES
(27, 'safutra fadli g', '083159389186', 'safutrafadlig1@gmail.com'),
(28, 'safutra fadli g', '083159389186', 'safutrafadlig1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `detail_service`
--

CREATE TABLE `detail_service` (
  `id_ds` int(5) NOT NULL COMMENT 'ds001',
  `id_service` int(4) NOT NULL,
  `id_barang` int(4) DEFAULT NULL,
  `id_jasa` int(4) DEFAULT NULL,
  `kerusakan` varchar(255) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_service`
--

INSERT INTO `detail_service` (`id_ds`, `id_service`, `id_barang`, `id_jasa`, `kerusakan`, `total`) VALUES
(7, 67, 6, 4, 'lcd rusak', 60000),
(8, 67, 5, 1, 'keyboard rusak', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_dt` int(5) NOT NULL COMMENT 'dp001',
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_jasa` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_dt`, `id_transaksi`, `id_barang`, `id_jasa`, `jumlah`, `subtotal`) VALUES
(19, 14, 3, NULL, 1, 70000),
(20, 14, 4, NULL, 1, 3999);

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` int(4) NOT NULL COMMENT 'j001',
  `jenis_jasa` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `jenis_jasa`, `harga`) VALUES
(1, 'ganti sparepart', 70000),
(2, 'pengecekan', 20000),
(3, 'perbaikan software', 50000),
(4, 'pemeliharaan', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(4) NOT NULL COMMENT 's001',
  `id_customer` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `device` varchar(20) NOT NULL,
  `keluhan` text NOT NULL,
  `status` enum('diajukan','dikonfirmasi','menunggu sparepart','diperbaiki','selesai','dibatalkan') DEFAULT 'diajukan',
  `estimasi_waktu` varchar(100) DEFAULT NULL,
  `estimasi_harga` int(10) DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `id_customer`, `tanggal`, `device`, `keluhan`, `status`, `estimasi_waktu`, `estimasi_harga`, `tanggal_selesai`) VALUES
(67, 27, '2025-06-01', 'Laptop Asus', 'Layar gelap', 'selesai', '20 jam', 120000, '2025-06-02'),
(68, 28, '2025-06-01', 'Komputer series a', 'adjjaidd ia duahd aud asdg asyd gaydg ayd wya dysg qy dya dad aygaydya d', 'dibatalkan', '5 hari', 600000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_barang` int(4) NOT NULL COMMENT 'b001',
  `nama_barang` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_barang`, `nama_barang`, `stok`, `harga`, `gambar`) VALUES
(3, 'mouse', 24, 70000, ''),
(4, 'baju', 10, 3999, ''),
(5, 'keyboard', 19, 50000, ''),
(6, 'LCD Laptop', 98, 40000, 'gambar'),
(7, 'ssd', 96, 400000, 'gambar\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(4) NOT NULL COMMENT 't001',
  `id_service` int(4) DEFAULT NULL,
  `id_customer` int(11) NOT NULL,
  `jenis` enum('service','penjualan') NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_service`, `id_customer`, `jenis`, `tanggal`, `total`) VALUES
(14, NULL, 27, 'penjualan', '2025-06-01 19:26:37', 73999);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL COMMENT 'u001',
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','teknisi','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(9, 'owner120', '$2y$10$FqNwpixWfHHJ0WPqHX3lMebBGoRi8ucBby7386AcBSk./T6.0Bkg2', 'owner'),
(11, 'admin120', '$2y$10$H/F0VRIWzCXD5RVf9Q8ywO1fy1MVtNtq.z4.agqSAQICaxK1vXAam', 'admin'),
(12, 'teknisi120', '$2y$10$o9HW4v97.NsvTkAigX6i9.pN31Zjyl2AfmHqAiSADQJDyPfPUWn3a', 'teknisi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_service`
--
ALTER TABLE `detail_service`
  ADD PRIMARY KEY (`id_ds`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_jasa` (`id_jasa`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_dt`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_jasa` (`id_jasa`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_service` (`id_service`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `ussername` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id_bayar` int(4) NOT NULL AUTO_INCREMENT COMMENT 'p001';

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detail_service`
--
ALTER TABLE `detail_service`
  MODIFY `id_ds` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ds001', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_dt` int(5) NOT NULL AUTO_INCREMENT COMMENT 'dp001', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id_jasa` int(4) NOT NULL AUTO_INCREMENT COMMENT 'j001', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(4) NOT NULL AUTO_INCREMENT COMMENT 's001', AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_barang` int(4) NOT NULL AUTO_INCREMENT COMMENT 'b001', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(4) NOT NULL AUTO_INCREMENT COMMENT 't001', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT COMMENT 'u001', AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bayar`
--
ALTER TABLE `bayar`
  ADD CONSTRAINT `bayar_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `detail_service`
--
ALTER TABLE `detail_service`
  ADD CONSTRAINT `detail_service_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`),
  ADD CONSTRAINT `detail_service_ibfk_2` FOREIGN KEY (`id_jasa`) REFERENCES `jasa` (`id_jasa`),
  ADD CONSTRAINT `detail_service_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `stok` (`id_barang`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stok` (`id_barang`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`id_jasa`) REFERENCES `jasa` (`id_jasa`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

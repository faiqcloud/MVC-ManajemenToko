-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 03:04 AM
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
-- Database: `mvc_toko0060`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Kd_Barang` char(5) NOT NULL,
  `Nm_Barang` varchar(255) NOT NULL,
  `Harga` int(100) NOT NULL,
  `Stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`Kd_Barang`, `Nm_Barang`, `Harga`, `Stok`) VALUES
('A001', 'Beng beng', 3000, 14),
('A002', 'Bakpia', 20000, 12),
('A003', 'Kopi labad', 15000, 10),
('A004', 'Kardus', 3000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_Pelanggan` char(5) NOT NULL,
  `Nm_Pelanggan` varchar(255) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_Pelanggan`, `Nm_Pelanggan`, `Alamat`) VALUES
('P001', 'Raditya', 'Sidoarjo, Jawa Timur'),
('P002', 'ilham', 'ulujami, pemalang, jawa tengah');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `No_Faktur` char(5) NOT NULL,
  `Kd_Barang` char(5) NOT NULL,
  `Id_Pelanggan` char(5) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `Bayar` int(10) DEFAULT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`No_Faktur`, `Kd_Barang`, `Id_Pelanggan`, `Jumlah`, `Bayar`, `Tanggal`) VALUES
('F001', 'A002', 'P001', 3, 60000, '2024-11-05 16:40:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Kd_Barang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_Pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`No_Faktur`),
  ADD KEY `Id_Pelanggan` (`Id_Pelanggan`),
  ADD KEY `Kd_Barang` (`Kd_Barang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`Id_Pelanggan`) REFERENCES `pelanggan` (`Id_Pelanggan`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`Kd_Barang`) REFERENCES `barang` (`Kd_Barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2017 at 05:34 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kws`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang_in`
--

CREATE TABLE `barang_in` (
  `id_masuk` int(11) NOT NULL,
  `id_barang` varchar(11) NOT NULL,
  `kode_barang` varchar(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `location` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_in`
--

INSERT INTO `barang_in` (`id_masuk`, `id_barang`, `kode_barang`, `kategori`, `nama_barang`, `jumlah`, `satuan`, `tgl`, `location`) VALUES
(1, '1', 'K-18', 'Karton', 'Karton K-18', 1000, 'Pcs', '2016-12-12 01:20:09', 'AS'),
(2, '1', 'K-18', 'Karton', 'Karton K-18', 890, 'Pcs', '2016-12-12 01:20:55', 'HJ'),
(3, '4', 'BK', 'Reports', 'Surat Jalan Manual', 200, 'Pcs', '2016-12-12 11:27:57', 'DF'),
(4, '5', 'SPD', 'ATK', 'Sepidol', 1000, 'Pcs', '2016-12-17 16:32:42', 'AA'),
(5, '1', 'K-18', 'Karton', 'Karton K-18', 56, 'Pcs', '2016-12-17 23:34:42', 'FD'),
(6, '2', 'LM', 'Lem', 'Lem Fox', 100, 'Kaleng', '2016-12-19 21:02:27', 'GG');

--
-- Triggers `barang_in`
--
DELIMITER $$
CREATE TRIGGER `barang_masuk` BEFORE INSERT ON `barang_in` FOR EACH ROW BEGIN
 UPDATE stock SET stok=stok+NEW.jumlah
 WHERE id_barang=NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `barang_out`
--

CREATE TABLE `barang_out` (
  `id_keluar` int(11) NOT NULL,
  `id_barang` varchar(11) NOT NULL,
  `kode_barang` varchar(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `location` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_out`
--

INSERT INTO `barang_out` (`id_keluar`, `id_barang`, `kode_barang`, `kategori`, `nama_barang`, `jumlah`, `satuan`, `tgl`, `location`) VALUES
(1, '1', 'K-18', 'Karton', 'Karton K-18', 890, 'Pcs', '2016-12-12 01:21:21', ''),
(2, '2', 'LM', 'Lem', 'Lem Fox', 7, 'Kaleng', '2016-12-12 01:23:08', ''),
(3, '5', 'SPD', 'ATK', 'Sepidol', 12, 'Pcs', '2016-12-12 11:38:02', ''),
(4, '5', 'SPD', 'ATK', 'Sepidol', 500, 'Pcs', '2016-12-17 16:33:10', ''),
(5, '5', 'SPD', 'ATK', 'Sepidol', 1, 'Pcs', '2016-12-17 16:33:41', '');

--
-- Triggers `barang_out`
--
DELIMITER $$
CREATE TRIGGER `barang_keluar` BEFORE INSERT ON `barang_out` FOR EACH ROW BEGIN
 UPDATE stock SET stok=stok-NEW.jumlah
 WHERE id_barang=NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `kd_barang` varchar(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `location` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id_stock`, `id_barang`, `kd_barang`, `nama_barang`, `kategori`, `stok`, `satuan`, `location`) VALUES
(1, 1, 'K-18', 'Karton K-18', 'Karton', 2056, 'Pcs', 'AB'),
(2, 2, 'LM', 'Lem Fox', 'Lem', 105, 'Kaleng', 'BF'),
(3, 3, 'K-104', 'Karton K-106', 'Karton', 7000, 'Pcs', 'G'),
(4, 4, 'BK', 'Surat Jalan Manual', 'Reports', 434, 'Pcs', 'DF'),
(5, 5, 'SPD', 'Sepidol', 'ATK', 499, 'Pcs', '21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_in`
--
ALTER TABLE `barang_in`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `barang_out`
--
ALTER TABLE `barang_out`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `barang_in`
--
ALTER TABLE `barang_in`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `barang_out`
--
ALTER TABLE `barang_out`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

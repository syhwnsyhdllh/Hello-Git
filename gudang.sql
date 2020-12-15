-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 03:24 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(30) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Nama`, `Password`, `Email`) VALUES
(1, 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `kd_brng` varchar(30) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `nama_penjaga` varchar(30) NOT NULL,
  `jumlah_bayar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `kd_brng`, `tgl_keluar`, `nama_pembeli`, `nama_penjaga`, `jumlah_bayar`) VALUES
(5, 'A001', '2019-06-28', 'Samadi', 'admin', 80000),
(6, 'B001', '2019-06-28', 'Juan', 'admin', 180000),
(7, 'A002', '2019-06-28', 'Syahwan', 'admin', 100000),
(9, 'A003', '2019-06-28', 'Wawan', 'admin', 67500),
(10, 'B002', '2019-06-28', 'Syahadillah', 'admin', 225000),
(11, 'C002', '2019-06-28', 'Hamdih', 'admin', 260000);

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `kd_brg` varchar(15) NOT NULL,
  `nama_brg` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `stok` int(100) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`kd_brg`, `nama_brg`, `jenis`, `merek`, `stok`, `tgl_masuk`) VALUES
('A001', 'Roma biscuit kelapa', 'Makanan', 'Roma', 90, '2019-06-28'),
('A002', 'Good time', 'Makanan', 'Biscuit', 30, '2019-06-28'),
('A003', 'Malkist crackers', 'Makanan', 'Biscuit', 65, '2019-06-28'),
('B001', 'Thai Tea', 'Minuman', 'Ichi Ocha', 180, '2019-06-28'),
('B002', 'Aqua Botol', 'Minuman', 'Mayora', 270, '2019-06-28'),
('C001', 'Sapu Lidi', 'Perabotan Rumah', 'Esto', 50, '2019-06-26'),
('C002', 'Tempat Sampah', 'Perabotan Rumah', 'Core', 87, '2019-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `stok_brg`
--

CREATE TABLE `stok_brg` (
  `kode_brg` varchar(15) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_brg`
--

INSERT INTO `stok_brg` (`kode_brg`, `harga`) VALUES
('A001', 8000),
('A002', 10000),
('A003', 6000),
('B001', 9000),
('B002', 7500),
('C001', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indexes for table `stok_brg`
--
ALTER TABLE `stok_brg`
  ADD PRIMARY KEY (`kode_brg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stok_brg`
--
ALTER TABLE `stok_brg`
  ADD CONSTRAINT `stok_brg_ibfk_1` FOREIGN KEY (`kode_brg`) REFERENCES `barang_masuk` (`kd_brg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 04:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `kategori_id` varchar(20) NOT NULL,
  `supplier_id` varchar(20) NOT NULL,
  `harga_beli` varchar(50) NOT NULL,
  `harga_jual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode`, `nama`, `gambar`, `stok`, `satuan`, `kategori_id`, `supplier_id`, `harga_beli`, `harga_jual`) VALUES
(2, 'B0001', 'Sandisk 8gb', 'uploads/infinity1.png', 60, 'Buah', 'K0002', 'S0001', '40000', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kode`, `nama_kategori`) VALUES
(1, 'K0001', 'RAM'),
(2, 'K0002', 'Flashdisk');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `kode`, `nama_pelanggan`, `alamat`, `no_telp`) VALUES
(4, 'P0001', 'Blaster Kyiut', 'Tridaya 3', '089657000987');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `nota_beli` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(45) NOT NULL,
  `supplier_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_detil`
--

CREATE TABLE `pembelian_detil` (
  `id` int(11) NOT NULL,
  `pembelian_id` int(11) NOT NULL,
  `nota_beli` varchar(20) NOT NULL,
  `barang_id` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `nota_jual` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan_id` varchar(20) NOT NULL,
  `keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detil`
--

CREATE TABLE `penjualan_detil` (
  `id` int(11) NOT NULL,
  `penjualan_id` int(11) NOT NULL,
  `nota_jual` varchar(20) NOT NULL,
  `barang_id` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama_supplier` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `kode`, `nama_supplier`, `alamat`, `no_telp`) VALUES
(1, 'S0001', 'Sandisk', 'Jakarta', '02188845757'),
(2, 'S0002', 'Boomboom', 'Tambun', '02188998755');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `barang_ibfk_1` (`kategori_id`),
  ADD KEY `barang_ibfk_2` (`supplier_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama_kategori`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nota_beli` (`nota_beli`),
  ADD KEY `pembelian_ibfk_1` (`supplier_id`);

--
-- Indexes for table `pembelian_detil`
--
ALTER TABLE `pembelian_detil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembelian_detil_ibfk_1` (`pembelian_id`),
  ADD KEY `pembelian_detil_ibfk_2` (`barang_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan_ibfk_1` (`pelanggan_id`);

--
-- Indexes for table `penjualan_detil`
--
ALTER TABLE `penjualan_detil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan_detil_ibfk_1` (`penjualan_id`),
  ADD KEY `penjualan_detil_ibfk_2` (`barang_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama_supplier`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembelian_detil`
--
ALTER TABLE `pembelian_detil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjualan_detil`
--
ALTER TABLE `penjualan_detil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`kode`) ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`kode`) ON UPDATE CASCADE;

--
-- Constraints for table `pembelian_detil`
--
ALTER TABLE `pembelian_detil`
  ADD CONSTRAINT `pembelian_detil_ibfk_1` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_detil_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`kode`) ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`kode`) ON UPDATE CASCADE;

--
-- Constraints for table `penjualan_detil`
--
ALTER TABLE `penjualan_detil`
  ADD CONSTRAINT `penjualan_detil_ibfk_1` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualan` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_detil_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`kode`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

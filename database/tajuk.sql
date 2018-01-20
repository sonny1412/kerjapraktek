-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 09:13 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tajuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `panjang` double DEFAULT NULL,
  `lebar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` char(12) NOT NULL,
  `namaBarang` varchar(45) DEFAULT NULL,
  `kuantitas` int(11) DEFAULT NULL,
  `satuan` varchar(45) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `idKaryawan` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `jabatan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idKaryawan`, `nama`, `alamat`, `kontak`, `status`, `jabatan`) VALUES
(0, 'Vemmy', 'Rumah Serpong', '0812345677', 0, 'Pemilik');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` char(12) NOT NULL,
  `Supplier_idSupplier` int(11) DEFAULT NULL,
  `Karyawan_idKaryawan` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `tanggal_jatuh_tempo` date DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pembelianpo`
--

CREATE TABLE `pembelianpo` (
  `id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `Supplier_idSupplier` int(11) NOT NULL,
  `Karyawan_idKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pembelianpo_has_barang`
--

CREATE TABLE `pembelianpo_has_barang` (
  `pembelianPO_id` int(11) NOT NULL,
  `Barang_idBarang` char(12) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_has_bahan`
--

CREATE TABLE `pembelian_has_bahan` (
  `Pembelian_id` char(12) NOT NULL,
  `bahan_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_has_barang`
--

CREATE TABLE `pembelian_has_barang` (
  `Pembelian_id` char(12) NOT NULL,
  `Barang_idBarang` char(12) NOT NULL,
  `kuantitas` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_pembayaran`
--

CREATE TABLE `pembelian_pembayaran` (
  `Pembelian_id` char(12) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idNota` char(12) NOT NULL,
  `Karyawan_idKaryawan` int(11) NOT NULL,
  `Customer_idCustomer` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tanggal_jatuh_tempo` date DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL,
  `status_kirim` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penjualanpo`
--

CREATE TABLE `penjualanpo` (
  `idpenjualanPO` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `Customer_idCustomer` int(11) NOT NULL,
  `Karyawan_idKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penjualanpo_has_barang`
--

CREATE TABLE `penjualanpo_has_barang` (
  `penjualanPO_idpenjualanPO` int(11) NOT NULL,
  `Barang_idBarang` char(12) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_has_barang`
--

CREATE TABLE `penjualan_has_barang` (
  `Penjualan_idNota` char(12) NOT NULL,
  `Barang_idBarang` char(12) NOT NULL,
  `kuantitas` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_pembayaran`
--

CREATE TABLE `penjualan_pembayaran` (
  `Penjualan_idNota` char(12) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produksi_has_barang`
--

CREATE TABLE `produksi_has_barang` (
  `Produksi_id` int(11) NOT NULL,
  `Barang_idBarang` char(12) NOT NULL,
  `kuantitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produksi_has_karyawan`
--

CREATE TABLE `produksi_has_karyawan` (
  `Produksi_id` int(11) NOT NULL,
  `Karyawan_idKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prosesbahan`
--

CREATE TABLE `prosesbahan` (
  `idprosesbahan` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prosesbahan_has_bahan`
--

CREATE TABLE `prosesbahan_has_bahan` (
  `prosesbahan_idprosesbahan` int(11) NOT NULL,
  `bahan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prosesbahan_has_barang`
--

CREATE TABLE `prosesbahan_has_barang` (
  `prosesbahan_idprosesbahan` int(11) NOT NULL,
  `Barang_idBarang` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `Karyawan_idKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `Karyawan_idKaryawan`) VALUES
(0, 'vemmy', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idKaryawan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Pembelian_Karyawan1_idx` (`Karyawan_idKaryawan`),
  ADD KEY `fk_Pembelian_Supplier1_idx` (`Supplier_idSupplier`);

--
-- Indexes for table `pembelianpo`
--
ALTER TABLE `pembelianpo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembelianPO_Supplier1_idx` (`Supplier_idSupplier`),
  ADD KEY `fk_pembelianPO_Karyawan1_idx` (`Karyawan_idKaryawan`);

--
-- Indexes for table `pembelianpo_has_barang`
--
ALTER TABLE `pembelianpo_has_barang`
  ADD PRIMARY KEY (`pembelianPO_id`,`Barang_idBarang`),
  ADD KEY `fk_pembelianPO_has_Barang_Barang1_idx` (`Barang_idBarang`),
  ADD KEY `fk_pembelianPO_has_Barang_pembelianPO1_idx` (`pembelianPO_id`);

--
-- Indexes for table `pembelian_has_bahan`
--
ALTER TABLE `pembelian_has_bahan`
  ADD PRIMARY KEY (`Pembelian_id`,`bahan_id`),
  ADD KEY `fk_Pembelian_has_bahan_bahan1_idx` (`bahan_id`),
  ADD KEY `fk_Pembelian_has_bahan_Pembelian1_idx` (`Pembelian_id`);

--
-- Indexes for table `pembelian_has_barang`
--
ALTER TABLE `pembelian_has_barang`
  ADD PRIMARY KEY (`Pembelian_id`,`Barang_idBarang`),
  ADD KEY `fk_Pembelian_has_Barang_Barang1_idx` (`Barang_idBarang`),
  ADD KEY `fk_Pembelian_has_Barang_Pembelian1_idx` (`Pembelian_id`);

--
-- Indexes for table `pembelian_pembayaran`
--
ALTER TABLE `pembelian_pembayaran`
  ADD PRIMARY KEY (`Pembelian_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idNota`),
  ADD KEY `fk_Nota_Karyawan1_idx` (`Karyawan_idKaryawan`),
  ADD KEY `fk_Penjualan_Customer1_idx` (`Customer_idCustomer`);

--
-- Indexes for table `penjualanpo`
--
ALTER TABLE `penjualanpo`
  ADD PRIMARY KEY (`idpenjualanPO`),
  ADD KEY `fk_penjualanPO_Customer1_idx` (`Customer_idCustomer`),
  ADD KEY `fk_penjualanPO_Karyawan1_idx` (`Karyawan_idKaryawan`);

--
-- Indexes for table `penjualanpo_has_barang`
--
ALTER TABLE `penjualanpo_has_barang`
  ADD PRIMARY KEY (`penjualanPO_idpenjualanPO`,`Barang_idBarang`),
  ADD KEY `fk_penjualanPO_has_Barang_Barang1_idx` (`Barang_idBarang`),
  ADD KEY `fk_penjualanPO_has_Barang_penjualanPO1_idx` (`penjualanPO_idpenjualanPO`);

--
-- Indexes for table `penjualan_has_barang`
--
ALTER TABLE `penjualan_has_barang`
  ADD PRIMARY KEY (`Penjualan_idNota`,`Barang_idBarang`),
  ADD KEY `fk_Penjualan_has_Barang_Barang1_idx` (`Barang_idBarang`),
  ADD KEY `fk_Penjualan_has_Barang_Penjualan1_idx` (`Penjualan_idNota`);

--
-- Indexes for table `penjualan_pembayaran`
--
ALTER TABLE `penjualan_pembayaran`
  ADD KEY `fk_penjualan_pembayaran_Penjualan1_idx` (`Penjualan_idNota`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi_has_barang`
--
ALTER TABLE `produksi_has_barang`
  ADD PRIMARY KEY (`Produksi_id`,`Barang_idBarang`),
  ADD KEY `fk_Produksi_has_Barang_Barang1_idx` (`Barang_idBarang`),
  ADD KEY `fk_Produksi_has_Barang_Produksi1_idx` (`Produksi_id`);

--
-- Indexes for table `produksi_has_karyawan`
--
ALTER TABLE `produksi_has_karyawan`
  ADD PRIMARY KEY (`Produksi_id`,`Karyawan_idKaryawan`),
  ADD KEY `fk_Produksi_has_Karyawan_Karyawan1_idx` (`Karyawan_idKaryawan`),
  ADD KEY `fk_Produksi_has_Karyawan_Produksi1_idx` (`Produksi_id`);

--
-- Indexes for table `prosesbahan`
--
ALTER TABLE `prosesbahan`
  ADD PRIMARY KEY (`idprosesbahan`);

--
-- Indexes for table `prosesbahan_has_bahan`
--
ALTER TABLE `prosesbahan_has_bahan`
  ADD PRIMARY KEY (`prosesbahan_idprosesbahan`,`bahan_id`),
  ADD KEY `fk_prosesbahan_has_bahan_bahan1_idx` (`bahan_id`),
  ADD KEY `fk_prosesbahan_has_bahan_prosesbahan1_idx` (`prosesbahan_idprosesbahan`);

--
-- Indexes for table `prosesbahan_has_barang`
--
ALTER TABLE `prosesbahan_has_barang`
  ADD PRIMARY KEY (`prosesbahan_idprosesbahan`,`Barang_idBarang`),
  ADD KEY `fk_prosesbahan_has_Barang_Barang1_idx` (`Barang_idBarang`),
  ADD KEY `fk_prosesbahan_has_Barang_prosesbahan1_idx` (`prosesbahan_idprosesbahan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_User_Karyawan1_idx` (`Karyawan_idKaryawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_Pembelian_Karyawan1` FOREIGN KEY (`Karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pembelian_Supplier1` FOREIGN KEY (`Supplier_idSupplier`) REFERENCES `supplier` (`idSupplier`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelianpo`
--
ALTER TABLE `pembelianpo`
  ADD CONSTRAINT `fk_pembelianPO_Karyawan1` FOREIGN KEY (`Karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembelianPO_Supplier1` FOREIGN KEY (`Supplier_idSupplier`) REFERENCES `supplier` (`idSupplier`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelianpo_has_barang`
--
ALTER TABLE `pembelianpo_has_barang`
  ADD CONSTRAINT `fk_pembelianPO_has_Barang_Barang1` FOREIGN KEY (`Barang_idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembelianPO_has_Barang_pembelianPO1` FOREIGN KEY (`pembelianPO_id`) REFERENCES `pembelianpo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelian_has_bahan`
--
ALTER TABLE `pembelian_has_bahan`
  ADD CONSTRAINT `fk_Pembelian_has_bahan_Pembelian1` FOREIGN KEY (`Pembelian_id`) REFERENCES `pembelian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pembelian_has_bahan_bahan1` FOREIGN KEY (`bahan_id`) REFERENCES `bahan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelian_has_barang`
--
ALTER TABLE `pembelian_has_barang`
  ADD CONSTRAINT `fk_Pembelian_has_Barang_Barang1` FOREIGN KEY (`Barang_idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pembelian_has_Barang_Pembelian1` FOREIGN KEY (`Pembelian_id`) REFERENCES `pembelian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelian_pembayaran`
--
ALTER TABLE `pembelian_pembayaran`
  ADD CONSTRAINT `fk_Pembelian_Pembayaran_Pembelian1` FOREIGN KEY (`Pembelian_id`) REFERENCES `pembelian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_Nota_Karyawan1` FOREIGN KEY (`Karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Penjualan_Customer1` FOREIGN KEY (`Customer_idCustomer`) REFERENCES `customer` (`idCustomer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penjualanpo`
--
ALTER TABLE `penjualanpo`
  ADD CONSTRAINT `fk_penjualanPO_Customer1` FOREIGN KEY (`Customer_idCustomer`) REFERENCES `customer` (`idCustomer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penjualanPO_Karyawan1` FOREIGN KEY (`Karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penjualanpo_has_barang`
--
ALTER TABLE `penjualanpo_has_barang`
  ADD CONSTRAINT `fk_penjualanPO_has_Barang_Barang1` FOREIGN KEY (`Barang_idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penjualanPO_has_Barang_penjualanPO1` FOREIGN KEY (`penjualanPO_idpenjualanPO`) REFERENCES `penjualanpo` (`idpenjualanPO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penjualan_has_barang`
--
ALTER TABLE `penjualan_has_barang`
  ADD CONSTRAINT `fk_Penjualan_has_Barang_Barang1` FOREIGN KEY (`Barang_idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Penjualan_has_Barang_Penjualan1` FOREIGN KEY (`Penjualan_idNota`) REFERENCES `penjualan` (`idNota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penjualan_pembayaran`
--
ALTER TABLE `penjualan_pembayaran`
  ADD CONSTRAINT `fk_penjualan_pembayaran_Penjualan1` FOREIGN KEY (`Penjualan_idNota`) REFERENCES `penjualan` (`idNota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produksi_has_barang`
--
ALTER TABLE `produksi_has_barang`
  ADD CONSTRAINT `fk_Produksi_has_Barang_Barang1` FOREIGN KEY (`Barang_idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Produksi_has_Barang_Produksi1` FOREIGN KEY (`Produksi_id`) REFERENCES `produksi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produksi_has_karyawan`
--
ALTER TABLE `produksi_has_karyawan`
  ADD CONSTRAINT `fk_Produksi_has_Karyawan_Karyawan1` FOREIGN KEY (`Karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Produksi_has_Karyawan_Produksi1` FOREIGN KEY (`Produksi_id`) REFERENCES `produksi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `prosesbahan_has_bahan`
--
ALTER TABLE `prosesbahan_has_bahan`
  ADD CONSTRAINT `fk_prosesbahan_has_bahan_bahan1` FOREIGN KEY (`bahan_id`) REFERENCES `bahan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prosesbahan_has_bahan_prosesbahan1` FOREIGN KEY (`prosesbahan_idprosesbahan`) REFERENCES `prosesbahan` (`idprosesbahan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `prosesbahan_has_barang`
--
ALTER TABLE `prosesbahan_has_barang`
  ADD CONSTRAINT `fk_prosesbahan_has_Barang_Barang1` FOREIGN KEY (`Barang_idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prosesbahan_has_Barang_prosesbahan1` FOREIGN KEY (`prosesbahan_idprosesbahan`) REFERENCES `prosesbahan` (`idprosesbahan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Karyawan1` FOREIGN KEY (`Karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

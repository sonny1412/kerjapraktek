-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jan 2018 pada 15.17
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerjapraktek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `keterangan` varchar(100) NOT NULL,
  `Kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `quantity`, `keterangan`, `Kategori_id`) VALUES
(1, 'Selimut My Love Flower Pattern', 1012, 'makanan', 1),
(2, 'Karpet Normandy Red', 2135, '150 Cm x 100 Cm', 1),
(3, 'Bordir Merah', 8, 'Meter', 3),
(4, 'Bordir Biru', 20, 'Meter', 3),
(5, 'Alas Matras Karet Hitam', 300, 'Buah', 3),
(6, 'Kain Bludru Motif Bunga', 1708, 'Lembar', 5),
(7, 'Kain Bludru Merah', 3802, 'Lembar', 5),
(8, 'selimut tebal mama bear', 213, '9 Cm x 8 Cm', 1),
(9, 'karpet tebal', 21, '9 Cm x 10 Cm', 2),
(10, 'kain katund', 21, 'Meter', 1),
(11, 'selimut', 16, '12 Cm x 13 Cm', 1),
(12, 'tali sepatu', 15, '21 Cm x 12 Cm', 1),
(13, 'celana jeans', 12, '15 Cm x 16 Cm', 1),
(14, 'celana kain', 15, '12 Cm x 12 Cm', 1),
(15, 'baju tidur hangat bobo', 15, '12 Cm x 12 Cm', 1),
(16, 'Sepatu Sandal', 15, '12 Cm x 14 Cm', 1),
(17, 'sepatu', 16, '19 Cm x 19 Cm', 1),
(18, 'kain emas', 13, '21 Cm x 19 Cm', 2),
(19, 'Karpet buatan tangan', 19, '16 Cm x 16 Cm', 2),
(20, 'benang anti putus', 15, 'Meter', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `alamat` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` longtext NOT NULL,
  `telp` varchar(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `telp`, `jabatan`, `status`) VALUES
(1, 'Rama Adhiguna', 'Weodoro', '123456789', 'Pemilik', 1),
(2, 'Sonny Haryadi', 'Mejoyo Selatan AJ 13', '082243883642', 'Pembelian', 1),
(3, 'Lucas Leonard', 'Deket Ubaya Depan Metropolis', '081234567892', 'Pembelian', 1),
(4, 'Evin Cintiawan', 'Rungkut Mejoyo Selatan AJ 13', '0812345566783', 'Penjualan', 1),
(5, 'Kevin Andryano', 'Mulyosari Selatan 13', '123456789', 'Penjualan', 1),
(6, 'Billie Arianto', 'Rungkut Mejoyo Utara N42', '123456789', 'Penjualan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `jenis` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `jenis`) VALUES
(1, 'Selimut', 'Barang Jadi'),
(2, 'Karpet', 'Barang Jadi'),
(3, 'bordir', 'Bahan Produksi'),
(4, 'Alas', 'Bahan Produksi'),
(5, 'Kain Bludru', 'Bahan Produksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `Supplier_id` int(11) NOT NULL,
  `Karyawan_id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jatuh_tempo` date NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `Supplier_id`, `Karyawan_id`, `tanggal`, `jatuh_tempo`, `saldo`) VALUES
(1234567890, 1, 1, '2018-01-04', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_barang`
--

CREATE TABLE `pembelian_barang` (
  `id` int(11) NOT NULL,
  `Pembelian_id` int(11) NOT NULL,
  `Barang_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pembelian_barang`
--

INSERT INTO `pembelian_barang` (`id`, `Pembelian_id`, `Barang_id`, `qty`, `harga`, `status`) VALUES
(11, 1234567890, 1, 100, 10000, 'Belom Lunas'),
(12, 1234567890, 2, 100, 10000, 'Belom Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Karyawan_id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jatuh_tempo` date NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_barang`
--

CREATE TABLE `penjualan_barang` (
  `id` int(11) NOT NULL,
  `Penjualan_id` int(11) NOT NULL,
  `Barang_id` int(11) NOT NULL,
  `qty` varchar(45) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`id`, `tanggal`) VALUES
(65, '2017-11-05 19:04:05'),
(66, '2017-11-06 14:46:13'),
(67, '2017-11-06 14:47:05'),
(68, '2017-11-09 10:19:54'),
(69, '2017-11-21 02:11:34'),
(70, '2017-11-21 02:13:11'),
(71, '2017-11-21 02:14:40'),
(72, '2017-11-21 02:15:19'),
(73, '2017-11-21 08:27:53'),
(74, '2017-11-21 08:32:35'),
(75, '2017-11-30 13:50:19'),
(76, '2018-01-03 12:11:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi_barang`
--

CREATE TABLE `produksi_barang` (
  `id` int(11) NOT NULL,
  `Produksi_id` int(11) NOT NULL,
  `Barang_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produksi_barang`
--

INSERT INTO `produksi_barang` (`id`, `Produksi_id`, `Barang_id`, `qty`) VALUES
(16, 65, 5, 100),
(17, 65, 6, 50),
(18, 65, 7, 100),
(19, 65, 1, 10),
(20, 65, 2, 10),
(21, 66, 3, 100),
(22, 66, 6, 100),
(23, 66, 6, 100),
(24, 66, 1, 150),
(25, 67, 3, 100),
(26, 67, 1, 100),
(27, 68, 3, 15),
(28, 68, 1, 115),
(29, 69, 1, 13),
(30, 70, 1, 18),
(31, 71, 2, 3),
(32, 72, 11, 12),
(33, 72, 10, 13),
(34, 73, 1, 3),
(35, 74, 1, 18),
(36, 74, 8, 2),
(37, 74, 6, 292),
(38, 74, 7, 198),
(39, 75, 3, 2),
(40, 76, 3, 1),
(41, 76, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi_karyawan`
--

CREATE TABLE `produksi_karyawan` (
  `id` int(11) NOT NULL,
  `Produksi_id` int(11) NOT NULL,
  `Karyawan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produksi_karyawan`
--

INSERT INTO `produksi_karyawan` (`id`, `Produksi_id`, `Karyawan_id`) VALUES
(0, 65, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `alamat` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nama`, `telepon`, `alamat`) VALUES
(1, 'PT Nusa Kambangan', '081234567890', 'Jalan Jawa Barat no 100 Surabaya, Jawa Timur'),
(2, 'CV Lol', '', 'deket rumah saya'),
(3, 'CV Cupuman', '1231223123', 'Lololol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Karyawan_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Karyawan_id`, `username`, `password`) VALUES
(1, 1, 'rama', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 3, 'lucas', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 2, 'sonny@adminciptajujur.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Barang_Kategori1_idx` (`Kategori_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Pembelian_Supplier1_idx` (`Supplier_id`),
  ADD KEY `fk_Pembelian_Karyawan1_idx` (`Karyawan_id`);

--
-- Indexes for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Pembelian_barang_Pembelian1_idx` (`Pembelian_id`),
  ADD KEY `fk_Pembelian_barang_Barang1_idx` (`Barang_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Penjualan_Customer1_idx` (`Customer_id`),
  ADD KEY `fk_Penjualan_Karyawan1_idx` (`Karyawan_id`);

--
-- Indexes for table `penjualan_barang`
--
ALTER TABLE `penjualan_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Penjualan_barang_Barang1_idx` (`Barang_id`),
  ADD KEY `fk_Penjualan_barang_Penjualan1_idx` (`Penjualan_id`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi_barang`
--
ALTER TABLE `produksi_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Produksi_bahan_Produksi1_idx` (`Produksi_id`),
  ADD KEY `fk_Produksi_Barang_Barang1_idx` (`Barang_id`);

--
-- Indexes for table `produksi_karyawan`
--
ALTER TABLE `produksi_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Produksi_Karyawan_Karyawan1_idx` (`Karyawan_id`),
  ADD KEY `fk_Produksi_Karyawan_Produksi1_idx` (`Produksi_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_User_Karyawan1_idx` (`Karyawan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan_barang`
--
ALTER TABLE `penjualan_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `produksi_barang`
--
ALTER TABLE `produksi_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_Barang_Kategori1` FOREIGN KEY (`Kategori_id`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_Pembelian_Karyawan1` FOREIGN KEY (`Karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pembelian_Supplier1` FOREIGN KEY (`Supplier_id`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  ADD CONSTRAINT `fk_Pembelian_barang_Barang1` FOREIGN KEY (`Barang_id`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pembelian_barang_Pembelian1` FOREIGN KEY (`Pembelian_id`) REFERENCES `pembelian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_Penjualan_Customer1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Penjualan_Karyawan1` FOREIGN KEY (`Karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `penjualan_barang`
--
ALTER TABLE `penjualan_barang`
  ADD CONSTRAINT `fk_Penjualan_barang_Barang1` FOREIGN KEY (`Barang_id`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Penjualan_barang_Penjualan1` FOREIGN KEY (`Penjualan_id`) REFERENCES `penjualan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `produksi_barang`
--
ALTER TABLE `produksi_barang`
  ADD CONSTRAINT `fk_Produksi_Barang_Barang1` FOREIGN KEY (`Barang_id`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Produksi_bahan_Produksi1` FOREIGN KEY (`Produksi_id`) REFERENCES `produksi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `produksi_karyawan`
--
ALTER TABLE `produksi_karyawan`
  ADD CONSTRAINT `fk_Produksi_Karyawan_Karyawan1` FOREIGN KEY (`Karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Produksi_Karyawan_Produksi1` FOREIGN KEY (`Produksi_id`) REFERENCES `produksi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Karyawan1` FOREIGN KEY (`Karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jan 2018 pada 07.34
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
  `satuan` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `Kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `quantity`, `satuan`, `keterangan`, `Kategori_id`) VALUES
(1, 'Kain Bludru Merah', 1000, 'Meter', ' ', 16),
(2, 'Kain Bludru Biru', 1000, 'Meter', ' ', 16),
(3, 'Kain Bludru Hijau', 3000, 'Meter', ' ', 16),
(5, 'Selimut Birui', 600, 'pcs', '150 x 200 cm', 14);

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

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama`, `telepon`, `alamat`) VALUES
(3, 'CV Randi Motor', '0811353603', 'Jl. Brigjen Katamso 5 Waru');

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
(3, 'Lucas Leonard', 'Deket Ubaya Depan Metropolis', '081234567892', 'Gudang', 1),
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
(14, 'Selimut', 'Barang Jadi'),
(15, 'Matras', 'Barang Jadi'),
(16, 'Kain Bludru', 'Bahan Produksi'),
(17, 'Kain Bulu', 'Bahan Produksi'),
(18, 'Alas Karpet', 'Bahan Produksi');

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
  `saldo` int(11) NOT NULL,
  `status_kirim` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `Supplier_id`, `Karyawan_id`, `tanggal`, `jatuh_tempo`, `saldo`, `status_kirim`) VALUES
(1, 4, 1, '2018-01-15', '2018-01-15', 140000000, 'Sampai'),
(1000, 4, 1, '2018-01-15', '2018-01-15', 0, 'Sampai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_barang`
--

CREATE TABLE `pembelian_barang` (
  `id` int(11) NOT NULL,
  `Pembelian_id` int(11) NOT NULL,
  `Barang_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pembelian_barang`
--

INSERT INTO `pembelian_barang` (`id`, `Pembelian_id`, `Barang_id`, `qty`, `harga`) VALUES
(124, 1, 1, 1000, 10000),
(125, 1, 2, 2000, 20000),
(126, 1, 3, 3000, 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_pembayaran`
--

CREATE TABLE `pembelian_pembayaran` (
  `id` int(11) NOT NULL,
  `Pembelian_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `Karyawan_id` int(255) NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian_pembayaran`
--

INSERT INTO `pembelian_pembayaran` (`id`, `Pembelian_id`, `jumlah`, `keterangan`, `Karyawan_id`, `tanggal_bayar`) VALUES
(18, 1, 140000000, 'Pelunasan Nota Penjualan 1', 1, '2018-01-15'),
(19, 1000, 0, 'Pelunasan Nota Penjualan 1000', 1, '2018-01-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(25) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Karyawan_id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jatuh_tempo` date NOT NULL,
  `saldo` int(11) NOT NULL,
  `status_kirim` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `Customer_id`, `Karyawan_id`, `tanggal`, `jatuh_tempo`, `saldo`, `status_kirim`) VALUES
(123, 3, 1, '2018-01-15', '2018-01-15', 1500000, 'Sampai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_barang`
--

CREATE TABLE `penjualan_barang` (
  `id` int(11) NOT NULL,
  `Penjualan_id` int(25) NOT NULL,
  `Barang_id` int(11) NOT NULL,
  `qty` varchar(45) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penjualan_barang`
--

INSERT INTO `penjualan_barang` (`id`, `Penjualan_id`, `Barang_id`, `qty`, `harga`) VALUES
(66, 123, 5, '100', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_pembayaran`
--

CREATE TABLE `penjualan_pembayaran` (
  `id` int(11) NOT NULL,
  `Penjualan_id` int(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `Karyawan_id` int(255) NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan_pembayaran`
--

INSERT INTO `penjualan_pembayaran` (`id`, `Penjualan_id`, `jumlah`, `keterangan`, `Karyawan_id`, `tanggal_bayar`) VALUES
(24, 123, 1500000, 'Pelunasan Nota Penjualan 123', 1, '2018-01-15');

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
(84, '2018-01-15 13:32:46');

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
(59, 84, 2, 1000),
(60, 84, 5, 700);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi_karyawan`
--

CREATE TABLE `produksi_karyawan` (
  `id` int(11) NOT NULL,
  `Produksi_id` int(11) NOT NULL,
  `Karyawan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(4, 'CV Randi Motor', '0811353603', 'Jl. Brigjen Katamso 5 Waru'),
(5, 'CV Cupuman', '0928202982', 'LOOOOL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Karyawan_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `Karyawan_id`) VALUES
('sonny', '827ccb0eea8a706c4c34a16891f84e7b', 2),
('lucas', '827ccb0eea8a706c4c34a16891f84e7b', 3),
('rama', '827ccb0eea8a706c4c34a16891f84e7b', 1),
('kevin', '827ccb0eea8a706c4c34a16891f84e7b', 5);

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
-- Indexes for table `pembelian_pembayaran`
--
ALTER TABLE `pembelian_pembayaran`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `penjualan_pembayaran`
--
ALTER TABLE `penjualan_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Penjualan_Pembayaran_Penjualan1_idx` (`Penjualan_id`),
  ADD KEY `Penjualan_id` (`Penjualan_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123124;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180111002;

--
-- AUTO_INCREMENT for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `pembelian_pembayaran`
--
ALTER TABLE `pembelian_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201801009;

--
-- AUTO_INCREMENT for table `penjualan_barang`
--
ALTER TABLE `penjualan_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `penjualan_pembayaran`
--
ALTER TABLE `penjualan_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `produksi_barang`
--
ALTER TABLE `produksi_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

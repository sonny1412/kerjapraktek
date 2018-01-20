/*
MySQL Data Transfer
Source Host: localhost
Source Database: kerjapraktek
Target Host: localhost
Target Database: kerjapraktek
Date: 1/19/2018 2:22:12 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for barang
-- ----------------------------
CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `satuan` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `Kategori_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Barang_Kategori1_idx` (`Kategori_id`),
  CONSTRAINT `fk_Barang_Kategori1` FOREIGN KEY (`Kategori_id`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `alamat` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `alamat` longtext NOT NULL,
  `telp` varchar(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `jenis` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pembelian
-- ----------------------------
CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Supplier_id` int(11) NOT NULL,
  `Karyawan_id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jatuh_tempo` date NOT NULL,
  `saldo` int(11) NOT NULL,
  `status_kirim` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Pembelian_Supplier1_idx` (`Supplier_id`),
  KEY `fk_Pembelian_Karyawan1_idx` (`Karyawan_id`),
  CONSTRAINT `fk_Pembelian_Karyawan1` FOREIGN KEY (`Karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pembelian_Supplier1` FOREIGN KEY (`Supplier_id`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pembelian_barang
-- ----------------------------
CREATE TABLE `pembelian_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pembelian_id` int(11) NOT NULL,
  `Barang_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Pembelian_barang_Pembelian1_idx` (`Pembelian_id`),
  KEY `fk_Pembelian_barang_Barang1_idx` (`Barang_id`),
  CONSTRAINT `fk_Pembelian_barang_Barang1` FOREIGN KEY (`Barang_id`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pembelian_barang_Pembelian1` FOREIGN KEY (`Pembelian_id`) REFERENCES `pembelian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pembelian_pembayaran
-- ----------------------------
CREATE TABLE `pembelian_pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pembelian_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `Karyawan_id` int(255) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for penjualan
-- ----------------------------
CREATE TABLE `penjualan` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `Customer_id` int(11) NOT NULL,
  `Karyawan_id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jatuh_tempo` date NOT NULL,
  `saldo` int(11) NOT NULL,
  `status_kirim` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Penjualan_Customer1_idx` (`Customer_id`),
  KEY `fk_Penjualan_Karyawan1_idx` (`Karyawan_id`),
  CONSTRAINT `fk_Penjualan_Customer1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Penjualan_Karyawan1` FOREIGN KEY (`Karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=180119002 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for penjualan_barang
-- ----------------------------
CREATE TABLE `penjualan_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Penjualan_id` int(25) NOT NULL,
  `Barang_id` int(11) NOT NULL,
  `qty` varchar(45) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Penjualan_barang_Barang1_idx` (`Barang_id`),
  KEY `fk_Penjualan_barang_Penjualan1_idx` (`Penjualan_id`),
  CONSTRAINT `fk_Penjualan_barang_Barang1` FOREIGN KEY (`Barang_id`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Penjualan_barang_Penjualan1` FOREIGN KEY (`Penjualan_id`) REFERENCES `penjualan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for penjualan_pembayaran
-- ----------------------------
CREATE TABLE `penjualan_pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Penjualan_id` int(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `Karyawan_id` int(255) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Penjualan_Pembayaran_Penjualan1_idx` (`Penjualan_id`),
  KEY `Penjualan_id` (`Penjualan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for produksi
-- ----------------------------
CREATE TABLE `produksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for produksi_barang
-- ----------------------------
CREATE TABLE `produksi_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Produksi_id` int(11) NOT NULL,
  `Barang_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Produksi_bahan_Produksi1_idx` (`Produksi_id`),
  KEY `fk_Produksi_Barang_Barang1_idx` (`Barang_id`),
  CONSTRAINT `fk_Produksi_Barang_Barang1` FOREIGN KEY (`Barang_id`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produksi_bahan_Produksi1` FOREIGN KEY (`Produksi_id`) REFERENCES `produksi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for produksi_karyawan
-- ----------------------------
CREATE TABLE `produksi_karyawan` (
  `id` int(11) NOT NULL,
  `Produksi_id` int(11) NOT NULL,
  `Karyawan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Produksi_Karyawan_Karyawan1_idx` (`Karyawan_id`),
  KEY `fk_Produksi_Karyawan_Produksi1_idx` (`Produksi_id`),
  CONSTRAINT `fk_Produksi_Karyawan_Karyawan1` FOREIGN KEY (`Karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produksi_Karyawan_Produksi1` FOREIGN KEY (`Produksi_id`) REFERENCES `produksi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for supplier
-- ----------------------------
CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `alamat` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user
-- ----------------------------
CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Karyawan_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `barang` VALUES ('1', 'Kain Bludru Merah', '1000', 'Meter', ' ', '16');
INSERT INTO `barang` VALUES ('2', 'Kain Bludru Biru', '1000', 'Meter', ' ', '16');
INSERT INTO `barang` VALUES ('3', 'Kain Bludru Hijau', '3000', 'Meter', ' ', '16');
INSERT INTO `barang` VALUES ('5', 'Selimut Biru', '585', 'pcs', '150 x 200 cm', '14');
INSERT INTO `barang` VALUES ('6', 'selimut kuning', '100', 'pcs', 'selimut warna kuning', '14');
INSERT INTO `barang` VALUES ('7', 'selimut merah', '100', 'pcs', 'selimut warna merah', '14');
INSERT INTO `barang` VALUES ('8', 'selimut biru', '100', 'pcs', 'selimut warna biru', '14');
INSERT INTO `barang` VALUES ('9', 'selimut hijau', '100', 'pcs', 'selimut warna hijau', '14');
INSERT INTO `barang` VALUES ('10', 'selimut oranye', '100', 'pcs', 'selimut warna oranye', '14');
INSERT INTO `barang` VALUES ('11', 'selimut hitam', '100', 'pcs', 'selimut warna hitam', '14');
INSERT INTO `barang` VALUES ('12', 'selimut abu', '100', 'pcs', 'selimut dari abu', '14');
INSERT INTO `barang` VALUES ('13', 'selimut pengembara', '100', 'pcs', 'selimut untuk pengembara', '14');
INSERT INTO `barang` VALUES ('14', 'selimut pemain bola', '100', 'pcs', 'selimut untuk pemain bola', '14');
INSERT INTO `barang` VALUES ('15', 'selimut tiupan angin', '100', 'pcs', 'buat tiup angin', '14');
INSERT INTO `barang` VALUES ('16', 'selimut prasmanan', '100', 'pcs', 'pake bareng', '14');
INSERT INTO `barang` VALUES ('17', 'selimut ayam', '100', 'pcs', 'selimut ukuran kecil', '14');
INSERT INTO `barang` VALUES ('18', 'Matras merah muda', '100', 'pcs', 'matras merah muda', '14');
INSERT INTO `barang` VALUES ('19', 'matras biru', '100', 'pcs', 'matras warna biru', '15');
INSERT INTO `barang` VALUES ('20', 'matras ungu', '100', 'pcs', 'matras untuk janda', '15');
INSERT INTO `barang` VALUES ('21', 'matras kelabu', '100', 'pcs', 'matras kelabu', '15');
INSERT INTO `barang` VALUES ('22', 'karpet welcome', '100', 'pcs', 'karpet selamat datang', '19');
INSERT INTO `barang` VALUES ('23', 'karpet out', '100', 'pcs', 'karpet out', '19');
INSERT INTO `barang` VALUES ('24', 'karpet apapun', '100', 'pcs', 'karpet cewek', '19');
INSERT INTO `barang` VALUES ('25', 'karpet bola dunia', '100', 'pcs', 'karpet bentuk bola dunia', '19');
INSERT INTO `barang` VALUES ('26', 'alas karpet sport', '100', 'PCS', 'tidak ada', '18');
INSERT INTO `barang` VALUES ('27', 'kain bulu untuk hambal', '100', 'PCS', 'tidak ada', '17');
INSERT INTO `customer` VALUES ('3', 'CV Randi Motor', '0811353603', 'Jl. Brigjen Katamso 5 Waru');
INSERT INTO `karyawan` VALUES ('1', 'Rama Adhiguna', 'Wedoro', '123456789', 'Pemilik', '1');
INSERT INTO `karyawan` VALUES ('2', 'Sonny Haryadi', 'Mejoyo Selatan AJ 13', '082243883642', 'Pembelian', '1');
INSERT INTO `karyawan` VALUES ('3', 'Lucas Leonard', 'Deket Ubaya Depan Metropolis', '081234567892', 'Gudang', '1');
INSERT INTO `karyawan` VALUES ('4', 'Evin Cintiawan', 'Rungkut Mejoyo Selatan AJ 13', '0812345566783', 'Penjualan', '1');
INSERT INTO `karyawan` VALUES ('5', 'Kevin Andryano', 'Mulyosari Selatan 13', '123456789', 'Penjualan', '1');
INSERT INTO `karyawan` VALUES ('6', 'Billie Arianto', 'Rungkut Mejoyo Utara N42', '123456789', 'Penjualan', '1');
INSERT INTO `kategori` VALUES ('14', 'Selimut', 'Barang Jadi');
INSERT INTO `kategori` VALUES ('15', 'Matras', 'Barang Jadi');
INSERT INTO `kategori` VALUES ('16', 'Kain Bludru', 'Bahan Produksi');
INSERT INTO `kategori` VALUES ('17', 'Kain Bulu', 'Bahan Produksi');
INSERT INTO `kategori` VALUES ('18', 'Alas Karpet', 'Bahan Produksi');
INSERT INTO `kategori` VALUES ('19', 'karpet', 'Barang Jadi');
INSERT INTO `pembelian` VALUES ('1', '4', '1', '2018-01-15', '2018-01-15', '140000000', 'Sampai');
INSERT INTO `pembelian` VALUES ('1000', '4', '1', '2018-01-15', '2018-01-15', '0', 'Sampai');
INSERT INTO `pembelian_barang` VALUES ('124', '1', '1', '1000', '10000');
INSERT INTO `pembelian_barang` VALUES ('125', '1', '2', '2000', '20000');
INSERT INTO `pembelian_barang` VALUES ('126', '1', '3', '3000', '30000');
INSERT INTO `pembelian_pembayaran` VALUES ('18', '1', '140000000', 'Pelunasan Nota Penjualan 1', '1', '2018-01-15');
INSERT INTO `pembelian_pembayaran` VALUES ('19', '1000', '0', 'Pelunasan Nota Penjualan 1000', '1', '2018-01-15');
INSERT INTO `penjualan` VALUES ('123', '3', '1', '2018-01-15', '2018-01-15', '1500000', 'Sampai');
INSERT INTO `penjualan` VALUES ('180116001', '3', '1', '2018-01-16', '2018-01-16', '0', 'Sampai');
INSERT INTO `penjualan` VALUES ('180116002', '3', '1', '2018-01-16', '2018-01-16', '0', 'Proses');
INSERT INTO `penjualan` VALUES ('180117001', '3', '1', '2018-01-17', '2018-01-17', '1499700', 'Proses');
INSERT INTO `penjualan` VALUES ('180118001', '3', '1', '2018-01-18', '2018-01-18', '1500000', 'Menunggu');
INSERT INTO `penjualan` VALUES ('180118002', '3', '1', '2018-01-18', '2018-01-18', '1500000', 'Proses');
INSERT INTO `penjualan` VALUES ('180118003', '3', '1', '2018-01-18', '2018-01-18', '200000', 'Proses');
INSERT INTO `penjualan` VALUES ('180119001', '3', '1', '2018-01-19', '2018-01-19', '849860', 'Proses');
INSERT INTO `penjualan_barang` VALUES ('66', '123', '5', '100', '15000');
INSERT INTO `penjualan_barang` VALUES ('67', '180116001', '5', '15', '10000');
INSERT INTO `penjualan_barang` VALUES ('68', '180116002', '5', '350', '10000');
INSERT INTO `penjualan_barang` VALUES ('69', '180117001', '5', '150', '9998');
INSERT INTO `penjualan_barang` VALUES ('70', '180118001', '9', '150', '10000');
INSERT INTO `penjualan_barang` VALUES ('71', '180118002', '14', '150', '10000');
INSERT INTO `penjualan_barang` VALUES ('72', '180118003', '13', '10', '10000');
INSERT INTO `penjualan_barang` VALUES ('73', '180118003', '16', '5', '10000');
INSERT INTO `penjualan_barang` VALUES ('74', '180118003', '25', '5', '10000');
INSERT INTO `penjualan_barang` VALUES ('75', '180119001', '14', '10', '10000');
INSERT INTO `penjualan_barang` VALUES ('76', '180119001', '21', '15', '9998');
INSERT INTO `penjualan_barang` VALUES ('77', '180119001', '23', '10', '14997');
INSERT INTO `penjualan_barang` VALUES ('78', '180119001', '21', '15', '10000');
INSERT INTO `penjualan_barang` VALUES ('79', '180119001', '20', '20', '9997');
INSERT INTO `penjualan_pembayaran` VALUES ('24', '123', '1500000', 'Pelunasan Nota Penjualan 123', '1', '2018-01-15');
INSERT INTO `penjualan_pembayaran` VALUES ('25', '180117001', '1499700', 'Pelunasan Nota Penjualan 180117001', '1', '2018-01-17');
INSERT INTO `penjualan_pembayaran` VALUES ('26', '180118001', '1500000', 'Pelunasan Nota Penjualan 180118001', '1', '2018-01-18');
INSERT INTO `penjualan_pembayaran` VALUES ('27', '180118002', '1500000', 'Pelunasan Nota Penjualan 180118002', '1', '2018-01-18');
INSERT INTO `penjualan_pembayaran` VALUES ('28', '180118003', '200000', 'Pelunasan Nota Penjualan 180118003', '1', '2018-01-18');
INSERT INTO `penjualan_pembayaran` VALUES ('29', '180119001', '849860', 'Pelunasan Nota Penjualan 180119001', '1', '2018-01-19');
INSERT INTO `produksi` VALUES ('84', '2018-01-15 13:32:46');
INSERT INTO `produksi_barang` VALUES ('59', '84', '2', '1000');
INSERT INTO `produksi_barang` VALUES ('60', '84', '5', '700');
INSERT INTO `supplier` VALUES ('4', 'CV Randi Motor', '0811353603', 'Jl. Brigjen Katamso 5 Waru');
INSERT INTO `supplier` VALUES ('5', 'CV Cupuman', '0928202982', 'CiputraLand');
INSERT INTO `user` VALUES ('sonny', '827ccb0eea8a706c4c34a16891f84e7b', '2');
INSERT INTO `user` VALUES ('lucas', '827ccb0eea8a706c4c34a16891f84e7b', '3');
INSERT INTO `user` VALUES ('rama', '827ccb0eea8a706c4c34a16891f84e7b', '1');
INSERT INTO `user` VALUES ('kevin', '827ccb0eea8a706c4c34a16891f84e7b', '5');

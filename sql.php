<?php
    require 'db.php';
    //SQL
    $sqlB = "SELECT * FROM `barang`";
    $resultB = mysqli_query($link,$sqlB);
    if(!$resultB){
       die("SQL Error :".$sqlB);
    }

    $sqlKaryawan = "select * from karyawan";     
    $resultKaryawan = mysqli_query($link, $sqlKaryawan);
    if(!$resultKaryawan) {
        die("SQL Error: ".$sqlKaryawan);
    }

    $sqlSupplier = "select * from supplier";     
    $resultSupplier = mysqli_query($link, $sqlSupplier);
    if(!$resultSupplier) {
        die("SQL Error: ".$sqlSupplier);
    }

    $sqlCustomer = "select * from customer";     
    $resultCustomer = mysqli_query($link, $sqlCustomer);
    if(!$resultCustomer) {
        die("SQL Error: ".$sqlCustomer);
    }

    $sqlInformasiProduksi = "SELECT *,date(tanggal) as date FROM `produksi` order by tanggal DESC";
    $resultInformasiProduksi = mysqli_query($link,$sqlInformasiProduksi);
    if(!$resultInformasiProduksi){
       die("SQL Error :".$sqlInformasiProduksi);
    }

    /*$sqlUser = "select * from karyawan where jabatan = 'Penjualan' or jabatan = 'Pembelian' or jabatan ='Gudang' having id not in(select Karyawan_id from user)";  
    $resultUser = mysqli_query($link,$sqlUser);
    if(!$resultUser){
       die("SQL Error :".$sqlUser);
    }

    $sqlPembelian = "SELECT p.id, p.tanggal,s.nama, p.saldo,p.status_kirim, SUM(pb.harga*pb.qty) as total FROM pembelian p, pembelian_barang pb,supplier s WHERE p.id = pb.Pembelian_id and p.Supplier_id = s.id GROUP BY p.id";
    $resultPembelian = mysqli_query($link,$sqlPembelian);
    if(!$resultPembelian){
       die("SQL Error :".$sqlPembelian);
    }

    $sqlPenjualan = "SELECT p.id, p.tanggal,c.nama, p.saldo,p.status_kirim, SUM(pb.harga*pb.qty) as total FROM penjualan p, penjualan_barang pb,customer c WHERE p.id = pb.Penjualan_id and p.Customer_id = c.id GROUP BY p.id";
    $resultPenjualan = mysqli_query($link,$sqlPenjualan);
    if(!$resultPenjualan){
       die("SQL Error :".$sqlPenjualan);
    }

    $cekNomorNota = "SELECT COUNT(*) as jumlah FROM penjualan WHERE tanggal = '".date("Y-m-d")."'";
    $resultCekNomorNota = mysqli_query($link, $cekNomorNota);

    $cekNomorNotaBeli = "SELECT COUNT(*) as jumlah FROM pembelian WHERE tanggal = '".date("Y-m-d")."'";
    $resultCekNomorNotaBeli = mysqli_query($link, $cekNomorNotaBeli);
    */

    //Function
    function Kategori($kid){
        require 'db.php';
        $sqlCariKategori = "SELECT * FROM `kategori` WHERE id ='".$kid."';";
        $resultCariKategori = mysqli_query($link,$sqlCariKategori);
        $rowCariKategori = mysqli_fetch_object($resultCariKategori);
        return $rowCariKategori->nama;
    }
    function ProduksiBahan($pid){
        require 'db.php';
        $sqlBahan = "SELECT b.nama , pb.qty , b.keterangan FROM barang b, produksi_barang pb, kategori k WHERE b.id = pb.Barang_id and b.Kategori_id = k.id and pb.Produksi_id = '".$pid."' and k.jenis='Bahan Produksi'";
        $resultBahan = mysqli_query($link,$sqlBahan);
        return $resultBahan;
    }
    function ProduksiBarang($pid){
        require 'db.php';
        $sqlBarang = "SELECT b.nama , pb.qty FROM barang b, produksi_barang pb, kategori k WHERE b.id = pb.Barang_id and b.Kategori_id = k.id and pb.Produksi_id = '".$pid."' and k.jenis='Barang Jadi'";
        $resultBarang = mysqli_query($link,$sqlBarang);
        return $resultBarang;
    }
    function PembelianBarang($pid){
        require 'db.php';
        $sqlPembelianBarang = "SELECT b.id,b.nama, pb.qty,pb.harga FROM pembelian_barang pb, barang b WHERE pb.pembelian_id = ".$pid." and pb.Barang_id = b.id";
        $resultPembelianBarang = mysqli_query($link,$sqlPembelianBarang);
        return $resultPembelianBarang;
    }
    function PenjualanBarang($pid){
        require 'db.php';
        $sqlPenjualanBarang = "SELECT b.id,b.nama, pb.qty,pb.harga FROM penjualan_barang pb, barang b WHERE pb.penjualan_id = ".$pid." and pb.Barang_id = b.id";
        $resultPenjualanBarang = mysqli_query($link,$sqlPenjualanBarang);
        return $resultPenjualanBarang;
    }
    Function KofirmasiPengirimanPenjualan($pid){
        require 'db.php';
        $sqlKirimPenjualan = "SELECT pb.Barang_id,b.nama,b.keterangan,pb.qty,pb.harga FROM penjualan_barang pb , barang b where pb.Penjualan_id = '".$pid."' and pb.Barang_id = b.id";
        $resultKirimPenjualan = mysqli_query($link, $sqlKirimPenjualan);
        return $resultKirimPenjualan;
    }

    Function KofirmasiPengirimanPembelian($pid){
        require 'db.php';
        $sqlKirimPembelian = "SELECT pb.Barang_id,b.nama,pb.qty,pb.harga FROM pembelian_barang pb , barang b where pb.Pembelian_id = '".$pid."' and pb.Barang_id = b.id";
        $resultKirimPembelian = mysqli_query($link, $sqlKirimPembelian);
        return $resultKirimPembelian;
    }

    function NotaPembelian($pid){
        require 'db.php';
        $sqlPembelian = "SELECT p.id, p.tanggal, c.nama, c.telepon, c.alamat FROM penjualan p, customer c WHERE p.Customer_id = c.id and p.id = '".$pid."'";
        $resultPembelian = mysqli_query($link,$sqlPembelian);
        return $resultPembelian;
    }
    function NotaPenjualan($pid){
        require 'db.php';
        $sqlPembelian = "SELECT p.id, p.tanggal, c.nama, c.telepon, c.alamat FROM penjualan p, customer c WHERE p.Customer_id = c.id and p.id = '".$pid."'";
        $resultPembelian = mysqli_query($link,$sqlPembelian);
        return $resultPembelian;
    }
    Function PembayaranPenjualan($pid){
        require 'db.php';
        $sqlBayarPembelian = "SELECT pb.Penjualan_id,p.saldo,SUM(pb.qty*pb.harga) as total FROM penjualan_barang pb,penjualan p WHERE pb.Penjualan_id = '".$pid."' and pb.Penjualan_id = p.id";
        $resultBayarPembelian = mysqli_query($link, $sqlBayarPembelian);
        return $resultBayarPembelian;
    }
    Function PembayaranPembelian($pid){
        require 'db.php';
        $sqlBayarPenjualan = "SELECT pb.Pembelian_id,p.saldo,SUM(pb.qty*pb.harga) as total FROM pembelian_barang pb,pembelian p WHERE pb.Pembelian_id = '".$pid."' and pb.Pembelian_id = p.id";
        $resultBayarPenjualan = mysqli_query($link, $sqlBayarPenjualan);
        return $resultBayarPenjualan;
    }
    Function Karyawan($pid){
        require 'db.php';
        $sqlKaryawan = "SELECT k.nama, k.jabatan, k.idKaryawan FROM user u, karyawan k WHERE u.Karyawan_idKaryawan = k.idKaryawan and u.username = '".$pid."'";
        $resultKaryawan = mysqli_query($link, $sqlKaryawan);
        return $resultKaryawan;
    }
?>
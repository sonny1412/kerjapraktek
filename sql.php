<?php
    require 'db.php';
    //SQL
    $sqlBahan = "SELECT * FROM `barang` where Kategori_id IN(select id from `kategori` where jenis = 'Bahan Produksi')";
    $resultBahan = mysqli_query($link,$sqlBahan);
    if(!$resultBahan){
       die("SQL Error :".$sqlBahan);
    }

    $sqlBarang = "SELECT * FROM `barang` where Kategori_id IN(select id from `kategori` where jenis = 'Barang Jadi')";
    $resultBarang = mysqli_query($link,$sqlBarang);
    if(!$resultBarang){
       die("SQL Error :".$sqlBarang);
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

    $sqlKategoriBahan = "select * from Kategori WHERE jenis = 'Bahan Produksi'";
    $resultKategoriBahan = mysqli_query($link,$sqlKategoriBahan);
    if(!$resultKategoriBahan){
       die("SQL Error :".$sqlKategoriBahan);
    }

    $sqlKategoriBarang = "select * from Kategori WHERE jenis = 'Barang Jadi'";
    $resultKategoriBarang = mysqli_query($link,$sqlKategoriBarang);
    if(!$resultKategoriBarang){
       die("SQL Error :".$sqlKategoriBarang);
    }

    $sqlProduksiBahan = "SELECT b.id,b.nama,b.keterangan,b.quantity,k.jenis FROM barang b,kategori k WHERE b.Kategori_id = k.id and k.jenis = 'Bahan Produksi'";
    $resultProduksiBahan = mysqli_query($link,$sqlProduksiBahan);
    if(!$resultProduksiBahan){
       die("SQL Error :".$sqlProduksiBahan);
    }

    $sqlProduksiBarang = "SELECT b.id,b.nama,b.keterangan,b.quantity,k.jenis FROM barang b,kategori k WHERE b.Kategori_id = k.id and k.jenis = 'Barang Jadi'";
    $resultProduksiBarang = mysqli_query($link,$sqlProduksiBarang);
    if(!$resultProduksiBarang){
       die("SQL Error :".$sqlProduksiBarang);
    }

    $sqlProduksiKategori = "select * from Kategori where jenis='Barang Jadi';";
    $resultProduksiKategori = mysqli_query($link,$sqlProduksiKategori);
    if(!$resultProduksiKategori){
       die("SQL Error :".$sqlProduksiKategori);
    }

    $sqlInformasiProduksi = "SELECT *,date(tanggal) as date FROM `produksi` order by tanggal DESC";
    $resultInformasiProduksi = mysqli_query($link,$sqlInformasiProduksi);
    if(!$resultInformasiProduksi){
       die("SQL Error :".$sqlInformasiProduksi);
    }

    $sqlUser = "select * from karyawan where jabatan = 'Penjualan' or jabatan = 'Pembelian' or jabatan ='Gudang' having id not in(select Karyawan_id from user)";  
    $resultUser = mysqli_query($link,$sqlUser);
    if(!$resultUser){
       die("SQL Error :".$sqlUser);
    }

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
?>
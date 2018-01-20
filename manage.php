<?php
date_default_timezone_set('Asia/Jakarta');
$act = $_GET["act"];

/* Region Karyawan*/
switch ($act) {
	case "login":
	require 'db.php';
	$user = $_POST["Username"];
	$pass = MD5($_POST["Password"]);
	$sql = "select * from user where username='".$user."'";
	$result = mysqli_query($link,$sql);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_object($result);
		if($pass == $row->password){
			$_SESSION["login"]=1;
			header("location: index.php");
		}
		else{
			header("location: login.php");
		}
	}
	else{
		header("location: login.php");	
	}
	break;

	case "insertkaryawan":
	require 'db.php';
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$telepon =$_POST["telepon"];
	$jabatan = $_POST["jabatan"];
	$sql = "INSERT INTO `karyawan` (`nama`, `alamat`, `telp`, `jabatan` , `status`) VALUES ('".$nama."', '".$alamat."', '".$telepon."', '".$jabatan."','1')";
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: karyawan.php");
	}
	else{
		echo "gagal";
	}
	break;

	case "ubahkaryawan":
	require 'db.php';
	$id=$_POST["id"];
	$nama = $_POST["nama_karyawan"];
	$alamat = $_POST["alamat_karyawan"];
	$telepon =$_POST["kontak_karyawan"];
	$jabatan = $_POST["jabatan_karyawan"];
	$status = $_POST["status_karyawan"];
	$sql = "UPDATE `karyawan` SET `nama` = '".$nama."', `alamat` = '".$alamat."', `telp` = '".$telepon."',`jabatan` = '".$jabatan."',`status` = '".$status."' WHERE `karyawan`.`id` =".$id;
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: informasikaryawan.php");
	}
	else{
		echo "gagal";
		echo $jabatan;
	}
	break;

	case "ubahsupplier":
	require 'db.php';
	$id=$_POST["id"];
	$nama = $_POST["nama_supplier"];
	$telepon =$_POST["kontak_supplier"];
	$alamat = $_POST["alamat_supplier"];
	$sql = "UPDATE `supplier` SET `nama` = '".$nama."', `telepon` = '".$telepon."', `alamat` = '".$alamat."' WHERE `id` =".$id;
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: informasisuplier.php");
	}
	else{
		echo "gagal";
		//echo $jabatan;
	}
	break;

	case "ubahcustomer":
	require 'db.php';
	$id=$_POST["id"];
	$nama = $_POST["nama_customer"];
	$telepon =$_POST["kontak_customer"];
	$alamat = $_POST["alamat_customer"];
	$sql = "UPDATE `customer` SET `nama` = '".$nama."', `telepon` = '".$telepon."', `alamat` = '".$alamat."' WHERE `id` =".$id;
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: informasicustomer.php");
	}
	else{
		echo "gagal";
		//echo $jabatan;
	}
	break;
	/////////////////////////////
	/* Region User */
	case "insertuser":
	require 'db.php';
	$username = $_POST["user"];
	$password = MD5($_POST["password"]);
	$konfirmasi =MD5($_POST["konfirmasi"]);
	$idKaryawan = $_POST["idKaryawan"];
	if($password==$konfirmasi){
		$sql = "INSERT INTO `user` (`Karyawan_id`, `username`, `password`) VALUES ('".$idKaryawan."', '".$username."', '".$password."');";
		$result = mysqli_query($link,$sql);
		if($result){
			header("location: user.php");
		}
		else{
		echo "gagal";
		echo $idKaryawan;
		}
	}
	else{
		echo "Password Tidak Sama";
	}
	break;

	///////////////////////////
	/* Region Gudang */
	case "insertkategori";
	require 'db.php';
	$nama = $_POST["namakategori"];
	$jenis = $_POST["jenis"];
	$sql = "INSERT INTO `kategori`(`nama`,`jenis`) VALUES('".$nama."','".$jenis."');";
	$result=mysqli_query($link,$sql);
	if($result){
		if($jenis == "Bahan Produksi"){
			header("location: tambahbahan.php");
		}
		else{
			header("location: tambahbarang.php");
		}
		
	}
	else{
		echo "gagal";
	}
	break;

	case "insertbarang";
	require 'db.php';
	$nama = $_POST["nama"];
	$kuantitas = $_POST["kuantitas"];
	$lbr = $_POST["lbr"];
	$idKategori = $_POST["idKategori"];
	$pjg = $_POST["pjg"];
	$sql = "INSERT INTO `barang`(`nama`,`quantity`,`keterangan`,`satuan`,`Kategori_id`) VALUES('".$nama."','".$kuantitas."','".$pjg."','pcs',".$idKategori.")";
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: informasibarang.php");
	}
	else{
		echo "gagal";
	}
	break;

	case "insertbahan";
	require 'db.php';
	$nama = $_POST["nama"];
	$kuantitas = $_POST["kuantitas"];
	$satuan = $_POST["satuan"];
	$keterangan = $_POST["keterangan"];
	$idKategori = $_POST["idKategori"];
	$sql = "INSERT INTO `barang`(`nama`,`quantity`,`satuan`,`keterangan`,`Kategori_id`) VALUES('".$nama."','".$kuantitas."','".$satuan."','".$keterangan."',".$idKategori.")";
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: informasibahan.php");
	}
	else{
		echo "gagal";
	}
	break;

	case "insertsupplier";
	require 'db.php';
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$kontak = $_POST["kontak"];
	$sql = "INSERT INTO `supplier` (`nama`, `telepon`, `alamat`) VALUES ('".$nama."', '".$kontak."', '".$alamat."');";
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: informasisuplier.php");
	}
	else{
		echo "gagal";
	}
	break;

	case "insertcustomer";
	require 'db.php';
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$kontak = $_POST["kontak"];
	$sql = "INSERT INTO `customer` (`nama`, `telepon`, `alamat`) VALUES ('".$nama."', '".$kontak."', '".$alamat."');";
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: informasicustomer.php");
	}
	else{
		echo "gagal";
	}
	break;

	case "insertpembayaranpenjualan";
	require 'db.php';
	$id = $_POST["id"];
	$jumlah = $_POST["jumlah"];
	$keterangan = $_POST["keterangan"];
	$karyawan = $_POST["karyawan"];
	$dateTime = date_create('now')->format('Y-m-d');
	$sql = "INSERT INTO `penjualan_pembayaran` (`id`, `Penjualan_id`, `jumlah`, `keterangan`,`Karyawan_id`,`tanggal_bayar`) VALUES (NULL, '".$id."', '".$jumlah."', '".$keterangan."','".$karyawan."','".$dateTime."');";
	$result = mysqli_query($link,$sql);
	if($result){
		$sqlUpdate = "UPDATE `penjualan` SET saldo = saldo + ".$jumlah." WHERE `penjualan`.`id` = ".$id.";";
		$resultUpdate = mysqli_query($link,$sqlUpdate);
		if($resultUpdate){
			header("location: statuspenjualan.php");
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "insertpembayaranpembelian";
	require 'db.php';
	$id = $_POST["id"];
	$jumlah = $_POST["jumlah"];
	$keterangan = $_POST["keterangan"];
	$karyawan = $_POST["karyawan"];
	$dateTime = date_create('now')->format('Y-m-d');
	$sql = "INSERT INTO `pembelian_pembayaran` (`id`, `Pembelian_id`, `jumlah`, `keterangan`,`Karyawan_id`,`tanggal_bayar`) VALUES (NULL, '".$id."', '".$jumlah."', '".$keterangan."','".$karyawan."','".$dateTime."');";
	$result = mysqli_query($link,$sql);
	if($result){
		$sqlUpdate = "UPDATE `pembelian` SET saldo = saldo + ".$jumlah." WHERE `pembelian`.`id` = ".$id.";";
		$resultUpdate = mysqli_query($link,$sqlUpdate);
		if($resultUpdate){
			header("location: statuspembelian.php");
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "insertrefundpembelian";
	require 'db.php';
	$id = $_POST["id"];
	$jumlah = $_POST["jumlah"];
	$keterangan = $_POST["keterangan"];
	$karyawan = $_POST["karyawan"];
	$dateTime = date_create('now')->format('Y-m-d');
	$sql = "INSERT INTO `pembelian_pembayaran` (`id`, `Pembelian_id`, `jumlah`, `keterangan`,`Karyawan_id`,`tanggal_bayar`) VALUES (NULL, '".$id."', '".$jumlah."', '".$keterangan."','".$karyawan."','".$dateTime."');";
	$result = mysqli_query($link,$sql);
	if($result){
		$sqlUpdate = "UPDATE `pembelian` SET saldo = saldo - ".$jumlah." WHERE `pembelian`.`id` = ".$id.";";
		$resultUpdate = mysqli_query($link,$sqlUpdate);
		if($resultUpdate){
			header("location: statuspembelian.php");
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "insertrefundpenjualan";
	require 'db.php';
	$id = $_POST["id"];
	$jumlah = $_POST["jumlah"];
	$keterangan = $_POST["keterangan"];
	$karyawan = $_POST["karyawan"];
	$dateTime = date_create('now')->format('Y-m-d');
	$sql = "INSERT INTO `penjualan_pembayaran` (`id`, `Penjualan_id`, `jumlah`, `keterangan`,`Karyawan_id`,`tanggal_bayar`) VALUES (NULL, '".$id."', '".$jumlah."', '".$keterangan."','".$karyawan."','".$dateTime."');";
	$result = mysqli_query($link,$sql);
	if($result){
		$sqlUpdate = "UPDATE `penjualan` SET saldo = saldo - ".$jumlah." WHERE `penjualan`.`id` = ".$id.";";
		$resultUpdate = mysqli_query($link,$sqlUpdate);
		if($resultUpdate){
			header("location: statuspenjualan.php");
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "ubahbarang":
	require 'db.php';
	$hidden = $_POST["hidden"];
	$id=$_POST["id"];
	$nama = $_POST["nama_barang"];
	$kuantitas = $_POST["kuantitas_barang"];
	$keterangan = $_POST["keterangan_barang"];
	$kategori= $_POST["kategori_barang"];
	$sql = "UPDATE `barang` SET `nama` = '".$nama."', `quantity` = '".$kuantitas."', `Kategori_id` = '".$kategori."', `keterangan` = '".$keterangan."' WHERE `id` =".$id;
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: informasibarang.php");
	}
	else{
		echo "gagal";
		echo $jabatan;
	}
	break;

	case "ubahbahan":
	require 'db.php';
	$hidden = $_POST["hidden"];
	$id=$_POST["id"];
	$nama = $_POST["nama_bahan"];
	$kuantitas = $_POST["kuantitas_bahan"];
	$keterangan = $_POST["keterangan_bahan"];
	$kategori= $_POST["kategori_bahan"];
	$sql = "UPDATE `barang` SET `nama` = '".$nama."', `quantity` = '".$kuantitas."', `Kategori_id` = '".$kategori."', `keterangan` = '".$keterangan."' WHERE `id` =".$id;
	$result = mysqli_query($link,$sql);
	if($result){
		header("location: informasibahan.php");
	}
	else{
		echo "gagal";
	}
	break;

	case "inserttanggalproduksi":
	require 'db.php';
	$tanggal = date_create('now')->format('Y-m-d H:i:s');
	$sql = "INSERT INTO `produksi`(`tanggal`) VALUES('".$tanggal."')";
	$result = mysqli_query($link,$sql);
	if($result){}
	else{
		echo "gagal";
	}
	break;

	case "insertpembelian":
	require 'db.php';
	$sql;
	$noNota = $_POST["noNota"];
	$tanggal = $_POST["tanggal"];
	$supplier= $_POST["idSupplier"];
	$karyawan = $_POST["karyawan"];
	$jenisBayar = $_POST["jenisBayar"];
	$jatuhTempo = $_POST["jatuhTempo"];
	$total = $_POST["total"];
	if($jenisBayar == "K"){
		$sql = "INSERT INTO `pembelian` (`id`, `Supplier_id`, `Karyawan_id`, `tanggal`, `jatuh_tempo`, `saldo`) VALUES ('".$noNota."', '".$supplier."', '".$karyawan."', '".$tanggal."', '".$jatuhTempo."', '0');";
	}
	if($jenisBayar == "T"){
		$sql = "INSERT INTO `pembelian` (`id`, `Supplier_id`, `Karyawan_id`, `tanggal`, `jatuh_tempo`, `saldo`) VALUES ('".$noNota."', '".$supplier."', '".$karyawan."', '".$tanggal."', '".$tanggal."', '".$total."');";	
	}
	$result = mysqli_query($link,$sql);
	if($result){
		if($jenisBayar == "T"){
			$sqlBayar = "INSERT INTO `pembelian_pembayaran` (`id`, `Pembelian_id`, `jumlah`, `keterangan`,`Karyawan_id`,`tanggal_bayar`) VALUES (NULL, '".$noNota."', '".$total."', 'Pelunasan Nota Penjualan ".$noNota."','".$karyawan."','".$tanggal."');";
			$resultBayar = mysqli_query($link,$sqlBayar);
			if($resultBayar){

			}
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "insertPOpembelian":
	require 'db.php';
	$sql;
	$noPO = $_POST["noPO"];
	$supplier= $_POST["idSupplier"];
	$karyawan = $_POST["karyawan"];
	$keterangan = $_POST["keterangan"];
	$sql = "INSERT INTO `pembelianPO` (`id`, `Supplier_id`, `Karyawan_id`, `keterangan`) VALUES ('".$noNota."', '".$supplier."', '".$karyawan."', '".$keterangan."');";

	else{
		echo "gagal";
	}
	break;

	case "insertPOpembelian":
	require 'db.php';
	$sql;
	$noPO = $_POST["noPO"];
	$supplier= $_POST["idSupplier"];
	$karyawan = $_POST["karyawan"];
	$keterangan = $_POST["keterangan"];
	$sql = "INSERT INTO `pembelianPO` (`id`, `Supplier_id`, `Karyawan_id`, `keterangan`) VALUES ('".$noNota."', '".$supplier."', '".$karyawan."', '".$keterangan."');";

	else{
		echo "gagal";
	}
	break;

	case "insertpembelianbarang":
	require 'db.php';
	$sql;
	$noNota = $_POST["noNota"];
	$barang_id = $_POST["barang_id"];
	$qty= $_POST["qty"];
	$harga = $_POST["harga"];
	$statusKirim = $_POST["statusKirim"];
	$sql = "INSERT INTO `pembelian_barang` (`id`, `Pembelian_id`, `Barang_id`, `qty`, `harga`) VALUES (NULL, '".$noNota."', '".$barang_id."', '".$qty."', '".$harga."');";
	$result = mysqli_query($link,$sql);
	if($result){
		if($statusKirim == "T"){
			$sqlKurang = "UPDATE `barang` SET quantity = quantity + ".$qty." WHERE id = '".$barang_id."'";
			$resultKurang = mysqli_query($link,$sqlKurang);
			if($resultKurang){
			}
			else{
				echo "gagal";
			}
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "insertpembelianbarangBaru";
	require 'db.php';
	$sql;
	$id = $_POST["idBarang"];
	$nama = $_POST["nama"];
	$kuantitas = $_POST["kuantitas"];
	$idKategori = $_POST["idKategori"];
	$pjg = $_POST["pjg"];
	$satuan = $_POST["satuan"];
	$noNota = $_POST["noNota"];
	$statusKirim = $_POST["statusKirim"];
	$harga=$_POST["harga"];
	if($statusKirim == "T"){
		$sql = "INSERT INTO `barang`(`id`,`nama`,`quantity`,`satuan`,`keterangan`,`Kategori_id`) VALUES('".$id."','".$nama."','".$kuantitas."','".$satuan."','".$pjg."',".$idKategori.")";
	}
	else if($statusKirim == "K"){
		$sql = "INSERT INTO `barang`(`id`,`nama`,`quantity`,`satuan`,`keterangan`,`Kategori_id`) VALUES('".$id."','".$nama."','0','".$satuan."','".$pjg."',".$idKategori.")";
	}
	$result = mysqli_query($link,$sql);
	$sqlPembelian = "INSERT INTO `pembelian_barang` (`id`, `Pembelian_id`, `Barang_id`, `qty`, `harga`) VALUES (NULL, '".$noNota."', '".$id."', '".$kuantitas."', '".$harga."');";
	$resultPembelian = mysqli_query($link,$sqlPembelian);
	if($resultPembelian){

	}
	else{
		echo "gagal";
	}
	break;

	case "insertpenjualan":
	require 'db.php';
	$sql;
	$noNota = $_POST["noNota"];
	$tanggal = $_POST["tanggal"];
	$customer= $_POST["idCustomer"];
	$karyawan = $_POST["karyawan"];
	$jenisBayar = $_POST["jenisBayar"];
	$jatuhTempo = $_POST["jatuhTempo"];
	$statusKirim = $_POST["statusKirim"];
	$total = $_POST["total"];
	if($jenisBayar == "K"){
		if($statusKirim == "K"){
			$sql = "INSERT INTO `penjualan` (`id`, `Customer_id`, `Karyawan_id`, `tanggal`, `jatuh_tempo`, `saldo`, `status_kirim`) VALUES ('".$noNota."', '".$customer."', '".$karyawan."', '".$tanggal."', '".$jatuhTempo."', '0', 'Menunggu');";
		}
		else if($statusKirim == "T"){
			$sql = "INSERT INTO `penjualan` (`id`, `Customer_id`, `Karyawan_id`, `tanggal`, `jatuh_tempo`, `saldo`, `status_kirim`) VALUES ('".$noNota."', '".$customer."', '".$karyawan."', '".$tanggal."', '".$jatuhTempo."', '0', 'Sampai');";
		}
		
	}
	if($jenisBayar == "T"){
		if($statusKirim == "K"){
			$sql = "INSERT INTO `penjualan` (`id`, `Customer_id`, `Karyawan_id`, `tanggal`, `jatuh_tempo`, `saldo`, `status_kirim`) VALUES ('".$noNota."', '".$customer."', '".$karyawan."', '".$tanggal."', '".$tanggal."', '".$total."', 'Menunggu');";
		}
		else if($statusKirim == "T"){
			$sql = "INSERT INTO `penjualan` (`id`, `Customer_id`, `Karyawan_id`, `tanggal`, `jatuh_tempo`, `saldo`, `status_kirim`) VALUES ('".$noNota."', '".$customer."', '".$karyawan."', '".$tanggal."', '".$tanggal."', '".$total."', 'Sampai');";
		}		
	}
	$result = mysqli_query($link,$sql);
	if($result){
		if($jenisBayar == "T"){
			$sqlBayar = "INSERT INTO `penjualan_pembayaran` (`id`, `Penjualan_id`, `jumlah`, `keterangan`,`Karyawan_id`,`tanggal_bayar`) VALUES (NULL, '".$noNota."', '".$total."', 'Pelunasan Nota Penjualan ".$noNota."','".$karyawan."','".$tanggal."');";
			$resultBayar = mysqli_query($link,$sqlBayar);
			if($resultBayar){

			}
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "insertpenjualanbarang":
	require 'db.php';
	$sql;
	$noNota = $_POST["noNota"];
	$barang_id = $_POST["barang_id"];
	$qty= $_POST["qty"];
	$harga = $_POST["harga"];
	$statusKirim = $_POST["statusKirim"];
	$sql = "INSERT INTO `penjualan_barang` (`id`, `Penjualan_id`, `Barang_id`, `qty`, `harga`) VALUES (NULL, '".$noNota."', '".$barang_id."', '".$qty."', '".$harga."');";
	$result = mysqli_query($link,$sql);
	if($result){
		if($statusKirim == "T"){
			$sqlKurang = "UPDATE `barang` SET quantity = quantity - ".$qty." WHERE id = '".$barang_id."'";
			$resultKurang = mysqli_query($link,$sqlKurang);
			if($resultKurang){
			}
			else{
				echo "gagal";
			}
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "updatepenjualan":
	require 'db.php';
	$id = $_POST["noNota"];
	$kirim = $_POST["kirim"];
	$sql = "UPDATE penjualan set status_kirim = '".$kirim."' where id = '".$id."'";
	$result = mysqli_query($link,$sql);
	if($result){
	}
	else{
		echo "gagal";
	}
	break;

	case "updatepenjualanbarang":
	require 'db.php';
	$id = $_POST["noNota"];
	$barang = $_POST["barang_id"];
	$qty = $_POST["qty"];
	$sql = "UPDATE penjualan_barang set qty = '".$qty."' where Penjualan_id = '".$id."' and Barang_id = '".$barang."'";
	$result = mysqli_query($link,$sql);
	if($result){
	}
	else{
		echo "gagal";
	}
	break;

	case "updatepenjualanbarangfinal":
	require 'db.php';
	$id = $_POST["noNota"];
	$barang = $_POST["barang_id"];
	$qty = $_POST["qty"];
	$sql = "UPDATE penjualan_barang set qty = '".$qty."' where Penjualan_id = '".$id."' and Barang_id = '".$barang."'";
	$result = mysqli_query($link,$sql);
	if($result){
		$sqlBarang = "UPDATE `barang` set quantity = (quantity - ".$qty.") WHERE id = '".$barang."'";
		$resultBarang = mysqli_query($link,$sqlBarang);
		if($resultBarang){
		} 
		else{
			echo "gagal";
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "updatepembelianbarang":
	require 'db.php';
	$id = $_POST["noNota"];
	$barang = $_POST["barang_id"];
	$qty = $_POST["qty"];
	$sql = "UPDATE pembelian_barang set qty = '".$qty."' where Pembelian_id = '".$id."' and Barang_id = '".$barang."'";
	$result = mysqli_query($link,$sql);
	if($result){
		$sqlBarang = "UPDATE `barang` set quantity = (quantity + ".$qty.") WHERE id = '".$barang."'";
		$resultBarang = mysqli_query($link,$sqlBarang);
		if($resultBarang){
		} 
		else{
			echo "gagal";
		}
	}
	else{
		echo "gagal";
	}
	break;

	case "updatepembelian":
	require 'db.php';
	$id = $_POST["noNota"];
	$kirim = $_POST["kirim"];
	$sql = "UPDATE pembelian set status_kirim = '".$kirim."' where id = '".$id."'";
	$result = mysqli_query($link,$sql);
	if($result){
	}
	else{
		echo "gagal";
	}
	break;

	case "ambiltanggalproduksi":
	require 'db.php';
	$sql = "SELECT max(id) as id FROM `produksi`";
	$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_object($result)){
		$data["id"] = $row->id;
	}
	echo json_encode($data);
	break;

	case "insertproduksibahan":
	require 'db.php';
	$produksi_id = $_POST["produksi_id"];
	$barang_id = $_POST["barang_id"];
	$qty = $_POST["qty"];
	$jumlah = $_POST["jumlah"];
	$total = $jumlah - $qty;
	$sql = "INSERT INTO `produksi_barang`(`Produksi_id`,`Barang_id`,`qty`) VALUES('".$produksi_id."','".$barang_id."','".$qty."')";
	$result = mysqli_query($link,$sql);
	if($result){
		$sqlUbah = "UPDATE `barang` SET `quantity` = '".$total."' WHERE `barang`.`id` = '".$barang_id."';";
		$resultUbah = mysqli_query($link,$sqlUbah);
		if(!$resultUbah){
			echo "gagal";
		}
	}
	break;

	case "insertproduksibarang":
	require 'db.php';
	$produksi_id = $_POST["produksi_id"];
	$barang_id = $_POST["barang_id"];
	$qty = $_POST["qty"];
	$jumlah = $_POST["jumlah"];
	$total = $jumlah + $qty;
	$sql = "INSERT INTO `produksi_barang`(`Produksi_id`,`Barang_id`,`qty`) VALUES('".$produksi_id."','".$barang_id."','".$qty."')";
	$result = mysqli_query($link,$sql);
	if($result){
		$sqlUbah = "UPDATE `barang` SET `quantity` = '".$total."' WHERE `barang`.`id` = '".$barang_id."';";
		$resultUbah = mysqli_query($link,$sqlUbah);
		if(!$resultUbah){
			echo "gagal";
		}
	}
	break;

	case "insertproduksibarangbaru":
	require 'db.php';
	$produksi_id = $_POST["produksi_id"];
	$barang_id = $_POST["barang_id"];
	$nama = $_POST["nama"];
	$qty = $_POST["qty"];
	$pjg = $_POST["pjg"];
	$kategori_id = $_POST["kategori_id"];
	$sql = "INSERT INTO `barang`(`id`,`nama`,`quantity`,`satuan`,`keterangan`,`Kategori_id`) VALUES('".$barang_id."','".$nama."','".$qty."','pcs','".$pjg."',".$kategori_id.")";
	//$sql = "INSERT INTO `produksi_barang`(`Produksi_id`,`Barang_id`,`qty`) VALUES('".$produksi_id."','".$barang_id."','".$qty."')";
	$result = mysqli_query($link,$sql);
	if($result){
		$sqlProduksi = "INSERT INTO `produksi_barang`(`Produksi_id`,`Barang_id`,`qty`) VALUES('".$produksi_id."','".$barang_id."','".$qty."')";
		$resultProduksi = mysqli_query($link,$sqlProduksi);
		if(!$resultProduksi){
			echo "gagal";
		}
	}
	break;
}

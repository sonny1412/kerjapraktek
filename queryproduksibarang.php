<?php	
	require 'db.php';
	$produksi_id = $_POST["produksi_id"];
	$barang_id = $_POST["barang_id"];
	$qty = $_POST["qty"];
	$sql = "INSERT INTO `produksi_barang`(`Produksi_id`,`Barang_id`,`qty`) VALUES('".$produksi_id."','".$barang_id."','".$qty."')";
	$result = mysqli_query($link,$sql);
	if($result){}
	else{
		echo "gagal";
	}
	$sqlBarang = "SELECT b.id,b.quantity,k.jenis FROM barang b, kategori k where b.Kategori_id=k.id";
	$resultBarang = mysqli_query($link,$sqlBarang);
	$row = mysqli_fetch_object($resultBarang);
	
		$akhir = $row->quantity + $qty;
		$sqlUbah = "UPDATE `barang` SET `quantity` = '".$akhir."' WHERE `barang`.`id` = '".$barang_id."';";
	
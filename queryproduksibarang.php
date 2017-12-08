<?php	
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
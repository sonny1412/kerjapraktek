<?php	
	require 'db.php';
	$produksi_id = $_POST["produksi_id"];
	$karyawan_id = $_POST["karyawan_id"];
	$sql = "INSERT INTO `produksi_karyawan`(`Produksi_id`,`Karyawan_id`) VALUES('".$produksi_id."','".$karyawan_id."')";
	$result = mysqli_query($link,$sql);
	if($result){}
	else{
		echo "gagal";
	}

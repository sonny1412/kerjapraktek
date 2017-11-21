<?php	
	date_default_timezone_set('Asia/Jakarta');
	require 'db.php';
	$tanggal = date_create('now')->format('Y-m-d H:i:s');
	$sql = "INSERT INTO `produksi`(`tanggal`) VALUES('".$tanggal."')";
	$result = mysqli_query($link,$sql);
	if($result){}
	else{
		echo "gagal";
	}

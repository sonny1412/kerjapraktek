<?php	
	require 'db.php';
	$sql = "SELECT max(id) as id FROM `produksi`";
	$result = mysqli_query($link,$sql);
	while($row = mysqli_fetch_object($result)){
		$data["id"] = $row->id;
	}
	echo json_encode($data);

?>
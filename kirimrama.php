<?php
	require "db.php";
	$arrayIdBahan = array();
	$arrayNamaBahan = array();
	$arrayJumlahBahan = array();
	$arrayQTYBahan = array();
	$arrayIdBarang = array();
	$arrayNamaBarang = array();
	$arrayJumlahBarang = array();
	$arrayQTYBarang = array();
	if(isset($_POST['idBahan']) &&isset($_POST['namaBahan'])&&isset($_POST['jumlahBahan'])&&isset($_POST['qtyBahan'])){
		$arrayIdBahan=unserialize($_POST['idBahan']);
		$arrayNamaBahan=unserialize($_POST['namaBahan']);
		$arrayJumlahBahan=unserialize($_POST['jumlahBahan']);
		$arrayQTYBahan=unserialize($_POST['qtyBahan']);
	}
	if(isset($_POST['idBarang']) &&isset($_POST['namaBarang'])&&isset($_POST['jumlahBarang'])&&isset($_POST['qtyBarang'])){
		$arrayIdBarang=unserialize($_POST['idBarang']);
		$arrayNamaBarang=unserialize($_POST['namaBarang']);
		$arrayJumlahBarang=unserialize($_POST['jumlahBarang']);
		$arrayQTYBarang=unserialize($_POST['qtyBarang']);
	}
	if(isset($_POST['nBahan'])&&isset($_POST['jBahan'])&&$_POST['jBahan']!=""){
		$bahan = explode('|', $_POST['nBahan']);
		array_push($arrayIdBahan, $bahan[0]);
		array_push($arrayNamaBahan, $bahan[1]);
		array_push($arrayJumlahBahan, $bahan[2]);
		array_push($arrayQTYBahan, $_POST['jBahan']);
	}
	if(isset($_POST['nBarang'])&&isset($_POST['jBarang'])&&$_POST['jBarang']!=""){
		$bahan = explode('|', $_POST['nBarang']);
		array_push($arrayIdBarang, $bahan[0]);
		array_push($arrayNamaBarang, $bahan[1]);
		array_push($arrayJumlahBarang, $bahan[2]);
		array_push($arrayQTYBarang, $_POST['jBarang']);
	}
	//print_r($arrayIdBahan);
    $sqlBahan = "SELECT b.id,b.nama,b.keterangan,b.quantity,k.jenis FROM barang b,kategori k WHERE b.Kategori_id = k.id and k.jenis = 'Bahan Produksi'";
    $sqlBarang = "SELECT b.id,b.nama,b.keterangan,b.quantity,k.jenis FROM barang b,kategori k WHERE b.Kategori_id = k.id and k.jenis = 'Barang Jadi'";
    $sqlKaryawan = "SELECT * FROM `karyawan`b where jabatan ='Penjahit'";
    $resultBahan = mysqli_query($link,$sqlBahan);
    $resultBarang = mysqli_query($link,$sqlBarang);
    $resultKaryawan = mysqli_query($link,$sqlKaryawan);
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<form action='#' method='POST'>
	Nama Barang : <select name='nBahan'>
		<?php while($rowBahan=mysqli_fetch_object($resultBahan)){
                        echo "<option value='".$rowBahan->id."|".$rowBahan->nama."|".$rowBahan->quantity."|".$rowBahan->jenis."'>".$rowBahan->nama."</option>";
                        }?>
                    </select>
	</select>
	Jumlah : <input type='number' name='jBahan'>
	<input type='submit'>
	<input type='hidden' value='<?php echo serialize($arrayIdBahan)?>' name='idBahan'>
	<input type='hidden' value='<?php echo serialize($arrayNamaBahan)?>' name='namaBahan'>
	<input type='hidden' value='<?php echo serialize($arrayJumlahBahan)?>' name='jumlahBahan'>
	<input type='hidden' value='<?php echo serialize($arrayQTYBahan)?>' name='qtyBahan'>
	<input type='hidden' value='<?php echo serialize($arrayIdBarang)?>' name='idBarang'>
	<input type='hidden' value='<?php echo serialize($arrayNamaBarang)?>' name='namaBarang'>
	<input type='hidden' value='<?php echo serialize($arrayJumlahBarang)?>' name='jumlahBarang'>
	<input type='hidden' value='<?php echo serialize($arrayQTYBarang)?>' name='qtyBarang'>
</form>
	
<table width="90%" border='1px' style="margin-left: :5%">
  	<tr>
    	<th>Nama</th><th>Jenis</th><th>Jumlah</th>
    </tr>
    <?php
    	for($i=0;$i<count($arrayIdBahan);$i++){
    		echo "<tr>";
    		echo "<th>(".$arrayIdBahan[$i].") ".$arrayNamaBahan[$i]."</th><th>".$arrayJumlahBahan[$i]."</th><th>".$arrayQTYBahan[$i]."</th>";
    		echo "</tr>";
    	}
    ?>
</table>
<form action='#' method='POST'>
	Nama Barang : <select name='nBarang'>
		<?php while($rowBarang=mysqli_fetch_object($resultBarang)){
                        echo "<option value='".$rowBarang->id."|".$rowBarang->nama."|".$rowBarang->quantity."|".$rowBarang->jenis."'>".$rowBarang->nama."</option>";
                        }?>
                    </select>
	Jumlah : <input type='number' name='jBarang'>
	<input type='submit'>
	<input type='hidden' value='<?php echo serialize($arrayIdBahan)?>' name='idBahan'>
	<input type='hidden' value='<?php echo serialize($arrayNamaBahan)?>' name='namaBahan'>
	<input type='hidden' value='<?php echo serialize($arrayJumlahBahan)?>' name='jumlahBahan'>
	<input type='hidden' value='<?php echo serialize($arrayQTYBahan)?>' name='qtyBahan'>
	<input type='hidden' value='<?php echo serialize($arrayIdBarang)?>' name='idBarang'>
	<input type='hidden' value='<?php echo serialize($arrayNamaBarang)?>' name='namaBarang'>
	<input type='hidden' value='<?php echo serialize($arrayJumlahBarang)?>' name='jumlahBarang'>
	<input type='hidden' value='<?php echo serialize($arrayQTYBarang)?>' name='qtyBarang'>
</form>
	
<table width="90%" border='1px' style="margin-left: :5%">
  	<tr>
    	<th>Nama</th><th>Jenis</th><th>Jumlah</th>
    </tr>
    <?php
    	for($i=0;$i<count($arrayIdBarang);$i++){
    		echo "<tr>";
    		echo "<th>(".$arrayIdBarang[$i].") ".$arrayNamaBarang[$i]."</th><th>".$arrayJumlahBarang[$i]."</th><th>".$arrayQTYBarang[$i]."</th>";
    		echo "</tr>";
    	}
    ?>
</table>

    <input type="button" id="insert" value="Insert" style="margin-left: 50%;">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	(function($){
  $(document).ready(function() {
      $("#insert").click(function() {
      	var jIdBahan = <?php echo json_encode($arrayIdBahan); ?>;
      	var jNamaBahan = <?php echo json_encode($arrayNamaBahan); ?>;
      	var jJumlahBahan = <?php echo json_encode($arrayJumlahBahan); ?>;
      	var jQtyBahan = <?php echo json_encode($arrayQTYBahan); ?>;
      	var jIdBarang = <?php echo json_encode($arrayIdBarang); ?>;
      	var jNamaBarang = <?php echo json_encode($arrayNamaBarang); ?>;
      	var jJumlahBarang = <?php echo json_encode($arrayJumlahBarang); ?>;
      	var jQtyBarang = <?php echo json_encode($arrayQTYBarang); ?>;
        $.ajax({
              type: "POST",
              url: "queryproduksi.php",
              data: 'tanggal=' + Date.now(),
              success: function(result) {
                $.ajax({ 
                    type: "POST",
                    url: "queryambiltanggal.php",
                    cache: false, 
                    dataType :"JSON",                         
                    success: function(data){
                     	var raw_result=JSON.stringify(data.id);
                        produksi_barang(data.id);
                    }});
            window.location = "gudangbahan.php";
        }});
        function produksi_barang(smth) {        
         	for( i = 0 ;i < jIdBahan.length ; i++){
	            $.ajax({
	                type: "POST",
	                url: "queryproduksibahan.php",
	                data: 'produksi_id=' + smth+ '&barang_id=' + jIdBahan[i]+ '&qty=' + jQtyBahan[i]+ '&jumlah=' + jJumlahBahan[i],
	                success: function(result) {
	                	alert("Sukses Bahan");
	                }
	            });
         	}
         	for( i = 0 ;i < jIdBarang.length ; i++){
	            $.ajax({
	                type: "POST",
	                url: "queryproduksibarang.php",
	                data: 'produksi_id=' + smth+ '&barang_id=' + jIdBarang[i]+ '&qty=' + jQtyBarang[i]+ '&jumlah=' + jJumlahBarang[i],
	                success: function(result) {
	                	alert("Sukses Barang");
	                }
	            });
         	}
    	}
      });
    });
})(jQuery);
</script>
<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kerjapraktek";

    $koneksi = new mysqli($servername, $username, $password, $dbname);
    require 'db.php';

		if($_POST['rowid']) {
        $id = $_POST['rowid'];
        // mengambil data berdasarkan id
        $sql = "SELECT * FROM barang WHERE id = $id";
        $result = $koneksi->query($sql);
        $sqlKategori = "select * from Kategori where jenis='Barang Jadi';";
        $resultKategori = mysqli_query($link,$sqlKategori);
        foreach ($result as $baris) { ?>
            <form action="manage.php?act=ubahbarang" method="post">
            <input type="hidden" name="id" value="<?php echo $baris['id']; ?>">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $baris['nama']; ?>">
            </div>
            <div class="form-group">
                <label>Kuantitas</label>
                <input type="text" class="form-control" name="kuantitas_barang" value="<?php echo $baris['quantity']; ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" placeholder="Panjang" class="form-control" name="keterangan_barang" value="<?php echo $baris['keterangan']; ?>">
            </div>
            <div class="form-group">
	            <label>Kategori</label>
	            <select name="kategori_barang" class="form-control">
		        	<?php while($rowKategori=mysqli_fetch_object($resultKategori)){
                        echo "<option value='".$rowKategori->id."'>".$rowKategori->nama."</option>";
                        }?>
	        	</select>
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
        <?php 
 
        }
    }
    $koneksi->close();
?>
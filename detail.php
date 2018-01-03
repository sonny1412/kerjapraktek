<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kerjapraktek";

    $koneksi = new mysqli($servername, $username, $password, $dbname);

		if($_POST['rowid']) {
        $id = $_POST['rowid'];
        // mengambil data berdasarkan id
        $sql = "SELECT * FROM karyawan WHERE id = $id";
        $result = $koneksi->query($sql);
        foreach ($result as $baris) { ?>
            <form action="manage.php?act=ubahkaryawan" method="post">
            <input type="hidden" name="id" value="<?php echo $baris['id']; ?>">
            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $baris['nama']; ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat_karyawan" value="<?php echo $baris['alamat']; ?>">
            </div>
            <div class="form-group">
                <label>Kontak</label>
                <input type="text" class="form-control" name="kontak_karyawan" value="<?php echo $baris['telp']; ?>">
            </div>
            <div class="form-group">
	            <label>Jabatan</label>
	            <select name="jabatan_karyawan" class="form-control">
		        	<option value="Penjualan">Penjualan</option>
		            <option value="Pembelian">Pembelian</option>
		            <option value="Gudang">Gudang</option>
	        	</select>
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="text" class="form-control" name="status_karyawan" value="<?php echo $baris['status']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
        <?php 
 
        }
    }
    $koneksi->close();
?>
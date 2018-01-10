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
        $sql = "SELECT * FROM customer WHERE id = $id";
        $result = $koneksi->query($sql);
        foreach ($result as $baris) { ?>
            <form action="manage.php?act=ubahcustomer" method="post">
            <input type="hidden" name="id" value="<?php echo $baris['id']; ?>">
            <div class="form-group">
                <label>Nama Supplier</label>
                <input type="text" class="form-control" name="nama_customer" value="<?php echo $baris['nama']; ?>">
            </div>
            <div class="form-group">
                <label>Kontak</label>
                <input type="text" class="form-control" name="kontak_customer" value="<?php echo $baris['telepon']; ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text"  class="form-control" name="alamat_customer" value="<?php echo $baris['alamat']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
        <?php 
 
        }
    }
    $koneksi->close();
?>
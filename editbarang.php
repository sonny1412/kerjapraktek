<?php 
        require 'db.php';
        $var = $_GET['var'];
        $sql = "select * from barang where id=".$var;
        $sqlKategori = "select * from kategori where jenis='Barang Jadi';";
        $resultKategori = mysqli_query($link,$sqlKategori);
        $result = mysqli_query($link, $sql);
        if(!$result) {
            die("SQL Error: ".$sql);
        }
        else{
          $row = mysqli_fetch_object($result);
        }
?>
<form action="manage.php?act=ubahbarang" method="POST" style="margin-left: 5%;" >
            Nama : <input type="text" name="nama" value="<?php echo $row->nama;?>"><br/>
            Kuantitas : <input type="number" name="kuantitas" value="<?php echo $row->quantity;?>"><br/>
            Kategori : <select name="kategori" >
  				            <?php while($rowLol = mysqli_fetch_object($resultKategori)){
                      echo "<option value='".$rowLol->id."'>".$rowLol->nama."</option>";
                    
                }
                ?>
			             </select></br>
            Ukuran : <input type="text" name="keterangan" value="<?php echo $row->keterangan;?>">
                    <input type="hidden" name="id" value="<?php echo $var?>">
            <input type="submit" value="Update" style="margin-left: 50%;">
</form>
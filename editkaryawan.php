<?php 
        require 'db.php';
        $var = $_GET['var'];
        $sql = "select * from karyawan where idKaryawan=".$var;
        $result = mysqli_query($link, $sql);
        if(!$result) {
            die("SQL Error: ".$sql);
        }
        else{
          $row = mysqli_fetch_object($result);
        }
        
?>
<form action="manage.php?act=ubahkaryawan" method="POST" style="margin-left: 5%;" >
            Nama : <input type="text" name="nama" value="<?php echo $row->nama;?>"><br/>
            Alamat : <input type="text" name="alamat" value="<?php echo $row->alamat;?>"><br/>
            Telepon : <input type="text" name="telepon" value="<?php echo $row->telp;?>"><br/>
            Jabatan : <select name="jabatan" >
  				            <option value="Penjualan">Penjualan</option>
  				            <option value="Pembelian">Pembelian</option>
  				            <option value="Gudang">Gudang</option>
			             </select></br>
           Status : <select name"status">
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                    </select>
                    <input type="hidden" name="id" value="<?php echo $var?>">
            <input type="submit" value="Update" style="margin-left: 50%;">
</form>
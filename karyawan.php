<html>
    <head>
        
    </head>
    
    <body>
      <p style="text-align:center; font-size: 300%">Selamat Datang, Admin</p>
        <div>
            <table>
                <tr>
                    <a href="adminhome.php">  
                    <p>Home</p>
                    </a>
                    <a href="karyawan.php">  
                    <p>Karyawan</p>
                    </a>
                    <a href="user.php">  
                    <p>Akun</p>
                    </a>
                </tr>
            </table>
      </div></br>
<?php 
        require 'db.php';
        $sql = "select * from karyawan";
        
        $result = mysqli_query($link, $sql);
        if(!$result) {
            die("SQL Error: ".$sql);
        }
         
?>
<form action="manage.php?act=insertkaryawan" method="POST" style="margin-left: 5%;" >
            Nama : <input type="text" name="nama"><br/>
            Alamat : <input type="text" name="alamat"><br/>
            Telepon : <input type="text" name="telepon"><br/>
            Jabatan : <select name="jabatan">
  				<option value="Penjualan">Penjualan</option>
  				<option value="Pembelian">Pembelian</option>
  				<option value="Gudang">Gudang</option>
			</select>
            <input type="submit" value="Insert" style="margin-left: 50%;">
</form> 
<table width='90%' border='1px' style=" margin-left: 5%">
        <tr>
            <th>Nama</th><th>Alamat</th><th>Telepon</th><th>Jabatan</th><th>HAPUS/EDIT</th>
        </tr>
        <?php
        while($row = mysqli_fetch_object($result)) {
            echo "<tr>";
            echo "<td>".$row->nama."</td><td>".$row->alamat."</td><td>".$row->telp."</td><td>".$row->jabatan."</td><td>"
                    ."<a href=editkaryawan.php?var=".$row->id."><img src='pencil2.png' style='margin-left:20%;'></a>";

            echo "</tr>";
             } ?>
    </table>
        </body>
</html>

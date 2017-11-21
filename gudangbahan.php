
<html>
    <head>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="js/jquery.js"></script>  
    </head>
    
    <body>
      <p style="text-align:center; font-size: 300%">Selamat Datang, Admin</p>
        <div>
            <table>
                <tr>
                    <a href="adminhome.php">  
                    <p>Home</p>
                    </a>
                    <a href="gudangbarang.php">  
                    <p>Gudang Barang</p>
                    </a>
                    <a href="gudangbahan.php">  
                    <p>Gudang bahan</p>
                    </a>
                    <a href="kategorigudang.php">  
                    <p>Kategori</p>
                    </a>
                    <a href="produksi.php">  
                    <p>Produksi</p>
                    </a>
                </tr>
            </table>
      </div></br>

      <?php
        require 'db.php';
        $sql = "SELECT * FROM `barang` where Kategori_id IN(select id from `kategori` where jenis = 'Bahan Produksi')";
        $result = mysqli_query($link,$sql);
        $sqlKategori = "select * from Kategori where jenis='Bahan Produksi';";
        $resultKategori = mysqli_query($link,$sqlKategori);
        if(!$result){
          die("SQL Error :".$sql);
        }
        ?> 
        <form action="manage.php?act=insertbahan" method="POST" style="margin-left: 5%;" >

            Nama : <input type="text" name="nama"><br/>
            Kuantitas : <input type="number" name="kuantitas" style="width: 2%;"> 
            Satuan : <input type="text" name="keterangan" style="width: 2%;"><br/>
            Kategori : <select name="idKategori">
                    <?php while($rowKategori=mysqli_fetch_object($resultKategori)){
                        echo "<option value='".$rowKategori->id."'>".$rowKategori->nama."</option>";

                        }?>
                    </select>
                <input type="hidden" name="hidden" value="bahan">
                <input type="submit" value="Insert" style="margin-left: 50%;">
        </form> 
        <table width='90%' border='1px' style=" margin-left: 5%">
            <tr>
                <th>Nama Barang</th><th>Jenis</th><th>Kuantitas</th><th>Edit</th>
                </tr>
                <?php
                while($row = mysqli_fetch_object($result)) {
                    $sqlLol = "SELECT * FROM `kategori` WHERE id ='".$row->Kategori_id."';";
                    $resultLol = mysqli_query($link,$sqlLol);
                    $rowLol = mysqli_fetch_object($resultLol);
                    echo "<tr>";
                    echo "<td>".$row->nama."</td><td>".$rowLol->nama."</td><td>".$row->quantity." ".$row->keterangan."</td><td>"
                            ."<a href=editbahan.php?var=".$row->id."&var2=bahan><img src='pencil2.png' style='margin-left:20%;'></a>";

                    echo "</tr>";
                     } ?>
    </table>
        
    </body>
</html>


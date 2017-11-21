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
              $sql = "select * from kategori";
              $result = mysqli_query($link,$sql);
              if(!$result){
                die("SQL Error :".$sql);
              }
      ?>
      <form action="manage.php?act=insertkategori" method="POST" style="margin-left: 5%;" >
                  Nama : <input type="text" name="nama"><br/>
                  Jenis : <select name="jenis">
                <option value="Barang Jadi">Barang Jadi</option>
                <option value="Bahan Produksi">Bahan Produksi</option>
            </select>
                  <input type="submit" value="Insert" style="margin-left: 50%;">
      </form> 
      <table width='90%' border='1px' style=" margin-left: 5%">
              <tr>
                  <th>Nama</th><th>Jenis</th><th>Edit</th>
              </tr>
              <?php
              while($row = mysqli_fetch_object($result)) {
                  echo "<tr>";
                  echo "<td>".$row->nama."</td><td>".$row->jenis."</td><td>"
                          ."<a href=editkaryawan.php?var=".$row->id."><img src='pencil2.png' style='margin-left:20%;'></a>";

                  echo "</tr>";
                   } ?>
          </table>
    </body>
</html>

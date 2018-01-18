<html>
<link rel="stylesheet" href="css/stylenota.css">
 <body>
  <?php 
  require 'db.php';
  require 'sql.php';
  $noNota = $_GET['cmd'];
  $resultTampilBarang = KofirmasiPengirimanPenjualan($noNota);
  $resultTampilCustomer = NotaPenjualan($noNota);

  if($rowNota = mysqli_fetch_object($resultTampilCustomer)) {
    $nama_perusahaan = $rowNota->nama;
    $tanggal = $rowNota->tanggal;
    $alamat = $rowNota->alamat;
    $kontak = $rowNota->telepon;
  }

  ?>
  <h1>CV. Cipta Jujur Kreasi</h1>
  <h2> Surat Jalan </h2>
  <div id="header">
  <div id="tuan_toko">
    <table>
      <tr>
        <td id="labelheadernota"> NOTA No. </td>
        <td> <?php echo $noNota ?> </td>
      </tr>
      <tr>
        <td id="labelheadernota"> tanggal: </td>
        <td> <?php echo $tanggal ?> </td>
      </tr>
    </table>

  </div>
  <div id="nomor_nota">
  KEPADA <br>
  <?php echo $nama_perusahaan ?> <br>
  <?php echo $alamat ?> <br>
  <?php echo $kontak ?> <br>
  </div>
  </div>
  <div id="body_nota">
   <table border="1" id="tabelbarang">
      <tr>
          <th> Nama Produk </th>
          <th> Kuantitas </th>
          <th> Satuan </th>
          <th> Keterangan </th>
      </tr>
        <?php 
          while ($rowTampilBarang = mysqli_fetch_object($resultTampilBarang)) {
            echo "<tr>";
                    echo "<td>". $rowTampilBarang->nama . " </td>";
                    echo "<td>". $rowTampilBarang->qty. " </td>";
                    echo "<td> PCS </td>";
                    echo "<td>". $rowTampilBarang->keterangan . "</td>";
            echo "</tr>";
          }
        ?>
  </table>
  <br>
  <br>
  <br>
  <br>
  <div id="tanda_terima">
  Tanda Terima
  <br>
  <br>
  <br>
  (...............)
  </div>
  <div id="hormat_kami">
  Pengirim Barang
  <br>
  <br>
  <br>
  (...............)
  </div>
  </div>
  
 </body>
</html>
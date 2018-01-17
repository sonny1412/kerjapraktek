<html>
<link rel="stylesheet" href="css/stylenota.css">
 <body>
  <?php 
  $noNota = '160414033';
  $tanggal = '21 desember';
  $nama_perusahaan = 'FSK_Bersaudara';
  $alamat = 'Kusuma Bangsa';
  $kontak = '082243883642';
  $nama_barang = 'oli top one';
  $jumlah = 15;

  ?>
  <h1>CV. Cipta Jujur Kreasi</h1>
  <h2> Surat Jalan </h2>
  <div id="header">
  <div id="tuan_toko">
  NOTA No. &nbsp; <?php echo $noNota ?><br>
  tanggal: &nbsp; <?php echo $tanggal?> <br>
  </div>
  <div id="nomor_nota">
  KEPADA <br>
  <?php echo $nama_perusahaan ?> <br>
  <?php echo $alamat ?> <br>
  <?php echo $kontak ?> <br>
  </div>
  </div>
  <div id="body_nota">
   <table border="1">
      <tr>
          <th>  </th>
          <th> Nama Produk </th>
          <th> Kuantitas </th>
          <th> Satuan </th>
          <th> Keterangan </th>
      </tr>
      <tr>
          <td>  </td>
          <td> Selimut Merah </td>
          <td> 750 </td>
          <td> PCS </td>
          <td> kainnya janga dirobek </td>
      </tr>
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
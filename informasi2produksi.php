<?php
    require 'db.php';
    $sqlProduksi = "SELECT * FROM `produksi` order by tanggal DESC";
    $resultProduksi = mysqli_query($link,$sqlProduksi);
?> 
<table width='90%' border='1px' style=" margin-left: 5%">
    <tr>
        <th>Id Produksi</th><th>Bahan Digunakan</th><th>Barang Terproduksi</th>
            </tr>
                <?php
                while($rowProduksi = mysqli_fetch_object($resultProduksi)) {
                    echo "<tr>";
                    echo "<td>".$rowProduksi->id."</td>";
                    echo "<td>";
                    $sqlBahan = "SELECT b.nama , pb.qty , b.keterangan FROM barang b, produksi_barang pb, kategori k WHERE b.id = pb.Barang_id and b.Kategori_id = k.id and pb.Produksi_id = '".$rowProduksi->id."' and k.jenis='Bahan Produksi'";
                    $resultBahan = mysqli_query($link,$sqlBahan);
                    while($rowBahan = mysqli_fetch_object($resultBahan)){
                    	echo $rowBahan->nama." : ".$rowBahan->qty." ".$rowBahan->keterangan;
                    	echo "</br>";
                    }
                    echo "</td>";
                    echo "<td>";
                    $sqlBarang = "SELECT b.nama , pb.qty FROM barang b, produksi_barang pb, kategori k WHERE b.id = pb.Barang_id and b.Kategori_id = k.id and pb.Produksi_id = '".$rowProduksi->id."' and k.jenis='Barang Jadi'";
                    $resultBarang = mysqli_query($link,$sqlBarang);
                    while($rowBarang = mysqli_fetch_object($resultBarang)){
                    	echo $rowBarang->nama." : ".$rowBarang->qty." Buah";
                    	echo "</br>";
                    }
                    echo "</td>";
                    echo "</tr>";
                } ?>
    </table>
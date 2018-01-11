<?php
	function Tunjukan($jabatan){ 
        if($jabatan == "Gudang" || $jabatan == "Pemilik" ||$jabatan == "Pembelian" || $jabatan == "Penjualan")
        {
          echo "<li class=treeview>
            <a href=#>
              <i class='fa fa-dashboard'></i> <span>Barang</span>
              <span class=pull-right-container>
                <i class='fa fa-angle-left pull-right'></i>
              </span>
            </a>
            <ul class=treeview-menu>
              <li><a href=informasibarang.php><i class='fa fa-circle-o'></i> Informasi Barang</a></li>";
        }
        if($jabatan == "Gudang" || $jabatan == "Pemilik"){
          echo "<li><a href=tambahbarang.php><i class='fa fa-circle-o'></i> Tambah Barang</a></li>";
        }
        if($jabatan == "Gudang" || $jabatan == "Pemilik" ||$jabatan == "Pembelian" || $jabatan == "Penjualan"){
            echo "</ul>
          </li>
          
          
          <li class='active treeview'>
            <a href=#>
              <i class='fa fa-edit'></i> <span>Bahan</span>
              <span class=pull-right-container>
                <i class='fa fa-angle-left pull-right'></i>
              </span>
            </a>
            <ul class=treeview-menu>
              <li class=active><a href=informasibahan.php><i class='fa fa-circle-o'></i> Informasi Bahan</a></li>";
        }
        if($jabatan == "Gudang" || $jabatan == "Pemilik"){
          echo "<li><a href=tambahbahan.php><i class='fa fa-circle-o'></i> Tambah Bahan</a></li>";
        }
        if($jabatan == "Gudang" || $jabatan == "Pemilik" ||$jabatan == "Pembelian" || $jabatan == "Penjualan"){
          echo "</ul>
          </li>";
        if($jabatan == "Gudang" || $jabatan == "Pemilik"){
          echo "<li class=treeview>
          <a href=#>
            <i class='fa fa-table'></i> <span>Produksi</span>
            <span class=pull-right-container>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class=treeview-menu>
            <li><a href=informasiproduksi.php><i class='fa fa-circle-o'></i> Informasi Produksi</a></li>
            <li><a href=tambahproduksi.php><i class='fa fa-circle-o'></i> Tambah Produksi</a></li>
          </ul>
        </li>";
        }
        if($jabatan == "Pemilik"){
          echo "<li class=treeview>
            <a href=#>
              <i class='glyphicon glyphicon-user'></i> <span>Karyawan</span>
              <span class='pull-right-container'>
                <i class='fa fa-angle-left pull-right'></i>
              </span>
            </a>
            <ul class=treeview-menu>
              <li><a href=informasikaryawan.php><i class='fa fa-circle-o'></i> Informasi karyawan</a></li>
              <li> <a href=tambahkaryawan.php><i class='fa fa-circle-o'></i> Tambah Karyawan</a></li>
              <li> <a href=tambahakun.php><i class='fa fa-circle-o'></i> Tambah Akun </a></li>
            </ul>
          </li>";
        }
        if($jabatan == "Pembelian" || $jabatan == "Pemilik"){
          echo "<li class=treeview>
          <a href=#>
            <i class='fa fa-dashboard'></i> <span>Pembelian</span>
            <span class=pull-right-container>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class=treeview-menu>
            <li><a href=informasisuplier.php><i class='fa fa-circle-o'></i> Informasi Supplier</a></li>
            <li><a href=tambahsupplier.php><i class='fa fa-circle-o'></i> Tambah Supplier</a></li>
            <li><a href=tambahpembelian.php><i class='fa fa-circle-o'></i> Tambah Pembelian</a></li>
            <li><a href=statuspembelian.php><i class='fa fa-circle-o'></i> Status Pembelian</a></li>
          </ul>
          </li>";
        }
        if($jabatan == "Penjualan" || $jabatan == "Pemilik"){
          echo "<li class=treeview>
          <a href=#>
            <i class='fa fa-dashboard'></i> <span>Penjualan</span>
            <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>
          </a>
          <ul class=treeview-menu>
            <li><a href=informasicustomer.php><i class='fa fa-circle-o'></i> Informasi Customer</a></li>
            <li><a href=tambahcustomer.php><i class='fa fa-circle-o'></i> Tambah Customer</a></li>
            <li><a href=tambahpenjualan.php><i class='fa fa-circle-o'></i> Tambah Penjualan</a></li>
            <li><a href=statuspenjualan.php><i class='fa fa-circle-o'></i> Status Penjualan</a></li>
          </ul>
        </li>";
        }
    }
}
        ?>
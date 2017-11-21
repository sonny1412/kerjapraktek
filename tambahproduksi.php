<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Barang | Informasi Barang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs">Sonny</span>
            </a>
            <ul class="dropdown-menu">    
              <!-- Menu Sign Out-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="login.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="informasibarang.php"><i class="fa fa-circle-o"></i> Informasi Barang</a></li>
            <li><a href="tambahbarang.php"><i class="fa fa-circle-o"></i> Tambah Barang</a></li>
          </ul>
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Bahan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="informasibahan.php"><i class="fa fa-circle-o"></i> Informasi Bahan</a></li>
            <li><a href="tambahbahan.php"><i class="fa fa-circle-o"></i> Tambah Bahan</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Produksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="informasiproduksi.php"><i class="fa fa-circle-o"></i> Informasi Produksi</a></li>
            <li class="active"><a href="tambahproduksi.php"><i class="fa fa-circle-o"></i> Tambah Produksi</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Karyawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="informasikaryawan.php"><i class="fa fa-circle-o"></i> Informasi karyawan</a></li>
            <li> <a href="tambahkaryawan.php"><i class="fa fa-circle-o"></i> Tambah Karyawan</a></li>
            <li> <a href="tambahakun.php"><i class="fa fa-circle-o"></i> Tambah Akun </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pembelian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="laporanpembelian.php"><i class="fa fa-circle-o"></i> Laporan Pembelian</a></li>
            <li><a href="tambahpembelian.php"><i class="fa fa-circle-o"></i> Tambah Pembelian</a></li>
            <li><a href="statuspembelian.php"><i class="fa fa-circle-o"></i> Status Pembelian</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="laporanpenjualan.php"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
            <li><a href="tambahpenjualan.php"><i class="fa fa-circle-o"></i> Tambah Penjualan</a></li>
          </ul>
        </li>
      
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Produksi Barang
      </h1>
    </section>
    <?php
  require "db.php";
  $arrayIdBahan = array();
  $arrayNamaBahan = array();
  $arrayJumlahBahan = array();
  $arrayQTYBahan = array();
  $arrayIdBarang = array();
  $arrayNamaBarang = array();
  $arrayJumlahBarang = array();
  $arrayQTYBarang = array();
  if(isset($_POST['idBahan']) &&isset($_POST['namaBahan'])&&isset($_POST['jumlahBahan'])&&isset($_POST['qtyBahan'])){
    $arrayIdBahan=unserialize($_POST['idBahan']);
    $arrayNamaBahan=unserialize($_POST['namaBahan']);
    $arrayJumlahBahan=unserialize($_POST['jumlahBahan']);
    $arrayQTYBahan=unserialize($_POST['qtyBahan']);
  }
  if(isset($_POST['idBarang']) &&isset($_POST['namaBarang'])&&isset($_POST['jumlahBarang'])&&isset($_POST['qtyBarang'])){
    $arrayIdBarang=unserialize($_POST['idBarang']);
    $arrayNamaBarang=unserialize($_POST['namaBarang']);
    $arrayJumlahBarang=unserialize($_POST['jumlahBarang']);
    $arrayQTYBarang=unserialize($_POST['qtyBarang']);
  }
  if(isset($_POST['nBahan'])&&isset($_POST['jBahan'])&&$_POST['jBahan']!=""){
    $bahan = explode('|', $_POST['nBahan']);
    array_push($arrayIdBahan, $bahan[0]);
    array_push($arrayNamaBahan, $bahan[1]);
    array_push($arrayJumlahBahan, $bahan[2]);
    array_push($arrayQTYBahan, $_POST['jBahan']);
  }
  if(isset($_POST['nBarang'])&&isset($_POST['jBarang'])&&$_POST['jBarang']!=""){
    $bahan = explode('|', $_POST['nBarang']);
    array_push($arrayIdBarang, $bahan[0]);
    array_push($arrayNamaBarang, $bahan[1]);
    array_push($arrayJumlahBarang, $bahan[2]);
    array_push($arrayQTYBarang, $_POST['jBarang']);
  }
  //print_r($arrayIdBahan);
    $sqlBahan = "SELECT b.id,b.nama,b.keterangan,b.quantity,k.jenis FROM barang b,kategori k WHERE b.Kategori_id = k.id and k.jenis = 'Bahan Produksi'";
    $sqlBarang = "SELECT b.id,b.nama,b.keterangan,b.quantity,k.jenis FROM barang b,kategori k WHERE b.Kategori_id = k.id and k.jenis = 'Barang Jadi'";
    $sqlKaryawan = "SELECT * FROM `karyawan`b where jabatan ='Penjahit'";
    $resultBahan = mysqli_query($link,$sqlBahan);
    $resultBarang = mysqli_query($link,$sqlBarang);
    $resultKaryawan = mysqli_query($link,$sqlKaryawan);
?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- BOX INPUT BAHAN -->
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <fieldset>
                <legend> Input Bahan Digunakan</legend>
                <form action='#' method='POST'>
                  <div class="form-group">
                  <label for="inputNamaBahan" class="col-sm-2 control-label">Nama Bahan</label>
                  <div class="col-sm-10">
                    <select name='nBahan' class="form-control" style="width: 30%">
                      <?php 
                        while($rowBahan=mysqli_fetch_object($resultBahan)){
                          echo "<option value='".$rowBahan->id."|".$rowBahan->nama."|".$rowBahan->quantity."|".$rowBahan->jenis."'>".$rowBahan->nama."
                              </option>";
                              }?>
                    </select>
                  </div>
                  <br>
                </div>
                <div class="form-group">
                  <label for="inputNamaBahan" class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type='number' name='jBahan' class="form-control" style="width: 30%">
                  </div>
                  <br>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type='submit'>
                    <input type='hidden' value='<?php echo serialize($arrayIdBahan)?>' name='idBahan'>
                    <input type='hidden' value='<?php echo serialize($arrayNamaBahan)?>' name='namaBahan'>
                    <input type='hidden' value='<?php echo serialize($arrayJumlahBahan)?>' name='jumlahBahan'>
                    <input type='hidden' value='<?php echo serialize($arrayQTYBahan)?>' name='qtyBahan'>
                    <input type='hidden' value='<?php echo serialize($arrayIdBarang)?>' name='idBarang'>
                    <input type='hidden' value='<?php echo serialize($arrayNamaBarang)?>' name='namaBarang'>
                    <input type='hidden' value='<?php echo serialize($arrayJumlahBarang)?>' name='jumlahBarang'>
                    <input type='hidden' value='<?php echo serialize($arrayQTYBarang)?>' name='qtyBarang'>
                  </div>
                  <br>
                </div>
                
              </form>
              </fieldset>
              
              <table id="example2" class="table table-bordered table-hover">
                <tr>
                  <th>Nama</th>
                  <th>Jenis</th>
                  <th>Jumlah</th>
                </tr>
                <?php
                  for($i=0;$i<count($arrayIdBahan);$i++){
                    echo "<tr>";
                    echo "<th>(".$arrayIdBahan[$i].") ".$arrayNamaBahan[$i]."</th><th>".$arrayJumlahBahan[$i]."</th><th>".$arrayQTYBahan[$i]."</th>";
                    echo "</tr>";
                  }
                ?>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- BOX INPUT BARANG -->
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <fieldset>
                <legend> Input Barang Hasil Produksi</legend>
                <form action='#' method='POST'>
                <div class="form-group">
                  <label for="inputNamaBahan" class="col-sm-2 control-label">Nama Bahan</label>
                  <div class="col-sm-10">
                    <select name='nBarang' class="form-control" style="width: 30%">
                      <?php 
                        while($rowBarang=mysqli_fetch_object($resultBarang)){
                        echo "<option value='".$rowBarang->id."|".$rowBarang->nama."|".$rowBarang->quantity."|".$rowBarang->jenis."'>".$rowBarang->nama."</option>";
                        }?>
                    </select>
                  </div>
                  <br>
                </div>
                <div class="form-group">
                  <label for="inputNamaBarang" class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type='number' name='jBarang' class="form-control" style="width: 30%">
                  </div>
                  <br>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type='submit'>
                    <input type='hidden' value='<?php echo serialize($arrayIdBahan)?>' name='idBahan'>
                    <input type='hidden' value='<?php echo serialize($arrayNamaBahan)?>' name='namaBahan'>
                    <input type='hidden' value='<?php echo serialize($arrayJumlahBahan)?>' name='jumlahBahan'>
                    <input type='hidden' value='<?php echo serialize($arrayQTYBahan)?>' name='qtyBahan'>
                    <input type='hidden' value='<?php echo serialize($arrayIdBarang)?>' name='idBarang'>
                    <input type='hidden' value='<?php echo serialize($arrayNamaBarang)?>' name='namaBarang'>
                    <input type='hidden' value='<?php echo serialize($arrayJumlahBarang)?>' name='jumlahBarang'>
                    <input type='hidden' value='<?php echo serialize($arrayQTYBarang)?>' name='qtyBarang'>
                  </div>
                  <br>
                </div>
                    
              </form>
                
              </fieldset>
              
              <table id="example2" class="table table-bordered table-hover">
                <tr>
                  <th>Nama</th>
                  <th>Jenis</th>
                  <th>Jumlah</th>
                </tr>
                <?php
                  for($i=0;$i<count($arrayIdBarang);$i++){
                    echo "<tr>";
                    echo "<th>(".$arrayIdBarang[$i].") ".$arrayNamaBarang[$i]."</th><th>".$arrayJumlahBarang[$i]."</th><th>".$arrayQTYBarang[$i]."</th>";
                    echo "</tr>";
                  }
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- BOX INSERT BUTTON -->
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <input type="button" id="insert" value="Insert" style="width: 100%">
            </div>
            <!-- /.box-body -->
          </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- jquery untuk produksi -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<!-- page script -->
<!-- script untuk produksi -->
<script>
  (function($){
  $(document).ready(function() {
      $("#insert").click(function() {
        var jIdBahan = <?php echo json_encode($arrayIdBahan); ?>;
        var jNamaBahan = <?php echo json_encode($arrayNamaBahan); ?>;
        var jJumlahBahan = <?php echo json_encode($arrayJumlahBahan); ?>;
        var jQtyBahan = <?php echo json_encode($arrayQTYBahan); ?>;
        var jIdBarang = <?php echo json_encode($arrayIdBarang); ?>;
        var jNamaBarang = <?php echo json_encode($arrayNamaBarang); ?>;
        var jJumlahBarang = <?php echo json_encode($arrayJumlahBarang); ?>;
        var jQtyBarang = <?php echo json_encode($arrayQTYBarang); ?>;
        $.ajax({
              type: "POST",
              url: "queryproduksi.php",
              data: 'tanggal=' + Date.now(),
              success: function(result) {
                $.ajax({ 
                    type: "POST",
                    url: "queryambiltanggal.php",
                    cache: false, 
                    dataType :"JSON",                         
                    success: function(data){
                      var raw_result=JSON.stringify(data.id);
                        produksi_barang(data.id);
                    }});
            window.location = "informasiproduksi.php";
        }});
        function produksi_barang(smth) {        
          for( i = 0 ;i < jIdBahan.length ; i++){
              $.ajax({
                  type: "POST",
                  url: "queryproduksibahan.php",
                  data: 'produksi_id=' + smth+ '&barang_id=' + jIdBahan[i]+ '&qty=' + jQtyBahan[i]+ '&jumlah=' + jJumlahBahan[i],
                  success: function(result) {
                    alert("Sukses Bahan");
                  }
              });
          }
          for( i = 0 ;i < jIdBarang.length ; i++){
              $.ajax({
                  type: "POST",
                  url: "queryproduksibarang.php",
                  data: 'produksi_id=' + smth+ '&barang_id=' + jIdBarang[i]+ '&qty=' + jQtyBarang[i]+ '&jumlah=' + jJumlahBarang[i],
                  success: function(result) {
                    alert("Sukses Barang");
                  }
              });
          }
      }
      });
    });
})(jQuery);
</script>
</body>
</html>
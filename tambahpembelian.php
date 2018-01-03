<!DOCTYPE html>
<html>
<head>
  <?php include 'sql.php'; ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bahan | Tambah Bahan</title>
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
            <li ><a href="tambahbahan.php"><i class="fa fa-circle-o"></i> Tambah Bahan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Produksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="informasigudang.php"><i class="fa fa-circle-o"></i> Informasi Gudang</a></li>
            <li><a href="tambahgudang.php"><i class="fa fa-circle-o"></i> Tambah Gudang</a></li>
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

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pembelian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="tambahsuplier.php"><i class="fa fa-circle-o"></i> Tambah Supplier</a></li>
            <li> <a href="informasisuplier.php"><i class="fa fa-circle-o"></i> Informasi Supplier</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Tambah Pembelian</a></li>
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
        Tambah Bahan
      </h1>
    </section>  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="width: 50%; margin: auto; margin-top: 5%">
            <!-- /.box-header -->
            <fieldset>
              <legend style="text-align: center;">Masukan data Bahan</legend>
              <form class="form-horizontal" action="manage.php?act=insertbahan" method="POST">
              <div class="panel-body">
                <div class="col-sm-6 col-md-6">
                  <div id="formAwal">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nomor Nota<span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <input type="number" name="noNota" class="form-control"  required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label ">Tanggal <span class="asterisk">*</span></label>
                      <div class="col-sm-9">                      
                        <input type="date" name="tanggalNota" class="form-control" value="<?php echo date("Y-m-d");?>" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Supplier <span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <select name="supplier" class="form-control">
                          <option value="" disabled selected style="display: none;">[Pilih Supplier]</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0; padding: 15px 0; border-top: 1px solid #d3d7db;">
                      <label class="col-sm-3 control-label">Jenis Pembayaran<span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <select id="jenisBayar" name="jenisBayar" class="form-control" onchange="copyjenisBayar();" required>
                          <option value="" disabled selected style="display: none;">Pilih Pembayaran</option>
                          <option value="T">Tunai</option>
                          <option value="TR">Transfer</option>
                          <option value="K">Kredit</option>
                          <option value="C">Cek</option>
                        </select>
                      </div>
                    </div>
                    <div id="caraBayar"></div>
                    <div class="form-group" style="margin: 0; padding: 15px 0; border-top: 1px solid #d3d7db;">
                      <label class="col-sm-3 control-label">Diskon Langsung</label>
                      <div class="col-sm-9">                      
                        <input type="number" min="0" name="diskonLangsung" class="form-control" placeholder="Masukan Diskon Langsung" />
                      </div>
                    </div>                 
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Diskon Pelunasan</label>
                      <div class="col-sm-9">                      
                        <input type="number" min="0" name="diskonPelunasan" class="form-control" placeholder="Masukan Diskon Pelunasan" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label ">Batas Diskon Pelunasan</label>
                      <?php  $date = date("Y-m-d");
                      $date = strtotime($date);
                      $date2 = strtotime("+7 day", $date);?>
                      <div class="col-sm-9">
                        <input type="date" name="tanggalBatasNota" class="form-control" value="<?php echo date("Y-m-d", $date2);?>"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Status Kirim<span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <select id="statusKirim" name="statusKirim" class="form-control" onchange="copystatusKirim();" required>
                          <option selected="true" value="1">Diterima Langsung</option>
                          <option value="0">Dikirim</option>
                        </select>
                      </div>
                    </div>
                    <div id="barangDikirim"></div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6">
                  <div id="formBarang"> 
                    <div class="form-group" id="divBarang">
                      <label class="col-sm-3 control-label">Barang <span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <select name="nama-barang[]" class="form-control">
                          <option value="" disabled selected style="display: none;">[Pilih Barang]</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="form-group" id="divJumlah">
                      <label class="col-sm-3 control-label">Jumlah Barang <span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <input type="number" min="0" name="jumlah-barang[]" class="form-control" placeholder="Jumlah Barang" required/>
                      </div>
                    </div>
                    <div class="form-group" id="divHarga">
                      <label class="col-sm-3 control-label">Harga Barang <span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <input type="number" min="0" name="harga-barang[]" class="form-control" placeholder="Harga Barang" required/>
                      </div>
                    </div>
                  </div>

                  <div id="divButton">
                    <div class="col-sm-12">
                      <button style="float: right;" id="next" class="btn btn-primary">Tambah Barang</button>
                    </div>
                  </div>
                </div>

              </div>              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Insert</button>
              </div>
              <!-- /.box-footer -->
            </form>

            </fieldset>
            
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
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- script untuk search -->
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<!-- script untuk edit -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'modalbarang.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
    var htmlNama = $('#divBarang:eq(0)')[0].outerHTML;
    var htmlJumlah = $('#divJumlah:eq(0)')[0].outerHTML;
    var htmlHarga = $('#divHarga:eq(0)')[0].outerHTML;
    $("#next").click(function() {
      $('#formBarang').append(htmlNama);
      $('#formBarang').append(htmlJumlah);
      $('#formBarang').append(htmlHarga);
   });
  </script>
</body>
</html>
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

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pembelian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="tambahsuplier.php"><i class="fa fa-circle-o"></i> Tambah Supplier</a></li>
            <li> <a href="informasisuplier.php"><i class="fa fa-circle-o"></i> Informasi Supplier</a></li>
            <li><a href="tambahpembelian.php"><i class="fa fa-circle-o"></i> Tambah Pembelian</a></li>
            <li><a href="statuspembelian.php"><i class="fa fa-circle-o"></i> Status Pembelian</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="tambahcustomer.php"><i class="fa fa-circle-o"></i> Tambah Customer</a></li>
            <li> <a href="informasicustomer.php"><i class="fa fa-circle-o"></i> Informasi Customer</a></li>
            <li class="active"><a href="tambahpenjualan.php"><i class="fa fa-circle-o"></i> Tambah Penjualan</a></li>
            <li><a href="statuspenjualan.php"><i class="fa fa-circle-o"></i> Status Penjualan</a></li>
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
        Tambah Pembelian
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
              <div class="form-horizontal">
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
                      <label class="col-sm-3 control-label">Customer <span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <select name="customer" class="form-control">
                          <option value="" disabled selected style="display: none;">[Pilih Customer]</option>
                          <?php 
                            while($rowCustomer = mysqli_fetch_object($resultCustomer)){
                              echo "<option value='".$rowCustomer->id."'>".$rowCustomer->nama."</option>";
                            }

                          ?>
                          
                        </select>
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0; padding: 15px 0; border-top: 1px solid #d3d7db;">
                      <label class="col-sm-3 control-label">Jenis Pembayaran<span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <select id="jenisBayar" name="jenisBayar" class="form-control" onchange="copyjenisBayar();" required>
                          <option value="" disabled selected style="display: none;">[Pilih Pembayaran]</option>
                          <option value="T">Tunai</option>
                          <option value="K">Kredit</option>
                        </select>
                      </div>
                    </div>
                    <div id="caraBayar"></div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Status Kirim<span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <select id="statusKirim" name="statusKirim" class="form-control" onchange="copystatusKirim();" required>
                          <option value="" disabled selected style="display: none;">[Pilih Status Kirim]</option>
                          <option value="T">Diterima Langsung</option>
                          <option value="K">Dikirim</option>
                        </select>
                      </div>
                    </div>               
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div id="formBarang"> 
                    <div class="form-group" id="divBarang">
                      <label class="col-sm-3 control-label">Barang <span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <select name="nama-barang[]" class="form-control">
                          <option value="lol" selected style="display: none;">[Pilih Barang]</option>
                          <?php 
                            while($rowBarang = mysqli_fetch_object($resultBarang)){
                              echo "<option value='".$rowBarang->id."'>".$rowBarang->nama."</option>";
                            }
                          ?>                   
                        </select>
                      </div>
                    </div>
                    <div class="form-group" id="divJumlah">
                      <label class="col-sm-3 control-label">Jumlah Barang <span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <input type="number" min="0" value="0" name="jumlah-barang[]" class="form-control" placeholder="Jumlah Barang"/>
                      </div>
                    </div>
                    <div class="form-group" id="divHarga">
                      <label class="col-sm-3 control-label">Harga Barang <span class="asterisk">*</span></label>
                      <div class="col-sm-9">
                        <input type="number" min="0" value="0" name="harga-barang[]" class="form-control" placeholder="Harga Barang"/>
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
                <button id="submit" class="btn btn-info pull-right">Insert</button>
              </div>
              <!-- /.box-footer -->
            </div>

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
<!-- script untuk search -->
<script>
  var htmlNama = $('#divBarang:eq(0)')[0].outerHTML;
  var htmlJumlah = $('#divJumlah:eq(0)')[0].outerHTML;
  var htmlHarga = $('#divHarga:eq(0)')[0].outerHTML;
  $("#next").click(function() {
    $('#formBarang').append(htmlNama);
    $('#formBarang').append(htmlJumlah);
    $('#formBarang').append(htmlHarga);
  });
  $("#submit").click(function(){
    
    var noNota;
    var tanggal;
    var idCustomer;
    var jenisBayar;
    var tanggalJatuhTempo;
    var karyawan = "Rama"; 
    var nama = [];
    var jumlah = [];
    var harga= [];
    var total = 0;
    var cek=0;
    var statusKirim;

    $('input[name="noNota"]').each( function(){ noNota = $(this).val(); });
    $('input[name="tanggalNota"]').each( function(){ tanggal = $(this).val(); });
    $('select[name="customer"]').each( function(){ idCustomer = $(this).val(); });
    $('select[name="statusKirim"]').each( function(){ statusKirim = $(this).val(); });
    $('select[name="jenisBayar"]').each( function(){ jenisBayar = $(this).val(); });
    $('input[name="tanggalJatuhTempo"]').each( function(){ tanggalJatuhTempo = $(this).val(); }); 
    $('select[name="nama-barang[]"]').each( function(){ nama.push($(this).val()); });
    $('input[name="jumlah-barang[]"]').each( function(){ jumlah.push($(this).val()); });
    $('input[name="harga-barang[]"]').each( function(){ harga.push($(this).val()); });

    for(i = 0; i < jumlah.length ; i++){
      if(nama[i] && jumlah[i] && harga[i]){
        total += harga[i] * jumlah[i];
      }
      else{
        cek++;
      }
    }
    if(idCustomer && jenisBayar && statusKirim){
      if(cek==0 || cekBaru == 0){
        $.ajax({
        type: "POST",
        url: "manage.php?act=insertpenjualan",
        data: 'noNota=' + noNota+ '&tanggal=' + tanggal+ '&idCustomer=' + idCustomer+ '&jatuhTempo=' + tanggalJatuhTempo +'&jenisBayar=' +jenisBayar +'&total='+total+'&statusKirim=' + statusKirim,
        success: function(result) {
          for( i = 0 ;i < nama.length ; i++){
            $.ajax({
              type: "POST",
              url: "manage.php?act=insertpenjualanbarang",
              data: 'noNota=' + noNota+ '&barang_id=' + nama[i]+ '&qty=' + jumlah[i]+ '&harga=' + harga[i] +'&statusKirim=' + statusKirim,
              success: function(result) {

              }
            });
          }
          window.location = "statuspenjualan.php";    
        }});
      }
      else{
        alert("Tolong cek isi semua data Barang diatas");
      }
    }
    else{
      alert("Cek kembali data nota");
    }

    
  });

  function copyjenisBayar() {
    if(document.getElementById('jenisBayar').value=='T'){
      document.getElementById("caraBayar").innerHTML=''
    }
    else if(document.getElementById('jenisBayar').value=='TR'){
      document.getElementById("caraBayar").innerHTML=
      '<div class="form-group">'+
      '<label class="col-sm-3 control-label ">Nama Pemilik Rekening <span class="asterisk">*</span></label>'+
      '<div class="col-sm-9">'+
      '<input type="text" name="namaPemilikRekening" class="form-control" placeholder="Nama Pemilik Rekening" required/>'+
      '</div>'+
      '</div>'+
      '<div class="form-group">'+
      '<label class="col-sm-3 control-label ">Data Rekening <span class="asterisk">*</span></label>'+
      '<div class="col-sm-5">'+
      '<input type="number" min="0" name="nomorRekening" class="form-control" placeholder="Nomor Rekening" required/>'+
      '</div>'+
      '<div class="col-sm-4">'+
      '<select name="getBankId" class="form-control" data-placeholder="Nama Bank" required>'+
      '<option value="" style="display:none">Pilih Bank</option>'+
      '<option value="1">Bank Baca Baca</option>'+
      '<option value="2">Bank Suka Sendiri</option>'+
      '</select>'+
      '</div>'+
      '</div>'
    }
    else if(document.getElementById('jenisBayar').value=='K'){
      document.getElementById("caraBayar").innerHTML=
      '<div class="form-group" style="margin-bottom:15px;">'+
      '<label class="col-sm-3 control-label">Tanggal Jatuh Tempo <span class="asterisk">*</span></label>'+
      '<div class="col-sm-9">'+
      '<input type="date" name="tanggalJatuhTempo" class="form-control" value="<?php echo date("Y-m-d") ?>" required/>'+
      '</div>'+
      '</div>'
    }
    else if(document.getElementById('jenisBayar').value=='C'){
      document.getElementById("caraBayar").innerHTML=
      '<div class="form-group" style="margin-bottom:15px;">'+
      '<label class="col-sm-3 control-label">Nomor Cek <span class="asterisk">*</span></label>'+
      '<div class="col-sm-9">'+
      '<input type="number" min="0" name="nomorCek" class="form-control" placeholder="Nomor Cek" required/>'+
      '</div>'+
      '</div>'
    }
  }
</script>
</body>
</html>

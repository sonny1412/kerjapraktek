<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kerjapraktek";

    $koneksi = new mysqli($servername, $username, $password, $dbname);
    require 'db.php';
    require 'sql.php';

		if($_POST['rowid']) {
        $id = $_POST['rowid'];
        $result = PembayaranPembelian($id);
        foreach ($result as $baris) { ?>
            <fieldset>
              <legend style="text-align: center;">Konfirmasi Surat Jalan</legend>
              <form class="form-horizontal" action="manage.php?act=insertpembayaranpembelian" method="POST">
              <?php
              $resultBayar = PembayaranPembelian($id);
              if($rowBayar = mysqli_fetch_object($resultBayar)){
              echo "<div class=box-body>
                      <div class=form-group>
                      <label for=inputBayarn class=col-sm-2 control-label>Total Kewajiban</label>
                        <div class=col-sm-10>
                          <select disabled class=form-control>
                            <option>".($rowBayar->total - $rowBayar->saldo)."</option>                                        
                          </select>
                        </div>
                      </div>
                      <div class=form-group>
                        <label for=inputUserKaryawan class=col-sm-2 control-label>Jumlah Bayar</label>
                          <div class=col-sm-10>
                            <input type=number name=jumlah max=".($rowBayar->total - $rowBayar->saldo)." required autofocus class=form-control>
                          </div>
                      </div> 
                      <div class=form-group>
                        <label for=inputUserKaryawan class=col-sm-2 control-label>Keterangan Cara Bayar</label>
                          <div class=col-sm-10>
                            <input type=text name=keterangan required autofocus class=form-control>
                            <input type=hidden name=id value=".$id.">
                            <input type=hidden name=karyawan value=".$id.">
                          </div>
                      </div>              
                    </div>";
                  }
              ?>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Insert</button>
              </div>
              <!-- /.box-footer -->
            </form>

            </fieldset>
        <?php 
 
        }
    }
    $koneksi->close();
?>
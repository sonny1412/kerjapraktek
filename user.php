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
                    <a href="karyawan.php">  
                    <p>Karyawan</p>
                    </a>
                    <a href="user.php">  
                    <p>Akun</p>
                    </a>
                </tr>
            </table>
      </div></br>
<?php 
        require 'db.php';
        $sql = "select * from user";
        
        $result = mysqli_query($link, $sql);
        if(!$result) {
            die("SQL Error: ".$sql);
        }   
        $sqlUser = "select * from karyawan where jabatan = 'Penjualan' or jabatan = 'Pembelian' or jabatan ='Gudang' having id not in(select Karyawan_id from user)";  
        $resultUser = mysqli_query($link,$sqlUser);
?>
<form action="manage.php?act=insertuser" method="POST" style="margin-left: 5%;" >
            Username : <input type="text" name="user"><br/>
            Password : <input type="password" name="password"><br/>
            Konfirmasi Password : <input type="password" name="konfirmasi"></br>
            Nama Karyawan : <select name="idKaryawan">
  				<?php while($rowUser = mysqli_fetch_object($resultUser))
                {
                    echo "<option value='".$rowUser->id."'>".$rowUser->nama."</option>";
                    
                }
                ?>
			</select>
            <input type="submit" value="Insert" style="margin-left: 50%;">
</form> 
<table width='90%' border='1px' style=" margin-left: 5%">
        <tr>
            <th>Nama Karyawan</th><th>Username</th><th>HAPUS/EDIT</th>
        </tr>
        <?php
        while($row = mysqli_fetch_object($result)) {
            $sqlKaryawan = "select * from karyawan where id =".$row->Karyawan_id;
            $resultKaryawan = mysqli_query($link,$sqlKaryawan);
            $rowKaryawan = mysqli_fetch_object($resultKaryawan);
            echo "<tr>";
            echo "<td>".$rowKaryawan->nama."</td><td>".$row->username."</td><td>"
                    ."<a href=editkaryawan.php?var=".$row->id."><img src='pencil2.png' style='margin-left:20%;'></a>";

            echo "</tr>";
             } ?>
    </table>
    </body>
</html>

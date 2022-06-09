<?php

require 'function.php';

$idpinjam = query("SELECT * FROM pinjam ORDER BY id_pinjam ASC");
?>
<div class="panel panel-default">
  <div class="panel-heading">
   <h4 align="center">TOKOMAINAN </h4>
  </div>


 <div class="row">
   <div class="panel-body">

    <form action="" method="post">


      

      <a href="index.php?halaman=addpinjam" class="btn btn-outline-primary">Tambah pinjam</a>
      <a class="btn btn-outline-primary" href="index.php?halaman=showpinjam" role="button">Refresh</a>


    </form>
    <br>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th  class="align-middle text-center">No</th>
            <th class="align-middle text-center">Id pinjam</th>
            <th class="align-middle text-center">Tanggal pinjam</th>
            
            <th class="align-middle text-center">Nama Peminjam</th>
            
            
           
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php  foreach( $idpinjam as $row) : ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row['id_pinjam']; ?></td>
              <td><?php echo $row['tanggal_pinjam']; ?></td>
              <td><?php echo $row['nama_member']; ?></td>
            
              <td>

                <a href="index.php?halaman=updatepinjam&id_pinjam=<?= $row["id_pinjam"] ?>">update </a> | 
                
                <a href="index.php?halaman=deletepinjam&id_pinjam=<?= $row["id_pinjam"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini ???');">delete </a>

              </td>


            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
      
    </div>
  </div>
</div>
</div>
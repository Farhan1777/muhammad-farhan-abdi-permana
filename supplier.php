<?php

require 'function.php';

$idsupplier = query("SELECT * FROM supplier ORDER BY id_supplier ASC");
?>
<div class="panel panel-default">
  <div class="panel-heading">
   <h4 align="center">TOKO MAINAN</h4>
  </div>


 <div class="row">
   <div class="panel-body">

    <form action="" method="post">


      

      <a href="index.php?halaman=addsupplier" class="btn btn-outline-primary">Tambah supplier</a>
      <a class="btn btn-outline-primary" href="index.php?halaman=showsupplier" role="button">Refresh</a>


    </form>
    <br>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th  class="align-middle text-center">No</th>
            <th class="align-middle text-center">Id supplier</th>
            <th class="align-middle text-center">Nama supplier</th>
            
            
           

            
            
           
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php  foreach( $idsupplier as $row) : ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row['id_supplier']; ?></td>
              <td><?php echo $row['nama_supplier']; ?></td>
              
              
              <td>

                <a href="index.php?halaman=updatesupplier&id_supplier=<?= $row["id_supplier"] ?>">update </a> | 
                
                <a href="index.php?halaman=deletesupplier&id_supplier=<?= $row["id_supplier"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini ???');">delete </a>

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
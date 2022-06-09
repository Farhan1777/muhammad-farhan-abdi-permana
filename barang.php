<?php

require 'function.php';

$idbarang = query("SELECT * FROM barang ORDER BY id_barang ASC");
?>
<div class="panel panel-default">
  <div class="panel-heading">
   <h4 align="center">TOKO MAINAN  </h4>
  </div>


 <div class="row">
   <div class="panel-body">

    <form action="" method="post">


      

      <a href="index.php?halaman=addbarang" class="btn btn-outline-primary">Tambah barang</a>
      <a class="btn btn-outline-primary" href="index.php?halaman=showbarang" role="button">Refresh</a>


    </form>
    <br>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th  class="align-middle text-center">No</th>
            <th class="align-middle text-center">Id Mainan</th>
            <th class="align-middle text-center">nama mainan </th>
            <th class="align-middle text-center">sistem permainan</th>
            
            <th class="align-middle text-center">Id supplier</th>

            
            
           
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php  foreach( $idbarang as $row) : ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row['id_barang']; ?></td>
              <td><?php echo $row['nama_mainan']; ?></td>
              <td><?php echo $row['sistem']; ?></td>
              <td><?php echo $row['id_supplier']; ?></td>
              
              <td>

                <a href="index.php?halaman=updatebarang&id_barang=<?= $row["id_barang"] ?>">update </a> | 
                
                <a href="index.php?halaman=deletebarang&id_barang=<?= $row["id_barang"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini ???');">delete </a>

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
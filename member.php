


<?php

require 'function.php';

$idmember = query("SELECT * FROM member ORDER BY id_member ASC");
?>
<div class="panel panel-default">
  <div class="panel-heading">
   <h4 align="center">TOKO MAINAN  </h4>
 </div>


 <div class="row">
   <div class="panel-body">

    <form action="" method="post">
      


      

      <a href="index.php?halaman=addmember" class="btn btn-outline-primary">Tambah member</a>
      <a class="btn btn-outline-primary" href="index.php?halaman=showmember" role="button">Refresh</a>


    </form>
    <br>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th  class="align-middle text-center">No</th>
            <th class="align-middle text-center">Id Member</th>
            <th class="align-middle text-center">Nama Member</th>
            <th class="align-middle text-center">Alamat</th>
            
            <th class="align-middle text-center">No Telepon</th>

            
            
            
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php  foreach( $idmember as $row) : ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $row['id_member']; ?></td>
              <td><?php echo $row['nama_member']; ?></td>
              <td><?php echo $row['alamat']; ?></td>
              <td><?php echo $row['no_telpon']; ?></td>
              
              <td>

                <a href="index.php?halaman=updatemember&id_member=<?= $row["id_member"] ?>">update </a> | 
                
                <a href="index.php?halaman=deletemember&id_member=<?= $row["id_member"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini ???');">delete </a>

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
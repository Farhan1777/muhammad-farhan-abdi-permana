<?php


require 'function.php';

$conn = mysqli_connect("localhost", "root", "", "tokomainan");


if(isset($_POST["submit"]) ){
    
    $idbarang            = $_POST['id_barang'];
    $nama_mainan          = htmlspecialchars($_POST['nama_mainan']);
    $sistem              = htmlspecialchars($_POST['sistem']);
    $id_supplier            = htmlspecialchars($_POST['id_supplier']);
    
        
        // include database connection file
    include_once("function.php");

        // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO barang(id_barang,nama_mainan,sistem,id_supplier) VALUES('$idbarang','$nama_mainan','$sistem','$id_supplier')");

        // Show message when user added
    echo "
    <script>
    alert('Data berhasil ditambahkan !!!!!')
    document.location.href = 'index.php?halaman=showbarang';
    </script>
    ";

}




?>


<form action="" method="post">
  <div class="form-group">
    <label for="id_barang">Id barang</label>
    <input type="text" class="form-control" name="id_barang" id="id_barang" autofocus="">  
  </div>

  

<div class="form-group">
    <label for="nama_mainan">Nama barang</label>
    <input type="text" class="form-control" name="nama_mainan" id="nama_mainan" placeholder="masukkan nama barang" autocomplete="off" maxlength="100">
</div>

  <div class="form-group">
    <label for="sistem">sistem permainan</label>
    <input type="text" class="form-control" name="sistem" id="sistem" placeholder="masukkan sistem barang" autocomplete="off" maxlength="1000">
  </div>

   <div class="form-group">
    <label for="id_supplier">id_supplier</label>
<select name="id_supplier" class="form-control" id="id_supplier">
        <?php
          $conn = mysqli_connect("localhost", "root", "", "tokomainan");
          $result = mysqli_query($conn, "SELECT * FROM supplier ORDER BY id_supplier");
          while ($row = mysqli_fetch_assoc($result)) 
          {
            echo "<option>$row[id_supplier]</option>";
          }
        ?>
    </select>  </div>

  
<!--  -->
  
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
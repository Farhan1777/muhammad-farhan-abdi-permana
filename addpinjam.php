<?php


require 'function.php';

$conn = mysqli_connect("localhost", "root", "", "tokomainan");


if(isset($_POST["submit"]) ){
    
    $idpinjam            = $_POST['id_pinjam'];
    $judul  = $_POST['judul'];
    $tanggal_pinjam          = htmlspecialchars($_POST['tanggal_pinjam']);
    $nama_member              = htmlspecialchars($_POST['nama_member']);

        
        // include database connection file
    include_once 'function.php';

        // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO pinjam(id_pinjam,judul,tanggal_pinjam,nama_member) VALUES('$idpinjam','$judul','$tanggal_pinjam','$nama_member')");

        // Show message when user added
    echo "
    <script>
    alert('Data berhasil ditambahkan !!!!!')
    document.location.href = 'index.php?halaman=showpinjam';
    </script>
    ";

}




?>


<form action="" method="post">
  <div class="form-group">
    <label for="id_pinjam">Id pinjam</label>
    <input type="text" class="form-control" name="id_pinjam" id="id_pinjam" autofocus="">  
  </div>
  <div class="form-group">
    <label for="judul">Judul Buku</label>
    <select name="judul" class="form-control" id="judul">
        <?php
          $conn = mysqli_connect("localhost", "root", "", "tokomainan");
          $result = mysqli_query($conn, "SELECT * FROM barang ORDER BY judul");
          while ($row = mysqli_fetch_assoc($result)) 
          {
            echo "<option>$row[judul]</option>";
          }
        ?>
    </select>
  </div>

  

<div class="form-group">
    <label for="tanggal_pinjam">Tanggal pinjam</label>
    <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam"  autocomplete="off" maxlength="100">
</div>

  <div class="form-group">
    <label for="nama_member">nama Peminjam</label>
    <select name="nama_member" class="form-control" id="nama_member">
        <?php
          $conn = mysqli_connect("localhost", "root", "", "tokomainan");
          $result = mysqli_query($conn, "SELECT * FROM member ORDER BY nama_member");
          while ($row = mysqli_fetch_assoc($result)) 
          {
            echo "<option>$row[nama_member]</option>";
          }
        ?>
    </select>
  </div>

  

<!--  -->
  
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
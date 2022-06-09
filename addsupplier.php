<?php


require 'function.php';

$conn = mysqli_connect("localhost", "root", "", "tokomainan");


if(isset($_POST["submit"]) ){
    
    $idsupplier            = $_POST['id_supplier'];
    $nama_supplier          = htmlspecialchars($_POST['nama_supplier']);
   
    
        
        // include database connection file
    include_once("function.php");

        // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO supplier(id_supplier,nama_supplier) VALUES('$idsupplier','$nama_supplier')");

        // Show message when user added
    echo "
    <script>
    alert('Data berhasil ditambahkan !!!!!')
    document.location.href = 'index.php?halaman=showsupplier';
    </script>
    ";

}




?>


<form action="" method="post">
  <div class="form-group">
    <label for="id_supplier">Id supplier</label>
    <input type="text" class="form-control" name="id_supplier" id="id_supplier" autofocus="">  
  </div>

  

<div class="form-group">
    <label for="nama_supplier">Nama supplier</label>
    <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" placeholder="masukkan nama supplier" autocomplete="off" maxlength="100">
</div>

 

  
<!--  -->
  
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
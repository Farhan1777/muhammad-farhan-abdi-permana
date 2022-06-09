<?php


require 'function.php';

$conn = mysqli_connect("localhost", "root", "", "tokomainan");


if(isset($_POST["submit"]) ){
    
    $idmember            = $_POST['id_member'];
    $nama_member          = htmlspecialchars($_POST['nama_member']);
    $alamat              = htmlspecialchars($_POST['alamat']);
    $no_telpon            = htmlspecialchars($_POST['no_telpon']);
    
        
        // include database connection file
    include_once("function.php");

        // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO member(id_member,nama_member,alamat,no_telpon) VALUES('$idmember','$nama_member','$alamat','$no_telpon')");

        // Show message when user added
    echo "
    <script>
    alert('Data berhasil ditambahkan !!!!!')
    document.location.href = 'index.php?halaman=showmember';
    </script>
    ";

}




?>


<form action="" method="post">
  <div class="form-group">
    <label for="id_member">Id member</label>
    <input type="text" class="form-control" name="id_member" id="id_member" autofocus="">  
  </div>

  

<div class="form-group">
    <label for="nama_member">Nama member</label>
    <input type="text" class="form-control" name="nama_member" id="nama_member" placeholder="masukkan nama member" autocomplete="off" maxlength="100">
</div>

  <div class="form-group">
    <label for="alamat">alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="masukkan alamat member" autocomplete="off" maxlength="1000">
  </div>

   <div class="form-group">
    <label for="no_telpon">no_telpon</label>
<input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="masukkan no telpon member" autocomplete="off" maxlength="20">
</div>

  
<!--  -->
  
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
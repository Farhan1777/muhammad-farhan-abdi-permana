<?php
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "tokomainan");

//ambil data id supplier
$id_supplier = $_GET["id_supplier"];

//query data berdasarkan id_supplier
$id_supplier = query("SELECT * FROM supplier WHERE id_supplier = $id_supplier")[0];


if(isset($_POST["submit"]) ){
    
    $id_supplier = $_POST['id_supplier'];
    $nama_supplier = htmlspecialchars($_POST['nama_supplier']);
   

    // update supplier data
    $result = mysqli_query($conn, "UPDATE supplier SET nama_supplier='$nama_supplier' WHERE id_supplier=$id_supplier");

    // Redirect to homepage to display updated supplier in list
    // header("Location: index.php");
    
    echo "
 				<script>
 				alert('data berhasil diubah');
 				document.location.href = 'index.php?halaman=showsupplier';
 				</script>
 		";


}
?>
<form action="" method="post">
  <div class="form-group">
    <label for="id_supplier">ID supplier</label>
    <input type="text" class="form-control" name="id_supplier" id="id_supplier" value="<?= $id_supplier["id_supplier"];?>" readonly>  
  </div>

  <div class="form-group">
    <label for="nama_supplier">nama_supplier</label>
    <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" autofocus="" maxlength="10" autocomplete="off" value="<?= $id_supplier["nama_supplier"];?>">
  </div>


 
  
<!--  -->
   
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
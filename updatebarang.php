<?php
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "tokomainan");

//ambil data id barang
$id_barang = $_GET["id_barang"];

//query data berdasarkan id_barang
$id_barang = query("SELECT * FROM barang WHERE id_barang = $id_barang")[0];


if(isset($_POST["submit"]) ){
    
    $id_barang = $_POST['id_barang'];
    $nama_mainan = htmlspecialchars($_POST['nama_mainan']);
    $sistem = htmlspecialchars($_POST['sistem']);
    $id_supplier = htmlspecialchars($_POST['id_supplier']);


    // update supplier data
    $result = mysqli_query($conn, "UPDATE barang SET nama_mainan='$nama_mainan',sistem='$sistem',id_supplier='$id_supplier'  WHERE id_barang=$id_barang");

    // Redirect to homepage to display updated supplier in list
    // header("Location: index.php");
    
    echo "
 				<script>
 				alert('data berhasil diubah');
 				document.location.href = 'index.php?halaman=showbarang';
 				</script>
 		";


}
?>
<form action="" method="post">
  <div class="form-group">
    <label for="id_barang">ID barang</label>
    <input type="text" class="form-control" name="id_barang" id="id_barang" value="<?= $id_barang["id_barang"];?>" readonly>  
  </div>

  <div class="form-group">
    <label for="nama_mainan">nama barang</label>
    <input type="text" class="form-control" name="nama_mainan" id="nama_mainan" autofocus="" maxlength="10" autocomplete="off" value="<?= $id_barang["nama_mainan"];?>">
  </div>

<div class="form-group">
    <label for="sistem">sistem permainan</label>
    <input type="text" class="form-control" name="sistem" id="sistem" placeholder="masukkan sistem " autocomplete="off" maxlength="100" value="<?= $id_barang["sistem"];?>">
</div>

  <div class="form-group">
    <label for="id_supplier">id supplier</label>
<select name="id_supplier" class="form-control" id="id_supplier">
        <?php
$conn = mysqli_connect("localhost", "root", "", "tokomainan");

          $result = mysqli_query($conn, "SELECT * FROM supplier ORDER BY id_supplier");
          while ($row = mysqli_fetch_assoc($result)) 
          {
            echo "<option>$row[id_supplier] </option>";
          }
        ?>
    </select>
      </div>

 
  
<!--  -->
   
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
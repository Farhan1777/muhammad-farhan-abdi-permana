<?php
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "tokomainan");

//ambil data id pinjam
$id_pinjam = $_GET["id_pinjam"];

//query data berdasarkan id_pinjam
$id_pinjam = query("SELECT * FROM pinjam WHERE id_pinjam = $id_pinjam")[0];


if(isset($_POST["submit"]) ){
    
    $id_pinjam = $_POST['id_pinjam'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $nama_member = htmlspecialchars($_POST['nama_member']);
 


    // update supplier data
    $result = mysqli_query($conn, "UPDATE pinjam SET tanggal_pinjam='$tanggal_pinjam', nama_member='$nama_member' WHERE id_pinjam=$id_pinjam");

    // Redirect to homepage to display updated supplier in list
    // header("Location: index.php");
    
    echo "
 				<script>
 				alert('data berhasil diubah');
 				document.location.href = 'index.php?halaman=showpinjam';
 				</script>
 		";


}
?>
<form action="" method="post">
  <div class="form-group">
    <label for="id_pinjam">ID pinjam</label>
    <input type="text" class="form-control" name="id_pinjam" id="id_pinjam" value="<?= $id_pinjam["id_pinjam"];?>" readonly>  
  </div>
<div class="form-group">
    <label for="tanggal_pinjam">tanggal_pinjam</label>
    <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam" autofocus="" maxlength="10" autocomplete="off" value="<?= $id_pinjam["tanggal_pinjam"];?>">
  </div>
  <div class="form-group">
    <label for="nama_pinjam">nama_pinjam</label>
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
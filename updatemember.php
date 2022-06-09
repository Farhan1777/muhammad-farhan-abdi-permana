<?php
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "tokomainan");

//ambil data id member
$id_member = $_GET["id_member"];

//query data berdasarkan id_member
$id_member = query("SELECT * FROM member WHERE id_member = $id_member")[0];


if(isset($_POST["submit"]) ){
    
    $id_member = $_POST['id_member'];
    $nama_member = htmlspecialchars($_POST['nama_member']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $no_telpon = htmlspecialchars($_POST['no_telpon']);


    // update supplier data
    $result = mysqli_query($conn, "UPDATE member SET nama_member='$nama_member',alamat='$alamat',no_telpon='$no_telpon'  WHERE id_member=$id_member");

    // Redirect to homepage to display updated supplier in list
    // header("Location: index.php");
    
    echo "
 				<script>
 				alert('data berhasil diubah');
 				document.location.href = 'index.php?halaman=showmember';
 				</script>
 		";


}
?>
<form action="" method="post">
  <div class="form-group">
    <label for="id_member">ID member</label>
    <input type="text" class="form-control" name="id_member" id="id_member" value="<?= $id_member["id_member"];?>" readonly>  
  </div>

  <div class="form-group">
    <label for="nama_member">nama_member</label>
    <input type="text" class="form-control" name="nama_member" id="nama_member" autofocus="" maxlength="10" autocomplete="off" value="<?= $id_member["nama_member"];?>">
  </div>

<div class="form-group">
    <label for="alamat">alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="masukkan alamat " autocomplete="off" maxlength="100" value="<?= $id_member["alamat"];?>">
</div>

  <div class="form-group">
    <label for="no_telpon">id penerbit</label>
<input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="masukkan no_telpon " autocomplete="off" maxlength="100" value="<?= $id_member["no_telpon"];?>">
      </div>

 
  
<!--  -->
   
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
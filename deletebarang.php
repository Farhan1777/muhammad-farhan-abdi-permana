<?php
$idbarang = $_GET['id_barang'];

$conn = mysqli_connect("localhost","root","","tokomainan");
$result = mysqli_query($conn,"DELETE FROM barang WHERE id_barang=$idbarang");

echo "<script>
		alert('data berhasil dihapus');
		document.location.href ='index.php?halaman=showbarang';
		</script>
";

?>
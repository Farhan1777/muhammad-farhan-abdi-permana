<?php
$idsupplier = $_GET['id_supplier'];

$conn = mysqli_connect("localhost","root","","tokomainan");
$result = mysqli_query($conn,"DELETE FROM supplier WHERE id_supplier=$idsupplier");

echo "<script>
		alert('data berhasil dihapus');
		document.location.href ='index.php?halaman=showsupplier';
		</script>
";

?>
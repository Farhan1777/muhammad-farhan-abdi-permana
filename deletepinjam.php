<?php
$idpinjam = $_GET['id_pinjam'];

$conn = mysqli_connect("localhost","root","","tokomainan");
$result = mysqli_query($conn,"DELETE FROM pinjam WHERE id_pinjam=$idpinjam");

echo "<script>
		alert('data berhasil dihapus');
		document.location.href ='index.php?halaman=showpinjam';
		</script>
";

?>
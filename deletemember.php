<?php
$idmember = $_GET['id_member'];

$conn = mysqli_connect("localhost","root","","tokomainan");
$result = mysqli_query($conn,"DELETE FROM member WHERE id_member=$idmember");

echo "<script>
		alert('data berhasil dihapus');
		document.location.href ='index.php?halaman=showmember';
		</script>
";

?>
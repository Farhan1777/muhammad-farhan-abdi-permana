<?php 

function query($query) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $my_db = "tokomainan";

    

    $conn = mysqli_connect($servername, $username, $password, $my_db);

	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


?>


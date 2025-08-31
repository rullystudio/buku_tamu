<?php 
	$koneksi  = mysqli_connect(
								"localhost",
								"root",
								"",
								"buku_tamu"
								);
	if(mysqli_connect_errno())
	{
		echo "Failed Connection"
		.mysql_connect_error();
	}
?>
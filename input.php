<?php 
	include "koneksi.php" ;
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	$query = "INSERT INTO user set 
									nama = '$nama',
									email = '$email',
									pesan = '$pesan'
			 ";
	if(mysqli_query($koneksi, $query)){
		header('location:index.php');
	}
	else
	{
		echo "input data failed <br>";
		mysqli_error() ;
	}

?>
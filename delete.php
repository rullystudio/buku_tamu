<?php 
	include "koneksi.php" ;
	$query = "DELETE FROM user WHERE id = '$_GET[id]' ";

	if(mysqli_query($koneksi, $query))
	{
		header('location:index.php');
	}
	else 
	{
		echo "Delete Data Failed";
		mysql_error();
	}
?>
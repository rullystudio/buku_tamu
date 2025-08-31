<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu Sederhana</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container">
	  <div class="col-md-12 row justify-content-center">
	  	<div class="col-md-8 mt-5">
	  		<div class="col-md-12 text-center">
	  			<h1>Buku Tamu Sederhana</h1>
	  			By : <a href="https://www.rullystudio.web.id">Rully Studio</a>
	  		</div>
	  		<div class="col-md-12 mt-5">
	  			<a href="add.php" class="btn btn-primary mb-4">Insert Data</a>
	  			<table class="table">
				  	<?php 
				  		include "koneksi.php" ;
				  		$no = 1 ;
				  		$data = mysqli_query($koneksi, 
				  							  "SELECT * FROM user ORDER BY id DESC"
				  							) ;
				  		while($row = mysqli_fetch_array($data))
				  		{
				  	?>
					<tr>
						<td class="f">
							Nama
						</td>
						<td class="s">
							:
						</td>
						<td>
							<?php echo $row['nama'] ; ?>
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							:
						</td>
						<td>
							<?php echo $row['email'] ; ?>
						</td>
					</tr>
					</tr>
					<tr>
						<td>
							Pesan
						</td>
						<td>
							:
						</td>
						<td>
							<?php echo $row['pesan'] ; ?>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="bt">
							<a href="delete.php?id=<?php echo $row['id'] ; ?>" class="btn btn-sm btn-danger float-end">
								Hapus
							</a>
						</td>
					</tr>
				    <?php } ?>
				</table>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>

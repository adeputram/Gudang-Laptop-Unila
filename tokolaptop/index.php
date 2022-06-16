<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gudang Laptop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>
	<?php
	include('dbconnect.php');

	$query = "SELECT * FROM laptop";

	$result = mysqli_query($conn , $query);

	?>

	<div style="padding: 50px; padding-bottom: 20px; background: #F5D639">
		<marquee><h1>Gudang Laptop Unila Gudang Laptop Unila Gudang Laptop Unila Gudang Laptop Unila Gudang Laptop Unila Gudang Laptop Unila Gudang Laptop Unila Gudang Laptop Unila</h1></marquee>
		<img src="unila.png" width="200" height=""style="display:block; margin:auto;">
		<hr>
		<div class="row">
			<div class="col-sm-4">
				<h3>Form Tambah Laptop</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Nama Laptop</label>
						<input type="text" name="nama_lp" class="form-control">
					</div>
					<div class="form-group">
						<label>Merk</label>
						<input type="text" name="merk_lp" class="form-control">
					</div>
					<div class="form-group">
						<label>Jenis Laptop</label>
						<input type="text" name="jenis_lp" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga Laptop</label>
						<input type="text" name="harga_lp" class="form-control">
					</div>
					<button type="submit" class="btn btn-info btn-block">Tambah Laptop</button>					
				</form>
				
			</div>
			<div class="col-sm-8">
				<h3>Tabel Daftar Laptop</h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Laptop</th>
							<th>Merk</th>
							<th>Jenis Laptop</th>
							<th>Harga Laptop</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['nama_laptop']; ?></td>
							<td><?php echo $row['merk']; ?></td>
							<td><?php echo $row['jenis']; ?></td>
							<td><?php echo $row['harga_laptop']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id_laptop'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['id_laptop']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>
</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html> 
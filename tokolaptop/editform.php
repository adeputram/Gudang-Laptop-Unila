<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Laptop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

include('dbconnect.php');

$query = "SELECT * FROM laptop WHERE id_laptop='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Laptop</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_lp" value="<?php echo $row['id_laptop']; ?>">

		<div class="form-group">
			<label>Nama Laptop</label>
			<input type="text" name="nama_lp" class="form-control" value="<?php echo $row['nama_laptop']; ?>">			
		</div>

		<div class="form-group">
			<label>Merk</label>
			<input type="text" name="merk_lp" class="form-control" value="<?php echo $row['merk']; ?>">			
		</div>

		<div class="form-group">
			<label>Jenis Laptop</label>
			<input type="text" name="jenis_lp" class="form-control" value="<?php echo $row['jenis']; ?>">			
		</div>

		<div class="form-group">
			<label>Harga Laptop</label>
			<input type="text" name="harga_lp" class="form-control" value="<?php echo $row['harga_laptop']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Laptop</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 
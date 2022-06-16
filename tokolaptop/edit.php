<?php
include('dbconnect.php');

$id = $_GET['id_lp'];
$nama = $_GET['nama_lp'];
$merk = $_GET['merk_lp'];
$jenis = $_GET['jenis_lp'];
$harga = $_GET['harga_lp'];

//query update
$query = "UPDATE laptop SET nama_laptop='$nama' , merk='$merk' , jenis='$jenis' , harga_laptop='$harga' WHERE id_laptop='$id' ";

if (mysqli_query($conn, $query)) {
	header("location:index.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php

include('dbconnect.php');

$nama = $_POST['nama_lp'];
$merk = $_POST['merk_lp'];
$jenis = $_POST['jenis_lp'];
$harga = $_POST['harga_lp'];

//query

$query =  "INSERT INTO laptop(nama_laptop , merk , jenis , harga_laptop) VALUES('$nama' , '$merk' , '$jenis' , '$harga')";

if (mysqli_query($conn , $query)) {
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php 

$id = $_GET['id'];

include('dbconnect.php');

$query = "DELETE FROM laptop WHERE id_laptop = '$id' ";

if (mysqli_query($conn , $query)) {
	header("location:index.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>
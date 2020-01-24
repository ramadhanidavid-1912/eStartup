<?php 

include "koneksi_perpustakaan.php";
$id_awal = $_GET['idawal'];

if(!empty($id_awal)){
mysqli_query($koneksi, "DELETE FROM operator WHERE id_operator='$id_awal'");	
header ('location:1table_operator_perpustakaan.php');
} else {
	header ('location:1table_operator_perpustakaan.php');
}

?>
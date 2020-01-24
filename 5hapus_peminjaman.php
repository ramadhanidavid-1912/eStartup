<?php 

include "koneksi_perpustakaan.php";
$id_tiga = $_GET['idtiga'];

if(!empty($id_tiga)){
mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman='$id_tiga'");	
header ('location:5table_peminjaman_perpustakaan.php');
} else {
	header ('location:5table_peminjaman_perpustakaan.php');
}

?>
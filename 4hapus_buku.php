<?php 

include "koneksi_perpustakaan.php";
$id_dua = $_GET['iddua'];

if(!empty($id_dua)){
mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id_dua'");	
header ('location:4table_buku_perpustakaan.php');
} else {
	header ('location:4table_buku_perpustakaan.php');
}

?>
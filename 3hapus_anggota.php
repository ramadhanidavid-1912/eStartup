<?php 

include "koneksi_perpustakaan.php";
$nim_awal = $_GET['nimawal'];

if(!empty($nim_awal)){
mysqli_query($koneksi, "DELETE FROM anggota WHERE nim='$nim_awal'");	
header ('location:3table_anggota_perpustakaan.php');
} else {
	header ('location:3table_anggota_perpustakaan.php');
}

?>
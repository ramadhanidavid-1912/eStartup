<?php 
include "koneksi_perpustakaan.php";
$id_bukux = $_POST ['idbuku'];
$judul_bukux = $_POST ['judulbuku'];
$pengarangx = $_POST['pengarang'];
$penerbitx = $_POST['penerbit'];
$tahun_terbitx = $_POST['tahunterbit'];
$stokx = $_POST ['stok'];


if(!empty($id_bukux) && !empty($judul_bukux) && !empty($pengarangx) && !empty($penerbitx) && !empty($tahun_terbitx) && !empty($stokx))
{
	mysqli_query($koneksi, "INSERT INTO buku (id_buku,judul_buku,pengarang,penerbit,tahun_terbit,stok) VALUES ('$id_bukux','$judul_bukux','$pengarangx','$penerbitx','$tahun_terbitx','$stokx')");
	header ('location:4table_buku_perpustakaan.php');
}else {
	header ('location:4form_buku.php');
}

?>
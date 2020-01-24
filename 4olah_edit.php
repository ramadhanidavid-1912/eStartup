<?php
include "koneksi_perpustakaan.php";
$id_bukux = $_POST ['idbukuform'];
$judul_bukux = $_POST ['judulbukuform'];
$pengarangx = $_POST['pengarangform'];
$penerbitx = $_POST ['penerbitform'];
$tahun_terbitx = $_POST ['tahunterbitform'];
$stokx = $_POST['stokform'];

if(!empty($id_bukux) && !empty($judul_bukux) && !empty($pengarangx) && !empty($penerbitx) && !empty($tahun_terbitx) && !empty($stokx))
{
	mysqli_query($koneksi, "UPDATE buku SET judul_buku ='$judul_bukux', pengarang = '$pengarangx', penerbit = '$penerbitx', tahun_terbit = '$tahun_terbitx', stok = '$stokx' where id_buku = '$id_bukux' ");
	header ('location:4table_buku_perpustakaan.php');
}else {
	header ('location:4edit_buku.php');
}

?>
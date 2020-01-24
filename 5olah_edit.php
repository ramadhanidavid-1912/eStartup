<?php
include "koneksi_perpustakaan.php";
$id_peminjamanx = $_POST ['formidpeminjaman'];
$nimx = $_POST ['formnim'];
$id_bukux = $_POST['formidbuku'];
$tgl_peminjamanx = $_POST ['formtglpeminjaman'];
$lama_peminjamanx = $_POST ['formlamapeminjaman'];
$tgl_pengembalianx = $_POST ['formtglpengembalian'];
$jumlahx = $_POST['formjumlah'];

if(!empty($id_peminjamanx) && !empty($nimx) && !empty($id_bukux) && !empty($tgl_peminjamanx) && !empty($lama_peminjamanx) && !empty($tgl_pengembalianx) && !empty($jumlahx))
{
	mysqli_query($koneksi, "UPDATE peminjaman SET nim ='$nimx', id_buku = '$id_bukux', tgl_peminjaman = '$tgl_peminjamanx', lama_peminjaman = '$lama_peminjamanx', tgl_pengembalian = '$tgl_pengembalianx', jumlah = '$jumlahx' where id_peminjaman = '$id_peminjamanx' ");
	header ('location:5table_peminjaman_perpustakaan.php');
}else {
	header ('location:5edit_peminjaman.php');
}

?>
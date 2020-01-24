<?php 
include "koneksi_perpustakaan.php";
$id_peminjamanx = $_POST ['idpeminjaman'];
$nimx = $_POST ['nimanggota'];
$id_bukux = $_POST ['idbuk'];
$tgl_peminjamanx = $_POST['tglpeminjaman'];
$lama_peminjamanx = $_POST['lamapeminjaman'];
$tgl_pengembalianx = $_POST['tglpengembalian'];
$jumlahx = $_POST ['jumlah'];


if(!empty($id_peminjamanx) && !empty($nimx) && !empty($id_bukux) && !empty($tgl_peminjamanx) && !empty($lama_peminjamanx) && !empty($tgl_pengembalianx) && !empty($jumlahx))
{
	mysqli_query($koneksi, "INSERT INTO peminjaman (id_peminjaman,nim,id_buku,tgl_peminjaman,lama_peminjaman,tgl_pengembalian,jumlah) VALUES ('$id_peminjamanx','$nimx','$id_bukux','$tgl_peminjamanx','$lama_peminjamanx','$tgl_pengembalianx','$jumlahx')");
	header ('location:5table_peminjaman_perpustakaan.php');
}else {
	header ('location:5form_peminjaman.php');
}
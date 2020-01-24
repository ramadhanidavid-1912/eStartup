<?php 

$namaserver = "localhost";
$namadatabase = "perpustakaan";
$username = "root";
$password = "";

$koneksi = mysqli_connect($namaserver, $username, $password, $namadatabase);

if(!$koneksi){
	die ("Koneksi Gagal : " . mysqli_connect_error());
} 
//echo "berhasil";
?>
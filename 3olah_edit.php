<?php
include "koneksi_perpustakaan.php";
$nimx = $_POST ['nim'];
$nama_anggotax = $_POST ['namaanggota'];
$genderx = $_POST['gender'];
$jurusanx = $_POST ['jurusan'];
$statusx = $_POST ['status'];
$passwordx = $_POST ['password'];
$no_hpx = $_POST['nohp'];
$alamatx = $_POST['alamat'];

if(!empty($nimx) && !empty($nama_anggotax) && !empty($genderx) && !empty($jurusanx) && !empty($statusx)&& !empty($passwordx)&& !empty($no_hpx) && !empty($alamatx))
{
	mysqli_query($koneksi, "UPDATE anggota SET nama_anggota ='$nama_anggotax', gender = '$genderx', jurusan = '$jurusanx', status = '$statusx', password = '$passwordx', no_hp = '$no_hpx', alamat = '$alamatx' where nim = '$nimx' ");
	header ('location:3table_anggota_perpustakaan.php');
}else {
	header ('location:3edit_anggota.php');
}

?>
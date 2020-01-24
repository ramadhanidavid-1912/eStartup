<?php 
include "koneksi_perpustakaan.php";
$nimx = $_POST ['nim'];
$nama_anggotax = $_POST ['namaanggota'];
$genderx = $_POST['gender'];
$jurusanx = $_POST['jurusan'];
$statusx = $_POST['statusanggota'];
$password_anggotax = $_POST ['passwordanggota'];
$nohp_anggotax = $_POST['nohpanggota'];
$alamatx = $_POST['alamat'];

if(!empty($nimx) && !empty($nama_anggotax) && !empty($genderx) && !empty($jurusanx) && !empty($password_anggotax) && !empty($nohp_anggotax) && !empty($alamatx))
{
	mysqli_query($koneksi, "INSERT INTO anggota (nim,nama_anggota,gender,jurusan,status,password,no_hp,alamat) VALUES ('$nimx','$nama_anggotax','$genderx','$jurusanx','$statusx','$password_anggotax','$nohp_anggotax','$alamatx')");
	header ('location:3table_anggota_perpustakaan.php');
}else {
	header ('location:3form_anggota.php');
}

?>
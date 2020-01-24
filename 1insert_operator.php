<?php 
include "koneksi_perpustakaan.php";
$id_operatorx = $_POST ['idoperator'];
$nama_operatorx = $_POST ['namaoperator'];
$statusx = $_POST['status'];
$passwordx = $_POST ['password'];
$nohpx = $_POST['nohp'];

if(!empty($id_operatorx) && !empty($nama_operatorx) && !empty($statusx) && !empty($passwordx) && !empty($nohpx))
{
	mysqli_query($koneksi, "INSERT INTO operator (id_operator,nama_operator,status,password,no_hp) VALUES ('$id_operatorx','$nama_operatorx','$statusx','$passwordx','$nohpx')");
	header ('location:1table_operator_perpustakaan.php');
}else {
	header ('location:1form_operator.php');
}

?>
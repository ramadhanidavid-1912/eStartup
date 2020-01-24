<?php
include "koneksi_perpustakaan.php";
$id_operatorx = $_POST ['idoperator'];
$nama_operatorx = $_POST ['namaoperator'];
$statusx = $_POST['status'];
$passwordx = $_POST ['password'];
$nohpx = $_POST['nohp'];

if(!empty($id_operatorx) && !empty($nama_operatorx) && !empty($statusx) && !empty($passwordx) && !empty($nohpx))
{
	mysqli_query($koneksi, "UPDATE operator SET nama_operator ='$nama_operatorx', status = '$statusx', password = '$passwordx', no_hp = '$nohpx' where id_operator = '$id_operatorx' ");
	header ('location:1table_operator_perpustakaan.php');
}else {
	header ('location:1edit_operator.php');
}

?>
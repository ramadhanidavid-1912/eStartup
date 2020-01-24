<?php

SESSION_START();

include 'koneksi_perpustakaan.php';


$idoperatorx = $_POST['idoperatorform'];
$passwordx = $_POST['passwordform'];
$statusx = $_POST ["statusform"];


$query = mysqli_query($koneksi,"select * from operator where id_operator = '$idoperatorx'");
while ($m = mysqli_fetch_array($query)){

	if ($idoperatorx ==$m['id_operator'] && $passwordx ==$m['password'] && $statusx ==$m['status']){
		
	$_SESSION['idoperator'] = $m['id_operator'];
	$_SESSION['password'] =  $m['password'];
	$_SESSION['status'] = $m['status'];

	if ($_SESSION['status']=="Admin"){
		header('location:1table_operator_perpustakaan.php');

	}else{
		header('location:7menu_perpustakaan.php');
	}

}else{
	echo "LOGIN GAGAL<br>";
	session_destroy();
}
}


?>
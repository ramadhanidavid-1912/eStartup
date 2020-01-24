<?php

SESSION_START();

include 'koneksi_perpustakaan.php';


$nimx = $_POST['nimform'];
$passwordanggotax = $_POST['passwordanggota'];



$query = mysqli_query($koneksi,"select * from anggota where nim = '$nimx'");
while ($m = mysqli_fetch_array($query)){

	if ($nimx ==$m['nim'] && $passwordanggotax ==$m['password']){
		
	$_SESSION['nim'] = $m['nim'];
	$_SESSION['password']= $m['password'];

	echo "LOGIN BERHASIL<br>";
	print $m['nim'];
	}else{
	echo "LOGIN GAGAL<br>";
	session_destroy();
	}
}
?>
<a href="8data_peminjaman.php?nimlima=<?php echo $m['nim']; ?>"> LIHAT DATA </a>
<html>
	<head>
		<title> DATA ANGGOTA</title>
	</head>
		<body>
		<a href="6olah_tampil.php">  Tambah data</a><br>
		<?php
			include "koneksi_perpustakaan.PHP";
		?>
		<?php
		
			$query = mysqli_query($koneksi, "select * from anggota");
			while ($m = mysqli_fetch_array($query)){
		
			print $m['nim'];
			}
			?>
			
			<h2> MASUK UNTUK MELIHAT DATA</h2>
			<a href="6olah_tampil.php?nimempat=<?php echo $m['nim']; ?>"> LIHAT DATA </a> 
		</body>
</html>
<?phpSESSION_START();?>
<html>
	<head>
		<title>ANGGOTA</title>
	</head>
	<body>
		<h2> DATA ANGGOTA </h2>
		<!--<a href="3form_anggota.php">  Tambah data</a><br>-->
		<?php
			include "koneksi_perpustakaan.PHP";
		?>
		<table width="600" border="1" cellspacing="0" cellpadding="0" >
		<tr>
			<td align="center">No</td>
			<td align="center">NIM</td>
			<td align="center">NAMA ANGGOTA</td>
			<td align="center">GENDER</td>
			<td align="center">JURUSAN</td>
			<td align="center">STATUS</td>
			<td align="center">PASSWORD</td>
			<td align="center">NO HP</td>
			<td align="center">ALAMAT</td>
			<td align="center">PILIHAN AKSI </td>

		</tr>
			<?php
			$nim_empat = $_GET['nimempat'];
		$i = 0;
			$query = mysqli_query($koneksi, "select * from anggota where nim ='$nim_empat'");
			while ($m = mysqli_fetch_array($query)){
				
			$i++;
		?>
		<tr>
			<td><?php print $i;?></td>
			<td><?php print $m['nim'];?></td>
			<td><?php print $m['nama_anggota'];?></td>
			<td><?php print $m['gender'];?></td>
			<td><?php print $m['jurusan'];?></td>
			<td><?php print $m['status'];?></td>
			<td><?php print $m['password'];?></td>
			<td><?php print $m['no_hp'];?></td>
			<td><?php print $m['alamat'];?></td>
		</tr>	
<?php
		}
?>		
		</table>
	</body>
</html>
	<?phpinclude 'koneksi_perpustakaan.php';
	$nim_lima = $_GET['nimlima'];
	$query = mysqli_query($koneksi, "SELECT anggota.nim,anggota.nama_anggota,buku.judul_buku,peminjaman.tgl_peminjaman,peminjaman.lama_peminjaman,peminjaman.tgl_pengembalian,peminjaman.jumlah FROM (anggota LEFT JOIN peminjaman ON anggota.nim= peminjaman.nim)LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku WHERE nim = '$nimawalx'");
	$m = mysqli_fetch_array($query);
	 ?>

		<table>
		<tr>
		<td> NIM </td>
		<td>:</td>
		<td><?php print $m['nim']; ?></td>
		</tr>
		<tr>
		<td> NAMA ANGGOTA </td>
		<td>:</td>
		<td><?php print $m['nama_anggota']; ?></td>
		</tr>
		<tr>
		<td>JUDUL BUKU</td>
		<td>:</td>
		<td><?php print $m['judul_buku']; ?></td>		
		</tr>
		<tr>
		<td>TANGGAL PEMINJAMAN </td>
		<td>:</td>
		<td><?php print $m['tgl_peminjaman']; ?></td>		
		</tr>
		<tr>
		<td>LAMA PEMINJAMAN </td>
		<td>:</td>
		<td><?php print $m['lama_peminjaman']; ?></td>		
		</tr>
		<tr>
		<td>TANGAL PENGEMBALIAN </td>
		<td>:</td>
		<td><?php print $m['tgl_pengembalian']; ?></td>		
		</tr>
		<tr>
		<td>JUMLAH </td>
		<td>:</td>
		<td><?php print $m['jumlah']; ?></td>	
		</tr>

	</table><br><br><br><br>
	<?php}?>
	<a href="index.php"> KEMBALI KE LOGIN </a><br><br><br><br>
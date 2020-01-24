
		<h2> DATA PEMINJAMAN ANGGOTA <h2>
		
<?php include 'koneksi_perpustakaan.php';
	$id_tiga = $_GET['idtiga'];
	$query = mysqli_query($koneksi, "SELECT anggota.nama_anggota,buku.judul_buku,peminjaman.tgl_peminjaman,peminjaman.lama_peminjaman,peminjaman.tgl_pengembalian,peminjaman.jumlah FROM (anggota LEFT JOIN peminjaman ON anggota.nim= peminjaman.nim)LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku WHERE id_peminjaman ='$id_tiga'");
	$m = mysqli_fetch_array($query);
	 ?>

		<table>
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

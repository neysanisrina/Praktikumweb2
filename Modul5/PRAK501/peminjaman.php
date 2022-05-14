<?php include "koneksi.php"; include "model.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<a href="buku.php">Buku</a>&nbsp;
	<a href="member.php">Member</a>&nbsp;
	<a href="peminjaman.php">Peminjaman</a>
	<hr>
	<h2>Data Peminjaman</h2>
	<a href="formpeminjaman.php">Tambah Peminjaman</a>	
	<table border=1>
		<tr><th>ID Peminjaman</th><th>Tanggal Peminjaman</th><th>Tanggal Pengembalian</th><th>Aksi</th></tr>
			<?php get_peminjaman(); ?>
	</table>
</body>
</html>
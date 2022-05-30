<?php
session_start();
if (isset($_SESSION['nama_member']) == '')
{
	header("location: formlogin.php");
}
require_once("koneksi.php");
include "model.php";
?>
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
	<a href="peminjaman.php">Peminjaman</a>&nbsp;
	<hr>
	<h2>Data Buku</h2>
	<a href="formbuku.php">Tambah Buku</a>	
	<table border=1>
		<tr><th>ID Buku</th><th>Judul Buku</th><th>Penulis</th><th>Penerbit</th>
			<th>Tahun Terbit</th><th>Aksi</th></tr>
			<?php get_buku(); ?>
	</table>
</body>
</html>
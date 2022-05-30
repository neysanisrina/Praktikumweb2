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
	<h2>Data Member</h2>
	<a href="formmember.php">Tambah Member</a>	
	<table border=1>
		<tr><th>ID Member</th><th>Nama Member</th><th>Nomor Member</th><th>Password Member</th><th>Alamat</th><th>Tanggal Daftar</th><th>Tanggal Terakhir Bayar</th><th>Aksi</th></tr>
			<?php get_member(); ?>
	</table>
</body>
</html>
<?php include "koneksi.php"; include "model.php"; 


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

	if(isset($_GET['id'])){
				$id = $_GET['id'];
				$editbuku = mysqli_query($db, "SELECT*FROM buku WHERE id_buku='$id'");
				$d=mysqli_fetch_array($editbuku);
	?>
		<h2>Form Edit Buku</h2>
			<table>
			<form action="" method="POST">
				<tr><td>ID Buku</td><td> <input type="text" name="id_buku"value="<?php echo $d['id_buku'] ?>"></td></tr>
				<tr><td>Judul Buku</td><td> <input type="text" name="judul_buku" value="<?php echo $d['judul_buku'] ?>"></td></tr>
				<tr><td>Penulis</td><td> <input type="text" name="penulis" value="<?php echo $d['penulis'] ?>"></td></tr>
				<tr><td>Penerbit</td><td> <input type="text" name="penerbit" value="<?php echo $d['penerbit'] ?>"></td></tr>
				<tr><td>Tahun Terbit</td><td> <input type="text" name="tahun_terbit" value="<?php echo $d['tahun_terbit'] ?>"></td></tr>
				<tr><td></td><td><input type="submit" name="edit" value="Simpan"></td></tr>
			</form>
			</table>
	<?php
		if(isset($_POST['edit'])){
			edit_buku();
		}
	}
	else{
		?>
			<h2>Form Tambah Buku</h2>
			<table>
			<form action="" method="POST">
				<tr><td>ID Buku</td><td> <input type="text" name="id_buku"></td></tr>
				<tr><td>Judul Buku</td><td> <input type="text" name="judul_buku"></td></tr>
				<tr><td>Penulis</td><td> <input type="text" name="penulis"></td></tr>
				<tr><td>Penerbit</td><td> <input type="text" name="penerbit"></td></tr>
				<tr><td>Tahun Terbit</td><td> <input type="text" name="tahun_terbit"></td></tr>
				<tr><td></td><td><input type="submit" name="tambah" value="Simpan"></td></tr>
			</form>
			</table>
	</table>
	<?php
		if(isset($_POST['tambah'])){
			add_buku();
		}
	}
	?>
</body>
</html>
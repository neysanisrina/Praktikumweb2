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
				$editpeminjaman = mysqli_query($db, "SELECT*FROM peminjaman WHERE id_peminjaman='$id'");
				$d=mysqli_fetch_array($editpeminjaman);
	
	?>
		<h2>Form Edit Peminjaman</h2>
			<table>
			<form action="" method="POST">
				<tr><td>ID Peminjaman</td><td> <input type="text" name="id_peminjaman"value="<?php echo $d['id_peminjaman'] ?>"></td></tr>
				<tr><td>Tanggal Peminjaman</td><td> <input type="text" name="tgl_pinjam" value="<?php echo $d['tgl_pinjam'] ?>"></td></tr>
				<tr><td>Tanggal Pengembalian</td><td> <input type="text" name="tgl_kembali" value="<?php echo $d['tgl_kembali'] ?>"></td></tr>
				<tr><td></td><td><input type="submit" name="edit" value="Simpan"></td></tr>
			</form>
			</table>
	<?php
		if(isset($_POST['edit'])){
			edit_peminjaman();
		}
	}
	else{
		?>
			<h2>Form Tambah Peminjaman</h2>
			<table>
			<form action="" method="POST">
				<tr><td>ID Peminjaman</td><td> <input type="text" name="id_peminjaman"></td></tr>
				<tr><td>Tanggal Peminjaman</td><td> <input type="text" name="tgl_pinjam"></td></tr>
				<tr><td>Tanggal Pengembalian</td><td> <input type="text" name="tgl_kembali"></td></tr>
				<tr><td></td><td><input type="submit" name="tambah" value="Simpan"></td></tr>
			</form>
			</table>
	</table>
	<?php
		if(isset($_POST['tambah'])){
			add_peminjaman();
		}
	}
	?>
</body>
</html>
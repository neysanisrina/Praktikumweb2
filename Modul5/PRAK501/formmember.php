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
	$editmember = mysqli_query($db, "SELECT*FROM member WHERE id_member='$id'");
	$d=mysqli_fetch_array($editmember);
	?>
		<h2>Form Edit Member</h2>
			<table>
			<form action="" method="POST">
				<tr><td>ID Member</td><td> <input type="text" name="id_member"value="<?php echo $d['id_member'] ?>"></td></tr>
				<tr><td>Nama Member</td><td> <input type="text" name="nama_member" value="<?php echo $d['nama_member'] ?>"></td></tr>
				<tr><td>Nomor Member</td><td> <input type="text" name="nomor_member" value="<?php echo $d['nomor_member'] ?>"></td></tr>
				<tr><td>Alamat</td><td> <input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td></tr>
				<tr><td>Tanggal Daftar</td><td> <input type="text" name="tgl_mendaftar" value="<?php echo $d['tgl_mendaftar'] ?>"></td></tr>
				<tr><td>Tanggal Terakhir Bayar</td><td> <input type="text" name="tgl_terakhir_bayar" value="<?php echo $d['tgl_terakhir_bayar'] ?>"></td></tr>
				<tr><td></td><td><input type="submit" name="edit" value="Simpan"></td></tr>
			</form>
			</table>
	<?php
		if(isset($_POST['edit'])){
			edit_member();
		}
	}
	else{
		?>
			<h2>Form Tambah Member</h2>
			<table>
			<form action="" method="POST">
				<tr><td>ID Member</td><td> <input type="text" name="id_member"></td></tr>
				<tr><td>Nama Member</td><td> <input type="text" name="nama_member"></td></tr>
				<tr><td>Nomor Member</td><td> <input type="text" name="nomor_member"></td></tr>
				<tr><td>Alamat</td><td> <input type="text" name="alamat"></td></tr>
				<tr><td>Tanggal Daftar</td><td> <input type="text" name="tgl_mendaftar"></td></tr>
				<tr><td>Tanggal Terakhir Bayar</td><td> <input type="text" name="tgl_terakhir_bayar"></td></tr>
				<tr><td></td><td><input type="submit" name="tambah" value="Simpan"></td></tr>
			</form>
			</table>
	</table>
	<?php
		if(isset($_POST['tambah'])){
			add_member();
		}
	}
	?>
</body>
</html>
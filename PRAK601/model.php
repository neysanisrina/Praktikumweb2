<?php 
		function get_buku() {
			include "koneksi.php";
			$tampilbuku = mysqli_query($db, "SELECT*FROM buku");
				foreach($tampilbuku as $d)
				{
					echo "
					<tr>
						<td>$d[id_buku]</td>
						<td>$d[judul_buku]</td>
						<td>$d[penulis]</td>
						<td>$d[penerbit]</td>
						<td>$d[tahun_terbit]</td>		
						<td>
							<a href=formbuku.php?id=$d[id_buku]>Edit</a>
							<a href='?id=$d[id_buku]'
							onclick = \" return confirm('Yakin Hapus $d[judul_buku]'); \"
							'>Hapus</a>				
						</td>		
					</tr>";
					if(isset($_GET['id'])){
						delete_buku();
					}
				}
		}


		function get_member() {
			include "koneksi.php";
			$tampilmember = mysqli_query($db, "SELECT*FROM member");
				foreach($tampilmember as $d)
				{
					echo "
					<tr>
						<td>$d[id_member]</td>
						<td>$d[nama_member]</td>
						<td>$d[nomor_member]</td>
						<td>$d[password_member]</td>
						<td>$d[alamat]</td>
						<td>$d[tgl_mendaftar]</td>
						<td>$d[tgl_terakhir_bayar]</td>		
						<td>
							<a href=formmember.php?id=$d[id_member]>Edit</a>
							<a href='?id=$d[id_member]'
							onclick = \" return confirm('Yakin Hapus $d[nama_member]'); \"
							'>Hapus</a>				
						</td>		
					</tr>";
					if(isset($_GET['id'])){
						delete_member();
					}
				}
		}


		function get_peminjaman() {
			include "koneksi.php";
			$tampilpeminjaman = mysqli_query($db, "SELECT*FROM peminjaman");
				foreach($tampilpeminjaman as $d)
				{
					echo "
					<tr>
						<td>$d[id_peminjaman]</td>
						<td>$d[tgl_pinjam]</td>
						<td>$d[tgl_kembali]</td>	
						<td>
							<a href=formpeminjaman.php?id=$d[id_peminjaman]>Edit</a>
							<a href='?id=$d[id_peminjaman]'
							onclick = \" return confirm('Yakin Hapus $d[id_peminjaman]'); \"
							'>Hapus</a>				
						</td>		
					</tr>";
					if(isset($_GET['id'])){
						delete_peminjaman();
					}
				}
		}


		function delete_buku() {
			include "koneksi.php";
			mysqli_query($db,"DELETE FROM buku WHERE id_buku='$_GET[id]'");
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/PRAK501/buku.php'";
		}
		

		function delete_member() {
			include "koneksi.php";
			mysqli_query($db,"DELETE FROM member WHERE id_member='$_GET[id]'");
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/PRAK501/member.php'";
		}


		function delete_peminjaman() {
			include "koneksi.php";
			mysqli_query($db,"DELETE FROM peminjaman WHERE id_peminjaman='$_GET[id]'");
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/PRAK501/peminjaman.php'";
		}


		function add_buku(){
			include "koneksi.php";
			$id_buku = $_POST['id_buku'];
			$judul_buku = $_POST['judul_buku'];
			$penulis = $_POST['penulis'];
			$penerbit = $_POST['penerbit'];
			$tahun_terbit = $_POST['tahun_terbit'];

			mysqli_query($db, "INSERT INTO buku VALUES(
				'$id_buku','$judul_buku','$penulis','$penerbit','$tahun_terbit'
				)") or DIE(mysqli_error($db));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/PRAK501/buku.php'";
		}


		function add_member(){
			include "koneksi.php";
			$id_member = $_POST['id_member'];
			$nama_member = $_POST['nama_member'];
			$password_member = $_POST['password_member'];
			$nomor_member = $_POST['nomor_member'];
			$alamat = $_POST['alamat'];
			$tgl_mendaftar = $_POST['tgl_mendaftar'];
			$tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

			mysqli_query($db, "INSERT INTO member VALUES(
				'$id_member','$nama_member','$password_member','$nomor_member','$alamat','$tgl_mendaftar','$tgl_terakhir_bayar'
				)") or DIE(mysqli_error($db));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/PRAK501/member.php'";
		}


		function add_peminjaman(){
			include "koneksi.php";
			$id_peminjaman = $_POST['id_peminjaman'];
			$tgl_pinjam = $_POST['tgl_pinjam'];
			$tgl_kembali = $_POST['tgl_kembali'];

			mysqli_query($db, "INSERT INTO peminjaman VALUES(
				'$id_peminjaman','$tgl_pinjam','$tgl_kembali'
				)") or DIE(mysqli_error($db));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/PRAK501/peminjaman.php'";
		}


		function edit_buku(){
			include "koneksi.php";
			$id = $_GET['id'];
			$judul_buku = $_POST['judul_buku'];
			$penulis = $_POST['penulis'];
			$penerbit = $_POST['penerbit'];
			$tahun_terbit = $_POST['tahun_terbit'];

			mysqli_query($db, "UPDATE buku 
				SET judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit'
				WHERE id_buku='$id'
				") or DIE(mysqli_error($db));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/PRAK501/buku.php'";
		}


		function edit_member(){
			include "koneksi.php";
			$id = $_GET['id'];
			$nama_member = $_POST['nama_member'];
			$nomor_member = $_POST['nomor_member'];
			$password_member = $_POST['password_member'];
			$alamat = $_POST['alamat'];
			$tgl_mendaftar = $_POST['tgl_mendaftar'];
			$tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

			mysqli_query($db, "UPDATE member 
				SET nama_member='$nama_member', nomor_member='$nomor_member',password_member='$password_member', alamat='$alamat', tgl_mendaftar='$tgl_mendaftar', tgl_terakhir_bayar='$tgl_terakhir_bayar'
				WHERE id_member='$id'
				") or DIE(mysqli_error($db));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/PRAK501/member.php'";
		}
	


		function edit_peminjaman(){
			include "koneksi.php";
			$id = $_GET['id'];
			$tgl_pinjam = $_POST['tgl_pinjam'];
			$tgl_kembali = $_POST['tgl_kembali'];

			mysqli_query($db, "UPDATE peminjaman 
				SET tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali'
				WHERE id_peminjaman='$id'
				") or DIE(mysqli_error($db));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/PRAK501/peminjaman.php'";
		}

?>
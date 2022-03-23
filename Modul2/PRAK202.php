<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

		<?php 

		$nama=" ";
		$nim=" ";
		$jk=" ";

		if(isset($_POST['submit']))
		{
			$nama = $_POST['nama'];
			$nim = $_POST['nim'];
			if(!empty($_POST['jk'])) {
        $jk=$_POST['jk'];
      }
	 	}
		
	?>

	<form action="PRAK202.php" method="POST">
	Nama: <input type="text" name="nama"value="<?php echo $nama; ?>"><b style='color:red;'>*</b>

	<?php
	if(isset($_POST['submit']))
		{
			if(empty($_POST['nama'])){
				echo "<b style='color:red;'>nama tidak boleh kosong</b>";
			}
		}
		?>
	<br>

	Nim: <input type="text" name="nim" value="<?php echo $nim; ?>"><b style='color:red;'>*</b>

	<?php
	if(isset($_POST['submit']))
		{
			if(empty($_POST['nim'])){
				echo "<b style='color:red;'>nim tidak boleh kosong</b>";
			}
		}
		?>
	<br>

	Jenis Kelamin: <b style='color:red;'>*</b>
	<?php
	if(isset($_POST['submit']))
		{
			if(empty($_POST['jk'])){
				echo "<b style='color:red;'>jenis kelamin tidak boleh kosong</b>";
			}
		}
		?>
	<br>
	<input type=radio name=jk value="Laki-Laki" <?php if(isset($_POST['submit']))
		{if($jk == "Laki-Laki"){ echo"checked";}}?> >Laki-Laki<br>


	<input type=radio name=jk value="Perempuan" <?php if(isset($_POST['submit']))
		{if($jk == "Perempuan"){ echo"checked";}}?> >Perempuan<br>

	<input type="submit" value="Submit" name="submit">
	</form>

	<?php
	 if(isset($_POST['submit']))	{
		if(!empty($nama) && !empty($nim) &&!empty($jk))	{
			echo"<h2><b>Output  :</b></h2>";
			echo $nama;
			echo"<br>";
			echo $nim;
			echo"<br>";
			echo $jk;
		}
	 }

	 ?>
</body>
</html>
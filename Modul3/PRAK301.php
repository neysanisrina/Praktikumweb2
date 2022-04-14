<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> PRAK 301 </title>
</head>
<body>
	<?php 
		$jumlah="";
	?>
	<form action="PRAK301.php" method="POST">
		Jumlah Peserta<input type="number" name="jumlah" value="<?php echo $jumlah; ?>"><br>
		<input type="submit" value="Cetak" name="submit">
	</form>

		<?php
	 	if(isset($_POST['submit']))
		{
			$jumlah = $_POST['jumlah'];
			$i=1;
			while($i <= $jumlah)
			{
				if($i % 2 == 0)
				{
					echo "<p style='color:green;'><b>Peserta ke-$i</p></b>";
				}
				else
				{
					echo "<p style='color:red;'><b>Peserta ke-$i</p></b>";
				}
				$i++;
			}
		}


		?>

</body>
</html>
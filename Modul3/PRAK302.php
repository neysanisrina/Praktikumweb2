<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> PRAK 302</title>
</head>
<body>

	<?php 
		$tinggi="";
		$alamat="https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png";
		if(isset($_POST['submit']))
		{
			$tinggi = $_POST['tinggi'];
	 	}
	?>
	
	<form action="PRAK302.php" method="POST">
		Tinggi :<input type="number" name="tinggi" value="<?php echo $tinggi; ?>"><br>
		Alamat Gambar :<input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
		<input type="submit" value="Cetak" name="submit"><br>
	</form>

	<?php
	 	if(isset($_POST['submit']))
		{
			$tinggi = $_POST['tinggi'];
			$x=1;
			$z=$tinggi;
			while ($x<=$tinggi)
				{
				 	$y=1;
				 	while( $y<=$x)
				 	{
				 	echo "&nbsp &nbsp &nbsp";
				 	$y++;
				 	}
                     $q=1;
                     while ( $q<=$z)
                     {
                     echo "<img src='https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png' style=' width:20px; height:20px;'>";
                     $q++;
                     }
                    echo "<br>";
                    $x++;
                    $z--;
				}
		}
	?>
</body>
</html>
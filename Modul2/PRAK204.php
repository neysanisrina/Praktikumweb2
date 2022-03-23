<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <?php 
	$nilai="0";
	if(isset($_POST['submit']))
	{
		$nilai = $_POST['nilai'];
	}
	?>

	<form action="PRAK204.php" method="POST">
	Nilai : <input type="number" name="nilai" value="<?php echo $nilai; ?>"><br>
	<input type="submit" value="Konversi" name="submit">
	</form>

	<?php
	if(isset($_POST['submit']))
	{
		if($nilai == 0){
    		echo "<h2><b>Hasil: Nol</b></h2>";
		}	
		else if($nilai<10 && $nilai>0){
			echo "<h2><b>Hasil: Satuan</b></h2>";
		}
        else if($nilai<20 && $nilai>=10){
			echo "<h2><b>Hasil: Belasan</b></h2>";
		}
		else if($nilai<100 && $nilai>=20){
			echo "<h2><b>Hasil: Puluhan</b></h2>";
		}
		else if($nilai<999 && $nilai>=100){
			echo "<h2><b>Hasil: Ratusan</b></h2>";
		}
		else{
			echo "<h2><b>Hasil: Anda Menginput Melebihi Limit Bilangan</b></h2>";
		}
	}
	?>


</body>
</html>
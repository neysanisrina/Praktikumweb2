<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$suhu="";
		$dari="";
		$ke="";

		if(isset($_POST['submit']))
		{
			$suhu = $_POST['suhu'];
			$dari = $_POST['dari'];
			$ke = $_POST['ke'];
		}
	?>

<form action="PRAK203.php" method="POST">
	Nilai<input type="number" name="suhu"value="<?php echo $suhu; ?>"><br>
	Dari : <br>
	<input type=radio name=dari value="C" <?php if(isset($_POST['submit']))
		{if($dari == "C"){ echo"checked";}}?>>Celcius<br>
	<input type=radio name=dari value="F" <?php if(isset($_POST['submit']))
		{if($dari == "F"){ echo"checked";}}?>>Fahrenheit<br>
	<input type=radio name=dari value="R" <?php if(isset($_POST['submit']))
		{if($dari == "R"){ echo"checked";}}?>>Rheamur<br>
	<input type=radio name=dari value="K" <?php if(isset($_POST['submit']))
		{if($dari == "K"){ echo"checked";}}?>>Kelvin<br>
	Ke : <br>
	<input type=radio name=ke value="C" <?php if(isset($_POST['submit']))
		{if($ke == "C"){ echo"checked";}}?>>Celcius<br>
	<input type=radio name=ke value="F" <?php if(isset($_POST['submit']))
		{if($ke == "F"){ echo"checked";}}?>>Fahrenheit<br>
	<input type=radio name=ke value="R" <?php if(isset($_POST['submit']))
		{if($ke == "R"){ echo"checked";}}?>>Rheamur<br>
	<input type=radio name=ke value="K" <?php if(isset($_POST['submit']))
		{if($ke == "K"){ echo"checked";}}?>>Kelvin<br>

	<input type="submit" value="Konversi" name="submit">
</form>

	<?php
	 if(isset($_POST['submit']))	{
	 	if($_POST['suhu']!="")
		{
			if($_POST['dari']=="C")
			{
				switch ($_POST['ke'])
			{
			case "K":
			  $hasil = $suhu+273;
			  break;
			case "R":
			  $hasil = $suhu*0.8;
			  break;
			case "F":
			  $hasil = $suhu * 1.8 + 32;
			  break;
			default:
			  $hasil = $suhu;
			}
			}
			elseif($_POST['dari']=="K")

			{
				switch ($_POST['ke'])
			{
			case "C":
			  $hasil=$suhu-273;
			  break;
			case "R":
			  $hasil=($suhu- 273) * 0.8;
			  break;
			case "F":
			  $hasil=($suhu- 273) * 1.8 + 32;
			  break;
			default:
			  $hasil= $suhu;
			}

			}

			elseif($_POST['dari']=="R")
			{
			switch ($_POST['ke'])
			{
			case "C":
			  $hasil=$suhu / 0.8;
			  break;
			case "K":
			  $hasil=$suhu / 0.8 + 273;
			  break;
			case "F":
			  $hasil=$suhu * 2.25 + 32;
			  break;
			default:
			  $hasil= $suhu;
			}
			}
			elseif($_POST['dari']=="F")

			{
				switch ($_POST['ke'])
			{
			case "C":
			  $hasil=($suhu- 32) / 1.8;
			  break;
			case "K":
			  $hasil=(($suhu- 32) / 1.8)+273;
			  break;
			case "R":
			  $hasil=($suhu - 32)/2.25;
			  break;
			default:
			  $hasil= $suhu;
			}
			}
			else{
				$hasil=$suhu;
			}
			}
			echo "<b><h2>Hasil Konversi: $hasil °$ke</h2></b>";
		}
		?>

</body>
</html>
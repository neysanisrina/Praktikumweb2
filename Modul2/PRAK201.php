<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

		$nama1="";
		$nama2="";
		$nama3="";
		
		if(isset($_POST['submit']))
		{
			$nama1 = $_POST['nama1'];
			$nama2 = $_POST['nama2'];
			$nama3 = $_POST['nama3'];
	 	}

	?>

	<form action="PRAK201.php" method="POST">
	Nama: 1 <input type="text" name="nama1" value="<?php echo $nama1; ?>"><br>
	Nama: 2 <input type="text" name="nama2" value="<?php echo $nama2; ?>"><br>
	Nama: 3 <input type="text" name="nama3" value="<?php echo $nama3; ?>"><br>
	<input type="submit" value="Urutkan" name="submit">
	</form>

	 <?php
	 if(isset($_POST['submit']))
		{ 	
			 if ($nama1<$nama2 && $nama1<$nama3 && $nama2<$nama3) {
			 	echo"<b>Output</b><br>";
	            echo $nama1;
	            echo "<br>";
	            echo $nama2;
	            echo "<br>";
	            echo $nama3;
	        }
	        elseif ($nama1<$nama2 && $nama1<$nama3 && $nama2>$nama3) {
	        	echo"<b>Output</b><br>";
	            echo $nama1;
	            echo "<br>";
	            echo $nama3;
	            echo "<br>";
	            echo $nama2;
	        }
	        elseif ($nama1>$nama2 && $nama1<$nama3 && $nama2<$nama3) {
	        	echo"<b>Output</b><br>";
	            echo $nama2;
	            echo "<br>";
	            echo $nama1;
	            echo "<br>";
	            echo $nama3;
	        }
	        elseif ($nama1>$nama2 && $nama1>$nama3 && $nama2<$nama3) {
	        	echo"<b>Output</b><br>";
	            echo $nama2;
	            echo "<br>";
	            echo $nama3;
	            echo "<br>";
	            echo $nama1;
	        }
	        elseif ($nama1>$nama2 && $nama1>$nama3 && $nama2>$nama3) {
	        	echo"<b>Output</b><br>";
	            echo $nama3;
	            echo "<br>";
	            echo $nama2;
	            echo "<br>";
	            echo $nama1;
	        }
	        elseif ($nama1<$nama2 && $nama1>$nama3 && $nama2>$nama3) {
	        	echo"<b>Output</b><br>";
	            echo $nama3;
	            echo "<br>";
	            echo $nama1;
	            echo "<br>";
	            echo $nama2;
	        }	
	    }
	 ?>
	</td>
	</tr>
	</table>
</body>
</html>

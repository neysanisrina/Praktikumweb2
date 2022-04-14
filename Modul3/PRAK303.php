<html>

<head>
    <title>PRAK 303</title>
</head>

<body>
    <form action="" method="POST">
        Batas Bawah : <input type="number" name="bawah" value="<?php if (isset($_POST['bawah'])) { echo $_POST['bawah']; } ?>"><br>
        Batas Atas : <input type="number" name="atas" value="<?php if (isset($_POST['atas'])) { echo $_POST['atas']; } ?>"><br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
</body>

</html>

<?php
if (isset($_POST['cetak']))
    if (empty($_POST['atas']) && empty($_POST['bawah'])) {
        echo "Masukkan Batas Bawah dan Atas!";
    } elseif (empty($_POST['atas'])) {
        echo "Masukkan Batas Atas!";
    } elseif (empty($_POST['bawah'])) {
        echo "Masukkan Batas Bawah!";
    } else {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        do {
            if (($bawah + 7) % 5 == 0) {
                echo "<img src='star-images-9441.png' width='20px' height='20px'> ";
            } else {
                echo "$bawah ";
            }
            $bawah++;
        } while ($bawah <= $atas);
    }

?>
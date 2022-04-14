<html>

<head>
    <title>PRAK 304</title>
</head>

<body>
    <?php
    if (isset($_POST['submit']) || isset($_POST['tambah']) || isset($_POST['kurang'])) {
        $bintang = $_POST['bintang'];
        $kondisi = true;
        if (isset($_POST['tambah'])) {
            $bintang++;
        } elseif (isset($_POST['kurang'])) {
            $bintang--;
            if ($bintang <= 0) {
                $kondisi = false; ?>
                <form action="" method="POST">
                    Jumlah Bintang : <input type="number" name="bintang"><br>
                    <input type="submit" value="Submit" name="submit">
                    <br> Bintang kurang dari 1
                </form>
            <?php }
        }
        if ($kondisi == true) {
            echo "Jumlah bintang $bintang<br><br><br>";
            for ($i = 0; $i < $bintang; $i++) {
                echo "<img src='star-images-9441.png' width='75px' height='75px'>";
            }

            ?>
            <form action="" method="POST">
                <input type="text" name="bintang" hidden value="<?php echo $bintang; ?>">
                <input type="submit" value="Tambah" name="tambah">
                <input type="submit" value="Kurang" name="kurang">
            </form>
        <?php }
    } else {
        ?>
        <form action="" method="POST">
            Jumlah Bintang : <input type="number" name="bintang"><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    <?php
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>PRAK 401</title>
</head>

<body>

    <form method="POST">
        <label>Panjang : </label>
        <input name="panjang" type="number" value="<?php if (isset($_POST['panjang'])) {echo $_POST['panjang'];} ?>"><br>
        <label>Lebar : </label>
        <input name="lebar" type="number" value="<?php if (isset($_POST['lebar'])) {echo $_POST['lebar'];} ?>"><br>
        <label>Nilai : </label>
        <input name="nilai" type="text" value="<?php if (isset($_POST['nilai'])) {echo $_POST['nilai'];} ?>"><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>
    <br>
    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = $_POST['nilai'];
        $pisah = explode(" ", $nilai);
        $total = $panjang * $lebar;
        $hitungIsi = count($pisah);

        if ($total != $hitungIsi) {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        } else {
            echo "<table border='1' cellpadding='5%' cellspacing='0'>";
            for ($i = 0; $i < $total; $i++) {
                if ($i == 0) {
                    echo "<tr>";
                    echo "<td>";
                    echo $pisah[$i];
                    echo "</td>";
                } elseif ($i % $panjang == 0) {
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>";
                    echo $pisah[$i];
                } else {
                    echo "<td>";
                    echo $pisah[$i];
                    echo "</td>";
                }
            }
            echo "</table>";
        }
    }
    ?>

</body>

</html>
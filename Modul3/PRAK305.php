<html>

<head>
    <title>PRAK 305</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="karakter">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['karakter'])) {
        echo "Text Kosong! Silahkan Masukkan Text!";
    } else {
        $text = $_POST['karakter'];
        $jumlah = strlen($text);
        echo "<h3>Input :</h3> $text";
        echo "<h3>Output :</h3>";
        for ($i = 0; $i < $jumlah; $i++) {
            for ($j = 0; $j < $jumlah; $j++) {
                if ($j == 0) {
                    echo strtoupper($text[$i]);
                } else {
                    echo strtolower($text[$i]);
                }
            }
        }
    }
}
?>
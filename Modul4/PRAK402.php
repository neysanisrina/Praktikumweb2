<!DOCTYPE html>
<html>

<head>
    <title>PRAK 402</title>
</head>

<body>
    <?php
    $Mahasiswa = [
        "Andi" => [
            "nim" => "2101001",
            "uts" => "87",
            "uas" => "65",
        ],
        "Budi" => [
            "nim" => "2101002",
            "uts" => "76",
            "uas" => "79",
        ],
        "Tono" => [
            "nim" => "2101003",
            "uts" => "50",
            "uas" => "41",
        ],
        "Jessica" => [
            "nim" => "2101004",
            "uts" => "60",
            "uas" => "75",
        ],
    ];
    echo "<table border='1' cellspacing='0'>";
    echo "<tr>";
    echo "<th width='15%'>Nama</th> <th width='15%'>NIM</th> <th width='15%'>Nilai UTS</th> <th width='15%'>Nilai UAS</th> <th width='15%'>Nilai Akhir</th> <th width='15%'>Huruf</th>";
    echo "</tr>";
    foreach ($Mahasiswa as $nama => $keterangan) {
        echo "<tr>";
        echo "<td style='padding-left: 10px;'>" . $nama . "</td>";
        echo "<td style='padding-left: 10px;'>" . $keterangan["nim"] . "</td>";
        echo "<td style='padding-left: 10px;'>" . $keterangan["uts"] . "</td>";
        echo "<td style='padding-left: 10px;'>" . $keterangan["uas"] . "</td>";
        $nilaiAkhir = (40 / 100 * $keterangan["uts"]) + (60 / 100 * $keterangan["uas"]);
        echo "<td style='padding-left: 10px;'>" . $nilaiAkhir . "</td>";
        $huruf;
        if ($nilaiAkhir >= 80 && $nilaiAkhir <= 100) {
            $huruf = "A";
        } elseif ($nilaiAkhir >= 70 && $nilaiAkhir <= 79) {
            $huruf = "B";
        } elseif ($nilaiAkhir >= 60 && $nilaiAkhir <= 69) {
            $huruf = "C";
        } elseif ($nilaiAkhir >= 50 && $nilaiAkhir <= 59) {
            $huruf = "D";
        } else {
            $huruf = "E";
        }
        echo "<td style='padding-left: 10px;'>" . $huruf . "</td>";
        echo "</tr>";
    }
    echo "</table>"
    ?>

</body>

</html>
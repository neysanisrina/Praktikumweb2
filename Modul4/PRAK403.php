<!DOCTYPE html>
<html>

<head>
    <title>PRAK 403</title>
</head>

<body>
    <?php
    $Mahasiswa = [
        "Ridho" => [
            "matkul" => [
                "Pemrograman I" => 2,
                "Praktikum Pemrograman I" => 1,
                "Pengantar Lingkungan Lahan Basah" => 2,
                "Arsitektur Komputer" => 3,
            ],
        ],
        "Ratna" => [
            "matkul" => [
                "Basis Data I" => 2,
                "Praktikum Basis Data I" => 1,
                "Kalkulus" => 3,
            ],
        ],
        "Tono" => [
            "matkul" => [
                "Rekayasa Perangkat Lunak" => 3,
                "Analisis dan Perancangan Sistem" => 3,
                "Komputasi Awan" => 3,
                "Kecerdasan Bisnis" => 3,
            ],
        ],
    ];
    echo "<table border='1' cellspacing='0'>";
    echo "<tr>";
    echo "<th width='35px'>No</th> <th width='100px'>Nama</th> <th width='250px'>Mata Kuliah diambil</th> <th width='60px'>SKS</th> <th width='100px'>Total SKS</th> <th width='17%'>Keterangan</th>";
    echo "</tr>";
    $no = 1;
    foreach ($Mahasiswa as $nama => $matkul) {
        echo "<tr>";
        echo "<td style='padding-left: 5px;'>" . $no . "</td>";
        echo "<td style='padding-left: 10px;'>" . $nama . "</td>";
        foreach ($matkul as $matakuliah => $pelajaran) {
            $i = 0;
            foreach ($pelajaran as $hasil => $sks) {
                echo "<td style='padding-left: 10px;'>" . $hasil . "</td>";
                echo "<td style='padding-left: 10px;'>" . $sks . "</td>";
                $jumlah = [];
                if ($i == 0) {
                    for ($j = 0; $j < count($pelajaran); $j++) {
                        array_push($jumlah, $sks);
                    }
                    $jumlah = array_sum($jumlah);
                    echo "<td style='padding-left: 10px;'>" . $jumlah . "</td>";
                    if ($jumlah < 7) {
                        echo "<td style='padding-left: 10px; background-color:red;'>Revisi KRS</td>";
                    } else {
                        echo "<td style='padding-left: 10px; background-color:#32a852;'>Tidak Revisi</td>";
                    }
                } else {
                    echo "<td></td><td></td>";
                }
                if ($i < count($pelajaran) - 1) {
                    echo "<tr><td></td><td style='padding-left: 10px;'></td>";
                }
                $i++;
            }
            echo "</tr>";
        }
        $no++;
        echo "</tr>";
    }
    echo "</table>"
    ?>

</body>

</html>
<head>
    <style type="text/css">
        table {
            border: 1px solid black;
        }
        table, td {
            border: 1px solid black;
        }
        th {
            background: red;
            font-size:25px;
            padding : 15;
        }

    </style>
</head>

<body>

    <?php

    $daftar_hp = array ("S22"=>"Samsung Galaxy S22", "S22+"=>"Samsung Galaxy S22+","A03"=>"Samsung Galaxy A03", "XCOVER_5"=>"Samsung Galaxy Xcover 5");

    ?>

    <table>
        <th>Daftar Smartphone Samsung</th>

        <?php

        foreach ($daftar_hp as $hp) {
            echo "<tr>";
            echo "<td>" . $hp . "</th>";
        }

        ?>
    </table>
</body>
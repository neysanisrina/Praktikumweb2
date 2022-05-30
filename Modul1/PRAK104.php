<head>
    <style type="text/css">
        table {
            border: 1px solid black;
        }
        table, td,th {
            border: 1px solid black;
        }

    </style>
</head>

<body>

    <?php

$daftar_hp = array ('Samsung Galaxy S22', 'Samsung Galaxy S22+','Samsung Galaxy A03','Samsung Galaxy Xcover 5')

    ?>

    <table>
        <th>Daftar Smartphone Samsung</th>

        <?php

         for($i=0; $i<count($daftar_hp); $i++) {
            echo "<tr>";
            echo "<td>" . $daftar_hp[$i] . "</th>";
        }
        ?>
    </table>
</body>
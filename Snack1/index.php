<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

    $games = [
        [
            "casa" => "L.A. CLIPPERS",
            "ospiti" => "LOS ANGELES LAKERS",
            "puntiCasa" => 112,
            "puntiOspiti" => 102
        ],
        [
            "casa" => "HOUSTON ROCKETS",
            "ospiti" => "MILWAUKEE BUCKS",
            "puntiCasa" => 111,
            "puntiOspiti" => 117
        ],
        [
            "casa" => "MEMPHIS GRIZZLIES",
            "ospiti" => "BROOKLYN NETS",
            "puntiCasa" => 134,
            "puntiOspiti" => 133
        ],
        [
            "casa" => "DALLAS MAVERICKS",
            "ospiti" => "LOS ANGELES LAKERS",
            "puntiCasa" => 110,
            "puntiOspiti" => 119
        ],
    ];

    // var_dump($games);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 1</title>
    </head>
    <body>
        <h1>NBA</h1>
        <?php
            for ($i=0; $i < count($games); $i++) {
                echo "<p>" . $games[$i]["casa"] . " - " . $games[$i]["ospiti"] . " | " . $games[$i]["puntiCasa"] . "-" . $games[$i]["puntiOspiti"] . "</p>";
            }
        ?>
    </body>
</html>
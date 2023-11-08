<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcja liniowa</title>
</head>
<body>
<?php

function funkcjaLiniowa($a, $b, $x) {
    $y = $a * $x + $b;
    return $y;
}

function sprawdzFunkcje($a, $b) {
    if ($a > 0) {
        $opis = "Rosnąca";
    } elseif ($a < 0) {
        $opis = "Malejąca";
    } else {
        $opis = "Stała";
    }

    if ($b > 0) {
        $nadPodOsi = "Nad osią OX";
    } elseif ($b < 0) {
        $nadPodOsi = "Pod osią OX";
    } else {
        $nadPodOsi = "Przecina osią OX";
    }

    $b = ($b == 0) ? 1 : $b;

    return array($opis, $nadPodOsi, $b);
}

$a = rand(-5,5);
$b = rand(-5,5);
$x = rand(-5,5);

$wynik = funkcjaLiniowa($a, $b, $x);
$opis = sprawdzFunkcje($a, $b);

echo "<h4>Dla a=$a, b=$b i x=$x, y = $wynik </h4><br>";
echo "<h5>Funkcja jest " . $opis[0] . "</h5><br>";
echo $opis[1] . "<br>";
echo "<h5>Wartość b: " . $opis[2] . "</h5><br>";

if ($opis[2] < 0) {
    echo "Stała b jest mniejsza od 0 <br>";
    echo '<img src="const2.png" alt="b mniejsze od 0"><br>';
} else {
    if ($opis[0] == "Rosnąca") {
        echo '<img src="rosnaca.png" alt="Rosnąca"><br>';
    } elseif ($opis[0] == "Malejąca") {
        echo '<img src="malejaca.png" alt="Malejąca"><br>';
    } else {
        echo '<img src="const1.png" alt="Stała"><br>';
    }
}
    ?>
</body>
</html>
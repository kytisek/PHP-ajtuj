<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Strona szablon</title>
	<meta charset="UTF-8">
    <style>
        .reds{
            color: red;
            background-color:yellow;
        }
        .blues{
            color: blue;
            background-color: green;
        }
    </style>
</head>
<body>
	<p>Moja pierwsza strona internetowa.</p>
	<p>ąśżćźłó ĄŚŻĆŹŁÓŃ</p>
	<?php
    echo "<h1>znajdz najwiekszy dzielnik liczby roznej od niej samej</h1>";
    $liczba = rand(20, 100);
    echo "liczba = $liczba<br>";


    $dzielnik = 1;
    for ($i=1;$i<$liczba;$i++) {
        if($liczba%$i==0) {
            //$suma = $suma+$i;
            $dzielnik=$i;
        }
    }
    echo "dzielnik = $dzielnik<br>";
        
	?>
</body>
</html>
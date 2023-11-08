<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Strona szablon</title>
	<meta charset="UTF-8">
</head>
<body>
	<p>Moja pierwsza strona internetowa.</p>
	<p>ąśżćźłó ĄŚŻĆŹŁÓŃ</p>
	<?php
		echo"Hello PHP<br>";
        $names = array('Zosia','Basia','Asia', 'Tomek')
        $n = rand(0,3)
        $imie = $names[$n];
        switch($imie) {
        case 'Zosia';
            echo"$imie to Brunetka<br>";
        break;

        case 'Basia';
            echo"$imie to Blondynka<br>";
        break;

        case 'Asia';
            echo"$imie to Szatynka<br>";
        break;
        default:
            echo"Nie ma takiego imienia<br>";
        }
		

	?>
</body>
</html>
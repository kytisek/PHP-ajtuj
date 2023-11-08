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
		echo"<h1>h1Hello PHP</h1>";
        echo"<hr>";
		$janek = rand(1, 4);
		$mirek = rand(1, 4);
        if($janek>$mirek){
            echo"<h1>Wygrał Janek</h1>";
            echo"<img src= img/JANEK.jpg width=200px >";
        } else if($janek<$mirek) {
            echo"<h1>Wygrał Mirek</h1>";
            echo"<img src= img/MIREK.png width=200px>";
        } else {
            echo"<h1>Remis</h1>";
            echo"<img src= img/REMIS.jpg width=200px>";
        }
	?>
</body>
</html>
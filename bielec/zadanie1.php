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
    echo "<h1>suma liczb podz. p. 2 i niepodzielna przez 3 z przedz <100,500></h1>";
    $suma = 0;
    for ($i=100;$i<=500;$i++) {
        if($i%2==0 and $i%3!=0) {
            //$suma = $suma+$i;
            $suma+=$i;
        }
    }
    echo "suma = $suma<br>";
        
	?>
</body>
</html>
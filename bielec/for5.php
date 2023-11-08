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
    $row = 2*rand(5,8);
    $col = $row;
    $p = $row/2;
    echo "w = $row, kol = $col<br>";
    for ($i=1;$i<=$row;$i++) {
        for($j=1;$j<=$col;$j++){
            if($i<=$p and $j<=$p){
                echo "+ ";

            } else{
                echo "* ";
            }
           
        }
        echo"<br>";

    }
        
	?>
</body>
</html>
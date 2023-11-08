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
    $row = rand(5,15);
    $col = rand(5,15);
    echo " <span style=color:red> w = $row</span>,<span style=color:blue> kol = $col</span><br>";
    for ($i=1;$i<=$row;$i++) {
        for($j=1;$j<=$col;$j++){
            if($i%2==0){
                echo"<span class=reds>* </span>";
            }else{
               echo"<span class=blues>* </span>";
            }
        }
        echo"<br>";

    }
        
	?>
</body>
</html>
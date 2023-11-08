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
    $n= rand(10,99);
    echo "Liczba = $n<br>";
    for ($i=1;$i<=$n;$i++) 
        if($n%$i==0) echo "$i ";
        

	
echo "<br>";

	?>
</body>
</html>
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
    echo "<h1>Dni tygodnia</h1>";
    
    for ($n=5;$n<=12;$n=$n+2) {
    echo "$n";
}
    echo "<br>";
    for ($n=20;$n>=1;$n--) {
    echo "$n";
}
    echo "<br>";
    for ($n=1;$n<=20;$n++) {
    echo "*<br>";
}
    for ($n=1;$n<=20;$n++) {
    if ($n%2==0){
        echo "<span style=color:red;font-size:20px;>* </span>";
    } else {
        echo "<span style=color:blue;font-size:20px;>* </span>";
    }
}		
echo "<br>";

	?>
</body>
</html>